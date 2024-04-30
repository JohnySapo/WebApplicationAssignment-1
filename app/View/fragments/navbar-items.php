<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<a href="#" class=" iconNav"><i class="fa-solid fa-magnifying-glass"></i></a>
<?php
if (isset($_SESSION['FirstName']) && isset($_SESSION["wish"])) {
        $countWish = count($_SESSION["wish"]);
?>
    <a href="wish.php" class=" iconNav position-relative">
        <i class="fa-regular fa-heart"></i>
        <?php if($countWish > 0) {?>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            <?php echo $countWish; ?>
        </span>
        <?php }?>
    </a>
<?php } else { ?>
    <a href="wish.php" class=" iconNav position-relative">
        <i class="fa-regular fa-heart"></i>
    </a>
<?php }?>
<?php 
if (isset($_SESSION['FirstName']) && isset($_SESSION["cart"]) ) {
    $countCart = count($_SESSION["cart"]);
?>
        <a href="cart.php" class=" iconNav position-relative">
            <i class="fa-solid fa-cart-shopping"></i>
            <?php if($countCart > 0) {?>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                <?php echo $countCart; ?>
            </span>
            <?php }?>
        </a>
<?php } else { ?>
    <a href="cart.php" class=" iconNav">
        <i class="fa-solid fa-cart-shopping"></i>
    </a>
<?php } ?>
<button class="navbar-toggler d-xl-none d-lg-none bg-light m-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
</div>
</div>
<nav class="navbar navbar-expand-lg">
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav container border-top">
            <li class="nav-item mx-4 fw-lighter">
                <a class="nav-link text-light" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item mx-4 fw-lighter">
                <a class="nav-link text-light" href="woman.php">Women</a>
            </li>
            <li class="nav-item mx-4 fw-lighter">
                <a class="nav-link text-light" href="man.php">Men</a>
            </li>
            <li class="nav-item mx-4 fw-lighter">
                <a class="nav-link text-light" href="kid.php">Kids</a>
            </li>
            <li class="nav-item mx-4 fw-lighter">
                <a class="nav-link text-light" href="acc.php">Accesories</a>
            </li>
            <?php if (isset($_SESSION['FirstName'])) { ?>
                <li class="nav-item mx-4 fw-lighter">
                    <a class="nav-link text-light" href="storedashboard.php">Shop Dashboard</a>
                </li>
            <?php }  else {echo "";}?>
        </ul>
    </div>
</nav>