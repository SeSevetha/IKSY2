<?php
/* Smarty version 4.2.0, created on 2024-07-09 15:38:29
  from '/var/www/html/iksy05/KochZauber/smarty/templates/meine.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_668d3d55c412d6_49514785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00aac91ad0a14bd5a097f3b6e95df7d663537cb6' => 
    array (
      0 => '/var/www/html/iksy05/KochZauber/smarty/templates/meine.tpl',
      1 => 1720532307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668d3d55c412d6_49514785 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
    <title>KochZauber - Profil</title>
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
        <div class="user-info">
            <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>
                <form action="./logout.php" method="post" style="display:inline;">
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            <?php }?>
        </div>
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
        <div class="profile-box">
            <div class="profile-info">
                <div class="personal-details">
                    <p>Hallo <?php echo $_smarty_tpl->tpl_vars['user']->value['vorname'];?>
, schön, dass du da bist.</p>
                    <br>
                    <p>Hier sind deine Daten und Rezepte:</p>
                    <label>Name:</label> <span><?php echo (($tmp = $_smarty_tpl->tpl_vars['user']->value['nachname'] ?? null)===null||$tmp==='' ? 'Nicht angegeben' ?? null : $tmp);?>
</span><br>
                    <label>Vorname:</label> <span><?php echo (($tmp = $_smarty_tpl->tpl_vars['user']->value['vorname'] ?? null)===null||$tmp==='' ? 'Nicht angegeben' ?? null : $tmp);?>
</span><br>
                    <label>Benutzername:</label> <span><?php echo (($tmp = $_smarty_tpl->tpl_vars['user']->value['username'] ?? null)===null||$tmp==='' ? 'Nicht angegeben' ?? null : $tmp);?>
</span>
                </div>
            </div>
        </div>
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
                        <h2><?php echo $_smarty_tpl->tpl_vars['recipe']->value['name'];?>
</h2>
                        <p>Zutaten:</p>
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recipe']->value['zutaten'], 'zutat');
$_smarty_tpl->tpl_vars['zutat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['zutat']->value) {
$_smarty_tpl->tpl_vars['zutat']->do_else = false;
?>
                                <li><?php echo $_smarty_tpl->tpl_vars['zutat']->value;?>
</li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                        <p>Zubereitung:</p>
                        <p><?php echo $_smarty_tpl->tpl_vars['recipe']->value['beschreibung'];?>
</p>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
