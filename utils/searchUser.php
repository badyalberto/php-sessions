<?php
require_once '../utils/connection.php';

function searchUser($email)
{

    $mysqli = connection();
    $stmt = $mysqli->prepare("SELECT name,email,password FROM users WHERE EMAIL=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    return $user;
}
