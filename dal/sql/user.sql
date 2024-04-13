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
  SecondaryEmail VARCHAR(100),
  Password VARCHAR(100) NOT NULL,
  FirstName VARCHAR(100),
  LastName VARCHAR(100),
  DateOfBirth DATE,
  CONSTRAINT Unique_User_ID UNIQUE (UserID),
  CONSTRAINT unique_primary_email UNIQUE (PrimaryEmail)
);

INSERT INTO USERS VALUES (1,"b00139596@mytudublin.ie", "b00139596.2@mytudublin.ie", 123, "Johny", "Ramos", "1991-01-01");
