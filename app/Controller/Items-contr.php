<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php
    require("../app/Model/Database.php");
    require("../app/Model/Item.php");

    class Items {
        private $item;
        private $database;
        const NO_ROWS_FOUND = -1;

        public function __construct(){
            $this-> item = new Item();
            $this->database = new Database();
        }

        function starsHtml($stars){
            $htmlTag = "";

            for($i = 0; $i < $stars; $i++) {
                $htmlTag .= '<i class="fa-solid fa-star text-warning"></i>';
            }

            return $htmlTag;
        }

        function randomNumbers($size) {
            $randomNumbers = array();

            for ($i = 0; $i < $size; $i++) {
                $randomNumber = mt_rand(1, 2000);
                $randomNumbers[] = $randomNumber;
            }

            foreach ($randomNumbers as $number) {
                return $number;
            }
        }

        public function getSection($sectionGet) {
            $section = "Accessories";
            if (isset($_GET[$sectionGet])) {
                $section = $_GET[$sectionGet];
        
                $allowedSections = array("Him", "Her", "Kid", "Accessories");
                if (!in_array($section, $allowedSections)) {
                    return $section = "Accessories";
                }
                return $section;
            }
        }

        public function getItemsByType($type) {
        
            $sql = "SELECT * FROM ITEMS WHERE ITEMTYPE = :TYPE";
            $parameters = [':TYPE' => $type];
            $result = $this->database->Select($sql, $parameters);
        
            return $result;
        }

        public function getItemsByID($id) {
        
            $sql = "SELECT * FROM ITEMS WHERE ITEMID = :ID";
            $parameters = [':ID' => $id];
            $result = $this->database->Select($sql, $parameters);
        
            return $result;
        }

        public function increaseQuantity($itemID, &$cart) {
            foreach ($cart as &$item) {
                if ($item['itemID'] === $itemID) {
                    $item['itemQuantity']++;
                    $_SESSION["totalPrice"] = $this->calculateTotal($cart);
                    return $item['itemQuantity'];
                }
            }
            return 1;
        }

        public function decreaseQuantity($itemID, &$cart) {
            foreach ($cart as &$item) {
                if ($item['itemID'] === $itemID) {
                    if ($item['itemQuantity'] > 1) {
                        $item['itemQuantity']--;
                    }
                    // Recalculate total price
                    $_SESSION["totalPrice"] = $this->calculateTotal($cart);
                    return $item['itemQuantity'];
                }
            }
        }

        public function calculateTotal($cart) {
            $total = 0;
            foreach ($cart as $value) {
                $total += $value["itemPrice"] * $value["itemQuantity"];
            }
            return $total;
        }

        

        public function addShoppingCart($getItem) {
            if(isset($_POST[$getItem])) {
                $section = $_POST["section"];
                $this -> item -> setItemID($_POST[$getItem]);
                $this -> item -> setItemName($_POST["itemName"]);
                $this -> item -> setItemDescription($_POST["itemDescription"]);
                $this -> item -> setItemImage($_POST["itemImage"]);
                $this -> item -> setItemType($_POST["itemType"]);
                $this -> item -> setItemPrice($_POST["itemPrice"]);
                $this -> item -> setItemQuantity(1);

                if (isset($_SESSION["cart"]) && is_array($_SESSION["cart"])) {
            
                    $itemExists = false;
                    $name = $this->item->getItemName();
            
                    foreach ($_SESSION["cart"] as $item) {
                        if ($item["itemID"] == $this -> item -> getItemID()) {
                            $itemExists = true;
                            break;
                        }
                    }

                    if ($itemExists) {
                        echo 
                        "<script> alert('Item $name Already Added to Cart List');
                        window.location.href='../public/storedashboard.php?".$section."';</script>";
                        exit;
                    }
            
                    $count = count($_SESSION["cart"]);
                    $_SESSION["cart"][$count] = array(
                        "itemID"            => $this -> item -> getItemID(),
                        "itemName"          => $this -> item -> getItemName(),
                        "itemDescription"   => $this -> item -> getItemDescription(),
                        "itemImage"         => $this -> item -> getItemImage(),
                        "itemType"          => $this -> item -> getItemType(),
                        "itemPrice"         => $this -> item -> getItemPrice(),
                        "itemQuantity"      => $this -> item -> getItemQuantity(),
                        "totalPrice"        => $this -> item -> getItemQuantity() * $this -> item -> getItemPrice(),
                    );
                    
                    echo 
                    "<script>alert('Item $name Added to Cart List');
                    window.location.href='../public/storedashboard.php?".$section."';</script>";
                    exit;
                } else {
                    $_SESSION["cart"] = array();
                }
            }
        }

        public function deleteFromShoppingCart($deleteItem) {
            if (isset($_GET[$deleteItem])) {
                $this -> item -> setItemID($_GET[$deleteItem]);
            
                if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
                    foreach ($_SESSION["cart"] as $key => $item) {
                        if ($item["itemID"] == $this -> item -> getItemID()) {
                            unset($_SESSION["cart"][$key]);
                            break;
                        }
                    }
                }
            
                header("Location: ../public/cart.php");
                exit;
            }
        }

        public function addShoppingWish($getItem) {
            if(isset($_POST[$getItem])) {
                $section = $_POST["section"];
                $this -> item -> setItemID($_POST[$getItem]);
                $this -> item -> setItemName($_POST["itemName"]);
                $this -> item -> setItemDescription($_POST["itemDescription"]);
                $this -> item -> setItemImage($_POST["itemImage"]);
                $this -> item -> setItemType($_POST["itemType"]);
                $this -> item -> setItemPrice($_POST["itemPrice"]);
                $this -> item -> setItemQuantity(1);

                if (isset($_SESSION["wish"]) && is_array($_SESSION["wish"])) {
            
                    $itemExists = false;
            
                    foreach ($_SESSION["wish"] as $item) {
                        if ($item["itemID"] == $this -> item -> getItemID()) {
                            $itemExists = true;
                            break;
                        }
                    }
                    
                    $name = $this->item->getItemName();

                    if ($itemExists) {
                        echo 
                        "<script> alert('Item $name Already Added to Wish List');
                        window.location.href='../public/storedashboard.php?".$section."';</script>";
                        exit;
                    }
            
                    $count = count($_SESSION["wish"]);
                    $_SESSION["wish"][$count] = array(
                        "itemID"            => $this -> item -> getItemID(),
                        "itemName"          => $this -> item -> getItemName(),
                        "itemDescription"   => $this -> item -> getItemDescription(),
                        "itemImage"         => $this -> item -> getItemImage(),
                        "itemType"          => $this -> item -> getItemType(),
                        "itemPrice"         => $this -> item -> getItemPrice(),
                        "itemQuantity"      => $this -> item -> getItemQuantity(),
                    );

                    echo 
                    "<script>alert('Item $name Added to Wish List');
                    window.location.href='../public/storedashboard.php?".$section."';</script>";
                    exit;

                } else {
                    $_SESSION["wish"] = array();
                }
            }
        }

        public function deleteFromShoppingWish($deleteItem) {
            if (isset($_GET[$deleteItem])) {
                $this -> item -> setItemID($_GET[$deleteItem]);
            
                if(isset($_SESSION["wish"]) && !empty($_SESSION["wish"])) {
                    foreach ($_SESSION["wish"] as $key => $item) {
                        if ($item["itemID"] == $this -> item -> getItemID()) {
                            unset($_SESSION["wish"][$key]);
                            break;
                        }
                    }
                }
            
                header("Location: wish.php");
                exit;
            }
        }
    }
?>