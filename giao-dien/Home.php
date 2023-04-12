<?php
include 'header.php';
?>

<!-- slider images -->


<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
      aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item c-item" data-bs-interval="10000">
      <img src="Images/carousel1.jpg" class="d-block w-100 c-img" alt="img1">
    </div>
    <div class="carousel-item active c-item" data-bs-interval="2000">
      <img src="Images/pottery-souvenir-traditional-art.jpg" class="d-block w-100 c-img" alt="img2">
    </div>
    <div class="carousel-item c-item">
      <img src="Images/indian-handicrafts.jpg" class="d-block w-100 c-img" alt="img3">
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



<section class="hidden">
  <!-- About Us của cty -->
  <div class="container ">
    <!-- bootstrap "container" sẽ cho content ở giữa màn hình  -->
    <div class="row mt-3">
      <div class="col-md-12 ">
        <h1>Handicrafts</h1>
        <br>
      </div>
      <div class="col-md-6 col-sm-5">
        <br>
        <p>Incepted in 2003, we, Venus Handicrafts, have achieved a remarkable position in the industry for
          manufacturing and supplying of a wide assortment of Glass Stones, Claws and Cup Chains, Claws and Cup Chains
          with Stones, Glass Beads, Plastic Beads and Metal Accessories.
          These are extremely appreciated for their durability and multipurpose uses. The offered products are
          fabricated using modern technology in conformity with industrial standards and guidelines and are broadly used
          in different</p>
        <!-- link để đọc đc thêm -->
        <a href="about.php">Read more</a>
      </div>
      <div class="col-md-6 col-sm-7 " >
        <img src="Images/company.png" style="height: 300px" class="d-block w-100" alt="alter" >
      </div>
    </div>
  </div>

</section>



<section class="hidden">
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
          <img src="Images/trustseal.png"  alt="seal.png" width="90px" height="90px">
        </a>
        <br>
        <span>IndiaMART Certification</span>
        <br>
        <span>Trust Seal Verifiled</span>
      </div>
    </div>
  </div>
</section>

<hr class="hr-blurry" style="width:100%">

<section class="hidden">
  <div class="container">

    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h3 class="mb-3">Handicraft villages</h3>
      </div>
      <!-- <div class="col-6 text-right">
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2"
          data-bs-slide="prev">
          <i class="bi bi-arrow-left-square" aria-hidden="true"></i>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2"
          data-bs-slide="next">
          <i class="bi bi-arrow-right-square" aria-hidden="true"></i>
          <span class="visually-hidden">Next</span>
        </button> -->
      </div>
      <div class="col-12" style="margin:0;padding:0;">
        <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">

          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row gy-3">

                <div class="col-md-4 mb-4 h-100 mt-3">
                  <div class="card">
                    <img class="img-thumbnail d-block" alt="100%x280" src="image_DTB/cói.jpg">
                    <div class="card-body">
                      <h4 class="card-title">Kim Son sedge village</h4>
                      <p class="card-text" style="text-align:justify">Kim Son sedge village has long been famous for sedge cultivation and sedge
                        making with a history of more than 100 years. Products of this most famous traditional craft
                        village in Vietnam are increasingly popular.</p>

                    </div>

                  </div>
                </div>
                <div class="col-md-4 mb-4 h-100 mt-3">
                  <div class="card">
                    <img class="img-thumbnail d-block" alt="100%x280" src="image_DTB/tc.jpg">
                    <div class="card-body">
                      <h4 class="card-title">Phu Yen bottle basket village</h4>
                      <p class="card-text" style="text-align:justify">Phu Yen's bottle basket has the special feature of using only local
                        ingredients. According to local people, bamboo grown on Phu Yen soil has good water resistance,
                        toughness and has a very good source of oat oil </p>

                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4 h-100 mt-3">
                  <div class="card">
                    <img class="img-thumbnail d-block" alt="100%x280" src="image_DTB/trống.jpg">
                    <div class="card-body">
                      <h4 class="card-title">Doi Tam Drum Village</h4>
                      <p class="card-text" style="text-align:justify">Doi Tam drum village is very famous because of its 1000-year history of
                        making drums with many famous craftsmen throughout the region. Accordingly, the drum-making
                        profession here is passed down from father to son </p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="carousel-item">
              <div class="row">

                <div class="col-md-4 mb-4 h-100 mt-3">
                  <div class="card">
                    <img class="img-thumbnail d-block" alt="100%x280" src="image_DTB/GS.jpg">
                    <div class="card-body">
                      <h4 class="card-title">Bat Trang ceramics</h4>
                      <p class="card-text" style="text-align:justify">Bat Trang pottery is a product that converges the soul and quintessence of
                        Vietnamese culture. Bat Trang ceramics, from designs, glazes, drawings to embossed details, are
                        carefully researched and created by Bat Trang artisans.</p>

                    </div>

                  </div>
                </div>
                <div class="col-md-4 mb-4 h-100 mt-3">
                  <div class="card">
                    <img class="img-thumbnail d-block" alt="100%x280" src="image_DTB/lụa.jpg">
                    <div class="card-body">
                      <h4 class="card-title">Van Phuc Silk Village </h4>
                      <p class="card-text" style="text-align:justify">Van Phuc Silk Village is the most concentrated part of the old Ha Dong Silk
                        Village, which is very famous and has gone into poetry, music and painting as a traditional
                        cultural beauty. This is one of the oldest craft villages in Vietnam. </p>

                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4 h-100 mt-3">
                  <div class="card">
                    <img class="img-thumbnail d-block" alt="100%x280" src="image_DTB/tranh.png">
                    <div class="card-body">
                      <h4 class="card-title">Dong Ho folk painting village</h4>
                      <p class="card-text" style="text-align:justify">The East Lake Painting Village in Bac Ninh has long been famous for its
                        valuable and unique products. This is also a place that attracts thousands of tourists every
                        year to learn a little about the traditional craft </p>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="carousel-item">
              <div class="row">

                <div class="col-md-4 mb-4 h-100 mt-3">
                  <div class="card">
                    <img class="img-thumbnail d-block" alt="100%x280" src="image_DTB/đá.jpg">
                    <div class="card-body">
                      <h4 class="card-title">Non Nuoc stone art village</h4>
                      <p class="card-text" style="text-align:justify">Visiting Non Nuoc stone craft village, you not only discover an extremely
                        attractive tourist destination in Da Nang with a peaceful space at the foot of Ngu Hanh Son
                        mountain, but also admire the ingenuity and meticulousness of artisans.</p>

                    </div>

                  </div>
                </div>
                <div class="col-md-4 mb-4 h-100 mt-3">
                  <div class="card">
                    <img class="img-thumbnail d-block" alt="100%x280" src="image_DTB/nón.jpg">
                    <div class="card-body">
                      <h4 class="card-title">conical hat craft village</h4>
                      <p class="card-text" style="text-align:justify">Can Tho is also a place known by the rich diversity of traditional craft
                        villages handed down from generations. One of the famous craft villages is the conical hat craft
                        village in Thoi Tan A hamlet, Thoi Lai district, Can Tho</p>

                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4 h-100 mt-3">
                  <div class="card">
                    <img class="img-thumbnail d-block" alt="100%x280" src="image_DTB/chiếu.jpg">
                    <div class="card-body">
                      <h4 class="card-title">Dinh Yen mat weaving village</h4>
                      <p class="card-text" style="text-align:justify">Next to the vast Hau River of the rich Mekong Delta.This place is also the
                        "cradle" of the famous traditional embroidery craft everywhere Dinh Yen mat market is also known
                        as a "ghost" market by the locals because of its </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>






    <!-- nút view more cho phần products -->

    <div class="row">
      <div class="col-md-12 col-sm-12">
        
        <button class="btn btn-warning"  type="button"><a href="product.php" style="color:#e2e2e2;">
              View more products</a>
            </button>
        
      </div>
    </div>

    <!-- kết thúc phần view more -->

  </div>
