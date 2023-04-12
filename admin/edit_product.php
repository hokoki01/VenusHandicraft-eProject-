<?php
include 'header.php';
include 'connect_db.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Product Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['Id']))
                        {
                            $product_id = mysqli_real_escape_string($connect, $_GET['Id']);
                            $query = "SELECT * FROM product WHERE Id ='$product_id' ";
                            $query_run = mysqli_query($connect, $query);
                                $product = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="number" name="student_id" value="<?= $product['Id']; ?>">
                                    <div class="mb-3">
                                        <label>Product Category</label>
                                        <input type="text" name="Category_id" value="<?=$product['Category_id'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Product Title</label>
                                        <input type="text" name="Title" value="<?=$product['Title'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Product Image</label>
                                        <input type="text" name="Image" value="<?=$product['Image'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Product Description</label>
                                        <input type="text" name="Description" value="<?=$product['Description'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update Product
                                        </button>
                                    </div>

                                </form>
                                <?php
                            // }
                            // else
                            // {
                            //     echo "<h4>No Such Id Found</h4>";
                            // }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>