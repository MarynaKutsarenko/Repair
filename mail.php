<?php

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$userName = $_POST['username'];
$userPhone = $_POST['phone'];
$userMail = $_POST['email'];

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "ok";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;

    $mail->Host       = 'smtp.gmail.com'; 
    $mail->Username   = 'kutsarenkoavocod@gmail.com'; 
    $mail->Password   = 'Kutsarenko'; 
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('kutsarenkoavocod@gmail.com', 'Test php'); // Адрес самой почты и имя отправителя
    // Получатель письма

    $mail->addAddress('kutsarenkoavocod@gmail.com');  

    $mail->isHTML(true);
    
    $mail->Subject = 'Новая заявка';
    $mail->Body    = "<b>Имя:</b> $userName <br>
    <b>Почта:</b> $userMail<br><br>
    <b>Телефон:</b><br>$userPhone";

  if ($mail->send()) {
      header('Location: thanks.php');
  } else {
  echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
  }
  } catch (Exception $e) {
      echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
  }