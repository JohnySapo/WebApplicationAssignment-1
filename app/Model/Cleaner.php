<!-- 
<<<<<<< HEAD
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
=======
-- Student Name: Johny Ramos
-- Course: T054 - Computer System Management
-- Module: Web Application
-- Lecturer: Robert Smith
>>>>>>> f354be1a675ec2e2bf51ee30f8998d6f377f9942
-->

<?php 
    class Cleaner {
        function cleanData($data) {

            if (is_null($data)) {
                return ''; 
            }
            
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
    
            return ($data);
        } 
    }
?>