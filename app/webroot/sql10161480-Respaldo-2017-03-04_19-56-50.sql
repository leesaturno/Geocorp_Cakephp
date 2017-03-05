-- Database: `sql10161480`
-- Generation time: Sat 4th Mar 2017 19:56:39


DROP TABLE IF EXISTS auth_group;

CREATE TABLE `auth_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS auth_group_permissions;

CREATE TABLE `auth_group_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_group_permissions_group_id_0cd325b0_uniq` (`group_id`,`permission_id`),
  KEY `auth_group_permissi_permission_id_84c5c92e_fk_auth_permission_id` (`permission_id`),
  CONSTRAINT `auth_group_permissi_permission_id_84c5c92e_fk_auth_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `auth_permission` (`id`),
  CONSTRAINT `auth_group_permissions_group_id_b120cbf9_fk_auth_group_id` FOREIGN KEY (`group_id`) REFERENCES `auth_group` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS auth_permission;

CREATE TABLE `auth_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content_type_id` int(11) NOT NULL,
  `codename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_permission_content_type_id_01ab375a_uniq` (`content_type_id`,`codename`),
  CONSTRAINT `auth_permissi_content_type_id_2f476e4b_fk_django_content_type_id` FOREIGN KEY (`content_type_id`) REFERENCES `django_content_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

INSERT INTO auth_permission VALUES('1','Can add log entry','1','add_logentry');
INSERT INTO auth_permission VALUES('2','Can change log entry','1','change_logentry');
INSERT INTO auth_permission VALUES('3','Can delete log entry','1','delete_logentry');
INSERT INTO auth_permission VALUES('4','Can add permission','2','add_permission');
INSERT INTO auth_permission VALUES('5','Can change permission','2','change_permission');
INSERT INTO auth_permission VALUES('6','Can delete permission','2','delete_permission');
INSERT INTO auth_permission VALUES('7','Can add user','3','add_user');
INSERT INTO auth_permission VALUES('8','Can change user','3','change_user');
INSERT INTO auth_permission VALUES('9','Can delete user','3','delete_user');
INSERT INTO auth_permission VALUES('10','Can add group','4','add_group');
INSERT INTO auth_permission VALUES('11','Can change group','4','change_group');
INSERT INTO auth_permission VALUES('12','Can delete group','4','delete_group');
INSERT INTO auth_permission VALUES('13','Can add content type','5','add_contenttype');
INSERT INTO auth_permission VALUES('14','Can change content type','5','change_contenttype');
INSERT INTO auth_permission VALUES('15','Can delete content type','5','delete_contenttype');
INSERT INTO auth_permission VALUES('16','Can add session','6','add_session');
INSERT INTO auth_permission VALUES('17','Can change session','6','change_session');
INSERT INTO auth_permission VALUES('18','Can delete session','6','delete_session');
INSERT INTO auth_permission VALUES('19','Can add cors model','7','add_corsmodel');
INSERT INTO auth_permission VALUES('20','Can change cors model','7','change_corsmodel');
INSERT INTO auth_permission VALUES('21','Can delete cors model','7','delete_corsmodel');
INSERT INTO auth_permission VALUES('22','Can add nivel educativo','8','add_niveleducativo');
INSERT INTO auth_permission VALUES('23','Can change nivel educativo','8','change_niveleducativo');
INSERT INTO auth_permission VALUES('24','Can delete nivel educativo','8','delete_niveleducativo');
INSERT INTO auth_permission VALUES('25','Can add localization','9','add_localization');
INSERT INTO auth_permission VALUES('26','Can change localization','9','change_localization');
INSERT INTO auth_permission VALUES('27','Can delete localization','9','delete_localization');
INSERT INTO auth_permission VALUES('28','Can add parroquia','10','add_parroquia');
INSERT INTO auth_permission VALUES('29','Can change parroquia','10','change_parroquia');
INSERT INTO auth_permission VALUES('30','Can delete parroquia','10','delete_parroquia');
INSERT INTO auth_permission VALUES('31','Can add municipio','11','add_municipio');
INSERT INTO auth_permission VALUES('32','Can change municipio','11','change_municipio');
INSERT INTO auth_permission VALUES('33','Can delete municipio','11','delete_municipio');
INSERT INTO auth_permission VALUES('34','Can add hospital','12','add_hospital');
INSERT INTO auth_permission VALUES('35','Can change hospital','12','change_hospital');
INSERT INTO auth_permission VALUES('36','Can delete hospital','12','delete_hospital');
INSERT INTO auth_permission VALUES('37','Can add type blood','13','add_typeblood');
INSERT INTO auth_permission VALUES('38','Can change type blood','13','change_typeblood');
INSERT INTO auth_permission VALUES('39','Can delete type blood','13','delete_typeblood');
INSERT INTO auth_permission VALUES('40','Can add countrie','14','add_countrie');
INSERT INTO auth_permission VALUES('41','Can change countrie','14','change_countrie');
INSERT INTO auth_permission VALUES('42','Can delete countrie','14','delete_countrie');
INSERT INTO auth_permission VALUES('43','Can add people','15','add_people');
INSERT INTO auth_permission VALUES('44','Can change people','15','change_people');
INSERT INTO auth_permission VALUES('45','Can delete people','15','delete_people');
INSERT INTO auth_permission VALUES('46','Can add etnia','16','add_etnia');
INSERT INTO auth_permission VALUES('47','Can change etnia','16','change_etnia');
INSERT INTO auth_permission VALUES('48','Can delete etnia','16','delete_etnia');
INSERT INTO auth_permission VALUES('49','Can add ocupacion','17','add_ocupacion');
INSERT INTO auth_permission VALUES('50','Can change ocupacion','17','change_ocupacion');
INSERT INTO auth_permission VALUES('51','Can delete ocupacion','17','delete_ocupacion');
INSERT INTO auth_permission VALUES('52','Can add paciente','18','add_paciente');
INSERT INTO auth_permission VALUES('53','Can change paciente','18','change_paciente');
INSERT INTO auth_permission VALUES('54','Can delete paciente','18','delete_paciente');



DROP TABLE IF EXISTS auth_user;

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(128) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `username` varchar(150) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(254) NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_joined` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS auth_user_groups;

