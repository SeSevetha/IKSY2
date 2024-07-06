<?php
/* Smarty version 4.2.0, created on 2024-07-01 13:22:03
  from '/var/www/html/iksy05/Projekt8/smarty/templates/neuesRezept.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6682915b21f151_33861811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '547c16e8cb0dce0b1f339f4280b6d45589ff9bfa' => 
    array (
      0 => '/var/www/html/iksy05/Projekt8/smarty/templates/neuesRezept.tpl',
      1 => 1719832833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6682915b21f151_33861811 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!-- neuesRezept.tpl -->
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neues Rezept erstellen</title>
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
        <div class="form-container">
            <h2>Neues Rezept erstellen</h2>
            <?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['success_message']->value))) {?>
        <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success_message']->value;?>
</div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['error_message']->value))) {?>
        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</div>
    <?php }?>

    <form method="POST" action="neuesRezept.php">
        <input type="hidden" name="csrfToken" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="recipeName">Rezeptname</label>
            <input type="text" class="form-control" id="recipeName" name="recipeName" required>
        </div>
        <div class="form-group">
            <label for="portions">Portionen</label>
            <input type="number" class="form-control" id="portions" name="portions" required>
        </div>
        <div class="form-group">
            <label for="description">Beschreibung</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Rezept hinzufügen</button>
    </form>
<?php } else { ?>
    <p>Sie sind nicht eingeloggt. Bitte <a href="../klassen/anmeldung.php">melden Sie sich an</a>.</p>
<?php }?>
        </div>
    </div>
    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
</body>
</html>
<?php }
}
