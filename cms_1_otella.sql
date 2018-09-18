/*
SQLyog Ultimate
MySQL - 10.1.10-MariaDB : Database - cms_1_otella
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `career` */

DROP TABLE IF EXISTS `career`;

CREATE TABLE `career` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `editable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(128) NOT NULL DEFAULT '',
  `number` varchar(128) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `date` int(10) unsigned NOT NULL DEFAULT '0',
  `status` varchar(128) NOT NULL DEFAULT '',
  `date_end` int(10) unsigned NOT NULL DEFAULT '0',
  `subtitle` varchar(255) NOT NULL DEFAULT '',
  `responsibility` text NOT NULL,
  `requirement` text NOT NULL,
  `name_lang` varchar(255) NOT NULL DEFAULT '',
  `subtitle_lang` varchar(255) NOT NULL DEFAULT '',
  `responsibility_lang` text NOT NULL,
  `requirement_lang` text NOT NULL,
  `author_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `career` */

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `editable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(128) NOT NULL DEFAULT '',
  `number` varchar(128) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `date` int(10) unsigned NOT NULL DEFAULT '0',
  `status` varchar(128) NOT NULL DEFAULT '',
  `author_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `category` */

/*Table structure for table `header` */

DROP TABLE IF EXISTS `header`;

CREATE TABLE `header` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `editable` tinyint(1) NOT NULL DEFAULT '1',
  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
  `header_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(128) NOT NULL DEFAULT '',
  `number` varchar(128) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `date` int(10) unsigned NOT NULL DEFAULT '0',
  `status` varchar(128) NOT NULL DEFAULT '',
  `name_lang` varchar(128) NOT NULL DEFAULT '',
  `link` varchar(255) NOT NULL DEFAULT '',
  `anchor` varchar(255) NOT NULL DEFAULT '',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `author_name` varchar(255) NOT NULL DEFAULT '',
  `header_type` varchar(128) NOT NULL DEFAULT '',
  `header_number` varchar(128) NOT NULL DEFAULT '',
  `header_name` varchar(255) NOT NULL DEFAULT '',
  `header_date` int(10) unsigned NOT NULL DEFAULT '0',
  `header_status` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  KEY `header_id` (`header_id`),
  KEY `date` (`date`),
  KEY `header_date` (`header_date`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `header` */

insert  into `header`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`name_lang`,`link`,`anchor`,`sort`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`) values (1,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,0,'Hidden','','HOME',0,'','','#header','',0,'Super Admin','','','',0,'');
insert  into `header`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`name_lang`,`link`,`anchor`,`sort`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`) values (2,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,0,'Navbar','','PORTFOLIO',0,'','PORTFOLIO','#previous-works','PreviousWorks',0,'Super Admin','','','',0,'');
insert  into `header`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`name_lang`,`link`,`anchor`,`sort`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`) values (3,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,0,'Navbar','','ABOUT US',0,'','TENTANG KAMI','#about-us','AboutUs',0,'Super Admin','','','',0,'');
insert  into `header`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`name_lang`,`link`,`anchor`,`sort`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`) values (4,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,0,'Navbar','','NEWS & GALLERY',0,'','BERITA & GALERI','#news-and-gallery','NewsAndGallery',0,'Super Admin','','','',0,'');
insert  into `header`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`name_lang`,`link`,`anchor`,`sort`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`) values (5,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,0,'Navbar','','CONTACT US',0,'','KONTAK KAMI','#contact-us','ContactUs',0,'Super Admin','','','',0,'');
insert  into `header`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`name_lang`,`link`,`anchor`,`sort`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`) values (6,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,0,'Navbar','','CAREER',0,'','KARIR','#career','Career',0,'Super Admin','','','',0,'');
insert  into `header`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`name_lang`,`link`,`anchor`,`sort`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`) values (7,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,0,'Navbar','','SERVICES',0,'','LAYANAN','#services','Services',0,'Super Admin','','','',0,'');

/*Table structure for table `image` */

DROP TABLE IF EXISTS `image`;

CREATE TABLE `image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `editable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
  `career_id` int(10) unsigned NOT NULL DEFAULT '0',
  `section_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(128) NOT NULL DEFAULT '',
  `number` varchar(128) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `date` int(10) unsigned NOT NULL DEFAULT '0',
  `status` varchar(128) NOT NULL DEFAULT '',
  `ext` varchar(128) NOT NULL DEFAULT '',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `page` varchar(128) NOT NULL DEFAULT '',
  `author_name` varchar(255) NOT NULL DEFAULT '',
  `career_type` varchar(128) NOT NULL DEFAULT '',
  `career_number` varchar(128) NOT NULL DEFAULT '',
  `career_name` varchar(255) NOT NULL DEFAULT '',
  `career_date` int(10) NOT NULL DEFAULT '0',
  `career_status` varchar(128) NOT NULL DEFAULT '',
  `section_type` varchar(128) NOT NULL DEFAULT '',
  `section_number` varchar(128) NOT NULL DEFAULT '',
  `section_name` varchar(255) NOT NULL DEFAULT '',
  `section_date` int(10) unsigned NOT NULL DEFAULT '0',
  `section_status` varchar(128) NOT NULL DEFAULT '',
  `user_type` varchar(128) NOT NULL DEFAULT '',
  `user_number` varchar(128) NOT NULL DEFAULT '',
  `user_name` varchar(255) NOT NULL DEFAULT '',
  `user_date` int(10) unsigned NOT NULL DEFAULT '0',
  `user_status` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  KEY `section_id` (`section_id`),
  KEY `user_id` (`user_id`),
  KEY `date` (`date`),
  KEY `section_date` (`section_date`),
  KEY `user_date` (`user_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `image` */

