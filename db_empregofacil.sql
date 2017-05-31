-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Maio-2017 às 19:20
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `empregofacil`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatar`
--

CREATE TABLE IF NOT EXISTS `candidatar` (
  `candidato_usuario_idusuario` int(11) NOT NULL,
  `vaga_idvaga` int(11) NOT NULL,
  `mensagem` text,
  PRIMARY KEY (`candidato_usuario_idusuario`,`vaga_idvaga`),
  KEY `fk_candidatar_vaga1_idx` (`vaga_idvaga`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE IF NOT EXISTS `candidato` (
  `usuario_idusuario` int(11) NOT NULL,
  `nome_social` varchar(75) DEFAULT NULL,
  `data_nascimento` char(10) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `estado_civil` varchar(20) DEFAULT NULL,
  `cpf` char(11) DEFAULT NULL,
  `portador_deficiencia` char(3) DEFAULT NULL,
  `descricao_deficiencia` varchar(75) DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `tipo_habilitacao` char(1) DEFAULT NULL,
  `veiculo_proprio` varchar(75) DEFAULT NULL,
  `disponibilidade_viajar` char(3) DEFAULT NULL,
  `disponibilidade_mudar_residencia` char(3) DEFAULT NULL,
  `outras_informacoes` text,
  PRIMARY KEY (`usuario_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `idcontato` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  `valor` varchar(45) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  PRIMARY KEY (`idcontato`),
  KEY `fk_contato_usuario1_idx` (`usuario_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `idcurso` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_curso` varchar(300) NOT NULL,
  `instituicao` varchar(75) DEFAULT NULL,
  `nivel` varchar(45) DEFAULT NULL,
  `mes_ano_inicio` char(7) DEFAULT NULL,
  `mes_ano_fim` char(7) DEFAULT NULL,
  `status_curso` varchar(20) DEFAULT NULL,
  `candidato_usuario_idusuario` int(11) NOT NULL,
  PRIMARY KEY (`idcurso`),
  KEY `fk_curso_candidato1_idx` (`candidato_usuario_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `usuario_idusuario` int(11) NOT NULL,
  `razao_social` varchar(75) DEFAULT NULL,
  `cnpj` char(18) DEFAULT NULL,
  `site` varchar(75) DEFAULT NULL,
  `descricao` text,
  `ramo_atividade` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`usuario_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`usuario_idusuario`, `razao_social`, `cnpj`, `site`, `descricao`, `ramo_atividade`) VALUES
(1, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE IF NOT EXISTS `endereco` (
  `idendereco` int(11) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `numero` char(10) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) NOT NULL,
  `cep` char(10) DEFAULT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` char(2) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  PRIMARY KEY (`idendereco`),
  KEY `fk_endereco_usuario1_idx` (`usuario_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `experiencia`
--

CREATE TABLE IF NOT EXISTS `experiencia` (
  `idexperiencia` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(50) DEFAULT NULL,
  `nivel_hierarquico` varchar(30) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `empresa` varchar(45) DEFAULT NULL,
  `mes_ano_inicio` char(7) DEFAULT NULL,
  `mes_ano_termino` char(7) DEFAULT NULL,
  `emprego_atual` char(3) DEFAULT NULL,
  `candidato_usuario_idusuario` int(11) NOT NULL,
  `atividade_desempenhada` text,
  PRIMARY KEY (`idexperiencia`),
  KEY `fk_experiencia_candidato1_idx` (`candidato_usuario_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `idioma`
--

CREATE TABLE IF NOT EXISTS `idioma` (
  `ididioma` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_idioma` varchar(25) NOT NULL,
  `le` char(15) DEFAULT NULL,
  `escreve` char(15) DEFAULT NULL,
  `fala` char(15) DEFAULT NULL,
  `entende` char(15) DEFAULT NULL,
  `candidato_usuario_idusuario` int(11) NOT NULL,
  PRIMARY KEY (`ididioma`),
  KEY `fk_idioma_has_candidato_candidato1_idx` (`candidato_usuario_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `senha` char(32) NOT NULL,
  `token` char(32) NOT NULL,
  `status` varchar(20) NOT NULL,
  `perfil` varchar(20) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `email`, `senha`, `token`, `status`, `perfil`) VALUES
(1, 'Empresa Junior', 'empresajunior@gmail.com', 'caff2749f2833128ee2d3fe5a61f8109', 'cc09da88aac5b4ed650140524b2c1834', 'Ativo', 'Empresa'),
(2, 'Gol de classe', 'jabes@hotmail.com', '80a045956cf2094c90a35b1db8f2a612', '549ecda4fe77321d56c8deb030069ab3', 'Ativo', 'Empresa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE IF NOT EXISTS `vaga` (
  `idvaga` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `faixa_salarial_inicio` double DEFAULT NULL,
  `faixa_salarial_fim` double DEFAULT NULL,
  `pre_requisitos` text,
  `tipo_contrato` varchar(25) DEFAULT NULL,
  `beneficios` text,
  `status_vaga` varchar(20) DEFAULT NULL,
  `data_publicacao` char(10) DEFAULT NULL,
  `visualizacoes` int(11) DEFAULT NULL,
  `empresa_usuario_idusuario` int(11) NOT NULL,
  PRIMARY KEY (`idvaga`),
  KEY `fk_vaga_empresa1_idx` (`empresa_usuario_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `candidatar`
--
ALTER TABLE `candidatar`
  ADD CONSTRAINT `fk_candidatar_candidato1` FOREIGN KEY (`candidato_usuario_idusuario`) REFERENCES `candidato` (`usuario_idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_candidatar_vaga1` FOREIGN KEY (`vaga_idvaga`) REFERENCES `vaga` (`idvaga`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `candidato`
--
ALTER TABLE `candidato`
  ADD CONSTRAINT `fk_candidato_usuario` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `contato`
--
ALTER TABLE `contato`
  ADD CONSTRAINT `fk_contato_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `fk_curso_candidato1` FOREIGN KEY (`candidato_usuario_idusuario`) REFERENCES `candidato` (`usuario_idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_empresa_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_endereco_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `experiencia`
--
ALTER TABLE `experiencia`
  ADD CONSTRAINT `fk_experiencia_candidato1` FOREIGN KEY (`candidato_usuario_idusuario`) REFERENCES `candidato` (`usuario_idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `idioma`
--
ALTER TABLE `idioma`
  ADD CONSTRAINT `fk_idioma_has_candidato_candidato1` FOREIGN KEY (`candidato_usuario_idusuario`) REFERENCES `candidato` (`usuario_idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vaga`
--
ALTER TABLE `vaga`
  ADD CONSTRAINT `fk_vaga_empresa1` FOREIGN KEY (`empresa_usuario_idusuario`) REFERENCES `empresa` (`usuario_idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
