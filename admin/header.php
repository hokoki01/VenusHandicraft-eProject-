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
<!--  -->



  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Handicrafts</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sign_in.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sign_up.php" >Register</a>
        </li>
      </ul>
      <form class="d-flex" action="header.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success" type="submit" name="ok" value="search">Search</button>
      </form>
    </div>
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
        // $sql = "SELECT * FROM product where Title LIKE '%$search%'";
        $result = mysqli_query($connect, $sql);
        ?>
        <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333333;">
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <li
                    style="display: block;color: white;text-align: center;padding: 16px;text-decoration: none; float: left;">
                    <a style="display: block;color: white;text-align: center;padding: 16px;text-decoration: none;"
                        href="product_detail.php?Id=<?= $row['Id']; ?>">
                        <img src='image_DTB/<?= $row["Image"]; ?>' class='img-responsive'
                            style='width:390px ; height :250px; border: 5px solid white;' alt='Image'><br><br>

                        <h4>
                            <?php echo $row["Title"]; ?>
                        </h4>
                    </a>
                </li>
                <?php
                $i++;
            }

    }
}
?>
  </div>