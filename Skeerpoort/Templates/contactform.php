<?php

if (isset($_POST['submit']))
{
	$names = $_POST['names'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$company = $_POST['company'];
	$delivery = $_POST['delivery'];
	$message = $_POST['message'];
	
	$mailto = "ericvermaak95@gmail.co.za";
	$headers = "Form: ".$mailForm;
	$txt = "You have recieved an email from ".$name.".\n\n".$message;
	
	mail($mailto,subject, $txt, $headers);
	header("Location: Contact_us.html?mailsend");
}

?>