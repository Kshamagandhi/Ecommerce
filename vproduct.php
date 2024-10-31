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
                         <li>PRODUCT</li>
                    </ul>
               </div>
          </div>

     </div>
     <!--//banner -->
     <!--/shop-->
     <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
          <div class="container-fluid">
               <h3 class="tittle-w3layouts text-center my-lg-4 my-4">OUR PRODUCTS</h3>
               <div class="inner-sec-shop px-lg-4 px-3">
                    <div class="row">
                         <!-- product left -->
                         <div class="side-bar col-lg-3">

                              <div class="left-side">
                                   <h3 class="agileits-sear-head">CATEGORY</h3>
                                   <ul>
                                        <li>
                                             <!-- <span class="span">Backpack</span> -->
                                             <?php
                                             $q = "select * from category";
                                             $rs = mysqli_query($cn, $q);
                                             while ($row = mysqli_fetch_array($rs)) {


                                             ?>
                                        <li>
                                             <a href="vproduct.php?c_id=<?php print $row['c_id']; ?>"><label for="cat1"><?php print $row['cname']; ?></label></a>
                                        </li>
                                   <?php
                                             }
                                   ?>
                                   </li>
                                   </ul>
                              </div>



                              <!-- //deals -->
                         </div>
                         <!-- //product left -->
                         <!--/product right-->
                         <div class="left-ads-display col-lg-9">
                              <div class="wrapper_top_shop">
                                   <div class="row">
                                        <?php
                                        if (isset($_GET['c_id'])) {
                                             $c_id = $_GET['c_id'];
                                             $q = "select * from product where c_id='$c_id'";
                                        } else {
                                             $q = "select * from product ";
                                        }
                                        $rs = mysqli_query($cn, $q);
                                        while ($row = mysqli_fetch_array($rs)) {

                                        ?>

                                             <div class="col-md-4 product-men women_two shop-gd">

                                                  <div class="product-googles-info googles">
                                                       <div class="men-pro-item">
                                                            <div class="men-thumb-item">
                                                                 <img src="<?php print $row['photo']; ?>" alt="img" class="card-img-top">
                                                                 <div class="men-cart-pro">
                                                                      <div class="inner-men-cart-pro">
                                                                           <a href="vproductdetails.php?p_id=<?php print $row['p_id']; ?>" style="width:150px" class="link-product-add-cart text-center">Quick View</a>
                                                                      </div>
                                                                 </div>
                                                                 <span class="product-new-top">New</span>
                                                            </div>
                                                            <div class="item-info-product">
                                                                 <div class="info-product-price">
                                                                      <div class="grid_meta">
                                                                           <div class="product_price">
                                                                                <h6>
                                                                                     <?php print $row['name']; ?>
                                                                                </h6>
                                                                                <div class="grid-price mt-2">
                                                                                     <span class="money "><?php print $row['price']; ?></span>
                                                                                </div>
                                                                           </div>

                                                                      </div>
                                                                      <!-- <div class="googles single-item hvr-outline-out">
                                                                           <form action="#" method="post">
                                                                                <input type="hidden" name="cmd" value="_cart">
                                                                                <input type="hidden" name="add" value="1">
                                                                                <input type="hidden" name="googles_item" value="Farenheit">
                                                                                <input type="hidden" name="amount" value="575.00">
                                                                                <button type="submit" class="googles-cart pgoogles-cart">
                                                                                     <i class="fas fa-cart-plus"></i>
                                                                                </button>
                                                                           </form>

                                                                      </div> -->
                                                                 </div>
                                                                 <div class="clearfix"></div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        <?php
                                        }
                                        ?>



                                   </div>


                              </div>
                         </div>
                    </div>
               </div>
          </div>

          <?php include('footer.php'); ?>