<?php
/* Smarty version 4.2.0, created on 2024-01-18 15:46:46
  from 'E:\Studium\HS-Bochum Studium\7. WS 23_24\IKSY 1\Probeklausur04\smarty\templates\loesung.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a939d61c9d49_60024938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2d31f54d6674bb664e77bf0ed83a9c5148e36e5' => 
    array (
      0 => 'E:\\Studium\\HS-Bochum Studium\\7. WS 23_24\\IKSY 1\\Probeklausur04\\smarty\\templates\\loesung.tpl',
      1 => 1705589147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a939d61c9d49_60024938 (Smarty_Internal_Template $_smarty_tpl) {
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
			<label>Wohneinheit</label>						
			<select name="wohnung">	
 			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wohneinheit']->value, 'wohnung', false, 'wohneinheitNr');
$_smarty_tpl->tpl_vars['wohnung']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wohneinheitNr']->value => $_smarty_tpl->tpl_vars['wohnung']->value) {
$_smarty_tpl->tpl_vars['wohnung']->do_else = false;
?>
    			<option value="<?php echo $_smarty_tpl->tpl_vars['wohneinheit']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wohnung']->value;?>
</option>    
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
		
			<label>Bonus (€)</label>
			<input type="number" id="bonus" name="bonus" min="50.0" max="200.0" step="1.0" required>
			<label>Verdoppelung möglich</label>
			<input type="text" id="wirtschaftslage" name="wirtschaftslage" pattern="ja|nein" required>	
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
