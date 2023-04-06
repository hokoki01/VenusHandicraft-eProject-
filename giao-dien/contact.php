<!--  -->

<?php
include 'connect_db.php';
include 'header.php';
?>
<h2>Liên hệ với chúng tôi</h2>
<div class="container">
    <table class="table table-hover table-bordered">
        <tbody>
            <div class="row g-3">

                <div class="col">
                    <iframe
                        src="https://www.google.com/maps/d/u/0/embed?mid=1dhxgJud_QnSwU2fxYDfaPVQskNyM5Ok&ehbc=2E312F"
                        width="640" height="480"></iframe>
                </div>
                <div class="col">
                
                    <h5 class="card-title">


                        <div class="container">
                            
                            <div class="jumbotron">
                                <?php
                                include 'connect_db.php';
                                $Name =  $Email = $Phone = $Note = "";
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
                                <style>
                                    body {
                                        padding-top: 150px;
                                        background-color: peachpuff;
                                    }

                                    * {
                                        box-sizing: border-box;
                                    }

                                    label {
                                        padding: 12px 12px 12px 0;
                                        display: inline-block;
                                    }


                                    .container {
                                        border-radius: 5px;
                                        padding: 20px;
                                    }

                                    .col-25 {
                                        float: left;
                                        width: 25%;
                                        margin-top: 6px;
                                    }

                                    .col-75 {
                                        float: left;
                                        width: 75%;
                                        margin-top: 6px;
                                    }

                                    .row:after {
                                        content: "";
                                        display: table;
                                        clear: both;
                                    }

                                    @media screen and (max-width: 600px) {

                                        .col-25,
                                        .col-75,
                                        input[type=submit] {
                                            width: 100%;
                                            margin-top: 0;
                                        }
                                    }

                                    form {
                                        float: right;
                                        padding-left: 30%;
                                    }

                                    h2 {
                                        text-align: right;
                                        padding-right: 21%;
                                    }
                                 

                                    
                                </style>
                                
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
                                    <textarea name="Note" id="Note" placeholder="Note" required
                                        style="width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;"></textarea>
                                    <input type="submit" values="send"
                                        style="background-color: #04AA6D;color: white;padding-left: 12px 20px;border: none;border-radius: 4px;cursor: pointer;text-align:center; width:30%;height:40px;">
                                </form>
                            </div>

                        </div>

                </div>

        </tbody>
    </table>
</div>




<?php
include 'footer.php';?>