<?php
$title = "Join The Team";
$page = "jobs";
include "header.php";
?>

<div class="container content-container">
<div class="instructions"><h3>Click the icon below <br> to open the application form</h3></div>

<div class='form-overlay'></div>
<div class='icon fa fa-pencil' id='form-container'>
  <span class='icon fa fa-close' id='form-close'></span>
  <div id='form-content'>
    <div id='form-head'>
      <h1 class='pre'>Have what it takes?</h1>
      <h1 class='post'>Thanks !</h1>
      <p class='post'>We'll be in touch with you soon. <br> Look forward to having you on the team!</p>
    </div>
      
     
    <form id="job-form">
      <input class='input name' id="user_name" name='user_name' placeholder="What's your name?" type='text'>
      <input class='input email' id="user_email" name='user_email' placeholder='E-mail address of your choice' type='text'>
      <input class='input mobile_number' id=" mobile_number" name=' mobile_number' placeholder='Your cell number so we can give you a text or call' type='text'>
      <input class='input social_media' id=" social_media" name=' social_media' placeholder='Enter your username to one of your social media sites' type='text'>
      <p  id="socialchannels" class="social-channel">Which account is this for? (Please select from one of the boxes below)</p>
      <label><input  id="social_Facebook" class="input social_channel" name="Facebook" type="checkbox" >Facebok</label><br>
      <label><input  id="social_LinkedIn" class="input social_channel" name="LinkedIn" type="checkbox" >LinkedIn</label><br>
      <label><input  id="social_Instagram" class="input social_channel" name="Instagram" type="checkbox" >Instagram</label><br>
      <label><input  id="social_Twitter" class="input social_channel" name="Twitter" type="checkbox" >Twitter</label><br>
      <select class='input role' id="work-role" name='work-role'>
        <option disabled='' selected>What role are you after?</option>
        <option>Kitchen Staff</option>
        <option>Front of House / Barista</option>
        <option>Manager</option>
      </select>
      <label><input  id="part_time" class="input time" name="part_time" type="checkbox" >Part-Time</label><br>
      <label><input  id="full_time" class="input time" name="full_time" type="checkbox" >Full Time</label><br>
      <input class="file" type="file" name="profile-pic" accept="image/*">
      <input class="file" type="file" name="resume" accept="media_type">
      <textarea class='input message' id= "message" name="message" placeholder="In 200 hundred characters or less , tell us what makes you stand out?" maxlength="200"></textarea>
      <input class='input submit' type='submit' value='Apply!' name="submitButton" onClick="javascript:ajax_post();">
      <br><br> 
    </form>
  </div>
</div>
</div>

<?php 
include "footer.php";
 ?>
