-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Maio-2021 às 15:45
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bxblue_poke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `troca_pokemon`
--

CREATE TABLE `troca_pokemon` (
  `nome_pokemon` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `base_experience` int(11) NOT NULL,
  `troca` int(11) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `troca_pokemon`
--

INSERT INTO `troca_pokemon` (`nome_pokemon`, `base_experience`, `troca`, `data_cadastro`) VALUES
('charmeleon', 142, 48, '2021-05-19 23:29:41'),
('squirtle', 63, 49, '2021-05-19 23:29:57'),
('charmander', 62, 50, '2021-05-19 23:30:10'),
('beedrill', 178, 51, '2021-05-19 23:30:22'),
('charmeleon', 142, 52, '2021-05-19 23:30:50'),
('charizard', 240, 53, '2021-05-20 11:01:20'),
('charizard', 240, 54, '2021-05-20 11:01:35'),
('charizard', 240, 55, '2021-05-20 11:01:46'),
('charizard', 240, 56, '2021-05-20 11:16:26'),
('charizard', 240, 57, '2021-05-20 11:20:30'),
('charizard', 240, 58, '2021-05-20 12:14:12'),
('charmeleon', 142, 59, '2021-05-20 12:48:56');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `troca_pokemon`
--
ALTER TABLE `troca_pokemon`
  ADD PRIMARY KEY (`troca`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `troca_pokemon`
--
ALTER TABLE `troca_pokemon`
  MODIFY `troca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
