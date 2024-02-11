-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 08/07/2021 às 18:59
-- Versão do servidor: 10.4.18-MariaDB
-- Versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `webTask`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `city`
--

CREATE TABLE `city` (
  `cityID` int(11) NOT NULL,
  `cityName` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `city`
--

INSERT INTO `city` (`cityID`, `cityName`, `state`) VALUES
(1, 'Porto Alegre', 'RS'),
(2, 'Canoas', 'RS'),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, 'Rio de Janeiro', 'RJ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `district`
--

CREATE TABLE `district` (
  `districtID` int(11) NOT NULL,
  `districtName` varchar(100) NOT NULL,
  `cityName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `district`
--

INSERT INTO `district` (`districtID`, `districtName`, `cityName`) VALUES
(1, 'Sarandi', 'Porto Alegre'),
(2, 'Rubem Berta', 'Porto Alegre'),
(3, 'Moinhos de Vento', 'Porto Alegre'),
(4, 'Cavalhada', 'Porto Alegre'),
(5, 'Nonoai', 'Porto Alegre'),
(6, 'Auxiliadora', 'Porto Alegre'),
(7, 'Partenon', 'Porto Alegre'),
(8, 'São José', 'Porto Alegre'),
(9, 'Belem Novo', 'Porto Alegre'),
(10, 'Belem Velho', 'Porto Alegre'),
(11, '', ''),
(12, '', ''),
(13, '', ''),
(14, '', ''),
(15, '', ''),
(16, '', ''),
(17, '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(11) NOT NULL,
  `completeName` varchar(300) NOT NULL,
  `registration` varchar(100) NOT NULL,
  `admission` date NOT NULL,
  `wage` float DEFAULT NULL,
  `childs` int(11) DEFAULT 0,
  `office` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `employee`
--

INSERT INTO `employee` (`employeeID`, `completeName`, `registration`, `admission`, `wage`, `childs`, `office`) VALUES
(1, 'Teste', '123', '2021-07-01', 1500, 2, '2'),
(2, 'Teste2', '001', '2021-07-05', 3000, 3, '0'),
(3, 'José da Silva', '002', '2021-07-02', 3000, 5, 'Gerente'),
(4, 'João da Silva', '003', '2021-07-20', 10000, 3, 'Motorista');

-- --------------------------------------------------------

--
-- Estrutura para tabela `people`
--

CREATE TABLE `people` (
  `personID` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `childs` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `people`
--

INSERT INTO `people` (`personID`, `firstName`, `lastName`, `age`, `childs`) VALUES
(1, 'Teste', 'da Silva', 14, 3),
(2, 'Teste2', 'da Silva2', 15, 1),
(3, 'João', 'da Silva', 43, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityID`);

--
-- Índices de tabela `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`districtID`);

--
-- Índices de tabela `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`);

--
-- Índices de tabela `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`personID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `city`
--
ALTER TABLE `city`
  MODIFY `cityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `district`
--
ALTER TABLE `district`
  MODIFY `districtID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `people`
--
ALTER TABLE `people`
  MODIFY `personID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
