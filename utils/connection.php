<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $bbdd = "bbdd";

    $mysqli = new mysqli($host, $user, $password, $bbdd);

    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        die();
    }
    return $mysqli;
}

