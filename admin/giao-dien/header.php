<!DOCTYPE html>
<html lang="en">
<?php
// include 'header.php';
require 'connect_db.php';
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Handicrafts</title>

  <link rel="stylesheet" href="styleHomepage.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <style>
    /* modify cho navbar */
    .navbar-nav .nav-item {
      padding-right: 40px;
    }

    ul.dropdown-menu.show {
      margin: 0;
      padding: 0;
      /* border-radius:0; */
    }

    /* cho phần form Search bar */
    .submitBTN {
      border-top-right-radius: 5px;
      border-bottom-right-radius: 5px;
      color: white;
      background-color: #FFD300;
      border: none;
      width: 40px;
    }

    .inputBOX {
      border-top-left-radius: 5px;
      border-bottom-left-radius: 5px;
      border: solid black 0px;
      text-indent: 5px;
      padding: 5px;
    }

    /* xoá hiệu ứng border khi ấn vào ô input */
    input:focus,
    textarea:focus,
    select:focus {
      outline: none;
    }

    form.d-flex {
      margin-bottom: 0px;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg  fixed-top ">
    <div class="container-fluid">
      <!-- <div class="row"> -->
      <!-- <div class="col-sm-12"> -->
      <a class="navbar-brand" href="Home.php">

        <span style="color: white;font-family: bradley hand,cursive;"><i class="bi bi-scissors"
            style="color:white"></i>Venus Handicrafts<i class="bi bi-brush" style="color:white"></i></span></a>

      <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="toggler-icon top-bar"></span>
        <span class="toggler-icon middle-bar"></span>
        <span class="toggler-icon bottom-bar"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll ms-auto" style="--bs-scroll-height: 500px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="product.php" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Our Products
            </a>
            <ul class="dropdown-menu">
              <?php

              $query = "SELECT * FROM category";
              $query_run = mysqli_query($connect, $query);


              if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $category) {
                  ?>
                  <li><a class="dropdown-item" href="product_category.php?Id=<?= $category['Id']; ?>">
                      <?= $category['category_name']; ?>
                    </a></li>
                  <!--  -->
                  <?php
                }
              } else {
                echo "<h5> No Record Found </h5>";
              }
              ?>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>

        <form class="d-flex" action="header.php" method="get">
          <input class="inputBOX" style="width:282px" type="text" name="search" placeholder=" Type Here..." required />
          <button class="submitBTN" id="submit" type="submit" name="ok"><i class="bi bi-search"></i></button>

        </form>


      </div>
      <!-- </div> -->
      <!-- </div> -->
    </div>
  </nav>
  <script language="javascript">
    var button = document.getElementById("submit");
    button.onclick = function () {
      alert("submitt success !");
    }
  </script>
  </div>

  <?php
  if (isset($_REQUEST['ok'])) {
    $search = addslashes($_GET['search']);
    if (empty($search)) {
      echo "Yeu cau nhap du lieu vao o trong";
    } else {
      include 'connect_db.php';
      echo '<br><br><br>';

      $sql = "SELECT * FROM product where Title like '%$search%'";
      $result = mysqli_query($connect, $sql);
      if (mysqli_num_rows($result) > 0) {
        echo "&ensp;&ensp;<h3>Are you looking for this product?</h3>";
        while ($row = mysqli_fetch_array($result)) {
          ?>
          <li style="display: block;color: black;text-align: center;padding: 16px;text-decoration: none; float: left;"> <a
              style="display: block;color: black;text-align: center;padding: 16px;text-decoration: none;"
              href="product_detail.php?Id=<?= $row['Id']; ?>">
              <img src='image_DTB/<?= $row["Image"]; ?>' class='img-responsive'
                style='width:430px ; height :300px; border: 5px solid blue;' alt='Image'><br><br>
              <h4>
                <?php echo $row["Title"]; ?>
              </h4>
            </a></li>
          <?php
        }

      } else {
        echo '&ensp;&ensp;<h3>Not found what you looking for</h3>';
      }

    }
  }
  ?>





  </div>