-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 03 dec 2021 om 16:04
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `language`
--

CREATE TABLE `language` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `languagerow`
--

CREATE TABLE `languagerow` (
  `id` int(5) NOT NULL,
  `language_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `project`
--

CREATE TABLE `project` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `github_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `project`
--

INSERT INTO `project` (`id`, `name`, `image`, `discription`, `link`, `github_link`) VALUES
(1, 'Bloemenbinderij Webshop', 'IMGS/projects_imgs/bloem.jpg', 'Dit is een webshop van een bloembinderij met veel verschillende soorten bloemen en de beschrijkving van elke type.', 'projects/bloem.html', ''),
(2, 'Lenght converter', 'IMGS/projects_imgs/tool_meten.jpg', 'Dit is een simpl reken tool die geprogrammeert is in JS, met deze rekentool kan je ft converteren naar meter.', 'projects/Tool1.html', ''),
(3, 'Puzzle', 'IMGS/projects_imgs/puzzle.jpg', 'Dit is een schuifpuzzle spelletje die geprogrammeert is in JS, je moet de fotos op volgorde zetten zodat je de hele foto kan zien.', 'projects/puzzle.html', ''),
(4, 'Tic Tac Toe', 'IMGS/projects_imgs/tictactoe.jpg', 'Dit is een tic tac toe spelletje die geprogrammeert is in JS.', 'projects/tictactoe.html', ''),
(5, 'Steen Papier Schaar', 'IMGS/projects_imgs/sps.jpg', 'Dit is een Steen-Ppier-Schaar spelletje die gemaakt is in HTML en CSS, en geprogrammeerd is in JavaScript.', 'projects/SPS_GAME/index.html', ''),
(6, 'Rooster', 'IMGS/projects_imgs/kdlrooster.jpg', 'Dit is een KDL project, een rooster van extra fysieke lessen.', 'projects/login.html', ''),
(7, 'Steen Papier Schaar Console', 'IMGS/projects_imgs/spsc.jpg', 'Dit is console applicatie versie van het spel steen-papier-schaar.\r\nHet is geprogrammeerd in C# programmeertaal.', 'https://github.com/zennaji', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `languagerow`
--
ALTER TABLE `languagerow`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `language`
--
ALTER TABLE `language`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `languagerow`
--
ALTER TABLE `languagerow`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `project`
--
ALTER TABLE `project`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `language`
--
ALTER TABLE `language`
  ADD CONSTRAINT `language_ibfk_1` FOREIGN KEY (`id`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `languagerow`
--
ALTER TABLE `languagerow`
  ADD CONSTRAINT `languagerow_ibfk_1` FOREIGN KEY (`id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
