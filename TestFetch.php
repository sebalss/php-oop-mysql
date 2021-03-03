<?php
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "retno";
$password = "rahasia";

$sql = "select * from admin where username = :username and password = :password";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();



if($row = $statement->fetch()){
    echo "Sukses Login : " . $row["username"] . PHP_EOL;
}else{
    echo "Gagal Login" . PHP_EOL;
}

var_dump($statement->fetch());

$connection = null;