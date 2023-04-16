<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>


<?php
include 'connect_db.php';
$email = "";
$name = "";
$password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"])) {
        $email = $_POST['email'];
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script type='text/javascript'>alert('Invalid email format');</script>";
    }
    if (isset($_POST["name"])) {
        $name = $_POST['name'];
    }
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        echo "<script type='text/javascript'>alert('name cannot contain special characters');</script>";
    }

    if (isset($_POST["password"]) && isset($_POST["enter_password"])) {
        $password = $_POST['password'];
        $enter_password = $_POST['enter_password'];
    }
    if (!'@[A-Z]@' || !'@[a-z]@' || !'@[0-9]@' || !'@[^\w]@' || strlen($password) < 8) {
        echo "<script type='text/javascript'>alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.');</script>";
    }
    if ($password != $enter_password) {

        echo "<script type='text/javascript'>alert('wrong password');</script>";

    } else {
        $sql = "INSERT INTO admin ( name,email, password) VALUES ( '$name', '$email','$password')";

        if (mysqli_query($connect, $sql)) {
            header('location: sign_in.php');
        }

    }

}
?>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form action="sign_up.php" method="post">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="name" name="name" type="text"
                                                        placeholder="Enter your first name" required  />
                                                    <label for="name">name</label>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="email" name="email" type="email"
                                                        placeholder="Enter your last name" required />
                                                    <label for="email">Email address</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPassword" name="password"
                                                        type="password" placeholder="Create a password" min="80000000" />
                                                    <label for="inputPassword" required>Password</label>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPasswordConfirm"
                                                        type="password" name="enter_password"
                                                        placeholder="Confirm password" min="80000000"/>
                                                    <label for="inputPasswordConfirm" required>Confirm Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="address" type="text" placeholder="">
                                            <label for="address" required> address</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="form-check-label" for="radio2">Gender :</label>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="radio1"
                                                        name="optradio" value="option1" checked>Male
                                                    <label class="form-check-label" for="radio1" required></label>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="radio2"
                                                        name="optradio" value="option2" required>Female

                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="mt-4 mb-0">
                                            <!-- <button type="submit" class="btn btn-success btn-block" width="100%">sign up</button> -->
                                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-block"
                                                    width="100%">sign up</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="Sign_in.php">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>