<?php
require_once '../utils/connection.php';
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

<div class="height-100 m-auto flex bg-opacity-50 main-background">
<div class="w-full max-w-xs m-auto">
  <div class="text-center font-serif py-4 tracking-wide font-bold text-white text-3d">Register</div>
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="../utils/createUser.php" method="POST">
  <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Name
      </label>
      <input class="rounded-3xl borshadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="name" type="text" placeholder="Name" required>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
        Email
      </label>
      <input class="rounded-3xl borshadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="email@email.com" required>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border rounded-3xl w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************" required>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="cpassword">
        Repeat Password
      </label>
      <input class="shadow appearance-none border rounded-3xl w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="cpassword" name="cpassword" type="password" placeholder="******************" required>
    </div>

    <div class="flex items-center justify-between flex-col">
      <button type="submit" class="rounded-3xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 focus:outline-none focus:shadow-outline" type="button">
        Register
      </button>
      <span class="text-xs pt-5">You do have an account ?
        <a class="inline-block align-baseline font-bold text-sm hover:text-blue-800 " href="../index.php">
          Log in here.
        </a>
      </span>

    </div>
  </form>
  <?=isset($alert) ? "<div class='text-xs shadow-md rounded px-6 pt-6 pb-6 mb-4 border-red-500 bg-red-300 text-red-900'>$alert[text]</div>" : ""?>
  <p class="text-center text-white text-xs">
    &copy;2021 Alberto Chica. All rights reserved.
  </p>
</div>
</div>
</body>
</html>
