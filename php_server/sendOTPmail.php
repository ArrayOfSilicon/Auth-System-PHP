<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ini_set('display_errors', 1);

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require "./databaseConnection.php";

if(!isset($_POST['emailAddress']))
{
    die();
}

$email = $_POST['emailAddress'];

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'your email id';
$mail->Password = 'your password';
$mail->setFrom('your email id', 'any name will work here');
$mail->addReplyTo('recievers mail id', 'any name will work here');
$mail->addAddress($email, 'Valued Customer');

$otp = rand(111111,999999);

$mail->Subject = 'This is one time password for registration at arrayofsilicon';
$mail->Body = "Your OTP IS $otp, don't share it with anyone!";

if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    
    $selectSql = "select * from users where email = '$email'";
    $result = $conn->query($selectSql);

    if($result->fetch_column()){
        var_dump($result);
    } else {
        echo "update it";
    }

    $sql = "INSERT INTO `users` (`id`, `email`, `otp`) VALUES (NULL, '$email', $otp);";
    ;
    $conn->query($sql);
}
