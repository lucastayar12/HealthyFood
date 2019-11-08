-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Nov-2019 às 22:37
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `healthyfood`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `ID` int(5) NOT NULL,
  `NOME` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMAIL` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SENHA` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`ID`, `NOME`, `EMAIL`, `SENHA`) VALUES
(1, 'kelly roberta da silva', 'KELLYROBERTA1267@YAHOO.COM.BR', '126709'),
(2, 'LUCAS TAYAR ', 'LUCASTAYAR12@GMAIL.COM', '@Sandalha10'),
(3, 'Alan Cristian Silva', 'alancristian2000@gmail.com', 'A6c12B7*lM8s'),
(4, 'ADMINISTRADOR', 'ADMIN@GMAIL.COM', 'ADMIN');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
