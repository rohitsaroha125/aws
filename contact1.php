<?php
require 'php-mailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $name=$_POST["name"];
    $email=$_POST["email"];
    $company=$_POST["company"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];
    $phone=$_POST["phone"];
    $zone=$_POST["zone"];
    
    $mail->Host = 'jcttec.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'yuken@jcttec.com';                 // SMTP username
$mail->Password = 'Yuken@123';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom(''.$email.'', ''.$subject.'');
$mail->addAddress('yuken@jcttec.com', 'Yuken');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = "Name : <b>".$name."</b><br>Email : <b>".$email."</b><br>Phone : <b>".$phone."</b><br> Company : <b>".$company."</b><br> Zone : <b>".$zone."</b><br> Message : <b>".$message."</b>";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>