<!-- 
-- Student Name: Johny Ramos
-- Course: T054 - Computer System Management
-- Module: Web Application
-- Lecturer: Robert Smith
-->

<?php 
    require_once("config.php");

    try {
        $connection = new PDO($dsn, $username, $password, $options);
        $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $pdoex) {
        echo 'Error';
        throw new PDOException($pdoex -> getMessage(), (int)$pdoex->getCode());
    }
?>