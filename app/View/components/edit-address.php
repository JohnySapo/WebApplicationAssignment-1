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
    $singleAddress = $address->singleAddress('id');
    $editAddress = $address->editAddress('submit');

    if($editAddress > 0) {
        header("location:addresses.php");
        exit;
    }
?>
<title>Your Addresses</title>
</head>

<body>
    <section class="main-address bg-dark">
        <?php require("../app/View/layout/navbarstatic.php") ?>

        <div class="container">
            <div class="pt-5">
                <nav class="small" style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-decoration-none">
                            <a href="addresses.php" class="breadcrumb-item-link">Your Addresses</a>
                        </li>
                        <span class="px-2">
                            <i class="text-white small fa-solid fa-chevron-right"></i>
                        </span>
                        <li class="breadcrumb-item page-active">
                            Edit Address
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="py-3">
                <h1 class=" fs-3 fw-lighter text-light">Edit Your Addresses</h1>
            </div>
            <div class="py-2 px-2">
                <form action="" class="form-box" method="POST">
                <?php if ($singleAddress > 0) {
                    foreach ($singleAddress as $display) { ?>
                    <div class="w-50">
                        <div class="py-2">
                            <label for="" class="text-white">Full name (first name and surname)</label>
                            <input name="name" type="text" class="formInput py-2" id="name" value="<?php echo $display["FullName"] ?>" required autofocus>
                        </div>
                        <div class="py-2">
                            <label for="phone" class="text-white">Phone number</label>
                            <input name="phone" type="text" class="formInput" id="phone" value="<?php echo $display["Phone"] ?>" placeholder="Your 10 or 9 digit Phone number" required autofocus>
                        </div>
                        <div class="py-2">
                            <label for="" class="text-white">Apartment or House Number</label>
                            <input name="house" type="text" class="formInput" id="house" value="<?php echo $display["ApartmentHouseNumber"] ?>" placeholder="Enter your Apartment or House Number" required autofocus>
                        </div>
                        <div class="py-2">
                            <label for="" class="text-white">Address</label>
                            <input name="address" type="text" class="formInput" id="address" value="<?php echo $display["Address"] ?>" placeholder="Enter your Address here" required autofocus>
                        </div>
                        <div class="py-2">
                            <label for="" class="text-white">Postcode</label>
                            <input name="postcode" type="text" class="formInput" id="postcode" value="<?php echo $display["PostCode"] ?>" placeholder="Enter your area Postcode" required autofocus>
                        </div>
                        <div class="py-2">
                            <label for="" class="text-white">Town/City</label>
                            <input name="city" type="text" class="formInput" id="city" value="<?php echo $display["City"] ?>" placeholder="Enter your Town/City" required autofocus>
                        </div>
                        <div class="py-2">
                            <label for="" class="text-white">Country</label>
                            <input name="country" type="text" class="formInput" id="country" value="<?php echo $display["Country"] ?>" placeholder="Enter your Country" required autofocus>
                        </div>
                        <div class="my-3">
                            <button class="btn w-25 editAddressBtn" name="submit" type="submit">Edit address</button>
                        </div>
                    </div>
                <?php }
                        }?>
                </form>
            </div>
    </section>
    <!-- Footer - Section -->
    <footer class="footer-container bg-light">
        <?php require("../app/View/layout/footer.php") ?>
    </footer>
</body>
</html>