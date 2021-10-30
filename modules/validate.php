<?php

function checkSession()
{

    session_start();
    $urlFile = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); //recorta los parametros
    
    if ($urlFile == "index.php" || $urlFile == "php-sessions") {
        if ($alert = error()) {
            return $alert;
        }

        if ($alert = registerInfo()) {
            return $alert;
        }

    } else {
        if (!isset($_SESSION["email"])) {    
            $_SESSION["loginError"] = "You don't have permission to enter the dashboard. Please Login.";
            header("Location: ../index.php");
        }
    }

}

function error()
{
    if (isset($_SESSION["loginError"])) {
        $errorText = $_SESSION["loginError"];
        unset($_SESSION["loginError"]);
        return ["type" => "error", "text" => $errorText];
    }
}

function registerInfo()
{
    if (isset($_SESSION["registerInfo"])) {
        $errorText = $_SESSION["registerInfo"];
        unset($_SESSION["registerInfo"]);
        return ["type" => "info", "text" => $errorText];
    }
}
