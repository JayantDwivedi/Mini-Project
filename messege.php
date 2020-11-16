<?php
    if (isset($_POST['send-mail'])) {
        require 'PHPMailerAutoload.php';
        require 'credentials.php';

        $mail = new PHPMailer;

        // $mail->SMTPDebug = 4;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = EMAIL;                 // SMTP username
        $mail->Password = PASS;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;
        // TCP port to connect to
        $mail->AddReplyTo($_POST['email']);
        $mail->From = EMAIL;
        $mail->FromName = $_POST['user'];
        $mail->addAddress(EMAIL, 'SanSevAdmin');     // Add a recipient


        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Feedback from SanServ';
        $mail->Body    = $_POST['comment'];
        // $mail->AltBody = 

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
?>