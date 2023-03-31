<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   // echo 'BẠN ĐÃ ĐĂNG XUẤT THÀNH CÔNG ';
   header('Refresh: 2; URL = sign_in.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>logout</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- <link rel="stylesheet" href="web.css"> -->
</head>

<body>
   <h1>BẠN ĐÃ ĐĂNG XUẤT THÀNH CÔNG</h1>
   <h2>XIN CẢM ƠN</h2>
</body>

</html>