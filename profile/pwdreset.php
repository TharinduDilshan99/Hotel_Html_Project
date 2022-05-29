<?php 
session_start();
$email='';
$id='';
if(isset($_SESSION['email']))
{
	$email=$_SESSION['email'];
	$id=$_SESSION['id'];
}else
{
	header('Location:../login.php');
}
?>
<?php

include_once'../config/config.php';
?>

<?php
	$email=$_SESSION['email'];
	$sql="SELECT * FROM user_details WHERE email = '$email' ";
	$result =$con->query($sql);
	if($result->num_rows>0)
	{
		while($row = $result->fetch_assoc())
		{
			$pwd=$row["pwd"];	
		}
	}
    if(isset($_POST["btnSubmit"])){
	$password=$_POST['opassword'];
	$npassword=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	
	$hash = password_verify($password, $pwd);
	$hashc = password_hash($npassword, PASSWORD_BCRYPT);
		if($hash=='1')
		{
			if($cpassword==$npassword)
			{
			$sql="Update user_details Set pwd='$hashc' WHERE id= $id";
			
				if(mysqli_query($con,$sql))
				{
				echo"<script>alert('Password reset successfully');</script>";
				}
				else
				{	
				echo"<script>alert('ERROR:could not');</script>";
				}
				mysqli_close($con);
			}else
			{
			echo"<script>alert('Password didn't matched');</script>";
			}
		}else
		{
			echo "<script>alert('Old Password is incorrect');</script>";
		}	
	
}
?>
<html>
	<head>
		<title>Reset</title>	
		<link rel="Stylesheet" href="../style/style.css"/>
		<link rel="Stylesheet" href="../style/style-reg.css"/>
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
		<div class="reg">
			<form method="post" action="pwdreset.php">
				<h1>Reset Password</h1>
				<input type="password" id="pwd"name="opassword" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  placeholder="Enter old Password">
				</label>
				<br>
				<label>
				<input type="password" id="pwd"name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  placeholder="Enter new Password">
				</label>
				<br>
				<input type="password" id="pwdc"name="cpassword" required placeholder="Confirm Password" oninvalid="this.setCustomValidity('Re-Enter Password')" oninput="setCustomValidity('')">
				<br>
				<br>
				<input type="submit" id="btnReg" name="btnSubmit" value="Reset">
				<br>
			</form>
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
				<a href="about.html">About Us</a>
				.
				<a href="#">Help Center</a>
			</p>
			<p class="footer-copyright">FLY7 &copy; 2019</p>
		</footer>
	</body>
</html>