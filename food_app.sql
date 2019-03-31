-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2019 at 01:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `frequent_questions`
--

CREATE TABLE `frequent_questions` (
  `question_id` int(11) NOT NULL,
  `question_restaurant_id` int(11) NOT NULL,
  `question_poster_id` int(11) NOT NULL,
  `question_ask` text NOT NULL,
  `question_answer` varchar(255) DEFAULT NULL,
  `question_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frequent_questions`
--

INSERT INTO `frequent_questions` (`question_id`, `question_restaurant_id`, `question_poster_id`, `question_ask`, `question_answer`, `question_date`) VALUES
(1, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(2, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(3, 2, 2, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(4, 2, 5, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(5, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(6, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(7, 2, 2, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(8, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(9, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(10, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(11, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(12, 2, 5, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(13, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(14, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(15, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(16, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(17, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(18, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(19, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(20, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(21, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(22, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(23, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(24, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(25, 2, 5, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(26, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(27, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(28, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(29, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(30, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(31, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(32, 2, 1, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44'),
(33, 2, 2, 'tengo que pagar para hacer una reserva?', 'Asi es! lo hacemos para que la empresa no reserve espacio en vano', '2019-03-31 18:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(45) NOT NULL,
  `password` varchar(65) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `lastname` varchar(55) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `account_date_created` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `lastname`, `telephone`, `account_date_created`, `user_id`, `avatar`) VALUES
('gino_siancas04@hotmail.com', '$2y$10$cwHDjjrWpGbwxQM07OX5/uzGJgQQVxClfa5VoEBQKGrWAhlsceNTq', 'gino', 'siancas rodriguez', 983998008, '2019-03-29 06:21:21', 1, '/food-app/images/avatar.png'),
('ginito_lee@hotmail.com', '$2y$10$5LGX/Y5UGBYFxtMoBPtWCeUAD.4vVMryFi5eWSdqNUcb/aApSuDAO', 'leo', 'hustle', NULL, '2019-03-30 18:27:05', 2, '/food-app/images/avatar.png'),
('olgasiancas@gmail.com', '$2y$10$rzhRkmvNlSkAVgOQHlttuuZc.jFz7bSTuF.Px85OEDJceHyKanF/6', 'olga', 'roxy', NULL, '2019-03-31 17:31:57', 5, '/food-app/images/avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `frequent_questions`
--
ALTER TABLE `frequent_questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `frequent_questions`
--
ALTER TABLE `frequent_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
