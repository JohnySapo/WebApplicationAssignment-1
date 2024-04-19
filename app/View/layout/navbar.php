<!-- 
<<<<<<< HEAD
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

  <header class="navBag fixed-top py-1" id="nav-header">
    <div class="navbar me-2">
      <a class="ms-5 text-decoration-none text-white" href="index.php"><img src="../public/images/logo/logo-light.png" class="logo"/>Richard Sanchez</a>
      <div class="d-flex align-items-center dropdown-center me-2">
        <?php if (isset($_SESSION['FirstName'])) { ?>
            <?php require("../app/View/fragments/account-options.php"); ?>
        <?php } else { ?>
            <?php require("../app/View/fragments/account-input.php"); ?>
        <?php } ?>
        <?php require("../app/View/fragments/navbar-items.php"); ?>
  </header>
=======
-- Student Name: Johny Ramos
-- Course: T054 - Computer System Management
-- Module: Web Application
-- Lecturer: Robert Smith
-->

<section class="container-fluid navBag">
  <div class="navbar me-2">
    <a class="navbar-brand text-white" href="index.php">Brand</a>
    <div class="d-flex align-items-center dropdown-center">
      <a href="#" class=" iconNav"><i class="fa-solid fa-magnifying-glass"></i></a>
      <a href="#" class=" iconNav"><i class="fa-solid fa-cart-shopping"></i></a>
      <a href="#" class=" iconNav"><i class="fa-regular fa-heart"></i></a>
      <?php if (isset($_SESSION['FirstName'])) { ?>
        <a href="" class=" iconNav dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <p class="small "><?php echo $_SESSION['FirstName']; ?></p>
        </a>
          <ul class="dropdown-menu text-center">
            <form action="../app/View/components/logout.php" method="post" name="logoutForm" class="">
              <button name="Submit" value="Logout" class="btn btn-dark" type="submit">Logout</button>
            </form>
          </ul>
      <?php } else { ?>
        <a href="login.php" class=" iconNav"><i class="fa-regular fa-user"></i></a>
      <?php } ?>
      <button class="navbar-toggler d-xl-none d-lg-none text-white m-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg">
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav container border-top">
        <li class="nav-item mx-4 fw-lighter">
          <a class="nav-link text-light" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item mx-4 fw-lighter">
          <a class="nav-link text-light" href="#">Women</a>
        </li>
        <li class="nav-item mx-4 fw-lighter">
          <a class="nav-link text-light" href="#">Men</a>
        </li>
        <li class="nav-item mx-4 fw-lighter">
          <a class="nav-link text-light" href="#">Kids</a>
        </li>
        <li class="nav-item mx-4 fw-lighter">
          <a class="nav-link text-light" href="#">Outlet</a>
        </li>
        <li class="nav-item mx-4 fw-lighter">
          <a class="nav-link text-light" href="#">Accessories</a>
        </li>
        <li class="nav-item mx-4 fw-lighter dropdown">
          <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu mt-3 navBag">
            <li><a class="dropdown-item text-light" href="#">Action</a></li>
            <li><a class="dropdown-item text-light" href="#">Another action</a></li>
            <li>
              <hr class=" dropdown-divider bg-white">
            </li>
            <li><a class=" dropdown-item text-light" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</section>
>>>>>>> f354be1a675ec2e2bf51ee30f8998d6f377f9942
