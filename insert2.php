<?php
include("connect.php");
$name=$_POST["name"];


$email=$_POST["email"];
// if (empty($_POST["email"])) {
//     $emailErr = "Email is required";
//   } else {
//     $email = test_input($_POST["email"]);
//     // check if e-mail address is well-formed
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//       $emailErr = "Invalid email format";
//     }
//   }


$password=$_POST["password"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$toinsert="INSERT INTO data(name, email, password, dob, gender)values('$name','$email','$password','$dob','$gender')";
$result=mysqli_query($server,$toinsert);
echo"<br>";
if(!$result)
{
	echo"Insert Error";
}
else
{
	echo"Inserted Succesfully";
	header('location:loginform.php');
}
?>