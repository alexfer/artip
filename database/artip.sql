-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 15, 2020 at 03:39 PM
-- Server version: 5.7.28-0ubuntu0.16.04.2
-- PHP Version: 7.3.13-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artip`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `_lft`, `_rgt`, `parent_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 24, NULL, 'Вступникам', 'vstupnikam', '2020-01-15 03:56:09', '2020-01-15 05:12:47'),
(2, 25, 36, NULL, 'Студентам', 'studentam', '2020-01-15 03:56:20', '2020-01-15 03:56:20'),
(3, 37, 40, NULL, 'Випускникам', 'vipusknikam', '2020-01-15 03:56:32', '2020-01-15 03:56:32'),
(4, 41, 44, NULL, 'Співпраця', 'spivpracya', '2020-01-15 03:56:44', '2020-01-15 03:56:44'),
(5, 45, 48, NULL, 'Про нас', 'pro-nas', '2020-01-15 03:56:52', '2020-01-15 05:06:22'),
(6, 2, 3, 1, 'Подати документи', 'podati-dokumenti', '2020-01-15 03:57:09', '2020-01-15 03:57:09'),
(7, 4, 11, 1, 'Спеціальності', 'specialnosti', '2020-01-15 03:57:26', '2020-01-15 03:57:26'),
(8, 5, 6, 7, 'Бакалавр', 'bakalavr', '2020-01-15 03:57:49', '2020-01-15 03:57:49'),
(9, 7, 8, 7, 'Магістр', 'magistr', '2020-01-15 03:58:02', '2020-01-15 03:58:02'),
(10, 9, 10, 7, 'Ліцензія та сертифікати про акредитацію', 'licenziya-ta-sertifikati-pro-akreditaciyu', '2020-01-15 04:17:33', '2020-01-15 04:17:33'),
(11, 12, 23, 1, 'Вступ 2020', 'vstup-2020', '2020-01-15 04:37:38', '2020-01-15 04:37:38'),
(12, 13, 14, 11, 'Правила прийому МОН України 2020', 'pravila-priyomu-mon-ukrajini-2020', '2020-01-15 04:38:29', '2020-01-15 04:38:29'),
(13, 15, 16, 11, 'Правила прийому до академії 2020', 'pravila-priyomu-do-akademiji-2020', '2020-01-15 04:39:17', '2020-01-15 04:39:17'),
(14, 17, 18, 11, 'Календар подій', 'kalendar-podiy', '2020-01-15 04:40:15', '2020-01-15 04:40:15'),
(15, 19, 20, 11, 'Перелік конкурсних предметів', 'perelik-konkursnih-predmetiv', '2020-01-15 04:40:59', '2020-01-15 04:40:59'),
(16, 21, 22, 11, 'Програми фахових всупних випробувань', 'programi-fahovih-vsupnih-viprobuvan', '2020-01-15 04:41:39', '2020-01-15 04:41:39'),
(20, 26, 29, 2, 'Освіта', 'osvita', '2020-01-15 07:15:20', '2020-01-15 07:15:20'),
(21, 30, 35, 2, 'Дозвілля студентів', 'dozvillya-studentiv', '2020-01-15 07:15:45', '2020-01-15 07:15:45'),
(22, 31, 32, 21, 'Дозвілля', 'dozvillya', '2020-01-15 07:16:03', '2020-01-15 07:16:03'),
(23, 33, 34, 21, 'Спорт', 'sport', '2020-01-15 07:16:14', '2020-01-15 07:16:14'),
(24, 27, 28, 20, 'Нормативно-правова база', 'normativno-pravova-baza', '2020-01-15 07:16:48', '2020-01-15 07:16:48'),
(25, 38, 39, 3, 'Випускники', 'vipuskniki', '2020-01-15 07:17:12', '2020-01-15 07:17:12'),
(26, 42, 43, 4, 'Партнери', 'partneri', '2020-01-15 07:18:45', '2020-01-15 07:18:45'),
(27, 46, 47, 5, 'Історія академії', 'istoriya-akademiji', '2020-01-15 07:19:06', '2020-01-15 07:19:06');

-- --------------------------------------------------------

--
-- Table structure for table `category_content`
--

