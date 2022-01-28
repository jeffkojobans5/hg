<?php
//DO NOT ADD ANYTHING ABOVE THIS LINE, AS YOUR PHP SCRIPT WILL NOT WORK

$email = "jeffbans2016@gmail.com";
$message = "The following information was submitted from the form on your website:\n
";
$message .= "Name : ".$_REQUEST["Name___1"]."\n\n";
$message .= "Contact Number: ".$_REQUEST["Phone_Number__3"]."\n\n";
$message .= "E-mail Address: ".$_REQUEST["Email_Address__2"]."\n\n";
$message .= "Date of Arrival ".$_REQUEST["Date_of_Arrival__4"]."\n\n";
$message .= "Date of Departure: ".$_REQUEST["Date_of_Departure__5"]."\n\n";
$message .= "Number of Travellers: ".$_REQUEST["Number_of_travellers__3"]."\n\n";
$message .= "Number of Rooms: ".$_REQUEST["Number_of_Rooms__3"]."\n\n";
$message .= "Pick Up Point: ".$_REQUEST["Pick_Up-Point"]."\n\n";
$message .= "Tour Type: ".$_REQUEST["Tour_Type"]."\n\n";

$message .= " : ".$_REQUEST["message_here"]."\n\n";
$headers2 = "MIME-Version: 1.0\r\n"
           ."Content-Type: $contentType; charset=utf-8\r\n"
           ."Content-Transfer-Encoding: 8bit\r\n"
           ."From: =?UTF-8?B?".base64_encode(".$email.")."?= <".$email.">\r\n"
           ."Reply-To: ".$email."\r\n"
           ."X-Mailer: PHP/".phpversion();
mail( $email, "You have another booking", $message, $headers2 );
header("Location: http://www.tourgh.com/tour.php");
?>





