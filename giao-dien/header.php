<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleIndex.css">
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
                        </ul>
                    </li>
                    <style>
                        li{
                            padding-right: 50px;
                        }
                    </style>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
