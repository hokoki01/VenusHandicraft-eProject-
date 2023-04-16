<?php include('header.php'); ?>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h1 class="mt-4">Tables</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
          </ol>
   
          <div class="card mb-4">
            <div class="card-header">
              <i class="fas fa-table me-1"></i>
              User Example
            </div>
            <div class="card-body">
              <table id="datatablesSimple">


                <h4>user</h4><br>
                <?php include('message.php');
                $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 9;
                $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
                $offset = ($current_page - 1) * $item_per_page;
                $total_records = mysqli_query($connect, "SELECT * FROM user"); ?>


                <div class="c">


                  <table class="table table-bordered table-striped" style="border : 1 solid black;">
                    <thead>
                      <tr>
                        <th>Email</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      $query = "SELECT * FROM user LIMIT " . $item_per_page . " OFFSET $offset";
                      $query_run = mysqli_query($connect, $query);


                      if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $user) {
                          ?>
                          <tr>
                            <td>
                              <?= $user['Email']; ?>
                            </td>
                          </tr>
                          <?php
                        }
                      } else {
                        echo "<script type='text/javascript'>alert('No Record Found');</script>";
                      }
                      ?>
                    </tbody>
                  </table>
                  <br><br>
                  <div class="phan-trang" style="text-align:center;">
                    <?php
                    $total_records = $total_records->num_rows;
                    $total_page = ceil($total_records / $item_per_page);
                    if ($current_page >= 2) {
                      echo "<a class = 'btn btn-outline-success text-center' href='product.php?page=" . ($current_page - 1) . "'>  Prev </a>&ensp;&ensp;";

                    }
                    $pagLink = "";
                    for ($num = 1; $num <= $total_page; $num++) {
                      if ($num == $current_page) {
                        $pagLink = "<a class = 'btn btn-outline-success text-center' href='product.php?page="
                          . $num . "'>" . $num . " </a>&ensp;&ensp;";
                      } else {

                        $pagLink = "<a class = 'btn btn-outline-success text-center' href='product.php?page=" . $num . "'> " . $total_page . " </a>&ensp;&ensp;";
                      }
                    }

                    echo $pagLink;
                    if ($current_page < $total_page) {
                      echo "<a class = 'btn btn-outline-success text-center' href='product.php?page=" . ($current_page + 1) . "'>  Next </a>";
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
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
  crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>

</html>