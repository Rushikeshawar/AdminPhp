
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
                <h4 class="card-title"> Users List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                        <tr><th>ID</th><th> Username</th><th>Password</th><th>Email</th><th>Phone</th><th>Country</th><th>Address</th><th>pincode</th>
                    </tr></thead>
                    <tbody>
                      <?php 
					  
                        $result=mysqli_query($conn,"select * from user")or die ("query 1 incorrect.....");
                          //$user_password=md5($user_password);
                        while(list($user_id,$user_password,$user_name,$user_email,$user_phone,$user_country,$user_add,$user_pincode)=mysqli_fetch_array($result))
                        {	
                        echo "<tr><td>$user_id</td><td> $user_password</td><td>$user_name</td><td>$user_email</td><td>$user_phone</td><td>$user_country</td><td>$user_add</td><td> $user_pincode</td>

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