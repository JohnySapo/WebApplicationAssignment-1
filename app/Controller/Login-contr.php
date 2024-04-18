<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

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
                    
                    $sql = "SELECT * FROM USERS WHERE PrimaryEmail = :email";
                    $parameters = [':email' => $email];
                    $result = $this -> database -> Select($sql, $parameters);

                    if($result === self::NO_ROWS_FOUND) {
                        $this -> setErrorMessage("Account has not been registered!");
                    } else {
                        $row = $result[0];
                        $hashed_password = $row['Password'];
                        
                        if(!password_verify($password,$hashed_password)) {
                            $this -> setErrorMessage("Email or Password Invalid!");
                        } else {

                            $_SESSION["Active"] = true;
                            $_SESSION['UserID']       = $row["UserID"];
                            $_SESSION['PrimaryEmail'] = $row["PrimaryEmail"];
                            $_SESSION['FirstName']    = $row["FirstName"];
                            $_SESSION['LastName']     = $row["LastName"];
                            $_SESSION['DateOfBirth']  = $row["DateOfBirth"];

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