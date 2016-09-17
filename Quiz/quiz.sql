-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2014 at 06:51 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadil`
--

CREATE TABLE IF NOT EXISTS `aadil` (
  `qnum` int(11) DEFAULT NULL,
  `question` text,
  `option1` text,
  `option2` text,
  `option3` text,
  `option4` text,
  `answer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aadil`
--

INSERT INTO `aadil` (`qnum`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(0, 'Birthdate Of Gandhiji?', '2nd October', '19th september', '28th May', '20th May', 1),
(1, 'Cildrens Day', '14th November', '26th Jan', '31st Feb', '15th August', 1),
(2, 'Indeoendence', '26th Jan', '15th August', '19th Sepetember', '20the Sep', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` text NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Computers'),
(2, 'Politics'),
(3, 'Science'),
(4, 'History');

-- --------------------------------------------------------

--
-- Table structure for table `coding`
--

CREATE TABLE IF NOT EXISTS `coding` (
  `qnum` int(11) DEFAULT NULL,
  `question` text,
  `option1` text,
  `option2` text,
  `option3` text,
  `option4` text,
  `answer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kinjal`
--

CREATE TABLE IF NOT EXISTS `kinjal` (
  `qnum` int(11) DEFAULT NULL,
  `question` text,
  `option1` text,
  `option2` text,
  `option3` text,
  `option4` text,
  `answer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kinjal`
--

INSERT INTO `kinjal` (`qnum`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(0, 'svsfhbvhsbvh', 'bhjbhj', 'bjhbjh', 'bjhbjh', 'bjhbjh', 2),
(1, 'vgh hubuh hubh jbhu yu hb', 'jhjkb', '145145', '15454', '1521', 3);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Name` varchar(50) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Name`, `username`, `password`) VALUES
('Shreyansh', 'shrey', 'shrey');

-- --------------------------------------------------------

--
-- Table structure for table `mamquests`
--

CREATE TABLE IF NOT EXISTS `mamquests` (
  `qnum` int(11) DEFAULT NULL,
  `question` text,
  `option1` text,
  `option2` text,
  `option3` text,
  `option4` text,
  `answer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mamquests`
--

INSERT INTO `mamquests` (`qnum`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(0, 'fadsf', 'df', 'fd', 'fgdf', 'fd', 4),
(1, 'qfrqe bgr heh ', 'svdsgv', 'hghg', 'hgh', 'hghg', 4),
(2, 'vsdv', 'hghg', 'hghgh', 'hggh', 'hgh', 4);

-- --------------------------------------------------------

--
-- Table structure for table `quiznames`
--

CREATE TABLE IF NOT EXISTS `quiznames` (
  `quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_name` text NOT NULL,
  `quiz_table` varchar(30) NOT NULL,
  `quiz_category` int(11) NOT NULL,
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `quiznames`
--

INSERT INTO `quiznames` (`quiz_id`, `quiz_name`, `quiz_table`, `quiz_category`) VALUES
(6, 'aadil Question', 'aadil', 4),
(7, 'kinjal', 'kinjal', 1),
(8, 'viraj', 'v12', 1),
(9, 'viraj', 'v12', 1),
(10, 'viraj', 'v12', 1),
(11, 'viraj', 'v12', 1),
(12, 'viraj', 'v12', 1),
(13, 'viraj', 'v12', 1),
(14, 'viraj', 'v12', 1),
(15, 'sample shrey', 'shreyquest', 3),
(16, 'hiralmam', 'mamquests', 1),
(17, 'Coding', 'Coding', 1),
(18, 'drumilquest', 'drumil', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
