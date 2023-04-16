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
      <div class="carousel-caption top-0 mt-5">
        <h5 class="mt-5 fs-2 text-warning text-uppercase text-xl-start">Venus Handicraft</h5>
        <p class="text-start text-black fs-4">We are proud to be one of the leading units in providing handicraft products that contribute to bringing handmade products closer to users.</p>
      </div>
    </div>
    <div class="carousel-item active c-item" data-bs-interval="2000">
      <img src="Images/pottery-souvenir-traditional-art.jpg" class="d-block w-100 c-img" alt="img2">
      <div class="carousel-caption top-0 mt-5 ">
        <h5 class="mt-5 fs-3 text-uppercase">First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="Images/indian-handicrafts.jpg" class="d-block w-100 c-img" alt="img3">
      <div class="carousel-caption top-0 mt-5 ">
        <h5 class="mt-5 fs-3 text-uppercase">First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
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
      <div class="col-md-12 fw-bold">
        <h1>Venus Handicraft</h1>
        
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
        <img src="Images/company.jpg" style="height: 300px;border-radius: 10px;" class="d-block w-100" alt="alter" >
      </div>
    </div>
  </div>

</section>



<section style="background-color: #f3f2f2; margin-top:15px; margin-bottom:15px;">
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

<!-- <hr class="hr-blurry" style="width:100%"> -->

<section class="hidden">
  <div class="container">

    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h3 class="mb-3 fw-bold">Handicraft villages</h3>
      </div>
    
    <!-- <div class="col-6 text-right">
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
          <i class="bi bi-arrow-left-square" aria-hidden="true"></i>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
          <i class="bi bi-arrow-right-square" aria-hidden="true"></i>
          <span class="visually-hidden">Next</span>
        </button>
    </div> -->
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
            <div class="carousel-item ">
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
        
        <button class="btn btn-warning"  type="button"><a href="product.php" style="color:white;">
              View more products</a>
            </button>
        
      </div>
    </div>

    <!-- kết thúc phần view more -->

    

  </div>
</section>

<!-- Phần feedback của customer -->
<section style="color: #000; background-color: #f3f2f2;margin-top: 20px;" >
  <div class="container py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
        <h3 class="fw-bold mb-4">Reviews From My Clients</h3>
        <!-- <p class="mb-4 pb-2 mb-md-5 pb-md-0">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
          numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
          quisquam eum porro a pariatur veniam.
        </p> -->
      </div>
    </div>

    <div class="row text-center">
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <!-- <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div> -->
            <h5 class="font-weight-bold"> Sangeeta Malhotra</h5>
            <h6 class="font-weight-bold my-3">Founder at Asian Handicrafts Private Limited</h6>
            <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
            </div>
            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star-half-alt fa-sm text-info"></i>
              </li>
            </ul>
            <p class="mb-2 fst-italic">
              <i class="fas fa-quote-left pe-2"></i>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card">
          <div class="card-body py-4 mt-2"> 
            <!-- <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(15).webp"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div> -->
            <h5 class="font-weight-bold">Maggie McLoan</h5>
            <h6 class="font-weight-bold my-3">Business Owner</h6>
            <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
            </div>
            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
            </ul>
            <p class="mb-2 fst-italic">
              <i class="fas fa-quote-left pe-2"></i>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <!-- <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(17).webp"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div> -->
            <h5 class="font-weight-bold">Alexa Horwitz</h5>
            <h6 class="font-weight-bold my-3">Handicraft Artist</h6>
            <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-half text-warning"></i>
            </div>
            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="far fa-star fa-sm text-info"></i>
              </li>
            </ul>
            <p class="mb-2 fst-italic">
              <i class="fas fa-quote-left pe-2"></i>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- kết thúc phần feedback -->



<section class="hidden">
  <!-- phần kho ảnh -->
  <div class="row mt-3">
    <div class="col-md-12">
      <h1 class=" text-center mb-4 fw-bold">
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
      <form class="form" method="post" action="Home.php">
          <input type="text" required name="email" name="email" class="form-control" placeholder=" Type your email here ...">

          <button type="submit" id="submit" onclick="submit()" style="color:white" class="btnAni btn btn-warning ">Submit</button>
      </form>
<script language="javascript">
    var button = document.getElementById("submit");
    button.onclick = function()
{
    alert("submitt success !");
}
</script>
<style>
    .form-control:focus {
  border-color: none;
  box-shadow: 6px 5px 5px #FFFF2E, 0 0 10px #FFFF2E;
} 
/* Animation left to right cho button */
.btnAni {
    background: #ffd300; /* default color */
    border-color: #ffd300;
    /* "to left" / "to right" - affects initial color */
    background: linear-gradient(to left, #ffd300 50%, #D1D100 50%) right;
    background-size: 200%;
    transition: .5s ease-out;
}
.btnAni:hover {
    background-position: left;
}
</style>
  


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