<?php include("aheader.php"); ?>
<?php include("connect.php");


$p_id = $_GET['p_id'];
$q = "select * from product where p_id=$p_id";
$rs = mysqli_query($cn, $q);
$row = mysqli_fetch_array($rs);
?>

<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
     <div class="container">
          <h3 class="tittle-w3layouts text-center my-lg-4 my-4">EDIT PRODUCT</h3>


          <div class="contact_grid_right">
               <form action="editproduct_code.php" method="post">
                    <input type="hidden" name="p_id" value="<?php print $p_id ?>">
                    <div class="row contact_left_grid">
                         <div class="col-md-12 con-left">

                              <div class="form-group">
                                   <label>NAME</label>
                                   <input class="form-control" type="text" name="name" placeholder="" value="<?php print $row['name']; ?>" required="">
                              </div>
                              <div class="form-group">
                                   <label class="my-2">C_ID</label>
                                   <!-- <input class="form-control" type="text" name="c_id" placeholder="" required=""> -->
                                   <select name="c_id" class="form-control" id="contactemail" required>
                                        <?php
                                        $q1 = "select * from category";
                                        $rs1 = mysqli_query($cn, $q1);
                                        while ($row1 = mysqli_fetch_array($rs1)) {
                                        ?>

                                             <option value="<?php print $row1[0]; ?>"><?php print $row1[1]; ?></option>
                                        <?php
                                        }

                                        ?>
                              </div>
                              <div class="form-group">
                                   <label class="my-2">PHOTO</label>
                                   <input class="form-control" type="file" value="<?php print $row['photo']; ?>" name="photo" placeholder="" required="">
                              </div>
                              <div class="form-group">
                                   <label class="my-2">detail</label>
                                   <input class="form-control" value="<?php print $row['detail']; ?>" type="text" name="detail" placeholder="" required="">
                              </div>
                              <div class="form-group">
                                   <label class="my-2">price</label>
                                   <input class="form-control" value="<?php print $row['price']; ?>" type="text" name="price" placeholder="" required="">
                              </div>
                         </div>
                         <input class="form-control" type="submit" value="Submit">


                    </div>
               </form>
          </div>

     </div>
</section>


<?php include("footer.php"); ?>