/*Table structure for table `log` */

DROP TABLE IF EXISTS `log`;

CREATE TABLE `log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `editable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ref_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(128) NOT NULL DEFAULT '',
  `number` varchar(128) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `date` int(10) unsigned NOT NULL DEFAULT '0',
  `status` varchar(128) NOT NULL DEFAULT '',
  `query` text NOT NULL,
  `author_name` varchar(255) NOT NULL DEFAULT '',
  `ref_type` varchar(128) NOT NULL DEFAULT '',
  `ref_number` varchar(128) NOT NULL DEFAULT '',
  `ref_name` varchar(128) NOT NULL DEFAULT '',
  `ref_date` int(10) unsigned NOT NULL DEFAULT '0',
  `ref_status` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  KEY `ref_id` (`ref_id`),
  KEY `date` (`date`),
  KEY `ref_date` (`ref_date`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `log` */

insert  into `log`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`ref_id`,`type`,`number`,`name`,`date`,`status`,`query`,`author_name`,`ref_type`,`ref_number`,`ref_name`,`ref_date`,`ref_status`) values (1,'2018-08-29 13:11:59','2018-08-29 13:11:59',1,1,1,0,'Setting','','Update Setting',1535523119,'','UPDATE `setting` SET `value` = \'info@otellaconstruction.co.id\'\nWHERE `name` = \'system_email_send_to\'\nUPDATE `setting` SET `value` = \'\'\nWHERE `name` = \'system_email_send_cc\'\nUPDATE `setting` SET `value` = \'1\'\nWHERE `name` = \'setting__website_enabled_dual_language\'\nUPDATE `setting` SET `value` = \'EN\'\nWHERE `name` = \'setting__system_language\'\nUPDATE `setting` SET `value` = \'ID\'\nWHERE `name` = \'setting__system_language2\'\nUPDATE `setting` SET `value` = \'0\'\nWHERE `name` = \'setting__system_main_website_maintenance\'\n','Super Admin','','','',0,'');
insert  into `log`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`ref_id`,`type`,`number`,`name`,`date`,`status`,`query`,`author_name`,`ref_type`,`ref_number`,`ref_name`,`ref_date`,`ref_status`) values (2,'2018-09-07 14:07:40','2018-09-07 14:07:40',1,1,1,0,'Setting','','Update Setting',1536304060,'','UPDATE `setting` SET `value` = \'info@otellaconstruction.co.id\'\nWHERE `name` = \'system_email_send_to\'\nUPDATE `setting` SET `value` = \'\'\nWHERE `name` = \'system_email_send_cc\'\nUPDATE `setting` SET `value` = \'info@otellaconstruction.co.id\'\nWHERE `name` = \'system_email_send2_to\'\nUPDATE `setting` SET `value` = \'\'\nWHERE `name` = \'system_email_send2_cc\'\nUPDATE `setting` SET `value` = \'info@otellaconstruction.co.id\'\nWHERE `name` = \'system_email_send3_to\'\nUPDATE `setting` SET `value` = \'\'\nWHERE `name` = \'system_email_send3_cc\'\nUPDATE `setting` SET `value` = \'info@otellaconstruction.co.id\'\nWHERE `name` = \'system_email_send4_to\'\nUPDATE `setting` SET `value` = \'\'\nWHERE `name` = \'system_email_send4_cc\'\nUPDATE `setting` SET `value` = \'career@otellaconstruction.co.id\'\nWHERE `name` = \'system_email_send5_to\'\nUPDATE `setting` SET `value` = \'\'\nWHERE `name` = \'system_email_send5_cc\'\nUPDATE `setting` SET `value` = \'1\'\nWHERE `name` = \'setting__website_enabled_dual_language\'\nUPDATE `setting` SET `value` = \'EN\'\nWHERE `name` = \'setting__system_language\'\nUPDATE `setting` SET `value` = \'ID\'\nWHERE `name` = \'setting__system_language2\'\nUPDATE `setting` SET `value` = \'0\'\nWHERE `name` = \'setting__system_main_website_maintenance\'\n','Super Admin','','','',0,'');
insert  into `log`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`ref_id`,`type`,`number`,`name`,`date`,`status`,`query`,`author_name`,`ref_type`,`ref_number`,`ref_name`,`ref_date`,`ref_status`) values (3,'2018-09-07 14:14:27','2018-09-07 14:14:27',1,1,1,0,'Setting','','Update Setting',1536304467,'','UPDATE `setting` SET `value` = \'info@otellaconstruction.co.id\'\nWHERE `name` = \'system_email_send_to\'\nUPDATE `setting` SET `value` = \'\'\nWHERE `name` = \'system_email_send_cc\'\nUPDATE `setting` SET `value` = \'info@otellaconstruction.co.id\'\nWHERE `name` = \'system_email_send2_to\'\nUPDATE `setting` SET `value` = \'\'\nWHERE `name` = \'system_email_send2_cc\'\nUPDATE `setting` SET `value` = \'info@otellaconstruction.co.id\'\nWHERE `name` = \'system_email_send3_to\'\nUPDATE `setting` SET `value` = \'\'\nWHERE `name` = \'system_email_send3_cc\'\nUPDATE `setting` SET `value` = \'info@otellaconstruction.co.id\'\nWHERE `name` = \'system_email_send4_to\'\nUPDATE `setting` SET `value` = \'\'\nWHERE `name` = \'system_email_send4_cc\'\nUPDATE `setting` SET `value` = \'career@otellaconstruction.co.id\'\nWHERE `name` = \'system_email_send5_to\'\nUPDATE `setting` SET `value` = \'\'\nWHERE `name` = \'system_email_send5_cc\'\nUPDATE `setting` SET `value` = \'1\'\nWHERE `name` = \'setting__website_enabled_dual_language\'\nUPDATE `setting` SET `value` = \'EN\'\nWHERE `name` = \'setting__system_language\'\nUPDATE `setting` SET `value` = \'ID\'\nWHERE `name` = \'setting__system_language2\'\nUPDATE `setting` SET `value` = \'0\'\nWHERE `name` = \'setting__system_main_website_maintenance\'\nUPDATE `setting` SET `value` = \'0\'\nWHERE `name` = \'setting__system_main_search_function\'\n','Super Admin','','','',0,'');
insert  into `log`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`ref_id`,`type`,`number`,`name`,`date`,`status`,`query`,`author_name`,`ref_type`,`ref_number`,`ref_name`,`ref_date`,`ref_status`) values (4,'2018-09-12 10:19:45','2018-09-12 10:19:45',1,1,1,1,'Career','','Add career asd',1536722385,'','INSERT INTO `career` (`name`, `subtitle`, `date`, `date_end`, `requirement`, `responsibility`, `name_lang`, `subtitle_lang`, `requirement_lang`, `responsibility_lang`, `created`, `author_id`, `author_name`) VALUES (\'asd\', \'adasd\', 1536685200, 1538154000, \'\', \'\', \'asd\', \'asd\', \'\', \'\', NULL, \'1\', \'Super Admin\')','Super Admin','','','asd',1536685200,'');
insert  into `log`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`ref_id`,`type`,`number`,`name`,`date`,`status`,`query`,`author_name`,`ref_type`,`ref_number`,`ref_name`,`ref_date`,`ref_status`) values (5,'2018-09-12 10:46:18','2018-09-12 10:46:18',1,1,1,1,'Career','','Edit career asd to asd',1536723978,'','UPDATE `career` SET `name` = \'asd\', `subtitle` = \'adasd\', `date` = 1536685200, `date_end` = 1538154000, `requirement` = \'<p>asd</p>\', `responsibility` = \'<p>asd</p>\', `name_lang` = \'asd\', `subtitle_lang` = \'asd\', `requirement_lang` = \'<p>asfas</p>\', `responsibility_lang` = \'<p>fsafa</p>\'\nWHERE `id` = \'1\'','Super Admin','','','asd',1536685200,'');
insert  into `log`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`ref_id`,`type`,`number`,`name`,`date`,`status`,`query`,`author_name`,`ref_type`,`ref_number`,`ref_name`,`ref_date`,`ref_status`) values (6,'2018-09-12 10:47:26','2018-09-12 10:47:26',1,1,1,1,'Career','','Delete career asd',1536724046,'','DELETE FROM `career`\nWHERE `id` = \'1\'','Super Admin','','','',0,'');

