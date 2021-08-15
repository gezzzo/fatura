-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 03:32 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fatura`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'asd', 'asd123321');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `newsletter_tier` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `title`, `description`, `newsletter_tier`) VALUES
(1, 'moasmosm', 'kjnjnjiknjasbnjhbsdjhbasdjhbkjnjnjiknjasbnjhbsdjhbasdjhbkjnjnjiknjasbnjhbsdjhbasdjhbkjnjnjiknjasbnjhbsdjhbasdjhb', 'Daily'),
(2, 'ksmjknsjknsjkn', 'jnsdjindsjhnjnsdjindsjhnjnsdjindsjhnjnsdjindsjhnjnsdjindsjhnjnsdjindsjhnjnsdjindsjhn', 'Weekly'),
(3, 'moasmosm', 'kjnjnjiknjasbnjhbsdjhbasdjhbkjnjnjiknjasbnjhbsdjhbasdjhbkjnjnjiknjasbnjhbsdjhbasdjhbkjnjnjiknjasbnjhbsdjhbasdjhb', 'Monthly'),
(4, 'ksmjknsjknsjkn', 'jnsdjindsjhnjnsdjindsjhnjnsdjindsjhnjnsdjindsjhnjnsdjindsjhnjnsdjindsjhnjnsdjindsjhn', 'Monthly');

-- --------------------------------------------------------

--
-- Table structure for table `newslettes_leirss`
--

CREATE TABLE `newslettes_leirss` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newslettes_leirss`
--

INSERT INTO `newslettes_leirss` (`id`, `name`, `price`) VALUES
(1, 'Daily', 10),
(2, 'Weekly', 7),
(3, 'Monthly', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `newsletter_tiers` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `behance` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `newsletter_tiers`, `behance`) VALUES
(4, 'klsdnjksdn', 'kjkasdiksdnk@jdnsjn.com', 'jasndjsdnkjsdn', 'Daily', 'credit_card'),
(5, 'skldjsdnl', 'jknjkn@dksnjksdn.cp', 'ksmsajnasjsad', 'Daily', 'credit_card'),
(6, 'aaaaaa sssssssss', 'ddddddddddd@n.com', 'ksamnjkdnsajkndsjkn', 'Daily', 'credit_card'),
(7, 'knjdsnjkansjnsjknkkn', 'jknjhnjhnjknjkwnjknk@jdnjkdnj.oc', 'jiwnjidnwinwdjind', 'Monthly', 'credit_card'),
(9, 'momomomo', 'jiwjwnijsdn@djnjhdn.com', 'jnswjhsbnjhnsjh', 'Weekly', 'credit_card'),
(10, 'aaaaaaaa', 'jidnsjknjk@jdnjnj.com', 'njknjknjnjknk', 'Daily', 'credit_card'),
(11, 'jkasdnjksdnjkn', 'asjn@jhdjh.com', 'jsnjnjksnjksd', 'Weekly', 'credit_card'),
(12, 'jnkjknjkn', 'jknjknjknjknk@jdnjhn.con', 'jnjhnjhdsds', 'Monthly', 'credit_card'),
(13, 'jkndjksnjksnjksnkj', 'jknjknjknjkn@ksdnjnd.conm', 'jnnjknjnjnj', 'Daily', 'credit_card'),
(14, 'jkndjksnjksnjksnkj', 'jknjknjknjkn@ksdnjnd.conm', 'jnnjknjnjnj', 'Daily', 'credit_card'),
(15, 'jkndjksnjksnjksnkjsjksnjk', 'jknjknjknjkn@ksdnjnd.conm', 'jnnjknjnjnjsjknjksn', 'Monthly', 'credit_card'),
(16, 'jkndjksnjksnjksnkjsjksnjk', 'jknjknjknjkn@ksdnjnd.conm', 'jnnjknjnjnjsjknjksn', 'Weekly', 'credit_card'),
(18, 'sknjksn', 'kjninjhbnjjh@juhbh.comn', 'hbhbhb', 'Daily', 'credit_card'),
(19, 'skdnsjknjksdnjknjkn', 'jknjknjknjkn@ksdnjnd.conm', 'knjknsjknjknjknj', 'Weekly', 'credit_card'),
(20, 'skdnsjknjksdnjknjkn', 'jknjknjknjkn@ksdnjnd.conm', 'knjknsjknjknjknj', 'Weekly', 'credit_card'),
(22, 'kaslmdjkdasnjkn', 'njhnjhbjhbjhb@jbhb.com', 'jhbjhbjhbj', 'Daily', 'credit_card'),
(23, 'kaslmdjkdasnjkn', 'njhnjhbjhbjhb@jbhb.com', 'jhbjhbjhbj', 'Daily', 'credit_card'),
(24, 'jkasndjknsdjnjdnk', 'iojmijnjiniokmklmjk@jnjhnj.con', 'jknijninjkn', 'Daily', 'credit_card');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslettes_leirss`
--
ALTER TABLE `newslettes_leirss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newslettes_leirss`
--
ALTER TABLE `newslettes_leirss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
