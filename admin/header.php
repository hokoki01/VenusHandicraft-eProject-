<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Handicrafts</title>
  <link rel="stylesheet" href="styleIndex.css">
  <link rel="stylesheet" href="styleHomepage.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

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

                  <img src='image_DTB/<?= $image = $row['Image']; ?>' class='img-responsive' style='width:20%' alt='Image'>
                </td>
                <td>
                  <?= $row['Description']; ?>
                </td>
                <td>
                  <a href="product_view.php?Id=<?= $row['Id']; ?>" class="btn btn-info btn-sm">View</a>
                  <a href="edit_product.php?Id=<?= $row['Id']; ?>" class="btn btn-success btn-sm">Edit</a>
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
          <a href="user.php" style="Text-decoration : none;color : white;">
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