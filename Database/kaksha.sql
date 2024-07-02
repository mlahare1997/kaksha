-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 11:39 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `el`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_course_student`
--

CREATE TABLE `apply_course_student` (
  `srno` int(11) NOT NULL,
  `id` int(15) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contect_number` varchar(15) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `payment` tinyint(1) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `course_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply_course_student`
--

INSERT INTO `apply_course_student` (`srno`, `id`, `surname`, `fname`, `lname`, `contect_number`, `email_id`, `payment`, `profile_img`, `fullname`, `course_id`) VALUES
(1, 2, 'Adam', 'Brown', '', '7359563508', 'adambrown102@gmail.com', 1, 'Admin/img/609a018750a8a.png', 'Adam Brown ', 4),
(2, 3, 'John', 'Smith', '', '7659865656', 'john102@gmail.com', 1, 'Admin/img/609a0986f1d77.png', 'John Smith ', 4),
(3, 4, 'Prince', 'Gangadiya', 'Hareshbhai', '9409856909', 'prince102@gmail.com', 1, 'Admin/img/609a094fa7e70.png', 'Prince Gangadiya Hareshbhai', 4);

-- --------------------------------------------------------

--
-- Table structure for table `coursedetail`
--

CREATE TABLE `coursedetail` (
  `course_id` int(20) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `course_detail` varchar(500) NOT NULL,
  `course_contect` varchar(20) NOT NULL,
  `course_amrp` int(20) NOT NULL,
  `course_dmrp` int(20) NOT NULL,
  `course_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursedetail`
--

INSERT INTO `coursedetail` (`course_id`, `course_title`, `course_detail`, `course_contect`, `course_amrp`, `course_dmrp`, `course_file`) VALUES
(3, 'Python', 'Learn Python like a Professional Start from the basics and go all the way to creating your own applications and games,like Tic Tac Toe and Blackjack!', '9409856909', 499, 999, 'img/python.jpg'),
(4, 'JavaScript', 'The modern JavaScript course for everyone! Master JavaScript with projects, challenges and theory and Advance Javascript. Many courses in one!', '7359563508', 490, 1299, 'img/js.jpg'),
(5, 'C++', 'Created in collaboration with Epic Games. Learn C++ from basics while making your first 4 video games in Unreal\r\nC++, the games industry standard language.', '7359563508', 449, 1199, 'img/cpp.jpg'),
(6, 'PHP Full Stack Web Developer', 'Leran Full Stack  Webdevelopment Using HTML, CSS, JavaScript , PHP & Mysql.Built Yor Own Websites.Become Full Stack Developer.', '7359563508', 799, 2299, 'img/php.jpg'),
(7, 'Complete C# Masterclass', 'Learn C# Programming - WPF Databse ,Linq, and gamedevelopement with unity more than the C# basic.!Join Now... ', '9409856909', 599, 1099, 'img/csharp.jpg'),
(8, 'Complete Wordpress Theme & Plugins', 'Learn how to create an AMAZING wordpress website! master wordpress and elementor page builder.', '9409856909', 490, 990, 'img/wordpress.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `course_lessons`
--

CREATE TABLE `course_lessons` (
  `course_id` int(11) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `lesson_title` varchar(255) NOT NULL,
  `lesson_desc` text NOT NULL,
  `lesson_id` int(15) NOT NULL,
  `lesson_video_link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_lessons`
--

INSERT INTO `course_lessons` (`course_id`, `course_title`, `lesson_title`, `lesson_desc`, `lesson_id`, `lesson_video_link`) VALUES
(3, 'Python', 'INTRODUCTION', 'This Lesson Shoe You what is python', 1, 'lesson_video/VID-20210511-WA0001.mp4'),
(4, 'JavaScript', 'INTRODUCTION', 'this lesson show you what is javascript.', 2, 'lesson_video/VID-20210511-WA0001.mp4'),
(4, 'JavaScript', 'While loop', 'In This trutorial you will learn about wile loop', 3, 'lesson_video/VID-20210511-WA0002.mp4'),
(4, 'JavaScript', 'For loop', 'In this turial you will learn about for loop in js.', 4, 'lesson_video/VID-20210511-WA0003.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `course_syllabus`
--

CREATE TABLE `course_syllabus` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `c_detail` varchar(2000) NOT NULL,
  `course_syllabus` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_syllabus`
--

INSERT INTO `course_syllabus` (`id`, `c_id`, `c_detail`, `course_syllabus`) VALUES
(1, 3, 'Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.<br>\r\nPython can be used on a server to create web applications.<br>\r\nPython can be used alongside software to create workflows.<br>\r\nPython can connect to database systems. It can also read and modify files.<br>\r\nPython can be used to handle big data and perform complex mathematics.<br>\r\nPython can be used for rapid prototyping, or for production-ready software development.<br>\r\nThe most recent major version of Python is Python 3, which we shall be using in this tutorial. However, Python 2, <br>\r\nalthough not being updated with anything other than security updates, is still quite popular.<br>\r\nIn this tutorial Python will be written in a text editor. It is possible to write Python in an Integrated Development Environment<br>, \r\nsuch as Thonny, Pycharm, Netbeans or Eclipse which are particularly useful when managing larger collections of Python files.<br>', 'History<br>\r\nFeatures<br>\r\nSetting up path<br>\r\nWorking with Python<br>\r\nBasic Syntax<br>\r\nVariable and Data Types<br>\r\nOperator<br>\r\n......etc'),
(2, 4, 'JavaScript was initially created to “make web pages alive”.<br>\r\nThe programs in this language are called scripts. They can be written right in a web page’s HTML and run automatically as the page loads.<br>\r\nScripts are provided and executed as plain text. They don’t need special preparation or compilation to run.<br>\r\nIn this aspect, JavaScript is very different from another language called Java.<br>', 'JavaScript Tutorial<br>\r\nJavaScript Basics<br>\r\nJS Comment<br>\r\nJS Variable<br>\r\nJS Global Variable<br>\r\nJS Data Types<br>\r\nJS Operators<br>\r\nJS If Statement<br>\r\nJS SwitchJS <br>\r\nLoopJS Function<br>');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `feedback_msg` varchar(500) NOT NULL,
  `feedback_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `feedback_msg`, `feedback_id`) VALUES
(3, 'jkgfhgdsgfhghjgfghjsgdfhjsgfhggf', 'kgsjkgdghsghgshjgfghjdghfhjgfghjgfjdg', 6),
(1, 'ruthsolanki102@gmail.com', 'done\n', 7);

-- --------------------------------------------------------

--
-- Table structure for table `fee_recipe`
--

CREATE TABLE `fee_recipe` (
  `id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `txnid` varchar(255) NOT NULL,
  `txnamount` int(11) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `txn_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `respmsg` varchar(255) NOT NULL,
  `gatewayname` varchar(255) NOT NULL,
  `banktxnid` varchar(255) NOT NULL,
  `bankname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee_recipe`
--

INSERT INTO `fee_recipe` (`id`, `stu_id`, `stu_email`, `order_id`, `txnid`, `txnamount`, `payment_mode`, `currency`, `txn_date`, `status`, `respmsg`, `gatewayname`, `banktxnid`, `bankname`) VALUES
(4, 2, 'adambrown102@gmail.com', 'ORDS24609031', '20210511111212800110168235402605227', 490, 'NB', 'INR', '2021-05-11 13:50:26.0', 'TXN_SUCCESS', 'Txn Success', 'SBI', '10814145814', 'SBI'),
(5, 3, 'john102@gmail.com', 'ORDS10817311', '20210511111212800110168720302633617', 490, 'NB', 'INR', '2021-05-11 13:52:21.0', 'TXN_SUCCESS', 'Txn Success', 'SBI', '10873263961', 'SBI'),
(6, 4, 'prince102@gmail.com', 'ORDS42571328', '20210511111212800110168886502613324', 490, 'NB', 'INR', '2021-05-11 13:55:07.0', 'TXN_SUCCESS', 'Txn Success', 'SBI', '18521374086', 'SBI');

-- --------------------------------------------------------

--
-- Table structure for table `grups`
--

CREATE TABLE `grups` (
  `grup_id` int(11) NOT NULL,
  `grup_name` varchar(255) NOT NULL,
  `grup_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grups`
--

INSERT INTO `grups` (`grup_id`, `grup_name`, `grup_img`) VALUES
(1, 'Webdevlopers', 'img/Screenshot (61).png'),
(2, 'Webdevlopers', 'img/Screenshot (61).png'),
(3, 'Webdevlopers', 'Admin/img/Screenshot (60).png');

-- --------------------------------------------------------

--
-- Table structure for table `grup_chat`
--

CREATE TABLE `grup_chat` (
  `msg_id` int(11) NOT NULL,
  `grup_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grup_chat`
--

INSERT INTO `grup_chat` (`msg_id`, `grup_id`, `sender_id`, `message`, `time`) VALUES
(1, 2, 984885013, 'Hi', '00:00:00'),
(2, 2, 984885013, 'hello', '17:41:56'),
(3, 2, 848850136, 'Hello Admin How r u?', '17:43:48'),
(4, 3, 745690139, 'hi', '10:17:42'),
(5, 3, 745690139, 'hello admin', '10:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `grup_member`
--

CREATE TABLE `grup_member` (
  `id` int(11) NOT NULL,
  `grup_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `post` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grup_member`
--

INSERT INTO `grup_member` (`id`, `grup_id`, `member_id`, `post`) VALUES
(1, 2, 984885013, 'Admin'),
(2, 2, 848850136, 'GrupMember'),
(3, 2, 848850131, 'GrupMember'),
(4, 2, 728850136, 'GrupMember'),
(5, 2, 848850123, 'GrupMember'),
(6, 2, 658850136, 'GrupMember'),
(7, 2, 848851234, 'GrupMember'),
(8, 3, 848850234, 'Admin'),
(9, 3, 745690139, 'GrupMember'),
(10, 3, 393807634, 'GrupMember'),
(11, 3, 1290767408, 'GrupMember');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(15) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `title`, `description`, `img`) VALUES
(2, 'BOOST YOUR DREAMS', 'Built developement skill with our site  any time any where..<br>\r\nwe envision world best e-learning experence', 'img/image6.jpg'),
(5, 'ARE YOU READY TO APPLY ?', 'Built developement skill with our site any time any where.we envision world best e-learning experence', 'img/image4.jpg'),
(6, 'Education IS Key To Success', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse', 'img/slider-langue.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `unique_id` int(30) NOT NULL,
  `chat_status` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `profile_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `unique_id`, `chat_status`, `username`, `email`, `password`, `role`, `status`, `profile_img`) VALUES
(1, 848850234, 'Active Now', 'Mr Admin', 'admin102@gmail.com', 'admin123', 'Admin', 1, 'Admin/img/609a01cdbc87f.png'),
(2, 745690139, 'Active Now', 'Adam Brown', 'adambrown102@gmail.com', '12651265', 'User', 1, 'Admin/img/609a018750a8a.png'),
(3, 393807634, 'Active Now', 'John Smith', 'john102@gmail.com', '12651265', 'User', 1, 'Admin/img/609a0986f1d77.png'),
(4, 1290767408, 'Active Now', 'Prince Gangadiya', 'prince102@gmail.com', '12651245', 'User', 1, 'Admin/img/609a094fa7e70.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `incoming_id` int(11) NOT NULL,
  `outgoing_id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `incoming_id`, `outgoing_id`, `message`, `time`) VALUES
(1, 745690139, 848850234, 'hi', '10:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_ans`
--

CREATE TABLE `quiz_ans` (
  `ans_id` int(255) NOT NULL,
  `ans_text` text NOT NULL,
  `aquation_id` int(255) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_ans`
--

INSERT INTO `quiz_ans` (`ans_id`, `ans_text`, `aquation_id`, `is_correct`) VALUES
(1, 'PHP', 1, 1),
(2, 'HTML', 1, 0),
(3, 'CSS', 1, 0),
(4, 'JS', 1, 0),
(5, 'CSS', 2, 0),
(6, 'HTML', 2, 1),
(7, 'JS', 2, 0),
(8, 'J QUERY', 2, 0),
(9, 'CSS', 3, 0),
(10, 'CSS3', 3, 1),
(11, 'HTML', 3, 0),
(12, 'JS', 3, 0),
(13, 'CSS', 4, 1),
(14, 'GHJKGHJ', 4, 0),
(15, 'HHJKHJK', 4, 0),
(16, 'HHKHHHJK', 4, 0),
(17, 'j Query', 5, 0),
(18, 'js', 5, 0),
(19, 'html', 5, 0),
(20, 'javascript', 5, 1),
(21, 'jkhhjhjh', 6, 0),
(22, 'hhjh', 6, 0),
(23, 'hhh', 6, 0),
(24, 'HTML', 6, 1),
(25, 'php', 7, 1),
(26, 'html', 7, 0),
(27, 'css', 7, 0),
(28, 'js', 7, 0),
(29, 'HyperText Preprocessor', 8, 1),
(30, 'persnol Home Page', 8, 0),
(31, 'cascading stylesheet', 8, 0),
(32, 'hypertext markup language', 8, 0),
(33, '.html', 9, 0),
(34, '.php', 9, 1),
(35, '.xml', 9, 0),
(36, '.js', 9, 0),
(37, '<php>', 10, 0),
(38, '?php?', 10, 0),
(39, '<??>', 10, 0),
(40, '<?php?>', 10, 1),
(41, 'php4', 11, 0),
(42, 'php3', 11, 0),
(43, 'php2', 11, 0),
(44, 'php5 and later', 11, 1),
(45, '//', 12, 0),
(46, '#', 12, 0),
(47, '/* */', 12, 0),
(48, 'A and B', 12, 0),
(49, 'HyperText preprocessor', 13, 1),
(50, 'persnol home page', 13, 0),
(51, 'personol php page', 13, 0),
(52, 'persnol page', 13, 0),
(53, 'HypreText Markup Language', 14, 1),
(54, 'hypertext preprocesor', 14, 0),
(55, 'hypertext makeup language', 14, 0),
(56, 'hypertext markup legal', 14, 0),
(57, 'cascade style sheets', 15, 0),
(58, 'cascading style set', 15, 0),
(59, 'cascading style sheets', 15, 1),
(60, '', 15, 0),
(61, 'Hypertext Preproccesor', 16, 1),
(62, 'Persnol Home Page', 16, 0),
(63, 'php', 16, 0),
(64, 'html', 16, 0),
(65, 'Personal Home Page', 17, 1),
(66, ' Hypertext Preprocessor', 17, 0),
(67, 'Pretext Hypertext Processor', 17, 0),
(68, 'Preprocessor Home Page', 17, 0),
(69, 'Object-Oriented', 18, 0),
(70, 'Object-Based', 18, 1),
(71, 'Assembly-language', 18, 0),
(72, 'High-level', 18, 0),
(73, 'Ignores the statements', 19, 1),
(74, 'Shows a warning', 19, 0),
(75, 'Prompts to complete the statement', 19, 0),
(76, 'Throws an error', 19, 0),
(77, 'keyword', 20, 0),
(78, 'decalration statement', 20, 1),
(79, 'data type', 20, 0),
(80, 'prototype', 20, 0),
(81, 'application', 21, 0),
(82, 'programming', 21, 0),
(83, 'scripting', 21, 1),
(84, 'none of these', 21, 0),
(85, 'ISP', 22, 0),
(86, 'server', 22, 0),
(87, 'browser', 22, 1),
(88, 'none of these', 22, 0),
(89, 'interpetered', 23, 1),
(90, 'compiled', 23, 0),
(91, '', 23, 0),
(92, '', 23, 0),
(93, '15$ /year', 24, 0),
(94, '10$/year', 24, 0),
(95, 'free of cost', 24, 1),
(96, '', 24, 0),
(97, '.jv', 25, 0),
(98, '.jvs', 25, 0),
(99, '.js', 25, 1),
(100, '.javascript', 25, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_description`
--

CREATE TABLE `quiz_description` (
  `qid` int(255) NOT NULL,
  `quiz_title` int(15) NOT NULL,
  `quiz_date` date NOT NULL DEFAULT current_timestamp(),
  `quiz_time` time NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `end_time` varchar(255) NOT NULL,
  `mark_que` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_description`
--

INSERT INTO `quiz_description` (`qid`, `quiz_title`, `quiz_date`, `quiz_time`, `status`, `end_time`, `mark_que`) VALUES
(2, 4, '2021-05-11', '14:17:34', 1, '60', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_que`
--

CREATE TABLE `quiz_que` (
  `quation_id` int(255) NOT NULL,
  `quation_text` text NOT NULL,
  `quiz_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_que`
--

INSERT INTO `quiz_que` (`quation_id`, `quation_text`, `quiz_id`) VALUES
(1, 'PHP Stand For...', 12),
(2, 'HTML STAND FOR...', 13),
(3, 'CSS STANS FOR...', 14),
(4, 'CSS', 14),
(5, 'JS Stand For...', 18),
(6, 'HTM stanlkshdhl', 39),
(7, 'PHP stand for', 40),
(8, 'PHP Stands for...', 72),
(9, ' PHP files have a default file extension of_______', 72),
(10, 'What should be the correct syntax to write a PHP code?', 72),
(11, ' Which version of PHP introduced Try/catch Exception?', 72),
(12, 'How should we add a single line comment in our PHP code?', 72),
(13, 'PHP Stands For...', 7),
(14, 'HTML Stands For....', 7),
(15, 'CSS Stands For...', 7),
(16, 'PHP Stands For...', 27),
(17, 'What does PHP stand for?', 1),
(18, 'Which type of JavaScript language is _____', 2),
(19, 'The \"function\" and \" var\" are known as:', 2),
(20, ' The \"function\" and \" var\" are known as:', 2),
(21, 'Javascript is _________ language.', 2),
(22, 'JavaScript is ______ Side Scripting Language.', 2),
(23, 'JavaScript is an ________ language.', 2),
(24, 'Cost for Using JavaScript in your HTML is _________ ', 2),
(25, 'JavaScript Code is written inside file having extension __________.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_score`
--

CREATE TABLE `quiz_score` (
  `id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `total_que` int(11) NOT NULL,
  `total_mark` int(11) NOT NULL,
  `stu_score` int(11) NOT NULL,
  `attemp_que` int(11) NOT NULL,
  `right_que` int(11) NOT NULL,
  `wrong_que` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `quiz_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_score`
--

INSERT INTO `quiz_score` (`id`, `stu_id`, `stu_name`, `stu_email`, `subject_id`, `subject_name`, `total_que`, `total_mark`, `stu_score`, `attemp_que`, `right_que`, `wrong_que`, `date`, `quiz_id`) VALUES
(1, 1, 'Rutvik Solanki', 'ruthsolanki102@gmail.com', 3, 'Python', 1, 1, 1, 1, 1, 0, '2021-05-09 12:12:14', 1),
(3, 2, 'Adam Brown', 'adambrown102@gmail.com', 4, 'JavaScript', 8, 8, 7, 8, 7, 1, '2021-05-11 08:57:53', 2);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `massage` varchar(500) NOT NULL,
  `rating` int(15) NOT NULL,
  `review_img` varchar(255) NOT NULL,
  `review_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`username`, `email`, `massage`, `rating`, `review_img`, `review_id`) VALUES
('Rutvik Solanki', 'ruthsolanki102@gmail.com', 'SOLANKI RUTVIK GIRDHARBHAI\nGANGADIYA PRINCE ', 5, '', 7),
('Rutvik Solanki', 'ruthsolanki102@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 5, 'img/606aea6d566bf.png', 8),
('Rutvik Solanki', 'ruthsolanki102@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 4, 'img/606aea6d566bf.png', 9);

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `site_logo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contect_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `about_img` varchar(255) NOT NULL,
  `head_line` varchar(1000) NOT NULL,
  `about_us` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `site_logo`, `address`, `contect_no`, `email`, `about_img`, `head_line`, `about_us`) VALUES
(1, 'img/606ae97cd6af7.png', 'Behind S.G Mall ,Ahemdabad', '9409856909', 'Prince102@gmail.com', 'img/about_us.png', 'Our Site Provide Online IT courses through videos and images...', 'Our system based on formalised teaching but with the help of electronic resources is known as E-learning. While teaching can be based in or out of the classrooms, the use of computers and the Internet forms the major component of E-learning.<br>\r\nE-learning can also be termed as a network enabled transfer of skills and knowledge, and the delivery of education is made to a large number of recipients at the same or different times. Earlier, it was not accepted wholeheartedly as it was assumed that this system lacked the human element required in learning.<br>\r\nNo doubt, it is equally important to take forward the concept of non-electronic teaching with the help of books and lectures, but the importance and effectiveness of technology-based learning cannot be taken lightly or ignored completely. It is believed that the human brain can easily remember and relate to what is seen and heard via moving pictures or videos. It has also been found that visuals, apart from holding the attention of the student, are also retained by the brain for longer periods.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `uname`, `email`, `password`, `img`) VALUES
('Solanki Rutvik G.', 'rutvik solanki', 'mayursolanki1222@gmail.com', '12651245', 'img/course2.jpg'),
('Solanki Rutvik G.', 'Hahaha', 'ruth1232@gmail.com', '12651254', 'img/IMG_20200802_182340.jpg'),
('dsm,fnnnlknlk', 'hjkbbkjbbh', 'bkjbjkbhjh', 'jbhjhjkhjkhkj', 'image/IMG_20200802_182348.jpg'),
('jkdbjkjkjkbgg', 'hjvfyg', 'ygy', 'gguhuhuh', 'image/IMG_20200802_182218.jpg'),
('rutvik', 'ruth', 'dih', 'njdjbjbd', 'img/IMG_20200810_164255.jpg'),
('sdfsd', 'rutvik solanki', 'rutviksolanki102@gmail.com', '12651254', 'img/IMG_20200802_182207.jpg'),
('html', 'css', 'ruth102@gmail.com', '12651245', 'img/IMG_20200810_164255.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_course_student`
--
ALTER TABLE `apply_course_student`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `coursedetail`
--
ALTER TABLE `coursedetail`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_lessons`
--
ALTER TABLE `course_lessons`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `course_syllabus`
--
ALTER TABLE `course_syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `fee_recipe`
--
ALTER TABLE `fee_recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grups`
--
ALTER TABLE `grups`
  ADD PRIMARY KEY (`grup_id`);

--
-- Indexes for table `grup_chat`
--
ALTER TABLE `grup_chat`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `grup_member`
--
ALTER TABLE `grup_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `quiz_ans`
--
ALTER TABLE `quiz_ans`
  ADD PRIMARY KEY (`ans_id`);

--
-- Indexes for table `quiz_description`
--
ALTER TABLE `quiz_description`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `quiz_que`
--
ALTER TABLE `quiz_que`
  ADD PRIMARY KEY (`quation_id`);

--
-- Indexes for table `quiz_score`
--
ALTER TABLE `quiz_score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_course_student`
--
ALTER TABLE `apply_course_student`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coursedetail`
--
ALTER TABLE `coursedetail`
  MODIFY `course_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course_lessons`
--
ALTER TABLE `course_lessons`
  MODIFY `lesson_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_syllabus`
--
ALTER TABLE `course_syllabus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fee_recipe`
--
ALTER TABLE `fee_recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `grups`
--
ALTER TABLE `grups`
  MODIFY `grup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `grup_chat`
--
ALTER TABLE `grup_chat`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grup_member`
--
ALTER TABLE `grup_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quiz_ans`
--
ALTER TABLE `quiz_ans`
  MODIFY `ans_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `quiz_description`
--
ALTER TABLE `quiz_description`
  MODIFY `qid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quiz_que`
--
ALTER TABLE `quiz_que`
  MODIFY `quation_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `quiz_score`
--
ALTER TABLE `quiz_score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