CREATE TABLE `category_content` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_content`
--

INSERT INTO `category_content` (`id`, `category_id`, `content_id`) VALUES
(1, 1, 14),
(2, 13, 10),
(3, 5, 15),
(4, 27, 16),
(5, 26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_widget` tinyint(1) NOT NULL DEFAULT '0',
  `content_type_id` int(11) NOT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_title` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `is_published`, `is_widget`, `content_type_id`, `short_title`, `long_title`, `content`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 3, 'Партнери', 'Партнери', '<p><iframe src=\"//www.youtube.com/embed/LdIqnFze8uI\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></p>', NULL, '2019-12-26 05:59:41', '2020-01-15 09:09:34'),
(4, 0, 0, 1, 'dfsfds', 'dsfdsf', '<p>sdfsdfdsf</p>', NULL, '2019-12-26 10:00:55', '2019-12-26 10:27:59'),
(5, 0, 0, 1, 'dsfdsf', 'dsfsdf', '<p><video controls=\"controls\" width=\"300\" height=\"150\">\r\n<source src=\"https://www.facebook.com/ComedyWoman/videos/2214232128793381/\" /></video></p>', '2019-12-26 10:30:59', '2019-12-26 10:02:01', '2019-12-26 10:30:59'),
(6, 0, 0, 1, 'dsfdsfdsf', 'dsfsdfsdf', '<p>dsfdsfdsfds</p>', '2019-12-26 10:46:58', '2019-12-26 10:41:40', '2019-12-26 10:46:58'),
(7, 0, 0, 1, 'sdfsdfds', 'dsfsdfds', '<p>dsfdsfdsf</p>', NULL, '2019-12-26 10:53:45', '2019-12-26 10:53:45'),
(8, 1, 0, 2, 'Микола Обушак – лауреат Державної премії України в галузі науки і техніки', 'Доктор хімічних наук, завідувач кафедри органічної хімії Львівського національного університету імені Івана Франка, професор Микола Обушак удостоєний Державної премії України в галузі науки і техніки 2019 року.', '<p>Згідно із Указом Президента України №4/2020, Премію науковцю Університету присуджено за співавторство у колективній роботі &laquo;Високоселективні методи синтезу гетероциклічних сполук для розробки компонентів функціональних матеріалів та створення нових лікарських засобів&raquo;.</p>\r\n<p>Метою роботи є створення і розвиток сучасних високоселективних методів конструювання структурно різноманітних гетероциклічних систем &ndash; біоактивних речовин і компонентів новітніх функціональних матеріалів. Автори здійснили комплексні дослідження на ключових етапах створення як&nbsp; нових лікарських засобів так і інших функціональних матеріалів. Зокрема, науковці запропонували нові та суттєво розвинули теперішні підходи до побудови нових типів азотистих і сірковмісних п&rsquo;яти- та шестичленних гетероциклічних систем з потужним синтетичним, фармакологічним, фотоактивним, хелатуючим та агрохімічним потенціалом.</p>\r\n<p>Щиро вітаємо Миколу Обушака та весь авторський колектив із високим визнанням їхньої наукової діяльності!</p>', NULL, '2019-12-26 10:54:00', '2020-01-15 11:21:58'),
(9, 1, 0, 1, 'dsfsdfdsf', 'dsdsfsdfds', '<p>dsfdsfdsf</p>', NULL, '2019-12-26 10:54:10', '2020-01-13 08:57:33'),
(10, 0, 0, 3, 'dgfdfsgdfg', NULL, '<p>dsfdsfsd</p>', NULL, '2020-01-13 08:55:33', '2020-01-15 09:06:48'),
(14, 0, 0, 3, 'Custom Pivot Models And Incrementing IDs', NULL, '<p>The first argument passed to the <code class=\" language-php\">hasOneThrough</code> method is the name of the final model we wish to access, while the second argument is the name of the intermediate model.</p>\r\n<p>Typical Eloquent foreign key conventions will be used when performing the relationship\'s queries. If you would like to customize the keys of the relationship, you may pass them as the third and fourth arguments to the <code class=\" language-php\">hasOneThrough</code> method. The third argument is the name of the foreign key on the intermediate model. The fourth argument is the name of the foreign key on the final model. The fifth argument is the local key, while the sixth argument is the local key of the intermediate model.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">The first argument passed to the&nbsp;<code class=\" language-php\" style=\"box-sizing: border-box; font-family: SFMono-Regular, Menlo, Monaco, Consolas, \'Liberation Mono\', \'Courier New\', monospace; font-size: 14px; color: #e83e8c; word-break: break-word;\">hasOneThrough</code>&nbsp;method is the name of the final model we wish to access, while the second argument is the name of the intermediate model.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Typical Eloquent foreign key conventions will be used when performing the relationship\'s queries. If you would like to customize the keys of the relationship, you may pass them as the third and fourth arguments to the&nbsp;<code class=\" language-php\" style=\"box-sizing: border-box; font-family: SFMono-Regular, Menlo, Monaco, Consolas, \'Liberation Mono\', \'Courier New\', monospace; font-size: 14px; color: #e83e8c; word-break: break-word;\">hasOneThrough</code>&nbsp;method. The third argument is the name of the foreign key on the intermediate model. The fourth argument is the name of the foreign key on the final model. The fifth argument is the local key, while the sixth argument is the local key of the intermediate model.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">The first argument passed to the&nbsp;<code class=\" language-php\" style=\"box-sizing: border-box; font-family: SFMono-Regular, Menlo, Monaco, Consolas, \'Liberation Mono\', \'Courier New\', monospace; font-size: 14px; color: #e83e8c; word-break: break-word;\">hasOneThrough</code>&nbsp;method is the name of the final model we wish to access, while the second argument is the name of the intermediate model.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Typical Eloquent foreign key conventions will be used when performing the relationship\'s queries. If you would like to customize the keys of the relationship, you may pass them as the third and fourth arguments to the&nbsp;<code class=\" language-php\" style=\"box-sizing: border-box; font-family: SFMono-Regular, Menlo, Monaco, Consolas, \'Liberation Mono\', \'Courier New\', monospace; font-size: 14px; color: #e83e8c; word-break: break-word;\">hasOneThrough</code>&nbsp;method. The third argument is the name of the foreign key on the intermediate model. The fourth argument is the name of the foreign key on the final model. The fifth argument is the local key, while the sixth argument is the local key of the intermediate model.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">The first argument passed to the&nbsp;<code class=\" language-php\" style=\"box-sizing: border-box; font-family: SFMono-Regular, Menlo, Monaco, Consolas, \'Liberation Mono\', \'Courier New\', monospace; font-size: 14px; color: #e83e8c; word-break: break-word;\">hasOneThrough</code>&nbsp;method is the name of the final model we wish to access, while the second argument is the name of the intermediate model.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Typical Eloquent foreign key conventions will be used when performing the relationship\'s queries. If you would like to customize the keys of the relationship, you may pass them as the third and fourth arguments to the&nbsp;<code class=\" language-php\" style=\"box-sizing: border-box; font-family: SFMono-Regular, Menlo, Monaco, Consolas, \'Liberation Mono\', \'Courier New\', monospace; font-size: 14px; color: #e83e8c; word-break: break-word;\">hasOneThrough</code>&nbsp;method. The third argument is the name of the foreign key on the intermediate model. The fourth argument is the name of the foreign key on the final model. The fifth argument is the local key, while the sixth argument is the local key of the intermediate model.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">The first argument passed to the&nbsp;<code class=\" language-php\" style=\"box-sizing: border-box; font-family: SFMono-Regular, Menlo, Monaco, Consolas, \'Liberation Mono\', \'Courier New\', monospace; font-size: 14px; color: #e83e8c; word-break: break-word;\">hasOneThrough</code>&nbsp;method is the name of the final model we wish to access, while the second argument is the name of the intermediate model.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Typical Eloquent foreign key conventions will be used when performing the relationship\'s queries. If you would like to customize the keys of the relationship, you may pass them as the third and fourth arguments to the&nbsp;<code class=\" language-php\" style=\"box-sizing: border-box; font-family: SFMono-Regular, Menlo, Monaco, Consolas, \'Liberation Mono\', \'Courier New\', monospace; font-size: 14px; color: #e83e8c; word-break: break-word;\">hasOneThrough</code>&nbsp;method. The third argument is the name of the foreign key on the intermediate model. The fourth argument is the name of the foreign key on the final model. The fifth argument is the local key, while the sixth argument is the local key of the intermediate model.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">The first argument passed to the&nbsp;<code class=\" language-php\" style=\"box-sizing: border-box; font-family: SFMono-Regular, Menlo, Monaco, Consolas, \'Liberation Mono\', \'Courier New\', monospace; font-size: 14px; color: #e83e8c; word-break: break-word;\">hasOneThrough</code>&nbsp;method is the name of the final model we wish to access, while the second argument is the name of the intermediate model.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Typical Eloquent foreign key conventions will be used when performing the relationship\'s queries. If you would like to customize the keys of the relationship, you may pass them as the third and fourth arguments to the&nbsp;<code class=\" language-php\" style=\"box-sizing: border-box; font-family: SFMono-Regular, Menlo, Monaco, Consolas, \'Liberation Mono\', \'Courier New\', monospace; font-size: 14px; color: #e83e8c; word-break: break-word;\">hasOneThrough</code>&nbsp;method. The third argument is the name of the foreign key on the intermediate model. The fourth argument is the name of the foreign key on the final model. The fifth argument is the local key, while the sixth argument is the local key of the intermediate model.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">The first argument passed to the&nbsp;<code class=\" language-php\" style=\"box-sizing: border-box; font-family: SFMono-Regular, Menlo, Monaco, Consolas, \'Liberation Mono\', \'Courier New\', monospace; font-size: 14px; color: #e83e8c; word-break: break-word;\">hasOneThrough</code>&nbsp;method is the name of the final model we wish to access, while the second argument is the name of the intermediate model.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Typical Eloquent foreign key conventions will be used when performing the relationship\'s queries. If you would like to customize the keys of the relationship, you may pass them as the third and fourth arguments to the&nbsp;<code class=\" language-php\" style=\"box-sizing: border-box; font-family: SFMono-Regular, Menlo, Monaco, Consolas, \'Liberation Mono\', \'Courier New\', monospace; font-size: 14px; color: #e83e8c; word-break: break-word;\">hasOneThrough</code>&nbsp;method. The third argument is the name of the foreign key on the intermediate model. The fourth argument is the name of the foreign key on the final model. The fifth argument is the local key, while the sixth argument is the local key of the intermediate model.</p>\r\n<p><code class=\" language-php\"></code></p>', NULL, '2020-01-14 10:13:44', '2020-01-14 11:31:06'),
(15, 1, 0, 3, 'Все про нас', NULL, '<p>Наша діяльність побудована на засадах збереження української культури, розвитку національної свідомості та ідентичності.</p>\r\n<p>Університет має IV рівень акредитації Міністерства освіти і науки України. Сьогодні в Університеті ліцензовано 49 напрямів (Переліку 2006 року) та 104 спеціальності (Переліку 2010 року), у тому числі 79 спеціальностей ОКР &laquo;спеціаліст&raquo;, 92 спеціальності освітнього ступеня &laquo;магістр&raquo; та 9 спеціальностей ОКР &laquo;молодший спеціаліст&raquo;. Відповідно до Переліку галузей знань та спеціальностей 2015 року в Університеті ліцензовано 9 спеціальностей ОКР &laquo;молодший спеціаліст&raquo;, 73 спеціальності освітнього ступеня &laquo;бакалавр&raquo; для студентів Університету, одну спеціальність освітнього ступеня &laquo;бакалавр&raquo; для студентів Педагогічного коледжу, 66 спеціальностей ОКР &laquo;спеціаліст&raquo; (останній набір здійснено у 2016 році) та 72 спеціальності освітнього ступеня &laquo;магістр&raquo;.У 2016 році ліцензовано чотири спеціальності освітніх рівнів &laquo;бакалавр&raquo; та &laquo;магістр&raquo; у зв&rsquo;язку із реорганізацією Львівської державної фінансової академії шляхом приєднання до Львівського національного університету імені Івана Франка.</p>\r\n<p><span style=\"font-weight: 400;\">У 2017&ndash;2018 рр. Університет проводить набір за 9-ма спеціальностями освітньо-кваліфікаційного рівня &ldquo;молодший спеціаліст&rdquo;, 52 спеціальностями освітнього рівня &ldquo;бакалавр&rdquo; та 55 спеціальностями освітнього рівня &ldquo;магістр&rdquo;. У межах освітнього рівня &ldquo;магістр&rdquo; 55 спеціальностей відбувається провадження освітньої діяльності за 104 освітньо-професійними програмами. Крім цього, за освітнім рівнем &ldquo;магістр&rdquo; відбувається провадження освітньої діяльності за освітньо-науковими програмами п&rsquo;яти спеціальностей, а саме: &ldquo;Право&rdquo;, &ldquo;Хімія&rdquo;, &ldquo;Фізика&rdquo;, &ldquo;Прикладна математика&rdquo;, &ldquo;Фінанси, банківська справа та страхування&rdquo;.</span></p>\r\n<p><span style=\"font-weight: 400;\">Сьогодні, станом на 2018,&nbsp; в Університеті навчаються 19 614 студентів, у тому числі 728 &ndash; у коледжах. З 19 614 студентів 10 852 навчаються за рахунок державного бюджету.&nbsp;Освітній процес у Львівському національному університеті імені Івана Франка забезпечують викладачі 142-х кафедр на 19-ти факультетах та 15-ти циклових комісій у трьох коледжах. Відповідно&nbsp;&nbsp;в Університеті працює 4 849 осіб, з яких </span><span style=\"font-weight: 400;\">1 886 викладачів ( жінки &ndash; 1 145, чоловіки &ndash; 741).</span><span style=\"font-weight: 400;\">&nbsp;Кандидатів наук налічується 1 144 ,&nbsp;</span><span style=\"font-weight: 400;\">докторів наук &ndash; 229,&nbsp;</span><span style=\"font-weight: 400;\">&nbsp;доцентів &ndash; 816 та&nbsp;</span><span style=\"font-weight: 400;\">професорів &ndash; 210. У науково-дослідній частині працює 154 особи.</span></p>\r\n<p><span style=\"font-weight: 400;\">В Університеті налічується 142 кафедри, з них 99 очолюють доктори наук, 41 &ndash; кандидати наук.</span></p>\r\n<p><span style=\"font-weight: 400;\">Станом на 2018 науковці Університету опублікували 95 монографій, 21 підручник, 106 навчальних посібників, 3 785 статей, серед них у виданнях, які мають імпакт-фактор &ndash; 248, у виданнях, які включені у наукометричну базу даних Scopus &ndash; 368, в інших закордонних виданнях &ndash; 424. На найефективніші розробки у 2017 р. Університет отримав 34 патенти України, з них 3 &ndash; на винаходи. Станом на травень 2018 року отримано ще 17 патентів.</span></p>\r\n<p><span style=\"font-weight: 400;\">За період з січня 2017 р. до травня 2018 р. в Університеті організовано та проведено 96 наукових конференцій, семінарів, форумів, з них 38 &ndash; міжнародні.</span></p>\r\n<p>Станом на 2017 рік у Львівському університеті навчалося 19 770 студентів, з яких 11 775 &ndash; на бюджетній формі навчання, працює 4 475 особи, з них 2 183 &ndash; викладачі; у науково-дослідній частині працює 161 особа. Освітній процес забезпечує 200 докторів та 1114 кандидатів наук, серед них звання професора має &ndash; 194 особи, доцента &ndash; 811.</p>\r\n<p>Пріоритетним напрямом діяльності Університету є наукова робота. У 2017 році Університет вів наукові дослідження за 77 темами: 56 темами, які фінансували з державного бюджету України, з них &ndash; 24 фундаментальні теми, 12 прикладних тем, 1 науково-технічна розробка, 5 наукових розробок молодих учених, 3 теми Державного фонду фундаментальних досліджень, 2 теми за державним замовленням, 6 тем зі збереження об&rsquo;єктів, що становлять національне надбання України, 3 теми за міжнародними договорами, а також 6 госпдоговірних тем і 15 міжнародних ґрантів.</p>\r\n<p><span style=\"font-weight: 400;\">Важливою складовою системи професійної підготовки фахівців в Університеті є науководослідна робота студентів. У 2017 р. в доробку студентів &ndash; 385 наукових статей, зокрема 159 &ndash; одноосібних, та тези 841 доповіді на конференціях, з них 458 &ndash; одноосібних. У роботі наукових конференцій взяли участь понад 1 000 студентів. Станом на травень 2018 року для участі у ІІ етапі Всеукраїнської студентської олімпіади скеровано 123 студенти Університету, для участі у ІІ турі Всеукраїнського конкурсу студентських наукових робіт з галузей знань і спеціальностей &ndash; 40 студентів. </span></p>\r\n<p><span style=\"font-weight: 400;\">Науковці Університету з 1996 р. опублікували 6 203 наукових праць у виданнях, які входять до наукометричної бази даних Scopus. Лідерами є факультети природничо-математичного напряму, передусім у галузі фізики та астрономії, матеріалознавства, хімії, математики. Станом на квітень 2018 р. за індексом Гірша Львівський національний університет імені Івана Франка є третім у рейтингу закладів вищої освіти України. Показники: кількість цитувань &ndash; 32 400, Індекс Гірша &ndash; 55.</span></p>\r\n<p>У 2017 році науковці Університету опублікували 94 монографії, 21 підручник, 118 навчальних посібників, 3896 статей, серед них: у виданнях, які мають імпакт-фактор &ndash; 262; в інших виданнях, які включені у наукометричну базу Scopus &ndash; 280; в інших закордонних виданнях &ndash; 452.</p>\r\n<p>Університет є засновником і видавцем 48 періодичних наукових видань. &laquo;Вісник Львівського університету (21 Серія), 18 збірників наукових праць, 8 наукових журналів і одного науково-популярного журналу. Вісник Львівського університету, серія біологічна та Журнал обчислювальної та прикладної математики, серія обчислювальна математика (ЛНУ імені Івана Франка &ndash; співвидавець) входять до наукометричної бази Web of Sciense, &laquo;Журнал фізичних досліджень&raquo; &ndash; один із 42 журналів України, що входить до наукометричної бази даних Scopus, Вісник Львівського університету, серія юридична, журнали &laquo;Математичні студії&raquo; (ЛНУ імені Івана Франка &ndash; співвидавець), &laquo;Біологічні студії&raquo;, збірник наукових праць &laquo;Мова і суспільство&raquo; &ndash; до наукометричної бази IndexCopernicus, &laquo;Український часопис конституційного права&raquo; &ndash; до наукометричних баз Scientifi c Indexing Services та Academic Resource Index.</p>\r\n<p><span style=\"font-weight: 400;\">В Університеті, де головною поліграфічною структурою є Видавництво, протягом 2017 р.вийшло з друку 28 підручників, 116 навчальних посібників, 101 монографія та 58 випусків університетських Вісників. Від початку 2018 р. Видавництво опублікувало 81 видання, зокрема: 6 підручників, 12 навчальних посібників, 12 монографій, 41 Вісник, 1 збірник наукових праць.</span></p>\r\n<p>Ми не зупиняємось на досягнутому. В цьому контексті актуальним стає перехід від кількісних показників до якісних, відтак Університет визначає для себе <em><strong>стратегічні цілі:</strong></em></p>\r\n<p>1. Досягнення найвищих стандартів та глобалізація наукових досліджень<br />2. Забезпечення високої якості навчального процесу<br />3. Посилення ролі Університету в суспільстві:<br />&bull; формування інтелектуальної еліти;<br />&bull; розвиток культурного середовища;<br />&bull; формування та розвиток особистості, соціальних орієнтирів особи;<br />&bull; розвиток в молоді історичної свідомості та національної самоідентифікації;<br />&bull; підвищення інноваційного потенціалу, підготовка висококваліфікованих кадрів, затребуваних суспільством та державою;<br />&bull; просування бренду Університету, формування уніфікованого сприйняття університету в Україні та за її межами.<br />4. Поглиблення інтеграції Університету у світовий освітній та науковий простір;<br />5. Сучасна соціальна, інформаційно-комунікаційна та виробнича інфраструктура.</p>', NULL, '2020-01-15 08:42:36', '2020-01-15 10:00:13'),
(16, 1, 0, 3, 'Наукові об’єкти – національне надбання України', NULL, '<p style=\"text-align: justify;\">Львівський університет має наукові об&rsquo;єкти, що становлять національне надбання України. Зокрема: відділ рукописних, стародрукованих та рідкісних книг наукової бібліотеки Університету, Науково-дослідний комплекс апаратури для вивчення штучних небесних тіл ближнього космосу Астрономічної обсерваторії Університету, Гербарій, Ботанічний сад, Наукові фонди та музейна експозиція Зоологічного музею, Колекція культур мікроорганізмів-продуцентів антибіотиків.</p>\r\n<p style=\"text-align: justify;\">Львівський національний університет імені Івана Франка має&nbsp; найстаріший в Україні гербарій, заснований у 1783 році&nbsp; Б. Шiвереком. Гербарій Львівського національного університету імені Івана Франка входить до 30 найстаріших гербарних колекцій світу, внесений до світового гербарного реєстру &ldquo;Index Herbariorum&rdquo; (New York, 1990), є другим за об&rsquo;ємом і науковою цінністю в Україні. Наукові фонди налічують близько 270 тис. гербарних зразків: колекція судинних рослин &ndash; 207 тис., іменні колекції А. Ремана і Ф. Шура &ndash; 43 тис., бріологічна колекція &ndash; 20 тис., мікологічна і ліхенологічна &ndash; 3 тис. Колекція документує склад флори значної частини України, Українських Карпат та Європи і відображає зміни рослинного покриву більше, ніж за 200 років. Більше 600 зразків типового матеріалу становлять особливу цінність гербарію, оскільки вони слугують еталонами назв багатьох видів рослин світової флори і є безцінним фондом світової ботанічної науки. У 2002 році Гербарій Львівського національного університету імені Івана Франка внесений до Державного реєстру наукових об&rsquo;єктів, що становлять національне надбання України.</p>\r\n<p style=\"text-align: justify;\">У 1905 році засновано Відділ рукописних, стародрукованих та рідкісних книг ім. Ф. П. Максименка. У 90-х роках XX ст. відбулося суттєве збільшення фонду. Сьогодні фонд нараховує понад 120 тисяч одиниць зберігання. Рішенням Кабінету Міністрів України від 21 жовтня 2008 р. (№ 1345-р) Фонд рукописних, стародрукованих та рідкісних книг включено до Державного реєстру наукових об&rsquo;єктів, що становлять національне надбання.</p>\r\n<p style=\"text-align: justify;\">Зоологічний музей Львівського національного університету імені Івана Франка належить до числа найстаріших університетських музеїв Європи. Наукові колекції музею налічують понад 180 тис. експонатів, з яких близько 10&nbsp;тис. формують експозицію. Фонди музею репрезентують тваринний світ усіх континентів та всіх акваторій земної кулі. У музеї зберігаються понад 130 типових зразків тварин, які вперше були виявлені та описані для науки. Вони походять з України, Росії, Польщі, Бразилії, Індії, Мексики, Австралії, Східної та Центральної Африки, країн центральної Європи. Особливо цінні&nbsp;&ndash; колекції безхребетних тварин (не враховуючи комах), вони налічують близько 45 тисяч зразків, серед яких губки і малакологічні збори Бенедикта і Владислава Дибовських з Байкалу, Ангари, Амуру, Манчжурського моря та Каспію; корали та молюски експедиції принца Монако в Середземному, Червоному й Адріатичному морях; різноманітні голкошкірі з перших біологічних станцій у Неаполі та Трієсті. В ентомологічних колекціях музею&nbsp;&ndash; близько 110 тисяч зразків світової фауни. Цінними є екземпляри клопів і цикад німецького професора Гермара, метеликів Галичини та Європи, Японії, Далекого Сходу, Паміру, Кавказу і Австралії. Іхтіологічні фонди представляють понад 200 видів риб, серед<br />яких панцирні щуки, амія, багатопери, а також рідкісні у Європі білуга, форель струмкова та сазан.<br />У колекціях амфібій і рептилій&nbsp;&ndash; близько 300 видів. Орнітологічна колекція охоплює понад 1000 видів птахів, що становить 1/10 їх світового різноманіття. До унікальних експонатів належить колекція колібрі та нектарниць, а до раритетних колекцій ссавців&nbsp;&ndash; африканські тварини, що їх зібрав Водзіцький у 1900-1910&nbsp;рр. на території колишньої німецької Південно-Африканської колонії, колекції рогів гірських баранів та козлів з Тянь-Шаню, трофеї з Ліберії, подарунки китобійної флотилії &ldquo;Слава&rdquo;. Музейні колекції є важливими джерелами дослідження проблем змін навколишнього природного середовища, збереження і відновлення біорізноманіття як основи функціонування біосфери. Це практично єдина форма науково задокументованого речового підтвердження видової різноманітності та змін ареалів тварин, яка може бути піддана критичній ревізії згідно сучасної систематики.</p>\r\n<p style=\"text-align: justify;\">Колекція культур мікроорганізмів-продуцентів антибіотиків Львівського національного університету імені Івана Франка заснована у 1995 році на базі кафедри генетики і біотехнології з метою збереження та вивчення штамів мікроорганізмів, головно актиноміцетів &ndash; продуцентів антибіотиків та інших біологічно активних речовин. Колекція нараховує близько 700 одиниць зберігання і постійно поповнюється. До її складу входять типові штами актиноміцетів-продуцентів антибіотиків (бета-лактамни, аміноглікозиди, макроліди, тетрацикліни, антрацикліни, ангуцикліни, полієни, тіопептиди) з антибактерійними, протипухлинними, антипаразитарними та фунгіциднимим властивостями. Колекція включає штами із зміненою здатністю до синтезу антибіотиків та стійкістю до них, ауксотрофи, штами, які містять молекули ДНК з клонованими генами біосинтезу антибіотиків та антибіотикорезистентності. В Колекції зберігаються штами кишкової палички Escherichia coli, які містять векторні і рекомбінантні молекули ДНК різного походження, що використовують для конструювання продуцентів нових антибіотиків і ферментів. У Колекції підтримуються штами актиноміцетів, перспективні для розвитку біотехнології антибіотиків в Україні. Колекція також містить штами фітопатогенних грибів та бактерій, які використовуються для вивчення антагоністичних властивостей актиноміцетів. Розпорядженням Кабінету міністрів України від 19 серпня 2002 р. N 472-р. включена до Державного реєстру наукових об&rsquo;єктів, що становлять національне надбання України.</p>\r\n<p style=\"text-align: justify;\">Ботанічний сад Львівського університету заснований у 1852 році професором Г.&nbsp;Лобачевським на північно-східному схилі Калічої гори у центральній частині Львова, у 1911 році була приєднана ділянка у 16 га (сучасна вул. Черемшини, 44), де розміщений оранжерейний комплекс, колекції трав&rsquo;янистих видів природної та культурної флори, декоративних дерев та кущів. Основу колекцій ботсаду складають тропічні і субтропічні рослини, що розміщені у двох оранжерейних комплексах на території площею 2500 кв.м. До складу колекцій входять унікальні за віком і розвитком саговики, дамара могутня, теофраста імперська, крупномірні пальми, сукуленти та багато інших груп тропічних і субтропічних рослин (понад 1500 видів).</p>\r\n<p style=\"text-align: justify;\">Науково-дослідний комплекс апаратури призначений для проведення віддалемірних, фотометричних, поляриметричних та позиційних спостережень штучних супутників Землі. В Україні він єдиний може здійснювати синхронні спостереження супутників переліченими методами з високою точністю: до 100 мм похибки у відстані, до 0m.01 &ndash; у фотометричній величині, до 1&Prime; &ndash; у положенні в екваторіальній системі координат. Науково-дослідний комплекс складається з трьох апаратних блоків: для віддалемірних спостережень &ndash; станція лазерної локації супутників (ЛЛС-станція) &laquo;Львів 1831&raquo;, для фотополяриметрії, для позиційних (координатних) спостережень. На об&rsquo;єкті проводяться дослідження за міжнародними та національними програмами. Включено до Державного реєстру наукових об&rsquo;єктів, що становлять національне надбання згідно з розпорядженням Кабінету Міністрів України від 22.10.2008 № 1345-р.</p>\r\n<p style=\"text-align: justify;\">Науково-дослідний комплекс апаратури для вивчення штучних небесних тіл ближнього космосу Астрономічної обсерваторії Львівського національного університету імені Івана Франка &ndash; унікальний комплекс для спостереження штучних небесних тіл (ШНТ) та одержання інформації про відстань до ШНТ лазерно-локаційним методом, про їхню форму та стан за допомогою фотометричних спостережень, про їхні орбітальні дані за допомогою позиційних спостережень.&nbsp;У 2017 р. придбано сучасну ПЗЗ камеру Trius SX-35 з оптичним фільтром, яка буде використана для модернізації приймальної системи телескопа АЗТ-14.</p>', NULL, '2020-01-15 08:51:31', '2020-01-15 08:52:30'),
(17, 1, 0, 2, 'Спільнота Університету вшанувала пам’ять Героя Небесної Сотні Ігоря Костенка', 'Саме цього дня Ігор Костенко, який офірував життя за Свободу та Гідність кожного з нас, мав би святкувати свій День народження.', '<p>Нагадаємо, що студент географічного факультету Львівського університету Ігор Костенко загинув 20 лютого 2014 року під час протистояння в центрі Києва. Його тіло знайшли біля Жовтневого палацу на вулиці Інститутській.</p>\r\n<p>15 травня 2014 року на географічному факультеті відбулось освячення іменної аудиторії Героя Небесної Сотні. 10 серпня 2014 року засновник Вікіпедії Джиммі Вейлз оголосив Ігоря Костенка вікіпедистом року. 20 лютого 2018 року відбулося урочисте відкриття пам&rsquo;ятника Героєві України.</p>', NULL, '2020-01-15 11:27:31', '2020-01-15 11:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `content_types`
--

CREATE TABLE `content_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_types`
--

INSERT INTO `content_types` (`id`, `display_name`, `service_name`) VALUES
(1, 'Статті', 'articles'),
(2, 'Новини', 'news'),
(3, 'Сторінки', 'single-pages'),
(4, 'Оголошення', 'annonces'),
(5, 'Віджет', 'widget');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` int(11) NOT NULL DEFAULT '0',
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `size`, `path`, `name`, `extension`, `mime`, `created_at`, `updated_at`) VALUES
(1, 62773, 'media//VDT6atsaas9tjfujeZQSAoqc1nx3FITWYhtQhBN9.png', 'stripe-6.png', 'png', 'image/png', '2019-12-27 10:23:49', '2019-12-27 10:23:49'),
(2, 391175, 'media//CM1WOfRMq74sT0TPckA65D2N6W4ylh6G6ejz3Odh.jpeg', 'email-tickets.jpg', 'jpg', 'image/jpeg', '2019-12-27 10:24:15', '2019-12-27 10:24:15'),
(3, 30791, 'media//TRuJsXQd9jXt9iCdBavyACMLqzJzAyyxr9GPnzhs.png', 'settings-internet.png', 'png', 'image/png', '2019-12-27 10:25:07', '2019-12-27 10:25:07'),
(4, 12, 'media//Pu0VOgFJGkMbGuXwnAXmrLNFNk45avZaJ9QHaEnB.txt', 'ps-sn.txt', 'txt', 'text/plain', '2019-12-27 10:25:22', '2019-12-27 10:25:22'),
(5, 1007030, 'media//HVdEr90eUn4z9huYbZPn5YKn7vt7GjdMVgAzDaTd.pdf', '65pus7303-12_5888.pdf', 'pdf', 'application/pdf', '2019-12-27 10:25:42', '2019-12-27 10:25:42'),
(6, 20992, 'media//Ca4tBAEo2dxZe2N6ECKyy2Xvp1YbEWH5uL39qw2t.doc', 'Alexander_Shtikcher.doc', 'doc', 'application/msword', '2019-12-27 10:26:22', '2019-12-27 10:26:22'),
(7, 56323, 'media//gYef0iumvpAbzlZU2M4bQVtNQNf0hDWEmbSE9yZJ.png', 'Screenshot 2019-01-29 at 15.44.01.png', 'png', 'image/png', '2019-12-27 10:26:39', '2019-12-27 10:26:39'),
(8, 7678, 'media//zuccnyAUP0eWTN9HTbeFPIUVEpjgixbpgpg6z113.png', 'belgium.png', 'png', 'image/png', '2019-12-27 10:47:38', '2019-12-27 10:47:38'),
(9, 23314, 'media//beuE6SXnt2MEEIXWn5O3qo3eVZXdiGDrpJmJQrZK.png', 'oauth.png', 'png', 'image/png', '2019-12-27 10:47:51', '2019-12-27 10:47:51'),
(10, 165301, 'media//HFPTKXGrKtmujgKvnoddVzCsSdVWUPvfvYVYx6kI.jpeg', 'picture-1.jpg', 'jpg', 'image/jpeg', '2019-12-27 10:55:17', '2019-12-27 10:55:17'),
(11, 53088, 'media//HERFJk7WicR9PFdnADQOQyQZpFoisU4tjx2vnLbl.jpeg', 'picture-2.jpg', 'jpg', 'image/jpeg', '2019-12-27 10:55:17', '2019-12-27 10:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `media_content`
--

CREATE TABLE `media_content` (
  `id` int(10) UNSIGNED NOT NULL,
  `media_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_28_130641_create_failed_jobs_table', 1),
(4, '2019_12_25_135439_content', 2),
(5, '2019_12_25_150213_media', 2),
(6, '2019_12_25_150233_content_types', 2),
(7, '2019_12_27_053641_is_published_type', 3),
(8, '2019_12_27_083103_change_column', 4),
(9, '2019_12_27_121450_extra_columns_media', 5),
(10, '2020_01_13_150640_categories', 6),
(11, '2020_01_14_111008_category_content', 7),
(12, '2020_01_14_133550_media_content', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` char(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en_US',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `locale`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alexander', 'alexander.shtikcher@probegin.com', '$2y$10$00OxA.hmVrY1lpaiTginvOXw5sn9mV/Uic.3YAyHl1qJ9fMHvDysK', 'uk_UA', NULL, 'Lw2ywWiUjXYcwJlNQPT4mWEBB8RvvUwrSZI3cSixorZybmsMwId58DoGjaIY', '2019-12-23 06:31:28', '2020-01-13 08:07:50'),
(3, 'ewrewrwerew', 'alexander@probegin.com', '$2y$10$j3cKk.7hpPoYg7vG8fYcveKVPR2ofs03N9Pv4SVp5P0eHOs3eC8MW', 'en_US', NULL, NULL, '2019-12-25 05:34:43', '2019-12-25 05:34:58'),
(4, 'Alexander 2', 'fdsfdsf@dsfdsfds.com', '$2y$10$9B3zUx67QykFzJEaDWLbSO5M99K2sNkhHVyNCQJpPORNRxio/WAku', 'en_US', NULL, NULL, '2019-12-25 06:08:30', '2019-12-25 09:11:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Indexes for table `category_content`
--
ALTER TABLE `category_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_types`
--
ALTER TABLE `content_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_content`
--
ALTER TABLE `media_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `category_content`
--
ALTER TABLE `category_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `content_types`
--
ALTER TABLE `content_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `media_content`
--
ALTER TABLE `media_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
