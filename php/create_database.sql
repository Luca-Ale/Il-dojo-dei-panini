-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Dic 02, 2021 alle 16:28
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 7.3.31

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

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `CF_cliente` varchar(16) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `clienti`
--

INSERT INTO `clienti` (`CF_cliente`, `nome`, `cognome`, `username`, `mail`, `password`) VALUES
('CRLRSN59C04H294E', 'Carletto', 'Rossinbaldi', '', 'carlettorossimbaldi@gmail.com', '1234'),
('CRMCLB92A52A944L', 'Carmelo', 'Casalbottoni', '', 'carmelospyder@gmail.com', 'password'),
('CRMSRN84A52H501D', 'Carmela', 'Speranza', '', 'carmelasperanza@gmail.com', 'caramellagommosa'),
('GRGRLL03H65H504S', 'George', 'Orwell', '', 'georgy@gmail.com', 'mipiacelamalinconia213');

-- --------------------------------------------------------

--
-- Struttura della tabella `ordini`
--

CREATE TABLE `ordini` (
  `codice_ordine` int(8) NOT NULL,
  `CF_cliente` varchar(16) NOT NULL,
  `DataOra` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `prod-ordine`
--

CREATE TABLE `prod-ordine` (
  `codice_prodotto` int(8) NOT NULL,
  `codice_ordine` int(8) NOT NULL,
  `quantita_ordinata` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `codice_prodotto` int(8) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `prezzo` int(4) NOT NULL,
  `quantita_disponibile` int(5) NOT NULL,
  `ingredienti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`codice_prodotto`, `nome`, `prezzo`, `quantita_disponibile`, `ingredienti`) VALUES
(0, 'Cola', 2, 300, 'segreto'),
(1, 'samurai treccia', 8, 100, 'pane(treccia), hamburger, melanzane gratinate, salsa samurai'),
(2, 'patatine fritte', 4, 200, 'patate, olio di semi, sale, pepe'),
(3, 'Pizza', 5, 200, 'Impasto con farina 00, mozzarella, pomodoro, basilico, olio extravergine d\'oliva'),
(4, 'katanaburger', 8, 5, 'pane giapponese, hamburger, mozzarella di bufala, salsa alla mortadella, rucola, cetriolini'),
(5, 'PANINOZZO', 10, 200, 'Panino con semola, carne di chianina, bacon croccante, guanciale, pomodoro fresco, insalata, salsa d');

-- --------------------------------------------------------

--
-- Struttura della tabella `recensioni`
--

CREATE TABLE `recensioni` (
  `ID_recensione` int(8) NOT NULL,
  `CF_cliente` varchar(16) NOT NULL,
  `Testo` text NOT NULL,
  `Punteggio` int(1) NOT NULL,
  `DataOra` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `venditori`
--

CREATE TABLE `venditori` (
  `CF_venditore` varchar(16) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `venditori`
--

INSERT INTO `venditori` (`CF_venditore`, `nome`, `cognome`, `username`, `mail`, `password`) VALUES
('PGGLSN00D21H294W', 'Alessandro', 'Pioggia', 'alepipita', 'alexpioggia@gmail.com', '5678'),
('RNGLCU00D01H294G', 'Luca', 'Rengo', 'lukarengo', 'lr@gmail.com', '1234');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`CF_cliente`);

--
-- Indici per le tabelle `ordini`
--
ALTER TABLE `ordini`
  ADD PRIMARY KEY (`codice_ordine`),
  ADD KEY `CF_cliente` (`CF_cliente`);

--
-- Indici per le tabelle `prod-ordine`
--
ALTER TABLE `prod-ordine`
  ADD KEY `codice_prodotto` (`codice_prodotto`),
  ADD KEY `codice_ordine` (`codice_ordine`);

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`codice_prodotto`);

--
-- Indici per le tabelle `recensioni`
--
ALTER TABLE `recensioni`
  ADD PRIMARY KEY (`ID_recensione`),
  ADD KEY `CF_cliente` (`CF_cliente`);

--
-- Indici per le tabelle `venditori`
--
ALTER TABLE `venditori`
  ADD PRIMARY KEY (`CF_venditore`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `ordini`
--
ALTER TABLE `ordini`
  ADD CONSTRAINT `ordini_ibfk_1` FOREIGN KEY (`CF_cliente`) REFERENCES `clienti` (`CF_cliente`);

--
-- Limiti per la tabella `prod-ordine`
--
ALTER TABLE `prod-ordine`
  ADD CONSTRAINT `prod-ordine_ibfk_1` FOREIGN KEY (`codice_prodotto`) REFERENCES `prodotti` (`codice_prodotto`),
  ADD CONSTRAINT `prod-ordine_ibfk_2` FOREIGN KEY (`codice_ordine`) REFERENCES `ordini` (`codice_ordine`);

--
-- Limiti per la tabella `recensioni`
--
ALTER TABLE `recensioni`
  ADD CONSTRAINT `recensioni_ibfk_1` FOREIGN KEY (`CF_cliente`) REFERENCES `clienti` (`CF_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
