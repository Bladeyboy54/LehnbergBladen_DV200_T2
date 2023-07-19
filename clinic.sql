-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 02:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(255) NOT NULL,
  `patient_id` int(255) NOT NULL,
  `doctor_id` int(255) NOT NULL,
  `appointment_time` datetime NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `patient_id`, `doctor_id`, `appointment_time`, `room`) VALUES
(3, 4, 1, '2023-06-22 09:00:00', '13C'),
(4, 1, 1, '2023-06-23 12:00:00', '13C'),
(5, 3, 3, '2023-06-23 13:00:00', '23A');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(255) NOT NULL,
  `profile_img` varchar(1000) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `profile_img`, `name`, `surname`, `age`, `gender`, `email`, `password`, `phone`, `specialization`, `room`) VALUES
(1, 'https://img.freepik.com/premium-photo/man-white-lab-coat-with-stethoscope-his-chest-stands-with-his-arms-crossed_873925-14748.jpg', 'Carl', 'Andrews', 56, 'Male', 'drandrewscarl@gmail.com', '132465789', '0810542398', 'Surgeon', '13C'),
(3, 'https://media.istockphoto.com/id/155445551/photo/attractive-young-medical-worker.jpg?s=612x612&w=0&k=20&c=BdRxFcg5OFSESWUQT1WDK6Vigd76jRHlc9h_YIXvzYM=', 'Jannet', 'Elliot', 37, 'Female', 'jannetelliotmd@gmail.com', '453489768', '0864575214', 'Physio-therapist', '23A'),
(4, 'https://www.doctorsinjohannesburg.co.za/wp-content/uploads/2016/04/African-Doctor-Smiling.jpg', 'Anthony', 'Rosebank', 42, 'Male', 'drarose@email.com', '132465873', '0842356789', 'Radiologist', '10B'),
(5, 'https://www.henrymayo.com/app/files/public/Physician%20Photos/houshang.farhadian--0001.jpg', 'Sylva', 'Acula', 64, 'Male', 'dracula@gmail.com', '165465423', '0615423272', 'Hematologist', '5A');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `medical_aid_no` varchar(10) NOT NULL,
  `profile_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `name`, `surname`, `age`, `gender`, `email`, `phone`, `medical_aid_no`, `profile_img`) VALUES
(1, 'Johnathan', 'Jefferson', 48, 'Male', 'Jefferson1435@email.com', '0846493257', '2147483647', 'https://www.shutterstock.com/image-photo/smiling-middle-age-man-grey-260nw-340310099.jpg'),
(3, 'Stephanie', 'van Vurren', 32, 'Female', 'stephanievvuuren@email.com', '0826282651', '3124957789', 'https://freerangestock.com/sample/139517/smiling-woman-on-a-white-background-hands-together.jpg'),
(4, 'Jackson', 'Matthews', 29, 'Male', 'jmatt@gmail.com', '0645984426', '6541598735', 'https://images.unsplash.com/photo-1522529599102-193c0d76b5b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmxhY2slMjBtYW58ZW58MHx8MHx8fDA%3D&w=1000&q=80');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `email` varchar(255) NOT NULL,
  `profile_img` varchar(1000) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rank` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`email`, `profile_img`, `name`, `age`, `gender`, `phone`, `password`, `rank`) VALUES
('bl@email.com', '', 'Bladen', 0, '', '0', '123456', 1),
('bladen@email.com', '', 'bladen', 0, '', '0', '1234567', 0),
('jeff@email.com', '', 'jeff', 0, '', '0', '123456', 0),
('johndoe@email.com', '', 'John Doe', 0, '', '0', '1234567', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`),
  ADD KEY `room` (`room`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
