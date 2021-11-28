-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2021 at 10:28 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `Application_id` int(100) NOT NULL,
  `Student_id` varchar(255) NOT NULL,
  `Hostel_id` int(10) NOT NULL,
  `Application_status` tinyint(1) DEFAULT NULL,
  `Room_No` int(10) DEFAULT NULL,
  `Distance` int(11) NOT NULL,
  `Income` int(100) NOT NULL,
  `Message` varchar(255) DEFAULT NULL,
  `Time` varchar(255) DEFAULT NULL,
  `Date` varchar(255) DEFAULT NULL,
  `Payment_status` tinyint(1) DEFAULT NULL,
  `Vacate_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`Application_id`, `Student_id`, `Hostel_id`, `Application_status`, `Room_No`, `Distance`, `Income`, `Message`, `Time`, `Date`, `Payment_status`, `Vacate_status`) VALUES
(38, '510818012', 1, 0, 101, 100, 240000, '', '10:54 AM', '2021-11-15', 1, NULL),
(39, '510818001', 1, 0, 102, 150, 200000, '', '11:02 AM', '2021-11-15', 1, 1),
(50, '510818003', 1, 1, NULL, 50, 190000, '', '11:58 AM', '2021-11-15', NULL, NULL),
(51, '510818032', 1, 1, NULL, 100, 300000, '', '12:00 PM', '2021-11-15', NULL, NULL),
(52, '510818015', 1, 1, NULL, 450, 235000, '', '12:01 PM', '2021-11-24', NULL, NULL),
(53, '51081', 1, 1, NULL, 350, 235000, '', '12:09 PM', '2021-11-24', NULL, NULL),
(55, '123491', 1, 1, NULL, 1600, 235900, '', '12:15 PM', '2021-11-27', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `Hostel_id` int(10) NOT NULL,
  `Hostel_name` varchar(255) NOT NULL,
  `No_of_rooms` varchar(255) DEFAULT NULL,
  `Year` int(11) NOT NULL,
  `Gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`Hostel_id`, `Hostel_name`, `No_of_rooms`, `Year`, `Gender`) VALUES
(1, 'A', '400', 1, 'Female'),
(2, 'B', '400', 2, 'Female'),
(3, 'C', '400', 2, 'Male'),
(4, 'D', '400', 3, 'Male'),
(5, 'E', '400', 4, 'Female'),
(12, 'F', '200', 3, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_manager`
--

CREATE TABLE `hostel_manager` (
  `Hostel_man_id` int(10) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Mob_no` varchar(255) NOT NULL,
  `Hostel_id` int(10) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Pwd` longtext NOT NULL,
  `Isadmin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_manager`
--

INSERT INTO `hostel_manager` (`Hostel_man_id`, `Username`, `Fname`, `Lname`, `Mob_no`, `Hostel_id`, `Email`, `Pwd`, `Isadmin`) VALUES
(2, 'Admin1', 'Sukanta', 'Das', '6734865304', NULL, 'sd@gmail.com', '$2y$10$XqW44Bk8gIyiTPCH8iQ8WO4.dgAh6X.UF4AF7icj2oVVIRVImXpze', 1),
(3, 'Manager1', 'Shyamalendu', 'Kandar', '9642356788', 1, 'sk@gmail.com', '$2y$10$ow1rIAeRUKao1s6YV2ckBuWhQsFlLcujC4j7Dj/EoOZf4s2HiTBse', 0),
(4, 'Manager3', 'Akash', 'Sarkar', '9932456789', 3, 'akash@gmail.com', '$2y$10$l4txpCQOHoGGCXH7ROWuke/SiBP.CjE0oiMvAkEErO9hOl3EMpv7e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(10) NOT NULL,
  `sender_id` varchar(255) DEFAULT NULL,
  `receiver_id` varchar(255) DEFAULT NULL,
  `hostel_id` int(10) DEFAULT NULL,
  `subject_h` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `msg_date` varchar(255) DEFAULT NULL,
  `msg_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `sender_id`, `receiver_id`, `hostel_id`, `subject_h`, `message`, `msg_date`, `msg_time`) VALUES
(8, '3', '510818012', 1, 'Attendance', 'You Have poor attendance', '2021-11-18', '03:21 PM'),
(9, '510818004', '3', 1, 'Room issue', 'Room is very dirty.', '2021-11-18', '03:23 PM'),
(10, '3', '510818012', 1, 'Attendance', 'Attendance is less than 75%', '2021-11-18', '11:21 AM'),
(16, '2', '3', 1, 'Student list ', 'send me the student list of your hostel', '2021-11-21', '09:06 AM'),
(17, '510818001', '3', 1, 'Want a chair', 'I want a chair in my room. Thanks!', '2021-11-24', '03:12 PM');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_id` int(10) NOT NULL,
  `Hostel_id` int(10) NOT NULL,
  `Room_No` int(10) NOT NULL,
  `Allocated` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_id`, `Hostel_id`, `Room_No`, `Allocated`) VALUES
(1, 1, 101, 1),
(2, 1, 102, 1),
(3, 2, 102, 0),
(4, 2, 101, 0),
(6, 4, 101, 0),
(7, 3, 101, 0),
(8, 1, 103, 0),
(13, 1, 104, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_id` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mob_no` varchar(255) NOT NULL,
  `Dept` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Distance` int(11) NOT NULL,
  `Income` int(100) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Pwd` longtext NOT NULL,
  `Hostel_id` int(10) DEFAULT NULL,
  `Room_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_id`, `Fname`, `Lname`, `Email`, `Mob_no`, `Dept`, `Address`, `Distance`, `Income`, `Gender`, `Pwd`, `Hostel_id`, `Room_id`) VALUES
