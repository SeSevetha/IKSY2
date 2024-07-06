<?php
//UserFalsch.inc.php

class UserFalsch {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function holeIdVonBenutzernameUndPasswort($username, $password) {
        $username = mysqli_real_escape_string($this->db, $username);
        $password = mysqli_real_escape_string($this->db, $password);

        $query = "SELECT id FROM Benutzer WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($this->db, $query);

        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            return $row['id'];
        } else {
            return null;
        }
    }

}

?>
