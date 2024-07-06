<?php
//Abfragen.php

include_once('DbFunctions.inc.php');

function holeRezeptName($recipeId) {
    $link = DbFunctions::connectWithDatabase();
    $query = "SELECT name FROM Rezept WHERE id = " . DbFunctions::escape($link, $recipeId);
    $resultArray = DbFunctions::getHashFromFirstRow($link, $query);

    if ($resultArray != null && isset($resultArray['name'])) {
        return $resultArray['name'];
    } else {
        return "Rezept nicht gefunden";
    }
}

function holeZutatName($recipeId) {
    $link = DbFunctions::connectWithDatabase();
    $query = "SELECT zutatName FROM Zutat WHERE rezeptid = " . DbFunctions::escape($link, $recipeId);
    $result = mysqli_query($link, $query);

    $zutaten = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $zutaten[] = $row['zutatName']; 
    }
    return json_encode($zutaten);
}

if (isset($_GET['id'])) {
    if ($_GET['type'] === 'recipe') {
        echo holeRezeptName($_GET['id']);
    } elseif ($_GET['type'] === 'ingredients') {
        echo holeZutatName($_GET['id']);
    } else {
        echo "Ungültiger Abfragetyp";
    }
} else {
    echo "Keine ID angegeben";
}

function holeBenutzerID ($link, $benutzername)
{
    $query="Select id
                    from Benutzer
                    where username ='$benutzername'";
    return DbFunctions::getFirstFieldOfResult($link, $query);
}
//ist neu
function fuegeRezepteEin($link, $rezeptname, $user_id, $beschreibung) {
    $stmt = $link->prepare("INSERT INTO Rezept (name, benutzerid, beschreibung) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $rezeptname, $user_id, $beschreibung);
    $stmt->execute();
    $rezeptid = $stmt->insert_id;
    $stmt->close();
    return $rezeptid;
}
    
function fuegeZutatEin($link, $zutaten, $einheiten) {
    $zutaten_ids = [];
    $stmt = $link->prepare("INSERT INTO Zutat (zutatname, einheitid) VALUES (?, ?)");
    
    for ($i = 0; $i < count($zutaten); $i++) {
        $zutatname = $zutaten[$i];
        $einheitid = $einheiten[$i];
        
        $stmt->bind_param("si", $zutatname, $einheitid);
        $stmt->execute();
        $zutaten_ids[] = $stmt->insert_id;
    }
    
    $stmt->close();
    return $zutaten_ids;
}

function fuegeRezeptZutatEin($link, $rezeptid, $zutaten_ids, $mengen) {
    $stmt = $link->prepare("INSERT INTO Rezept_Zutat (rezeptid, zutatid, zutatMenge) VALUES (?, ?, ?)");
    
    for ($i = 0; $i < count($zutaten_ids); $i++) {
        $zutatid = $zutaten_ids[$i];
        $menge = (float) str_replace(',', '.', $mengen[$i]);
        
        $stmt->bind_param("iid", $rezeptid, $zutatid, $menge);
        $stmt->execute();
    }

}

?>
