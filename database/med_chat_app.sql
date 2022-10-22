-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 05:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `med_chat_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `opened` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chat_id`, `from_id`, `to_id`, `message`, `opened`, `created_at`) VALUES
(1, 10, 1, 'Hh', 1, '2022-10-22 11:46:07'),
(2, 10, 1, 'Slm', 1, '2022-10-22 11:46:25'),
(3, 1, 10, 'hh', 1, '2022-10-22 11:46:37'),
(4, 10, 1, 'Hi', 1, '2022-10-22 11:47:00'),
(5, 10, 1, 'Slmm', 1, '2022-10-22 11:47:50'),
(6, 10, 1, 'Test', 1, '2022-10-22 11:54:23'),
(7, 1, 10, 'slm', 1, '2022-10-22 13:14:00'),
(8, 10, 1, 'Test test', 1, '2022-10-22 13:14:13'),
(9, 10, 1, 'Test test', 1, '2022-10-22 13:14:13'),
(10, 10, 1, 'Good', 1, '2022-10-22 13:14:27'),
(11, 10, 1, 'Cc', 1, '2022-10-22 13:14:47'),
(12, 1, 10, 'nice', 1, '2022-10-22 13:15:12'),
(13, 10, 1, 'Test6', 1, '2022-10-22 14:09:58'),
(14, 1, 10, 'salam\n', 1, '2022-10-22 14:10:19'),
(15, 10, 1, 'Hello Yasser !', 1, '2022-10-22 14:10:33'),
(16, 1, 10, 'vu', 1, '2022-10-22 14:27:13'),
(17, 10, 12, 'Test', 0, '2022-10-22 14:28:53'),
(18, 10, 1, 'Hi !', 1, '2022-10-22 14:29:05'),
(19, 1, 12, 'salam', 0, '2022-10-22 14:55:30'),
(20, 1, 10, 'hi', 1, '2022-10-22 14:55:37'),
(21, 1, 10, 'Slm', 1, '2022-10-22 14:58:24'),
(22, 10, 1, 'Cv', 1, '2022-10-22 14:58:30'),
(23, 1, 10, 'Rass 5arya', 1, '2022-10-22 14:58:37'),
(24, 10, 1, 'Con chti nta caaatr mni', 1, '2022-10-22 14:58:56'),
(25, 1, 10, 'Ktar machi haka ctar', 1, '2022-10-22 14:59:12'),
(26, 10, 1, 'Ok hhh', 1, '2022-10-22 14:59:27'),
(27, 13, 10, 'Slm ana dak far', 1, '2022-10-22 15:00:43'),
(28, 10, 13, 'Bghit gha n3raf malk m3ana khaliti 3imara caml o jiti 3andna', 1, '2022-10-22 15:01:33'),
(29, 13, 10, 'Vu', 1, '2022-10-22 15:01:51'),
(30, 10, 13, '🖕🖕', 1, '2022-10-22 15:02:27'),
(31, 13, 1, 'Hi', 1, '2022-10-22 15:14:56'),
(32, 1, 12, '.', 0, '2022-10-22 15:18:50'),
(33, 14, 1, 'hi', 1, '2022-10-22 15:56:41'),
(34, 14, 1, 'jjj', 1, '2022-10-22 15:56:47'),
(35, 1, 14, 'm\n\n', 0, '2022-10-22 15:57:33'),
(36, 1, 10, 'jj\n', 1, '2022-10-22 16:00:27'),
(37, 1, 10, 'fuck', 1, '2022-10-22 16:00:36'),
(38, 10, 1, 'ras lkharya', 1, '2022-10-22 16:00:41'),
(39, 1, 10, 'kfkfkf\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n', 1, '2022-10-22 16:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `conversation_id` int(11) NOT NULL,
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`conversation_id`, `user_1`, `user_2`) VALUES
(1, 1, 10),
(5, 1, 12),
(6, 10, 12),
(7, 13, 10),
(8, 13, 1),
(9, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `p_p` varchar(255) DEFAULT 'user-default.jpg',
  `last_seen` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `password`, `p_p`, `last_seen`) VALUES
(1, 'Mohammed Mo', 'med', '$2y$10$RXXrZ.ApYmWk4cS2.XFRDeXNzhb2Fby/mRNDY3xx6mIAG8zM6r68m', 'med.jpg', '2022-10-22 16:03:46'),
(2, 'test1', 'testtest', '$2y$10$BZC5NE7rfReS1SAerGevU.eSu8It6L1ghH2wEoa0.c2QH.nyg3ni.', 'user-default.jpg', '2022-10-18 03:38:42'),
(10, 'Yasser', 'yasser', '$2y$10$mCtxB1J8bgzVDeM2WpXU9euHheGjNWauujnq6BAtGGdHxTfsFRm7W', 'yasser.jpg', '2022-10-22 16:01:03'),
(12, 'Meryem', 'meryemm', '$2y$10$n1V1/2VxB6.zBZcc7n3ttupUU89EKP82Wj9p2HwiS/APujJm.p6wW', 'meryemm.png', '2022-10-21 16:33:51'),
(13, 'Mo', 'mo', '$2y$10$hSyXWXejngvzUWOa4RcDOu6ncKyUE/iV3UPtvVP0ujwB3PIqyJlSq', 'mo.jpg', '2022-10-22 15:18:34'),
(14, 'tesst', 'tesst', '$2y$10$YqlcLUcumC6Cjo4oufRLo.BjqSD4lqsKMYCfSZ47H.UgKDUg8m./W', 'user-default.jpg', '2022-10-22 15:57:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`conversation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `conversation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
