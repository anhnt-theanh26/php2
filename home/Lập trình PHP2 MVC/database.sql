-- tạo database 
DROP DATABASE IF EXISTS shop2;
CREATE DATABASE shop2;
USE shop2;

CREATE TABLE customers(
    customerID int NOT NULL AUTO_INCREMENT,
    emailAddress VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    shipAddressID INT DEFAULT NULL,
    billingAddressID INT DEFAULT NULL,
    PRIMARY KEY (customerID),
    UNIQUE INDEX emailAddress (emailAddress)
);
CREATE TABLE addresses(
    addressID INT NOT NULL AUTO_INCREMENT,
    customerID INT NOT NULL,
    line1 VARCHAR(255) NOT NULL,
    line2 VARCHAR(255) DEFAULT NULL,
    city VARCHAR(255) NOT NULL,
    state VARCHAR (2) NOT NULL,
    zipCode VARCHAR(10) NOT NULL,
    phone VARCHAR(12) NOT NULL,
    disabled TINYINT(1) NOT NULL DEFAULT 0,
    PRIMARY KEY (addressID),
    INDEX customerID (customerID)
);
CREATE TABLE orders(
    orderID INT NOT NULL AUTO_INCREMENT,
    customerID INT NOT NULL,
    orderDate DATETIME NOT NULL,
    shipAmount DECIMAL(10,2) NOT NULL,
    taxAmount DECIMAL(10,2) NOT NULL,
    shipDate DATETIME NOT NULL,
    shipAddressID INT NOT NULL,
    cardType INT NOT NULL,
    cardNumber CHAR(16) NOT NULL,
    cardExpires CHAR(7) NOT NULL,
    billingAddressID INT NOT NULL,
    PRIMARY KEY (orderID),
    INDEX customerID (customerID)
);
CREATE TABLE orderItems(
    itemID INT NOT NULL AUTO_INCREMENT,
    orderID INT NOT NULL,
    productID INT NOT NULL,
    itemPrice DECIMAL(10,2) NOT NULL,
    discountAmount DECIMAL(10,2) NOT NULL,
    quantity int NOT NULL,
    PRIMARY KEY (itemID),
    INDEX orderID (orderID),
    INDEX productID (productID)
);
CREATE TABLE categories(
    categoryID INT NOT NULL AUTO_INCREMENT,
    categoryName VARCHAR(255) NOT NULL,
    PRIMARY KEY(categoryID)
);
CREATE TABLE products(
    productID INT NOT NULL AUTO_INCREMENT,
    categoryID INT NOT NULL,
    productCode VARCHAR(10) NOT NULL,
    categoryName VARCHAR(255) NOT NULL,
    description text NOT NULL,
    listPrice DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    dateAdded DATETIME NOT NULL,
    PRIMARY KEY (productID),
    INDEX categoryID (categoryID),
    UNIQUE INDEX productCode (productCode)
);
CREATE TABLE admin(
    adminID INT NOT NULL AUTO_INCREMENT,
    emailAddress VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    PRIMARY KEY (adminID)
);