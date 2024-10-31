<?php include("aheader.php");
include("connect.php");
if (isset($_GET['c_id'])) {
     $c_id = $_GET['c_id'];
     $qd = "delete from category where c_id='$c_id'";
     mysqli_query($cn, $qd);
}
?>


<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
     <div class="container">
          <h3 class="tittle-w3layouts text-center my-lg-4 my-4">VIEW CATEGORY</h3>


          <!-- <div class="contact_grid_right"> -->
          <div class="center">
               <table class="table">

                    <tr style="font-weight: bold;">
                         <td>name</td>
                         <td>option</td>
                         <td><button type="button" class="btn btn-primary" style="color: white;"><a style="text-decoration: none; color:white" href="addcategory.php">ADD CATEGORY</a></button></td>
                    </tr>

                    <?php
                    $q = "select * from category";
                    $rs = mysqli_query($cn, $q);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>


                         <tr>
                              <td><?php print $row['cname']; ?></td>
                              <td><a href="editcategory.php?c_id=<?php print $row['c_id']; ?>">Edit</a>|
                                   <a href="viewcategory.php?c_id=<?php print $row['c_id']; ?>">Delete </a>
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