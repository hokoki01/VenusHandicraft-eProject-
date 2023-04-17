<?php include('header.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">product View Details</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>
                    <div class="container mt-5">
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

                                                            <img src='giao-dien/image_DTB/<?=$product['Image']; ?>'
                                                                class='img-responsive' style='width:20%' alt='Image'>
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
                        <script
                            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                        </table>
                    </div>
                </div>
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