/*Table structure for table `metatag` */

DROP TABLE IF EXISTS `metatag`;

CREATE TABLE `metatag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `editable` tinyint(1) NOT NULL DEFAULT '1',
  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
  `header_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(128) NOT NULL DEFAULT '',
  `number` varchar(128) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `date` int(10) unsigned NOT NULL DEFAULT '0',
  `status` varchar(128) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `author` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(155) NOT NULL DEFAULT '',
  `author_name` varchar(255) NOT NULL DEFAULT '',
  `header_type` varchar(128) NOT NULL DEFAULT '',
  `header_number` varchar(128) NOT NULL DEFAULT '',
  `header_name` varchar(255) NOT NULL DEFAULT '',
  `header_date` int(10) unsigned NOT NULL DEFAULT '0',
  `header_status` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  KEY `header_id` (`header_id`),
  KEY `date` (`date`),
  KEY `header_date` (`header_date`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `metatag` */

insert  into `metatag`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`keywords`,`author`,`description`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`) values (1,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,1,'','','Otella Construction | Home Page',0,'','otella construction home page','Label Ideas & Co.','Otella Construction Home Page','Super Admin','Hidden','','HOME',0,'');
insert  into `metatag`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`keywords`,`author`,`description`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`) values (2,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,3,'','','Otella Construction | About Us',0,'','otella construction about us page','Label Ideas & Co.','Otella Construction About Us Page','Super Admin','Navbar','','ABOUT US',0,'');
insert  into `metatag`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`keywords`,`author`,`description`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`) values (3,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,7,'','','Otella Construction | Services Page',0,'','otella construction services page','Label Ideas & Co.','Otella Construction Services Page','Super Admin','Navbar','','SERVICES',0,'');

/*Table structure for table `module` */

DROP TABLE IF EXISTS `module`;

CREATE TABLE `module` (
  `id` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `editable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(128) NOT NULL DEFAULT '',
  `number` varchar(128) NOT NULL DEFAULT '',
  `name` varchar(128) NOT NULL DEFAULT '',
  `date` varchar(128) NOT NULL DEFAULT '',
  `status` varchar(128) NOT NULL DEFAULT '',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `add` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `delete` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `edit` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `list` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `starter` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `standard` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `enterprise` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `custom` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `author_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `module` */

insert  into `module`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`type`,`number`,`name`,`date`,`status`,`sort`,`add`,`delete`,`edit`,`list`,`starter`,`standard`,`enterprise`,`custom`,`author_name`) values ('career','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'Career','1','Career','','',3,1,1,1,1,1,1,1,0,'Super Admin');
insert  into `module`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`type`,`number`,`name`,`date`,`status`,`sort`,`add`,`delete`,`edit`,`list`,`starter`,`standard`,`enterprise`,`custom`,`author_name`) values ('category','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'Category','1','Category','','',2,1,1,1,1,1,1,1,0,'Super Admin');
insert  into `module`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`type`,`number`,`name`,`date`,`status`,`sort`,`add`,`delete`,`edit`,`list`,`starter`,`standard`,`enterprise`,`custom`,`author_name`) values ('company_details','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'Setting','2','Company Details','','',99,0,0,1,0,1,1,1,0,'Super Admin');
insert  into `module`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`type`,`number`,`name`,`date`,`status`,`sort`,`add`,`delete`,`edit`,`list`,`starter`,`standard`,`enterprise`,`custom`,`author_name`) values ('setting','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'Setting','1','Setting','','',99,0,0,1,0,1,1,1,0,'Super Admin');
insert  into `module`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`type`,`number`,`name`,`date`,`status`,`sort`,`add`,`delete`,`edit`,`list`,`starter`,`standard`,`enterprise`,`custom`,`author_name`) values ('system_log','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'Log','1','System Log','','',98,0,0,0,1,1,1,1,0,'Super Admin');
insert  into `module`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`type`,`number`,`name`,`date`,`status`,`sort`,`add`,`delete`,`edit`,`list`,`starter`,`standard`,`enterprise`,`custom`,`author_name`) values ('user','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'User','3','User','','',1,1,1,1,1,1,1,1,0,'Super Admin');
insert  into `module`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`type`,`number`,`name`,`date`,`status`,`sort`,`add`,`delete`,`edit`,`list`,`starter`,`standard`,`enterprise`,`custom`,`author_name`) values ('user_access','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'User','4','User Access','','',1,1,0,1,1,1,1,1,0,'Super Admin');
insert  into `module`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`type`,`number`,`name`,`date`,`status`,`sort`,`add`,`delete`,`edit`,`list`,`starter`,`standard`,`enterprise`,`custom`,`author_name`) values ('website','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'Website','1','Website','','',97,1,1,1,1,1,1,1,0,'Super Admin');

/*Table structure for table `section` */

DROP TABLE IF EXISTS `section`;

CREATE TABLE `section` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `editable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
  `header_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(128) NOT NULL DEFAULT '',
  `number` varchar(128) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `date` int(10) unsigned NOT NULL DEFAULT '0',
  `status` varchar(128) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `subtitle` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `custom_text_1` varchar(255) NOT NULL DEFAULT '',
  `custom_text_2` varchar(255) NOT NULL DEFAULT '',
  `link` text NOT NULL,
  `name_lang` varchar(255) NOT NULL DEFAULT '',
  `title_lang` varchar(255) NOT NULL DEFAULT '',
  `subtitle_lang` varchar(255) NOT NULL DEFAULT '',
  `description_lang` text NOT NULL,
  `custom_text_1_lang` varchar(255) NOT NULL DEFAULT '',
  `custom_text_2_lang` varchar(255) NOT NULL DEFAULT '',
  `no_name` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `no_title` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `no_subtitle` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `no_description` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `no_link` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `no_image` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `no_custom_text_1` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `no_custom_text_2` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `image_size` varchar(255) NOT NULL DEFAULT '',
  `author_name` varchar(255) NOT NULL DEFAULT '',
  `header_type` varchar(128) NOT NULL DEFAULT '',
  `header_number` varchar(128) NOT NULL DEFAULT '',
  `header_name` varchar(255) NOT NULL DEFAULT '',
  `header_date` int(10) unsigned NOT NULL DEFAULT '0',
  `header_status` varchar(128) NOT NULL DEFAULT '',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  KEY `header_id` (`header_id`),
  KEY `date` (`date`),
  KEY `header_date` (`header_date`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

/*Data for the table `section` */

insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (1,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,1,'','','Welcome Text',0,'','This is Photoshop\'s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin accumsan ipsum velit?','','','','','','','','','','','',1,0,1,1,1,1,1,1,'','Super Admin','Hidden','','HOME',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (2,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,1,'','','End Customer Banner',0,'','FIND YOUR NEEDS','Be inspired, be you','<p>This is Photoshop\'s version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>','','','','','','','','','',1,0,0,0,1,0,1,1,'1920px x 890px','Super Admin','Hidden','','HOME',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (3,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,1,'','','Consultant Banner',0,'','CONSULTANT','Be inspired, be you','<p>This is Photoshop\'s version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>','','','','','','','','','',1,0,0,0,1,0,1,1,'1920px x 890px','Super Admin','Hidden','','HOME',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (4,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,1,'','','Supplier Banner',0,'','SUPPLIER','Be inspired, be you','<p>This is Photoshop\'s version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>','','','','','','','','','',1,0,0,0,1,0,1,1,'1920px x 890px','Super Admin','Hidden','','HOME',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (5,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,1,'','','About Us',0,'','Make the dreams of OTELLA best view of reality','','','','','','','','','','','',1,0,1,1,1,1,1,1,'','Super Admin','Hidden','','HOME',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (6,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,1,'','','About Us - 1',0,'','About Us','ARCHITECTURE IS A VISUAL ART','<p>This is Photoshop\'s version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p><p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p><p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>','','','','','','','','','',1,0,0,0,1,0,1,1,'790px x 800px','Super Admin','Hidden','','HOME',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (7,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,1,'','','About Us - 2',0,'','History','THE BEGINNING','<p>This is Photoshop\'s version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p><p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p><p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>','','','','','','','','','',1,0,0,0,1,0,1,1,'790px x 800px','Super Admin','Hidden','','HOME',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (8,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,1,'','','About Us - 3',0,'','Team','DJIE TJIAN AN','<p>This is Photoshop\'s version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p><p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p><p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>','','','','','','','','','',1,0,0,0,1,0,1,1,'790px x 800px','Super Admin','Hidden','','HOME',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (9,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,1,'','','Contact Us',0,'','CONTACT US','','','','','','','','','','','',1,0,1,1,1,0,1,1,'1030px x 1080px','Super Admin','Hidden','','HOME',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (10,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,1,'','','Career',0,'','Career','','','','','','','','','','','',1,0,1,1,1,1,1,1,'','Super Admin','Hidden','','Home',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (11,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,1,'','','Services',0,'','Make the dreams of OTELLA best view of reality','','','','','','','','','','','',1,0,1,1,1,1,1,1,'','Super Admin','Hidden','','Home',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (12,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,1,'','','Services - 1',0,'','CONSTRUCTION','ARCHITECTURE IS A VISUAL ART','<p>This is Photoshop\'s version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p><p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p><p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>','','','','','','','','','',1,0,0,0,1,0,1,1,'790px x 800px','Super Admin','Hidden','','Home',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (13,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,1,'','','Services - 2',0,'','INTERIOR','The Beginning','<p>This is Photoshop\'s version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p><p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p><p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>','','','','','','','','','',1,0,0,0,1,0,1,1,'790px x 800px','Super Admin','Hidden','','Home',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (14,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,3,'','','About Banner',0,'','ABOUT US','Architecture is a visual art, and the buildings speak for themselves.','','','','','','','','','','',1,0,0,1,1,0,1,1,'1920px x 1080px','Super Admin','Navbar','','ABOUT US',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (15,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,3,'','','About Us - 1',0,'','Architecture is a visual art, and the buildings speak for themselves.','ABOUT US','<p>This is Photoshop\'s version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p><p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.This is Photoshop\'s version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. </p><p>This is Photoshop\'s version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>','','','','','','','','','',1,0,0,0,1,1,1,1,'','Super Admin','Navbar','','ABOUT US',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (16,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,3,'','','About Us - 2',0,'','','','<p>This is Photoshop\'s version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequa.</p><p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor da nibh vel velit auctor aliquet. </p><p>This is Photoshop\'s version  of Lorem Ipsum. Proin gravida nibh vel velit.</p>','','','','','','','','','',1,1,1,0,1,1,1,1,'','Super Admin','Navbar','','ABOUT US',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (17,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,3,'','','History Quotes',0,'','Thomas Reid','The rules of navigation never navigated a ship. The rules of architecture never built a house.','','','','','','','','','','',1,0,0,1,1,1,1,1,'','Super Admin','Navbar','','ABOUT US',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (18,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,3,'','','Team Quotes',0,'','Thomas Reid','The rules of navigation never navigated a ship. The rules of architecture never built a house.','','','','','','','','','','',1,0,0,1,1,1,1,1,'','Super Admin','Navbar','','ABOUT US',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (19,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,4,'','','News & Gallery Banner',0,'','NEWS & GALLERY','I don\'t want to do architecture that\'s dry and dull.','','','','','','','','','','',1,0,0,1,1,0,1,1,'1920px x 1080px','Super Admin','Navbar','','NEWS & GALLERY',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (20,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,7,'','','Services Banner',0,'','CONSTRUCTION','Architecture is a visual art, and the buildings speak for themselves.','','','','','','','','','','',1,0,0,1,1,1,1,1,'1920px x 1080px','Super Admin','Navbar','','SERVICES',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (21,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,7,'','','Services 1',0,'','This is Photoshop\'s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.','','<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>','','','','','','','','','',1,0,1,0,1,1,1,1,'','Super Admin','Navbar','','SERVICES',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (22,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,7,'','','Services Building Count',0,'','125','Building','','','','','','','','','','',1,0,0,1,1,1,1,1,'','Super Admin','Navbar','','SERVICES',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (23,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,7,'','','Services - Location 1',0,'','UBUD ','BALI','<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p><p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>','','','','','','','','','',1,0,0,0,1,0,1,1,'1920px x 1080px','Super Admin','Navbar','','SERVICES',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (24,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,7,'','','Services - Location 2',0,'','BUKIT PANDAWA RESORT','','<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p><p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>','','','','','','','','','',1,0,1,0,1,0,1,1,'1920px x 1080px','Super Admin','Navbar','','SERVICES',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (25,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,7,'','','Services - Location 3',0,'','WALDROF ASTORIA','','<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p><p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>','','','','','','','','','',1,0,1,0,1,0,1,1,'1920px x 1080px','Super Admin','Navbar','','SERVICES',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (26,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,7,'','','Interior',0,'','This is Photoshop\'s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.Aenean sollicitu','','<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p><p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>','','','','','','','','','',1,0,1,0,1,0,1,1,'1920px x 1080px','Super Admin','Navbar','','SERVICES',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (27,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,7,'','','Interior 2',0,'','This is Photoshop\'s version of Lorem Ipsum.','','<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p><p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>','','','','','','','','','',1,0,1,0,1,0,1,1,'1920px x 1080px','Super Admin','Navbar','','SERVICES',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (28,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,7,'','','Interior Description 1',0,'','','','<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p><p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>','','','','','','','','','',1,1,1,0,1,0,1,1,'1920px x 1080px','Super Admin','Navbar','','SERVICES',0,'',0);
insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`image_size`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`,`sort`) values (29,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,7,'','','Interior Description 2',0,'','','','<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p><p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>','','','','','','','','','',1,1,1,0,1,0,1,1,'1920px x 1080px','Super Admin','Navbar','','SERVICES',0,'',0);

