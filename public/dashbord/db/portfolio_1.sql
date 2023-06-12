-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 06:28 PM
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
-- Database: `portfolio_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `user_name`, `password`) VALUES
(1, 'Naim Howlader', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `demo_class`
--

CREATE TABLE `demo_class` (
  `id` int(11) NOT NULL,
  `course_uni_id` varchar(200) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `course_image` varchar(200) NOT NULL,
  `cus_name` varchar(200) NOT NULL,
  `cus_email` varchar(200) NOT NULL,
  `cus_mobile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo_class`
--

INSERT INTO `demo_class` (`id`, `course_uni_id`, `course_name`, `course_image`, `cus_name`, `cus_email`, `cus_mobile`) VALUES
(9, '11aa58kl', 'Web Development', '', 'Jikrul Islam', 'jikrul1234@gmail.com', '016326456164');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_course`
--

CREATE TABLE `purchase_course` (
  `id` int(11) NOT NULL,
  `cus_name` varchar(200) NOT NULL,
  `cus_email` varchar(200) NOT NULL,
  `cus_mobile` varchar(200) NOT NULL,
  `cus_address` varchar(200) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `course_batch` varchar(200) NOT NULL,
  `unique_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_course`
--

INSERT INTO `purchase_course` (`id`, `cus_name`, `cus_email`, `cus_mobile`, `cus_address`, `course_name`, `course_batch`, `unique_id`) VALUES
(12, 'Naim Howlader', 'naim1234@gmail.com', '0182546123', 'Foy\'s Lake, Chattogram', 'Python', 'B1', '55ss852');

-- --------------------------------------------------------

--
-- Table structure for table `select_batch`
--

CREATE TABLE `select_batch` (
  `id` int(11) NOT NULL,
  `batch` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `select_batch`
--

INSERT INTO `select_batch` (`id`, `batch`) VALUES
(1, 'A1'),
(2, 'B1'),
(3, 'A2'),
(4, 'B2');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `unique_id` varchar(250) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `course_front_des` varchar(250) NOT NULL,
  `course_point_det_1` varchar(250) NOT NULL,
  `course_point_det_2` varchar(250) NOT NULL,
  `course_point_det_3` varchar(250) NOT NULL,
  `course_back_des` varchar(500) NOT NULL,
  `course_fees` varchar(250) NOT NULL,
  `course_cer_des` varchar(750) NOT NULL,
  `why_learn_1` varchar(250) NOT NULL,
  `why_learn_2` varchar(250) NOT NULL,
  `why_learn_3` varchar(250) NOT NULL,
  `why_learn_4` varchar(250) NOT NULL,
  `why_learn_5` varchar(250) NOT NULL,
  `why_learn_6` varchar(250) NOT NULL,
  `faq_ans_1` varchar(250) NOT NULL,
  `faq_ans_2` varchar(250) NOT NULL,
  `faq_ans_3` varchar(250) NOT NULL,
  `faq_ans_4` varchar(250) NOT NULL,
  `faq_ans_5` varchar(250) NOT NULL,
  `faq_ans_6` varchar(250) NOT NULL,
  `course_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `category`, `unique_id`, `course_name`, `course_front_des`, `course_point_det_1`, `course_point_det_2`, `course_point_det_3`, `course_back_des`, `course_fees`, `course_cer_des`, `why_learn_1`, `why_learn_2`, `why_learn_3`, `why_learn_4`, `why_learn_5`, `why_learn_6`, `faq_ans_1`, `faq_ans_2`, `faq_ans_3`, `faq_ans_4`, `faq_ans_5`, `faq_ans_6`, `course_img`) VALUES
(7, 'offline', '55ss852', 'Python', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since', '6 months training', '30k+ students trained', 'Professional Certification', 'WS-CEH Ethical Hacking Certification Course will equip you with the latest hacking methodologies, tools, advanced techniques, and skills required to become a professional ethical hacker.  This is an online ethical hacking training with regular LIVE CLASSES by an expert trainer. During the entire course, you will learn how to prevent black hat hackers from compromising systems, networks, and devices, leading to major cyberattacks and data breaches.', '15,000', 'The online ethical hacking certification course by WsCube Tech helps you learn all aspects of ethical hacking from scratch. You don’t need to have any prior experience in cybersecurity to acquire these skills.  This course covers all the concepts (from beginner to advanced), including computing networking attacks, enumeration, malware, ransomware, phishing, attack vectors, vulnerabilities, DoS/DDoS attacks, social engineering, footprinting, sniffing, and much more. You will get to work on tools and set up an ethical hacking lab for practice.  Our ethical hacking online course also contains professional certification and job assistance, helping you to find high-paying career opportunities. You can become a Security Analyst, Cybersecurity Exp', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', '1671203920639c8c5001249.jpeg'),
(8, 'self', '48gp22f', ' Ethical Hacking', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since', '6 months training', '30k+ students trained', 'Professional Certification', 'WS-CEH Ethical Hacking Certification Course will equip you with the latest hacking methodologies, tools, advanced techniques, and skills required to become a professional ethical hacker.  This is an online ethical hacking training with regular LIVE CLASSES by an expert trainer. During the entire course, you will learn how to prevent black hat hackers from compromising systems, networks, and devices, leading to major cyberattacks and data breaches.', '14,500', 'The online ethical hacking certification course by WsCube Tech helps you learn all aspects of ethical hacking from scratch. You don’t need to have any prior experience in cybersecurity to acquire these skills.  This course covers all the concepts (from beginner to advanced), including computing networking attacks, enumeration, malware, ransomware, phishing, attack vectors, vulnerabilities, DoS/DDoS attacks, social engineering, footprinting, sniffing, and much more. You will get to work on tools and set up an ethical hacking lab for practice.  Our ethical hacking online course also contains professional certification and job assistance, helping you to find high-paying career opportunities. You can become a Security Analyst, Cybersecurity Exp', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', '1671204364639c8e0ca18a5.jpg'),
(9, 'online', '11aa58kl', 'Web Development', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since', '6 months training', '30k+ students trained', 'Professional Certification', 'WS-CEH Ethical Hacking Certification Course will equip you with the latest hacking methodologies, tools, advanced techniques, and skills required to become a professional ethical hacker.  This is an online ethical hacking training with regular LIVE CLASSES by an expert trainer. During the entire course, you will learn how to prevent black hat hackers from compromising systems, networks, and devices, leading to major cyberattacks and data breaches.', '18,00', 'The online ethical hacking certification course by WsCube Tech helps you learn all aspects of ethical hacking from scratch. You don’t need to have any prior experience in cybersecurity to acquire these skills.  This course covers all the concepts (from beginner to advanced), including computing networking attacks, enumeration, malware, ransomware, phishing, attack vectors, vulnerabilities, DoS/DDoS attacks, social engineering, footprinting, sniffing, and much more. You will get to work on tools and set up an ethical hacking lab for practice.  Our ethical hacking online course also contains professional certification and job assistance, helping you to find high-paying career opportunities. You can become a Security Analyst, Cybersecurity Exp', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Our ethical hacking full course is led by an expert trainer having years of experience in the field. All topics are covered in-depth and in an easy-to-learn way.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', 'Ethical hacking is the practice of hacking a system or network to improve its security. The role of ethical hacking is to detect vulnerabilities that hackers can use for malicious purposes like stealing data, causing financial loss, or other damages.', '1671204695639c8f57f0355.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo_class`
--
ALTER TABLE `demo_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_course`
--
ALTER TABLE `purchase_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `select_batch`
--
ALTER TABLE `select_batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `demo_class`
--
ALTER TABLE `demo_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `purchase_course`
--
ALTER TABLE `purchase_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `select_batch`
--
ALTER TABLE `select_batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
