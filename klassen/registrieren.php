<?php
require_once("../includes/startTemplate.inc.php");
require_once('../klassen/DbFunctions.inc.php');
require_once('../klassen/User.inc.php');

session_start(); // Start the session

// Check if the user is not logged in
if (!isset($_SESSION['userId'])) {
    // Allow registration form to be displayed
    $PHP_SELF = htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8');
    $REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];

    // Handle CSRF token
    if ($REQUEST_METHOD !== "POST") {
        if (!isset($_SESSION["csrfToken"])) {
            $csrfToken = bin2hex(random_bytes(32)); // Reduced to 32 bytes for efficiency
            $_SESSION["csrfToken"] = $csrfToken;
        } else {
            $csrfToken = $_SESSION["csrfToken"];
        }
        $smarty->assign('csrfToken', $csrfToken);
        $smarty->assign('PHP_SELF', $PHP_SELF);
    } else {
        // Process registration form
        $link = DbFunctions::connectWithDatabase();

        $username = DbFunctions::escape($link, trim($_POST['username']));
        $password = DbFunctions::escape($link, trim($_POST['password']));
        $password_repeat = DbFunctions::escape($link, trim($_POST['password_repeat']));
        $email = DbFunctions::escape($link, trim($_POST['email']));
        $vorname = DbFunctions::escape($link, trim($_POST['vorname']));
        $nachname = DbFunctions::escape($link, trim($_POST['nachname']));
        $token = bin2hex(random_bytes(16)); // Generate a random token

        function isEmailUnique($email) {
    $link = DbFunctions::connectWithDatabase();
    $escapedEmail = DbFunctions::escape($link, $email);

    $query = "SELECT COUNT(*) FROM Benutzer WHERE email = '$escapedEmail'";
    $count = DbFunctions::getFirstFieldOfResult($link, $query);

    mysqli_close($link);

    return $count == 0; // True, wenn die E-Mail-Adresse noch nicht existiert
}

        // Check if email is unique
        if (!isEmailUnique($email)) {
            echo "<script>alert('Die angegebene E-Mail-Adresse ist bereits registriert. Bitte verwenden Sie eine andere E-Mail-Adresse.');</script>";
            echo "<script>setTimeout(function() {
                window.location.href = 'registrieren.php';
            }, 100); // 1 Sekunden Verzögerung</script>";
            exit; // Stop further execution
        }
        
        if ($password === $password_repeat) {
            // Check if username already exists
            $query = "SELECT COUNT(*) FROM Benutzer WHERE username = '$username'";
            $count = DbFunctions::getFirstFieldOfResult($link, $query);

            if ($count == 0) {
                // Insert user (consider hashing the password)
                User::fuegeEin($link, $username, $password, $email, $vorname, $nachname, $token);
                echo "<script>alert('Benutzer erfolgreich registriert');</script>";
                echo "<script>setTimeout(function() {
                    window.location.href = 'anmeldung.php';
                }, 100); // 1 Sekunden Verzögerung</script>";
                exit();
            } else {
                echo "<script>alert('Benutzername bereits vergeben');</script>";
            }
        } else {
            echo "<script>alert('Passwörter stimmen nicht überein');</script>";
        }

        unset($_SESSION["csrfToken"]);
        mysqli_close($link);
    }

    $smarty->display('../smarty/templates/registrieren.tpl');
    exit; // Exit script after displaying registration form
}

// If user is logged in, redirect or do something else
// Redirect to homepage or handle differently as per your application logic
echo "Benutzer ist bereits angemeldet";
?>
