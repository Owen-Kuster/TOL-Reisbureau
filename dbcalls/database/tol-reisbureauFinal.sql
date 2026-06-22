-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jun 21, 2026 at 05:25 PM
-- Server version: 8.4.8
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tol_reisbureau`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodations`
--

CREATE TABLE `accommodations` (
  `AccommodationID` int NOT NULL,
  `AccommodationName` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `AccommodationPlace` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `AccommodationPrice` double NOT NULL,
  `AccommodationDiscription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `AccommodationStars` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ContactID` int NOT NULL,
  `ContactName` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ContactEmail` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ContactSubject` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ContactMessage` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `FlightID` int NOT NULL,
  `FlightDeparture` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `FlightDestination` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `FlightAvailableSeats` int NOT NULL,
  `FlightDepartureTime` time NOT NULL,
  `FlightArrivalTime` time NOT NULL,
  `FlightPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`FlightID`, `FlightDeparture`, `FlightDestination`, `FlightAvailableSeats`, `FlightDepartureTime`, `FlightArrivalTime`, `FlightPrice`) VALUES
(1, 'Barcelona', 'Athens', 125, '14:00:00', '18:00:00', 125);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ReviewID` int NOT NULL,
  `UserID` int NOT NULL,
  `ReviewName` varchar(255) NOT NULL,
  `ReviewMessage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ReviewID`, `UserID`, `ReviewName`, `ReviewMessage`) VALUES
(1, 1, 'Owen', 'Onze vakantie naar Barcelona was absoluut fantastisch. Het hotel was prachtig gelegen en het personeel ging door tot het uiterste om ons te helpen. Zeker een aanrader!'),
(2, 2, 'Tygo', 'Goede reis over het algemeen, maar de vlucht had bijna twee uur vertraging. Het resort zelf was top en het eten was heerlijk. We zouden zeker terugkomen.'),
(3, 3, 'Laura', 'We hebben een rondreis door Italië geboekt en het was een droomervaring. Elke stad was geweldig en de gids was ontzettend vriendelijk en deskundig.'),
(4, 4, 'Niek', 'De accommodatie was oké, maar niet helemaal wat we verwacht hadden op basis van de foto\'s. De locatie was goed en het ontbijt was lekker. Redelijke prijs-kwaliteitverhouding.'),
(5, 6, 'Piet', 'Onze huwelijksreis naar Maldiven was alles wat we gehoopt hadden en meer. Het resort was adembenemend mooi en het personeel behandelde ons als koningen.'),
(6, 7, 'Henk', 'Leuke stedentrip naar Londen. Goed georganiseerd en makkelijk geboekt. De hotel was centraal gelegen, waardoor we overal makkelijk naartoe konden lopen.'),
(7, 8, 'Thijn', 'Geweldig all-inclusive resort in Turkije! Het zwembad was enorm, het eten was gevarieerd en de animatie was elke avond super leuk. We komen zeker terug.'),
(8, 9, 'Frank', 'De cruise door de Middellandse Zee was een onvergetelijke belevenis. Elke haven was prachtig en het schip had alles wat je nodig hebt. Absolute aanrader!'),
(9, 10, 'Luuk', 'Prima lastminute deal naar Gran Canaria. Het strand was mooi en het weer was perfect. Enige minpuntje was dat het hotel iets ver van het centrum lag.');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `TripID` int NOT NULL,
  `FlightID` int NOT NULL,
  `AccommodationID` int NOT NULL,
  `TripDestination` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `TripDeparture` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `TripPrice` double NOT NULL,
  `TripStartDate` date NOT NULL,
  `TripEndDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `Role`) VALUES
(1, 'Owen', '1234', 'user'),
(2, 'Tygo', 'test', 'user'),
(3, 'Laura', 'test', 'user'),
(4, 'Niek', 'test', 'user'),
(5, 'Admin', 'admin', 'admin'),
(6, 'Piet', 'test', 'user'),
(7, 'Henk', 'test', 'user'),
(8, 'Thijn', 'test', 'user'),
(9, 'Frank', 'test', 'user'),
(10, 'Luuk', 'test', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodations`
--
ALTER TABLE `accommodations`
  ADD PRIMARY KEY (`AccommodationID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ContactID`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`FlightID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ReviewID`),
  ADD KEY `fk_userid_review` (`UserID`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`TripID`),
  ADD KEY `fk_trip_flights` (`FlightID`),
  ADD KEY `fk_accommodation_trip` (`AccommodationID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodations`
--
ALTER TABLE `accommodations`
  MODIFY `AccommodationID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ContactID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `FlightID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ReviewID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `TripID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_userid_review` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `trip`
--
ALTER TABLE `trip`
  ADD CONSTRAINT `fk_accommodation_trip` FOREIGN KEY (`AccommodationID`) REFERENCES `accommodations` (`AccommodationID`),
  ADD CONSTRAINT `fk_trip_flights` FOREIGN KEY (`FlightID`) REFERENCES `flights` (`FlightID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
