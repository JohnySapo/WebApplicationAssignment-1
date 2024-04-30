  -- Student Number: B00139596
  -- Student Name: Johny Ramos
  -- Course: T054 - Computer System Management
  -- Module: Web Application
  -- Lecturer: Robert Smith

-- SQL File

CREATE DATABASE PHPASSIGNMENT;

USE PHPASSIGNMENT;

CREATE TABLE Users (
  UserID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  PrimaryEmail VARCHAR(100) NOT NULL,
  Password VARCHAR(100) NOT NULL,
  FirstName VARCHAR(100),
  LastName VARCHAR(100),
  DateOfBirth DATE,
  CONSTRAINT Unique_User_ID UNIQUE (UserID),
  CONSTRAINT unique_primary_email UNIQUE (PrimaryEmail)
);

-- Only to test the database. "Do not use it in Production"
INSERT INTO USERS VALUE (1, "test@gmail.com", "testpassword", "Test", "Test2", "1999-01-01");
