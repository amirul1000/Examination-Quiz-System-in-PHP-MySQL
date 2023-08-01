<?php
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
				<!--<div class="login100-pic js-tilt" data-tilt>
					<img src="login-register/images/img-01.png" alt="IMG">
				</div>-->

                    <form action="" name="form1" method="post">
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

