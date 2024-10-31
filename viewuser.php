<?php include("aheader.php"); ?>


<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
     <div class="container">
          <h3 class="tittle-w3layouts text-center my-lg-4 my-4">VIEW USER</h3>


          <div class="contact_grid_right">
               <table class="table">

                    <tr style="font-weight: bold;">
                         <td>name</td>
                         <td>email</td>

                         <td>bdate</td>
                         <td>city</td>
                         <td>address</td>
                    </tr>

                    <?php
                    include("connect.php");
                    $q = "select * from user";
                    $rs = mysqli_query($cn, $q);
                    while ($row = mysqli_fetch_array($rs)) {


                    ?>
                         <tr>
                              <td><?php print $row['name']; ?></td>
                              <td><?php print $row['email']; ?></td>
                              <td><?php print $row['birthdate']; ?></td>
                              <td><?php print $row['city']; ?></td>
                              <td><?php print $row['address']; ?></td>

                         </tr>
                    <?php
                    }
                    ?>



               </table>
          </div>

     </div>
</section>


<?php include("footer.php"); ?>