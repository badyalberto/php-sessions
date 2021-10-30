<?php

function destroySession()
{
    session_start();

// Unset all session variables
    unset($_SESSION);

// Destroy session cookie
    destroySessionCookie();

// Destroy the session
    session_destroy();
    header("Location:../index.php");
}

function destroySessionCookie()
{
    if (ini_get("session.use_cookies")) { //directiva en php.ini return 1
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
}

destroySession();