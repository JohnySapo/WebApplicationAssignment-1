  <!-- 
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
          <a href="" class="loginSign py-0 px-2 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="">
              <span class="text-white">Hello, <span class="badge text-bg-light"><?php echo $_SESSION['FirstName']; ?></span></span>
            </div>
            <span class="text-white small">
              Account & Options
            </span>
          </a>
          <div class="dropdown-menu ms-1 drop-menu">
            <div class="row p-2">
              <div class="col-lg-6 border-end">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item small text-center list-item">
                    <a class="text-white text-decoration-none" href="#/">Orders</a>
                  </li>
                  <li class="list-group-item small text-center list-item">
                    <a class="text-white text-decoration-none" href="#/">Wishes</a>
                  </li>
                  <li class="list-group-item small text-center list-item">
                    <a class="text-white text-decoration-none" href="#/">Cart List</a>
                  </li>
                  <li class="list-group-item small text-center list-item">
                    <a class="text-white text-decoration-none" href="#/">Subscriptions</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item small text-center list-item">
                    <a class="text-white text-decoration-none" href="#/">Account</a>
                  </li>
                  <li class="list-group-item small text-center list-item">
                    <a class="text-white text-decoration-none" href="#/">Addresses</a>
                  </li>
                  <li class="list-group-item small text-center list-item">
                    <a class="text-white text-decoration-none" href="#/">Payments</a>
                  </li>
                  <li class="list-group-item small text-center list-item">
                    <a class="text-white text-decoration-none" href="#/">Support</a>
                  </li>
                </ul>
              </div>
            </div>
            <form action="../app/View/components/logout.php" method="post" name="logoutForm" class="text-center border-top">
              <button name="Submit" value="Logout" class="btn mt-2 w-75 text-white serHoverBtn" type="submit">Logout</button>
            </form>
          </div>
        <?php } else { ?>
          <a href="" class="loginSign px-2 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="">
              <span class="text-white small">Hello, Sign in</span>
            </div>
            <span class="text-white small">
              Account & Options
            </span>
          </a>
          <div class="dropdown-menu ms-1 drop-menu">
            <div class="row px-2">
              <div class="col-lg-6 border-end">
                <li class="list-group-item small text-center list-item">
                  <a class="text-white text-decoration-none" href="login.php">Login</a>
                </li>
              </div>
              <div class="col-lg-6 text-center">
                <li class="list-group-item small text-center list-item">
                  <a class="text-white text-decoration-none" href="signup.php">Sign up</a>
                </li>
              </div>
            </div>
          </div>
        <?php } ?>
        <a href="#" class=" iconNav"><i class="fa-solid fa-magnifying-glass"></i></a>
        <a href="#" class=" iconNav"><i class="fa-regular fa-heart"></i></a>
        <a href="#" class=" iconNav"><i class="fa-solid fa-cart-shopping"></i></a>
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
  </header>