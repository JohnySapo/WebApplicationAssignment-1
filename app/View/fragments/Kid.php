<?php
require("../app/Controller/Items-contr.php");

$items = new Items();
$product = $items->getItemsByType("Kid");
$randomNumber = mt_rand(1, 2000);

$section = "section=Kid";
?>

<div class="row g-0 gap-2">
    <?php if ($product > 0) {
        foreach ($product as $item) { ?>
            <div class="col-lg-2 col-12 shadow-lg" style="width: 19rem;">
                <div class="" class="card rounded-0 border-0">
                    <img src="/public/images/clothes/<?php echo $item["itemType"] ?>/<?php echo $item["itemImage"] ?>" class=" card-img-top rounded-0" alt="<?php echo $item["itemImage"] ?>" style="width:100%px; height:300px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="fs-5 mt-3 fw-lighter text-center">
                                    <?php echo $item["itemName"]; ?>
                                </h1>
                                <p class="small ps-2 pt-3">
                                    <?php echo $item["itemDescription"] ?>
                                </p>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center my-2 mx-2">
                            <div class="col-10 small">
                                <?= $items->starsHtml($item["itemStars"]) ?>
                                (<?php echo $items->randomNumbers(1); ?>)
                            </div>
                            <div class="col-2">
                                <form action="wish.php" method="POST">
                                    <input type="hidden" name="itemName" value="<?php echo $item["itemName"]; ?>">
                                    <input type="hidden" name="itemDescription" value="<?php echo $item["itemDescription"]; ?>">
                                    <input type="hidden" name="itemImage" value="<?php echo $item["itemImage"]; ?>">
                                    <input type="hidden" name="itemType" value="<?php echo $item["itemType"]; ?>">
                                    <input type="hidden" name="itemPrice" value="<?php echo $item["itemPrice"]; ?>">
                                    <input type="hidden" name="section" value="<?php echo $section; ?>">
                                    <button type="submit" name="addToWish" value="<?php echo $item["itemID"]; ?>" class="btn heartHover">
                                        <i class="fa-regular fa-heart fs-4 heartIcon"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="row text-center d-flex justify-content-center align-items-center">
                            <div class="col-6 my-2">
                                <h5 class="fs-5 fw-lighter">&euro; <?php echo $item["itemPrice"] ?></h5>
                            </div>
                            <form action="cart.php" method="POST" class="">
                                <input type="hidden" name="itemName" value="<?php echo $item["itemName"]; ?>">
                                <input type="hidden" name="itemDescription" value="<?php echo $item["itemDescription"]; ?>">
                                <input type="hidden" name="itemImage" value="<?php echo $item["itemImage"]; ?>">
                                <input type="hidden" name="itemType" value="<?php echo $item["itemType"]; ?>">
                                <input type="hidden" name="itemPrice" value="<?php echo $item["itemPrice"]; ?>">
                                <input type="hidden" name="section" value="<?php echo $section; ?>">
                                <button type="submit" name="addToCart" value="<?php echo $item["itemID"]; ?>" class="my-2 btn btn-dark textOrange p-2 w-75 rounded-1">
                                    ADD TO CART
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <?php }
    } ?>
</div>