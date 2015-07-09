-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jul-2015 às 00:28
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbjlweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `n_codigo` bigint(20) NOT NULL AUTO_INCREMENT,
  `n_nome` varchar(100) NOT NULL,
  `n_descricao` varchar(300) NOT NULL,
  `n_img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`n_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`n_codigo`, `n_nome`, `n_descricao`, `n_img`) VALUES
(8, 'TESTE DE NOTICIA', 'TESTANDO A LISTAGEM NO EDITAR', 'imgnoticia/a4063f97264b9aa98f223aa48483ced2.jpg'),
(9, 'Jl Web', 'Abre empresa de desenvolvimento', 'imgnoticia/a731388169406774dfb6bf73e2c7948a.jpg'),
(10, 'ASDOIAJSD', 'IJDAOISDJOJ', 'imgnoticia/9fd192da582985e37298bef5156cf3e6.jpg'),
(11, 'MAMSDLM', 'LMASLMDLASMDLAMSD', 'imgnoticia/c3fa9e2175af63a488b915d91783efbd.jpg'),
(12, 'NNNN', 'NNNNNN', 'imgnoticia/5f453d1292707b5094b9c62ee9ce066e.jpg'),
(13, 'PPPP', 'PPPPP', 'imgnoticia/e3fd44cfeb1dafe3bc665c8a327b4695.jpg'),
(14, 'aaaa', 'aaaaa', 'imgnoticia/6970eb558728fd006b7bb418ebf75479.jpg'),
(15, 'bbbbb', 'bbbbbb', 'imgnoticia/3e49e64d489030a7ffca3c305d57d168.jpg'),
(16, 'Nova noticia', 'Teatevhzjaudhhsbudbzhfjdd', 'imgnoticia/bcbcf3a950c94942d31da89055ff2e01.jpg'),
(17, 'teste', 'OlÃ¡ este Ã© o meu teste', 'imgnoticia/d96319e936bda3c1be45555defafd302.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario`, `senha`) VALUES
('LeandroGirardelo', '202cb962ac59075b964b07152d234b70'),
('Thiago', '202cb962ac59075b964b07152d234b70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
