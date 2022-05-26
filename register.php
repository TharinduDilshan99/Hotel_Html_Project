<?php
//Linking the configuration file
require 'config/config.php';
?>

<?php
	if(isset($_POST["btnSubmit"])){
		$name = $_POST["name"];
		$email = $_POST["email"];	
		$pwd = $_POST["password"];
		$pwdc = $_POST["cpassword"];
		$type='user';
		$mobile='';
		$address='';
		if($pwd==$pwdc){
		$hash = password_hash($pwd, PASSWORD_BCRYPT);
		$sql= "INSERT INTO user_details(name,email,pwd,type,mobile,address) VALUES('$name','$email','$hash','$type','$mobile','$address')";
		if(mysqli_query($con,$sql)){
			echo "<script type='text/javascript'>alert('Congratilation! You have Registered Successfully');</script>";
		}	
		else{
			echo "<script type='text/javascript'>alert('Error:. $con->error');</script>";
		}
		}else
		{
			echo "<script type='text/javascript'>alert('Passsword didn't matched');</script>";
		}
	}
	mysqli_close($con);
?>
<html>
	<head>
		<title>Sign In</title>	
		<script src = "js/register.js"></script>
		<link rel="Stylesheet" href="style/style.css"/>
		<link rel="Stylesheet" href="style/style-reg.css"/>
	</head>
	<body style="background-image:url(images/sea.jpg)">
		<!--Header-->
		<div class="header">
			<img src="images/logo.png" align ="center" width="300" height="120" alt="Logo">
		</div>
		<div class="topnav">
			<input type="button" onclick="window.location.href = 'login.html';" id="btnLog" value="Log In"/>	
			<input type="button" onclick="window.location.href = 'register.html';" id="btnSign" value="Sign Up"/>
					<a href="Home.html">Home</a>
			<a href="hotel.html">Hotels</a>
			<a href="flight.html">Flights</a>
			<a href="resturent.html">Restaurants</a>
			<a href="guide.html">Guide</a>	
			<a href="contact.html">Contact Us</a>
		</div>
		<!--login Form-->
		<div class="reg">
			<form method="post" action="register.php">
				<h1>Register</h1>
				<input type="text" id="name" name="name" required placeholder="Full Name" oninvalid="this.setCustomValidity('Please Enter Your Name')" oninput="setCustomValidity('')">
				<label>
				<input type="email" id="email" name="email" required placeholder="Email" oninvalid="this.setCustomValidity('Please Enter Valid Email')" oninput="setCustomValidity('')">
				</label>
				<br>
				<label>
				<input type="password" id="pwd"name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  placeholder="Password">
				</label>
				<br>
				<input type="password" id="pwdc"name="cpassword" required placeholder="Confirm Password" oninvalid="this.setCustomValidity('Re-Enter Your Password')" oninput="setCustomValidity('')">
				<br>
				<br>
				<label class="check">
				<input type="checkbox" id="chkTerms" onchange="acceptTerms()">I agree the<a href="#">Term of User</a>
				</label>
				<br>
				<input type="submit" id="btnReg" name="btnSubmit" disabled="disabled" value="Register">
				<br>
			</form>
		</div>
		
			<!-- Footer-->
		<footer class="footer">		
			<p class="footer-name"></p>
			<img src="images/logo.png" align ="center" width="120" height="60" alt="Logo">
			<p class="footer-links">
				<a href="#">Home</a>
				.
				<a href="#">Term of Use</a>
				.
				<a href="news.html">News</a>
				.
				<a href="about.html">About Us</a>
				.
				<a href="#">Help Center</a>
			</p>
			<p class="footer-copyright">FLY7 &copy; 2019</p>
		</footer>
	</body>
</html>