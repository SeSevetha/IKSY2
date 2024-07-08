<?php
session_start();
require_once('../includes/startTemplate.inc.php');
require_once('../klassen/DbFunctions.inc.php');
require_once('../klassen/User.inc.php');

$PHP_SELF = $_SERVER['PHP_SELF'];
$REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];

if ($REQUEST_METHOD != "POST") {
    if(!isset($_SESSION["csrfToken"]))
    {
        $_SESSION["csrfToken"] = bin2hex(random_bytes(64));
    }
    $smarty->assign ( 'csrfToken', $_SESSION["csrfToken"]);

    $smarty->assign('PHP_SELF', $PHP_SELF);
} else {
    if(!isset($_POST["csrfToken"])||!isset($_SESSION["csrfToken"])||$_POST["csrfToken"] != $_SESSION["csrfToken"])
    {
        unset($_SESSION["csrfToken"]);
        die("CSRF Token ungültig!");
    }
    
    $link = DbFunctions::connectWithDatabase();
    $name = DbFunctions::escape($link, trim($_POST['name']));
    $passwort = DbFunctions::escape($link, trim($_POST['password']));

    // Passwort von der Datenbank abrufen
    $gespeichertesPasswort = User::holePasswortVonBenutzernamen($link, $name);

    if ($gespeichertesPasswort && password_verify($passwort, $gespeichertesPasswort)) {
        // Passwort ist korrekt
        $userId = User::holeIDVonBenutzernamen($link, $name);
        $vorname = User::holeVornameVonBenutzer($link, $name);
        $smarty->assign('userId', $userId);
        $smarty->assign('vorname', $vorname);
        
    } else {
        // Falsches Passwort oder Benutzer existiert nicht
        $smarty->assign('keineAnmeldung', true);
    }

    mysqli_close($link);
}

$smarty->display('../smarty/templates/anmeldung.tpl');
?>
