DROP DATABASE IF EXISTS oneMed;
CREATE DATABASE oneMed;
USE oneMed;


# CREATE TABLES

CREATE TABLE Clients(
id int AUTO_INCREMENT PRIMARY KEY,
clientID VARCHAR(60), 
fName VARCHAR(30),
lName VARCHAR(30),
zipcode CHAR(5),
email VARCHAR(40),
password VARCHAR(12));

CREATE TABLE Partners(
partnerID int AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(40),
address VARCHAR(40),
city VARCHAR(12),
state VARCHAR(15),
zipcode CHAR(5),
client VARCHAR(40),
password VARCHAR(15));

CREATE TABLE Serves(
id INT DEFAULT NULL,
partnerID INT DEFAULT NULL,
PRIMARY KEY(id,partnerID),
FOREIGN KEY(id) REFERENCES Clients(id),
FOREIGN KEY(partnerID) REFERENCES Partners(partnerID));

CREATE TABLE MedicalReportsHas(
id INT DEFAULT NULL,
comments VARCHAR(40),
PRIMARY KEY(id),
FOREIGN KEY(id) REFERENCES Clients(id));

# LOADING DATA
 INSERT INTO Clients VALUES
(NULL,'ejfjfJh8%54ZEEJjie','John','Doe','28204','jdoe@yahoo.com','j%ruMo89'),
(NULL,'zHol38jH%28Z4RO%db','Alford','Johnson','28216','alfordMoon@gmail.com','aRealMo88%');
