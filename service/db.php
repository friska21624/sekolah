<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "mk";

$conn = new mysqli($hostname, $username, $password);

if ($conn->connect_error) {
    die("error!" . $conn->connect_error);   
}

$sql = "CREATE DATABASE IF NOT EXISTS $db";
if ($conn->query($sql) === TRUE) {
    echo "Database Exist";
 } else {
    die("Error membuat table " . $conn->error);
 }

 $conn->select_db($db);

 $sql = "CREATE TABLE IF NOT EXISTS daftar_nilai (
    nisn INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    kelas VARCHAR(255),
    nilai int(3)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created";
} else {
    die("Error create table". $conn->error);
}
$conn->close();
header("../belajarr2.php");