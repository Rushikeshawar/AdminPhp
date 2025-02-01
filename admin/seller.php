
    <?php
session_start();

include ("../connection.php");
$admin_id = $_SESSION['admin_id'];
if(!isset($admin_id)){
header('location:login.html');
}  



include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         <div class="panel-body">
		<a>
            <?php  //success message
            if(isset($_POST['success'])) {
            $success = $_POST["success"];
            echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
            }
            ?></a>
                </div>
                <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Seller Details</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                        <tr><th>SellerID</th><th> Seller name</th><th>Password</th><th>Email</th><th>Phone</th><th>Country</th><th>Address</th><th>pincode</th>
                    </tr></thead>
                    <tbody>
                      <?php 
					  
                        $result=mysqli_query($conn,"select * from seller")or die ("query 1 incorrect.....");
                          //$user_password=md5($user_password);
                        while(list($seller_id,$seller_password,$seller_name,$seller_email,$seller_phone,$seller_country,$seller_add,$seller_pincode)=mysqli_fetch_array($result))
                        {	
                        echo "<tr><td>$seller_id</td><td> $seller_password</td><td>$seller_name</td><td>$seller_email</td><td>$seller_phone</td><td>$seller_country</td><td>$seller_add</td><td> $seller_pincode</td>

                        </tr>";
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