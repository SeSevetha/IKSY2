<?php
session_start();

require_once("../includes/startTemplate.inc.php");
require_once('../klassen/DbFunctions.inc.php');
require_once('../klassen/Abfragen.php');


// Überprüfen, ob der Benutzer eingeloggt ist
if (!isset($_SESSION["csrfToken"])) {
    // Wenn nicht eingeloggt, Weiterleitung zur Anmeldung
    header("Location: anmeldung.php?error=not_logged_in");
    exit();
}
    

$link = DbFunctions::connectWithDatabase();

$error_message = null;
$success_message = null;

// CSRF-Token generieren, wenn das Formular angezeigt wird
if (!isset($_SESSION['csrfToken'])) {
    $_SESSION['csrfToken'] = bin2hex(random_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // CSRF-Schutz
    if (!isset($_POST['csrfToken']) || !hash_equals($_SESSION['csrfToken'], $_POST['csrfToken'])) 
        $error_message = "Ungültiges CSRF-Token";
    
        $benutzername = $_POST['benutzername'];
        $rezeptname = $_POST['rezeptname'];
        $zutaten = $_POST['zutaten'];
        $mengen = $_POST['mengen'];
        $einheiten = $_POST['einheiten'];
        $beschreibung = $_POST['beschreibung'];
        $user_id = holeBenutzerID($link, $benutzername);
  //      $user_id = $_SESSION['userId']; // Benutzer-ID aus der Session
        
        $rezeptid = fuegeRezepteEin($link, $rezeptname, $user_id, $beschreibung);
        $zutaten_ids = fuegeZutatEin($link, $zutaten, $einheiten);
        fuegeRezeptZutatEin($link, $rezeptid, $zutaten_ids, $mengen);
        

    
}else {
    

}

$smarty->assign('logged_in', true); // Für Smarty, um anzuzeigen, dass der Benutzer eingeloggt ist
$smarty->assign('csrfToken', $_SESSION['csrfToken']);
$smarty->assign('success_message', $success_message);
$smarty->assign('error_message', $error_message);

$smarty->display('../smarty/templates/neuesRezept.tpl');
?>
