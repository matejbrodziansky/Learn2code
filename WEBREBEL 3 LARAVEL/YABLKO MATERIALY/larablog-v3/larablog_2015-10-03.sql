# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.42)
# Database: larablog
# Generation Time: 2015-10-03 11:37:11 +0000
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
	('2015_09_20_153330_create_post_tag_pivot_table',1),
	('2015_10_02_132445_add_index_to_posts_table',2);

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
	(1,5),
	(5,2),
	(5,4),
	(6,4),
	(6,5),
	(10,3),
	(11,4),
	(11,5);

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
	(2,3,'Ego Tripping At The Gates Of Hell','I was waiting on a moment\nBut the moment never came\nAll the billion other moments\nWere just slipping all away\n(I must have been tripping) Were just slipping all away\n(Just ego tripping)\n\nI was wanting you to love me\nBut your love, it never came\nAll the other love around me\nWas just wasting all away\n(I must have been tripping) Was just wasting all away\n(Just ego tripping) Was just wasting all away\n(Must have been trip—)\n\nI was waiting on a moment\nBut the moment never came\nBut the moment never came\n\n(Must have been tripping) But the moment never came\n(Just ego tripping) But the moment never came\n\nhttp://genius.com/The-flaming-lips-ego-tripping-at-the-gates-of-hell-lyrics','ego-tripping-at-the-gates-of-hell','2015-09-30 10:52:32','2015-09-30 10:52:32'),
	(5,3,'The Prince and the Pauper','In the ancient city of London, on a certain autumn day in the second quarter of the sixteenth century, a boy was born to a poor family of the name of Canty, who did not want him. On the same day another English child was born to a rich family of the name of Tudor, who did want him. All England wanted him too. England had so longed for him, and hoped for him, and prayed God for him, that, now that he was really come, the people went nearly mad for joy. Mere acquaintances hugged and kissed each other and cried. Everybody took a holiday, and high and low, rich and poor, feasted and danced and sang, and got very mellow; and they kept this up for days and nights together.\r\n\r\nBy day, London was a sight to see, with gay banners waving from every balcony and housetop, and splendid pageants marching along. By night, it was again a sight to see, with its great bonfires at every corner, and its troops of revellers making merry around them. There was no talk in all England but of the new baby, Edward Tudor, Prince of Wales, who lay lapped in silks and satins, unconscious of all this fuss, and not knowing that great lords and ladies were tending him and watching over him—and not caring, either.  But there was no talk about the other baby, Tom Canty, lapped in his poor rags, except among the family of paupers whom he had just come to trouble with his presence.\r\n\r\nLet us skip a number of years.\r\n\r\nLondon was fifteen hundred years old, and was a great town—for that day. It had a hundred thousand inhabitants—some think double as many.  The streets were very narrow, and crooked, and dirty, especially in the part where Tom Canty lived, which was not far from London Bridge.  The houses were of wood, with the second story projecting over the first, and the third sticking its elbows out beyond the second.  The higher the houses grew, the broader they grew.  They were skeletons of strong criss-cross beams, with solid material between, coated with plaster.  The beams were painted red or blue or black, according to the owner\'s taste, and this gave the houses a very picturesque look.  The windows were small, glazed with little diamond-shaped panes, and they opened outward, on hinges, like doors.\r\n\r\nThe house which Tom\'s father lived in was up a foul little pocket called Offal Court, out of Pudding Lane.  It was small, decayed, and rickety, but it was packed full of wretchedly poor families. Canty\'s tribe occupied a room on the third floor.  The mother and father had a sort of bedstead in the corner; but Tom, his grandmother, and his two sisters, Bet and Nan, were not restricted—they had all the floor to themselves, and might sleep where they chose.  There were the remains of a blanket or two, and some bundles of ancient and dirty straw, but these could not rightly be called beds, for they were not organised; they were kicked into a general pile, mornings, and selections made from the mass at night, for service.','the-prince-and-the-pauper','2015-10-02 11:45:14','2015-10-02 13:47:36'),
	(6,3,'Utwórz kod źródłowy','Powstańcze natarcia na lotnisko bielańskie – nieudana próba opanowania lotniska bielańskiego w Warszawie, podjęta przez żołnierzy Armii Krajowej w pierwszych dniach powstania warszawskiego 1944 roku.\r\n\r\nW powstańczych planach przywiązywano dużą wagę do zdobycia lotniska na Bielanach. Zadanie to mieli wykonać żołnierze VIII Rejonu „Łęgów” Obwodu VII „Obroża”, wsparci przez część sił Obwodu II „Żoliborz”. Mimo znacznego wzmocnienia, jakim było przybycie do Puszczy Kampinoskiej blisko 900 żołnierzy Zgrupowania Stołpecko-Nalibockiego AK, jednostki kampinoskie i żoliborskie były jednak zbyt słabo uzbrojone i nieliczne, aby zdobyć silnie umocnione lotnisko oraz sąsiednie niemieckie punkty oporu. Pierwszy atak, przeprowadzony 1 sierpnia 1944 w godzinie „W”, miał charakter wyłącznie demonstracyjny. Drugi, rozpoczęty wczesnym rankiem 2 sierpnia, został po wielogodzinnej walce odparty z dużymi stratami po stronie polskiej.\r\n\r\nW wyniku tego niepowodzenia oddziały kampinoskie aż do połowy sierpnia 1944 pozostawały niezdolne do prowadzenia poważniejszych działań ofensywnych. Jednocześnie wkrótce po odparciu polskich ataków Niemcy definitywnie zrezygnowali z użytkowania lotniska.','utworz-kod-zrodlowy','2015-10-02 12:30:10','2015-10-02 13:09:58'),
	(10,1,'Notes from the Underground','I am a sick man.... I am a spiteful man. I am an unattractive man. I believe my liver is diseased. However, I know nothing at all about my disease, and do not know for certain what ails me. I don\'t consult a doctor for it, and never have, though I have a respect for medicine and doctors. Besides, I am extremely superstitious, sufficiently so to respect medicine, anyway (I am well-educated enough not to be superstitious, but I am superstitious). No, I refuse to consult a doctor from spite. That you probably will not understand. Well, I understand it, though. Of course, I can\'t explain who it is precisely that I am mortifying in this case by my spite: I am perfectly well aware that I cannot \"pay out\" the doctors by not consulting them; I know better than anyone that by all this I am only injuring myself and no one else. But still, if I don\'t consult a doctor it is from spite. My liver is bad, well--let it get worse!\r\n\r\nI have been going on like that for a long time--twenty years. Now I am forty. I used to be in the government service, but am no longer. I was a spiteful official. I was rude and took pleasure in being so. I did not take bribes, you see, so I was bound to find a recompense in that, at least. (A poor jest, but I will not scratch it out. I wrote it thinking it would sound very witty; but now that I have seen myself that I only wanted to show off in a despicable way, I will not scratch it out on purpose!)\r\n\r\nWhen petitioners used to come for information to the table at which I sat, I used to grind my teeth at them, and felt intense enjoyment when I succeeded in making anybody unhappy. I almost did succeed. For the most part they were all timid people--of course, they were petitioners. But of the uppish ones there was one officer in particular I could not endure. He simply would not be humble, and clanked his sword in a disgusting way. I carried on a feud with him for eighteen months over that sword. At last I got the better of him. He left off clanking it. That happened in my youth, though.','notes-from-the-underground','2015-10-02 13:32:34','2015-10-02 13:32:34'),
	(11,1,'A nechat zadní dvířka','Tak jenom pojistit a nechat zadní dvířka,\r\nhrát dvojí, trojí hru a o čtvrtou se snažit,\r\nbambitku odjistit a dožíti se zítřka,\r\nvždy státi na výhru a zmrtvýchvstání zažít.\r\n\r\nToť láska nevlídná jak slina na šátku,\r\ndoba je neklidná a touha na splátku,\r\ntoť láska pod knutou a smrt je poslem lásky,\r\nsmrt s dýkou vetknutou do knížky pod obrázky.\r\n\r\nS úsměvem mudrce si vlastní kapsu plnit,\r\ndát ruku na srdce a jako had se vlnit,\r\nrozmlouvat o právu a bezprávím se živit,\r\nnadávat na slávu a pro slávu se křivit.\r\n\r\nToť láska nevlídná jak slina na šátku,\r\ndoba je neklidná a touha na splátku,\r\ntoť láska pod knutou a smrt je poslem lásky,\r\nsmrt s dýkou vetknutou do knížky pod obrázky.\r\n\r\nNemíti skrupulí, když o náš prospěch běží,\r\nmít na rtech vyznání a pod jazykem hada,\r\nbýt silným po vůli a říkat, že nám leží\r\nna srdci poznání, a bát se říci zrada!\r\n\r\nToť láska nevlídná jak slina na šátku,\r\ndoba je neklidná a touha na splátku,\r\ntoť láska pod knutou a smrt je poslem lásky,\r\nsmrt s dýkou vetknutou do knížky pod obrázky,\r\nsmrt s dýkou vetknutou do knížky pod obrázky...','a-nechat-zadni-dvirka','2015-10-02 13:33:32','2015-10-02 13:33:32');

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
	(1,'brm','brm@brm.sk','$2y$10$vCIDdKP6eMZKzP33h.hTfu3UvGPTze36AlGqT13ZU4lxaAF2aAjT.','18yT8m0VNd9sk1wwfiFnaLGvmrF7QXnmsToAhwA9vx7U9wj2XpttSK4bfLJG','2015-09-28 10:53:21','2015-10-02 13:40:52'),
	(2,'email','hello@there.hu','$2y$10$4zNr6o30FQJSJ6N.rajtreTqIXGcYTIDld9OrSEaXMCBkisqA1vli',NULL,'2015-09-28 12:56:18','2015-09-30 10:03:50'),
	(3,'yablko','yablko@brm.sk','$2y$10$d9rGXrD/wXEN2Xn/Ajd5iuIBsQweb23XywEzUHkA0KwM3MLGMGWIe','tDYgx3vvLwRtX9Nh0uMc3DqTRm4vsUPuEwYMNMmWd6sSK0TZdqEGvUCQnxWa','2015-09-30 09:31:11','2015-10-02 13:30:39'),
	(5,'i have a name','i@have.name','',NULL,'2015-09-30 10:18:01','2015-09-30 10:18:01');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
