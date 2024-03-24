-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 24/03/2024 às 00:44
-- Versão do servidor: 10.5.20-MariaDB
-- Versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id20567592_psico_plus`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `data`
--

CREATE TABLE `data` (
  `idData` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `data`
--

INSERT INTO `data` (`idData`, `data`) VALUES
(1, '2023-04-02'),
(2, '2023-04-07');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idFuncionario` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `idade` int(11) NOT NULL,
  `senha` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`idFuncionario`, `nome`, `cpf`, `telefone`, `idade`, `senha`) VALUES
(1, 'Admin', '000.000.000-00', '31996500218', 18, '$2y$10$OhiTG1hMgjmIPK9C6x8YJO.r/PWUpMiVVziupXGs6tGGTAvENKYRW'),
(2, 'Marcos Gustavo', '000.000.000-01', '31996500019', 12, '$2y$10$/3HMjA3brY.5PLcQcPWn0.W0F2W2sBIL/SgCXVljshC6Ufrr2xvcu'),
(3, 'Wellington Santos', '000.000.000-02', '31912345678', 30, '$2y$10$UgGIJaa4hqT7HqRyqPv5R.2kSLKhQ5UeLPqp8GIWXcGFzTtINqh8S'),
(4, 'Marcel Teste', '000.000.000-03', '319234567890', 29, '$2y$10$fSeNXIvZE8YF3haURVnsDefuGtCUcM4S7UXV/UMkbd3JTwGcBHlay'),
(5, 'Instrutor teste 1', '000.000.000-04', '31900001234', 33, '$2y$10$3nSDsQJ8wGRQdHMSMUzdWeoYe8S2x6Mc5kN2ZGFJOqayaScm5CQam'),
(8, 'Michael Douglas', '000.000.000-10', '(31)987488492', 21, '$2y$10$Bx34/GH/sJbsYByRSRbMZOa8VULjO6.aiyg5doT.2qGY0exiFFz.O');

-- --------------------------------------------------------

--
-- Estrutura para tabela `resultado`
--

CREATE TABLE `resultado` (
  `idResultado` int(11) NOT NULL,
  `idFuncionario` int(11) NOT NULL,
  `idData` int(11) NOT NULL,
  `nota` varchar(25) NOT NULL,
  `nomeFuncionario` varchar(150) NOT NULL,
  `cpfFuncionario` varchar(45) NOT NULL,
  `telefoneFuncionario` varchar(45) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `resultado`
--

INSERT INTO `resultado` (`idResultado`, `idFuncionario`, `idData`, `nota`, `nomeFuncionario`, `cpfFuncionario`, `telefoneFuncionario`, `data`) VALUES
(1, 1, 1, 'Intervenção', 'Admin', '000.000.000-00', '31996500218', '2023-04-02'),
(5, 2, 1, 'Saudável', 'Marcos Gustavo', '000.000.000-01', '31996500019', '2023-04-02'),
(18, 4, 1, 'Preocupável', 'Marcel Teste', '000.000.000-03', '319234567890', '2023-04-02'),
(19, 3, 2, 'Intervenção', 'Wellington Santos', '000.000.000-02', '31912345678', '2023-04-07'),
(21, 2, 2, 'Preocupável', 'Marcos Gustavo', '000.000.000-01', '31996500019', '2023-04-07'),
(22, 2, 1, 'Preocupável', 'Marcos Gustavo', '000.000.000-01', '31996500019', '2023-04-02'),
(23, 2, 1, 'Preocupável', 'Marcos Gustavo', '000.000.000-01', '31996500019', '2023-04-02');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`idData`),
  ADD UNIQUE KEY `idData_UNIQUE` (`idData`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idFuncionario`),
  ADD UNIQUE KEY `idFuncionario_UNIQUE` (`idFuncionario`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`);

--
-- Índices de tabela `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`idResultado`),
  ADD UNIQUE KEY `idResultado_UNIQUE` (`idResultado`),
  ADD KEY `fk_Funcionario_has_Data_Data1_idx` (`idData`),
  ADD KEY `fk_Funcionario_has_Data_Funcionario_idx` (`idFuncionario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `data`
--
ALTER TABLE `data`
  MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `resultado`
--
ALTER TABLE `resultado`
  MODIFY `idResultado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `fk_Funcionario_has_Data_Data1` FOREIGN KEY (`idData`) REFERENCES `data` (`idData`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Funcionario_has_Data_Funcionario` FOREIGN KEY (`idFuncionario`) REFERENCES `funcionario` (`idFuncionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
