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
</style>

<h1 class="text">CONTACT US</h1>
<div class="container ">
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
<div class="row">
            <form method="post" action="contact.php">
                <label for="Name">Nick Name : </label></td>
                <input type="text" Id="Name" placeholder="Name" name="Name" required
                    style="width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;">
                <label for="Email">Email : </label>
                <input type="text" Id="Email" placeholder="Email" name="Email" required
                    style="width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;">
                <label for="Phone">Phone : </label>
                <input type="text" Id="Phone" placeholder="Phone" name="Phone" required
                    style="width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;">
                <label for="Note">Note : </label>
                <textarea name="Note" id="Note" style="width: 100%;height : 120px;" placeholder="Note"
                    required></textarea>
                <div class="col-md-12 mx-auto ">
                    <button type="sunmit" values="send" class="btn btn-success">send</button>
                </div>
            </form>
</div>
        </div>
    </div>  
</div >
<hr>
<!-- Phần FAQs -->
<div class="container mt-3 mb-4">
            <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Accordion Item #1
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordion Item #2
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accordion Item #3
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            </div>
                    <!-- kết thúc phần FAQs -->
</div>
<?php
include 'footer.php';
?>