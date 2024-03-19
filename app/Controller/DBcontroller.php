<!-- 
-- Student Name: Johny Ramos
-- Course: T054 - Computer System Management
-- Module: Web Application
-- Lecturer: Robert Smith
-->

<?php
    require("../app/Model/Cleaner.php");
    require("../app/Model/Credential.php");

    class DBcontroller{

        function passwordHash($password) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            return $hashed_password;
        }

        function emailValidation($email) {
            require_once("../dal/database/connection.php");
            
            $sql = "SELECT * FROM USERS WHERE PrimaryEmail = :email";

            $statement = $connection->prepare($sql);
            $statement->bindParam(':email', $email, PDO::PARAM_STR);
            $statement->execute();

            if($statement->rowCount() > 0) {
                $result = $statement->fetch(PDO::FETCH_ASSOC);
                $email = $result["PrimaryEmail"];
                return $email;
            } else {
                $message = "There is already an account with this email address.";
                return $message;
            }
        }
        
        function startSignUp($signup){
            require_once("../dal/database/connection.php");

            if (isset($_POST[$signup])) {

                if (!empty($_POST['firstName']) &&
                !empty($_POST['lastName']) &&
                !empty($_POST['email']) &&
                !empty($_POST['password']) &&
                !empty($_POST['confPassword'])) {

                    $cleaner = new Cleaner();
                    $credential = new Credential();
    
                    $credential -> setEmail($cleaner->cleanData($_POST['email']));
                    $credential -> setPassword($cleaner->cleanData($_POST['password']));
                    $credential -> setConfPassword($cleaner->cleanData($_POST['confPassword']));
                    $credential -> setFirstName($cleaner->cleanData($_POST['firstName']));
                    $credential -> setLastName($cleaner->cleanData($_POST['lastName']));
    
                    $email = $credential -> getEmail();
                    $password = $this -> passwordHash($credential -> getPassword()); 
                    $firstName = $credential -> getFirstName();
                    $lastName = $credential -> getLastName();
                    $dateOfBirth = $credential -> getDateOfBirth();

                    try {
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
    
                        $statement = $connection->prepare($sql);
                        $statement->execute($new_reg);
    
                        if ($statement->rowCount() != 1) {
                            echo "<br> Invalid";
                        } else {
                            $sql = "SELECT * FROM USERS WHERE PrimaryEmail = :email AND Password = :password";

                            $statement = $connection->prepare($sql);
                            $statement->bindParam(':email', $email, PDO::PARAM_STR);
                            $statement->bindParam(':password', $password, PDO::PARAM_STR);
                            $statement->execute();

                            $result = $statement->fetch(PDO::FETCH_ASSOC);
    
                            $firstname = $result["FirstName"];
                            $_SESSION['FirstName'] = $firstname;

                            header("location:index.php");
                            exit;
                        }
                    } catch (PDOException $pdoex) {
                        echo "Error: " . $pdoex->getMessage();
                    }
                } else {
                    echo "All fields must be populated!";
                }

            } else {
                echo "Unavalaible email.";
            }
            
        }

        function startLogin($login){

            $errorMessage = null;
            $cleaner = new Cleaner();
            $credential = new Credential();

            if (isset($_POST[$login])){
                require_once("../dal/database/connection.php");

                if (!empty($_POST['email']) && !empty($_POST['password'])) {

                    $credential->setEmail(
                        $cleaner->cleanData($_POST['email'])
                    );
                    $credential->setPassword(
                        $cleaner->cleanData($_POST['password'])
                    );

                    $email = $credential->getEmail();
                    $password = $credential->getPassword();

                    try {
                        $sql = "SELECT Password FROM USERS WHERE PrimaryEmail = :email";

                        $statement = $connection->prepare($sql);
                        $statement->bindParam(':email', $email, PDO::PARAM_STR);
                        $statement->execute();
            
                        if($statement -> rowCount() >0) {
                            $result = $statement->fetch(PDO::FETCH_ASSOC);
                            $hashed_password = $result['Password'];

                            if(!password_verify($password,$hashed_password)) {
                                $errorMessage = "Invalid email or password.";
                            } else {
                                $sql = "SELECT * FROM USERS WHERE PrimaryEmail = :email";
    
                                $statement = $connection->prepare($sql);
                                $statement->bindParam(':email', $email, PDO::PARAM_STR);
                                $statement->execute();
    
                                $result = $statement->fetch(PDO::FETCH_ASSOC);
    
                                $firstname = $result["FirstName"];
                                $_SESSION['FirstName'] = $firstname;
    
                                header("location:index.php");
                                exit;
                            }
                        } else {
                            echo "Invalid email or password.";
                        }
                    } catch (PDOException $pdoex) {
                        echo "Error: " . $pdoex->getMessage();
                    }
                } else {
                    $errorMessage = "Invalid email or password.";
                }
            }
        }
    }
?>