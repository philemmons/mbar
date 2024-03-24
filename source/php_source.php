<?php

include_once 'dbConnection.php';

$dbConn = getDBConnection();

/**
 * @input: register form fields
 * @output variables assigned are converted to HTML predefined entities, including quotes, and lowercase
 */
function regFormData($total)
{
     global $firstName, $lastName, $badgeName, $email, $phone, $address, $city, $state, $zc, $fs, $hg, $register, $ebmb, $mtsd, $rucb, $ics, $snd, $hhc, $cBox, $pm, $total;

     $firstName = isset($_POST['firstName']) ? strtolower(htmlspecialchars($_POST['firstName'], ENT_QUOTES)) : '';
     $lastName = isset($_POST['lastName']) ? strtolower(htmlspecialchars($_POST['lastName'], ENT_QUOTES)) : '';
     $badgeName = isset($_POST['badgeName']) ? strtolower(htmlspecialchars($_POST['badgeName'], ENT_QUOTES)) : '';
     $email = isset($_POST['myEmail']) ? strtolower(htmlspecialchars($_POST['myEmail'], ENT_QUOTES)) : '';
     $phone = isset($_POST['myPhone']) ? strtolower(htmlspecialchars($_POST['myPhone'], ENT_QUOTES)) : '';
     $address = isset($_POST['myAddress']) ? strtolower(htmlspecialchars($_POST['myAddress'], ENT_QUOTES)) : '';
     $city = isset($_POST['myCity']) ? strtolower(htmlspecialchars($_POST['myCity'], ENT_QUOTES)) : '';
     $state = isset($_POST['myState']) ? strtolower(htmlspecialchars($_POST['myState'], ENT_QUOTES)) : '';
     $zc = isset($_POST['myZipcode']) ? strtolower(htmlspecialchars($_POST['myZipcode'], ENT_QUOTES)) : '';
     $fs = isset($_POST['myFellowship']) ? strtolower(htmlspecialchars($_POST['myFellowship'], ENT_QUOTES)) : '';
     $hg = isset($_POST['myHomegroup']) ? strtolower(htmlspecialchars($_POST['myHomegroup'], ENT_QUOTES)) : '';
     $register = isset($_POST['myRegistration']) ? strtolower(htmlspecialchars($_POST['myRegistration'], ENT_QUOTES)) : '';
     $ebmb = isset($_POST['earlyBirdMealBundle']) ? strtolower(htmlspecialchars($_POST['earlyBirdMealBundle'], ENT_QUOTES)) : '';
     $mtsd = isset($_POST['meetTheSpeakerDinner']) ? strtolower(htmlspecialchars($_POST['meetTheSpeakerDinner'], ENT_QUOTES)) : '';
     $rucb = isset($_POST['roundupContinentalBreakfast']) ? strtolower(htmlspecialchars($_POST['roundupContinentalBreakfast'], ENT_QUOTES)) : '';
     $ics = isset($_POST['iceCreamSocial']) ? strtolower(htmlspecialchars($_POST['iceCreamSocial'], ENT_QUOTES)) : '';
     $snd = isset($_POST['saturdayNightDance']) ? strtolower(htmlspecialchars($_POST['saturdayNightDance'], ENT_QUOTES)) : '';
     $hhc = isset($_POST['helpingHandContribution']) ? strtolower(htmlspecialchars($_POST['helpingHandContribution'], ENT_QUOTES)) : '';
     $cBox = isset($_POST['paymentCheckBox']) ? strtolower(htmlspecialchars($_POST['paymentCheckBox'], ENT_QUOTES)) : '';
     $pm = isset($_POST['paymentMethod']) ? strtolower(htmlspecialchars($_POST['paymentMethod'], ENT_QUOTES)) : '';

     saveData($total);
}


function getTotal($register, $ebmb, $mtsd, $rucb, $ics, $hhc)
{
     $amount = 0.00;

     if ($register == "before") {
          $amount += 45.0;
     } else {
          $amount += 50.0;
     }

     if ($ebmb == "yes") {
          $amount += 35.0;
     }

     if ($mtsd == "yes") {
          $amount += 25.0;
     }

     if ($rucb == "yes") {
          $amount += 10.0;
     }

     if ($ics == "yes") {
          $amount += 5.0;
     }

     switch ($hhc) {
          case "100":
               $amount += 100.0;
               break;
          case "50":
               $amount += 50.0;
               break;
          case "45":
               $amount += 45.0;
               break;
          case "35":
               $amount += 35.0;
               break;
          case "20":
               $amount += 20.0;
               break;
          case "10":
               $amount += 10.0;
               break;
          case "5":
               $amount += 5.0;
               break;
          default:
               $amount += 0.0;
     }

     return $amount;
}

