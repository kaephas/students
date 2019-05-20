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


require '/home/kaephasg/config.php';

try {
    // instantiate a database object
    $dbh = new PDO(DB_DSN, '' . DB_USERNAME . '', DB_PASSWORD);
    echo 'Connected to database';
} catch(PDOException $e){
    echo $e->getMessage();
}

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

//Define a default route
$f3->route('GET /', function ($f3) {
    // things and stuff
});

$f3->run();