SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `shoes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `shoes`;

DROP TABLE IF EXISTS `tbbrand`;
CREATE TABLE IF NOT EXISTS `tbbrand` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `nameBrand` varchar(100) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbbrand` (`_id`, `nameBrand`) VALUES
(2, 'Nike'),
(3, 'Adidas'),
(4, 'Puma'),
(5, 'newbalance'),
(6, 'Fila'),
(7, 'Under Armour');

DROP TABLE IF EXISTS `tbcategory`;
CREATE TABLE IF NOT EXISTS `tbcategory` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `nameCategory` varchar(100) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbcategory` (`_id`, `nameCategory`) VALUES
(2, 'Corrida'),
(3, 'Casual'),
(4, 'Basquete'),
(5, 'Futebol(Chuteira)');

DROP TABLE IF EXISTS `tbshoe`;
CREATE TABLE IF NOT EXISTS `tbshoe` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `nameShoe` varchar(100) NOT NULL,
  `descriptionShoe` varchar(300) NOT NULL,
  `genderShoe` varchar(50) NOT NULL,
  `priceShoe` double(6,2) NOT NULL,
  `colorsShoe` varchar(50) NOT NULL,
  `dirImageShoe` varchar(100) NOT NULL,
  `nameImageShoe` varchar(100) NOT NULL,
  `idCategory` int(11) DEFAULT NULL,
  `idBrand` int(11) DEFAULT NULL,
  PRIMARY KEY (`_id`),
  KEY `idCategory` (`idCategory`),
  KEY `idBrand` (`idBrand`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbshoe` (`_id`, `nameShoe`, `descriptionShoe`, `genderShoe`, `priceShoe`, `colorsShoe`, `dirImageShoe`, `nameImageShoe`, `idCategory`, `idBrand`) VALUES
