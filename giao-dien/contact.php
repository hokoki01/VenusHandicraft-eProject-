<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<?php
include 'connect_db.php';
include 'header.php';
?>
<style>
    .text {
        background: url(Images/themes.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 100%;
        height: 300px;
        color: #FFD300;
        padding-top: 150px;
        text-align: center;
        text-decoration: none;
    }
            input:focus,
              textarea:focus,
              .form-control{
                outline: red;
                box-shadow: none;
              }
</style>

<h1 class="text">CONTACT US</h1>
<div class="container mb-4 ">
    <div class="row">
        <div class="col-sm-12 col-md-6  mt-5">
            <iframe class="ratio ratio-16x9"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251637.99536054913!2d105.6189039771115!3d9.779291669518413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0629029bf47a3%3A0xd8b03c9f3b378d86!2zUGjDsm5nIEPhuqNuaCBTw6F0IELhuqNvIFbhu4cgJiBDxqEgxJDhu5luZw!5e0!3m2!1svi!2s!4v1680858663348!5m2!1svi!2s"
                width="640" height="480" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>
        <div class="col-sm-12 col-md-6  mt-5">
            <?php
            include 'connect_db.php';
            $Name = $Email = $Phone = $Note = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (isset($_POST["Name"])) {
                    $Name = $_POST['Name'];
                }
                if (isset($_POST["Email"])) {
                    $Email = $_POST['Email'];
                }
                if (isset($_POST["Phone"])) {
                    $Phone = $_POST['Phone'];
                }
                if (isset($_POST["Note"])) {
                    $Note = $_POST['Note'];
                }
                $sql = "INSERT INTO contact (Name,Email,Phone,Note) VALUES ('$Name', '$Email','$Phone','$Note')";

                if (mysqli_query($connect, $sql)) {
                    echo "thêm dữ liệu thành công";
                }
            }
            ?>
<div class="row ">
            <form method="post" action="contact.php" >

                <label for="Name">Nick Name : </label></td>
                <input type="text" Id="Name" placeholder="Full Name" name="Name" required
                class="form-control  " row="5">

                <label for="Email">Email : </label>
                <input type="text" Id="Email" placeholder="Email" name="Email" required
                class="form-control " row="5">

                <label for="Phone">Phone : </label>
                <input type="text" Id="Phone" placeholder="Phone Number" name="Phone" required
                class="form-control " row="5">

                <label for="Note">Message : </label>
                <textarea name="Note" id="Note"  class="form-control " rows="8" placeholder="What ever you need" required></textarea>

                <div class="col-md-12 ">
                    <button type="sunmit" values="send" class="btn btn-warning" style="width:300px;color:white">Send</button>
                </div>

            </form>
</div>
        </div>
    </div>  
</div >


<!-- Phần FAQs -->
<section style="background-color: #f3f2f2;">
<div class="container mt-3 mb-1" >
<div class="row">

        <div class="col-md-6 col-sm-12  mb-4">
                <h1 class="mb-4">Frequently Asked Questions</h1>
            
 
            <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                What does your company manufacturing and exporting ?
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    We manufacturing and exporting  handicrafts products.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Where do you export ?
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    We export  to the <strong>global</strong> importers,wholesalers and retailers.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Where is your company based?
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                     Our company headquartered is in <strong> India</strong>.
                </div>
                </div>
            </div>  
            </div>  
        </div>
        <div class="col-md-6 col-sm-12">
            <img src="Images/FAQsfinal.png" alt="" class="w-100 h-100  d-block">
        </div>
</div>
</div>
</section>

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


<?php
include 'footer.php';
?>
