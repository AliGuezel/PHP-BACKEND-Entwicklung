<?php

try {
    $dsn = 'mysql:host=localhost;dbname=test;charset=utf8';
    $username = 'root';
    $password = '';

    $pdo = new PDO($dsn, $username, $password);
//    $query = "INSERT INTO news VALUES (null,?,?,?)";
//    $stmt  = $pdo->prepare($query);
//    
//    $title = 'titleB';
//    $slug = 'slugB';
//    $text = 'textB';
//    
//    $stmt->bindParam(1, $title);
//    $stmt->bindParam(2, $slug);
//    $stmt->bindParam(3, $text);
//    
//    $stmt->execute();
    
    $query = "INSERT INTO news VALUES (null,:title,:slug,:text)";
    $stmt  = $pdo->prepare($query);
    
    $title = 'titleC';
    $slug = 'slugC';
    $text = 'textC';
    
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':slug', $slug);
    $stmt->bindParam(':text', $text);
    
    $stmt->execute();    
    
} catch (PDOException $e) {
    echo $e->getMessage();
}

