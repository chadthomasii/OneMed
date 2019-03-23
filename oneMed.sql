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
name VARCHAR(80),
address VARCHAR(80),
city VARCHAR(15),
state VARCHAR(15),
zipcode CHAR(5),
password VARCHAR(15));

CREATE TABLE Serves(
clientID INT,
partnerID INT,
PRIMARY KEY(clientID,partnerID),
FOREIGN KEY(clientID) REFERENCES Clients(id),
FOREIGN KEY(partnerID) REFERENCES Partners(partnerID));

CREATE TABLE MedicalReportsHas(
id INT,
comments VARCHAR(40),
lastDate DATE,
PRIMARY KEY(id),
FOREIGN KEY(id) REFERENCES Clients(id));

# LOADING DATA
 INSERT INTO Clients VALUES
(NULL,'ejfjfJh8%54ZEEJjie','John','Doe','28204','jdoe@yahoo.com','j%ruMo89'),
(NULL,'zHol38jH%28Z4RO%db','Alford','Johnson','28216','alfordMoon@gmail.com','aRealMo88%'),
(NULL,'zHol38jH%28Z4RO%db','Alford','Johnson','28216','alfordMoon@gmail.com','aRealMo88%'),
(NULL,'zHol38jH%28Z4RO%db','Alford','Johnson','28216','alfordMoon@gmail.com','aRealMo88%');

INSERT INTO Partners VALUES
(NULL,'Charlotte Community Health Clinic','8401 Medical Plaza Dr suite 300','Charlotte','North Carolina','28262','l%fe28MdP'),
(NULL,'NC MedAssist','4428 Taggart Creek Road, Suite 101','Charlotte','North Carolina','28208','Plu$89H%');

INSERT INTO Serves VALUES
(1,1),
(1,2);

INSERT INTO MedicalReportsHas VALUES
(1,'Normal Checkup','2019-03-23');