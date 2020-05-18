-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 01:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'muki', '1111'),
(2, 'yves', 'yves'),
(3, 'b', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(100) NOT NULL,
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `qid`, `ansid`) VALUES
(4, '5b85857d00f34', '5b85857d0ab77'),
(5, '5b85857d333f0', '5b85857d391b2'),
(6, '5b85857d59559', '5b85857d69efd'),
(7, '5b85857d917d6', '5b85857d97980'),
(8, '5b85857db810f', '5b85857dbd701'),
(9, '5e6f47377f4c7', '5e6f473780461'),
(10, '5e6f473786bfa', '5e6f473787a91'),
(11, '5e6f47378afb4', '5e6f47378be13'),
(12, '5e6f47378ec68', '5e6f47378f53c'),
(13, '5e73580eecd8c', '5e73580eef530'),
(14, '5e73580ef27b7', '5e73580f00969'),
(15, '5e735a5586571', '5e735a558b843'),
(16, '5e735a559319e', '5e735a5594105'),
(17, '5e735a5597abd', '5e735a55983fa');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(150) NOT NULL,
  `book_title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `username`, `subject`, `feedback`, `date`, `time`) VALUES
('5b86784504039', 'pravin', 'fyvgh@vgyvy.in', 'ytiu', 'yty', '2018-08-29', '03:41:09pm');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `timestamp` bigint(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `score_updated` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `username`, `eid`, `score`, `level`, `correct`, `wrong`, `date`, `timestamp`, `status`, `score_updated`) VALUES
(1, 'pravin', '5b85847bbe794', 3, 5, 2, 3, '2018-08-29 10:37:59', 1535538968, 'finished', 'true'),
(2, 'mugunth', '5b85847bbe794', 11, 5, 4, 1, '2018-08-29 10:39:42', 1535539122, 'finished', 'true'),
(3, 'yves', '5b85847bbe794', 0, 0, 0, 0, '2020-03-16 09:05:43', 1584349500, 'finished', 'true'),
(4, 'yves', '5e6f46c78bb4f', 0, 0, 0, 0, '2020-03-16 09:34:08', 1584351205, 'finished', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(100) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `qid`, `option`, `optionid`) VALUES
(13, '5b85857d00f34', ' Hello World!Hello World!', '5b85857d0ab77'),
(14, '5b85857d00f34', ' Hello World! * 2', '5b85857d0af5f'),
(15, '5b85857d00f34', 'Hello World!', '5b85857d0b347'),
(16, '5b85857d00f34', 'None of the above.', '5b85857d0b72f'),
(17, '5b85857d333f0', '( \'abcd\', 786 , 2.23, \'john\', 70.2 )', '5b85857d389e2'),
(18, '5b85857d333f0', 'abcd', '5b85857d38dca'),
(19, '5b85857d333f0', '(786, 2.23)', '5b85857d391b2'),
(20, '5b85857d333f0', 'None of the above.', '5b85857d3959a'),
(21, '5b85857d59559', 'int(x [,base])', '5b85857d69b15'),
(22, '5b85857d59559', 'long(x [,base] )', '5b85857d69efd'),
(23, '5b85857d59559', 'float(x)', '5b85857d6a2e5'),
(24, '5b85857d59559', 'str(x)', '5b85857d6a6cd'),
(25, '5b85857d917d6', 'unichr(x)', '5b85857d97980'),
(26, '5b85857d917d6', 'ord(x)', '5b85857d97d68'),
(27, '5b85857d917d6', 'hex(x)', '5b85857d98150'),
(28, '5b85857d917d6', 'oct(x)', '5b85857d98538'),
(29, '5b85857db810f', 'choice(seq)', '5b85857dbd701'),
(30, '5b85857db810f', 'randrange ([start,] stop [,step])', '5b85857dbdae9'),
(31, '5b85857db810f', 'random()', '5b85857dbded1'),
(32, '5b85857db810f', 'seed([x])', '5b85857dbe2b9'),
(33, '5e6f47377f4c7', 'ibwa', '5e6f473780461'),
(34, '5e6f47377f4c7', 'bakame', '5e6f473780467'),
(35, '5e6f47377f4c7', 'imbeba', '5e6f473780468'),
(36, '5e6f47377f4c7', 'inka', '5e6f473780469'),
(37, '5e6f473786bfa', 'g', '5e6f473787a8e'),
(38, '5e6f473786bfa', 't', '5e6f473787a91'),
(39, '5e6f473786bfa', 'f', '5e6f473787a92'),
(40, '5e6f473786bfa', 'f', '5e6f473787a93'),
(41, '5e6f47378afb4', 's', '5e6f47378be0c'),
(42, '5e6f47378afb4', 'f', '5e6f47378be11'),
(43, '5e6f47378afb4', 'h', '5e6f47378be12'),
(44, '5e6f47378afb4', 'd', '5e6f47378be13'),
(45, '5e6f47378ec68', 'dd', '5e6f47378f537'),
(46, '5e6f47378ec68', 'ss', '5e6f47378f53a'),
(47, '5e6f47378ec68', 'ssf', '5e6f47378f53b'),
(48, '5e6f47378ec68', 'ff', '5e6f47378f53c'),
(49, '5e73580eecd8c', 'a', '5e73580eef52a'),
(50, '5e73580eecd8c', 'as', '5e73580eef530'),
(51, '5e73580eecd8c', 'a', '5e73580eef531'),
(52, '5e73580eecd8c', 'a', '5e73580eef532'),
(53, '5e73580ef27b7', 's', '5e73580f00962'),
(54, '5e73580ef27b7', 'a', '5e73580f00967'),
(55, '5e73580ef27b7', 'a', '5e73580f00968'),
(56, '5e73580ef27b7', 'd', '5e73580f00969'),
(57, '5e735a5586571', 'd', '5e735a558b843'),
(58, '5e735a5586571', 'd', '5e735a558b853'),
(59, '5e735a5586571', 'd', '5e735a558b854'),
(60, '5e735a5586571', 'd', '5e735a558b855'),
(61, '5e735a559319e', 'dd', '5e735a5594105'),
(62, '5e735a559319e', 'dd', '5e735a5594109'),
(63, '5e735a559319e', 'dd', '5e735a559410a'),
(64, '5e735a559319e', 'sss', '5e735a559410b'),
(65, '5e735a5597abd', 'ss', '5e735a55983f6'),
(66, '5e735a5597abd', 's', '5e735a55983f9'),
(67, '5e735a5597abd', 'sd', '5e735a55983fa'),
(68, '5e735a5597abd', 'ss', '5e735a55983fb');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(100) NOT NULL,
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `eid`, `qid`, `qns`, `choice`, `sn`) VALUES
(4, '5b85847bbe794', '5b85857d00f34', 'What is the output of print str * 2 if str = \'Hello World!\'?', 4, 1),
(5, '5b85847bbe794', '5b85857d333f0', 'What is the output of print tuple[1:3] if tuple = ( \'abcd\', 786 , 2.23, \'john\', 70.2 )?', 4, 2),
(6, '5b85847bbe794', '5b85857d59559', 'Which of the following function convert a string to a long in python?', 4, 3),
(7, '5b85847bbe794', '5b85857d917d6', 'Which of the following function convert an integer to an unicode character in python?', 4, 4),
(8, '5b85847bbe794', '5b85857db810f', 'Which of the following function returns a random item from a list, tuple, or string?', 4, 5),
(9, '5e6f46c78bb4f', '5e6f47377f4c7', 'Ni ibihe bisimba biri kuvugwa', 4, 1),
(10, '5e6f46c78bb4f', '5e6f473786bfa', 'ggg', 4, 2),
(11, '5e6f46c78bb4f', '5e6f47378afb4', 'dffg', 4, 3),
(12, '5e6f46c78bb4f', '5e6f47378ec68', 'ffff', 4, 4),
(13, '5e7357f2ecf1f', '5e73580eecd8c', 'dfd', 4, 1),
(14, '5e7357f2ecf1f', '5e73580ef27b7', 'ddd', 4, 2),
(15, '5e735a0b30b97', '5e735a5586571', 'fffff', 4, 1),
(16, '5e735a0b30b97', '5e735a559319e', 'dd', 4, 2),
(17, '5e735a0b30b97', '5e735a5597abd', 'ss', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(100) NOT NULL,
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `eid`, `title`, `correct`, `wrong`, `total`, `time`, `date`, `status`) VALUES
(2, '5b85847bbe794', 'Python', 3, 1, 5, 2, '2018-08-29 10:40:38', 'enabled'),
(4, '5e6f46c78bb4f', 'Bakame', 2, 1, 4, 10, '2020-03-16 09:32:43', 'enabled'),
(5, '5e6f50344128e', 'Hhh', 2, 1, 2, 10, '0000-00-00 00:00:00', 'disabled'),
(6, '5e6f50982a0c0', 'Ggggg', 2, 1, 2, 34, '0000-00-00 00:00:00', 'disabled'),
(7, '5e7357f2ecf1f', 'Myquiz', 2, 3, 2, 3, '0000-00-00 00:00:00', 'disabled'),
(8, '5e735a0b30b97', 'Bakame Ni Ntare', 2, 1, 3, 3, '0000-00-00 00:00:00', 'disabled');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `username`, `score`, `time`) VALUES
(1, 'pravin', 3, '2018-08-29 10:37:59'),
(2, 'mugunth', 11, '2018-08-29 10:39:42'),
(3, 'yves', 0, '2020-03-16 09:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `rollno`, `branch`, `gender`, `username`, `phno`, `password`) VALUES
(4, 'Kadhamburi', '732116104026', 'ECE', 'M', 'kadhu', 9887661361, 'b59c67bf196a4758191e42f76670ceba'),
(3, 'Kiran', '732116104022', 'CSE', 'M', 'kiran', 9876543212, 'b59c67bf196a4758191e42f76670ceba'),
(2, 'Mugunthan', '732116104036', 'CSE', 'M', 'mugunth', 9514444471, 'b59c67bf196a4758191e42f76670ceba'),
(5, 'Pravin', '732116104049', 'CSE', 'M', 'pravin', 8769891099, 'c86da2729ab8f79d8f582e9abc469eb0'),
(6, 'Yves', '13', 'CSE', 'M', 'yves', 988888, 'afe3bd960b4c46a68580c4e564cca24e');

-- --------------------------------------------------------

--
-- Table structure for table `user_answer`
--

CREATE TABLE `user_answer` (
  `id` int(100) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `correctans` varchar(50) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_answer`
