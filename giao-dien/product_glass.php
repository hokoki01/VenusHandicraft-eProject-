<?php
include 'header.php';
include 'connect_db.php';
?>
<style>
    .product-theme2 {
        background: url(Images/finalGlass.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 100%;
        height: 350px;
        color: #5bb6c1;
        padding-top: 150px;
        text-align: center;
        text-decoration: none;
    }
</style>

<h1 class="product-theme2">GLASS PRODUCT </h1>
<!-- <div class="container" style="text-align:center;border: 5px solid grey;width:fit-content; "> -->
    <!-- <h2> Glass products</h2> -->
<!-- </div> -->
<section class="pb-5">
    <div class="container">
            <div class="row">
<?php
        $count = 0;
        $result = mysqli_query($connect, "SELECT * FROM product where Category_id = 3 ");
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
</section> 
    <?php
    include 'footer.php';
    ?>
</body>

</html>
