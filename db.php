<?php
$host = "localhost";
$user = "it58160412";
$password = "it58160412";
$dbname = "it58160412";
$conn = new mysqli($host, $user, $password, $dbname);
$conn->query('SET NAMES UTF8');
if ($conn->connect_error) die($conn->connect_error);
?>