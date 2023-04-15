<?php
include 'header.php';
include 'connect_db.php';
?>
<style>
    .product-theme {
        background: url(Images/woodbg.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 100%;
        height: 350px;
        color: black;
        padding-top: 150px;
        text-align: center;
        text-decoration: none;
    }
</style>

<h1 class="product-theme ">WOOD PRODUCT </h1>
    <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #fff;">


<?php
        $count = 0;
        $result = mysqli_query($connect, "SELECT * FROM product where Category_id = 1 ");
        // include 'show_product.php';
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
?>
            <div class="container">
            <li style="display: block;color: black;text-align: center;padding: 16px;text-decoration: none; float:left;">
                <a 
                    href="product_detail.php?Id=<?= $row['Id']; ?>">
                    <img src='image_DTB/<?= $row["Image"]; ?>' class='img-responsive'
                        style='width:340px ; height :350px; border: 5px solid yellow;' alt='Image'><br><br>

                    <h4>
                        <?php echo $row["Title"]; ?>
                    </h4>
                </a>
            </li>
            </div>
<?php
            $i++;
                                                    }
?>

    </ul>
    <?php
    include 'footer.php';
    ?>