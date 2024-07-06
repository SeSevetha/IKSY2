<?php
//rezepte.php

require_once('../includes/startTemplate.inc.php'); 
require_once('DbFunctions.inc.php');

// Funktion, um alle Rezepte aus der Datenbank zu holen
function holeRezeptName() {
    $link = DbFunctions::connectWithDatabase();
    $query = "SELECT id, name FROM Rezept";
    return DbFunctions::getAssociativeResultArray($link, $query);
}

$recipes = holeRezeptName();

// Rezepte an das Template übergeben
$smarty->assign('recipes', $recipes);

// Template anzeigen
$smarty->display('../smarty/templates/rezepte.tpl');
?>