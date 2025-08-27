<?php
$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require "vendor/autoload.php";
try {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host     = 'smtp.gmail.com';

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->Username = "lonelyguse@gmail.com";
    $mail->Password = "ktyi pyja pnix tlcp";
    $mail->setFrom($email, $name);
    $mail->addAddress("lonelyguse@gmail.com","Website Contact Form");
    $mail->addReplyTo($email, $name);
    $mail->Subject = "New Contact Form Message from $name";
    $mail->Body = "You have received a new message from your website contact form.\n\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Message:\n$message";

    $mail->Body .= "\n\n---\nThis message was sent from your website contact form. " .
                   "Please reply to: $email";

    $mail->send();
    header("Location: index.php?message=success#contact_form");
    exit();

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
