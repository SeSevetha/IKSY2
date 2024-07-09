<?php
/* Smarty version 4.2.0, created on 2024-07-09 15:28:35
  from '/var/www/html/iksy05/IKSY2/smarty/templates/registrieren.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_668d3b0393a178_96846206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '317a03638ced2767fba26103f7b8a733ed648cd0' => 
    array (
      0 => '/var/www/html/iksy05/IKSY2/smarty/templates/registrieren.tpl',
      1 => 1720531458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668d3b0393a178_96846206 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!--registrieren.tpl-->
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrierung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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
            <img src="../Bilder/menue.webp" alt="Menü">
            <div class="dropdown-content">
                <a href="../index.php">Home</a>
                <a href="./rezepte.php">Rezepte</a>
                <a href="./meine.php">Konto</a>
 
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="home-content">
            <img src="../Bilder/start.jpg" alt="Begrüßungsbild" style="border-radius: 8px;">
            <h2>Registrierung</h2>
            <form method="POST" action="registrieren.php">
                <input type="hidden" name="csrfToken" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
">
                <label for="username">Benutzername:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Passwort:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <label for="password_repeat">Passwort wiederholen:</label>
                <input type="password" id="password_repeat" name="password_repeat" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="vorname">Vorname:</label>
                <input type="text" id="vorname" name="vorname" required>
                <br>
                <label for="nachname">Nachname:</label>
                <input type="text" id="nachname" name="nachname" required>
                <br>
                <input type="submit" value="Registrieren">
            </form>
        </div>
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
