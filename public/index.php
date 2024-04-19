<<<<<<< HEAD
<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

=======
>>>>>>> f354be1a675ec2e2bf51ee30f8998d6f377f9942
<?php require('../app/View/layout/header.php') ?>
<title>Online Store</title>
</head>

<body>
<<<<<<< HEAD
    <section class="main-container">

        <!-- Main - Section -->
        <?php require("../app/View/layout/main.php") ?>

        <!-- Footer - Section -->
        <footer class="footer-container bg-light">
            <?php require("../app/View/layout/footer.php") ?>
        </footer>

    </section>
</body>

</html>
=======
    <section class="headerBg">
        <?php require('../app/View/layout/navbar.php') ?>
        <h1 class="text-white">testing</h1>
        <h1 class="text-white">
            Status: You are logged in  <?php echo $_SESSION['FirstName']; ?>
        </h1>
    </section>
    <?php require('../app/View/layout/footer.php') ?>
>>>>>>> f354be1a675ec2e2bf51ee30f8998d6f377f9942
