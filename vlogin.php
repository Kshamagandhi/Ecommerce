<?php include("connect.php"); ?>

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
                         <li>LOGIN</li>
                    </ul>
               </div>
          </div>

     </div>
     <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
          <div class="container">
               <h3 class="tittle-w3layouts text-center my-lg-4 my-4">LOGIN</h3>


               <div class="contact_grid_right">
                    <form action="vlogin_code.php" enctype="multipart/form-data" method="post">
                         <div class="row contact_left_grid">
                              <div class="col-md-12 con-left">



                                   <div class="form-group">
                                        <label class="my-2">EMAIL</label>
                                        <input class="form-control" type="text" name="email" placeholder="" required="">
                                   </div>
                                   <div class="form-group">
                                        <label class="my-2">PASSWORD</label>
                                        <input class="form-control" type="password" name="password" placeholder="" required="">
                                   </div>
                                   <input class="form-control" type="submit" value="Submit" style="background-color: black; color:white">
                              </div>


                         </div>
                    </form>
                    <a href="adminlogin.php">Click here for admin login</a><br>
                    <a href="vregister.php">Click here for registation</a>
               </div>

          </div>
     </section>


     <?php include("footer.php"); ?>