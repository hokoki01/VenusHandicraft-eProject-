<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

</head>

<body>

    <?php
    session_start();
    include 'connect_db.php';
    $sql = "SELECT name,password FROM admin";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $name_check = $row["name"];
            $pass_check = $row["password"];
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['password'] = $_POST['password'];
                if ($_SESSION['name'] == $name_check && $_SESSION['password'] == $pass_check) {
                    $username = $_SESSION['name'];
                    echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công.";
                    header('location: admin.php');
                } else {
                    echo "<p>Tên Đăng Nhập Hoặc Password Không Đúng </p>";
                }
            }
        }
    }
    mysqli_close($connect);

    ?>
    <style>
        body {

            background-image: url(image/nen_login.jpg);
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

    <form action="sign_in.php" method="post">
        <h2>SIGN IN</h2>
        <label>User Name</label>*

        <input type="text" name="name" placeholder="User Name" id="name" required>
        <label>Password</label>*

        <input type="password" name="password" placeholder="Password" id="password" required>
        <br>
        <button type="submit">Login</button><br>
        <h4>Forgot Password?</h4>
        <h5>Login Help?</h5>
        bạn chưa có tài khoản ?
        <a href="sign_up.php">sign up</a>
    </form>

</body>

</html>