<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php 
    require("User.php");
    
    class Credential extends User{      
        private $email;
        private $password;
        private $confPassword;

        public function __construct($cEmail = '', $cPassword = '', $cConfPassword = '') {
            if(filter_var($cEmail, FILTER_VALIDATE_EMAIL) === false) {
                
            } elseif($cEmail == null) {
               
            } else {
                $this->email = $cEmail;
            }
            $this->password = $cPassword;
            $this->confPassword = $cConfPassword;
        }

        public function getEmail() {return $this->email;}
        public function getPassword() {return $this->password;}
        public function getConfPassword() {return $this->confPassword;}

        public function setEmail($setEmail){
            if(filter_var($setEmail, FILTER_VALIDATE_EMAIL) === false) {
                echo 'Invalid email format!';
            } else {
                $this->email = $setEmail;
            }
        }
        public function setPassword($setPassword){
            $this->password = $setPassword;
        }
        public function setConfPassword($setConfPassword){
            $this->confPassword = $setConfPassword;
        }
    }
?>