

<?php
include 'header.php';
require 'connect_db.php';
?>
<div class="container mt-4">
  <form class="d-flex" action="header.php" method="get">
    <input class="form-control me-3" type="number" placeholder="Search" aria-label="Search" name="search" required>
    <button class="btn btn-outline-success" type="submit" name="ok" value="search">Search</button>
  </form>
</div>
<style>
  .d {
    padding-left: 5%;
    padding-right: 5%;
  }
</style>
<div class="row d">


  <table class="table table-bordered table-striped " style="border : 1 solid black;">

    <tbody>
      <?php
      require 'connect_db.php';
      if (isset($_REQUEST['ok'])) {
        $search = addslashes($_GET['search']);
        if (empty($search)) {
          echo "Yeu cau nhap du lieu vao o trong";
        } else {
          include 'connect_db.php';
          $sql = "SELECT * FROM product where Id = $search ";
          $result = mysqli_query($connect, $sql);
          ?>
          <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #fff;">
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
              ?>
              <tr>
                <td>
                  <?= $row['Id']; ?>
                </td>
                <td>
                  <?= $row['Category_id']; ?>
                </td>
                <td>
                  <?= $row['Title']; ?>
                </td>
                <td>

                  <img src='image_DTB/<?= $image = $row['Image']; ?>' class='img-responsive' style='width:60%' alt='Image'>
                </td>
                <td>
                  <?= $row['Description']; ?>
                </td>
                <td>
                  <a href="product_view.php?Id=<?= $row['Id']; ?>" class="btn btn-info btn-sm">View</a>
                </td>
                <td>
                  <a href="edit_product.php?Id=<?= $row['Id']; ?>" class="btn btn-success btn-sm">Edit</a>
                </td>
                <td>
                  <form action="code.php" method="POST" class="d-inline">
                    <button type="submit" name="delete_student" value="<?= $row['Id']; ?>"
                      class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </td>
              </tr>
              <?php
              $i++;
            }

        }
      }
      ?>
      </ul>
    </tbody>

  </table>
</div>
</div>
<div id="main">
  <style>
    body {
      font-family: "Lato", sans-serif;
    }

    .sidebar {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidebar a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidebar a:hover {
      color: #f1f1f1;
    }

    .sidebar .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    .openbtn {
      font-size: 20px;
      cursor: pointer;
      background-color: #111;
      color: white;
      padding: 10px 15px;
      border: none;
    }

    .openbtn:hover {
      background-color: #444;
    }

    #main {
      transition: margin-left .5s;
      padding: 16px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
      .sidebar {
        padding-top: 15px;
      }

      .sidebar a {
        font-size: 18px;
      }
    }
  </style>
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="admin.php">Home</a>
    <a href="Sign_up.php">Register</a>
    <a href="Sign_in.php">Login</a>
    <a href="logout.php">Logout</a>
    <a href="user.php">User</a>
    <a href="Contact.php">Contact</a>
    <a href="admin.php">Product list</a>

  </div>


  <button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>

  <div class="container mt-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm bg-warning text-white p-3">
          <a href="admin.php" style="Text-decoration : none;color : white;">
            <h1>Product</h1>
            <h3 style="text-align:  left;">
              <?php $result = mysqli_query($connect, "SELECT * FROM product");
              $i = 0;
              while ($row = mysqli_fetch_array($result)) {
                $i++;
              }
              echo $i; ?>
            </h3>
          </a>
        </div>
        <div class="col-sm bg-success text-white p-3">
          <a href="user.php">
            <h1>Subscribe</h1>
            <h3 style="text-align:  left;">
              <?php $result = mysqli_query($connect, "SELECT * FROM user");
              $i = 0;
              while ($row = mysqli_fetch_array($result)) {
                $i++;
              }
              echo $i; ?>
            </h3>
          </a>
        </div>
        <div class="col-sm bg-info text-white p-3">
          <a href="Contact.php" style="Text-decoration : none;color : white;">
            <h1>contact</h1>
            <h3 style="text-align:  left;">
              <?php $result = mysqli_query($connect, "SELECT * FROM contact");
              $i = 0;
              while ($row = mysqli_fetch_array($result)) {
                $i++;
              }
              echo $i; ?>
            </h3>
          </a>
        </div>
        <div class="col-sm bg-danger text-white p-3">
          <h1>Admin</h1>
          <h3 style="text-align:  left;">
            <?php $result = mysqli_query($connect, "SELECT * FROM admin");
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
              $i++;
            }
            echo $i; ?>
          </h3>
        </div>
      </div>
    </div><br>

    <h4>Product
      <a href="add_new_product.php" class="btn btn-primary float-end">Add Product</a>
    </h4><br>
    <?php include('message.php');
    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 9;
    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($current_page - 1) * $item_per_page;
    $total_records = mysqli_query($connect, "SELECT * FROM product"); ?>


    <div class="c">


      <table class="table table-bordered table-striped" style="border : 1 solid black;">
        <thead>
          <tr>
            <th>ID</th>
            <!-- <th>Category</th> -->
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php

          $query = "SELECT * FROM product LIMIT " . $item_per_page . " OFFSET $offset";
          $query_run = mysqli_query($connect, $query);


          if (mysqli_num_rows($query_run) > 0) {
            foreach ($query_run as $product) {
              ?>
              <tr>
                <td>
                  <?= $product['Id']; ?>
                </td>
                <!-- <td>
                    <?= $product['Category_id']; ?>
                  </td> -->
                <td>
                  <?= $product['Title']; ?>
                </td>
                <td>

                  <img src='image_DTB/<?= $image = $product['Image']; ?>' class='img-responsive' style='width:20%'
                    alt='Image'>
                </td>
                <td>
                  <?= $product['Description']; ?>
                </td>
                <td>
                  <a href="product_view.php?Id=<?= $product['Id']; ?>" class="btn btn-info btn-sm">View</a><br>
                  <a href="edit_product.php?Id=<?= $product['Id']; ?>" class="btn btn-success btn-sm">Edit</a><br>
                  <form action="code.php" method="POST" class="d-inline">
                    <button type="submit" name="delete_student" value="<?= $product['Id']; ?>"
                      class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </td>
              </tr>
              <?php
            }
          } else {
            echo "<h5> No Record Found </h5>";
          }
          ?>

        </tbody>
      </table>
      <div class="col-md-12">
        <?php
        $total_records = $total_records->num_rows;
        $total_page = ceil($total_records / $item_per_page);
        for ($num = 1; $num <= $total_page; $num++) {
          ?>
          <a href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>" class="btn btn-outline-success float-end"><?= $num ?></a>
          <?php

        }
        ?>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>

    <script>
      function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
      }
    </script>


  </div>
</div>
</body>

</html>