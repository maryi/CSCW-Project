code for domain purpose and app tables:

	CREATE DATABASE `seng`;
	
CREATE TABLE `app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) DEFAULT NULL,
  `hierarchy` varchar(50) DEFAULT NULL,
  `servt` varchar(50) DEFAULT NULL,
  `sync` varchar(50) DEFAULT NULL,
  `scale` varchar(50) DEFAULT NULL,
  `nascence` varchar(50) DEFAULT NULL,
  `learn` varchar(50) DEFAULT NULL,
  `modality` varchar(50) DEFAULT NULL,
  `privacy` varchar(50) DEFAULT NULL,
  `awareness` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appid` int(11) DEFAULT NULL,
  `domain` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
); 

CREATE TABLE `purpose` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appid` int(11) DEFAULT NULL,
  `purpose` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

all data was entered from importing are list of base applications https://docs.google.com/spreadsheets/d/1Trh6Pesxvv5aYfd_x7wXxGmR5k9Y5g7-wpFbezwqi8E/edit as a csv file into the database
