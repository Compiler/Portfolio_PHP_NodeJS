<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Gourmet Traditional Restaurant | Contacts</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/sForm.js"></script>
<script src="js/Forms.js"></script>
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
      <div class="grid_6">
        <h2>Find Us</h2>
        <div class="map">
          <address>
          <dl>
            <dt>
              <p>The Company Name Inc.<br>
                8901 Marmora Road,<br>
                Glasgow, D04 89GR.</p>
            </dt>
            <dd><span>Telephone:</span>+1 800 603 6035</dd>
          </dl>
          </address>
        </div>
      </div>
      <div class="grid_5 prefix_1">
        <h2>Contact Us</h2>
        <form id="form" action="#">
          <div class="success_wrapper">
            <div class="success">Contact form submitted!<br>
              <strong>We will be in touch soon.</strong> </div>
          </div>
          <fieldset>
            <label class="name">
              <input type="text" value="Name:">
              <br class="clear">
              <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
            <label class="email">
              <input type="text" value="E-mail:">
              <br class="clear">
              <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
            <label class="phone">
              <input type="tel" value="Phone:">
              <br class="clear">
              <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
            <label class="message">
              <textarea>Message:</textarea>
              <br class="clear">
              <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
            <div class="clear"></div>
            <div class="btns"><a data-type="reset" class="btn">clear</a><a data-type="submit" class="btn">send</a>
              <div class="clear"></div>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="clear"></div>
      <div class="bottom_block">
        <div class="grid_6">
          <h3>Follow Us</h3>
          <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
          <nav>
            <ul>
              <?php
                include("bottom_nav.php");
              ?>
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