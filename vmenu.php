<header>
     <div class="row">
          <div class="col-md-3 top-info-cart text-right mt-lg-4">

               <!---->
          </div>
          <div class="col-md-6 logo-w3layouts text-center">
               <h1 class="logo-w3layouts">
                    <a class="navbar-brand" href="index.php">
                         AMBIKA FURNITURE </a>
               </h1>
          </div>

          <div class="col-md-3 top-info-cart text-right mt-lg-4">

               <!---->
          </div>
     </div>

     <label class="top-log mx-auto"></label>
     <nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

          <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon">

               </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav nav-mega mx-auto">
                    <li class="nav-item active">
                         <a class="nav-link ml-lg-0" href="index.php">Home
                              <span class="sr-only">(current)</span>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="vproduct.php">Product</a>
                    </li>

                    <?php
                    if (!isset($_SESSION['u_id'])) {
                    ?>
                         <li class="nav-item">
                              <a class="nav-link" href="vregister.php">Register</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="vlogin.php">Login</a>
                         </li>

                    <?php } else { ?>
                         <li class="nav-item">
                              <a class="nav-link" href="vcart.php">My Cart</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="vfeedback.php">Feedback</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="logout.php">Logout</a>
                         </li>
                    <?php } ?>
               </ul>

          </div>
     </nav>
</header>