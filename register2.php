<?php
include "connection.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register Now</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
    <link rel="stylesheet" href="css1/animate.css">
    <link rel="stylesheet" href="css1/normalize.css">
    <link rel="stylesheet" href="css1/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css1/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<div class="card">
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control" />
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>


<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center custom-login">
            <h3>Register Now</h3>

        </div>
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body">
                    <form action="" name="form1" method="post">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>FirstName</label>
                                <input type="text" name="firstname" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>LastName</label>
                                <input type="text" name="lastname" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit1" class="btn btn-success loginbtn">Register</button><br>
                            <a href="login.php">Go To Login Page</a>
                        </div>

                        <div class="alert alert-success" id="success" style="margin-top: 10px; display: none">
                            <strong>Success!</strong> Account Registration successfully.
                        </div>

                        <div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none">
                            <strong>Already Exist!</strong> This Username is Already Exist
                        </div>
                        <div class="alert alert-danger" id="failure2" style="margin-top: 10px; display: none">
                            <strong>email invalid</strong> This email format not correct
                        </div>
                        <div class="alert alert-danger" id="failure3" style="margin-top: 10px; display: none">
                            <strong>Invalid Number</strong> This phone number format format not correct
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


<?php
if (isset($_POST["submit1"])) {

    $count = 0;
    $res = mysqli_query($link, "select * from registration where username='$_POST[username]'") or die(mysqli_error($link));
    $count = mysqli_num_rows($res);

    if ($count > 0) {
        ?>
        <script type="text/javascript">
            document.getElementById("success").style.display = "none";
            document.getElementById("failure").style.display = "block";
        </script>
        <?php
    } else {

        $email = $_POST ["email"];  
        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
        if (!preg_match ($pattern, $email) ){  
            ?>
            <script type="text/javascript">
                document.getElementById("success").style.display = "none";
                document.getElementById("failure2").style.display = "block";
            </script>
            <?php
            } 




else {  
    mysqli_query($link,"insert into registration values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]')")or die(mysqli_error($link));
    ?>
    <script type="text/javascript">
        document.getElementById("success").style.display = "block";
        document.getElementById("failure").style.display = "none";
    </script>
    <?php 
}  



    }

}

?>


<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery-price-slider.js"></script>
<script src="js/jquery.meanmenu.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>

</html>