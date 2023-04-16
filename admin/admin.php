<?php include('header.php');
$item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 2;
$current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
$offset = ($current_page - 1) * $item_per_page;
$total_records = mysqli_query($connect, "SELECT * FROM product");
?>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h1 class="mt-4">Dashboard</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
          <div class="row">

            <div class="col-xl-3 col-md-6">
              <div class="card bg-primary text-white mb-4">
                <div class="card-body">Product</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="product.php">View Details</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card bg-warning text-white mb-4">
                <div class="card-body">Subscribe</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="user.php">View Details</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card bg-success text-white mb-4">
                <div class="card-body">contact</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="contact.php">View Details</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card bg-danger text-white mb-4">
                <div class="card-body">Admin</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="admin.php">View Details</a>
                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-6">
              <div class="card mb-4">
                <div class="card-header">
                  <i class="fas fa-chart-area me-1"></i>
                  Area Chart Example
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card mb-4">
                <div class="card-header">
                  <i class="fas fa-chart-bar me-1"></i>
                  Bar Chart Example
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                the product you just searched for
              </div>

              <div class="card-body">
                <table class="table table-bordered">

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
                                <?= $row['Title']; ?>
                              </td>
                              <td>

                                <img src='giao-dien/image_DTB/<?= $image = $row['Image']; ?>' class='img-responsive' style='width:60%'
                                  alt='Image'>
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
                                  <button type="submit" name="delete_product" value="<?= $row['Id']; ?>"
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
            <div class="card-header">
              <i class="fas fa-table me-1"></i>
              All Product
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  $query = "SELECT * FROM product LIMIT " . $item_per_page . " OFFSET $offset ";
                  $query_run = mysqli_query($connect, $query);


                  if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $product) {
                      ?>
                      <tr>
                        <td>
                          <?= $product['Id']; ?>
                        </td>
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
                        </td>
                        <td><a href="edit_product.php?Id=<?= $product['Id']; ?>" class="btn btn-success btn-sm">Edit</a><br>
                        </td>
                        <td>
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
              <div class="phan-trang" style="text-align:center;">
                <?php


                $total_records = $total_records->num_rows;
                $total_page = ceil($total_records / $item_per_page);




                if ($current_page >= 2) {

                  echo "<a class = 'btn btn-outline-success text-center' href='product.php?page=" . ($current_page - 1) . "'>  Prev </a>&ensp;&ensp;";

                }

                for ($num = 1; $num <= $total_page; $num++) {

                  if ($num === $current_page) {

                    $pagLink = "<a class = 'btn btn-outline-success text-center' href='product.php?page="

                      . $num . "'>" . $num . " </a>&ensp;&ensp;";

                  } else {

                    $pagLink = "<a class = 'btn btn-outline-success text-center' href='product.php?page=" . $num . "'> " . $num . " </a>&ensp;&ensp;";

                  }

                }
                ;
                echo $pagLink;


                if ($current_page < $total_page) {

                  echo "<a class = 'btn btn-outline-success text-center' href='product.php?page=" . ($current_page + 1) . "'>  Next </a>";

                }
                ?>
              </div>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
              <!-- </div> -->


              </table>
            </div>
          </div>
        </div>
      </main>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2023</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>

</html>