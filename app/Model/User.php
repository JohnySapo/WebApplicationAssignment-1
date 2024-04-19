<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php
    class User {
        private $userID;
        private $firstName;
        private $lastName;
        private $dateOfBirth;

        public function __construct($cUserID='',$cFirstName='', $cLastName='', $cDateOfBirth='', $cEmail='', $cSecondEmail='', $cPassword='', $cPasswordSalt='') {
            $this->userID = $cUserID;
            if($cFirstName == null) {
                $this->firstName = "";
            } else {
                $this->firstName = $cFirstName;
            }
            if($cLastName == null) {
                $this->lastName = "";
            } else {
                $this->lastName = $cLastName;
            }
            if($cDateOfBirth == null) {
                $this->dateOfBirth = "1999-1-1";
            } else {
                $this->dateOfBirth = $cDateOfBirth;
            }
        }

        public function getUserID() {return $this->userID;}
        public function getFirstName() {return $this->firstName;}
        public function getLastName() {return $this->lastName;}
        public function getDateOfBirth() {return $this->dateOfBirth;}

        public function setUserID($setUserID){
            $this->firstName = $setUserID;
        }
        public function setFirstName($setFirstName){
            if($setFirstName == null) {
                $this->firstName = "";
            } else {
                $this->firstName = $setFirstName;
            }
        }
        public function setLastName($setLastName){
            if($setLastName == null) {
                $this->lastName = "";
            } else {
                $this->lastName = $setLastName;
            }
        }
        public function setDateOfBirth($setDateOfBirth){
            if($setDateOfBirth == null) {
                $this->dateOfBirth = "1999-1-1";
            } else {
                $this->dateOfBirth = $setDateOfBirth;
            }
        }
    }
?>