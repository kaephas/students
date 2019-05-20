<?php
/*
 * Kaephas Kain
 * /date/
 * /filename/
 * 
 * /description/
 */


//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);


// test upload

//$date = $_POST['date'];
//$timestamp = strtotime($date);
//$bdate = date('Y-m-d', $timestamp);
//
//INSERT INTO myTABLE(bdate) values ($bdate);

require_once 'vendor/autoload.php';

session_start();

//create an instance of the Base class
$f3 = Base:: instance();

//Turn on Fat-free error reporting
$f3->set('DEBUG', 3);

$db = new Database();

//Define a default route
$f3->route('GET /', function ($f3) {
    // things and stuff
    echo 'hello';
});

$f3->run();