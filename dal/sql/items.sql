
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
INSERT INTO ITEMS VALUE (1, "White Shirt", "A classic white shirt for men, perfect for any occasion.", 59.99, 5, "white-shirt.jpg", "Him");
INSERT INTO ITEMS VALUE (2, "Brown Jacket", "A stylish brown jacket to add sophistication to any outfit.", 60.00, 3, "jacket.jpg", "Him");
INSERT INTO ITEMS VALUE (3, "Black Sweater", "A cozy black sweater, ideal for layering in colder weather.", 39.99, 3, "black-sweater.jpg", "Him");
INSERT INTO ITEMS VALUE (4, "Jeans Jacket", "A trendy denim jacket, a versatile addition to any wardrobe.", 70.00, 4, "jean-jacket.jpg", "Him");
INSERT INTO ITEMS VALUE (5, "Jumper", "A comfortable jumper, perfect for casual wear.", 29.999, 4, "jumper.jpg", "Him");
INSERT INTO ITEMS VALUE (6, "Kit Office", "A complete office attire set for men, ensuring a professional look.", 45.44, 5, "kit-clothes.jpg", "Him");
INSERT INTO ITEMS VALUE (7, "T-Shirt", "A basic t-shirt for everyday wear, available in various colors.", 15.99, 4, "t-shirt.jpg", "Him");
INSERT INTO ITEMS VALUE (8, "Coloured T-Shirts", "A set of colorful t-shirts to brighten up any wardrobe.", 105.99, 4, "t-shirts.jpg", "Him");

-- Female Items
INSERT INTO ITEMS VALUE (9, "Jeans Jacket", "A stylish denim jacket for women, perfect for layering.", 50.49, 4, "jean-jacket.jpg", "Her");
INSERT INTO ITEMS VALUE (10, "Jeans Jacket", "Another chic denim jacket option for women, offering versatility.", 69.99, 4, "jean-jacket2.jpg", "Her");
INSERT INTO ITEMS VALUE (11, "Kit Summer", "A summer clothing set for women, featuring light and airy fabrics.", 70.99, 5, "kit-clothes.jpg", "Her");
INSERT INTO ITEMS VALUE (12, "Kit Daily", "A versatile daily clothing set for women, suitable for various activities.", 61.99, 5, "kit-clothes2.jpg", "Her");
INSERT INTO ITEMS VALUE (13, "Kit All Brown", "An elegant all-brown clothing set for women, offering sophistication.", 81.44, 4, "kit-clothes3.jpg", "Her");
INSERT INTO ITEMS VALUE (14, "Kit Summer Yellow", "A vibrant yellow summer clothing set for women, adding a pop of color.", 49.99, 4, "kit-clothes4.jpg", "Her");
INSERT INTO ITEMS VALUE (15, "Pink Pants", "A pair of stylish pink pants for women, adding a feminine touch to any outfit.", 35.99, 5, "pink-pants.jpg", "Her");
INSERT INTO ITEMS VALUE (16, "Shirt", "A versatile shirt for women, suitable for both casual and formal occasions.", 25.49, 3, "shirt.jpg", "Her");
INSERT INTO ITEMS VALUE (17, "Combo Shirts", "A combination of stylish shirts for women, offering variety in one set.", 29.99, 3, "shirts.jpg", "Her");
INSERT INTO ITEMS VALUE (18, "Shoes", "A pair of trendy shoes for women, completing any ensemble with flair.", 24.99, 4, "shoes.jpg", "Her");
INSERT INTO ITEMS VALUE (19, "White Sweater", "A cozy white sweater for women, perfect for chilly days.", 26.99, 4, "sweater.jpg", "Her");
INSERT INTO ITEMS VALUE (20, "White Sweater", "Another option of a comfortable white sweater for women, ensuring warmth and style.", 29.99, 5, "white-sweater.jpg", "Her");
INSERT INTO ITEMS VALUE (21, "Double White T-Shirt", "A set of two white t-shirts for women, offering essential basics for any wardrobe.", 25.44, 3, "white-tshirt.jpg", "Her");
INSERT INTO ITEMS VALUE (22, "White T-Shirt", "A classic white t-shirt for women, a timeless addition to any closet.", 27.44, 3, "white-tshirt2.jpg", "Her");
INSERT INTO ITEMS VALUE (23, "Summer T-Shirt", "A lightweight summer t-shirt for women, perfect for staying cool in warm weather.", 13.99, 3, "white-tshirt3.jpg", "Her");

