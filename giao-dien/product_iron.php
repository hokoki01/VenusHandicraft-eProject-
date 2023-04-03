<?php
include 'header.php';
session_start();
include 'connect_db.php';
?>

<body>
    <style>
        body {
            padding-top: 100px;
        }
    </style>
    <div class="container">
        <table class="table table-hover table-bordered">
            <tbody>

                <div class="row">

                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=9">
                            <?php

                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 9 and Category_id = 2");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=10">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 10 and Category_id = 2");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=11">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 11 and Category_id = 2");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=12">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 12 and Category_id = 2");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=13">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 13 and Category_id = 2");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=14">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 14 and Category_id = 2");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=15">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 15 and Category_id = 2");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=16">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 16 and Category_id = 2");
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