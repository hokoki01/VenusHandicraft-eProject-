<?php
include 'header.php';
include 'connect_db.php';
$item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 9;
$current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
$offset = ($current_page - 1) * $item_per_page;
$total_records = mysqli_query($connect, "SELECT * FROM product"); ?>
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

<h1 class="text">ALL PRODUCT</h1>
    <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #fff;">
        <?php

        $count = 0;
        $result = mysqli_query($connect, "SELECT * FROM product LIMIT " . $item_per_page . " OFFSET $offset");
        // include 'show_product.php';
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <li style="display: block;color: black;text-align: center;padding: 16px;text-decoration: none; float: left;">
                <a style="display: block;color: blackite;text-align: center;padding: 16px;text-decoration: none;"
                    href="product_detail.php?Id=<?= $row['Id']; ?>">
                    <img src='image_DTB/<?= $row["Image"]; ?>' class='img-responsive'
                        style='width:420px ; height :300px; border: 5px solid Violet;' alt='Image'><br><br>

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
    <div class="col-md-12">
        <?php
        $total_records = $total_records->num_rows;
        $total_page = ceil($total_records / $item_per_page);
        for ($num = 1; $num <= $total_page; $num++) {
            ?>
            <a class="btn btn-outline-success float-end" href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>"
                class="btn btn-outline-success float-end"><?= $num ?></a>
            <?php

        }

        ?>
    </div><br><br>
    <?php
    include 'footer.php';
    ?>
