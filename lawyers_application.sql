-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2024 at 01:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyers_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `lawname` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `username`, `email`, `date`, `time`, `lawname`, `service`, `status`) VALUES
(5, 'Salman Khan', 'salman@gmail.com', '2024-09-05', '07:30:00', 'Hubab khan  ', ' Family Law', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_details`) VALUES
(1, ' Family Law', 'Family law is an area of law that deals with family matters and domestic relations.'),
(3, ' Criminal Lawyer', 'Criminal law is the body of law that relates to crime.'),
(4, ' Civil Law', 'Civil law is a legal system originating in Italy and France that has been adopted in large parts of the world. Modern civil law stems mainly from the Napoleonic Code of the early 19th century, and it is a continuation of ancient Roman law.'),
(5, ' Immigration law', 'Immigration law includes the national statutes, regulations, and legal precedents governing immigration into and deportation from a country. Strictly speaking, it is distinct from other matters such as naturalization and citizenship, although they are sometimes conflated.'),
(6, ' Tax law', 'Tax law or revenue law is an area of legal study in which public or sanctioned authorities, such as federal, state and municipal governments use a body of rules and procedures to assess and collect taxes in a legal context.'),
(8, ' Military lawyer', 'The duty of a military lawyer in their day-to-day roles is like a civilian lawyer.'),
(9, ' Corporate lawyer', 'A corporate lawyer or corporate counsel is a type of lawyer who specializes in corporate law. Corporate lawyers working inside and for corporations are called in-house counsel.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(4, 'Hubab khan ', 'hubab458@gmail.com', 'PHP', 'Shuffff');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `ph_no` varchar(255) NOT NULL,
  `lawyer_photograph` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `approval_status` enum('pending','approved','rejected') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `username`, `email`, `password`, `qualification`, `address`, `category`, `dob`, `ph_no`, `lawyer_photograph`, `role_id`, `approval_status`) VALUES
(2, 'Farhan', 'farhan@gmail.com', '123', '', '', '', '', '', '', 3, 'pending'),
(4, 'Hubab khan ', 'hubab458@gmail.com', '123', 'LLB', 'Karachi, Pakistan', ' Family Law', '2001-03-21', '03257662005', 'hubab.jpg', 2, 'approved'),
(6, 'Usama Ali', 'usama@usama.com', '123', 'LLB', 'Karachi, Pakistan', ' Criminal Lawyer', '2003-06-12', '03112093284', 'usama.jpg', 2, 'approved'),
(7, 'sameer', 'sameer@gmail.com', '123', 'LLB', 'Hydrabad', ' Tax law', '2007-05-08', '03278453684', 'sameer.jpg', 2, 'approved'),
(10, 'hasnain', 'has@gmail.com', '123', '', '', '', '', '', '', 3, 'pending'),
(11, 'Salman Khan', 'salman@gmail.com', '123', 'LLB', 'Hydrabad', ' Immigration law', '2008-06-24', '03112093284', 'person_7.jpg', 2, 'rejected'),
(12, 'Salman Khan', 'salman@gmail.com', '123', 'LLB', 'Karachi', ' Military lawyer', '2024-08-14', '03278453684', 'case-4.jpg', 2, 'rejected'),
(13, 'Ali', 'ali@ali.com', '123', 'LLB', 'Hydrabad', ' Tax law', '2024-08-19', '03112093284', 'case-1.jpg', 2, 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_type`) VALUES
(1, 'admin'),
(2, 'Lawyers'),
(3, 'Clients');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `profile_picture`, `role_id`) VALUES
(15, 'Hubab Khan', 'admin@admin.com', '$2y$10$GrBepNXEhq7FH8CT5msFyejdkAwcxV.l6A6zmjF5IISv9FRd/QIHy', '66c9d9a46628d_hubab.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id_fk` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role_id_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
