<!DOCTYPE html>
<html>
<head>
    <title>ajouter des utilisateurs</title>
    <style type="text/css">
        body {
            background-image: url(https://img.freepik.com/free-photo/abstract-background-cement-wall-shadow-light-concept_53876-95320.jpg);
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        div {
            position: relative;
            top: 50px;
            width: 33%;
            left: 33%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="date"], input[type="password"], input[type="tel"], select {
            font-size: 18px;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="radio"] {
            margin: 0 10px 0 0;
        }
        input[type="submit"] {
            font-size: 18px;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        label {
            font-weight: bold;
        }
        p {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>
        <h2>Creer un nouvel utilisateur</h2>
        <?php 
        if (isset($_GET['q2']) && $_GET['q2'] == 1) {
            echo "<p>Nom d'utilisateur deja enregistre</p>";
        }

        if (isset($_GET['q1']) && $_GET['q1'] == 1) {
            echo "<p>Le mot de passe n'est pas le meme</p>";
        }
        ?>
        <form action="fun/adduser.php" method="get"> 
            <label>Nom et Prenom</label>
            <input type="text" name="wname" required><br>
            <label>Date de naissance</label>
            <input type="date" name="wdate" required><br>
            <label>Username</label>
            <input type="text" name="wusername" required><br>
            <label>Mot de passe</label>
            <input type="password" name="wpassword" required><br>
            <label>Confirmation mot de passe</label>
            <input type="password" name="wpassword2" required><br>
            <label>Numero de telephone</label> 
            <input type="tel" name="wtele" required><br>
            <label>Sexe</label><br>
            <input type="radio" name="wsex" value="m" checked>Masculin
            <input type="radio" name="wsex" value="f">Feminin<br><br>
            <label>Pays</label><br>
            <select name="wcountry" required>
                <option value=""></option>
                <option value="Algerie">Algerie</option>  
                <option value="Maroc">Maroc</option> 
                <option value="Tunisie">Tunisie</option> 
                <option value="Egypte">Egypte</option> 
                <option value="Lybia">Lybia</option> 
                <option value="France">France</option> 
                <option value="Italie">Italie</option> 
                <option value="Espagne">Espagne</option> 
                <option value="Allemagne">Allemagne</option> 
                <option value="Emirates">Emirates</option>
            </select><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
