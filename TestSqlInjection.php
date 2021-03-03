<?php
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

//$username = $connection->quote("admin'; #"); //sqlinjection menggunakan '; #
$username = $connection->quote("admin"); //sqlinjection menggunakan '; #
$password = $connection->quote("admin");
$sql = "select * from admin where username = $username and password=$password";

// echo $sql . PHP_EOL; // Mengecek sql injection, password tidak terdetect karena dimatikan oleh tanda pagar #

$statement = $connection->query($sql);

$success = false;
$find_user = null;

foreach ($statement as $row){
    $success = true;
    $find_user = $row["username"];
}

if($success){
    echo "Sukses Login : " . $find_user . PHP_EOL;
}else{
    echo "Gagal Login" . PHP_EOL;
}

$connection = null;