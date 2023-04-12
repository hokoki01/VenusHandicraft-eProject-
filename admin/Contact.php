<?php
include 'header.php';
require 'connect_db.php';
?>

    <h4>Product
      <a href="add_new_product.php" class="btn btn-primary float-end">Add Product</a>
    </h4><br>
    <?php include('message.php');
    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 9;
    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($current_page - 1) * $item_per_page;
    $total_records = mysqli_query($connect, "SELECT * FROM contact"); ?>

    
      <div class="c">


        <table class="table table-bordered table-striped" style="border : 1 solid black;">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Note</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $query = "SELECT * FROM contact LIMIT " . $item_per_page . " OFFSET $offset";
            $query_run = mysqli_query($connect, $query);


            if (mysqli_num_rows($query_run) > 0) {
              foreach ($query_run as $contact) {
                ?>
                <tr>
                  <td>
                    <?= $contact['Name']; ?>
                  </td>
                  <td>
                    <?= $contact['Email']; ?>
                  </td>
                  <td>
                    <?= $contact['Phone']; ?>
                  </td>
                  <td>
                    <?= $contact['Note']; ?>
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
            <a  href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>"
              class="btn btn-outline-success float-end"><?= $num ?></a>
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