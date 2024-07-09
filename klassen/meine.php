<?php
session_start();
require_once('../includes/startTemplate.inc.php');
require_once('../klassen/DbFunctions.inc.php');
require_once('../klassen/User.inc.php');

// Prüfen, ob der Benutzer angemeldet ist
if (!isset($_SESSION['user_id'])) {
    // Benutzer ist nicht angemeldet, zur Anmeldeseite umleiten
    header('Location: anmeldung.php');
    exit();
}

// Benutzerinformationen aus der Session holen
$userId = $_SESSION['user_id'];
$username = $_SESSION['username'];
$vorname = $_SESSION['vorname'];
$nachname = $_SESSION['nachname'];

// Benutzerinformationen dem Smarty-Template zuweisen
$smarty->assign('user', [
    'id' => $userId,
    'username' => $username,
    'vorname' => $vorname,
    'nachname' => $nachname
]);

$smarty->assign('isLoggedIn', true); // Login-Status setzen

// Rezepte zuweisen, falls verfügbar
$recipes = isset($_SESSION['recipes']) ? $_SESSION['recipes'] : [];
$smarty->assign('recipes', $recipes);

$smarty->display('../smarty/templates/meine.tpl');
?>
