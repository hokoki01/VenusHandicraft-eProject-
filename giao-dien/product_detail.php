<?php
include 'connect_db.php';
include 'header.php';
$item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 1;
$current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
$offset = ($current_page - 1) * $item_per_page;
$total_records = mysqli_query($connect, "SELECT * FROM artist");
?>
<br><br><br>
<div class="container-fluid p-5  text-center text-success">
    <h2 style="Text-decoration : none;">Product Detail</h2><br>
</div>
<div class="container">
    <table class="table table-hover table-bordered">
        <tbody>
            <?php
            if (isset($_GET['Id'])) {
                $product_id = mysqli_real_escape_string($connect, $_GET['Id']);
                $query = "SELECT * FROM product WHERE Id='$product_id' ";
                $query_run = mysqli_query($connect, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    $product = mysqli_fetch_array($query_run);
                    ?>
                    <div class="card-header">
                        <h4>
                            <a href="Home.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>

                    <div class="row g-3">

                        <div class="col">
                            <div class="img-magnifier-container">
                                <img id="myimage" src='image_DTB/<?= $product['Image']; ?>' class='img-responsive'
                                    style='width:100%;border: 5px solid green;' alt='Image'>
                            </div>

                        </div>
                        <div class="col">
                            <h5 class="card-title">


                                <div class="container">
                                    <div class="jumbotron">
                                        <!-- for page header -->
                                        <h4 style="color: green">PRODUCT NAME</h4><br>
                                        <h4 style="color: blue ;">
                                            <?= $product['Title']; ?>

                                        </h4><br><br>

                                        <h4 style="color: green">PRODUCT ATTRIBUTES</h4><br>
                                        <p style="color: #000">
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
            </div>

        </tbody>
    </table>
    <div class="container-fluid p-5 bg-white text-secondary text-center">
        <h2 style="Text-decoration : none;">similar product</h2><br>
    </div>
    <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #fff;">

        <?php

        $count = 0;
        $category = $product['Category_id'];

        $result = mysqli_query($connect, "SELECT * FROM product where Category_id = $category and Id != $product_id ");
        // include 'show_product.php';
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <li style="display: block;color: black;text-align: center;padding: 16px;text-decoration: none; float: left;">
                <a style="display: block;color: blackite;text-align: center;padding: 16px;text-decoration: none;"
                    href="product_detail.php?Id=<?= $row['Id']; ?>">
                    <img src='image_DTB/<?= $row["Image"]; ?>' class='img-responsive'
                        style='width:320px ; height :300px; border: 5px solid Violet;' alt='Image'><br><br>

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






    <div class="container-fluid p-5 bg-success text-white text-center">
        <h2 style="Text-decoration : none;">Handicrafts are traditional products in Vietnamese craft villages</h2><br>
        <p>One of the most popular and loved industries in this era. Thanks to the ingenuity and meticulousness of the
            artisans, they have made very eye-catching finished products. Moreover, this is a very successful branch of
            the crafting industry. You know, the handicrafts are made 100% by hand and with the whole heart of the
            artisan.</p>
    </div>
    <?php
    $count = 0;
    $result = mysqli_query($connect, "SELECT * FROM artist LIMIT " . $item_per_page . " OFFSET $offset");
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <div class="container">
            <table class="table table-hover table-bordered">
                <tbody>


                    <div class="row g-3">

                        <div class="col">
                            <br><br>
                            <a
                                href="https://www.google.com/search?q=Artist+<?php echo $row['name'] ?>&sourceid=chrome&ie=UTF-8">
                                <img src='image_DTB/<?php echo $row['image'] ?>' class='img-responsive' alt='Image'
                                    width="100%"><br><br>
                                <h1 class="text-success" style="Text-decoration : none; text-align:center;">Artist
                                    <?php echo $row['name'] ?>
                                </h1>
                            </a>
                        </div>
                        <div class="col">
                            <h5 class="card-title">
                                <div class="container">
                                    <div class="jumbotron">
                                        <div class="accordion" id="accordionExample">
                                            <div class="container mt-5">
                                                <div class="row">
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

                                                    <?php
                                                    $i++;
    }
    ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- </div> -->
                    </div>

                </div>
            </tbody>
        </table>
    </div>
    <div class="col-md-12">
        <h3>xem thêm các nghệ nhân khác tại đây</h3>
        <?php
        $total_records = $total_records->num_rows;
        $total_page = ceil($total_records / $item_per_page);

        for ($num = 1; $num <= $total_page; $num++) {
            ?>
            <a href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>" class="btn btn-outline-success "><?= $num ?></a>
            <?php
        }

        ?>
    </div>
</div>
</div>
<script>
    function magnify(imgID, zoom) {
        var img, glass, w, h, bw;
        img = document.getElementById(imgID);
        glass = document.createElement("DIV");
        glass.setAttribute("class", "img-magnifier-glass");
        img.parentElement.insertBefore(glass, img);
        glass.style.backgroundImage = "url('" + img.src + "')";
        glass.style.backgroundRepeat = "no-repeat";
        glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
        bw = 3;
        w = glass.offsetWidth / 2;
        h = glass.offsetHeight / 2;
        glass.addEventListener("mousemove", moveMagnifier);
        img.addEventListener("mousemove", moveMagnifier);
        glass.addEventListener("touchmove", moveMagnifier);
        img.addEventListener("touchmove", moveMagnifier);
        function moveMagnifier(e) {
            var pos, x, y;
            e.preventDefault();
            pos = getCursorPos(e);
            x = pos.x;
            y = pos.y;
            if (x > img.width - (w / zoom)) { x = img.width - (w / zoom); }
            if (x < w / zoom) { x = w / zoom; }
            if (y > img.height - (h / zoom)) { y = img.height - (h / zoom); }
            if (y < h / zoom) { y = h / zoom; }
            glass.style.left = (x - w) + "px";
            glass.style.top = (y - h) + "px";
            glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
        }
        function getCursorPos(e) {
            var a, x = 0, y = 0;
            e = e || window.event;
            a = img.getBoundingClientRect();
            x = e.pageX - a.left;
            y = e.pageY - a.top;
            x = x - window.pageXOffset;
            y = y - window.pageYOffset;
            return { x: x, y: y };
        }
    }
</script>
<script>
    magnify("myimage", 3);
</script>