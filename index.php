<?php
session_start();

require_once('./includes/startTemplate.inc.php'); 

// Überprüfen, ob der Benutzer angemeldet ist
$isLoggedIn = isset($_SESSION['user_id']);

// Template-Variablen setzen
$smarty->assign('isLoggedIn', $isLoggedIn);

// Template anzeigen
$smarty->display('smarty/templates/index.tpl');
?>
