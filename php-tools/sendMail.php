<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendmail($email,$token,$prenom,$verifyLink){
    
	require '/home/furiehul/vendor/phpmailer/phpmailer/src/Exception.php';
	require '/home/furiehul/vendor/phpmailer/phpmailer/src/PHPMailer.php';
	require '/home/furiehul/vendor/phpmailer/phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();                                    
        $mail->Host = 'smtp-mail.outlook.com';
        $mail->SMTPAuth = true;                        
        $mail->Username = 'furiepetition1@outlook.fr';        
        $mail->Password = 'furie1999bruel';                        
        $mail->SMTPSecure = 'tls';                         
        $mail->Port = 587;                          

        $mail->setFrom('furiepetition1@outlook.fr', 'Furie Francaise');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Validez votre signature de petition';
        $mail->Body = "$prenom, merci pour votre signature !<br>Cliquez sur ce lien pour valider votre signature.
        <a href='https://furiefrancaise.fr/petition/$verifyLink?token=$token'>verifier</a>";

        $mail->send();
            return true;
    } catch (Exception $e) {
        return $e;
    }
}

?>