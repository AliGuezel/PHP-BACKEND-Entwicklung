<?php

try {
    $driver = new mysqli_driver();
    $driver->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'test';

    $mysqli = new mysqli($hostname, $username, $password, $database);  
    $query  = 'SELECT * FROM news';
    $result = $mysqli->query($query);
    while($row = $result->fetch_assoc()) {
        echo '<pre>';
        print_r($row);
        echo '</pre>';
    }
    
} catch (mysqli_sql_exception $e) {
    echo $e->getMessage();
}
