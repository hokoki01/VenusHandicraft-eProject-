<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Handicrafts</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="admin.php">admin</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span
              class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="admin.php">product list</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li>
          <form action="header.php" method="get" style="padding-top :15px; ">
            <input type="text" name="search" />
            <input type="submit" name="ok" value="search" />
          </form>
        </li>
        <li><a href="sign_up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="sign_in.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>

  <div class="pading">
    <div class="center">

    </div>
    <?php
    if (isset($_REQUEST['ok'])) {
      $search = addslashes($_GET['search']);
      if (empty($search)) {
        echo "Yeu cau nhap du lieu vao o trong";
      } else {
        include 'connect_db.php';
        $sql = "SELECT * FROM product where Id = $search";
        $result = mysqli_query($connect, $sql);
        include 'show_product.php';
      }
    }
    ?>
  </div>