/*Table structure for table `setting` */

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `name` varchar(64) NOT NULL DEFAULT '',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `value` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `setting` */

insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_address','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_address2','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_bbm','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_city','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_city2','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_contact_person_name','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_contact_person_name_2','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_contact_person_phone','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_contact_person_phone_2','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_email','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_email2','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_fax','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_fax2','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_line','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_name','2000-01-01 00:00:00','Otella Construction','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_opening_hours_weekday_name','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_opening_hours_weekday_time','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_opening_hours_weekend_name','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_opening_hours_weekend_time','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_opening_time','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_parent_website','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_phone','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_phone2','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_recruitment_email','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_simple_description','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_website','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_whatsapp','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__admin_max_revision_number','2000-01-01 00:00:00','3','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__bank_account','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__bank_account_name','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__bank_account_number','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__limit_page','2000-01-01 00:00:00','25','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__social_media_facebook_link','2000-01-01 00:00:00','http://www.facebook.com/','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__social_media_google_plus_link','2000-01-01 00:00:00','http://plus.google.com/','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__social_media_instagram_link','2000-01-01 00:00:00','http://www.instagram.com/','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__social_media_linkedin_link','2000-01-01 00:00:00','http://www.linkedin.com/','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__social_media_twitter_link','2000-01-01 00:00:00','http://www.twitter.com/','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__social_media_youtube_link','2000-01-01 00:00:00','http://www.instagram.com/','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__system_admin_url','2000-01-01 00:00:00','http://localhost/GIT/otella/webcms/','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__system_language','2000-01-01 00:00:00','EN','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__system_language2','2000-01-01 00:00:00','ID','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__system_main_search_function','2000-01-01 00:00:00','1','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__system_main_website_maintenance','2000-01-01 00:00:00','0','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__system_main_website_url','2000-01-01 00:00:00','http://localhost/GIT/otella/','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__system_session_expired','2000-01-01 00:00:00','7200','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__system_url_source','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__webshop_enabled_tax','2000-01-01 00:00:00','0','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__webshop_price_decimal_precision','2000-01-01 00:00:00','2','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__webshop_quantity_decimal_precision','2000-01-01 00:00:00','0','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__webshop_tax_value','2000-01-01 00:00:00','0','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__website_enabled_dual_language','2000-01-01 00:00:00','1','value:\r\n1 -> dual language enabled\r\n0 -> dual language disabled');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__website_map_latitude','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__website_map_longitude','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('setting__website_title','2000-01-01 00:00:00','WEBCMS | Otella','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_api_key','2000-01-01 00:00:00','w3bcm5_i_0t3l14','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_cms_user','2000-01-01 00:00:00','multi','value:\r\nsingle -> single user\r\nmulti -> multiple user');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_company_name','2000-01-01 00:00:00','Otella Contstruction','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_copyright','2000-01-01 00:00:00','&copy; Label Ideas & Co. 2018','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_date_subscription_end','2000-01-01 00:00:00','0','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_date_subscription_start','2000-01-01 00:00:00','0','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_email_send2_cc','2000-01-01 00:00:00','','Customer Inquiry');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_email_send2_to','2000-01-01 00:00:00','info@otellaconstruction.co.id','Customer Inquiry');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_email_send3_cc','2000-01-01 00:00:00','','Consultant Inquiry');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_email_send3_to','2000-01-01 00:00:00','info@otellaconstruction.co.id','Consultant Inquiry');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_email_send4_cc','2000-01-01 00:00:00','','Supplier Inquiry');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_email_send4_to','2000-01-01 00:00:00','info@otellaconstruction.co.id','Supplier Inquiry');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_email_send5_cc','2000-01-01 00:00:00','','Career');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_email_send5_to','2000-01-01 00:00:00','career@otellaconstruction.co.id','Career');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_email_send_cc','2000-01-01 00:00:00','','Contact Us');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_email_send_to','2000-01-01 00:00:00','info@otellaconstruction.co.id','Contact Us');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_mac','2000-01-01 00:00:00','cms_1_otella','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_memory_quota','2000-01-01 00:00:00','500','memory in MB\r\nvalue:\r\n0 -> desktop version');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_product','2000-01-01 00:00:00','enterprise','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_product_subtitle','2000-01-01 00:00:00','Otella','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_product_title','2000-01-01 00:00:00','WEBCMS','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_vendor_link','2000-01-01 00:00:00','','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_vendor_name','2000-01-01 00:00:00','Label Ideas & Co.','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_version','2000-01-01 00:00:00','1.0.0','');
insert  into `setting`(`name`,`updated`,`value`,`description`) values ('system_website_copyright','2000-01-01 00:00:00','&copy; Label Ideas & Co. 2018','');

