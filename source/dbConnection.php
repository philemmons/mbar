<?php

function getDBConnection()
{
    $dbHost = getenv('MBAR_DB_HOST');
    $dbUser = getenv('MBAR_DB_USER');
    $dbPW = getenv('MBAR_DB_PW');
    $dbName = getenv('MBAR_DB_NAME');

    try {
        //Creating database connection
        $dbConn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPW);
        // Setting Errorhandling to Exception
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
    } catch (PDOException $e) {
        echo "There was some problem connecting to the database! Error: $e";
        exit();
    }
    return $dbConn;
}

