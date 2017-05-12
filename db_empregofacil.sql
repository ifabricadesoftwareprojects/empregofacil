-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 12/05/2017 às 23:22
-- Versão do servidor: 10.1.13-MariaDB
-- Versão do PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empregofacil`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `candidatar`
--

CREATE TABLE `candidatar` (
  `candidato_usuario_idusuario` int(11) NOT NULL,
  `vaga_idvaga` int(11) NOT NULL,
  `mensagem` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `candidato`
--

CREATE TABLE `candidato` (
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
  `outras_informacoes` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `candidato_idioma`
--

CREATE TABLE `candidato_idioma` (
  `idioma_ididioma` int(11) NOT NULL,
  `candidato_usuario_idusuario` int(11) NOT NULL,
  `le` char(15) DEFAULT NULL,
  `escreve` char(15) DEFAULT NULL,
  `fala` char(15) DEFAULT NULL,
  `entende` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `idcontato` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `valor` varchar(45) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `curso`
--

CREATE TABLE `curso` (
  `idcurso` int(11) NOT NULL,
  `descricao_curso` varchar(300) NOT NULL,
  `instituicao` varchar(75) DEFAULT NULL,
  `nivel` varchar(45) DEFAULT NULL,
  `mes_ano_inicio` char(7) DEFAULT NULL,
  `mes_ano_fim` char(7) DEFAULT NULL,
  `status_curso` varchar(20) DEFAULT NULL,
  `candidato_usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresa`
--

CREATE TABLE `empresa` (
  `usuario_idusuario` int(11) NOT NULL,
  `razao_social` varchar(75) DEFAULT NULL,
  `cnpj` char(18) DEFAULT NULL,
  `site` varchar(75) DEFAULT NULL,
  `descricao` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `idendereco` int(11) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `numero` char(10) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) NOT NULL,
  `cep` char(10) DEFAULT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` char(2) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `experiencia`
--

CREATE TABLE `experiencia` (
  `idexperiencia` int(11) NOT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `nivel_hierarquico` varchar(30) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `mes_ano_inicio` char(7) DEFAULT NULL,
  `mes_ano_termino` char(7) DEFAULT NULL,
  `emprego_atual` char(3) DEFAULT NULL,
  `candidato_usuario_idusuario` int(11) NOT NULL,
  `atividade_desempenhada` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `idioma`
--

CREATE TABLE `idioma` (
  `ididioma` int(11) NOT NULL,
  `nome_idioma` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `senha` char(32) NOT NULL,
  `token` char(32) NOT NULL,
  `status` varchar(20) NOT NULL,
  `perfil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `vaga`
--

CREATE TABLE `vaga` (
  `idvaga` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `faixa_salarial_inicio` double DEFAULT NULL,
  `faixa_salarial_fim` double DEFAULT NULL,
  `pre_requisitos` text,
  `tipo_contrato` varchar(25) DEFAULT NULL,
  `benefícios` text,
  `status_vaga` varchar(20) DEFAULT NULL,
  `data_publicacao` char(10) DEFAULT NULL,
  `visualizacoes` int(11) DEFAULT NULL,
  `empresa_usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `candidatar`
--
ALTER TABLE `candidatar`
  ADD PRIMARY KEY (`candidato_usuario_idusuario`,`vaga_idvaga`),
  ADD KEY `fk_candidatar_vaga1_idx` (`vaga_idvaga`);

--
-- Índices de tabela `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`usuario_idusuario`);

--
-- Índices de tabela `candidato_idioma`
--
ALTER TABLE `candidato_idioma`
  ADD PRIMARY KEY (`idioma_ididioma`,`candidato_usuario_idusuario`),
  ADD KEY `fk_idioma_has_candidato_candidato1_idx` (`candidato_usuario_idusuario`),
  ADD KEY `fk_idioma_has_candidato_idioma1_idx` (`idioma_ididioma`);

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idcontato`),
  ADD KEY `fk_contato_usuario1_idx` (`usuario_idusuario`);

--
-- Índices de tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idcurso`),
  ADD KEY `fk_curso_candidato1_idx` (`candidato_usuario_idusuario`);

--
-- Índices de tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`usuario_idusuario`);

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`idendereco`),
  ADD KEY `fk_endereco_usuario1_idx` (`usuario_idusuario`);

--
-- Índices de tabela `experiencia`
--
ALTER TABLE `experiencia`
  ADD PRIMARY KEY (`idexperiencia`),
  ADD KEY `fk_experiencia_candidato1_idx` (`candidato_usuario_idusuario`);

--
-- Índices de tabela `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`ididioma`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Índices de tabela `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`idvaga`),
  ADD KEY `fk_vaga_empresa1_idx` (`empresa_usuario_idusuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `idcontato` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `experiencia`
--
ALTER TABLE `experiencia`
  MODIFY `idexperiencia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `idioma`
--
ALTER TABLE `idioma`
  MODIFY `ididioma` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `vaga`
--
ALTER TABLE `vaga`
  MODIFY `idvaga` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `candidatar`
--
ALTER TABLE `candidatar`
  ADD CONSTRAINT `fk_candidatar_candidato1` FOREIGN KEY (`candidato_usuario_idusuario`) REFERENCES `candidato` (`usuario_idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_candidatar_vaga1` FOREIGN KEY (`vaga_idvaga`) REFERENCES `vaga` (`idvaga`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `candidato`
--
ALTER TABLE `candidato`
  ADD CONSTRAINT `fk_candidato_usuario` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `candidato_idioma`
--
ALTER TABLE `candidato_idioma`
  ADD CONSTRAINT `fk_idioma_has_candidato_candidato1` FOREIGN KEY (`candidato_usuario_idusuario`) REFERENCES `candidato` (`usuario_idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_idioma_has_candidato_idioma1` FOREIGN KEY (`idioma_ididioma`) REFERENCES `idioma` (`ididioma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `contato`
--
ALTER TABLE `contato`
  ADD CONSTRAINT `fk_contato_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `fk_curso_candidato1` FOREIGN KEY (`candidato_usuario_idusuario`) REFERENCES `candidato` (`usuario_idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_empresa_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_endereco_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `experiencia`
--
ALTER TABLE `experiencia`
  ADD CONSTRAINT `fk_experiencia_candidato1` FOREIGN KEY (`candidato_usuario_idusuario`) REFERENCES `candidato` (`usuario_idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `vaga`
--
ALTER TABLE `vaga`
  ADD CONSTRAINT `fk_vaga_empresa1` FOREIGN KEY (`empresa_usuario_idusuario`) REFERENCES `empresa` (`usuario_idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
