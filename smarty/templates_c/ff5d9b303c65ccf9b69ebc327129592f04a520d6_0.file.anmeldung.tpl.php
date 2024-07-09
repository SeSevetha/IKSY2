<?php
/* Smarty version 4.2.0, created on 2024-07-09 15:32:09
  from '/var/www/html/iksy05/KochZauber/smarty/templates/anmeldung.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_668d3bd9cab856_97917687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff5d9b303c65ccf9b69ebc327129592f04a520d6' => 
    array (
      0 => '/var/www/html/iksy05/KochZauber/smarty/templates/anmeldung.tpl',
      1 => 1720531410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668d3bd9cab856_97917687 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
        .center-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 20px; /* Abstand vom Begr��ungsbild */
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
            text-align: center;
        }

        .home-content img {
            margin-bottom: 0; /* Verkleinern des Abstands nach unten */
        }
    </style>
</head>
<body>
    <div class="top-strip"></div>
    <header>
        <h1>
            <img src="../Bilder/zauber.jpg" alt="KochZauber">
            <span style="color: #61B536;">K</span>och<span style="color: #61B536;">Z</span>auber
        </h1>
    </header>
    <nav>
        <div class="menu">
            <img src="../Bilder/menue.webp" alt="Men�">
            <div class="dropdown-content">
                <a href="../index.php">Home</a>
                <a href="./rezepte.php">Rezepte</a>
                <a href="../meine.php">Konto</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="home-content">
             <img src="../Bilder/start.jpg" alt="Begr��ungsbild" style="border-radius: 8px;">
        </div>
    </div>
    <div class="center-form">
        <?php if (!$_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>
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
            <?php if ((isset($_smarty_tpl->tpl_vars['keineAnmeldung']->value))) {?>
                <p>Benutzername und Passwort stimmen nicht �berein</p>
            <?php }?>
        <?php } else { ?>
            <p>Sie sind angemeldet. Hallo <?php echo $_smarty_tpl->tpl_vars['user']->value['vorname'];?>
, sch�n dass du wieder da bist.</p>
        <?php }?>
    </div>
    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    
</body>
</html>
<?php }
}
