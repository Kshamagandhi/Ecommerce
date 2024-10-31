<?php include("aheader.php");
include("connect.php");
$c_id = $_GET['c_id'];
$q = "select * from category where c_id=$c_id";
$rs = mysqli_query($cn, $q);
$row = mysqli_fetch_array($rs);


?>

<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
     <div class="container">
          <h3 class="tittle-w3layouts text-center my-lg-4 my-4">EDIT CATEGORY</h3>


          <div class="contact_grid_right">
               <form action="editcategory_code.php" method="post">
                    <input type="hidden" name="c_id" value="<?php print $c_id ?>">
                    <div class="row contact_left_grid">
                         <div class="col-md-12 con-left">

                              <div class="form-group">
                                   <label>Category Name</label>
                                   <input class="form-control" value="<?php print $row['cname']; ?>" type="text" name="cname" placeholder="" required="">
                              </div>

                         </div>
                         <input class="form-control" type="submit" value="Submit">


                    </div>
               </form>
          </div>

     </div>
</section>


<?php include("footer.php"); ?>