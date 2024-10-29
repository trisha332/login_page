<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Administration Panel</title>
        <link href="style.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
    


        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5" style=" padding-top:100px;">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form name="log-frm" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="reg_email" name="reg_email" type="email" placeholder="enter the email" />
                                                <label for="reg_email">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="reg_pwd" name="reg_pwd" type="password" placeholder="Password" />
                                                <label for="reg_pwd">Password</label>
                                            </div>
                                            <p class="login__signup">
               You do not have an account? <a href="../sign-up_page/sign-up.php">Sign up</a>
            </p>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <input type="submit" name="ok" class="btn btn-primary btn" value="Login">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <?php
                                        if (isset($_POST['ok'])) {
                                            $reg_email = $_POST['reg_email'];
                                            $reg_pwd = $_POST['reg_pwd'];
                                            $src = "SELECT * FROM reg_table WHERE reg_email = '$reg_email' AND reg_pwd = '$reg_pwd'";
                                            $rs = mysqli_query($con, $src) or die(mysqli_error($con));

                                            if (mysqli_num_rows($rs) > 0) {
                                                $rec = mysqli_fetch_assoc($rs);
                                                $_SESSION['a_info'] = $rec;
                                                ?>
                                                <script>
                                                    window.location = '../slider/index.php';
                                                </script>
                                                <?php
                                            } else {
                                                ?>
                                                <div class="alert alert-danger">
                                                    <strong>Invalid Email or Password!</strong>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
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
                            <div class="text-muted">Copyright &copy; Your Website 2024</div>
                        </div>
                    </div>

                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>
</html>
