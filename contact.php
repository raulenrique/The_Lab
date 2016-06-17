<?php
$title = "Get In Touch";
$page = "contact";
include "header.php";
?>
<div class="container content-container">
<div class="instructions"><h3>Click the icon below <br> to open the contact form</h3></div>
<div class='form-overlay'></div>
<div class='icon fa fa-pencil' id='form-container'>
  <span class='icon fa fa-close' id='form-close'></span>
  <div id='form-content'>
    <div id='form-head'>
      <h1 class='pre'>Get in touch</h1>
      <h1 class='post'>Thanks!</h1>
      <p class='post' id="status"></p>
    </div>
    <form id="contact-form" class="expand">
     <input type="hidden" name="q" id="q">
      <input class='input name' id="user_name" name='user' placeholder="What's your name" type='text'>
      <input class='input email' id="user_email" name='email' placeholder='E-mail address of your choice' type='text'>
      <select class='input select' name='subject' id="subject">
        <option disabled='' selected="">What can we help you with?</option>
        <option>available catering options</option>
        <option>nutritional profile / ingredients we use</option>
        <option>business and investment enquiry</option>
        <option>media related info from us</option>
      </select>
      <textarea class='input message' id="message" placeholder='Let us know how we can help.'></textarea>
      <input class='input submit' type='submit' value='Send Message' name="submitButton" onclick="javascript:ajax_post();">
    </form>
  </div>
</div>
</div>


<?php 
include "footer.php";
 ?>
