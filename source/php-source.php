<?php

include_once 'dbConnection.php';

$dbConn = getDBConnection();

/**
 * @input: register form fields
 * @output variables assigned are converted to HTML predefined entities, including quotes, and lowercase
 */

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

function saveData()
{
     global $firstName, $lastName, $email, $phone, $address, $city, $state, $zc, $fs, $hg, $register, $ebmb, $mtsd, $rucb, $ics, $snd, $hhc, $cBox, $pm;
     global $dbConn;

     if (isset($_POST['submit'])) {

        $sql = "INSERT INTO registration (
                    conName,
                    start_date,
                    end_date,
                    year,
                    event_location,
                    city,
                    state,
                    country,
                    website
                ) VALUES (
                :conName, :start_date, :end_date, :year, :event_location, :city, :state, :country, :website
                )";

        $nPara[':conName']  = htmlspecialchars($_POST['conName'], ENT_QUOTES);
        $nPara[':start_date'] = htmlspecialchars($_POST['start_date'], ENT_QUOTES);
        $nPara[':end_date'] = htmlspecialchars($_POST['end_date'], ENT_QUOTES);
        $nPara[':year'] = htmlspecialchars($_POST['year'], ENT_QUOTES);
        $nPara[':event_location'] = htmlspecialchars($_POST['event_location'], ENT_QUOTES);
        $nPara[':city'] = htmlspecialchars($_POST['city'], ENT_QUOTES);
        $nPara[':state'] = htmlspecialchars($_POST['state'], ENT_QUOTES);
        $nPara[':country'] = htmlspecialchars($_POST['country'], ENT_QUOTES);
        $nPara[':website'] = htmlspecialchars(preg_replace("(^https?://)", "", $_POST['website']), ENT_QUOTES);

        $stmt = $dbConn->prepare($sql);
        $stmt->execute($nPara);
        //clear the value - prevent multiple insertions
        $nPara = array();

        sleep(5);
    } //eof if
}


