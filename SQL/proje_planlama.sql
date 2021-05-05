-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 May 2021, 21:47:11
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje_planlama`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `adress` text NOT NULL,
  `tel_no1` varchar(20) NOT NULL,
  `tel_no2` varchar(20) NOT NULL,
  `web_adress1` varchar(250) NOT NULL,
  `web_adress2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`contact_id`, `adress`, `tel_no1`, `tel_no2`, `web_adress1`, `web_adress2`) VALUES
(1, '1254 Patterson Street Houston, TX 77025', '713-295-4383', '713-295-4383', 'www.google.com', 'www.example.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `education`
--

CREATE TABLE `education` (
  `education_id` int(11) NOT NULL,
  `education1_title` varchar(50) NOT NULL,
  `education1_date` varchar(20) NOT NULL,
  `education1_description` text NOT NULL,
  `education2_title` varchar(50) NOT NULL,
  `education2_date` varchar(20) NOT NULL,
  `education2_description` text NOT NULL,
  `education3_title` varchar(50) NOT NULL,
  `education3_date` varchar(20) NOT NULL,
  `education3_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `education`
--

INSERT INTO `education` (`education_id`, `education1_title`, `education1_date`, `education1_description`, `education2_title`, `education2_date`, `education2_description`, `education3_title`, `education3_date`, `education3_description`) VALUES
(1, 'CSS College Larkana - Masters Degree', ' 2013-2016', 'Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.', 'CSS College Larkana - Master Degree', ' 2013-2016', 'Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.', 'CSS College Larkana - Master Degree', ' 2013-2016', 'Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `experience`
--

CREATE TABLE `experience` (
  `experience_id` int(11) NOT NULL,
  `experience1_title` varchar(50) NOT NULL,
  `experience1_date` varchar(20) NOT NULL,
  `experience1_description` text NOT NULL,
  `experience2_title` varchar(50) NOT NULL,
  `experience2_date` varchar(50) NOT NULL,
  `experience2_description` text NOT NULL,
  `experience3_title` varchar(50) NOT NULL,
  `experience3_date` varchar(50) NOT NULL,
  `experience3_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `experience`
--

INSERT INTO `experience` (`experience_id`, `experience1_title`, `experience1_date`, `experience1_description`, `experience2_title`, `experience2_date`, `experience2_description`, `experience3_title`, `experience3_date`, `experience3_description`) VALUES
(1, 'CSS College Larkana - Masters Degree', '2013-2016', 'Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.', 'CSS College Larkana - Masters Degree', '2013-2016', 'Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.', 'CSS College Larkana - Masters Degree', '2013-2016', 'Lorem ipsum dolor sit amet, id electram reprimique his, dicta saepe oporteat eos an, esse erat doming at lam. Nec quodsi suscipiantur an, ad graece nemore ocurreret lam, agam ipsum meliore quo ut.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `informations`
--

CREATE TABLE `informations` (
  `informations_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `job` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `country` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `biography` text NOT NULL,
  `cv_adress` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `informations`
--

INSERT INTO `informations` (`informations_id`, `name`, `job`, `age`, `country`, `city`, `biography`, `cv_adress`) VALUES
(1, 'İsmail Öner', 'Öğrenci', 20, 'Türkiye', 'Malatya', 'Qui ne indoctum electram vituperatoribus. Eirmod tamquam efficiendi mei cu, eum idque voluptatum ad, quo id tollit regione prompta. Cu probo iusto assentior eos, usu summo perpetua ne. Te suas phaedrum ullamcorper has. Ea mei ponderum rationibus dissentias. Inani phaedrum suavitate eu qui, vide aperiri facilis est eu. Te appetere cotidieque pro, duo eu assum facete instructior, no autem aeterno reprimique nec. Pri cu delectus adolescens, eruditi placerat cu sed, zril nonumes forensibus in eam. Eam ne dolore diceret pericula, in vis numquam pertinax. Vel ne dolorum eloquentiam, et vel senserit incorrupte neglegentur, pro cu audiam ocurreret reprimique. Qui ne indoctum electram vituperatoribus. Eirmod tamquam efficiendi mei cu, eum idque voluptatum ad, quo id tollit regione prompta. Cu probo iusto assentior. Qui ne indoctum electram vituperatoribus. Eirmod tamquam efficiendi mei cu, eum idque voluptatum ad.', 'CV.docx');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `main_page`
--

CREATE TABLE `main_page` (
  `main_page_id` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `main_page`
--

INSERT INTO `main_page` (`main_page_id`, `site_title`, `title`, `description`, `image`) VALUES
(1, 'Kişisel Site', 'BEN İSMAİL ÖNER', 'Sayfama Hoşgeldiniz', 'deneme.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `skills`
--

CREATE TABLE `skills` (
  `skills_id` int(11) NOT NULL,
  `skill1` varchar(10) NOT NULL,
  `skill1_counter` varchar(10) NOT NULL,
  `skill2` varchar(10) NOT NULL,
  `skill2_counter` varchar(10) NOT NULL,
  `skill3` varchar(10) NOT NULL,
  `skill3_counter` varchar(10) NOT NULL,
  `skill4` varchar(10) NOT NULL,
  `skill4_counter` varchar(10) NOT NULL,
  `skill5` varchar(10) NOT NULL,
  `skill5_counter` varchar(10) NOT NULL,
  `skill6` varchar(10) NOT NULL,
  `skill6_counter` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `skills`
--

INSERT INTO `skills` (`skills_id`, `skill1`, `skill1_counter`, `skill2`, `skill2_counter`, `skill3`, `skill3_counter`, `skill4`, `skill4_counter`, `skill5`, `skill5_counter`, `skill6`, `skill6_counter`) VALUES
(1, 'HTML/CSS', '85', 'php', '90', 'jQuery', '75', 'JavaScript', '85', 'WordPress', '90', 'SEO', '75');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `social_media`
--

CREATE TABLE `social_media` (
  `social_media_id` int(11) NOT NULL,
  `social_media_icon1` varchar(250) NOT NULL,
  `social_media_adress1` varchar(250) NOT NULL,
  `social_media_icon2` varchar(250) NOT NULL,
  `social_media_adress2` varchar(250) NOT NULL,
  `social_media_icon3` varchar(250) NOT NULL,
  `social_media_adress3` varchar(250) NOT NULL,
  `social_media_icon4` varchar(250) NOT NULL,
  `social_media_adress4` varchar(250) NOT NULL,
  `social_media_icon5` varchar(250) NOT NULL,
  `social_media_adress5` varchar(250) NOT NULL,
  `social_media_icon6` varchar(250) NOT NULL,
  `social_media_adress6` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `social_media`
--

INSERT INTO `social_media` (`social_media_id`, `social_media_icon1`, `social_media_adress1`, `social_media_icon2`, `social_media_adress2`, `social_media_icon3`, `social_media_adress3`, `social_media_icon4`, `social_media_adress4`, `social_media_icon5`, `social_media_adress5`, `social_media_icon6`, `social_media_adress6`) VALUES
(1, 'facebook.png', 'https://www.facebook.com/', 'instagram.png', 'https://www.instagram.com/', 'linkedin.png', 'https://tr.linkedin.com/', 'twitter.png', 'https://twitter.com/', 'github.png', 'https://github.com/', 'youtube.png', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(23, 'a', 'a@a.com', 'MTIzNDU2Nw==');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Tablo için indeksler `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Tablo için indeksler `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`experience_id`);

--
-- Tablo için indeksler `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`informations_id`);

--
-- Tablo için indeksler `main_page`
--
ALTER TABLE `main_page`
  ADD PRIMARY KEY (`main_page_id`);

--
-- Tablo için indeksler `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skills_id`);

--
-- Tablo için indeksler `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`social_media_id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `experience`
--
ALTER TABLE `experience`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `informations`
--
ALTER TABLE `informations`
  MODIFY `informations_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `main_page`
--
ALTER TABLE `main_page`
  MODIFY `main_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `skills`
--
ALTER TABLE `skills`
  MODIFY `skills_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `social_media`
--
ALTER TABLE `social_media`
  MODIFY `social_media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
