<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_register";

$connection = new mysqli($host, $user, $password, $database);

if ($connection->connect_error) {
    die("Database connection failed: " . $connection->connect_error);
}
?>
