<?php
/* Smarty version 4.2.0, created on 2024-06-27 11:04:38
  from 'E:\Studium\HS-Bochum Studium\8. SS 24\IKSY2\Projekt7\smarty\templates\anmeldung.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_667d2b268c57a7_60449974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '309bfa031efe0938c7a45dc67c25d38915bf792d' => 
    array (
      0 => 'E:\\Studium\\HS-Bochum Studium\\8. SS 24\\IKSY2\\Projekt7\\smarty\\templates\\anmeldung.tpl',
      1 => 1719479074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667d2b268c57a7_60449974 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldung</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
                <a href="../test.html">Home</a>
                <a href="../rezepte.html">Rezepte</a>
                <a href="../meine.html">Konto</a>
                <a href="#">Kontakt</a>
            </div>
        </div>
        <input type="text" class="search-bar" placeholder="z.B. Lasagne, Sommersalat, Nudeln">
    </nav>
    <div class="container">
        <div class="home-content">
            <img src="/home/iksy/Bilder/start.jpg" alt="Begrüßungsbild" style="border-radius: 8px;">
        </div>
    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
        <form name='anmeldung' action='<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
' method='post'>
            <label for="i_name">Name</label>
            <input type="text" name="name" id="i_name" size=12><br>
            <label for="i_password">Passwort</label>
            <input type="password" name="password" id="i_password" size=12><br>
            <input type="submit" name="Button1" value="Abschicken">
        </form>
    <?php } else { ?>
        <?php if ((isset($_smarty_tpl->tpl_vars['keineAnmeldung']->value))) {?>
            Benutzername und Passwort stimmen nicht überein
        <?php } else { ?>
            Sie sind angemeldet. Ihre UserId ist: <?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
.
        <?php }?>
    <?php }?>
    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
</body>
</html>
<?php }
}
