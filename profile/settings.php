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
		<title>Settings</title>	
		<link rel="Stylesheet" href="../style/style.css"/>
		<link rel="Stylesheet" href="../style/style-set.css"/>
		<script>
			function deleteData()
			{
				if(confirm("Are you sure to delete your account"))
				{
					window.location.href="delete.php";
				}
			}
		</script>
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
				<br>
				<h1>Settings</h1>
				<a href="update.php"><button>Update Profile</button></a>
				<a href="pwdreset.php"><button>Update password</button></a>
				<button onclick='deleteData()'>Delete Account</button>
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