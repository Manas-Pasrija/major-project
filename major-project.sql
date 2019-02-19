-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 10:46 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `major-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `sender_msg_id` int(11) NOT NULL,
  `receiver_msg_id` int(11) NOT NULL,
  `msg_content` varchar(255) NOT NULL,
  `msg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `sender_msg_id`, `receiver_msg_id`, `msg_content`, `msg_time`) VALUES
(1, 1, 2, 'or bhai puneet mai manas kya haal h ', '2018-01-30 14:34:29'),
(2, 2, 1, 'Main badiya bhai manas tu suna ', '2018-01-30 14:34:29'),
(3, 1, 2, 'mai bi badiya chl ttyl ', '2018-01-30 14:34:29'),
(4, 3, 2, 'or bhai puneet mai Tushar  kya haal h ', '2018-01-30 14:34:29'),
(5, 3, 1, 'badiya mai bi bhai Manas from tushar ', '2018-01-30 14:34:29'),
(6, 1, 3, ' tushar mai  manas kya haal h ', '2018-01-30 14:34:29'),
(7, 1, 3, 'ddddd', '2018-01-30 14:34:29'),
(8, 2, 3, 'hello friends', '2018-01-30 14:34:29'),
(9, 1, 2, 'dfsdfsdasdfsad', '2018-01-30 14:34:29'),
(10, 1, 2, 'hello puneet kya haal h ', '2018-01-30 14:34:29'),
(11, 1, 3, 'or rishu kya haal h ', '2018-01-30 14:34:29'),
(12, 1, 3, 'sdfsdafdsf', '2018-01-30 14:34:29'),
(17, 1, 2, 'or bhai  tushar kya haal h', '2018-01-30 14:34:29'),
(18, 1, 2, 'or kya haal h', '2018-01-30 14:34:29'),
(20, 1, 2, 'or bta kya haal h ', '2018-01-30 14:34:29'),
(21, 1, 2, 'or bta kya haal h', '2018-01-30 14:34:29'),
(22, 1, 2, 'or bhai puneet kya haal h', '2018-01-30 14:34:29'),
(23, 1, 2, 'sb baidy ah ', '2018-01-30 14:34:29'),
(24, 1, 2, 'or puneet kya haaal h ', '2018-01-30 14:34:29'),
(25, 1, 2, 'kuch to bol puneet ', '2018-01-30 14:36:46'),
(26, 1, 2, 'or puneet ', '2018-01-30 14:39:54'),
(27, 1, 2, 'or bhai kya kr rha h', '2018-01-30 14:40:49'),
(28, 1, 2, 'sb shi chl rha h ', '2018-01-30 14:43:09'),
(29, 1, 2, 'dfdadsfds', '2018-01-30 14:43:15'),
(30, 1, 2, 'or bhai kya haal h', '2018-01-30 14:50:22'),
(43, 1, 3, 'nthg spl bro ', '2018-01-30 15:31:56'),
(44, 3, 1, 'ohhk bhai ', '2018-01-30 15:32:05'),
(45, 3, 1, 'chl good night bro ', '2018-01-30 15:32:24'),
(46, 1, 3, 'ohhk good night bro', '2018-01-30 15:32:42'),
(47, 1, 2, ' or puneet', '2018-01-30 16:06:39'),
(58, 1, 2, 'or bhai puneet kya bol rha h ', '2018-01-30 16:35:11'),
(65, 1, 2, 'ðŸ ðŸ ðŸ ðŸ ðŸ ðŸ ðŸ˜…ðŸ˜…ðŸ˜…ðŸ˜…ðŸ˜…ðŸ˜±', '2018-01-30 16:58:47'),
(66, 1, 3, 'hello tusharÂ ðŸ˜ŠðŸ˜Š', '2018-01-30 17:16:18'),
(67, 2, 1, 'hello puneetÂ kya haal h bhaiÂ ðŸ˜¯ðŸ˜¯ðŸ˜¯', '2018-01-30 17:40:20'),
(68, 2, 1, 'ohh sorry maineÂ apne aap ko puch rha hu manas sryÂ ', '2018-01-30 17:40:51'),
(69, 2, 1, 'chlÂ bhaiÂ good night ttyl...........Â ðŸ˜´ðŸ˜´ðŸ˜´', '2018-01-30 17:41:25'),
(70, 2, 1, 'so gya kya ?????', '2018-01-30 17:44:06'),
(71, 2, 3, 'ðŸ·ðŸ·ðŸ·ðŸ·pig hahahaa', '2018-01-30 17:54:17'),
(72, 3, 2, 'hai bhai puneetÂ kaisa chl rha hÂ ðŸ˜ðŸ˜ðŸ˜', '2018-01-31 09:47:19'),
(73, 3, 2, 'sb shi h ya ni bhai kya btaÂ to de bro...... plz\ndost ni hai kya bhai bta de kya hua h bhai bta to de .........', '2018-01-31 09:48:00'),
(74, 3, 1, 'badiyaÂ bhaiÂ ........... maiÂ to tu btaÂ ðŸ˜‹ðŸ˜‹ðŸ˜‹', '2018-01-31 09:52:51'),
(75, 3, 1, 'kha h bhaiÂ ðŸ˜”ðŸ˜žðŸ˜£', '2018-01-31 10:53:54'),
(76, 2, 3, 'hello Tushar..', '2018-02-01 07:39:46'),
(77, 1, 3, 'sdfdfsad', '2018-02-03 10:59:34'),
(78, 1, 2, 'or bhai kya haal hÂ ', '2018-02-08 08:48:18'),
(79, 1, 3, 'helllo ðŸ˜‹ðŸ˜ðŸ˜ðŸ˜sdlkfjasdlkfjsdl', '2018-02-23 15:32:14'),
(80, 1, 3, 'ðŸ˜ŠðŸ˜Š', '2018-04-10 08:40:37'),
(81, 1, 3, 'ðŸ˜ŠðŸ˜Š', '2018-04-10 08:40:43');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_content` varchar(255) NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_content` varchar(255) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `post_title`, `post_name`, `post_content`, `post_time`) VALUES
(1, 2, 'what is the meaning of ajax control.', 'ajax', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look l', '0000-00-00 00:00:00'),
(2, 3, 'what is the meaning of ajax control.', 'html', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look l', '0000-00-00 00:00:00'),
(3, 1, 'what is the meaning of ajax control.', 'php', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look l', '0000-00-00 00:00:00'),
(31, 1, 'hello', 'Php', 'dosto kya haal h sdfjas;fdsf;flsdjaf;lkjds;lkfasdf\nfjals;dfa;sdfjasd;fdsf', '2018-01-15 09:02:42'),
(36, 1, 'what is the meaning of html 5?', 'Ajax', 'kdjf;lasdfldf;lf;ljds;jlasd;kjflksddslkdslkdsfjjldsjfjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjsdfjsdfjdsfj', '2018-01-15 09:17:36'),
(38, 2, 'What is php control?', 'Css', 'kdsjf;lasdfjjlkdsjflsdajflfkjfsdlkjsd....', '2018-01-15 09:28:42'),
(39, 3, 'This is tushar firsht post ? ', 'Php', 'dslkfjsdflkjl;sdfjasdfjsdjfsldkfjsldkfj\njlsadkfjsd;lfjasd;lkfjdslkfjsadfsdfjsjfsdfasdlk;fsdjflsdfjlaksdfjlsdfjjfsdfs.....dddddd', '2018-01-15 09:30:24'),
(49, 1, 'This is the legend post of the day ?', 'Ajax', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one ', '2018-01-23 12:19:14'),
(50, 1, 'This is good post @ecommerce 2nd.', 'Css', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions ', '2018-01-23 12:21:56'),
(51, 1, 'THIS IS GOOD POST @ECOMMERCE 3RD.', 'Html', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions', '2018-01-23 12:30:28'),
(52, 3, 'This is first post of mine for today? ', 'Css', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-23 13:12:10'),
(53, 2, 'THIS IS GOOD POST @ECOMMERCE 2ND.-', 'Php', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-23 13:15:10'),
(54, 3, 'this is poost ', 'Ajax', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-23 13:20:53'),
(55, 2, 'This is good for us', 'Html', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-23 13:24:42'),
(56, 3, 'This post by tushar yes its ,true :D ', 'Php', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, ', '2018-01-23 13:27:02'),
(57, 2, 'This is post written by Punit pasrija ?', 'Ajax', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki 1500s is reproduced below for those interested. ', '2018-01-23 13:28:35'),
(58, 2, 'this is first post', 'Css', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki 1500s is reproduced below for those interested.', '2018-01-23 13:29:41'),
(59, 3, 'sdfasdfsdf', 'Php', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief,', '2018-01-23 13:30:06'),
(60, 2, 'this isf sd', 'Css', 'sdfasdfdsfasdThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief,', '2018-01-23 13:30:40'),
(61, 2, 'This is post done by mine?', 'Php', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief,', '2018-01-23 13:31:39'),
(62, 3, 'tushar post of the day', 'Php', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief,', '2018-01-23 13:32:23'),
(63, 2, 'this is good for us', 'Php', 'yes it is good for us ?', '2018-01-23 13:32:49'),
(64, 2, 'This is anther post of mine', 'Php', 'yes its post of The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief,', '2018-01-23 13:34:12'),
(76, 3, 'Pta ni bhai Puneet', 'Html', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-23 13:38:26'),
(77, 2, 'ok bhai ', 'Php', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-23 13:39:03'),
(78, 3, 'done its your time to php', 'Ajax', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-23 13:39:46'),
(79, 1, 'This is today my first post ye ', 'Php', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-23 13:42:03'),
(80, 1, 'post will not show', 'Html', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-23 13:42:32'),
(81, 3, 'kya hua bhai ', 'Php', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-23 13:43:02'),
(82, 1, 'this is post of the day ', 'Html', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-23 13:43:27'),
(83, 1, 'last post of the day manas pasrija', 'Ajax', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-23 13:44:03'),
(84, 3, 'Ohk bye Manas pasrija', 'Html', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-23 13:44:28'),
(85, 3, 'This is post to check all right or not?', 'Php', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-23 13:51:04'),
(86, 3, 'this is topic', 'Css', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-23 13:51:38'),
(87, 1, 'This is topic of the day ', 'Php', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-24 14:24:28'),
(88, 1, 'This is topic of the day ....', 'Html', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-24 14:25:35'),
(89, 1, 'This is topic legend of the day....', 'Css', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki', '2018-01-24 14:27:12'),
(90, 1, 'elegantshowdp.php', 'Php', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki 1500s is reproduced below for those interested.', '2018-01-24 14:30:10'),
(91, 1, 'sdfsadfsdfsadfsdfasdfsdf', 'Html', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki 1500s is reproduced below for those interested.', '2018-01-24 14:36:51'),
(92, 1, 'asdfasdfasdfasdfasdfsdfasdfasdfasdfsdf', 'Php', 'sdfasdfasdfasdfasdf', '2018-01-24 14:38:56'),
(93, 1, 'asdfsdfasdfasdfasdfasdfafsdfsadfasdfasdfsadfasdf', 'Php', 'sadfsadfasdasdfasdfasdfasdfasdfasdf', '2018-01-24 14:39:06'),
(94, 1, 'sdfsdfsdfsdfsdfsdf', 'Css', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki 1500s is reproduced below for those interested.', '2018-01-24 14:41:06'),
(95, 1, 'sadfasdfsadfasdf', 'Html', 'fsadfasfasdfsadfasdfsadfsadf', '2018-01-24 14:49:12'),
(96, 1, 'sdfsdfsdf', 'Php', 'sdfsafsdfsdfasdfsdfsdfsdfsdfsdf', '2018-01-24 14:54:12'),
(97, 3, 'sdfsdfsdfsadfasdf', 'Css', 'asdfasdfasdfasdfsdfasdfasdfasdf', '2018-01-24 14:57:35'),
(98, 1, 'sdfsadfasdfasdfsd', 'Php', 'sadfsadfasdfsdfsadfasdfsdfsd', '2018-01-24 14:58:09'),
(99, 3, 'asdfsdfasfsdfasd', 'Php', 'sadfsdfasdfsd', '2018-01-24 14:58:17'),
(100, 1, 'fasdfsdfsadfsadfsdafsadfsdfasdfasdf', 'Ajax', 'sdfasdfasdfasdfasd', '2018-01-24 14:59:17'),
(101, 1, 'This is topic two', 'Php', 'lksdfjlkasdfjlksdjflksdfjskld;fsd', '2018-01-24 15:00:34'),
(102, 3, 'sdfsafsdfasds', 'Css', 'adfsgfgasdfsdfasfasdfasfasdf', '2018-01-24 16:09:38'),
(103, 2, 'This is post of the day of mine please subscribe', 'Php', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, maki 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced ', '2018-01-24 16:17:21'),
(104, 1, 'This is today post of the day on 26th jan. republic day ...', 'Php', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, make the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reprodu', '2018-01-26 09:18:07'),
(105, 3, 'This is last post of the day by Tushar', 'Html', 'It has roots in a piece of classical Latin literature from 45 BC, make the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced', '2018-01-26 16:21:01'),
(106, 2, 'This is last post of mine guys ..', 'Php', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, make', '2018-01-26 17:57:02'),
(107, 1, 'This is 1st post of the day guys!!', 'Css', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text. ', '2018-01-28 10:31:13'),
(108, 1, 'This is check post of the day..', 'Php', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text.', '2018-01-28 11:08:04'),
(109, 1, 'This is another check post of the day ', 'Html', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text.ddddddddddddddddddd', '2018-01-28 11:08:57'),
(110, 2, 'This is post of the day.....', 'Php', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, Lorem Ipsum is not simply random text.ddddddddddddddddddd', '2018-01-28 13:06:31'),
(111, 1, 'This is last post of the day signing off ! ', 'Ajax', 'It has roots in a piece of classical Latin literature from 45 BC, make the 1500s is reproduced below for those interested. The standard chunk of Lorem Ipsum used since the 1500s is reproduced', '2018-01-30 17:14:40'),
(112, 3, 'This is legend post of the day bros!!', 'Php', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, It has roots in a piece of classical Latin literature from 45 BC, make the 1500s is reproduced below for thos', '2018-01-31 09:45:49'),
(113, 1, 'fsdfasdf', 'Php', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and Contrary to popular belief, It has roots in a piece of classical Latin literature from 45 BC, make the 1500s is reproduced below for thos', '2018-02-03 10:59:56'),
(114, 1, 'what is interegs', 'Php', 'fsdfsdf', '2018-02-23 15:31:02'),
(115, 1, 'sfasd', 'Php', 'Itâ€™s a dangerous world out there in the World Wide Web. Just as your mother may have told you to never talk to strangers, the same advice holds true for the virtual world. You may know to be wary of giving strangers your business bank account details. B', '2018-03-11 13:21:39'),
(116, 1, 'sdfsdf', 'Css', 'Internet provides a two-way flow of traffic that may be undesirable in many organizations where some information may concern exclusively within the organization or for Intranet. Intranet is a TCP/IP network that is modeled after the Internet that only wor', '2018-03-11 13:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `profile_pic`) VALUES
(1, 'manas', 'manas@gmail.com', 'manas', 'profile_pics/manasrcrop-compressor_012818123028.jpg'),
(2, 'puneet', 'puneet@gmail.com', 'puneet', 'profile_pics/water-1632785_012418171613.jpg'),
(3, 'tushar', 'tushar@gmail.com', 'tushar', 'profile_pics/bay-381241_1920_013118122216.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `sender_msg_id` (`sender_msg_id`),
  ADD KEY `receiver_msg_id` (`receiver_msg_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`sender_msg_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`receiver_msg_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
