<!DOCTYPE HTML>
<html>

<head>
    <title>liên hệ</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <?php
    $servername = "localhost";
    $database = "Handicrafts";
    $username = "root";
    $password = "12345678";
    $connect = mysqli_connect($servername, $username, $password, $database);

    if (!$connect) {
        die("Không kết nối :" . mysqli_connect_error());
        // exit();
    }

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

    <div class="menu">
        <ul>

            <li><a href="Home.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact information</a></li>
            <!-- <li><a href="liên hệ.html">Handicrafts products</a></li> -->
        </ul>

    </div>
    <h2>liên hệ với chúng tôi</h2>
    <form method="post" action="nhap.php">

        <table>
            <tr>
                <td><label for="Firt_name">Firt name : </label></td>
                <td><input type="text" Id="Firt_name" placeholder="Firt_name" name="Firt_name" required></td>
            </tr>
            <tr>
                <td><label for="Last_name">Last name : </label></td>
                <td><input type="text" Id="Last_name" placeholder="Last_name" name="Last_name" required></td>
            </tr>
            <tr>
                <td><label for="Email">Email : </label></td>
                <td><input type="text" Id="Email" placeholder="Email" name="Email" required></td>
            </tr>
            <tr>
                <td><label for="Phone">Phone : </label></td>
                <td><input type="number" Id="Phone" placeholder="Phone" name="Phone" required></td>
            </tr>
            <tr>
                <td><label for="Address">Address : </label></td>
                <td><input type="text" Id="Address" placeholder="Address" name="Address" required></td>
            </tr>
            <tr>
                <td><label for="Note">Note : </label></td>
                <td><textarea name="Note" id="Note" cols="30" rows="10" placeholder="Note" required></textarea></td>
            </tr>
            <tr>
                <td><button type="submit">gửi</button></td>
            </tr>
        </table>
    </form>
    <style>
        body {
            background: white;
            padding-right: 10px;
            display: flex;
            justify-content: center;
            color: #0c0101;
            width: 600px;
            height: 100vh;
            flex-direction: column;
            margin-left: 30%;

        }
        button{
            color: red;
        }
        p {
            color: red;
        }

        strong {
            color: red;
        }

        form {
            float: right;
            /* background: linear-gradient(#673FB5 0%, #673FB5 2%, #EFEAFA 2%); */
            width: 500px;
            border: 3px solid rgb(177, 142, 142);
            padding: 20px;
            /* background: rgba(0, 0, 0, 0.5); */
            /* border-radius: 20px; */
            background-color: white;
            text-align: left;
        }

        h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        input {
            display: block;
            /* border: 2px solid #ccc; */

            border: none;
            border-bottom: 2px solid black;


            padding: 10px;
            margin: 10px auto;
            width: 100%;
            color: pink;
            outline: none;
        }

        label {
            font-size: 18px;
            padding: 10px;
        }

        button {
            background: rgb(35, 174, 202);
            padding: 10px 15px;
            border-radius: 5px;
            margin-right: 10px;
            border: none;
        }

        h1 {
            text-align: center;
        }

        .menu {
            background-color: #E8D882;
            width: 200px;
            float: left;
            height: 400px;
        }
    </style>
    </style>

</body>

</html>