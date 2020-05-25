-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 04:28 PM
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
-- Database: `twisomere`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(250) NOT NULL,
  `admin_Fname` varchar(250) NOT NULL,
  `admin_Lname` varchar(250) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_email` varchar(250) NOT NULL,
  `admin_tel` varchar(250) NOT NULL,
  `admin_password` text NOT NULL,
  `admin_status` int(11) NOT NULL,
  `admin_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_Fname`, `admin_Lname`, `admin_username`, `admin_email`, `admin_tel`, `admin_password`, `admin_status`, `admin_profile`) VALUES
(1, 'Iradukunda', 'Yves', 'yves', 'yves@gmail.com', '0780589970', '123', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(250) NOT NULL,
  `book_author` varchar(250) NOT NULL,
  `book_name` varchar(250) NOT NULL,
  `book_summary` varchar(250) NOT NULL,
  `book_cover` longtext NOT NULL,
  `book_attachment` varchar(250) NOT NULL,
  `level_id` int(250) NOT NULL,
  `book_quiz` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_author`, `book_name`, `book_summary`, `book_cover`, `book_attachment`, `level_id`, `book_quiz`) VALUES
(6, 'Iragira Kethy', 'Pixie and the green New', 'Pixie and the green Book MysteryPixie and the green Book Mysteryv Pixie and the green Book Mystery Pixie and the green Book MysteryPixie and the green Book Mystery', 'images.jpg', 'rightGreenPixie2021Color-FKB.pdf', 2, ''),
(7, 'Bagenzi John', 'Ndabaga', 'Who Will Save The Planet', 'Who_Will_Save_The_Planet-Cover.jpg', 'rightwho_will_save_the_planet-peter_mclennan-FKB.pdf', 3, ''),
(8, 'Kabera John', 'Testing 4 MB', 'hello the re ', 'Sams_Christmas_Present-curiosity-patience-cover.jpg', 'rightwho_will_save_the_planet-peter_mclennan-FKB.pdf', 4, ''),
(9, 'Kabera John', 'Testing 4 MB new', 'hello the re ', 'Sams_Christmas_Present-curiosity-patience-cover.jpg', 'rightsam-s-christmas-present-pratham-FKB.pdf', 5, ''),
(13, 'Cliff', 'inzozi za gacari', 'inzozi za gacari', 'about.jpg', 'rightInzozi Za Graca Machel_final.pdf', 1, ''),
(14, 'Cliff', 'UBuzima bwa zenele situ', 'UBuzima bwa zenele situ', 'ubuzima bwa zanele.JPG', 'rightUbuzima bwa Zanele Situ_final.pdf', 1, ''),
(15, 'Cliff', 'Inzozi Za Graca Machel', 'Inzozi Za Graca ', 'bg.jpg', 'rightInzozi Za Graca Machel_final.pdf', 1, ''),
(16, 'Denny', 'Kubeshya Nicyaha', 'good moral book', 'GreenPixie2021Color-FKB-cover.jpg', 'rightGreenPixie2021Color-FKB.pdf', 1, ''),
(17, 'Denny', 'Kubeshya Nicyaha 2', 'gggg', 'GreenPixie2021Color-FKB-cover.jpg', 'rightGreenPixie2021Color-FKB.pdf', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT 0,
  `choice` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `choice`) VALUES
