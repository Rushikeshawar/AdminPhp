  <?php
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <form action="aproduct.php" method="post" type="form" name="form" enctype="multipart/form-data">
          <div class="row">
          
                
         <div class="col-md-7">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Add Product</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
				  
				  <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Id</label>
                        <input type="text" id="product_no" required name="product_no" class="form-control">
                      </div>
                    </div>
					<div class="col-md-12">
                      <div class="form-group">
                        <label> Category Id</label>
                        <input type="text" id="category_id" required name="category_id" class="form-control">
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Title/Name</label>
                        <input type="text" id="product_name" required name="product_name" class="form-control">
                      </div>
                    </div>
					<div class="col-md-12">
                      <div class="form-group">
                        <label>Product Stock</label>
                        <input type="text" id="product_stock" required name="product_stock" class="form-control">
                      </div>
                    </div>
					<div class="col-md-12">
                      <div class="form-group">
                        <label>Actual Price</label>
                        <input type="text" id="actual_price" required name="actual_price" class="form-control">
                      </div>
                    </div>
					<div class="col-md-12">
                      <div class="form-group">
                        <label>discount</label>
                        <input type="text" id="discount" required name="discount" class="form-control">
                      </div>
                    </div>
					<div class="col-md-12">
                      <div class="form-group">
                        <label>Product Price</label>
                        <input type="text" id="product_price" required name="product_price" class="form-control">
                      </div>
                    </div>
					<div class="col-md-12">
                      <div class="form-group">
                        <label>Image</label>
                        <input type="text" id="picture" required name="picture" class="form-control">
                      </div>
                    </div>
                    <!--<div class="col-md-4">
                      <div class="">
                        <label for="">Add Image</label>
                        <input type="file" name="picture" required class="btn btn-fill btn-success" id="picture" >
                      </div>
                    </div> !-->
					<div class="col-md-12">
                      <div class="form-group">
                        <label>Product Category</label>
                        <input type="text" id="product_type" name="product_type" required="[1-6]" class="form-control">
                      </div>
                    </div> </div>
                    <!-- <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" cols="80" id="details" required name="details" class="form-control"></textarea>
                      </div>
                    </div> 
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" id="price" name="price" required class="form-control" >
                      </div>
                    </div>
                  </div> 
                 
                  
                
              </div>
              
            </div>
          </div>
          <div class="col-md-5">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Categories</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Category</label>
                        <input type="number" id="product_type" name="product_type" required="[1-6]" class="form-control">
                      </div>
                    </div>
                   <!-- <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Product Brand</label>
                        <input type="number" id="brand" name="brand" required class="form-control">
                      </div>
                    </div>
                     
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Keywords</label>
                        <input type="text" id="tags" name="tags" required class="form-control" >
                      </div>
                    </div>
                  </div> !-->
                
              
              <div class="card-footer">
                  <input type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary" value="ADD"></input>
              </div>
            </div>
          </div>
          
        </div>
         </form>
          
        </div>
      </div>
      <?php
include "footer.php";
?>