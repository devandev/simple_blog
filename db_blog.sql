-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2018 at 06:31 PM
-- Server version: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `dateBlog` date NOT NULL,
  `content` text NOT NULL,
  `tag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`id`, `title`, `dateBlog`, `content`, `tag`) VALUES
(2, 'title 2 coba fix 22', '2018-06-20', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>\r\n', 'semester 2'),
(9, 'judul blog pertama judul blo pertama judul', '2018-07-12', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>\r\n', 'semester 2'),
(10, 'damn, that is awsome', '2018-07-11', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde inci&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde inci</p>\r\n', 'semester 3'),
(11, 'master of the four element', '2018-07-11', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde inci&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde inci</p>\r\n', 'semester 1'),
(12, 'love my self, who is this guys ?', '2018-07-11', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde inci</p>\r\n\r\n<ul>\r\n	<li>lalala</li>\r\n	<li>lalal</li>\r\n	<li>alalallalosdo</li>\r\n</ul>\r\n', 'hobby'),
(13, 'love my self, I know man', '2018-07-11', '<p>i really love my self to much&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde inci</p>\r\n\r\n<blockquote>\r\n<p>eat, sleep,pray,code</p>\r\n</blockquote>\r\n', 'semester 1'),
(14, 'I told you ! ', '2018-07-11', '<p>told me whaat ?..&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde inciLorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde inci</p>\r\n', 'coba'),
(15, 'I will watch avenger infinity war', '2018-07-11', '<p>who care,&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde inciLorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde inciLorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde inci</p>\r\n', 'semester 1'),
(16, 'who am i, you\'re my son', '2018-07-11', '<p>i dont event know,&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde inciLorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde inciLorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde inciLorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde inci</p>\r\n', 'semester 1'),
(17, 'who are you, old man', '2018-07-11', '<p>i m your dad pete, pete: really ?, damn&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde incidunt nemo, maiores amet quae architecto, dignissimos dolores ea rem tenetur illo culpa vitae voluptatibus placeat in?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est esse corrupti unde inci</p>\r\n', 'semester 1'),
(18, 'validate create page', '2018-07-19', '<p>laksjdhabsmaksaaaaas</p>\r\n', 'semester 1'),
(19, 'title 2 coba with image', '2018-07-17', '<p><img alt=\"\" src=\"https://image.ibb.co/knb81y/pexels_photo_572897.jpg\" style=\"float:left; height:881px; width:1366px\" /></p>\r\n\r\n<p>lalallalalala lallalalaallalalla</p>\r\n', 'semester 2'),
(20, 'coba gambar', '2018-07-18', '<p><img alt=\"\" src=\"https://image.ibb.co/knb81y/pexels_photo_572897.jpg\" style=\"height:881px; width:1366px\" />love it</p>\r\n', 'semester 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `passwords`) VALUES
(1, 'ivan', 'ivan@gmail.com', 'ivan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
