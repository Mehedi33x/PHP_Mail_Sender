<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

$jsonData = '[
  {"full_name": "Recipient Name", "email": "example@gmail.com"}
]';
$users = json_decode($jsonData, true);
foreach ($users as $user) {
    $name = $user['full_name'];
    $email = $user['email'];
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'your_mail@gmail.com'; 
        $mail->Password = 'xxxx xxxx xxxx xxxx'; // Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('your_mail@gmail.com', 'Your Name');
        $mail->addAddress($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "Subject Here";
        $mail->Body = "Write your email body here";
        // $mail->addAttachment('attachment.pdf'); //if you want to attach a file
        $mail->send();
        echo "✅ Email sent to $name ($email)<br>";
    } catch (Exception $e) {
        echo "❌ Failed to send email to $name ($email). Error: {$mail->ErrorInfo}<br>";
    }
    sleep(60); 
}