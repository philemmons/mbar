<?php
session_start();
/* Update SQL query with named parameters that prevent SQL injection */

if (!isset($_SESSION["status"]) || ($_SESSION['status'] != getenv('LOGIN_STATUS'))) {  //Check whether the admin has logged in
    header("Location: _login.php");
}

include_once 'source/dbConnection.php';

$dbConn = getDBConnection();

$nPara[':dRegId'] = $_GET['id'];
$sql = "DELETE FROM registration
            WHERE id = :dRegId ";
//echo $sql;
$stmt = $dbConn->prepare($sql);
$stmt->execute($nPara);

header("Location: _admin.php");
exit();
