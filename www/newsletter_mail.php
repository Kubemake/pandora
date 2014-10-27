<?php 
$to = 'opolozhevets@usaveinclinics.com <opolozhevets@usaveinclinics.com>, emurillo@usaveinclinics.com <emurillo@usaveinclinics.com>, Paulina Stanislawczyk <pstanislawczyk@usaveinclinics.com>, Mariangely Correa <mcorrea@usaveinclinics.com>, Milena Jaros <mjaros@usaveinclinics.com>, Vicky Chiampas <vchiampas@usaveinclinics.com>, Iryna Bachynska <ibachynska@usaveinclinics.com>, Roel Reyna <rreyna@usaveinclinics.com>, Zaneta Czajkowski <zczajkowski@usaveinclinics.com>, Nadejda Surdu <nsurdu@usaveinclinics.com>, gstanonis@usaveinclinics.com <gstanonis@usaveinclinics.com>, Qiana Wise <qwise@usaveinclinics.com>, Margie Mukite <mmukite@usaveinclinics.com>, Yan Katsnelson <ykatsnelson@usaveinclinics.com>, Flora Katsnelson <drflora@usaveinclinics.com>, Natalia Luneva <nluneva@usaveinclinics.com>, Chryl Chambers <cchambers@usaveinclinics.com>, USAVeinClinics Marketing <marketing@usaveinclinics.com>, info <info@usaveinclinics.com>'; // Put in your email address here
$subject  = "[Wealthlife Newsletter]"; // The default subject. Will appear by default in all messages. Change this if you want.

// User info (DO NOT EDIT!)
$email = stripslashes($_REQUEST['email']); // Email

// Each parts are commented to help you understand what it does exaclty.
// YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$msg  = "From:Newsletter \r\n";  // add  First name to the message
$msg .= "Newsletter E-mail: ".$email."\r\n";  // add Training to the message
$msg .= "Subject: ".$subject."\r\n\n"; // add subject to the message (optional! It will be displayed in the header anyway)
$msg .= "\r\n\n"; 
$mail = @mail($to, $subject, $msg, "From:".$email);  // This command sends the e-mail to the e-mail address contained in the $to variable

if($mail) {
	echo 'Your message has been sent, we will be in touch shortly!';  //This is the message that will be shown when the message is successfully send
} else {
	echo 'Message could not be sent!';   //This is the message that will be shown when an error occured: the message was not send
}
?>

