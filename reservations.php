<?php
//DO NOT ADD ANYTHING ABOVE THIS LINE, AS YOUR PHP SCRIPT WILL NOT WORK

$email = "reservations@hotelgreenghana.com";
$message = "The following information was submitted from the form on your website:\n
";
$message .= "Name : ".$_REQUEST["Name___1"]."\n\n";
$message .= "Email Address: ".$_REQUEST["Email_Address__2"]."\n\n";
$message .= "Phone Number: ".$_REQUEST["Phone_Number__3"]."\n\n";
$message .= "Check In Date: ".$_REQUEST["Check_In_Date__4"]."\n\n";
$message .= "Check Out Date: ".$_REQUEST["Check_Out_Date__5"]."\n\n";
$message .= "Number of Adults: ".$_REQUEST["Number_of_Adults__6"]."\n\n";
$message .= "Number of Children: ".$_REQUEST["Number_of_Children__7"]."\n\n";
$message .= "Members of Group: ".$_REQUEST["Members_of_Group__8"]."\n\n";
$message .= "Preferred Room: ".$_REQUEST["Preferred_Room__9"]."\n\n";
$message .= " : ".$_REQUEST["___10"]."\n\n";
$headers2 = "MIME-Version: 1.0\r\n"
           ."Content-Type: $contentType; charset=utf-8\r\n"
           ."Content-Transfer-Encoding: 8bit\r\n"
           ."From: =?UTF-8?B?".base64_encode(".$email.")."?= <".$email.">\r\n"
           ."Reply-To: ".$email."\r\n"
           ."X-Mailer: PHP/".phpversion();
mail( $email, "Form Submission from www.hotelgreenghana.com website", $message, $headers2 );
header("Location: http://www.hotelgreenghana.com/landing-page.html");
?>