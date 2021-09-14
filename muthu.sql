-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2021 at 06:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muthu`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_form`
--

CREATE TABLE `register_form` (
  `id` int(11) NOT NULL,
  `user_name1` varchar(20) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `role` varchar(20) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `email_id1` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_form`
--

INSERT INTO `register_form` (`id`, `user_name1`, `mobile_no`, `gender`, `role`, `skill`, `email_id1`, `password`, `dob`) VALUES
(0, 'muthu', 12345, 'male', 'admin', 'mysql,javascript', 'lion@gmail.com', 'muthu', '2021-09-12'),
(1, 'muthu', 1234, 'male', 'admin', 'mysql,javascript', 'lion@gmail.com', 'muthu', '2021-09-12'),
(2, 'muthu', 1235, 'male', 'admin', 'mysql,javascript', 'lion@gmail.com', 'muthu', '2021-09-12'),
(3, 'muthu', 1245, 'male', 'admin', 'mysql,javascript', 'lion@gmail.com', 'muthu', '2021-09-12'),
(4, 'muthu', 1345, 'male', 'admin', 'mysql,javascript', 'lion@gmail.com', 'muthu', '2021-09-12'),
(5, 'muthu', 345, 'male', 'admin', 'mysql,javascript', 'lion@gmail.com', 'muthu', '2021-09-12'),
(6, 'muthu', 135, 'male', 'admin', 'mysql,javascript', 'lion@gmail.com', 'muthu', '2021-09-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_form`
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
