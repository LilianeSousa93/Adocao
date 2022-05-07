-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Abr-2022 às 02:23
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `adocao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `novousuario`
--

CREATE TABLE `novousuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(9) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dt_nascimento` varchar(10) NOT NULL,
  `tel_celular` varchar(11) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `rua` varchar(150) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(30) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `novousuario`
--

INSERT INTO `novousuario` (`id`, `nome`, `cpf`, `rg`, `email`, `dt_nascimento`, `tel_celular`, `cep`, `rua`, `numero`, `complemento`, `bairro`, `senha`) VALUES
(1, 'Carolina Santos', '4123687952', '451236987', 'carol@hotmail.com', '21/02/1993', '11896523416', '0247896', 'Eliseu Guilherme', '441', 'casa 1', 'Paraíso', ''),
(2, 'Luciana Azevedo', '40652398713', '895236416', 'Luci@hotmail.com.br', '05/04/1998', '11245968742', '0236589', 'Avenida Vergueiro', '203', '', 'Vergueiro', '52361');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`) VALUES
(2, 'ana@hotmail.com', 789),
(7, 'Angelica@hotmail.com', 78562),
(9, 'Luiza@hotmail.com.br', 5879),
(10, 'Nil@hotmail.com.br', 5632);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `novousuario`
--
ALTER TABLE `novousuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `novousuario`
--
ALTER TABLE `novousuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
