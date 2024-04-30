<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php
    require("../app/View/layout/headerActive.php");
    require("../app/Controller/Account-contr.php");

    $account = new Account();
    $userData = $account->getUserData($_SESSION["UserID"]);
    $editUserData = $account->editUserData("submit");
?>
<title>Your Account</title>
</head>

<body>
    <section class="main-address bg-dark bg-gradient">
        <?php require("../app/View/layout/navbarstatic.php") ?>

        <div class="container">
            <div class="pt-5">
                <nav class="small" style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-decoration-none">
                            <a href="account.php" class="breadcrumb-item-link">Your Account</a>
                        </li>
                        <span class="px-2">
                            <i class="text-white small fa-solid fa-chevron-right"></i>
                        </span>
                        <li class="breadcrumb-item page-active">
                            Account Details
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="py-3">
                <h1 class=" fs-3 fw-lighter text-light">Account Information</h1>
            </div>
            <div class="py-2 px-2">
                <form action="" class="form-box" method="POST">
                <?php if ($userData > 0) {
                    foreach ($userData as $display) { ?>
                    <div class="w-50">
                        <div class="py-2">
                            <label for="" class="text-white">First name</label>
                            <input name="FirstName" type="text" class="formInput py-2" id="FirstName" value="<?php echo $display["FirstName"] ?>" required autofocus>
                        </div>
                        <div class="py-2">
                            <label for="" class="text-white">Last name</label>
                            <input name="LastName" type="text" class="formInput py-2" id="LastName" value="<?php echo $display["LastName"] ?>" required autofocus>
                        </div>
                        <div class="py-2">
                            <label for="" class="text-white">Date of Birth</label>
                            <input name="DateOfBirth" type="text" class="formInput py-2" id="DateOfBirth" value="<?php echo $display["DateOfBirth"] ?>" required autofocus>
                        </div>
                        <div class="py-2">
                            <label for="" class="text-white">Email Address</label>
                            <input name="PrimaryEmail" type="text" class="formInput py-2" id="PrimaryEmail" value="<?php echo $display["PrimaryEmail"] ?>" required autofocus>
                        </div>
                        <div class="my-3">
                            <button class="btn w-50 editAddressBtn" name="submit" type="submit">Edit Account Details</button>
                        </div>
                    </div>
                <?php }
                    }?>
                </form>
            </div>
    </section>
    <!-- Footer - Section -->
    <footer class="footer-container bg-light">
        <?php require("../app/View/layout/footer.php") ?>
    </footer>
</body>
</html>