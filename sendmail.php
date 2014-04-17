<?php

//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = $body; //file_get_contents('contents.html')."<br>Your booking will appove soon by admin.";
//$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "smtp.gmail.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "xxxxxxxxx@gmail.com";  // GMAIL username
$mail->Password   = "xxxxxxxxxxx";            // GMAIL password

$mail->SetFrom('xxxxxxx@gmail.com', 'Easy Reminder');

$rpl_email ="xxxxxx@gmail.com"; // replay email

$mail->AddReplyTo($rpl_email,"your blog name");

$mail->Subject    = "yor subject massage";

//$mail->AltBody    = ""; // optional, comment out and test

$body = " This is your email body , you want to write any this in block ";

$mail->MsgHTML($body);

$address = "xxxxxxxxxx@gmail.com"; // send email (type here email address you want to send emial )

$mail->AddAddress($address, $rpl_email);


if($mail->Send()) {
 echo "Your query submitted successfully !!!";
}

?>


