<?php
session_start();
/**
 * https://www.codexworld.com/export-data-to-csv-file-using-php-mysql/
 */

// Load the database configuration file 
include_once 'source/dbConnection.php';
include_once 'source/php_source.php';

// Fetch records from database 
$regArray = getRegData('registration', 'asc');

if (count($regArray) > 0) {
    $delimiter = ",";
    $filename = "registration-data_" . date('Y-m-d') . ".csv";

    // Create a file pointer 
    $f = fopen('php://memory', 'w');

    // Set column headers 
    $fields = array(
        'Date',
        'LAST Name',
        'FIRST name',
        'Badge name',
        'Telephone Num',
        'Email',
        'Street Address',
        'City',
        'State',
        'Zip Code',
        'Fellowship',
        'Language',
        'Home Group',
        'Amount Paid',
        'How Many',
        'Register Type',
        'Register Price',
        'Meal Bundle',
        'Dinner Only',
        'Breakfast Only',
        'Ice Cream Only',
        'Dance Only',
        'Helping Hand',
        'T-Shirt Size',
        'T-Shirt Quantity',
        'Merch Total',
        'Amount Due',
        'Total Payments',
        'PAYMENT',
        'Status',
        'NOTES'
    );

    fputcsv($f, $fields, $delimiter);

    // Output each row of the data, format line as csv and write to file pointer 
    foreach ($regArray as $eachReg) {

        $lineData = array(
            $eachReg['result'],

            ucfirst($eachReg['lastname']),

            ucfirst($eachReg['firstname']),
         
            mb_convert_case($eachReg['badgename'], MB_CASE_TITLE,'utf-8'),

            formatPhone($eachReg['phone']),

            $eachReg['email'],

            mb_convert_case($eachReg['address'], MB_CASE_TITLE,'utf-8'),

            mb_convert_case($eachReg['city'], MB_CASE_TITLE,'utf-8'),

            strtoupper($eachReg['state']),

            $eachReg['zipcode'],

            caseFellowship($eachReg['fellowship']),

            strtoupper($eachReg['lang']),

            mb_convert_case($eachReg['homegroup'], MB_CASE_TITLE,'utf-8'),

            $eachReg['paid'],

            NULL,

            strtoupper($eachReg['registration']),

            NULL,

            oneOrBlank($eachReg['ebmb']),

            oneOrBlank($eachReg['speakerdinner']),

            oneOrBlank($eachReg['breakfast']),

            oneOrBlank($eachReg['icecream']),

            oneOrBlank($eachReg['dance']),

            noThankYou($eachReg['helpinghand']),

            $eachReg['teesize'],

            $eachReg['teequan'],

            NULL,

            NULL,

            NULL,

            $eachReg['payment'],

            $eachReg['rstatus'],

            $eachReg['verification']
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
