-- Student Name: Johny Ramos
-- Course: T054 - Computer System Management
-- Module: Web Application
-- Lecturer: Robert Smith

-- SQL File

CREATE DATABASE PHPASSIGNMENT;

USE PHPASSIGNMENT;

CREATE TABLE Addresses (
  AddressID INTEGER PRIMARY KEY NOT NULL,
  Address VARCHAR(200) NOT NULL,
  Country VARCHAR(50) NOT NULL,
  City VARCHAR(50) NOT NULL,
  ApartmentNumber INTEGER,
  PostCode VARCHAR(20) NOT NULL UNIQUE,
  UserID INT UNSIGNED NOT NULL,
  FOREIGN KEY (UserID) REFERENCES Users(UserID),
  CONSTRAINT Unique_Address_ID UNIQUE (AddressID)
);