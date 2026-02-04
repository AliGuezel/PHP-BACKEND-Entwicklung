<?php

try {
    $dsn = 'mysql:host=localhost;dbname=test;charset=utf8';
    $username = 'root';
    $password = '';

    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->beginTransaction();
    
    $query = "INSERT INTO news VALUES (null,'c1','c2','c3')";
    $pdo->exec($query);
    
    $query = "INSERT INTO news VALUES (null,'d1','d2','d3')";
    $pdo->exec($query);
    $pdo->commit();
    echo 'COMMIT';
    
} catch (PDOException $e) {
    //$pdo->rollBack();
    echo 'ROLLBACK';
}
