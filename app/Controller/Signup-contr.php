
<?php 
    require("../app/Model/Cleaner.php");
    require("../app/Model/Credential.php");
    require("../app/Model/Database.php");
    
    class Signup {
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

        public function passwordHash($password) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            return $hashed_password;
        }

        public function signup($signup){
            if (isset($_POST[$signup])) {
                if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['password']) &&!empty($_POST['confPassword'])) {
    
                    $this -> credential -> setEmail($this -> cleaner -> cleanData($_POST['email']));
                    $this -> credential -> setPassword($this -> cleaner -> cleanData($_POST['password']));
                    $this -> credential -> setConfPassword($this -> cleaner -> cleanData($_POST['confPassword']));
                    $this -> credential -> setFirstName($this -> cleaner -> cleanData($_POST['firstName']));
                    $this -> credential -> setLastName($this -> cleaner -> cleanData($_POST['lastName']));
    
                    $email = $this -> credential -> getEmail();
                    $password = $this -> passwordHash($this -> credential -> getPassword()); 
                    $firstName = $this -> credential -> getFirstName();
                    $lastName = $this -> credential -> getLastName();
                    $dateOfBirth = $this -> credential -> getDateOfBirth();

                    // Check if email already exists
                    $sqlCheck = "SELECT COUNT(*) AS count FROM users WHERE PrimaryEmail = :email";
                    $parametersCheck = [':email' => $email];
                    $resultCheck = $this -> database -> Select($sqlCheck, $parametersCheck);

                    if ($resultCheck[0]["count"] > 0) {
                        $this -> setErrorMessage("Email already registered!");
                    } else {
                        $new_reg = array(
                            "PrimaryEmail"      => $email,
                            "SecondaryEmail"    => "",
                            "Password"          => $password,
                            "FirstName"         => $firstName,
                            "LastName"          => $lastName,
                            "DateOfBirth"       => $dateOfBirth,
                        );

                        $sql = sprintf( "INSERT INTO %s (%s) VALUES (%s)", "users",
                        implode(", ", array_keys($new_reg)), ":" . implode(", :", array_keys($new_reg)));
                        $result = $this -> database -> Insert($sql, $new_reg);

                        $sql = "SELECT FirstName FROM USERS WHERE PrimaryEmail = :email";
                        $parameters = [':email' => $email];
                        $result = $this -> database -> Select($sql, $parameters);
                        
                        $_SESSION['FirstName'] = $result[0]["FirstName"];
                        header("location:index.php");
                        exit;
                    }
                } else {
                    $this -> setErrorMessage("All fields must be populated!");
                }
            }
        }
    }
?>