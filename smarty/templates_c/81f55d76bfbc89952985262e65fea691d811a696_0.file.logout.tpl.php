<?php
/* Smarty version 4.2.0, created on 2024-07-08 14:09:58
  from 'E:\Studium\HS-Bochum Studium\8. SS 24\IKSY2\Projekt\IKSY2\smarty\templates\logout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_668bd716bb3cb4_09026832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81f55d76bfbc89952985262e65fea691d811a696' => 
    array (
      0 => 'E:\\Studium\\HS-Bochum Studium\\8. SS 24\\IKSY2\\Projekt\\IKSY2\\smarty\\templates\\logout.tpl',
      1 => 1720440589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668bd716bb3cb4_09026832 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="top-strip"></div>
    <header>
        <h1>
            <img src="/home/iksy/Bilder/zauber.jpg" alt="KochZauber">
            <span style="color: #61B536;">K</span>och<span style="color: #61B536;">Z</span>auber
        </h1>
    </header>
    <div class="container">
        <div class="home-content">
            <img src="/home/iksy/Bilder/start.jpg" alt="Begrüßungsbild" style="border-radius: 8px;">
        </div>
    </div>
    <div class="container">
        <h2>Sie sind jetzt ausgeloggt.
        <br>
        Sie werden in wenigen Sekunden zur Startseite weitergeleitet.
        </h2>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
        setTimeout(function() {
            window.location.href = "../index.php";
        }, 3000); // 3 Sekunden Verzögerung
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
