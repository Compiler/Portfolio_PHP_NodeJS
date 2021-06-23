<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Gourmet Traditional Restaurant | Portfolio</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/prettyPhoto.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/sForm.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script>
$(document).ready(function () {
    $("a[data-gal^='prettyPhoto']").prettyPhoto({
        theme: 'facebook'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/php5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  <header>
    <div class="container_12">
      <div class="grid_12">
        <h1><a href="index.php"><img src="images/logo.png" alt=""></a></h1>
        <div class="menu_block">
          <nav>
            <?php
                require("nav.php");
            ?>
          </nav>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </header>
  <div class="content">
    <div class="container_12">
      <div class="grid_12">
        <h2>Portfolio</h2>
      </div>
      <div class="clear"></div>
      <div class="portfolio">
        <div class="grid_6"><a href="images/big3.jpg" data-gal="prettyPhoto[1]"><span></span><img src="images/page4_img1.jpg" alt=""></a></div>
        <div class="grid_6"><a href="images/big2.jpg" data-gal="prettyPhoto[1]"><span></span><img src="images/page4_img2.jpg" alt=""></a></div>
        <div class="grid_6"><a href="images/big4.jpg" data-gal="prettyPhoto[1]"><span></span><img src="images/page4_img3.jpg" alt=""></a></div>
        <div class="grid_6"><a href="images/big1.jpg" data-gal="prettyPhoto[1]"><span></span><img src="images/page4_img4.jpg" alt=""></a></div>
      </div>
      <div class="clear"></div>
      <div class="bottom_block">
        <div class="grid_6">
          <h3>Follow Us</h3>
          <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
          <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about-us.php">About Us</a></li>
              <li><a href="menu.php">Menu</a></li>
              <li class="current"><a href="portfolio.php">Portfolio</a></li>
              <li><a href="news.php">News</a></li>
              <li><a href="contacts.php">Contacts</a></li>
            </ul>
          </nav>
        </div>
        <div class="grid_6">
          <h3>Email Updates</h3>
          <p class="col1">Join our digital mailing list and get news<br>
            deals and be first to know about events</p>
          <form id="newsletter" action="#">
            <div class="success">Your subscribe request has been sent!</div>
            <label class="email">
              <input type="email" value="Enter e-mail address" >
              <a href="#" class="btn" data-type="submit">subscribe</a> <span class="error">*This is not a valid email address.</span> </label>
          </form>
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