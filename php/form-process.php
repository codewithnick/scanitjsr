<?php
require ('smtp/PHPMailerAutoload.php');
$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $msg_subject = $_POST["msg_subject"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
$Bodytosend="";
$Bodytosend.="Thank you for contacting SCA Nit Jamshedpur\n";
$Bodytosend.=$Body;
$Bodytosend.="\nWe will soon contact you back with an appropriate response";
// send email
//$success = mail($EmailTo, $Subject, $Body, "From:".$email);
$success=sendamail("society.developers.2023@gmail.com",$Subject,$Body);
$success=sendamail($email,"Response recieved",$Bodytosend);
// redirect to success page
if ($success){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}


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
        $mail->Password   = 'exavhvotiycqendz';                               //SMTP password
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
       // echo 'Message has been sent';
       return true;
    } catch (Exception $e) {
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
    }
?>