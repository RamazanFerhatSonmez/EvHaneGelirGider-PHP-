-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Oca 2019, 15:59:11
-- Sunucu sürümü: 10.1.36-MariaDB
-- PHP Sürümü: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `evhanegelirgider`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicigelirleri`
--

CREATE TABLE `kullanicigelirleri` (
  `gelirId` int(11) NOT NULL,
  `gelirMiktar` int(5) NOT NULL,
  `gelirkategoriAd` varchar(25) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT 'Belirtilmemiş',
  `gelirDate` date NOT NULL,
  `kullanicigelirId` int(11) NOT NULL,
  `gelirAciklama` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT 'Acıklama Yok'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanicigelirleri`
--

INSERT INTO `kullanicigelirleri` (`gelirId`, `gelirMiktar`, `gelirkategoriAd`, `gelirDate`, `kullanicigelirId`, `gelirAciklama`) VALUES
(2, 400, 'Avans', '2018-12-05', 1, 'BU AYKI EK MESAI'),
(3, 400, '100', '2018-12-12', 1, 'VERDIGIM BORC'),
(4, 250, 'Aylık Maas', '2018-12-12', 5, 'ŞUAYB SIMSEK'),
(7, 500, 'Belirtilmemis', '2019-01-01', 1, 'YIL BASI IKTAMIYESI'),
(8, 500, 'Belirtilmemis', '2019-01-01', 1, 'YIL BASI IKRAMIYESI'),
(11, 2000, 'Belirtilmemis', '2019-01-02', 1, 'YIL BASI IKRAMIYESI'),
(12, 13200, 'Aylık Maas', '2019-01-10', 1, 'AAAAA'),
(13, 2000, 'Su FAturasi', '2019-01-05', 1, 'SU');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicigiderleri`
--

CREATE TABLE `kullanicigiderleri` (
  `giderId` int(11) NOT NULL,
  `giderMiktar` int(5) NOT NULL,
  `giderkategoriAd` varchar(25) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT 'Belirtilmemiş',
  `giderDate` date NOT NULL,
  `kullanicigiderId` int(11) NOT NULL,
  `giderAciklama` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT 'Acıklama Yok'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanicigiderleri`
--

INSERT INTO `kullanicigiderleri` (`giderId`, `giderMiktar`, `giderkategoriAd`, `giderDate`, `kullanicigiderId`, `giderAciklama`) VALUES
(5, 500, 'Kredi Borcu70', '2018-11-08', 1, 'ZIRAAT BANKASI KREDI BORCU ODENDI'),
(8, 250, 'Kredi Borcu', '2018-12-14', 1, 'AKBANK KREDI BORCU'),
(9, 250, 'Dogal Gaz Faturasi', '2018-12-02', 5, 'DOGAL GAZ FATURASI'),
(10, 230, 'Elektrik Faturasi', '2018-12-13', 1, 'AYLIK GELIR GIDER HESABI'),
(11, 500, 'Belirtilmemis', '2019-01-01', 1, 'ARABA VERGISI'),
(13, 500, 'Su FAturasi', '2019-01-01', 1, 'SU FATURASI'),
(14, 750, 'Belirtilmemis', '2019-01-02', 1, 'ARABA VERGISI');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kullaniciId` int(11) NOT NULL,
  `ad_soyad` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullaniciSifre` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullaniciAd` varchar(6) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullaniciId`, `ad_soyad`, `kullaniciSifre`, `kullaniciAd`) VALUES
(1, 'Admin', 'admin', 'admin'),
(2, 'Ramazan Ferhat Sönmez', 'rmzn15', 'ferhat'),
(5, 'Tacettin Gürdal', '1234', 'tacett'),
(6, 'Ramazan Belge', '123bel', 'belge1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicigelirleri`
--
ALTER TABLE `kullanicigelirleri`
  ADD PRIMARY KEY (`gelirId`),
  ADD KEY `kullanicigelirleri_fk0` (`kullanicigelirId`);

--
-- Tablo için indeksler `kullanicigiderleri`
--
ALTER TABLE `kullanicigiderleri`
  ADD PRIMARY KEY (`giderId`),
  ADD KEY `kullanicigiderleri_fk0` (`kullanicigiderId`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kullaniciId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicigelirleri`
--
ALTER TABLE `kullanicigelirleri`
  MODIFY `gelirId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicigiderleri`
--
ALTER TABLE `kullanicigiderleri`
  MODIFY `giderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kullaniciId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kullanicigelirleri`
--
ALTER TABLE `kullanicigelirleri`
  ADD CONSTRAINT `kullanicigelirleri_fk0` FOREIGN KEY (`kullanicigelirId`) REFERENCES `kullanicilar` (`kullaniciId`);

--
-- Tablo kısıtlamaları `kullanicigiderleri`
--
ALTER TABLE `kullanicigiderleri`
  ADD CONSTRAINT `kullanicigiderleri_fk0` FOREIGN KEY (`kullanicigiderId`) REFERENCES `kullanicilar` (`kullaniciId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
