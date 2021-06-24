<!DOCTYPE HTML>
<html lang="en">
<head>
<title>The Restaurant</title>
<meta charset="utf-8">
<link rel="icon" href="images/icon.ico">
<link rel="shortcut icon" href="images/icon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slider.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/sForm.js"></script>
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(function () {
    $('.carousel1').carouFredSel({
        auto: false,
        prev: '.prev',
        next: '.next',
        width: 960,
        items: {
            visible: {
                min: 1,
                max: 4
            },
            height: 'auto',
            width: 240,
        },
        responsive: false,
        scroll: 1,
        mousewheel: false,
        swipe: {
            onMouse: false,
            onTouch: false
        }
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
  <div class="slider-relative">
    <div class="slider-block">
      <?php
        require("slideshow_pics.php");
      ?>
    </div>
  </div>
  <div class="content page1">
    <div class="container_12">
      <div class="grid_welcome">
        <h2>Welcome to The Restaurant</h2>
        <div class="page1_block col1"> <img src="images/welcome_img.png" alt="">
          <div class="extra_wrapper">
            <p class="col2"><span class="inc_font">The Restaurant is committed to ensuring a delightful meal no matter the time. Serving breakfast all day. <br><br>
            Serving a wide variety of foods from all across the world.</p></div>
            
          <div class="clear"></div>
        </div>
      </div>
      <div class="grid_5">
        <!--if features are kept put here -->

      </div>
      <div class="clear"></div>
      <div class="grid_12">
        <div class="hor_separator"></div>
      </div>
      <div class="grid_12">
        <div class="car_wrap">
          <?php
            require("best_selling_display.php");
          ?>
        </div>
      </div>
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
</php>