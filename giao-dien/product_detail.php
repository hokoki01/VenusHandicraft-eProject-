<?php
include 'connect_db.php';
include 'header.php';
$item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 1;
$current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
$offset = ($current_page - 1) * $item_per_page;
$total_records = mysqli_query($connect, "SELECT * FROM artist");
?>


<!-- phần show sản phẩm đc clicked  -->
<br><br>
<div class="container-fluid p-5 mb-4  text-center " style="background-color:#f7f7f7">
    <h2>Product Detail</h2><br>
</div>

<?php
    if (isset($_GET['Id'])){
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
                                                              
                            <h4 class="border-bottom border-black" >Product Name:</h4>                                       
           
                            <p style="text-align:justify;font-size:25px">
                                <?= $product['Title'];?>
                            </p>
            
            <br>
                            <h4 class="border-bottom border-black" >Product Attributes:</h4>
            <br>
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
    <div class=" bg-white  text-center ">
        <h2>See more products here</h2>
        <hr color="black" style="margin-bottom: 0px;" size="5px">
    </div>

<section class="pb-5">
    <div class="container">
        <div class="row">       
<?php
    $count = 0;
    $category = $product['Category_id'];
    $result = mysqli_query($connect, "SELECT * FROM product where Category_id = $category ");
        // include 'show_product.php';
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
?>

<div class="col-4 gy-5 text-center">
<div class="border border-warning-subtle border-3" style="display: inline-block;text-align: center">          
      <a style="display: block;padding: 16px;" href="product_detail.php?Id=<?= $row['Id']; ?>">
    <img src='image_DTB/<?= $row["Image"]; ?>' class='img-responsive d-block w-100' style='height :300px;' alt='Image'>
    
                    <h4 class="text-black pt-2 border-top border-warning-subtle border-2 ">
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



<!-- phần bắt đầu thông tin tác giả -->
    <div class="container-fluid p-5 text-black text-center" style="background-color:#f7f7f7">
        <h2 style="Text-decoration : none;">Famous artisans are currently working for us</h2><br>
        <p>One of the most popular and loved industries in this era. Thanks to the ingenuity and meticulousness of the
            artisans, they have made very eye-catching finished products. Moreover, this is a very successful branch of
            the crafting industry. You know, the handicrafts are made 100% by hand and with the whole heart of the
            artisan.</p>
    </div>
<!-- phần thông tin tác giả -->
<?php
    $count = 0;
    $result = mysqli_query($connect, "SELECT * FROM artist LIMIT " . $item_per_page . " OFFSET $offset");
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
 ?>
        <div class="container pt-4">
                    <div class="row">

                        <div class="col-5">                                                      
                                <img src='image_DTB/<?php echo $row['image'] ?>' class='d-block w-100' alt='Image' >
                                <h1 class="text-black" style="Text-decoration : none; text-align:center;">
                                Artist <?php echo $row['name'] ?>
                                </h1>
                        </div>

                        <div class="col-7">                        
                                        <div class="accordion" id="accordionExample">                                           
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                    aria-expanded="true" aria-controls="collapseOne">
                                                                    Biography
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <?php echo $row['Biography'] ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                                    Career
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <?php echo $row['Career'] ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThree" aria-expanded="false"
                                                                    aria-controls="collapseThree">
                                                                    Personality
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <?php echo $row['Personality'] ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                                    aria-expanded="false" aria-controls="collapseFour">
                                                                    Reviews
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <?php echo $row['Reviews'] ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                                    aria-expanded="false" aria-controls="collapseFive">
                                                                    Honor
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <?php echo $row['Honor'] ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<?php
    $i++;
                                                                    }
?>
   
   
    
<!-- phần phân trang -->
<div class="col-md-12 mb-3">
    <p style="font-size:x-large">See more artists here
    </p>

<?php
        $total_records = $total_records->num_rows;
        $total_page = ceil($total_records / $item_per_page);

        for ($num = 1; $num <= $total_page; $num++) {
            ?>
            <a href=" ?per_page=<?= $item_per_page ?>&page=<?= $num ?>" class="btn btn-outline-success "><?= $num ?></a>
            <?php
        }
?>
</div>



<!-- style cho phần accordion của artists -->
<style>
            .accordion-button:not(.collapsed) {
            border-bottom:solid 4px #696969 ;
            background-color: #f7b948;
            color: white;
        }
            .accordion-button.collapsed {
            color: #333333;
            background: #f3f2f2;
            border: none;
            
        }
            .accordion-button{
                border: 1px solid white;
        }
            .accordion-button:focus {
            box-shadow: none;
            border-color: none;
            
        }
            .accordion-body{
                border-bottom:dotted 4px #696969
        }
        .accordion-item{
            border: none;
            background-color: #f3f2f2;
            color: #696969;
        }
</style>
    
<?php include "footer.php"?>