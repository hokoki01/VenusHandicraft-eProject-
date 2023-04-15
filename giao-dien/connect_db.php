<?php
$servername = "localhost";
$database = "Handicrafts";
$username = "root";
<<<<<<< HEAD
$password = "012345678";
=======
$password = "123456";
>>>>>>> ce5ba4640dd5f9d8e2b25a3c88127cbddfdab35b
$connect = mysqli_connect($servername, $username, $password, $database);

if (!$connect) {
    die("Không kết nối :" . mysqli_connect_error());
    // exit();
}
?>