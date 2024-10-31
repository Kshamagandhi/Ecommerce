<?php include("aheader.php");
include("connect.php");

if (isset($_GET['f_id'])) {
     $f_id = $_GET['f_id'];
     $qd = "delete from feedback where f_id='$f_id'";
     mysqli_query($cn, $qd);
}
?>


<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
     <div class="container">
          <h3 class="tittle-w3layouts text-center my-lg-4 my-4">VIEW FEEDBACK</h3>


          <div class="contact_grid_right">
               <table class="table">

                    <tr style="font-weight: bold;">
                         <td>name</td>
                         <td>email</td>
                         <td>msg</td>
                         <td>date</td>
                    </tr>

                    <?php
                    $q = "select * from feedback";
                    $rs = mysqli_query($cn, $q);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>


                         <tr>
                              <td><?php print $row['name']; ?></td>
                              <td><?php print $row['email']; ?></td>
                              <td><?php print $row['msg']; ?></td>
                              <td><?php print $row['date']; ?></td>




                         </tr>
                    <?php
                    }
                    ?>





               </table>
          </div>

     </div>
</section>


<?php include("footer.php"); ?>