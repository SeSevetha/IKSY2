<?php
/* Smarty version 4.2.0, created on 2024-01-05 16:15:21
  from '/var/www/html/iksy05/Probeklausur4/smarty/templates/loesung.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65981d09a0c311_63968589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89b6866d843f4b274a3e78161e57622099f1194b' => 
    array (
      0 => '/var/www/html/iksy05/Probeklausur4/smarty/templates/loesung.tpl',
      1 => 1704467531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65981d09a0c311_63968589 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>
<head>
<title>Aufgabe Bonusberecnung</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/Forms.css">
<link rel="stylesheet" type="text/css" href="css/Tables.css">

</head>
<body>
	<h2><?php echo $_smarty_tpl->tpl_vars['ueberschrift']->value;?>
</h2>

	<?php if (((isset($_smarty_tpl->tpl_vars['PHP_SELF']->value)))) {?>
		<form name="formular" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF']->value;?>
" method="post">
			<input type="hidden" name="csrfToken" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />
			<label>Name</label>						
			<select name="mitarbeiterNr">	
 			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mitarbeiterNachname']->value, 'nachname', false, 'mitarbeiterNr');
$_smarty_tpl->tpl_vars['nachname']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mitarbeiterNr']->value => $_smarty_tpl->tpl_vars['nachname']->value) {
$_smarty_tpl->tpl_vars['nachname']->do_else = false;
?>
    			<option value="<?php echo $_smarty_tpl->tpl_vars['mitarbeiterNr']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['nachname']->value;?>
</option>    
  			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		
			</select>
			<label>Höhe Teambonus</label>
			<input type="number" id="teambonus" name="teambonus" min="10.0" max="80.0" step="0.1" required>
			<label>Farbe Grußkarte</label>
			<input type="text" id="farbe" name="farbe" pattern="rot|grün|blau" required>	
			<label>Ausgabe als PDF?</label>
			<input type="checkbox" name="pdf">
			<label>&nbsp;</label>
			<input type="submit" name="Button1" value="Abschicken">
		</form>
	<?php } else { ?>
		<?php if (((isset($_smarty_tpl->tpl_vars['fehler']->value)))) {?>
			Unzulässige Eingabe.
		<?php } else { ?>
			<img src="<?php echo PATH_AND_FILENAME;?>
">
			<br>
			<?php echo $_smarty_tpl->tpl_vars['ausgabeText1']->value;?>

			<br>
			<?php echo $_smarty_tpl->tpl_vars['ausgabeText2']->value;?>

			<br>
			<?php echo $_smarty_tpl->tpl_vars['ausgabeText3']->value;?>

		<?php }?> 		 					
	<?php }?>
</body>
</html>
<?php }
}
