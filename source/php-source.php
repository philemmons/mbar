<?php

include_once 'dbConnection.php';

$dbConn = getDBConnection();

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

function saveData(){
     echo $firstName; die();
}