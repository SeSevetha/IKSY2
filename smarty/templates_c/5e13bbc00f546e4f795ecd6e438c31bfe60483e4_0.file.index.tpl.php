<?php
/* Smarty version 4.2.0, created on 2024-07-08 14:06:45
  from 'E:\Studium\HS-Bochum Studium\8. SS 24\IKSY2\Projekt\IKSY2\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_668bd6557839a8_11620425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e13bbc00f546e4f795ecd6e438c31bfe60483e4' => 
    array (
      0 => 'E:\\Studium\\HS-Bochum Studium\\8. SS 24\\IKSY2\\Projekt\\IKSY2\\smarty\\templates\\index.tpl',
      1 => 1720440402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668bd6557839a8_11620425 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!-- index.tpl -->
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KochZauber</title>
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
            <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>
                <form action="klassen/logout.php" method="post" style="display:inline;">
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            <?php }?>
        </div>
    </header>
    <nav>
        <div class="menu">
            <img src="./Bilder/menue.png" alt="Menü">
            <div class="dropdown-content">
                <a href="./index.php">Home</a>
                <a href="./klassen/rezepte.php">Rezepte</a>
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
            <a href="klassen/anmeldung.php" class="btn">Anmelden</a>
            <a href="klassen/registrieren.php" class="btn">Registrieren</a>
            <a href="klassen/neuesRezept.php" class="btn">Neues Rezept</a>
        </div>
    </div>
    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
</body>
</html>
<?php }
}
