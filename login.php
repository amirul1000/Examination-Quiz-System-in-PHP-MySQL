<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login-register/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-register/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-register/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-register/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login-register/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-register/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-register/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-register/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="login-register/images/img-01.png" alt="IMG">
				</div>
                
                

				<form class="login100-form validate-form" method="post">
                <div class="text-center m-b-md custom-login">
                    <h3>DIGI AMS STUDENT LOGIN</h3>
        
                </div>
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" id="username" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password"  name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" name="login"  class="login100-form-btn">
							Login
						</button>
					</div>

					<!--<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="login-register/#">
							Username / Password?
						</a>
					</div>-->
                       <div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none">
                            <strong>Does Not Match!</strong> Invalid Username Or Password
                        </div>
					<div class="text-center p-t-136">
						<a class="txt2" href="register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
                    
                   
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="login-register/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login-register/vendor/bootstrap/js/popper.js"></script>
	<script src="login-register/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login-register/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login-register/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="login-register/js/main.js"></script>

</body>
</html>

<?php
if(isset($_POST["login"]))
{


    $count=0;
    $res=mysqli_query($link,"select * from registration where username='$_POST[username]' && password='$_POST[password]'");

    $count=mysqli_num_rows($res);

    if($count==0)
    {

        ?>
        <script type="text/javascript">
            document.getElementById("failure").style.display = "block";
        </script>
        <?php

    }
    else{

        $_SESSION["username"]=$_POST["username"];

        ?>
<script type="text/javascript">
    window.location="select_exam.php";
</script>
        <?php
    }



}

?>

