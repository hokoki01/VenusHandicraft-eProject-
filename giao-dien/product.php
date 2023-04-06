<?php
include 'header.php';
include 'connect_db.php';
?>

<body>
    <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333333;">


        <?php

        $count = 0;
        $result = mysqli_query($connect, "SELECT * FROM product");
        // include 'show_product.php';
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <li style="display: block;color: white;text-align: center;padding: 16px;text-decoration: none; float: left;">
                <a style="display: block;color: white;text-align: center;padding: 16px;text-decoration: none;"
                    href="product_detail.php?Id=<?= $row['Id']; ?>">
                    <img src='image_DTB/<?= $row["Image"]; ?>' class='img-responsive'
                        style='width:370px ; height :250px; border: 5px solid Violet;' alt='Image'><br><br>

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
</body>

</html>