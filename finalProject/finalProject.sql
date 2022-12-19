 
 create database finalProjectTyler;
use finalProjectTyler;

 
CREATE TABLE roles (
    roleId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    roleName VARCHAR(255)
);

 
CREATE TABLE users (
    userId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username VARCHAR(255),
    userPassword VARCHAR(255),
    fullName VARCHAR(255)
 
);

 
CREATE TABLE ColumbusForm (
    formId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title VARCHAR(500),
    reviewerId INT,
    review VARCHAR(500),
    publishDate Date, 
    FOREIGN KEY (reviewerId) REFERENCES users(userId)  
);

 
CREATE TABLE UpperArlingtonForm (
    formId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title VARCHAR(500),
    reviewerId INT,
    review VARCHAR(500),
    publishDate Date, 
    FOREIGN KEY (reviewerId) REFERENCES users(userId)  
);

 
CREATE TABLE NewAlbanyForm (
    formId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title VARCHAR(500),
    reviewerId INT,
    review VARCHAR(500),
    publishDate Date, 
    FOREIGN KEY (reviewerId) REFERENCES users(userId)  
);

 
CREATE TABLE WestervilleForm (
    formId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title VARCHAR(500),
    reviewerId INT,
    review VARCHAR(500),
    publishDate Date, 
    FOREIGN KEY (reviewerId) REFERENCES users(userId)  
);

 
CREATE TABLE WorthingtonForm (
    formId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title VARCHAR(500),
    reviewerId INT,
    review VARCHAR(500),
    publishDate Date, 
    FOREIGN KEY (reviewerId) REFERENCES users(userId)  
);

 
CREATE TABLE DublinForm (
    formId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title VARCHAR(500),
    reviewerId INT,
    review VARCHAR(500),
    publishDate Date, 
    FOREIGN KEY (reviewerId) REFERENCES users(userId)  
);
select * from roles;
select * from users;
select * from Columbusform;
select * from NewAlbanyform;
select * from Westervilleform;
select * from Worthingtonform;
select * from Dublinform;
select * from UpperArlingtonform;

 

 
 

 
 
  

 



 
