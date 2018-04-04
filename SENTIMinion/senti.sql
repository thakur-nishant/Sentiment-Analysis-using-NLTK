-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2016 at 06:03 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senti`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `m_id` int(10) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`m_id`, `m_name`, `rating`) VALUES
(100, 'X-Men: The Last Stand (2006)', 3.5),
(101, 'kungfupanda', 5),
(102, 'SpiderMan ', 3),
(103, 'ThePrestige', 5),
(104, 'TheGladiator', 5),
(105, 'IceAge', 5);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `r_id` int(11) NOT NULL,
  `m_id` int(10) NOT NULL,
  `data` varchar(5000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `u_id` int(11) NOT NULL,
  `score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`r_id`, `m_id`, `data`, `date`, `u_id`, `score`) VALUES
(27, 100, 'very good movie.', '2016-04-22 09:37:20', 1, 5),
(28, 100, 'awesome movie. loved the action.', '2016-04-22 09:37:26', 2, 5),
(29, 101, 'good movie', '2016-04-22 09:37:32', 2, 5),
(32, 100, 'good  movie but bad animation ', '2016-04-22 11:36:00', 2, 3.5),
(35, 100, 'Ratner has taken the challenge to direct this new edition of the X-Men Franchise and has officially hit a home-run. Visually amazing, great plot twists, incredible fight scenes, and a final touch of humor. If you are a a Marvel fan or just a fan of the movies, then you will not be upset with X3. I could''t turn away from the screen and I found myself hoping that it wouldn''t end. I recommend to anyone remotely interested, go and see this flick. However I would be wary of taking the kids, this is rated PG-13 for a reason. \r\n', '2016-04-23 06:49:06', 5, 4.5),
(36, 100, 'Didnt like the movie . bad animation. bad story. waste of time and money', '2016-04-23 07:06:31', 3, 1),
(37, 102, 'good movie but bad animation\r\n', '2016-04-24 07:27:13', 8, 3.5),
(38, 102, 'bad as expected\r\ncould have been better\r\n', '2016-04-24 07:28:58', 8, 1),
(39, 103, 'awesome movie. superb story and extreme suspence', '2016-04-24 07:41:21', 8, 5),
(40, 105, 'good movie for kids .fun to watch ', '2016-04-24 07:46:10', 8, 5),
(41, 105, 'awesome movie\r\n', '2016-04-24 07:48:55', 8, 5),
(42, 100, 'good action scenes and decent animation but bad direction', '2016-04-24 08:13:23', 8, 3.5),
(44, 104, 'I love history, and to me, Gladiator is a masterpiece. It is the most accurate picture of the Roman Empire Hollywood has ever put out. People declare Spartacus a masterpiece, but Gladiator far outdoes Spartacus in quality. The costuming, the acting, the screenplay, the scenery, and the fighting styles made me think that I had traveled back to 180 A.D. Russell Crowe is a true Hollywood tough guy, and he is superb in this movie. Joaquin Phoenix is outstanding as a villain, one of the best in movie history. He played his character as if it were a psychologist''s dream case. Connie Nielsen plays one of the strongest female characters that I have ever seen. The choreographer of the action sequences was brilliant. Ridley Scott did an outstanding job in recreating the Empire, including the multitude of ethnic groups within the Empire and accurately depicting everyday life. If you''re looking for insight into what the Roman Empire was like, this is a perfect depiction.', '2016-04-24 08:19:21', 8, 5),
(46, 101, 'fun to watch . good story', '2016-04-24 08:22:38', 8, 5),
(52, 104, 'awesome movie.awesome action\r\n', '2016-04-24 08:38:51', 8, 5),
(53, 105, 'good animation and nice story\r\n', '2016-04-24 08:53:27', 8, 5),
(54, 103, 'this movie is too good. must watch ! .awesome concept', '2016-04-24 08:56:36', 8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_pass`, `email`) VALUES
(1, 'admin', 'admin', 'admin@admin.com'),
(2, 'abc', 'abc', 'abc@xyz.com'),
(3, 'benito', 'xiebenito', 'ben@gmail.com'),
(4, 'siddhip505', 'balonsandcakes123', 'sp.siddhip@ymail.com'),
(5, 'nishant', '123', 'nishant@xyz.com'),
(8, 'xie', 'xie', 'xie@xie.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`m_id`),
  ADD UNIQUE KEY `m_id` (`m_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
