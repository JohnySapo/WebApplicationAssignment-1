<?php 
    require("../app/Model/Cleaner.php");
    require("../app/Model/Credential.php");
    require("../app/Model/Database.php");

    class login {
        private $cleaner;
        private $credential;
        private $database;
        private $errorMessage;
        const NO_ROWS_FOUND = -1;
    
        public function __construct() {
            $this -> cleaner = new Cleaner();
            $this -> credential = new Credential();
            $this -> database = new Database();
        }

        public function setErrorMessage($error) {$this -> errorMessage = $error;}
        public function getErrorMessage() {return $this -> errorMessage;}
        
        public function login($login){
            if(isset($_POST[$login])) {
                if(!empty($_POST['email']) && !empty($_POST['password'])) {

                    $this -> credential -> setEmail(
                        $this -> cleaner -> cleanData($_POST['email'])
                    );
                    $this -> credential -> setPassword(
                        $this -> cleaner -> cleanData($_POST['password'])
                    );
 
                    $email = $this -> credential -> getEmail();
                    $password = $this -> credential -> getPassword();
                    
                    $sql = "SELECT FirstName, Password FROM USERS WHERE PrimaryEmail = :email";
                    $parameters = [':email' => $email];
                    $result = $this -> database -> Select($sql, $parameters);

                    if($result === self::NO_ROWS_FOUND) {
                        $this -> setErrorMessage("Account has not been registered!");
                    } else {
                        $hashed_password = $result[0]['Password'];
                        
                        if(!password_verify($password,$hashed_password)) {
                            $this -> setErrorMessage("Email or Password Invalid!");
                        } else {
                            $_SESSION['FirstName'] = $result[0]["FirstName"];
                            header("location:index.php");
                            exit;
                        }
                    }
                } else {
                    $this -> setErrorMessage("Email or Password is empty!");
                }
            }
        }
    }
?>