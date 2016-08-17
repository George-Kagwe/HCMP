CREATE TABLE `ftp_uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facility_code` varchar(45) DEFAULT NULL,
  `file_name` varchar(155) DEFAULT NULL,
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1