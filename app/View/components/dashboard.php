<?php
    require("../app/View/layout/headerActive.php");

    $section = "Accessories";

    if (isset($_GET['section'])) {
        $section = $_GET['section'];

        $allowedSections = array("Him", "Her", "Kid", "Accessories");
        if (!in_array($section, $allowedSections)) {
            $section = "Accessories";
        }
    }

    if(isset($_SESSION["cart"]) && is_array($_SESSION["cart"])) {
        $countCart = count($_SESSION["cart"]);
    }
    if(isset($_SESSION["wish"]) && is_array($_SESSION["wish"])) {
        $countWishes = count($_SESSION["wish"]);
    }
    $title = ucfirst($section);
?>

<title>Store Dashboard - <?php echo $title; ?></title>
</head>

<body>
    <?php require("../app/View/layout/navbarstick.php") ?>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background: #1f1f23;">
                <div class="pt-3 sidebar-sticky">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 text-muted text-uppercase">
                        <span>Shopping Options</span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item sideItem">
                            <a class="nav-link sideLink <?php echo ($section == 'Accessories') ? 'active' : ''; ?>" href="?section=Accessories">
                                <span class="sideIcon me-2">
                                    <i class="fa-solid fa-ring"></i>
                                </span>
                                Accessories
                            </a>
                        </li>
                        <li class="nav-item sideItem">
                            <a class="nav-link sideLink <?php echo ($section == 'Him') ? 'active' : ''; ?>" href="?section=Him">
                                <span class="sideIcon me-2">
                                    <i class="fa-solid fa-chess-king"></i>
                                </span>
                                Him
                            </a>
                        </li>
                        <li class="nav-item sideItem">
                            <a class="nav-link sideLink <?php echo ($section == 'Her') ? 'active' : ''; ?>" href="?section=Her">
                                <span class="sideIcon me-2">
                                    <i class="fa-solid fa-chess-queen"></i>
                                </span>
                                Her
                            </a>
                        </li>
                        <li class="nav-item sideItem">
                            <a class="nav-link sideLink <?php echo ($section == 'Kid') ? 'active' : ''; ?>" href="?section=Kid">
                                <span class="sideIcon me-2">
                                    <i class="fa-solid fa-children"></i>
                                </span>
                                Kid
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-3 text-muted text-uppercase">
                        <span>Account Settings</span>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item sideItem ">
                            <a class="nav-link sideLink" href="#/">
                                <span class="sideIcon me-2">
                                    <i class="fa-solid fa-list-check"></i>
                                </span>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item sideItem ">
                            <a class="nav-link sideLink" href="account.php">
                                <span class="sideIcon me-2">
                                    <i class="fa-solid fa-gear"></i>
                                </span>
                                Account
                            </a>
                        </li>
                        <li class="nav-item sideItem ">
                            <a class="nav-link sideLink" href="addresses.php">
                                <span class="sideIcon me-2">
                                    <i class="fa-solid fa-address-book"></i>
                                </span>
                                Addresses
                            </a>
                        </li>
                        <li class="nav-itemsideItem ">
                            <a class="nav-link sideLink" href="#">
                                <span class="sideIcon me-2">
                                    <i class="fa-solid fa-dollar-sign"></i>
                                </span>
                                Payments
                            </a>
                        </li>
                        <li class="nav-item sideItem ">
                            <a class="nav-link sideLink" href="#">
                                <span class="sideIcon">
                                    <i class="fa-solid fa-handshake-angle"></i>
                                </span>
                                Support
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h3 sticky-top"><span class="fs-2 fw-lighter">Shopping for <?php echo $title;?></span></h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2 position-relative">
                            <a type="button" href="cart.php" class="btn btn-sm btn-outline-dark">
                                <span class=""><i class="fa-solid fa-cart-shopping"></i></span>
                                Shop Cart
                                <?php if(isset($countCart)){?>
                                <span class="ms-1 badge text-bg-success"><?php echo $countCart;?></span>
                                <?php } else ?>
                            </a>
                            <a type="button" href="wish.php" class="btn btn-sm btn-outline-dark">
                                <span class=""><i class="fa-regular fa-heart"></i></span>
                                Wishes
                                <?php if(isset($countWishes)){?>
                                <span class="ms-1 badge text-bg-danger"><?php echo $countWishes;?></span>
                                <?php }?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <?php require("../app/View/fragments/$section.php"); ?>
                </div>
            </main>
        </div>
    </div>
</body>

</html>