<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Tableau services</h1>
    <?php
		require_once 'mesFonctionsSQL.php';
		require_once 'mesFonctions.php';

		$headers = getHeaderTable();
		$users = getAllServices();
		afficherTableau($headers, $users);
	?>

	<a href=formulaireServices.php?id=0 >Créer un service</a> 
</body>
</html>