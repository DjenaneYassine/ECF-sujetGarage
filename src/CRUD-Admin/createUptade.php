<?php
	include 'mesFonctionsSQL.php';
	include 'mesFonctions.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$nom = $_GET["nom"];
		$description = $_GET["description"];
		$id = $_GET["id"];
	}
	

	if ($action == "CREATE") {
		createService($nom, $description);

		echo "user cree <br>";
		echo "<a href='indexServ.php'>Liste des utilisateurs</a>";
		
	}
	
	if ($action == "UPDATE") {
		updateUser($nom, $description, $id);
		echo "user update <br>";
		echo "<a href='indexServ.php'>Liste des utilisateurs</a>";
	}
	if ($action == "DELETE") {
		deleteService($id);
		echo "user delete <br>";
		echo "<a href='indexServ.php'>Liste des utilisateurs</a>";
	}
	

	
?>