<?php
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

    <title>Student View</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>product View Details
                            <a href="admin.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['Id'])) {
                            $product_id = mysqli_real_escape_string($connect, $_GET['Id']);
                            $query = "SELECT * FROM product WHERE Id='$product_id' ";
                            $query_run = mysqli_query($connect, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $product = mysqli_fetch_array($query_run);
                                ?>

                                <div class="mb-3">
                                    <label>Product Category</label>
                                    <p class="form-control">
                                        <?= $product['Category_id']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Product Title</label>
                                    <p class="form-control">
                                        <?= $product['Title']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Product Image</label>
                                    <td>
                                        
                                        <img src='image_DTB/<?=$image = $product['Image'];?>' class='img-responsive' style='width:20%' alt='Image'>
                                    </td>
                                </div>
                                <div class="mb-3">
                                    <label>Product Description</label>
                                    <p class="form-control">
                                        <?= $product['Description']; ?>
                                    </p>
                                </div>

                                <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
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