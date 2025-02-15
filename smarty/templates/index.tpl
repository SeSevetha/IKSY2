<!DOCTYPE html>
<!-- index.tpl -->
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KochZauber</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>
    <div class="top-strip"></div>
    <header>
        <h1>
            <img src="./Bilder/zauber.jpg" alt="KochZauber">
            <span style="color: #61B536;">K</span>och<span style="color: #61B536;">Z</span>auber
        </h1>
        <div class="user-info">
            {if $isLoggedIn}
                <form action="klassen/logout.php" method="post" style="display:inline;">
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            {/if}
        </div>
    </header>
    <nav>
        <div class="menu">
            <img src="./Bilder/menue.webp" alt="Men�">
            <div class="dropdown-content">
                <a href="./index.php">Home</a>
                <a href="./klassen/rezepte.php">Rezepte</a>
                <a href="./klassen/meine.php">Konto</a>
        
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="home-content">
            <img src="./Bilder/start.jpg" alt="Begr��ungsbild" style="border-radius: 8px;">
            <h2>Willkommen bei KochZauber</h2>
            <p>Entdecken Sie koestliche Rezepte und kulinarische Inspirationen, die Ihre Kochkuenste verzaubern werden!
                Oder aber Teilen Sie selber Ihre kulinarischen Inspirationen mit der Community!
            </p>
            {if !$isLoggedIn}
                <a href="klassen/anmeldung.php" class="btn">Anmelden</a>
                <a href="klassen/registrieren.php" class="btn">Registrieren</a>
            {/if}
            <a href="klassen/neuesRezept.php" class="btn">Neues Rezept</a>
        </div>
    </div>
    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
