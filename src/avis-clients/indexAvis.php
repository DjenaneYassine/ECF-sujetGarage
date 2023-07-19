<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h2 {
            color: #333;
            display: flex;
            justify-content: center;
            
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #666;
        }

        select,
        textarea,
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        select {
            height: 40px;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #32CD32;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 300px;
        }

        input[type="submit"]:hover {
            background-color: #41DF41;
        }

        .container-btn{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <h2>Avis client</h2>
    <form method="post" action="traitement-avis.php">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">

        <label for="service">Prestation concerné :</label>
        <select id="service" name="prestation">
        <option value="" disabled selected>Choisissez une prestation</option>
        <option value="mecanique">Mécanique</option>
        <option value="carro">Carrosserie</option>
        <option value="vente">Vente automobile</option>
        </select>
        
        <label for="note">Note :</label>
        <select id="note" name="note">
            <option value="" disabled selected>Note de 1 à 5</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <label for="message">Message :</label>
        <textarea id="message" name="message"></textarea>
        <br><br>
        <div class="container-btn">
            <input name="btn-avis" type="submit" value="Soumettre">
        </div>
    </form>
</body>
</html>
