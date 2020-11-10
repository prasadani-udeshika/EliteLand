-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 01:23 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eliteland_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `f_image`
--

CREATE TABLE `f_image` (
  `FID` int(255) NOT NULL,
  `TID` int(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_image`
--

INSERT INTO `f_image` (`FID`, `TID`, `image`) VALUES
(1, 7, 'uploads/land15.jpg'),
(2, 7, 'uploads/lang12.jpg'),
(3, 7, 'uploads/land14.jpg'),
(20, 12, 'uploads/lang12.jpg'),
(19, 12, 'uploads/land14.jpg'),
(6, 8, 'uploads/land13.jpg'),
(7, 8, 'uploads/land14.jpg'),
(8, 9, 'uploads/land20.jpg'),
(18, 11, 'uploads/land21.jpg'),
(11, 9, 'uploads/land17.jpg'),
(17, 11, 'uploads/land17.jpg'),
(12, 10, 'uploads/new.jpg'),
(13, 10, 'uploads/new1.jpg'),
(14, 10, 'uploads/new2.jpg'),
(15, 10, 'uploads/new3.jpg'),
(16, 10, 'uploads/new4.jpg'),
(21, 13, 'uploads/new.jpg'),
(22, 13, 'uploads/land16.jpg'),
(23, 15, 'uploads/land20.jpg'),
(24, 15, 'uploads/land19.jpg'),
(25, 15, 'uploads/land20.jpg'),
(26, 16, 'uploads/upalimotor.jpg'),
(27, 17, 'uploads/46d707d50acc212cb0eaa346d25bda68.jpg'),
(28, 17, 'uploads/308a39f8375f37fb9a3eb5d7f3f46c18.jpg'),
(29, 17, 'uploads/CVS.jpg'),
(30, 18, 'uploads/photo3.jpeg'),
(31, 18, 'uploads/NewZ.jpg'),
(32, 19, 'uploads/lang12.jpg'),
(33, 19, 'uploads/upalimotor.jpg'),
(34, 19, 'uploads/land1.jpg'),
(35, 19, 'uploads/images.jpg'),
(36, 20, 'uploads/main.jpg'),
(37, 20, 'uploads/main.jpg'),
(38, 20, 'uploads/upalimotor.jpg'),
(39, 20, 'uploads/newland.jpg'),
(40, 21, 'uploads/Ga1.jpg'),
(41, 21, 'uploads/Ga2.jpg'),
(42, 21, 'uploads/Ga3.jpg'),
(43, 21, 'uploads/l4.jpg'),
(44, 21, 'uploads/Ga5.jpg'),
(46, 22, 'uploads/Ga7.jpg'),
(47, 22, 'uploads/Ga6.jpg'),
(48, 22, 'uploads/Ga1.jpg'),
(49, 22, 'uploads/Ga2.jpg'),
(50, 23, 'uploads/Ga2.jpg'),
(51, 23, 'uploads/Ga3.jpg'),
(52, 23, 'uploads/Ga7.jpg'),
(53, 23, 'uploads/l4.jpg'),
(54, 23, 'uploads/l2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id_img` int(100) NOT NULL,
  `id_landproperty` int(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `uploader_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id_img`, `id_landproperty`, `photo`, `uploader_id`) VALUES
(1, 78, 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `landimages`
--

CREATE TABLE `landimages` (
  `LID` int(255) NOT NULL,
  `landproperty_id` int(255) NOT NULL,
  `Images` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landimages`
--

INSERT INTO `landimages` (`LID`, `landproperty_id`, `Images`) VALUES
(1, 0, 'uploads/pink4.jpg'),
(2, 0, 'uploads/kiran.jpg'),
(3, 0, 'uploads/my.jpg'),
(4, 2, ''),
(5, 2, ''),
(6, 3, ''),
(7, 11, ''),
(8, 11, NULL),
(9, 4, NULL),
(10, 0, 'uploads/land8.jpg'),
(11, 0, 'uploads/land9.jpg'),
(12, 11, NULL),
(13, 4, NULL),
(14, 2, NULL),
(15, 2, NULL),
(16, 2, NULL),
(17, 2, NULL),
(18, 2, NULL),
(19, 2, NULL),
(20, 2, NULL),
(21, 0, 'uploads/lang12.jpg'),
(22, 0, 'uploads/land13.jpg'),
(23, 1, NULL),
(24, 0, 'uploads/lang12.jpg'),
(25, 3, NULL),
(26, 0, 'uploads/lang12.jpg'),
(27, 0, 'uploads/lang12.jpg'),
(28, 0, 'uploads/lang12.jpg'),
(29, 0, 'uploads/land15.jpg'),
(30, 2, NULL),
(31, 0, 'uploads/lang12.jpg'),
(32, 3, NULL),
(33, 0, 'uploads/land14.jpg'),
(34, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `landproperty`
--

CREATE TABLE `landproperty` (
  `id` int(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `land_address` varchar(255) NOT NULL,
  `land_price` varchar(255) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `gallery` varchar(255) NOT NULL,
  `property_id` varchar(255) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `property_status` varchar(255) NOT NULL,
  `other_details1` varchar(255) NOT NULL,
  `landplan_image` varchar(255) NOT NULL,
  `status` int(25) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landproperty`
--

INSERT INTO `landproperty` (`id`, `project_name`, `land_address`, `land_price`, `main_image`, `description`, `gallery`, `property_id`, `property_type`, `property_status`, `other_details1`, `landplan_image`, `status`, `date`) VALUES
(1, 'Horana Land\'s Project', 'No:123/ Horana rd, Horana', '20000.00', 'uploads/land2.jpg', 'Making your life much more convenient, connected and easy, with quick accessibility to the Central Highway Interchange, valuable commercial and residential land blocks await for you in Narammala, Kadahapola to build your dream home. ', '', '111', 'sale', 'available', 'test', '', 1, '2020-10-15'),
(2, 'Hadala Land\'s Project', 'No:55, Hadala wattala', '300000.00', 'uploads/land10.jpg', 'Making your life much more convenient, connected and easy, with quick accessibility to the Central Highway Interchange, valuable commercial and residential land blocks await for you in Narammala, Kadahapola to build your dream home.', '', '110', 'sale', 'available', 'testing', 'i', 1, '2020-10-15'),
(3, 'Ja-ela Land Project', 'No: 123, Ja-ela.', '12000.00', 'uploads/land3.jpg', 'Making your life much more convenient, connected and easy, with quick accessibility to the Central Highway Interchange, valuable commercial and residential land blocks await for you in Narammala, Kadahapola to build your dream home.', '', '112', 'sale', 'available', '', '', 1, '2020-10-15'),
(4, 'Nugegoda Land Project', 'No:123, Nugegoda.', '250000.00', 'uploads/land4.jpg', 'Making your life much more convenient, connected and easy, with quick accessibility to the Central Highway Interchange, valuable commercial and residential land blocks await for you in Narammala, Kadahapola to build your dream home. ', '', '113', 'sale', 'available', '', '', 1, '2020-10-15'),
(11, 'Maharagama land Project', 'No: Maharagma main rd.', '130000.00', 'uploads/land5.jpg', 'Making your life much more convenient, connected and easy, with quick accessibility to the Central Highway Interchange, valuable commercial and residential land blocks await for you in Narammala, Kadahapola to build your dream home. ', '', '114', 'Rent', 'available', '', '', 1, '2020-10-21'),
(12, 'test', '', '', 'uploads/land6.jpg', '', '', '', '', '', '', '', 0, '2020-10-15'),
(13, 'test', '', '', 'uploads/land7.jpg', '', '', '', '', '', '', '', 0, '2020-10-15'),
(14, '000', '001234566789', '000', 'uploads/land8.jpg', '', '', '', '', '', '', '', 0, '2020-10-21'),
(15, 'pamunugama  Lang project', 'No: 1123 pamunugama, ja-ela', '120000.00', 'photo/1603954416_.jpg', 'testing ... second part testing', '', '123', 'sale', 'available', '', '', 1, '2020-10-29'),
(36, 'land test', '', 'ok123456', 'photo/1603947917_.jpg', '', '', '', '', '', '', '', 1, '2020-10-29'),
(37, 'Kamal land Project', '', '2300000', 'photo/1603956821_.jpg', '', '', '112', 'sale', 'available', '', '', 1, '2020-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `mainlandproperty`
--

CREATE TABLE `mainlandproperty` (
  `id` int(100) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `land_address` varchar(255) NOT NULL,
  `land_price` varchar(255) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `gallery` varchar(255) NOT NULL,
  `property_id` varchar(255) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `property_status` varchar(255) NOT NULL,
  `other_details1` varchar(255) NOT NULL,
  `landplan_image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `education1` varchar(255) NOT NULL,
  `education2` varchar(255) NOT NULL,
  `education3` varchar(255) NOT NULL,
  `health1` varchar(255) NOT NULL,
  `health2` varchar(255) NOT NULL,
  `health3` varchar(255) NOT NULL,
  `transportation1` varchar(255) NOT NULL,
  `transportation2` varchar(255) NOT NULL,
  `transportation3` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainlandproperty`
--

INSERT INTO `mainlandproperty` (`id`, `project_name`, `land_address`, `land_price`, `main_image`, `description`, `gallery`, `property_id`, `property_type`, `property_status`, `other_details1`, `landplan_image`, `status`, `date`, `education1`, `education2`, `education3`, `health1`, `health2`, `health3`, `transportation1`, `transportation2`, `transportation3`) VALUES
(18, 'Rajagiriya Land Project', 'No: 234/A ,Diyawannawa, Rajagiriya.', '230,000.00', 'photo/1604893400_.jpg', 'Approximately 2Km to highway entrance. 800 Meters walking distance from 342 Kottawa- Piliyandala bus route. Access from both Pettah-Mattegoda 138 bus route and 120 Pettah- Horana Bus Route.', '', '002', 'Sale', 'Available', '14', 'uploads/1604893400_.jpg', '1', '2020-11-09', 'Rajagiriya Maha Vidyalaya(2km)', 'OKI International school(1.5km)', 'Language Center(3km)', 'Rajagiriya General Hospitial', 'Asiri Hospitial(5km)', 'Medical Center(4km)', 'Main Road', 'Railway Station', 'Main Bus Station'),
(17, 'Kadawatha Land Project', 'No: 1123 pamunugama, Kadawatha.', '130,000.00', 'photo/1604891153_.jpg', 'Approximately 2Km to highway entrance. 800 Meters walking distance from 342 Kottawa- Piliyandala bus route. Access from both Pettah-Mattegoda 138 bus route and 120 Pettah- Horana Bus Route.', '', '001', 'Sale', 'Available', '10', 'uploads/1604891153_.jpg', '1', '2020-11-09', 'Central School(2km)', 'International school(1.5km) ', 'Language Center(3km)', 'General Hospitial(5km)', 'Hemas Hospitial(5km)', 'Medical Center(4km)', 'Main Road', 'Railway Station', 'Main Bus Station'),
(19, 'Ragama Land Project', 'No: 11/B/2 ,St.Anthony Rd, Ragama.', '225,000.00', 'photo/1604894227_.jpg', 'Approximately 2Km to highway entrance. 800 Meters walking distance from 342 Kottawa- Piliyandala bus route. Access from both Pettah-Mattegoda 138 bus route and 120 Pettah- Horana Bus Route.', '', '003', 'Sale', 'Available', '8', 'uploads/1604894227_.jpg', '1', '2020-11-09', 'Ragama Maha Vidyalaya(2km)', 'Lyceum International school(1.5km)', 'Language Center(3km)', 'General Hospitial(5km)', 'Hemas Hospitial(5km)', 'Asiri Hospitial(3km)', 'Main Road', 'Railway Station', 'Main Bus Station');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(100) NOT NULL,
  `rfullname` varchar(100) NOT NULL,
  `rphone` varchar(25) NOT NULL,
  `remail` varchar(100) NOT NULL,
  `rmessage` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `rfullname`, `rphone`, `remail`, `rmessage`) VALUES
(1, 'joseph', '122', 'd@gmail.com', 'test'),
(2, 'yuio', '09988', 'a@gmail.com', 'testing23'),
(3, 'kamal', '11223439', 'Ah@gmail.com', 'testing1234'),
(4, 'Nimal', '099', 'd@gmail.com', 'testing'),
(5, 'jj', '011223', 'ds@gmail.com', 'test'),
(6, 'jj', '011223', 'ds@gmail.com', 'test'),
(7, 'jj', '011223', 'ds@gmail.com', 'test'),
(8, 'jj', '011223', 'ds@gmail.com', 'test'),
(9, 'jj', '233', 'ds@gmail.com', 'TT'),
(10, 'jj', '233', 'ds@gmail.com', 'TT'),
(11, 'jj', '233', 'ds@gmail.com', 'TT'),
(12, 'jj', '233', 'ds@gmail.com', 'TT'),
(13, 'jj', '233', 'ds@gmail.com', 'TT'),
(14, 'jj', '233', 'ds@gmail.com', 'TT'),
(15, 'jj', '233', 'ds@gmail.com', 'TT'),
(16, 'jj', '233', 'ds@gmail.com', 'TT'),
(17, 'jj', '233', 'ds@gmail.com', 'TT'),
(18, 'jj', '233', 'ds@gmail.com', 'TT'),
(19, 'jj', '233', 'ds@gmail.com', 'TT'),
(20, 'jj', '233', 'ds@gmail.com', 'TT'),
(21, 'jj111', '233', 'ds@gmail.com', 'TT'),
(22, 'jj111', '233', 'ds@gmail.com', 'TT'),
(23, 'jj111', '233', 'ds@gmail.com', 'TT'),
(24, 'jj111', '233', 'ds@gmail.com', 'TT'),
(25, 'jj111', '233', 'ds@gmail.com', 'TT'),
(26, 'jj111', '233', 'ds@gmail.com', 'TT'),
(27, 'jj111', '233', 'ds@gmail.com', 'TT'),
(28, 'jj111', '233', 'ds@gmail.com', 'TT'),
(29, 'jj111', '233', 'ds@gmail.com', 'TT'),
(30, 'jj111', '233', 'ds@gmail.com', 'TT'),
(31, 'jj111', '233', 'ds@gmail.com', 'TT'),
(32, 'jj111', '233', 'ds@gmail.com', 'TT'),
(33, 'jj111', '233', 'ds@gmail.com', 'TT'),
(34, 'jj111', '233', 'ds@gmail.com', 'TT'),
(35, 'jj111', '233', 'ds@gmail.com', 'TT'),
(36, 'jj111', '233', 'ds@gmail.com', 'TT'),
(37, 'jj111', '233', 'ds@gmail.com', 'TT'),
(38, 'jj111222332', '233', 'ds@gmail.com', 'TT'),
(39, 'jj111222332ooo', '233', 'ds@gmail.com', 'TT'),
(40, 'jj111222332ooo', '233', 'ds@gmail.com', 'TT'),
(41, 'jj111222332ooo', '233', 'ds@gmail.com', 'TT'),
(42, 'fggxh', '23334', 'ds@gmail.com', 'efrwa'),
(43, 'fggxh111', '23334', 'ds@gmail.com', 'efrwa'),
(44, 'fggxh111uikhu', '23334', 'ds@gmail.com', 'efrwa'),
(45, 'fggxh111uikhu00000', '23334', 'ds@gmail.com', 'efrwa'),
(46, 'ok', '23334', 'ds@gmail.com', 'efrwa'),
(47, 'okqqqqqq', '23334', 'ds@gmail.com', 'efrwa');

-- --------------------------------------------------------

--
-- Table structure for table `test_image`
--

CREATE TABLE `test_image` (
  `TID` int(255) NOT NULL,
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `Images` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_image`
--

INSERT INTO `test_image` (`TID`, `id`, `text`, `Images`) VALUES
(1, 0, 'new 123', ''),
(2, 0, 'new2233', ''),
(3, 0, 'new3344', ''),
(4, 2, 'jesus', NULL),
(5, 2, 'jesus', NULL),
(6, 2, 'jesus', NULL),
(7, 2, 'test', NULL),
(8, 3, 'thank you', NULL),
(9, 2, 'test', NULL),
(10, 4, 'test123', NULL),
(11, 15, 'okk', NULL),
(12, 3, 'test', NULL),
(13, 1, 'testing', NULL),
(14, 15, 'yyyyyy', NULL),
(15, 37, 'testing', NULL),
(16, 2, 'nk', NULL),
(17, 10, 'testing', NULL),
(18, 11, 'testing today', NULL),
(19, 12, 'Testing', NULL),
(20, 13, '', NULL),
(21, 17, 'Testing Demo', NULL),
(22, 19, 'Testing Demo', NULL),
(23, 18, 'testing', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contactno`, `posting_date`) VALUES
(1, 'prasadani', 'perera', 'prasadani9727@gmail.com', '12345', '0112241847', '2020-10-01 03:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `webimages`
--

CREATE TABLE `webimages` (
  `WID` int(255) NOT NULL,
  `Text` varchar(255) NOT NULL DEFAULT '0',
  `Image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webimages`
--

INSERT INTO `webimages` (`WID`, `Text`, `Image`) VALUES
(1, '0', '1603332165my.jpg'),
(2, '0', '1603332456my.jpg'),
(3, '0', '1603344118my.jpg'),
(4, '0', '1603345378my.jpg'),
(5, '0', '1603359775pink5.jpg'),
(6, '0', '1603359813pink5.jpg'),
(7, '0', '1603683159my.jpg'),
(8, '0', '1603683166my.jpg'),
(9, '0', '1603685981young-handsome-man-exploring-a-forest-he-is-looking-at-camera-G1AN0C.jpg'),
(10, '0', '1603686001kiran.jpg'),
(11, '0', '1603686770my.jpg'),
(12, '0', '1603686853my.jpg'),
(13, '0', '1603686857my.jpg'),
(14, '0', '1603687116pink1.jpg'),
(15, '0', '1603688457young-handsome-man-exploring-a-forest-he-is-looking-at-camera-G1AN0C.jpg'),
(16, '0', '1603688892my.jpg'),
(17, '0', '1603772785my.jpg'),
(18, '0', '1603772810pink1.jpg'),
(19, '0', '1603772937kiran.jpg'),
(20, '0', '1603774430kiran.jpg'),
(21, '0', '1603774437my.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f_image`
--
ALTER TABLE `f_image`
  ADD PRIMARY KEY (`FID`),
  ADD KEY `TID` (`TID`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_img`),
  ADD UNIQUE KEY `id_landproperty` (`id_landproperty`);

--
-- Indexes for table `landimages`
--
ALTER TABLE `landimages`
  ADD PRIMARY KEY (`LID`),
  ADD KEY `landproperty_id` (`landproperty_id`);

--
-- Indexes for table `landproperty`
--
ALTER TABLE `landproperty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainlandproperty`
--
ALTER TABLE `mainlandproperty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `test_image`
--
ALTER TABLE `test_image`
  ADD PRIMARY KEY (`TID`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webimages`
--
ALTER TABLE `webimages`
  ADD PRIMARY KEY (`WID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `f_image`
--
ALTER TABLE `f_image`
  MODIFY `FID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id_img` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `landimages`
--
ALTER TABLE `landimages`
  MODIFY `LID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `landproperty`
--
ALTER TABLE `landproperty`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `mainlandproperty`
--
ALTER TABLE `mainlandproperty`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `test_image`
--
ALTER TABLE `test_image`
  MODIFY `TID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `webimages`
--
ALTER TABLE `webimages`
  MODIFY `WID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
