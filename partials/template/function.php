<?php

function randomPassword() {
    if (isset($_GET['password'])) {
        $passlength = intval($_GET['password']);
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;

        for ($i = 0; $i < $passlength; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }

        return implode($pass);
    }

    return ''; // Ritorna una stringa vuota se il parametro password non è stato inviato
}

?>