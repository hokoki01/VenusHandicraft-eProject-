<?php
include 'header.php';
include 'connect_db.php';
?>

<style>
    .product-theme6 {
        background: url(Images/aluminiumbg.jpg) no-repeat center center fixed;
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
<?php
if (isset($_GET['Id'])) {
    $Id = mysqli_real_escape_string($connect, $_GET['Id']);
    $query = "SELECT * FROM category where Id = $Id";
    $query_run = mysqli_query($connect, $query);
    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $category) {
            ?>
            <h1 class="product-theme6">
                <?= $category['category_name']; ?>
            </h1>
            <?php
        }
    } else {
        echo "<h5> No Record Found </h5>";
    }
}
?>

<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #fff;">
    <?php
    if (isset($_GET['Id'])) {
        $Id = mysqli_real_escape_string($connect, $_GET['Id']);
        $count = 0;
        $result = mysqli_query($connect, "SELECT * FROM product WHERE Category_id ='$Id'");
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <li style="display: block;color: black;text-align: center;padding: 16px;text-decoration: none; float: left;">
                <a style="display: block;color: black;text-align: center;padding: 16px;text-decoration: none;"
                    href="product_detail.php?Id=<?= $row['Id']; ?>">
                    <img src='image_DTB/<?= $row["Image"]; ?>' class='img-responsive'
                        style='width:390px ; height :350px; border: 5px solid brown;' alt='Image'><br><br>

                    <h4>
                        <?php echo $row["Title"]; ?>
                    </h4>
                </a>
            </li>
            <?php
            $i++;
        }

        ?>
        <?php
    }
    ?>
</ul>
<?php
include 'footer.php';
?>
</body>

</html>