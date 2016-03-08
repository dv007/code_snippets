-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for boctham
CREATE DATABASE IF NOT EXISTS `boctham` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `boctham`;


-- Dumping structure for table boctham.members
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `badge_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;

-- Dumping data for table boctham.members: ~6 rows (approximately)
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` (`id`, `name`, `status`, `badge_id`) VALUES
	(1, 'NGUYỄN HỮU BẢO QUỐC', 0, '20085'),
	(2, 'LÊ PHƯƠNG QUANG', 0, '30188'),
	(3, 'ĐINH ĐỨC NGÂN HOÀNG', 0, '40252'),
	(4, 'NGUYỄN QUỐC HƯNG', 0, '50545'),
	(5, 'PHẠM TUẤN QUANG', 0, '60906'),
	(6, 'LÊ HUY', 0, '60941'),
	(7, 'ÂU THIÊN VŨ', 0, '60954'),
	(8, 'NGUYỄN NAM KHÁNH', 0, '81612'),
	(9, 'LÊ ANH TUẤN', 0, '91773'),
	(10, 'TRẦN QUỐC VIỆT', 0, '91775'),
	(11, 'VÕ TRƯỜNG VŨ', 0, '91825'),
	(12, 'NGUYỄN SĨ PHÚ', 0, '91827'),
	(13, 'HÀ HỒNG SƠN', 0, '101906'),
	(14, 'NGUYỄN HUY TÀI', 0, '102022'),
	(15, 'PHAN ANH VĂN', 0, '102049'),
	(16, 'TRẦN VŨ HÙNG', 0, '102059'),
	(17, 'VĂN TẤN HƯNG', 0, '102066'),
	(18, 'ĐOÀN TRẦN VÂN', 0, '112074'),
	(19, 'LÝ TIẾN PHÁT', 0, '112092'),
	(20, 'LÝ THIÊN VƯƠNG', 0, '112099'),
	(21, 'NGUYỄN THANH TRÀ', 0, '112115'),
	(22, 'NGUYỄN THẾ NINH', 0, '112204'),
	(23, 'NGUYỄN THANH PHONG', 0, '112311'),
	(24, 'NGUYỄN MINH HOÀNG', 0, '112337'),
	(26, 'QUÁCH MINH KHÁNH', 0, '112418'),
	(27, 'NGUYỄN TẤN TÀI', 0, '112469'),
	(28, 'HOÀNG THẾ CƯỜNG', 0, '112605'),
	(29, 'TRẦN THANH NAM', 0, '112629'),
	(30, 'HUỲNH CÔNG DANH', 0, '122666'),
	(32, 'TRẦN THẾ SĨ', 0, '122688'),
	(33, 'LÊ HOÀNG VINH', 0, '122692'),
	(34, 'LƯU CÔNG DƯƠNG', 0, '122730'),
	(35, 'HOÀNG TRỌNG BÌNH', 0, '122859'),
	(36, 'NGUYỄN TIẾN KHOA', 0, '123009'),
	(37, 'ĐỖ HOÀNG ĐÌNH TIẾN', 0, '154553'),
	(38, 'TRẦN NHẬT ANH', 0, '133111'),
	(39, 'TRẦN HẢI BẰNG', 0, '133172'),
	(40, 'TRẦN VĂN TUẤN', 0, '133191'),
	(41, 'CHÂU VĂN CẨM', 0, '133281'),
	(42, 'LƯU MINH TRIẾT', 0, '133288'),
	(43, 'NGUYỄN ĐỨC TRUNG', 0, '133292'),
	(44, 'NGUYỄN ĐỨC VƯƠNG', 0, '133305'),
	(45, 'HUỲNH THANH HẢI', 0, '133325'),
	(47, 'TRẦN NGUYỄN ĐÌNH BẢO', 0, '133333'),
	(48, 'NGUYỄN GIA VŨ', 0, '133336'),
	(49, 'ĐỖ QUANG ĐẠI', 0, '133338'),
	(50, 'ĐINH THÀNH VƯƠNG', 0, '133364'),
	(51, 'TRẦN QUANG HIẾU', 0, '133377'),
	(52, 'NGUYỄN NGỌC TÂN', 0, '133383'),
	(53, 'NGUYỄN HIẾU TÂM', 0, '133384'),
	(54, 'NGUYỄN MINH CƯỜNG', 0, '133389'),
	(55, 'LÊ THANH AN', 0, '133400'),
	(56, 'PHẠM ĐÌNH KHÁNH', 0, '133437'),
	(57, 'LÊ VÕ MINH TÂM', 0, '133570'),
	(58, 'NGUYỄN THANH ĐÔNG', 0, '143692'),
	(59, 'NGUYỄN MINH TRUNG', 0, '143726'),
	(60, 'ĐINH LÊ CAO NGUYÊN', 0, '143732'),
	(61, 'NGUYỄN HỒNG KHÁNH', 0, '143780'),
	(63, 'NGUYỄN ANH HOÀNG MINH', 0, '143792'),
	(64, 'NGUYỄN THÀNH ĐẶNG CHÍ CÔNG', 0, '143825'),
	(66, 'NGUYỄN VĂN PHƯƠNG', 0, '143882'),
	(67, 'LÊ QUANG MINH NHỰT', 0, '143900'),
	(68, 'NGUYỄN THÁI THUẬN', 0, '143912'),
	(69, 'BÙI VĂN THIỆN', 0, '143920'),
	(70, 'TRẦN BÁ TÚ', 0, '143988'),
	(71, 'KIỀU CAO TRUNG', 0, '143997'),
	(72, 'NGUYỄN TRỌNG LÂN', 0, '144098'),
	(73, 'NGUYỄN VIỆT QUỐC', 0, '144102'),
	(74, 'NGUYỄN HOÀNG TÂM', 0, '144109'),
	(76, 'ĐINH NGUYỄN NGỌC SƠN', 0, '154203'),
	(77, 'TRẦN MINH VIỄN', 0, '154209'),
	(78, 'LÊ ĐỖ NGUYÊN VINH', 0, '154213'),
	(79, 'PHAN THANH HẢI', 0, '154231'),
	(81, 'NGUYỄN HỮU TÀI', 0, '154238'),
	(82, 'NGUYỄN MINH TÂM', 0, '154244'),
	(83, 'NGÔ THÀNH LUÂN', 0, '154263'),
	(84, 'NGUYỄN MINH HIẾU', 0, '154270'),
	(85, 'LÊ TẤN NGHĨA', 0, '154272'),
	(86, 'NGUYỄN PHÚC MINH', 0, '154273'),
	(87, 'PHẠM VĂN TƯỚNG', 0, '154275'),
	(88, 'NGUYỄN HỮU BẢO', 0, '154285'),
	(89, 'HỒ LÊ THIỆN THÀNH', 0, '154299'),
	(90, 'NGÔ VĂN DANH', 0, '154308'),
	(91, 'TRƯƠNG ĐĂNG ĐỨC', 0, '154330'),
	(92, 'NGUYỄN HOÀNG KHA', 0, '154347'),
	(93, 'BÙI TRỊNH MINH TUẤN', 0, '154365'),
	(95, 'NGUYỄN ANH KHOA', 0, '154375'),
	(97, 'LÊ CAO NGUYÊN', 0, '154389'),
	(98, 'TRẦN VĂN TUẤN SINH', 0, '154390'),
	(99, 'VẠN XUÂN BÌNH AN', 0, '154391'),
	(100, 'TRẦN THANH THÂN', 0, '154394'),
	(101, 'ĐÀO DUY ANH', 0, '154396'),
	(102, 'TRƯƠNG ĐỨC LONG', 0, '154397'),
	(103, 'LƯU MINH THÁI', 0, '154399'),
	(104, 'TRẦN THANH LONG', 0, '154401'),
	(105, 'LƯ GIA LÂM', 0, '154404'),
	(106, 'LÊ THÁI SƠN', 0, '154416'),
	(107, 'NGUYỄN THANH TÂM', 0, '154419'),
	(108, 'NGUYỄN QUANG NHẬT', 0, '154436'),
	(109, 'NGUYỄN TẤN THÀNH', 0, '154495'),
	(110, 'VÕ CHÍ TUẤN', 0, '154572'),
	(112, 'TRƯƠNG VĨNH QUANG NHẬT', 0, '154586'),
	(113, 'HOÀNG KIM BẢO HOÀNG', 0, '154596'),
	(114, 'BÙI XUÂN THÁI', 0, '164613'),
	(115, 'PHAN HOÀNG NAM', 0, '164615'),
	(116, 'NGUYỄN NGÔ SONG LỰC', 0, '164618');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
