/*
SQLyog Community
MySQL - 10.1.19-MariaDB : Database - webbooking_1_bambaiya
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
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
  `name_lang` varchar(255) NOT NULL DEFAULT '',
  `url_name` varchar(255) NOT NULL DEFAULT '',
  `author_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `category` */

insert  into `category`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`type`,`number`,`name`,`date`,`status`,`name_lang`,`url_name`,`author_name`) values (1,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,'','','Appetizer',0,'','Makanan Pembuka','appetizer','Super Admin'),(2,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,'','','Main Dish',0,'','Makanan Utama','main-dish','Super Admin'),(3,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,'','','Dessert',0,'','Makanan Penutup','dessert','Super Admin'),(4,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,'','','Drink',0,'','Minuman','drink','Super Admin');

/*Table structure for table `food` */

DROP TABLE IF EXISTS `food`;

CREATE TABLE `food` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `editable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
  `category_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(128) NOT NULL DEFAULT '',
  `number` varchar(128) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `date` int(10) unsigned NOT NULL DEFAULT '0',
  `status` varchar(128) NOT NULL DEFAULT '',
  `subtitle` varchar(255) NOT NULL DEFAULT '',
  `price` decimal(16,3) unsigned NOT NULL DEFAULT '0.000',
  `recommended` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `name_lang` varchar(255) NOT NULL DEFAULT '',
  `subtitle_lang` varchar(255) NOT NULL DEFAULT '',
  `author_name` varchar(255) NOT NULL DEFAULT '',
  `category_type` varchar(128) NOT NULL DEFAULT '',
  `category_number` varchar(128) NOT NULL DEFAULT '',
  `category_name` varchar(255) NOT NULL DEFAULT '',
  `category_date` int(10) unsigned NOT NULL DEFAULT '0',
  `category_status` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `food` */

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
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `author_name` varchar(255) NOT NULL DEFAULT '',
  `header_type` varchar(128) NOT NULL DEFAULT '',
  `header_number` varchar(128) NOT NULL DEFAULT '',
  `header_name` varchar(255) NOT NULL DEFAULT '',
  `header_date` int(10) unsigned NOT NULL DEFAULT '0',
  `header_status` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `header` */

