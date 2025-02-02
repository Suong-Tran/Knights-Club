<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style_template.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="../css/ContactUsStyle.css">
</head>
<body>
<?php
require_once ("../home_page/header.php");
?>
<div class="container-contact100">
  <div class="wrap-contact100">
    <form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Get in Touch
				</span>

      <div class="wrap-input100 validate-input" data-validate="Name is required">
        <input class="input100" id="name" type="text" name="name" placeholder="Name">
        <label class="label-input100" for="name">
          <span class="lnr lnr-user"></span>
        </label>
      </div>

      <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input100" id="email" type="text" name="email" placeholder="Email">
        <label class="label-input100" for="email">
          <span class="lnr lnr-envelope"></span>
        </label>
      </div>

      <div class="wrap-input100 validate-input" data-validate = "Phone is required">
        <input class="input100" id="phone" type="text" name="phone" placeholder="Phone">
        <label class="label-input100" for="phone">
          <span class="lnr lnr-phone-handset"></span>
        </label>
      </div>

      <div class="wrap-input100 validate-input" data-validate = "Message is required">
        <textarea class="input100" name="message" placeholder="Your message..."></textarea>
      </div>

      <div class="contact100-form-checkbox">
        <input class="input-checkbox100" id="ckb1" type="checkbox" name="copy-mail">
        <label class="label-checkbox100" for="ckb1">
          Send copy to my-email
        </label>
      </div>

      <div class="container-contact100-form-btn">
        <div class="wrap-contact100-form-btn">
          <div class="contact100-form-bgbtn"></div>
          <button class="contact100-form-btn">
            Send Email
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
<?php
require_once ("../home_page/footer.php");
?>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/Contactus.js"></script>
</body>
</html>