/*Table structure for table `subscribe` */

DROP TABLE IF EXISTS `subscribe`;

CREATE TABLE `subscribe` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `editable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(128) NOT NULL DEFAULT '',
  `number` varchar(128) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `date` int(10) unsigned NOT NULL DEFAULT '0',
  `status` varchar(128) NOT NULL DEFAULT '',
  `author_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `subscribe` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `editable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(128) NOT NULL DEFAULT '',
  `number` varchar(128) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `date` int(10) NOT NULL DEFAULT '0',
  `status` varchar(128) NOT NULL DEFAULT '',
  `position` varchar(128) NOT NULL DEFAULT '',
  `nip` varchar(255) NOT NULL DEFAULT '',
  `address` text NOT NULL,
  `phone` varchar(16) NOT NULL DEFAULT '',
  `email` varchar(320) NOT NULL DEFAULT '',
  `username` varchar(16) NOT NULL DEFAULT '',
  `password` text NOT NULL,
  `temp_password` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `author_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  KEY `date` (`date`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`type`,`number`,`name`,`date`,`status`,`position`,`nip`,`address`,`phone`,`email`,`username`,`password`,`temp_password`,`active`,`author_name`) values (1,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'','','Super Admin',0,'','Administrator','','','','','superadmin','ad6fdd0ad2e2561fa4018d47fc6d154c',1,1,'Super Admin');
