<?php

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
try {

$mail->isSMTP(); 
$mail->Host         ='smtp.gmail.com';
$mail->SMTPAuth     = true;
$mail->Username     ='allanshyson5@gmail.com';
$mail->Password     ='vgpw rsaw djkz nxkh'; 
$mail->SMTPSecure   = 'ssl';
$mail->Port         = 465; 

$mail->setFrom('allanshyson5@gmail.com');
$mail->addAddress ($mailtoaddress); 
$mail->Subject = 'Hello from Admin,';
$mail->Body =$bodyContent;
$mail->send();
echo "<script>alert('Employee Registered Sucessfully');window.location='employeeview.php'</script>";
} 
catch(Exception $e) 
{
    echo 'Email could not be sent,Error:',$mail->ErrorInfo;
}
?>