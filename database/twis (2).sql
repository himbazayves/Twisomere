-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 01:38 PM
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
-- Database: `twis`
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
(15, 'Cliff', 'Inzozi Za Graca Machel', 'Inzozi Za Graca ', 'bg.jpg', 'rightInzozi Za Graca Machel_final.pdf', 1, '');

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
(1, 0, 'Ndiho', 'Ben', 'kabera', 'kabera@gmail.com', '+250784331945', '12', 1, 'wp3087390-spider-man-into-the-spider-verse-wallpapers.jpg'),
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
(4, 1, 'Ishuri', 'ishuri@gmail.com', '123', '09976736737', 1, '');

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
(3, 'Starter - 1000 Rwf', 0, 4, '2020-04-16', '2020-06-16', '1', '2000', 'processed');

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
  MODIFY `book_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `sub_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
