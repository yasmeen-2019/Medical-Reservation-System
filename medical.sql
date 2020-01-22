-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2020 at 02:49 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(3) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_image` varchar(250) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_image`) VALUES
(17, 'yasmeen', 'yasmeen@123.com', '123456', 'Penguins.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(3) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `cat_image` varchar(250) NOT NULL,
  `doctor_image` varchar(200) NOT NULL,
  `head_doctor` varchar(100) NOT NULL,
  `cat_text` text NOT NULL,
  `cat_icon` varchar(250) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`, `doctor_image`, `head_doctor`, `cat_text`, `cat_icon`) VALUES
(10, 'Surgical ', 'dept-4.jpg', 'd3.jpg', 'Ammar', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur\r\n\r\nInventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur.', 'mr-3 flaticon-cardiogram'),
(9, 'Dental ', 'dental1.jpg', 'denta1.jpg', 'Omar', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur\r\n\r\nInventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur.', 'mr-3 flaticon-tooth'),
(11, 'Neurological ', 'new.jpg', 'Neurology1.jpg', 'Fahmi', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur\r\n\r\nInventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.', 'mr-3 flaticon-neurology'),
(12, 'Ophthalmological', 'eye4.jpg', 'd4.jpg', 'Haitham', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur\r\n\r\nInventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.', 'mr-3 flaticon-vision'),
(13, 'Pediatrics ', 'baby.jpg', 'baby1.png', 'Rahma', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur\r\n\r\nInventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.', 'mr-3 flaticon-stethoscope'),
(14, 'Cardiology ', 'heart.jpg', 'dental4.jpg', 'Asia', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur\r\n\r\nInventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.', 'mr-3 flaticon-cardiogram');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`) VALUES
(6, 'yazan', 'yazan@gmail.com', 'my name is yazan'),
(5, 'yasmeen', 'yasmeen@123.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `doctor_id` int(3) NOT NULL AUTO_INCREMENT,
  `doctor_name` varchar(100) NOT NULL,
  `doctor_email` varchar(100) NOT NULL,
  `doctor_password` varchar(100) NOT NULL,
  `doctor_time` varchar(100) NOT NULL,
  `doctor_location` varchar(100) NOT NULL,
  `doctor_phone` varchar(100) NOT NULL,
  `doctor_image` varchar(255) NOT NULL,
  `doctor_price` varchar(100) NOT NULL,
  `cat_id` int(3) NOT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `doctor_name`, `doctor_email`, `doctor_password`, `doctor_time`, `doctor_location`, `doctor_phone`, `doctor_image`, `doctor_price`, `cat_id`) VALUES
