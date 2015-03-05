<?php

date_default_timezone_set('Etc/UTC');
error_reporting(E_ALL);
ini_set('display_errors', '1');

require "PHPMailer/PHPMailerAutoload.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) {

  if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message'])) {
    $data = array('success' => false, 'message' => 'Please fill out the form completely.');
    echo json_encode($data);
    exit;
  }

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->Debugoutput = 'html';
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';
  $mail->SMTPAuth = true;
  
  $mail->Username = "mauricio@xubliminal.com";
  $mail->Password = "Qwerty1123581321";
  $mail->setFrom('mauricio@xubliminal.com', 'Mauricio Gamboa');
  $mail->addAddress('mauricio@xubliminal.com', 'Mauricio Gamboa');
  $mail->Subject = 'Contact Form';
  $mail->Body = "From: $name\n\nE-Mail: $email\n\nPhone: $phone\n\nMessage: $message";

  if (!$mail->send()) {
    $data = array('success' => false, 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo);
    echo json_encode($data);
    exit;
  }
  
  $data = array('success' => true, 'message' => 'Thanks! We have received your message.');
  echo json_encode($data);

} else {
  $data = array('success' => false, 'message' => 'Please fill out the form completely.');
  echo json_encode($data);
}