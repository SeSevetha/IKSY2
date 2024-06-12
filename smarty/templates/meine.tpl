<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KochZauber - Profil</title>
    <link rel="stylesheet" type="text/css" href="css/test.css"> <!-- Verweise auf die CSS-Datei -->
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
                <a href="test.html">Home</a>
                <a href="rezepte.html">Rezepte</a>
                <a href="meine.html">Konto</a>
                <a href="#">Kontakt</a>
            </div>
        </div>
        <input type="text" class="search-bar" placeholder="z.B. Lasagne, Sommersalat, Nudeln">
    </nav>
    <div class="container">
        <div class="profile-box">
            <div class="profile-info">
                <img src="/home/iksy/Bilder/profilbild.jpg" alt="Profilbild" class="profile-pic">
                <div class="personal-details">
                    <p>Nutzername: Max Mustermann</p>
                    <p>Angemeldet seit: 01. Januar 2024</p>
                    <p>Hochgeladene Rezepte: 10</p>
                </div>
            </div>
        </div>
        <div class="recipe-list">
            <div class="recipe">
                <img src="https://via.placeholder.com/400x400" alt="Rezeptbild">
                <h3>Rezept 1</h3>
                <p>Beschreibung des Rezepts hier...</p>
            </div>
            <div class="recipe">
                <img src="https://via.placeholder.com/400x400" alt="Rezeptbild">
                <h3>Rezept 2</h3>
                <p>Beschreibung des Rezepts hier...</p>
            </div>
            <!-- Weitere Rezepte hier hinzufügen -->
        </div>
    </div>
    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
</body>
</html>
