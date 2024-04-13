<?php 
    require("../app/Controller/DBcontroller.php");
    $DBController = new DBcontroller();
    $DBController -> startLogin('Signin');
?>

<form class="form-box" method="POST">
    <div class="">
        <h1 class="h3 fw-normal">Login</h1>
    </div>
    <?php require("../app/View/layout/socialicons.php") ?>
    <div class="">
        <input name="email" type="email" class="formInput" id="email" placeholder="name@example.com" required autofocus>
        <input name="password" type="password" class="formInput" id="password" placeholder="Password" required autofocus>
    </div>
    <div class="my-4">
        <a href="#" class="">Forgot my password</a>
    </div>
    <button class="w-100 btn btn-lg btn-dark" name="Signin" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
</form>