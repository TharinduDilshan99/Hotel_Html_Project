<?php 
session_start();
$email='';
$name='';
if(isset($_SESSION['email']))
{
	$email=$_SESSION['email'];
	$name=$_SESSION['name'];
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
			$name=$row["name"];	
			$mobile=$row["mobile"];
			$address=$row["address"];
		}
	}
    if(isset($_POST["btnSubmit"])){
	$name = $_POST["name"];	
	$mobile=$_POST["mobile"];
	$address=$_POST["address"];
	$sql="Update user_details Set name='$name',mobile='$mobile',address='$address' WHERE id= $id";
			
	if(mysqli_query($con,$sql))
	{
			echo"<script>alert('Updated successfully')</script>";
	}
	ELSE
	{	
			ECHO"<script>alert('ERROR:could not')</script>";
	}
	mysqli_close($con);
}
?>
<html>
	<head>
		<title>Update</title>	
		<script src = "js/register.js"></script>
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
				<form method="post" action="update.php">
				<h1>Update Profile</h1>
				<input type="text" id="name" name="name" value='<?php echo $name?>' oninvalid="this.setCustomValidity('Please Enter Your Name')" oninput="setCustomValidity('')">
				<label>
				<input type="email" id="email" name="email" value='<?php echo $email?>' required placeholder="Email" oninvalid="this.setCustomValidity('Please Enter Valid Email')" disabled oninput="setCustomValidity('')">
				</label>
				<br>
				<input type="text" id="name" name="mobile" value='<?php echo $mobile?>' required placeholder="Mobile Number" oninvalid="this.setCustomValidity('Please Enter Your Name')" oninput="setCustomValidity('')">
				<label>
				<br>
				<textarea id='name' name ='address' placeholder='Enter Your Address'><?php echo $address?></textarea>
				<br>
				<input type="submit" id="btnReg" name="btnSubmit" value="Update">
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
	
