--data voor table++

DROP DATABASE IF EXISTS `project2`;

CREATE DATABASE `project2`;

USE `project2`;

CREATE TABLE `comments` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	textblockid varchar(10000) AUTO_INCREMENT KEY,
    sharecode varchar(100000),
    rating VARCHAR(10) NOT NULL
); 

DROP TABLE IF EXISTS `code`;
CREATE TABLE `code` (
    id INT(11),
    sharecode varchar(100000),
    Language varchar(100),
    uniquelink varchar(15)
);

DROP TABLE IF EXISTS `code`;
CREATE TABLE `code` (
    id INT AUTO_INCREMENT KEY,
    sharecode varchar(10000) NOT NULL,
    Language varchar(100) NOT NULL,
    uniquelink varchar(50) NOT NULL
);






--data voor php my admin
DROP DATABASE IF EXISTS `project2`;

CREATE DATABASE `project2`;

USE `project2`;
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `project2`.`comments` ( `ID` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(1000) NOT NULL ,
`comments` VARCHAR(1000) NOT NULL , 
`rating` INT(10) NOT NULL , 
PRIMARY KEY (`ID`));

DROP TABLE IF EXISTS `code`;
CREATE TABLE `project2`.`code` ( `id` INT NOT NULL AUTO_INCREMENT , `sharecode` VARCHAR(10000) NOT NULL ,
`Language` VARCHAR(100) NOT NULL , 
`uniquelink` VARCHAR(50) NOT NULL , 
PRIMARY KEY (`id`));
