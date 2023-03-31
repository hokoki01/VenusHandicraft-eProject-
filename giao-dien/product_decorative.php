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
                        <?php

                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 47 and Category_id = 6");
                        include 'show_product.php';
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 48 and Category_id = 6");
                        include 'show_product.php';
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 49 and Category_id = 6");
                        include 'show_product.php';
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 50 and Category_id = 6");
                        include 'show_product.php';
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 51 and Category_id = 6");
                        include 'show_product.php';
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 52 and Category_id = 6");
                        include 'show_product.php';
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 53 and Category_id = 6");
                        include 'show_product.php';
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 54 and Category_id = 6");
                        include 'show_product.php';
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 55 and Category_id = 6");
                        include 'show_product.php';
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 56 and Category_id = 6");
                        include 'show_product.php';
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 57 and Category_id = 6");
                        include 'show_product.php';
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 58 and Category_id = 6");
                        include 'show_product.php';
                        ?>
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