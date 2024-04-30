<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php
    require("Cleaner.php");
    class Address{
        private $addressID;
        private $fullName;
        private $phone;
        private $address;
        private $country;
        private $city;
        private $apartmentHouseNumber;
        private $postCode;
        private $cleaner;

        public function __construct($cID='', $cfullName='', $cphone='',$cAddress='', $cCountry='', $cCity='', $cAptHouseNumber='', $cPostCode=''){
            $this->cleaner = new Cleaner();
            $this->addressID = $this -> cleaner -> cleanData($cID);
            $this->fullName = $this -> cleaner -> cleanData($cfullName);
            $this->phone = $this -> cleaner -> cleanData($cphone);
            $this->address = $this -> cleaner -> cleanData($cAddress);
            $this->country = $this -> cleaner -> cleanData($cCountry);
            $this->city = $this -> cleaner -> cleanData($cCity);
            $this->apartmentHouseNumber = $this -> cleaner -> cleanData($cAptHouseNumber);
            $this->postCode = $this -> cleaner -> cleanData($cPostCode);
        }

        public function getAddressID() {return $this->addressID;}
        public function getFullName() {return $this->fullName;}
        public function getPhone() {return $this->phone;}
        public function getAddress() {return $this->address;}
        public function getCountry() {return $this->country;}
        public function getCity() {return $this->city;}
        public function getApartmentHouseNumber() {return $this->apartmentHouseNumber;}
        public function getPostCode() {return $this->postCode;}

        public function setAddressID($setID){
            $this->addressID = $this -> cleaner -> cleanData($setID);
        }
        public function setFullName($fullName){
            $this->fullName = $this -> cleaner -> cleanData($fullName);
        }
        public function setPhone($phone){
            $this->phone = $this -> cleaner -> cleanData($phone);
        }
        public function setAddress($setAddress){
            $this->address = $this -> cleaner -> cleanData($setAddress);
        }
        public function setCountry($setCountry){
            $this->country = $this -> cleaner -> cleanData($setCountry);
        }
        public function setCity($setCity){
            $this->city = $this -> cleaner -> cleanData($setCity);
        }
        public function setApartmentHouseNumber($setAptHouseNumber){
            $this->apartmentHouseNumber = $this -> cleaner -> cleanData($setAptHouseNumber);
        }
        public function setPostCode($setPostCode){
            $this->postCode = $this -> cleaner -> cleanData($setPostCode);
        }
    }
?>