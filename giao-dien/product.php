<?php
include 'header.php';
session_start();
include 'connect_db.php';
?>
<br><br><br><br><br>

<body>
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
                        <a href="product_detail.php?Id=1">
                            <?php

                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 1 and Category_id = 1");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
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
                        <a href="product_detail.php?Id=17">
                            <?php

                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 17 and Category_id = 3");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=47">
                            <?php

                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 47 and Category_id = 6");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
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
                        <a href="product_detail.php?Id=28">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 28 and Category_id = 4");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=2">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 2 and Category_id = 1");
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
                        <a href="product_detail.php?Id=48">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 48 and Category_id = 6");
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
                        <a href="product_detail.php?Id=29">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 29 and Category_id = 4");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=3">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 3 and Category_id = 1");
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
                        <a href="product_detail.php?Id=19">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 19 and Category_id = 3");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=49">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 49 and Category_id = 6");
                            include 'show_product.php';
                            ?>
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
                        <a href="product_detail.php?Id=29">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 29 and Category_id = 4");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=4">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 4 and Category_id = 1");
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
                        <a href="product_detail.php?Id=20">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 20 and Category_id = 3");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=50">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 50 and Category_id = 6");
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
                        <a href="product_detail.php?Id=30">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 30 and Category_id = 4");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=5">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 5 and Category_id = 1");
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
                        <a href="product_detail.php?Id=21">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 21 and Category_id = 3");
                            include 'show_product.php';
                            ?>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="product_detail.php?Id=51">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 51 and Category_id = 6");
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
                        <a href="product_detail.php?Id=31">
                            <?php
                            $count = 0;
                            $result = mysqli_query($connect, "SELECT *FROM product where Id = 31 and Category_id = 4");
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