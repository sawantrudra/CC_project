-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 09:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wis`
--

-- --------------------------------------------------------

--
-- Table structure for table `liked_videos`
--

CREATE TABLE `liked_videos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` text NOT NULL,
  `verification_code` text NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `profile_file_name` varchar(30) NOT NULL,
  `profile_file_extension` varchar(5) NOT NULL,
  `question_1` varchar(100) NOT NULL,
  `question_2` varchar(100) NOT NULL,
  `answer_1` varchar(20) NOT NULL,
  `answer_2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `user_email`, `user_password`, `verification_code`, `verified`, `first_name`, `last_name`, `profile_file_name`, `profile_file_extension`, `question_1`, `question_2`, `answer_1`, `answer_2`) VALUES
(1, 'mudra', 'rudmud@gmail.com', '25f9e794323b453885f5181f1b624d0b', '', 0, '', '', '', '', '', '', '', ''),
(2, 'Mugdha', 'mugs@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, '', '', '', '', '', '', '', ''),
(6, 'Rudra', 'sawantrudraarun@gmail.com', '202cb962ac59075b964b07152d234b70', '25fc3c216190a4f28febb747813e283f', 1, 'rudare', 'Sawa', '6.jpg', 'jpg', '', '', '', ''),
(8, 'MugdhaK', 'khatavkar.mugdha1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'aebefaff7f6d22f0f29f60e656fb5ecb', 1, '', '', '', '', 'bf?', 'room no?', 'rud', 'g26');

-- --------------------------------------------------------

--
-- Table structure for table `user_videos`
--

CREATE TABLE `user_videos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_videos`
--

INSERT INTO `user_videos` (`id`, `user_id`, `video_id`) VALUES
(17, 6, 29),
(18, 6, 30),
(19, 6, 31),
(20, 6, 32),
(21, 6, 33),
(22, 6, 34),
(23, 6, 35),
(24, 6, 36),
(25, 6, 37),
(26, 6, 38),
(27, 6, 39),
(28, 6, 40),
(29, 6, 41),
(30, 6, 42);

-- --------------------------------------------------------

--
-- Table structure for table `video_details`
--

CREATE TABLE `video_details` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(256) NOT NULL,
  `extension` varchar(5) NOT NULL,
  `filename` varchar(20) NOT NULL,
  `thumbnail` varchar(30) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_details`
--

INSERT INTO `video_details` (`id`, `title`, `description`, `extension`, `filename`, `thumbnail`, `likes`) VALUES
(29, 'vdrvzdvr', 'v vdrvvrrgv', 'mp4', '29.mp4', '29.png', 9),
(30, 'fgbfbfdh', 'fbdxybd', 'mp4', '30.mp4', '30.png', 8),
(31, 'rudrasvideo', 'elephant video uihjjnknkbhjbhkbvvkujh', 'mp4', '31.mp4', '31.jpg', 0),
(32, 'rudrasvideo', 'elephant video uihjjnknkbhjbhkbvvkujh', 'mp4', '32.mp4', '32.jpg', 0),
(33, 'jjkjkjjkjjnjjjjjjj', 'jknjknnkkkkkkknnknk', 'mp4', '33.mp4', '33.png', 0),
(34, 'dvffbdfb f', 'dbbbt', 'mp4', '34.mp4', '34.jpg', 0),
(35, 'fvzfdxv', 'dvxdfvd', 'mp4', '35.mp4', '35.jpg', 0),
(36, 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'mp4', '36.mp4', '36.jpg', 0),
(37, 'bbbbbbbbbbbbbbbbb', 'bbbbbbbbbbbbbbbbbbb', 'mp4', '37.mp4', '37.jpg', 0),
(38, 'cccc', 'ccccc', 'mp4', '38.mp4', '38.jpg', 0),
(39, 'dddddddddddddddddd', 'dddddddddddddddddddd', 'mp4', '39.mp4', '39.jpg', 0),
(40, 'rudrasvideo', 'dddddddddddddddddddd', 'mp4', '40.mp4', '40.jpg', 0),
(41, 'ddddddddddddddddddkkk', 'elephant video uihjjnknkbhjbhkbvvkujh', 'mp4', '41.mp4', '41.jpg', 0),
(42, 'dddddddddddddddddd', 'dddddddddddddddddddd', 'mp4', '42.mp4', '42.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `liked_videos`
--
ALTER TABLE `liked_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_videos`
--
ALTER TABLE `user_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_details`
--
ALTER TABLE `video_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `liked_videos`
--
ALTER TABLE `liked_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_videos`
--
ALTER TABLE `user_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `video_details`
--
ALTER TABLE `video_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
