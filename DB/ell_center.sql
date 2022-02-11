-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 09:14 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ell_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`) VALUES
(1, 'PETER MOENNIG FOUNDATION', 'WE SUPPORT INTERNATIONAL PROJECTS THAT ARE COMMITED TOWARDS CHANGE AND INNOVATIVE THOUGHTS'),
(2, 'sdrtwert', 'asdyetry etr'),
(3, 'art wtryertyetrwrt', 'art wtryertyetrwrtart wtryertyetrwrtart wtryertyetrwrtart wtryertyetrwrtart wtryertyetrwrtart wtryertyetrwrtart wtryertyetrwrtart wtryertyetrwrtart wtryertyetrwrtart wtryertyetrwrt');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `keywords`, `description`) VALUES
(1, 0, 'IMPRESSUM', NULL, NULL),
(2, 0, 'Recent events', NULL, NULL),
(3, 0, 'Upcoming events', NULL, NULL),
(4, 0, 'contact', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mob` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagramm` varchar(255) NOT NULL,
  `racxa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`id`, `title`, `description`, `address`, `email`, `mob`, `facebook`, `instagramm`, `racxa`) VALUES
(1, 'PETER MOENNIG FOUNDATION', '<p>WE SUPPORT INTERNATIONAL PROJECTS THAT ARE COMMITED</p>\r\n<p>TOWARDS CHANGE AND INNOVATIVE THOUGHTS</p>', 'qwerqwerq', 'werqwerqwer@gmai.com', 'qwr qrq43rq', 'wert wertwert', 'wertwsertw', 'wertw ertwre'),
(2, 'asg gasdasd', '<p>zser etyhetry ertydrtydthg</p>', 'zsdrh hdgfhdfghjdfhdgfh', 'zset rydtryuetyrrty', 'zse tyrtertyetr', 'ars tsrt gsr', 'astr hedtrghs', 'zd hsthr');

-- --------------------------------------------------------

--
-- Table structure for table `english`
--

CREATE TABLE `english` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text,
  `price` varchar(255) NOT NULL DEFAULT '10',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'no-image.png',
  `hit` enum('0','1') NOT NULL DEFAULT '0',
  `new` enum('0','1') NOT NULL DEFAULT '0',
  `sale` enum('0','1') NOT NULL DEFAULT '0',
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `english`
--

