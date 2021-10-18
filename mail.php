<?php
$to = "muqeetshaikh9@gmail.com";
$subject = "Response from website";
$message = "Testing Email in PHP";
$header = "From: mashaikh901@gmail.com";

if (mail($to, $subject, $message, $header)){
	
	echo"Mail send Successfully";
	else{
		echo "Can not send Mail"
	}
	
}
?>
