<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php
    require("../app/Model/Cleaner.php");
    require("../app/Model/Address.php");
    require("../app/Model/Credential.php");
    require("../app/Model/Database.php");

    class AddressManage {
        private $userID;
        private $cleaner;
        private $address;
        private $database;
        const NO_ROWS_FOUND = -1;

        public function __construct() {
            $this -> userID = $_SESSION['UserID'];
            $this -> cleaner = new Cleaner();
            $this -> address = new Address();
            $this -> database = new Database();
        }

        public function singleAddress($singleAddress) {
            if(isset($_GET[$singleAddress])) {
                $id = $_GET['id'];

                $sql = 'SELECT * FROM ADDRESSES WHERE ADDRESSID = :ID;';
                $parameters = [':ID' => $id];
                $result = $this -> database -> Select($sql, $parameters);

                return $result;
            }
        }

        public function addressDisplay() {

            $sql = 'SELECT * FROM ADDRESSES WHERE USERID = :USER;';
            $parameters = [':USER' => $this -> userID];
            $result = $this -> database -> Select($sql, $parameters);

            return $result;
        }

        public function addNewAddress($newAddress) {

            if(isset($_POST[$newAddress])) {

                $this -> address -> setFullName($this -> cleaner -> cleanData($_POST['name']));
                $this -> address -> setPhone($this -> cleaner -> cleanData($_POST['phone']));
                $this -> address -> setApartmentHouseNumber($this -> cleaner -> cleanData($_POST['house']));
                $this -> address -> setAddress($this -> cleaner -> cleanData($_POST['address']));
                $this -> address -> setPostCode($this -> cleaner -> cleanData($_POST['postcode']));
                $this -> address -> setCity($this -> cleaner -> cleanData($_POST['city']));
                $this -> address -> setCountry($this -> cleaner -> cleanData($_POST['country']));

                $name = $this -> address -> getFullName();
                $phone = $this -> address -> getPhone();
                $aptHouseNumber = $this -> address -> getApartmentHouseNumber();
                $addressText = $this -> address -> getAddress();
                $postcode = $this -> address -> getPostCode();
                $city = $this -> address -> getCity();
                $country = $this -> address -> getCountry();

                $new_reg = array(
                    "FullName"              => $name,
                    "Phone"                 => $phone,
                    "Address"               => $addressText,
                    "Country"               => $country,
                    "City"                  => $city,
                    "ApartmentHouseNumber"  => $aptHouseNumber,
                    "PostCode"              => $postcode,
                    "UserID"                => $this -> userID,
                );

                $sql = sprintf( "INSERT INTO %s (%s) VALUES (%s)", "addresses",
                implode(", ", array_keys($new_reg)), ":" . implode(", :", array_keys($new_reg)));
                $result = $this -> database -> Insert($sql, $new_reg);

                if($result > 0) {
                    header("location:addresses.php");
                    exit;
                } else {
                    echo "Error";
                }
            }
        }

        public function editAddress($editAddress) {
            if(isset($_POST[$editAddress])) {

                $this -> address -> setFullName($this -> cleaner -> cleanData($_POST['name']));
                $this -> address -> setPhone($this -> cleaner -> cleanData($_POST['phone']));
                $this -> address -> setApartmentHouseNumber($this -> cleaner -> cleanData($_POST['house']));
                $this -> address -> setAddress($this -> cleaner -> cleanData($_POST['address']));
                $this -> address -> setPostCode($this -> cleaner -> cleanData($_POST['postcode']));
                $this -> address -> setCity($this -> cleaner -> cleanData($_POST['city']));
                $this -> address -> setCountry($this -> cleaner -> cleanData($_POST['country']));

                $id = $_GET['id'];
                $name = $this -> address -> getFullName();
                $phone = $this -> address -> getPhone();
                $aptHouseNumber = $this -> address -> getApartmentHouseNumber();
                $addressText = $this -> address -> getAddress();
                $postcode = $this -> address -> getPostCode();
                $city = $this -> address -> getCity();
                $country = $this -> address -> getCountry();

                $new_reg = [
                    "FullName"              => $name,
                    "Phone"                 => $phone,
                    "Address"               => $addressText,
                    "Country"               => $country,
                    "City"                  => $city,
                    "ApartmentHouseNumber"  => $aptHouseNumber,
                    "PostCode"              => $postcode,
                    "AddressID"             => $id,
                ];
                
                $sql = "UPDATE addresses SET
                    FullName = :FullName,
                    Phone = :Phone,
                    Address = :Address,
                    Country = :Country,
                    City = :City,
                    ApartmentHouseNumber = :ApartmentHouseNumber,
                    PostCode = :PostCode
                    WHERE ADDRESSID = :AddressID";

                $result = $this->database->Update($sql, $new_reg);

                if($result) {
                    header("location:addresses.php");
                    exit;
                }
            }
        }

        public function modalAddress($modalAddress) {
            $sql = 'SELECT * FROM ADDRESSES WHERE ADDRESSID = :id;';
            $parameters = [':id' => $modalAddress];
            $result = $this -> database -> Select($sql, $parameters);
        }

        public function removeAddress() {
            if(isset($_GET['id'])) {
                
                $id = $_GET['id'];

                $sql = 'DELETE FROM ADDRESSES WHERE ADDRESSID = :id;';
                $parameters = [':id' => $id];

                $result = $this->database->Remove($sql, $parameters);

                if($result) {
                    return $result;
                }
            }
        }
    }
?>