<?php

require_once 'mesFonctionsSQL.php';
require_once 'mesFonctions.php';
?>

<body>
    <h1>Ajouter un nouveau véhicule</h1>
    <form method="POST" action="./createUptadeAuto.php" enctype="multipart/form-data">
        <div>
            <label for="">Choisir une photo</label>
            <input type="file" name="picture" >
        </div>
        <div>
            <label for="">Modèle du véhicule</label>
            <input name="model" type="text">
        </div>
        <div>
            <label for="">Prix</label>
            <input name="price" type="text">
        </div>
        <div>
            <label for="">Kilomètres</label>
            <input name="kilometre" type="text">
        </div>
        <div>
            <label for="">Année</label>
            <input name="annee" type="text">
        </div>
        <div>
            <label for="">Boite de vitesse</label>
            <input name="boite" type="text">
        </div>
        <div>
            <label for="">Description</label>
            <textarea name="des" cols="30" rows="10"></textarea>
        </div>
        <div class="container-btn">
            <input type="submit" name="btn-createAuto" value="OK">
        </div>
    </form>
</body>

<style>

body {
  font-family: Arial, sans-serif;
  background-color: #f7f7f7;
  padding: 20px;
  padding-top: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

h1 {
  text-align: center;
}

form {
  background-color: #ffffff;
  padding: 20px;
  width: 50%;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

label {
  font-weight: bold;
  display: block;
  margin-bottom: 10px;
  color: #333333;
}

input[type="file"],
input[type="text"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #dddddd;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 15px;
}

input[type="file"]:focus,
input[type="text"]:focus {
  border-color: #4CAF50;
}


.container-btn{
    width: 100%;
    display: flex;
    justify-content: center;
}
input[type="submit"] {
  background-color: #32CD32;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 300px;
}

input[type="submit"]:hover {
  background-color: #41DF41;
}

div {
  margin-bottom: 20px;
}

</style>