insert  into `header`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`name_lang`,`link`,`sort`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`) values (1,'2000-01-01 00:00:00','2017-09-26 18:55:49',0,1,1,0,'Navbar','','Home',0,'','Beranda','',1,'Super Admin','','','',0,''),(2,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,0,'Navbar','','About Us',0,'','Tentang Kami','',2,'Super Admin','','','',0,''),(3,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,0,'Navbar','','Menu',0,'','Menu','',3,'Super Admin','','','',0,''),(4,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,0,'Footer','','Terms & Conditions',0,'','Syarat & Ketentuan','',4,'Super Admin','','','',0,''),(5,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,0,'Footer','','Contact Us',0,'','Kontak Kami','',5,'Super Admin','','','',0,'');

/*Table structure for table `image` */

DROP TABLE IF EXISTS `image`;

CREATE TABLE `image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `editable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
  `category_id` int(10) unsigned NOT NULL DEFAULT '0',
  `food_id` int(10) unsigned NOT NULL DEFAULT '0',
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
  `category_type` varchar(128) NOT NULL DEFAULT '',
  `category_number` varchar(128) NOT NULL DEFAULT '',
  `category_name` varchar(255) NOT NULL DEFAULT '',
  `category_date` int(10) unsigned NOT NULL DEFAULT '0',
  `category_status` varchar(128) NOT NULL DEFAULT '',
  `food_type` varchar(128) NOT NULL DEFAULT '',
  `food_number` varchar(128) NOT NULL DEFAULT '',
  `food_name` varchar(255) NOT NULL DEFAULT '',
  `food_date` int(10) unsigned NOT NULL DEFAULT '0',
  `food_status` varchar(128) NOT NULL DEFAULT '',
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
  KEY `author_id` (`author_id`)
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `log` */

insert  into `log`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`ref_id`,`type`,`number`,`name`,`date`,`status`,`query`,`author_name`,`ref_type`,`ref_number`,`ref_name`,`ref_date`,`ref_status`) values (1,'2017-09-28 23:36:05','2017-09-28 23:36:05',1,1,1,0,'Setting','','Update Setting',1506616565,'','UPDATE `setting` SET `value` = \'http://www.facebook.com/\' WHERE `name` =  \'setting__social_media_facebook_link\'\nUPDATE `setting` SET `value` = \'http://www.twitter.com/\' WHERE `name` =  \'setting__social_media_twitter_link\'\nUPDATE `setting` SET `value` = \'http://www.instagram.com/\' WHERE `name` =  \'setting__social_media_instagram_link\'\nUPDATE `setting` SET `value` = \'10:00\' WHERE `name` =  \'setting__system_book_start_hour\'\nUPDATE `setting` SET `value` = \'23:00\' WHERE `name` =  \'setting__system_book_end_hour\'\nUPDATE `setting` SET `value` = \'50\' WHERE `name` =  \'setting__system_book_seat_number\'\nUPDATE `setting` SET `value` = \'2\' WHERE `name` =  \'setting__system_book_seat_time_limit\'\nUPDATE `setting` SET `value` = \'1\' WHERE `name` =  \'setting__website_enabled_dual_language\'\nUPDATE `setting` SET `value` = \'Eng\' WHERE `name` =  \'setting__system_language\'\nUPDATE `setting` SET `value` = \'Ind\' WHERE `name` =  \'setting__system_language2\'\nUPDATE `setting` SET `value` = \'1\' WHERE `name` =  \'setting__system_main_website_maintenance\'\n','Super Admin','','','',0,''),(2,'2017-09-28 23:36:25','2017-09-28 23:36:25',1,1,1,0,'Setting','','Update Setting',1506616585,'','UPDATE `setting` SET `value` = \'http://www.facebook.com/\' WHERE `name` =  \'setting__social_media_facebook_link\'\nUPDATE `setting` SET `value` = \'http://www.twitter.com/\' WHERE `name` =  \'setting__social_media_twitter_link\'\nUPDATE `setting` SET `value` = \'http://www.instagram.com/\' WHERE `name` =  \'setting__social_media_instagram_link\'\nUPDATE `setting` SET `value` = \'10:00\' WHERE `name` =  \'setting__system_book_start_hour\'\nUPDATE `setting` SET `value` = \'23:00\' WHERE `name` =  \'setting__system_book_end_hour\'\nUPDATE `setting` SET `value` = \'50\' WHERE `name` =  \'setting__system_book_seat_number\'\nUPDATE `setting` SET `value` = \'2\' WHERE `name` =  \'setting__system_book_seat_time_limit\'\nUPDATE `setting` SET `value` = \'1\' WHERE `name` =  \'setting__website_enabled_dual_language\'\nUPDATE `setting` SET `value` = \'Eng\' WHERE `name` =  \'setting__system_language\'\nUPDATE `setting` SET `value` = \'Ind\' WHERE `name` =  \'setting__system_language2\'\nUPDATE `setting` SET `value` = \'0\' WHERE `name` =  \'setting__system_main_website_maintenance\'\n','Super Admin','','','',0,'');

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
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `metatag` */

insert  into `metatag`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`keywords`,`author`,`description`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`) values (1,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,1,'','','Home',0,'','Bambaiya','Label Ideas & Co.','Bambaiya Home Page','Super Admin','Navbar','','Home',0,''),(2,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,2,'','','About Us',0,'','About Bambaiya','Label Ideas & Co.','Bambaiya About Us Page','Super Admin','Navbar','','About Us',0,''),(3,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,3,'','','Menu',0,'','Bambaiya Menu','Label Ideas & Co.','Bambaiya Menu Page','Super Admin','Navbar','','Menu',0,''),(4,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,4,'','','Terms & Conditions',0,'','Bambaiya T&C','Label Ideas & Co.','Bambaiya T&C Page','Super Admin','Footer','','Terms & Conditions',0,''),(5,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,5,'','','Contact Us',0,'','Contact Bambaiya','Label Ideas & Co.','Bambaiya Contact Us Page','Super Admin','Footer','','Contact Us',0,'');

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

