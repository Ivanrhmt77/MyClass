<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktikum_9-10";

$conn = new mysqli($servername, $username, $password, $dbname, 3306);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
