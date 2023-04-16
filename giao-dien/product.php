<?php
include 'header.php';
include 'connect_db.php';
$item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 9;
$current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
$offset = ($current_page - 1) * $item_per_page;
$total_records = mysqli_query($connect, "SELECT * FROM product"); ?>
<style>
    .text {
        background: url(Images/HDC.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 100%;
        height: 300px;
        color: green;
        padding-top: 150px;
        text-align: center;
        text-decoration: none;
    }
</style>

<h1 class="text">Gallery</h1>
    <div class="container">
        <div class="row">
<?php
        $count = 0;
        $result = mysqli_query($connect, "SELECT * FROM product LIMIT " . $item_per_page . " OFFSET $offset");
        // include 'show_product.php';
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
?>
            <div class="col-md-4 h-100">
             <div class="border border-5" style="border-color:#525252">
                <a href="product_detail.php?Id=<?= $row['Id']; ?>">
                    <img src='image_DTB/<?= $row["Image"]; ?>' class='img-responsive d-block w-100 p-1' style='height :350px' alt='Image'>
                    
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
        </div>
    </div>

    
<!-- phân trang -->
    <div class="col-md-12 ms-auto mb-4">
<?php
        $total_records = $total_records->num_rows;
        $total_page = ceil($total_records / $item_per_page);    
        for ($num = 1; $num <= $total_page; $num++) {
            ?>
            <a class="btn btn btn-outline-warning " style="color:black" href=" ?per_page=<?= $item_per_page ?>&page=<?= $num ?> ">
                <?= $num ?>
            </a>
            <?php
        }
?>
    </div>


<?php
    include 'footer.php';
?>
