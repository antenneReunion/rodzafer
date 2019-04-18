<?php
require(realpath(dirname(__FILE__))."/PHPMailer/src/PHPMailer.php");
require(realpath(dirname(__FILE__))."/PHPMailer/src/SMTP.php");
require(realpath(dirname(__FILE__))."/PHPMailer/src/Exception.php");


$messageError = "";
$messageSuccess = "";

if (isset($_POST["action"]) && $_POST["action"] == "ok") {

$mail = new \PHPMailer\PHPMailer\PHPMailer();
    $mail->isHTML(true);

    $mail->setFrom("noreply@rodzafer.fr");
    //$mail->FromName = $_POST["nom"] . " " . $_POST["prenom"];
    $mail->addAddress("geraldo.raobelinarisoa@antennereunion.fr");     // Add a recipient

    $elm = "";

    $elm .= "<p>Nom: " . ucfirst($_POST["nom"]) . "</p>";
    $elm .= "<p>Prenom: " . ucfirst($_POST["prenom"]) . "</p>";

    $elm .= "<p>Email: " . $_POST["email"] . "</p>";

    $elm .= "<p>Tel: " . $_POST["phone"] . "</p>";
    $elm .= "<p>Message: " . $_POST["description"] . "</p>";


    $mail->Subject = "Rodzafer contact";
    $mail->Body    = $elm;

    if(!$mail->send()) {
        $messageSuccess = "Votre message a été bien envoyé.";
    } else {
        $messageError = "Votre message n'a pas pu être envoyé.";
    }

}