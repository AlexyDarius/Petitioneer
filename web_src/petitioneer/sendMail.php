<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendmail($email,$token,$prenom){
    
	require '/home/furiehul/vendor/phpmailer/phpmailer/src/Exception.php';
	require '/home/furiehul/vendor/phpmailer/phpmailer/src/PHPMailer.php';
	require '/home/furiehul/vendor/phpmailer/phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();                                    
        $mail->Host = '****';
        $mail->SMTPAuth = true;                        
        $mail->Username = '****';        
        $mail->Password = '****';                        
        $mail->SMTPSecure = 'tls';                         
        $mail->Port = 587;                          

        $mail->setFrom('****', 'Petitioneer');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Validez votre signature de petition';
        $mail->Body = "$prenom, merci pour votre signature !<br>Cliquez sur ce lien pour valider votre signature.
        <a href='https://alexyroman.online/petition/verify.php?token=$token'>verifier</a>";

        $mail->send();
            return true;
    } catch (Exception $e) {
        return $e;
    }
}

?>