<html>


<?php
if(isset($_POST['sendmail']))
{
    require 'PHPMailerAutoload.php';
require 'credential.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASS ;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom(EMAIL, 'K S R T C');
$mail->addAddress($_POST['email']);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo(EMAIL);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $_POST['subject'];
$mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
$mail->AltBody = $_POST['message'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}
?>
    <form action="" method="post" enctype="multipart/form-data">
        To Mail:<input type="email" placeholder ="Enter Email-id:" name="email">
        <input type="text" placeholder="Subject:" name="subject">
          <input type="text" placeholder="Message:" name="message">
          <input type="submit" value="SEND MAIL" name="sendmail">
    </form>
    <style>
     
    </style>
</html>
