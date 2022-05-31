-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.29 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para typejuggling
CREATE DATABASE IF NOT EXISTS `typejuggling` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `typejuggling`;

-- Copiando estrutura para tabela typejuggling.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela typejuggling.admin: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
	(1, 'admin', 'admin123', 'marcus@admin.com'),
	(2, 'marcus', 'marcus123', 'marcus@marcus.com');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Copiando estrutura para tabela typejuggling.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `data_cad` datetime DEFAULT NULL,
  `ativo` char(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela typejuggling.categorias: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id_categoria`, `id_usuario`, `nome`, `data_cad`, `ativo`) VALUES
	(1, 1, 'Noticias Diversas', '2022-05-30 11:50:34', '1'),
	(2, 1, 'Noticias Politicas', '2022-05-30 11:50:34', '1'),
	(3, 1, 'Artigos', '2022-05-30 11:50:34', '1'),
	(4, 1, 'Pesquisas', '2022-05-30 11:50:34', '1');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Copiando estrutura para tabela typejuggling.noticias
CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int NOT NULL AUTO_INCREMENT,
  `id_categoria` int DEFAULT NULL,
  `id_usuario` int DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` varchar(1000) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `data_cad` datetime DEFAULT NULL,
  `destaque` char(2) NOT NULL DEFAULT '0',
  `ativo` char(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela typejuggling.noticias: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` (`id_noticia`, `id_categoria`, `id_usuario`, `titulo`, `descricao`, `foto`, `data_cad`, `destaque`, `ativo`) VALUES
	(1, 2, 1, 'Noticia Teste', '\r\naaaaaaaaaaaaassssssssssssssssa\r\n\r\n', NULL, '2022-05-30 11:50:34', '0', '1'),
	(2, 2, 1, 'Noticia Teste', '<p>aaaaaaaaaaaaassssssssssssssssa</p>', '/noticias/2/670cc3f1b91814aae2b3d82d9c85bdf3.php', '2022-05-30 11:50:34', '0', '1');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
