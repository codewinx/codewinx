<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->SMTPDebug = 0;                      // Disable verbose debug output for production
        $mail->isSMTP();                           // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';      // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                  // Enable SMTP authentication
        $mail->Username   = 'codewinxit@gmail.com'; // SMTP username
        $mail->Password   = 'blit moqz tpei retf';   // SMTP password (use App Password if 2-Step Verification is enabled)
        $mail->SMTPSecure = 'tls';                 // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                   // TCP port to connect to

        // Recipients
        $mail->setFrom('adityaraut4289@gmail.com', 'CodeWinX IT Solutions');
        $mail->addAddress($email, $name);          // Add a recipient

        // Content
        $mail->isHTML(true);                       // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = "

        Name: $name<br>Email: $email<br>Mobile: $mobile<br>Address: $address<br>Message: $message";

        $mail->send();
        $response = ['status' => 'success', 'message' => 'Message has been sent'];
    } catch (Exception $e) {
        $response = ['status' => 'error', 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"];
    }

    echo json_encode($response);
}
?>
