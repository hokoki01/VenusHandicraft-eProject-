<?php
include 'header.php';
?>
</head>

<body>

    <div class="container-fluid">
        <div class="row content">

            <div class="col-sm-9">
                <?php
                include 'connect_db.php';
                $Firt_name = "";
                $Last_name = "";
                $Email = "";
                $Phone = "";
                $Address = "";
                $Note = "";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST["Firt_name"])) {
                        $Firt_name = $_POST['Firt_name'];
                    }
                    if (isset($_POST["Last_name"])) {
                        $Last_name = $_POST['Last_name'];
                    }
                    if (isset($_POST["Email"])) {
                        $Email = $_POST['Email'];
                    }
                    if (isset($_POST["Phone"])) {
                        $Phone = $_POST['Phone'];
                    }
                    if (isset($_POST["Address"])) {
                        $Address = $_POST['Address'];
                    }
                    if (isset($_POST["Note"])) {
                        $Note = $_POST['Note'];
                    }
                    $sql = "INSERT INTO contact (Firt_name,Last_name,Email,Phone,Address) VALUES ('$Firt_name', '$Last_name', '$Email','$Phone','$Address','$Note')";

                    if (mysqli_query($connect, $sql)) {
                        echo "thêm dữ liệu thành công";
                    }
                }
                ?>
                <style>
                    body{
                        padding-top: 150px;
                    }
                    * {
                        box-sizing: border-box;
                    }

                    input {
                        width: 100%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        box-sizing: border-box;
                    }

                    label {
                        padding: 12px 12px 12px 0;
                        display: inline-block;
                    }


                    input[type=submit] {
                        background-color: #04AA6D;
                        color: white;
                        padding: 12px 20px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        float: right;
                    }

                    input[type=submit]:hover {
                        background-color: #45a049;
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
                        padding-left : 30% ;
                    }

                    button {
                        background-color: #04AA6D;
                        color: white;
                        padding: 12px 20px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        margin-left: 45%;
                    }

                    h2 {
                        text-align: center;
                    }
                </style>
                <form method="post" action="contact.php">
                    <h2>liên hệ với chúng tôi</h2>
                    <label for="Firt_name">Firt name : </label></td>
                    <input type="text" Id="Firt_name" placeholder="Firt_name" name="Firt_name" required>
                    <label for="Last_name">Last name : </label>
                    <input type="text" Id="Last_name" placeholder="Last_name" name="Last_name" required>
                    <label for="Email">Email : </label>
                    <input type="text" Id="Email" placeholder="Email" name="Email" required>
                    <label for="Phone">Phone : </label>
                    <input type="number" Id="Phone" placeholder="Phone" name="Phone" required>
                    <label for="Address">Address : </label>
                    <input type="text" Id="Address" placeholder="Address" name="Address" required>
                    <label for="Note">Note : </label>
                    <input name="Note" id="Note" placeholder="Note" required></input>
                    <input type="submit" values="send" style="background-color: #04AA6D;color: white;padding: 12px 20px;border: none;border-radius: 4px;cursor: pointer;margin-left: 45%;">
                </form>
            </div>
        </div>
    </div>
</body>

<?php
include 'footer.php';