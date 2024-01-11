
<?php

// Include required PHPMailer files
require './src/SMTP.php';
require './src/PHPMailer.php';
require './src/Exception.php';
require './vendor/autoload.php';

// Define namespaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



// Create instance of PHPMailer
$mail = new PHPMailer();

try {
    // Set mailer to use SMTP
    $mail->isSMTP();

    // Define SMTP host
    $mail->Host = "smtp.gmail.com";

    // Enable SMTP authentication
    $mail->SMTPAuth = true;

    // Set type of encryption (ssl/tls)
    $mail->SMTPSecure = "tls";

    // Set SMTP port
    $mail->Port = 587;

    // Set Gmail username
    $mail->Username = "kalyanizade121@gmail.com";

    // Set Gmail password
    $mail->Password = "tmdccvtmrbbpdgix";

    // Set mail subject
    $mail->Subject = "Testing mail using PHPMailer";

    // Set sender email
    $mail->setFrom("kalyanizade121@gmail.com", "kalyani zade");

    // Set mail body
    $mail->Body = "This is a plain text email body.";

    // Add recipient
    $mail->addAddress("kalyanizade1@gmail.com", "kalyani zade");

    // Finally, send email
    if ($mail->send()) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email. Error: " . $mail->ErrorInfo;
    }
} catch (Exception $e) {
    echo "Error sending email. Error: " . $mail->ErrorInfo;
}

// Close SMTP connection
$mail->smtpClose();
?>
