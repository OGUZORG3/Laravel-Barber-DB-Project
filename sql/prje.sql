-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Haz 2023, 11:48:17
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `prje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `berber_blogs`
--

CREATE TABLE `berber_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `blog_slug` varchar(255) DEFAULT NULL,
  `blog_file` varchar(255) DEFAULT NULL,
  `blog_creator_id` varchar(255) DEFAULT NULL,
  `blog_must` int(11) DEFAULT NULL,
  `blog_content` text DEFAULT NULL,
  `blog_status` enum('0','1') NOT NULL DEFAULT '1',
  `tiklanma_sayisi` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `berber_blogs`
--

INSERT INTO `berber_blogs` (`id`, `created_at`, `updated_at`, `blog_title`, `blog_slug`, `blog_file`, `blog_creator_id`, `blog_must`, `blog_content`, `blog_status`, `tiklanma_sayisi`) VALUES
(24, '2023-06-11 13:38:43', '2023-06-12 06:45:49', 'Berberler', 'berberler', '6486d18004f7a.jpeg', '8', NULL, '<p>Giriş: Berberler, y&uuml;zyıllardır insanların sa&ccedil;larını d&uuml;zenlemek, sakallarını kesmek ve tıraş etmek gibi g&ouml;revlerle uğraşan uzman kişilerdir. G&uuml;n&uuml;m&uuml;zde hala b&uuml;y&uuml;k bir &ouml;neme sahip olan berberler, sadece birer kuaf&ouml;r değil, aynı zamanda sosyal etkileşimlerin merkezi ve erkekler i&ccedil;in &ouml;nemli bir rit&uuml;elin par&ccedil;ası haline gelmiştir.</p>\r\n\r\n<p>Berberlik Mesleğinin K&ouml;kenleri: Berberlik mesleği, tarihin derinliklerine uzanan bir ge&ccedil;mişe sahiptir. İlk olarak Mısırlılar tarafından icat edilen bu meslek, antik &ccedil;ağlarda da yaygın olarak icra edilmekteydi. Berberler, sa&ccedil; kesimi, sakal d&uuml;zenlemesi ve tıraş gibi hizmetleri yerine getirirken, aynı zamanda sohbet ederek, haber alışverişi yaparak veya kişiler arasında iletişimi sağlayarak toplumun bir par&ccedil;ası olmuşlardır.</p>\r\n\r\n<p>Berber D&uuml;kkanlarının &Ouml;nemi: Berber d&uuml;kkanları, erkekler i&ccedil;in bir sığınak, bir erkek kul&uuml;b&uuml; gibi bir mekan olarak g&ouml;r&uuml;lm&uuml;şt&uuml;r. Burada erkekler, g&uuml;n&uuml;n stresinden uzaklaşır, keyifli sohbetler yapar ve sıcak bir ortamda zaman ge&ccedil;irir. Berber d&uuml;kkanları, sosyal bağların g&uuml;&ccedil;lenmesine ve topluluk ruhunun oluşmasına katkıda bulunur.</p>\r\n\r\n<p>Berberlerin Becerileri ve Uzmanlıkları: Berberler, sa&ccedil; kesimi, tıraş, sakal d&uuml;zenleme, sa&ccedil; boyama gibi bir&ccedil;ok alanda becerilidir. İyi bir berber, m&uuml;şterisinin sa&ccedil; tipini ve y&uuml;z hatlarını analiz ederek, ona en uygun sa&ccedil; kesimi veya sakal şekillendirme tekniklerini uygular. Ayrıca, yeni trendlere ve tekniklere hakim olup, m&uuml;şterilerine g&uuml;ncel ve modern bir g&ouml;r&uuml;n&uuml;m sunarlar.</p>\r\n\r\n<p>Berber K&uuml;lt&uuml;r&uuml;nde Değişim: G&uuml;n&uuml;m&uuml;zde, berber k&uuml;lt&uuml;r&uuml; giderek daha da yenileniyor ve değişiyor. Berberler, sadece erkeklere hizmet vermekle kalmıyor, artık kadınlara da kuaf&ouml;r hizmetleri sunmaya başlamıştır. Aynı zamanda, modern berber d&uuml;kkanları, retro bir tarzla dekore edilerek nostaljik bir atmosfer yaratmaktadır. Berberler, geleneksel berberlik becerilerini modern teknoloji ve trendlerle birleştirerek, m&uuml;şterilerine kapsamlı bir deneyim sunmaktadır.</p>', '1', 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `berber_detays`
--

CREATE TABLE `berber_detays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `berber_file` varchar(255) DEFAULT NULL,
  `berber_isim` varchar(255) DEFAULT NULL,
  `berber_soyisim` varchar(255) DEFAULT NULL,
  `berber_adres` varchar(255) DEFAULT NULL,
  `berber_dukkan_isim` varchar(255) DEFAULT NULL,
  `berber_Telefon` varchar(255) DEFAULT NULL,
  `berber_mail` varchar(255) DEFAULT NULL,
  `berber_hakkında` text DEFAULT NULL,
  `berber_prof_tiklanma` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `berber_detays`
--

INSERT INTO `berber_detays` (`id`, `user_id`, `created_at`, `updated_at`, `berber_file`, `berber_isim`, `berber_soyisim`, `berber_adres`, `berber_dukkan_isim`, `berber_Telefon`, `berber_mail`, `berber_hakkında`, `berber_prof_tiklanma`) VALUES
(8, 6485, '2023-06-11 13:34:00', '2023-06-12 06:45:59', '6485f7786cd0d.png', 'asdsad', 'örge', NULL, NULL, NULL, NULL, NULL, 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `blog_slug` varchar(255) DEFAULT NULL,
  `blog_file` varchar(255) DEFAULT NULL,
  `blog_must` int(11) DEFAULT NULL,
  `blog_content` text DEFAULT NULL,
  `blog_status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`id`, `created_at`, `updated_at`, `blog_title`, `blog_slug`, `blog_file`, `blog_must`, `blog_content`, `blog_status`) VALUES
