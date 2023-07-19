<?php

require_once '../CRUD-Admin/mesFonctionsSQL.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$prestation = $_POST['prestation'];
$note = $_POST['note'];
$message = $_POST['message'];
$btn = $_POST['btn-avis'];


if(isset($btn)){
    createAvis($nom, $prenom, $prestation, $message, $note);
    echo 'Votre avis à été envoyer avec success';
}


?>