--

INSERT INTO `user_answer` (`id`, `qid`, `ans`, `correctans`, `eid`, `username`) VALUES
(1, '58027e82e62e3', '58027e82f2412', '58027e82f2412', '5802790f793b1', 'sonudoo'),
(2, '58027e833dd54', '58027e8347514', '58027e8347514', '5802790f793b1', 'sonudoo'),
(3, '58027e8371483', '58027e838f19a', '58027e838f19a', '5802790f793b1', 'sonudoo'),
(4, '5b85857d00f34', '5b85857d0af5f', '5b85857d0ab77', '5b85847bbe794', 'pravin'),
(5, '5b85857d333f0', '5b85857d389e2', '5b85857d391b2', '5b85847bbe794', 'pravin'),
(6, '5b85857d59559', '5b85857d69efd', '5b85857d69efd', '5b85847bbe794', 'pravin'),
(7, '5b85857d917d6', '5b85857d97980', '5b85857d97980', '5b85847bbe794', 'pravin'),
(8, '5b85857db810f', '5b85857dbdae9', '5b85857dbd701', '5b85847bbe794', 'pravin'),
(9, '5b85857d00f34', '5b85857d0ab77', '5b85857d0ab77', '5b85847bbe794', 'mugunth'),
(10, '5b85857d333f0', '5b85857d391b2', '5b85857d391b2', '5b85847bbe794', 'mugunth'),
(11, '5b85857d59559', '5b85857d69efd', '5b85857d69efd', '5b85847bbe794', 'mugunth'),
(12, '5b85857d917d6', '5b85857d97980', '5b85857d97980', '5b85847bbe794', 'mugunth'),
(13, '5b85857db810f', '5b85857dbded1', '5b85857dbd701', '5b85847bbe794', 'mugunth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(150) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
