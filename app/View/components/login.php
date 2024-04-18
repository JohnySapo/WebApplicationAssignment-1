<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php
    require("../app/View/layout/header.php");
    require("../app/Controller/Login-contr.php");
    $login = new Login();
    $login->login("login");
?>

<title>Login in</title>
</head>

<body class="formBodyLogin">
    <a class="text-decoration-none text-dark fs-1" href="index.php">Brand</a>
    <div class="form-container-main border">
        <div class="form-container border">
            <form class="form-box" method="POST">
                <div class="">
                    <h1 class="h3 text-white fw-normal">Login</h1>
                </div>
                <?php include("../app/View/layout/socialicons.php") ?>
                <p class=" text-danger small" style="--bs-text-opacity: .75;"></p>
                <div class="">
                    <input name="email" type="email" class="formInput" id="email" placeholder="name@example.com" required autofocus>
                    <input name="password" type="password" class="formInput" id="password" placeholder="Password" required autofocus>
                </div>
                <p class="my-3 px-2 text-white small" style="--bs-text-opacity: 1;"><?php echo $login->getErrorMessage(); ?></p>
                <button class="w-100 btn serHoverBtn" name="login" type="submit">Login</button>
                <div class="text-center mt-5">
                    <p class="small">Don't have an account?
                        <a href="signup.php" class="text-center fw-light text-decoration-none text-primary">Sign Up</a>
                    </p>
                    <p class="small">Trouble to login?
                        <a href="#/" class="text-center fw-light text-decoration-none text-primary">Reset Password</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>