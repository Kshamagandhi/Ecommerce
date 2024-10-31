<!DOCTYPE html>
<html lang="zxx">

<?php
session_start();
include('connect.php');
?>

<head>
     <title>AMBIKA FURNITURE</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta charset="utf-8">
     <meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
     <script>
          addEventListener("load", function() {
               setTimeout(hideURLbar, 0);
          }, false);

          function hideURLbar() {
               window.scrollTo(0, 1);
          }
     </script>
     <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
     <link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
     <link href="css/style6.css" rel='stylesheet' type='text/css' />
     <link rel="stylesheet" href="css/shop.css" type="text/css" />
     <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
     <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
     <link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
     <link href="css/style.css" rel='stylesheet' type='text/css' />
     <link href="css/fontawesome-all.css" rel="stylesheet">
     <link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
     <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
     <div class="banner-top container-fluid" id="home">
          <!-- header -->
          <?php include("vmenu.php"); ?>
     </div>
     <!-- banner -->
     <div class="banner_inner">
          <div class="services-breadcrumb">
               <div class="inner_breadcrumb">

                    <ul class="short">
                         <li>
                              <a href="#">Home</a>
                              <i>|</i>
                         </li>
                         <li>VIEW CART</li>
                    </ul>
               </div>
          </div>

     </div>

     <div class="container">
          <h3 class="tittle-w3layouts text-center my-lg-4 my-4">VIEW CART</h3>
          <div class="row">
               <div class="col-md-12">
                    <table class="table" align="center">
                         <tr>
                              <th>NAME</th>
                              <th>PHOTO</th>
                              <th>PRICE</th>
                              <th>QTY</th>
                              <th>TOTAL</th>
                              <th>OPITON</th>
                         </tr>
                         <tbody> <?php
                                   $c = 0;
                                   $total = 1;
                                   $gtotal = 0;
                                   $q = "select a.*,p.* from addtocart a , product p where p.p_id=a.p_id";
                                   $rs = mysqli_query($cn, $q);
                                   while ($row = mysqli_fetch_array($rs)) {
                                        $total = $row['price'] * $row['qty'];
                                        $gtotal = $gtotal + $total;
                                        $c++;
                                   ?>
                                   <tr>
                                        <td><?php print $c; ?></td>
                                        <td><img src="<?php print $row['photo'] ?>" style="height: 20%;width: 20%;" class="img-responsive"></td>
                                        <td>
                                             <div class="quantity">
                                                  <span><?php print $row['qty'] ?></span>
                                        </td>
                                        <td><?php print $row['name'] ?></td>

                                        <td><?php print $row['price'] ?></td>
                                        <td><?php print $total ?></td>
                                        <td>

                                             <a href="vcart.php?a_id=<?php print $row['a_id']; ?>" class="btn btn-danger"> Delete </a>
                                        </td>
                                   </tr>
                              <?php
                                   }
                              ?>

                              <tr>
                                   <td colspan="5"></td>
                                   <td><?php print $gtotal; ?></td>
                                   <td></td>
                              </tr>
                              <tr>

                                   <td colspan="7" align="center">

                                        <a href="vorder.php" class="btn btn-primary">order</a>
                                   </td>


                              </tr>
                         </tbody>

                    </table>
               </div>
          </div>
     </div>



     <?php include('footer.php') ?>