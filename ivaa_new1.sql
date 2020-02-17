-- phpMyAdmin SQL Dump
-- version 4.9.1deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 13, 2020 at 07:49 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivaa_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE IF NOT EXISTS `artists` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `birth_country` int(11) NOT NULL,
  `birth_city` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_month` varchar(2) NOT NULL,
  `birth_year` varchar(10) NOT NULL,
  `not_alive` tinyint(1) NOT NULL,
  `living_address` varchar(255) NOT NULL,
  `living_city` int(11) NOT NULL,
  `living_country` int(11) NOT NULL,
  `domicile` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `is_registered` smallint(6) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `obit` varchar(70) NOT NULL,
  `description_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artists_collectives`
--

CREATE TABLE IF NOT EXISTS `artists_collectives` (
  `id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `collective_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artists_industries`
--

CREATE TABLE IF NOT EXISTS `artists_industries` (
  `id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `creative_industry_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artworks`
--

CREATE TABLE IF NOT EXISTS `artworks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `art_start_year` int(11) NOT NULL,
  `art_end_year` int(11) NOT NULL,
  `dimmension_height` varchar(5) NOT NULL,
  `dimmension_width` varchar(5) NOT NULL,
  `dimmension_length` varchar(5) NOT NULL,
  `dimmension_unit` int(11) NOT NULL,
  `description_en` text NOT NULL,
  `description_ind` text NOT NULL,
  `artwork_category_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `sorting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artworks`
--

INSERT INTO `artworks` (`id`, `title`, `art_start_year`, `art_end_year`, `dimmension_height`, `dimmension_width`, `dimmension_length`, `dimmension_unit`, `description_en`, `description_ind`, `artwork_category_id`, `status`, `sorting`) VALUES
(1, 'Mandi Ubur-ubur', 2019, 2022, '300', '400', '10', 1, 'Mandi dengan ubur-ubur', 'Mandi dengan ubur-ubur', 1, 1, 0),
(2, 'Testing', 2019, 2020, '300', '400', '10', 1, 'Testing', 'Testing aja', 1, 1, 0),
(3, 'Testing2', 2019, 2020, '300', '400', '10', 2, 'testing2', 'testing2', 3, 0, 0),
(4, 'Testing ke 3', 2019, 2020, '300', '400', '15', 0, 'testing ke 3', 'testing ke 3', 3, 1, 1),
(5, 'testing ke 4 edit', 2005, 2021, '600', '700', '90', 0, 'testing ke 4 edit', 'deskripsi ke 4 edit', 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `artworks_categories`
--

CREATE TABLE IF NOT EXISTS `artworks_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `name_en` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artworks_categories`
--

INSERT INTO `artworks_categories` (`id`, `name`, `name_en`) VALUES
(1, 'Lukisan', 'Painting'),
(2, 'Patung', 'Statue'),
(3, 'Kerajinan', 'Handicraft');

-- --------------------------------------------------------

--
-- Table structure for table `artworks_creators`
--

CREATE TABLE IF NOT EXISTS `artworks_creators` (
  `id` int(11) NOT NULL,
  `artwork_id` int(11) NOT NULL,
  `creator_type` varchar(100) NOT NULL,
  `creator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artworks_events`
--

CREATE TABLE IF NOT EXISTS `artworks_events` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `artwork_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artworks_files`
--

CREATE TABLE IF NOT EXISTS `artworks_files` (
  `id` int(11) NOT NULL,
  `artwork_id` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `part_clip` varchar(255) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artworks_khazanahs`
--

CREATE TABLE IF NOT EXISTS `artworks_khazanahs` (
  `id` int(11) NOT NULL,
  `khazanah_id` int(11) NOT NULL,
  `artwork_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artworks_media`
--

CREATE TABLE IF NOT EXISTS `artworks_media` (
  `id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `artwork_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artworks_media`
--

INSERT INTO `artworks_media` (`id`, `media_id`, `artwork_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 1, 2),
(4, 2, 2),
(5, 1, 3),
(6, 2, 3),
(7, 1, 4),
(8, 2, 4),
(9, 3, 4),
(15, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `art_venues`
--

CREATE TABLE IF NOT EXISTS `art_venues` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `manager_name` varchar(255) NOT NULL,
  `manager_phone` varchar(255) NOT NULL,
  `manager_email` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_fax` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `start_year` int(11) NOT NULL,
  `end_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art_venues`
--

INSERT INTO `art_venues` (`id`, `title`, `sub_title`, `manager_name`, `manager_phone`, `manager_email`, `address_1`, `address_2`, `city_id`, `province_id`, `country_id`, `contact_phone`, `contact_fax`, `contact_email`, `website`, `start_year`, `end_year`) VALUES
(1, 'JNM', 'Jogja National Museum', 'Manager JNM', '082220494229', 'muhardian.ardian@gmail.com', 'Taman Siswa', 'Taman Siswa', 1, 1, 1, '082220494229', '082220494229', 'muhardian.ardian@gmail.com', 'www.JNM.com', 2019, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `name_en`) VALUES
(1, 'Yogyakarta', 'Yogyakarta'),
(2, 'Jakarta', 'Jakarta'),
(3, 'Surabaya', 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `collectives`
--

CREATE TABLE IF NOT EXISTS `collectives` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `domicile_id` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `description` text NOT NULL,
  `description_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collectives`
--

INSERT INTO `collectives` (`id`, `name`, `domicile_id`, `slug`, `created`, `modified`, `description`, `description_en`) VALUES
(1, 'WWF', 1, 'WWF', '2020-02-05 11:08:04', '2020-02-05 11:08:04', 'WWF adalah WWF', 'WWF adalah WWF');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Indonesia'),
(2, 'Malaysia'),
(3, 'Singapura'),
(4, 'Jepang');

-- --------------------------------------------------------

--
-- Table structure for table `creative_industries`
--

CREATE TABLE IF NOT EXISTS `creative_industries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name_en` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creative_industries`
--

INSERT INTO `creative_industries` (`id`, `name`, `name_en`) VALUES
(1, 'Promotor', 'Promotor'),
(2, 'Kolektor Seni', 'Art Collector');

-- --------------------------------------------------------

--
-- Table structure for table `domiciles`
--

CREATE TABLE IF NOT EXISTS `domiciles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `name_en` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domiciles`
--

INSERT INTO `domiciles` (`id`, `name`, `name_en`) VALUES
(1, 'Yogyakarta', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description_en` text NOT NULL,
  `description_ind` text NOT NULL,
  `event_orgnaizer_id` int(11) NOT NULL,
  `image_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `subtitle`, `description_en`, `description_ind`, `event_orgnaizer_id`, `image_count`) VALUES
(1, 'Testinggggg', 'asasasssssssss', 'aaaaaaa sdsda ', 'aaaaaaaa asdasd ', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `events_categories`
--

CREATE TABLE IF NOT EXISTS `events_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name_en` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_categories`
--

INSERT INTO `events_categories` (`id`, `name`, `name_en`) VALUES
(1, 'Pameran', 'Exhibition'),
(2, 'Testing', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `events_cats`
--

CREATE TABLE IF NOT EXISTS `events_cats` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `event_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_cats`
--

INSERT INTO `events_cats` (`id`, `event_id`, `event_category_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `events_details`
--

CREATE TABLE IF NOT EXISTS `events_details` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `art_venue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_details`
--

INSERT INTO `events_details` (`id`, `event_id`, `start_date`, `end_date`, `art_venue_id`) VALUES
(1, 1, '2020-02-06', '2020-02-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events_khazanahs`
--

CREATE TABLE IF NOT EXISTS `events_khazanahs` (
  `id` int(11) NOT NULL,
  `khazanah_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events_participants`
--

CREATE TABLE IF NOT EXISTS `events_participants` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `participant_type` varchar(20) NOT NULL,
  `participant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_organizers`
--

CREATE TABLE IF NOT EXISTS `event_organizers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_organizers`
--

INSERT INTO `event_organizers` (`id`, `name`) VALUES
(1, 'Ivaa'),
(2, 'Non Ivaa');

-- --------------------------------------------------------

--
-- Table structure for table `khazanahs`
--

CREATE TABLE IF NOT EXISTS `khazanahs` (
  `id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `published_date` int(11) NOT NULL,
  `published_month` varchar(255) NOT NULL,
  `published_year` int(11) NOT NULL,
  `published_to_year` int(11) NOT NULL,
  `excerpt_en` text NOT NULL,
  `excerpt_ind` text NOT NULL,
  `published_date_unknown` tinyint(1) NOT NULL,
  `status` smallint(6) NOT NULL,
  `khazanah_category_id` int(11) NOT NULL,
  `sorting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khazanahs`
--

INSERT INTO `khazanahs` (`id`, `artist_id`, `title`, `subtitle`, `published_date`, `published_month`, `published_year`, `published_to_year`, `excerpt_en`, `excerpt_ind`, `published_date_unknown`, `status`, `khazanah_category_id`, `sorting`) VALUES
(1, 1, 'AAAAA asasas', 'AAAA asasas', 14, '06', 2019, 2022, 'asasas', 'asasasas', 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `khazanahs_files`
--

CREATE TABLE IF NOT EXISTS `khazanahs_files` (
  `id` int(11) NOT NULL,
  `khazanah_id` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `part_clip` varchar(255) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khazanahs_participants`
--

CREATE TABLE IF NOT EXISTS `khazanahs_participants` (
  `id` int(11) NOT NULL,
  `khazanah_id` int(11) NOT NULL,
  `participant_type` varchar(150) NOT NULL,
  `participant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khazanah_categories`
--

CREATE TABLE IF NOT EXISTS `khazanah_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name_en` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khazanah_categories`
--

INSERT INTO `khazanah_categories` (`id`, `name`, `name_en`) VALUES
(1, 'Penting', 'Important'),
(2, 'Tidak Penting', 'Not Important');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`) VALUES
(1, 'Tanah Liat'),
(2, 'Kanvas'),
(3, 'Media 3');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE IF NOT EXISTS `provinces` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `name_en` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `name_en`) VALUES
(1, 'Yogyakarta', 'Yogyakarta'),
(2, 'Jawa Tengah', 'Middle Java'),
(3, 'Jawa Timur', 'East Java');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created`, `modified`) VALUES
(1, 'testing', 'testing@testing.com', 'testing', '2020-01-23 06:41:32', '2020-01-23 06:41:32'),
(2, 'admin', 'admin@admin.com', '$2y$10$5.zAPuovO2CRIs0ze1w1q.ITpgmxnxHKqKYkWqn4OCdJOMXArQEBy', '2020-02-10 12:19:04', '2020-02-10 12:19:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `birth_country` (`birth_country`),
  ADD KEY `birth_city` (`birth_city`),
  ADD KEY `living_country` (`living_country`),
  ADD KEY `living_city` (`living_city`),
  ADD KEY `domicile` (`domicile`),
  ADD KEY `user_key` (`user_id`);

--
-- Indexes for table `artists_collectives`
--
ALTER TABLE `artists_collectives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_id` (`artist_id`),
  ADD KEY `collective_id` (`collective_id`);

--
-- Indexes for table `artists_industries`
--
ALTER TABLE `artists_industries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creative_industry_id` (`creative_industry_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `artworks`
--
ALTER TABLE `artworks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artwork_category_id` (`artwork_category_id`);

--
-- Indexes for table `artworks_categories`
--
ALTER TABLE `artworks_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artworks_creators`
--
ALTER TABLE `artworks_creators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creator_id` (`creator_id`),
  ADD KEY `artwork_id` (`artwork_id`);

--
-- Indexes for table `artworks_events`
--
ALTER TABLE `artworks_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artwork_id` (`artwork_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `artworks_files`
--
ALTER TABLE `artworks_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artwork_id` (`artwork_id`);

--
-- Indexes for table `artworks_khazanahs`
--
ALTER TABLE `artworks_khazanahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artwork_id` (`artwork_id`),
  ADD KEY `khazanah_id` (`khazanah_id`);

--
-- Indexes for table `artworks_media`
--
ALTER TABLE `artworks_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artwork_id` (`artwork_id`),
  ADD KEY `media_id` (`media_id`);

--
-- Indexes for table `art_venues`
--
ALTER TABLE `art_venues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `province_id` (`province_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collectives`
--
ALTER TABLE `collectives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `domicile_id` (`domicile_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creative_industries`
--
ALTER TABLE `creative_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domiciles`
--
ALTER TABLE `domiciles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_orgnaizer_id` (`event_orgnaizer_id`);

--
-- Indexes for table `events_categories`
--
ALTER TABLE `events_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_cats`
--
ALTER TABLE `events_cats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `event_category_id` (`event_category_id`);

--
-- Indexes for table `events_details`
--
ALTER TABLE `events_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `art_venue_id` (`art_venue_id`);

--
-- Indexes for table `events_khazanahs`
--
ALTER TABLE `events_khazanahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `khazanah_id` (`khazanah_id`);

--
-- Indexes for table `events_participants`
--
ALTER TABLE `events_participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `participant_id` (`participant_id`);

--
-- Indexes for table `event_organizers`
--
ALTER TABLE `event_organizers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khazanahs`
--
ALTER TABLE `khazanahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khazanah_category_id` (`khazanah_category_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `khazanahs_files`
--
ALTER TABLE `khazanahs_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khazanah_id` (`khazanah_id`);

--
-- Indexes for table `khazanahs_participants`
--
ALTER TABLE `khazanahs_participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khazanah_id` (`khazanah_id`),
  ADD KEY `participant_id` (`participant_id`);

--
-- Indexes for table `khazanah_categories`
--
ALTER TABLE `khazanah_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artists_collectives`
--
ALTER TABLE `artists_collectives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artists_industries`
--
ALTER TABLE `artists_industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artworks`
--
ALTER TABLE `artworks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `artworks_categories`
--
ALTER TABLE `artworks_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `artworks_creators`
--
ALTER TABLE `artworks_creators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artworks_events`
--
ALTER TABLE `artworks_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artworks_files`
--
ALTER TABLE `artworks_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artworks_khazanahs`
--
ALTER TABLE `artworks_khazanahs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artworks_media`
--
ALTER TABLE `artworks_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `art_venues`
--
ALTER TABLE `art_venues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `collectives`
--
ALTER TABLE `collectives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `creative_industries`
--
ALTER TABLE `creative_industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `domiciles`
--
ALTER TABLE `domiciles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events_categories`
--
ALTER TABLE `events_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events_cats`
--
ALTER TABLE `events_cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events_details`
--
ALTER TABLE `events_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events_khazanahs`
--
ALTER TABLE `events_khazanahs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events_participants`
--
ALTER TABLE `events_participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_organizers`
--
ALTER TABLE `event_organizers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khazanahs`
--
ALTER TABLE `khazanahs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khazanahs_files`
--
ALTER TABLE `khazanahs_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khazanahs_participants`
--
ALTER TABLE `khazanahs_participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khazanah_categories`
--
ALTER TABLE `khazanah_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artists`
--
ALTER TABLE `artists`
  ADD CONSTRAINT `artists_ibfk_1` FOREIGN KEY (`birth_country`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `artists_ibfk_2` FOREIGN KEY (`birth_city`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `artists_ibfk_3` FOREIGN KEY (`living_country`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `artists_ibfk_4` FOREIGN KEY (`living_city`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `artists_ibfk_5` FOREIGN KEY (`domicile`) REFERENCES `domiciles` (`id`),
  ADD CONSTRAINT `artists_ibfk_6` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `artists_collectives`
--
ALTER TABLE `artists_collectives`
  ADD CONSTRAINT `artists_collectives_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`),
  ADD CONSTRAINT `artists_collectives_ibfk_2` FOREIGN KEY (`collective_id`) REFERENCES `collectives` (`id`);

--
-- Constraints for table `artists_industries`
--
ALTER TABLE `artists_industries`
  ADD CONSTRAINT `artists_industries_ibfk_1` FOREIGN KEY (`creative_industry_id`) REFERENCES `creative_industries` (`id`),
  ADD CONSTRAINT `artists_industries_ibfk_2` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`);

--
-- Constraints for table `artworks`
--
ALTER TABLE `artworks`
  ADD CONSTRAINT `artworks_ibfk_1` FOREIGN KEY (`artwork_category_id`) REFERENCES `artworks_categories` (`id`);

--
-- Constraints for table `artworks_creators`
--
ALTER TABLE `artworks_creators`
  ADD CONSTRAINT `artworks_creators_ibfk_1` FOREIGN KEY (`creator_id`) REFERENCES `artists` (`id`),
  ADD CONSTRAINT `artworks_creators_ibfk_2` FOREIGN KEY (`artwork_id`) REFERENCES `artworks` (`id`);

--
-- Constraints for table `artworks_events`
--
ALTER TABLE `artworks_events`
  ADD CONSTRAINT `artworks_events_ibfk_1` FOREIGN KEY (`artwork_id`) REFERENCES `artworks` (`id`),
  ADD CONSTRAINT `artworks_events_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

--
-- Constraints for table `artworks_files`
--
ALTER TABLE `artworks_files`
  ADD CONSTRAINT `artworks_files_ibfk_1` FOREIGN KEY (`artwork_id`) REFERENCES `artworks` (`id`);

--
-- Constraints for table `artworks_khazanahs`
--
ALTER TABLE `artworks_khazanahs`
  ADD CONSTRAINT `artworks_khazanahs_ibfk_1` FOREIGN KEY (`artwork_id`) REFERENCES `artworks` (`id`),
  ADD CONSTRAINT `artworks_khazanahs_ibfk_2` FOREIGN KEY (`khazanah_id`) REFERENCES `khazanahs` (`id`);

--
-- Constraints for table `artworks_media`
--
ALTER TABLE `artworks_media`
  ADD CONSTRAINT `artworks_media_ibfk_1` FOREIGN KEY (`artwork_id`) REFERENCES `artworks` (`id`),
  ADD CONSTRAINT `artworks_media_ibfk_2` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);

--
-- Constraints for table `art_venues`
--
ALTER TABLE `art_venues`
  ADD CONSTRAINT `art_venues_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `art_venues_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `art_venues_ibfk_3` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`);

--
-- Constraints for table `collectives`
--
ALTER TABLE `collectives`
  ADD CONSTRAINT `collectives_ibfk_1` FOREIGN KEY (`domicile_id`) REFERENCES `domiciles` (`id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`event_orgnaizer_id`) REFERENCES `event_organizers` (`id`);

--
-- Constraints for table `events_cats`
--
ALTER TABLE `events_cats`
  ADD CONSTRAINT `events_cats_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `events_cats_ibfk_2` FOREIGN KEY (`event_category_id`) REFERENCES `events_categories` (`id`);

--
-- Constraints for table `events_details`
--
ALTER TABLE `events_details`
  ADD CONSTRAINT `events_details_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `events_details_ibfk_2` FOREIGN KEY (`art_venue_id`) REFERENCES `art_venues` (`id`);

--
-- Constraints for table `events_khazanahs`
--
ALTER TABLE `events_khazanahs`
  ADD CONSTRAINT `events_khazanahs_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `events_khazanahs_ibfk_2` FOREIGN KEY (`khazanah_id`) REFERENCES `khazanahs` (`id`);

--
-- Constraints for table `events_participants`
--
ALTER TABLE `events_participants`
  ADD CONSTRAINT `events_participants_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `events_participants_ibfk_2` FOREIGN KEY (`participant_id`) REFERENCES `artists` (`id`);

--
-- Constraints for table `khazanahs`
--
ALTER TABLE `khazanahs`
  ADD CONSTRAINT `khazanahs_ibfk_1` FOREIGN KEY (`khazanah_category_id`) REFERENCES `khazanah_categories` (`id`),
  ADD CONSTRAINT `khazanahs_ibfk_2` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`);

--
-- Constraints for table `khazanahs_files`
--
ALTER TABLE `khazanahs_files`
  ADD CONSTRAINT `khazanahs_files_ibfk_1` FOREIGN KEY (`khazanah_id`) REFERENCES `khazanahs` (`id`);

--
-- Constraints for table `khazanahs_participants`
--
ALTER TABLE `khazanahs_participants`
  ADD CONSTRAINT `khazanahs_participants_ibfk_1` FOREIGN KEY (`khazanah_id`) REFERENCES `khazanahs` (`id`),
  ADD CONSTRAINT `khazanahs_participants_ibfk_2` FOREIGN KEY (`participant_id`) REFERENCES `artists` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
