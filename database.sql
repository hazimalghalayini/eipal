-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.12-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for eipal
CREATE DATABASE IF NOT EXISTS `eipal` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `eipal`;


-- Dumping structure for table eipal.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(100) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT 'acceptable or not',
  `publishDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`),
  KEY `FK_new_is` (`news_id`),
  CONSTRAINT `FK_new_is` FOREIGN KEY (`news_id`) REFERENCES `news` (`news_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32;

-- Dumping data for table eipal.comments: ~0 rows (approximately)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;


-- Dumping structure for table eipal.news
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `news_picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `news_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '1',
  `publish_date` datetime NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table eipal.news: ~9 rows (approximately)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`news_id`, `news_title`, `news_picture`, `news_description`, `category_id`, `views`, `publish_date`) VALUES
	(1, 'الأسهم الأمريكية تنهي تعاملات الجمعة دن تغيير وترتفع خلال ال...', 'c8b183f3d8e40d84884e38852616f997.jpg', 'يطرأ إنخفاض طفيف على درجات الحرارة، ويكون الطقس غائما جزئيا ولطيفا بوجه عام، وخلال ساعات ما بعد الظهر والمساء تتهيأ الفرصة تدريجيا لتساقط امطار محلية قد تكون مصحوبة بالعواصف الرعدية فوق مناطق مختلفة من البلاد، وتكون الرياح جنوبية غربية إلى غربية معتدلة السرعة تنشط احيانا.', 1, 1, '2014-11-15 14:46:21'),
	(2, 'تحدي عبور مصر ينطلق تحت رعاية سيتي سنتر الإسكندرية للعام الثالث على التوالي', 'c8b183f3d8e40d84884e38852616f997.jpg', 'يطرأ إنخفاض طفيف على درجات الحرارة، ويكون الطقس غائما جزئيا ولطيفا بوجه عام، وخلال ساعات ما بعد الظهر والمساء تتهيأ الفرصة تدريجيا لتساقط امطار محلية قد تكون مصحوبة بالعواصف الرعدية فوق مناطق مختلفة من البلاد، وتكون الرياح جنوبية غربية إلى غربية معتدلة السرعة تنشط احيانا.', 27, 1, '2014-11-15 14:46:21'),
	(3, 'محامية تشكّل عصابة مسلّحة لسرقة رجل أعمال سعودي بالقاهرة', 'a0a351c1bae1524ddf2759e7997133c6.png', 'يطرأ إنخفاض طفيف على درجات الحرارة، ويكون الطقس غائما جزئيا ولطيفا بوجه عام، وخلال ساعات ما بعد الظهر والمساء تتهيأ الفرصة تدريجيا لتساقط امطار محلية قد تكون مصحوبة بالعواصف الرعدية فوق مناطق مختلفة من البلاد، وتكون الرياح جنوبية غربية إلى غربية معتدلة السرعة تنشط احيانا.', 1, 1, '2014-11-15 14:46:21'),
	(4, 'الأسهم الأمريكية تنهي تعاملات الجمعة دن تغيير وترتفع خلال ال...', '2367bbea95f98a809bd2396e103ab928.PNG', 'يطرأ إنخفاض طفيف على درجات الحرارة، ويكون الطقس غائما جزئيا ولطيفا بوجه عام، وخلال ساعات ما بعد الظهر والمساء تتهيأ الفرصة تدريجيا لتساقط امطار محلية قد تكون مصحوبة بالعواصف الرعدية فوق مناطق مختلفة من البلاد، وتكون الرياح جنوبية غربية إلى غربية معتدلة السرعة تنشط احيانا.', 28, 1, '2014-11-15 14:46:21'),
	(5, 'الأسهم الأمريكية تنهي تعاملات الجمعة دن تغيير وترتفع خلال ال...', '08643f500e58c656340ca9b386b8c175.PNG', 'يطرأ إنخفاض طفيف على درجات الحرارة، ويكون الطقس غائما جزئيا ولطيفا بوجه عام، وخلال ساعات ما بعد الظهر والمساء تتهيأ الفرصة تدريجيا لتساقط امطار محلية قد تكون مصحوبة بالعواصف الرعدية فوق مناطق مختلفة من البلاد، وتكون الرياح جنوبية غربية إلى غربية معتدلة السرعة تنشط احيانا.', 27, 1, '2014-11-15 14:46:21'),
	(6, 'الأسهم الأمريكية تنهي تعاملات الجمعة دن تغيير وترتفع خلال ال...', '6ab53f8af7868dc33660358a32fffe8d.png', 'يطرأ إنخفاض طفيف على درجات الحرارة، ويكون الطقس غائما جزئيا ولطيفا بوجه عام، وخلال ساعات ما بعد الظهر والمساء تتهيأ الفرصة تدريجيا لتساقط امطار محلية قد تكون مصحوبة بالعواصف الرعدية فوق مناطق مختلفة من البلاد، وتكون الرياح جنوبية غربية إلى غربية معتدلة السرعة تنشط احيانا.', 1, 1, '2014-11-15 14:46:21'),
	(7, 'الأسهم الأمريكية تنهي تعاملات الجمعة دن تغيير وترتفع خلال ال...', 'b73f0b787ba021a1bb13640f64b71aa9.PNG', 'يطرأ إنخفاض طفيف على درجات الحرارة، ويكون الطقس غائما جزئيا ولطيفا بوجه عام، وخلال ساعات ما بعد الظهر والمساء تتهيأ الفرصة تدريجيا لتساقط امطار محلية قد تكون مصحوبة بالعواصف الرعدية فوق مناطق مختلفة من البلاد، وتكون الرياح جنوبية غربية إلى غربية معتدلة السرعة تنشط احيانا.', 1, 1, '2014-11-15 14:46:21'),
	(8, 'الأسهم الأمريكية تنهي تعاملات الجمعة دن تغيير وترتفع خلال ال...', '6e172beb7717c06cacd485898024370e.PNG', 'يطرأ إنخفاض طفيف على درجات الحرارة، ويكون الطقس غائما جزئيا ولطيفا بوجه عام، وخلال ساعات ما بعد الظهر والمساء تتهيأ الفرصة تدريجيا لتساقط امطار محلية قد تكون مصحوبة بالعواصف الرعدية فوق مناطق مختلفة من البلاد، وتكون الرياح جنوبية غربية إلى غربية معتدلة السرعة تنشط احيانا.', 1, 1, '2014-11-15 14:46:21'),
	(9, 'الأسهم الأمريكية تنهي تعاملات الجمعة دن تغيير وترتفع خلال ال...', '0c968e02c7b83c9691b10568d15e30ab.PNG', 'يطرأ إنخفاض طفيف على درجات الحرارة، ويكون الطقس غائما جزئيا ولطيفا بوجه عام، وخلال ساعات ما بعد الظهر والمساء تتهيأ الفرصة تدريجيا لتساقط امطار محلية قد تكون مصحوبة بالعواصف الرعدية فوق مناطق مختلفة من البلاد، وتكون الرياح جنوبية غربية إلى غربية معتدلة السرعة تنشط احيانا.', 1, 1, '2014-11-15 14:46:21');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;


-- Dumping structure for table eipal.news_categories
CREATE TABLE IF NOT EXISTS `news_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `added_date` datetime NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table eipal.news_categories: ~5 rows (approximately)
/*!40000 ALTER TABLE `news_categories` DISABLE KEYS */;
INSERT INTO `news_categories` (`category_id`, `category_name`, `added_date`) VALUES
	(1, 'المتاجر الذهبي', '2014-11-15 14:45:54'),
	(27, 'عام', '2014-11-15 14:46:12'),
	(28, 'شركات الوساطة', '2014-11-15 14:46:21'),
	(29, 'تحليلات الاسواق', '2014-11-15 14:46:21'),
	(30, 'أخبار إقتصادية', '2014-11-15 14:46:21');
/*!40000 ALTER TABLE `news_categories` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
