-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Nov-2023 às 22:51
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



--
-- Banco de dados: `bd_help`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acompanhante`
--

DROP TABLE IF EXISTS `acompanhante`;
CREATE TABLE IF NOT EXISTS `acompanhante` (
  `id_cliente_acompanhante` int NOT NULL AUTO_INCREMENT COMMENT 'PFK',
  `idade` int NOT NULL,
  `rg` varchar(15) NOT NULL,
  `cpf` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `antecedentes` varchar(255) NOT NULL,
  `experiencia` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cliente_acompanhante`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_usuario`
--

DROP TABLE IF EXISTS `cadastro_usuario`;
CREATE TABLE IF NOT EXISTS `cadastro_usuario` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `senha` varchar(55) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `usuario` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cadastro_usuario`
--

INSERT INTO `cadastro_usuario` (`id_cliente`, `nome`, `email`, `senha`, `telefone`, `usuario`) VALUES
(1, 'Ana Fontanari', 'anafontanari@gmail.com', '12345678', '14963587425', 'contratante'),
(3, 'Ana Gonçalves', 'aninha@gmail.com', '12345678', '11936574120', 'contratante'),
(4, 'Mariana Loureira', 'marilou@gmail.com', '12345678', '11936741205', 'acompanhante'),
(5, 'Marina siqueira', 'marisi@gmail.com', '12345678', '21954177889', 'acompanhante'),
(6, 'Marlene Antunes', 'tutu@gmail.com', '12345678', '21974836475', 'acompanhante'),
(7, 'Samuel Siqueira', 'samu@gmail.com', '12345678', '21974836470', 'acompanhante'),
(8, 'Italo Maranha', 'italo@yahoo.com', '12345678', '21966687412', 'contratante'),
(9, 'Vivian Silva', 'vivi@yahoo.com', '12345678', '21974589624', 'contratante'),
(10, 'Maria da silva', 'maria@gmail.com', '12345678', '11975842365', 'contratante'),
(11, 'Antonio Sousa', 'antoni@email.com', '12345678', '19987456302', 'contratante'),
(13, 'Carolina Silva', 'carol@email.com', '12345678', '11985463280', 'contratante'),
(14, 'Marcos Oliveira', 'oliveira@email.com', '12345678', '11971289634', 'acompanhante'),
(15, 'Ale Barboza', 'lele@email.com', '12345678', '16987456258', 'acompanhante');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratante`
--

DROP TABLE IF EXISTS `contratante`;
CREATE TABLE IF NOT EXISTS `contratante` (
  `id_cliente_contratante` int NOT NULL AUTO_INCREMENT COMMENT 'PFK',
  `id_cliente` int NOT NULL,
  `idade` int NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `deficiencia` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cliente_contratante`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;


