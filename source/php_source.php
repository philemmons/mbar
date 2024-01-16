<?php

include_once 'dbConnection.php';

$dbConn = getDBConnection();

/**
 * @input: register form fields
 * @output variables assigned are converted to HTML predefined entities, including quotes, and lowercase
 */
function regFormData($total)
{
     global $firstName, $lastName, $email, $phone, $address, $city, $state, $zc, $fs, $hg, $register, $ebmb, $mtsd, $rucb, $ics, $snd, $hhc, $cBox, $pm, $total;

     $firstName = isset($_POST['reg-fn']) ? strtolower(htmlspecialchars($_POST['reg-fn'], ENT_QUOTES)) : '';
     $lastName = isset($_POST['reg-ln']) ? strtolower(htmlspecialchars($_POST['reg-ln'], ENT_QUOTES)) : '';
     $email = isset($_POST['reg-em']) ? strtolower(htmlspecialchars($_POST['reg-em'], ENT_QUOTES)) : '';
     $phone = isset($_POST['reg-phone']) ? strtolower(htmlspecialchars($_POST['reg-phone'], ENT_QUOTES)) : '';
     $address = isset($_POST['reg-addr']) ? strtolower(htmlspecialchars($_POST['reg-addr'], ENT_QUOTES)) : '';
     $city = isset($_POST['reg-city']) ? strtolower(htmlspecialchars($_POST['reg-city'], ENT_QUOTES)) : '';
     $state = isset($_POST['reg-state']) ? strtolower(htmlspecialchars($_POST['reg-state'], ENT_QUOTES)) : '';
     $zc = isset($_POST['reg-zc']) ? strtolower(htmlspecialchars($_POST['reg-zc'], ENT_QUOTES)) : '';
     $fs = isset($_POST['reg-fs']) ? strtolower(htmlspecialchars($_POST['reg-fs'], ENT_QUOTES)) : '';
     $hg = isset($_POST['reg-hg']) ? strtolower(htmlspecialchars($_POST['reg-hg'], ENT_QUOTES)) : '';
     $register = isset($_POST['radio-stacked']) ? strtolower(htmlspecialchars($_POST['radio-stacked'], ENT_QUOTES)) : '';
     $ebmb = isset($_POST['reg-ebmb']) ? strtolower(htmlspecialchars($_POST['reg-ebmb'], ENT_QUOTES)) : '';
     $mtsd = isset($_POST['reg-mtsd']) ? strtolower(htmlspecialchars($_POST['reg-mtsd'], ENT_QUOTES)) : '';
     $rucb = isset($_POST['reg-rucb']) ? strtolower(htmlspecialchars($_POST['reg-rucb'], ENT_QUOTES)) : '';
     $ics = isset($_POST['reg-ics']) ? strtolower(htmlspecialchars($_POST['reg-ics'], ENT_QUOTES)) : '';
     $snd = isset($_POST['reg-snd']) ? strtolower(htmlspecialchars($_POST['reg-snd'], ENT_QUOTES)) : '';
     $hhc = isset($_POST['reg-hhc']) ? strtolower(htmlspecialchars($_POST['reg-hhc'], ENT_QUOTES)) : '';
     $cBox = isset($_POST['reg-cBox']) ? strtolower(htmlspecialchars($_POST['reg-cBox'], ENT_QUOTES)) : '';
     $pm = isset($_POST['reg-pm']) ? strtolower(htmlspecialchars($_POST['reg-pm'], ENT_QUOTES)) : '';

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

function saveData($total)
{
     global $firstName, $lastName, $email, $phone, $address, $city, $state, $zc, $fs, $hg, $register, $ebmb, $mtsd, $rucb, $ics, $snd, $hhc, $cBox, $pm, $total;
     global $dbConn, $nPara;

     if (isset($_POST['submit'])) {

          $sql = "INSERT INTO registration (
                    firstname,
                    lastname,
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
                    :firstName, :lastName, :email, :phone, :address, :city, :state, :zc, :fs, :hg, :register, :ebmb, :mtsd, :rucb, :ics, :snd, :hhc, :cBox, :pm, $total
                )";

          $nPara[':firstName'] = $firstName;
          $nPara[':lastName'] = $lastName;
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
