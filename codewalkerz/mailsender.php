<?php
require ('smtp/PHPMailerAutoload.php');
function sendamail($to,$subject,$content){
$mail = new PHPMailer();

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    //$mail->SMTPDebug=3;
    $mail->Username   = 'society.developers.2023@gmail.com';                     //SMTP username
    $mail->Password   = 'exavhvotiycqendz';                               //SMTP password                           //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->SMTPSecure='tls';
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //Recipients
    $mail->setFrom('society.developers.2023@gmail.com', 'Society Of Computer Applications');
    $mail->addAddress($to);     //Add a recipient
   // $mail->addReplyTo('info@gmail.com', 'Information');
    //$mail->addCC('cc@gmail.com');
   // $mail->addBCC('bcc@gmail.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $content;


    $mail->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>