-- Kid Items
INSERT INTO ITEMS VALUE (24, "Jacket", "A kid-friendly jacket, ensuring both warmth and style for little ones.", 21.99, 5, "jacket.jpg", "Kid");
INSERT INTO ITEMS VALUE (25, "Winter Jacket", "A cozy winter jacket for kids, providing protection against cold weather.", 25.44, 4, "jacket2.jpg", "Kid");
INSERT INTO ITEMS VALUE (26, "Kid Office Clothes", "A miniature office attire set for kids, perfect for dress-up or special occasions.", 61.99, 4, "kit-clothes.jpg", "Kid");
INSERT INTO ITEMS VALUE (27, "Kid Kit Jumper", "A cute jumper for kids, ensuring both comfort and style.", 55.99, 5, "kit-clothes2.jpg", "Kid");
INSERT INTO ITEMS VALUE (28, "Kid Kit Jumper 2", "Another option of a stylish jumper for kids, offering variety.", 45.99, 4, "kit-jumper.jpg", "Kid");
INSERT INTO ITEMS VALUE (29, "Kid Kit Jumper 3", "Yet another choice of a cozy jumper for kids, perfect for playtime.", 55.99, 3, "kit-jumper2.jpg", "Kid");
INSERT INTO ITEMS VALUE (30, "Jumper", "A comfortable jumper for kids, suitable for various activities.", 55.99, 3, "kit-jumper3.jpg", "Kid");
INSERT INTO ITEMS VALUE (31, "Pyjamas", "A cozy pair of pajamas for kids, ensuring a good night's sleep.", 29.99, 4, "Pyjamas.jpg", "Kid");
INSERT INTO ITEMS VALUE (32, "Kids Shirt", "A stylish shirt for kids, perfect for both casual and formal occasions.", 44.99, 4, "Shirt.jpg", "Kid");
INSERT INTO ITEMS VALUE (33, "Kids Shirt 2", "Another option of a trendy shirt for kids, offering variety in style.", 44.99, 4, "Shirt2.jpg", "Kid");

-- Accessories Items
INSERT INTO ITEMS VALUE (34, "Backpack", "A durable backpack, perfect for carrying essentials on the go.", 89.99, 5, "backpack.jpg", "Accessories");
INSERT INTO ITEMS VALUE (35, "Belt", "A stylish belt, adding the perfect finishing touch to any outfit.", 33.99, 4, "Belt.jpg", "Accessories");
INSERT INTO ITEMS VALUE (36, "Flip Flop", "A comfortable pair of flip flops, ideal for casual wear during warm weather.", 59.99, 3, "flipflop.jpg", "Accessories");
INSERT INTO ITEMS VALUE (37, "Glasses", "A trendy pair of glasses, adding a fashionable statement to any look.", 61.99, 4, "glasses.jpg", "Accessories");
INSERT INTO ITEMS VALUE (38, "Glasses 2", "Another stylish option of glasses, offering variety in eyewear.", 61.99, 5, "glasses2.jpg", "Accessories");
INSERT INTO ITEMS VALUE (39, "Gold Ring", "A luxurious gold ring, perfect for adding a touch of elegance to any ensemble.", 100.99, 5, "gold-ring.jpg", "Accessories");
INSERT INTO ITEMS VALUE (40, "Hair Clip", "A cute hair clip, adding a playful accent to any hairstyle.", 100.99, 5, "Hairclip.jpg", "Accessories");
INSERT INTO ITEMS VALUE (41, "Summer Hat", "A stylish summer hat, providing both sun protection and a chic accessory.", 66.99, 5, "hat.jpg", "Accessories");
INSERT INTO ITEMS VALUE (42, "Kids Hat", "A cute hat for kids, ensuring both style and sun protection.", 49.99, 5, "Kid-hat.jpg", "Accessories");
INSERT INTO ITEMS VALUE (43, "Purse", "A fashionable purse, perfect for carrying essentials in style.", 99.99, 5, "purse.jpg", "Accessories");
INSERT INTO ITEMS VALUE (44, "Tie", "A classic tie, adding a polished finishing touch to any formal outfit.", 89.99, 5, "Tie.jpg", "Accessories");