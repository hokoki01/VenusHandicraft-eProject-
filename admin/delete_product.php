<?php
require 'admin.php';
include 'connect_db.php';
mysqli_query($connnect,"DELETE FROM product WHERE Id='$_REQUEST[Id]'");
header('location: admin.php');