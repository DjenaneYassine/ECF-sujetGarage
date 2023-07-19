<!DOCTYPE html>
<html>
<head>
  <title>Formulaire de contact</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color:#f7f7f7;
    }

    .container {
      max-width: 600px;
      height: 650px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group textarea {
      width: 95%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group textarea {
      resize: vertical;
      height: 120px;
    }

    .form-group input[type="submit"] {
      background-color: #32CD32;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 300px;
    }

    .form-group input[type="submit"]:hover {
      background-color: #41DF41;
    }

    .container-btn{
        display: flex;
        justify-content: center;
    }
  </style>
</head>

<?php 
  $id = $_GET['id'];
  $model = $_GET['model'];

?>
<body>
  <div class="container">
    <h2>Formulaire de contact</h2>
    <form method="POST" action="traitement-contact.php">
      <div class="form-group">
        <label for="sujet">Sujet</label>
        <input type="text" name="sujet" id="sujet" <?php echo 'value="Numéro : '.$id.' | '.$model.'"' ?>required >
      </div>
      <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required>
      </div>
      <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" required>
      </div>
      <div class="form-group">
        <label for="email">Adresse mail</label>
        <input type="email" name="email" id="email" required>
      </div>
      <div class="form-group">
        <label for="tel">Téléphone</label>
        <input type="tel" name="tel" id="tel" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="message" required></textarea>
      </div>
      <div class="form-group container-btn">
        <input type="submit" value="Envoyer">
      </div>
    </form>
  </div>
</body>
</html>

