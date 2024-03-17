<?php
ob_start();
session_start();
/**
 * https://www.codexworld.com/export-data-to-csv-file-using-php-mysql/
 */

// Load the database configuration file 
include_once 'source/dbConnection.php';
include_once 'source/php_source.php';

// Fetch records from database 
$regArray = getBadgeData('registration');

if (count($regArray) > 0) {
    $delimiter = ",";
    $filename = "badge-data_" . date('Y-m-d') . ".csv";

    // Create a file pointer 
    $f = fopen('php://memory', 'w');

    // Set column headers 
    $fields = array('First', 'Last', 'Badge Name', 'Home Group', 'Fellowship');

    fputcsv($f, $fields, $delimiter);

    // Output each row of the data, format line as csv and write to file pointer 
    foreach ($regArray as $eachReg) {

        $lineData = array(
            $eachReg['firstname'],
            $eachReg['lastname'],
            $eachReg['badgename'],
            $eachReg['homegroup'],
            $eachReg['fellowship']
        );

        fputcsv($f, $lineData, $delimiter);
    }

    // Move back to beginning of file 
    fseek($f, 0);

    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    //output all remaining data on a file pointer 
    fpassthru($f);
}
exit;
