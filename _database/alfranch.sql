-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Set 03, 2020 alle 16:14
-- Versione del server: 10.1.37-MariaDB
-- Versione PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfranch`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `amministratori`
--

CREATE TABLE `amministratori` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `amministratori`
--

INSERT INTO `amministratori` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struttura della tabella `appuntamenti`
--

CREATE TABLE `appuntamenti` (
  `id` int(11) NOT NULL,
  `cliente` text NOT NULL,
  `data` date NOT NULL,
  `ora` time NOT NULL,
  `servizi` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `id` int(11) NOT NULL,
  `categoria` enum('Strumento','Accessorio') NOT NULL,
  `nome` varchar(40) NOT NULL,
  `costo` double NOT NULL,
  `img_path` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`id`, `categoria`, `nome`, `costo`, `img_path`) VALUES
(1, 'Strumento', 'Gibson Les Paul', 569, 'lesPaul.png'),
(2, 'Strumento', 'Gibson SG', 1219, 'gibsonSG.png'),
(3, 'Strumento', 'Gibson Flying V', 4999, 'flyingV.png'),
(4, 'Strumento', 'Fender Stratocaster', 619, 'strat.png'),
(5, 'Strumento', 'Fender Telecaster', 1090, 'tele.png'),
(6, 'Strumento', 'Fender Jaguar', 1739, 'jaguar.png');

-- --------------------------------------------------------

--
-- Struttura della tabella `servizi`
--

CREATE TABLE `servizi` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `descrizione` varchar(250) NOT NULL,
  `costo` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `servizi`
--

INSERT INTO `servizi` (`id`, `nome`, `descrizione`, `costo`) VALUES
(1, 'Cambio corde', 'I nostri collaboratori si prenderanno cura del tuo strumento ed effettueranno un cambio delle corde con inclusa una pulizia dello strumento con i prodotti appositi di cui dispone il negozio (muta di corde inclusa nel prezzo).', '30'),
(2, 'Accordatura pianoforte', 'Questo servizio a domicilio offre la prestazione professionale di un nostro collega che si occupera di aggiustare l\'accordatura del vostro pianoforte che risuonera come nuovo.', '150'),
(3, 'Riparazioni generali', 'Il nostro team si occuperà del vostro strumento danneggiato e farà il possibile per rimetterlo in sesto (il prezzo varierà in base all\'entità del danno).', '0'),
(4, 'Sala prove e registrazione', 'Il negozio offre l\'utilizzo di una piccola sala prove per tutti gli aspiranti musicisti. Essa e dotata di due amplificatori, una batteria e tutto l\'occorrente per la registrazione dei vostri brani (il prezzo riportato è per un\'ora).', '15');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `amministratori`
--
ALTER TABLE `amministratori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indici per le tabelle `appuntamenti`
--
ALTER TABLE `appuntamenti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data` (`data`,`ora`);

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categoria` (`categoria`,`nome`,`costo`);

--
-- Indici per le tabelle `servizi`
--
ALTER TABLE `servizi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `amministratori`
--
ALTER TABLE `amministratori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `appuntamenti`
--
ALTER TABLE `appuntamenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `servizi`
--
ALTER TABLE `servizi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
