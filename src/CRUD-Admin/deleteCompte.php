<?php
	include 'mesFonctionsSQL.php';
	include 'mesFonctions.php';

    $id = $_GET['id'];

    deleteCompte($id);
    echo 'Ce compte à bien été suprrimé.';



?>