CREATE TABLE `auth_user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_user_groups_user_id_94350c0c_uniq` (`user_id`,`group_id`),
  KEY `auth_user_groups_group_id_97559544_fk_auth_group_id` (`group_id`),
  CONSTRAINT `auth_user_groups_group_id_97559544_fk_auth_group_id` FOREIGN KEY (`group_id`) REFERENCES `auth_group` (`id`),
  CONSTRAINT `auth_user_groups_user_id_6a12ed8b_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS auth_user_user_permissions;

CREATE TABLE `auth_user_user_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_user_user_permissions_user_id_14a6b632_uniq` (`user_id`,`permission_id`),
  KEY `auth_user_user_perm_permission_id_1fbb5f2c_fk_auth_permission_id` (`permission_id`),
  CONSTRAINT `auth_user_user_perm_permission_id_1fbb5f2c_fk_auth_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `auth_permission` (`id`),
  CONSTRAINT `auth_user_user_permissions_user_id_a95ead1b_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS cargos;

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO cargos VALUES('1','Jefe Gineco-obstetricia','2017-02-02 07:02:05','2017-02-02 07:03:09');



DROP TABLE IF EXISTS countries;

CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=latin1;

INSERT INTO countries VALUES('1','hola','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('2','Afghanistan','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('3','Albania','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('4','Algeria','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('5','Andorra','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('6','Angola','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('7','Antigua and Barbuda','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('8','Argentina','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('9','Armenia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('10','Australia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('11','Austria','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('12','Azerbaijan','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('13','Bahamas','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('14','Bahrain','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('15','Bangladesh','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('16','Barbados','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('17','Belarus','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('18','Belgium','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('19','Belize','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('20','Benin','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('21','Bhutan','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('22','Bolivia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('23','Bosnia and Herzegovina','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('24','Botswana','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('25','Brazil','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('26','Brunei','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('27','Bulgaria','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('28','Burkina Faso','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('29','Burundi','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('30','Cambodia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('31','Cameroon','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('32','Canada','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('33','Cape Verde','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('34','Central African Republic','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('35','Chad','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('36','Chile','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('37','China','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('38','Colombia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('39','Comoros','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('40','Congo (Brazzaville)','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('41','Congo','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('42','Costa Rica','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('43','Cote d\'Ivoire','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('44','Croatia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('45','Cuba','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('46','Cyprus','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('47','Czech Republic','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('48','Denmark','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('49','Djibouti','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('50','Dominica','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('51','Dominican Republic','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('52','East Timor (Timor Timur)','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('53','Ecuador','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('54','Egypt','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('55','El Salvador','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('56','Equatorial Guinea','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('57','Eritrea','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('58','Estonia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('59','Ethiopia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('60','Fiji','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('61','Finland','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('62','France','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('63','Gabon','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('64','Gambia, The','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('65','Georgia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('66','Germany','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('67','Ghana','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('68','Greece','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('69','Grenada','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('70','Guatemala','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('71','Guinea','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('72','Guinea-Bissau','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('73','Guyana','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('74','Haiti','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('75','Honduras','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('76','Hungary','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('77','Iceland','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('78','India','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('79','Indonesia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('80','Iran','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('81','Iraq','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('82','Ireland','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('83','Israel','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('84','Italy','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('85','Jamaica','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('86','Japan','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('87','Jordan','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('88','Kazakhstan','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('89','Kenya','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('90','Kiribati','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('91','Korea, North','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('92','Korea, South','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('93','Kuwait','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('94','Kyrgyzstan','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('95','Laos','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('96','Latvia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('97','Lebanon','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('98','Lesotho','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('99','Liberia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('100','Libya','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('101','Liechtenstein','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('102','Lithuania','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('103','Luxembourg','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('104','Macedonia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('105','Madagascar','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('106','Malawi','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('107','Malaysia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('108','Maldives','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('109','Mali','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('110','Malta','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('111','Marshall Islands','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('112','Mauritania','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('113','Mauritius','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('114','Mexico','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('115','Micronesia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('116','Moldova','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('117','Monaco','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('118','Mongolia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('119','Morocco','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('120','Mozambique','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('121','Myanmar','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('122','Namibia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('123','Nauru','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('124','Nepa','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('125','Netherlands','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('126','New Zealand','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('127','Nicaragua','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('128','Niger','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('129','Nigeria','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('130','Norway','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('131','Oman','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('132','Pakistan','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('133','Palau','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('134','Panama','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('135','Papua New Guinea','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('136','Paraguay','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('137','Peru','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('138','Philippines','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('139','Poland','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('140','Portugal','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('141','Qatar','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('142','Romania','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('143','Russia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('144','Rwanda','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('145','Saint Kitts and Nevis','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('146','Saint Lucia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('147','Saint Vincent','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('148','Samoa','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('149','San Marino','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('150','Sao Tome and Principe','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('151','Saudi Arabia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('152','Senegal','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('153','Serbia and Montenegro','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('154','Seychelles','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('155','Sierra Leone','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('156','Singapore','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('157','Slovakia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('158','Slovenia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('159','Solomon Islands','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('160','Somalia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('161','South Africa','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('162','Spain','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('163','Sri Lanka','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('164','Sudan','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('165','Suriname','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('166','Swaziland','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('167','Sweden','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('168','Switzerland','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('169','Syria','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('170','Taiwan','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('171','Tajikistan','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('172','Tanzania','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('173','Thailand','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('174','Togo','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('175','Tonga','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('176','Trinidad and Tobago','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('177','Tunisia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('178','Turkey','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('179','Turkmenistan','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('180','Tuvalu','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('181','Uganda','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('182','Ukraine','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('183','United Arab Emirates','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('184','United Kingdom','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('185','United States','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('186','Uruguay','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('187','Uzbekistan','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('188','Vanuatu','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('189','Vatican City','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('190','Venezuela','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('191','Vietnam','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('192','Yemen','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('193','Zambia','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO countries VALUES('194','Zimbabwe','2017-02-01 00:00:00','2017-02-01 00:00:00');



DROP TABLE IF EXISTS diagnosticos;

CREATE TABLE `diagnosticos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO diagnosticos VALUES('1','106','HEMORRAGIA 3ER. TRIM. EMBARAZO (O20,O44-','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO diagnosticos VALUES('2','112','OTRAS COMPLICACIONES DEL EMBARAZO, PARTO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO diagnosticos VALUES('3','339','CONTROL DE EMBARAZO NORMAL (Z34)','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO diagnosticos VALUES('4','340','CONTROL DE EMBARAZO DE ALTO RIESGO (Z35)','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO diagnosticos VALUES('5','349','EMBARAZADAS CON PRUEBA DE V.D.R.L CUMPLI','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO diagnosticos VALUES('6','50','EMBARAZADAS CON PRUEBA DE HIV CUMPLIDA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO diagnosticos VALUES('7','109','INTENTO FALLIDO DE ABORTO (O07) (**)','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO diagnosticos VALUES('8','110','ABORTO (O00-O06,O08) (**)','2017-02-01 00:00:00','2017-02-01 00:00:00');



DROP TABLE IF EXISTS django_admin_log;

CREATE TABLE `django_admin_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action_time` datetime NOT NULL,
  `object_id` longtext,
  `object_repr` varchar(200) NOT NULL,
  `action_flag` smallint(5) unsigned NOT NULL,
  `change_message` longtext NOT NULL,
  `content_type_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `django_admin__content_type_id_c4bce8eb_fk_django_content_type_id` (`content_type_id`),
  KEY `django_admin_log_user_id_c564eba6_fk_auth_user_id` (`user_id`),
  CONSTRAINT `django_admin_log_user_id_c564eba6_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`),
  CONSTRAINT `django_admin__content_type_id_c4bce8eb_fk_django_content_type_id` FOREIGN KEY (`content_type_id`) REFERENCES `django_content_type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS django_content_type;

CREATE TABLE `django_content_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_label` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `django_content_type_app_label_76bd3d3b_uniq` (`app_label`,`model`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO django_content_type VALUES('1','admin','logentry');
INSERT INTO django_content_type VALUES('4','auth','group');
INSERT INTO django_content_type VALUES('2','auth','permission');
INSERT INTO django_content_type VALUES('3','auth','user');
INSERT INTO django_content_type VALUES('5','contenttypes','contenttype');
INSERT INTO django_content_type VALUES('7','corsheaders','corsmodel');
INSERT INTO django_content_type VALUES('14','pacientes','countrie');
INSERT INTO django_content_type VALUES('16','pacientes','etnia');
INSERT INTO django_content_type VALUES('12','pacientes','hospital');
INSERT INTO django_content_type VALUES('9','pacientes','localization');
INSERT INTO django_content_type VALUES('11','pacientes','municipio');
INSERT INTO django_content_type VALUES('8','pacientes','niveleducativo');
INSERT INTO django_content_type VALUES('17','pacientes','ocupacion');
INSERT INTO django_content_type VALUES('18','pacientes','paciente');
INSERT INTO django_content_type VALUES('10','pacientes','parroquia');
INSERT INTO django_content_type VALUES('15','pacientes','people');
INSERT INTO django_content_type VALUES('13','pacientes','typeblood');
INSERT INTO django_content_type VALUES('6','sessions','session');



DROP TABLE IF EXISTS django_migrations;

CREATE TABLE `django_migrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `applied` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO django_migrations VALUES('1','contenttypes','0001_initial','2017-03-01 08:53:01');
INSERT INTO django_migrations VALUES('2','auth','0001_initial','2017-03-01 08:53:08');
INSERT INTO django_migrations VALUES('3','admin','0001_initial','2017-03-01 08:53:10');
INSERT INTO django_migrations VALUES('4','admin','0002_logentry_remove_auto_add','2017-03-01 08:53:10');
INSERT INTO django_migrations VALUES('5','contenttypes','0002_remove_content_type_name','2017-03-01 08:53:12');
INSERT INTO django_migrations VALUES('6','auth','0002_alter_permission_name_max_length','2017-03-01 08:53:13');
INSERT INTO django_migrations VALUES('7','auth','0003_alter_user_email_max_length','2017-03-01 08:53:13');
INSERT INTO django_migrations VALUES('8','auth','0004_alter_user_username_opts','2017-03-01 08:53:14');
INSERT INTO django_migrations VALUES('9','auth','0005_alter_user_last_login_null','2017-03-01 08:53:15');
INSERT INTO django_migrations VALUES('10','auth','0006_require_contenttypes_0002','2017-03-01 08:53:16');
INSERT INTO django_migrations VALUES('11','auth','0007_alter_validators_add_error_messages','2017-03-01 08:53:16');
INSERT INTO django_migrations VALUES('12','auth','0008_alter_user_username_max_length','2017-03-01 08:53:17');
INSERT INTO django_migrations VALUES('13','pacientes','0001_initial','2017-03-01 08:53:30');
INSERT INTO django_migrations VALUES('14','pacientes','0002_auto_20170208_0411','2017-03-01 08:53:32');
INSERT INTO django_migrations VALUES('15','pacientes','0003_auto_20170208_0414','2017-03-01 08:53:33');
INSERT INTO django_migrations VALUES('16','pacientes','0004_paciente_es_emergencia','2017-03-01 08:53:34');
INSERT INTO django_migrations VALUES('17','pacientes','0005_auto_20170208_0529','2017-03-01 08:53:36');
INSERT INTO django_migrations VALUES('18','pacientes','0006_auto_20170208_0541','2017-03-01 08:53:37');
INSERT INTO django_migrations VALUES('19','pacientes','0007_hospital','2017-03-01 08:53:39');
INSERT INTO django_migrations VALUES('20','sessions','0001_initial','2017-03-01 08:53:40');



DROP TABLE IF EXISTS django_session;

CREATE TABLE `django_session` (
  `session_key` varchar(40) NOT NULL,
  `session_data` longtext NOT NULL,
  `expire_date` datetime NOT NULL,
  PRIMARY KEY (`session_key`),
  KEY `django_session_de54fa62` (`expire_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS doctors;

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `cod_sanitarios` varchar(30) NOT NULL,
  `specialty_id` int(11) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `status` varchar(20) NOT NULL,
  `hospitale_id` int(11) NOT NULL,
  `cargo_id` int(11) NOT NULL,
  `fecha_grado` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS etnias;

CREATE TABLE `etnias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO etnias VALUES('1','WayÃºu','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('2','AÃ±Ãº','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('3','KariÃ±a','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('4','Baniva o kurripako','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('5','Piapoko','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('6','PemÃ³n','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('7','Panare','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('8','Yukpa','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('9','Chaima','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('10','JaprerÃ­a','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('11','Maquiritare o Yekuana','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('12','Akawayo','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('13','Yabarana','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('14','Mapoyo','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('15','Yanomami','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('16','BarÃ­','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('17','Puinave','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('18','Hoti','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('19','SÃ¡liba','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('20','cuiva','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('21','Waraos','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('22','WaikerÃ­','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('23','PumÃ©','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('24','SapÃ©','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('25','Uruak','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO etnias VALUES('26','Jirafa','2017-02-01 00:00:00','2017-02-01 00:00:00');



DROP TABLE IF EXISTS histories;

CREATE TABLE `histories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anos_aprobados` int(1) NOT NULL,
  `numero_hijo` varchar(2) NOT NULL,
  `situacion_conyugal_id` int(11) NOT NULL,
  `analfabeta` varchar(10) NOT NULL,
  `nivel_educativo_id` int(11) NOT NULL,
  `observaciones` tinytext CHARACTER SET latin1,
  `patient_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `doctors_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_history_patients1_idx` (`patient_id`),
  KEY `fk_historys_doctors1_idx` (`doctors_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS hospitales;

CREATE TABLE `hospitales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `localization_id` int(11) DEFAULT NULL,
  `municipio_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `hospitales_localization_id_90500822_fk_localizations_id` (`localization_id`),
  KEY `hospitales_municipio_id_26d913a4_fk_municipios_id` (`municipio_id`),
  CONSTRAINT `hospitales_municipio_id_26d913a4_fk_municipios_id` FOREIGN KEY (`municipio_id`) REFERENCES `municipios` (`id`),
  CONSTRAINT `hospitales_localization_id_90500822_fk_localizations_id` FOREIGN KEY (`localization_id`) REFERENCES `localizations` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO hospitales VALUES('1','Ambulatorio 23 De Enero','2017-02-08 00:00:00','2017-02-08 00:00:00','2','4');
INSERT INTO hospitales VALUES('2','Ambulatorio Brisas Del Lago','2017-02-08 00:00:00','2017-02-08 00:00:00','3','4');
INSERT INTO hospitales VALUES('3','Ambulatorio del Norte','2017-02-08 00:00:00','2017-02-08 00:00:00','4','4');
INSERT INTO hospitales VALUES('4','Hospital Civil','2017-02-08 00:00:00','2017-02-08 00:00:00','5','4');
INSERT INTO hospitales VALUES('5','AMBULATORIO LAS ACACIAS','2017-02-08 00:00:00','2017-02-08 00:00:00','6','4');
INSERT INTO hospitales VALUES('6','CDI Los Cocos','2017-02-08 00:00:00','2017-02-08 00:00:00','7','4');
INSERT INTO hospitales VALUES('7','Medico Santa Marta','2017-02-08 00:00:00','2017-02-08 00:00:00','8','4');
INSERT INTO hospitales VALUES('8','Ambulatorio San Carlos','2017-02-08 00:00:00','2017-02-08 00:00:00','9','4');
INSERT INTO hospitales VALUES('9','Hospital Los Samanes','2017-02-08 00:00:00','2017-02-08 00:00:00','10','4');
INSERT INTO hospitales VALUES('10','Hospital Militar','2017-02-08 00:00:00','2017-02-08 00:00:00','11','4');
INSERT INTO hospitales VALUES('11','Ambulatorio las Flores','2017-02-08 00:00:00','2017-02-08 00:00:00','12','1');
INSERT INTO hospitales VALUES('12','Ambulatorio de Camatagua','2017-02-08 00:00:00','2017-02-08 00:00:00','13','2');
INSERT INTO hospitales VALUES('13','Hospital de Camatagua','2017-02-08 00:00:00','2017-02-08 00:00:00','14','2');
INSERT INTO hospitales VALUES('14','Ambulatorio de Paraparal','2017-02-08 00:00:00','2017-02-08 00:00:00','15','3');
INSERT INTO hospitales VALUES('15','Centro Clinico La Morita','2017-02-08 00:00:00','2017-02-08 00:00:00','16','3');
INSERT INTO hospitales VALUES('16','Proteccion civil lamas','2017-02-08 00:00:00','2017-02-08 00:00:00','17','5');
INSERT INTO hospitales VALUES('17','Hospital Dr. JosÃ© MarÃ­a BenÃ­t','2017-02-08 00:00:00','2017-02-08 00:00:00','18','6');
INSERT INTO hospitales VALUES('18','Hospital Nuestra SeÃ±ora De La','2017-02-08 00:00:00','2017-02-08 00:00:00','19','12');
INSERT INTO hospitales VALUES('19','CDI San Sebastian','2017-02-08 00:00:00','2017-02-08 00:00:00','20','12');
INSERT INTO hospitales VALUES('20','Ambulatorio de Turmero','2017-02-08 00:00:00','2017-02-08 00:00:00','21','13');
INSERT INTO hospitales VALUES('21','C.D.I Los Jabillos','2017-02-08 00:00:00','2017-02-08 00:00:00','22','13');
INSERT INTO hospitales VALUES('22','Hospital Jose Maria Vargas','2017-02-08 00:00:00','2017-02-08 00:00:00','23','15');



DROP TABLE IF EXISTS informs;

CREATE TABLE `informs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `indicaciones` tinytext CHARACTER SET latin1,
  `medicamento_id` int(11) NOT NULL,
  `diagnostico_id` int(11) NOT NULL,
  `conclusiones` tinytext CHARACTER SET latin1,
  `patients_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_informs_patients1_idx` (`patients_id`),
  KEY `fk_informs_doctor1_idx` (`doctor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO informs VALUES('1','cc','5','1','sdsdf','1','1','2017-02-02 15:04:21','2017-02-02 15:04:21');
INSERT INTO informs VALUES('2','','1','1','','5','1','2017-02-04 20:47:35','2017-02-04 20:47:35');



DROP TABLE IF EXISTS localizations;

CREATE TABLE `localizations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO localizations VALUES('1','10.0418301','-67.4917526','2017-02-09 01:56:14','2017-02-09 01:56:14');
INSERT INTO localizations VALUES('2','10.245567692695271','-67.62086033821106','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('3','10.223601514632362','-67.62187421321869','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('4','10.26819744067097','-67.58134603500366','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('5','10.247156631438664','-67.59618401527405','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('6','10.235500181815942','-67.5863067805767','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('7','10.2124012','-67.5860341','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('8','10.2430629','-67.57963210000003','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('9','10.2196378','-67.58683889999998','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('10','10.2194185','-67.5933915','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('11','10.2472625','-67.57402009999998','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('12','10.2041786','-67.41486129999998','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('13','9.7853168','-66.91256550000003','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('14','9.801342199999999','-66.90474999999998','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('15','10.2011046','-67.58208780000001','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('16','10.212874','-67.5572565','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('17','10.1830527','-67.51306','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('18','10.23325','-67.3246388','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('19','9.9490771','-67.17783029999998','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('20','9.947092699999999','-67.17540439999999','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('21','10.2277721','-67.4681354','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('22','10.2556317','-67.16354100000001','2017-02-08 00:00:00','2017-02-08 00:00:00');
INSERT INTO localizations VALUES('23','10.5168921','-66.9110905','2017-02-08 00:00:00','2017-02-08 00:00:00');



DROP TABLE IF EXISTS logs;

CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accion` varchar(45) DEFAULT NULL,
  `descripcion` tinytext,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS medicaments;

CREATE TABLE `medicaments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(60) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

INSERT INTO medicaments VALUES('1','Acido folico','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('2','Acido nalidixico','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('3','Acido pantotenico','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('4','Clroquina','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('5','Loncomicina','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('6','Nitrofuranroina','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('7','Nistatina','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('8','Metildopa','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('9','Hierro','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('10','Insulina','2017-02-01 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('11','Isoniacida','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('12','Levotiroxima','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('13','Liotironina','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('14','Nitrofuranroina','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('15','Nistalina','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('16','Acido folico','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('17','Acido nalidixico','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('18','Acido pantotenico','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('19','Clroquina','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('20','Loncomicina','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('21','Nitrofuranroina','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('22','Nistatina','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('23','Metildopa','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('24','Hierro','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('25','Insulina','2017-02-02 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('26','Isoniacida','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('27','Levotiroxima','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('28','Liotironina','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('29','Nitrofuranroina','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('30','Nistalina','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('31','Meridopa','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('32','Paracetamol','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('33','Meridopa','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO medicaments VALUES('34','Paracetamol','0000-00-00 00:00:00','0000-00-00 00:00:00');



DROP TABLE IF EXISTS municipios;

CREATE TABLE `municipios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO municipios VALUES('1','BolÃ­var','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('2','Camatagua','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('3','Francisco Linares AlcÃ¡ntara','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('4','Girardot','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('5','JosÃ© Ãngel Lamas','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('6','JosÃ© FÃ©lix Ribas','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('7','JosÃ© Rafael Revenga','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('8','Libertador','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('9','Mario BriceÃ±o Iragorry','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('10','Ocumare de la Costa de Oro','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('11','San Casimiro','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('12','San SebastiÃ¡n','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('13','Santiago MariÃ±o','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('14','Santos Michelena','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('15','Sucre','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('16','Tovar','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('17','Urdaneta','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO municipios VALUES('18','Zamora','0000-00-00 00:00:00','0000-00-00 00:00:00');



DROP TABLE IF EXISTS nivel_educativos;

CREATE TABLE `nivel_educativos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO nivel_educativos VALUES('1','NINGUNO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO nivel_educativos VALUES('2','POST-GRADO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO nivel_educativos VALUES('3','PRIMARIA COMPLETA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO nivel_educativos VALUES('4','PRIMARIA NO COMPLETA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO nivel_educativos VALUES('5','SECUNDARIA NO COMPLETA ','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO nivel_educativos VALUES('6','TECNICA COMPLETA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO nivel_educativos VALUES('7','TECNICA NO COMPLETA ','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO nivel_educativos VALUES('8','UNIVERSITARIA COMPLETA ','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO nivel_educativos VALUES('9','UNIVERSITARIA NO COMPLETA','2017-02-01 00:00:00','2017-02-01 00:00:00');



DROP TABLE IF EXISTS ocupacions;

CREATE TABLE `ocupacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=latin1;

INSERT INTO ocupacions VALUES('1','BIOLOGIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('2','FISICA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('3','MATEMATICA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('4','QUIMICA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('5','ARQUITECTURA Y URBANISMO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('6','ARQUITECTURA AERONAUTICA Y CIENCIAS NAUT','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('7','INGENIERIA CIVIL Y SIMILARES','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('8','INGENIERIA QUIMICA E INDUSTRIALES','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('9','INGENIERIA MECANICA, ELECTRICA Y ELECTRO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('10','INGENIERIA PETROLERA, MINAS E HIDROCARBU','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('11','ING. DE SISTEMAS, COMPUTACION E INFORMAT','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('12','ING. GEOLOGICA, GEOFISICA E HIDROMETEREO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('13','BIOLOGIA MARINA Y CIENCIAS APLIC. AL MAR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('14','ING. EN RECURSOS NATURALES RENOVABLES','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('15','ING. AGRONOMICA, AGRICOLA, AGROINDUSTRIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('16','INGENIERIA DE ALIMENTOS','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('17','MEDICINA VETERINARIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('18','ZOOTECNIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('19','EDUCACION PEDAGOGICA Y PREESCOLAR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('20','EDUCACION EN CIENCIAS BASICAS','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('21','EDUCACION EN CIENCIAS SOCIALES','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('22','EDUCACION EN CASTELLAN Y LITERAT., IDIOM','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('23','EDUCACION ESPECIAL','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('24','EDUCACION TECNICA INDUSTRIA Y COMERCIAL','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('25','EDUCACION AGROPECUARIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('26','EDUCACION FISICA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('27','ANTROPOLOGIA, SOCIOLOGIA Y TRABAJO SOCIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('28','ESTADISTICA Y CIENCIAS ACTUARIALES','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('29','ESTUDIOS INTERNACIONALES','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('30','COMUNICACION SOCIAL','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('31','GEOGRAFIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('32','PSICOLOGIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('33','RELACIONES INDUSTRIALES','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('34','TURISMO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('35','ECONOMIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('36','DERECHO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('37','ESTUDIOS POLITICOS','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('38','CIENCIAS ADMINISTRATIVAS GERENCIALES','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('39','CONTADURIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('40','CIENCIAS FISCALES Y FINANCIERAS','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('41','ARCHIVOLOGIA Y BIBLIOTECOLOGIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('42','ARTES Y MUSICA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('43','HISTORIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('44','IDIOMAS MODERNOS','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('45','LETRAS','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('46','FILOSOFIA Y TEOLOGIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('47','BIOANALISIS','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('48','ENFERMERIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('49','FARMACIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('50','MEDICINA Y PSIQUIATRIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('51','ODONTOLOGIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('52','NUTRICION Y DIETETICA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('53','CIENCIAS BASICAS','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('54','CONSTRUCCION Y DISENO DE OBRAS CIVILES','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('55','CIENCIAS MECANICAS, ELECTRICA Y ELECTRON','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('56','EXPLORACION Y EXPLOTACION DE MINAS, PETR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('57','INFORMATICA, SISTEMAS Y COMPUTACION','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('58','CIENCIAS DEL AGRO Y DEL MAR, RECURS NATU','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('59','EDUCACION Y PEDAGOGIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('60','ARTES, LETRAS Y SIMILARES','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('61','CIENCIAS SOCIALES Y SIMILARES','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('62','CIENCIAS ADMINISTRAT Y FINANCIER FISCAL','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('63','MERCADOTECNIA, PUBLICIDAD Y TURISMO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('64','CIENCIAS POLICIALES','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('65','CIENCIAS DE LA SALUD','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('66','CIENCIAS NAVALES','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('67','CIENCIAS Y ARTES MILITARES','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('68','ASCENSORISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('69','ACTOR, ARTISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('70','ADMINISTRADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('71','AGENTE DE SEGURIDAD , VIGILANTE , ESCOLT','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('72','AGENTE VIAJERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('73','AGRICULTOR, CULTIVADOR, GANADERO, AVICUL','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('74','ALBANIL','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('75','ALGUACIL','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('76','AMA DE CASA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('77','AMA DE LLAVES , MAYORDOMO , DOMESTICA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('78','ANALISTA DE OFICINA ','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('79','ANIMADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('80','ANTICUARIO , COLECCIONISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('81','ARBITRO DEPORTIVO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('82','ARCHIVISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('83','ARTESANO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('84','ARTISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('85','ARTISTA DE CIRCO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('86','ASEADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('87','ASERRADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('88','ASESOR , CONSULTOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('89','ASISTENTE','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('90','AZAFATA , ASISTENTE DE ABORDO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('91','BAILARIN','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('92','BARBERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('93','BARMAN','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('94','BIBLIOTECARIOS','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('95','BOMBERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('96','BUZO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('97','CADDY','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('98','CAJERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('99','CALETERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('100','CAMARERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('101','CAMAROGRAFO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('102','CAMBISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('103','CAMILLERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('104','CANTANTE','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('105','CANTINERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('106','CARPINTERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('107','CARTERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('108','CARTOGRAFO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('109','CATADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('110','CAUCHERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('111','CAZADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('112','CERRAJERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('113','COBRADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('114','COCINERO , CHEF','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('115','COMERCIANTE DE CHATARRA Y METALES ','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('116','COMERCIANTE INDEPENDIEN (BUHONERO, ETC.)','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('117','COMPOSITOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('118','COMPUTISTA , PROGRAMADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('119','CONDUCTOR (CHOFER, TAXISTA, GANDOLERO)','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('120','CONSERJE','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('121','CONSTRUCTOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('122','CONTABLE','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('123','CONTRATISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('124','COREOGRAFO ','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('125','CORREDOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('126','CORREDOR DE SEGUROS','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('127','COSMETOLOGO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('128','COSTURERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('129','CREATIVO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('130','CRISTALERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('131','CUIDADOR , NINERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('132','DECORADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('133','DEPORTISTA (ATLETA)','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('134','DESEMPLEADO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('135','DETECTIVE , INVESTIGADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('136','DIBUJANTE','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('137','DIRECTOR ','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('138','DISENADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('139','DISCJOCKEY','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('140','DOCENTE (PROFESOR , MAESTRO) ','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('141','EBANISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('142','ELECTRICISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('143','EMPLEADO DE OFICINA O NEGOCIO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('144','ENCUESTADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('145','ENFERMERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('146','ENTRENADOR DEPORTIVO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('147','ESCENOGRAFO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('148','ESCRITOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('149','ESCULTOR , TALLADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('150','ESOTERICO, BRUJO, VIDENTE, ASTROLOGO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('151','ESTILISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('152','ESTUDIANTE','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('153','EXPLOSIVISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('154','FISCAL DE TRANSITO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('155','FLORISTERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('156','FOTOGRAFO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('157','FUMIGADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('158','FUNCIONARIO EXTRANJ (EMBAJADA, CONSULAD)','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('159','FUNCIONARIO PUBLICO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('160','FUNCIONARIO PUBLICO DE ELECCION POPULAR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('161','GERENTE','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('162','GESTOR ','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('163','GRANITERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('164','GUARDAPARQUES , GUARDABOSQUES','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('165','GUIA TURISTICO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('166','HERRERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('167','HERRERO, FORJADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('168','INSPECTOR DE SINIESTRO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('169','INSTRUCTOR (DE MANEJO, DE ALGUN OFICIO)','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('170','INTERPRETE ','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('171','JARDINERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('172','JEFE','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('173','JINETE','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('174','JOYERO , ORFEBRE','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('175','JUBILADO , PENSIONADO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('176','LABORATORISTA (TECNICO)','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('177','LAVANDERO , LIMPIADOR , PLANCHADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('178','LENADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('179','LICORERO , BODEGUERO , LUNCHERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('180','LIMOSNERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('181','LIMPIABOTAS','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('182','LOCUTOR DE RADIO , TV','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('183','LOQUERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('184','LOTERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('185','MALETERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('186','MANICURISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('187','MAQUINISTA DE AVION , DE NAVEGACION','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('188','MASAJISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('189','MAYORDOMO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('190','MECANICO , LATONERO , PINTOR DE VEHICULO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('191','MECANOGRAFO , ESCRIBIENTE , TRANSCRIPTOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('192','MENSAJERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('193','MESONERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('194','MILITAR ','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('195','MINERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('196','MINERO , CANTERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('197','MODELO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('198','MOTORIZADO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('199','MUSICO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('200','OBRERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('201','OFICINISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('202','OPERADOR DE EQUIPOS Y MAQUINAS','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('203','PANADERO, PASTELERO, CARNICERO, QUESERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('204','PARAMEDICO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('205','PARQUERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('206','PASANTE','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('207','PEDICURISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('208','PELUQUERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('209','PERITO , VALUADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('210','PESCADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('211','PILOTO DE AVION , NAVEGACION , VEHICULO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('212','PINTOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('213','PLOMERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('214','POLICIA ','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('215','POLITICO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('216','PORTERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('217','PREPARADOR DE PAPEL','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('218','PRESIDENTE (EMPRESA, CLUB, ORGANIZACION)','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('219','PRESTAMISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('220','PRODUCTOR (TEATRO, CINE, RADIO O TV)','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('221','PUBLICISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('222','RECEPCIONISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('223','RECREADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('224','RECTOR , VICERECTOR , DECANO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('225','RELOJERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('226','SACERDOTE , RELIGIOSO , MONJA , PASTOR ','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('227','SALVAVIDAS , RESCATISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('228','SASTRE ','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('229','SECRETARIA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('230','SINDICALISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('231','SOLDADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('232','SUBASTADOR , TASADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('233','SUPERVISOR , COORDINADOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('234','TABAQUERO , CIGARRERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('235','TALLADOR ','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('236','TAPICERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('237','TAQUIGRAFO , MECANOGRAFO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('238','TECNICO DE EQUIPOS ELECTRICOS, ELECTRONI','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('239','TECNICO DE LAS CIENCIAS MEDICAS','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('240','TECNICO DE MINAS','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('241','TECNICO DE SONIDO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('242','TECNICO EN CIENCIAS BIOLOGICAS Y AGRONOM','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('243','TECNICO EN CIENCIAS FISICAS Y QUIMICAS','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('244','TECNICO MECANICO , METALURGICO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('245','TELEFONISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('246','TELEGRAFISTA','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('247','TINTORERO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('248','TIPOGRAFO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('249','TOPOGRAFO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('250','TRABAJADOR SEXUAL','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('251','TRADUCTOR','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('252','VENDEDOR , PROMOTOR ','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('253','VENDEDOR DE BIENES RAICES','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('254','VISITADOR MEDICO','2017-02-01 00:00:00','2017-02-01 00:00:00');
INSERT INTO ocupacions VALUES('255','ZAPATERO ','2017-02-01 00:00:00','2017-02-01 00:00:00');



DROP TABLE IF EXISTS parroquias;

CREATE TABLE `parroquias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO parroquias VALUES('1','Parroquia BolÃ­var','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('2','Parroquia Camatagua','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('3','Parroquia Carmen de Cura','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('4','Santa Rita','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('5','Parroquia Francisco de Miranda','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('6','Parroquia MoseÃ±or Feliciano GonzÃ¡lez','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('7','Pedro JosÃ© Ovalles','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('8','JoaquÃ­n Crespo','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('9','JosÃ© Casanova Godoy','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('10','Madre MarÃ­a de San JosÃ©','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('11','AndrÃ©s Eloy Blanco','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('12','Los Tacarigua','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('13',' Las Delicias','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('14','ChoronÃ­','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('15','Parroquia Santa Cruz','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('16','JosÃ© FÃ©lix Ribas','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('17','Castor Nieves RÃ­os','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('18','Las Guacamayas','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('19','Pao de ZÃ¡rate','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('20','Parroquia Zuata','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('21','Parroquia JosÃ© Rafael Revenga','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('22','Parroquia Palo Negro','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('23','Parroquia San MartÃ­n de Porres','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('24','Parroquia El LimÃ³n','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('25','Parroquia CaÃ±a de AzÃºcar','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('26','Parroquia Ocumare de la Costa','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('27','Parroquia San Casimiro','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('28','Parroquia GÃ¼iripa','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('29','Parroquia Ollas de Caramacate','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('30','Parroquia Valle MorÃ­n','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('31','Parroquia San SebastÃ­an','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('32','Parroquia Turmero','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('33','Parroquia Arevalo Aponte','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('34','Parroquia Chuao','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('35','Parroquia SamÃ¡n de GÃ¼ere','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('36','Alfredo Pacheco Miranda','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('37','Parroquia Santos Michelena','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('38','Parroquia Tiara','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('39','Parroquia Cagua','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('40','Parroquia Bella Vista','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('41','Parroquia Tovar','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('42','Parroquia Urdaneta','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('43','Parroquia Las PeÃ±itas','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('44','Parroquia San Francisco de Cara','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('45','Parroquia Taguay','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('46','Parroquia Villa de Cura','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('47','Parroquia Magdaleno','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('48','Parroquia San Francisco de AsÃ­s','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('49','Parroquia Valles de Tucutunemo','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO parroquias VALUES('50','Parroquia Augusto Mijares','0000-00-00 00:00:00','0000-00-00 00:00:00');



DROP TABLE IF EXISTS patients;

CREATE TABLE `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urbanizacion_res` varchar(100) NOT NULL,
  `avenida_res` varchar(100) NOT NULL,
  `casa_res` varchar(100) NOT NULL,
  `piso_res` varchar(100) NOT NULL,
  `tiempo_residencia` varchar(100) NOT NULL,
  `fpp` date NOT NULL,
  `fun` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `country_id` int(11) NOT NULL,
  `etnia_id` int(11) NOT NULL,
  `localization_id` int(11) DEFAULT NULL,
  `municipio_id` int(11) NOT NULL,
  `ocupacion_id` int(11) NOT NULL,
  `parroquia_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `type_blood_id` int(11) NOT NULL,
  `es_emergencia` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `patients_person_id_8e26e2ac_uniq` (`person_id`),
  KEY `patients_country_id_abb89cbf_fk_countries_id` (`country_id`),
  KEY `patients_etnia_id_18fc966b_fk_etnias_id` (`etnia_id`),
  KEY `patients_municipio_id_c13eb5d9_fk_municipios_id` (`municipio_id`),
  KEY `patients_ocupacion_id_b772a7ac_fk_ocupacions_id` (`ocupacion_id`),
  KEY `patients_7291f089` (`parroquia_id`),
  KEY `patients_a8452ca7` (`person_id`),
  KEY `patients_ddf2f16d` (`type_blood_id`),
  KEY `patients_localization_id_1b14961a_fk_localizations_id` (`localization_id`),
  CONSTRAINT `patients_person_id_8e26e2ac_fk_people_id` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`),
  CONSTRAINT `patients_country_id_abb89cbf_fk_countries_id` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  CONSTRAINT `patients_etnia_id_18fc966b_fk_etnias_id` FOREIGN KEY (`etnia_id`) REFERENCES `etnias` (`id`),
  CONSTRAINT `patients_localization_id_1b14961a_fk_localizations_id` FOREIGN KEY (`localization_id`) REFERENCES `localizations` (`id`),
  CONSTRAINT `patients_municipio_id_c13eb5d9_fk_municipios_id` FOREIGN KEY (`municipio_id`) REFERENCES `municipios` (`id`),
  CONSTRAINT `patients_ocupacion_id_b772a7ac_fk_ocupacions_id` FOREIGN KEY (`ocupacion_id`) REFERENCES `ocupacions` (`id`),
  CONSTRAINT `patients_parroquia_id_a3cec503_fk_parroquias_id` FOREIGN KEY (`parroquia_id`) REFERENCES `parroquias` (`id`),
  CONSTRAINT `patients_type_blood_id_078f2c53_fk_type_bloods_id` FOREIGN KEY (`type_blood_id`) REFERENCES `type_bloods` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS people;

CREATE TABLE `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nacionalidad` varchar(100) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nombre2` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `apellido2` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `telefono_habitacion` varchar(100) NOT NULL,
  `telefono_movil` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha_nac` date NOT NULL,
  `fecha_defuncio` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS questions;

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `diabetico` varchar(10) NOT NULL,
  `hipertenso` varchar(10) NOT NULL,
  `tbc` varchar(10) NOT NULL,
  `preeclampcia` varchar(10) NOT NULL,
  `eclampcia` varchar(10) NOT NULL,
  `cirugia_genito` varchar(10) NOT NULL,
  `cardiopatia` varchar(10) NOT NULL,
  `nefropatia` varchar(10) NOT NULL,
  `neuropatia` varchar(10) NOT NULL,
  `violencia` varchar(10) NOT NULL,
  `tbc_familiar` varchar(10) NOT NULL,
  `hipertenso_familiar` varchar(10) NOT NULL,
  `embarazo_planeado` varchar(10) NOT NULL,
  `estado_civil` varchar(10) NOT NULL,
  `vive_sola` varchar(10) NOT NULL,
  `aborto` int(2) NOT NULL,
  `cesaria` int(1) NOT NULL,
  `parto` int(2) NOT NULL,
  `embarazos_previos` int(2) NOT NULL,
  `nacidos_muertos` int(2) NOT NULL,
  `nacidos_vivos` int(2) NOT NULL,
  `fracaso_anticon` varchar(10) NOT NULL,
  `fumador_act` varchar(10) NOT NULL,
  `fumador_pas` varchar(10) NOT NULL,
  `drogas` varchar(10) NOT NULL,
  `alcohol` varchar(10) NOT NULL,
  `antirubiola` varchar(10) NOT NULL,
  `antitetanica` varchar(10) NOT NULL,
  `chagas` varchar(10) NOT NULL,
  `paludismo` varchar(10) NOT NULL,
  `mamas` varchar(10) NOT NULL,
  `bacteriuria` varchar(10) NOT NULL,
  `EG` varchar(10) NOT NULL,
  `glusemia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS rols;

CREATE TABLE `rols` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO rols VALUES('1','Administrador','2016-12-12 23:00:00','2016-12-12 23:12:00');
INSERT INTO rols VALUES('2','Doctor','2016-12-12 23:00:00','2016-12-12 23:28:00');
INSERT INTO rols VALUES('3','Paciente','2016-12-12 23:00:00','2016-12-12 23:23:00');



DROP TABLE IF EXISTS specialties;

CREATE TABLE `specialties` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO specialties VALUES('1','Ginecologo','2016-11-07 04:43:53','2016-11-07 04:43:53');
INSERT INTO specialties VALUES('2','Obstetra','2017-01-21 21:11:45','2017-01-21 21:11:45');



DROP TABLE IF EXISTS type_bloods;

CREATE TABLE `type_bloods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `factor_rh` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO type_bloods VALUES('1','A','0000-00-00 00:00:00','0000-00-00 00:00:00','+');
INSERT INTO type_bloods VALUES('2','B','0000-00-00 00:00:00','0000-00-00 00:00:00','+');
INSERT INTO type_bloods VALUES('3','AB','0000-00-00 00:00:00','0000-00-00 00:00:00','+');
INSERT INTO type_bloods VALUES('4','O','0000-00-00 00:00:00','0000-00-00 00:00:00','+');
INSERT INTO type_bloods VALUES('5','A','0000-00-00 00:00:00','0000-00-00 00:00:00','-');
INSERT INTO type_bloods VALUES('6','B','0000-00-00 00:00:00','0000-00-00 00:00:00','-');
INSERT INTO type_bloods VALUES('7','AB','0000-00-00 00:00:00','0000-00-00 00:00:00','-');
INSERT INTO type_bloods VALUES('8','O','0000-00-00 00:00:00','0000-00-00 00:00:00','-');



DROP TABLE IF EXISTS type_ultrasounds;

CREATE TABLE `type_ultrasounds` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO type_ultrasounds VALUES('1','EcografÃ­a bidimensional o 2D','2016-12-13 09:08:35','2016-12-13 09:17:58');
INSERT INTO type_ultrasounds VALUES('2','EcografÃ­a Doppler  color','2016-12-13 09:22:17','2016-12-13 09:22:17');
INSERT INTO type_ultrasounds VALUES('3','EcografÃ­a Doppler pulsado','2016-12-13 09:22:33','2016-12-13 09:22:33');
INSERT INTO type_ultrasounds VALUES('4','EcografÃ­a tridimensional o 3D','2016-12-13 09:22:52','2016-12-13 09:22:52');
INSERT INTO type_ultrasounds VALUES('5','EcografÃ­a 4D o 3D en movimiento','2016-12-13 09:23:40','2016-12-13 09:23:40');



DROP TABLE IF EXISTS ultrasounds;

CREATE TABLE `ultrasounds` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `semanas` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto_dir` varchar(255) NOT NULL,
  `descripcion` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `doctor` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `conclusiones` tinytext CHARACTER SET latin1,
  `type_ultrasound_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO ultrasounds VALUES('2','2017-02-06','6','ccs.png','2','lulu','el tipo','el tipo llego con un bea','1','1','2017-02-06 05:26:08','2017-02-06 05:26:08');



DROP TABLE IF EXISTS users;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `rols_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO users VALUES('1','my_app@gmail.com','$2y$10$0PQEyAG9ZPVwqhKika15fuYWPAQv5RfgeHk6k9.kq3OpqAkYYFAIG','1','2016-12-07 03:46:13','2016-12-13 03:10:33');
INSERT INTO users VALUES('13','my_app1@gmail.com','$2y$10$0utDKx.nRta4SvejJA1QH.GUW8dnoT5UvkEU7U0SXKgVnj6Q/gnZq','2','2017-02-02 14:58:33','2017-02-02 14:58:33');
INSERT INTO users VALUES('14','my_app2@gmail.com','$2y$10$VEw8HEyOaHHY9FHjMxkhtuyo7fcTaFvTlKBRO.TwO06TF1nUP7r.G','2','2017-02-03 22:00:05','2017-02-03 22:00:05');



