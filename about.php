<html lang="en">

<head>
    <title>About us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->

    <style>
        #menu {
            padding: 5px;
            padding-left: 15px;
            padding-right: 15px;
            background-color: #ffffff;
            border-radius: 0 0 5px 5px;
        }

        h1 {
            font-family: Georgia, serif;
            border-bottom: 3px solid #cc9900;
            color: #996600;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <div id="menu">
        <h1>About Us</h1>
        <p>Lorem Ipsum Porem Lorem Ipsum Porem</p>
    </div>
    <div class="container text-center">
        <div class="row">
            <?php
            session_start();
            $conn = mysqli_connect('localhost', 'root', '12345678', 'hadicaraft');
            if (!$conn) {
                die("error connect to database" . mysqli_connect_error());
            }
            $count = 0;
            $result = mysqli_query($conn, "SELECT *FROM product");
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="col-sm-4">
                    <?php
                    $image = $row["Image"];
                    echo "<img src='image_DTB/$image' class='img-responsive' style='width:300%' alt='Image'>";
                    ?>
                </div>
                <!-- <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"> -->
                <p>
                    <?php echo $row["Title"]; ?><br>
                    <br>
                    <?php echo $row["Description"]; ?><br>
                    <?php
                    $i++;
            }
            ?>
            </p>
        </div>
    </div><br>
</body>

</html>