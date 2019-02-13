-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 10, 2019 at 02:22 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_remidi`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('-','Laki - Laki','Perempuan') NOT NULL,
  `phone` char(20) NOT NULL,
  `status` enum('-','lajang','menikah') NOT NULL,
  `email` varchar(100) NOT NULL,
  `pict` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `user_id`, `name`, `address`, `date_of_birth`, `gender`, `phone`, `status`, `email`, `pict`, `created_at`, `updated_at`) VALUES
(14, 13, 'Muchammad Athfal 2', 'asdasdas', '2019-02-13', 'Laki - Laki', '123213123', 'lajang', 'atfalstyle@gmail.com', 'employee-1549804546.png', '2019-02-10 09:18:08', '2019-02-10 13:15:46');

--
-- Triggers `employee`
--
DELIMITER $$
CREATE TRIGGER `employee_info` AFTER INSERT ON `employee` FOR EACH ROW BEGIN
INSERT INTO employee_job(employee_id, number_id, date_of_entry, position, salary, team_unit) VALUES(NEW.id, '-', '-', '-', '-', '-');
INSERT INTO employee_edu(employee_id, primary_school, junior_high_school, senior_high_school, college) VALUES(NEW.id, '-', '-', '-', '-');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `employee_edu`
--

CREATE TABLE `employee_edu` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `primary_school` text NOT NULL,
  `junior_high_school` text NOT NULL,
  `senior_high_school` text NOT NULL,
  `college` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_edu`
--

INSERT INTO `employee_edu` (`id`, `employee_id`, `primary_school`, `junior_high_school`, `senior_high_school`, `college`, `created_at`, `updated_at`) VALUES
(10, 14, '-', '-', '-', '-', '2019-02-10 09:18:08', '2019-02-10 09:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `employee_job`
--

CREATE TABLE `employee_job` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `number_id` varchar(100) NOT NULL,
  `date_of_entry` date NOT NULL,
  `position` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `team_unit` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_job`
--

INSERT INTO `employee_job` (`id`, `employee_id`, `number_id`, `date_of_entry`, `position`, `salary`, `team_unit`, `created_at`, `updated_at`) VALUES
(10, 14, '-', '0000-00-00', '-', '-', '-', '2019-02-10 09:18:08', '2019-02-10 09:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(13, 'atfalstyle@gmail.com', 'b7854c72cd98acfe869ee48f89d23efc', '2019-02-10 09:18:08', '2019-02-10 09:18:08');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `employee_insert` AFTER INSERT ON `users` FOR EACH ROW BEGIN
INSERT INTO employee(user_id, name, address, date_of_birth, gender, phone, status, email, pict) VALUES(NEW.id, "-", "-", "-", "-", "-", "-", NEW.email, "-");
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `employee_edu`
--
ALTER TABLE `employee_edu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employee_job`
--
ALTER TABLE `employee_job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employee_edu`
--
ALTER TABLE `employee_edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee_job`
--
ALTER TABLE `employee_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_edu`
--
ALTER TABLE `employee_edu`
  ADD CONSTRAINT `employee_edu_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_job`
--
ALTER TABLE `employee_job`
  ADD CONSTRAINT `employee_job_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
