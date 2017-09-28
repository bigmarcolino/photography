-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 27-Dez-2013 às 22:10
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `photography`
--
CREATE DATABASE IF NOT EXISTS `photography` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `photography`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `cod_administrador` int(11) NOT NULL AUTO_INCREMENT,
  `nome_administrador` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_administrador` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `senha_administrador` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_administrador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`cod_administrador`, `nome_administrador`, `usuario_administrador`, `senha_administrador`) VALUES
(1, 'Marcus Vinícius', 'marcolino', '123'),
(2, 'Irmao', 'tutinho', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `textos`
--

CREATE TABLE IF NOT EXISTS `textos` (
  `cod_texto` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_aba` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_home` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem_home` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email_contato` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_portfolio1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_portfolio2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_portfolio3` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_portfolio4` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_portfolio5` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `texto_bio` varchar(1670) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_texto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `textos`
--

INSERT INTO `textos` (`cod_texto`, `titulo_aba`, `titulo_home`, `mensagem_home`, `email_contato`, `titulo_portfolio1`, `titulo_portfolio2`, `titulo_portfolio3`, `titulo_portfolio4`, `titulo_portfolio5`, `texto_bio`) VALUES
(1, 'Photography', 'Photography', '', 'big@gmail.com', 'food', 'wild', 'nature', 'events', 'people', 'Fotografia é essencialmente a técnica de criação de imagens por meio de exposição luminosa, fixando-as em uma superfície sensível. A primeira fotografia reconhecida remonta ao ano de 1826 e é atribuída ao francês Joseph Nicéphore Niépce. Contudo, a invenção da fotografia não é obra de um só autor, mas um processo de acúmulo de avanços por parte de muitas pessoas, trabalhando, juntas ou em paralelo, ao longo de muitos anos. Se por um lado os princípios fundamentais da fotografia se estabeleceram há décadas e, desde a introdução do filme fotográfico colorido, quase não sofreram mudanças, por outro, os avanços tecnológicos têm sistematicamente possibilitado melhorias na qualidade das imagens produzidas, agilização das etapas do processo de produção e a redução de custos, popularizando o uso da fotografia.<br><br>\r\nAtualmente, a introdução da tecnologia digital tem modificado drasticamente os paradigmas que norteiam o mundo da fotografia. Os equipamentos, ao mesmo tempo que são oferecidos a preços cada vez menores, disponibilizam ao usuário médio recursos cada vez mais sofisticados, assim como maior qualidade de imagem e facilidade de uso. A simplificação dos processos de captação, armazenagem, impressão e reprodução de imagens proporcionados intrinsecamente pelo ambiente digital, aliada à facilidade de integração com os recursos da informática, como organização em álbuns, incorporação de imagens em documentos e distribuição via Internet, têm ampliado e democratizado o uso da imagem fotográfica nas mais diversas aplicações.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
