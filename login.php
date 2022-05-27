<?php
	include_once "config/config.php";
?>
<?php
	session_start();
			
	if(isset($_POST['email']))
	{
	$pwd='';
	$email=$_POST['email'];
	$sql="SELECT * FROM user_details WHERE email = '$email' ";
	$result =$con->query($sql);
	if($result->num_rows>0)
	{
		while($row = $result->fetch_assoc())
		{
			$pwd=$row["pwd"];
			$name=$row["name"];
			$type=$row["type"];
			$id=$row["id"];
		}
		
		
	}
	$password=$_POST['password'];
	$hash = password_verify($password, $pwd);
	}
	
	if(isset($_POST['btnSubmit']))
	{
		if($hash=='1' and $type=='user')
		{
			$_SESSION['email']=$_POST['email'];
			$_SESSION['name']=$name;
			$_SESSION['id']=$id;
		}else
		{
			echo "<script>alert('Email or Password incorrect')</script>";
		}
		if($hash=='1' and $type=='admin')
		{
			$_SESSION['email']=$_POST['email'];
			$_SESSION['admin']='admin';
			$_SESSION['name']=$name;
			$_SESSION['id']=$id;
		}else
		{
			echo "<script>alert('Email or Password incorrect')</script>";
		}
	}
	if(isset($_SESSION['email']))
	{
		header('Location:profile/profile.php');
	}
	if(isset($_SESSION['admin']))
	{
		header('Location:profile/admin.php');
	}

?>
<html>
	<head>
		<title>Log In</title>	
		<link rel="Stylesheet" href="style/style.css"/>
		<link rel="Stylesheet" href="style/style-log.css"/>
		<script src="js/log.js"></script>
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
		<div class="login" >
			<form method="POST" action="login.php">
				<h1>Log In</h1>
				<label>
				<input type="email" id="email" name="email" required placeholder="Email" oninvalid="this.setCustomValidity('Please Enter Valid Email')" oninput="setCustomValidity('')" required >
				</label>
				<label>
				<input type="password" id="pwd"name="password" required placeholder="Password" oninvalid="this.setCustomValidity('Please Enter Your Password')" oninput="setCustomValidity('')" required >
				</label>
				<br>
				<input type="submit" id="btnLog1" name='btnSubmit' value="Login">

				<br>
				<h5><a href="#">Forgot password</a></label><h5>
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