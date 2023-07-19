<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
	*{
		font-family: Nato, sans-serif;
	}

	table {
    width: 40%;
	height: 50%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  th, td {
    padding: 6px 12px; /* Réduire la taille des cellules */
    text-align: cent;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #D94350;
    color: white;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #e2e2e2;
  }

  a {
    text-decoration: none;
    color: #D94350;
    transition: color 0.2s ease;
	font-weight: 600;
  }


  /* Styles pour rendre le tableau responsive */
  @media (max-width: 768px) {
    table {
      width: 100%;
    }
  }

  /* Ajoutez d'autres styles CSS si nécessaire */
</style>
<h1 align="center">Messages clients</h1>
    <?php
		require_once 'mesFonctionsSQL.php';
		require_once 'mesFonctions.php';

		$headers = getHeaderTableAvis();
		$users = getAllAvis();
		afficherTableauAvis($headers, $users);
	?>
	<a href="./indexAdmin.php" >Retour menu</a> 
</body>
</html>