<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "spims";

$conn = mysqli_connect($server, $username, $password, $db);
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM admin WHERE User='$id'");
header('location:Staff.php');
