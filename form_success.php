<?php

if($_POST['q'] == "true"){

	echo 'Thank you <b> ' . $_POST['name'] . ' </b> we have received your message regarding <b> ' . $_POST['subject'] . '</b> ,  and will get back to you ASAP!. Enjoy the rest of your day.';

} else if($_POST['q'] == "false") {

echo "Thank's for your application <b> " . $_POST['name'] . " </b>.  Your application for the role of <b> " . $_POST['partTime'] . " " . $_POST['workRole'] . ", </b> has been successfully submitted.";


}
?>

