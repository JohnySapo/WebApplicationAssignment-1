<?php 
    require("../app/Model/Cleaner.php");
    require("../app/Model/Credential.php");
    require("../app/Model/Database.php");
    require("../app/Controller/Signup-contr.php");
    $signup = new signup();
    $signup -> signup("signup");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hellow</h1>

    <form class="form-box" method="POST">
    <div class="">
        <h1 class="h3 fw-normal">Sign Up</h1>
    </div>
    <?php require("../app/View/layout/socialicons.php"); ?>
    <div class="">
        <input name="firstName" type="text" class="formInput" id="name" placeholder="Name" required autofocus>
        <input name="lastName" type="text" class="formInput" id="surname" placeholder="Surname" required autofocus>
        <input name="email" type="email" class="formInput" id="email" placeholder="name@example.com" required autofocus>
        <input name="password" type="password" class="formInput" id="password" placeholder="Password" required autofocus>
        <input name="confPassword" type="password" class="formInput" id="confPassword" placeholder="Confirm Password" required autofocus>
    </div>
    <button class="w-100 btn btn-lg mt-1 btn-dark" name="signup" type="submit">Sign Up</button>
    <p class="mt-3 mb-3 text-muted">&copy; 2017–2022</p>
</form>
</body>
</html>