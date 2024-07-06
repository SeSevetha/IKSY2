<!DOCTYPE html>
<!-- rezepte.tpl -->
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
    <title>KochZauber - Rezepte</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css"> 
    <!-- <script src="../js/holeRezeptZutaten.js" defer></script> -->
</head>
<body>
    <div class="top-strip"></div>
    <header>
        <h1>
            <img src="/home/iksy/Bilder/zauber.jpg" alt="KochZauber">
            <span style="color: #61B536;">K</span>och<span style="color: #61B536;">Z</span>auber
        </h1>
    </header>
    <nav>
        <div class="menu">
            <img src="/home/iksy/Bilder/menue.png" alt="Menü">
            <div class="dropdown-content">
                <a href="../index.html">Home</a>
                <a href="../rezepte.html">Rezepte</a>
                <a href="../meine.html">Konto</a>
                <a href="#">Kontakt</a>
            </div>
        </div>
        <input type="text" class="search-bar" placeholder="z.B. Lasagne, Sommersalat, Nudeln">
    </nav>
    <div class="container">
        {foreach from=$recipes item=recipe}
        <div class="recipe-card">
            <img src="{$recipe.image_url|default:'https://via.placeholder.com/400x400'}" alt="Rezeptbild">
            <div class="recipe-content">
                <h2 id="recipe-title-{$recipe.id}">{$recipe.name}</h2>
                <p>Zutaten:</p>
                <ul id="ingredients-list-{$recipe.id}"></ul>
                <p>Zubereitung:</p>
                <p>{$recipe.beschreibung}</p>
            </div>
        </div>
        {/foreach}
    </div>

    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
</body>
</html>
