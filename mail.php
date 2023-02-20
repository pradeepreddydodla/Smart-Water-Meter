<?php

session_start();
$cid=$_SESSION['cid'];
$data=$_SESSION['data'];


$dbhost =  "localhost";
$dbuser = "someuser";
$dbpass = "somepassword";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"id4646439_wcb");
if(!$conn)
{
die('Could not connect: ' . mysqli_error($conn));
}
else{
$sql= "select email,name from details where cid='$cid'";
$res = mysqli_query($conn,$sql);
while($num = mysqli_fetch_assoc($res))
{
$email=$num['email'];
$name=$num['name'];

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asia/Calcutta');

require 'phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTPss
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'someuser';

//Password to use for SMTP authentication
$mail->Password = 'somepassword';

//Set who the message is to be sent from
$mail->setFrom('someuser@email.com', 'Admin');

//Set an alternative reply-to address
$mail->addReplyTo($email,$name);

//Set who the message is to be sent to
$mail->addAddress($email,$name);

//Set the subject line
$mail->Subject ='WATER CONTROL BOARD - SADA';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML( 'Dear Customer,Your monthly water bill has been generated.Please make your payment through our online portal or you can make payment at the available local office.Thank You_WCB-SADA', dirname(__FILE__));

//Replace the plain text body with one created manually
$mail->AltBody = 'Dear Customer,Your monthly water bill has been generated.Please make your payment through our online portal or you can make payment at the available local office.Thank You_WCB-SADA';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
 else {
    header('Location:redirect.php');
}

}
}









?>