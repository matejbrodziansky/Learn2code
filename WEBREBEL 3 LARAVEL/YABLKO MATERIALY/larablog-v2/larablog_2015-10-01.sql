# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.42)
# Database: larablog
# Generation Time: 2015-10-01 15:56:42 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_10_12_000000_create_users_table',1),
	('2014_10_12_100000_create_password_resets_table',1),
	('2015_09_20_153237_create_tags_table',1),
	('2015_09_20_153316_create_posts_table',1),
	('2015_09_20_153330_create_post_tag_pivot_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table post_tag
# ------------------------------------------------------------

DROP TABLE IF EXISTS `post_tag`;

CREATE TABLE `post_tag` (
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  KEY `post_tag_post_id_index` (`post_id`),
  KEY `post_tag_tag_id_index` (`tag_id`),
  CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE,
  CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `post_tag` WRITE;
/*!40000 ALTER TABLE `post_tag` DISABLE KEYS */;

INSERT INTO `post_tag` (`post_id`, `tag_id`)
VALUES
	(1,1),
	(1,2),
	(2,4),
	(2,5),
	(1,5);

/*!40000 ALTER TABLE `post_tag` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `posts_slug_index` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `user_id`, `title`, `text`, `slug`, `created_at`, `updated_at`)
VALUES
	(1,1,'This is a title','Marzipan sweet roll muffin biscuit candy sugar plum. Candy canes soufflé sesame snaps muffin jelly-o jelly macaroon carrot cake. Biscuit sweet roll dragée. Sweet jujubes chupa chups chupa chups tiramisu sweet roll. Biscuit bear claw topping cake macaroon cookie tiramisu marzipan croissant. Fruitcake macaroon cake brownie oat cake dessert chocolate bar pudding biscuit.\n\nhttps://www.youtube.com/watch?v=vORsKyopHyM&index=48&list=FLa2etvvyIFz8mULUSeACJnA\n\nPie bear claw cheesecake wafer pie jujubes dessert. Jelly-o lollipop dessert cake brownie jelly-o muffin tiramisu oat cake. Marshmallow carrot cake jujubes marshmallow chocolate cake sesame snaps muffin. Muffin icing marshmallow lemon drops dessert danish cake halvah muffin. Icing chocolate cake. Pudding pie macaroon fruitcake bear claw cheesecake pudding soufflé. Pie donut carrot cake cupcake muffin.\n\nhttps://youtu.be/LKxWl4PcBY4\n\nPudding tootsie roll wafer candy croissant cake dessert. Jelly-o croissant ice cream sesame snaps bear claw tiramisu. Caramels marzipan sugar plum sweet roll donut dragée. Fruitcake cupcake cake.','this-is-a-title','2015-09-30 10:39:42','2015-09-30 10:39:42'),
	(2,3,'Ego Tripping At The Gates Of Hell','I was waiting on a moment\nBut the moment never came\nAll the billion other moments\nWere just slipping all away\n(I must have been tripping) Were just slipping all away\n(Just ego tripping)\n\nI was wanting you to love me\nBut your love, it never came\nAll the other love around me\nWas just wasting all away\n(I must have been tripping) Was just wasting all away\n(Just ego tripping) Was just wasting all away\n(Must have been trip—)\n\nI was waiting on a moment\nBut the moment never came\nBut the moment never came\n\n(Must have been tripping) But the moment never came\n(Just ego tripping) But the moment never came\n\nhttp://genius.com/The-flaming-lips-ego-tripping-at-the-gates-of-hell-lyrics','ego-tripping-at-the-gates-of-hell','2015-09-30 10:52:32','2015-09-30 10:52:32');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;

INSERT INTO `tags` (`id`, `tag`)
VALUES
	(1,'trippin'),
	(2,'balls'),
	(3,'doom'),
	(4,'comedy'),
	(5,'bang bang');

/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'brm','brm@brm.sk','$2y$10$vCIDdKP6eMZKzP33h.hTfu3UvGPTze36AlGqT13ZU4lxaAF2aAjT.','bM83oJKanx3AP6VV4BTjUlhuylbjd0As7Gz8QggJTTW9z9zYQSptSDEcAViX','2015-09-28 10:53:21','2015-09-30 10:44:32'),
	(2,'email','hello@there.hu','$2y$10$4zNr6o30FQJSJ6N.rajtreTqIXGcYTIDld9OrSEaXMCBkisqA1vli',NULL,'2015-09-28 12:56:18','2015-09-30 10:03:50'),
	(3,'yablko','yablko@brm.sk','$2y$10$d9rGXrD/wXEN2Xn/Ajd5iuIBsQweb23XywEzUHkA0KwM3MLGMGWIe','s3ue3lSXnRSl25JUyuSi1miamjqVdpTM3lOqeeR750GBEOS3GeveobLgirlG','2015-09-30 09:31:11','2015-09-30 09:40:22'),
	(5,'i have a name','i@have.name','',NULL,'2015-09-30 10:18:01','2015-09-30 10:18:01');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
