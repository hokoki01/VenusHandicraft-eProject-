<?php
include 'header.php';
include 'connect_db.php';
?>
<style>
    .product-theme2 {
        background: url(Images/theme3.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 100%;
        height: 350px;
        color: white;
        padding-top: 150px;
        text-align: center;
        text-decoration: none;
    }
</style>

<h1 class="product-theme2">PRODUCT GLASS</h1>
<!-- <div class="container" style="text-align:center;border: 5px solid grey;width:fit-content; "> -->
    <!-- <h2> Glass products</h2> -->
<!-- </div> -->
    <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #fff;">


        <?php

        $count = 0;
        $result = mysqli_query($connect, "SELECT * FROM product where Category_id = 3 ");
        // include 'show_product.php';
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <li style="display: block;color: black;text-align: center;padding: 16px;text-decoration: none; float: left;"> <a
                    style="display: block;color: black;text-align: center;padding: 16px;text-decoration: none;"
                    href="product_detail.php?Id=<?= $row['Id']; ?>">
                    <img src='image_DTB/<?= $row["Image"]; ?>' class='img-responsive'
                        style='width:350px ; height :350px; border: 5px solid blue;' alt='Image'><br><br>

                    <h4>
                        <?php echo $row["Title"]; ?>
                    </h4>
                </a></li>
            <?php
            $i++;
        }
        ?>
    </ul>
    <?php
    include 'footer.php';
    ?>
</body>

</html>
