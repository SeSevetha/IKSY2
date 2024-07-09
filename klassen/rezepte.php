<?php
require_once('../includes/startTemplate.inc.php'); 
require_once('../klassen/DbFunctions.inc.php');

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

// Funktion zur Filterung der Rezepte basierend auf Suchbegriff
function filterRezepte($rezepte, $suchbegriff) {
    $filteredRecipes = [];
    foreach ($rezepte as $rezept) {
        if (stripos($rezept['rezept_name'], $suchbegriff) !== false) {
            $filteredRecipes[] = $rezept;
        }
    }
    return $filteredRecipes;
}

// Sicherheitsmaßnahme: Eingaben filtern und validieren
$suchbegriff = isset($_GET['search']) ? htmlspecialchars($_GET['search'], ENT_QUOTES, 'UTF-8') : '';
$suchbegriff = trim($suchbegriff); // Leerzeichen entfernen

// Rezepte holen und ggf. filtern
$rezepteMitZutaten = holeRezepteMitZutaten();

if (!empty($suchbegriff)) {
    $rezepteMitZutaten = filterRezepte($rezepteMitZutaten, $suchbegriff);
}

// Rezepte und Zutaten in ein strukturiertes Array umwandeln
$recipes = [];
foreach ($rezepteMitZutaten as $row) {
    $rezeptId = $row['rezept_id'];
    if (!isset($recipes[$rezeptId])) {
        $recipes[$rezeptId] = [
            'id' => $rezeptId,
            'name' => htmlspecialchars($row['rezept_name'], ENT_QUOTES, 'UTF-8'),
            'beschreibung' => htmlspecialchars($row['rezept_beschreibung'], ENT_QUOTES, 'UTF-8'),
            'zutaten' => []
        ];
    }
    if ($row['zutat_name']) {
        $recipes[$rezeptId]['zutaten'][] = htmlspecialchars($row['zutat_name'], ENT_QUOTES, 'UTF-8');
    }
}

// Rezepte an das Template übergeben
$smarty->assign('recipes', $recipes);

// Template anzeigen
$smarty->display('../smarty/templates/rezepte.tpl');
?>