/*
*@input: PDO sql string to be processed with or without parameterized variable(s)
*@output: table from the sql query
*/
function preExeFet($sql)
{
     global $dbConn, $nPara;

     $stmt = $dbConn->prepare($sql);
     $stmt->execute($nPara);
     $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
     return $records;
}

function preExeFetNOPARA($sql)
{
     global $dbConn;

     $stmt = $dbConn->prepare($sql);
     $stmt->execute();
     $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
     return $records;
}



/*
*@input: Name of the database table 
*@output: all contents of device table for the user in ascending numerical order
*/
function getInfo($table)
{
     $sql = "SELECT * FROM " . $table . " ORDER BY id ASC";
     return preExeFetNOPARA($sql);
}

function getUserInfo($email)
{
     global $dbConn, $nPara;

     $nPara[':dEmail'] = $email;
     $sql = "SELECT * FROM registration WHERE id = :dEmail ";
     $stmt = $dbConn->prepare($sql);
     $stmt->execute($nPara);
     $record = $stmt->fetch(PDO::FETCH_ASSOC);
     return $record;
}

/*
*@input: Name of the database table - registration
*@output: all contents of registration table for the user by ascending date with TBA values last
*/
function getRegData($table)
{
     $sql = "SELECT *, DATE_FORMAT(datetime, '%m-%d-%y') AS result FROM " . $table . " ORDER BY result IS NULL , result ASC";
     return preExeFetNOPARA($sql);
}

/*
*@input: Name of the database table - registration
*@output: Name to appear, homegroup and fellowship of the user by ascending badge name.
*/
function getBadgeData($table)
{
     $sql = "SELECT CONCAT( UPPER(SUBSTRING(t1.bName, 1, 1)), SUBSTRING(bName, 2, LENGTH(t1.bName)) ) AS BName, UPPER(t1.homegroup) AS HGroup, UPPER(t1.fellowship) AS FShip 
     FROM ( 
          SELECT IF( badgename IS NULL OR badgename LIKE '', CONCAT( firstname, ' ', UPPER(SUBSTRING(lastname, 1, 1)), '.' ), badgename ) AS bName, homegroup, fellowship 
          FROM " . $table . "
          ) as t1";

     return preExeFetNOPARA($sql);
}

function saveData($total)
{
     global $firstName, $lastName, $badgeName, $email, $phone, $address, $city, $state, $zc, $fs, $hg, $register, $ebmb, $mtsd, $rucb, $ics, $snd, $hhc, $cBox, $pm, $total;
     global $dbConn, $nPara;

     if (isset($_POST['submit'])) {

          $sql = "INSERT INTO registration (
                    firstname,
                    lastname,
                    badgename,
                    email,
                    phone,
                    address,
                    city,
                    state,
                    zipcode,
                    fellowship,
                    homegroup,
                    registration,
                    ebmb,
                    speakerdinner,
                    breakfast,
                    icecream,
                    dance,
                    helpinghand,
                    tos,
                    payment,
                    total
                ) VALUES (
                    :firstName, :lastName, :badgeName, :email, :phone, :address, :city, :state, :zc, :fs, :hg, :register, :ebmb, :mtsd, :rucb, :ics, :snd, :hhc, :cBox, :pm, $total
                )";

          $nPara[':firstName'] = $firstName;
          $nPara[':lastName'] = $lastName;
          $nPara[':badgeName'] = $badgeName;
          $nPara[':email'] = $email;
          $nPara[':phone'] = $phone;
          $nPara[':address'] = $address;
          $nPara[':city'] = $city;
          $nPara[':state'] = $state;
          $nPara[':zc'] = $zc;
          $nPara[':fs'] = $fs;
          $nPara[':hg'] = $hg;
          $nPara[':register'] = $register;
          $nPara[':ebmb'] = $ebmb;
          $nPara[':mtsd'] = $mtsd;
          $nPara[':rucb'] = $rucb;
          $nPara[':ics'] = $ics;
          $nPara[':snd'] = $snd;
          $nPara[':hhc'] = $hhc;
          $nPara[':cBox'] = $cBox;
          $nPara[':pm'] = $pm;

          $stmt = $dbConn->prepare($sql);
          $stmt->execute($nPara);
          //clear the value - prevent multiple insertions
          $nPara = array();

          sleep(2);
     } //eof if
}

