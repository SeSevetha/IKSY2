<?php
/* Smarty version 4.2.0, created on 2024-06-12 15:23:30
  from '/var/www/html/iksy05/Kochen/smarty/templates/test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6669a152da1797_59691904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd127fbf5d97cd769b9820637fcee37f95e139888' => 
    array (
      0 => '/var/www/html/iksy05/Kochen/smarty/templates/test.tpl',
      1 => 1718198584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6669a152da1797_59691904 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KochZauber</title>
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
        <div class="home-content">
            <img src="/home/iksy/Bilder/start.jpg" alt="Begrüßungsbild" style="border-radius: 8px;">
            <h2>Willkommen bei KochZauber</h2>
            <p>Entdecken Sie köstliche Rezepte und kulinarische Inspirationen, die Ihre Kochkünste verzaubern werden!
				Oder aber Teilen Sie selber Ihre kulinarischen Inspirationen mit der Community!
			</p>
            <a href="#" class="btn">Anmelden</a>
            <a href="#" class="btn">Registrieren</a> <!-- Gleicher Stil wie Anmelden -->
        </div>
    </div>
    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
</body>
</html>
<?php }
}
