<?php include('header.php');
?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">artist View Details</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>
                    <div class="container mt-5">

                        <?php include('message.php'); ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Artist Edit
                                            <a href="admin.php" class="btn btn-danger float-end">BACK</a>
                                        </h4>
                                    </div>
                                    <div class="card-body">

                                        <?php
                                        if (isset($_GET['id'])) {
                                            $id = mysqli_real_escape_string($connect, $_GET['id']);
                                            $query = "SELECT * FROM artist WHERE id ='$id' ";
                                            $query_run = mysqli_query($connect, $query);
                                            $artist = mysqli_fetch_array($query_run);
                                            ?>
                                            <form action="code.php" method="POST">
                                            <div class="mb-3">
                                                    <label>Artist ID</label>
                                                    <p><?= $artist['id']; ?></p>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Artist Name</label>
                                                    <input type="text" name="name"value="<?= $artist['name']; ?>" class="form-control"required>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Artist Image</label>
                                                    <input type="text" name="Image" value="<?= $artist['image']; ?>" class="form-control"required>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Artist Biography</label>
                                                    <input type="text" name="Biography" value="<?= $artist['Biography']; ?>" class="form-control"required>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Artist Career</label>
                                                    <input type="text" name="Career" value="<?= $artist['Career']; ?>" class="form-control"required>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Artist Personality</label>
                                                    <input type="text" name="Personality" value="<?= $artist['Personality']; ?>" class="form-control"required>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Artist Reviews</label>
                                                    <input type="text" name="Reviews" value="<?= $artist['Reviews']; ?>"class="form-control"required>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Artist Honor</label>
                                                    <input type="text" name="Honor" value="<?= $artist['Honor']; ?>" class="form-control"required >
                                                </div>
                                                <div class="mb-3">
                                                    <button type="submit" name="update_artist" class="btn btn-primary">
                                                        Update Artist
                                                    </button>
                                                </div>

                                            </form>
                                            <?php
                                        }
                                        if (isset($_GET['Id'])) {
                                            $product_id = mysqli_real_escape_string($connect, $_GET['Id']);
                                            $query = "SELECT * FROM product WHERE Id ='$product_id' ";
                                            $query_run = mysqli_query($connect, $query);
                                            $product = mysqli_fetch_array($query_run);
                                            ?>
                                            <form action="code.php" method="POST">
                                                <input type="number" name="product_id" value="<?= $product['Id']; ?>">
                                                <div class="mb-3">
                                                    <label>Product Category</label>
                                                    <input type="text" name="Category_id"
                                                        value="<?= $product['Category_id']; ?>" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label>Product Title</label>
                                                    <input type="text" name="Title" value="<?= $product['Title']; ?>"
                                                        class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label>Product Image</label>
                                                    <input type="text" name="Image" value="<?= $product['Image']; ?>"
                                                        class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label>Product Description</label>
                                                    <input type="text" name="Description"
                                                        value="<?= $product['Description']; ?>" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <button type="submit" name="update_student" class="btn btn-primary">
                                                        Update Product
                                                    </button>
                                                </div>

                                            </form>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

            </main>
        </div>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>