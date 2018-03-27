-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Mar-2018 às 19:32
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controlekm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblfuncionario`
--

CREATE TABLE `tblfuncionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `telefone` varchar(10) DEFAULT NULL,
  `idmoto` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tblfuncionario`
--

INSERT INTO `tblfuncionario` (`id`, `nome`, `cpf`, `telefone`, `idmoto`) VALUES
(1, 'Ricardo', '000.000.000-00', '99899-9999', 1),
(2, 'Eduardo', '333.333.333-33', '93333-3333', 2),
(3, 'Antonio', '222.222.222-22', '92222-2222', 3),
(12, 'vitinsk', '123', '123', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblkmrodado`
--

CREATE TABLE `tblkmrodado` (
  `idkm` int(11) NOT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idvale` int(11) DEFAULT NULL,
  `Kminicial` int(11) DEFAULT NULL,
  `Kmfinal` int(11) DEFAULT NULL,
  `KmaRodar` int(11) DEFAULT NULL,
  `KmRodados` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tblkmrodado`
--

INSERT INTO `tblkmrodado` (`idkm`, `idfuncionario`, `idvale`, `Kminicial`, `Kmfinal`, `KmaRodar`, `KmRodados`, `data`) VALUES
(1, 1, 1, 100, 450, 350, 350, '2017-11-10'),
(2, 1, 4, 450, 620, 210, 170, '2017-11-11'),
(3, 1, NULL, 620, 660, 40, 40, '2017-11-12'),
(4, 2, 2, 233, 530, 297, 297, '2017-11-10'),
(5, 2, 5, 530, 620, 174, 90, '2017-11-11'),
(6, 2, NULL, 620, 794, 0, 174, '2017-11-12'),
(7, 3, 3, 0, 210, 210, 210, '2017-11-10'),
(8, 3, 6, 210, 355, 145, 355, '2017-11-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblmoto`
--

CREATE TABLE `tblmoto` (
  `id` int(11) NOT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `ano` varchar(4) DEFAULT NULL,
  `cilindrada` varchar(3) DEFAULT NULL,
  `placa` varchar(8) DEFAULT NULL,
  `km_x_litro` tinyint(4) DEFAULT NULL,
  `kmatual` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tblmoto`
--

INSERT INTO `tblmoto` (`id`, `modelo`, `ano`, `cilindrada`, `placa`, `km_x_litro`, `kmatual`) VALUES
(1, 'HONDA CG', '2016', '150', 'PXP-2791', 35, 500),
(2, 'HONDA FAN', '2017', '150', 'OWK-3842', 33, NULL),
(3, 'HONDA CG', '2017', '160', 'QSZ-8903', 29, NULL),
(4, '123', NULL, NULL, '123', 123, NULL),
(5, 'g', NULL, NULL, 'g', 0, NULL),
(6, 'dsadasdas', NULL, NULL, 'dsadasds', 0, NULL),
(7, 'XRE', NULL, NULL, 'ASQ-5548', 22, NULL),
(8, 'HORNET', NULL, NULL, 'sda-1245', 12, 122334);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblvale`
--

CREATE TABLE `tblvale` (
  `idvale` int(11) NOT NULL,
  `vale` varchar(6) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `litros` decimal(4,2) DEFAULT NULL,
  `valor` decimal(4,2) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tblvale`
--

INSERT INTO `tblvale` (`idvale`, `vale`, `idfuncionario`, `litros`, `valor`, `data`) VALUES
(1, '290532', 1, '10.00', '39.00', '2017-11-10'),
(2, '290637', 1, '6.00', '23.40', '2017-11-11'),
(3, '290535', 2, '9.00', '35.10', '2017-11-10'),
(4, '290641', 2, '8.00', '31.20', '2017-11-11'),
(5, '290539', 3, '6.00', '23.40', '2017-11-10'),
(6, '290655', 3, '5.00', '19.50', '2017-11-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblfuncionario`
--
ALTER TABLE `tblfuncionario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idmoto` (`idmoto`);

--
-- Indexes for table `tblkmrodado`
--
ALTER TABLE `tblkmrodado`
  ADD PRIMARY KEY (`idkm`),
  ADD KEY `idfuncionario` (`idfuncionario`),
  ADD KEY `idvale` (`idvale`);

--
-- Indexes for table `tblmoto`
--
ALTER TABLE `tblmoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvale`
--
ALTER TABLE `tblvale`
  ADD PRIMARY KEY (`idvale`),
  ADD KEY `idfuncionario` (`idfuncionario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblfuncionario`
--
ALTER TABLE `tblfuncionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblkmrodado`
--
ALTER TABLE `tblkmrodado`
  MODIFY `idkm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblmoto`
--
ALTER TABLE `tblmoto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblvale`
--
ALTER TABLE `tblvale`
  MODIFY `idvale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
