
  -- Student Number: B00139596
  -- Student Name: Johny Ramos
  -- Course: T054 - Computer System Management
  -- Module: Web Application
  -- Lecturer: Robert Smith

-- SQL File

CREATE DATABASE PHPASSIGNMENT;

USE PHPASSIGNMENT;

CREATE TABLE ITEMS (
  itemID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  itemName VARCHAR(100),
  itemDescription VARCHAR(100),
  itemPrice DECIMAL(14,2),
  itemStars INTEGER,
  itemImage VARCHAR(100),
  itemType VARCHAR(100),
  CONSTRAINT Unique_Item_ID UNIQUE (itemID)
);

-- Male Items
INSERT INTO ITEMS VALUE (1, "White Shirt", "Test the Description", 59.99, 5, "white-shirt.jpg", "Him");
INSERT INTO ITEMS VALUE (2, "Brown Jacket", "Test the Description", 60.00, 3, "jacket.jpg", "Him");
INSERT INTO ITEMS VALUE (3, "Black Sweater", "Test the Description", 39.99, 3, "black-sweater.jpg", "Him");
INSERT INTO ITEMS VALUE (4, "Jeans Jacket", "Test the Description", 70.00, 4, "jean-jacket.jpg", "Him");
INSERT INTO ITEMS VALUE (5, "Jumper", "Test the Description", 29.999, 4, "jumper.jpg", "Him");
INSERT INTO ITEMS VALUE (6, "Kit Office", "Test the Description", 45.44, 5, "kit-clothes.jpg", "Him");
INSERT INTO ITEMS VALUE (7, "T-Shirt", "Test the Description", 15.99, 4, "t-shirt.jpg", "Him");

-- Female Items
INSERT INTO ITEMS VALUE (8, "Jeans Jacket", "Test the Description", 50.49, 4, "jean-jacket.jpg", "Her");
INSERT INTO ITEMS VALUE (9, "Jeans Jacket", "Test the Description", 69.99, 4, "jean-jacket2.jpg", "Her");
INSERT INTO ITEMS VALUE (10, "Kit Summer", "Test the Description", 70.99, 5, "kit-clothes.jpg", "Her");
INSERT INTO ITEMS VALUE (11, "Kit Daily", "Test the Description", 61.99, 5, "kit-clothes2.jpg", "Her");
INSERT INTO ITEMS VALUE (12, "Kit All Brown", "Test the Description", 81.44, 4, "kit-clothes3.jpg", "Her");
INSERT INTO ITEMS VALUE (13, "Kit Summer Yellow", "Test the Description", 49.99, 4, "kit-clothes4.jpg", "Her");
INSERT INTO ITEMS VALUE (14, "Pink Pants", "Test the Description", 35.99, 5, "pink-pants.jpg", "Her");
INSERT INTO ITEMS VALUE (15, "Shirt", "Test the Description", 25.49, 3, "shirt.jpg", "Her");
INSERT INTO ITEMS VALUE (16, "Combo Shirts", "Test the Description", 29.99, 3, "shirts.jpg", "Her");
INSERT INTO ITEMS VALUE (17, "Shoes", "Test the Description", 24.99, 4, "shoes.jpg", "Her");
INSERT INTO ITEMS VALUE (18, "White Sweater", "Test the Description", 26.99, 4, "sweater.jpg", "Her");
INSERT INTO ITEMS VALUE (19, "White Sweater", "Test the Description", 29.99, 5, "white-sweater.jpg", "Her");
INSERT INTO ITEMS VALUE (20, "Double White T-Shirt", "Test the Description", 25.44, 3, "white-tshirt.jpg", "Her");
INSERT INTO ITEMS VALUE (21, "White T-Shirt", "Test the Description", 27.44, 3, "white-tshirt2.jpg", "Her");
INSERT INTO ITEMS VALUE (22, "Summer T-Shirt", "Test the Description", 13.99, 3, "white-tshirt3.jpg", "Her");