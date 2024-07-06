<?php
/* Smarty version 4.2.0, created on 2024-06-27 09:52:50
  from 'E:\Studium\HS-Bochum Studium\8. SS 24\IKSY2\Projekt7\registrieren.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_667d1a52cb79c3_51311683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5632e6c216a2c36999b286319462763bd18a5e21' => 
    array (
      0 => 'E:\\Studium\\HS-Bochum Studium\\8. SS 24\\IKSY2\\Projekt7\\registrieren.tpl',
      1 => 1719145331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667d1a52cb79c3_51311683 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrierung</title>
    <link rel="stylesheet" type="text/css" href="test.css">
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
            <h2>Registrierung</h2>
            <form method="POST" action="registrieren.php">
                <label for="username">Benutzername:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Passwort:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <label for="password_repeat">Passwort wiederholen:</label>
                <input type="password" id="password_repeat" name="password_repeat" required>
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
<?php }
}
