-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 03 jun 2020 om 21:53
-- Serverversie: 10.4.10-MariaDB
-- PHP-versie: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atrp`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `real_estates`
--

CREATE TABLE `real_estates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_sold` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `real_estates`
--

INSERT INTO `real_estates` (`id`, `slug`, `title`, `location`, `body`, `image`, `owner`, `price`, `type`, `is_sold`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'brandywine-cabin', 'Brandywine cabin', 'Annesburg', NULL, '/images/properties/1591210577_Brandywine cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 16:56:17', '2020-06-03 16:56:17', NULL),
(2, 'brandywine-cabin-roanoke', 'Brandywine cabin Roanoke', 'Annesburg', NULL, '/images/properties/1591210622_Brandywine cabin Roanoke.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 16:57:02', '2020-06-03 16:57:02', NULL),
(3, 'brandywine-cabin-w-roanoke', 'Brandywine cabin W. Roanoke', 'Annesburg', NULL, '/images/properties/1591210660_Brandywine cabin W. Roanoke.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 16:57:40', '2020-06-03 16:57:40', NULL),
(4, 'brandywine-farm', 'Brandywine farm', 'Annesburg', NULL, '/images/properties/1591210686_Brandywine farm.png', 'State-owned', '5000.00', 'farm', 0, '2020-06-03 16:58:06', '2020-06-03 16:58:06', NULL),
(5, 'marshal-outpost', 'Marshal outpost', 'Annesburg', NULL, '/images/properties/1591210714_Marshal outpost.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 16:58:34', '2020-06-03 16:58:34', NULL),
(6, 'o-creags-run-cabin', 'o\' Creag\'s Run cabin', 'Annesburg', NULL, '/images/properties/1591210785_o\' Creag\'s Run cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 16:59:46', '2020-06-03 16:59:46', NULL),
(7, 'three-sisters-cabin', 'Three sisters cabin', 'Annesburg', NULL, '/images/properties/1591210830_Three sisters cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:00:30', '2020-06-03 17:00:30', NULL),
(8, 'nw-van-horn-farm', 'NW. Van Horn farm', 'Van Horn', NULL, '/images/properties/1591210986_NW. Van Horn cabin.png', 'State-owned', '5000.00', 'farm', 0, '2020-06-03 17:03:07', '2020-06-03 17:26:38', NULL),
(9, 'van-horn-cabin', 'Van Horn cabin', 'Van Horn', NULL, '/images/properties/1591211025_Van Horn cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:03:45', '2020-06-03 17:03:45', NULL),
(10, 'van-horn-house', 'Van Horn house', 'Van Horn', NULL, '/images/properties/1591211142_Van Horn house.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:05:42', '2020-06-03 17:05:42', NULL),
(11, 'emerald-ranch-cabin', 'Emerald Ranch cabin', 'Valentine', NULL, '/images/properties/1591211299_Emerald Ranch cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:08:19', '2020-06-03 17:08:19', NULL),
(12, 'se-emerald-station-cabin', 'SE. Emerald station cabin', 'Valentine', NULL, '/images/properties/1591211356_SE. Emerald station cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:09:16', '2020-06-03 17:09:16', NULL),
(13, 'bluewater-marsh-cabin', 'Bluewater marsh cabin', 'Saint Denis', NULL, '/images/properties/1591211440_Bluewater marsh cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:10:41', '2020-06-03 17:10:41', NULL),
(14, 'bluewater-marsh-cabin-1', 'Bluewater marsh cabin', 'Saint Denis', NULL, '/images/properties/1591211480_Bluewater marsh cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:11:20', '2020-06-03 17:11:20', NULL),
(15, 'lemoyne-cabin', 'Lemoyne cabin', 'Rhodes', NULL, '/images/properties/1591211583_Lemoyne cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:13:04', '2020-06-03 17:13:04', NULL),
(16, 'flatneck-dockhouse', 'Flatneck dockhouse', 'Valentine', NULL, '/images/properties/1591211702_Flatneck dockhouse.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:15:02', '2020-06-03 17:15:02', NULL),
(17, 'w-emerald-ranch-farm', 'W. Emerald Ranch farm', 'Valentine', NULL, '/images/properties/1591211767_W. Emerald Ranch hobbit house.png', 'State-owned', '5000.00', 'farm', 0, '2020-06-03 17:16:08', '2020-06-03 17:27:12', NULL),
(18, 'stillwater-creek-cabin', 'Stillwater creek cabin', 'Blackwater', NULL, '/images/properties/1591211880_Stillwater creek cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:18:00', '2020-06-03 17:18:00', NULL),
(19, 'rhodes-house', 'Rhodes house', 'Rhodes', NULL, '/images/properties/1591211907_Rhodes house.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:18:27', '2020-06-03 17:18:27', NULL),
(20, 'braithewaite-manor-cabin', 'Braithewaite manor cabin', 'Rhodes', NULL, '/images/properties/1591211969_Braithewaite manor cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:19:29', '2020-06-03 17:19:29', NULL),
(21, 'manzanita-post-cabin', 'Manzanita post cabin', 'Blackwater', NULL, '/images/properties/1591212070_Manzanita post cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:21:11', '2020-06-03 17:21:11', NULL),
(22, 's-braithewaite-manor-house', 'S. Braithewaite manor house', 'Rhodes', NULL, '/images/properties/1591212125_S. Braithewaite manor house.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:22:05', '2020-06-03 17:22:05', NULL),
(23, 'aurora-basin-cabin', 'Aurora basin cabin', 'Blackwater', NULL, '/images/properties/1591212221_Aurora basin cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:23:41', '2020-06-03 17:23:41', NULL),
(24, 'cumberland-forest-farm', 'Cumberland forest farm', 'Valentine', NULL, '/images/properties/1591212490_Cumberland forest farm.png', 'State-owned', '5000.00', 'farm', 0, '2020-06-03 17:28:10', '2020-06-03 17:28:10', NULL),
(25, 'se-aurora-basin-cabin', 'SE. Aurora Basin cabin', 'Blackwater', NULL, '/images/properties/1591212581_SE. Aurora Basin cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:29:41', '2020-06-03 17:29:41', NULL),
(26, 'window-rock-farm', 'Window rock farm', 'Valentine', NULL, '/images/properties/1591212722_Window rock farm.png', 'State-owned', '5000.00', 'farm', 0, '2020-06-03 17:32:02', '2020-06-03 17:32:02', NULL),
(27, 'window-rock-cabin', 'Window rock cabin', 'Valentine', NULL, '/images/properties/1591212742_Window rock cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:32:22', '2020-06-03 17:32:22', NULL),
(28, 'nw-valentine-cabin', 'NW. Valentine cabin', 'Valentine', NULL, NULL, 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:32:59', '2020-06-03 17:32:59', NULL),
(29, 'barrow-lagoon-cabin', 'Barrow lagoon cabin', 'Valentine', NULL, '/images/properties/1591212860_Barrow lagoon cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:34:21', '2020-06-03 17:34:21', NULL),
(30, 'w-wallace-station-farm', 'W. Wallace station farm', 'Strawberry', NULL, '/images/properties/1591212921_W. Wallace station farm.png', 'State-owned', '5000.00', 'farm', 0, '2020-06-03 17:35:22', '2020-06-03 17:35:22', NULL),
(31, 'n-strawberry-cabin', 'N. Strawberry cabin', 'Strawberry', NULL, '/images/properties/1591212973_N. Strawberry cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:36:13', '2020-06-03 17:36:13', NULL),
(32, 'strawberry-house', 'Strawberry house', 'Strawberry', NULL, '/images/properties/1591213002_Strawberry house.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:36:42', '2020-06-03 17:36:42', NULL),
(33, 's-thieves-landing-cabin', 'S. Thieves landing cabin', 'Blackwater', NULL, '/images/properties/1591213040_S. Thieves landing cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:37:20', '2020-06-03 17:37:20', NULL),
(34, 'e-san-luis-river-cabin', 'E. San Luis river cabin', 'Blackwater', NULL, '/images/properties/1591213113_E. San Luis river cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:38:33', '2020-06-03 17:38:33', NULL),
(35, 'rio-del-lobo-cabin', 'Rio Del Lobo cabin', 'Armadillo', NULL, '/images/properties/1591213185_Rio Del Lobo cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:39:45', '2020-06-03 17:39:45', NULL),
(36, 'lake-don-julio-house', 'Lake Don Julio house', 'Armadillo', NULL, '/images/properties/1591213221_Don Julio house.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:40:21', '2020-06-03 17:41:06', NULL),
(37, 'nw-lake-don-julio-ranch', 'NW. Lake Don Julio ranch', 'Armadillo', NULL, '/images/properties/1591213260_NW. Lake Don Julio ranch.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:41:00', '2020-06-03 17:41:00', NULL),
(38, 'cholla-springs-cabin', 'Cholla Springs cabin', 'Armadillo', NULL, '/images/properties/1591213339_Cholla Springs cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:42:19', '2020-06-03 17:42:19', NULL),
(39, 'n-tumbleweed-cabin', 'N. Tumbleweed cabin', 'Tumbleweed', NULL, '/images/properties/1591213393_N. Tumbleweed cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:43:13', '2020-06-03 17:43:13', NULL),
(40, 'twin-rocks-house', 'Twin Rocks house', 'Armadillo', NULL, NULL, 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:43:52', '2020-06-03 17:43:52', NULL),
(41, 'far-w-san-luis-river-cabin', 'Far W. San Luis River cabin', 'Tumbleweed', NULL, '/images/properties/1591213475_Far W. San Luis River cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:44:35', '2020-06-03 17:44:35', NULL),
(42, 'benedict-point-cabin', 'Benedict Point cabin', 'Tumbleweed', NULL, '/images/properties/1591213546_Benedict Point cabin.png', 'State-owned', '5000.00', 'house', 0, '2020-06-03 17:45:46', '2020-06-03 17:45:46', NULL),
(43, 'whispering-pines-farm', 'Whispering Pines farm', 'Valentine', NULL, '/images/properties/1591213596_Whispering Pines farm.png', 'State-owned', '5000.00', 'farm', 0, '2020-06-03 17:46:36', '2020-06-03 17:46:36', NULL),
(44, 'mattock-farm', 'Mattock farm', 'Rhodes', NULL, '/images/properties/1591213682_Mattock farm.png', 'State-owned', '5000.00', 'farm', 0, '2020-06-03 17:48:02', '2020-06-03 17:48:02', NULL),
(45, 'heartland-overflow-farm', 'Heartland Overflow farm', 'Valentine', NULL, '/images/properties/1591213716_Heartland Overflow farm.png', 'State-owned', '5000.00', 'farm', 0, '2020-06-03 17:48:36', '2020-06-03 17:48:36', NULL),
(46, 'calibans-farm', 'Calibans farm', 'Valentine', NULL, '/images/properties/1591213769_Calibans farm.png', 'State-owned', '5000.00', 'farm', 0, '2020-06-03 17:49:30', '2020-06-03 17:49:30', NULL),
(47, 'flatneck-farm', 'Flatneck farm', 'Valentine', NULL, '/images/properties/1591213815_Flatneck farm.png', 'State-owned', '5000.00', 'farm', 0, '2020-06-03 17:50:15', '2020-06-03 17:50:15', NULL),
(48, 'southfield-flats-farm', 'Southfield Flats farm', 'Rhodes', NULL, '/images/properties/1591213845_Southfield Flats farm.png', 'State-owned', '5000.00', 'farm', 0, '2020-06-03 17:50:45', '2020-06-03 17:50:45', NULL),
(49, 'emerald-ranch-farm', 'Emerald Ranch farm', 'Valentine', NULL, '/images/properties/1591213882_Emerald Ranch farm.png', 'State-owned', '5000.00', 'farm', 0, '2020-06-03 17:51:22', '2020-06-03 17:51:22', NULL),
(50, 'n-bluewater-farm', 'N. Bluewater farm', 'Saint Denis', NULL, '/images/properties/1591213909_N. Bluewater farm.png', 'State-owned', '5000.00', 'farm', 0, '2020-06-03 17:51:49', '2020-06-03 17:51:49', NULL),
(51, 'heartland-farm', 'Heartland farm', 'Valentine', NULL, '/images/properties/1591213948_Heartland farm.png', 'State-owned', '5000.00', 'farm', 0, '2020-06-03 17:52:29', '2020-06-03 17:52:29', NULL),
(52, 'nw-bluewater-marsh-farm', 'NW. Bluewater Marsh farm', 'Saint Denis', NULL, '/images/properties/1591213994_NW. Bluewater Marsh farm.png', 'State-owned', '5000.00', 'farm', 0, '2020-06-03 17:53:14', '2020-06-03 17:53:14', NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `real_estates`
--
ALTER TABLE `real_estates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `real_estates`
--
ALTER TABLE `real_estates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
