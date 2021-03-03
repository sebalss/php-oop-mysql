<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email,comment) values('idris@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email,comment) values('alfuardi@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email,comment) values('ohang@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email,comment) values('akiki@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email,comment) values('rafita@test.com', 'hi')");

$connection->rollBack();

$connection = null;