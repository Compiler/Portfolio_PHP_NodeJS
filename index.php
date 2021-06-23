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
      <div class="slider">
        <ul class="items">
          <li><img src="images/slide.jpg" alt=""></li>
          <li><img src="images/slide1.jpg" alt=""></li>
          <li class="mb0"><img src="images/slide2.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="content page1">
    <div class="container_12">
      <div class="grid_7">
        <h2>Welcome</h2>
        <div class="page1_block col1"> <img src="images/welcome_img.png" alt="">
          <div class="extra_wrapper">
            <p><span class="col2"><a href="#">Click here</a></span> for more info about this free website template created by TemplateMonster.com </p>
            Aenean nonummy hendrerit mau rellus porta. Fusce suscipit varius m sociis natoque penaibet magni parturient montes nasetur ridiculumula dui. <br>
            <a href="#" class="btn">more</a> </div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="grid_5">
        <h2>Features</h2>
        <ul class="list">
          <li><a href="#">Unlimited consultations and/or planning</a></li>
          <li><a href="#">Expert advice on traditions, customs, aetiquette</a></li>
          <li><a href="#">Determine and stay within budget</a></li>
          <li><a href="#">Choosing the right Wedding Venue</a></li>
          <li><a href="#">Provide preferred vendor's list</a></li>
          <li><a href="#">Assist with wedding scheme and design</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="grid_12">
        <div class="hor_separator"></div>
      </div>
      <div class="grid_12">
        <div class="car_wrap">
          <h2>Best Selling</h2>
          <a href="#" class="prev"></a><a href="#" class="next"></a>
          <ul class="carousel1">
            <li>
              <div><img src="food pics/beef_birra_taco_2.jpg" width="220px" height="220px"alt="">
                <div class="col3"> <a href="#">Beef Birra Tacos</a></div>
                <div class="price">$10</div>
              </div>
            </li>
            <li>
              <div><img src="food pics/meatball_sub_2.jpg" alt="">
                <div class="col3"> <a href="#">Meatball Sub</a></div>
                <div class="price">$8</div>
              </div>
            </li>
            <li>
              <div><img src="food pics/salmon_burger_3.jpg" alt="">
                <div class="col3"> <a href="#">Salmon Burger</a></div>
                <div class="price">$12</div>
              </div>
            </li>
            <li>
              <div><img src="food pics/sausage_gravy_biscuits_egg_5.jpg" alt="">
                <div class="col3"> <a href="#">Sausage Gravy Biscuits</a></div>
                <div class="price">$8</div>
              </div>
            </li>
            <li>
              <div><img src="food pics/general_tsaos_2.jpg" alt="">
                <div class="col3"> <a href="#">General Tsaos Chicken</a></div>
                <div class="price">$5</div>
              </div>
            </li>
          </ul>
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