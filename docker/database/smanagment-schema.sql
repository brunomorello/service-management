CREATE DATABASE IF NOT EXISTS `smanagement`;

USE `smanagement`;

CREATE TABLE IF NOT EXISTS `employees` (
    `first_name` varchar(50),
    `last_name` varchar(100),
    `email` varchar(100)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `employees` WRITE;

INSERT INTO `employees` VALUES('Bruno', 'Moreno', 'brunomorello7@gmail.com'), ('User1', 'Test', 'user1@test.com');

UNLOCK TABLES;