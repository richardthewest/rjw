
<?php

if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['comments']))
{
	$name = $_POST['name'];
	$mail_from = $_POST['email'];
	$subject = "New Enquiry";
	$comment = $_POST['comments'];

	$mailTo = "r.j.west@live.com.au";

	$headers = "From: " .$mail_from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$message = '<html><body>';
	$message .= '<h2>You have a new enquiry.</h2>';
	$message .= '<p style="font-size: 16px; margin: 5px;">Name: ' .$name . "<br>Email: " .$mail_from . "<br>Comments: " .$comment . '</p>';
	$message .= "</body></html>";

	//Thank You Automated Reply

	//$Reply

	mail($mailTo, $subject, $message, $headers);
}

?>
