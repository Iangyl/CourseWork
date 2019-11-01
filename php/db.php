<?php
    $host = 'localhost';
    $db = 'airbooking';
    $charset = 'utf-8';
    $user = 'root';
    $pass = '';
    $dsn = "mysql:host=localhost;dbname=airbooking";
    $opt = array(
        PDO::ATTR_ERRMODE                   =>             PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE        =>             PDO::FETCH_ASSOC
    );
    $pdo = new PDO($dsn, $user, $pass, $opt);
?>