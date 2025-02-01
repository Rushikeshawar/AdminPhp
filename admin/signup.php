<?php
session_start();
if(isset($_POST["submit"]))
{
	$ausername=$_POST["ausername"];
	$apassword=$_POST["apassword"];
	//$cpassword=$_POST["cpassword"];

	echo "<br>";
	// write strip tags 
	include("../connection.php");
	$sign="INSERT INTO admin (admin_id, admin_name, admin_password) VALUES(NULL,'$ausername','$apassword')";
	if(mysqli_query($conn,$sign))
	{
		 echo '<script type="text/JavaScript"> 
		window.alert(" account created successfully !!!");
		window.open("index.php"); </script> ';
	}
	else
	{
		echo "something wrong ";
	}
}
else
{
	echo " you are not an  authorised user ";
} 
?>
	