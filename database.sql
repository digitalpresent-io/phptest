/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS = 0 */;
/*!40101 SET @OLD_SQL_MODE = @@SQL_MODE, SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES = @@SQL_NOTES, SQL_NOTES = 0 */;


# Dump of table cart
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart`
(
    `id`         int(11) unsigned NOT NULL AUTO_INCREMENT,
    `product_id` int(10) unsigned NOT NULL,
    `quantity`   int(11) DEFAULT 1,
    PRIMARY KEY (`id`),
    KEY `product_id` (`product_id`),
    CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart`
    DISABLE KEYS */;

INSERT INTO `cart` (`id`, `product_id`, `quantity`)
VALUES (1, 1, 1);

/*!40000 ALTER TABLE `cart`
    ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products`
(
    `id`    int(11) unsigned NOT NULL AUTO_INCREMENT,
    `name`  varchar(255) DEFAULT NULL,
    `price` int(255)     DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products`
    DISABLE KEYS */;

INSERT INTO `products` (`id`, `name`, `price`)
VALUES (1, 'TV', 457),
       (2, 'Microwave', 47),
       (3, 'Oven', 235),
       (4, 'Dishwasher', 523),
       (5, 'Refridgirator', 1000),
       (6, 'Washing Mashine', 346);

/*!40000 ALTER TABLE `products`
    ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES = @OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE = @OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