(5, 'Dr. Omar', 'omar@gmail.com', '123456', '8AM-6PM', 'Abdoun', '0795896321', 'doctor2.jpg', '50$', 9),
(8, 'Dr. Laila', 'laila@hotmail.com', '11', '11AM-7PM', 'Khalda', '0784752398', 'doctor6.jpg', '35$', 9),
(7, 'Dr. Basel', 'basel@yahoo.com', '22', '8AM-8PM', 'Swefieh', '0778569243', 'doctor5.jpg', '35$', 9),
(12, 'Dr. Asia', 'asia@hotmail.com', '2000', '9AM-9PM', 'Jabal-Alhussein', '0774812579', '11.jpg', '25$', 9),
(13, 'Dr. Mohammad', 'mohammad@gmail.com', '33', '8PM-4AM', 'Al Khalidi Hospital & Medical Center', '0785632147', 'cardiology2.jpg', '200$', 10),
(14, 'Dr. Ammar', 'ammar@yahoo.com', '44', '3PM-12AM', 'Jordan Hospital', '0775632897', 'd3.jpg', '130$', 10),
(15, 'Dr. Ibrahim', 'ibrahim@gmail.com', '12345', '9AM-3PM', 'Istiklal Hospital', '0785412896', 'd1.jpg', '100$', 10),
(16, 'Dr. Labiba', 'labiba@hotmail.com', '55', '8AM-1PM', 'Al- Essra Hospital', '0798541796', 'd4.jpg', '80$', 10),
(18, 'Dr. Bella', 'bella@yahoo.com', '66', '9AM-5PM', 'Al Khalidi Hospital & Medical Center', '0785418967', 'Neurology3.jpg', '150$', 11),
(19, 'Dr. Fahmi', 'fahmi@hotmail.com', '123', '8AM-6PM', 'Abdoun', '0798574747', 'Neurology1.jpg', '120$', 11),
(21, 'Dr. Basel', 'basel@gmail.com', '77', '11AM-7PM', 'Al- Essra Hospital', '0145336222', 'cardiology2.jpg', '100$', 14),
(22, 'Dr. Bella', 'bella@hotmail.com', '99', '8AM-10PM', 'Al Khalidi Hospital & Medical Center', '0795896321', 'cardiology1.jpg', '75$', 14),
(23, 'Dr. Ammar', 'ammar@yahoo.com', '123789', '8AM-8PM', 'Specialty Hospital', '0778569243', 'cardiology4.jpg', '125$', 14),
(24, 'Dr. Asia', 'asia@hotmail.com', '222', '11AM-7PM', 'Istiklal Hospital', '0795896321', 'cardiology3.jpg', '110$', 14),
(25, 'Dr. Abdullah', 'abdullah@gmail.com', '333', '8AM-6PM', 'Abdoun', '0778569243', 'doctor-1.jpg', '180$', 14),
(26, 'Dr. Emad', 'emad@yahoo.com', '111', '11AM-7PM', 'Swefieh', '0795896321', 'doctor-1.jpg', '175$', 14),
(27, 'Dr.Mena', 'mena@hotmail.com', '444', '8AM-6PM', 'Khalda', '0795896321', 'doctor-3.jpg', '90$', 10),
(28, 'Dr. Baraa', 'baraa@yahoo.com', '555', '8AM-10PM', 'Swefieh', '0778569243', 'cardiology3.jpg', '60$', 13),
(29, 'Dr.Maram', 'maram@gmail.com', '666', '11AM-7PM', 'Al Khalidi Hospital & Medical Center', '0795896321', 'image_6.jpg', '40$', 10),
(30, 'Dr. Jamal', 'jamal@hotmail.com', '777', '8AM-8PM', 'Specialty Hospital', '0778569243', 'd6.jpg', '55$', 10),
(31, 'Dr. Daniah', 'daniah@gmail.com', '888', '8AM-6PM', 'Swefieh', '0795896321', 'baby1.png', '50$', 13),
(32, 'Dr. Iman', 'iman@yahoo.com', '4000', '8AM-8PM', 'Istiklal Hospital', '0236874599', 'baby3.jpg', '68$', 13),
(34, 'Dr. Kholoud', 'kholoud@hotmail.com', '999', '8AM-8PM', 'Al- Essra Hospital', '4785211179', 'baby4.jpg', '78$', 13),
(35, 'Dr. Mariam', 'mariam@gmail.com', '1010', '11AM-7PM', 'Abdoun', '8796558779', 'baby5.jpg', '45$', 13),
(36, 'Dr. Rahma', 'rahma@yahoo.com', '2020', '3PM-12AM', 'Khalda', '2547889665', 'baby6.jpg', '60$', 13),
(37, 'Dr. Haneen', 'haneen@yahoo.com', '3030', '10AM-2PM', 'Al Khalidi Hospital & Medical Center', '6874887955', 'baby7.jpg', '35$', 13),
(38, 'Dr. Fedaa', 'fedaa@gmail.com', '4040', '5PM-12Am', 'Swefieh', '7748889633', 'baby11.jpg', '80$', 13),
(39, 'Dr. Nedal', 'nedal@hotmail.com', '5050', '9PM-6AM', 'Istishari Hospital', '3365877498', 'baby8.jpg', '70$', 13),
(40, 'Dr. Bassam', 'bassam@yahoo.com', '6060', '10PM-3Am', 'Istishari Hospital', '1148596874', 'baby9.jpg', '65$', 13),
(41, 'Dr. Maher', 'maher@gmail.com', '7070', '8PM-12Am', 'Istishari Hospital', '2547893145', 'baby10.jpg', '50$', 13),
(42, 'Dr. Naser', 'naser@hotmail.com', '8080', '8AM-10PM', 'Swefieh', '3541785236', 'baby12.png', '100$', 13),
(43, 'Dr. Doaa', 'doaa@yahoo.com', '9090', '10AM-5PM', 'IBN ALHAYTHAM HOSPITAL', '1234567898', 'ey3.jpg', '35$', 12),
(44, 'Dr. Haitham', 'haitham@gmail.com', '1000', '11AM-7PM', 'IBN ALHAYTHAM HOSPITAL', '7412589630', 'eye1.jpg', '50$', 12),
(45, 'Dr. Deaa', 'deaa@gmail.com', '2000', '11AM-7PM', 'IBN ALHAYTHAM HOSPITAL', '3698521456', 'eye2.jpg', '60$', 12);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `patient_id` int(3) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(100) NOT NULL,
  `patient_gender` varchar(100) NOT NULL,
  `patient_age` varchar(3) NOT NULL,
  `patient_email` varchar(100) NOT NULL,
  `patient_password` varchar(100) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `patient_gender`, `patient_age`, `patient_email`, `patient_password`) VALUES
(1, 'yasmeen', 'female', '27', 'yasmeen@123.com', 'dfsd'),
(2, 'yazan', 'male', '18', 'yazan@gmail.com', '123456'),
(3, 'rawan', 'female', '22', 'rawan@gmail.com', '123'),
(4, 'ola', 'female', '27', 'ola@hotmail.com', '147'),
(7, 'qusai', 'male', '14', 'qusai2@yahoo.com', '111'),
(8, 'mama', 'female', '48', 'mam@yahoo.com', '1123'),
(23, 'zs', 's', '2', 's@s', 's'),
(22, 'yasmeen', 'a', 'a', 'aaa@w', 'a'),
(21, 'z', 'z', '23', 'z@l', 'zz');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `reservation_id` int(3) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_time` time NOT NULL,
  `patient_id` int(3) NOT NULL,
  `doctor_id` int(3) NOT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `fullname`, `email`, `pass`, `age`, `gender`, `phone`, `reservation_date`, `reservation_time`, `patient_id`, `doctor_id`) VALUES
(3, 'yasmeen', 'yasmeen@123.com', '1', 18, 'female', '1234567898', '2020-01-20', '01:00:00', 1, 5),
(5, 'yazan', 'yazan@gmail.com', '147', 18, 'male', '0778569243', '2020-01-13', '16:30:00', 2, 7),
(7, 'yasmeen', 'yasmeen@123.com', '1236784', 22, 'female', '0795896321', '2020-01-29', '00:00:00', 1, 19),
(8, 'yasmeen', 'yasmeen@123.com', 'dfsd', 25, 'female', '0795896321', '2020-02-01', '15:00:00', 1, 29);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
