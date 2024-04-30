<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php 
    require("../app/Model/Credential.php");
    require("../app/Model/User.php");
    require("../app/Model/Database.php");
    require("../app/Model/Cleaner.php");
    
    class Signup {
        private $user;
        private $credential;
        private $database;
        private $errorMessage;

        public function __construct() {
            $this -> user = new User();
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
    
                    $this -> credential -> setEmail($_POST['email']);
                    $this -> user -> setFirstName($_POST['firstName']);
                    $this -> user -> setLastName($_POST['lastName']);
                    $this -> credential -> setPassword($_POST['password']);
                    $this -> credential -> setConfPassword($_POST['confPassword']);
    
                    $email = $this -> credential -> getEmail();
                    $password = $this -> passwordHash($this -> credential -> getPassword()); 
                    $firstName = $this -> user -> getFirstName();
                    $lastName = $this -> user -> getLastName();
                    $dateOfBirth = $this -> user -> getDateOfBirth();

                    $sqlCheck = "SELECT COUNT(*) AS count FROM users WHERE PrimaryEmail = :email";
                    $parametersCheck = [':email' => $email];
                    $resultCheck = $this -> database -> Select($sqlCheck, $parametersCheck);

                    if ($resultCheck[0]["count"] > 0) {
                        $this -> setErrorMessage("Email already registered!");
                    } else {
                        $new_reg = array(
                            "PrimaryEmail"      => $this -> credential -> getEmail(),
                            "Password"          => $this -> passwordHash($this -> credential -> getPassword()),
                            "FirstName"         => $this -> user -> getFirstName(),
                            "LastName"          => $this -> user -> getLastName(),
                            "DateOfBirth"       => $this -> user -> getDateOfBirth(),
                        );

                        $sql = sprintf( "INSERT INTO %s (%s) VALUES (%s)", "users",
                        implode(", ", array_keys($new_reg)), ":" . implode(", :", array_keys($new_reg)));
                        $result = $this -> database -> Insert($sql, $new_reg);

                        $sql = "SELECT * FROM USERS WHERE PrimaryEmail = :email";
                        $parameters = [':email' => $email];
                        $result = $this -> database -> Select($sql, $parameters);

                        $row = $result[0];
                        
                        $_SESSION["Active"]       = true;
                        $_SESSION['UserID']       = $row["UserID"];
                        $_SESSION['PrimaryEmail'] = $row["PrimaryEmail"];
                        $_SESSION['FirstName']    = $row["FirstName"];
                        $_SESSION['LastName']     = $row["LastName"];
                        $_SESSION['DateOfBirth']  = $row["DateOfBirth"];

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