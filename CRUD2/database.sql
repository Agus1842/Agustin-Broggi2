create database test;

use test;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  'edad' int (2) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  'password' varchar (26) NOT NULL,
  PRIMARY KEY  (`id`)
);