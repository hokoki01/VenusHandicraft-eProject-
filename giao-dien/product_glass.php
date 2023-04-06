<?php
include 'header.php';
include 'connect_db.php';
?>
<br><br><br>
<h3>Product Glass</h3>
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
                        style='width:430px ; height :300px; border: 5px solid blue;' alt='Image'><br><br>

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