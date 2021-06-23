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
    <?php
      require("header.php");
    ?>
  </header>
  <div class="content">
    <div class="container_12">
      <div class="grid_12">
        <h2>Photos</h2>
      </div>
      <div class="clear"></div>
      <div class="portfolio">
        <div class="grid_6"><a href="food pics/ramen.jpg" data-gal="prettyPhoto[1]"><span></span><img src="food pics/ramen.jpg" width="440" height="440" alt=""></a></div>
        <div class="grid_6"><a href="food pics/egg_florentine_1.jpg" data-gal="prettyPhoto[1]"><span></span><img src="food pics/egg_florentine_1.jpg" width="440" height="440" alt=""></a></div>
        <div class="grid_6"><a href="food pics/beef_birra_taco_2.jpg" data-gal="prettyPhoto[1]"><span></span><img src="food pics/beef_birra_taco_2.jpg" width="440" height="440" alt=""></a></div>
        <div class="grid_6"><a href="food pics/japanese-cheese-cake-gif.gif" data-gal="prettyPhoto[1]"><span></span><img src="food pics/japanese_cheese_cake_2.jpg" width="440" height="440" alt=""></a></div>
      </div>
      <div class="clear"></div>
      <div class="bottom_block">
        <div class="grid_6">
          <h3>Follow Us</h3>
          <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
          <nav>
            <?php
              require("bottom_nav.php");
            ?>
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