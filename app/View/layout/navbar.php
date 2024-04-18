<!-- 
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