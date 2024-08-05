-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 08 juin 2023 à 17:24
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jamayat-db`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `jamayats`
--

CREATE TABLE `jamayats` (
  `id` int(10) UNSIGNED NOT NULL,
  `tasmia` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rakm-itimad` varchar(255) NOT NULL,
  `tarikh-tassiss` date NOT NULL,
  `halat-elmilef` varchar(255) NOT NULL,
  `tarikh-tajdid1` date DEFAULT NULL,
  `tarikh-tajdid2` date DEFAULT NULL,
  `tarikh-tajdid3` date DEFAULT NULL,
  `tarikh-tajdid4` date DEFAULT NULL,
  `tarikh-tajdid5` date DEFAULT NULL,
  `tabaa` varchar(255) NOT NULL,
  `kitaa` varchar(255) NOT NULL,
  `nom-president` varchar(255) NOT NULL,
  `prenom-president` varchar(255) NOT NULL,
  `nachta` tinyint(1) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `baladia` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jamayats`
--

INSERT INTO `jamayats` (`id`, `tasmia`, `email`, `rakm-itimad`, `tarikh-tassiss`, `halat-elmilef`, `tarikh-tajdid1`, `tarikh-tajdid2`, `tarikh-tajdid3`, `tarikh-tajdid4`, `tarikh-tajdid5`, `tabaa`, `kitaa`, `nom-president`, `prenom-president`, `nachta`, `adresse`, `phone`, `baladia`, `description`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'جمعية تارقات الفلاحية', 'amel.ass@gmail.com', '01/2013', '2013-12-15', '/', '2021-09-30', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'فلاحي', 'الفلاحة', 'بركاني', 'عمر', 1, 'النوادر', '0667641807', 'شير', '', NULL, NULL, NULL),
(2, 'الجمعية الدينية لمسجد علي بن ابي طالب - بايو-  ', 'ali.ibnabitalib@gmail.com', '370', '1976-07-08', '', '2022-11-30', NULL, NULL, NULL, NULL, 'ديني', 'ديني', 'بوكحيل', 'بشير', 1, 'بايو', '0562359874', 'وادي الطاقة', '', NULL, NULL, NULL),
(3, 'جمعية الأمل', 'rtrt.jjkhjk@hjhg.com', '45445', '2022-05-11', '', NULL, NULL, NULL, NULL, NULL, 'ثقافية', 'الثقافة', 'يبيسبب', 'بيالبالا', 0, 'شير', '0525444555', 'شير', '', NULL, NULL, NULL),
(4, 'جمعية تارقات الفلاحية', 'amel.ass@gmail.comن', '01/2013', '2013-12-15', '/', '2021-09-30', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'فلاحي', 'الفلاحة', 'بركاني', 'عمر', 1, 'النوادر', '0667641807', 'شير', '', NULL, NULL, NULL),
(5, 'جمعية تارقات الفلاحية', 'amel.ass@gmail.coms', '01/2013', '2013-12-15', '/', '2021-09-30', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'فلاحي', 'الفلاحة', 'بركاني', 'عمر', 1, 'النوادر', '0667641807', 'شير', '', NULL, NULL, NULL),
(6, 'جمعية تارقات الفلاحية', 'ametl.ass@gmail.coms', '01/2013', '2013-12-15', '/', '2021-09-30', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'فلاحي', 'الفلاحة', 'بركاني', 'عمر', 1, 'النوادر', '0667641807', 'شير', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_31_132913_create-jamayats-table', 1),
(6, '2023_05_31_142624_create-jamayats-table', 2),
(7, '2023_05_31_142912_create-jamayats-table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
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
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `jamayats`
--
ALTER TABLE `jamayats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jamayats_email_unique` (`email`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jamayats`
--
ALTER TABLE `jamayats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
