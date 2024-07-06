<?php
require_once("../includes/startTemplate.inc.php");
require_once('../klassen/DbFunctions.inc.php');
require_once('../klassen/User.inc.php');

session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['userId'])) {
    // If not logged in, allow registration form to be displayed
    $PHP_SELF = $_SERVER['PHP_SELF'];
    $REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];

    // Handle CSRF token
    if ($REQUEST_METHOD != "POST") {
        if (!isset($_SESSION["csrfToken"])) {
            $csrfToken = bin2hex(random_bytes(32)); // Reduced to 32 bytes for efficiency
            $_SESSION["csrfToken"] = $csrfToken;
        } else {
            $csrfToken = $_SESSION["csrfToken"];
        }
        $smarty->assign('csrfToken', $csrfToken);
        $smarty->assign('PHP_SELF', $PHP_SELF);
    } else {
        if (!isset($_POST["csrfToken"]) || !hash_equals($_SESSION["csrfToken"], $_POST["csrfToken"])) {
            unset($_SESSION["csrfToken"]);
            die("CSRF Token ungültig!");
        }

        // Process registration form
        $link = DbFunctions::connectWithDatabase();

        $username = DbFunctions::escape($link, trim($_POST['username']));
        $password = DbFunctions::escape($link, trim($_POST['password']));
        $password_repeat = DbFunctions::escape($link, trim($_POST['password_repeat']));
        $email = DbFunctions::escape($link, trim($_POST['email']));
        $vorname = DbFunctions::escape($link, trim($_POST['vorname']));
        $nachname = DbFunctions::escape($link, trim($_POST['nachname']));
        $token = bin2hex(random_bytes(16)); // Generate a random token

        if ($password === $password_repeat) {
            // Check if username already exists
            $query = "SELECT COUNT(*) FROM Benutzer WHERE username = '$username'";
            $count = DbFunctions::getFirstFieldOfResult($link, $query);

            if ($count == 0) {
                // Insert user (consider hashing the password)
                User::fuegeEin($link, $username, $password, $email, $vorname, $nachname, $token);
                echo "<script>alert('Benutzer erfolgreich registriert');</script>";
            } else {
                echo "<script>alert('Benutzername bereits vergeben');</script>";
            }
        } else {
            echo "<script>alert('Passwörter stimmen nicht überein');</script>";
        }

        unset($_SESSION["csrfToken"]);
        mysqli_close($link);
    }

    // Display registration form template
    $smarty->display('../smarty/templates/registrieren.tpl');
    exit; // Exit script after displaying registration form
}

// If user is logged in, redirect or do something else
// Redirect to homepage or handle differently as per your application logic
echo "Benutzer ist bereits angemeldet";
?>
