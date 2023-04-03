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
                        <a href="product_detail.php?Id=17">
                            <?php

                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 17 and Category_id = 3");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=18">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 18 and Category_id = 3");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=19">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 19 and Category_id = 3");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=20">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 20 and Category_id = 3");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=21">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 21 and Category_id = 3");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=22">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 22 and Category_id = 3");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=23">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 23 and Category_id = 3");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=24">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 24 and Category_id = 3");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=25">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 25 and Category_id = 3");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=26">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 26 and Category_id = 3");
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