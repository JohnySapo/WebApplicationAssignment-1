<!-- 
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php
    require("../app/Model/Address.php");
    require("../app/Model/Credential.php");
    require("../app/Model/Database.php");

    class AddressManage {
        private $userID;
        private $address;
        private $database;
        const NO_ROWS_FOUND = -1;

        public function __construct() {
            $this -> userID = $_SESSION['UserID'];
            $this -> address = new Address();
            $this -> database = new Database();
        }

        public function singleAddress($singleAddress) {
            if(isset($_GET[$singleAddress])) {
                $this -> address -> setAddressID($_GET['id']);

                $sql = 'SELECT * FROM ADDRESSES WHERE ADDRESSID = :ID;';
                $parameters = [':ID' => $this -> address -> getAddressID()];
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

                $this -> address -> setFullName($_POST['name']);
                $this -> address -> setPhone($_POST['phone']);
                $this -> address -> setApartmentHouseNumber($_POST['house']);
                $this -> address -> setAddress($_POST['address']);
                $this -> address -> setPostCode($_POST['postcode']);
                $this -> address -> setCity($_POST['city']);
                $this -> address -> setCountry($_POST['country']);

                $new_reg = array(
                    "FullName"              => $this -> address -> getFullName(),
                    "Phone"                 => $this -> address -> getPhone(),
                    "Address"               => $this -> address -> getAddress(),
                    "Country"               => $this -> address -> getCountry(),
                    "City"                  => $this -> address -> getCity(),
                    "ApartmentHouseNumber"  => $this -> address -> getApartmentHouseNumber(),
                    "PostCode"              => $this -> address -> getPostCode(),
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

                $this -> address -> setAddressID($_GET['id']);
                $this -> address -> setFullName($_POST['name']);
                $this -> address -> setPhone($_POST['phone']);
                $this -> address -> setApartmentHouseNumber($_POST['house']);
                $this -> address -> setAddress($$_POST['address']);
                $this -> address -> setPostCode($_POST['postcode']);
                $this -> address -> setCity($_POST['city']);
                $this -> address -> setCountry($_POST['country']);

                $new_reg = [
                    "FullName"              => $this -> address -> getFullName(),
                    "Phone"                 => $this -> address -> getPhone(),
                    "Address"               => $this -> address -> getAddress(),
                    "Country"               => $this -> address -> getCountry(),
                    "City"                  => $this -> address -> getCity(),
                    "ApartmentHouseNumber"  => $this -> address -> getApartmentHouseNumber(),
                    "PostCode"              => $this -> address -> getPostCode(),
                    "AddressID"             => $this -> address -> getAddressID(),
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

        public function removeAddress() {
            if(isset($_GET['ID'])) {
                
                $this -> address -> setAddressID($_GET['ID']);

                $sql = 'DELETE FROM ADDRESSES WHERE ADDRESSID = :ID;';
                $parameters = [':ID' => $this -> address -> getAddressID()];

                $result = $this->database->Remove($sql, $parameters);

                if($result) {
                    return $result;
                }
            }
        }
    }
?>