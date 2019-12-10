/*
SQLyog Enterprise v10.42 
MySQL - 8.0.12 : Database - cpb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `articles` */

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_ro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ro` text COLLATE utf8mb4_unicode_ci,
  `text_ru` text COLLATE utf8mb4_unicode_ci,
  `text_en` text COLLATE utf8mb4_unicode_ci,
  `meta_title_ro` text COLLATE utf8mb4_unicode_ci,
  `meta_title_ru` text COLLATE utf8mb4_unicode_ci,
  `meta_title_en` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords_ro` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords_ru` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords_en` text COLLATE utf8mb4_unicode_ci,
  `meta_description_ro` text COLLATE utf8mb4_unicode_ci,
  `meta_description_ru` text COLLATE utf8mb4_unicode_ci,
  `meta_description_en` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `articles` */

insert  into `articles`(`id`,`name_ro`,`name_ru`,`name_en`,`text_ro`,`text_ru`,`text_en`,`meta_title_ro`,`meta_title_ru`,`meta_title_en`,`meta_keywords_ro`,`meta_keywords_ru`,`meta_keywords_en`,`meta_description_ro`,`meta_description_ru`,`meta_description_en`,`photo`,`created_at`,`updated_at`) values (1,'Anunt!','Объявление!','Anunt!','<p>SA &bdquo;Franzeluţa&rdquo; anunţă concurs pentru achiziţionarea: Zahar cristal, Ouă de gaină, Unt, Grasime de cofetărie, Ulei vegetal, Drojdii comprimate, Visina in suc propriu, Ulei de palmier, Margarina p/u foietaj, Glazură de cofetărie, Miez de nucă, Majiun de mere, Cutii gofrate in asortiment, Stafide, Plantol, Prune uscate, Cacao praf, Margarina 82%, Lapte condensat caramelizat, Ulei de palmier 336, Pungi CPP in asortiment, Arahide, Frişcă vegetală, Amelioratoare in asortiment, Glucoză de porumb, Seminţe de mac, Miez de alune, Lapte praf degrasat, Premix in asortiment, Halva, Caşcaval, Carat crema cu alune, Albuş de ouă praf pasteurizat, Smantănă fermentată, Agar-Agar, Sare iodată, Drojdii active, Praf de ou, Ambalaj din plastic &icirc;n asortiment, &Icirc;mpluturi &icirc;n asortiment, Vanilin regular, Concentrat de cvas, Brănză de vacă, Hărtie pergament, Clipse pentru ambalat, Sorbitol, Etichete &icirc;n asortiment, Gluten de grău, Hamei, Cremă de ciocolată, Saci de hărtie, Fructe zaharizite, Caise uscate, Fulgi de ovăz, Făină de grău, Făină de secară, Făină de secară cernută, Făină de ovaz, Făină de graham, Faină intergrală, Scorţişoară, Rumeguş de cocos, Cutii gofrate pentru torte, Geluri, Miez de floarea soarelui, Premixuri &icirc;n asortiment, Alcool etilic alimentar, Arome, Amidon, Dropsuri de ciocolată, Fructe Banane, Forme de hărtie, Bicarbonat de sodiu, Antioxidant &icirc;n asortiment, Licitină, Cafea naturală, Etichete autodezive, Maia lichidă, Nuci muscat, Dropsuri de ciocolată, Ulei de portocale, Zahăr-pudră termostabil, Lămie, Acid citric, Sorbat de potasiu, Seminţe de in, Cafea macinată, Spanac uscat, Zahar termostabil, Vişină uscată, Ceapă uscată, Ulei de cocos, Fructe portocale, Condimente &icirc;n asortement, Jelatină.</p>\r\n<p>&nbsp;</p>\r\n<p>Doritorii de a participa la concurs trebuie să ridice caietul de sarcini din laboratorul central al SA &bdquo;Franzeluţa&rdquo; şi să prezintă următoarele documente:</p>\r\n<p>&nbsp;</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; 1.Oferta comercială.</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; 2.Extrasul din registrul de stat al persoanelor juridice.</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; 3.Certificatul de &icirc;nregistrare.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp; Setul de documente este necesar să fie prezentat pe adresa: mun. Chişinău, str. Sarmizegetusa, 30, MD-2032.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Detalii la telefon: 022 52 71 83</p>\r\n<p>&nbsp;</p>\r\n<p>Şef serviciu achiziţie&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Victor Matcov</p>\r\n<p>&nbsp; &nbsp;07.11.2019</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>','<p>АО &bdquo;Franzeluţa&rdquo; объявляет конкурс на приобретение: Хрустальный сахар, куриные яйца, масло, кондитерский жир, растительное масло, сжатые дрожжи, вишня в собственном соку, пальмовое масло, маргарин для слоеного теста, глазурь кондитерских изделий, ядро грецкого ореха, яблочное Majiun, коробки гофрированные в ассортименте, изюм, Плантол, чернослив, какао-порошок, маргарин 82%, карамелизованное сгущенное молоко, пальмовое масло 336, пакеты CPP в ассортименте, арахис, растительные взбитые сливки, улучшители в ассортименте ассорти, кукурузная Глюкоза, семена мака, фундук, деградированное сухое молоко, премикс в ассортименте, Халва, сыр, Карат крем с фундуком, яичный белок пастеризованный порошок, сметана ферментированная, агар-агар, йодированная соль, активные дрожжи, яичный порошок, упаковка из пластика в ассортименте, переплетения в ассортименте, ванилин обычный, концентрат кваса, Коровий брынза, пергаментная Хартия, клипсы для упаковки, сорбитол, этикетки в ассортименте, клейковина пшеничная, Хмель, шоколадный крем, сумки из тыквы, засахаренные фрукты, курага, овсяная мука, пшеничная мука, Хлебная Мука, карат, карат, карат, карат, карат, карат, карат, карат, карат, карат, карат, ржаная мука, просеянная ржаная мука, овсяная мука, мука Грэма, Мука Межгральная, корица, опилки кокосовые, коробки гофрированные для тортов, гели, Семена подсолнечника, премиксы в ассортименте, этиловый пищевой спирт, ароматизаторы, крахмал, шоколадные капельки, банановые фрукты, формы тыквы, бикарбонат натрия, антиоксидант в ассортименте, нежирный, натуральный кофе, самоклеящиеся этикетки, жидкая закваска, мускатные орехи, шоколадные капельки, апельсиновое масло, термостойкий сахарный порошок, лимон, лимонная кислота, сорбат калия, льняное семя, молотый кофе, сухой шпинат, термостатический сахар, сушеный вишня, сушеный лук, кокосовое масло, апельсиновые фрукты, специи в ассортименте, желатин.</p>\r\n<p>&nbsp;</p>\r\n<p>Желающие принять участие в конкурсе должны забрать спецификации из Центральной лаборатории АО \"Франзелуца\" и представить следующие документы:</p>\r\n<p>&nbsp;</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; 1.Коммерческое предложение.</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; 2.Выписка из государственного реестра юридических лиц.</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; 3.Свидетельство о регистрации.</p>\r\n<p>&nbsp;</p>\r\n<p>Набор документов необходимо представить по адресу: мун. Кишинев, ул. Штефан чел Маре. Sarmizegetusa, 30, MD-2032.</p>\r\n<p>&nbsp;</p>\r\n<p>Подробности по телефону: 022 52 71 83</p>\r\n<p>&nbsp;</p>\r\n<p>Начальник службы закупок&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Виктор Матков</p>\r\n<p>07.11.2019</p>','<p>SA &bdquo;Franzeluţa&rdquo; anunţă concurs pentru achiziţionarea: Zahar cristal, Ouă de gaină, Unt, Grasime de cofetărie, Ulei vegetal, Drojdii comprimate, Visina in suc propriu, Ulei de palmier, Margarina p/u foietaj, Glazură de cofetărie, Miez de nucă, Majiun de mere, Cutii gofrate in asortiment, Stafide, Plantol, Prune uscate, Cacao praf, Margarina 82%, Lapte condensat caramelizat, Ulei de palmier 336, Pungi CPP in asortiment, Arahide, Frişcă vegetală, Amelioratoare in asortiment, Glucoză de porumb, Seminţe de mac, Miez de alune, Lapte praf degrasat, Premix in asortiment, Halva, Caşcaval, Carat crema cu alune, Albuş de ouă praf pasteurizat, Smantănă fermentată, Agar-Agar, Sare iodată, Drojdii active, Praf de ou, Ambalaj din plastic &icirc;n asortiment, &Icirc;mpluturi &icirc;n asortiment, Vanilin regular, Concentrat de cvas, Brănză de vacă, Hărtie pergament, Clipse pentru ambalat, Sorbitol, Etichete &icirc;n asortiment, Gluten de grău, Hamei, Cremă de ciocolată, Saci de hărtie, Fructe zaharizite, Caise uscate, Fulgi de ovăz, Făină de grău, Făină de secară, Făină de secară cernută, Făină de ovaz, Făină de graham, Faină intergrală, Scorţişoară, Rumeguş de cocos, Cutii gofrate pentru torte, Geluri, Miez de floarea soarelui, Premixuri &icirc;n asortiment, Alcool etilic alimentar, Arome, Amidon, Dropsuri de ciocolată, Fructe Banane, Forme de hărtie, Bicarbonat de sodiu, Antioxidant &icirc;n asortiment, Licitină, Cafea naturală, Etichete autodezive, Maia lichidă, Nuci muscat, Dropsuri de ciocolată, Ulei de portocale, Zahăr-pudră termostabil, Lămie, Acid citric, Sorbat de potasiu, Seminţe de in, Cafea macinată, Spanac uscat, Zahar termostabil, Vişină uscată, Ceapă uscată, Ulei de cocos, Fructe portocale, Condimente &icirc;n asortement, Jelatină.</p>\r\n<p>&nbsp;</p>\r\n<p>Doritorii de a participa la concurs trebuie să ridice caietul de sarcini din laboratorul central al SA &bdquo;Franzeluţa&rdquo; şi să prezintă următoarele documente:</p>\r\n<p>&nbsp;</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; 1.Oferta comercială.</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; 2.Extrasul din registrul de stat al persoanelor juridice.</p>\r\n<p dir=\"ltr\">&nbsp; &nbsp; &nbsp; 3.Certificatul de &icirc;nregistrare.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp; Setul de documente este necesar să fie prezentat pe adresa: mun. Chişinău, str. Sarmizegetusa, 30, MD-2032.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Detalii la telefon: 022 52 71 83</p>\r\n<p>&nbsp;</p>\r\n<p>Şef serviciu achiziţie&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Victor Matcov</p>\r\n<p>&nbsp; &nbsp;07.11.2019</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'20191204162051.jpeg','2019-12-04 16:17:35','2019-12-09 16:46:40'),(2,'O stație din capitală – AMENAJATĂ de „Franzeluța” S.A. Uite cum arată!','Остановка в столице - благоустроенная \"Франзелуца\" А. О. посмотрите, как она выглядит!','A station from Chisinau – builded by „Franzeluța” S.A.','<p>Fideli abordării că lucrurile &icirc;n jur se pot schimba doar prin implicarea fiecăruia, administraţia \"Franzeluţa\" S.A. a decis să vină cu modesta sa contribuție, amenaj&acirc;nd o stație de așteptare a transportului public din mijloacele proprii. Deoarece aceasta e amplasată &icirc;n imediata vecinătate a Combinatului de panificaţie, la intersecţia străzilor Sarmizegetusa şi Burebista, de ea vor beneficia inclusiv angajații &icirc;ntreprinderii. Sperăm ca acţiunile noastre să fie un exemplu de urmat şi pentru alţi agenţi economici.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../uploads/29.11.19.jpg\" alt=\"\" width=\"400\" height=\"263\" /></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../uploads/29.11.19(1).jpg\" alt=\"\" width=\"400\" height=\"263\" /></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../uploads/29.11.19(2).jpg\" alt=\"\" width=\"400\" height=\"263\" /></p>','<p>Верный подходу к тому, что все вокруг может измениться только при участии каждого, администрация \"Franzeluţa\" S. A. решила скромно внести свой вклад, обустроив остановку&nbsp; общественного транспорта своими средствами. Так как она расположена в непосредственной близости от комбината хлебобулочных изделий, на пересечении улиц Сармизегетуса и Буребиста, ее получат в том числе сотрудники предприятия. Мы надеемся, что наши действия станут примером для других экономических агентов.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../uploads/29.11.19.jpg\" alt=\"\" width=\"400\" height=\"263\" /></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../uploads/29.11.19(2).jpg\" alt=\"\" width=\"400\" height=\"263\" /></p>','<p>Fideli abordării că lucrurile &icirc;n jur se pot schimba doar prin implicarea fiecăruia, administraţia \"Franzeluţa\" S.A. a decis să vină cu modesta sa contribuție, amenaj&acirc;nd o stație de așteptare a transportului public din mijloacele proprii. Deoarece aceasta e amplasată &icirc;n imediata vecinătate a Combinatului de panificaţie, la intersecţia străzilor Sarmizegetusa şi Burebista, de ea vor beneficia inclusiv angajații &icirc;ntreprinderii. Sperăm ca acţiunile noastre să fie un exemplu de urmat şi pentru alţi agenţi economici.<img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../uploads/29.11.19.jpg\" alt=\"\" width=\"400\" height=\"263\" /></p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../uploads/29.11.19(2).jpg\" alt=\"\" width=\"400\" height=\"263\" /></p>',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'20191209164305.jpeg','2019-12-04 16:23:42','2019-12-09 16:45:18');

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_ro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ro` text COLLATE utf8mb4_unicode_ci,
  `text_ru` text COLLATE utf8mb4_unicode_ci,
  `text_en` text COLLATE utf8mb4_unicode_ci,
  `meta_title_ro` text COLLATE utf8mb4_unicode_ci,
  `meta_title_ru` text COLLATE utf8mb4_unicode_ci,
  `meta_title_en` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords_ro` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords_ru` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords_en` text COLLATE utf8mb4_unicode_ci,
  `meta_description_ro` text COLLATE utf8mb4_unicode_ci,
  `meta_description_ru` text COLLATE utf8mb4_unicode_ci,
  `meta_description_en` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`id`,`name_ro`,`name_ru`,`name_en`,`text_ro`,`text_ru`,`text_en`,`meta_title_ro`,`meta_title_ru`,`meta_title_en`,`meta_keywords_ro`,`meta_keywords_ru`,`meta_keywords_en`,`meta_description_ro`,`meta_description_ru`,`meta_description_en`,`created_at`,`updated_at`,`photo`) values (1,'Produse de panificație','Хлебобулочные изделия','Bakery products',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-29 16:21:00','2019-12-05 12:55:52','20191205125552.jpeg'),(2,'Cracker','Крекеры','Crackers',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-29 16:21:15','2019-12-05 12:57:06','20191205125706.jpeg'),(4,'Biscuiți','Печенье','Biscuit',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-29 16:29:18','2019-12-05 12:57:59','20191205125759.jpeg'),(5,'Pesmeți','Сухари','Rusk',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-29 16:44:34','2019-12-05 12:59:08','20191205125908.jpeg'),(6,'Covrigei','Сушки','Bagels',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-12-05 13:00:13','2019-12-05 13:00:13','20191205130013.jpeg');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `faqs` */

DROP TABLE IF EXISTS `faqs`;

CREATE TABLE `faqs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `query_ro` text COLLATE utf8mb4_unicode_ci,
  `query_ru` text COLLATE utf8mb4_unicode_ci,
  `query_en` text COLLATE utf8mb4_unicode_ci,
  `answer_ro` text COLLATE utf8mb4_unicode_ci,
  `answer_ru` text COLLATE utf8mb4_unicode_ci,
  `answer_en` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `faqs` */

insert  into `faqs`(`id`,`query_ro`,`query_ru`,`query_en`,`answer_ro`,`answer_ru`,`answer_en`,`created_at`,`updated_at`) values (1,'Cum se produce painea de Balti?','Cum se produce painea de Balti (rus)?','Cum se produce painea de Balti (eng)?','<p>raspuns pentur Cum se produce painea de Balti (rus)? raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)? raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)? raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?&nbsp; raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)? raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)? raspuns pentur Cum se produce painea de Balti (rus)?</p>','<p>raspuns pentur Cum se produce painea de Balti (rus)? raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)? raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)? raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?&nbsp; raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)? raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)? raspuns pentur Cum se produce painea de Balti (rus)?</p>','<p>raspuns pentur Cum se produce painea de Balti (rus)? raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)? raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)? raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?&nbsp; raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)? raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)?raspuns pentur Cum se produce painea de Balti (rus)? raspuns pentur Cum se produce painea de Balti (rus)?</p>','2019-12-04 15:03:43','2019-12-10 06:30:48'),(3,'text pentru prima intrebare, trebu de scris ceva in romana?','текст для первого вопроса?','This is the second question?','<p>rasp ro</p>','<p>rasp ru</p>','<p>rasp en</p>','2019-12-04 15:16:51','2019-12-06 14:20:12'),(4,'intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?','intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?','intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?','<p><strong>intrebare numarul 3, trebuie de scris vre-o fraza</strong> mai lunga. Lore</p>\r\n<ol>\r\n<li>m ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza</li>\r\n<li>mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lu</li>\r\n<li>nga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris</li>\r\n<li>vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, t</li>\r\n<li>rebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebui</li>\r\n<li>e de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?</li>\r\n</ol>','<p><strong>intrebare numarul 3, trebuie de scris</strong> vre</p>\r\n<ol>\r\n<li>-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, tre</li>\r\n<li>buie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intreba</li>\r\n<li>re numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum doll</li>\r\n<li>or set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga</li>\r\n<li>. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris</li>\r\n<li>vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?</li>\r\n</ol>','<p><strong>intrebare numarul 3, trebuie de scris vre-o fraza</strong> mai lunga.</p>\r\n<ol>\r\n<li>Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fra</li>\r\n<li>za mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intreb</li>\r\n<li>are numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem i</li>\r\n<li>psum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scr</li>\r\n<li>is vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare n</li>\r\n<li>umarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?intrebare numarul 3, trebuie de scris vre-o fraza mai lunga. Lorem ipsum dollor set ame?</li>\r\n</ol>','2019-12-10 06:32:45','2019-12-10 06:32:45');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_11_20_135617_create_settings',2),(5,'2019_11_28_165443_create_photos_table',3),(8,'2019_11_29_151246_create_categories_table',4),(9,'2019_11_29_151257_create_products_table',4),(10,'2019_12_03_205636_create_faqs_table',5),(11,'2019_12_04_000000_create_articles_table',6),(12,'2019_12_05_124346_add_photo_to_categories',7),(13,'2019_12_09_183939_create_pdfs_table',8),(14,'2019_12_09_195659_create_pages_table',9);

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ro` text COLLATE utf8mb4_unicode_ci,
  `text_ru` text COLLATE utf8mb4_unicode_ci,
  `text_en` text COLLATE utf8mb4_unicode_ci,
  `meta_title_ro` text COLLATE utf8mb4_unicode_ci,
  `meta_title_ru` text COLLATE utf8mb4_unicode_ci,
  `meta_title_en` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords_ro` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords_ru` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords_en` text COLLATE utf8mb4_unicode_ci,
  `meta_description_ro` text COLLATE utf8mb4_unicode_ci,
  `meta_description_ru` text COLLATE utf8mb4_unicode_ci,
  `meta_description_en` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pages` */

insert  into `pages`(`id`,`alias`,`name_ro`,`name_ru`,`name_en`,`text_ro`,`text_ru`,`text_en`,`meta_title_ro`,`meta_title_ru`,`meta_title_en`,`meta_keywords_ro`,`meta_keywords_ru`,`meta_keywords_en`,`meta_description_ro`,`meta_description_ru`,`meta_description_en`,`created_at`,`updated_at`) values (1,NULL,NULL,NULL,NULL,'<h2 style=\"text-align: center;\">MD-3121, mun Bălți, str. Ștefan cel Mare, 111</h2>\r\n<h2 style=\"text-align: center;\">Tel.:&nbsp; +373 231 2 25 97</h2>\r\n<h2 style=\"text-align: center;\">E-mail: <a href=\"mailto:info@cpb.md\">info@cpb.md</a></h2>\r\n<h1 class=\"content_header\" style=\"width: 100%; text-align: center;\"><br />Adresele magazinelor și chioșcurilor</h1>\r\n<div style=\"display: flex; flex-wrap: wrap; justify-content: center; font-size: 16px; line-height: 25px; color: #666666;\">\r\n<ol>\r\n<li>Magazin №1, Mun.Bălţi, str.Şt-cel- Mare, 41</li>\r\n<li>Magazin №2, Mun.Bălţi, str.Şt-cel- Mare, 111</li>\r\n<li>Magazin №3, Mun.Bălţi, str.Al-cel- Bun, 44</li>\r\n<li>Magazin №4, Mun.Bălţi, str.Kievului, 2</li>\r\n<li>Magazin №6, Mun.Bălţi, str. Şt-cel- Mare, 6</li>\r\n<li>Magazin №7, Mun.Bălţi, str. Dubinovschi, 19</li>\r\n<li>Magazin №21, Or. Floresti, str. Stefan cel Mare, 59A</li>\r\n<li>Magazin №23, Or. Floresti, str.Eminescu , 78</li>\r\n<li>Magazin №24, Or. Singerei, str. Voinitchi , 6/1</li>\r\n<li>Magazin №25, Or.Chisinau, bul. Moscova, 9</li>\r\n<li>Magazin №26, Or.Chisinau, bul. Decebal, 63</li>\r\n<li>Magazin №27, Or.Chisinau, str. Russo, 1</li>\r\n<li>Magazin №28, Or.Chisinau, bul. Dacia, 44</li>\r\n</ol>\r\n<ol>\r\n<li>Chiosc №4, Mun.Bălţi, str.Muzicescu-T.Ciobanu</li>\r\n<li>Chiosc №5, Mun.Bălţi, str.Decebal, 125</li>\r\n<li>Chiosc №6, Mun.Bălţi, str.Kiev-Cahul</li>\r\n<li>Chiosc №7, Mun.Bălţi, str.M.Viteazul, 1</li>\r\n<li>Chiosc №8, Mun.Bălţi, str.Calea Ieşilor (reg.c/l. №109)</li>\r\n<li>Chiosc №9, Mun.Bălţi, bul.Larisa (reg.Gr.de copii №38)</li>\r\n<li>Chiosc №10, Mun.Bălţi, str.Nahimov, 11</li>\r\n<li>Chiosc №11, Mun.Bălţi, str.Conev (reg.şcolii №14)</li>\r\n<li>Chiosc №14, Mun.Bălţi, str.Şt-cel- Mare, 222</li>\r\n<li>Chiosc №16, Mun.Bălţi, str.Chişinăului, 109</li>\r\n<li>Chiosc №17, Mun.Bălţi, str.Libertătii, 2</li>\r\n<li>Chiosc №19, Mun.Bălţi, str.Locomotiv,3 A</li>\r\n</ol>\r\n</div>','<h2 style=\"text-align: center;\">MD-3121, мун. Бельцы, ул. Штефан чел Маре, 111</h2>\r\n<h2 style=\"text-align: center;\">Tel.:&nbsp; +373 231 2 25 97</h2>\r\n<h2 style=\"text-align: center;\">E-mail: <a href=\"mailto:info@cpb.md\">info@cpb.md</a></h2>\r\n<h1 class=\"content_header\" style=\"width: 100%; text-align: center;\">&nbsp;</h1>\r\n<h1 class=\"content_header\" style=\"width: 100%; text-align: center;\">Адреса магазинов и киосков</h1>\r\n<div style=\"display: flex; flex-wrap: wrap; justify-content: center; font-size: 16px; line-height: 25px; color: #666666;\">\r\n<ol>\r\n<li>Magazin №1, Mun.Bălţi, str.Şt-cel- Mare, 41</li>\r\n<li>Magazin №2, Mun.Bălţi, str.Şt-cel- Mare, 111</li>\r\n<li>Magazin №3, Mun.Bălţi, str.Al-cel- Bun, 44</li>\r\n<li>Magazin №4, Mun.Bălţi, str.Kievului, 2</li>\r\n<li>Magazin №6, Mun.Bălţi, str. Şt-cel- Mare, 6</li>\r\n<li>Magazin №7, Mun.Bălţi, str. Dubinovschi, 19</li>\r\n<li>Magazin №21, Or. Floresti, str. Stefan cel Mare, 59A</li>\r\n<li>Magazin №23, Or. Floresti, str.Eminescu , 78</li>\r\n<li>Magazin №24, Or. Singerei, str. Voinitchi , 6/1</li>\r\n<li>Magazin №25, Or.Chisinau, bul. Moscova, 9</li>\r\n<li>Magazin №26, Or.Chisinau, bul. Decebal, 63</li>\r\n<li>Magazin №27, Or.Chisinau, str. Russo, 1</li>\r\n<li>Magazin №28, Or.Chisinau, bul. Dacia, 44</li>\r\n</ol>\r\n<ol>\r\n<li>Chiosc №4, Mun.Bălţi, str.Muzicescu-T.Ciobanu</li>\r\n<li>Chiosc №5, Mun.Bălţi, str.Decebal, 125</li>\r\n<li>Chiosc №6, Mun.Bălţi, str.Kiev-Cahul</li>\r\n<li>Chiosc №7, Mun.Bălţi, str.M.Viteazul, 1</li>\r\n<li>Chiosc №8, Mun.Bălţi, str.Calea Ieşilor (reg.c/l. №109)</li>\r\n<li>Chiosc №9, Mun.Bălţi, bul.Larisa (reg.Gr.de copii №38)</li>\r\n<li>Chiosc №10, Mun.Bălţi, str.Nahimov, 11</li>\r\n<li>Chiosc №11, Mun.Bălţi, str.Conev (reg.şcolii №14)</li>\r\n<li>Chiosc №14, Mun.Bălţi, str.Şt-cel- Mare, 222</li>\r\n<li>Chiosc №16, Mun.Bălţi, str.Chişinăului, 109</li>\r\n<li>Chiosc №17, Mun.Bălţi, str.Libertătii, 2</li>\r\n<li>Chiosc №19, Mun.Bălţi, str.Locomotiv,3 A</li>\r\n</ol>\r\n</div>','<h2 style=\"text-align: center;\">MD-3121, mun. Balti, Stefan cel Mare street, 111</h2>\r\n<h2 style=\"text-align: center;\">Tel.:&nbsp; +373 231 2 25 97</h2>\r\n<h2 style=\"text-align: center;\">E-mail: <a href=\"mailto:info@cpb.md\">info@cpb.md</a></h2>\r\n<h1 class=\"content_header\" style=\"width: 100%; text-align: center;\">&nbsp;</h1>\r\n<h1 class=\"content_header\" style=\"width: 100%; text-align: center;\">Our addresses</h1>\r\n<div style=\"display: flex; flex-wrap: wrap; justify-content: center; font-size: 16px; line-height: 25px; color: #666666;\">\r\n<ol>\r\n<li>Magazin №1, Mun.Bălţi, str.Şt-cel- Mare, 41</li>\r\n<li>Magazin №2, Mun.Bălţi, str.Şt-cel- Mare, 111</li>\r\n<li>Magazin №3, Mun.Bălţi, str.Al-cel- Bun, 44</li>\r\n<li>Magazin №4, Mun.Bălţi, str.Kievului, 2</li>\r\n<li>Magazin №6, Mun.Bălţi, str. Şt-cel- Mare, 6</li>\r\n<li>Magazin №7, Mun.Bălţi, str. Dubinovschi, 19</li>\r\n<li>Magazin №21, Or. Floresti, str. Stefan cel Mare, 59A</li>\r\n<li>Magazin №23, Or. Floresti, str.Eminescu , 78</li>\r\n<li>Magazin №24, Or. Singerei, str. Voinitchi , 6/1</li>\r\n<li>Magazin №25, Or.Chisinau, bul. Moscova, 9</li>\r\n<li>Magazin №26, Or.Chisinau, bul. Decebal, 63</li>\r\n<li>Magazin №27, Or.Chisinau, str. Russo, 1</li>\r\n<li>Magazin №28, Or.Chisinau, bul. Dacia, 44</li>\r\n</ol>\r\n<ol>\r\n<li>Chiosc №4, Mun.Bălţi, str.Muzicescu-T.Ciobanu</li>\r\n<li>Chiosc №5, Mun.Bălţi, str.Decebal, 125</li>\r\n<li>Chiosc №6, Mun.Bălţi, str.Kiev-Cahul</li>\r\n<li>Chiosc №7, Mun.Bălţi, str.M.Viteazul, 1</li>\r\n<li>Chiosc №8, Mun.Bălţi, str.Calea Ieşilor (reg.c/l. №109)</li>\r\n<li>Chiosc №9, Mun.Bălţi, bul.Larisa (reg.Gr.de copii №38)</li>\r\n<li>Chiosc №10, Mun.Bălţi, str.Nahimov, 11</li>\r\n<li>Chiosc №11, Mun.Bălţi, str.Conev (reg.şcolii №14)</li>\r\n<li>Chiosc №14, Mun.Bălţi, str.Şt-cel- Mare, 222</li>\r\n<li>Chiosc №16, Mun.Bălţi, str.Chişinăului, 109</li>\r\n<li>Chiosc №17, Mun.Bălţi, str.Libertătii, 2</li>\r\n<li>Chiosc №19, Mun.Bălţi, str.Locomotiv,3 A</li>\r\n</ol>\r\n</div>',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-12-09 21:07:25');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `pdfs` */

DROP TABLE IF EXISTS `pdfs`;

CREATE TABLE `pdfs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_ro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pdfs` */

insert  into `pdfs`(`id`,`name_ro`,`name_ru`,`name_en`,`pdf`,`photo`,`created_at`,`updated_at`) values (1,'Catalog Bun','Catalog Bun','Catalog Bun','20191209185048_CATALOG.pdf','20191209185048.png','2019-12-09 18:50:48','2019-12-09 18:50:48'),(3,'Catalog revelion 2020','Каталог Новый Год 2020','Catalogue New Year 2020','20191209190054_CATALOG_maket_tort2020 (1).pdf.pdf','20191209190054.png','2019-12-09 19:00:54','2019-12-09 19:00:54');

/*Table structure for table `photos` */

DROP TABLE IF EXISTS `photos`;

CREATE TABLE `photos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `path` text COLLATE utf8mb4_unicode_ci,
  `type` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `photos` */

insert  into `photos`(`id`,`path`,`type`,`created_at`,`updated_at`) values (14,'20191129211600.jpeg',0,'2019-11-29 21:16:02','2019-11-29 21:16:02'),(15,'20191129211606.jpeg',0,'2019-11-29 21:16:07','2019-11-29 21:16:07'),(16,'20191129211613.jpeg',0,'2019-11-29 21:16:14','2019-11-29 21:16:14'),(17,'20191129211619.jpeg',0,'2019-11-29 21:16:20','2019-11-29 21:16:20'),(18,'20191129211630.jpeg',0,'2019-11-29 21:16:31','2019-11-29 21:16:31'),(19,'20191129211636.jpeg',0,'2019-11-29 21:16:38','2019-11-29 21:16:38'),(20,'20191129211644.jpeg',0,'2019-11-29 21:16:45','2019-11-29 21:16:45'),(21,'20191129211650.jpeg',0,'2019-11-29 21:16:52','2019-11-29 21:16:52'),(22,'20191129211657.jpeg',0,'2019-11-29 21:16:59','2019-11-29 21:16:59'),(23,'20191129213111.jpeg',0,'2019-11-29 21:31:12','2019-11-29 21:31:12'),(25,'https://www.youtube.com/watch?v=5wUKp0VDGsU',1,'2019-12-02 19:57:02','2019-12-02 19:57:02'),(28,'https://www.youtube.com/watch?v=kqzELb2Wzyk',1,'2019-12-02 20:01:27','2019-12-02 20:01:27'),(29,'https://www.youtube.com/watch?v=gQ8Nu3WX6ns',1,'2019-12-02 20:05:28','2019-12-02 20:05:28'),(30,'https://youtu.be/T99q8NPLdYU',1,'2019-12-02 20:05:59','2019-12-02 20:05:59'),(31,'https://www.youtube.com/watch?v=-7Dw037Mhaw',1,'2019-12-06 11:53:27','2019-12-06 11:53:27'),(32,'https://www.youtube.com/watch?v=yCDTVzRQnD0',1,'2019-12-06 11:53:41','2019-12-06 11:53:41');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `name_ro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ro` text COLLATE utf8mb4_unicode_ci,
  `text_ru` text COLLATE utf8mb4_unicode_ci,
  `text_en` text COLLATE utf8mb4_unicode_ci,
  `meta_title_ro` text COLLATE utf8mb4_unicode_ci,
  `meta_title_ru` text COLLATE utf8mb4_unicode_ci,
  `meta_title_en` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords_ro` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords_ru` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords_en` text COLLATE utf8mb4_unicode_ci,
  `meta_description_ro` text COLLATE utf8mb4_unicode_ci,
  `meta_description_ru` text COLLATE utf8mb4_unicode_ci,
  `meta_description_en` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`category_id`,`price`,`name_ro`,`name_ru`,`name_en`,`text_ro`,`text_ru`,`text_en`,`meta_title_ro`,`meta_title_ru`,`meta_title_en`,`meta_keywords_ro`,`meta_keywords_ru`,`meta_keywords_en`,`meta_description_ro`,`meta_description_ru`,`meta_description_en`,`photo`,`created_at`,`updated_at`) values (1,1,NULL,'Piine buna','Хлеб вкусный','Good bread','<p>tare buna <strong>afgs</strong>dfg</p>','<p>хроший х<strong>ле</strong>б</p>','<p>verry nice&nbsp;</p>',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'20191130111136.jpeg','2019-11-30 07:33:54','2019-12-05 13:19:39'),(2,1,NULL,'Baton','Батон','Bathons',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'20191205132129.jpeg','2019-12-05 13:21:29','2019-12-05 13:21:29'),(3,1,NULL,'Pâine Sănătate','Хлеб Сэнэтате','Bread Sanatate','<p>foarte bun si satos</p>',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'20191206152835.jpeg','2019-12-06 15:28:35','2019-12-06 15:28:35'),(4,1,NULL,'Paine Romanița','Хлеб Ромашка','Paine Romanița','<p>text ceva ....</p>',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'20191206200944.jpeg','2019-12-06 20:09:44','2019-12-06 20:09:44');

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `settings` */

insert  into `settings`(`id`,`name`,`value`,`created_at`,`updated_at`) values (1,'logoImgFile','20191122154013.png',NULL,'2019-11-22 15:40:15'),(2,'ico','20191120161519.ico','2019-11-20 16:06:06','2019-11-20 16:15:21'),(3,'title','cpb.Md - Combinatul de paine din Balti','2019-11-20 16:25:13','2019-11-20 16:32:09'),(4,'keywords','cpb, balti, paine','2019-11-20 16:32:54','2019-11-20 16:32:54'),(5,'description','cpb.Md - Combinatul de paine din Balti','2019-11-20 16:36:15','2019-11-20 16:36:43'),(6,'description_en','SC \"BALTI BREAD-BAKING COMPLEX\"','2019-11-20 16:55:40','2019-11-20 17:10:08'),(7,'description_ru','АО \"БЕЛЬЦКИЙ ХЛЕБОКОМБИНАТ\"','2019-11-20 16:55:41','2019-11-20 17:10:07'),(8,'description_ro','SA ”COMBINATUL DE PÂINE DIN BĂLŢI”','2019-11-20 16:55:42','2019-11-20 17:11:24'),(9,'title_en','cpb.md - SC \"BALTI BREAD-BAKING COMPLEX\"','2019-11-20 16:55:44','2019-11-28 17:42:25'),(10,'title_ru','cpb.md - АО \"БЕЛЬЦКИЙ ХЛЕБОКОМБИНАТ\"','2019-11-20 16:55:45','2019-11-28 17:42:26'),(11,'title_ro','cpb.md - SA ”COMBINATUL DE PÂINE DIN BĂLŢI”','2019-11-20 16:55:45','2019-11-28 17:42:27'),(12,'keywords_en',NULL,'2019-11-20 16:57:37','2019-11-28 17:42:10'),(13,'keywords_ru',NULL,'2019-11-20 16:57:38','2019-11-28 17:42:08'),(14,'keywords_ro',NULL,'2019-11-20 16:57:39','2019-11-28 17:42:07'),(15,'logotext_ro',NULL,'2019-11-20 17:10:38','2019-11-28 17:42:41'),(16,'logotext_ru',NULL,'2019-11-20 17:11:47','2019-11-28 17:42:44'),(17,'logotext_en',NULL,'2019-11-20 17:11:48','2019-11-28 17:42:47'),(18,'langing_bg_1','20191129154710.jpeg','2019-11-21 06:57:33','2019-11-29 15:47:14'),(19,'phone1','+373 (231) 2-25-97','2019-11-21 06:58:11','2019-11-21 06:58:11'),(20,'home_section_title_ro','SA \"COMBINATUL DE PÂINE DIN BĂLŢI\"','2019-11-21 16:21:53','2019-11-21 16:22:32'),(21,'home_section_title_ru','АО \"БЕЛЬЦКИЙ ХЛЕБОКОМБИНАТ\"','2019-11-21 16:22:10','2019-11-21 16:22:10'),(22,'home_section_title_en','JSC \"BALTI BREAD-BAKING COMPLEX\"','2019-11-21 16:22:45','2019-11-21 16:22:45'),(23,'home_section_text_ro','<p><strong>&nbsp; &nbsp; SA \"COMBINATUL DE P&Acirc;INE DIN BĂLŢI\"</strong> este amplasat &icirc;n partea de nord a Republicii Moldova &icirc;n zona industrială a oraşului Bălţi şi este unul dintre cei mai mari producători din Republica Moldova. Istoria SA \"COMBINATUL DE P&Acirc;INE DIN BĂLŢI\" &icirc;ncepe din anul 1944.</p>\n<p>&nbsp; &nbsp; &nbsp;La moment, &icirc;ntreprinderea include: SECŢIE DE BISCUIT, 2 SECŢII DE P&Acirc;INE, pe l&acirc;ngă care este organizată fabricarea produselor de patiserie moi. Funcţionează linia italiană \"ORLANDI\" de fabricare a biscuiţilor crocanţi av&acirc;nd o capacitate de 3500 t de biscuiţi crocanţi pe an, activitatea fiind &icirc;n 2 schimburi. Actualmente uzina produce 150 de denumiri de produse. &Icirc;n afară de p&acirc;ine, chifle, colaci, covrigei, torturi, biscuiţi de zahăr şi biscuiţi crocanţi, produce, de asemenea, biscuiţi de ovăz de 3 tipuri (biscuiţi de ovăz clasice, biscuiţi de ovăz cu stafide, biscuiţi de ovăz cu ciocolată) şi plăcinte moldoveneşti cu diferite umpluturi.</p>','2019-11-22 16:11:58','2019-11-27 22:07:44'),(24,'home_section_text_ru','<p><strong>&nbsp; &nbsp; АО \"БЕЛЬЦКИЙ ХЛЕБОКОМБИНАТ\"</strong> расположен в северной части Республики Молдова в промышленной зоне города Бельцы и является одним из крупнейших производителей в Республике Молдова. История АО \"БЕЛЬЦКИЙ ХЛЕБОКОМБИНАТ\" начинается с 1944 года.</p>\n<p>&nbsp; &nbsp; &nbsp;Сегодня, в состав предприятия входят: бисквитный цех, 2 хлебных цеха, при которых организовано производство мягких кондитерских изделий. Работает итальянская линия \"ОРЛАНДИ\" по производству крекеров мощностью 3500 т крекеров в год при 2-х сменном режиме работы. В настоящее время завод производит 150 наименований изделий. Кроме хлеба, булочек, калачей, сушек, тортов, сахарного печенья и крекеров, производит также овсяное печенье 3-х видов (классическое овсяное печенье, овсяное печенье с изюмом, овсяное печенье с шоколадом) и молдавские плацинды с разной начинкой.</p>','2019-11-22 16:21:27','2019-11-27 22:07:47'),(25,'home_section_text_en','<p><strong>&nbsp; &nbsp; SC \"BALTI BREAD-BAKING COMPLEX\"</strong> is located in the northern part of the Republic of Moldova in the industrial area of ​​Balti town and is one of the largest producers in the Republic of Moldova. History of JSC \"BALTI BREAD-BAKING COMPLEX\" began since 1944.</p>\n<p>&nbsp; &nbsp; &nbsp;Today, the company includes: BISCUIT SECTION, 2 BREAD SECTIONS, in which manufacturing of soft pastry items is organized. The Italian line \"ORLANDI\" works for the production of crackers having capacity of 3500 tons of crackers per year with 2-shift operation. Currently, the plant produces 150 types of products. Besides bread, loafs, pocket-shaped buns, small cracknels, layer cakes, sweet biscuits and crackers, it also produces 3 types of oatmeal biscuits (classic oatmeal biscuits, oatmeal raisin biscuits, oatmeal chocolate biscuits) and Moldavian pies with various fillings.</p>','2019-11-27 22:07:05','2019-11-27 22:07:51');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'admin','marin.vartan@gmail.com',NULL,'$2y$10$8ZPBtTkHnR6jCYJ/Uk56NuY7u8onP2iGME7uFcwxJDJBpCsjsq4Mu','BV8UojXQWnpRrfCjnL0sjqxtuo8cylawJxelzBOXZpT9EvmpWdMdpfOPhGv5','2019-11-20 10:40:42','2019-11-20 10:40:42');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
