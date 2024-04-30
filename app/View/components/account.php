<!-- 
    -- Student Number: B00139596

    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php
    require("../app/View/layout/headerActive.php");
?>
<title>Account</title>
</head>
<body>

    <!-- Main Content -->
    <section class="main-address bg-dark bg-gradient">
        <?php require("../app/View/layout/navbarstatic.php") ?>

        <div class="container">
            <div class="py-5">
                <h1 class=" fs-3 fw-lighter text-light">Your Account Options</h1>
            </div>
            <div class="row g-0 gap-1 ms-5 px-1 py-1 d-flex justify-content-start">
                <a href="accountdetail.php" class="card cardAddress col-lg-3 col-12 mb-1 ms-1 text-decoration-none shadow-lg" style="width: 20rem;">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div class="">
                            <h1 class="fs-1 text-center fw-light text-white">
                                <i class="fa-solid fa-address-card"></i>
                            </h1>
                            <h1 class="fs-4 fs-bold fw-light text-white">Your Account</h1>
                        </div>
                    </div>
                </a>
                <a href="addresses.php" class="card cardAddress col-lg-3 col-12 mb-1 ms-1 text-decoration-none shadow-lg" style="width: 20rem;">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div class="">
                            <h1 class="fs-1 text-center fw-light text-white">
                                <i class="fa-solid fa-house-user"></i>
                            </h1>
                            <h1 class="fs-4 fs-bold fw-light text-white">Your Addresses</h1>
                        </div>
                    </div>
                </a>
                <a href="cart.php" class="card cardAddress col-lg-3 col-12 mb-1 ms-1 text-decoration-none shadow-lg" style="width: 20rem;">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div class="">
                            <h1 class="fs-1 text-center fw-light text-white">
                                <i class="fa-solid fa-cart-plus"></i>
                            </h1>
                            <h1 class="fs-4 fs-bold fw-light text-white">Cart List</h1>
                        </div>
                    </div>
                </a>
                <a href="Wish.php" class="card cardAddress col-lg-3 col-12 mb-1 ms-1 text-decoration-none shadow-lg" style="width: 20rem;">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div class="">
                            <h1 class="fs-1 text-center fw-light text-white">
                                <i class="fa-regular fa-heart"></i>
                            </h1>
                            <h1 class="fs-4 fs-bold fw-light text-white">Wish List</h1>
                        </div>
                    </div>
                </a>
                <a href="storedashboard.php" class="card cardAddress col-lg-3 col-12 mb-1 ms-1 text-decoration-none shadow-lg" style="width: 20rem;">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div class="">
                            <h1 class="fs-1 text-center fw-light text-white">
                                <i class="fa-solid fa-store"></i>
                            </h1>
                            <h1 class="fs-4 fs-bold fw-light text-white">Store Dashboard</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer - Section -->
    <footer class="footer-container bg-light">
        <?php require("../app/View/layout/footer.php") ?>
    </footer>
</body>

</html>