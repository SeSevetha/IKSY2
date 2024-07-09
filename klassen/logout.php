<?php
session_start();
session_unset(); // Alle Session-Variablen löschen
session_destroy(); // Session zerstören

// Benutzer zur Startseite weiterleiten
header("Location: ../index.php");
exit();
?>

