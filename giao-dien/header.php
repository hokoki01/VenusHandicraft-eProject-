<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="styleHomepage.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg  fixed-top " style="color: white;">
        <div class="container-fluid">
            <a class="navbar-brand" href="Home.php">
                <i class="bi bi-scissors" style="color:white"></i>
                <span style="color: white;font-family: bradley hand,cursive;">Venus Handicrafts</span></a>
            <span style="padding-right:220px"><i class="bi bi-brush" style="color:white"></i></span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll ms-auto" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Our Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="product_iron.php">Iron</a></li>
                            <li><a class="dropdown-item" href="product_glass.php">Glass</a></li>
                            <li><a class="dropdown-item" href="product_brass.php">Brass</a></li>
                            <li><a class="dropdown-item" href="product_wood.php">Wood</a></li>
                            <li><a class="dropdown-item" href="product_decorative.php">Handicraft Decorative</a></li>
                            <li><a class="dropdown-item" href="product_aluminium.php">Aluminium</a></li>
                            <li><a class="dropdown-item" href="product.php">All Product</a></li>
                        </ul>
                    </li>
                    <style>
                        li {
                            padding-right: 50px;

                        }
                    </style>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" action="header.php" method="get">
                    <input class="form-control me-3"  type="search" placeholder="Search" aria-label="Search"
                        name="search">
                    <button class="btn btn-outline-success" type="submit" name="ok" value="search">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="pading">
        <div class="center">
        </div>

        <?php
        if (isset($_REQUEST['ok'])) {
            $search = addslashes($_GET['search']);
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } else {
                include 'connect_db.php';
                $sql = "SELECT * FROM product where Title LIKE '%$search%'";
                $result = mysqli_query($connect, $sql);
                ?>
                <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333333;">
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <li
                            style="display: block;color: white;text-align: center;padding: 16px;text-decoration: none; float: left;">
                            <a style="display: block;color: white;text-align: center;padding: 16px;text-decoration: none;"
                                href="product_detail.php?Id=<?= $row['Id']; ?>">
                                <img src='image_DTB/<?= $row["Image"]; ?>' class='img-responsive'
                                    style='width:390px ; height :250px; border: 5px solid white;' alt='Image'><br><br>

                                <h4>
                                    <?php echo $row["Title"]; ?>
                                </h4>
                            </a>
                        </li>
                        <?php
                        $i++;
                    }

            }
        }
        ?>
        </ul>

    </div><br>
    <style>
        .button {
            display: inline-block;
            padding: 15px 25px;
            font-size: 24px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }

        .button:hover {
            background-color: #3e8e41
        }

        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>