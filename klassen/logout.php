<?php
session_start();
session_unset(); // Alle Session-Variablen l�schen
session_destroy(); // Session zerst�ren

// Benutzer zur Startseite weiterleiten
header("Location: ../index.php");
exit();
?>

