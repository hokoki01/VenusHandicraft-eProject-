<?php
include 'header.php';
session_start();
include 'connect_db.php';
?>

<body>
    <style>
        body {
            padding-top: 100px;
            text-align: center;
        }
    </style>
    <div class="container">
        <table class="table table-hover table-bordered">
            <tbody>
                <div class="row">

                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=27">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 27 and Category_id = 4");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=28">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 28 and Category_id = 4");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=29">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 29 and Category_id = 4");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=30">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 30 and Category_id = 4");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=31">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 31 and Category_id = 4");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=32">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 32 and Category_id = 4");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=33">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 33 and Category_id = 4");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=34">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 34 and Category_id = 4");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>


                </div>
            </tbody>
        </table>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>