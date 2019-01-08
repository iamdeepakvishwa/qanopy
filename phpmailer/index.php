<?php
session_start() ;
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

function email($bd, $n, $e){
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = -1;  // Enable verbose debug output
	  $mail->addCustomHeader('X-custom-header', 'MIME-Version:1.0');
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.smtp2go.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'harshrawat66@gmail.com';                 // SMTP username
    $mail->Password = 'mZ6KbbiDozEU';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 2525;                                    // TCP port to connect to
	  $mail->SMTPOptions = array(
					'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
						)
					);
    //Recipient.
    $mail->setFrom($e);
	  $mail->addAddress('harshrawat66@gmail.com');			// Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Regarding Product Enquiry" ;
    $mail->Body = $bd.'. My Email is '.$e.'.<br>Yours Sincerely<br>'.$n ;
    //$mail->AltBody = 'This Email is Sent on behalf of team correspondance world to inform you that our SMTP is set up and is woring as expected. Do Not Reply To This Email ';

    $mail->send() ;
    $_SESSION['modal'] = 1 ;
    header('location: ./../index.php') ;

} catch (Exception $e) {
    $_SESSION['modal'] = 0 ;
    header('location: ./../index.php') ;
    //echo 'Email could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
}
}