(3, '2019-10-30 21:00:00', '2023-06-07 05:59:08', 'Blog Title 03', 'blog-title-03', '5dbb28737a242.png', 0, '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<p>&nbsp;</p>', '1'),
(4, '2019-10-30 21:00:00', '2019-10-31 15:31:24', 'Blog Title 04', 'blog-title-04', '5dbb287c54f6d.png', 3, '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<p>&nbsp;</p>', '1'),
(5, '2019-10-30 21:00:00', '2019-10-31 15:31:33', 'Blog Title 05', 'blog-title-05', '5dbb2885a5c29.png', 4, '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<p>&nbsp;</p>', '1'),
(10, '2019-10-30 21:00:00', '2019-10-31 15:31:42', 'Blog Title 06', 'blog-title-06', '5dbb288eb85ed.png', 5, '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<p>&nbsp;</p>', '1'),
(32, '2019-10-30 21:00:00', '2019-10-31 15:31:42', 'Blog Title 06', 'blog-title-06', '5dbb288eb85ed.png', 5, '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<p>&nbsp;</p>', '1'),
(33, '2019-10-30 21:00:00', '2019-10-31 15:31:33', 'Blog Title 05', 'blog-title-05', '5dbb2885a5c29.png', 4, '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<p>&nbsp;</p>', '1'),
(34, '2019-10-30 21:00:00', '2019-10-31 15:31:24', 'Blog Title 04', 'blog-title-04', '5dbb287c54f6d.png', 3, '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<p>&nbsp;</p>', '1'),
(35, '2019-10-30 21:00:00', '2019-10-31 15:31:15', 'Blog Title 03', 'blog-title-03', '5dbb28737a242.png', 2, '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<p>&nbsp;</p>', '1'),
(36, '2019-10-31 11:27:00', '2023-06-05 16:44:55', 'Blog Title 02', 'blog-title-02', '647e3b37806b3.png', 1, '<p>Blog Title 02</p>', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ekips`
--

CREATE TABLE `ekips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ekip_file` varchar(255) NOT NULL,
  `ekip_isim` varchar(255) NOT NULL,
  `ekip_soyisim` varchar(255) NOT NULL,
  `ekip_pozisyon` varchar(255) NOT NULL,
  `ekip_unvan` varchar(255) NOT NULL,
  `ekip_mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `ekips`
--

INSERT INTO `ekips` (`id`, `created_at`, `updated_at`, `ekip_file`, `ekip_isim`, `ekip_soyisim`, `ekip_pozisyon`, `ekip_unvan`, `ekip_mail`) VALUES
(1, NULL, '2023-06-12 04:14:12', '647c704c99c8d.png', 'Oğuzhan', 'örge', 'Takım Lideri', 'full-stack-Web-Gelişirici', 'oguzhanorge3@gmail.com'),
(2, NULL, '2023-06-12 04:15:01', '647c706b70a52.png', 'Oğuzhan', 'yüce', 'Veri-Tabanı-Uzmanı', 'Mobil-Geliştirici', 'mmm@gmail.com'),
(3, NULL, '2023-06-12 04:14:36', '647c7079e75f2.png', 'nuri', 'Ağackuyu', 'Test-Mühendisi', 'full-stack-Web-Gelişirici', 'mmm@gmail.com'),
(4, NULL, '2023-06-12 04:15:43', '647c70887c4ff.png', 'Esat', 'Dönmez', 'Yazılım-Geliştirici', 'Mobil-Geliştirici', 'mmm@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `messages_name` varchar(255) NOT NULL,
  `messages_mail` varchar(255) NOT NULL,
  `messages_tel` varchar(255) NOT NULL,
  `messages_mesaj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `created_at`, `updated_at`, `messages_name`, `messages_mail`, `messages_tel`, `messages_mesaj`) VALUES
(1, '2023-05-01 15:23:52', '2023-05-26 15:23:52', 'asdsad', 'adsasd', 'asdasd', 'asdasdasd'),
(2, '2023-05-01 15:23:52', '2023-05-26 15:23:52', 'asdsad', 'adsasd', 'asdasd', 'asdasdasd'),
(3, '2023-05-01 15:23:52', '2023-05-26 15:23:52', 'asdsad', 'adsasd', 'asdasd', 'asdasdasd'),
(4, '2023-05-01 15:23:52', '2023-05-26 15:23:52', 'asdsad', 'adsasd', 'asdasd', 'asdasdasd'),
(5, '2023-05-01 15:23:52', '2023-05-26 15:23:52', 'asdsad', 'adsasd', 'asdasd', 'asdasdasd'),
(6, '2023-05-01 15:23:52', '2023-05-26 15:23:52', 'asdsad', 'adsasd', 'asdasd', 'asdasdasd'),
(7, '2023-05-01 15:23:52', '2023-05-26 15:23:52', 'asdsad', 'adsasd', 'asdasd', 'asdasdasd'),
(8, '2023-05-01 15:23:52', '2023-05-26 15:23:52', 'asdsad', 'adsasd', 'asdasd', 'asdasdasd'),
(9, '2023-05-01 15:23:52', '2023-05-26 15:23:52', 'asdsad', 'adsasd', 'asdasd', 'asdasdasd'),
(10, '2023-05-01 15:23:52', '2023-05-26 15:23:52', 'asdsad', 'adsasd', 'asdasd', 'asdasdasd'),
(11, '2023-05-01 15:23:52', '2023-05-26 15:23:52', 'asdsad', 'adsasd', 'asdasd', 'asdasdasd'),
(12, '2023-05-01 15:23:52', '2023-05-26 15:23:52', 'asdsad', 'adsasd', 'asdasd', 'asdasdasd'),
(13, '2023-05-01 15:23:52', '2023-05-26 15:23:52', 'asdsad', 'adsasd', 'asdasd', 'asdasdasd'),
(14, '2023-05-01 15:23:52', '2023-05-26 15:23:52', 'asdsad', 'adsasd', 'asdasd', 'asdasdasd'),
(15, '2023-05-01 15:23:52', '2023-05-26 15:23:52', 'asdsad', 'adsasd', 'asdasd', 'asdasdasd'),
(16, '2023-05-01 15:23:52', '2023-05-26 15:23:52', 'asdsad', 'adsasd', 'asdasd', 'asdasdasd'),
(17, NULL, NULL, 'a', 'oguzhanorge3@gmail.com', '123', 'a');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2019_10_24_171152_create_settings_table', 2),
(5, '2019_10_28_130255_create_blogs_table', 3),
(52, '2014_10_12_000000_create_users_table', 4),
(53, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(54, '2014_10_12_100000_create_password_resets_table', 4),
(55, '2019_08_19_000000_create_failed_jobs_table', 4),
(56, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(57, '2023_05_31_153418_create_packages_table', 4),
(58, '2023_06_07_084101_create_bblog_table', 4),
(59, '2023_06_07_150054_create_berber_detay_table', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `paket_ad` varchar(255) DEFAULT NULL,
  `paket_icerik` varchar(255) DEFAULT NULL,
  `paket_ozellik` varchar(255) DEFAULT NULL,
  `paket_fiyat` varchar(255) NOT NULL,
  `paket_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `packages`
--

INSERT INTO `packages` (`id`, `created_at`, `updated_at`, `paket_ad`, `paket_icerik`, `paket_ozellik`, `paket_fiyat`, `paket_file`) VALUES
(1, NULL, '2023-06-12 04:29:41', '1 Aylık Paket', 'Populer Paket', '<ul>\r\n	<li>paket &ouml;zellik 1</li>\r\n	<li>paket &ouml;zellik 2</li>\r\n	<li>paket &ouml;zellik3</li>\r\n</ul>', '45', '6486c965e04a0.png'),
(2, NULL, '2023-06-12 05:06:57', '1 Haftalık Paket', 'Populer Paket', '<ul>\r\n	<li>Paket &ouml;zellik 4</li>\r\n	<li>Paket &ouml;zellik 5</li>\r\n	<li>Paket &ouml;zellik 6</li>\r\n</ul>', '15', '6486d221b1b0b.png'),
(3, NULL, '2023-06-12 05:08:25', '1 Yıllık Paket', 'Populer Paket', '<ul>\r\n	<li>Paket &ouml;zellik 7</li>\r\n	<li>Paket &ouml;zellik 8</li>\r\n	<li>Paket &ouml;zellik 9</li>\r\n</ul>', '250', '6486d2794179a.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_slug` varchar(255) DEFAULT NULL,
  `page_file` varchar(255) DEFAULT NULL,
  `page_must` int(11) DEFAULT NULL,
  `page_content` text DEFAULT NULL,
  `page_status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`id`, `created_at`, `updated_at`, `page_title`, `page_slug`, `page_file`, `page_must`, `page_content`, `page_status`) VALUES
(3, '2019-11-01 03:16:00', '2019-11-01 16:27:59', 'Page Title 03', 'page-title-03', '5dbc81916ccd8.png', 2, '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<p>&nbsp;</p>', '1'),
(5, '2019-11-01 03:16:00', '2019-11-01 16:27:59', 'Page Title 05', 'page-title-05', '5dbc81a21c6a7.png', 4, '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<p>&nbsp;</p>', '1'),
(10, '2019-11-01 03:16:00', '2019-11-01 16:27:59', 'Page Title 06', 'page-title-06', '5dbc81aa4e4ee.png', 5, '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<p>&nbsp;</p>', '1'),
(29, '2019-11-01 03:16:00', '2023-06-12 04:33:14', 'Page Title 02', 'page-title-02', '6486ca3a32548.png', 1, '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<p>&nbsp;</p>', '1'),
(31, '2019-11-01 03:16:00', '2019-11-01 16:27:59', 'Page Title 04', 'page-title-04', '5dbc8199bfb96.png', 3, '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<p>&nbsp;</p>', '1'),
(33, '2019-11-01 03:16:00', '2019-11-01 16:27:59', 'Page Title 06', 'page-title-06', '5dbc81aa4e4ee.png', 5, '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<p>&nbsp;</p>', '1'),
(34, '2019-11-01 03:16:00', '2023-06-12 04:32:24', 'Page Title 01', 'page-title-01', '6486ca084f034.png', 0, '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n\r\n<p>&nbsp;</p>', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `settings_description` varchar(255) NOT NULL,
  `settings_key` varchar(255) NOT NULL,
  `settings_value` text NOT NULL,
  `settings_type` varchar(255) NOT NULL,
  `settings_must` int(11) NOT NULL,
  `settings_delete` enum('0','1') NOT NULL,
  `settings_status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `created_at`, `updated_at`, `settings_description`, `settings_key`, `settings_value`, `settings_type`, `settings_must`, `settings_delete`, `settings_status`) VALUES
(1, NULL, '2023-06-11 16:08:50', 'Başlık', 'title', 'Laravel E-Berberim', 'text', 0, '0', '1'),
(2, NULL, '2023-06-11 16:09:12', 'Açıklama', 'description', 'E-berberim Randevu', 'text', 1, '0', '1'),
(3, NULL, '2019-10-28 12:46:51', 'Logo', 'logo', '5db70d6b4b1dd.jpg', 'file', 2, '0', '1'),
(4, NULL, '2019-10-28 10:52:52', 'Icon', 'icon', '5db4519c2ac6b.jpg', 'file', 3, '0', '1'),
(5, NULL, '2023-06-11 16:09:48', 'Anahtar Kelimeler', 'keywords', 'berber,randecu,E-berberim', 'text', 4, '0', '1'),
(6, NULL, '2019-10-26 08:51:40', 'Telefon Sabit', 'phone_sabit', '0850 XXX XX XX', 'text', 5, '0', '1'),
(7, NULL, '2019-10-26 08:48:28', 'Telefon GSM', 'phone_gsm', '0850 XXX XX XX', 'text', 7, '0', '1'),
(8, NULL, '2023-06-11 15:55:15', 'Mail', 'mail', 'info@gmail.com.tr', 'text', 4, '0', '1'),
(9, NULL, '2023-06-11 15:55:33', 'İlçe', 'ilce', 'Merkez', 'text', 8, '0', '1'),
(10, NULL, '2023-06-11 15:55:46', 'İl', 'il', 'Kütahya', 'textarea', 9, '0', '1'),
(11, NULL, '2023-06-11 15:56:12', 'Açık Adres', 'adres', 'Kütahya\\Merkez', 'textarea', 10, '0', '1'),
(16, NULL, '2023-06-11 15:56:34', 'Footer Bilgi', 'footer', 'E-Berberim', 'text', 10, '0', '1'),
(17, NULL, '2023-06-11 16:02:11', 'Home Title', 'home_title', 'E-Berberim Ana Sayfa', 'text', 10, '0', '1'),
(18, NULL, '2023-06-11 16:08:15', 'Home Detail', 'home_detail', '<p>Berberler, sa&ccedil; kesimi, sakal tıraşı ve genel olarak erkeklerin sa&ccedil; ve sakal bakımıyla ilgilenen profesyonellerdir. Berberlik, y&uuml;zyıllardır toplumumuzda &ouml;nemli bir meslek olarak var olmuştur.</p>\r\n\r\n<p>Berber d&uuml;kkanları, erkeklerin sa&ccedil; ve sakal bakımıyla ilgili ihtiya&ccedil;larını karşılamak i&ccedil;in tasarlanmış mekanlardır. Geleneksel berber d&uuml;kkanları, genellikle rahat bir atmosfere sahip olup, m&uuml;şterilerine kesimden &ouml;te bir deneyim sunar. Bu deneyim, sohbet etme imkanı, tıraşın keyfini &ccedil;ıkarma ve biraz da dinlenme fırsatı sunarak erkekler i&ccedil;in bir &quot;ka&ccedil;ış noktası&quot; haline gelir.</p>\r\n\r\n<p>Berberler, m&uuml;şterilerin sa&ccedil; ve sakal stilleriyle ilgili danışmanlık yaparlar ve isteklerine uygun kesim ve tıraş işlemlerini ger&ccedil;ekleştirirler. Gelişen teknolojiye paralel olarak, berberler bug&uuml;n modern ekipmanlar ve teknikler kullanarak son derece &ouml;zg&uuml;n ve dikkat &ccedil;ekici sa&ccedil; stilleri yaratma yeteneğine sahiptirler. Aynı zamanda, geleneksel tıraş becerilerini de s&uuml;rd&uuml;rerek m&uuml;şterilere p&uuml;r&uuml;zs&uuml;z ve rahat bir tıraş deneyimi sunarlar.</p>\r\n\r\n<p>Berberler, sadece sa&ccedil; ve sakal bakımıyla sınırlı kalmazlar. Bir&ccedil;ok berber d&uuml;kkanı, erkekler i&ccedil;in cilt bakımı, traş sonrası bakım ve hatta masaj gibi ek hizmetler de sunar. B&ouml;ylece, m&uuml;şteriler hem dış g&ouml;r&uuml;n&uuml;mlerini hem de kendilerini iyi hissetmelerini sağlayan bir deneyim yaşarlar.</p>\r\n\r\n<p>Berberlik, bir&ccedil;ok kişi i&ccedil;in sadece bir meslek değil, aynı zamanda bir sosyal etkileşim platformu haline gelmiştir. Berber d&uuml;kkanları, m&uuml;şterilerin bir araya geldiği ve g&uuml;ncel konuları, sporu, politikayı veya sadece g&uuml;nl&uuml;k hayatı konuştuğu yerlerdir. Bu nedenle, bir berber ziyareti sadece bakım i&ccedil;in değil, aynı zamanda toplumsal ilişkilerin gelişmesine katkıda bulunan bir deneyim olarak da g&ouml;r&uuml;l&uuml;r.</p>\r\n\r\n<p>Sonu&ccedil; olarak, berberler toplumumuzda &ouml;nemli bir rol oynarlar. Hem sa&ccedil; ve sakal bakımıyla ilgili ihtiya&ccedil;ları karşılayarak hem de m&uuml;şterilerine sıcak bir ortamda hizmet vererek erkeklerin kendilerini iyi hissetmelerine yardımcı olurlar. Berberlerin mesleklerine olan &ouml;zverisi ve becerileri, onları kıymetli ve vazge&ccedil;ilmez birer kişi haline getirir.</p>\r\n\r\n<p>&nbsp;</p>', 'ckeditor', 10, '0', '1'),
(19, NULL, '2023-06-12 06:08:38', 'Home Image', 'home_image', '6486e0960bb20.jpeg', 'file', 10, '0', '1'),
(20, NULL, '2019-11-01 16:40:09', 'Slogan', 'slogan', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.\r\n', 'textarea', 10, '0', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slider_title` varchar(255) DEFAULT NULL,
  `slider_slug` varchar(255) DEFAULT NULL,
  `slider_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `slider_file` varchar(255) DEFAULT NULL,
  `slider_must` int(11) DEFAULT NULL,
  `slider_content` text DEFAULT NULL,
  `slider_status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`id`, `created_at`, `updated_at`, `slider_title`, `slider_slug`, `slider_url`, `slider_file`, `slider_must`, `slider_content`, `slider_status`) VALUES
(37, NULL, NULL, 'Berber-Slider', 'berber-slider', NULL, '6486cb2f151a9.jpeg', NULL, '<p>Berber-Slider1</p>', '1'),
(38, NULL, NULL, 'Berber-Slider2', 'berber-slider2', NULL, '6486cb4ee9927.jpeg', NULL, '<p>Berber-Slider2</p>', '1'),
(39, NULL, NULL, 'Berber-Slider3', 'berber-slider3', NULL, '6486cb5d166db.jpeg', NULL, '<p>Berber-Slider3</p>', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_file` varchar(255) NOT NULL,
  `role` enum('admin','berber') NOT NULL DEFAULT 'admin',
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_status` enum('0','1') NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_file`, `role`, `name`, `surname`, `email`, `email_verified_at`, `password`, `user_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '648046997bb87.png', 'admin', 'oğuzhan', 'örge', 'oguzhanorge3@gmail.com', NULL, '$2y$10$df2tj1EKQQEy3HxP2inleOd8pkWlVWj1eRARRRMPf6S9t.Whae6i6', '1', NULL, NULL, '2023-06-12 05:52:26'),
(6485, '6485f7786cd0d.png', 'berber', 'Oğuzhan', 'örge', 'oguzhanorge3434@gmail.com', NULL, '$2y$10$gVVXGXoYWlNPLZ/qx//X9ubellU3YrhLGXEfwOQWMrRn4N7/8CnZK', '1', NULL, NULL, '2023-06-12 05:13:34');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `berber_blogs`
--
ALTER TABLE `berber_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `berber_detays`
--
ALTER TABLE `berber_detays`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ekips`
--
ALTER TABLE `ekips`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `berber_blogs`
--
ALTER TABLE `berber_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `berber_detays`
--
ALTER TABLE `berber_detays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Tablo için AUTO_INCREMENT değeri `ekips`
--
ALTER TABLE `ekips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Tablo için AUTO_INCREMENT değeri `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
