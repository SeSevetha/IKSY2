<?php
/* Smarty version 4.2.0, created on 2024-07-09 15:35:11
  from '/var/www/html/iksy05/KochZauber/smarty/templates/neuesRezept.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_668d3c8f895d77_29331062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eac5600510fb9269df045eaf658e21822d564af3' => 
    array (
      0 => '/var/www/html/iksy05/KochZauber/smarty/templates/neuesRezept.tpl',
      1 => 1720531451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668d3c8f895d77_29331062 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!-- neuesRezept.tpl -->
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neues Rezept erstellen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php echo '<script'; ?>
 src="../js/fuegeZutatenHinzu.js" defer><?php echo '</script'; ?>
> 
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

	<?php if ((isset($_smarty_tpl->tpl_vars['erfolgreichesEinfuegen']->value))) {?>
        <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['erfolgreichesEinfuegen']->value;?>
</div>
    <?php }?>

		<form method="post" action="neuesRezept.php">
        
        <label for="rezeptname">Rezeptname:</label><br>
        <input type="text" id="rezeptname" name="rezeptname" required><br><br>
        
        <label>Zutaten:</label><br>
        <div id="ingredientContainer">
            <div class="ingredient-row">
                <input type="text" name="zutaten[]" required placeholder="Zutat">
                <input type="text" name="mengen[]" required placeholder="Menge">
                <select name="einheiten[]">
                    <option value="1">ml</option>
                    <option value="2">Stück</option>
                    <option value="3">Gramm</option>
                </select>
                <button type="button" onclick="removeIngredientRow(this)">Entfernen</button>
                <br><br>
            </div>
        </div>
        <button type="button" onclick="addIngredientRow()">Weitere Zutat hinzufügen</button>
        <br><br>
        
        <label for="beschreibung">Zubereitung:</label><br>
        <textarea id="beschreibung" name="beschreibung" rows="4" required></textarea><br><br>
        
        <button type="submit">Rezept speichern</button>
    </form>



<?php } else { ?>
    <p>Sie sind nicht eingeloggt. Bitte <a href="../klassen/anmeldung.php">melden Sie sich an</a>.</p>
<?php }?>
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
