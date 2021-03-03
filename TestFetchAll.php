<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$sql = "select * from customers";

$statement = $connection->query($sql);

$customer = $statement->fetchAll();

var_dump($customer);

$connection = null;