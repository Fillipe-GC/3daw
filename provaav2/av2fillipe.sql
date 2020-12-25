-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Dez-2020 às 04:53
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `av2fillipe`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `codplaca` text CHARACTER SET utf8 NOT NULL,
  `nomecidade` varchar(50) CHARACTER SET utf8 NOT NULL,
  `modelo` text CHARACTER SET utf8 NOT NULL,
  `marca` text CHARACTER SET utf8 NOT NULL,
  `ano` int(4) NOT NULL,
  `cor` text CHARACTER SET utf8 NOT NULL,
  `precodiaria` float NOT NULL,
  `reservado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`codplaca`, `nomecidade`, `modelo`, `marca`, `ano`, `cor`, `precodiaria`, `reservado`) VALUES
('APJ6694', 'Rio de Janeiro', 'Sandero', 'Renault', 2018, 'Branco', 122.57, 0),
('BUT1008', 'Rio de Janeiro', 'Ecosport', 'Ford', 2015, 'Vermelho', 155.96, 0),
('CBT2077', 'Rio de Janeiro', 'A3', 'Audi', 2017, 'Cinza', 168.88, 0),
('DPQ1937', 'São Paulo', 'Sedan', 'Ford', 2016, 'Cinza', 123.45, 0),
('FPX8509', 'São Paulo', 'C180', 'Mercedes', 2019, 'Preto', 421.67, 0),
('GFG1284', 'São Paulo', 'Corolla', 'Toyota', 2017, 'Cinza', 161.28, 0),
('HIJ5745', 'Salvador', 'Argo', 'Fiat', 2017, 'Preto', 116.24, 0),
('KQP2985', 'Salvador', 'Virtus', 'Volkswagen', 2014, 'Azul', 138.49, 0),
('KST2681', 'Salvador', 'Mobi', 'Fiat', 2018, 'Preto', 118.11, 0),
('LLS5421', 'João Pessoa', 'Onix', 'Chevrolet', 2019, 'Preto', 156.44, 0),
('MNC3086', 'João Pessoa', 'Cruze', 'Chevrolet', 2016, 'Azul', 173.58, 0),
('NOQ8563', 'João Pessoa', 'Saveiro', 'Volkswagen', 2019, 'Branco', 144.59, 0),
('PRX1597', 'Florianópolis', 'Logan', 'Renault', 2016, 'Branco', 126.77, 0),
('RMQ5574', 'Florianópolis', 'Prisma', 'Chevrolet', 2015, 'Cinza', 133.84, 0),
('SPC1080', 'Florianópolis', 'Duster Oroch', 'Renault', 2017, 'Vermelho', 233.69, 0),
('VXI4560', 'Curitiba', 'Fluence', 'Renault', 2016, 'Branco', 199.65, 0),
('WQX7113', 'Curitiba', 'Versa', 'Nissan', 2018, 'Vermelho', 120.86, 0),
('XML2021', 'Curitiba', 'Stepway', 'Renault', 2017, 'Cinza', 119.76, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `codcid` int(11) NOT NULL,
  `nomecidade` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`codcid`, `nomecidade`) VALUES
(1, 'Rio de Janeiro'),
(2, 'São Paulo'),
(3, 'Salvador'),
(4, 'João Pessoa'),
(5, 'Florianópolis'),
(6, 'Curitiba');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `codcli` int(11) NOT NULL,
  `nome` text CHARACTER SET utf8 NOT NULL,
  `idade` int(3) NOT NULL,
  `cpf` varchar(11) CHARACTER SET utf8 NOT NULL,
  `cnh` varchar(11) CHARACTER SET utf8 NOT NULL,
  `telefone` int(9) NOT NULL,
  `numerocartao` varchar(16) CHARACTER SET utf8 NOT NULL,
  `nomecartao` text CHARACTER SET utf8 NOT NULL,
  `valcartao` date NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lojas`
--

CREATE TABLE `lojas` (
  `codloja` int(11) NOT NULL,
  `nomecidade` text NOT NULL,
  `endereco` text CHARACTER SET utf8 NOT NULL,
  `complemento` text CHARACTER SET utf8 NOT NULL,
  `bairro` text CHARACTER SET utf8 NOT NULL,
  `telefone` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `lojas`
--

INSERT INTO `lojas` (`codloja`, `nomecidade`, `endereco`, `complemento`, `bairro`, `telefone`) VALUES
(1, 'Rio de Janeiro', 'Rua General Roca, 120', 'Próximo ao Prezunic', 'Tijuca', 22659930),
(2, 'Rio de Janeiro', 'Rua Delfim Dias, 530', 'Em frente à igreja', 'Madureira', 985368050),
(3, 'São Paulo', 'Avenida Príncipe, 156', '', 'Liberdade', 32689554),
(4, 'São Paulo', 'Rua Jardim Florença, 600', 'Próximo ao Parque Florença', 'Raposo Tavares', 986008477),
(5, 'Salvador', 'Rua Catumbi, 665', '', 'Campeche', 40028666),
(6, 'João Pessoa', 'Rua dos Honorários', 'Ao lado do colégio Santa Luzia', 'Jardim Oceania', 38779402),
(7, 'Florianópolis', 'Avenida Passos, 851', '', 'Amaralina', 42006684),
(8, 'Curitiba', 'Rua Maria Fernanda', 'Próximo à Praça Leste', 'Alto da Glória', 975509631);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `codres` int(11) NOT NULL,
  `codloja` int(11) NOT NULL,
  `nomecidade` varchar(50) NOT NULL,
  `codplaca` text CHARACTER SET utf8 NOT NULL,
  `nomecli` text CHARACTER SET utf8 NOT NULL,
  `datain` date NOT NULL,
  `datafim` date NOT NULL,
  `valtotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`codplaca`(7));

--
-- Índices para tabela `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`codcid`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codcli`);

--
-- Índices para tabela `lojas`
--
ALTER TABLE `lojas`
  ADD PRIMARY KEY (`codloja`);

--
-- Índices para tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`codres`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cidades`
--
ALTER TABLE `cidades`
  MODIFY `codcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codcli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `lojas`
--
ALTER TABLE `lojas`
  MODIFY `codloja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `codres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
