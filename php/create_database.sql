-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Dic 02, 2021 alle 14:48
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
  `mail` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `quantita_disponibile` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti-clienti`
--

CREATE TABLE `prodotti-clienti` (
  `codice_prodotto` int(8) NOT NULL,
  `CF_venditore` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `mail` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indici per le tabelle `prodotti-clienti`
--
ALTER TABLE `prodotti-clienti`
  ADD KEY `CF_venditore` (`CF_venditore`),
  ADD KEY `codice_prodotto` (`codice_prodotto`);

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
-- Limiti per la tabella `prodotti-clienti`
--
ALTER TABLE `prodotti-clienti`
  ADD CONSTRAINT `prodotti-clienti_ibfk_1` FOREIGN KEY (`CF_venditore`) REFERENCES `venditori` (`CF_venditore`),
  ADD CONSTRAINT `prodotti-clienti_ibfk_2` FOREIGN KEY (`codice_prodotto`) REFERENCES `prodotti` (`codice_prodotto`);

--
-- Limiti per la tabella `recensioni`
--
ALTER TABLE `recensioni`
  ADD CONSTRAINT `recensioni_ibfk_1` FOREIGN KEY (`CF_cliente`) REFERENCES `clienti` (`CF_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
