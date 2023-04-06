<?php
$servername = "localhost";
$database = "handicrafts";
$username = "root";
$password = "12345678";
$connect = mysqli_connect($servername, $username, $password, $database);

if (!$connect) {
    die("Không kết nối :" . mysqli_connect_error());
    // exit();
}
?>