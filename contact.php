<?php
$title = "Get In Touch";
$page = "contact";
include "header.php";
?>

<div class='form-overlay'></div>
<div class="instructions"><h3>Click the icon below <br> to open the form</h3></div>
<div class='icon fa fa-pencil' id='form-container'>
  <span class='icon fa fa-close' id='form-close'></span>
  <div id='form-content'>
    <div id='form-head'>
      <h1 class='pre'>Get in touch</h1>
      <p class='pre'>Good choice...</p>
      <h1 class='post'>Thanks!</h1>
      <p class='post'>I'll be in touch ASAP</p>
    </div>
    <form>
      <input class='input name' name='user_name' placeholder='Your name please' type='text'>
      <input class='input email' name='user_email' placeholder='A contact email' type='text'>
      <select class='input select' name='subject'>
        <option disabled=''>What shall we talk about?</option>
        <option selected=''>About a new project</option>
        <option>About a job opportunity</option>
        <option>Let's do this over a coffee</option>
      </select>
      <textarea class='input message' placeholder='How can I help?'></textarea>
      <input class='input submit' type='submit' value='Send Message'>
    </form>
  </div>
</div>

<?php 
include "footer.php";
 ?>
