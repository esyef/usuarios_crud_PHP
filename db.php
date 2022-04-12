<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

require __DIR__.'/vendor/autoload.php';
$ENV = Dotenv\Dotenv::createImmutable(__DIR__)->load();
$PWD = $_ENV['DB_PWD'];
$USER = $_ENV['DB_USER'];
$DB = $_ENV['DB_NAME'];

// create db coneection
    $conn = mysqli_connect(
        'localhost',
        $USER,
        $PWD,
        $DB
    );

    if(!$conn) {
        echo 'Error: No se pudo conectar a MySQL.' . PHP_EOL;
    }

?>