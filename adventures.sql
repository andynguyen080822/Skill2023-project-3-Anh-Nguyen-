-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 02:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adventures`
--

-- --------------------------------------------------------

--
-- Table structure for table `adventures`
--

CREATE TABLE `adventures` (
  `id` int(11) NOT NULL,
  `heading` varchar(40) NOT NULL,
  `tripDate` date NOT NULL,
  `duration` int(3) NOT NULL,
  `summary` text NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `adventures`
--

INSERT INTO `adventures` (`id`, `heading`, `tripDate`, `duration`, `summary`, `image`) VALUES
(12, 'Halifax', '2023-06-15', 3, 'The heart of Halifax is perfect for exploring on foot with treelined streets international restaurants galleries libraries and museums re else in the world The Must Do Experiences below are for travellers like you Learn which historic sites shops beaches and restaurants should be top of your list if you have three days to visit Halifax', 0x68616c696661782e6a7067),
(13, 'Sydney', '2023-05-31', 2, 'As the largest urban area on Cape Breton and the islands historical capital Sydney is the perfect mix of metropolitan charm and down home hospitality As with many Nova Scotian communities on the ocean the heart of Sydney is its waterfront', 0x7379646e65792e6a7067),
(14, 'Truro', '2023-06-12', 5, 'Truro is a town in central Nova Scotia Canada Truro is the shire town of Colchester County and is located on the south side of the Salmon River floodplain close to the rivers mouth at the eastern end of Cobequid', 0x547275726f2e6a7067),
(16, 'Glace Bay', '2023-07-20', 6, 'Glace Bay is a community in the eastern part of the Cape Breton Regional Municipality in Nova Scotia Canada It forms part of the general area referred to as Industrial Cape Breton', 0x676c616365206261792e6a7067),
(19, 'Prince Edward Island', '2023-08-01', 6, 'rince Edward Island is one of eastern Canadas maritime provinces off New Brunswick and Nova Scotia in the Gulf of St Lawrence The large island is marked by redsand beaches lighthouses and fertile farmland and is renowned for seafood like lobster and mussels Charlottetown the capital is home to Victorian government buildings  the modern Confederation Centre of the Arts with a theatre and art gallery ', 0x5045492e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adventures`
--
ALTER TABLE `adventures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adventures`
--
ALTER TABLE `adventures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