(2, 'Tênis Nike Air Huarache', 'Com hastes que vão de uma lateral a outra, trazendo conforto total.', 'Masculino', 899.00, '[\"Branco\",\"Rosa\",\"Roxo\"]', 'img/products/352d48830c1ee5f2026fc1b297927839.jpg', '', 3, 2),
(3, 'Tênis Nike Air Force 1', 'Sola e acabamentos laterais reforçados.', 'Unissex', 699.00, '[\"Branco\"]', 'img/products/c82af8aa08febb8df0ebfb407a2c8f9a.jpg', '', 3, 2),
(4, 'Tênis Nike ZoomX Vaporfly', 'Conforto total para quem gosta de correr ou malhar.', 'Masculino', 1699.00, '[\"Azul\",\"Branco\"]', 'img/products/5ea793dcd0cfbe2fe25de4a657d22699.jpg', '', 2, 2),
(5, 'Tênis Nike Air Max 97 EOI', 'Estilo único para quem gosta de conforto e chamar a atenção.', 'Masculino', 899.00, '[\"Cinza\",\"Branco\",\"Preto\",\"Colorido\"]', 'img/products/7e2d4c3ad33f115e422c8cc4eca472b4.jpg', '', 3, 2),
(6, 'Tênis Nike Air Max Genome Masculino', 'Branco e Preto básico e confortável.', 'Unissex', 999.00, '[\"Branco\",\"Preto\"]', 'img/products/b1158423d48984d20923391bc7550d2f.jpg', '', 2, 2),
(7, 'TÊNIS OZWEEGO', 'O famoso chamativo básico.', 'Unissex', 599.00, '[\"Bege\"]', 'img/products/079ec2e49f4954c8702698926bbb7636.jpg', '', 3, 2),
(8, 'TÊNIS NMD_R1', 'Conforto a cima de tudo, ótimo para manter o físico.', 'Unissex', 699.00, '[\"Preto\"]', 'img/products/2e51a0e9cfc74501398267738e31566c.jpg', '', 3, 3),
(9, 'TÊNIS OZWEEGO TR ', 'Com hastes refletivas a exposição de luz/flash.', 'Feminino', 479.00, '[\"Preto\",\"Cinza\"]', 'img/products/ce3b43e9a81a9c8085129add31c52a80.jpg', '', 3, 3),
(10, 'TÊNIS CAMPUS', 'Cano baixo e tecido de camurça.', 'Unissex', 269.00, '[\"Azul\",\"Branco\"]', 'img/products/524eca9984f239e4f5182661e628b3b4.jpg', '', 3, 3),
(11, 'TÊNIS RS-2K SOFT METAL', 'Plataforma interna alta e confortável.', 'Feminino', 299.00, '[\"Bege\",\"Branco\"]', 'img/products/5cb1c192cfd0d7ae88dffa22717813b1.jpg', '', 3, 4),
(12, 'TÊNIS SUEDE CLASSIC XXI', 'Cano baixo com palmilha confort.', 'Masculino', 349.00, '[\"Preto\",\"Branco\"]', 'img/products/d7dd0dc25611d37ff3557d998b890d16.jpg', '', 2, 4),
(13, 'Tênis New Balance 5740', 'Plataforma interna alta e cano médio.', 'Feminino', 899.00, '[\"Colorido\"]', 'img/products/576eb8c8c573f1437025fd33160cac9a.png', '', 3, 5),
(14, 'Tênis Fila Recovery', 'O Tênis Fila Recovery Masculino chama a atenção pela sua beleza e conforto.', 'Feminino', 279.00, '[\"Branco\",\"Rosa\",\"Preto\"]', 'img/products/ac2576d08362635f45ef312afaa9bed5.jpg', '', 2, 6),
(15, 'Tenis Under Armour Charged Trvrs', 'Borracha para tração, que mantém contato constante com textura que invade as laterais.', 'Masculino', 299.00, '[\"Verde\",\"Laranja\",\"Branco\"]', 'img/products/81b8137ddb1ab8b64f0c5f0141b97eb9.jpg', '', 2, 7),
(16, 'Tênis New Balance X70', 'Uma mistura de estilo moderno e retrô e foi inspirado no design dos anos 70.', 'Masculino', 329.00, '[\"Azul\",\"Branco\",\"Cinza\"]', 'img/products/14c7fa0ae3d306ef95a0df50ba728bcb.png', '', 3, 5),
(17, 'Tênis New Balance 520', 'Peso leve e com excelente custo-benefício.', 'Feminino', 379.00, '[\"Rosa\",\"Branco\"]', 'img/products/c98fa99f343828cd520fc61dd67e3345.png', '', 2, 5),
(18, 'Tênis Adidas Harden Stepback 2 ', 'Com um design incrível, esse tênis de basquete é confeccionado com material macio e flexível.', 'Masculino', 479.00, '[\"Preto\",\"Colorido\"]', 'img/products/45f4255159f33cf24e81ffac5287c8df.jpg', '', 4, 3),
(19, 'Tênis Nike Kyrie Flytrap IV', 'Design exclusivo e inovador, o calçado traz cabedal macio e respirável .', 'Masculino', 499.00, '[\"Preto\",\"Dourado\"]', 'img/products/2697b232e5fac29ac4687771d3968058.jpg', '', 4, 2),
(20, 'Tênis Nike LeBron 18 Low', 'Demanda uma estrutura leve, mas forte, para ajudar a aproveitar e direcionar sua força.', 'Unissex', 1099.00, '[\"Preto\",\"Branco\",\"Colorido\"]', 'img/products/fb70ec794e0fbba38adaf7c6c2d04722.jpg', '', 4, 2),
(21, 'Tênis Nike Cosmic Unity', 'Feito com pelo menos 25% de material reciclado por peso.', 'Unissex', 1099.00, '[\"Preto\",\"Branco\"]', 'img/products/caf8c7690b5bb8919265008e57b44acc.jpg', '', 4, 2),
(22, 'Chuteira Nike Phantom GT Academy', 'Um padrão em relevo em toda a chuteira ajuda a criar rotação ideal.', 'Unissex', 599.00, '[\"Branco\",\"Rosa\",\"Preto\"]', 'img/products/ad8e20aca2bfe746f233d4a6fde89de2.jpg', '', 5, 2),
(23, 'CHUTEIRA PREDATOR FREAK.3 CAMPO', 'Tamanho real do Homem. Para as Mulheres, recomendamos comprar o tamanho menor.', 'Unissex', 399.00, '[\"Preto\",\"Azul\",\"Rosa\"]', 'img/products/d64fbdaa15728a3fcd50f9855a747294.jpg', '', 5, 3),
(24, 'Chuteira Nike Mercurial Superfly 8 Pro', 'Um colarinho elástico proporciona suporte extra e a placa inovadora oferece responsividade.', 'Unissex', 799.00, '[\"Vermelho\",\"Colorido\"]', 'img/products/4b4facb9d4f198862ec49811343e286e.jpg', '', 5, 2),
(25, 'Chuteira Nike Mercurial Vapor 14 Academy', 'Otimiza sua velocidade com travas boas.', 'Unissex', 499.00, '[\"Branco\",\"Verde\",\"Preto\"]', 'img/products/500308364ac122fc9dac556396437923.jpg', '', 5, 2);


ALTER TABLE `tbshoe`
  ADD CONSTRAINT `tbshoe_ibfk_3` FOREIGN KEY (`idCategory`) REFERENCES `tbcategory` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbshoe_ibfk_4` FOREIGN KEY (`idBrand`) REFERENCES `tbbrand` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
