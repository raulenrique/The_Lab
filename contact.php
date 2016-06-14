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
      <p class='post'>I'll be in touch ASAP</p>
    </div>
    <form id="contact-form">
      <input class='input name' name='user' placeholder="What's your name" type='text'>
      <input class='input email' name='email' placeholder='E-mail address of your choice' type='text'>
      <select class='input select' name='subject'>
        <option disabled='' selected="">What can we help you with?</option>
        <option>I'd like to know about catering options available</option>
        <option>I'd like to know more about the nutritional profile / ingredients you use</option>
        <option>I'd like to enquire about your business for investment purposes</option>
        <option>I'd like to gather some media related info from you guys</option>
      </select>
      <textarea class='input message' placeholder='Let us know how we can help.'></textarea>
      <input class='input submit' type='submit' value='Send Message'>
    </form>
  </div>
</div>
</div>


<?php 
include "footer.php";
 ?>
