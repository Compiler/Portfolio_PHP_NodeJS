<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Gourmet Traditional Restaurant | Portfolio</title>
<meta charset="utf-8">
<link rel="icon" href="images/icon.ico">
<link rel="shortcut icon" href="images/icon.ico">
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
      <?php
        require("pics.php");
      ?>
      <div class="clear"></div>
      <div class="bottom_block">
        <div class="grid_6">
          <h3>Follow Us</h3>
          <?php
            require("socials.php");
          ?>          
          <nav>
            <?php
              require("bottom_nav.php");
            ?>
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