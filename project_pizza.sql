-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 apr 2022 om 08:55
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_pizza`
--
CREATE DATABASE IF NOT EXISTS `project_pizza` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project_pizza`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menukaart`
--

CREATE TABLE `menukaart` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `menukaart`
--

INSERT INTO `menukaart` (`id`, `name`, `category`, `price`, `image`, `amount`) VALUES
(3, 'pizza shoarma', 'pizza', '7.99', 'pizzashoarma.png', 69),
(4, 'pizza kaas', 'pizza', '8.99', 'pizzakaas.png', 69),
(104, 'pizza salami', 'pizza', '9.00', 'pizza salami.png\r\n', 30),
(105, 'pizza hawai', 'pizza', '7.00', 'pizza hai.png', 10),
(106, 'pizza cheese', 'pizza', '12.00', '', 100);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `id` int(11) NOT NULL,
  `rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`username`, `password`, `id`, `rol`) VALUES
('marco', 'marco', 1, 'admin'),
('testmedewerker', 'test', 2, 'medewerker'),
('testklant', 'test', 3, 'klant');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `menukaart`
--
ALTER TABLE `menukaart`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `menukaart`
--
ALTER TABLE `menukaart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
