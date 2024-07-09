<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KochZauber - Profil</title>
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
                <a href="#">Kontakt</a>
            </div>
        </div>
        <input type="text" class="search-bar" placeholder="z.B. Lasagne, Sommersalat, Nudeln">
    </nav>
    <div class="container">
        <div class="profile-box">
            <div class="profile-info">
                <div class="personal-details">
                    <label>Name:</label> <span>{$user.nachname|default:'Nicht angegeben'}</span><br>
                    <label>Vorname:</label> <span>{$user.vorname|default:'Nicht angegeben'}</span><br>
                    <label>Benutzername:</label> <span>{$user.username|default:'Nicht angegeben'}</span>
                </div>
            </div>
        </div>
       <div class="recipe-list">
            {foreach from=$recipes item=recipe}
                <div class="recipe">
                    <img src="{$recipe.image_url|default:'https://via.placeholder.com/400x400'}" alt="Rezeptbild">
                    <h3>{$recipe.name}</h3>
                    <p>Zutaten: {$recipe.zutaten}</p>
                    <p>Zubereitung: {$recipe.beschreibung}</p>
                </div>
            {/foreach}
        </div>
    </div>
    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
</body>
</html>
