<?php
include 'header.php';
session_start();
include 'connect_db.php';
?>
<body>
    <div class="container">
        <table class="table table-hover table-bordered">
            <tbody>

                <div class="row">

                    <div class="col-sm-4">
                        <?php

                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 1 and Category_id = 1");
                        include 'show_product.php';
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 2 and Category_id = 1");
                        include 'show_product.php';
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 3 and Category_id = 1");
                        include 'show_product.php';
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 4 and Category_id = 1");
                        include 'show_product.php';
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 5 and Category_id = 1");
                        include 'show_product.php';
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM product where Id = 6 and Category_id = 1");
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