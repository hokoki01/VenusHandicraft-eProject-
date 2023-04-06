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
  <div class="container bg-indigo">
    <!-- bootstrap "container" sẽ cho content ở giữa màn hình  -->
    <div class="row ">
      <div class="col-md-12 ">
        <h1>Handicrafts</h1>
        <br>
      </div>
      <div class="col-md-6 col-sm-12">
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
      <div class="col-md-6 col-sm-12">  
        <img src="Images/aboutUsImg.jpg" style="height:100%;width:100%;object-fit:cover;" alt="alter" width="650px">
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
          <img src="Images/trustseal.png" alt="seal.png" width="90px" height="90px">
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
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h3 class="mb-3">Our Products</h3>
      </div>
      <div class="col-6 text-right">
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2"
          data-bs-slide="prev">
          <i class="bi bi-arrow-left-square" aria-hidden="true"></i>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2"
          data-bs-slide="next">
          <i class="bi bi-arrow-right-square" aria-hidden="true"></i>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="col-12" style="margin:0;padding:0;">
        <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">

          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">

                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img class="img-thumbnail" alt="100%x280"
                      src="image_DTB/wood.jpg" >
                    <div class="card-body">
                      <h4 class="card-title">Sản phẩm thủ công mỹ nghệ dừa Bến Tre</h4>
                      <p class="card-text">Bến Tre được thiên nhiên ưu đãi với cảnh quan sông nước hữu tình, những vườn cây ăn trái sum suê, những làng nghề thủ công truyền thống đã tạo nên sức hút với du khách trong và ngoài nước</p>

                    </div>

                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img class="img-thumbnail" alt="100%x280"
                      src="image_DTB/TMTD.jpg" >
                    <div class="card-body">
                      <h4 class="card-title">Làng nghề khai thác thương mại tự do</h4>
                      <p class="card-text">Bằng việc giảm mạnh thuế suất nhập khẩu, các FTA đã tạo thuận lợi rất lớn cho hàng Việt Nam, trong đó có sản phẩm thủ công mỹ nghệ làng nghề mở rộng xuất khẩu.</p>

                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3" >
                  <div class="card">
                    <img class="img-thumbnail" alt="100%x280"
                      src="image_DTB/a.jpg">
                    <div class="card-body">
                      <h4 class="card-title">Hội chợ làng nghề ngày nay</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="carousel-item">
              <div class="row">

                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img class="img-thumbnail" alt="100%x280"
                      src="image_DTB/GS.jpg">
                    <div class="card-body">
                      <h4 class="card-title">Gốm sứ bát tràng</h4>
                      <p class="card-text">Gốm Bát Tràng là sản phẩm hội tụ hồn cốt, tinh hoa văn hóa Việt. Gốm Sứ Bát Tràng từ kiểu dáng, nước men, tích vẽ cho đến những chi tiết đắp nổi đều được người nghệ nhân Bát Tràng dày công nghiên cứu và tạo ra</p>

                    </div>

                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img class="img-thumbnail" alt="100%x280"
                      src="image_DTB/lụa.jpg">
                    <div class="card-body">
                      <h4 class="card-title">Làng lục Vạn Phúc </h4>
                      <p class="card-text">Làng lụa Vạn Phúc chính là phần cô đặc nhất của Làng lụa Hà Đông xưa, vốn rất nổi tiếng và đã đi vào thơ ca nhạc họa như một nét đẹp văn hóa truyền thống. Đây là một trong những làng nghề lâu đời bậc nhất Việt Nam, nằm bên bờ sông Nhuệ. </p>

                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img class="img-thumbnail" alt="100%x280"
                      src="image_DTB/tranh.png">
                    <div class="card-body">
                      <h4 class="card-title">Làng tranh dân gian đông hồ - Bắc Ninh</h4>
                      <p class="card-text">Làng tranh Đông hồ Bắc Ninh từ lâu đã nổi tiếng với những sản phẩm tranh đông hồ có giá trị và đặc sắc. Đây cũng là nơi thu hút hàng ngàn du khách ghé thăm mỗi năm để tìm hiểu đôi nét về làng nghề truyền thống tại Bắc Ninh - làng tranh Đông hồ. </p>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="carousel-item">
              <div class="row">

                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img class="img-thumbnail" alt="100%x280"
                      src="image_DTB/đá.jpg">
                    <div class="card-body">
                      <h4 class="card-title">Làng đá mỹ nghệ non nước - Đà Nẵng</h4>
                      <p class="card-text">Đến thăm làng nghề đá Non Nước, bạn không chỉ được khám phá một địa điểm du lịch Đà Nẵng vô cùng hấp dẫn với không gian yên bình dưới chân núi Ngũ Hành Sơn mà còn được chiêm ngưỡng sự tài khéo, công phu của những nghệ nhân.</p>

                    </div>

                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img class="img-thumbnail" alt="100%x280"
                      src="image_DTB/nón.jpg">
                    <div class="card-body">
                      <h4 class="card-title">Làng nghề chằm nón lá Thới Tân Cần Thơ</h4>
                      <p class="card-text">Bên cạnh vẻ đẹp trù phú mà thiên nhiên ban tặng, Cần Thơ còn là nơi được mọi người biết đến bởi sự đa dạng phong phú về các làng nghề truyền thống được lưu truyền từ nhiều thế hệ. Một trong những làng nghề nổi tiếng đó là làng nghề chằm nón lá tại ấp Thới Tân A, huyện Thới Lai, Cần Thơ, với lịch sử hơn lâu đời hơn 70 năm.</p>

                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img class="img-thumbnail" alt="100%x280"
                      src="image_DTB/chiếu.jpg">
                    <div class="card-body">
                      <h4 class="card-title">Làng dệt chiếu Định Yên - Đồng Tháp</h4>
                      <p class="card-text">Cạnh bờ sông Hậu mênh mang của Đồng bằng sông Cửu Long trù phú có một làng nghề dệt chiếu rất lâu đời và ngôi chợ hơn 100 năm tuổi thuộc huyện Lấp Vò, tỉnh Đồng Tháp. Chợ chiếu Định Yên còn được người dân địa phương gọi là chợ “ma” bởi sinh hoạt khá lạ lùng của nó!</p>
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
        <div class="d-grid col-6 mx-auto">
          <a href="product.php" style="color:black"><button class="btn btn-primary " type="button">
              View more products
            </button></a>
        </div>
      </div>
    </div>

    <!-- kết thúc phần view more -->

  </div>
