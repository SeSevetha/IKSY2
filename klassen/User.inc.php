<?php
class User
{
    public static function holePasswortVonBenutzernamen($link, $name)
    {
        $query = "select password
                  from Benutzer
                  where username='$name'";
        return DbFunctions::getFirstFieldOfResult($link, $query);
    }

    /*
    public static function holePasswortNeuVonBenutzernamen($link, $name)
    {
        $query = "select PasswortNeu
                  from User
                  where Username='$name'";
        return DbFunctions::getFirstFieldOfResult($link, $query);
    }
    */

    public static function holeIDVonBenutzernamen($link, $name)
    {
        $query = "select id
                  from Benutzer
                  where username='$name'";
        return DbFunctions::getFirstFieldOfResult($link, $query);
    }

    public static function fuegeEin($link, $username, $password, $email, $vorname, $nachname, $token)
    {
        // Das Passwort mit password_hash hashen
        $passwortHash = password_hash($password, PASSWORD_DEFAULT);
    
        // Vorbereiten des Insert-Queries mit korrektem Tabellennamen und Spalten
        $insertQuery = "INSERT INTO Benutzer (username, password, email, vorname, nachname, token) 
                        VALUES (?, ?, ?, ?, ?, ?)";
        
        // Vorbereiten der Parameter für die Query-Ausführung
        $stmt = mysqli_prepare($link, $insertQuery);
        mysqli_stmt_bind_param($stmt, 'ssssss', $username, $passwortHash, $email, $vorname, $nachname, $token);
        
        // Query ausführen
        mysqli_stmt_execute($stmt);
        
        // Überprüfen, ob das Einfügen erfolgreich war
        if (mysqli_stmt_affected_rows($stmt) == 1) {
            echo "Benutzer wurde erfolgreich eingefügt.";
        } else {
            echo "Fehler beim Einfügen des Benutzers.";
        }
        
        mysqli_stmt_close($stmt);
    }
    
}
?>
