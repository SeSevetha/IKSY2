<?php
/* Smarty version 4.2.0, created on 2024-06-12 15:22:15
  from '/var/www/html/iksy05/Kochen/smarty/templates/rezepte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6669a107beacb3_19391040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae477979f6a462d6fa22d9d13a0f8a4808667af1' => 
    array (
      0 => '/var/www/html/iksy05/Kochen/smarty/templates/rezepte.tpl',
      1 => 1718198532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6669a107beacb3_19391040 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KochZauber - Rezepte</title>
    <link rel="stylesheet" type="text/css" href="css/test.css"> <!-- Verweise auf die CSS-Datei -->

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
        <div class="recipe-card">
            <img src="https://via.placeholder.com/400x400" alt="Rezeptbild">
            <div class="recipe-content">
                <h2>Rezepttitel 1</h2>
                <p>Zutaten:</p>
                <ul>
                    <li>Zutat 1</li>
                    <li>Zutat 2</li>
                    <li>Zutat 3</li>
                    <!-- Weitere Zutaten hier hinzufügen -->
                </ul>
                <p>Zubereitung:</p>
                <p>Schritt-für-Schritt-Beschreibung des Rezepts.</p>
            </div>
        </div>
        
        <div class="recipe-card">
            <img src="https://via.placeholder.com/400x400" alt="Rezeptbild">
            <div class="recipe-content">
                <h2>Rezepttitel 2</h2>
                <p>Zutaten:</p>
                <ul>
                    <li>Zutat A</li>
                    <li>Zutat B</li>
                    <li>Zutat C</li>
                    <!-- Weitere Zutaten hier hinzufügen -->
                </ul>
                <p>Zubereitung:</p>
                <p>Schritt-für-Schritt-Beschreibung des zweiten Rezepts.</p>
            </div>
        </div>
        
        <div class="recipe-card">
            <img src="https://via.placeholder.com/400x400" alt="Rezeptbild">
            <div class="recipe-content">
                <h2>Rezepttitel 3</h2>
                <p>Zutaten:</p>
                <ul>
                    <li>Zutat X</li>
                    <li>Zutat Y</li>
                    <li>Zutat Z</li>
                    <!-- Weitere Zutaten hier hinzufügen -->
                </ul>
                <p>Zubereitung:</p>
                <p>Schritt-für-Schritt-Beschreibung des dritten Rezepts.</p>
            </div>
        </div>
        
        <div class="recipe-card">
            <img src="https://via.placeholder.com/400x400" alt="Rezeptbild">
            <div class="recipe-content">
                <h2>Rezepttitel 4</h2>
                <p>Zutaten:</p>
                <ul>
                    <li>Zutat P</li>
                    <li>Zutat Q</li>
                    <li>Zutat R</li>
                    <!-- Weitere Zutaten hier hinzufügen -->
                </ul>
                <p>Zubereitung:</p>
                <p>Schritt-für-Schritt-Beschreibung des vierten Rezepts.</p>
            </div>
        </div>
    </div>
    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
</body>
</html>
<?php }
}
