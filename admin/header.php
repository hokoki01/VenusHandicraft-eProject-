<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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

  <div class="row">


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