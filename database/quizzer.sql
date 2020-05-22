-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 08:52 PM
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
-- Database: `quizzer`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=396;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
