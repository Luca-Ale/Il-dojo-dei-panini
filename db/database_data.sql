-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Creato il: Dic 20, 2021 alle 22:11
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dojo`
--
CREATE DATABASE IF NOT EXISTS `dojo` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `dojo`;

--
-- Dump dei dati per la tabella `admin`
--

INSERT INTO `admin` (`AdminID`, `username`, `email`, `password`, `attivo`) VALUES
(1, 'admin Ale', 'alexpioggia@gmail.com', '5678', 1),
(2, 'admin Luca', 'lr@gmail.com', '1234', 1);

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`codice_prodotto`, `nome`, `prezzo`, `quantita_disponibile`, `ingredienti`, `img`) VALUES
(1, 'Cola', 2, 300, 'segreto', ''),
(2, 'samurai treccia', 8, 100, 'pane(treccia), hamburger, melanzane gratinate, salsa samurai', ''),
(3, 'patatine fritte', 4, 200, 'patate, olio di semi, sale, pepe', ''),
(4, 'Pizza', 5, 200, 'Impasto con farina 00, mozzarella, pomodoro, basilico, olio extravergine d\'oliva', ''),
(5, 'katanaburger', 8, 5, 'pane giapponese, hamburger, mozzarella di bufala, salsa alla mortadella, rucola, cetriolini', ''),
(6, 'PANINOZZO', 10, 200, 'Panino con semola, carne di chianina, bacon croccante, guanciale, pomodoro fresco, insalata, salsa d', '');

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`UserID`, `username`, `email`, `password`, `attivo`) VALUES
(1, 'tom', 'tom22@gmail.com', 'tom_e_jerry11', 1),
(2, 'camaleonte', 'carlettorossimbaldi@gmail.com', '1234', 1),
(3, 'carmiSpii33', 'carmelospyder@gmail.com', 'password', 1),
(4, 'spera_carmela', 'carmelasperanza@gmail.com', 'caramellagommosa', 1),
(5, 'george1984', 'georgy@gmail.com', 'mipiacelamalinconia213', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
