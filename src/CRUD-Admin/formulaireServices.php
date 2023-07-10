<?php
	include 'mesFonctionsSQL.php';
	include 'mesFonctions.php';

	
	$id = $_GET["id"];
	if ($id == 0) {
		$user = getNewService();
		$action = "CREATE";
		$libelle = "Créer un nouveau service";
	} else {
		$user = readService($id);
        $id = $id;
        $Nom = $user[1];
        $Description = $user[2];
		$action = "UPDATE";
		$libelle = "Modifier le Service";
	}

	


?>

<html>
<header>
	<link rel="stylesheet" href="style.css">
</header>
<body>
	<form action="createUptade.php" method="get">
		<a href="indexService.php">Liste des utilisateurs</a>
		<input type="hidden" name="id" value="<?php echo $id;?>"/>
        
		<input type="hidden" name="action" value="<?php echo $action;?>"/>
		 <div>
        	<label for="name">Nom :</label>
        	<input type="text" id="nom" name="nom" value="<?php if($action == "CREATE"){
																	echo ''; 
																}else{ 
																	echo $Nom;
																}
														?>">
	    </div>
	    <div>
	        <label for="prenom">Description</label>
	        <input type="text" id="description" name="description" value="<?php if($action == "CREATE"){
																					echo '';  
																				}else{ 
																					echo $Description;
																				}
            ?>">
	    </div>
		<div class="button">
			<button type="submit"><?php echo $libelle;  ?></button>
		</div>
	</form>
	<br>

	<?php if ($action!="CREATE") { ?>
	<form action="createUptade.php" method="get">
		<input type="hidden" name="action" value="DELETE"/>
		<input type="hidden" name="id" value="<?php echo $id;  ?>"/>
		<p>
		<div class="button">
			<button type="submit">Supprimer</button>
		</div>
		</p>
	</form>
	<?php } ?>

</body>
</html>