//login.php
/*
*@input: login process accesssed by login.php with user input
*@output: successful login  directs user to index.php
*Future work - https://stackoverflow.com/questions/20764031/php-salt-and-hash-sha256-for-login-password
*/
function goMain()
{
     global $dbConn, $nPara;

     $userForm = htmlspecialchars($_POST['formUN'], ENT_QUOTES);
     $pwForm = hash('sha256', ($_POST['formPW'] . getenv('PW_SALT')));

     //Prevents SQL injection by using a named parameter.
     $nPara[':username'] = $userForm;
     $nPara[':password'] = $pwForm;

     $sql = "SELECT * FROM admin WHERE userName = :username AND password = :password";

     $statement = $dbConn->prepare($sql);
     $statement->execute($nPara);
     $record = $statement->fetch(PDO::FETCH_ASSOC);

     if (empty($record)) { //wrong credentials
          echo "<form method='POST' action='_login.php'>";
          echo "<br><span style='color:red'><h4>Wrong username or password.</h4></span>";
          echo "</form>";
     } else {
          $_SESSION["name"] = $record['firstName'] . " " . $record['lastName'];
          $_SESSION["username"]  = $record['userName'];
          $_SESSION["status"] = getenv('LOGIN_STATUS');
          //echo $_SESSION["status"];
          header("Location: _admin.php"); //redirect to login page
     }
}

//regInsert.php and regUpdate.php
function getRegInfo($regID)
{
     global $dbConn, $nPara;

     $nPara[':dRegId'] = $regID;
     $sql = "SELECT * FROM registration WHERE id = :dRegId ";
     $stmt = $dbConn->prepare($sql);
     $stmt->execute($nPara);
     $record = $stmt->fetch(PDO::FETCH_ASSOC);
     return $record;
}


function formatPhone($phoneNumber)
{
     $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

     if (strlen($phoneNumber) > 10) {
          $countryCode = substr($phoneNumber, 0, strlen($phoneNumber) - 10);
          $areaCode = substr($phoneNumber, -10, 3);
          $nextThree = substr($phoneNumber, -7, 3);
          $lastFour = substr($phoneNumber, -4, 4);

          $phoneNumber = '+' . $countryCode . ' (' . $areaCode . ')' . $nextThree . '-' . $lastFour;
     } else if (strlen($phoneNumber) == 10) {
          $areaCode = substr($phoneNumber, 0, 3);
          $nextThree = substr($phoneNumber, 3, 3);
          $lastFour = substr($phoneNumber, 6, 4);

          $phoneNumber = '(' . $areaCode . ')' . $nextThree . '-' . $lastFour;
     } else if (strlen($phoneNumber) == 7) {
          $nextThree = substr($phoneNumber, 0, 3);
          $lastFour = substr($phoneNumber, 3, 4);

          $phoneNumber = $nextThree . '-' . $lastFour;
     }

     return $phoneNumber;
}



/**
 * 
 * https://stackoverflow.com/questions/518795/dynamically-display-a-csv-file-as-an-html-table-on-a-web-page
 * 
 * function jj_readcsv($filename, $header = false)
{
    $handle = fopen($filename, "r");
    echo '<div class="table-responsive"><table class="table table-sm table-striped table-bordered table-hover">';
    //display header row if true
    if ($header) {
        $csvcontents = fgetcsv($handle);
        echo '<tr>';
        foreach ($csvcontents as $headercolumn) {
            echo "<th>$headercolumn</th>";
        }
        echo '</tr>';
    }
    // displaying contents
    while ($csvcontents = fgetcsv($handle)) {
        echo '<tr>';
        foreach ($csvcontents as $column) {
            echo "<td style='width:1px; white-space:nowrap;'>$column</td>";
        }
        echo '</tr>';
    }
    echo '</table></div>';
    fclose($handle);
}
 */
