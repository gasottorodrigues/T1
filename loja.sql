-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 06-Abr-2018 às 18:45
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `cpf` varchar(11) NOT NULL,
  `cod_cidade` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  PRIMARY KEY (`cpf`),
  KEY `cod_cidade` (`cod_cidade`),
  KEY `cod_cidade_2` (`cod_cidade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`cpf`, `cod_cidade`, `nome`, `email`, `sexo`) VALUES
('15612217101', 6, 'Elly', 'elly@elly.com', 'F'),
('15612217112', 7, 'Dallete', 'dallete@dallete.com', 'F'),
('15612217123', 7, 'Matheus', 'matheus@matheus.com', 'F'),
('15612217134', 8, 'Borges', 'borges@borges', 'M'),
('15612217145', 8, 'Andreia', 'andreia@andreia.com', 'F'),
('15612217156', 9, 'Bianca', 'bianca@bianca.com', 'F'),
('15612217167', 9, 'Gihz', 'gihz@gihz.com', 'F'),
('15612217178', 10, 'Livia', 'livia@livia.com', 'F'),
('15612217189', 10, 'Julia', 'Julia@Julia.com', 'F'),
('15612217861', 2, 'sTAPIDIS', 'stapidis@vouteDenery.com', 'M'),
('15612217862', 4, 'Joana', '@joana@dark.com', 'F'),
('15612217863', 1, 'Maria', 'maria@maria.com', 'F'),
('15612217864', 1, 'Lucia', 'lucia@lucia.com', 'F'),
('15612217865', 3, 'Ana', 'ana@banana.com', 'F'),
('15612217866', 3, 'Mara', 'mara@mara.com', 'F'),
('15612217867', 5, 'Hillary', 'hillary@hillary.com', 'F'),
('15612217868', 5, 'Denise', 'denise@denise.com', 'F'),
('15612217869', 6, 'Dani', 'dani@dani.com', 'F'),
('566019831', 2, 'Daenerys Targaryen Filha da Tormenta Não Queimada Mãe de Dragões', 'naoqueimada@pegueimeusobrinho.com', 'F'),
('566019832', 4, 'Juão das Neves', 'jao@neves.muralha.dragao.com', 'F');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE IF NOT EXISTS `cidade` (
  `id_cidade` int(11) NOT NULL,
  `nome_cidade` varchar(100) NOT NULL,
  `cod_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_cidade`),
  KEY `cod_estado` (`cod_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id_cidade`, `nome_cidade`, `cod_estado`) VALUES
(1, 'Araraquara', 1),
(2, 'São Carlos', 1),
(3, 'Dourado', 1),
(4, 'Campinas', 1),
(5, 'Barretos', 1),
(6, 'Macaé', 2),
(7, 'Cabo Frio', 2),
(8, 'Petropolis', 2),
(9, 'Angra dos Reis', 2),
(10, 'São Gonçalo', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL,
  `sigla` char(2) NOT NULL,
  `nome_estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id_estado`, `sigla`, `nome_estado`) VALUES
(1, 'SP', 'São Paulo'),
(2, 'RJ', 'Rio Janeiro');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD CONSTRAINT `cadastro_ibfk_1` FOREIGN KEY (`cod_cidade`) REFERENCES `cidade` (`id_cidade`);

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `cidade_ibfk_1` FOREIGN KEY (`cod_estado`) REFERENCES `estado` (`id_estado`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
