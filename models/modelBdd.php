<?php

ob_start();
function redirect_to($url){
    header($url);
    exit();
}
error_reporting(E_ALL);
ini_set("display_errors", 1);

require('modelCoBdd.php');

if (isset($_POST['subject'])) {
    $db = dbConnect();
    $message = htmlspecialchars($_POST['message']);
    $from = htmlspecialchars($_POST['mail']);
    $subject = htmlspecialchars($_POST['subject']);
    $nom = htmlspecialchars($_POST['nom']);
    $headers = 'From: '. $from ."\n" .
    'Reply-To: matcrid@hotmail.fr' . "\n" .
    'X-Mailer: PHP/' . phpversion();
    $req = $db->prepare('INSERT INTO mails (name, mail, subject, text) VALUES (:expe, :mail, :subject, :text)');
    $req->execute(array(
        'expe' => $nom,
        'mail' => $from,
        'subject' => $subject,
        'text' => $message
    ));
    mail('matcrid@hotmail.fr', $subject, $message);
    redirect_to('location:../index.php');
}
