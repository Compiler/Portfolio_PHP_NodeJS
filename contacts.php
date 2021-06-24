<!DOCTYPE HTML>
<html lang="en">
<head>
<title>The Restaurant | Contact Us</title>
<meta charset="utf-8">
<link rel="icon" href="images/icon.ico">
<link rel="shortcut icon" href="images/icon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/sForm.js"></script>
<script src="js/Forms.js"></script>

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
        <h2>Find Us</h2>
        <div class="info">
          <address>
          <dl>
            <dt>
              <p>The Restaurant<br>
                3215 S Rancho Dr #100,<br>
                Las Vegas, NV 89102
              </p>
            </dt>
            <dd><span>Telephone:</span>+1-800-808-4194</dd><br><br><br><br><br><br>
            <p>
              Hours: <br>
              Mon: 8AM to 11PM <br>
              Tues: 8AM to 11PM <br>
              Wed: 8AM to 11PM <br>
              Thurs: 8AM to 11PM <br>
              Fri: 8AM to 12AM <br>
              Sat: 8AM to 12AM<br>
              Sun: 10AM to 9PM<br>
            </p>
          </dl>
          </address>
        </div>
      </div>
      <div class="grid_5 prefix_1">
        <?php
          require("email_section.php");
        ?>
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