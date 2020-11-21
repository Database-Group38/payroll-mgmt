-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2020 at 07:44 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll management system`
--
CREATE DATABASE IF NOT EXISTS `payroll management system` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `payroll management system`;

-- --------------------------------------------------------

--
-- Table structure for table `accountants`
--

DROP TABLE IF EXISTS `accountants`;
CREATE TABLE IF NOT EXISTS `accountants` (
  `Accountant_Id` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Contact_Id` varchar(5) NOT NULL,
  PRIMARY KEY (`Accountant_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `Address_Id` varchar(5) NOT NULL,
  `House_Number` int(4) NOT NULL,
  `Block` varchar(3) NOT NULL,
  `Street_Number` int(4) NOT NULL,
  `Town` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Country` varchar(30) NOT NULL,
  PRIMARY KEY (`Address_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `adjustments`
--

DROP TABLE IF EXISTS `adjustments`;
CREATE TABLE IF NOT EXISTS `adjustments` (
  `Amount` int(10) NOT NULL,
  `Final_Amount` int(10) NOT NULL,
  `Amount_Added` int(10) NOT NULL,
  `Amount_Deducted` int(10) NOT NULL,
  `Tax_Paid` decimal(6,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Admin_Id` int(1) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Contact_Id` varchar(5) NOT NULL,
  `Salary_Id` varchar(5) NOT NULL,
  PRIMARY KEY (`Admin_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

DROP TABLE IF EXISTS `bank_details`;
CREATE TABLE IF NOT EXISTS `bank_details` (
  `Bank_Id` varchar(5) NOT NULL,
  `Bank_Name` text NOT NULL,
  `Account_Number` text NOT NULL,
  `Salary` int(10) NOT NULL,
  PRIMARY KEY (`Bank_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `Number_Employees` int(6) NOT NULL,
  `Total_Salary` int(15) NOT NULL,
  `Total_Tax_Paid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `Contact_Id` varchar(5) NOT NULL,
  `Contact_Number` varchar(11) NOT NULL,
  `Email_Id` varchar(100) NOT NULL,
  `Address_Id` varchar(5) NOT NULL,
  PRIMARY KEY (`Contact_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `Department_Name` varchar(30) NOT NULL,
  `Department_Id` varchar(5) NOT NULL,
  `Total_Members` int(5) NOT NULL,
  PRIMARY KEY (`Department_Name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `Employee_Id` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Department_Id` varchar(5) NOT NULL,
  `Salary_Id` varchar(5) NOT NULL,
  `Contact_Id` varchar(5) NOT NULL,
  `Bank_Id` varchar(5) NOT NULL,
  `Final_Amount` decimal(6,2) NOT NULL,
  PRIMARY KEY (`Employee_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

DROP TABLE IF EXISTS `leaves`;
CREATE TABLE IF NOT EXISTS `leaves` (
  `Salary_Id` varchar(5) NOT NULL,
  `Leave_Days` int(2) NOT NULL,
  `Daily` decimal(6,2) NOT NULL,
  `Amount_Deducted` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

DROP TABLE IF EXISTS `overtime`;
CREATE TABLE IF NOT EXISTS `overtime` (
  `Salary_Id` varchar(5) NOT NULL,
  `OT_hours` int(2) NOT NULL,
  `Hourly` decimal(6,2) NOT NULL,
  `Amount_Added` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `Employee_Id` int(5) NOT NULL,
  `Salary_Id` varchar(5) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Hourly` decimal(6,2) NOT NULL,
  `Daily` decimal(6,2) NOT NULL,
  PRIMARY KEY (`Salary_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

DROP TABLE IF EXISTS `tax`;
CREATE TABLE IF NOT EXISTS `tax` (
  `Salary_Id` varchar(5) NOT NULL,
  `Tax_Rate` decimal(2,2) NOT NULL,
  `Tax_Paid` decimal(6,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
