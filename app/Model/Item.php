<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php 

    require("Cleaner.php");
    class Item {
        private $id;
        private $name;
        private $description;
        private $price;
        private $image;
        private $type;
        private $quantity;
        private $cleaner;

        function __construct($cID="", $cName="", $cDescription="", $cPrice="", $cImage="", $cType="", $cQuantity="") {
            $this -> cleaner = new Cleaner();

            $this-> id = $this -> cleaner -> cleanData($cID);
            $this-> name = $this -> cleaner -> cleanData($cName);
            $this-> description = $this -> cleaner -> cleanData($cDescription);
            $this-> price = $this -> cleaner -> cleanData($cPrice);
            $this-> image = $this -> cleaner -> cleanData($cImage);
            $this-> type = $this -> cleaner -> cleanData($cType);
            $this-> quantity = $this -> cleaner -> cleanData($cQuantity);
        }
 
        public function getItemID() {return $this-> id;} 
        public function getItemName() {return $this-> name;} 
        public function getItemDescription(){return $this-> description;}
        public function getItemPrice(){return $this-> price;}
        public function getItemImage(){return $this-> image;}
        public function getItemType(){return $this-> type;}
        public function getItemQuantity(){return $this-> quantity;}

        public function setItemID($itemID){$this -> id = $this -> cleaner -> cleanData($itemID);}
        public function setItemName($itemName){$this -> name = $this -> cleaner -> cleanData($itemName);}
        public function setItemDescription($itemDescription){$this -> description = $this -> cleaner -> cleanData($itemDescription);}
        public function setItemPrice($itemPrice){$this -> price = $this -> cleaner -> cleanData($itemPrice);}
        public function setItemImage($itemImage){$this -> image = $this -> cleaner -> cleanData($itemImage);}
        public function setItemType($itemType){$this -> type = $this -> cleaner -> cleanData($itemType);}
        public function setItemQuantity($itemQuantity){$this -> quantity = $this -> cleaner -> cleanData($itemQuantity);}
    }
?>