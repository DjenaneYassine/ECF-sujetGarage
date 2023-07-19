<?php 

require_once '../CRUD-Admin/mesFonctionsSQL.php';

$sujet = $_POST['sujet'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$msg = $_POST['message'];

createContact($sujet, $nom, $prenom, $email, $tel, $msg);




?>