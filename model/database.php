<?php
/*
 * Kaephas Kain
 * 5-20-19
 * database.php
 *
 * Database class
 */

require '/home/kaephasg/config.php';

class Database
{
    private $_dbh;

    function __construct()
    {
        $this->connect();
    }

    function connect()
    {
        try {
            // instantiate a database object
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            echo 'Connected to database';
            return $this->_dbh;
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}