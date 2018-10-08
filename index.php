<?php 
session_start();
$num1=(float)30/100*600;
echo $num1;
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
	

			<div class="wrap-login100">
			
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post">
					<span class="login100-form-title">
						Sign In
					</span>
					<span>
						<?php 

	include "includes/user.class.php";	
	if(isset($_POST['login']))
	{
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		if($username=='' && $password=='')
		{
			echo "<span style='color:red;font-weight:bold;'>username  can not be empty</span>"."<br/>";
			echo "<script type='text/javascript'>alert('username and Password can not be empty')</script>";
			echo "<span style='color:red;font-weight:bold;'>Password can not be empty</span>";
		
		}
		else if($username=='')
		{
			echo "<span style='color:red;font-weight:bold;'>Username can not be empty</span>";
			echo "<script type='text/javascript'>alert('username can not be empty')</script>";
		}
		else if($password=='')
		{
			echo "<span style='color:red;font-weight:bold;'>Password can not be empty</span>";
			echo "<script type='text/javascript'>alert('Password can not be empty')</script>";
		}
		else
		{
			$user=new user();
			$data=array('user_name'=>$username,'password'=>$password);
			$user->check_login($data);
			
		}
	}

if(isset($_GET['msg']))
{
	echo "<span style='color:green;font-weight:bold;'>User has been Register successfully</span>";
}
?>
					</span><br/><br/>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" placeholder="Password" name="password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1" style="font-weight:bold;">
							Remember Me
						</span>
						<input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="login">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="signup.php" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>