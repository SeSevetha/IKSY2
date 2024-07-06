<?php
/* Smarty version 4.2.0, created on 2024-01-26 18:59:34
  from 'E:\Studium\HS-Bochum Studium\7. WS 23_24\IKSY 1\IKSY Probeklausuren\Probeklausur\smarty\templates\loesung.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65b3f306723938_21106304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec828864dd3cbb1fe509873a55f6f3565be19d92' => 
    array (
      0 => 'E:\\Studium\\HS-Bochum Studium\\7. WS 23_24\\IKSY 1\\IKSY Probeklausuren\\Probeklausur\\smarty\\templates\\loesung.tpl',
      1 => 1706187258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b3f306723938_21106304 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>
<head>
<title>Klausur Energieanbieter</title>
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
			<label>Monat</label>						
			<select name="monatNr">	
 			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['monatsdaten']->value, 'monat', false, 'monatNr');
$_smarty_tpl->tpl_vars['monat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['monatNr']->value => $_smarty_tpl->tpl_vars['monat']->value) {
$_smarty_tpl->tpl_vars['monat']->do_else = false;
?>
    			<option value="<?php echo $_smarty_tpl->tpl_vars['monatNr']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['monat']->value;?>
</option>    
  			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		
			</select>					
			<label>Sondertarif</label>
			<input type="text" id="sondertarif" name="sondertarif">
			<label>Prämie (€) </label>
			<input type="number" id="bonus" name="praemie" min="0" step=".01" required>
			<label>Ausgabe als PDF?</label>
			<input type="checkbox" name="pdf">
			<label>&nbsp;</label>
			<input type="submit" name="abschicken" value="Abschicken">
		</form>
	<?php } else { ?>
		<?php if (((isset($_smarty_tpl->tpl_vars['fehler']->value)))) {?>
			Unzulässige Eingabe.
		<?php } else { ?>
			<img src="<?php echo PATH_AND_FILENAME;?>
">
			<br>
			<br>
				<?php echo $_smarty_tpl->tpl_vars['ausgabeText1']->value;?>

			<br>
			<br>
				<?php echo $_smarty_tpl->tpl_vars['ausgabeText2']->value;?>

			<br>
			<?php if (((isset($_smarty_tpl->tpl_vars['ausgabeText3']->value)))) {?>
				<i><?php echo $_smarty_tpl->tpl_vars['ausgabeText3']->value;?>
</i>
			<?php }?>
			<br>
			<?php if (((isset($_smarty_tpl->tpl_vars['ausgabeText4']->value)))) {?>
				<b><?php echo $_smarty_tpl->tpl_vars['ausgabeText4']->value;?>
</b>
			<?php }?>
		<?php }?> 		 					
	<?php }?>
</body>
</html>
<?php }
}
