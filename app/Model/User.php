<?php
    class User {
        private $firstName;
        private $lastName;
        private $dateOfBirth;

        public function __construct($cFirstName, $cLastName, $cDateOfBirth, $cEmail, $cSecondEmail, $cPassword, $cPasswordSalt) {
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

        public function getFirstName() {return $this->firstName;}
        public function getLastName() {return $this->lastName;}
        public function getDateOfBirth() {return $this->dateOfBirth;}

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