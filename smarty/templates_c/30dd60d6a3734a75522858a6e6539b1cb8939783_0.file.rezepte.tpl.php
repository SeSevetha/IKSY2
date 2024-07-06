<?php
/* Smarty version 4.2.0, created on 2024-07-03 16:41:38
  from '/var/www/html/iksy05/Projekt10/smarty/templates/rezepte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_668563224affb1_05986080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30dd60d6a3734a75522858a6e6539b1cb8939783' => 
    array (
      0 => '/var/www/html/iksy05/Projekt10/smarty/templates/rezepte.tpl',
      1 => 1720017629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668563224affb1_05986080 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!-- rezepte.tpl -->
<html lang="de">
<head>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .recipe-card {
            width: calc(50% - 20px); /* 50% Breite minus Abstand */
            margin-bottom: 20px;
            box-sizing: border-box; /* Rand und Padding sind in der Breite enthalten */
        }

        @media only screen and (max-width: 768px) {
            .recipe-card {
                width: calc(100% - 20px); /* Bei kleinen Bildschirmen, 100% Breite minus Abstand */
            }
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KochZauber - Rezepte</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css"> 
    <?php echo '<script'; ?>
 src="../js/holeRezeptZutaten.js" defer><?php echo '</script'; ?>
> 
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
                <a href="../index.html">Home</a>
                <a href="../rezepte.html">Rezepte</a>
                <a href="../meine.html">Konto</a>
                <a href="#">Kontakt</a>
            </div>
        </div>
        <input type="text" class="search-bar" placeholder="z.B. Lasagne, Sommersalat, Nudeln">
    </nav>
    <div class="container">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recipes']->value, 'recipe');
$_smarty_tpl->tpl_vars['recipe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recipe']->value) {
$_smarty_tpl->tpl_vars['recipe']->do_else = false;
?>
        <div class="recipe-card">
            <img src="<?php echo (($tmp = $_smarty_tpl->tpl_vars['recipe']->value['image_url'] ?? null)===null||$tmp==='' ? 'https://via.placeholder.com/400x400' ?? null : $tmp);?>
" alt="Rezeptbild">
            <div class="recipe-content">
                <h2 id="recipe-title-<?php echo $_smarty_tpl->tpl_vars['recipe']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['recipe']->value['name'];?>
</h2>
                <p>Zutaten:</p>
                <ul id="ingredients-list-<?php echo $_smarty_tpl->tpl_vars['recipe']->value['id'];?>
"></ul>
                <p>Zubereitung:</p>
                <p><?php echo $_smarty_tpl->tpl_vars['recipe']->value['beschreibung'];?>
</p>
            </div>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
</body>
</html>
<?php }
}
