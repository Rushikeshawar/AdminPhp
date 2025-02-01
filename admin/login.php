<?php
session_start();
include("../connection.php");
if(isset($_POST["submit"]))
{
	$ausername=$_POST["ausername"];
	$apassword=$_POST["apassword"];
	
	$log="SELECT * FROM admin WHERE admin_name='$ausername' AND admin_password='$apassword'";
	$result=mysqli_query($conn,$log);
	$cnt=mysqli_num_rows($result);
	if($cnt==1)
	{
		echo '<script type="text/JavaScript"> 
      window.open("index.php");
     </script>' ;
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$_SESSION["adminname"]=$row["admin_name"];
		$_SESSION["admin_id"] = $row["admin_id"];
		$_SESSION["logged"]="true";
	
         header('location:index.php');
	}
	else
	{
		
	echo '<script type="text/JavaScript"> 
	window.alert("username and password are incorrect ");
      window.open("login.html");
     </script>' ;
		
	}
	
}