</section>

<section class="hidden">
  <!-- phần kho ảnh -->
  <div class="row">
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
  <div class="row">
    <div class="col-md-12 col-sm-12" style="text-align:left; padding:30px;">
      <h3><strong>you want to update news about us</strong></h3><br>
      <h5>Sign up to stay up to date with the latest on promotions, products and events.</h5>

      <form class="form" method="post" action="Home.php">
        <input type="text" class="form__field"
          style=" width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;border: none;border-bottom: 2px solid red;"
          placeholder="Enter name" required name="name" />
        <input type="email" class="form__field"
          style=" width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;border: none;border-bottom: 2px solid red;"
          placeholder="Enter Email" required  name="email"/>
        <input type="number" class="form__field"
          style=" width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;border: none;border-bottom: 2px solid red;"
          placeholder="Enter phone" required name="phone" />
        <button type="submit" class="btn btn-warning" name="BTNsubmit">Submit</button>
      </form>

      <br>


    </div>
  </div>
</div>
<?php
include 'connect_db.php';
$name = $email = $phone = $Address = $Note = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["name"])) {
    $name = $_POST['name'];
  }
  if (isset($_POST["email"])) {
    $email = $_POST['email'];
  }
  if (isset($_POST["Email"])) {
    $Email = $_POST['Email'];
  }
  if (isset($_POST["phone"])) {
    $phone = $_POST['phone'];
  }
  $sql = "INSERT INTO user (name,email,phone) VALUES ('$name', '$email','$phone')";

  if (mysqli_query($connect, $sql)) {
    echo "thêm dữ liệu thành công";
    header('location : Home.php');
  }
}
?>


<!-- test footer -->
<footer>
  <div class="container">
    <!--Bắt Đầu Nội Dung Giới Thiệu-->
    <div class="noi-dung about">
      <h2>About Us</h2>
      <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium dolores alias ipsa vel hic
        tempore exercitationem ipsam explicabo repudiandae ut consectetur qui, earum at nostrum perspiciatis
        asperiores necessitatibus facilis esse.
      </p>
      <ul class="social-icon">
        <li><a href=""><i class="bi bi-facebook"></i></a></li>
        <li><a href=""><i class="bi bi-twitter"></i></a></li>
        <li><a href=""><i style="color:azure" class="bi bi-instagram"></i></a></li>
        <li><a href=""><i style="color:azure" class="bi bi-tiktok"></i></a></li>
      </ul>
    </div>
    <!--Kết Thúc Nội Dung Giới Thiệu-->
    <!--Bắt Đầu Nội Dung Đường Dẫn-->
    <div class="noi-dung links">
      <h2>Site Map</h2>
      <ul class="Olist">
        <li><a class="dot" href="#">Home</a></li>
        <li><a class="dot" href="about.php">About Us</a></li>
        <li><a class="dot" href="contact.php">Contact Us</a></li>
        <li><a class="dot" href="product.php">Our Products</a></li>
      </ul>
    </div>
    <!--Kết Thúc Nội Dung Đường Dẫn-->
    <!--Bắt Đâu Nội Dung Liên Hệ-->
    <div class="noi-dung contact">
      <h2>Get in touch with us</h2>
      <ul class="info">
        <li>
          <a
            href="https://www.google.com/maps/place/%C4%90%E1%BA%A3o+B%E1%BA%AFc+Sentinel/@11.5571647,92.2065715,13z/data=!3m1!4b1!4m6!3m5!1s0x30863a35c7c1b4e1:0x22f2e4fd1e2aa9c5!8m2!3d11.5503652!4d92.2335066!16zL20vMDR0anpf"><span><i
                style="color: red;" class="bi bi-geo-alt-fill"></i></span>
            <span>
              1972/73,Shop No.2,Captain Tapan kapoor market,
              Chandni Chowk, Delhi-110006, India.
            </span></a>
        </li>
        <li>
          <span><i style="color:#0A7029" class="bi bi-telephone-forward-fill"></i></span>
          <p><a href="#">+84 123 456 789</a>
            <br />
            <a href="#">+84 987 654 321</a>
          </p>
        </li>
        <li>
          <span><i style="color:#FFC30B" class="bi bi-envelope-at-fill"></i></span>
          <p><a href="#">username@mail.com</a></p>
        </li>
      </ul>
    </div>
    <!--Kết Thúc Nội Dung Liên Hệ-->
  </div>
</footer>
</body>
<!-- nút back to the top -->
<button type="button" class="btn btn-warning btn-floating btn-lg" id="btn-back-to-top">
  <i class="bi bi-arrow-up"></i>
</button>

<!-- Messenger Chat plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "106521525738447");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function () {
    FB.init({
      xfbml: true,
      version: 'v16.0'
    });
  };

  (function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<!-- files JavaScripts -->
<script src="JSHomepage.js"></script>

</html>