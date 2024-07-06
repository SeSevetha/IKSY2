<?php
/* Smarty version 4.2.0, created on 2024-06-27 11:11:02
  from 'E:\Studium\HS-Bochum Studium\8. SS 24\IKSY2\Projekt7\smarty\templates\logout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_667d2ca65f4137_46129244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '874064bfc6c5f35b78104e928fed201e6672b72a' => 
    array (
      0 => 'E:\\Studium\\HS-Bochum Studium\\8. SS 24\\IKSY2\\Projekt7\\smarty\\templates\\logout.tpl',
      1 => 1719479437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667d2ca65f4137_46129244 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abmeldung</title>
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
<body>
    <div class="container">
        <h2>Sie sind jetzt ausgeloggt</h2>
        <p>Sie werden in wenigen Sekunden zur Startseite weitergeleitet.</p>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
        setTimeout(function() {
            window.location.href = "../test.html";
        }, 3000); // 3 Sekunden Verzögerung
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