(265, 2, 0, 'hypers '),
(266, 2, 0, 'your frient'),
(267, 2, 0, 'yes and me'),
(268, 2, 0, 'none'),
(269, 2, 1, 'programming language'),
(270, 1, 1, 'a'),
(271, 1, 0, 'b'),
(272, 1, 0, 'c'),
(273, 1, 0, 'F'),
(274, 1, 0, 'D'),
(280, 4, 1, 'a'),
(281, 4, 0, 'b'),
(282, 4, 0, 'c'),
(283, 4, 0, 'F'),
(284, 4, 0, 'D'),
(285, 5, 1, 'a'),
(286, 5, 0, 'b'),
(287, 5, 0, 'c'),
(288, 5, 0, '5'),
(289, 5, 0, '6'),
(290, 6, 1, 'a'),
(291, 6, 0, 'b'),
(292, 6, 0, 'c'),
(293, 6, 0, '5'),
(294, 6, 0, '6'),
(295, 7, 1, 'choice 1'),
(296, 7, 0, 'choice 2'),
(297, 7, 0, 'choice 3'),
(298, 7, 0, 'choice 4'),
(299, 7, 0, 'choice 5'),
(300, 8, 1, '1'),
(301, 8, 0, '2'),
(302, 8, 0, '3'),
(303, 8, 0, '4'),
(304, 8, 0, '5'),
(305, 9, 1, 'first choice'),
(306, 9, 0, 'scond choice'),
(307, 9, 0, 'third choice'),
(308, 9, 0, 'fourth choice'),
(309, 9, 0, 'fith choice'),
(310, 10, 0, 'Imfura'),
(311, 10, 1, 'Umuhererezi'),
(312, 10, 0, 'Ubuheta'),
(313, 10, 0, 'Ntago biri mu gitabo'),
(314, 10, 0, 'Ntabyo nzi'),
(315, 11, 1, 'Gukina na bagenzi be'),
(316, 11, 0, 'Guherekeza nyina mu murima mu gihe cy’ ihinga'),
(317, 11, 0, 'Guhinga mu misozi'),
(318, 11, 0, 'Kuryama '),
(319, 11, 0, 'Kuzerera'),
(320, 12, 1, 'Karekezi'),
(321, 12, 0, 'Kaneza'),
(322, 12, 0, 'karake '),
(323, 12, 0, 'Nyiramana '),
(324, 12, 0, 'Kamali'),
(325, 13, 0, 'Igihe cy’ ihinga'),
(326, 13, 0, 'Gutangira ishuri '),
(327, 13, 0, 'Gutangira ishuri'),
(328, 13, 0, 'Kujya gusura inshuti ze'),
(329, 13, 0, 'Kuzerera'),
(330, 14, 1, 'ko umurisa ajya kureba akazuba karenga'),
(331, 14, 0, 'Mbese ntimuziko umwana w’ umukobwa afite uburenganzira bungana n’ubwa musaza we'),
(332, 14, 0, 'Ko umurisa adakwiriye kujya ku ishuri'),
(333, 14, 0, 'Ko umurisa akwiye kujya ku ishuri'),
(334, 14, 0, 'Ko ababyeyi bagomba gufata abana bose kimwe'),
(335, 15, 1, 'Mu Rwanda'),
(336, 15, 0, 'Mu mujyi wa Matatiele mu burasirazuba bwa Cape'),
(337, 15, 0, 'Muri Uganda'),
(338, 15, 0, 'Mu cyaro cya Lesotho'),
(339, 15, 0, 'Muri Australia'),
(340, 16, 0, 'Umunani'),
(341, 16, 0, 'Itatu'),
(342, 16, 0, 'Icumi'),
(343, 17, 0, 'Umunani'),
(344, 17, 0, 'itatu'),
(345, 17, 0, 'Icumi'),
(346, 18, 1, 'a'),
(347, 18, 0, 'b'),
(348, 18, 0, 'c'),
(349, 18, 0, '5'),
(350, 18, 0, '6'),
(351, 19, 0, 'a'),
(352, 19, 1, 'b'),
(353, 19, 0, 'c'),
(354, 19, 0, '5'),
(355, 19, 0, '6'),
(356, 20, 0, 'a'),
(357, 20, 1, 'b'),
(358, 20, 0, 'c'),
(359, 20, 0, '5'),
(360, 20, 0, 'D'),
(361, 21, 0, '3'),
(362, 21, 0, '4'),
(363, 21, 1, 'ss'),
(364, 21, 0, 'fds'),
(365, 21, 0, 'd'),
(366, 22, 0, 'a'),
(367, 22, 1, 'b'),
(368, 22, 0, 'c'),
(369, 22, 0, 'F'),
(370, 22, 0, '6'),
(371, 23, 0, 'Mu gace k’umujyi mu gihugu cya Mozambike'),
(372, 23, 0, 'Mu Rwanda'),
(373, 23, 0, 'Muri Porutigali'),
(374, 23, 1, 'Mu gace k’icyaro mu gihugu cya Mozambike'),
(375, 23, 0, 'Mu budage'),
(376, 24, 1, 'Byari ikimenyetso cy’ubwiza n’ umugisha yari azanye mu muryango'),
(377, 24, 0, 'Kuko yari umuhererezi mu muryango'),
(378, 24, 0, 'Kuko yari umukobwa'),
(379, 24, 0, 'Kuko yavukiye mu gace k’icyaro'),
(380, 24, 0, 'Kuko yavukiye mu gace k’icyaro cyane'),
(381, 25, 0, 'Kuba umuganga'),
(382, 25, 1, 'uba umwarimu'),
(383, 25, 0, 'kuba umuyobozi'),
(384, 25, 0, 'Kuba umuhinzi'),
(385, 25, 0, 'kuba umushoramali'),
(386, 26, 0, 'Ubufaransa'),
(387, 26, 0, 'Mozambike'),
(388, 26, 0, 'Afurika yepfo'),
(389, 26, 0, 'Porutigali'),
(390, 26, 0, 'Ubutaliyani'),
(391, 27, 1, 'Samora Machel'),
(392, 27, 0, 'Graca Machel'),
(393, 27, 0, 'Umuvandimwe wa Graca'),
(394, 27, 0, 'Umubyeyi wa Graca'),
(395, 27, 0, 'Samora Graca1');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `fav_id` int(11) NOT NULL,
  `student_id` longtext DEFAULT NULL,
  `book_id` longtext DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`fav_id`, `student_id`, `book_id`, `time`) VALUES
