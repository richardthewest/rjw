
<?php

if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['comments']))
{
	$name = $_POST['name'];
	$mail_from = "r.j.west@live.com.au";
	$subject = "Thank You For Your Enquiry";
	$comment = $_POST['comments'];

	$mailTo = $_POST['email'];

	$headers = "From: " .$mail_from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$message = '<html><body>';
	$message .= '<h1>Thank you for your enquiry.</h1>';
	$message .= '<p style="font-size: 16px; margin: 5px;">We will contact you shortly.<br><br>';
	$message .= 'Your enquiry details:<br><br></p>';
	$message .= '<p style="background-color: #e6ffff; margin: auto; width: 70%; font-size: 16px;">';
	$message .= $comment; 
	$message .= '</p><br><br>';
	$message .= '<p style="font-size: 16px; margin: 5px;">';
	$message .= 'Regards,<br>';
	$message .= 'R. West<br>';
	$message .= 'e: ' .$mail_from . '<br>';
	$message .= 'www.websiteurl.com</p><br>';
	$message .= '<img style="width: 200px; height: 100px;" src="http://localhost/rjw/img/html.jpg">';
	$message .= "</body></html>";

	mail($mailTo, $subject, $message, $headers);
}

?>
