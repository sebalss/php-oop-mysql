<?php
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "select * from admin where username = :username and password = :password";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

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