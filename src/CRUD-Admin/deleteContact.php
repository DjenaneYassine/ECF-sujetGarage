<?php
	include 'mesFonctionsSQL.php';
	include 'mesFonctions.php';

    $id = $_GET['id'];

    deleteContact($id);
    echo 'Ce message à bien été suprrimé.';



?>