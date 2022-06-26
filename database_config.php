<?php
session_start();
$hostname= "localhost";
$user = "kolka";
$password= "aVD*XpwR4YEkNHn";
$database = "kolka";
$conn = new mysqli($hostname, $user, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>