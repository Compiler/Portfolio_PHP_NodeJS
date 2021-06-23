<!DOCTYPE HTML>
<html lang="en">
<head>
<title>The Restaurant | Menu</title>
<meta charset="utf-8">
<link rel="icon" href="images/icon.ico">
<link rel="shortcut icon" href="images/icon.ico">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/sForm.js"></script>

</head>
<body>
<div class="main">
  <header>
    <?php
      require("header.php");
    ?>
  </header> 
  <div class="content">
    <div class="container_12">
      <div class="grid_6">
        <h2>Our Menu</h2>
        <p class="col2 inn1"><a href="#">Integer non metus justo ac posuere turpis. Integer iaculis porta metus, in aliquam orci vehicula sit amet. Suspendisse turpis mauris, laoreet ac aliquet a lobortis in massa. Etiam tortor metus, tincidunt vel congue etu</a></p>
        <p>Aenean sed nunc lorem, nec ornare nibh. Pellentesque vitae sem odio. Vivamus vulputate est eget elit rutrum a consectetur justo aliquet. Aliquam hendrerit consectetur mi, non molestie massa venenatis quis. Integer aliquet euismod nisl, et sagittis sem scelerisque sit amet. Etiam dapibus, tellus et imperdiet pulvinar, urna nunc consectetur enim, in </p>
        <div class="menu">
          <div class="grid_3 alpha"> <img src="images/page3_img1.jpg" alt="" class="img_inner">
            <h3><a href="#">Donec</a></h3>
          </div>
          <div class="grid_3 omega"> <img src="images/page3_img2.jpg" alt="" class="img_inner">
            <h3><a href="#">Murtyio</a></h3>
          </div>
          <div class="grid_3 alpha"> <img src="images/page3_img3.jpg" alt="" class="img_inner">
            <h3><a href="#">Holity as Polfh</a></h3>
          </div>
          <div class="grid_3 omega"> <img src="images/page3_img4.jpg" alt="" class="img_inner">
            <h3><a href="#">Kiperty</a></h3>
          </div>
          <div class="grid_3 alpha"> <img src="images/page3_img5.jpg" alt="" class="img_inner">
            <h3 class="mb0"><a href="#">Gyloit</a></h3>
          </div>
          <div class="grid_3 omega"> <img src="images/page3_img6.jpg" alt="" class="img_inner">
            <h3 class="mb0"><a href="#">Liotymer</a></h3>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="grid_5 prefix_1">
        <h2 class="head2">Chef’s Secrets</h2>
        <ul class="list l1">
          <li><a href="#"> Maecenas malesuada sapien</a></li>
          <li><a href="#">Etiam tortor metus, tincidunt vel gtcongue</a></li>
          <li><a href="#">Pellentesque vitae sem odio</a></li>
          <li><a href="#"> Lorem ipsum dolor sit amet, con</a></li>
          <li><a href="#">Provide preferred vendor's list</a></li>
          <li><a href="#">Vivamus vulputate est eget elit s tellus et</a></li>
          <li><a href="#"> Nam blandit metus eget pretium</a></li>
          <li><a href="#"> Aaecenas koalesuada sapien</a></li>
          <li><a href="#">Ttiam tortor metus tiklioidunt vel</a></li>
          <li><a href="#">Eellentesque vitae sem odiokhoy</a></li>
          <li><a href="#"> Okoem ipsum dolor sit amet df</a></li>
          <li><a href="#">Rovide preferred vendor's listko frefrwq hu</a></li>
          <li><a href="#">Vvamus vulputate est eet elit</a></li>
          <li class="mb0"><a href="#"> Am blandit metus eet pretium</a></li>
        </ul>
        <h2 class="head1">Wine List</h2>
        <ul class="list">
          <li><a href="#"> Koalesuada  libero</a></li>
          <li><a href="#">Ortor metus vel</a></li>
          <li><a href="#">Eellentesque vitae sem</a></li>
          <li><a href="#"> Ipsum</a></li>
          <li><a href="#">Rovide preferred</a></li>
          <li><a href="#">Vulputate est</a></li>
          <li><a href="#"> Bandit metus</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="bottom_block">
        <div class="grid_6">
          <h3>Follow Us</h3>
          <?php
            require("socials.php");
          ?>
          <nav>
            <ul>
              <?php
                include("bottom_nav.php");
              ?>
            </ul>
          </nav>
        </div>
        <div class="grid_6">
          <?php
            include("email_update.php");
          ?>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>