<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
    <style type="text/css">
        body {
            background-image: url(https://img.freepik.com/free-photo/abstract-background-cement-wall-shadow-light-concept_53876-95320.jpg);
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        div {
            position: relative;
            top: 120px;
            width: 33%;
            left: 33%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="password"], input[type="submit"] {
            font-size: 18px;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        label {
            font-weight: bold;
        }
        button {
            font-size: 18px;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f1f1f1;
            cursor: pointer;
        }
        button a {
            text-decoration: none;
            color: black;
        }
        button:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div>
        <form action="fun/logintest.php" method="get">
            <label>Nom D'utilisateur</label>
            <input type="text" name="n1" placeholder="Nom D'utilisateur" required>
            <br>
            <label>Mot De Passe</label>
            <input type="password" name="n2" placeholder="Mot De Passe" required>
            <br>
            <input type="submit" value="Connexion">
        </form>
        <button>
            <a href="adduser.php">Je n'ai pas de compte</a>
        </button>
        <button>
            <a href="index.php">Page principale</a>
        </button>
    </div>
</body>
</html>
