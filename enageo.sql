-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 05 sep. 2021 à 14:47
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `enageo`
--

-- --------------------------------------------------------

--
-- Structure de la table `attachement_finals`
--

CREATE TABLE `attachement_finals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_att` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiche_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `date_att` date NOT NULL,
  `att_signe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant_global` double(8,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `attachement_finals`
--

INSERT INTO `attachement_finals` (`id`, `ref_att`, `fiche_id`, `project_id`, `date_att`, `att_signe`, `description`, `montant_global`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'attref1', 5, 7, '2021-08-19', 'signe1', NULL, 1000.00, NULL, '2021-08-19 11:18:56', '2021-08-19 13:30:08'),
(3, 'ref4', 3, 5, '2021-08-19', 'signe4', NULL, 15000.00, NULL, '2021-08-19 13:18:29', '2021-08-19 13:18:29');

-- --------------------------------------------------------

--
-- Structure de la table `bassins`
--

CREATE TABLE `bassins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bassins`
--

INSERT INTO `bassins` (`id`, `name`, `code`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'bassin1', 'code2', NULL, '2021-08-11 20:38:18', '2021-08-11 20:56:25'),
(3, 'bassin2', 'code12', NULL, '2021-08-18 08:32:01', '2021-08-18 08:32:01');

-- --------------------------------------------------------

--
-- Structure de la table `blocs`
--

CREATE TABLE `blocs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bassin_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `blocs`
--

INSERT INTO `blocs` (`id`, `bassin_id`, `name`, `code`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 2, 'bloc1', 'code1', NULL, '2021-08-12 19:18:31', '2021-08-18 11:22:51'),
(3, 2, 'bloc2', 'code2', NULL, '2021-08-18 07:13:28', '2021-08-18 11:23:00'),
(4, 3, 'bloc3', 'code3', NULL, '2021-08-18 07:15:09', '2021-08-18 11:22:42');

-- --------------------------------------------------------

--
-- Structure de la table `brigade_topographes`
--

CREATE TABLE `brigade_topographes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_brigade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `site_hebergement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_sorti` date NOT NULL,
  `date_retour` date NOT NULL,
  `date_inspection` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `brigade_topographes`
--

INSERT INTO `brigade_topographes` (`id`, `ref_brigade`, `user_id`, `material_id`, `project_id`, `site_hebergement`, `date_sorti`, `date_retour`, `date_inspection`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 're1', 2, 7, 6, 'site1', '2021-08-19', '2021-08-27', '2021-08-20', NULL, '2021-08-19 08:19:32', '2021-09-05 09:03:36'),
(4, 'ref2', 1, 8, 6, 'site2', '2021-08-20', '2021-08-21', '2021-08-20', NULL, '2021-08-19 08:46:18', '2021-08-19 08:46:18'),
(5, 'ref3', 1, 9, 7, 'site3', '2021-08-26', '2021-08-19', '2021-08-13', NULL, '2021-08-19 08:53:44', '2021-08-19 09:37:42');

-- --------------------------------------------------------

--
-- Structure de la table `communes`
--

CREATE TABLE `communes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilaya_id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `communes`
--

INSERT INTO `communes` (`id`, `name`, `wilaya_id`, `code`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 'commune1', 3, 'code1', NULL, '2021-08-18 10:50:40', '2021-08-18 10:50:40'),
(5, 'commune2', 5, 'code2', NULL, '2021-08-18 10:51:17', '2021-08-18 11:07:07'),
(6, 'commune3', 5, 'code3', NULL, '2021-08-18 11:24:48', '2021-08-18 11:24:48');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `fiche_contrats`
--

CREATE TABLE `fiche_contrats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `montant_global_implantation` double(16,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fiche_contrats`
--

INSERT INTO `fiche_contrats` (`id`, `ref`, `date_debut`, `date_fin`, `montant_global_implantation`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 'ref2', '2021-08-17', '2021-08-27', 100000330000.00, NULL, '2021-08-19 11:15:00', '2021-08-19 11:15:00'),
(5, 'ref3', '2021-08-19', '2021-08-21', 1000000000.00, NULL, '2021-08-19 11:15:23', '2021-08-19 11:15:23');

-- --------------------------------------------------------

--
-- Structure de la table `fiche_techniques`
--

CREATE TABLE `fiche_techniques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_dos_tech` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(11) NOT NULL,
  `date_recept_ord` date NOT NULL,
  `date_envoi_odt` date NOT NULL,
  `date_envoi_ods` date NOT NULL,
  `date_fin_ods` date NOT NULL,
  `ref_ods` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_odt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laltitude` double(8,2) NOT NULL,
  `longitude` double(8,2) NOT NULL,
  `ref_sis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos_sis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orgi_si` double(8,2) NOT NULL,
  `paramatre_trans` double(8,2) NOT NULL,
  `altemetric` double(8,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fiche_techniques`
--

INSERT INTO `fiche_techniques` (`id`, `ref_dos_tech`, `project_id`, `date_recept_ord`, `date_envoi_odt`, `date_envoi_ods`, `date_fin_ods`, `ref_ods`, `ref_odt`, `laltitude`, `longitude`, `ref_sis`, `pos_sis`, `orgi_si`, `paramatre_trans`, `altemetric`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 're', 7, '2021-08-01', '2021-08-02', '2021-08-03', '2021-08-04', 're2', 're3', 10.59, 10.69, 're4', 'pos9', 10.59, 8.39, 2.39, NULL, '2021-08-17 08:47:45', '2021-08-20 13:10:19'),
(3, 'ref1', 5, '2021-08-20', '2021-08-21', '2021-08-22', '2021-08-24', 'ref ods1', 'ref odt1', 10.50, 20.50, 'ref sis1', 'pos sis1', 6.25, 0.25, 0.12, NULL, '2021-08-20 13:01:39', '2021-08-20 13:01:39');

-- --------------------------------------------------------

--
-- Structure de la table `materials`
--

CREATE TABLE `materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brigade_id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `materials`
--

INSERT INTO `materials` (`id`, `type`, `brigade_id`, `code`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 'type1', 5, 'code1', NULL, NULL, '2021-08-19 08:13:29', '2021-08-26 18:29:13'),
(8, 'type2', 3, 'code2', NULL, NULL, '2021-08-19 08:13:43', '2021-08-26 18:29:22'),
(9, 'type3', 5, 'code3', NULL, NULL, '2021-08-19 08:13:53', '2021-08-20 09:06:47'),
(10, 'type1', 3, 'code1', NULL, NULL, '2021-08-20 08:58:28', '2021-08-20 08:58:28'),
(11, 'type4', 5, 'code xxx', 'fsfn', NULL, '2021-08-26 18:30:36', '2021-08-26 18:30:36');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_08_09_104646_create_sessions_table', 1),
(7, '2021_08_10_133013_create_materials_table', 2),
(8, '2021_08_11_144400_create_bassins_table', 3),
(9, '2021_08_11_144643_create_wilayas_table', 3),
(10, '2021_08_11_144727_create_zones_table', 3),
(11, '2021_08_12_130059_create_communes_table', 4),
(12, '2021_08_12_201742_create_blocs_table', 5),
(13, '2021_08_12_210955_create_blocs_table', 6),
(14, '2021_08_12_213640_create_attachement_finals_table', 7),
(15, '2021_08_13_153123_create_projects_table', 8),
(16, '2021_08_14_110139_create_brigade_topographes_table', 9),
(17, '2021_08_15_095939_create_rapport_reconnaissances_table', 10),
(18, '2021_08_15_143735_create_fiche_contrats_table', 11),
(19, '2021_08_16_172523_create_fiche_techniques_table', 12);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sigle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rapport_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `bloc_id` int(11) NOT NULL,
  `commune_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_c` date NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `sigle`, `name`, `rapport_id`, `zone_id`, `bloc_id`, `commune_id`, `status`, `date_c`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'sigle1', 'project1', 3, 3, 2, 4, 'status1', '2021-08-19', 'type1', NULL, '2021-08-19 08:41:42', '2021-08-20 12:27:16'),
(6, 'sigle2', 'project2', 3, 4, 3, 5, 'status2', '2021-08-20', 'type2', NULL, '2021-08-19 08:42:17', '2021-08-20 12:27:08'),
(7, 'sigle3', 'project3', 3, 5, 4, 6, 'status3', '2021-08-21', 'type3', NULL, '2021-08-19 08:42:58', '2021-08-20 12:27:01'),
(8, 'sigle4', 'name4', 3, 4, 4, 6, 'status4', '2021-08-20', 'type4', NULL, '2021-08-20 12:15:07', '2021-08-20 12:26:49');

-- --------------------------------------------------------

--
-- Structure de la table `rapport_reconnaissances`
--

CREATE TABLE `rapport_reconnaissances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_rapport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(11) NOT NULL,
  `date_recp_imp` date NOT NULL,
  `coordonne_x` int(11) NOT NULL,
  `coordonne_y` int(11) NOT NULL,
  `coordonne_z` int(11) NOT NULL,
  `utm_x` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utm_y` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rapport_reconnaissances`
--

INSERT INTO `rapport_reconnaissances` (`id`, `ref_rapport`, `project_id`, `date_recp_imp`, `coordonne_x`, `coordonne_y`, `coordonne_z`, `utm_x`, `utm_y`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(9, 'ref 1234', 5, '2021-08-26', 698956, 3503244, 172, '32.165222', '4.034306', NULL, NULL, '2021-08-26 17:45:52', '2021-08-26 17:45:52');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('qU77XvLWKvMFcX3hHgFO52Lh4mPKBxRVJVmidOKj', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQzNBY081eGtvMDBYR3BJTXdsaFNXSXUyZHhURE9Hd2REVlVoa3VUcCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1630845526);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `num`, `post_id`, `address`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', '00', 2, 'h', 'admin2021@admin.com', NULL, '$2y$10$AD.Vj54nFL8uuKfMHTf/huPpA5pkCJKPpQZ40K0e2y.a3NOWfHjQG', NULL, NULL, NULL, NULL, NULL, '2021-08-09 08:59:41', '2021-08-09 08:59:41'),
(2, 'administrateur', '06754289', 9, 'H5', 'admin2021@admin2.com', NULL, '$2y$10$RoBXObE8EmCahkv3neLTo.aDJknqD649P/7XeZ1aweiHxgAyZeHuq', NULL, NULL, NULL, NULL, NULL, '2021-08-21 08:27:51', '2021-08-25 11:28:23'),
(4, 'dirc', '00000', 1, 'Hxcvbn', 'admin2021@admin3.com', NULL, '$2y$10$GoGLsH/sVCc6dCezsYskpOpduz0zEa1Rq9qurg8ztJnGjf0Qk6KY2', NULL, NULL, NULL, NULL, NULL, '2021-08-25 19:04:51', '2021-08-25 19:04:51');

-- --------------------------------------------------------

--
-- Structure de la table `wilayas`
--

CREATE TABLE `wilayas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wilayas`
--

INSERT INTO `wilayas` (`id`, `name`, `code`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'wilaya1', 'code1', NULL, '2021-08-18 10:46:31', '2021-08-18 10:46:31'),
(4, 'wilaya2', 'code2', NULL, '2021-08-18 10:46:47', '2021-08-18 10:46:47'),
(5, 'wilaya3', 'code3', NULL, '2021-08-18 10:47:02', '2021-08-18 10:47:02');

-- --------------------------------------------------------

--
-- Structure de la table `zones`
--

CREATE TABLE `zones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `zones`
--

INSERT INTO `zones` (`id`, `name`, `code`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'zone1', 'code1', NULL, '2021-08-18 11:20:33', '2021-08-18 11:20:33'),
(4, 'zone2', 'code2', NULL, '2021-08-18 11:20:48', '2021-08-18 11:20:48'),
(5, 'zone3', 'code3', NULL, '2021-08-18 11:21:00', '2021-08-18 11:21:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `attachement_finals`
--
ALTER TABLE `attachement_finals`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bassins`
--
ALTER TABLE `bassins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blocs`
--
ALTER TABLE `blocs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `brigade_topographes`
--
ALTER TABLE `brigade_topographes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `communes`
--
ALTER TABLE `communes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `fiche_contrats`
--
ALTER TABLE `fiche_contrats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fiche_techniques`
--
ALTER TABLE `fiche_techniques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rapport_reconnaissances`
--
ALTER TABLE `rapport_reconnaissances`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `wilayas`
--
ALTER TABLE `wilayas`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `attachement_finals`
--
ALTER TABLE `attachement_finals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `bassins`
--
ALTER TABLE `bassins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `blocs`
--
ALTER TABLE `blocs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `brigade_topographes`
--
ALTER TABLE `brigade_topographes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `communes`
--
ALTER TABLE `communes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fiche_contrats`
--
ALTER TABLE `fiche_contrats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `fiche_techniques`
--
ALTER TABLE `fiche_techniques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `rapport_reconnaissances`
--
ALTER TABLE `rapport_reconnaissances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `wilayas`
--
ALTER TABLE `wilayas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
