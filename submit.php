<?php
$to = '1aliceberton@gmail.com';
$subject = 'Test d\'envoi d\'e-mail';
$message = 'Ceci est un test pour vérifier l\'envoi d\'e-mails.';
$headers = 'From: noreply@votresite.com';

if(mail($to, $subject, $message, $headers)) {
    echo 'E-mail envoyé avec succès.';
} else {
    echo 'L\'envoi d\'e-mail a échoué.';
}
?>
