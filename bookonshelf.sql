/*
Navicat MySQL Data Transfer

Source Server         : BookOnShelf(2)
Source Server Version : 100121
Source Host           : localhost:3306
Source Database       : bookonshelf

Target Server Type    : MYSQL
Target Server Version : 100121
File Encoding         : 65001

Date: 2017-06-12 09:37:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for books
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `releasedate` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `hired` enum('0','1') DEFAULT '0',
  `hired_by` varchar(255) DEFAULT NULL,
  `hired_date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of books
-- ----------------------------
INSERT INTO `books` VALUES ('1', 'My way', 'Monica Geuze', '1899-12-31', 'My Way is het openhartige verhaal van vlogger Monica Geuze. Van fotoshoots tot dj-optredens, shopsessies en restaurantbezoekjes: Monica deelt bijna elke dag van haar leven op Youtube en Instagram. Ze heeft meer dan 300.000 abonnees. Ondanks het feit dat M', '1', null, '0');
INSERT INTO `books` VALUES ('2', 'De tolk van Java', 'Alfred Birney', '2016-3-14', 'Voor een Helmondse schoenmakersdochter, een Indische voormalige oorlogstolk en hun zoon bestaat er geen heden. Alleen een belast verleden. De zoon achtervolgt zijn ouders met vragen over de oorlog in Nederlands-Indië die woedt in het gezin. Hun verhalen', '1', null, '0');
INSERT INTO `books` VALUES ('3', 'Dafne likes kookboek', 'Dafne Schippers', '2017-5-9', 'Dafne LIKES kookboek staat vol met gezonde recepten, gemaakt van verse ingrediënten die snel op tafel staan en nog razend lekker zijn ook. Dafne geeft aan wat je het beste kunt eten voor en na het sporten. Ook geeft ze tips voor een aantal supersnelle sn', '1', null, '0');
INSERT INTO `books` VALUES ('4', 'Oomen stroomt over', 'Francine Oomen', '2017-4-24', 'Puberteit, zwangerschap: kastenvol zijn er over deze grote hormonenhussels in een vrouwenleven geschreven. Francine Oomen kan erover meepraten als auteur van de succesvolle \'Hoe overleef ik\' reeks, waarmee ze duizenden pubers door een lastige tijd loodste', '1', null, '0');
INSERT INTO `books` VALUES ('5', 'Killerbody dieet', 'Fajah Lourens', '2016-8-31', 'In het rijk geïllustreerde Killerbody dieet , helpen Fajah Lourens en haar team van fitnessexperts, voedingsdeskundigen en artsen je om de eerste stappen te zetten om jouw eigen Killerbody te vormen én te behouden. Met haar Killerbody dieet is een gezon', '1', null, '0');
INSERT INTO `books` VALUES ('6', 'Zondagochtend breekt aan', 'Nicci French', '1899-12-31', 'Zondagochtend breekt aan is het spannende zevende deel van de achtdelige Frieda Klein-serie, geschreven door Nicci French.<br /><br />Het begint met een lijk onder de vloer. Frieda deed deze gruwelijke vondst in haar eigen huis - een vondst die haar tot i', '1', null, '0');
INSERT INTO `books` VALUES ('7', 'De tolk van Java', 'Alfred Birney', '2017-3-11', 'Voor een Helmondse schoenmakersdochter, een Indische voormalige oorlogstolk en hun zoon bestaat er geen heden. Alleen een belast verleden. De zoon achtervolgt zijn ouders met vragen over de oorlog in Nederlands-Indië die woedt in het gezin. Hun verhalen', '1', null, '2017-06-02');
INSERT INTO `books` VALUES ('8', 'Ach, moedertje', 'Hugo Borst', '1899-12-31', 'Het vervolg op bestseller <a href=\"https://www.bol.com/nl/p/ma/9200000046234118/\">Ma</a>. De moeder van Hugo Borst lijdt sinds enkele jaren aan de ziekte van Alzheimer en woont inmiddels op een gesloten afdeling in het Verpleeghuis. In Ach, moedertje volg', '1', null, '0');
INSERT INTO `books` VALUES ('9', 'Het einde van de eenzaamheid', 'Benedict Wells', '2017-3-10', 'Het veelgeprezen meesterwerk van een jong Duits talent<br /> <br /> Als de tijd nu eens niet bestond? Als alles wat je beleeft eeuwig was en als niet de tijd aan jou voorbijging, maar jijzelf aan de dingen die je beleeft?<br /> <br />Wanneer Jules Moreau', '1', null, '2017-06-02');
INSERT INTO `books` VALUES ('10', 'Zondagochtend breekt aan', 'Nicci French', '2017-4-11', 'Zondagochtend breekt aan is het spannende zevende deel van de achtdelige Frieda Klein-serie, geschreven door Nicci French.<br /><br />Het begint met een lijk onder de vloer. Frieda deed deze gruwelijke vondst in haar eigen huis - een vondst die haar tot i', '1', null, '2017-06-02');
INSERT INTO `books` VALUES ('11', 'Prisma woordenboek Nederlands', 'Martha Hofman', '2014-8-26', 'Dit is een PRISMA woordenboek - echt waar! Binnen deze kaft vind je het meest uitgebreide pocketwoordenboek Nederlands dat je kunt krijgen. Net als de reguliere editie bevat het bijna 40.000 trefwoorden en 170.000 betekenissen, voorbeeldzinnen en vertalin', '1', null, '2017-06-02');
INSERT INTO `books` VALUES ('12', 'Mindf*ck', 'Victor Mids', '1899-12-31', 'Victor Mids en Oscar Verpoort geven voor het eerst de geheimen prijs achter hun spectaculaire tv-programma MINDF*CK. Aan de hand van illusies, psychologie, geneeskunde en vingervlugheid geven zij een uniek inkijkje in de werking van je brein.<br /> <br />', '1', null, '2017-06-02');
INSERT INTO `books` VALUES ('13', 'Het paradijs', 'Suzanne Vermeer', '1899-12-31', 'Wanneer Liza Roozenboom te horen krijgt dat haar zoon Mark op het eiland Corfu vermist is geraakt, stort haar wereld in. Mark is met een meisje dat hij net had ontmoet gaan backpacken en sindsdien heeft niemand meer iets van hem gehoord. Een wekenlange zo', '1', null, '2017-06-07');
INSERT INTO `books` VALUES ('14', 'Lekker beter', 'Ramon Beuk', '1899-12-31', 'Haal het beste uit je dag door de juiste voeding te kiezen.<br /><br />RV: \'Lekker eten én goed voor jezelf zorgen, dat moet toch samen kunnen gaan?\'<br /> <br />RB: \'Zeker! Geef jij maar aan welke ingrediënten ik mag gebruiken. Dan zorg ik voor de rest', '1', null, '2017-06-07');
INSERT INTO `books` VALUES ('15', 'Lekker & makkelijk koolhydraatarm', 'Anna-Karina van Denderen', '1899-12-31', 'Ook koolhydraatarm eten moet gewoon verrukkelijk zijn. Punt. <br />In amper twee jaar tijd groeide KoolhydraatarmRecept.nl uit tot het populairste niet-commerciële koolhydraatarme foodblog van Nederland. Maandelijks vinden honderdduizenden bezoekers hun', '1', null, '2017-06-07');
INSERT INTO `books` VALUES ('16', 'VMBO-KGT Biologie', 'E.J. van der Schoot', '1899-12-31', '<b>Samengevat - vmbo-kgt Biologie</b><br /><br />Meer kans van slagen met Samengevat! Samengevat biedt je een helder en beknopt overzicht van alle examenstof. Met Samengevat kun je grote hoeveelheden stof snel herhalen en overzien. Je krijgt beter inzicht', '0', null, '0');
INSERT INTO `books` VALUES ('17', 'Sapiens', 'Yuval Noah Harari', '1899-12-31', 'Honderdduizend jaar geleden waren er wel zes verschillende menssoorten. Nu is er maar één soort over, en dat zijn wij. Homo sapiens. Hoe komt het dat alleen wij zijn overgebleven? Hoe kwamen onze voorvaderen op het idee om steden en zelfs koninkrijken t', '0', null, '0');
INSERT INTO `books` VALUES ('18', 'Handlettering doe je zo!', 'Karin Luttenberg', '1899-12-31', 'Handlettering is hot! Geen simpele notitie op een stukje papier, maar een echt ambacht. Met dit handboek van illustratrice en graficus Karin Luttenberg kan iedereen snel zelf aan de slag. Ben je fan van al die mooie plaatjes op instagram en pinterest maar', '0', null, '0');
INSERT INTO `books` VALUES ('19', 'Spiegelzee', 'Salomon Kroonenberg', '2017-3-17', 'Wie zich zorgen maakt over een stijgende zeespiegel, zo schrijft Salomon Kroonenberg in \'Spiegelzee\', vergeet dat de mensheid zoiets al eerder heeft meegemaakt. Zo\'n 120.000 jaar geleden stond de zeespiegel zes meter hoger dan nu, en lag Amersfoort aan ze', '0', null, '0');
INSERT INTO `books` VALUES ('20', 'De vibe', 'Mark Verhees', '1899-12-31', '<a href=\"https://lees.bol.com/nl/author/mark-verhees\">Lees hier de columns van Mark Verhees</a><br /><br />Gelukkige mensen zijn gezonder, leven langer en gunnen gul. Ze zijn creatiever, energieker en succesvoller. Ze verdienen meer en genieten schaamtelo', '0', null, '0');
INSERT INTO `books` VALUES ('21', 'Het kidsproof-kookboek', 'Elise Gruppen', '1899-12-31', '<b>Chickslovefood: lekker en gezond, voor het hele gezin.</b> <br /><br />Kidsproof is een boek van jonge moeders voor jonge ouders: recepten met maximaal zes ingrediënten, die voedzaam en vers zijn, toegespitst op kinderen. <br /><br />Ouders die voor h', '0', null, '0');
INSERT INTO `books` VALUES ('22', 'VMBO-kgt Economie', 'ThiemeMeulenhoff bv', '1899-12-31', 'Wil je jouw examen taal zelfverzekerd maken? Kies dan voor Samengevat!  Met Samengevat taal hebt je meer kans om te slagen! In Samengevat worden alle examenonderwerpen stap-voor-stap uitgelegd. Vaak worden meer oplossingsmethodes voor een type opgave gege', '0', null, '0');
INSERT INTO `books` VALUES ('23', 'Thirteen reasons why', 'Jay Asher', '2017-4-28', 'Stel je voor. Je zit op de middelbare school en bent verliefd - op het meest bijzondere meisje van de klas natuurlijk. Een tijdlang bewonder je haar vanuit de verte. Je weet zeker dat je haar nooit kunt krijgen. En dan opeens, is er die avond. Er gebeurt', '0', null, '0');
INSERT INTO `books` VALUES ('24', 'Judas', 'Astrid Holleeder', '2016-9-4', '\'Een valse hond sluit je op in een hok, of laat je inslapen.’<br /><br />Astrid en Sonja Holleeder besluiten in 2013 te doen wat niemand voor mogelijk hield: ze staan op tegen hun broer Willem – die na zijn vrijlating in 2012 tot nationale knuffelcrim', '0', null, '0');
INSERT INTO `books` VALUES ('25', 'HAVO Geschiedenis', 'Yvonne Bouw', '1899-12-31', '<b>Samengevat - havo Geschiedenis</b> Meer kans van slagen met Samengevat! Samengevat biedt je een helder en beknopt overzicht van alle examenstof. Met Samengevat kun je grote hoeveelheden stof snel herhalen en overzien. Je krijgt beter inzicht in de same', '0', null, '0');
INSERT INTO `books` VALUES ('26', 'Homo Deus', 'Yuval Noah Harari', '2017-3-2', '***BOEK VAN DE MAAND DWDD***<br /><br />Op onnavolgbare wijze beschrijft Yuval Noah Harari in zijn bestseller Sapiens 70.000 jaar menselijke evolutie, maar met Homo Deus richt hij zich op de toekomst. Met zijn kenmerkende vermenging van wetenschap, geschi', '0', null, '0');
INSERT INTO `books` VALUES ('27', 'Meester Mark rekent het goed', 'Mark van der Werf', '1899-12-31', 'Wie beschermt ons tegen boeven en ander gespuis? Mega Mindy!<br />En met Pasen vieren de gelovigen... dat er een konijn aan de deur komt.<br /><br />Gevatte ingevingen, grappige foutjes, bijdehante briefjes: op zijn populaire Facebook- en Instagrampagina\'', '0', null, '0');
INSERT INTO `books` VALUES ('28', 'HAVO Economie', 'J.P.M. Blaas', '1899-12-31', '<b>Samengevat - havo  Economie</b><br /><br />Meer kans van slagen met Samengevat! Samengevat biedt je een helder en beknopt overzicht van alle examenstof. Met Samengevat kun je grote hoeveelheden stof snel herhalen en overzien. Je krijgt beter inzicht in', '0', null, '0');
INSERT INTO `books` VALUES ('29', 'Je ziet mij nooit meer terug', 'Sonja Barend', '1899-12-31', 'Sonja Barend was decennialang een van de meest vertrouwde gezichten op de Nederlandse televisie. Generaties groeiden op met haar programma’s. Haar heldere en betrokken manier van interviewen was een voorbeeld en inspiratie voor velen. Achter haar elegan', '0', null, '0');
INSERT INTO `books` VALUES ('30', 'Ik zie je op het strand', 'Jill Mansell', '2017-5-6', 'Ik zie je op het strand is de nieuwe roman van Jill Mansell (van bestsellers als Lang leve de liefde en Je bent geweldig). Romantische verwikkelingen, misverstanden en zussenrivaliteit – een feelgood verhaal dat je niet weg kunt leggen! Perfect voor wie', '0', null, '0');
INSERT INTO `books` VALUES ('31', 'Serie Q - Selfies', 'Jussi Adler-Olsen', '2009-8-6', 'Ze zijn jong, knap, lopen in merkkleding en besteden dagelijks uren aan hun haar - en daarbij leven ze van een uitkering. Deze jonge vrouwen denken alleen aan zichzelf, maar leiden een levensgevaarlijk bestaan, want langzaam maar zeker zijn ze een doorn i', '0', null, '0');
INSERT INTO `books` VALUES ('32', 'Thirteen Reasons Why', 'Jay Asher', '1899-12-31', 'Read this sensational mystery bestseller before you watch the 13-part Netflix series, executive produced by Selena Gomez.<br /><br /><b>You can\'t stop </b><b>the future. You can\'t rewind the past. The only way to learn the secret . . . is to press play.</', '0', null, '0');
INSERT INTO `books` VALUES ('33', 'Op zoek naar de hemel', 'Hans Peter Roel', '1899-12-31', 'Een spirituele reis door drie landen<br /><br /><br />Eva van Berkel is nog maar zeven jaar oud als haar vader komt te overlijden. Op zijn sterfbed belooft hij in de hemel op Eva te wachten. Deze belofte is de reden van haar zoektocht. Eva gaat op reis om', '0', null, '0');
INSERT INTO `books` VALUES ('34', 'Het Bucketlist boek voor koppels', 'Elise De Rijck', '1899-12-31', 'Lees hier het <a href=\"https://lees.bol.com/nl/article/bucketlist-voor-koppels\">artikel </a> over Bucketlist voor koppels. <br /><br />Eindelijk een Bucketlist voor koppels. In dit boek vind je 250 gekke, grappige, unieke, maar soms ook heel serieuze opdr', '0', null, '0');
INSERT INTO `books` VALUES ('35', 'De laatste roos van de zomer', 'Santa Montefiore', '2017-3-28', 'Het magistrale drieluik over de Deverills van Santa Montefiore is nu compleet!<br /> <br /> Ondanks alles wat ze in het verleden hebben gedeeld, botsen de drie vrouwen van Deverill telkens weer als het gaat over de toekomst van hun geliefde kasteel. Intus', '0', null, '0');
INSERT INTO `books` VALUES ('36', 'Mijn niet zo perfecte leven', 'Sophie Kinsella', '2017-4-18', 'Cat Brenner heeft er genoeg van om een \'nobody\' te zijn. Daarom gaat ze werken op een trendy reclamebureau in Londen. Haar baas Demeter is een helse verschrikking maar daar kan Cat wel tegen. Tot ze totaal onverwacht wordt ontslagen. Met al haar dromen in', '0', null, '0');
INSERT INTO `books` VALUES ('37', 'Versplinterd', 'Karin Slaughter', '1899-12-31', 'Voor iedereen die nog nooit een boek van Karin Slaughter heeft gelezen is Versplinterd de beste kennismaking. Karin Slaughter verstaat als geen ander de kunst om binnen de kaders van het thrillergenre een rijk geschakeerde wereld te creëren aan intrigere', '0', null, '0');
INSERT INTO `books` VALUES ('38', 'Pogingen iets van het leven te maken', 'Hendrik Groen', '1899-12-31', 'Hendrik Groen mag dan oud zijn, hij is nog lang niet dood en niet van plan zich eronder te laten krijgen. Toegegeven: zijn dagelijkse wandelingen worden steeds korter omdat de benen niet meer willen en hij moet regelmatig naar de huisarts. Technisch gespr', '0', null, '0');
INSERT INTO `books` VALUES ('39', 'Vertel eens - Mam, vertel eens', 'Elma van Vliet', '2017-6-13', '<p> <strong>Geef dit boek cadeau, en krijg het met waardevolle verhalen weer terug! </strong> </p> <p> Met deze herziene uitgave van <em>Mam, vertel eens</em> geef je een ultiem cadeau: je belangstelling. Je geeft aan dat je alles wilt weten van het leven', '0', null, '0');
INSERT INTO `books` VALUES ('40', 'Goede dochter', 'Karin Slaughter', '1899-12-31', 'Achtentwintig jaar geleden: het zorgeloze leven van zusjes Charlotte en Samantha Quinn en hun ouders wordt wreed verstoord door een gruwelijke aanslag. Hun moeder verliest daarbij het leven en hun vader wordt nooit meer de oude. Achtentwintig jaar later:', '0', null, '0');
INSERT INTO `books` VALUES ('41', 'Lekker & simpel', 'Jorrit van Daalen Buissant Des Amorie', '1899-12-31', 'Voor iedereen die hulp nodig heeft bij het beantwoorden van de vraag: \'wat eten we vandaag?\' is er nu het kookboek van Sofia en Jorrit Lekker & Simpel. <br />Geen moeilijke gerechten waar je uren voor in de keuken moet staan maar lekkere en simpele recept', '0', null, '0');
INSERT INTO `books` VALUES ('42', 'De vierde dimensie', 'Hans Peter Roel', '1899-12-31', 'De Vierde Dimensie is een verhaal over de onzichtbare wereld om ons heen, die bepalend is voor succes. Het is een boek dat inzicht geeft in de wetmatigheden die in de vierde dimensie gelden en dat ingaat op de magie van het leven.<br /><br />Wens, werkeli', '0', null, '0');
INSERT INTO `books` VALUES ('43', 'Killerbody 2', 'Fajah Lourens', '2017-2-6', 'Killerbody 2 is de perfecte aanvulling op het succesvolle Killerbody Dieet van Fajah Lourens. Het boek bevat 100 slanke en snelle recepten die snel op tafel staan en volledig Killerbody-proof zijn. Klaar om van jouw killerbody een lifestyle te maken? Met', '0', null, '0');
INSERT INTO `books` VALUES ('44', 'Joona Linna 6 - Jager', 'Lars Kepler', '1899-12-31', 'Begin maar vast met rennen<br /> Joona Linna is terug!<br /><br /> Na twee jaar te hebben doorgebracht in een van de best beveiligde gevangenissen van Zweden, wordt Joona Linna benaderd voor een geheime opdracht. Saga Bauer heeft hem nodig voor een onderz', '0', null, '0');
INSERT INTO `books` VALUES ('45', 'In het water', 'Paula Hawkins', '1899-12-31', 'De #1 bestsellerauteur van het meisje in de trein is terug met een verslavende thriller vol psychologische spanning.<br /><br />Nel, een alleenstaande moeder, wordt dood aange', '0', null, '0');
INSERT INTO `books` VALUES ('46', 'Het houden van mannen', 'Myrthe van der Meer', '1899-12-31', '<p> Veel Nederlandse vrouwen hebben een man, of kennen iemand die er een heeft. Voor iedereen die interesse heeft in de man als huisgenoot of er al een heeft en hier meer over wil weten, is er nu Het houden van mannen. Deze compacte en geïllustreerde vel', '0', null, '0');
INSERT INTO `books` VALUES ('47', 'Bikiniproof met Sonja', 'Sonja Bakker', '2016-9-5', 'Zomer! Een bikini of badpak, topje of jurkje aantrekken: niet iedereen voelt zich daar prettig bij. Want nooit zijn overtollige kilo\'s beter zichtbaar dan in dit seizoen. Wil je nog voor de zomer die extra kilo\'s kwijt? Met dit boek zet je de eerste stap', '0', null, '0');
INSERT INTO `books` VALUES ('48', 'Judas', 'Astrid Holleeder', '1899-12-31', 'Een valse hond sluit je op in een hok, of laat je inslapen.’<br /><br />Astrid en Sonja Holleeder besluiten in 2013 te doen wat niemand voor mogelijk hield: ze staan op tegen hun broer Willem – die na zijn vrijlating in 2012 tot nationale knuffelcrimi', '0', null, '0');
INSERT INTO `books` VALUES ('49', 'Recepten uit Oanh\'s Kitchen', 'Oanh Ha Thi Ngoc', '1899-12-31', 'Wil je op een simpele en leuke manier gezond en koolhydraatarm eten? Dan is dit kookboek iets voor jou! Koolhydraatarme recepten uit Oanh\'s Kitchen is een kookboek waarin een hoop nieuwe en mijn all time favourite recepten zijn gebundeld. Met 192 pagina\'s', '0', null, '0');
INSERT INTO `books` VALUES ('50', 'Singing in the brain', 'Erik Scherder', '1899-12-31', 'Erik Scherder speelt viool. Hij kan er nog niet veel van, maar het oefenen en het bezig zijn met muziek stimuleert zijn hersenen. Hij wordt er fit van – en gelukkig. Muziek, op wat voor manier dan ook beleefd, professioneel of zomaar, passief of actief,', '0', null, '0');
INSERT INTO `books` VALUES ('51', 'Holy Book of Memes', 'Mike \"meme\" Schepers', '2017-5-24', 'WHAT THE HECK IS AN INTERNET MEME? \r\n\r\nMeme (pronounced meem): An idea, belief or element of social behavior spread that is transmitted from one person or group of people to another. \r\n\r\nThis word was coined in the \'70s by Richard Dawkins, the atheist godman worshipped by neckbeards everywhere. \r\n\r\nSimply put, Internet memes are memes that spread on the Internet through social networking sites, blogs, email, news sources, and so on. In the real world they\'re called \"ideas,\" but pseudo-intellectuals prefer \"memes.\" \r\n\r\nWHERE DO INTERNET MEMES COME FROM? \r\n\r\nAmongst all the stupid crap on the Internet are hilarious gems of wit and wisdom. Most of the best memes start as images shared on the Web and, by some great misfortune, they find their way into the lecherous hands of drunken basement trolls who mutate these images into the hilarious, the lame, and sometimes the downright bizarre. \r\n\r\nWHAT IS THIS BOOK? \r\n\r\nThis book will take you on bizarre journey through the bilges of the Internet and introduce you to 23 of its funniest and most popular memes, complete with a sh*tload of images that might just make you wet your panties. \r\n\r\nOn this journey you will share lulz with unsavory characters like... \r\n\r\nFoul Bachelor Frog \r\n\r\nSocially Awkward Penguin \r\n\r\nParanoid Parrot \r\n\r\nCourage Wolf \r\n\r\nAdvice God \r\n\r\nJoseph Ducreux \r\n\r\nHipster Kitty \r\n\r\nInglip \r\n\r\nSuccessful Black Man \r\n\r\nForever Alone \r\n\r\nBill O\'Reilly \r\n\r\nAnd more... \r\n\r\nScroll up and click the \"Buy\" button now to laugh your a** off at the twisted hive mind of the Internet underworld...', '0', null, '0');
INSERT INTO `books` VALUES ('52', 'r33', 'r3r3r3', '2015-02-03', 'r33rr', '0', null, null);
INSERT INTO `books` VALUES ('53', '55g', '4554', '0005-04-05', 'grerr', '0', null, null);

-- ----------------------------
-- Table structure for hiredbooks
-- ----------------------------
DROP TABLE IF EXISTS `hiredbooks`;
CREATE TABLE `hiredbooks` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hired_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `expire_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `extended` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hiredbooks
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `rank` enum('0','1','2') NOT NULL DEFAULT '0',
  `gender` enum('0','1','2','3') NOT NULL DEFAULT '2',
  `birthdate` date DEFAULT NULL,
  `phonenumber` int(50) DEFAULT NULL,
  `altnumber` int(50) DEFAULT NULL,
  `street` text,
  `housenumber` int(50) DEFAULT NULL,
  `housenumber_ext` text,
  `zipcode` text,
  `city` text,
  `country` text,
  `registerdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Nyma', 'nyma@telfort.nl', '$2y$10$ok.QEfWWwLLBjRKF6DV05uzhE6y57IzHwqI0U8E9xxyN73k5s9nSK', '0', '2', '2017-05-29', null, null, 'Van der hagenstraat', '7012', 'aF', '6717DK', 'Eder', 'Nederland', '2017-04-21 09:33:27');
INSERT INTO `users` VALUES ('2', 'Jurgen', 'jurgenklomp883@gmail.com', '$2y$10$6911AKa3qMcnlr9fUBjHE.DQlbLElDzSH1FQ87dSl6l1HhyU6aLXm', '0', '3', '2017-05-24', null, null, 'Flierenhofstraat 57', null, 'A', '6681BX', 'Bemmel', 'Nederland', '2017-05-02 15:05:59');
INSERT INTO `users` VALUES ('3', 'Nyma4', 'nymgra@telfort.nl', '$2y$10$GvszDVIjQ.Jtj6FibCfKqOjQxfcPAqMcn/PyVtVT0IirmOous6STK', '0', '2', null, null, null, null, null, null, null, null, null, '2017-06-12 08:44:04');
SET FOREIGN_KEY_CHECKS=1;
