
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
$mail->Username   = "hsmaliya15888@gmail.com";  // GMAIL username
$mail->Password   = "harishankar";            // GMAIL password

$mail->SetFrom('hsmaliya15888@gmail.com', 'Easy Reminder');

$rpl_email = $_POST['email'];

$mail->AddReplyTo($rpl_email,"Easy Reminder");

$mail->Subject    = "One query arrived";

//$mail->AltBody    = ""; // optional, comment out and test

$body = "
$subject<br>
Quetion:$Question
";

$mail->MsgHTML($body);

$address = "hsmaliya15888@gmail.com";

$mail->AddAddress($address, $model->email);



//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

/*if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}*/

if($mail->Send()) {
 // echo "Your query submitted successfully !!!";
}

?>


