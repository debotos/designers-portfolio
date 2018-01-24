-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 24, 2018 at 03:01 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `designer_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(3) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `who_am_i` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `first_name`, `full_name`, `who_am_i`) VALUES
(1, 'Debotos', 'Debotos Das', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut possimus in hic molestias repellendus illo ullam odit quia velit. Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut possimus in hic molestias repellendus illo ullam odit quia velit. Qui expedita sit quo, maxime molestiae. Lorem ipsum dolor sit amet, consectetur adipisicing elit.');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`) VALUES
(1, 'Debotos Das', 'debotosdas@gmail.com', 'passme', 'download.png', '01790015380'),
(3, '3434', 'debotosdddas@gmail.com', '3434', 'firebase.png', '343434');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Logo Design'),
(2, 'Business Card'),
(3, 'Banner Ad'),
(4, 'T-shirt Design'),
(5, 'Photo Album');

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`id`, `image`, `info`, `category`) VALUES
(1, '5a65ac3f23866_download.png', 'update testing', 'T-shirt Design'),
(5, '5a65a8fdb8ad7_download.png', 'some', 'Business Card');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `facebook_profile` varchar(512) NOT NULL,
  `twitter_profile` varchar(512) NOT NULL,
  `google_plus_profile` varchar(512) NOT NULL,
  `youtube_profile` varchar(512) NOT NULL,
  `instagram_profile` varchar(512) NOT NULL,
  `upwork_profile` varchar(512) NOT NULL,
  `freelancer_profile` varchar(512) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `facebook_profile`, `twitter_profile`, `google_plus_profile`, `youtube_profile`, `instagram_profile`, `upwork_profile`, `freelancer_profile`, `mail`, `address`, `phone`) VALUES
(1, 'https://twitter.com/debotos', 'https://twitter.com/debotos', 'https://twitter.com/debotos', 'https://twitter.com/debotos', 'https://twitter.com/debotos', 'https://twitter.com/debotos', 'https://twitter.com/debotos', 'debotosdas@gmail.com', 'Doba(9240), Rupsa, Khulna, Bangladesh', '01790015380, 01982134040');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Debotos Das', 'thuindebotosdas@gmail.com', 'Testing Subject', 'll be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\''),
(2, 'Debotos Das', 'thuindebotosdas@gmail.com', 'Testing Subject', 'll be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\'');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `percentage` smallint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `percentage`) VALUES
(1, 'ADOBE PHOTOSHOP', 100),
(7, 'HTML/CSS', 85),
(11, 'ADOBE ILLUSTRATOR', 80),
(12, 'AFTER EFFECTS', 50);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `image` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `star` decimal(5,1) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `image`, `position`, `star`, `description`) VALUES
(2, 'Debotos Das', '5a6752298f7bb_download.png', 'Full Stack Web Developer', '3.5', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.   ');

-- --------------------------------------------------------

--
-- Table structure for table `whai_i_do`
--

CREATE TABLE `whai_i_do` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `info` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whai_i_do`
--

INSERT INTO `whai_i_do` (`id`, `name`, `icon`, `info`) VALUES
(5, 'UI/UX', 'fa-laptop', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'),
(7, 'WEB DESIGN', 'fa-desktop', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'),
(8, 'BRANDING', 'fa-pencil', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.                '),
(9, 'PRINT DESIGN', 'fa-paint-brush', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whai_i_do`
--
ALTER TABLE `whai_i_do`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `whai_i_do`
--
ALTER TABLE `whai_i_do`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