(1, '1', '13', '2020-05-24 14:37:55'),
(2, '1', '14', '2020-05-24 14:38:00'),
(4, '3', '13', '2020-05-24 14:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(250) NOT NULL,
  `level` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level`) VALUES
(1, '1'),
(3, '2'),
(4, '4'),
(5, '5'),
(6, '3');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parent_id` int(250) NOT NULL,
  `sub_id` int(250) NOT NULL,
  `parent_Fname` varchar(250) NOT NULL,
  `parent_Lname` varchar(250) NOT NULL,
  `parent_username` varchar(255) NOT NULL,
  `parent_email` varchar(250) NOT NULL,
  `parent_tel` varchar(250) NOT NULL,
  `parent_password` text NOT NULL,
  `parent_status` int(11) NOT NULL,
  `parent_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `sub_id`, `parent_Fname`, `parent_Lname`, `parent_username`, `parent_email`, `parent_tel`, `parent_password`, `parent_status`, `parent_profile`) VALUES
(1, 1, 'Ndiho', 'Ben', 'kabera', 'kabera@gmail.com', '+250784331945', '12', 1, 'wp3087390-spider-man-into-the-spider-verse-wallpapers.jpg'),
(2, 0, 'yves', 'himbaza', 'himbaza', 'himbaza@gmail.com', '44444', 'h', 1, 'bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `plan_id` int(250) NOT NULL,
  `plan_name` varchar(250) NOT NULL,
  `plan_price` varchar(250) NOT NULL,
  `plan_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`plan_id`, `plan_name`, `plan_price`, `plan_description`) VALUES
(1, 'Starter', '1000', 'This will be user in 1 month and will be given books for free'),
(4, 'Basic', '1500', 'dsfhlsdk');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question` text COLLATE utf16_bin NOT NULL,
  `book_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question`, `book_id`) VALUES
(2, 'what is php', 10),
(4, 'one more last', 10),
(5, 'last test', 1),
(6, 'cssg', 10),
(7, 'ddddd', 1),
(8, 'last question', 1),
(9, 'last and last', 1),
(10, 'Umurisa n’umwana wa kangahe iwabo', 11),
(11, 'Umurisa yakundaga iki', 11),
(12, 'Inshuti yakadasohoka ya nyina w’umurisa yitwaga gute', 11),
(13, 'Ni iki umurisa yarategerezanije amatsiko', 11),
(14, 'Karake yabwiye iki ababyeyi be', 11),
(15, 'Zanele Situ yavukiye he', 14),
(16, 'Zanele Situ yatangiye kurwara afite imyaka ingahe?', 14),
(17, 'Zanele Situ yatangiye kurwara afite imyaka ingahe?', 14),
(18, 'css', 6),
(19, 'css', 6),
(20, 'css', 6),
(21, 'css', 6),
(22, 'css', 6),
(23, 'Graca yavukiye he?', 13),
(24, 'Kuki Graca yahawe iri zina?', 13),
(25, ' Graca yari afite izihe nzozi?', 13),
(26, 'Graca yabonye inkunga yo kujya kwiza Kaminuza mu kihe gihugu?', 13),
(27, 'Nyuma y’ubwigenge igihugu cya Mozambike cyayobowe nande?', 13);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` int(250) NOT NULL,
  `book_id` int(250) NOT NULL,
  `total_questions` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE `quiz_questions` (
  `question_id` int(250) NOT NULL,
  `quiz_id` int(250) NOT NULL,
  `question` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_result`
--

CREATE TABLE `quiz_result` (
  `quiz_result_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `score` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_result`
--

INSERT INTO `quiz_result` (`quiz_result_id`, `book_id`, `student_id`, `score`) VALUES
(1, 13, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int(250) NOT NULL,
  `sub_id` int(250) NOT NULL,
  `school_name` varchar(250) NOT NULL,
  `school_email` varchar(250) NOT NULL,
  `school_password` varchar(255) NOT NULL,
  `school_tel` varchar(250) NOT NULL,
  `school_status` int(11) NOT NULL,
  `school_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `sub_id`, `school_name`, `school_email`, `school_password`, `school_tel`, `school_status`, `school_profile`) VALUES
