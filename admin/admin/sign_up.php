<html>

<head>
    <title>sign up</title>
    <link rel="stylesheet" href="web.css">
</head>

<body>


    <form action="sign_up.php" method="post">
        <?php
        include 'connect_db.php';
        $email = "";
        $name = "";
        $password = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["email"])) {
                $email = $_POST['email'];
            }
            if (isset($_POST["name"])) {
                $name = $_POST['name'];
            }
            if (isset($_POST["password"]) && isset($_POST["enter_password"])) {
                $password = $_POST['password'];
                $enter_password = $_POST['enter_password'];
            }
            if ($password == $enter_password) {
                $sql = "INSERT INTO admin (Id ,email, name, password) VALUES ('1','$email', '$name', '$password')";

                if (mysqli_query($connect, $sql)) {
                    header('location: sign_in.php');
                }
            } else {
                echo "vui lòng nhập lại đúng password !";
            }

        }
        ?>
        <table>
            <h2>SIGN UP</h2>
            <tr>
                <th>email or phone number : </th>
                <td><input type="text" name="email" value="" placeholder="email or phone number" required></td>
            </tr>

            <tr>
                <th>User name :</th>
                <td><input type="text" name="name" value="" placeholder="User name" required></td>
            </tr>

            <tr>
                <th>password : </th>
                <td><input type="password" name="password" value="" placeholder="password" required></td>
            </tr>

            <tr>
                <th>Enter the password :</th>
                <td><input type="password" placeholder="Enter the password" name="enter_password" required></td>
            </tr>

        </table>
        <button type="submit">sign up</button><br><br>

        bạn đã có tài khoản ?
        <a href="sign_in.php">sign in</a>
    </form>
    <style>
        body {

            background-image: url(image_DTB/nen.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            padding-right: 100px;
            display: flex;

            justify-content: center;

            align-items: center;
            color: #ccc;
            height: 100vh;

            flex-direction: column;
            text-shadow: 2px 2px 5px red;
            text-align: center;

        }

        form {
            width: 500px;
            border: 3px solid rgb(177, 142, 142);
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        input {
            display: block;
            border: 2px solid #ccc;
            padding: 10px;
            margin: 10px auto;
            border-radius: 5px;
            color: pink;
        }

        label {
            color: white;
            font-size: 18px;
            padding: 10px;
        }

        button {
            background: rgb(35, 174, 202);
            padding: 10px 15px;
            color: white;
            border-radius: 5px;
            margin-right: 10px;
            border: none;
        }

        .error {
            background: #F2DEDE;
            color: #0c0101;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }

        h1 {
            text-align: center;
            color: white;
        }
    </style>
</body>

</html>