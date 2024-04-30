<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php 
    require("../dal/Database/config.php");
    class Database {
        
        const NO_ROWS_FOUND = -1;
        protected $connection = null;

        public function __construct(){
            global $dsn, $username, $password, $options;
            try{
                $this->connection = new PDO($dsn, $username, $password, $options);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            }catch(Exception $pex){
                throw new Exception($pex->getMessage(), (int)$pex->getCode());   
            }			
        }

        // Execute Statement Function
        private function executeStatement($statement = "" , $parameters = []){
            try{
			
                $stmt = $this -> connection -> prepare($statement);
                foreach ($parameters as $param => $value) {
                    $stmt -> bindValue($param, $value, PDO::PARAM_STR);
                }

                $stmt -> execute();
                
                return $stmt;
				
            }catch(Exception $pex){
                throw new Exception($pex->getMessage());   
            }		
        }

        // Select a row/s from the Database
        public function Select($statement = "" , $parameters = []){
            try{

                $stmt = $this -> executeStatement($statement , $parameters);
                
                if($stmt -> rowCount() > 0) {
                    return $stmt -> fetchAll();
                } else {
                    return self::NO_ROWS_FOUND;
                }
            }catch(Exception $pex){
                throw new Exception($pex->getMessage());   
            }		
        }

        // Insert a row/s into Database
        public function Insert($statement = "" , $parameters = []){
            try{

                $stmt = $this -> executeStatement($statement, $parameters);
                
                if($stmt -> rowCount() > 0) {
                    return $this -> connection -> lastInsertId();
                } else {
                    return self::NO_ROWS_FOUND; 
                }
            }catch(Exception $pex){
                throw new Exception($pex->getMessage());   
            }		
        }

        // Update a row/s from the Database
        public function Update($statement = "" , $parameters = []){
            try{
                
                $stmt = $this->executeStatement($statement , $parameters);

                if($stmt -> rowCount() > 0) {
                    return $stmt;
                } else {
                    return self::NO_ROWS_FOUND;
                }
            }catch(Exception $pex){
                throw new Exception($pex->getMessage());   
            }		
        }

        // Remove a row/s from the Database Table
        public function Remove($statement = "" , $parameters = []){
            try{
                
                $stmt = $this->executeStatement($statement , $parameters);

                if($stmt -> rowCount() > 0) {
                    return $stmt;
                } else {
                    return self::NO_ROWS_FOUND;
                }
            }catch(Exception $pex){
                throw new Exception($pex->getMessage());   
            }
        }
    }
?>