<?php 
    include 'vendor/autoload.php';


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if (isset($_POST['submit'])) {
        die('error; you need to submit the form!');
    }

    $visitor_email = 'rafi.halilintar@gmail.com';
    $visitor_phone = '081357541790';
    // $purpose = $_POST['purpose'];
    // $message = $_POST['note'];

    $email_from = 'smokeninja77@gmail.com';//<== update the email address
    $email_subject = "DMA Contact Us";
    $email_body = "This is the form that was just submitted:
    E-Mail: $visitor_email 
    Phone Number: $visitor_phone 
    Purpose: Test Purposes
    Message: Test Message";

    $to = "chanfoh.lee@gmail.com";

    $mail = new PHPMailer(true);

    try {
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.mailtrap.io';
        $mail->SMTPAuth   = true;
        $mail->Username   = '664d268a8e7f3f';
        $mail->Password   = 'b5705ccef108e6';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 2525;   

        $mail->setFrom($email_from, 'Mailer');
        $mail->addAddress($to, 'Joe User');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        $mail->Subject = $email_subject;
        $mail->Body    = $email_body;
        $mail->send();
        echo "Email Sent";
    } catch (\Exception $th) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    

