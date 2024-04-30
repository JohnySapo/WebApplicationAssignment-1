<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php 
    
    class Credential{      
        private $email;
        private $password;
        private $confPassword;
        private $cleaner;

        public function __construct($cEmail = '', $cPassword = '', $cConfPassword = '') {
            $this->cleaner = new Cleaner();
            $this->email = $this -> cleaner -> cleanData($cEmail);
            $this->password = $this -> cleaner -> cleanData($cPassword);
            $this->confPassword = $this -> cleaner -> cleanData($cConfPassword);
        }

        public function getEmail() {return $this->email;}
        public function getPassword() {return $this->password;}
        public function getConfPassword() {return $this->confPassword;}

        public function setEmail($setEmail){
            if(filter_var($setEmail, FILTER_VALIDATE_EMAIL) === false) {
                echo 'Invalid email format!';
            } else {
                $this->email = $this -> cleaner -> cleanData($setEmail);
            }
        }
        public function setPassword($setPassword){
            $this->password = $this -> cleaner -> cleanData($setPassword);
        }
        public function setConfPassword($setConfPassword){
            $this->confPassword = $this -> cleaner -> cleanData($setConfPassword);
        }
    }
?>