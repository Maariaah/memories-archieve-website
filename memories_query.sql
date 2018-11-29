-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 08:10 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `memories_query`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_memories`
--

CREATE TABLE `all_memories` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `name` varchar(256) NOT NULL,
  `age` varchar(256) NOT NULL,
  `date` varchar(36) NOT NULL,
  `likes` int(11) NOT NULL,
  `comments` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL,
  `user_id` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_memories`
--

INSERT INTO `all_memories` (`id`, `content`, `name`, `age`, `date`, `likes`, `comments`, `dislikes`, `user_id`) VALUES
(59, 'NIKADA nisam podigla ruku na svoje dete. Pravio je probleme, kao i svi ostali, ali ja sam ga uvek ispravljala na lep na?in, objašnjavala, pri?ala, pokazivala na ', 'Marija', '11', '10.08.2018 12:04:12', -1, 2, 0, '157'),
(60, 'NIKADA nisam podigla ruku na svoje dete. Pravio je probleme, kao i svi ostali, ali ja sam ga uvek ispravljala na lep na?in, objašnjavala, pri?ala, pokazivala na sopstvenom primeru. Gledam ga i ponosna sam kakvog sam muškarca odgojila, sjajnog u svakom smislu. Tako da mi se povra?a na onu \"batina je iz raja izašla\", danas je mnogo iskompleksiranih i nesposobnih roditelja koji le?e živce na deci. Kao što ja naš divan pesnik rekao: \"Dok tu?ete dete, ono ne?e postati bolje ali ?e vama biti lakše...', 'Jelena', '12', '10.08.2018 12:04:32', -1, 0, 0, '158'),
(61, 'Test 3', 'Tamara', '13', '10.08.2018 12:04:47', -3, 0, 0, '159'),
(62, '1', '1', '11', '10.08.2018 02:24:29', 0, 0, 0, '159'),
(63, '1111', 'ss', '11', '10.08.2018 02:25:19', 0, 0, 0, '159'),
(64, '3333', '1', '33', '10.08.2018 02:26:20', 0, 0, 0, '159'),
(65, '3', 'a', '33', '10.08.2018 02:31:06', 0, 0, 0, '159'),
(66, '222222,,,', '1', '22', '10.08.2018 05:31:03', 0, 0, 0, '159'),
(67, '2', '1', '22', '10.17.2018 12:32:38', 0, 0, 0, '159');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `likes` varchar(255) NOT NULL,
  `dislikes` varchar(255) NOT NULL,
  `memo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `subject`, `time`, `status`, `likes`, `dislikes`, `memo_id`) VALUES
(56, '120', '', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '22:22:13', '', '', '', 7),
(57, '120', '', 'p', '22:22:24', '', '', '', 7),
(58, '120', '', 'nn', '22:31:46', '', '', '', 6),
(59, '120', '', 'aa', '22:36:20', '', '', '', 6),
(60, '120', '', 'v', '22:36:39', '', '', '', 5),
(61, '120', '', 'y', '22:46:54', '', '', '', 5),
(62, '120', '', 'ccc', '22:49:35', '', '', '', 5),
(63, '120', '', 'ggg', '22:49:46', '', '', '', 5),
(64, '120', '', 'ddd', '22:49:50', '', '', '', 5),
(65, '120', '', 'vv', '22:50:16', '', '', '', 9),
(66, '120', '', 'vvvvvvvvvvvv', '22:50:20', '', '', '', 9),
(67, '120', '', 'fffffffff', '22:51:57', '', '', '', 5),
(68, '120', '', 'ccccccccccccc', '22:55:23', '', '', '', 5),
(69, '120', '', 'ggg', '13:09:42', '', '', '', 5),
(70, '110', '', 'ccc', '13:55:39', '', '', '', 5),
(71, '110', '', 'ddd', '13:56:48', '', '', '', 5),
(72, '110', '', 'ddd', '13:57:23', '', '', '', 7),
(73, '110', '', 'ddd', '13:59:31', '', '', '', 7),
(74, '110', '', 'vvvvvvvvv', '13:59:40', '', '', '', 7),
(75, '110', '', 'vvv', '19:49:11', '', '', '', 5),
(76, '110', '', 'sss', '16:22:59', '', '', '', 7),
(77, '110', '', 'gggg', '01:14:52', '', '', '', 7),
(78, '110', '', 'gggggggggg', '01:15:02', '', '', '', 7),
(79, '110', '', 'bbb', '01:15:20', '', '', '', 7),
(80, '110', '', 'vvv', '01:55:48', '', '', '', 13),
(81, '110', '', 'fffffffffffffff', '17:30:07', '', '', '', 6),
(82, '110', '', 'vvvv', '16:26:19', '', '', '', 6),
(83, '110', '', 'bla bla', '12:49:56', '', '', '', 6),
(84, '152', '', 'dd', '20:12:36', '', '', '', 6),
(85, '159', '', 'aaa', '20:16:23', '', '', '', 59),
(86, '159', '', 'aaaa', '20:19:31', '', '', '', 59);

-- --------------------------------------------------------

--
-- Table structure for table `memories_comments`
--

CREATE TABLE `memories_comments` (
  `memo_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memories_comments`
--

INSERT INTO `memories_comments` (`memo_id`, `user_id`, `comment_id`) VALUES
(6, 120, 0),
(6, 120, 0),
(5, 120, 0),
(5, 120, 0);

-- --------------------------------------------------------

--
-- Table structure for table `memories_dislikes`
--

CREATE TABLE `memories_dislikes` (
  `dislike_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `memo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memories_dislikes`
--

INSERT INTO `memories_dislikes` (`dislike_id`, `user_id`, `memo_id`) VALUES
(NULL, 110, 5),
(NULL, 110, 13),
(NULL, 110, 7),
(NULL, 110, 18),
(NULL, 110, 16);

-- --------------------------------------------------------

--
-- Table structure for table `memories_likes`
--

CREATE TABLE `memories_likes` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `memo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memories_likes`
--

INSERT INTO `memories_likes` (`like_id`, `user_id`, `memo_id`) VALUES
(4, 120, 8),
(5, 120, 9),
(176, 110, 5),
(182, 110, 18),
(183, 110, 17),
(184, 110, 16),
(185, 110, 15),
(191, 110, 9),
(194, 150, 7),
(199, 159, 59);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_memories`
--
ALTER TABLE `all_memories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memories_likes`
--
ALTER TABLE `memories_likes`
  ADD PRIMARY KEY (`like_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_memories`
--
ALTER TABLE `all_memories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `memories_likes`
--
ALTER TABLE `memories_likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
