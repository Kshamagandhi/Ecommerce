<?php include("aheader.php");
include("connect.php");

if (isset($_GET['p_id'])) {
     $p_id = $_GET['p_id'];
     $qd = "delete from product where p_id='$p_id'";
     mysqli_query($cn, $qd);
}
?>


<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
     <div class="container">
          <h3 class="tittle-w3layouts text-center my-lg-4 my-4">VIEW PRODUCT</h3>


          <div class="contact_grid_right">
               <table class="table center">
                    <tr align="center">
                         <td><button type="button" class="btn btn-primary" style="color: white;"><a style="text-decoration: none; color:white" href="addproduct.php">ADD PRODUCT</a></button></td>
                    </tr>
                    <tr style="font-weight: bold;">
                         <td>Name</td>
                         <td>Category</td>
                         <td>Photo</td>
                         <td>Detail</td>
                         <td>Price</td>
                         <td>Option</td>

                    </tr>
                    <?php
                    $q = "select c.*,p.* from product p , category c where c.c_id=p.c_id";
                    $rs = mysqli_query($cn, $q);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>


                         <tr>
                              <td><?php print $row['name']; ?></td>
                              <td><?php print $row['cname']; ?></td>
                              <td><img src="<?php print $row['photo']; ?>" style="width:250px;height:250px"></td>
                              <td><?php print $row['detail']; ?></td>
                              <td><?php print $row['price']; ?></td>
                              <td>
                                   <a href="edit_product.php?p_id=<?php print $row['p_id']; ?>">Edit|</a>
                                   <a href="viewproduct.php?p_id=<?php print $row['p_id']; ?>">Delete </a>
                              </td>


                         </tr>
                    <?php
                    }
                    ?>
               </table>
          </div>

     </div>
</section>


<?php include("footer.php"); ?>