<!-- 
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php
    require("../app/Model/User.php");
    require("../app/Model/Credential.php");
    require("../app/Model/Cleaner.php");
    require("../app/Model/Database.php");

    class Account {
        private $userID;
        private $user;
        private $credential;
        private $database;
        const NO_ROWS_FOUND = -1;

        public function __construct() {
            $this -> userID = $_SESSION['UserID'];
            $this -> user = new User();
            $this -> credential = new Credential();
            $this -> database = new Database();
        }

        public function getUserData($getUserId) {
            $sql = 'SELECT * FROM USERS WHERE USERID = :ID;';
            $parameters = [':ID' => $this -> userID];
            $result = $this -> database -> Select($sql, $parameters);

            return $result;
        }

        public function editUserData($editData) {
            if(isset($_POST[$editData])) {
                $this -> user -> setFirstName($_POST['FirstName']);
                $this -> user -> setLastName($_POST['LastName']);
                $this -> user -> setDateOfBirth($_POST['DateOfBirth']);
                $this -> credential -> setEmail($_POST['PrimaryEmail']);

                $new_reg = [
                    "FirstName"     => $this -> user -> getFirstName(),
                    "LastName"      => $this -> user -> getLastName(),
                    "DateOfBirth"   => $this -> user -> getDateOfBirth(),
                    "PrimaryEmail"  => $this -> credential -> getEmail(),
                    "UserID"        => $this -> userID,
                ];
                
                $sql = "UPDATE USERS SET
                    FirstName       = :FirstName,
                    LastName        = :LastName,
                    DateOfBirth     = :DateOfBirth,
                    PrimaryEmail    = :PrimaryEmail
                WHERE UserID        = :UserID";

                $result = $this->database->Update($sql, $new_reg);

                if($result) {
                    header("location:../public/account.php");
                    exit;
                }
            }
        }

    }
?>