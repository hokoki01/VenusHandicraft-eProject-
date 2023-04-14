<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Password Reset - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<?php
session_start();
include 'connect_db.php';
$sql = "SELECT email FROM admin";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $email_check = $row["email"];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_SESSION['email'] = $_POST['email'];
            if ($_SESSION['email'] == $email_check) {
                echo "<script type='text/javascript'>alert('We will send you a verification code please wait a few seconds');</script>";
                header('location: password.php');
            } else {
                echo "<script type='text/javascript'>alert('Your email is not registered');</script>";
                header('location: password.php');

            }
        }
    }
}
mysqli_close($connect);

?>

        <body class="bg-primary">
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <main>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header">
                                            <h3 class="text-center font-weight-light my-4">Password Recovery</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="small mb-3 text-muted">Enter your email address and we will send
                                                you a
                                                link to reset your password.</div>
                                            <form action="password.php" method="post">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputEmail" type="email"
                                                        name="email" placeholder="name@example.com" />
                                                    <label for="inputEmail">Email address</label>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                    <a class="small" href="sign_in.php">Return to login</a>
                                                    <button type="submit" class="btn btn-primary">Reset
                                                        Password</button>
                                                    <!-- <a  href="sign_in.php">Reset Password</a> -->
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-footer text-center py-3">
                                            <div class="small"><a href="sign_up.php">Need an account? Sign up!</a></div>
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