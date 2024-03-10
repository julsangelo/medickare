-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 05:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medickare`
--

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminEmail`, `adminPassword`, `adminFirstName`, `adminLastName`) VALUES
(1, 'chastinalarcon@gmail.com', 'chastinalarcon', 'Chastin', 'Alarcon');

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentID`, `doctorID`, `patientID`, `doctorSchedID`, `appointmentReason`, `appointmentStatus`) VALUES
(3643, 1, 20, '12', 'Cant feel my lower body', 'Cancelled'),
(3644, 1, 20, '20', 'Cant feel my lower body', 'Cancelled'),
(3645, 1, 20, '20', 'Cant feel my lower body', 'Cancelled'),
(3646, 1, 20, '20', 'Cant feel my lower body', 'Cancelled'),
(3647, 1, 20, '20', 'Cant feel my lower body', 'Complete'),
(3648, 2, 20, '13', 'may tulo', 'Cancelled'),
(3652, 2, 20, '13', 'may tulo', 'Cancelled'),
(3653, 2, 20, '13', 'may tulo', 'Cancelled'),
(3654, 1, 20, '6', 'masakit ulo', 'Cancelled'),
(3655, 1, 20, '6', 'may tulo', 'Cancelled'),
(3656, 1, 20, '6', 'may tulo', 'Cancelled');

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctorID`, `doctorEmail`, `doctorPassword`, `doctorLastName`, `doctorFirstName`, `doctorSpecialization`) VALUES
(1, 'juancarlo@gmail.com', 'juancarlo', 'Lintag', 'Juan Carlo', 'Neurologist'),
(2, 'chastinalarcon@gmail.com', 'chasetin', 'Alarcon', 'Chastin', 'Pediatrician'),
(10, 'adriendavid@gmail.com', 'chasetin', 'David', 'Adrien', 'Dentist');

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientID`, `patientEmail`, `patientPassword`, `patientFirstName`, `patientLastName`, `patientAddress`, `patientBirthday`, `patientSex`, `patientPhoneNumber`) VALUES
(20, 'paano14325@gmail.com', '23', 'Julius Angelo', 'Paano', 'Phase 1 Blk. A Lot 8, Correctional Road Mandaluyong', '2022-07-06', 'Male', '0943452335'),
(25, 'adriendavid@gmail.com', 'adrien', 'Adrien', 'David', '420 Morbius Street', '2000-09-12', 'Male', '09424332342');

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`doctorSchedID`, `doctorID`, `doctorSchedDate`, `doctorSchedStartTime`, `doctorSchedEndTime`, `doctorSchedAvailability`) VALUES
(6, 1, '2022-07-26', '15:00:00', '15:30:00', 'Yes'),
(13, 2, '2022-07-28', '07:00:00', '07:20:00', 'No'),
(20, 1, '2022-07-26', '12:00:00', '12:30:00', 'Yes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
