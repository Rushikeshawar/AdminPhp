
<?php
session_start();

if(isset($_POST["btn_save"]))
{
	$product_no=$_POST['product_no'];
$product_name=$_POST['product_name'];
$product_stock=$_POST['product_stock'];
$product_price=$_POST['product_price'];
$category_id=$_POST['category_id'];
$actual_price=$_POST['actual_price'];
$discount=$_POST['discount'];
$picture=$_POST['picture'];
$product_type=$_POST['product_type'];
include("../connection.php");
         $abc="INSERT INTO category(category_id,category_name)VALUES('$category_id','$product_type')";
		$sign="INSERT INTO product(product_id,product_name,product_stock,product_cat,category_id,product_price,image1,actual_price,discount) VALUES('$product_no','$product_name','$product_stock','$product_type','$category_id','$product_price','$picture','$actual_price','$discount')";

	if(mysqli_query($conn,$sign))
	{
		 echo '<script type="text/JavaScript"> 
		window.alert(" submitted successfully !!!");
		window.open("index.php"); </script> ';
	}
	if(mysqli_query($conn,$abc))
	{
		
	}
	/*else
	{
		echo "Error: " . $abc . "<br>" . mysqli_error($conn);
		echo "something wrong ";
	}*/
	else
	{
		echo "Error: " . $sign . "<br>" . mysqli_error($conn);
		echo "something wrong ";
	}
	
}

else
{
echo '<script type="text/JavaScript"> 
		window.alert(" you are not authorize to use it!!!");
		window.open("index.php"); </script> ';
}


?>
