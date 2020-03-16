<?php
	include('connect.php');
		if(isset($_POST['login']))
		{
		$email=$_POST['email'];
		$email = test_input($_POST["email"]);

}	



		$password=$_POST['password'];
	$check="Select * from data where email='$email' and password='$password'";
		$checked=mysqli_query($server,$check);
		$num=mysqli_num_rows($checked);
			if($num!==1)
			{
				echo"Login Invalid! Please use valid information.";
			}
			else
			{
				// session_start();
				// $_SESSION['mysession']=$username;
				header('location:after.php');
			}
		}
?>