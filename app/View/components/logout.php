<!-- 
-- Student Name: Johny Ramos
-- Course: T054 - Computer System Management
-- Module: Web Application
-- Lecturer: Robert Smith
-->

<?php 
    require_once ("session.php");
    $session = new session();
    $session -> forgetSession();
?>