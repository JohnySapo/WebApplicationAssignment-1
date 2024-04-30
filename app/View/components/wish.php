<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php
    require("../app/View/layout/headerActive.php");
    require("../app/Controller/Items-contr.php");
    $items = new Items();
    $items->addShoppingWish("addToWish");
    $items->deleteFromShoppingWish("deleteItemWish");

    if (isset($_POST["add"])) {
        $itemID = $_POST["itemID"];
        $items->increaseQuantity($itemID, $_SESSION["wish"]);
    }
    if (isset($_POST["sub"])) {
        $itemID = $_POST["itemID"];
        $items->decreaseQuantity($itemID, $_SESSION["wish"]);
    }

    if (!empty($_SESSION["wish"])) {
        $_SESSION["totalPrice"] = $items->calculateTotal($_SESSION["wish"]);
    } else {
        $_SESSION["totalPrice"] = 00.00;
    }
?>

<title>Wish</title>
</head>

<body class="bg-dark">
    <?php require("../app/View/layout/navbarstick.php"); ?>
    <div class="container">
        <section class="pt-2 mx-2">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h3"><span class="fs-2 fw-lighter text-white">Shopping Wish List</span></h1>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="row g-0 gap-0">
                        <?php if (isset($_SESSION["wish"]) && $_SESSION["wish"] != null) {
                            foreach ($_SESSION["wish"] as $key => $value) { ?>
                                <div class="card col-12 border-0 shadow-lg mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <img src="/public/images/clothes/<?php echo $value["itemType"]; ?>/<?php echo $value["itemImage"]; ?>" class="img-fluid rounded-start" style="width:200px; height: 205px;" alt="<?php echo $value["itemImage"]; ?>">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body position-relative h-100">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <h5 class="" style="font-size: 30px;"><?php echo $value["itemName"] ?></h5>
                                                        <p class="card-text"><?php echo $value["itemDescription"]; ?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-end align-items-center">
                                                        <div class="p-1 rounded-1 border border-success">
                                                            <p class=" fs-5 fw-lighter text-black card-text">&euro; <?php echo $value["itemPrice"]; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hstack gap-3 bottom-0 position-absolute bottom-0 start-0 ms-2 mb-2">
                                                    <div class="ms-2">
                                                        <form class="hstack small gap-1" method="POST">
                                                            <input type="hidden" name="itemID" value="<?php echo $value["itemID"]; ?>">
                                                            <input class="bg-light text-dark border rounded-1 shadow-lg" type="submit" name="add" value="+1" style="width: 50px;">
                                                            <input class="text-center text-dark small rounded-3 border-1 border-info bg-white" value="<?php echo $value["itemQuantity"]; ?>" style="width: 60px;">
                                                            <input class="bg-light text-dark border rounded-1 shadow-lg" type="submit" name="sub" value="-1" style="width: 50px;">
                                                        </form>
                                                    </div>
                                                    <form action="/public/wish.php" class="small border-start" method="GET">
                                                        <button name="deleteItemWish" value="<?php echo $value["itemID"] ?>" class="btn small bottom-0">Remove</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        } else { ?>
                            <div class="col-12 py-5">
                                <h1 class=" fs-1 fw-light text-light">Your Shopping Wish List is empty.</h1>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-12 border rounded-2 bg-light">
                            <div class="card bg-dark shadow text-center text-white my-3">
                                <div class="row py-5">
                                    <div class="col-6">
                                        <h1 class="fs-6">Subtotal : </h1>
                                    </div>
                                    <div id="total_price" class="col-6">
                                        <h1 class="fs-6">&euro; <?php echo $_SESSION["totalPrice"]; ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>