(1, 1, 'Stella', 'stella@gmail.com', '123', '250784331945', 1, ''),
(2, 0, 'inyange', 'inyange@gmail.com', 'inyange', '0788888888', 1, ''),
(3, 1, 'new', 'new@gmail.com', 'new', '66666', 1, ''),
(4, 1, 'Ishuri', 'ishuri@gmail.com', '123', '09976736737', 1, ''),
(5, 0, 'King David', 'kingdavid@gmail.com', '123', '0788845678', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(250) NOT NULL,
  `school_id` int(250) DEFAULT NULL,
  `student_Fname` varchar(250) NOT NULL,
  `student_Lname` varchar(250) NOT NULL,
  `student_gender` varchar(20) NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `level_id` int(250) NOT NULL,
  `parent_id` int(250) DEFAULT NULL,
  `student_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `school_id`, `student_Fname`, `student_Lname`, `student_gender`, `student_username`, `student_password`, `level_id`, `parent_id`, `student_profile`) VALUES
(1, 1, 'Irakoze', 'king', 'male', 'king', '123', 1, 0, 'vlcsnap-2019-02-28-07h33m50s047.png'),
(2, 1, 'Irakoze', 'king', 'male', 'ben', '123', 1, 0, 'vlcsnap-2019-02-28-07h33m50s047.png'),
(3, 0, 'Irakoze', 'king', 'female', 'irakoze', '123', 1, 1, 'wp2234543-coding-wallpapers.jpg'),
(4, 3, 'name', 'nmae', 'male', 'new_student', 'new', 1, 0, 'c.jpg'),
(5, 4, 'rrrttt', 'sdfghj', 'female', 'dgjka', 'asdd', 3, 0, 'bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `sub_id` int(250) NOT NULL,
  `plan_name` longtext NOT NULL,
  `sub_parent` int(255) NOT NULL,
  `sub_school` int(255) NOT NULL,
  `sub_start_date` date NOT NULL,
  `sub_end_time` date NOT NULL,
  `sub_student_number` varchar(250) NOT NULL,
  `sub_total_price` varchar(250) NOT NULL,
  `sub_status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`sub_id`, `plan_name`, `sub_parent`, `sub_school`, `sub_start_date`, `sub_end_time`, `sub_student_number`, `sub_total_price`, `sub_status`) VALUES
(1, 'Starter - 1000 Rwf', 0, 1, '2020-03-16', '2020-07-16', '2', '8000', 'processed'),
(2, 'Basic - 1500 Rwf', 0, 3, '2020-03-19', '2020-04-19', '1', '1500', 'processed'),
(3, 'Starter - 1000 Rwf', 0, 4, '2020-04-16', '2020-06-16', '1', '2000', 'processed'),
(4, 'Starter - 1000 Rwf', 1, 0, '2020-05-23', '2020-06-23', '1', '1000', 'processed');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(250) NOT NULL,
  `school_id` int(250) NOT NULL,
  `teacher_Fname` varchar(250) NOT NULL,
  `teacher_Lname` varchar(250) NOT NULL,
  `teacher_tel` varchar(20) NOT NULL,
  `teacher_username` varchar(255) NOT NULL,
  `teacher_email` varchar(250) NOT NULL,
  `teacher_password` varchar(250) NOT NULL,
  `level_id` int(250) NOT NULL,
  `teacher_profile` varchar(255) NOT NULL,
  `teacher_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `school_id`, `teacher_Fname`, `teacher_Lname`, `teacher_tel`, `teacher_username`, `teacher_email`, `teacher_password`, `level_id`, `teacher_profile`, `teacher_status`) VALUES
(1, 1, 'Ndiho', 'Ben', '32402340239', 'ken', 'ben@gmail.com', '123', 1, 'vlcsnap-2019-02-26-11h09m06s229.png', 1),
(2, 1, 'Kabahija', 'Clence', '32402340239', 'ben', 'clence@gmail.com', '123', 2, 'WIN_20200315_09_48_50_Pro.jpg', 1),
(4, 1, '', '', '0780589950', 'Lucifer', '', '123', 3, '', 0),
(5, 1, '', '', '0780589960', 'Queen', '', '123', 4, '', 0),
(6, 1, '', '', '0780589960', 'Queen Hope', '', '123', 5, '', 0),
(7, 1, '', '', '124345654', 'Queen me', '', '123', 6, '', 0),
(11, 3, 'ffff', 'ffff', '66666', 'new_teacher', 'sss@gmail.com', 'new', 1, 'curology-A9CUBfntOFQ-unsplash.jpg', 1),
(12, 4, 'Hh', 'Hhh', '6777899', 'ishiri', 'mugiranezahimbazayves@gmail.com', '123', 1, 'bg.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`fav_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `quiz_result`
--
ALTER TABLE `quiz_result`
  ADD PRIMARY KEY (`quiz_result_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=396;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parent_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `plan_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `question_id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz_result`
--
ALTER TABLE `quiz_result`
  MODIFY `quiz_result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `sub_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
