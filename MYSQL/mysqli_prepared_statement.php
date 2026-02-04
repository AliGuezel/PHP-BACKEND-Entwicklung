<?php

try {
    $driver = new mysqli_driver();
    $driver->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'test';

    $mysqli = new mysqli($hostname, $username, $password, $database);  
    $query = "INSERT INTO news VALUES (null,?,?,?)";
    $stmt = $mysqli->prepare($query);
    
    $title = 'titleA';
    $slug = 'slugA';
    $text = 'textA';
    
    $stmt->bind_param('sss', $title, $slug, $text);
    $stmt->execute();   
    
    
} catch (mysqli_sql_exception $e) {
    echo $e->getMessage();
}

