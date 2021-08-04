-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Ago-2021 às 00:44
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_leitura`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_leitura`
--

CREATE TABLE `tb_leitura` (
  `id` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `litros` double NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_leitura`
--

INSERT INTO `tb_leitura` (`id`, `id_usuario`, `litros`, `data`) VALUES
(1, 10, 0, '2020-08-20 18:26:16'),
(2, 10, 4.22, '2020-08-20 18:27:15'),
(3, 10, 0, '2020-08-20 18:28:15'),
(4, 11, 4.39, '2020-08-21 16:21:30'),
(5, 11, 4.03, '2020-08-21 16:22:30'),
(6, 11, 0, '2020-08-21 16:23:30'),
(7, 11, 0, '2020-08-21 16:24:30'),
(8, 11, 0, '2020-08-21 16:25:30'),
(9, 11, 0, '2020-08-21 16:26:30'),
(10, 11, 0, '2020-08-21 16:27:30'),
(11, 11, 0, '2020-08-21 16:28:30'),
(12, 11, 0, '2020-08-21 16:29:30'),
(13, 11, 0, '2020-08-21 16:30:30'),
(14, 10, 0, '2020-09-01 20:49:29'),
(15, 10, 0, '2020-09-01 20:50:28'),
(16, 10, 0, '2020-09-01 20:51:28'),
(17, 10, 2.78, '2020-09-01 20:57:55'),
(18, 10, 7.61, '2020-09-01 21:01:55'),
(19, 10, 3.22, '2020-09-01 21:08:55'),
(20, 10, 4.32, '2020-09-01 21:25:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `numero_complemento` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nome`, `cpf`, `cep`, `numero_complemento`, `usuario`, `senha`) VALUES
(10, 'Rafael Rezende Rege', '45155559871', '04177240', 'n60', 'Rafael', '496cfe52debb9a3c40847aaf72b7e179'),
(11, 'Bruno Famelli Bendazzolli', '44444444444', '44444444', 'n64', 'Bruno', 'b304f234940a679b3ab3c699f80db849');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_leitura`
--
ALTER TABLE `tb_leitura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_usuario` (`id_usuario`);

--
-- Indexes for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_leitura`
--
ALTER TABLE `tb_leitura`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_leitura`
--
ALTER TABLE `tb_leitura`
  ADD CONSTRAINT `fk_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
