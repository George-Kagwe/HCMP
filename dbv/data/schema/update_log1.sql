CREATE TABLE `update_log1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update_name` varchar(150) DEFAULT NULL,
  `added_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1