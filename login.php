<!--First customer or already registered customer who first sigup or login to the system-->
<html>
<head>
	<title>Material management</title>
		<link rel="stylesheet" type="text/css" href="login_css.css">
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<div class="sign-Up-form">
		<img src="image/admin.png">
			<h1>Sign Up Now</h1>
				<form>
				<input type="email" class="input-box" id="email" name="email" placeholder="Your Email">

				<input type="Password" class="input-box" id="password" name="password" placeholder="Your Password">

				<p><span><input type="checkbox"></span>I agree to the terms of 	services</p>

				<a href="signup.php"><button type="button" class="signup-btn">Sign up</button></a>
					<hr>

					<p class="or">OR</p>
				<button type="button" name="loginbtn" class="twitter-btn" onclick="validation();">Login</button>	

					<p>Do you have an account ? <a href="#">Sign in</a></p>
				</form>
	</div>
	<script>
			function validation(){
				var user = 'sss';
				var pass = 'sss';
				var userName = document.getElementById("email").value;
				var userPass = document.getElementById("password").value;
			if((user == userName && pass == userPass))
			{
				swal({
					title: "Login Succesful!!",
					title: "Thank you!!",
					icon : "Success",
					});
			}
			else if((userName.length <= 0) && (userPass.length <= 0))
			{
			swal({
					title: "Login Failed!!",
					title: "User name and password not fulfilled",
					icon : "info",
				});
			}
			else 
			{
			swal({
					title: "Login Failed!!",
					title: "User name and password incorrect , pleace try again",
					icon : "error",
				});
			}
		}
		</script>
</body>
</html>
