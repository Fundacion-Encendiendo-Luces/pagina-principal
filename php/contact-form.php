<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'j.africanor@gmail.com';  

	// prepare message 
	$body = "You have got a new message from the contact form on your website - Fundación Encendiendo Luces :
	
	Name:  $_POST[name]
	Phone:  $_POST[phone]
	Email:  $_POST[email]
	Message:  $_POST[message]";

	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	mail($youremail, 'Message from Heartness', $body, $headers );

}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Gracias!</title>
</head>
<body>
<p> Millones de gracias! Te contactaremos pronto.</p>
</body>
</html>