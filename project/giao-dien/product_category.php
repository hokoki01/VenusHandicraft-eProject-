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

<hr style='margin-bottom: 0px;' size='10px'>

<section class='pb-5'>
    <div class='container'>
        <div class='row'>
            <!-- <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #fff;"> -->
            <?php
            if (isset($_GET['Id'])) {
                $Id = mysqli_real_escape_string($connect, $_GET['Id']);
                $count = 0;
                $result = mysqli_query($connect, "SELECT * FROM product WHERE Category_id ='$Id'");
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-md-4 h-100">
                        <div class="border border-5" style="border-color:#525252">
                            <a href="product_detail.php?Id=<?= $row['Id']; ?>">
                                <img src='image_DTB/<?= $row["Image"]; ?>' class='img-responsive d-block w-100'
                                    style='height :300px;' alt='Image'>
                                <h4 class="mt-3 pt-2 text-black text-center border-top border-dark-subtle border-2">
                                    <?php echo $row["Title"]; ?>
                                </h4>
                            </a>
                        </div>
                    </div>
                    <?php
                    $i++;
                }

                ?>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- </ul> -->
<?php
include 'footer.php';
?>
</body>

</html>