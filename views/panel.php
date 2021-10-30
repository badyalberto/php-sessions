<?php
require_once "../modules/validate.php";
checkSession();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../node_modules/tailwindcss/dist/tailwind.min.css">
</head>
<body>
<div class="flex justify-between p-4 bg-blue-500 bg-opacity-50 text-white">
    <h1 class="font-mono font-bold m-auto">Welcome, <?=$_SESSION["name"]?> !</h1>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="window.location.href='../modules/close_session.php'">
    Sign out
    </button>
</div>
</body>
</html>