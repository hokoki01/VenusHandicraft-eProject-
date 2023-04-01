<?php
   session_start();
   unset($_SESSION["name"]);
   unset($_SESSION["password"]);
   header('Refresh: 2; URL = sign_in.php');
?>