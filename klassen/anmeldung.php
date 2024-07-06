<?php
session_start();
require_once('../includes/startTemplate.inc.php');
require_once('../klassen/DbFunctions.inc.php');
require_once('../klassen/User.inc.php');

$PHP_SELF = $_SERVER['PHP_SELF'];
$REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];

if ($REQUEST_METHOD != "POST") {
    //hier was eingefügt
    if(!isset($_SESSION["csrfToken"]))
    {
        $_SESSION["csrfToken"] = bin2hex(random_bytes(64));
    }
    $smarty->assign ( 'csrfToken', $_SESSION["csrfToken"]);
    //hier ende
    $smarty->assign('PHP_SELF', $PHP_SELF);
} else {
    //hier was eingefügt
    if(!isset($_POST["csrfToken"])||!isset($_SESSION["csrfToken"])||$_POST["csrfToken"] != $_SESSION["csrfToken"])
    {
        unset($_SESSION["csrfToken"]);
        die("CSRF Token ungültig!");
    }
    //hier ende
    
    $link = DbFunctions::connectWithDatabase();
    $name = DbFunctions::escape($link, trim($_POST['name']));
    $passwort = DbFunctions::escape($link, trim($_POST['password']));

    // Passwort von der Datenbank abrufen
    $gespeichertesPasswort = User::holePasswortVonBenutzernamen($link, $name);

    if ($gespeichertesPasswort && password_verify($passwort, $gespeichertesPasswort)) {
        // Passwort ist korrekt
        $userId = User::holeIDVonBenutzernamen($link, $name);

        if ($userId !== null) {
            $smarty->assign('userId', $userId);
            // Hier könnten weitere Logiken für erfolgreiche Anmeldung erfolgen
            // Zum Beispiel: Setzen von Session-Variablen oder Weiterleitung
        } else {
            $smarty->assign('keineAnmeldung', true);
        }
    } else {
        // Falsches Passwort oder Benutzer existiert nicht
        $smarty->assign('keineAnmeldung', true);
    }

    mysqli_close($link);
}

$smarty->display('../smarty/templates/anmeldung.tpl');
?>
