<!-- 
<<<<<<< HEAD
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php
    class Address{
        private $addressID;
        private $fullName;
        private $phone;
        private $address;
        private $country;
        private $city;
        private $apartmentHouseNumber;
        private $postCode;

        public function __construct($cID='', $cfullName='', $cphone='',$cAddress='', $cCountry='', $cCity='', $cAptHouseNumber='', $cPostCode=''){
            $this->addressID = $cID;
            $this->fullName = $cfullName;
            $this->phone = $cphone;
            $this->address = $cAddress;
            $this->country = $cCountry;
            $this->city = $cCity;
            $this->apartmentHouseNumber = $cAptHouseNumber;
            $this->postCode = $cPostCode;
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
            $this->addressID = $setID;
        }
        public function setFullName($fullName){
            $this->fullName = $fullName;
        }
        public function setPhone($phone){
            $this->phone = $phone;
        }
        public function setAddress($setAddress){
            $this->address = $setAddress;
        }
        public function setCountry($setCountry){
            $this->country = $setCountry;
        }
        public function setCity($setCity){
            $this->city = $setCity;
        }
        public function setApartmentHouseNumber($setAptHouseNumber){
            $this->apartmentHouseNumber = $setAptHouseNumber;
        }
        public function setPostCode($setPostCode){
            $this->postCode = $setPostCode;
        }
    }
?>
=======
-- Student Name: Johny Ramos
-- Course: T054 - Computer System Management
-- Module: Web Application
-- Lecturer: Robert Smith
-->

<?php
class Address {
    private $addressID;
    private $address;
    private $country;
    private $city;
    private $apartmentNumber;
    private $postCode;

    public function __construct($cID, $cAddress, $cCountry, $cCity, $cAptNumber, $cPostCode){
        $this->addressID = $cID;
        $this->address = $cAddress;
        $this->country = $cCountry;
        $this->city = $cCity;
        $this->apartmentNumber = $cAptNumber;
        $this->postCode = $cAptNumber;
    }

    public function getAddressID() {return $this->addressID;}
    public function getAddress() {return $this->address;}
    public function getCountry() {return $this->country;}
    public function getCity() {return $this->city;}
    public function getApartmentNumber() {return $this->apartmentNumber;}
    public function getPostCode() {return $this->postCode;}

    public function setAddressID($setID){
        $this->addressID = $setID;
    }
    public function setAddress($setAddress){
        $this->address = $setAddress;
    }
    public function setCountry($setCountry){
        $this->country = $setCountry;
    }
    public function setCity($setCity){
        $this->city = $setCity;
    }
    public function setApartmentNumber($setAptNumber){
        $this->apartmentNumber = $setAptNumber;
    }
    public function setPostCode($setPostCode){
        $this->postCode = $setPostCode;
    }
}
>>>>>>> f354be1a675ec2e2bf51ee30f8998d6f377f9942
