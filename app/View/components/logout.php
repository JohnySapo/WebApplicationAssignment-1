<!-- 
<<<<<<< HEAD
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php 
    require("Session.php");
    $session = new Session();
=======
-- Student Name: Johny Ramos
-- Course: T054 - Computer System Management
-- Module: Web Application
-- Lecturer: Robert Smith
-->

<?php 
    require_once ("session.php");
    $session = new session();
>>>>>>> f354be1a675ec2e2bf51ee30f8998d6f377f9942
    $session -> forgetSession();
?>