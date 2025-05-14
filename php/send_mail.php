<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {


    $mail->setFrom('angelourmatan.junior@gmail.com', 'Moments Collective'); // Sender email
    $mail->addAddress('stephen092madula@gmail.com') // Email destination
    $mail->addReplyTo($_POST['email'], $_POST['name']); // For immediate replying

    $mail->Subject = $_POST['subject'];
    $mail->isHTML(true);
    $mail->Body = "
        <p style='color: black; text-decoration: none;'><strong>Name:</strong> {$_POST['name']}</p>
        <p style='color: black; text-decoration: none;'><strong>Email:</strong> {$_POST['email']}</p>
        <p style='color: black; text-decoration: none;'><strong>Message:</strong><br>
            " . nl2br(htmlspecialchars($_POST['message'])) . "
        </p>
    ";

    if (!empty($_FILES['attachment']['tmp_name'])) {
        $mail->addAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']);
    }

    $mail->send();
    echo "Message sent!";
    } catch (Exception $e) {
        echo "Message failed: {$mail->ErrorInfo}";
    }