CREATE DATABASE rozayel;

USE rozayel;

CREATE TABLE users(
userName VARCHAR(30) PRIMARY KEY,
phoneNmber CHAR(10) NOT NULL,
email VARCHAR(40) UNIQUE NOT NULL,
pass VARCHAR(40) NOT NULL
);

INSERT INTO users(userName, phoneNumber, email, pass) VALUES('Farah', '0546352768', 'farah@gmail.com', 'F@123456');
INSERT INTO users(userName, phoneNumber, email, pass) VALUES('Fatimah', '0554635467', 'Fatimah@gmail.com', 'abcd@1234');

CREATE TABLE feedback(
customerName VARCHAR(20) NOT NULL,
email VARCHAR(40) PRIMARY KEY,
customerFeedback TINYTEXT NOT NULL
);

INSERT INTO feedback(customerName, email, customerFeedback) VALUES('Maimounah', 'Maimonah@gmail.com','I love this website very much');
INSERT INTO feedback(customerName, email, customerFeedback) VALUES('Hoda', 'Hoda12@hotmail.com', 'I have a very nice experience with Rozayel store');


