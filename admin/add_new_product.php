<?php
include 'header.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Product Create</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product Add
                            <a href="admin.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Product Category</label>
                                <input type="text" name="Category_id" class="form-control" require>
                            </div>
                            <div class="mb-3">
                                <label>Product Title</label>
                                <input type="text" name="Title" class="form-control" require>
                            </div>
                            <div class="mb-3">
                                <label>Product Image</label>
                                <input type="text" name="Image" class="form-control" require>
                            </div>
                            <div class="mb-3">
                                <label>Product Description</label>
                                <input type="text" name="Description" class="form-control" require>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" onclick="submit()" class="btn btn-primary">Save Product</button>
                                <script>
                                    function submit() {
                                        alert("Save Product success !");
                                    }
                                    submit();
                                </script>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>