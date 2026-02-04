<?php

try {
    $dsn = 'mysql:host=localhost;dbname=test;charset=utf8';
    $username = 'root';
    $password = '';

    $pdo = new PDO($dsn, $username, $password);
    $query  = "SELECT * FROM news";
    $result = $pdo->query($query);
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<pre>';
        print_r($row);
        echo '</pre>';
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
