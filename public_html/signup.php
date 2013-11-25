<?php
include_once("../resources/database/dbconnect.php");
include_once("../resources/classes/User.php");
$name = $_POST['name'];
$pass = $_POST['password'];
$age = $_POST['age'];
$gender = $_POST['gender'];

$name = "nincs";
$pass = "nemkell";
$gender = "ferfi";
$age = 22;
$user = new User($name,$age,$gender,$pass);

mysql_query("INSERT INTO users (name,age,gender,password) VALUES ('alma','körte','nincs','nemkell');",$connect);

mysql_close($connect);
?>