insert  into `module`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`type`,`number`,`name`,`date`,`status`,`sort`,`add`,`delete`,`edit`,`list`,`starter`,`standard`,`enterprise`,`custom`,`author_name`) values ('category','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'Food','1','Category','','',4,1,1,1,1,1,1,1,0,'Super Admin'),('company_details','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'Setting','2','Company Details','','',99,0,0,1,0,1,1,1,0,'Super Admin'),('food','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'Food','2','Food','','',4,1,1,1,1,1,1,1,0,'Super Admin'),('online_booking','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'Booking','1','Online Booking','','',2,0,0,1,1,1,1,1,0,'Super Admin'),('phone_booking','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'Booking','2','Phone Booking','','',2,1,1,1,1,1,1,1,0,'Super Admin'),('setting','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'Setting','1','Setting','','',99,0,0,1,0,1,1,1,0,'Super Admin'),('system_log','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'Log','1','System Log','','',98,0,0,0,1,1,1,1,0,'Super Admin'),('user','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'User','3','User','','',1,1,1,1,1,1,1,1,0,'Super Admin'),('user_access','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'User','4','User Access','','',1,1,0,1,1,1,1,1,0,'Super Admin'),('website','2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'Website','1','Website','','',3,1,1,1,1,1,1,1,0,'Super Admin');

/*Table structure for table `schedule` */

DROP TABLE IF EXISTS `schedule`;

CREATE TABLE `schedule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deletable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `editable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
  `visitor_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(128) NOT NULL DEFAULT '',
  `number` varchar(128) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `date` int(10) unsigned NOT NULL DEFAULT '0',
  `status` varchar(128) NOT NULL DEFAULT '',
  `time` varchar(32) NOT NULL DEFAULT '',
  `guest` decimal(16,3) unsigned NOT NULL DEFAULT '0.000',
  `author_name` varchar(255) NOT NULL DEFAULT '',
  `visitor_type` varchar(128) NOT NULL DEFAULT '',
  `visitor_number` varchar(128) NOT NULL DEFAULT '',
  `visitor_name` varchar(255) NOT NULL DEFAULT '',
  `visitor_date` int(10) unsigned NOT NULL DEFAULT '0',
  `visitor_status` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `schedule` */

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
  `author_name` varchar(255) NOT NULL DEFAULT '',
  `header_type` varchar(128) NOT NULL DEFAULT '',
  `header_number` varchar(128) NOT NULL DEFAULT '',
  `header_name` varchar(255) NOT NULL DEFAULT '',
  `header_date` int(10) unsigned NOT NULL DEFAULT '0',
  `header_status` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  KEY `header_id` (`header_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `section` */

insert  into `section`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`header_id`,`type`,`number`,`name`,`date`,`status`,`title`,`subtitle`,`description`,`custom_text_1`,`custom_text_2`,`link`,`name_lang`,`title_lang`,`subtitle_lang`,`description_lang`,`custom_text_1_lang`,`custom_text_2_lang`,`no_name`,`no_title`,`no_subtitle`,`no_description`,`no_link`,`no_image`,`no_custom_text_1`,`no_custom_text_2`,`author_name`,`header_type`,`header_number`,`header_name`,`header_date`,`header_status`) values (1,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,1,'','','Header Banner',0,'','THE ORIGINAL','BOMBAY CAFE','','','','','','','','','','',1,0,0,1,1,1,1,1,'Super Admin','Navbar','','Home',0,'');

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

