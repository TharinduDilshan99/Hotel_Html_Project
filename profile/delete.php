<?php
include_once'../config/config.php';
?>

<?php
	session_start();
	$Id = '';
    $id=$_SESSION['id'];
	echo"<script>alert('$id')</script>";
	$sql="DELETE FROM user_details Where id='$id'";
	if(mysqli_query($con,$sql))
	{
			echo"<script>alert('Account Deleted successfully')</script>";
			session_destroy();
			header('Location:../Home.html');
	}
	ELSE
	{	
			ECHO"<script>alert('ERROR:could not')</script>";
	}
	mysqli_close($con);
?>