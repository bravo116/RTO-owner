-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 06:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trafficdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `andrapradesh`
--

CREATE TABLE `andrapradesh` (
  `vno` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `rcno` varchar(20) NOT NULL,
  `vname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `andrapradesh`
--

INSERT INTO `andrapradesh` (`vno`, `name`, `phone`, `rcno`, `vname`) VALUES
('AP02C0334', 'UDAY', 6396190199, 'AP2024GU84578', 'BMW'),
('AP63C2321', 'SINCHANA', 7260662272, 'AP2024GU84579', 'BENZ'),
('AP44L0660', 'SURYA', 6370859562, 'AP2024GV84570', 'BALENO'),
('AP53A3433', 'VISHNU', 8194279368, 'AP2024GV84571', 'Mustang'),
('AP44T4436', 'SOUNDARYA', 8999911701, 'AP2024GV84572', 'BMW'),
('AP54P2234', 'GNANA', 8320182182, 'AP2024GV84573', 'HUNDAI'),
('AP40E5536', 'VARSHITHA', 7409192356, 'AP2024GV84574', 'KEA SONET'),
('AP20C6230', 'HARSHITHA', 6656552687, 'AP2024GV84575', 'KWALIS'),
('AP22D4133', 'HARSHA', 8177500126, 'AP2024GV84576', 'KWID'),
('AP32L6050', 'SANKEERTH', 7805563129, 'AP2024GV84577', 'BREEZA'),
('AP00N5116', 'SONAL', 6231378506, 'AP2024GV84578', 'ALTO'),
('AP11Q4504', 'RAKSHITHA', 8895493070, 'AP2024GV84579', 'OMNI'),
('AP26K1235', 'SHANKAR', 6735989203, 'AP2024GW84570', 'I20'),
('AP01P4322', 'MANOJ', 7609865411, 'AP2024GW84571', 'I10'),
('AP20T5306', 'SAIKUMAR', 7455605400, 'AP2024GW84572', 'FORTUNER');

-- --------------------------------------------------------

--
-- Table structure for table `karnataka`
--

CREATE TABLE `karnataka` (
  `vno` varchar(50) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `rcno` varchar(50) DEFAULT NULL,
  `vname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karnataka`
--

INSERT INTO `karnataka` (`vno`, `name`, `phone`, `rcno`, `vname`) VALUES
('KA52M7987', 'Vishnu Yadav M N', 6366145254, 'KA2024AE84575', 'Mustang'),
('KA53M7988', 'Uday B', 6945213659, 'KA2024AE84576', 'BMW'),
('KA05M7989', 'Shankar', 9685472365, 'KA2024AE84577', 'Benz'),
('KA03M7990', 'Sankeeth', 8956475213, 'KA2024AE84578', 'Kia'),
('KA51M7991', 'Gnanashree', 6321458795, 'KA2024AE84579', 'Kia'),
('KA12M7992', 'Varshitha', 6366145241, 'KA2024AE84580', 'Maruti Suzuki'),
('KA42M7993', 'Chinmayi', 6366145242, 'KA2024AE84581', 'Hyundai'),
('KA22M7994', 'Harsha', 6366145243, 'KA2024AE84582', 'Tata Motors'),
('KA52M7995', 'Sonal', 6366145244, 'KA2024AE84583', ' Mahindra'),
('KA54M7996', 'Sinchana', 6366145245, 'KA2024AE84584', 'Kia'),
('KA51M7997', 'Akshitha', 6366145246, 'KA2024AE84585', 'Toyota'),
('KA47M7998', 'Harshitha', 6366145247, 'KA2024AE84586', 'Honda'),
('KA32M7999', 'Surya', 6366145248, 'KA2024AE84587', 'Renault'),
('KA32M8000', 'Priya', 6366145249, 'KA2024AE84588', 'Skoda'),
('KA32M8001', 'Thanmayee', 6366145250, 'KA2024AE84589', 'MG');

-- --------------------------------------------------------

--
-- Table structure for table `kerala`
--

CREATE TABLE `kerala` (
  `vno` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `rcno` varchar(20) NOT NULL,
  `vname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kerala`
--

INSERT INTO `kerala` (`vno`, `name`, `phone`, `rcno`, `vname`) VALUES
('KL46N3241', 'SUNITHA', 7989559676, 'KL2024TL84571', 'BMW'),
('KL34C2311', 'PRAKASH', 8873120826, 'KL2024TL84572', 'BENZ'),
('KL44O3566', 'SUREKA', 8777874858, 'KL2024TL84573', 'BALE'),
('KL26E3640', 'SAIPALLAVI', 6394163550, 'KL2024TL84574', 'SAFARI'),
('KL46C6663', 'SREELEELA', 8319191841, 'KL2024TL84575\r\n', 'BMW\r\n'),
('KL25G2514', 'RACHITHA', 6228991890, 'KL2024TL84576', 'HUNDAI'),
('KL24I2114', 'POOJA', 6077200537, 'KL2024TL84577', 'KEA SONET'),
('KL25F2201', 'PRIYA', 8962490295, 'KL2024TL84578', 'KWALIS'),
('KL04N6103', 'CHINMAYI', 7306715490, 'KL2024TL84579', 'KWID'),
('KL34D3561', 'GIRIJA', 8269732693, 'KL2024TM84570', 'BREEZA'),
('KL46Q5124', 'YASHWINI', 6127917594, 'KL2024TM84571', 'ALTO'),
('KL16H5555', 'PORNIMA', 6687699098, 'KL2024TM84572', 'OMNI'),
('KL04H3531', 'RAKESH', 6889038296, 'KL2024TM84573', 'I20'),
('KL00T4506', 'BHANU', 7031738967, 'KL2024TM84574', 'I10'),
('KL40D1253', 'PRASAD', 7378509741, 'KL2024TM84575', 'FORTUNER');

-- --------------------------------------------------------

--
-- Table structure for table `tamilnadu`
--

CREATE TABLE `tamilnadu` (
  `vno` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `rcno` varchar(20) NOT NULL,
  `vname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tamilnadu`
--

INSERT INTO `tamilnadu` (`vno`, `name`, `phone`, `rcno`, `vname`) VALUES
('TN33Q2563', 'KAVITA', 8420298432, 'TN2024ZW84570', 'BMW'),
('TN41S5105', 'ANITHA', 8295369179, 'TN2024ZW84571', 'BENZ'),
('TN66B4000', 'SAMITHA', 6413453449, 'TN2024ZW84572', 'BALENO'),
('TN35P3160', 'SUSHMA', 8765057380, 'TN2024ZW84573', 'SAFARI'),
('TN22O6343', 'RAGINI', 7338004663, 'TN2024ZW84574', 'BMW'),
('TN23A3025', 'SOWMYA', 6094929915, 'TN2024ZW84575', 'HUNDAI'),
('TN33O2023', 'ARUNA', 6629136999, 'TN2024ZW84576', 'KEA SONET'),
('TN30H3102', 'LATHA', 7853259473, 'TN2024ZW84577', 'KWALIS'),
('TN15K1302', 'IMRAN', 6937649415, 'TN2024ZW84578', 'KWID'),
('TN56B0112', 'DEEPAK', 6968046141, 'TN2024ZW84579', 'BREEZA'),
('TN30B3544', 'PRAJWAL', 7082884115, 'TN2024ZX84570', 'ALTO'),
('TN55C4441', 'JASHWANTH', 8368392684, 'TN2024ZX84571', 'OMNI'),
('TN15K5060', 'MONISH', 7457199879, 'TN2024ZX84572', 'I20'),
('TN52B1242', 'SARIN', 7084425398, 'TN2024ZX84573', 'I10'),
('TN45T3432', 'SITON', 6115526406, 'TN2024ZX84574', 'FORTUNER');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `name` varchar(20) DEFAULT NULL,
  `vno` varchar(20) DEFAULT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `pswd` varchar(20) DEFAULT NULL,
  `otp` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`name`, `vno`, `phone`, `pswd`, `otp`) VALUES
('Vishnu Yadav M N', 'KA52M8989', 6366145241, 'Vishnu@123', 4586),
('Tony Stark', 'KA52H9885', 9901307444, 'Tony#123', 4587);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
