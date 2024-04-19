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

-- SQL File

CREATE DATABASE PHPASSIGNMENT;

USE PHPASSIGNMENT;

CREATE TABLE Users (
  UserID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  PrimaryEmail VARCHAR(100) NOT NULL,
<<<<<<< HEAD
=======
  SecondaryEmail VARCHAR(100),
>>>>>>> f354be1a675ec2e2bf51ee30f8998d6f377f9942
  Password VARCHAR(100) NOT NULL,
  FirstName VARCHAR(100),
  LastName VARCHAR(100),
  DateOfBirth DATE,
  CONSTRAINT Unique_User_ID UNIQUE (UserID),
  CONSTRAINT unique_primary_email UNIQUE (PrimaryEmail)
);

INSERT INTO USERS VALUES (1,"b00139596@mytudublin.ie", "b00139596.2@mytudublin.ie", 123, "Johny", "Ramos", "1991-01-01");
