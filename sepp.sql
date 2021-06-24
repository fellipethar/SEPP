-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jun-2021 às 02:03
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sepp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fornecedor`
--

CREATE TABLE `tb_fornecedor` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_fornecedor`
--

INSERT INTO `tb_fornecedor` (`id`, `nome`, `email`, `telefone`) VALUES
(1, 'Popsbrdobraisl', 'popbrasil@gmail', '7199885145'),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, 'maicon wiliam silva santos', 'maiconwiliamoficial@hotmail.com', '71987332490'),
(7, 'Maicon wiliam', 'maicon.santos@gmail', '7198888888');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id` int(11) NOT NULL,
  `nome_produto` varchar(50) NOT NULL,
  `fornecedor` varchar(50) DEFAULT NULL,
  `desc_produto` varchar(100) DEFAULT NULL,
  `valor` varchar(10) NOT NULL,
  `data` date DEFAULT NULL,
  `quantidade_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id`, `nome_produto`, `fornecedor`, `desc_produto`, `valor`, `data`, `quantidade_produto`) VALUES
(1, 'pirulito pop', 'Pops br', 'pirulito pop br', 'R$10', '2018-05-20', 0),
(2, 'pirulito pop', 'Pops br', 'dasdsadasd', '1', '2132-03-21', 20),
(3, 'pirulito pop', 'dasda', 'dasdasd', '20', '1200-05-20', 0),
(4, 'Moto', 'yahama', 'Moto 160 cilindradas', '3000', '2021-06-23', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `email`, `senha`, `empresa`, `endereco`, `cep`, `estado`, `cidade`) VALUES
(1, 'maiconwiliamoficial@hotmail.com', '12345', '56', '56', '41905455', 'BA', 'SALVADOR'),
(2, 'maicon@santos.com', '12345', 'unifascs', 'campos PA6', '4100000', 'BA', 'salvador');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_fornecedor`
--
ALTER TABLE `tb_fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_fornecedor`
--
ALTER TABLE `tb_fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
