<<<<<<< HEAD
<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php
    require("../app/View/layout/header.php");
    require("../app/Controller/Signup-contr.php");
    $signup = new Signup();
    $signup->signup("signup");
?>

<title>Sign up</title>
</head>

<body class="formBodySignup">
    <a class="text-decoration-none text-dark fs-1" href="index.php">Brand</a>
    <div class="form-container-main border">
        <div class="form-container boder">
            <form class="form-box" method="POST">
                <div class="">
                    <h1 class="h3 text-white fw-normal">Sign Up</h1>
                </div>
                <?php require("../app/View/layout/socialicons.php"); ?>
                <div class="w-50">
                    <input name="firstName" type="text" class="formInput" id="name" placeholder="Name" required autofocus>
                    <input name="lastName" type="text" class="formInput" id="surname" placeholder="Surname" required autofocus>
                    <input name="email" type="email" class="formInput" id="email" placeholder="name@example.com" required autofocus>
                    <input name="password" type="password" class="formInput" id="password" placeholder="Password" required autofocus>
                    <input name="confPassword" type="password" class="formInput" id="confPassword" placeholder="Confirm Password" required autofocus>
                    <div class="my-3 px-2">
                        <p class="text-center text-white small" style="--bs-text-opacity: 1;"><?php echo $signup->getErrorMessage(); ?></p>
                        <button class="w-100 btn serHoverBtn" name="signup" type="submit">Sign up</button>
                    </div>
                </div>
                <div class="text-center">
                    <p class="small">Already have an account?
                        <a href="login.php" class="text-center fw-light text-decoration-none text-primary">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
=======
<?php 
    require_once("../app/Controller/DBcontroller.php");
    $DBController = new DBcontroller();
    $DBController -> startSignUp('Signup');
?>

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
    <button class="w-100 btn btn-lg mt-1 btn-dark" name="Signup" type="submit">Sign Up</button>
    <p class="mt-3 mb-3 text-muted">&copy; 2017–2022</p>
</form>
>>>>>>> f354be1a675ec2e2bf51ee30f8998d6f377f9942
