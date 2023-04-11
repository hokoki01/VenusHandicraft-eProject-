
<?php
include 'connect_db.php';
include 'header.php';
?>
<style>
    .text {
        background: url(image_DTB/b.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 100%;
        height: 300px;
        color: white;
        padding-top: 150px;
        text-align: center;
        text-decoration: none;
    }
</style>

<h1 class="text">CONTACT US</h1>
<div class="container mau">
    <div class="row">
        <div class="col">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1dhxgJud_QnSwU2fxYDfaPVQskNyM5Ok&ehbc=2E312F"
                width="640" height="480"></iframe>
        </div>
        <div class="col">
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
                $sql = "INSERT INTO contact (Name,Email,Phone,Note) VALUES ('$Name', '$Email','$Phone','$Note') ";
                $sql1 = "INSERT INTO user (Name,Email,Phone) VALUES ('$Name', '$Email','$Phone')";
                mysqli_query($connect, $sql1);
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
                <input type="number" Id="Phone" placeholder="Phone" name="Phone" required
                    style="width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;">
                <label for="Note">Note : </label>
                <textarea name="Note" id="Note" style="width: 100%;height : 120px;" placeholder="Note"
                    required></textarea>
                <div class="col-md-12 mx-auto ">
                    <button type="sunmit" id="submit" values="send" class="btn btn-success">send</button>
                </div>
            </form>
        </div>
    </div>
</div>

<br><br><br>

<?php
include 'footer.php';
?>