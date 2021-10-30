<?php
require_once './modules/validate.php';
$alert = checkSession();
include_once './modules/header.php';
?>
<div class="height-100 m-auto flex bg-opacity-50 main-background">
<div class="w-full max-w-xs m-auto">
  <div class="text-center font-serif py-4 tracking-wide font-bold text-white text-3d">PHP Login</div>
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="./modules/login.php" method="POST">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
        Email
      </label>
      <input class="rounded-3xl borshadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="email@email.com">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border rounded-3xl w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************">
<!--       <p class="text-red-500 text-xs italic">Please choose a password.</p> -->
    </div>

    <div class="flex items-center justify-between flex-col">
      <button type="submit" class="rounded-3xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 focus:outline-none focus:shadow-outline" type="button">
        Sign In
      </button>
      <span class="text-xs pt-5">You do not have an account ?
        <a class="inline-block align-baseline font-bold text-sm hover:text-blue-800 " href="./views/register.php">
          Sign up here.
        </a>
      </span>

    </div>
  </form>
  <?= isset($alert) ? ($alert["type"] != "info") ? "<div class='text-xs shadow-md rounded px-6 pt-6 pb-6 mb-4 border-red-500 bg-red-300 text-red-900'>$alert[text]</div>" : "<div class='text-xs shadow-md rounded px-6 pt-6 pb-6 mb-4 border-green-500 bg-green-300 text-green-900'>$alert[text]</div>" : "" ?>
  <p class="text-center text-white text-xs">
    &copy;2021 Alberto Chica. All rights reserved.
  </p>
</div>
</div>
<?php
include_once './modules/footer.php';
?>