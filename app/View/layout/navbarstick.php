<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<header class="navBag sticky-top shadow" id="nav-header" style="background: #1f1f23;">
    <div class="navbar me-2">
        <a class="ms-5 text-decoration-none text-white" href="index.php"><img src="../public/images/logo/logo-light.png" class="logo" />Richard Sanchez</a>
        <div class="d-flex align-items-center dropdown-center me-2">
            <?php if (isset($_SESSION['FirstName'])) { ?>
                <a href="" class="loginSign py-0 px-2 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="">
                        <span class="text-white">Hello, <span class="badge text-bg-light"><?php echo $_SESSION['FirstName']; ?></span></span>
                    </div>
                    <span class="text-white small">
                        Account & Options
                    </span>
                </a>
                <div class="dropdown-menu ms-1 drop-menu" style="background: #1f1f23;">
                    <div class="row p-2">
                        <div class="col-lg-6 border-end">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item small text-center rounded-2 mt-2 list-item">
                                    <a class="text-white text-decoration-none" href="#/">Orders</a>
                                </li>
                                <li class="list-group-item small text-center rounded-2 mt-2 list-item">
                                    <a class="text-white text-decoration-none" href="wish.php">Wishes</a>
                                </li>
                                <li class="list-group-item small text-center rounded-2 mt-2 list-item">
                                    <a class="text-white text-decoration-none" href="cart.php">Cart List</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item small text-center rounded-2 mt-2 list-item">
                                    <a class="text-white text-decoration-none" href="account.php">Account</a>
                                </li>
                                <li class="list-group-item small text-center rounded-2 mt-2 list-item">
                                    <a class="text-white text-decoration-none" href="addresses.php">Addresses</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <form action="../app/View/components/logout.php" method="post" name="logoutForm" class="text-center border-top">
                        <button name="Submit" value="Logout" class="btn mt-2 w-75 text-white serHoverBtnShop" type="submit">Logout</button>
                    </form>
                </div>
            <?php } else { ?>
                <?php require("../app/View/fragments/account-input.php"); ?>
            <?php } ?>
            <?php require("../app/View/fragments/navbar-items.php"); ?>
</header>