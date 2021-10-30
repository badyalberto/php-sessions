<?php
require_once '../utils/searchUser.php';

function createUser()
{
    require_once './connection.php';

    session_start();
    $mysqli = connection();
    if ($mysqli->query('Select email from users')) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = searchUser($email);
        
        if (!isset($user)) {
            $BPassword = password_hash($password, PASSWORD_BCRYPT);
            $query = $mysqli->prepare("INSERT INTO users(name,email,password) VALUES (?,?,?)");
            $query->bind_param("sss", $name, $email, $BPassword);
            $query->execute();

            $_SESSION["registerInfo"] = "Register Succesful";
            header('Location: ../index.php');
        }else{
            $_SESSION["loginError"] = "Its email already exists";
            header('Location: ../index.php');
        }

    }
}

createUser();
