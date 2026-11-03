<?php
$host = "localhost";
$username = "root"; // change if your MySQL user is different
$password = "";     // change if you have a MySQL password
$dbname = "task_db";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>