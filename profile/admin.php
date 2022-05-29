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
		<title>Admin</title>	
		<link rel="Stylesheet" href="../style/style.css"/>
		<link rel="Stylesheet" href="../style/style-profile1.css"/>
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
			
					<div class="grid-container">
							<div class="card" align="center">
							<div class="grid-item">
							<img src="../images/profile1.jpg" alt="John" style="width:100%">
				<h1><?php echo $name?></h1>
			</div>
				<a href="settings.php"><button>Settings</button></a>
				</div>

							<div class="grid-item">
								<h1>Admin Profile</h1>
							<p>Catch a glimpse of Indonesia's bewitching attractions without having to put on your shoes and discover the ultimate destination that matches your soul.</p>
							<hr>
							<div class="container">
									<div class="box"><a href="#"><img src="../images/1.jpg" alt="SearchFlights"></div>
									<div class="box"><a href="#"><img src="../images/2.jpg" alt="BookFlights"></div>
									<div class="box"><a href="#"><img src="../images/3.jpg" alt="AirlineReviews"></div>
									<div class="box"><a href="#"><img src="../images/4.jpg" alt="BudgetRides"></div>
							</div>
								
							</div>
				
				
			
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