('123468', 'Amrita', 'Biswas', 'amrita@gmail.com', '9900786532', 'Mining Engineering', 'Berhampore, Murshidabad', 300, 150000, 'Female', '$2y$10$BhhQ.C8zzzH1HJDyh8cTKOdZreCISZOVt9Tr5LXivoCMlyPmnymDK', NULL, NULL),
('123491', 'Sougata', 'Das', 'sou@gmail.com', '6296345632', 'Mechanical Engineering', 'Delhi', 1600, 235900, 'Female', '$2y$10$vnKA0Yh2gla2hx/Ke78B0eNVx2kOKLzIB12GSZBHKWeyc0q6NzXIO', NULL, NULL),
('51081', 'Raima', 'Mondal', 'raima@gmail.com', '4567232456', 'Information Technology', 'Kolkata', 350, 235000, 'Female', '$2y$10$VVx6muwe8eir.VxP9NerTe9l5ARHtzuN25itarmIeKDla3uXIdTLy', NULL, NULL),
('510818001', 'Swastika', 'Ghosh', 'swastika@gmail.com', '9734887304', 'CSE', 'Krishnanagar, Nadia, WB', 150, 200000, 'Female', '$2y$10$/e8yHWtEr7GMNhXrGLebsOyBMxsGOuoQP2.22xywmMSdfYG8eLgQG', 1, 2),
('510818003', 'Satabdi ', 'Ray', 'satabdiray@gmail.com', '6297896754', 'Information Technology', 'Barasat, North 24 Parganas, West Bengal', 50, 190000, 'Female', '$2y$10$UvbxFB6KlYcZNZsCqkr4ru3d.lAjzPAPxvEIvRbdTYE0hbU3BFS6W', NULL, NULL),
('510818004', 'Sayani', 'Ghosh', 'sayanighosh5112000@gmail.com', '6296786302', 'Information Technology', 'Palashipara, Nadia, West Bengal', 190, 150040, 'Female', '$2y$10$baxzWRXZdBDrD5N6XT7Ilex3y9ykIXLMB70Pn4FtX6M79xYzsLIf2', NULL, NULL),
('510818012', 'Soumili', 'Bera', 'berasoumili@gmail.com', '9045678321', 'Information Technology', 'Uttarpara, Howrah, West Bemgal ', 100, 240000, 'Female', '$2y$10$GQ2OL863DGEdtCsaame4LeZdlNVhkeTbZbZXqisFMXla7jaO10/Wq', 1, 1),
('510818015', 'Akshita', 'Bhattacharya', 'aksh@gmail.com', '7878623454', 'Civil Engineering', '22/7, Hill Road, Siliguri', 450, 235000, 'Female', '$2y$10$dT4MNa9G7d70utUZEUzZ4ucUuuzmvxM./ibn2fAo4os0z6UgU6gh.', NULL, NULL),
('510818032', 'Aparajita', 'Biswas', 'apa@gmail.com', '8787656543', 'Information Technology', 'Kolkata', 100, 300000, 'Female', '$2y$10$7SnqcV4670blVUmLSlu8oewjYap/jUh0h01XMYu6OFeuiH0q//La6', NULL, NULL),
('51082', 'Anjana', 'Ghosh', 'anjana@gmail.com', '09734865304', 'Information Technology', 'Vill. Palashipara, P.o. Palashipara, P.s. Palashipara, Dist. Nadia', 350, 235000, 'Female', '$2y$10$MOa7VOYbHSN6mU70hQ6TKO5xd7pzX8PKI.UNJ8H0JuBJGKhioi0vW', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`Application_id`),
  ADD KEY `Student_id` (`Student_id`),
  ADD KEY `Hostel_id` (`Hostel_id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`Hostel_id`);

--
-- Indexes for table `hostel_manager`
--
ALTER TABLE `hostel_manager`
  ADD PRIMARY KEY (`Hostel_man_id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `Hostel_id` (`Hostel_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `hostel_id` (`hostel_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_id`),
  ADD KEY `Hostel_id` (`Hostel_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_id`),
  ADD KEY `Hostel_id` (`Hostel_id`),
  ADD KEY `Room_id` (`Room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `Application_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `Hostel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hostel_manager`
--
ALTER TABLE `hostel_manager`
  MODIFY `Hostel_man_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `Room_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `Application_ibfk_1` FOREIGN KEY (`Student_id`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `Application_ibfk_2` FOREIGN KEY (`Hostel_id`) REFERENCES `hostel` (`Hostel_id`);

--
-- Constraints for table `hostel_manager`
--
ALTER TABLE `hostel_manager`
  ADD CONSTRAINT `Hostel_Manager_ibfk_1` FOREIGN KEY (`Hostel_id`) REFERENCES `hostel` (`Hostel_id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `Message_ibfk_1` FOREIGN KEY (`hostel_id`) REFERENCES `hostel` (`Hostel_id`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `Room_ibfk_1` FOREIGN KEY (`Hostel_id`) REFERENCES `hostel` (`Hostel_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `Student_ibfk_1` FOREIGN KEY (`Hostel_id`) REFERENCES `hostel` (`Hostel_id`),
  ADD CONSTRAINT `Student_ibfk_2` FOREIGN KEY (`Room_id`) REFERENCES `room` (`Room_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
