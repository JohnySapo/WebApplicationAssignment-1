
  -- Student Number: B00139596
  -- Student Name: Johny Ramos
  -- Course: T054 - Computer System Management
  -- Module: Web Application
  -- Lecturer: Robert Smith


-- SQL File

CREATE DATABASE PHPASSIGNMENT;

USE PHPASSIGNMENT;

CREATE TABLE Addresses (
  AddressID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  FullName VARCHAR(100),
  Phone INTEGER,
  Address VARCHAR(200),
  Country VARCHAR(50),
  City VARCHAR(50),
  ApartmentHouseNumber INTEGER,
  PostCode VARCHAR(20),
  UserID INT UNSIGNED NOT NULL,
  FOREIGN KEY (UserID) REFERENCES Users(UserID),
  CONSTRAINT Unique_Address_ID UNIQUE (AddressID)
);