insert  into `user`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`type`,`number`,`name`,`date`,`status`,`position`,`nip`,`address`,`phone`,`email`,`username`,`password`,`temp_password`,`active`,`author_name`) values (2,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,'','','Admin',0,'','Administrator','','','','','admin','21232f297a57a5a743894a0e4a801fc3',1,1,'Super Admin');

/*Table structure for table `user_access` */

DROP TABLE IF EXISTS `user_access`;

CREATE TABLE `user_access` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `editable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
  `module_id` varchar(128) NOT NULL DEFAULT '',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL DEFAULT '',
  `add` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `delete` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `edit` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `list` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `author_name` varchar(255) NOT NULL DEFAULT '',
  `module_type` varchar(128) NOT NULL DEFAULT '',
  `module_number` varchar(128) NOT NULL DEFAULT '',
  `module_name` varchar(255) NOT NULL DEFAULT '',
  `module_date` int(10) unsigned NOT NULL DEFAULT '0',
  `module_status` varchar(128) NOT NULL DEFAULT '',
  `user_type` varchar(128) NOT NULL DEFAULT '',
  `user_number` varchar(128) NOT NULL DEFAULT '',
  `user_name` varchar(255) NOT NULL DEFAULT '',
  `user_date` int(10) unsigned NOT NULL DEFAULT '0',
  `user_status` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  KEY `module_id` (`module_id`),
  KEY `user_id` (`user_id`),
  KEY `module_date` (`module_date`),
  KEY `user_date` (`user_date`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

/*Data for the table `user_access` */

insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (1,'2018-09-12 08:58:51','2018-09-12 08:58:51',1,1,1,'career',1,'',1,1,1,1,'Super Admin','','','',0,'','','','Super Admin',0,'');
insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (2,'2018-09-12 08:58:51','2018-09-12 08:58:51',1,1,1,'category',1,'',1,1,1,1,'Super Admin','','','',0,'','','','Super Admin',0,'');
insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (3,'2018-09-12 08:58:51','2018-09-12 08:58:51',1,1,1,'company_details',1,'',0,0,1,0,'Super Admin','','','',0,'','','','Super Admin',0,'');
insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (4,'2018-09-12 08:58:51','2018-09-12 08:58:51',1,1,1,'setting',1,'',0,0,1,0,'Super Admin','','','',0,'','','','Super Admin',0,'');
insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (5,'2018-09-12 08:58:51','2018-09-12 08:58:51',1,1,1,'system_log',1,'',0,0,0,1,'Super Admin','','','',0,'','','','Super Admin',0,'');
insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (6,'2018-09-12 08:58:51','2018-09-12 08:58:51',1,1,1,'user',1,'',1,1,1,1,'Super Admin','','','',0,'','','','Super Admin',0,'');
insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (7,'2018-09-12 08:58:51','2018-09-12 08:58:51',1,1,1,'user_access',1,'',1,0,1,1,'Super Admin','','','',0,'','','','Super Admin',0,'');
insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (8,'2018-09-12 08:58:51','2018-09-12 08:58:51',1,1,1,'website',1,'',1,1,1,1,'Super Admin','','','',0,'','','','Super Admin',0,'');
insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (9,'2018-09-12 08:58:51','2018-09-12 08:58:51',1,1,1,'career',2,'',1,1,1,1,'Super Admin','','','',0,'','','','Admin',0,'');
insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (10,'2018-09-12 08:58:51','2018-09-12 08:58:51',1,1,1,'category',2,'',1,1,1,1,'Super Admin','','','',0,'','','','Admin',0,'');
insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (11,'2018-09-12 08:58:51','2018-09-12 08:58:51',1,1,1,'company_details',2,'',0,0,1,0,'Super Admin','','','',0,'','','','Admin',0,'');
insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (12,'2018-09-12 08:58:51','2018-09-12 08:58:51',1,1,1,'setting',2,'',0,0,1,0,'Super Admin','','','',0,'','','','Admin',0,'');
insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (13,'2018-09-12 08:58:51','2018-09-12 08:58:51',1,1,1,'system_log',2,'',0,0,0,1,'Super Admin','','','',0,'','','','Admin',0,'');
insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (14,'2018-09-12 08:58:51','2018-09-12 08:58:51',1,1,1,'user',2,'',1,1,1,1,'Super Admin','','','',0,'','','','Admin',0,'');
insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (15,'2018-09-12 08:58:51','2018-09-12 08:58:51',1,1,1,'user_access',2,'',1,0,1,1,'Super Admin','','','',0,'','','','Admin',0,'');
insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (16,'2018-09-12 08:58:51','2018-09-12 08:58:51',1,1,1,'website',2,'',1,1,1,1,'Super Admin','','','',0,'','','','Admin',0,'');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
