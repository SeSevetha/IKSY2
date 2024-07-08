<?php
require_once('../includes/startTemplate.inc.php'); 
require_once('DbFunctions.inc.php');

// Funktion, um alle Rezepte und ihre Zutaten aus der Datenbank zu holen
function holeRezepteMitZutaten() {
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
            Zutat ON Rezept_Zutat.zutatid = Zutat.id";
    return DbFunctions::getAssociativeResultArray($link, $query);
}

$rezepteMitZutaten = holeRezepteMitZutaten();

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

// Rezepte an das Template übergeben
$smarty->assign('recipes', $recipes);

// Template anzeigen
$smarty->display('../smarty/templates/rezepte.tpl');
?>
