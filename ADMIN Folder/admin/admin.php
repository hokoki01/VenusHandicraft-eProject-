<?php
include 'header.php';
require 'connect_db.php';
?>
<h2 style="text-align:  center;">ADMIN PAGE </h2>


<div class="container mt-4">
  <div class="container-fluid"> 
    <div class="row">
      <div class="col-sm bg-warning text-white p-3">
        <h1>Product</h1>
        <h3 style="text-align:  left;">
          <?php $result = mysqli_query($connect, "SELECT * FROM product");
          $i = 0;
          while ($row = mysqli_fetch_array($result)) {
            $i++;
          }
          echo $i; ?>
        </h3>

      </div>
      <div class="col-sm bg-success text-white p-3">
        <h1>User</h1>
        <h3 style="text-align:  left;">
          <?php $result = mysqli_query($connect, "SELECT * FROM user");
          $i = 0;
          while ($row = mysqli_fetch_array($result)) {
            $i++;
          }
          echo $i; ?>
        </h3>
      </div>
      <div class="col-sm bg-info text-white p-3">
        <h1>contact</h1>
        <h3 style="text-align:  left;">
          <?php $result = mysqli_query($connect, "SELECT * FROM contact");
          $i = 0;
          while ($row = mysqli_fetch_array($result)) {
            $i++;
          }
          echo $i; ?>
        </h3>
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
  </div>

  <br><br><br>
  <?php include('message.php'); ?>

  <div class="row">
    <div class="col-md-12">
      <!-- <div class="card">
        <div class="card-header"> -->
      <h4>Product Details
        <a href="add_new_product.php" class="btn btn-primary float-end">Add Product</a>
      </h4>
    </div>
    <!-- <div class="card-body"> -->

    <table class="table table-bordered table-striped" style="border : 1 solid black;">
      <thead>
        <tr>
          <th>ID</th>
          <th>Category</th>
          <th>Title</th>
          <th>Image</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT * FROM product";
        $query_run = mysqli_query($connect, $query);

        if (mysqli_num_rows($query_run) > 0) {
          foreach ($query_run as $product) {
            ?>
            <tr>
              <td>
                <?= $product['Id']; ?>
              </td>
              <td>
                <?= $product['Category_id']; ?>
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
                <a href="product_view.php?Id=<?= $product['Id']; ?>" class="btn btn-info btn-sm">View</a>
                <a href="edit_product.php?Id=<?= $product['Id']; ?>" class="btn btn-success btn-sm">Edit</a>
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

    <!-- </div> -->
    <!-- </div> -->
  </div>
  <!-- </div> -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>