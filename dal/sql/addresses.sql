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

CREATE TABLE Addresses (
<<<<<<< HEAD
  AddressID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  FullName VARCHAR(100),
  Phone INTEGER,
  Address VARCHAR(200),
  Country VARCHAR(50),
  City VARCHAR(50),
  ApartmentHouseNumber INTEGER,
  PostCode VARCHAR(20),
=======
  AddressID INTEGER PRIMARY KEY NOT NULL,
  Address VARCHAR(200) NOT NULL,
  Country VARCHAR(50) NOT NULL,
  City VARCHAR(50) NOT NULL,
  ApartmentNumber INTEGER,
  PostCode VARCHAR(20) NOT NULL UNIQUE,
>>>>>>> f354be1a675ec2e2bf51ee30f8998d6f377f9942
  UserID INT UNSIGNED NOT NULL,
  FOREIGN KEY (UserID) REFERENCES Users(UserID),
  CONSTRAINT Unique_Address_ID UNIQUE (AddressID)
);