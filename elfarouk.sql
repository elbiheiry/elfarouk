-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 12:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elfarouk`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `image`, `video`, `created_at`, `updated_at`) VALUES
(1, 'شركة الفاروق للصناعات الغذائية شركة مصرية بجودة عالمية بمنتجاتها المختلفة من خلال الوكلاء فى جميع محافظات الجمهورية', 'عند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.', 'ymEp9JBFZAfPD6nz1wn9QjyamGqG03Z4o5EM9pWS.png', '4hqDQRc8N04', '2020-12-15 13:47:44', '2020-12-16 17:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `address`, `phone`, `image`, `map`, `created_at`, `updated_at`) VALUES
(1, 'فرع المنوفية', 'زنارة - بابل - طريق شبين طنطا - المنوفية', '01006607477', 'U0Ys4duhs8ks6JTix9yL6kjQG6M2IDixjbYdVOK0.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15406.678959495246!2d30.99526735930017!3d30.677680485699238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7ce031deb5c99%3A0xe89250df5ecd9efd!2z2KPYsdi2INin2YTZhdi12YbYudiMIFplbmFyYWgsIFRhbGEsIE1lbm9maWEgR292ZXJub3JhdGU!5e0!3m2!1sen!2seg!4v1606640318659!5m2!1sen!2seg', '2020-12-16 17:24:08', '2020-12-16 17:24:08'),
(2, 'فرع الغربية', 'زنارة - بابل - طريق شبين طنطا - المنوفية', '01006607477', 'TaJv6PhVEt8gGAdLnpTXNbOvg2VZOogZ9RP1d9rK.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15406.678959495246!2d30.99526735930017!3d30.677680485699238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7ce031deb5c99%3A0xe89250df5ecd9efd!2z2KPYsdi2INin2YTZhdi12YbYudiMIFplbmFyYWgsIFRhbGEsIE1lbm9maWEgR292ZXJub3JhdGU!5e0!3m2!1sen!2seg!4v1606640318659!5m2!1sen!2seg', '2020-12-16 17:24:43', '2020-12-16 17:24:43'),
(3, 'فرع دمياط', 'زنارة - بابل - طريق شبين طنطا - المنوفية', '01006607477', '0lEym3S12TQhzEjIkjoJTQlvjKQYe8AIDPvGoN7t.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15406.678959495246!2d30.99526735930017!3d30.677680485699238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7ce031deb5c99%3A0xe89250df5ecd9efd!2z2KPYsdi2INin2YTZhdi12YbYudiMIFplbmFyYWgsIFRhbGEsIE1lbm9maWEgR292ZXJub3JhdGU!5e0!3m2!1sen!2seg!4v1606640318659!5m2!1sen!2seg', '2020-12-16 17:25:20', '2020-12-16 17:25:20'),
(5, 'فرع الشرقية', 'زنارة - بابل - طريق شبين طنطا - المنوفية', '01006607477', '1AFpyTdHOXCDBEHLx3gW1IgOwJpLSgE67cJIFxt9.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15406.678959495246!2d30.99526735930017!3d30.677680485699238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7ce031deb5c99%3A0xe89250df5ecd9efd!2z2KPYsdi2INin2YTZhdi12YbYudiMIFplbmFyYWgsIFRhbGEsIE1lbm9maWEgR292ZXJub3JhdGU!5e0!3m2!1sen!2seg!4v1606640318659!5m2!1sen!2seg', '2020-12-16 17:29:04', '2020-12-16 17:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `title1`, `description1`, `image1`, `image2`, `title2`, `description2`, `title3`, `description3`, `title4`, `description4`, `created_at`, `updated_at`) VALUES
(1, 'الفاروق للصناعات الغذائية', 'هي إحدى شركات تصنيع الوجبات الخفيفة. جودة عالمية على ارض مصرية', 'UC6QzaHjyf6WB3MmmsmY8wQNR7pBso3igukCckNp.png', 'GeNSYR2hwbpAK2x9TKVMQ5uhQjXqYZ3gYw7p65ei.png', 'الوكلاء والموزعين', 'شركة الفاروق للصناعات الغذائية شركة مصرية بجودة عالمية بمنتجاتها المختلفة من خلال الوكلاء فى جميع محافظات الجمهورية', 'الهيكل الإدارى', 'شركة الفاروق للصناعات الغذائية شركة مصرية بجودة عالمية بمنتجاتها المختلفة من خلال الوكلاء فى جميع محافظات الجمهورية', 'الميديا', 'شركة الفاروق للصناعات الغذائية شركة مصرية بجودة عالمية بمنتجاتها المختلفة من خلال الوكلاء فى جميع محافظات الجمهورية', '2020-12-15 13:47:44', '2020-12-16 17:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `image`, `video`, `created_at`, `updated_at`) VALUES
(1, 'lj1wrYpokRNZMUlQXQXcEPHgSHOSERwzx9rJvrfT.jpg', NULL, '2020-12-16 18:02:59', '2020-12-16 18:02:59'),
(2, 'xtbRGr30eVxhPnNV62uM345hqAkhcBZ3UJrpUIPM.jpg', '4hqDQRc8N04', '2020-12-16 18:07:53', '2020-12-16 18:07:53'),
(3, 'EJog9mhm6yEr6RN7vdamXqX40DTdmS0naQa2K9sV.jpg', NULL, '2020-12-16 18:08:11', '2020-12-16 18:08:25'),
(4, 'RhoCsWRM7zqFg6qWqSU1S4DnDZOiDklv8W7RDUOY.jpg', '4hqDQRc8N04', '2020-12-16 18:08:50', '2020-12-16 18:08:50'),
(5, '0yHf0MeW6mOUWCigJu30dQzmH52kwIySmhyGMJUD.jpg', NULL, '2020-12-16 18:09:01', '2020-12-16 18:09:01'),
(6, 'VQNn000s71IdBJRAwqKSAWW9yEunakSIyfQI0haj.jpg', NULL, '2020-12-16 18:09:12', '2020-12-16 18:09:12'),
(7, 'G8LtO3DmBiz0LGaM47ZhNQzUKFe8G2Y5ExCZGaLq.jpg', '4hqDQRc8N04', '2020-12-16 18:09:25', '2020-12-16 18:09:25'),
(8, 'xv1nKYlCiXJY1pdHpuaQ57sPRhxyI6sRgPhg3jdi.jpg', '4hqDQRc8N04', '2020-12-16 18:09:42', '2020-12-16 18:09:42'),
(9, 'oMn5aXn2x1pliuJwV6veCk0jQVw4Q70QgOu79QIL.jpg', NULL, '2020-12-16 18:09:48', '2020-12-16 18:09:48'),
(10, 'e9JW6j6hD7TZu4VePh7zzcNg60b19dRLwqeNWP0m.jpg', NULL, '2020-12-16 18:09:55', '2020-12-16 18:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `position`, `image`, `created_at`, `updated_at`) VALUES
(1, 'محمد فاروق', 'رئيس مجلس الإدارة', 'sUrJMx3P7nMDR1oeBgPmiXkTuSuYrEaDvLpPsRB9.jpg', '2020-12-16 18:19:15', '2020-12-16 18:19:15'),
(2, 'عبد العزيز جمال', 'مدير العلاقات العامة', 'aall7DH2XBDnV9GP7GG2I1vXTwpcLZpv7dpTRkLx.jpg', '2020-12-16 18:19:35', '2020-12-16 18:19:35'),
(3, 'هشام جمال', 'مدير التسويق', '8rIJEaaRGjJbErSiRP8KJtns9l8xx7qSvGem7WQf.jpg', '2020-12-16 18:19:52', '2020-12-16 18:19:52'),
(4, 'محمد البحيرى', 'مدير الحسابات', '2HdBmAobhELTF2elS43PWAeVRuaSSEilPlL9UZ6Q.jpg', '2020-12-16 18:20:13', '2020-12-16 18:20:29');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'محمد مصطفي سامي', '01011093385', 'هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه هذه رساله تجريبيه', '2020-12-16 21:00:58', '2020-12-16 21:00:58');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_15_134906_create_abouts_table', 1),
(5, '2020_12_15_135557_create_members_table', 1),
(6, '2020_12_15_135725_create_branches_table', 1),
(7, '2020_12_15_135937_create_media_table', 1),
(8, '2020_12_15_140842_create_products_table', 1),
(9, '2020_12_15_141602_create_product_flavours_table', 1),
(10, '2020_12_15_142633_create_product_ingredients_table', 1),
(11, '2020_12_15_142706_create_messages_table', 1),
(12, '2020_12_15_142738_create_settings_table', 1),
(13, '2020_12_15_143211_create_homes_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `color`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, '09i8TYNrGyLY3FJsoOerb22T6iUFxKByIkhhU6j7.png', '#92278f', 'برونتو', 'bronto', 'إحدى منتجات شركة الفاروق عبارة عن حلقات من الذرة المقرمشة ويتكون من 11 طعم مختلف\r\nإحدى منتجات شركة الفاروق عبارة عن حلقات من الذرة المقرمشة ويتكون من 11 طعم مختلف\r\nإحدى منتجات شركة الفاروق عبارة عن حلقات من الذرة المقرمشة ويتكون من 11 طعم مختلف', '2020-12-16 18:26:01', '2020-12-16 18:26:01'),
(2, 'XkSsjJdUWwjADcopLu7malc7JVER0ZHtK1Y8kh2S.png', '#ad8930', 'برونتو', 'bronto-1', 'إحدى منتجات شركة الفاروق عبارة عن حلقات من الذرة المقرمشة ويتكون من 11 طعم مختلف\r\nإحدى منتجات شركة الفاروق عبارة عن حلقات من الذرة المقرمشة ويتكون من 11 طعم مختلف\r\nإحدى منتجات شركة الفاروق عبارة عن حلقات من الذرة المقرمشة ويتكون من 11 طعم مختلف', '2020-12-16 18:27:20', '2020-12-16 18:27:20'),
(3, 'nuvz4TVsqRqp2jRruSDCz1GFalR01KMmlI5TJhfs.png', '#a8aaad', 'برونتو', 'bronto-2', 'إحدى منتجات شركة الفاروق عبارة عن حلقات من الذرة المقرمشة ويتكون من 11 طعم مختلف\r\nإحدى منتجات شركة الفاروق عبارة عن حلقات من الذرة المقرمشة ويتكون من 11 طعم مختلف\r\nإحدى منتجات شركة الفاروق عبارة عن حلقات من الذرة المقرمشة ويتكون من 11 طعم مختلف', '2020-12-16 18:29:33', '2020-12-16 18:29:33'),
(4, 'NvIyDKWLcTNlSYBzAVCEMw85bnf3j6CThxkhoHjb.png', '#03897f', 'برونتو', 'bronto-3', 'إحدى منتجات شركة الفاروق عبارة عن حلقات من الذرة المقرمشة ويتكون من 11 طعم مختلف\r\nإحدى منتجات شركة الفاروق عبارة عن حلقات من الذرة المقرمشة ويتكون من 11 طعم مختلف\r\nإحدى منتجات شركة الفاروق عبارة عن حلقات من الذرة المقرمشة ويتكون من 11 طعم مختلف', '2020-12-16 18:30:20', '2020-12-16 18:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `product_flavours`
--

CREATE TABLE `product_flavours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_flavours`
--

INSERT INTO `product_flavours` (`id`, `product_id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 4, 'طعم البيتزا الإيطالى', 'htOrz4zGe7Uqo5J2LK5M1tuRSM16p75RtRKi3Cal.png', '2020-12-16 18:49:01', '2020-12-16 18:50:11'),
(2, 4, 'طعم الكبدة الأسكندرانى', 'plrx2YMuTiBU65bsq1Plk6GxIrWOP2UP2higbi6s.png', '2020-12-16 18:50:28', '2020-12-16 18:50:28'),
(3, 4, 'طعم الحواوشى التركى', 'kQhzUBT4ktexsTVFvf3K4dniIbpXeuVLRDDjB0uu.png', '2020-12-16 18:50:45', '2020-12-16 18:50:45'),
(4, 4, 'طعم الطماطم', 'oTvnvT5UI7jw9LZ6F8rtsgesA9iLHYP6x60YHqhn.png', '2020-12-16 18:51:02', '2020-12-16 18:51:02'),
(5, 2, 'طعم الطماطم', 'c7lkXgWyVAgKHZtnLcmzwsu3pCXWctlH0oYRroou.png', '2020-12-16 18:51:26', '2020-12-16 18:51:26'),
(6, 2, 'طعم البيتزا الإيطالى', 'KBy5V80oCSB0sc0L2CS5v5xCssz6Qavn2EtOcdUh.png', '2020-12-16 18:51:36', '2020-12-16 18:51:36'),
(7, 2, 'طعم الكبدة الأسكندرانى', 'f0sMvs3nGHTvhp2mRnAPeRVIYDE7fxX9MlNC3DkM.png', '2020-12-16 18:51:43', '2020-12-16 18:51:43'),
(8, 3, 'طعم الكبدة الأسكندرانى', 'DuN62N3bD81JcdpU1iaG4iConsElwr5BbjPosPRG.png', '2020-12-16 18:51:57', '2020-12-16 18:51:57'),
(9, 3, 'طعم الحواوشى التركى', 'vGMu9Zlpnkrvl6YDXToOCW4jg9Tf7I5XsNKOFN2W.png', '2020-12-16 18:52:12', '2020-12-16 18:52:12'),
(10, 1, 'طعم البيتزا الإيطالى', 'WEUuzGDCCrHrhJ16wcjiCZTBDnZzJtKcCSRbtXNL.png', '2020-12-16 18:52:34', '2020-12-16 18:52:34'),
(11, 1, 'طعم الحواوشى التركى', 'BlImPZS4kOigA9mCV8DT0tSrGGRGwlBx7iDmPLPE.png', '2020-12-16 18:52:55', '2020-12-16 18:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `product_ingredients`
--

CREATE TABLE `product_ingredients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_ingredients`
--

INSERT INTO `product_ingredients` (`id`, `product_id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 4, 'استكوزا', 'NgWkwoQchOIMHLT7Gbk5iNafvvamC0fYGooBHm38.png', '2020-12-16 18:55:49', '2020-12-16 18:55:49'),
(2, 4, 'جمبري', 'geYmyH6ooRGv1I6l92LrDTfu3CQ3n4WRfQZGKFds.png', '2020-12-16 18:56:00', '2020-12-16 18:56:00'),
(3, 3, 'سجق', 'rho24fCEEpaQSgGB58GikDnRUMyj2mIFQHBrsBrN.png', '2020-12-16 18:56:21', '2020-12-16 18:56:21'),
(4, 3, 'طماطم', 'FWMSwaBrmWgmNG1r8PSAvUKRqGpq5v4N61rbOPpi.png', '2020-12-16 18:56:29', '2020-12-16 18:56:29'),
(5, 3, 'فراخ', 'IAQHMeoi0Y0XVmHZMuLst3oE0EOKgaC8rneirmin.png', '2020-12-16 18:56:56', '2020-12-16 18:56:56'),
(6, 3, 'خلطه مكسيكي', 'Dbk270D03uesVMMEMg0MFwwDxEp8DcMeuyFEthv2.png', '2020-12-16 18:57:08', '2020-12-16 18:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complaints` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `address`, `sales`, `complaints`, `email`, `phone`, `map`, `facebook`, `youtube`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'زنارة - بابل - طريق شبين طنطا - المنوفية', '01006607477', '01211423111', 'info@alfaroukfoods.com', '01006607477', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15406.678959495246!2d30.99526735930017!3d30.677680485699238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7ce031deb5c99%3A0xe89250df5ecd9efd!2z2KPYsdi2INin2YTZhdi12YbYudiMIFplbmFyYWgsIFRhbGEsIE1lbm9maWEgR292ZXJub3JhdGU!5e0!3m2!1sen!2seg!4v1606640318659!5m2!1sen!2seg', 'https://www.facebook.com/alfaroukfoods', 'https://www.youtube.com/channel/UCXn4azaEARC3qDaGGsojMOQ', 'https://www.instagram.com/alfaroukfoods/', '2020-12-15 13:47:44', '2020-12-15 13:47:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@alfaroukfoods.com', NULL, '$2y$10$RU.DtzYSDUCbU6k5J/2ugO1/lXtDdiOmJBnkFSZy/D2EY./Qk1sQ6', 'WrZXqtRJip8StTLgTP2YKr0ziwr2tXjE6PzQaSx9PCv5RaDAEt0bN3zUh0JK', '2020-12-15 13:47:44', '2020-12-16 18:56:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_flavours`
--
ALTER TABLE `product_flavours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_flavours_product_id_index` (`product_id`);

--
-- Indexes for table `product_ingredients`
--
ALTER TABLE `product_ingredients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_ingredients_product_id_index` (`product_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_flavours`
--
ALTER TABLE `product_flavours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_ingredients`
--
ALTER TABLE `product_ingredients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_flavours`
--
ALTER TABLE `product_flavours`
  ADD CONSTRAINT `product_flavours_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_ingredients`
--
ALTER TABLE `product_ingredients`
  ADD CONSTRAINT `product_ingredients_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
