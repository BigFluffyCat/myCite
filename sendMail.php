<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->IsHTML(true);

$mail->setFrom('jhonycat777@gmail.com', 'JhonyCat');
$mail->addAddress('ivanholubnichiy@gmail.com');
$mail->Subject = 'Hello';

$body = '<h1>Письмо</h1>';

if (!empty($_POST['user'])) {
    $body .= '<p><strong>Имя:</strong> ' . $_POST['user'] . '</p>';
}
if (!empty($_POST['email'])) {
    $body .= '<p><strong>Email:</strong> ' . $_POST['email'] . '</p>';
}
if (!empty($_POST['message'])) {
    $body .= '<p><strong>Message:</strong> ' . $_POST['message'] . '</p>';
}

$mail->Body = $body;

if (!$mail->send()) {
    $message = 'Ошибка';
} else {
    $message = 'Отправлено';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
?>
