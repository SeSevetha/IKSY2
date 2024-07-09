<?php
// meine.php
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

// Datenbankabfrage, um die Rezepte des Benutzers zu holen
$link = DbFunctions::connectWithDatabase();
$query = "
    SELECT 
        Rezept.id AS rezept_id, 
        Rezept.name AS rezept_name,
        Rezept.beschreibung AS rezept_beschreibung,
        Zutat.zutatName AS zutat_name
    FROM 
        Rezept
    LEFT JOIN 
        Rezept_Zutat ON Rezept.id = Rezept_Zutat.rezeptid
    LEFT JOIN 
        Zutat ON Rezept_Zutat.zutatid = Zutat.id
    WHERE 
        Rezept.benutzerid = ?
";
$stmt = $link->prepare($query);
if ($stmt === false) {
    die('Prepare failed: ' . $link->error);
}

$stmt->bind_param('i', $userId);
$stmt->execute();
$result = $stmt->get_result();
$rezepteMitZutaten = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();
$link->close();

// Rezepte und Zutaten in ein strukturiertes Array umwandeln
$recipes = [];
foreach ($rezepteMitZutaten as $row) {
    $rezeptId = $row['rezept_id'];
    if (!isset($recipes[$rezeptId])) {
        $recipes[$rezeptId] = [
            'id' => $rezeptId,
            'name' => $row['rezept_name'],
            'beschreibung' => $row['rezept_beschreibung'],
            'zutaten' => []
        ];
    }
    if ($row['zutat_name']) {
        $recipes[$rezeptId]['zutaten'][] = $row['zutat_name'];
    }
}

// Rezepte dem Smarty-Template zuweisen
$smarty->assign('recipes', $recipes);

// Template anzeigen
$smarty->display('../smarty/templates/meine.tpl');
?>
