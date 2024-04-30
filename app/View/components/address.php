<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php
    require("../app/View/layout/headerActive.php");
    require("../app/Controller/AddressManage-contr.php");

    $address = new AddressManage();
    $result = $address->removeAddress();
    $addresses = $address->addressDisplay();
    $singleAddress = $address->singleAddress('id');

    if ($result) {
        header("location: addresses.php");
        exit;
    }
?>
<title>Your Addresses</title>
</head>

<body>

    <!-- Main Content -->
    <section class="main-address bg-dark">
        <?php require("../app/View/layout/navbarstatic.php") ?>

        <div class="container">
            <div class="pt-5">
                <nav class="small" style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item page-active">
                            Your Addresses
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="py-3">
                <h1 class=" fs-3 fw-lighter text-light">Your Addresses</h1>
            </div>
            <div class="row g-0 px-1 py-1 d-flex justify-content-center">
                <a href="newaddress.php" class="card cardAddress col-lg-3 col-12 mb-1 ms-1 text-decoration-none shadow-lg" style="width: 20rem;">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div class="">
                            <h1 class="fs-1 text-center fw-light text-white">
                                <i class="fw-1 fa-solid fa-plus"></i>
                            </h1>
                            <h1 class="fs-4 fs-bold fw-light text-white">Add Address</h1>
                        </div>
                    </div>
                </a>
                <?php if ($addresses > 0) {
                    foreach ($addresses as $display) { ?>
                        <div class="col-lg-3 col-12 mb-1 ms-1">
                            <div class="card cardAddress shadow-lg" style="width: 20rem;">
                                <div class="card-body py-4">
                                    <h6 class="card-subtitle text-white mb-2 text-muted fw-bold ps-2 py-2"><?php echo $display["FullName"] ?></h6>
                                    <ul class=" list-unstyled">
                                        <li class="small text-light card-text ps-2">
                                            <span class="">
                                                Apartment/House: <?php echo $display["ApartmentHouseNumber"] ?>
                                            </span>
                                        </li>
                                        <li class="small text-light card-text ps-2">
                                            <span class="">
                                                <?php echo $display["Address"] ?>
                                            </span>
                                        </li>
                                        <li class="small text-white card-text ps-2">
                                            <span class="">
                                                <?php echo $display["City"] ?>, <?php echo $display["PostCode"] ?>
                                            </span>
                                        </li>
                                        <li class="small text-white card-text ps-2">
                                            <span class="">
                                                <?php echo $display["Country"] ?>
                                            </span>
                                        </li>
                                        <li class="small text-white card-text ps-2">
                                            <span class="">
                                                Phone number: <?php echo $display["Phone"] ?>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="nav small">
                                        <li class="nav-item border-end px-2">
                                            <a href="editaddress.php?id=<?php echo $display["AddressID"] ?>" class="card-link edit-remove-link">Edit</a>
                                        </li>
                                        <li class="nav-item ps-2">
                                        <a href="#" class="card-link edit-remove-link remove-address" data-bs-toggle="modal" data-bs-target="#exampleModal" 
                                            data-address-id="<?php echo $display["AddressID"] ?>"
                                            data-full-name="<?php echo $display["FullName"] ?>"
                                            data-apartment-house="<?php echo $display["ApartmentHouseNumber"] ?>"
                                            data-address="<?php echo $display["Address"] ?>"
                                            data-city="<?php echo $display["City"] ?>"
                                            data-post-code="<?php echo $display["PostCode"] ?>"
                                            data-country="<?php echo $display["Country"] ?>"
                                            data-phone="<?php echo $display["Phone"] ?>"> Remove
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Deletion</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-2">
                        <!-- Modal - JavaScript is loading here the address content -->
                    </div>
                    <div class="modal-footer d-flex justify-content-around bg-light">
                        <a type="button" class="btn w-25 serHoverBtn" data-bs-dismiss="modal">NO</a>
                        <a type="button" href="addresses.php?id=<?php echo $display["AddressID"] ?>" class="btn w-50 address-remove text-dark">
                            YES
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Footer - Section -->
    <footer class="footer-container bg-light">
        <?php require("../app/View/layout/footer.php") ?>
    </footer>
</body>

</html>