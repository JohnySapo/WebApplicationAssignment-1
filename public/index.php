<?php require('../app/View/layout/header.php') ?>
<title>Online Store</title>
</head>

<body>
    <section class="headerBg">
        <?php require('../app/View/layout/navbar.php') ?>
        <h1 class="text-white">testing</h1>
        <h1 class="text-white">
            Status: You are logged in  <?php echo $_SESSION['FirstName']; ?>
        </h1>
    </section>
    <?php require('../app/View/layout/footer.php') ?>