<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = "select * from customers";

$statement = $connection->query($sql);

foreach ($statement as $row){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];

    echo "ID : $id" . PHP_EOL;
    echo "Name : $name" . PHP_EOL;
    echo "Email : $email" . PHP_EOL;
}

$connection = null;