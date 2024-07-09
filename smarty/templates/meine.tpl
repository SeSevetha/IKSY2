<!DOCTYPE html>
<html lang="de">
<head>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .recipe-card {
            width: calc(50% - 20px); /* 50% Breite minus Abstand */
            margin-bottom: 20px;
            box-sizing: border-box; /* Rand und Padding sind in der Breite enthalten */
        }

        @media only screen and (max-width: 768px) {
            .recipe-card {
                width: calc(100% - 20px); /* Bei kleinen Bildschirmen, 100% Breite minus Abstand */
            }
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KochZauber - Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="top-strip"></div>
    <header>
        <h1>
            <img src="../Bilder/zauber.jpg" alt="KochZauber">
            <span style="color: #61B536;">K</span>och<span style="color: #61B536;">Z</span>auber
        </h1>
        <div class="user-info">
            {if $isLoggedIn}
                <form action="./logout.php" method="post" style="display:inline;">
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            {/if}
        </div>
    </header>
    <nav>
        <div class="menu">
            <img src="../Bilder/menue.webp" alt="Menü">
            <div class="dropdown-content">
                <a href="../index.php">Home</a>
                <a href="./rezepte.php">Rezepte</a>
                <a href="./meine.php">Konto</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="profile-box">
            <div class="profile-info">
                <div class="personal-details">
                    <p>Hallo {$user.vorname}, schön, dass du da bist.</p>
                    <br>
                    <p>Hier sind deine Daten und Rezepte:</p>
                    <label>Name:</label> <span>{$user.nachname|default:'Nicht angegeben'}</span><br>
                    <label>Vorname:</label> <span>{$user.vorname|default:'Nicht angegeben'}</span><br>
                    <label>Benutzername:</label> <span>{$user.username|default:'Nicht angegeben'}</span>
                </div>
            </div>
        </div>
        <div class="container">
            {foreach from=$recipes item=recipe}
                <div class="recipe-card">
                    <img src="{$recipe.image_url|default:'https://via.placeholder.com/400x400'}" alt="Rezeptbild">
                    <div class="recipe-content">
                        <h2>{$recipe.name}</h2>
                        <p>Zutaten:</p>
                        <ul>
                            {foreach from=$recipe.zutaten item=zutat}
                                <li>{$zutat}</li>
                            {/foreach}
                        </ul>
                        <p>Zubereitung:</p>
                        <p>{$recipe.beschreibung}</p>
                    </div>
                </div>
            {/foreach}
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
