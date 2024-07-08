<?php
//index.php
session_start();

// Verwendet den relativen Pfad zur Datei startTemplate.inc.php
require_once('./includes/startTemplate.inc.php'); 

// Überprüfen, ob der Benutzer angemeldet ist
$isLoggedIn = isset($_SESSION['csrfToken']);

// Template-Variablen setzen
$smarty->assign('isLoggedIn', $isLoggedIn);

// Template anzeigen
$smarty->display('smarty/templates/index.tpl');
?>


