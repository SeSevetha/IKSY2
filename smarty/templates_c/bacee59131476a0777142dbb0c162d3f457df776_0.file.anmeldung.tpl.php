<?php
/* Smarty version 4.2.0, created on 2024-06-27 09:49:47
  from 'E:\Studium\HS-Bochum Studium\8. SS 24\IKSY2\Projekt7\smarty\templates\anmeldung.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_667d199b64c419_42499717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bacee59131476a0777142dbb0c162d3f457df776' => 
    array (
      0 => 'E:\\Studium\\HS-Bochum Studium\\8. SS 24\\IKSY2\\Projekt7\\smarty\\templates\\anmeldung.tpl',
      1 => 1718895822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667d199b64c419_42499717 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!-- anmeldung.tpl -->
<title>Anmeldeseite</title>
<link rel="stylesheet" href="../css/test.css" type="text/css">
</head>
<body>
<h2>Anmeldung</h2>
<?php if ((isset($_smarty_tpl->tpl_vars['fehlermeldung']->value))) {?>
    <p style="color:red;"><?php echo $_smarty_tpl->tpl_vars['fehlermeldung']->value;?>
</p>
<?php }
if ((isset($_smarty_tpl->tpl_vars['erfolgsmeldung']->value))) {?>
    <p style="color:green;"><?php echo $_smarty_tpl->tpl_vars['erfolgsmeldung']->value;?>
</p>
<?php }?>
<form name='anmeldung' action='<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
' method='post'>
    <label for="i_name">Name</label>
    <input type="text" name="name" id="i_name" size=12><br>
    <label for="i_password">Passwort</label>
    <input type="password" name="password" id="i_password" size=12><br>
    <input type="submit" name="Button1" value="Abschicken">
</form>
</body>
</html>
<?php }
}
