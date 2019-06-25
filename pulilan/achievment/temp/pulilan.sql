-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2017 at 11:07 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pulilan`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement_tbl`
--

CREATE TABLE `achievement_tbl` (
  `achievement_id` int(11) NOT NULL,
  `project_name` text NOT NULL,
  `project_description` text NOT NULL,
  `picture` blob NOT NULL,
  `date_submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievement_tbl`
--

INSERT INTO `achievement_tbl` (`achievement_id`, `project_name`, `project_description`, `picture`, `date_submitted`) VALUES
(1, 'Trial', 'Trial', 0x636f6d6d656e742e6a706567, '2017-12-05 19:26:36'),
(2, 'Trial Trial', 'Trial Ever', 0x7369676e2075702e6a7067, '2017-12-10 02:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `mainuser_acc`
--

CREATE TABLE `mainuser_acc` (
  `user_id` int(11) NOT NULL,
  `brgy_location` varchar(225) NOT NULL,
  `name` varchar(80) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `brgy_id_num` int(20) NOT NULL,
  `accounttype` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visibility` tinyint(1) DEFAULT '0',
  `logo` varchar(500) NOT NULL,
  `edit_status` varchar(100) NOT NULL DEFAULT 'disabled',
  `edit_notif` varchar(100) NOT NULL DEFAULT 'UNSEEN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainuser_acc`
--

INSERT INTO `mainuser_acc` (`user_id`, `brgy_location`, `name`, `gender`, `username`, `password`, `nationality`, `brgy_id_num`, `accounttype`, `date_created`, `visibility`, `logo`, `edit_status`, `edit_notif`) VALUES
(22, 'Balatong A', 'Laureano P. Sicat', '', 'balatonga', '30b69252e8fc9a4364e6550c09ba0bd2', 'Pilipino', 1, 'brgy_official', '2017-11-02 18:57:55', 0, '', 'disabled', 'UNSEEN'),
(24, 'Balatong B', 'Teresita SP. Ilagan', '', 'balatongb', '67abb8cb7537e979a6bf815c6485c285', 'Pilipino', 2, 'brgy_official', '2017-11-02 19:02:47', 0, '', 'disabled', 'UNSEEN'),
(25, 'Cut-cot', 'Rodolfo SA. Rivera', '', 'cutcot', '9becdf1e1f99a7b8b7757a4f068aa73f', 'Pilipino', 3, 'brgy_official', '2017-11-02 19:05:11', 0, '', 'disabled', 'UNSEEN'),
(26, 'Dampol 1st', 'Oscar G. Gapac', '', 'dampol1st', '6711072e3b481f3c56f478d61463b183', 'Pilipino', 4, 'brgy_official', '2017-11-02 19:09:11', 0, '', 'disabled', 'UNSEEN'),
(27, 'Dampol 2nd A', 'Aurora Q. Valencia', '', 'dampol2nda', '794e7a696ac5031d7ba5d90a319b8453', 'Pilipino', 5, 'brgy_official', '2017-11-02 19:12:44', 0, '', 'disabled', 'UNSEEN'),
(28, 'Dampol 2nd B', 'Francisco F. de Jesus', '', 'dampol2ndb', 'a4da957e7c40cfa5bbc27cf857e157f4', 'Pilipino', 6, 'brgy_official', '2017-11-02 19:15:07', 0, '', 'disabled', 'UNSEEN'),
(29, 'Dulong Malabon', 'Ruben C. Santos', '', 'dulongmalabon', 'beba53f97c78ac79747cd3df0b80286c', 'Pilipino', 7, 'brgy_official', '2017-11-02 19:20:21', 0, '', 'disabled', 'UNSEEN'),
(30, 'Inaon', 'Alfredo M. Arceo', '', 'inaon', '26cf925ed6e67bf9376db74e2e462cba', 'Pilipino', 8, 'brgy_official', '2017-11-02 19:21:34', 0, '', 'disabled', 'UNSEEN'),
(31, 'Longos', 'Armando P. Tandoy', '', 'longos', '953dbe59c0023cbd9f86a3a3d17d7bc5', 'Pilipino', 9, 'brgy_official', '2017-11-02 19:33:10', 0, '', 'disabled', 'UNSEEN'),
(32, 'Lumbac', 'Elena S. Andan', 'Female', 'lumbac', '0d634627c316d8b4f2e0a38cf57dd390', 'Pilipino', 10, 'brgy_official', '2017-11-02 19:34:36', 0, '', 'disabled', 'UNSEEN'),
(33, 'Paltao', 'Edgardo SA. Villanueva', '', 'paltao', '618bcff936f214b2b6b6682bba561f7f', 'Pilipino', 11, 'brgy_official', '2017-11-02 19:35:54', 0, '', 'disabled', 'UNSEEN'),
(34, 'Penabatan', 'Anghel Capala', '', 'capala', 'df38f50364359e8ffa4b0015614a3be0', 'Pilipino', 12, 'brgy_official', '2017-11-02 19:37:50', 0, '', 'disabled', 'UNSEEN'),
(35, 'Poblacion', 'Ryan Espiritu', '', 'poblacion', 'd2e8fc091d5678cf285ce735bd728b6e', 'Pilipino', 13, 'brgy_official', '2017-11-02 19:39:25', 0, '', 'disabled', 'UNSEEN'),
(36, 'Sta. Peregrina', 'Jorge C. Santos Jr.', '', 'staperegrina', '5b1430167679fc153e4eb06eccd7dcb8', 'Pilipino', 14, 'brgy_official', '2017-11-02 19:40:37', 0, '', 'disabled', 'UNSEEN'),
(37, 'Sto. Cristo', 'Dennis M. Cruz', '', 'stocristo', 'fc70dbb3c9c681646d37001bf0afe4fa', 'Pilipino', 15, 'brgy_official', '2017-11-02 19:42:06', 0, '', 'disabled', 'UNSEEN'),
(38, 'Taal', 'Ramon F. Bonifacio', '', 'taal', 'ccdac571ce4ba2835e15a28021ee32f6', 'Pilipino', 16, 'brgy_official', '2017-11-02 19:43:22', 0, '', 'disabled', 'UNSEEN'),
(39, 'Tabon', 'Felino DR. Cruz', '', 'tabon', '5195e578bc72014dc399fd2ec7c002b4', 'Pilipino', 17, 'brgy_official', '2017-11-02 19:45:32', 0, '', 'disabled', 'UNSEEN'),
(40, 'Tibag', 'Renz Bryan C. Esguerra', 'Male', 'tibag', '9d3ece20ac79cecac18463f07e42882d', 'Pilipino', 18, 'brgy_official', '2017-11-02 19:46:34', 0, '', 'disabled', 'UNSEEN'),
(41, 'Tenejero', 'Manolito J. Peralta', '', 'tenejero', '935896ecb974e1068e396765e1fce4d6', 'Pilipino', 19, 'brgy_official', '2017-11-02 19:47:33', 0, '', 'disabled', 'UNSEEN'),
(42, '', '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 0, 'admin', '2017-11-02 19:48:16', 0, '', 'disabled', 'UNSEEN'),
(44, 'Balatong A', 'john edward m. cabrera', 'Male', 'paaapi', 'd41d8cd98f00b204e9800998ecf8427e', 'nationality', 121232, 'resident', '2017-11-05 05:46:44', 0, '', 'disabled', 'SEEN'),
(45, 'bebe', 's', 's', 's', 'dd3ba2cca7da8526615be73d390527ac', 'nationality', 1, 'brgy_official', '2017-11-07 21:42:40', 0, '', 'disabled', 'UNSEEN'),
(46, 'kjhgfd', 'jhgfd', 'jhgf', 'kjhgf', 'f', 'nationality', 4, 'resident', '2017-11-07 22:06:41', 0, '', 'disabled', 'UNSEEN'),
(47, 'Balatong A', 'carlo d. tarantado', 'Female', 'cdt', 'd41d8cd98f00b204e9800998ecf8427e', 'endangered species', 1, 'resident', '2017-11-08 00:05:41', 0, '', 'disabled', 'UNSEEN'),
(48, 'Balatong A', 'carlo d. tarantado', 'Female', 'wow', 'd41d8cd98f00b204e9800998ecf8427e', 'nationality', 1, 'resident', '2017-11-08 00:42:21', 0, '', 'disabled', 'SEEN'),
(49, 'Balatong A', 'carlo d. tarantado', 'Female', 'cdt', 'd41d8cd98f00b204e9800998ecf8427e', 'endangered species', 1, 'resident', '2017-11-08 00:42:24', 0, '', 'disabled', 'UNSEEN'),
(50, 'Balatong A', 'carlo d. tarantado', 'Female', 'cdt', 'd41d8cd98f00b204e9800998ecf8427e', 'endangered species', 1, 'resident', '2017-11-08 00:42:40', 0, '', 'disabled', 'UNSEEN'),
(51, 'Tibag', 'hu', 'Male', 'carlo', 'd41d8cd98f00b204e9800998ecf8427e', 'carlo', 23, 'resident', '2017-11-14 14:59:09', 0, '', 'disabled', 'UNSEEN'),
(52, 'executive', 'executive', 'male', 'executive', '3250d1e21c4281d3cd9479f5685770b6', 'executive', 123, 'executive', '2017-11-14 15:51:17', 0, '', 'disabled', 'UNSEEN'),
(55, '', '', '', '', '', '', 0, '', '2017-11-16 07:49:20', 0, 'pulilan/img/tibag.jpg', 'disabled', 'UNSEEN'),
(56, '', '', '', '', '', '', 0, '', '2017-11-16 07:52:14', 0, 'pulilan/img/tibag.jpg', 'disabled', 'UNSEEN'),
(57, '', '', '', '', '', '', 0, '', '2017-11-16 07:53:40', 0, '..pulilan/img/tibag.jpg', 'disabled', 'UNSEEN'),
(58, 'somwhere', 'somwhere', 'Female', 'somwhere', 'somwhere', 'Filipino', 124, 'brgy_official', '2017-11-27 20:19:22', 0, '', 'disabled', 'UNSEEN'),
(59, 'Balatong A', 'Etel', 'Female', 'naruto', 'd41d8cd98f00b204e9800998ecf8427e', 'Filipino', 1, 'resident', '2017-11-27 20:26:07', 0, '', 'disabled', 'UNSEEN');

-- --------------------------------------------------------

--
-- Table structure for table `memo`
--

CREATE TABLE `memo` (
  `memo_id` int(11) NOT NULL,
  `project_name` text NOT NULL,
  `project_description` text NOT NULL,
  `memo_date` date NOT NULL,
  `receiver` text NOT NULL,
  `memo_status` varchar(100) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memo`
--

INSERT INTO `memo` (`memo_id`, `project_name`, `project_description`, `memo_date`, `receiver`, `memo_status`) VALUES
(1, 'Baranggay Charity Every Friday Morning', 'This is only Trial, Please disregard this', '0000-00-00', '0', 'PENDING'),
(2, 'Trial Only', 'Trial', '2017-12-08', '0', 'PENDING'),
(3, 'Trial g', 'memo memo', '2017-12-08', 'all', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `message_tbl`
--

CREATE TABLE `message_tbl` (
  `message_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `subject` text NOT NULL,
  `brgy_location` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `notification_status` varchar(100) NOT NULL DEFAULT 'UNSEEN',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_tbl`
--

INSERT INTO `message_tbl` (`message_id`, `message`, `subject`, `brgy_location`, `user_id`, `notification_status`, `date_created`) VALUES
(1, 'trial', 'trail', 'Balatong A', 42, 'UNSEEN', '2017-12-05 21:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `resident_questionnaire`
--

CREATE TABLE `resident_questionnaire` (
  `questionnaire_Id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `identification` text NOT NULL,
  `demography` text NOT NULL,
  `migration` text NOT NULL,
  `education_and_literacy` text NOT NULL,
  `community_and_political_participation` text NOT NULL,
  `nutrition` text NOT NULL,
  `economic` text NOT NULL,
  `other_family_member` text NOT NULL,
  `overseas_filipino_worker` text NOT NULL,
  `household_member_solo_parent` text NOT NULL,
  `household_member_disability` text NOT NULL,
  `household_member_senior_citizen` text NOT NULL,
  `household_member_professionals` text NOT NULL,
  `health` text NOT NULL,
  `previous_household_member` text NOT NULL,
  `incidence_of_crime` text NOT NULL,
  `water_and_sanitation` text NOT NULL,
  `housing` text NOT NULL,
  `entrentrepreneural_activities` text NOT NULL,
  `total_net_income` text NOT NULL,
  `salaries_and_wages` text NOT NULL,
  `gross_salary` text NOT NULL,
  `other_source_of_income` text NOT NULL,
  `total_income_from_other_source_of_income` text NOT NULL,
  `agriculture` text NOT NULL,
  `livestock_rising` text NOT NULL,
  `fishing` text NOT NULL,
  `natural_calamities` text NOT NULL,
  `food_adequacy` text NOT NULL,
  `waste_management` text NOT NULL,
  `access_to_programs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement_tbl`
--
ALTER TABLE `achievement_tbl`
  ADD PRIMARY KEY (`achievement_id`);

--
-- Indexes for table `mainuser_acc`
--
ALTER TABLE `mainuser_acc`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `memo`
--
ALTER TABLE `memo`
  ADD PRIMARY KEY (`memo_id`);

--
-- Indexes for table `message_tbl`
--
ALTER TABLE `message_tbl`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `resident_questionnaire`
--
ALTER TABLE `resident_questionnaire`
  ADD PRIMARY KEY (`questionnaire_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement_tbl`
--
ALTER TABLE `achievement_tbl`
  MODIFY `achievement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mainuser_acc`
--
ALTER TABLE `mainuser_acc`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `memo`
--
ALTER TABLE `memo`
  MODIFY `memo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `message_tbl`
--
ALTER TABLE `message_tbl`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resident_questionnaire`
--
ALTER TABLE `resident_questionnaire`
  MODIFY `questionnaire_Id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
