<?php
error_reporting(0);
//Mail Submitted values --


$receipient="info@wildlifetours-rwanda.com";

$firstName			= isset($_GET["first_name"]) ? $_GET["first_name"] : "";
$surName			= isset($_GET["sur_name"]) ? $_GET["sur_name"] : "";
$otherName			= isset($_GET["other_name"]) ? $_GET["other_name"] : "";
$senderName=$firstName." ".$otherName." ".$surName;

$email				= isset($_GET["email"]) ? $_GET["email"] : "";
$phone				= isset($_GET["phone"]) ? $_GET["phone"] : "";
$country			= isset($_GET["country"]) ? $_GET["country"] : "";

$message 			= isset($_GET["message"]) ? $_GET["message"] : "";

$message=isset($_GET["vcontent"]) ? $_GET["vcontent"] : "";

	if($senderName=="")
	{ 
		header("Location:dialog.php?msg=!ERROR your Name is required."); 
		exit;
	}
	if($email=="")
	{ 
		header("Location:dialog.php?msg=!ERROR your Email is required."); 
		exit;
	}
	if($message=="")
	{ 
		header("Location:dialog.php?msg=!ERROR your message is required."); 
		exit;
	}
	error_reporting(0);



$messageHeader = "\n Reservation From Website: \n\n";
$messageHeader .= "Name: " . $senderName . "\n";
$messageHeader .= "Email: " . $email . "\n";
$messageHeader .= "Phone: " . $phone . "\n";
$messageHeader .= "Country: " . $country . "\n\n";

$final_message = messageHeader ."\n Message: \n" . $message;

if(mail("$receipient","$subject","$final_message","From:Webmaster<webmaster@wildlifetours-rwanda.com>"))
{
	header("Location:dialog.php?msg=Information has been sent successfully ...  We shall get back to you soon and Thanks for visiting our website.");
}
else
{
	header("Location:dialog.php?msg=!SORRY, ERROR SENDING EMAIL INFORMATION, Please Try Again Later");
}

?>