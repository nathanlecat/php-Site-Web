<?php
session_start();
include("../../db.php");


if(isset($_POST['btn_save']))
{
$product_name=$_POST['product_name'];
$details=$_POST['details'];
$price=$_POST['price'];
$product_size=$_POST['size'];
$piece=$_POST['piece'];
$room=$_POST['room'];
$product_lieu=$_POST['lieu'];
$product_ville=$_POST['ville'];
$product_code=$_POST['postal'];
$product_type=$_POST['product_type'];
$brand=$_POST['brand'];
$tags=$_POST['tags'];

//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name=$picture_name;
		move_uploaded_file($picture_tmp_name,"../../product_images/".$picture_name);
		
mysqli_query($con,"insert into products (product_cat, product_brand, product_title, product_price, product_size, product_piece, product_room, product_adress , product_ville , product_code, product_desc, product_image,product_keywords) values ('$product_type','$brand','$product_name','$price', '$product_size','$piece','$room','$product_lieu','$product_ville', '$product_code', '$details','$pic_name','$tags')") or die ("query incorrect");

 header("location: sumit_form.php?success=1");
}

mysqli_close($con);
}
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
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
                        <label>Product Title</label>
                        <input type="text" id="product_name" required name="product_name" class="form-control">
                      </div>
                    </div>
                      <br>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Pricing</label>
                        <input type="text" id="price" name="price" required class="form-control" >
                      </div>
                    </div>
                    <br>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Surface</label>
                              <input type="text" id="size" name="size" required class="form-control" >
                          </div>
                      </div>
                      <br>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Nb de Pieces</label>
                              <input type="text" id="piece" name="piece" required class="form-control" >
                          </div>
                      </div>
                    <br>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Nb de chambres</label>
                              <input type="text" id="room" name="room" required class="form-control" >
                          </div>
                      </div>
                      <br>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Adresse</label>
                              <input type="text" id="lieu" name="lieu" required class="form-control" >
                          </div>
                      </div>
                      <br>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Ville</label>
                              <input type="text" id="ville" name="ville" required class="form-control" >
                          </div>
                      </div>
                      <br>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Code postal</label>
                              <input type="text" id="ville" name="postal" required class="form-control" >
                          </div>
                      </div>
                      <br>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Description</label>
                              <textarea rows="4" cols="80" id="details" required name="details" class="form-control"></textarea>
                          </div>
                      </div>
                      <br>
                      <div class="col-md-4">
                          <div class="">
                              <label for="">Add Image</label>
                              <input type="file" name="picture" required class="btn btn-fill btn-success" id="picture" >
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
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Product status</label>
                        <input type="number" id="brand" name="brand" required class="form-control">
                      </div>
                    </div>
                     
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Reference</label>
                        <input type="text" id="tags" name="tags" required class="form-control" >
                      </div>
                    </div>
                  </div>
                  <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">Add Product</button>
              </div>

                <div class="col-md-5">
                    <div class="card">

                        <div class="card-body">

                            <div class="row">

                                <div class="col-30">
                                    <div class="form-group">
                                        <label>Category</label><br>
                                        <td>1 = Maison |</td>
                                        <td>2 = Appartement</td><br>
                                        <td>3 = Terrain |</td>
                                        <td>4 = Immeuble</td><br>
                                        <td>5 = Local |</td>
                                        <td>6 = Autres</td>
                                    </div>

                                    <div class="col-md-30">
                                        <div class="form-group">
                                            <label for="">status</label><br>
                                            <td>1 = Vendre</td>
                                            <td>2 = Location</td><br>
                                            <td>3 = Vendu</td>
                                        </div>
                                    </div>

                                    <div class="col-md-30">
                                        <div class="form-group">
                                            <label>Reference</label>
                                            <p>Mot clé pour la recherche!</p>
                                        </div>
                                    </div>
                                </div>
                                </div>

                        </div>
                    </div>
                </div>
              <div class="card-footer">

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