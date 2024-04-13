<!-- 
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