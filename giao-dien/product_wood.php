<?php
include 'header.php';
include 'connect_db.php';
?>
<style>
    .text {
        background: url(image_DTB/b.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 100%;
        height: 300px;
        color: white;
        padding-top: 150px;
        text-align: center;
        text-decoration: none;
    }
</style>

<h1 class="text">PRODUCT WOOD</h1>
    <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #fff;">


        <?php

        $count = 0;
        $result = mysqli_query($connect, "SELECT * FROM product where Category_id = 1 ");
        // include 'show_product.php';
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <li style="display: block;color: black;text-align: center;padding: 16px;text-decoration: none; float: left;">
                <a 
                    href="product_detail.php?Id=<?= $row['Id']; ?>">
                    <img src='image_DTB/<?= $row["Image"]; ?>' class='img-responsive'
                        style='width:470px ; height :300px; border: 5px solid yellow;' alt='Image'><br><br>

                    <h4>
                        <?php echo $row["Title"]; ?>
                    </h4>
                </a>
            </li>
            <?php
            $i++;
        }
        ?>
    </ul>
    <?php
    include 'footer.php';
    ?>