<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylePage1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- link để tải icon --> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    
<!-- Navigation Bar  -->
        <nav class="navbar navbar-expand-md  fixed-top justify-content-end">
                <div class="container-fluid">
                    <!-- bootstrap "container-fluid" sẽ cho content ở full màn hình  -->
            <!-- thanh mở menu -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <a class="navbar-brand" href="displayUI.html" style="text-decoration: none;">
                            <img src="brainFuck.jpg" alt="suckAssJobs.FukU" width="40px" class="rounded-pill">
                            Venus Handicrafts
                        </a>
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll nav-tabs" style="--bs-scroll-height: 100px;">
                <!-- navbar-1 -->
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                <!-- navbar-2 -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Our Products
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Iron</a></li>
                                    <li><a class="dropdown-item" href="#">Glass</a></li>
                                    <!-- <li><hr class="dropdown-divider"></li> -->
                                    <li><a class="dropdown-item" href="#">Brass</a></li>
                                    <li><a class="dropdown-item" href="#">Wood</a></li>
                                    <li><a class="dropdown-item" href="#">Handicraft Decorative</a></li>
                                    <li><a class="dropdown-item" href="#">Aluminium</a></li>
                                </ul>
                            </li>
                <!-- navbar-3 -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    About Us
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <!-- <li><hr class="dropdown-divider"></li> -->
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
            <!-- link bình thường -->
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
            <!-- thanh search bar -->
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>


<!-- slider images -->
<div class="container-fluid">
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item rong" data-bs-interval="10000">
        <img src="coconutP.jpg" class="d-block w-100 cao" alt="img1">
      </div>
      <div class="carousel-item  active  rong" data-bs-interval="2000">
        <img src="product1.jpg" class="d-block w-100 cao " alt="img2">
      </div>
      <div class="carousel-item rong">
        <img src="vietnam-handicraft-bamboo-products.jpg" class="d-block w-100 cao" alt="img3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<!-- About Us của cty -->
<div class="container-fluid bg-indigo">
<!-- bootstrap "container" sẽ cho content ở giữa màn hình  -->
<div class="row">
    <div class="col-md-12">
        <h1>About Us</h1>
        <br>
    </div>
    <div class="col-md-5">
    <br>
     <p>Incepted in 2003, we, Venus Handicrafts, have achieved a remarkable position in the industry for manufacturing and supplying of a wide assortment of Glass Stones, Claws and Cup Chains, Claws and Cup Chains with Stones, Glass Beads, Plastic Beads and Metal Accessories. 
        These are extremely appreciated for their durability and multipurpose uses. The offered products are fabricated using modern technology in conformity with industrial standards and guidelines and are broadly used in different</p> 
<!-- link để đọc đc thêm -->
        <a href="">Read more</a>   
    </div>
    <div class="col-md-5">
        <img  src="ceremal.jpg" alt="alter" width="650px" >
    </div>
</div>        
</div>

<!-- thông tin cơ bản của cty -->
<div class="container-fluid">
<div class="row">
    <div class="col-md-4">
        <i class="bi bi-briefcase"></i>
        <br>
        <strong><span>Nature of Business</span></strong>
        <br>
        <span>Exporter and Manufacturer</span>
    </div>
    <div class="col-md-4">
        <i class="bi bi-buildings"></i>
        <br>
        <strong><span>Year of Establishment</span></strong>
        <br>
        <span>1960</span>
    </div>
    <div class="col-md-4">
        <i class="bi bi-person-vcard-fill"></i>
        <br>
        <strong><span>Legal Status of Firm</span></strong>
        <br>
        <span>Individual - Proprietor</span>
    </div>
    <div class="col-md-4">
        <i class="bi bi-globe2"></i>
        <br>
        <strong><span>Import Export Code(IEC)</span></strong>
        <br>
        <span>05030*****</span>
    </div>
    <div class="col-md-4">
        <i class="bi bi-send-check-fill"></i>
        <br>
        <strong><span>GST Number</span></strong>
        <br>
        <span>07AAEPZ6229L1Z2</span>
    </div>
    <div class="col-md-4">
        <a href="https://trustseal.indiamart.com/members/venushandicrafts" target="_blank">
            <img src="trustseal.png" alt="seal.png" width="60px" height="60px">
        </a>
        <br>
        <span>IndiaMART Certification</span>
        <br>
        <span>Trust Seal Verifiled</span>
    </div>
</div>
</div>

<div class="container">
<div class="row">
    <div class="col-md-12">
        <h1>Our Products</h1>
    </div>
<!-- Card products 1 -->
    <div class="col-md-4">
        <div class="card h-100" style="width: 18rem;">
            <img src="ngocXanh.jpg" class="card-img-top" alt="crystals">
            <div class="card-body">
              <h5 class="card-title">Chunky Boi crystals</h5>
              <p class="card-text">
                <a href="" class="stretched-link">Crystals</a>
              </p>
              <p class="card-text">
                <a href="#" class="stretched-link text-danger" style="position: relative;">Stretched link will not work here, because <code>position: relative</code> is added to the link</a>
              </p>
              <p class="card-text bg-light" style="transform: rotate(0);">
                This <a href="#" class="text-warning stretched-link">stretched link</a> will only be spread over the <code>p</code>-tag, because a transform is applied to it.
              </p>
            </div>
          </div>
    </div>
<!-- Card products 2 -->
    <div class="col-md-4">
        <div class="card h-100" style="width: 18rem;">
            <img src="chuoiNgoc.jpg" class="card-img-top" alt="error">
            <div class="card-body">
              <h5 class="card-title">Color Beeds</h5>
              <p class="card-text">
                <a href="" class="stretched-link">Glass Beeds</a>
              </p>
              <p class="card-text">
                <a href="#" class="stretched-link text-danger" style="position: relative;">Stretched link will not work here, because <code>position: relative</code> is added to the link</a>
              </p>
              <p class="card-text bg-light" style="transform: rotate(0);">
                This <a href="#" class="text-warning stretched-link">stretched link</a> will only be spread over the <code>p</code>-tag, because a transform is applied to it.
              </p>
            </div>
          </div>
    </div>
<!-- Card products 3 -->
    <div class="col-md-4">
        <div class="card h-100" style="width: 18rem;">
            <img src="metal.jpg" class="card-img-top" alt="metal">
            <div class="card-body">
              <h5 class="card-title">Metal accessories</h5>
              <p class="card-text">
                <a href="" class="stretched-link">Metal thinging</a>
              </p>
              <p class="card-text">
                <a href="#" class="stretched-link text-danger" style="position: relative;">Stretched link will not work here, because <code>position: relative</code> is added to the link</a>
              </p>
              <p class="card-text bg-light" style="transform: rotate(0);">
                This <a href="#" class="text-warning stretched-link">stretched link</a> will only be spread over the <code>p</code>-tag, because a transform is applied to it.
              </p>
            </div>
          </div>
    </div>
<!-- nút view more cho phần products -->
<div class="d-grid col-6 mx-auto">
    <button class="btn btn-primary" type="button">
        <a href="" style="color: black;">View more products</a>
    </button>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
  <h1>Gallary</h1>
  
</div>
</div>





            <footer>
            <p class="float-end">
                <a href="displayUI.html">Back to top</a>
            </p>
            <p>
                © 2017–2021 Company, Inc. · 
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
            </p>
        </footer>



            
    
</body>
</html>