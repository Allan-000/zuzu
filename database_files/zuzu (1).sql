-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 10:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zuzu`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `adress`, `place`, `postcode`) VALUES
(9, 'Allan', 'Hassan', 'mijnemail@gmail.com', 'geen adres', 'geen woonplaats', 'geen postcode'),
(10, 'Allan', 'Hassan', 'allan@rocmondriaan.nl', 'geen adres', 'geen woonplaats', 'geen postcode');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `sushi_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `sushi_id`, `customer_id`, `amount`) VALUES
(12, 1, 10, 8),
(13, 3, 10, 3),
(14, 3, 10, 7),
(15, 3, 10, 5),
(16, 3, 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sushis`
--

CREATE TABLE `sushis` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `amount` int(2) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sushis`
--

INSERT INTO `sushis` (`id`, `name`, `description`, `price`, `amount`, `picture`) VALUES
(1, 'Nigiri', 'Nigiri is een sushi soort waarbij een stukje vis op een bedje van rijst wordt gelegd. De warmte van de rijst vult de koude vis aan.\r\n\r\nDe sushi mag met de handen gegeten worden. Voordat de sushi gegeten wordt, dip deze met de vis naar beneden lichtjes in de sojasaus. Probeer de Nigiri in één hap te eten.', '45.34', 10, 'https://sushi81.nl/wp-content/uploads/2017/05/Nigiri-klein-300x210.jpg'),
(2, 'Sashimi', 'Sashimi is rauwe vis die zonder rijst wordt opgediend. De plakjes vis worden gegarneerd met wat zeewier onder de vis. Geserveerd als setje van zes plakjes.\r\n\r\nDe Sashimi is de enige sushi die met eetstokjes gegeten moet worden.', '34.55', 10, 'https://sushi81.nl/wp-content/uploads/2017/05/Sashimi-klein-300x210.jpg'),
(3, 'Maki', 'Maki is in het westen de meest bekende soort sushi. De Maki wordt gemaakt van rijst en een vulling van vis, groente of ei en gerold in zeewier. De zwarte zeewier wordt Nori genoemd. Het woord maki betekent in het Japans letterlijk “gerold”. De sushi-chef snijdt de rol vervolgens in vier of acht kleinere stukjes.', '39.55', 10, 'https://sushi81.nl/wp-content/uploads/2017/05/Maki-klein-300x210.jpg'),
(4, 'Uramaki', 'Uramaki staat bekend als de “binnenstebuiten” sushi. Bij deze sushi wordt er meestal gebruik gemaakt van twee of meer soorten vullingen. Bij de Uramaki zitten de vulling en de zeewier aan de binnenkant. Het is een maki die binnenstebuiten is gekeerd.', '67.32', 10, 'https://sushi81.nl/wp-content/uploads/2017/05/Uramaki-klein-300x210.jpg'),
(5, 'Temaki', 'Deze sushi kenmerkt zich door het kegelvormige uiterlijk. De vullingen zijn aan de bovenkant zichtbaar.', '53.17', 10, 'https://sushi81.nl/wp-content/uploads/2017/05/Temaki-klein-300x210.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sushi_id` (`sushi_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `sushis`
--
ALTER TABLE `sushis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sushis`
--
ALTER TABLE `sushis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`sushi_id`) REFERENCES `sushis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
