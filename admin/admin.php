<?php
include 'header.php';
?>
<style>
  .row.content {
    height: auto;
  }

  .sidenav {
    background-color: #f1f1f1;
    height: auto;
  }

  footer {
    background-color: #555;
    color: white;
    /* padding: 15px; */
  }

  @media screen and (max-width: 767px) {
    .sidenav {
      height: auto;
      /* padding: 15px; */
    }

    .row.content {
      height: auto;
    }
  }

  .add {
    text-align: right;
  }

  table {
    border: 1 solid black;
  }
</style>
</head>
<style>
  .col-container {
    display: table;
    width: 100%;
  }

  .col {
    display: table-cell;
    padding: 16px;
    width: 50%;
  }

  .pading {
    /* padding-top: 5% ; */
    padding-left: 10%;
    padding-right: 10%;

  }
</style>


<?php
        include 'connect_db.php';
        $result = mysqli_query($connect, "SELECT * FROM product");
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            $i++;
        }
        $product = $i
        ?>
<div class="pading">
<div class="col-container">
      <div class="col" style="background:green">
        <h2>PRODUCTS</h2>
        <p>
          <?php echo "$product"; ?>
        </p>
      </div>

      <div class="col" style="background:yellow">
        <h2>contact</h2>
        <p>0</p>
      </div>
    </div>
  <body>
    <table class="table">
      <thead>
        <a href="add_new_product.php"><button type="button" class="btn btn-success"
            style="float : right ; margin: 15px;">add new product</button></a>
        <tr>
          <th>product_code</th>
          <th>image</th>
          <th>title</th>
          <th>Description</th>
          <th>Option</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'connect_db.php';
        $result = mysqli_query($connect, "SELECT * FROM product");
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
          ?>
          <tr>
            <td>
              <?php echo $row["Id"]; ?>
            </td>
            <td>
              <?php
              $image = $row["Image"];
              echo "<img src='image_DTB/$image' class='img-responsive' style='width:200%' alt='Image'>";
              ?>
            </td>
            <td>
              <?php echo $row["Title"]; ?>
            </td>
            <td>
              <?php echo $row["Description"]; ?>
            </td>
            <td>
              <a href="edit_product.php"><button>Edit</button></a>
            </td>
            <td><a href="delete_product.php"><button>Delete</button></a>
            </td>
            <?php
            $i++;
        }

        $product = $i
        ?>
        </tr>
      </tbody>
    </table>
</div>
</body>

</html>