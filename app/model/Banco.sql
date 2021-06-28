-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jun-2021 às 22:16
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `shoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbbrand`
--

CREATE TABLE `tbbrand` (
  `_id` int(11) NOT NULL,
  `nameBrand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbbrand`
--

INSERT INTO `tbbrand` (`_id`, `nameBrand`) VALUES
(2, 'Nike'),
(3, 'Adidas'),
(4, 'Puma'),
(5, 'newbalance'),
(6, 'Fila'),
(7, 'Under Armour');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategory`
--

CREATE TABLE `tbcategory` (
  `_id` int(11) NOT NULL,
  `nameCategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcategory`
--

INSERT INTO `tbcategory` (`_id`, `nameCategory`) VALUES
(2, 'Corrida'),
(3, 'Casual'),
(4, 'Basquete'),
(5, 'Futebol(Chuteira)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbshoe`
--

CREATE TABLE `tbshoe` (
  `_id` int(11) NOT NULL,
  `nameShoe` varchar(100) NOT NULL,
  `descriptionShoe` varchar(300) NOT NULL,
  `genderShoe` varchar(50) NOT NULL,
  `priceShoe` double(6,2) NOT NULL,
  `colorsShoe` varchar(50) NOT NULL,
  `dirImageShoe` varchar(100) NOT NULL,
  `nameImageShoe` varchar(100) NOT NULL,
  `idCategory` int(11) DEFAULT NULL,
  `idBrand` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbshoe`
--

INSERT INTO `tbshoe` (`_id`, `nameShoe`, `descriptionShoe`, `genderShoe`, `priceShoe`, `colorsShoe`, `dirImageShoe`, `nameImageShoe`, `idCategory`, `idBrand`) VALUES
(2, 'Tênis Nike Air Huarache', 'Com hastes que vão de uma lateral a outra, trazendo conforto total.', 'Masculino', 899.00, '[\"Branco\",\"Rosa\",\"Roxo\"]', 'img/products/f75b9edaaaf71260cd3d05b9dc5e6ee3.jpg', '', 3, 2),
(3, 'Tênis Nike Air Force 1', 'Sola e acabamentos laterais reforçados.', 'Unissex', 699.00, '[\"Branco\"]', 'img/products/667de9a07390632781137991c5859c9f.jpg', '', 3, 2),
(4, 'Tênis Nike ZoomX Vaporfly', 'Conforto total para quem gosta de correr ou malhar.', 'Masculino', 1699.00, '[\"Azul\",\"Branco\"]', 'img/products/737db125a905682ec90fce8733ed5c6a.jpg', '', 2, 2),
(5, 'Tênis Nike Air Max 97 EOI', 'Estilo único para quem gosta de conforto e chamar a atenção.', 'Masculino', 899.00, '[\"Cinza\",\"Branco\",\"Preto\",\"Colorido\"]', 'img/products/ff9373e52bfe59e7542f298a3638a12e.jpg', '', 3, 2),
(6, 'Tênis Nike Air Max Genome Masculino', 'Branco e Preto básico e confortável.', 'Unissex', 999.00, '[\"Branco\",\"Preto\"]', 'img/products/c222ccf61ff3d8a4be7365037e4136ac.jpg', '', 2, 2),
(7, 'TÊNIS OZWEEGO', 'O famoso chamativo básico.', 'Unissex', 599.00, '[\"Bege\"]', 'img/products/4c4f28134abc0ead37cb7afb8b47d664.jpg', '', 3, 2),
(8, 'TÊNIS NMD_R1', 'Conforto a cima de tudo, ótimo para manter o físico.', 'Unissex', 699.00, '[\"Preto\"]', 'img/products/28aad570182da6eaf1714f50229a2524.jpg', '', 3, 3),
(9, 'TÊNIS OZWEEGO TR ', 'Com hastes refletivas a exposição de luz/flash.', 'Feminino', 479.00, '[\"Preto\",\"Cinza\"]', 'img/products/6b05b47c65d4e0b586beb3797ba7c982.jpg', '', 3, 3),
(10, 'TÊNIS CAMPUS', 'Cano baixo e tecido de camurça.', 'Unissex', 269.00, '[\"Azul\",\"Branco\"]', 'img/products/4f01397664306877066f14f0cc890db3.jpg', '', 3, 3),
(11, 'TÊNIS RS-2K SOFT METAL', 'Plataforma interna alta e confortável.', 'Feminino', 299.00, '[\"Bege\",\"Branco\"]', 'img/products/16a597c3aa64903caa2649f85217f070.jpg', '', 3, 4),
(12, 'TÊNIS SUEDE CLASSIC XXI', 'Cano baixo com palmilha confort.', 'Masculino', 349.00, '[\"Preto\",\"Branco\"]', 'img/products/f673a27d48e8e4dba403d7002214d0e6.jpg', '', 2, 4),
(13, 'Tênis New Balance 5740', 'Plataforma interna alta e cano médio.', 'Feminino', 899.00, '[\"Colorido\"]', 'img/products/da3f4aae39d21980753abda3d77bdbe8.png', '', 3, 5),
(14, 'Tênis Fila Recovery', 'O Tênis Fila Recovery Masculino chama a atenção pela sua beleza e conforto.', 'Feminino', 279.00, '[\"Branco\",\"Rosa\",\"Preto\"]', 'img/products/875dc671acabdebc27e0e876b702fe6e.jpg', '', 2, 6),
(15, 'Tenis Under Armour Charged Trvrs', 'Borracha para tração, que mantém contato constante com textura que invade as laterais.', 'Masculino', 299.00, '[\"Verde\",\"Laranja\",\"Branco\"]', 'img/products/cd4eeae4dc88f83d150cea973aa888c0.jpg', '', 2, 7),
(16, 'Tênis New Balance X70', 'Uma mistura de estilo moderno e retrô e foi inspirado no design dos anos 70.', 'Masculino', 329.00, '[\"Azul\",\"Branco\",\"Cinza\"]', 'img/products/f148424b88a3514fcc8e5f83b65059f2.png', '', 3, 5),
(17, 'Tênis New Balance 520', 'Peso leve e com excelente custo-benefício.', 'Feminino', 379.00, '[\"Rosa\",\"Branco\"]', 'img/products/be3c70f68c1a3d2b38329254ddfa8ae9.png', '', 2, 5),
(18, 'Tênis Adidas Harden Stepback 2 ', 'Com um design incrível, esse tênis de basquete é confeccionado com material macio e flexível.', 'Masculino', 479.00, '[\"Preto\",\"Colorido\"]', 'img/products/b755714611016e447c820128e759f2d6.jpg', '', 4, 3),
(19, 'Tênis Nike Kyrie Flytrap IV', 'Design exclusivo e inovador, o calçado traz cabedal macio e respirável .', 'Masculino', 499.00, '[\"Preto\",\"Dourado\"]', 'img/products/d61a7f0395a7359641956499ea82a8b8.jpg', '', 4, 2),
(20, 'Tênis Nike LeBron 18 Low', 'Demanda uma estrutura leve, mas forte, para ajudar a aproveitar e direcionar sua força.', 'Unissex', 1099.00, '[\"Preto\",\"Branco\",\"Colorido\"]', 'img/products/868d6226660f3965c9e097d2b5249a2c.jpg', '', 4, 2),
(21, 'Tênis Nike Cosmic Unity', 'Feito com pelo menos 25% de material reciclado por peso.', 'Unissex', 1099.00, '[\"Preto\",\"Branco\"]', 'img/products/563eee64f4e8dc906918cfa98e563de0.jpg', '', 4, 2),
(22, 'Chuteira Nike Phantom GT Academy', 'Um padrão em relevo em toda a chuteira ajuda a criar rotação ideal.', 'Unissex', 599.00, '[\"Branco\",\"Rosa\",\"Preto\"]', 'img/products/366d1975f77488fb056794a20b59a148.jpg', '', 5, 2),
(23, 'CHUTEIRA PREDATOR FREAK.3 CAMPO', 'Tamanho real do Homem. Para as Mulheres, recomendamos comprar o tamanho menor.', 'Unissex', 399.00, '[\"Preto\",\"Azul\",\"Rosa\"]', 'img/products/fae94a8e719aff2ca60a2de41e1cb829.jpg', '', 5, 3),
(24, 'Chuteira Nike Mercurial Superfly 8 Pro', 'Um colarinho elástico proporciona suporte extra e a placa inovadora oferece responsividade.', 'Unissex', 799.00, '[\"Vermelho\",\"Colorido\"]', 'img/products/406b46f1f486eb919c5419a5ef23e6bb.jpg', '', 5, 2),
(25, 'Chuteira Nike Mercurial Vapor 14 Academy', 'Otimiza sua velocidade com travas.', 'Unissex', 499.00, '[\"Branco\",\"Verde\",\"Preto\"]', 'img/products/2789d69af93e29aa312fdfbea14b4a74.jpg', '', 5, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbbrand`
--
ALTER TABLE `tbbrand`
  ADD PRIMARY KEY (`_id`);

--
-- Índices para tabela `tbcategory`
--
ALTER TABLE `tbcategory`
  ADD PRIMARY KEY (`_id`);

--
-- Índices para tabela `tbshoe`
--
ALTER TABLE `tbshoe`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `idCategory` (`idCategory`),
  ADD KEY `idBrand` (`idBrand`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbbrand`
--
ALTER TABLE `tbbrand`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbcategory`
--
ALTER TABLE `tbcategory`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbshoe`
--
ALTER TABLE `tbshoe`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbshoe`
--
ALTER TABLE `tbshoe`
  ADD CONSTRAINT `tbshoe_ibfk_3` FOREIGN KEY (`idCategory`) REFERENCES `tbcategory` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbshoe_ibfk_4` FOREIGN KEY (`idBrand`) REFERENCES `tbbrand` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
