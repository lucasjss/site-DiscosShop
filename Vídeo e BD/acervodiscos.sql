/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `autoria` (
  `nomeAutoria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `discos` (
  `nome` varchar(255) DEFAULT NULL,
  `autoria` varchar(255) DEFAULT NULL,
  `genero` varchar(255) DEFAULT NULL,
  `lancamento` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `autoria` (`nomeAutoria`) VALUES
('Kanye West');
INSERT INTO `autoria` (`nomeAutoria`) VALUES
('Black Alien');
INSERT INTO `autoria` (`nomeAutoria`) VALUES
('Metro Boomin');
INSERT INTO `autoria` (`nomeAutoria`) VALUES
('Jorge Ben Jor'),
('The Doors');

INSERT INTO `discos` (`nome`, `autoria`, `genero`, `lancamento`) VALUES
('A Tabua De Esmeralda', 'Jorge Ben Jor', 'Samba Rock', '1974');
INSERT INTO `discos` (`nome`, `autoria`, `genero`, `lancamento`) VALUES
('The Life Of Pablo', 'Kanye West', 'Trap', '2016');
INSERT INTO `discos` (`nome`, `autoria`, `genero`, `lancamento`) VALUES
('Heroes & Villains', 'Metro Boomin', 'Trap', '2022');
INSERT INTO `discos` (`nome`, `autoria`, `genero`, `lancamento`) VALUES
('Abaixo de Zero: Hello Hell', 'Black Alien', 'Rap', '2019'),
('Donda', 'Kanye West', 'Rap', '2021'),
('Morrison Hotel', 'The Doors', 'Rock', '1979');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;