INSERT INTO `english` (`id`, `category_id`, `name`, `content`, `price`, `keywords`, `description`, `img`, `hit`, `new`, `sale`, `date`) VALUES
(18, 0, ' IELTS / TOEFL', 'IELTS / TOEFLIELTS / TOEFLIELTS / TOEFLIELTS / TOEFLIELTS / TOEFLIELTS / TOEFL', '10', 'Modelling,future,Award', 'Modelling the Future Award', 'NweP7K22mcimeNGZcbcetR9YHum9p2mR.jpg', '1', '', '', '2019-06-12'),
(20, 0, 'Cambridge ESOL Exams', 'Cambridge ESOL ExamsCambridge ESOL ExamsCambridge ESOL ExamsCambridge ESOL ExamsCambridge ESOL ExamsCambridge ESOL ExamsCambridge ESOL Exams', '0', '', '', 'G-F84oVO2aV7hFZrE_9gJDmtd-QHHJ8v.jpg', '1', '', '', '2019-06-18'),
(21, 0, 'SAT/GMAT', 'SAT/GMATSAT/GMATSAT/GMATSAT/GMATSAT/GMATSAT/GMATSAT/GMAT', '0', 'just; post;', 'just; post; description', 'C-_H_x3M3nZSzwK5gih66J6EX1luRZE-.jpg', '1', '', '', '2019-06-15'),
(23, 0, 'English for Children', 'English for ChildrenEnglish for ChildrenEnglish for ChildrenEnglish for ChildrenEnglish for Children', '', '', '', 'jxFVlzF_TVuRCBr1zUxLWWrqHvf6TgWc.jpg', '', '', '', '2019-06-29'),
(25, 0, 'English for Teenagers', 'English for TeenagersEnglish for TeenagersEnglish for TeenagersEnglish for TeenagersEnglish for TeenagersEnglish for TeenagersEnglish for Teenagers', '10', NULL, NULL, 'no-image.png', '0', '0', '0', ''),
(26, 0, 'English for Adults ', 'English for Adults English for Adults English for Adults English for Adults English for Adults ', '10', NULL, NULL, 'no-image.png', '0', '0', '0', ''),
(27, 0, 'One –to -One Tuition', 'One –to -One TuitionOne –to -One TuitionOne –to -One TuitionOne –to -One TuitionOne –to -One TuitionOne –to -One TuitionOne –to -One TuitionOne –to -One Tuition', '10', NULL, NULL, 'no-image.png', '0', '0', '0', ''),
(28, 0, 'Business English ', 'Business English Business English Business English Business English Business English Business English ', '10', NULL, NULL, 'no-image.png', '0', '0', '0', ''),
(29, 0, 'Summer Courses ', 'Summer Courses Summer Courses Summer Courses Summer Courses Summer Courses Summer Courses Summer Courses Summer Courses ', '10', NULL, NULL, 'no-image.png', '0', '0', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text,
  `price` varchar(255) NOT NULL DEFAULT '10',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'no-image.png',
  `hit` enum('0','1') NOT NULL DEFAULT '0',
  `new` enum('0','1') NOT NULL DEFAULT '0',
  `sale` enum('0','1') NOT NULL DEFAULT '0',
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `content`, `price`, `keywords`, `description`, `img`, `hit`, `new`, `sale`, `date`) VALUES
(18, 0, 'Modelling the Future Award', '<p>The virtual world expands increasingly, which creates new challenges. First of all, virtual reality has come into close relationship to the physical world and has narrowed it. Internet and cyber culture became an integral part of our lives. The aim of our contest is to invite contestants, i.e. architects, artists, or other open minded individuals, to reveal, research, find influences, similarities and differences, which are giving rise to the human physical world&rsquo;s contact with the virtual: through the archi-technics projection of virtual space in physical space, through the creation of virtual architecture, through the internet and real social collisions research. The participants are not limited in working media, which may vary from architectural structures to light installations, from land-art to garden art to 3D-objects, from video-art and the re-modeლling of buildings to the artistic and architectural research of public space structures, from sound to performance and digital art e.g. created by smartphones.&nbsp;<br /><br />Working themes: public space, urban space, virtual reality, expanded reality, social media, identities, network communication, online community, online gaming, social gaming, blogs, chats and others. The contest is international. Preference is given to architectural, artistic, artistic and architectural joint applications.&nbsp;<br /><br />Submission of applications: individual projects as well as group projects are welcome. Participating students are allowed to consult with professionals and involve them in their work as mentors.&nbsp;<br />Deadline for application submission: November 20 (Monday), 6 p.m. (Tbilisi time).<br /><br />Jury session: November 22 (Wednesday), 3 p.m. (Tbilisi time)<br /><br />Prize Awarding Ceremony: November 22<br />Award:&nbsp;<br />For the first place &ndash; 1000 US Dollars<br />For the second place - 700 US Dollars<br />For the third place - 500 US Dollars<br /><br />Application:&nbsp;<br />- Text file (in .doc format), in which must be indicated:&nbsp;<br />the names and surnames of submitter (individual / group applicant), name and surname of the mentor, the name of the institute of higher learning, location of individual / team (country, city, state).&nbsp;<br />Contact information of the applicant (mobile phone number, e-mail). - Description of the project (not more than 1000 words in .doc format). - Project, which may be presented in the following form: photomontage, rendering, video recording, layout (if desired), sketch and other.&nbsp;<br />Applicants are not limited in project visualization.<br />- The application shall be submitted in English. Instructions for the application submission:<br />- The project shall be sent electronically.&nbsp;<br />- Deadline for project submission is November 20, 6 p.m. Tbilisi time.&nbsp;<br />- The project shall be sent to the following e-mail address: tamta.tamara.shavgulidze@a<wbr />rt.edu.ge indicating the name of the contest &ldquo;modeling the future&rdquo; in the subject line. Additional information:&nbsp;<br />-Single applicant is allowed to submit multiple contest applications, including, to multiple directions (architect, artist, joint project).&nbsp;<br />-Individual, as well as group works can be submitted. The organizers will not consider project that do not include all requested documents:&nbsp;<br />1. Text file (.doc Format), which shall read the names / surnames of applicant or individual / group applicants&rsquo; names and surnames, name and surname of mentor, name of school, location of individual / team (country, city, state).<br />2. Contact information of the applicant (mobile telephone number, e-mail).<br />3. Description of the project (not more than 1000 words (in .doc format)&nbsp;<br />4. Project that may be presented in the following form: photomontage, render, video record and other. Applicants are not limited in project visualization.&nbsp;<br />* The Peter Moenning Foundation retains the right to publish information about the winning projects and the names of project author / authors.&nbsp;<br />* All participants must present their projects to jury at November 22 at the open presentation, on which other participants and all interested audience are kindly invited.</p>', '10', 'Modelling,future,Award', 'Modelling the Future Award', 'NweP7K22mcimeNGZcbcetR9YHum9p2mR.jpg', '1', '', '', '2019-06-12'),
(20, 0, 'Lorem Ipsum', '<p>Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;</p>\r\n<p><img src=\"uploads/publications//David_Ferreira.jpg\" alt=\"\" width=\"575\" height=\"565\" /></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;Lorem ipsum&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><iframe src=\"//www.youtube.com/embed/idtRhja2rAM\" width=\"600\" height=\"350\"></iframe></p>', '0', '', '', 'G-F84oVO2aV7hFZrE_9gJDmtd-QHHJ8v.jpg', '1', '', '', '2019-06-18'),
(21, 0, 'just a post', '<p>Peter Moennig Foundation</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"uploads/publications//30653268_1679223395501639_4391023960402165760_o.jpg\" alt=\"\" width=\"596\" height=\"420\" />&nbsp;Peter Moennig while lecture with his collegues&nbsp;</p>', '0', 'just; post;', 'just; post; description', 'C-_H_x3M3nZSzwK5gih66J6EX1luRZE-.jpg', '1', '', '', '2019-06-15'),
(23, 0, '', '<p>&lt;p&gt;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;&lt;/p&gt;<br />&lt;p&gt;&lt;img src=\"uploads/publications//David_Ferreira.jpg\" alt=\"\" width=\"575\" height=\"565\" /&gt;&lt;/p&gt;<br />&lt;p&gt;&amp;nbsp;&lt;/p&gt;<br />&lt;p&gt;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;Lorem ipsum&amp;nbsp;&lt;/p&gt;<br />&lt;p&gt;&amp;nbsp;&lt;/p&gt;<br />&lt;p&gt;&amp;nbsp;&lt;/p&gt;<br />&lt;p&gt;&amp;nbsp;&lt;/p&gt;<br />&lt;p&gt;&lt;iframe src=\"//www.youtube.com/embed/idtRhja2rAM\" width=\"600\" height=\"350\"&gt;&lt;/iframe&gt;&lt;/p&gt;</p>', '', '', '', 'jxFVlzF_TVuRCBr1zUxLWWrqHvf6TgWc.jpg', '', '', '', '2019-06-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `english`
--
ALTER TABLE `english`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `english`
--
ALTER TABLE `english`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
