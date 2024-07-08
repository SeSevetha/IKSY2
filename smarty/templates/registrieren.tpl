<!DOCTYPE html>
<!--registrieren.tpl-->
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrierung</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="top-strip"></div>
    <header>
        <h1>
            <img src="../Bilder/zauber.jpg" alt="KochZauber">
            <span style="color: #61B536;">K</span>och<span style="color: #61B536;">Z</span>auber
        </h1>
    </header>
    <nav>
        <div class="menu">
            <img src="/home/iksy/Bilder/menue.png" alt="Menü">
            <div class="dropdown-content">
                <a href="../index.php">Home</a>
                <a href="./rezepte.php">Rezepte</a>
                <a href="../meine.html">Konto</a>
                <a href="#">Kontakt</a>
            </div>
        </div>
        <input type="text" class="search-bar" placeholder="z.B. Lasagne, Sommersalat, Nudeln">
    </nav>
    <div class="container">
        <div class="home-content">
            <img src="../Bilder/start.jpg" alt="Begrüßungsbild" style="border-radius: 8px;">
            <h2>Registrierung</h2>
            <form method="POST" action="registrieren.php">
                <input type="hidden" name="csrfToken" value="{$csrfToken}">
                <label for="username">Benutzername:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Passwort:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <label for="password_repeat">Passwort wiederholen:</label>
                <input type="password" id="password_repeat" name="password_repeat" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="vorname">Vorname:</label>
                <input type="text" id="vorname" name="vorname" required>
                <br>
                <label for="nachname">Nachname:</label>
                <input type="text" id="nachname" name="nachname" required>
                <br>
                <input type="submit" value="Registrieren">
            </form>
        </div>
    </div>
    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
</body>
</html>
