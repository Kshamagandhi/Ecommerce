<?php include("aheader.php");
include("connect.php");

?>


<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
     <div class="container">
          <h3 class="tittle-w3layouts text-center my-lg-4 my-4">VIEW ORDER</h3>


          <div class="contact_grid_right">
               <table class="table">

                    <tr style="font-weight: bold;">
                         <td>Product Details</td>
                         <td>Quntity</td>
                         <td>name</td>
                         <td>city</td>
                         <td>address</td>
                         <td>phone</td>

                    </tr>

                    <?php
                    $q = "select p.name as pname,o.* from  product p,ordermaster o  where o.p_id=p.p_id";
                    $rs = mysqli_query($cn, $q);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>


                         <tr>
                              <td><?php print $row['pname']; ?></td>
                              <td><?php print $row['qty']; ?></td>
                              <td><?php print $row['name']; ?></td>
                              <td><?php print $row['city']; ?></td>
                              <td><?php print $row['address']; ?></td>
                              <td><?php print $row['phone']; ?></td>




                         </tr>
                    <?php
                    }
                    ?>





               </table>
          </div>

     </div>
</section>


<?php include("footer.php"); ?>