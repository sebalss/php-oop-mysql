<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";



try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username , $password);
    echo "Sukses terkoneksi dengan database MySQL" . PHP_EOL;

    //menutup koneksi
    $connection = null;
}catch (PDOException $exception){
    echo "Error terkoneksi ke Database : " . $exception->getMessage() . PHP_EOL;
}

