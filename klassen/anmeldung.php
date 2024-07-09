<?php
session_start();
require_once('../includes/startTemplate.inc.php');
require_once('../klassen/DbFunctions.inc.php');
require_once('../klassen/User.inc.php');

$PHP_SELF = $_SERVER['PHP_SELF'];
$REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];

if ($REQUEST_METHOD != "POST") {
    if (!isset($_SESSION["csrfToken"])) {
        $_SESSION["csrfToken"] = bin2hex(random_bytes(64));
    }
    $smarty->assign('csrfToken', $_SESSION["csrfToken"]);
    $smarty->assign('PHP_SELF', $PHP_SELF);
    $smarty->assign('isLoggedIn', isset($_SESSION['user_id']));
} else {
    if (!isset($_POST["csrfToken"]) || !isset($_SESSION["csrfToken"]) || $_POST["csrfToken"] != $_SESSION["csrfToken"]) {
        unset($_SESSION["csrfToken"]);
        die("CSRF Token ungültig!");
    }

    $link = DbFunctions::connectWithDatabase();
    $name = DbFunctions::escape($link, trim($_POST['name']));
    $passwort = DbFunctions::escape($link, trim($_POST['password']));

    $gespeichertesPasswort = User::holePasswortVonBenutzernamen($link, $name);

    if ($gespeichertesPasswort && password_verify($passwort, $gespeichertesPasswort)) {
        $userId = User::holeIDVonBenutzernamen($link, $name);
        $vorname = User::holeVornameVonBenutzer($link, $name);
        $nachname = User::holeNachnameVonBenutzer($link, $name);

        $_SESSION['user_id'] = $userId;
        $_SESSION['username'] = $name;
        $_SESSION['vorname'] = $vorname;
        $_SESSION['nachname'] = $nachname;

        header('Location: meine.php');
        exit();
    } else {
        $smarty->assign('keineAnmeldung', true);
    }

    mysqli_close($link);
    $smarty->assign('isLoggedIn', false);
}

$smarty->display('../smarty/templates/anmeldung.tpl');
?>
