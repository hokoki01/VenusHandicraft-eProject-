<?php
include 'connect_db.php';
include 'header.php';
?>


<!-- phần show sản phẩm đc clicked  -->
<br><br>
<div class="container-fluid p-5 mb-4  text-center " style="background-color:#f7f7f7">
    <h2>Product Detail</h2><br>
</div>

<?php
if (isset($_GET['Id'])) {
    $product_id = mysqli_real_escape_string($connect, $_GET['Id']);
    $query = "SELECT * FROM product WHERE Id='$product_id' ";
    $query_run = mysqli_query($connect, $query);

    if (mysqli_num_rows($query_run) > 0) {
        $product = mysqli_fetch_array($query_run);
        ?>
        <div class="container border border-3 border-warning-subtle p-3">
            <div class="row g-3">
                <div class="col-6 border-end border-warning-subtle">
                    <img id="myimage" src='image_DTB/<?= $product['Image']; ?>' class="d-block w-100" alt='Image'>
                </div>
                <div class="col-6 p-3">

                    <h4 class="border-bottom border-black">Product Name:</h4>

                    <p style="text-align:justify;font-size:25px">
                        <?= $product['Title']; ?>
                    </p>

                    <br>
                    <h4 class="border-bottom border-black">Product Attributes:</h4>
                    <p style="text-align:justify">
                        <?= $product['Description']; ?>
                    </p>
                    <br>
                </div>
            </div>
        </div>
        <?php
    } else {
        echo "<h4>No Such Id Found</h4>";
    }
}
?>


<br><br>


<!-- phần gợi ý sản phẩm  -->
    &ensp;&ensp;&ensp;<h2 class="ms-3">See more products here :</h2>
    <hr  style="margin-bottom: 0px;" size="10px" >

<section class="pb-5">
    <div class="container">
        <div class="row">
            <?php
            $count = 0;
            $category = $product['Category_id'];
            $Id = $product['Id'];
            $result = mysqli_query($connect, "SELECT * FROM product where Category_id = $category and Id != $Id ");
            // include 'show_product.php';
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                ?>

                <div class="col-4 gy-5 text-center">
                    <div class="border border-warning-subtle border-3" style="display: inline-block;text-align: center">
                        <a style="display: block;padding: 16px;" href="product_detail.php?Id=<?= $row['Id']; ?>">
                            <img src='image_DTB/<?= $row["Image"]; ?>' class='img-responsive d-block w-100'
                                style='height :300px;' alt='Image'>

                            <h4 class="text-black pt-2 border-top border-dark-subtle border-2 ">
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




<!-- style cho phần accordion của artists -->
<style>
    .accordion-button:not(.collapsed) {
        border-bottom: solid 4px #696969;
        background-color: #f7b948;
        color: white;
    }

    .accordion-button.collapsed {
        color: #333333;
        background: #f3f2f2;
        border: none;

    }

    .accordion-button {
        border: 1px solid white;
    }

    .accordion-button:focus {
        box-shadow: none;
        border-color: none;

    }

    .accordion-body {
        border-bottom: dotted 4px #696969
    }

    .accordion-item {
        border: none;
        background-color: #f3f2f2;
        color: #696969;
    }
</style>

<?php include "footer.php" ?>