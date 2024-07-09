<?php
class User
{
    public static function holePasswortVonBenutzernamen($link, $name)
    {
        $query = "SELECT password FROM Benutzer WHERE username='$name'";
        return DbFunctions::getFirstFieldOfResult($link, $query);
    }

    public static function holeVornameVonBenutzer($link, $name) {
        $query = "SELECT vorname FROM Benutzer WHERE username = '$name'";
        return DbFunctions::getFirstFieldOfResult($link, $query);
    }
    
    public static function holeNachnameVonBenutzer($link, $name) {
        $query = "SELECT nachname FROM Benutzer WHERE username = '$name'";
        return DbFunctions::getFirstFieldOfResult($link, $query);
    }

    public static function holeIDVonBenutzernamen($link, $name)
    {
        $query = "SELECT id FROM Benutzer WHERE username='$name'";
        return DbFunctions::getFirstFieldOfResult($link, $query);
    }

    public static function fuegeEin($link, $username, $password, $email, $vorname, $nachname, $token)
    {
        $passwortHash = password_hash($password, PASSWORD_DEFAULT);
        $insertQuery = "INSERT INTO Benutzer (username, password, email, vorname, nachname, token) 
                        VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($link, $insertQuery);
        mysqli_stmt_bind_param($stmt, 'ssssss', $username, $passwortHash, $email, $vorname, $nachname, $token);
        mysqli_stmt_execute($stmt);
        if (mysqli_stmt_affected_rows($stmt) == 1) {
            echo "Benutzer wurde erfolgreich eingef�gt.";
        } else {
            echo "Fehler beim Einf�gen des Benutzers.";
        }
        mysqli_stmt_close($stmt);
    }
}
?>
