<?php

require_once '../utils/searchUser.php';

function login()
{
    session_start();
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if (checkUser($email, $password)) {
        $user = searchUser($email);
        if (isset($user)) {
            $_SESSION["email"] = $user['email'];
            $_SESSION["name"] = $user['name'];
        }

        header('Location: ../views/panel.php');
    } else {
        $_SESSION["loginError"] = "Wrong email or password!";
        header("Location:../index.php");
    }
}

function checkUser($email, $pass)
{
    //require_once '../utils/searchUser.php';
    $user = searchUser($email);
    if ($user && password_verify($pass, $user['password'])) {
        return true;
    } else {
        return false;
    }
}

login();
