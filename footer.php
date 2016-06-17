
    <footer>
      <div class="row footer-stuff">
        <div class="columns twelve" id="subscription-form">
          <p><strong>Sign Up for the newsletter</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <form class="row columns nine" action="" method="post" name="subscribe">
          <div class="columns four">
          <label for="name" id="name_label">Name</label>
          <input type="text" name="name" id="name" size="30" value="" class="text-input columns twelve" placeholder="Please enter your name" />
          <label class="error" for="name" id="name_error">This field is required.</label>
          </div>

          <div class="columns four">
          <label for="email" id="email_label">Email</label>
          <input type="text" name="email" id="email" size="30" value="" class="text-input columns twelve" placeholder="Please enter your e-mail address"/>
          <label class="error" for="email" id="email_error">This field is required.</label>
          </div>

          <div class="columns two align-btn">
          <input type="submit" name="submit" id="submit_btn" class="button-primary" value="SEND"  class="columns eight">
            </div>
          </form>

          <div class="columns two social-media"><strong>FIND US ON</strong>
          <ul>
            <li><a href="https://www.facebook.com/thelabvictoria">Facebook</a></li>
            <li><a href="https://www.instagram.com/thelabvictoria/">Instagram</a></li>
            <li><a href="">Pinterest</a></li>
            
          </ul>
          </div>

        </div>

        
      </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js" ></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> 
    <script src="//assets.juicer.io/embed.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dynamics.js/1.1.0/dynamics.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/main.js"></script>
    <script>
      (function() {
        document.documentElement.className = 'js';
        var slideshowNoodles = new CircleSlideshow(document.getElementById('slideshow'));
        var slideshowJuices = new CircleSlideshow(document.getElementById('slideshow2'));
        var slideshowCoffee = new CircleSlideshow(document.getElementById('slideshow3'));
        var slideshowSnacks = new CircleSlideshow(document.getElementById('slideshow4'));
      })();
</script>
<script language="Javascript" type="text/javascript">
function ajax_post(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    
    var personsName = document.getElementById("user_name").value;
    var email = document.getElementById("user_email").value;
    
      var subject = document.getElementById("subject");
      if(typeof(subject) != 'undefined' && subject != null){
        subject = document.getElementById("subject").value;
        var contact = true
      } else {
          subject = "";
          contact = false;
     }
     console.log(q);
    // if value required is work-role
    if (! contact){
       var workRole = document.getElementById("work_role");
        if(typeof(workRole) != 'undefined' && workRole != null){
          workRole = document.getElementById("work_role").value;
        } else {
            workRole = "";
       }

       //if value required is part-time
        var partTime = document.getElementById("part_time").checked;
        
        if(partTime){
          partTime = "part time";
        } else{
            partTime = "full time";
       }
      }
      //checking if q is present
       var q = document.getElementById("q");
       if(q != null){
        //contact form
          q = "true";
       } else {
        // job form
          q = "false";
       }
        
        console.log(q);
     // Create some variables we need to send to our PHP file
    var url = "form_success.php";
 
    var vars = "name="+personsName+"&email="+email+"&subject="+subject+"&workRole="+workRole+"&partTime="+partTime+"&q="+q;


    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
      if(hr.readyState == 4 && hr.status == 200) {
        var return_data = hr.responseText;
      document.getElementById("status").innerHTML = return_data;
      }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "processing...";
}
</script>
      
  </body>
</html>