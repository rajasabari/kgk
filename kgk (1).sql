-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 07:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kgk`
--

-- --------------------------------------------------------

--
-- Table structure for table `chinaparersize`
--

CREATE TABLE `chinaparersize` (
  `id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cidblpadsize`
--

CREATE TABLE `cidblpadsize` (
  `id` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cifiberpadsize`
--

CREATE TABLE `cifiberpadsize` (
  `id` int(11) NOT NULL,
  `size` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dblpadsize`
--

CREATE TABLE `dblpadsize` (
  `id` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dblsidecrbnsize`
--

CREATE TABLE `dblsidecrbnsize` (
  `id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enameld`
--

CREATE TABLE `enameld` (
  `id` int(11) NOT NULL,
  `gaugeswg` float NOT NULL,
  `brazesize` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enameld`
--

INSERT INTO `enameld` (`id`, `gaugeswg`, `brazesize`) VALUES
(1, 16, 1.62),
(2, 16.5, 1.52),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `enameldbrands`
--

CREATE TABLE `enameldbrands` (
  `id` int(11) NOT NULL,
  `brands` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enameldbrands`
--

INSERT INTO `enameldbrands` (`id`, `brands`) VALUES
(1, 'RR Sheramik'),
(2, 'Precision Wires');

-- --------------------------------------------------------

--
-- Table structure for table `enameldorder`
--

CREATE TABLE `enameldorder` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `swg` float NOT NULL,
  `bare` float NOT NULL,
  `qty` float NOT NULL,
  `flag` int(11) NOT NULL,
  `brand` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enameldorder`
--

INSERT INTO `enameldorder` (`id`, `userid`, `swg`, `bare`, `qty`, `flag`, `brand`) VALUES
(10, 32, 16.5, 1.52, 10, 1, ''),
(24, 32, 16, 1.62, 10, 1, 'RR Sheramik'),
(25, 32, 16, 1.62, 0, 1, 'RR Sheramik'),
(26, 32, 16, 1.62, 0, 1, 'RR Sheramik');

-- --------------------------------------------------------

--
-- Table structure for table `eurosize`
--

CREATE TABLE `eurosize` (
  `id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `flimpapersize`
--

CREATE TABLE `flimpapersize` (
  `id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flimpapersize`
--

INSERT INTO `flimpapersize` (`id`, `size`) VALUES
(1, '5mm '),
(2, '7mm '),
(3, '10mm ');

-- --------------------------------------------------------

--
-- Table structure for table `garlamsize`
--

CREATE TABLE `garlamsize` (
  `id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `garwaresize`
--

CREATE TABLE `garwaresize` (
  `id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gmbushsize`
--

CREATE TABLE `gmbushsize` (
  `id` int(11) NOT NULL,
  `size` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gmbushsize`
--

INSERT INTO `gmbushsize` (`id`, `size`) VALUES
(1, '14*24*40\r\n'),
(2, '16*20*40\r\n'),
(3, '16*24*30\r\n'),
(4, '16*24*40\r\n'),
(5, '16*25*40\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `hexboltsize`
--

CREATE TABLE `hexboltsize` (
  `id` int(11) NOT NULL,
  `size` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `insulating`
--

CREATE TABLE `insulating` (
  `id` int(11) NOT NULL,
  `prdname` varchar(50) NOT NULL,
  `prddes` varchar(50) NOT NULL,
  `prdsizetblname` varchar(50) NOT NULL,
  `qtyval` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insulating`
--

INSERT INTO `insulating` (`id`, `prdname`, `prddes`, `prdsizetblname`, `qtyval`) VALUES
(1, 'Flim Paper', 'test', 'flimpapersize', 'Kg/m'),
(2, 'Garware ', 'test', 'garwaresize', 'Kg/m'),
(3, 'Garlam', 'test', 'garlamsize', 'Kg/m'),
(4, 'Eurotherm (or) Nomex Paper', 'test', 'eurosize', 'Kg/m'),
(5, 'Sleeve', 'test', 'slesize', 'Piece/m'),
(7, 'China paper', 'test', 'chinaparersize', 'Piece/m');

-- --------------------------------------------------------

--
-- Table structure for table `nutsize`
--

CREATE TABLE `nutsize` (
  `id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `oilseedsize`
--

CREATE TABLE `oilseedsize` (
  `id` int(11) NOT NULL,
  `size` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`) VALUES
(1, 'Enameled Winding Wires');

-- --------------------------------------------------------

--
-- Table structure for table `singpadsize`
--

CREATE TABLE `singpadsize` (
  `id` int(11) NOT NULL,
  `size` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sleevessize`
--

CREATE TABLE `sleevessize` (
  `id` int(11) NOT NULL,
  `size` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slesize`
--

CREATE TABLE `slesize` (
  `id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spareorder`
--

CREATE TABLE `spareorder` (
  `id` int(11) NOT NULL,
  `prdname` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spareorder`
--

INSERT INTO `spareorder` (`id`, `prdname`, `size`, `userid`, `flag`, `qty`) VALUES
(1, ' \" TARGET \" LTB4 - GM Bush', '16*24*30', 32, 1, 1),
(2, ' \" TARGET \" LTB4 - GM Bush', '16*24*40', 32, 1, 1),
(3, ' \" TARGET \" LTB4 - GM Bush', '16*20*40', 32, 1, 4),
(5, ' Flim Paper', '5mm ', 32, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `spares`
--

CREATE TABLE `spares` (
  `id` int(11) NOT NULL,
  `prdname` varchar(50) NOT NULL,
  `prddes` varchar(255) NOT NULL,
  `prdsizetblname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spares`
--

INSERT INTO `spares` (`id`, `prdname`, `prddes`, `prdsizetblname`) VALUES
(1, '\" TARGET \" LTB4 - GM Bush', 'test', 'gmbushsize'),
(2, 'VEER-LB Bush', 'test', 'veerlbbushsize'),
(3, '\"KAWATRA\" Oil Seals', 'test', 'oilseedsize'),
(4, 'GM Single Side Pad(Fibre pad)', 'test', 'singpadsize'),
(5, 'Gm Double Side Pads(Fibre pads)', 'test', 'dblpadsize'),
(6, 'One Side C.I Fibre Pad:', 'test', 'cifiberpadsize'),
(7, 'C.I Double Side Pads (Fibre pads)', 'test', 'cidblpadsize'),
(8, 'Double Side Carbon Bearing', 'test', 'dblsidecrbnsize'),
(9, 'Sleeves (SS)', 'test', 'sleevessize'),
(10, 'Hex Bolt(202)', 'test', 'hexboltsize'),
(11, 'NUT', 'test', 'nutsize'),
(12, 'Stud', 'test', 'studsize'),
(13, 'S.S.Stud', 'test', 'ssstudsize');

-- --------------------------------------------------------

--
-- Table structure for table `ssstudsize`
--

CREATE TABLE `ssstudsize` (
  `id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studsize`
--

CREATE TABLE `studsize` (
  `id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `submersiblebrand`
--

CREATE TABLE `submersiblebrand` (
  `id` int(11) NOT NULL,
  `brands` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submersiblebrand`
--

INSERT INTO `submersiblebrand` (`id`, `brands`) VALUES
(1, 'Polyrap'),
(2, 'RR Sher');

-- --------------------------------------------------------

--
-- Table structure for table `submersibleorder`
--

CREATE TABLE `submersibleorder` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `qty` float NOT NULL,
  `flag` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submersibleorder`
--

INSERT INTO `submersibleorder` (`id`, `type`, `size`, `brand`, `qty`, `flag`, `uid`) VALUES
(6, 'NOD', 'I.OD : 0.4 O.OD : 0.8', 'Polyrap', 100, 1, 32),
(7, 'undefined', 'undefined', 'Polyrap', 10, 1, 32);

-- --------------------------------------------------------

--
-- Table structure for table `submersiblesize`
--

CREATE TABLE `submersiblesize` (
  `id` int(11) NOT NULL,
  `inod` float NOT NULL,
  `ood` float NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submersiblesize`
--

INSERT INTO `submersiblesize` (`id`, `inod`, `ood`, `type`) VALUES
(1, 0.4, 0.8, 'nod'),
(3, 0.5, 0.9, 'nod'),
(4, 0.4, 0.75, 'lod'),
(5, 0.5, 0.8, 'lod');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `uemail` varchar(250) NOT NULL,
  `upass` varchar(250) NOT NULL,
  `phno` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `uname`, `uemail`, `upass`, `phno`) VALUES
(32, 'Raja sabari', 'nrajasabari86@gmail.com', '123', ' 917449007005'),
(33, 'Raja sabari', 'nrajasabari86@gmail.c', '1234', ' 917449007005');

-- --------------------------------------------------------

--
-- Table structure for table `veerlbbushsize`
--

CREATE TABLE `veerlbbushsize` (
  `id` int(11) NOT NULL,
  `size` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chinaparersize`
--
ALTER TABLE `chinaparersize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cidblpadsize`
--
ALTER TABLE `cidblpadsize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enameld`
--
ALTER TABLE `enameld`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enameldbrands`
--
ALTER TABLE `enameldbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enameldorder`
--
ALTER TABLE `enameldorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eurosize`
--
ALTER TABLE `eurosize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flimpapersize`
--
ALTER TABLE `flimpapersize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garwaresize`
--
ALTER TABLE `garwaresize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gmbushsize`
--
ALTER TABLE `gmbushsize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insulating`
--
ALTER TABLE `insulating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oilseedsize`
--
ALTER TABLE `oilseedsize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `singpadsize`
--
ALTER TABLE `singpadsize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slesize`
--
ALTER TABLE `slesize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spareorder`
--
ALTER TABLE `spareorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spares`
--
ALTER TABLE `spares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submersiblebrand`
--
ALTER TABLE `submersiblebrand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submersibleorder`
--
ALTER TABLE `submersibleorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submersiblesize`
--
ALTER TABLE `submersiblesize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `veerlbbushsize`
--
ALTER TABLE `veerlbbushsize`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chinaparersize`
--
ALTER TABLE `chinaparersize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cidblpadsize`
--
ALTER TABLE `cidblpadsize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enameld`
--
ALTER TABLE `enameld`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enameldbrands`
--
ALTER TABLE `enameldbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enameldorder`
--
ALTER TABLE `enameldorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `eurosize`
--
ALTER TABLE `eurosize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flimpapersize`
--
ALTER TABLE `flimpapersize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `garwaresize`
--
ALTER TABLE `garwaresize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gmbushsize`
--
ALTER TABLE `gmbushsize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `insulating`
--
ALTER TABLE `insulating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oilseedsize`
--
ALTER TABLE `oilseedsize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `singpadsize`
--
ALTER TABLE `singpadsize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slesize`
--
ALTER TABLE `slesize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spareorder`
--
ALTER TABLE `spareorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `spares`
--
ALTER TABLE `spares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `submersiblebrand`
--
ALTER TABLE `submersiblebrand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `submersibleorder`
--
ALTER TABLE `submersibleorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `submersiblesize`
--
ALTER TABLE `submersiblesize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `veerlbbushsize`
--
ALTER TABLE `veerlbbushsize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
