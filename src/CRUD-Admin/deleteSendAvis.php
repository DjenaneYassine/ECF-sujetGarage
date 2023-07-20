<?php
	include 'mesFonctionsSQL.php';
	include 'mesFonctions.php';

    $id = $_GET['id'];
    if(isset($_GET['delete'])){
        $delete = $_GET['delete'];
    }
    
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $prest = $_GET['prest'];
    $note = $_GET['note'];
    $msg = $_GET['msg'];
    $send = $_GET['send'];

    if(isset($_GET['delete']) && $delete == "D"){
        deleteAvis($id);
        echo 'Cet avis à bien été suprrimé.';
    }

    if(isset($_GET['send']) && $send == "send"){
        createAvisValide($nom, $prenom, $prest, $msg, $note);
        echo'Avis client validé.';
    }

?>