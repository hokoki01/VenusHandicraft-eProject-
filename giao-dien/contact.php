
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
        color:#FFD300;
        padding-top: 150px;
        text-align: center;
        text-decoration: none;

    }
</style>

<h1 class="text">CONTACT US</h1>
<div class="container mau">
    <div class="row">
        <div class="col-sm-12 col-md-6  mt-5">
        <iframe  class="ratio ratio-16x9" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251637.99536054913!2d105.6189039771115!3d9.779291669518413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0629029bf47a3%3A0xd8b03c9f3b378d86!2zUGjDsm5nIEPhuqNuaCBTw6F0IELhuqNvIFbhu4cgJiBDxqEgxJDhu5luZw!5e0!3m2!1svi!2s!4v1680858663348!5m2!1svi!2s" 
        width="640" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    
        </div>
        <div class="col-sm-12 col-md-6  mt-5">
            <?php
            include 'connect_db.php';
            $Name = $Email = $Phone = $Note = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (isset($_POST["Name"])) {
                    $Email = $_POST['Name'];
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

            <form method="post" action="contact.php">

                <label for="Name">Name : </label></td>
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

<br><br><br>

<?php
include 'footer.php';
?>