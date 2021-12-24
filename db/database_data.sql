-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Creato il: Dic 24, 2021 alle 17:35
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
-- Dump dei dati per la tabella `carrello`
--

INSERT INTO `carrello` (`cod_prodotto`, `cod_utente`, `quantita`) VALUES
(1, 1, 10),
(5, 1, 1);

--
-- Dump dei dati per la tabella `notifiche`
--

INSERT INTO `notifiche` (`codice_notifica`, `oggetto`, `testo`, `codice_ordine`) VALUES
(1, 'prova', 'ciao come stai tutto bene', 1),
(2, 'Conferma avvenuto ordine', 'Signorgeorge1984, la confermiamo che in data 2021-12-24 11:27:50lei ha effettuato l\'ordine11 in cui ha acquistato i prodotti:  Cola, katanaburger, Pizza, buona giornata', 11),
(3, 'Conferma avvenuto ordine', 'Signor george1984, la confermiamo che in data 2021-12-24 11:29:41 lei ha effettuato l\'ordine12 in cui ha acquistato i prodotti:  patatine fritte, katanaburger, Cola, buona giornata', 12),
(4, 'Conferma avvenuto ordine', 'Signor george1984, la confermiamo che in data 2021-12-24 11:33:04 lei ha effettuato l\'ordine13 in cui ha acquistato i prodotti:  Cola, katanaburger, samurai treccia, PANINOZZO, il quale costo totale è:28 buona giornata', 13),
(5, 'Conferma avvenuto ordine', 'Signor george1984, la confermiamo che in data 2021-12-24 11:33:56 lei ha effettuato l\'ordine 14 in cui ha acquistato i prodotti:  Cola, samurai treccia, PANINOZZO, il quale costo totale è: 20€ buona giornata', 14),
(6, 'Conferma avvenuto ordine', 'Signor george1984, la confermiamo che in data 2021-12-24 16:19:43 lei ha effettuato l\'ordine 15 in cui ha acquistato i prodotti:  samurai treccia, il quale costo totale Ã¨: 8â‚¬, il delivery partirÃ  fra 15 minuti, buona giornata.', 15);

--
-- Dump dei dati per la tabella `ordini`
--

INSERT INTO `ordini` (`codice_ordine`, `UserID`, `DataOra`) VALUES
(1, 5, '2021-12-23 14:25:51'),
(2, 5, '2021-12-23 14:28:09'),
(3, 5, '2021-12-23 14:42:27'),
(4, 5, '2021-12-23 14:52:30'),
(5, 5, '2021-12-23 14:52:40'),
(6, 5, '2021-12-24 10:23:51'),
(7, 5, '2021-12-24 10:25:17'),
(8, 5, '2021-12-24 10:25:29'),
(9, 5, '2021-12-24 10:25:56'),
(10, 5, '2021-12-24 10:25:57'),
(11, 5, '2021-12-24 10:27:50'),
(12, 5, '2021-12-24 10:29:41'),
(13, 5, '2021-12-24 10:33:04'),
(14, 5, '2021-12-24 10:33:56'),
(15, 5, '2021-12-24 15:19:43');

--
-- Dump dei dati per la tabella `prod-ordine`
--

INSERT INTO `prod-ordine` (`codice_prodotto`, `codice_ordine`, `quantita_ordinata`) VALUES
(1, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1),
(2, 1, 1),
(1, 2, 2),
(4, 2, 1),
(6, 2, 1),
(5, 2, 1),
(3, 3, 2),
(4, 3, 1),
(5, 3, 1),
(6, 3, 1),
(1, 4, 1),
(5, 4, 1),
(3, 6, 6),
(4, 6, 4),
(6, 6, 4),
(1, 11, 1),
(5, 11, 1),
(4, 11, 2),
(3, 12, 1),
(5, 12, 1),
(1, 12, 1),
(1, 13, 1),
(5, 13, 1),
(2, 13, 1),
(6, 13, 1),
(1, 14, 1),
(2, 14, 1),
(6, 14, 1),
(2, 15, 1);

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`codice_prodotto`, `nome`, `prezzo`, `quantita_disponibile`, `ingredienti`, `img`) VALUES
(1, 'Cola', 2, 300, 'segreto', 'cocacola.jpg'),
(2, 'samurai treccia', 10, 100, 'pane(treccia), hamburger, melanzane gratinate, salsa samurai', 'panino_con_spalla.jpg'),
(3, 'patatine fritte', 4, 200, 'patate, olio di semi, sale, pepe', 'patatinefritte.jpg'),
(4, 'Pizza', 5, 200, 'Impasto con farina 00, mozzarella, pomodoro, basilico, olio extravergine d\'oliva', 'pizze_classiche_gourmet.jpg\r\n'),
(5, 'katanaburger', 8, 5, 'pane giapponese, hamburger, mozzarella di bufala, salsa alla mortadella, rucola, cetriolini', 'panino_gourmet.png\r\n'),
(6, 'PANINOZZO', 10, 200, 'Panino con semola, carne di chianina, bacon croccante, guanciale, pomodoro fresco, insalata, salsa d', 'toasts.jpg');

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`UserID`, `username`, `email`, `password`, `attivo`) VALUES
(1, 'tom', 'tom22@gmail.com', 'tomEjerry11', 1),
(2, 'camaleonte', 'carlettorossimbaldi@gmail.com', '1234', 1),
(3, 'carmiSpii33', 'carmelospyder@gmail.com', 'password', 1),
(4, 'spera_carmela', 'carmelasperanza@gmail.com', 'caramellagommosa', 1),
(5, 'george1984', 'georgy@gmail.com', 'mipiacelamalinconia213', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
