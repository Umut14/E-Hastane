-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Nis 2017, 23:16:17
-- Sunucu sürümü: 5.6.26
-- PHP Sürümü: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ehastane`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevular`
--

CREATE TABLE IF NOT EXISTS `randevular` (
  `Randevu_ID` int(11) NOT NULL,
  `Hasta` int(11) NOT NULL,
  `Hemsire` int(11) NOT NULL,
  `Tarih` date NOT NULL,
  `Saat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Islem_Zamanı` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `randevular`
--

INSERT INTO `randevular` (`Randevu_ID`, `Hasta`, `Hemsire`, `Tarih`, `Saat`, `Islem_Zamanı`) VALUES
(3, 1, 7, '2017-05-08', '17', '2017-04-19 15:39:29'),
(4, 2, 7, '2017-04-25', '18', '2017-04-19 15:40:50'),
(5, 2, 5, '2017-04-26', '23', '2017-04-19 15:44:09'),
(6, 3, 9, '2017-05-09', '0', '2017-04-19 15:51:11'),
(8, 1, 4, '2017-04-26', '10', '2017-04-19 17:54:19'),
(9, 1, 5, '2017-05-05', '10', '2017-04-19 17:54:33'),
(10, 1, 6, '2017-05-08', '7', '2017-04-19 17:54:43'),
(11, 1, 9, '2017-05-01', '12', '2017-04-19 18:19:51');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehirler`
--

CREATE TABLE IF NOT EXISTS `sehirler` (
  `SehirID` int(11) NOT NULL,
  `SehirAdi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Plaka` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `sehirler`
--

INSERT INTO `sehirler` (`SehirID`, `SehirAdi`, `Plaka`) VALUES
(1, 'Adana', 1),
(2, 'Adıyaman', 2),
(3, 'Afyonkarahisar', 3),
(4, 'Ağrı', 4),
(5, 'Aksaray', 68),
(6, 'Amasya', 5),
(7, 'Ankara', 6),
(8, 'Antalya', 7),
(9, 'Ardahan', 75),
(10, 'Artvin', 8),
(11, 'Aydın', 9),
(12, 'Balıkesir', 10),
(13, 'Bartın', 74),
(14, 'Batman', 72),
(15, 'Bayburt', 69),
(16, 'Bilecik', 11),
(17, 'Bingöl', 12),
(18, 'Bolu', 14),
(19, 'Burdur', 15),
(20, 'Bitlis', 13),
(21, 'Bursa', 16),
(22, 'Çanakkale', 17),
(23, 'Çankırı', 18),
(24, 'Çorum', 19),
(25, 'Denizli', 20),
(26, 'Diyarbakır', 21),
(27, 'Düzce', 81),
(28, 'Edirne', 22),
(29, 'Elazığ', 23),
(30, 'Erzincan', 24),
(31, 'Erzurum', 25),
(32, 'Eskişehir', 26),
(33, 'Gaziantep', 27),
(34, 'Giresun', 28),
(35, 'Malatya', 44),
(36, 'Diğer', 100),
(37, 'Zonguldak', 67),
(38, 'Yozgat', 66),
(39, 'Yalova', 77),
(40, 'Van', 65),
(41, 'Uşak', 64),
(42, 'Tunceli', 62),
(43, 'Trabzon', 61),
(44, 'Tokat', 60),
(45, 'Tekirdağ', 59),
(46, 'Şırnak', 73),
(47, 'Şanlıurfa', 63),
(48, 'Sivas', 58),
(49, 'Sinop', 57),
(50, 'Siirt', 56),
(51, 'Samsun', 55),
(52, 'Sakarya', 54),
(53, 'Rize', 53),
(54, 'Osmaniye', 80),
(55, 'Ordu', 52),
(56, 'Niğde', 51),
(57, 'Nevşehir', 50),
(58, 'Muş', 49),
(59, 'Muğla', 48),
(60, 'Mardin', 47),
(61, 'Manisa', 45),
(62, 'Gümüşhane', 29),
(63, 'Hakkari', 30),
(64, 'Hatay', 31),
(65, 'Iğdır', 76),
(66, 'Isparta', 32),
(67, 'İçel', 33),
(68, 'İstanbul', 34),
(69, 'İzmir', 35),
(70, 'Kahramanmaraş', 46),
(71, 'Karabük', 78),
(72, 'Karaman', 70),
(73, 'Kars', 36),
(74, 'Kastamonu', 37),
(75, 'Kayseri', 38),
(76, 'Kırıkkale', 71),
(77, 'Kırklareli', 39),
(78, 'Kırşehir', 40),
(79, 'Kilis', 79),
(80, 'Kocaeli', 41),
(81, 'Konya', 42),
(82, 'Kütahya', 43);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uniler`
--

CREATE TABLE IF NOT EXISTS `uniler` (
  `UniID` int(11) NOT NULL,
  `UniAdi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `uniler`
--

INSERT INTO `uniler` (`UniID`, `UniAdi`) VALUES
(1, 'Abant İzzet Baysal Üniversitesi'),
(2, 'Abdullah Gül Üniversitesi'),
(3, 'Acıbadem Üniversitesi'),
(4, 'Adana Bilim ve Teknoloji Üniversitesi'),
(5, 'Adnan Menderes Üniversitesi'),
(6, 'Adıyaman Üniversitesi'),
(7, 'Afyon Kocatepe Üniversitesi'),
(8, 'Ahi Evran Üniversitesi'),
(9, 'Akdeniz Üniversitesi'),
(10, 'Akev Üniversitesi'),
(11, 'Aksaray Üniversitesi'),
(12, 'Alanya Alaaddin Keykubat Üniversitesi'),
(13, 'Alanya Hamdullah Emin Paşa Üniversitesi'),
(14, 'Amasya Üniversitesi'),
(15, 'Anadolu Üniversitesi'),
(16, 'Anka Teknoloji Üniversitesi'),
(17, 'Ankara Sosyal Bilimler Üniversitesi'),
(18, 'Ankara Üniversitesi'),
(19, 'Ardahan Üniversitesi'),
(20, 'Artvin Çoruh Üniversitesi'),
(21, 'Atatürk Üniversitesi'),
(22, 'Atılım Üniversitesi'),
(23, 'Avrasya Üniversitesi'),
(24, 'Ağrı İbrahim Çeçen Üniversitesi'),
(25, 'Bahçeşehir Üniversitesi'),
(26, 'Balıkesir Üniversitesi'),
(27, 'Bandırma Onyedi Eylül Üniversitesi'),
(28, 'Bartın Üniversitesi'),
(29, 'Batman Üniversitesi'),
(30, 'Bayburt Üniversitesi'),
(31, 'Başkent Üniversitesi'),
(32, 'Beykent Üniversitesi'),
(33, 'Bezmiâlem Vakıf Üniversitesi'),
(34, 'Bilecik Şeyh Edebali Üniversitesi'),
(35, 'Bilkent Üniversitesi'),
(36, 'Bingöl Üniversitesi'),
(37, 'Biruni Üniversitesi'),
(38, 'Bitlis Eren Üniversitesi'),
(39, 'Bozok Üniversitesi'),
(40, 'Boğaziçi Üniversitesi'),
(41, 'Bursa Orhangazi Üniversitesi'),
(42, 'Bursa Teknik Üniversitesi'),
(43, 'Bülent Ecevit Üniversitesi'),
(44, 'Canik Başarı Üniversitesi'),
(45, 'Celal Bayar Üniversitesi'),
(46, 'Cumhuriyet Üniversitesi'),
(47, 'Çanakkale Onsekiz Mart Üniversitesi'),
(48, 'Çankaya Üniversitesi'),
(49, 'Çankırı Karatekin Üniversitesi'),
(50, 'Çağ Üniversitesi'),
(51, 'Çukurova Üniversitesi'),
(52, 'Dicle Üniversitesi'),
(53, 'Dokuz Eylül Üniversitesi'),
(54, 'Doğuş Üniversitesi'),
(55, 'Dumlupınar Üniversitesi'),
(56, 'Düzce Üniversitesi'),
(57, 'Ege Üniversitesi'),
(58, 'Erciyes Üniversitesi'),
(59, 'Erzincan Üniversitesi'),
(60, 'Erzurum Teknik Üniversitesi'),
(61, 'Eskişehir Osmangazi Üniversitesi'),
(62, 'Fatih Sultan Mehmet Üniversitesi'),
(63, 'Fatih Üniversitesi'),
(64, 'Fırat Üniversitesi'),
(65, 'Galatasaray Üniversitesi'),
(66, 'Gazi Üniversitesi'),
(67, 'Gaziantep Üniversitesi'),
(68, 'Gaziosmanpaşa Üniversitesi'),
(69, 'Gebze Teknik Üniversitesi'),
(70, 'Gedik Üniversitesi'),
(71, 'Gediz Üniversitesi'),
(72, 'Giresun Üniversitesi'),
(73, 'Gümüşhane Üniversitesi'),
(74, 'Hacettepe Üniversitesi'),
(75, 'Hakkari Üniversitesi'),
(76, 'Haliç Üniversitesi'),
(77, 'Harran Üniversitesi'),
(78, 'Hasan Kalyoncu Üniversitesi'),
(79, 'Hitit Üniversitesi'),
(80, 'Iğdır Üniversitesi'),
(81, 'Işık Üniversitesi'),
(82, 'Kadir Has Üniversitesi'),
(83, 'Kafkas Üniversitesi'),
(84, 'Kahramanmaraş Sütçü İmam Üniversitesi'),
(85, 'Kanuni Üniversitesi'),
(86, 'Karabük Üniversitesi'),
(87, 'Karadeniz Teknik Üniversitesi'),
(88, 'Karamanoğlu Mehmetbey Üniversitesi'),
(89, 'Karatay Üniversitesi'),
(90, 'Kastamonu Üniversitesi'),
(91, 'Kilis 7 Aralık Üniversitesi'),
(92, 'Kocaeli Üniversitesi'),
(93, 'Konya Gıda Tarım Üniversitesi'),
(94, 'Koç Üniversitesi'),
(95, 'Kırklareli Üniversitesi'),
(96, 'Kırıkkale Üniversitesi'),
(97, 'MEF Üniversitesi'),
(98, 'Maltepe Üniversitesi'),
(99, 'Mardin Artuklu Üniversitesi'),
(100, 'Marmara Üniversitesi'),
(101, 'Mehmet Akif Ersoy Üniversitesi'),
(102, 'Melikşah Üniversitesi'),
(103, 'Mersin Üniversitesi'),
(104, 'Mevlana Üniversitesi'),
(105, 'Mimar Sinan Güzel Sanatlar Üniversitesi'),
(106, 'Murat Hüdavendigar Üniversitesi'),
(107, 'Mustafa Kemal Üniversitesi'),
(108, 'Muğla Sıtkı Koçman Üniversitesi'),
(109, 'Muş Alparslan Üniversitesi'),
(110, 'Namık Kemal Üniversitesi'),
(111, 'Necmettin Erbakan Üniversitesi'),
(112, 'Nevşehir Hacı Bektaş Veli Üniversitesi'),
(113, 'Niğde Üniversitesi'),
(114, 'Nişantaşı Üniversitesi'),
(115, 'Nuh Naci Yazgan Üniversitesi'),
(116, 'İbn-u Haldun Üniversitesi'),
(117, 'İnönü Üniversitesi'),
(118, 'İpek Üniversitesi'),
(119, 'İskenderun Teknik Üniversitesi'),
(120, 'İstanbul 29 Mayıs Üniversitesi'),
(121, 'İstanbul Arel Üniversitesi'),
(122, 'İstanbul Aydın Üniversitesi'),
(123, 'İstanbul Bilgi Üniversitesi'),
(124, 'İstanbul Bilim Üniversitesi'),
(125, 'İstanbul Esenyurt Üniversitesi'),
(126, 'İstanbul Gelişim Üniversitesi'),
(127, 'İstanbul Kemerburgaz Üniversitesi'),
(128, 'İstanbul Kültür Üniversitesi'),
(129, 'İstanbul Medeniyet Üniversitesi'),
(130, 'İstanbul Medipol Üniversitesi'),
(131, 'İstanbul Rumeli Üniversitesi'),
(132, 'İstanbul Sabahattin Zaim Üniversitesi'),
(133, 'İstanbul Teknik Üniversitesi'),
(134, 'İstanbul Ticaret Üniversitesi'),
(135, 'İstanbul Üniversitesi'),
(136, 'İstanbul Şehir Üniversitesi'),
(137, 'İstinye Üniversitesi'),
(138, 'İzmir Ekonomi Üniversitesi'),
(139, 'İzmir Kâtip Çelebi Üniversitesi'),
(140, 'İzmir Yüksek Teknoloji Enstitüsü'),
(141, 'İzmir Üniversitesi'),
(142, 'Okan Üniversitesi'),
(143, 'Ondokuz Mayıs Üniversitesi'),
(144, 'Ordu Üniversitesi'),
(145, 'Orta Doğu Teknik Üniversitesi'),
(146, 'Osmaniye Korkut Ata Üniversitesi'),
(147, 'Özyeğin Üniversitesi'),
(148, 'Pamukkale Üniversitesi'),
(149, 'Piri Reis Üniversitesi'),
(150, 'Recep Tayyip Erdoğan Üniversitesi'),
(151, 'Sabancı Üniversitesi'),
(152, 'Sakarya Üniversitesi'),
(153, 'Sanko Üniversitesi'),
(154, 'Sağlık Bilimleri Üniversitesi'),
(155, 'Selahattin Eyyubi Üniversitesi'),
(156, 'Selçuk Üniversitesi'),
(157, 'Siirt Üniversitesi'),
(158, 'Sinop Üniversitesi'),
(159, 'Süleyman Demirel Üniversitesi'),
(160, 'Süleyman Şah Üniversites'),
(161, 'Şifa Üniversitesi'),
(162, 'Şırnak Üniversitesi'),
(163, 'TED Üniversitesi'),
(164, 'TOBB Ekonomi ve Teknoloji Üniversitesi'),
(165, 'Toros Üniversitesi'),
(166, 'Trakya Üniversitesi'),
(167, 'Tunceli Üniversitesi'),
(168, 'Turgut Özal Üniversitesi'),
(169, 'Türk Alman Üniversitesi'),
(170, 'Türk Hava Kurumu Üniversitesi'),
(171, 'Türkiye Uluslararası İslam, Bilim ve Teknoloji Üniversitesi'),
(172, 'Ufuk Üniversitesi'),
(173, 'Uludağ Üniversitesi'),
(174, 'Uluslararası Antalya Üniversitesi'),
(175, 'Uşak Üniversitesi'),
(176, 'Üsküdar Üniversitesi'),
(177, 'Yalova Üniversitesi'),
(178, 'Yaşar Üniversitesi'),
(179, 'Yeditepe Üniversitesi'),
(180, 'Yeni Yüzyıl Üniversitesi'),
(181, 'Yüksek İhtisas Üniversitesi'),
(182, 'Yüzüncü Yıl Üniversitesi'),
(183, 'Yıldırım Beyazıt Üniversitesi'),
(184, 'Yıldız Teknik Üniversitesi'),
(185, 'Zirve Üniversitesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `unvanlar`
--

CREATE TABLE IF NOT EXISTS `unvanlar` (
  `Unvan_ID` int(11) NOT NULL,
  `Unvan_Adi` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `unvanlar`
--

INSERT INTO `unvanlar` (`Unvan_ID`, `Unvan_Adi`) VALUES
(1, 'Hasta'),
(2, 'Hemşire'),
(3, 'Fizyoterapist'),
(4, 'Ebe'),
(5, 'Aile Hekimi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `User_ID` int(11) NOT NULL,
  `E_Mail` varchar(48) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Ad` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Soyad` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tc` varchar(11) NOT NULL,
  `Telefon` varchar(11) NOT NULL,
  `Sehir` int(2) NOT NULL,
  `Universite` int(3) NOT NULL,
  `Rol` int(1) NOT NULL,
  `Tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`User_ID`, `E_Mail`, `Password`, `Ad`, `Soyad`, `Tc`, `Telefon`, `Sehir`, `Universite`, `Rol`, `Tarih`) VALUES
(1, 'umutyenikardesler@gmail.com', '123456', 'Umut', 'Yenikardeşler', '10384793184', '05422256935', 20, 148, 1, '2017-04-19 14:59:32'),
(2, 'ahmett@gmail.com', '123456', 'Ahmet', 'Kılıçaslan', '12345678912', '05069786670', 20, 148, 1, '2017-04-19 15:02:45'),
(3, 'oguztufan@gmail.com', '123456', 'Oğuz', 'Tufan', '98765432198', '05051394415', 20, 57, 1, '2017-04-19 15:04:31'),
(4, 'hilalhelvaci@gmail.com', '123456', 'Hilal', 'Helvacı', '55555555555', '05055555555', 59, 53, 2, '2017-04-19 15:10:46'),
(5, 'ilayda@gmail.com', '123456', 'İlayda', 'Ergün', '14785236987', '05044564556', 20, 148, 2, '2017-04-19 15:23:37'),
(6, 'busra@gmail.com', '123456', 'Büşra', 'Gedilli', '36925814736', '05422222222', 44, 54, 3, '2017-04-19 15:27:56'),
(7, 'kubra@gmail.com', '123456', 'Kübra', 'Şar', '45612378912', '05366666666', 22, 86, 4, '2017-04-19 15:35:42'),
(8, 'elif@gmail.com', '123456', 'Elif', 'Varol', '77777777777', '05388888888', 34, 3, 5, '2017-04-19 15:38:08'),
(9, 'gurkan@gmail.com', '123456', 'Gürkan', 'Şen', '78985212345', '05058966699', 20, 148, 2, '2017-04-19 15:50:17'),
(10, 'onur@gmail.com', '123456', 'Onur', 'Kahraman', '75757575757', '05377835687', 7, 9, 5, '2017-04-19 21:21:26'),
(11, 'sedat@gmail.com', '123456', 'Sedat', 'Doğru', '46464646464', '02324625715', 69, 24, 3, '2017-04-19 21:39:16'),
(12, 'ismail@gmail.com', '123456', 'İsmail', 'Arslan', '12456378935', '05426544556', 1, 1, 3, '2017-04-19 21:48:28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_yetenek`
--

CREATE TABLE IF NOT EXISTS `user_yetenek` (
  `UY_ID` int(11) NOT NULL,
  `Hemsire` int(11) NOT NULL,
  `Yetenek` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `user_yetenek`
--

INSERT INTO `user_yetenek` (`UY_ID`, `Hemsire`, `Yetenek`) VALUES
(2, 4, 2),
(5, 4, 5),
(6, 4, 6),
(8, 4, 8),
(9, 4, 1),
(10, 5, 1),
(11, 5, 2),
(12, 5, 3),
(13, 6, 1),
(14, 6, 4),
(15, 6, 5),
(18, 7, 6),
(19, 7, 7),
(20, 7, 8),
(25, 7, 3),
(45, 9, 2),
(48, 9, 4),
(50, 9, 3),
(51, 8, 1),
(52, 8, 2),
(53, 8, 4),
(54, 6, 3),
(55, 6, 6);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetenekler`
--

CREATE TABLE IF NOT EXISTS `yetenekler` (
  `Yetenek_ID` int(11) NOT NULL,
  `Yetenek_Adi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `yetenekler`
--

INSERT INTO `yetenekler` (`Yetenek_ID`, `Yetenek_Adi`) VALUES
(1, 'İğne Vurma'),
(2, 'Tansiyon Ölçme'),
(3, 'Pansuman'),
(4, 'Serum'),
(5, 'Fizik Tedavi Hizmetleri'),
(6, 'Muayene'),
(7, 'Doğum Öncesi Hizmet'),
(8, 'Doğum Sonrası Hizmet');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `randevular`
--
ALTER TABLE `randevular`
  ADD PRIMARY KEY (`Randevu_ID`);

--
-- Tablo için indeksler `sehirler`
--
ALTER TABLE `sehirler`
  ADD PRIMARY KEY (`SehirID`);

--
-- Tablo için indeksler `uniler`
--
ALTER TABLE `uniler`
  ADD PRIMARY KEY (`UniID`);

--
-- Tablo için indeksler `unvanlar`
--
ALTER TABLE `unvanlar`
  ADD PRIMARY KEY (`Unvan_ID`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `E_Mail` (`E_Mail`),
  ADD UNIQUE KEY `Tc` (`Tc`);

--
-- Tablo için indeksler `user_yetenek`
--
ALTER TABLE `user_yetenek`
  ADD PRIMARY KEY (`UY_ID`);

--
-- Tablo için indeksler `yetenekler`
--
ALTER TABLE `yetenekler`
  ADD PRIMARY KEY (`Yetenek_ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `randevular`
--
ALTER TABLE `randevular`
  MODIFY `Randevu_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `sehirler`
--
ALTER TABLE `sehirler`
  MODIFY `SehirID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- Tablo için AUTO_INCREMENT değeri `uniler`
--
ALTER TABLE `uniler`
  MODIFY `UniID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=186;
--
-- Tablo için AUTO_INCREMENT değeri `unvanlar`
--
ALTER TABLE `unvanlar`
  MODIFY `Unvan_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `user_yetenek`
--
ALTER TABLE `user_yetenek`
  MODIFY `UY_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- Tablo için AUTO_INCREMENT değeri `yetenekler`
--
ALTER TABLE `yetenekler`
  MODIFY `Yetenek_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
