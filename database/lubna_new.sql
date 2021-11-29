-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 03:38 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lubna_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `custcom`
--

CREATE TABLE `custcom` (
  `serial` int(10) NOT NULL,
  `comname` varchar(20) NOT NULL,
  `commail` varchar(60) NOT NULL,
  `comphn` varchar(20) NOT NULL,
  `comemail` varchar(20) NOT NULL,
  `contactperson` varchar(20) NOT NULL,
  `personphn` varchar(20) NOT NULL,
  `personemail` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `custind`
--

CREATE TABLE `custind` (
  `custname` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `custdoor` varchar(11) NOT NULL,
  `custstreet` varchar(50) NOT NULL,
  `custmail` varchar(60) NOT NULL,
  `custmob` varchar(11) NOT NULL,
  `custland` varchar(11) NOT NULL,
  `custemail` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custind`
--

INSERT INTO `custind` (`custname`, `date`, `custdoor`, `custstreet`, `custmail`, `custmob`, `custland`, `custemail`) VALUES
('ab vai', '2021-10-07', '3/752', 'mannarai', 'ab, Dhaka.', '1212', '1212', 'ab@gmail.com'),
('Ariful Haque', '2021-10-07', '2/758', 'parapalaiyam', 'Dhaka.', '01715786186', '9142153', 'alexrider2007@yahoo.'),
('Dhaka', '2021-10-07', '3/784', 'karumarampalayam', 'Dhanmondi', '01711111111', '023474645', 'dhaka@gmail.com'),
('goltu090', '2021-10-07', '1/452', 'palaiyakadu', 'Dhaka-1290', '190', '190', 'ho90@yahoo.com'),
('xsxs', '2021-10-07', '3/528', 'mannarai', 'cd', '1234567890', 'xcss', 'cd@gm.com'),
('Neela varshini', '2021-10-07', '2/856', 'pn raod', 'nv', '9364887888', '0422487654', 'nv@gmail.com'),
('Neela', '2021-10-07', '2/963', 'valipalaiyam', 'Tirupur', '9364544878', '0422422582', 'varshini@gmail.com'),
('Lakshitha', '2021-10-07', '3/752', 'new busstand', 'coimbatore', '9354126870', '0422513694', 'lakshitha@gmail.com'),
('abi', '2021-10-07', '2/854', 'vanjipalaiyam', 'coimbatore', '9364544878', '0421587963', 'abi@gmail.com'),
('jk', '2021-10-07', '2/153', 'sulur', 'coimbatore', '9346444878', '0422486654', 'jk@gmail.com'),
('Salman', '2021-10-07', '2/963', 'perumanallur', 'Erode', '9364547878', '0421587967', 'salman@gmail.com'),
('Karthi', '2021-10-07', '2/147', 'mannarai', 'Erode', '9364544800', '0421587978', 'karthi@gmail.com'),
('Aarthi', '2021-10-07', '3/159', 'mannarai', 'Erode', '9874563217', '0422587963', 'aarthi@gmail.com'),
('Arun', '2021-10-08', '3/125', 'sulur', 'Erode', '9364544866', '0421587977', 'aarun@gmail.com'),
('Dinesh', '2021-10-08', '2/145', 'singanallur', 'Erode', '9364544874', '0422487412', 'dinesh@gmail.com'),
('Sabari', '2021-10-08', '143', 'parapalaiyam', 'Tirupur', '9364544874', '0421587964', 'sabari@gmail.com'),
('Rohinth', '2021-10-08', '120', 'mannarai', 'Erode', '9364578141', '0422487655', 'rohinth@gmail.com'),
('sendooran', '2021-10-08', '186', 'karumarampaliayam', 'Erode', '9364544848', '0421581963', 'sendooran@gmail.com'),
('snegaa', '2021-10-08', '3/526', 'singanallur', 'coimbatore', '9364544811', '0421587922', 'snegaa@gmail.com'),
('Gokul', '2021-10-08', '2/784', 'new busstand', 'Salem', '9364544855', '0422487644', 'gokul@gmail.com'),
('siddharath', '2021-10-08', '3/754', 'perumannallur', 'Erode', '9364544874', '0422487611', 'siddharath@gmail.com'),
('Srinivasan', '2021-10-08', '2/154', 'mannarai', 'Tirupur', '9364544877', '0422487656', 'srinivasan@gmail.com'),
('Srini', '2021-10-08', '2/563', 'vanjipalayam', 'Erode', '9364578121', '0421587863', 'srini@gmail.com'),
('Ananadhi', '2021-10-08', '3/231', 'karumarampaliyam', 'Salem', '8220511653', '0421589637', 'anandhi@gmail.com'),
('sathya', '2021-10-08', '2/152', 'karumarampaliyam', 'Erode', '9364544876', '0422487650', 'sathya@gmail.com'),
('Sankar', '2021-10-08', '123', 'vanjipalayam', 'coimbatore', '9364544278', '0422287654', 'sankar@gmail.com'),
('Murthy', '2021-10-08', '3/565', 'singanallur', 'Trichy', '6364544878', '0421287963', 'murthy@gmail.com'),
('Anandh', '2021-10-08', '2/103', 'new busstand', 'Trichy', '9514782360', '0422518739', 'anandh@gmail.com'),
('kavin', '2021-10-08', '452', 'thindal', 'Erode', '9364578120', '0421587963', 'kavin@gmail.com'),
('kumar', '2021-10-08', '3/852', 'palaiyakadu', 'Tirupur', '6364578120', '0421287963', 'kumar@gmail.com'),
('Arul', '2021-10-09', '3/145', 'sulur', 'coimbatore', '6364544878', '0421588963', 'arul@gmail.com'),
('Vel Murugan', '2021-10-09', '2/147', 'mannarai', 'Tirupur', '8364544878', '0421582963', 'velmurugan@gmail.com'),
('Anu', '2021-10-09', '148', 'busstand', 'coimbatore', '9364544874', '0422487054', 'anu@gmail.com'),
('Prasanth', '2021-10-09', '3/859', 'parapaliyam', 'Tirupur', '9364544871', '0422487653', 'prasanth@gmail.com'),
('Abinesh', '2021-10-09', '3/968', 'perumanallur', 'Erode', '9364544871', '0422487653', 'abinesh@Gmail.com'),
('arjun', '2021-10-09', '3/145', 'sulur', 'Salem', '9364578120', '0421487654', 'arjun@gmail.com'),
('viji', '2021-10-09', '3/412', 'perumanallur', 'Trichy', '9364544871', '0421287963', 'viji@gmail.com'),
('vijay', '2021-10-09', '147', 'new busstand', 'Trichy', '9364578121', '0422487651', 'vijay@gmail.com'),
('Abinaya', '2021-10-09', '3/141', 'mannarai', 'Tirupur', '9364544871', '0422487654', 'abinaya@gmail.com'),
('bharani', '2021-10-09', '3/141', 'new busstand', 'Tirupur', '9364578121', '0421587960', 'bharani@gmail.com'),
('gowsalya', '2021-10-09', '3/147', 'old busstand', 'Salem', '8364578120', '0422487650', 'gowsalya@gmail.com'),
('Gomathi', '2021-10-09', '155', 'sulur', 'coimbatore', '9364578120', '0422487654', 'gomathi@gmail.com'),
('gandhi', '2021-10-09', '3/859', 'perumanallur', 'coimbatore', '9364544874', '0421287963', 'gandhi@gmail.com'),
('Gayathiri', '2021-10-09', '3/999', 'parapaliyam', 'Trichy', '9364544871', '0422487654', 'gayathiri@gmail.com'),
('preethi', '2021-10-09', '2/144', 'perumanallur', 'coimbatore', '7364544878', '0422487611', 'preethi@gmail.com'),
('Pragathi', '2021-10-09', '3/145', 'busstand', 'Trichy', '9364544874', '0421587963', 'pragathi@gmail.com'),
('Pramoth', '2021-10-09', '2/140', 'new busstand', 'Salem', '9364544874', '0421287963', 'pramoth@gmail.com'),
('Pradeep', '2021-10-09', '3/968', 'mannarai', 'Erode', '9364544874', '0421587963', 'pradeep@gmail.com'),
('Ajay', '2021-10-09', '123', 'sulur', 'Erode', '9364544874', '0421587963', 'ajay@gmail.com'),
('Anju', '2021-10-09', '159', 'sulur', 'Trichy', '9364544874', '0421587963', 'anju@gmail.com'),
('Pami', '2021-10-18', '3/145', 'perumanallur', 'coimbatore', '9364544874', '0422487654', 'pami@gmail.com'),
('paavani', '2021-10-18', '3/968', 'new busstand', 'Erode', '9364544874', '0421287963', 'paavani@gmail.com'),
('abinay', '2021-10-18', '3/968', 'busstand', 'Erode', '9364544871', '0421287963', 'abinay@gmail.com'),
('ciby', '2021-10-18', '3/141', 'parapaliyam', 'coimbatore', '9364544874', '0421587963', 'ciby@gmail.com'),
('varun', '2021-10-18', '2/147', 'sulur', 'Salem', '9364578121', '0422487654', 'varun@gmail.com'),
('vivek', '2021-10-18', '3/859', 'new busstand', 'Salem', '9364544874', '0421587963', 'vivek@gmail.com'),
('ami', '2021-10-18', '141', 'parapaliyam', 'Trichy', '9364544871', '0422487611', 'ami@gmail.com'),
('abinav', '2021-10-18', '123', 'sulur', 'Salem', '9364544874', '0421587963', 'abinav@gmail.com'),
('sachin', '2021-10-18', '114', 'new busstand', 'Tirupur', '9364544874', '0422487654', 'sachin@gmail.com'),
('dhoni', '2021-10-18', '147', 'new busstand', 'Tirupur', '9364578120', '0422487654', 'dhoni@gmail.com'),
('palani', '2021-10-19', '3/968', 'busstand', 'Erode', '9364578120', '0422487654', 'palani@gmail.com'),
('muthu', '2021-10-19', '3/145', 'perumanallur', 'Tirupur', '9364578120', '0422487611', 'muthu@gmail.com'),
('bhavana', '2021-10-19', '2/147', 'busstand', 'Trichy', '9364578121', '0421587963', 'bhavana@gmail.com'),
('bharathi', '2021-10-19', '146', 'sulur', 'coimbatore', '9364544871', '0422487611', 'bharathi@gmail.com'),
('kannama', '2021-10-19', '3/859', 'parapaliyam', 'Tirupur', '9364544871', '0422487654', 'kannama@gmail.com'),
('akhil', '2021-10-19', '2/147', 'perumanallur', 'Salem', '9364578120', '0421587963', 'akhil@gmail.com'),
('soheal', '2021-10-19', '2/147', 'busstand', 'Erode', '9364578120', '0422487611', 'soheal@gmail.com'),
('myna', '2021-10-19', '3/141', 'sulur', 'coimbatore', '9364578121', '0422487654', 'myna@gmail.com'),
('sreekhanth', '2021-10-19', '2/147', 'sulur', 'coimbatore', '9364544874', '0422487654', 'sreekhanth@gmail.com'),
('aadhi', '2021-10-19', '2/142', 'perumanallur', 'Erode', '9364544878', '0422487654', 'aadhi@gmail.com'),
('pandi', '2021-10-19', '3/145', 'perumanallur', 'Tirupur', '9364544878', '0422487654', 'pandi@gmail.com'),
('anbu', '2021-10-19', '3/968', 'new busstand', 'Erode', '9364544878', '0421587963', 'anbu@gmail.com'),
('kaanika', '2021-10-19', '3/174', 'perumanallur', 'Tirupur', '9364544878', '0421587963', 'kaanika@gmail.com'),
('prajan', '2021-10-19', '2/147', 'perumanallur', 'coimbatore', '9364544874', '0421287963', 'prajan@gmail.com'),
('buvi', '2021-10-19', '3/141', 'sulur', 'coimbatore', '9364578120', '0422487611', 'buvi@gmail.com'),
('amirtha', '2021-10-19', '3/141', 'new busstand', 'Salem', '9364578121', '0422487611', 'amirtha@gmail.com'),
('abimanyu', '2021-10-19', '2/45', 'new busstand', 'Salem', '9364544878', '0422487611', 'abimanyu@gmail.com'),
('pranav', '2021-10-19', '3/859', 'parapaliyam', 'Erode', '9364544871', '0422487611', 'pranav@gmail.com'),
('dharshini', '2021-10-19', '2/147', 'new busstand', 'Trichy', '9364578120', '0421587963', 'dharshini@gmail.com'),
('afrin', '2021-10-19', '3/141', 'new busstand', 'Erode', '9364578121', '0422487611', 'afrin@gmail.com'),
('sankavi', '2021-10-19', '3/145', 'sulur', 'Salem', '9364544874', '0422487611', 'sankavi@gmail.com'),
('alagaesan', '2021-10-19', '3/968', 'busstand', 'Salem', '9364544871', '0422487611', 'alagaesan@gmail.com'),
('banu', '2021-10-19', '3/145', 'parapaliyam', 'Tirupur', '9364578120', '0421287963', 'banu@gmail.com'),
('bakya', '2021-10-19', '3/968', 'new busstand', 'Salem', '9364578120', '0422487654', 'bakya@gmail.com'),
('roja', '2021-10-19', '3/859', 'parapaliyam', 'Trichy', '9364578120', '0422487611', 'roja@gmail.com'),
('mano', '2021-10-19', '2/147', 'new busstand', 'coimbatore', '9364578120', '0421587963', 'mano@gmail.com'),
('madhu', '2021-10-19', '3/141', 'busstand', 'Salem', '9364544878', '0422487611', 'madhu@gmail.com'),
('raj', '2021-10-19', '3/141', 'perumanallur', 'Erode', '9364544871', '0422487611', 'raj@gmail.com'),
('ram', '2021-10-19', '3/859', 'parapaliyam', 'Salem', '9364544874', '0421287963', 'ram@gmail.com'),
('ragu', '2021-10-19', '3/145', 'busstand', 'Erode', '9364578121', '0421587963', 'ragu@gmail.com'),
('abilash', '2021-10-19', '3/859', 'parapaliyam', 'Erode', '9364544878', '0421587963', 'abilash@gmail.com'),
('sridhar', '2021-10-19', '3/141', 'sulur', 'Salem', '9364578120', '0421287963', 'sridhar@gmail.com'),
('nisha', '2021-10-19', '2/147', 'sulur', 'Salem', '9364544871', '0422487654', 'nisha@gmail.com'),
('niranjini', '2021-10-19', '3/145', 'busstand', 'Trichy', '9364544874', '0421287963', 'niranjini@gmail.com'),
('mithun', '2021-10-19', '3/858', 'mannarai', 'Trichy', '9364578120', '0422487611', 'mithun@gmail.com'),
('ishu', '2021-10-19', '3/85', 'mannarai', 'Salem', '9364544878', '0422487611', 'ishu@gmail.com'),
('nirmal', '2021-10-19', '3/855', 'busstand', 'Erode', '9364578120', '0421587963', 'nirmal@gmail.com'),
('prabu', '2021-10-19', '3/84', 'mannarai', 'coimbatore', '9364544878', '0422487654', 'prabu@gmail.com'),
('govind', '2021-10-19', '3/853', 'busstand', 'Salem', '9364578121', '0422487654', 'govind@gmail.com'),
('mani', '2021-10-19', '3/848', 'new busstand', 'coimbatore', '9364578120', '0421287963', 'mani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` int(11) NOT NULL,
  `custinfo` varchar(20) NOT NULL,
  `goods` varchar(20) NOT NULL,
  `unitprice` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `grandtot` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `custinfo`, `goods`, `unitprice`, `quantity`, `grandtot`) VALUES
(17, 'goltu090', 'Bug Scare', '1021', '10', '10210'),
(16, 'goltu090', 'Bug Scare', '102', '10', '1020'),
(15, 'Ariful Haque', 'Pest Repeller', '100', '10', '1000'),
(14, 'eid7', 'Bug Scare', '9', '90', '810'),
(13, 'goltu090', 'Bug Scare', '120', '12', '1440'),
(12, 'Dhaka', 'Pest Repeller', '12', '12', '144'),
(93, 'Ariful Haque', 'Pest Repeller', '100', '12', '1200'),
(92, 'Ariful Haque', 'Bug Scare', '200', '10', '2000'),
(91, 'Ariful Haque', 'Pest Repeller', '100', '12', '1200'),
(23, 'Ariful Haque', 'Bug Scare', '81', '8', '648'),
(24, 'Ariful Haque', 'Bug Scare', '81', '8', '648'),
(25, 'Ariful Haque', 'Bug Scare', '81', '8', '648'),
(26, 'Ariful Haque', 'Bug Scare', '81', '8', '648'),
(27, 'Ariful Haque', 'Bug Scare', '81', '8', '648'),
(28, 'Ariful Haque', 'Bug Scare', '81', '8', '648'),
(29, 'Ariful Haque', 'Bug Scare', '81', '8', '648'),
(30, 'Ariful Haque', 'Bug Scare', '81', '8', '648'),
(31, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(32, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(33, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(34, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(35, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(36, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(37, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(38, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(39, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(40, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(41, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(42, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(43, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(44, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(45, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(46, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(48, 'Ariful Haque', 'Pest Repeller', '10', '10', '100'),
(49, 'Ariful Haque', 'Pest Repeller', '10', '10', '100'),
(50, 'Ariful Haque', 'Pest Repeller', '10', '10', '100'),
(51, 'Ariful Haque', 'Pest Repeller', '10', '10', '100'),
(52, 'Ariful Haque', 'Pest Repeller', '10', '10', '100'),
(54, 'rights', 'Select the Item', '829', '10', '8290'),
(55, 'Ariful Haque', 'Pest Repeller', '5000', '3', '15000'),
(56, 'Ariful Haque', 'Pest Repeller', '50001', '3', '150003'),
(57, 'Ariful Haque', 'Pest Repeller', '74.5', '10', '745'),
(58, 'Ariful Haque', 'Pest Repeller', '74.5', '10', '745'),
(59, 'Ariful Haque', 'Pest Repeller', '393', '10', '3930'),
(60, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(61, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(62, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(63, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(64, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(65, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(66, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(67, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(68, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(69, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(70, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(71, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(72, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(73, 'ab vai', 'Pest Repeller', '2828', '10', '28280'),
(74, 'ab vai', 'Pest Repeller', '2828', '10', '28280'),
(75, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(76, 'ab vai', 'Pest Repeller', '2828', '10', '28280'),
(77, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(78, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(79, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(80, 'ab vai', 'Pest Repeller', '2828', '10', '28280'),
(81, 'ab vai', 'Pest Repeller', '2828', '10', '28280'),
(82, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(83, 'ab vai', 'Pest Repeller', '2828', '10', '28280'),
(84, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(85, 'ab vai', 'Pest Repeller', '2828', '10', '28280'),
(86, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(87, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(88, 'ab vai', 'Pest Repeller', '2828', '10', '28280'),
(90, 'ab vai', 'Pest Repeller', '100', '10', '1000'),
(94, 'Ariful Haque', 'Bug Scare', '200', '10', '2000'),
(95, 'Ariful Haque', 'Pest Repeller', '100', '12', '1200'),
(96, 'Ariful Haque', 'Bug Scare', '200', '10', '2000'),
(97, 'Ariful Haque', 'Pest Repeller', '100', '12', '1200'),
(98, 'Ariful Haque', 'Bug Scare', '200', '10', '2000'),
(99, 'Dhaka', 'Pest Repeller', '90', '1000', '90000'),
(100, 'Dhaka', 'Pest Repeller', '90', '1000', '90000'),
(101, 'Dhaka', 'Pest Repeller', '90', '1000', '90000'),
(102, 'Dhaka', 'Pest Repeller', '90', '1000', '90000'),
(103, 'Dhaka', 'Pest Repeller', '90', '1000', '90000'),
(104, 'Dhaka', 'Pest Repeller', '90', '1000', '90000'),
(105, 'Ariful Haque', 'Pest Repeller', '50', '200', '10000'),
(106, 'Ariful Haque', 'Bug Scare', '100', '200', '20000'),
(107, 'Dhaka', 'Pest Repeller', '100', '100000', '10000000'),
(108, 'Dhaka', 'Pest Repeller', '100', '100000', '10000000');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `billno` int(11) NOT NULL,
  `Date` date NOT NULL,
  `repid` int(11) NOT NULL,
  `cusmail` varchar(50) NOT NULL,
  `proid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`billno`, `Date`, `repid`, `cusmail`, `proid`, `quantity`, `price`) VALUES
(1, '2021-10-07', 2, 'nv@gmail.com', 2, 5, 5000),
(2, '2021-10-07', 3, 'abi@gmail.com', 3, 2, 10000),
(3, '2021-10-18', 7, 'salman@gmail.com', 3, 1, 1500),
(4, '2021-10-18', 9, 'jk@gmail.com', 1, 3, 3000),
(5, '2021-10-18', 8, 'karthi@gmail.com', 5, 5, 75000),
(6, '2021-10-18', 5, 'nv@gmail.com', 8, 5, 60000),
(7, '2021-10-18', 1, 'jk@gmail.com', 7, 2, 25000),
(8, '2021-10-19', 4, 'salman@gmail.com', 4, 1, 5000),
(9, '2021-10-19', 1, 'varshini@gmail.com', 5, 6, 90000),
(10, '2021-10-19', 6, 'karthi@gmail.com', 2, 5, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `proname` varchar(50) NOT NULL,
  `cost` int(10) NOT NULL,
  `avail` int(10) NOT NULL,
  `reorder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `proname`, `cost`, `avail`, `reorder`) VALUES
(1, 'delta', 1000, 25, 10),
(2, 'control panel', 5000, 20, 10),
(3, 'sick', 1500, 25, 10),
(4, 'DVP-EH3 Series', 5000, 24, 10),
(5, 'DTK Series', 15000, 19, 10),
(6, 'Text Panel', 12000, 25, 5),
(7, 'Temperature Controller', 12500, 23, 5),
(8, 'DTS Series', 12000, 20, 5),
(9, 'DP-EH3 Series', 1000, 25, 10),
(10, 'DK Series', 1500, 25, 10),
(11, 'DP-EH3 Series', 1000, 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `product_reference`
--

CREATE TABLE `product_reference` (
  `id` int(11) NOT NULL,
  `ref_no` varchar(50) DEFAULT NULL,
  `product` varchar(50) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_reference`
--

INSERT INTO `product_reference` (`id`, `ref_no`, `product`, `date`, `status`) VALUES
(1, '1233', 'Pest Repeller', '2010-11-04', 'not delivered'),
(2, '1255', 'Pest Repeller', '2010-11-04', 'Not Given'),
(3, '1288', 'Pest Repeller', '2010-11-04', 'Not Given'),
(4, '1988', 'Pest Repeller', '2010-11-04', 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `repdetails`
--

CREATE TABLE `repdetails` (
  `repid` int(11) NOT NULL,
  `repname` varchar(50) NOT NULL,
  `repdoor` varchar(10) NOT NULL,
  `repstreet` varchar(30) NOT NULL,
  `repcity` varchar(30) NOT NULL,
  `reppin` int(6) NOT NULL,
  `repmob` int(10) NOT NULL,
  `repland` int(10) NOT NULL,
  `repemail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repdetails`
--

INSERT INTO `repdetails` (`repid`, `repname`, `repdoor`, `repstreet`, `repcity`, `reppin`, `repmob`, `repland`, `repemail`) VALUES
(1, 'Swetha', '3/725', 'kongu main road', 'tirupur', 641605, 2147483647, 422565689, 'swetha@gmail.com'),
(2, 'Nishanthini', '3/758', 'valipalaiyam', 'tirupur', 641605, 2147483647, 422565685, 'nishanthini@gmail.com'),
(3, 'Sankari', '3/727', 'selavapuram', 'tirupur', 641607, 2147483647, 422562689, 'sankari@gmail.com'),
(4, 'Pradeepa', '3/727', 'parapaliyam', 'tirupur', 641604, 2147483647, 422565589, 'pradeepa@gmail.com'),
(5, 'Manju', '3/745', 'mannarai', 'tirupur', 641608, 2147483647, 422565688, 'manju@gmail.com'),
(6, 'kavya', '3/724', 'karumarampalayam', 'tirupur', 641605, 2147483647, 422565681, 'kavya@gmail.com'),
(7, 'Prathana', '3/721', 'perumanallur', 'Erode', 651620, 2147483647, 422565688, 'prathana@gmail.com'),
(8, 'bhavatharani', '3/774', 'valipalaiyam', 'Erode', 641605, 2147483647, 422565600, 'bhavatharani@gmail.com'),
(9, 'swathi', '3/727', 'palavanjipalayam', 'Salem', 661607, 2147483647, 422555689, 'swathi@gmail.com'),
(10, 'samyuktha', '3/741', 'valipalaiyam', 'Salem', 641607, 2147483647, 422565681, 'samyukth@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `serial` int(11) NOT NULL,
  `prodtype` varchar(10) NOT NULL,
  `unitprice` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `lcno` varchar(10) NOT NULL,
  `withdrawn` varchar(10) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `issuedate` varchar(25) NOT NULL,
  `arivaldate` varchar(25) NOT NULL,
  `tax` varchar(10) DEFAULT NULL,
  `vat` varchar(10) DEFAULT NULL,
  `ait` varchar(10) DEFAULT NULL,
  `ad` varchar(10) DEFAULT NULL,
  `printing` varchar(10) DEFAULT NULL,
  `sundry` varchar(10) DEFAULT NULL,
  `totexp` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`serial`, `prodtype`, `unitprice`, `quantity`, `lcno`, `withdrawn`, `bank`, `issuedate`, `arivaldate`, `tax`, `vat`, `ait`, `ad`, `printing`, `sundry`, `totexp`) VALUES
(17, 'Pest Repel', '282', '228', 'sks', '', 'djd', '12-Oct-2010', '26-Oct-2010', '33', '8', '28', '118', '67', '69', '68558'),
(18, 'Bug Scare', '383', '228', '220/aja', '', 'one', '21-Oct-2010', '27-Oct-2010', '383', '2828', '2727', '2727', '2828', '1181', '102927'),
(21, 'Bug Scare', '37', '28', 'al', '1919', 'one', '15-Oct-2010', '30-Oct-2010', '181881', '191919', '2929', '9292', '9292', '2929', '401197'),
(22, 'Bug Scare', '37', '28', 'al', '1919', 'one', '15-Oct-2010', '30-Oct-2010', '181881', '191919', '2929', '9292', '9292', '2929', '401197'),
(24, 'Bug Scare', '23123', '31212', '', '12312', 'one', '4-Oct-2010', '26-Oct-2010', '213312', '32212312', '232', '33', '33', '33', '754153343');

-- --------------------------------------------------------

--
-- Table structure for table `target_details`
--

CREATE TABLE `target_details` (
  `repid` int(11) NOT NULL,
  `date` date NOT NULL,
  `target_sales` int(11) NOT NULL,
  `target_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `target_details`
--

INSERT INTO `target_details` (`repid`, `date`, `target_sales`, `target_date`) VALUES
(1, '2021-10-08', 100000, '2021-11-08'),
(2, '2021-10-18', 150000, '2021-11-18'),
(8, '2021-10-26', 150000, '2021-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('a', '1'),
('admin', '12345'),
('admin@gmail.com', 'admin@1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custcom`
--
ALTER TABLE `custcom`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `custind`
--
ALTER TABLE `custind`
  ADD PRIMARY KEY (`custemail`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_no`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`billno`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reference`
--
ALTER TABLE `product_reference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repdetails`
--
ALTER TABLE `repdetails`
  ADD PRIMARY KEY (`repid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custcom`
--
ALTER TABLE `custcom`
  MODIFY `serial` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `billno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_reference`
--
ALTER TABLE `product_reference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `repdetails`
--
ALTER TABLE `repdetails`
  MODIFY `repid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
