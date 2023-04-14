<!DOCTYPE html>
<html lang="en">
<?php

require 'connect_db.php';
include('message.php');
$item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 6;
$current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
$offset = ($current_page - 1) * $item_per_page;
$total_records = mysqli_query($connect, "SELECT * FROM product");
?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tables - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="admin.php">Handicrafts</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

            <div class="input-group" action="admin.php" method="get">
                <input class="form-control" type="number" name="search" placeholder="Search product"
                    aria-label="Search product" aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="submit" name="ok"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="">Settings</a></li>
                    <li><a class="dropdown-item" href="">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="admin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="Sign_in.php">Login</a>
                                        <a class="nav-link" href="Sign_up.php">Register</a>
                                        <a class="nav-link" href="password.php">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="product.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables product
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Tables</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>

                    <h4>Product
                        <a href="add_new_product.php" class="btn btn-primary float-end">Add Product</a>
                    </h4><br>

                    <!-- <div class="row "> -->

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            the product you just searched for
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">

                                <tbody>
                                    <?php
                                    require 'connect_db.php';
                                    if (isset($_REQUEST['ok'])) {
                                        $search = addslashes($_GET['search']);
                                        if (empty($search)) {
                                            echo "<script type='text/javascript'>alert('wrong password');</script>";
                                            echo "Yeu cau nhap du lieu vao o trong";
                                        } else {
                                            include 'connect_db.php';
                                            $sql = "SELECT * FROM product where Id = $search  || Title like %$search%";
                                            $result = mysqli_query($connect, $sql);
                                            ?>
                                            <ul
                                                style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #fff;">
                                                <?php
                                                $i = 0;
                                                while ($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <?= $row['Id']; ?>
                                                        </td>

                                                        <td>
                                                            <?= $row['Title']; ?>
                                                        </td>
                                                        <td>

                                                            <img src='image_DTB/<?= $image = $row['Image']; ?>'
                                                                class='img-responsive' style='width:60%' alt='Image'>
                                                        </td>
                                                        <td>
                                                            <?= $row['Description']; ?>
                                                        </td>
                                                        <td>
                                                            <a href="product_view.php?Id=<?= $row['Id']; ?>"
                                                                class="btn btn-info btn-sm">View</a>
                                                        </td>
                                                        <td>
                                                            <a href="edit_product.php?Id=<?= $row['Id']; ?>"
                                                                class="btn btn-success btn-sm">Edit</a>
                                                        </td>
                                                        <td>
                                                            <form action="code.php" method="POST" class="d-inline">
                                                                <button type="submit" name="delete_student"
                                                                    value="<?= $row['Id']; ?>"
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
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            All Product
                        </div>

                        <div class="card-body">
                            <!-- <table id="datatablesSimple"> -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>

                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $query = "SELECT * FROM product LIMIT " . $item_per_page . " OFFSET $offset ";
                                    $query_run = mysqli_query($connect, $query);


                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $product) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?= $product['Id']; ?>
                                                </td>

                                                <td>
                                                    <?= $product['Title']; ?>
                                                </td>
                                                <td>
                                                    <img src='image_DTB/<?= $image = $product['Image']; ?>'
                                                        class='img-responsive' style='width:60%' alt='Image'>
                                                </td>
                                                <td>
                                                    <?= $product['Description']; ?>
                                                </td>
                                                <td>

                                                <td>
                                                    <a href="product_view.php?Id=<?= $product['Id']; ?>"
                                                        class="btn btn-info btn-sm">View</a><br>
                                                </td>
                                                <td><a href="edit_product.php?Id=<?= $product['Id']; ?>"
                                                        class="btn btn-success btn-sm">Edit</a><br>
                                                </td>
                                                <td>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student"
                                                            value="<?= $product['Id']; ?>"
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
                            <br><br>
                            <div class="phan-trang" style="text-align:center;">
                                <?php


                                $total_records = $total_records->num_rows;
                                $total_page = ceil($total_records / $item_per_page);




                                if ($current_page >= 2) {

                                    echo "<a class = 'btn btn-outline-success text-center' href='product.php?page=" . ($current_page - 1) . "'>  Prev </a>&ensp;&ensp;";

                                }

                                for ($num = 1; $num <= $total_page; $num++) {

                                    if ($num === $current_page) {

                                        $pagLink = "<a class = 'btn btn-outline-success text-center' href='product.php?page="

                                            . $num . "'>" . $num . " </a>&ensp;&ensp;";

                                    } else {

                                        $pagLink = "<a class = 'btn btn-outline-success text-center' href='product.php?page=" . $num . "'> " . $num . " </a>&ensp;&ensp;";

                                    }

                                }
                                ;
                                echo $pagLink;


                                if ($current_page < $total_page) {

                                    echo "<a class = 'btn btn-outline-success text-center' href='product.php?page=" . ($current_page + 1) . "'>  Next </a>";

                                }
                                ?>
                            </div>
                            <script
                                src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                            <!-- </div> -->

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