<?php
/* Smarty version 4.2.0, created on 2024-07-09 13:01:39
  from '/var/www/html/iksy05/IKSY2/smarty/templates/neuesRezept.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_668d1893e79068_10914649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '918265cbd97397a8c70e98b4e0887c74e7521767' => 
    array (
      0 => '/var/www/html/iksy05/IKSY2/smarty/templates/neuesRezept.tpl',
      1 => 1720522871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668d1893e79068_10914649 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!-- neuesRezept.tpl -->
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neues Rezept erstellen</title>
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
</body>
</html>
<?php }
}
