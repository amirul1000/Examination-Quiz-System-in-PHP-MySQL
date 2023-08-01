<?php
session_start();
include "../connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../login-register/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login-register/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login-register/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login-register/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../login-register/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login-register/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login-register/css/util.css">
	<link rel="stylesheet" type="text/css" href="../login-register/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../login-register/images/img-01.png" alt="IMG">
				</div>
           
            <div class="login-form"> 
            
                <form name="form1" action="" method="post">
                <div class="login-logo">
                    DIGI-AMS Admin Login
                </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="username" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>

                    <button type="submit" name="submit1" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>


                    <div class="alert alert-danger" id="errormsg" style="margin-top: 10px; display: none">
                        <strong>Invalid!</strong> Username Or Password
                    </div>

                </form>
            </div>
      


</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="../login-register/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../login-register/vendor/bootstrap/js/popper.js"></script>
	<script src="../login-register/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../login-register/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../login-register/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="../login-register/js/main.js"></script>

</body>
</html>


<?php
if(isset($_POST["submit1"]))
{
    $count=0;
    $username=mysqli_real_escape_string($link,$_POST["username"]);
    $password=mysqli_real_escape_string($link,$_POST["password"]);

    $res=mysqli_query($link,"select * from admin_login where username='$username' && password='$password'");
    $count=mysqli_num_rows($res);

    if($count==0)
    {
        ?>
        <script type="text/javascript">
            document.getElementById("errormsg").style.display="block";
        </script>
        <?php
    }
    else{
        $_SESSION["admin"]=$username;
        ?>
        <script type="text/javascript">
            window.location="exam_category.php";
        </script>

        <?php
    }



}
?>