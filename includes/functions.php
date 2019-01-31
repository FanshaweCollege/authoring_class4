<?php

    include 'connect.php';

    function get_single_user($pdo, $user) {
        $query = "SELECT * FROM users WHERE id = '.$user'";

        $get_user = $pdo->query($query);
        $results = array();

        while($row = $get_user->fetch(PDO::FETCH_ASSOC)) {
            $results[] = $row;
        }

        return $results;
    }

    function get_all_users($pdo) {
        $query = "SELECT * FROM users";

        $get_user = $pdo->query($query);
        $results = array();

        while($row = $get_user->fetch(PDO::FETCH_ASSOC)) {
            $results[] = $row;
        }

        return $results;
    }

?>