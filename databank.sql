SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

CREATE DATABASE IF NOT EXISTS `WP1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `WP1`;

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `contact` (`id`, `name`, `email`) VALUES
(1, 'name1', 'name1@mail.com'),
(2, 'name2', 'name2@mail.com'),
(3, 'name3', 'name3@mail.com');
