-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 06:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `sub` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `sub`) VALUES
(1, 'Bachelor of Arts (General)'),
(2, 'Bachelor of Commerce (General)'),
(3, 'Bachelor og Science (General)'),
(4, 'Bachelor of Social Work (General'),
(5, 'BA Honours in Hindi'),
(6, 'MA in Psychology'),
(7, 'MA in Economics'),
(8, 'MA in Hindi'),
(9, 'Master of Commerce'),
(10, 'Bachelor of Computer Applications'),
(11, 'Bachelor of Arts'),
(12, 'MA in Distance Education'),
(13, 'BA Honours in Sociology'),
(14, 'Master of Arts (Jyotish)');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `t_email` varchar(55) NOT NULL,
  `t_name` varchar(55) NOT NULL,
  `q_date` varchar(25) NOT NULL,
  `q_time` varchar(25) NOT NULL,
  `update_date` varchar(25) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `email`, `subject`, `message`, `t_email`, `t_name`, `q_date`, `q_time`, `update_date`, `status`) VALUES
(1, 'Rajat Sharma', 'sharmarajat687@gmail.com', 'Study Material', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'teacher1@gmail.com', 'Teacher1', '2021-12-03 ', '20:21:13', '2021-12-03 ', 3),
(2, 'Rajat Sharma', 'sharmarajat687@gmail.com', 'Practicals', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'teacher2@gmail.com', 'Teacher2', '2021-12-03 ', '20:23:08', '', 0),
(3, 'Rajat Sharma', 'sharmarajat687@gmail.com', 'Hall ticket', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'teacher4@gmail.com', 'Teacher4', '2021-12-03 ', '20:23:18', '', 0),
(4, 'Rajat Sharma', 'sharmarajat687@gmail.com', 'Assignments', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'teacher1@gmail.com', 'Teacher1', '2021-12-03 ', '20:23:28', '', 1),
(5, 'Rajat Sharma', 'sharmarajat687@gmail.com', 'Hall ticket', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'teacher4@gmail.com', 'Teacher4', '2021-12-03 ', '22:04:34', '', 0),
(6, 'Rajat Sharma', 'sharmarajat687@gmail.com', 'Practicals', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', 'teacher2@gmail.com', 'Teacher2', '2021-12-03 ', '22:28:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `sub` varchar(150) NOT NULL,
  `teacher_name` varchar(52) NOT NULL,
  `teacher_email` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `sub`, `teacher_name`, `teacher_email`) VALUES
(1, 'Study Material', 'Teacher1', 'teacher1@gmail.com'),
(2, 'Learner Support', 'Teacher1', 'teacher1@gmail.com'),
(3, 'Assignments', 'Teacher1', 'teacher1@gmail.com'),
(4, 'Study Material', 'Teacher1', 'teacher1@gmail.com'),
(5, 'Learner Support', 'Teacher1', 'teacher1@gmail.com'),
(6, 'Practicals', 'Teacher2', 'teacher2@gmail.com'),
(7, 'Synopsis', 'Teacher2', 'teacher2@gmail.com'),
(8, 'Projects', 'Teacher2', 'teacher2@gmail.com'),
(9, 'Examination', 'Teacher2', 'teacher2@gmail.com'),
(10, 'Fresh Admission', 'Teacher2', 'teacher2@gmail.com'),
(11, 'Re-admission', 'Teacher3', 'teacher3@gmail.com'),
(12, 'Re-Registration', 'Teacher3', 'teacher3@gmail.com'),
(13, 'Credit Transfer', 'Teacher3', 'teacher3@gmail.com'),
(14, 'Online Admission', 'Teacher3', 'teacher3@gmail.com'),
(15, 'Migration Certificate', 'Teacher3', 'teacher3@gmail.com'),
(16, 'Duplicate ID Card', 'Teacher4', 'teacher4@gmail.com'),
(17, 'Transcript/Genuineness/Verification', 'Teacher4', 'teacher4@gmail.com'),
(18, 'Hall ticket', 'Teacher4', 'teacher4@gmail.com'),
(19, 'Re-evaluation', 'Teacher4', 'teacher4@gmail.com'),
(20, 'Change of Correspondence Address', 'Teacher4', 'teacher4@gmail.com'),
(21, 'Change of Programme', 'Teacher4', 'teacher4@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `flag` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `flag`) VALUES
(1, 'Teacher1', 'teacher1@gmail.com', '12345', '8447886644', 1),
(2, 'Rajat Sharma', 'sharmarajat687@gmail.com', '12345', '8447886641', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
