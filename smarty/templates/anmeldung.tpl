<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldung</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
        .center-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 20px; /* Abstand vom Begrüßungsbild */
        }

        .center-form label, .center-form input, .center-form button {
            margin: 10px 0;
        }

        .center-form input, .center-form button {
            width: 100%;
            max-width: 300px;
        }

        .center-form label {
            width: 100%;
            max-width: 300px;
            text-align: center;
        }

        .home-content img {
            margin-bottom: 0; /* Verkleinern des Abstands nach unten */
        }
    </style>
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
            <img src="../Bilder/menue.webp" alt="Menü">
            <div class="dropdown-content">
                <a href="../index.php">Home</a>
                <a href="./rezepte.php">Rezepte</a>
                <a href="../meine.php">Konto</a>
                <a href="#">Kontakt</a>
            </div>
        </div>
        <input type="text" class="search-bar" placeholder="z.B. Lasagne, Sommersalat, Nudeln">
    </nav>
    <div class="container">
        <div class="home-content">
             <img src="../Bilder/start.jpg" alt="Begrüßungsbild" style="border-radius: 8px;">
        </div>
    </div>
    <div class="center-form">
        {if !$isLoggedIn}
            <form name='anmeldung' action='{$PHP_SELF}' method='post'>
                <input type="hidden" name="csrfToken" value="{$csrfToken}" />
                <label for="i_name">Name</label>
                <input type="text" name="name" id="i_name" size=12><br>
                <label for="i_password">Passwort</label>
                <input type="password" name="password" id="i_password" size=12><br>
                <input type="submit" name="Button1" value="Abschicken">
            </form>
            {if isset($keineAnmeldung)}
                <p>Benutzername und Passwort stimmen nicht überein</p>
            {/if}
        {else}
            <p>Sie sind angemeldet. Hallo {$user.vorname}, schön dass du wieder da bist.</p>
        {/if}
    </div>
    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
</body>
</html>
