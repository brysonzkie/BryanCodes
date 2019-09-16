create database test;

use test;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `prodname` varchar(100) NOT NULL,
  `proddes` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `quan` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
);