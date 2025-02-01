
    <?php
session_start();
include("../connection.php");

error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$order_id=$_GET['order_id'];

/*this is delet query*/
mysqli_query($conn,"delete from orders where order_id='$order_id'")or die("delete query is incorrect...");
} 

///pagination
$page=$_GET['page'];

if($page=="" || $page=="1")
{
$page1=0;	
}
else
{
$page1=($page*10)-10;	
}

include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Orders  / Page <?php echo $page;?> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                      <tr><th>Customer Name</th><th>Product</th><th>Contact | Email</th><th>Address</th><th>Price</th><th>Shipping</th><th>Date</th><th>Qty</th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($conn,"select order_id, user_name, product_name, user_email, user_phone, user_add,user_pincode,user_country,  product_price,address2, order_date,qty from orders,product,user where orders.product_id=product.product_id and user.user_id=orders.user_id Limit $page1,10")or die ("query 1 incorrect.....");

                        while(list($order_id,$user_name,$product_name,$user_email,$user_phone,$user_add, $user_pincode,$user_country, $product_price, $address2,$order_date,$quantity)=mysqli_fetch_array($result))
                        {	
                        echo "<tr><td>$user_name</td><td>$product_name</td><td>$user_email<br>$user_phone</td><td>$user_add<br> $user_pincode<br>$user_country</td><td>$product_price</td><td>$address2</td><td>$order_date</td><td>$quantity</td>

                        <td>
                        <a class=' btn btn-danger' href='orders.php?order_id=$order_id&action=delete'>Delete</a>
                        </td></tr>";
                        }
                        ?>
                    </tbody>
                  </table>
                  
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <?php
include "footer.php";
?>