</section>

<section class="hidden">
  <!-- phần kho ảnh -->
  <div class="row mt-3">
    <div class="col-md-12">
      <h1 class=" text-center mb-4">
        Gallaries
      </h1>

      <div class="container mt-4">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-4">
            <img class="img-thumbnail shadow rounded mb-4" src="Image_DTB/1.png" alt="Error 404">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <img class="img-thumbnail shadow rounded mb-4" src="Image_DTB/2.jpg" alt="Error 404">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <img class="img-thumbnail shadow rounded mb-4" src="Image_DTB/3.jpg" alt="Error 404">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <img class="img-thumbnail shadow rounded mb-4" src="Image_DTB/4.jpg" alt="Error 404">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <img class="img-thumbnail shadow rounded mb-4" src="Image_DTB/14.jpg" alt="Error 404">
          </div>  
          <div class="col-sm-12 col-md-6 col-lg-4">
            <img class="img-thumbnail shadow rounded mb-4" src="Image_DTB/15.jpg" alt="Error 404">
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- kết thúc kho ảnh -->
</section>
<hr class="hr-blurry" style="width:100%">

<!-- Get in touch text -->
<div class="container">
  <div class="row mb-3">

    <div class="col-md-6 col-sm-12" style="padding-left: 10px;">
      <h3><strong>You want to update news about us ?</strong></h3><br>
      <h5>Register now here !</h5>
      <form class="form" method="post" action="Home.php" >
          <input type="text"  name="email" class="form-control" placeholder=" Type your email here ...">
          
          <button type="submit" style="color:#e2e2e2" class="btn btn-warning ">Submit</button>

        
      </form>

  


    </div>
    <div class="col-md-6 col-sm-12">
      <img class="w-100 d-block" src="Images/fliesMailpng.png" alt="planepaper"   height="100%"  >
      <!-- <img src="" alt="submit" width="100%" height="200px"> -->
    </div>
  </div>
</div>

<?php
include 'connect_db.php';
$email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["email"])) {
    $email = $_POST['email'];
  }
  $sql = "INSERT INTO user (email) VALUES ('$email')";
  mysqli_query($connect, $sql);
}
?>


<?php
include 'footer.php';
?>
</body>
<!-- nút back to the top -->
<button type="button" class="btn btn-warning btn-floating btn-lg" id="btn-back-to-top">
  <i class="bi bi-arrow-up"></i>
</button>


<!-- files JavaScripts -->
<script src="JSHomepage.js"></script>

</html>