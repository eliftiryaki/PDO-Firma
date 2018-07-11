-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Kas 2017, 07:48:54
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `pdofirma`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE IF NOT EXISTS `ayar` (
  `ayar_id` int(1) NOT NULL DEFAULT '0',
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_siteurl` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_fax` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_recapctha` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_goooglemap` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ayar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_siteurl`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_fax`, `ayar_mail`, `ayar_adres`, `ayar_ilce`, `ayar_il`, `ayar_mesai`, `ayar_recapctha`, `ayar_goooglemap`, `ayar_analystic`, `ayar_facebook`, `ayar_twitter`, `ayar_youtube`, `ayar_google`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`) VALUES
(0, 'dimg/20936logo-yok.png', 'http://pdo_yonetim', 'Pdo Yonetim Paneli', 'Sed eu sodales dolor. Morbi convallis euismod tellus, nec consectetur urna sollicitudin dapibus. Nullam vitae scelerisque nunc. Morbi bibendum erat congue libero fermentum, ut cursus risus laoreet. Pellentesque vel mollis dui. Cras ultricies neque se', 'pdo , php', 'Elif ', '0850 450 25 55', '0850 450 25 55', '0850 450 25 55', 'eliftryki@gmail.com', 'Aydınlı yolu caddesi.Asmalı Sokak', 'İstanbul', 'İstanbul', 'Hafta iç 08:00 - 17:00  /  Haftasonu kapalıdır', '1', 'AIzaSyAkiDi2QWD7s1L5IUEI9Ic4WXfAKS1fQdQ', '1', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.youtube.com', 'http://www.google.com', 'Mail.siteadresiniz.com', 'eposta@siteadresiniz.com', '1234', '25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `galeri_id` int(11) NOT NULL AUTO_INCREMENT,
  `galeri_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`galeri_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=20 ;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`galeri_id`, `galeri_resimyol`) VALUES
(15, 'dimg/galeri/22642248572762828662Chrysanthemum.jpg'),
(16, 'dimg/galeri/27240258052368228426Desert.jpg'),
(17, 'dimg/galeri/20283272923049624792Hydrangeas.jpg'),
(18, 'dimg/galeri/26897319432219129384Jellyfish.jpg'),
(19, 'dimg/galeri/28597218623156224325deniz.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `hakkimizda_id` int(1) NOT NULL,
  `hakkimizda_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`hakkimizda_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(0, 'Firma Hakkında Bilgi', '<blockquote>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies quam purus, at facilisis lectus lobortis varius. Vestibulum laoreet nunc eu dui efficitur, eget scelerisque massa gravida. Suspendisse fringilla et diam quis hendrerit. Aenean et pretium tellus, ut condimentum ipsum. Proin sit amet vehicula velit. Donec sodales metus molestie nunc volutpat tincidunt. Donec vitae nisi posuere, dictum libero in, sagittis nibh. Aenean pharetra cursus vestibulum. Praesent volutpat augue non dolor malesuada, quis tincidunt urna semper. Proin dapibus sollicitudin elit, et pellentesque nisl accumsan vel. Nulla ac pretium eros, et interdum nibh. Nulla accumsan purus urna, sed consectetur urna pellentesque sit amet.</p>\r\n</blockquote>\r\n\r\n<p>Sed eu sodales dolor. Morbi convallis euismod tellus, nec consectetur urna sollicitudin dapibus. Nullam vitae scelerisque nunc. Morbi bibendum erat congue libero fermentum, ut cursus risus laoreet. Pellentesque vel mollis dui. Cras ultricies neque sed sem ultrices tempor. In in erat at magna pellentesque finibus nec et mi. Cras eleifend, est vitae maximus mattis, ante arcu vestibulum odio, non fermentum ligula dui quis ante. Morbi auctor sodales lectus vitae bibendum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In eget hendrerit nibh, id bibendum metus. Nullam gravida at eros ac pretium. Duis feugiat arcu ligula, at ultrices mauris fermentum eu. Mauris at ante ligula. Vivamus eu viverra felis. Morbi tristique luctus venenatis.</p>\r\n\r\n<p>Suspendisse varius lorem in fermentum viverra. Aenean malesuada elit eu leo elementum blandit. Donec tempus felis in condimentum blandit. Nulla semper et urna eu posuere. Cras tempus nibh enim, vel venenatis est varius sit amet. Vivamus ac ante sit amet magna tincidunt aliquet non a elit. Integer aliquet, neque nec rhoncus malesuada, elit erat pretium ante, ut semper massa neque non enim. Vestibulum venenatis tellus eu tellus cursus lobortis. Nulla diam massa, accumsan non pulvinar at, lobortis at tellus. Phasellus convallis maximus ligula quis elementum. Sed non scelerisque libero. In dignissim dolor quis sapien interdum molestie. Fusce pretium tristique lectus et luctus. Mauris varius ligula nec tortor malesuada pellentesque. Duis et aliquam dolor, in pharetra libero. Aliquam erat volutpat.</p>\r\n', '0b2Mrfo-AqQ?ecver', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla finibus hendrerit erat, ac tincidunt ex sagittis id. Donec sodales fringilla aliquet. ', 'Aliquam vel risus lacinia, fringilla risus quis, facilisis massa. Mauris auctor odio nibh, at scelerisque erat fermentum aliquet. ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik`
--

CREATE TABLE IF NOT EXISTS `icerik` (
  `icerik_id` int(11) NOT NULL AUTO_INCREMENT,
  `icerik_zaman` datetime NOT NULL,
  `icerik_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik_keyword` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`icerik_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=41 ;

--
-- Tablo döküm verisi `icerik`
--

INSERT INTO `icerik` (`icerik_id`, `icerik_zaman`, `icerik_resimyol`, `icerik_ad`, `icerik_detay`, `icerik_keyword`, `icerik_durum`) VALUES
(36, '2017-07-25 15:27:48', 'dimg/icerik/200592296529689274171.jpg', 'Deneme 1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas dolor non metus tincidunt, et cursus sapien porta. Aenean varius sit amet purus ac accumsan. Nullam eget elementum nisi, a posuere lorem. Fusce sit amet ex et purus condimentum porttitor vitae eget tortor. Curabitur nec erat nibh. Sed non fringilla elit, ut porttitor orci. Phasellus quis tincidunt odio. Nulla ullamcorper aliquam euismod. Etiam tristique magna risus, id mollis quam condimentum ut. Quisque tellus nunc, accumsan eu laoreet sit amet, eleifend eget libero. Nullam lacus tortor, elementum ut pulvinar tincidunt, accumsan a ipsum. Fusce in enim maximus, posuere augue eu, iaculis felis. Aenean tempus elementum malesuada.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In pretium nisl dui. Maecenas sed commodo nulla. Phasellus viverra eget erat eu ullamcorper. Aliquam quis ipsum ac purus sollicitudin placerat sed vitae tellus. Sed metus nisi, cursus quis suscipit eu, pretium eget nisi. Suspendisse imperdiet massa vitae convallis gravida. Proin consectetur non eros in ultricies. Praesent sagittis odio dui, in tincidunt urna vestibulum quis. Suspendisse ullamcorper vestibulum erat, non porttitor felis imperdiet sed. Aliquam gravida velit neque, vitae fringilla felis viverra consectetur. Phasellus scelerisque lorem ipsum, ultrices sollicitudin purus efficitur et. Donec semper facilisis urna, non viverra sem tristique tempus.</p>\r\n', 'deneme1,firma', '1'),
(39, '2017-07-25 15:29:28', 'dimg/icerik/266502506130924277672.jpg', 'Deneme 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra tellus a tortor suscipit, sed scelerisque sapien dictum. Curabitur augue eros, aliquet vitae augue eu, ullamcorper dictum nibh. Phasellus porta, mi non dignissim accumsan, mauris metus aliquet augue, eget eleifend urna massa ut elit. Donec ac mauris eros. Nam iaculis erat vulputate efficitur rhoncus. Nulla placerat nisl at dolor aliquam, sit amet posuere velit lacinia. Curabitur aliquet tellus nec eleifend semper. Cras sed semper ligula, rhoncus mollis ipsum. Vestibulum ac orci quis lorem varius interdum a eu odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque id lacus et nibh blandit lacinia in in risus. Suspendisse tristique, arcu nec placerat porttitor, ligula diam blandit sem, sed pulvinar elit quam quis nulla. Ut lobortis diam nibh, vitae molestie tortor tempor ut.</p>\r\n', 'deneme2,firma', '1'),
(40, '2017-07-25 15:30:37', 'dimg/icerik/281722970624981287453.jpg', 'Deneme 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra tellus a tortor suscipit, sed scelerisque sapien dictum. Curabitur augue eros, aliquet vitae augue eu, ullamcorper dictum nibh. Phasellus porta, mi non dignissim accumsan, mauris metus aliquet augue, eget eleifend urna massa ut elit. Donec ac mauris eros. Nam iaculis erat vulputate efficitur rhoncus. Nulla placerat nisl at dolor aliquam, sit amet posuere velit lacinia. Curabitur aliquet tellus nec eleifend semper. Cras sed semper ligula, rhoncus mollis ipsum. Vestibulum ac orci quis lorem varius interdum a eu odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque id lacus et nibh blandit lacinia in in risus. Suspendisse tristique, arcu nec placerat porttitor, ligula diam blandit sem, sed pulvinar elit quam quis nulla. Ut lobortis diam nibh, vitae molestie tortor tempor ut.</p>\r\n', 'deneme3,firma', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE IF NOT EXISTS `kullanici` (
  `kullanici_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_zaman` datetime NOT NULL,
  `kullanici_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_durum` int(1) NOT NULL,
  PRIMARY KEY (`kullanici_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_ad`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_yetki`, `kullanici_durum`) VALUES
(1, '2017-07-11 22:00:00', 'dimg/kullanici/24084Desert.jpg', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Elif tiryaki', '5', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) NOT NULL,
  `menu_ust` int(11) NOT NULL,
  `menu_icon` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `menu_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `menu_kategori` int(2) NOT NULL,
  `menu_sira` int(1) NOT NULL,
  `menu_durum` int(1) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=18 ;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `kategori_id`, `menu_ust`, `menu_icon`, `menu_ad`, `menu_detay`, `menu_url`, `menu_kategori`, `menu_sira`, `menu_durum`) VALUES
(5, 0, 0, '', 'Anasayfa', '', 'index.php', 0, 1, 0),
(9, 0, 0, '', 'İletişim', '', 'bizeulasin', 0, 5, 1),
(10, 0, 0, '', 'Haberler', '', 'haberler', 0, 3, 1),
(11, 0, 10, '', 'İstanbul Haberleri', '<p>Duis ut dui volutpat est luctus porta vitae vel orci. Suspendisse porta augue elit, vestibulum sagittis sem pulvinar ut. Donec at nulla magna. Aliquam nec diam nibh. Nulla a lorem sed metus ultrices porttitor. Mauris pellentesque urna eu arcu tempus, eu commodo sem varius. In erat lacus, egestas in dolor vel, pellentesque eleifend sem. Suspendisse sed dolor vel dolor pulvinar tempor. Aliquam et rutrum arcu. Duis congue condimentum metus, eget pretium purus pulvinar ut. Donec eleifend arcu ante, nec feugiat lectus dignissim sollicitudin. Phasellus iaculis augue lobortis tincidunt consectetur. Maecenas malesuada, tellus sit amet facilisis dapibus, metus nunc elementum lacus, vel porta erat felis ac ligula. Sed quis ante nibh. Donec quis erat vitae magna sagittis bibendum.</p>\r\n\r\n<p>Cras non consectetur diam, nec accumsan dui. Morbi eget lacus ac nisi aliquam cursus. Ut consectetur risus odio, ut ultricies lectus tristique id. Donec at libero finibus, bibendum diam non, tincidunt augue. Integer vehicula urna sed sapien sollicitudin malesuada. Nulla mattis, tellus non ultrices ultrices, leo sapien finibus justo, a ornare arcu ipsum et nibh. Aenean congue sem nec arcu imperdiet vehicula a et neque. Aliquam erat volutpat. Curabitur tincidunt sed mi in mattis. Donec venenatis ut massa eget consectetur. Aliquam erat volutpat. Nam non lacus arcu.</p>\r\n', '', 0, 0, 1),
(12, 0, 6, '', 'Misyonumuz', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla ut diam porta imperdiet nec porta ante. Nulla consequat enim vel enim consectetur, vitae elementum lacus suscipit. Mauris fermentum pellentesque arcu, eu feugiat lectus condimentum ac. Aliquam vitae felis vel elit auctor placerat vitae sit amet arcu. Proin ultricies suscipit odio. Maecenas sodales, lorem pretium interdum tempus, est est rutrum arcu, id vulputate justo ipsum ac quam. Proin nunc odio, auctor non diam et, pharetra posuere orci. Nunc scelerisque egestas odio, non varius odio aliquam in.</p>\r\n', '', 0, 0, 1),
(15, 0, 0, '', 'Hakkimizda', '', 'hakkimizda.php', 0, 2, 1),
(17, 0, 0, '', 'Galeri', '', 'galeri.php', 0, 4, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(2) NOT NULL,
  `slider_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=39 ;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_resimyol`, `slider_link`, `slider_sira`, `slider_durum`) VALUES
(31, 'Slider 2', 'dimg/slider/231203176230745277881.jpeg', 'index.php', 2, '1'),
(38, 'Slider 1', 'dimg/slider/273442124321329304432.jpg', '', 2, '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
