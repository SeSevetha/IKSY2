<?php
/* Smarty version 4.2.0, created on 2024-07-08 20:47:16
  from 'C:\xampp\htdocs\test\smarty\templates\anmeldung.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_668c343425d8e3_67171470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50b29718e6b70f488deb5901fd7ac1032709a278' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\smarty\\templates\\anmeldung.tpl',
      1 => 1720464415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668c343425d8e3_67171470 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldung</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
        .center-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .center-form label, .center-form input, .center-form button {
            margin: 10px 0;
        }

        .center-form input, .center-form button {
            width: 100%;
            max-width: 300px;
        }

        .center-form label {
            width: 100%;
            max-width: 300px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="top-strip"></div>
    <header>
        <h1>
            <img src="./Bilder/zauber.jpg" alt="KochZauber">
            <span style="color: #61B536;">K</span>och<span style="color: #61B536;">Z</span>auber
        </h1>
    </header>
    <nav>
        <div class="menu">
            <img src="/home/iksy/Bilder/menue.png" alt="Menü">
            <div class="dropdown-content">
                <a href="../index.php">Home</a>
                <a href="./rezepte.php">Rezepte</a>
                <a href="../meine.html">Konto</a>
                <a href="#">Kontakt</a>
            </div>
        </div>
        <input type="text" class="search-bar" placeholder="z.B. Lasagne, Sommersalat, Nudeln">
    </nav>
    <div class="container">
        <div class="home-content">
             <img src="../Bilder/start.jpg" alt="BegrÃ¼ÃŸungsbild" style="border-radius: 8px;">
        </div>
    </div>
    <div class="center-form">
        <?php if ((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value))) {?>
            <form name='anmeldung' action='<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
' method='post'>
                <input type="hidden" name="csrfToken" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />
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
                Sie sind angemeldet. Hallo <?php echo $_smarty_tpl->tpl_vars['vorname']->value;?>
, schön dass du wieder da bist.
            <?php }?>
        <?php }?>
    </div>
    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
</body>
</html>
<?php }
}
