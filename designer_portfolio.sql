-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2018 at 08:22 AM
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
(1, 'Debotos Das', 'debotosdas@gmail.com', 'passme', 'download.png', '01790015380');

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
(6, '5a68b786249ee_project1.jpg', 'Reference site about Lorem Ipsum.', 'Logo Design'),
(7, '5a68b79462fad_project2.jpg', 'Reference site about Lorem Ipsum.', 'Logo Design'),
(8, '5a68b7a130e60_project3.jpg', 'Reference site about Lorem Ipsum.', 'Logo Design'),
(9, '5a68b7ace35d7_project4.jpg', 'Reference site about Lorem Ipsum.', 'Logo Design'),
(10, '5a68b7b92e12b_project5.jpg', 'Reference site about Lorem Ipsum.', 'Logo Design'),
(11, '5a68b7c4d0942_project6.jpg', 'Reference site about Lorem Ipsum.', 'Logo Design'),
(12, '5a68b7d1335a5_project7.jpg', 'Reference site about Lorem Ipsum.', 'Logo Design'),
(13, '5a68b7ded041a_project8.jpg', 'Reference site about Lorem Ipsum.', 'Logo Design'),
(14, '5a68b7ffdd12e_project7.jpg', 'Reference site about Lorem Ipsum.', 'Logo Design'),
(15, '5a68b80ca82a1_project8.jpg', 'Reference site about Lorem Ipsum.', 'Business Card'),
(16, '5a68b8184ac09_project6.jpg', 'Reference site about Lorem Ipsum.', 'Business Card'),
(17, '5a68b8241c104_project5.jpg', 'Reference site about Lorem Ipsum.', 'Business Card'),
(18, '5a68b82ebc9b8_project4.jpg', 'Reference site about Lorem Ipsum.', 'Business Card'),
(19, '5a68b83a41163_project1.jpg', 'Reference site about Lorem Ipsum.', 'Banner Ad'),
(20, '5a68b8479bd40_project2.jpg', 'Reference site about Lorem Ipsum.', 'Banner Ad'),
(21, '5a68b8533c231_project3.jpg', 'Reference site about Lorem Ipsum.', 'Banner Ad'),
(22, '5a68b85f10059_project4.jpg', 'Reference site about Lorem Ipsum.', 'Banner Ad'),
(23, '5a68b86c6a90a_project6.jpg', 'Reference site about Lorem Ipsum.', 'Banner Ad'),
(24, '5a68b8a307f1e_project6.jpg', 'Reference site about Lorem Ipsum.', 'Photo Album'),
(25, '5a68b8af15022_project1.jpg', 'Reference site about Lorem Ipsum.', 'Photo Album'),
(26, '5a68b8ba26d7b_project4.jpg', 'Reference site about Lorem Ipsum.', 'Photo Album'),
(27, '5a68b8c50c113_project5.jpg', 'Reference site about Lorem Ipsum.', 'Photo Album'),
(28, '5a68b8d40a367_project4.jpg', 'Reference site about Lorem Ipsum.', 'Photo Album'),
(29, '5a68b8f2bd688_image.png', 'Reference site about Lorem Ipsum.', 'T-shirt Design'),
(30, '5a68b8ff25715_7.jpeg', 'Reference site about Lorem Ipsum.', 'T-shirt Design'),
(31, '5a68b912d8a0a_5.jpg', 'Reference site about Lorem Ipsum.', 'T-shirt Design'),
(32, '5a68b91e1027e_4.jpg', 'Reference site about Lorem Ipsum.', 'T-shirt Design'),
(33, '5a68b928f3e9f_3.jpeg', 'Reference site about Lorem Ipsum.', 'T-shirt Design'),
(34, '5a68b9339772d_2.jpeg', 'Reference site about Lorem Ipsum.', 'T-shirt Design'),
(35, '5a68b93e490ef_1.jpg', 'Reference site about Lorem Ipsum.', 'T-shirt Design'),
(36, '5a6957f33423c_apple_green-normal.jpg', 'Reference site about Lorem Ipsum.', 'Banner Ad'),
(37, '5a69583813c72_secure.jpg', 'Reference site about Lorem Ipsum.', 'Photo Album');

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
(2, 'Debotos Das', 'thuindebotosdas@gmail.com', 'Testing Subject', 'll be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\''),
(5, 'Ripon Das', 'ripondas59@gmail.com', 'Congratulation', 'Website looking greate. And Message is working.');

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
(2, 'ADOBE ILLUSTRATOR', 80),
(3, 'AFTER EFFECTS', 50),
(4, 'HTML/CSS', 85);

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
(1, 'Debotos Das', '5a696ba4ddf4b_1.gif', 'Full Stack Web Developer', '5.0', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.'),
(2, 'John Doe', '5a696ae3324eb_download.png', 'Founder at ET Company', '4.5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem.'),
(3, 'Debotos', '5a696b542d26d_giphy.gif', 'Photographer at Studio LA', '3.5', '            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.          ');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `whai_i_do`
--
ALTER TABLE `whai_i_do`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
