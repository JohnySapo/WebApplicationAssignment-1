<?php 
    require("User.php");
    
    class Credential extends User{
        private $userID;        
        private $email;
        private $password;
        private $confPassword;
        private User $user; 

        public function __construct($cUserID = '', $cEmail = '', $cPassword = '', $cConfPassword = '') {
            $this->userID = $cUserID;
            if(filter_var($cEmail, FILTER_VALIDATE_EMAIL) === false) {
                
            } elseif($cEmail == null) {
               
            } else {
                $this->email = $cEmail;
            }
            $this->password = $cPassword;
            $this->confPassword = $cConfPassword;
        }

        public function getUserID() {return $this->userID;}
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