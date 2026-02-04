<?php

try {
    $driver = new mysqli_driver();
    $driver->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'test';

    $mysqli = new mysqli($hostname, $username, $password, $database);  
    $mysqli->begin_transaction();
    
    $query = "INSERT INTO news VALUES (null,'a1','a2','a3')";
    $mysqli->query($query);
    
    $query = "INSERT INTO news VALUES (null,'b1','b2','b3')";
    $mysqli->query($query);
    $mysqli->commit();
    echo 'COMMIT';
} catch (mysqli_sql_exception $e) {
    $mysqli->rollback();
    echo 'ROLLBACK';
}