insert  into `setting`(`name`,`updated`,`value`,`description`) values ('company_address','2000-01-01 00:00:00','Jl. Mega Kuningan Barat Kav 4.3 Kuningan Jakarta Selatan - Indonesia',''),('company_address2','2000-01-01 00:00:00','',''),('company_bbm','2000-01-01 00:00:00','',''),('company_city','2000-01-01 00:00:00','',''),('company_city2','2000-01-01 00:00:00','',''),('company_contact_person_name','2000-01-01 00:00:00','',''),('company_contact_person_name_2','2000-01-01 00:00:00','',''),('company_contact_person_phone','2000-01-01 00:00:00','',''),('company_contact_person_phone_2','2000-01-01 00:00:00','',''),('company_email','2000-01-01 00:00:00','info@bambaiyacafe.com',''),('company_email2','2000-01-01 00:00:00','',''),('company_fax','2000-01-01 00:00:00','',''),('company_fax2','2000-01-01 00:00:00','',''),('company_line','2000-01-01 00:00:00','',''),('company_name','2000-01-01 00:00:00','Bambaiya Cafe',''),('company_opening_hours_weekday_name','2000-01-01 00:00:00','',''),('company_opening_hours_weekday_time','2000-01-01 00:00:00','',''),('company_opening_hours_weekend_name','2000-01-01 00:00:00','',''),('company_opening_hours_weekend_time','2000-01-01 00:00:00','',''),('company_opening_time','2000-01-01 00:00:00','',''),('company_parent_website','2000-01-01 00:00:00','',''),('company_phone','2000-01-01 00:00:00','',''),('company_phone2','2000-01-01 00:00:00','',''),('company_recruitment_email','2000-01-01 00:00:00','',''),('company_simple_description','2000-01-01 00:00:00','',''),('company_website','2000-01-01 00:00:00','',''),('company_whatsapp','2000-01-01 00:00:00','',''),('setting__admin_max_revision_number','2000-01-01 00:00:00','3',''),('setting__bank_account','2000-01-01 00:00:00','',''),('setting__bank_account_name','2000-01-01 00:00:00','',''),('setting__bank_account_number','2000-01-01 00:00:00','',''),('setting__limit_page','2000-01-01 00:00:00','25',''),('setting__social_media_facebook_link','2000-01-01 00:00:00','http://www.facebook.com/',''),('setting__social_media_google_plus_link','2000-01-01 00:00:00','http://plus.google.com/',''),('setting__social_media_instagram_link','2000-01-01 00:00:00','http://www.instagram.com/',''),('setting__social_media_linkedin_link','2000-01-01 00:00:00','http://www.linkedin.com/',''),('setting__social_media_twitter_link','2000-01-01 00:00:00','http://www.twitter.com/',''),('setting__social_media_youtube_link','2000-01-01 00:00:00','http://www.instagram.com/',''),('setting__system_admin_url','2000-01-01 00:00:00','',''),('setting__system_book_end_hour','2000-01-01 00:00:00','23:00',''),('setting__system_book_seat_number','2000-01-01 00:00:00','50',''),('setting__system_book_seat_time_limit','2000-01-01 00:00:00','2',''),('setting__system_book_seat_time_multiplication','2000-01-01 00:00:00','15',''),('setting__system_book_start_hour','2000-01-01 00:00:00','10:00',''),('setting__system_language','2000-01-01 00:00:00','Eng',''),('setting__system_language2','2000-01-01 00:00:00','Ind',''),('setting__system_main_website_maintenance','2000-01-01 00:00:00','0',''),('setting__system_main_website_url','2000-01-01 00:00:00','',''),('setting__system_session_expired','2000-01-01 00:00:00','7200',''),('setting__system_url_source','2000-01-01 00:00:00','',''),('setting__webshop_enabled_tax','2000-01-01 00:00:00','0',''),('setting__webshop_price_decimal_precision','2000-01-01 00:00:00','2',''),('setting__webshop_quantity_decimal_precision','2000-01-01 00:00:00','0',''),('setting__webshop_tax_value','2000-01-01 00:00:00','0',''),('setting__website_enabled_dual_language','2000-01-01 00:00:00','1','value:\r\n1 -> dual language enabled\r\n0 -> dual language disabled'),('setting__website_map_latitude','2000-01-01 00:00:00','',''),('setting__website_map_longitude','2000-01-01 00:00:00','',''),('setting__website_title','2000-01-01 00:00:00','WebBooking | Bambaiya Cafe',''),('system_api_key','2000-01-01 00:00:00','b4mb41y4c4f3',''),('system_cms_user','2000-01-01 00:00:00','multi','value:\r\nsingle -> single user\r\nmulti -> multiple user'),('system_company_name','2000-01-01 00:00:00','Bambaiya Cafe',''),('system_copyright','2000-01-01 00:00:00','&copy; Bambaiya Cafe 2017',''),('system_date_subscription_end','2000-01-01 00:00:00','0',''),('system_date_subscription_start','2000-01-01 00:00:00','0',''),('system_mac','2000-01-01 00:00:00','webbooking_1_bambaiya',''),('system_memory_quota','2000-01-01 00:00:00','1000','memory in MB\r\nvalue:\r\n0 -> desktop version'),('system_product','2000-01-01 00:00:00','enterprise',''),('system_product_subtitle','2000-01-01 00:00:00','Bambaiya Cafe',''),('system_product_title','2000-01-01 00:00:00','WebBooking',''),('system_vendor_link','2000-01-01 00:00:00','http://www.labelideas.co/',''),('system_vendor_name','2000-01-01 00:00:00','Label Ideas & Co.',''),('system_version','2000-01-01 00:00:00','1.0.0',''),('system_website_copyright','2000-01-01 00:00:00','&copy; Bambaiya Cafe 2017','');

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

