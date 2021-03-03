<?php
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "retno";
$password = "rahasia";

$sql = "insert into admin (username, password) values(:username, :password)";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

$connection = null;