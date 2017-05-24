CREATE DATABASE `voting` /*!40100 DEFAULT CHARACTER SET latin1 */;

CREATE TABLE `fruits` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `votes` int(11) NOT NULL DEFAULT '0',
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `fruits` (`id`, `name`, `votes`, `image`) VALUES
(1, 'Apple', 0, 'apple.jpg'),
(2, 'Orange', 0, 'orange.jpg'),
(3, 'Banana', 0, 'banana.jpg'),
(4, 'Pineapple', 0, 'pineapple.jpg');

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'sam', 'nyc'),
(2, 'john', 'nyc');
