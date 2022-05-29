<?php 
session_start();
$email='';
$name='';
if(isset($_SESSION['email']))
{
	$email=$_SESSION['email'];
	$name=$_SESSION['name'];
}else
{
	header('Location:../login.php');
}
?>
<html>
	<head>
		<title>Profile</title>	
		<link rel="Stylesheet" href="../style/style.css"/>
		<link rel="Stylesheet" href="../style/style-profile.css"/>
	</head>
	<body style="background-image:url(../images/sea.jpg)">
		<!--Header-->
		<div class="header">
			<img src="../images/logo.png" align ="center" width="300" height="120" alt="Logo">
		</div>
		<form method="POST" action="logout.php">
		<div class="topnav">	
		<input type="submit" name="btnLog" id="btnLog" value="Log Out"/>	
		<a href="../Home.html">Home</a>
		<a href="../hotel.html">Hotels</a>
		<a href="../flight.html">Flights</a>
		<a href="../resturent.html">Restaurants</a>
		<a href="../guide.html">Guide</a>	
		<a href="../contact.html">Contact Us</a>
		</div>
		</form>
		<!--login Form-->
			<div class="card" align="center">
				<img src="../images/profile1.jpg" alt="John" style="width:100%">
				<h1>Welcome !</h1>
				<h2><?php echo $name?></h2>
				
				<p><a href="profile1.php"><button>Continue to Profile</button></a><br><br>
				
			</div>
			<!-- Footer-->
	<footer class="footer">

			<p class="footer-name"></p>
			<img src="../images/logo.png" align ="center" width="120" height="60" alt="Logo">
			<p class="footer-links">
				<a href="#">Home</a>
				.
				<a href="#">Term of Use</a>
				.
				<a href="news.html">News</a>
				.
				<a href="#">About Us</a>
				.
				<a href="#">Help Center</a>
			</p>

			<p class="footer-copyright">FLY7 &copy; 2019</p>

	</footer>
	</body>
</html>