<?php
include 'connect_db.php';
include 'header.php';
?>

<br><br><br><br>
<style>
    * {
        box-sizing: border-box;
    }

    .img-magnifier-container {
        position: relative;
    }

    .img-magnifier-glass {
        position: absolute;
        border: 3px solid #000;
        border-radius: 50%;
        cursor: none;
        /*Set the size of the magnifier glass:*/
        width: 100px;
        height: 100px;
    }
</style>







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