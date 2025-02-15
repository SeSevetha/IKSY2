<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
        .center-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 20px; /* Abstand vom Begr��ungsbild */
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
            <img src="../Bilder/menue.webp" alt="Men�">
            <div class="dropdown-content">
                <a href="../index.php">Home</a>
                <a href="./rezepte.php">Rezepte</a>
                <a href="../meine.php">Konto</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="home-content">
             <img src="../Bilder/start.jpg" alt="Begr��ungsbild" style="border-radius: 8px;">
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
                <p>Benutzername und Passwort stimmen nicht �berein</p>
            {/if}
        {else}
            <p>Sie sind angemeldet. Hallo {$user.vorname}, sch�n dass du wieder da bist.</p>
        {/if}
    </div>
    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
</body>
</html>
