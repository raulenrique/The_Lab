<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans|Josefin+Slab|Poiret+One|Raleway' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"  rel="stylesheet" >
     <link rel="stylesheet" href="css/normalize.css">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/contentpages.css">
     <link rel="stylesheet" href="css/component.css">
     <!-- <script language="Javascript" type="text/javascript">
function ajax_post(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "jobs.php";
    var personsName = document.getElementById("user_name").value;
    var email = document.getElementById("user_email").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;
    var vars = "name="+personsName+"&email="+email+"&subject="+subject+"&message="+message;
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
</script> -->
  </head>

  <body>
             <!-- NAVBAR -->
         
       <header class="navheader">

            <div class="mobile-toggle">
                <button>
            <div class="atomic"></div>
            <div class="atomic"></div>
            <div class="atomic"></div>
          </button>
            </div>

            <nav>
                <ul>
                    <li><a href="menu.php">Our Creations</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li class="brandli"><a href="index.php"><span>Home</span><div class="brandlogo"><img src="images/svg/logo-nav.svg" alt="brand-logo">
        </div></a></li>
                    <li><a href="jobs.php">Join The Team</a></li>
                    <li><a href="contact.php">Get in Touch</a></li>
                </ul>
            </nav>
    </header>
