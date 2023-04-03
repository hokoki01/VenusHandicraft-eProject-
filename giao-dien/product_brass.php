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
                        <a href="product_detail.php?Id=35">
                            <?php

                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 35 and Category_id = 5");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=36">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 36 and Category_id = 5");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=37">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 37 and Category_id = 5");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=38">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 38 and Category_id = 5");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=39">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 39 and Category_id = 5");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=40">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 40 and Category_id = 5");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=41">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 41 and Category_id = 5");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=42">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 42 and Category_id = 5");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=43">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 43 and Category_id = 5");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=44">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 44 and Category_id = 5");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=45">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 45 and Category_id = 5");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=46">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 46 and Category_id = 5");
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