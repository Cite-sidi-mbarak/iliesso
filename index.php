<!DOCTYPE html>
<html>
<head>
    <title>Flashback - Accueil</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style>
        body {
            background-image: url(https://img.freepik.com/free-photo/abstract-background-cement-wall-shadow-light-concept_53876-95320.jpg);
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            margin-top: 100px;
        }
        h1, h2, h3 {
            color: #000;
        }
        button {
            margin: 10px;
            padding: 10px 20px;
            border: none;
            background-color: #45a049;
            border-radius: 5px;
        }
        button a {
            text-decoration: none;
            color: white;
        }
        button:hover {
            background-color: #ddd;
        }
        @keyframes buttonClick {
            0% { transform: scale(1); }
            50% { transform: scale(0.9); }
            100% { transform: scale(1); }
        }
        button:active {
            animation: buttonClick 0.2s;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <audio id="buttonSound" src="audio/click.mp3"></audio>
    <div class="container">
        <h1>FLASHBACK</h1>
        <h2 class="haa">Avec nous, vous pouvez voir le monde à proximité</h2>
        <h2 class="haa">Il vous suffit de vous inscrire et de suivre les étapes</h2>
        <br>
        <button>
            <a href="adduser.php" style="color: black" target="_blank">Inscription</a>
        </button>
        <button>
            <a href="login.php" style="color: black" target="_blank">Se connecter</a>
        </button>
        <button>
            <a href="login.php" style="color: black" target="_blank">Se déconnecter</a>
        </button>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <button>
            <a href="https://www.instagram.com/prv.iliesso/" style="color: black" target="_blank">Notre Instagram</a>
        </button>
        <button>
            <a href="https://www.facebook.com/abdouoooooooooooooooooooooooooooooooooooooooo?locale=fr_FR" style="color: black" target="_blank">Notre page Facebook</a>
        </button>
        <h3>
            <br>
            © 2024 flashback<br>
            Mentions légales<br>
            Contact - Assistance<br>
            Accessibilité : non conforme
        </h3>
    </div>
    <script>
        $(document).ready(function() {
            $("button").click(function() {
                $("#buttonSound")[0].play();
            });
        });
    </script>
</body>
</html>
