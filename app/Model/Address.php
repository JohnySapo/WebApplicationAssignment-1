<!-- 
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
