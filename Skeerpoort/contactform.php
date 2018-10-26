<?php

if (isset($_POST['submit']))
{
	$names = $_POST['names'];
	$subject = $_POST['Enquiry'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$company = $_POST['company'];
	$delivery = $_POST['delivery'];
	$message = $_POST['message'];
	$product = $_POST['product'];
	
	$mailto = "ericvermaak95@gmail.com";
	$headers = "Form: ".$mailForm;
	$txt = "You have recieved an email from \n\n".$names.".\n\n".$telephone.".\n\n".$email.".\n\n".$company.".\n\n".$delivery.".\n\n".$message.".\n\n".$product;
	
	mail($mailto, $subject, $txt, $headers);
	header("Location: Contact_us.html?mailsend");
}

?>