insert  into `user`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`type`,`number`,`name`,`date`,`status`,`position`,`nip`,`address`,`phone`,`email`,`username`,`password`,`temp_password`,`active`,`author_name`) values (1,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,0,1,'','','Super Admin',0,'','Administrator','','','','','superadmin','ad6fdd0ad2e2561fa4018d47fc6d154c',1,1,'Super Admin'),(2,'2000-01-01 00:00:00','2000-01-01 00:00:00',0,1,1,'','','Admin',0,'','Administrator','','','','','admin','21232f297a57a5a743894a0e4a801fc3',1,1,'Super Admin');

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

/*Data for the table `user_access` */

insert  into `user_access`(`id`,`created`,`updated`,`deletable`,`editable`,`author_id`,`module_id`,`user_id`,`name`,`add`,`delete`,`edit`,`list`,`author_name`,`module_type`,`module_number`,`module_name`,`module_date`,`module_status`,`user_type`,`user_number`,`user_name`,`user_date`,`user_status`) values (1,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'category',1,'',1,1,1,1,'Super Admin','','','',0,'','','','Super Admin',0,''),(2,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'company_details',1,'',0,0,1,0,'Super Admin','','','',0,'','','','Super Admin',0,''),(3,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'food',1,'',1,1,1,1,'Super Admin','','','',0,'','','','Super Admin',0,''),(4,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'online_booking',1,'',0,0,1,1,'Super Admin','','','',0,'','','','Super Admin',0,''),(5,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'phone_booking',1,'',1,1,1,1,'Super Admin','','','',0,'','','','Super Admin',0,''),(6,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'setting',1,'',0,0,1,0,'Super Admin','','','',0,'','','','Super Admin',0,''),(7,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'system_log',1,'',0,0,0,1,'Super Admin','','','',0,'','','','Super Admin',0,''),(8,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'user',1,'',1,1,1,1,'Super Admin','','','',0,'','','','Super Admin',0,''),(9,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'user_access',1,'',1,0,1,1,'Super Admin','','','',0,'','','','Super Admin',0,''),(10,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'website',1,'',1,1,1,1,'Super Admin','','','',0,'','','','Super Admin',0,''),(11,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'category',2,'',1,1,1,1,'Super Admin','','','',0,'','','','Admin',0,''),(12,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'company_details',2,'',0,0,1,0,'Super Admin','','','',0,'','','','Admin',0,''),(13,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'food',2,'',1,1,1,1,'Super Admin','','','',0,'','','','Admin',0,''),(14,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'online_booking',2,'',0,0,1,1,'Super Admin','','','',0,'','','','Admin',0,''),(15,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'phone_booking',2,'',1,1,1,1,'Super Admin','','','',0,'','','','Admin',0,''),(16,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'setting',2,'',0,0,1,0,'Super Admin','','','',0,'','','','Admin',0,''),(17,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'system_log',2,'',0,0,0,1,'Super Admin','','','',0,'','','','Admin',0,''),(18,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'user',2,'',1,1,1,1,'Super Admin','','','',0,'','','','Admin',0,''),(19,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'user_access',2,'',1,0,1,1,'Super Admin','','','',0,'','','','Admin',0,''),(20,'2000-01-01 00:00:00','2000-01-01 00:00:00',1,1,1,'website',2,'',1,1,1,1,'Super Admin','','','',0,'','','','Admin',0,'');

/*Table structure for table `visitor` */

DROP TABLE IF EXISTS `visitor`;

CREATE TABLE `visitor` (
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
  `email` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL DEFAULT '',
  `booking_time` varchar(32) NOT NULL DEFAULT '',
  `booking_guest_number` decimal(16,3) unsigned NOT NULL DEFAULT '0.000',
  `remarks` text NOT NULL,
  `author_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `visitor` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
