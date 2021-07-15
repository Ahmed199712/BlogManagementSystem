-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 05:46 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uploads/abouts/default.png',
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `content`, `image`, `facebook`, `twitter`, `google`, `youtube`, `website`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Ahmed', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus corrupti facilis officiis impedit, suscipit enim quaerat quia, aut alias sapiente, asperiores cum repudiandae! Labore fugit molestias molestiae minima, dolore dolor.', 'uploads/abouts/default.png', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.google.com', 'https://www.youtube.com', NULL, NULL, NULL, '2021-07-11 05:45:44', '2021-07-11 05:45:44'),
(2, 'Mohamed Mohamed', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus corrupti facilis officiis impedit, suscipit enim quaerat quia, aut alias sapiente, asperiores cum repudiandae! Labore fugit molestias molestiae minima, dolore dolor.', 'uploads/abouts/default.png', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.google.com', 'https://www.youtube.com', NULL, NULL, NULL, '2021-07-11 05:45:44', '2021-07-11 05:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uploads/avatars/default.png',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `group_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_count` int(11) NOT NULL DEFAULT 0,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `phone`, `address`, `avatar`, `status`, `group_id`, `email`, `email_verified_at`, `password`, `login_count`, `created_by`, `updated_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '01012547854', 'Cairo , Egypt', 'uploads/avatars/default.png', 0, NULL, 'laraveldeveloper@gmail.com', NULL, '$2y$10$Z9S1lloLYr258E2rGjTBvOgrglwfAOxQu91/Sps1.JriZ7gYCdfjW', 0, NULL, NULL, 'CZeLOt3UcgdO59MUjLHxf7zSFrPpJ6R3j1zw5rvL2QxrLsCXmi60Rt1VJjci', '2021-07-11 05:45:42', '2021-07-13 03:26:09'),
(2, 'Mohamed', 'Mohamed', '01012547854', 'Alexandria , Egypt', 'uploads/avatars/default.png', 0, 3, 'mohamed@gmail.com', NULL, '$2y$10$fZHlNJhcKUwxmbpspKg7N.gJt.AHfAjDuYg.AG6ZpPMx4/ntIoBWW', 0, NULL, NULL, NULL, '2021-07-13 02:31:30', '2021-07-13 03:40:11'),
(3, 'Some', 'One', '010102121', NULL, 'uploads/avatars/P2v3bZ6FdmozdCZxNRuRM67urvaWQCbrWoOzhqYf.jpg', 0, 3, 'someone@gmail.com', NULL, '$2y$10$uOxJZsGE4m1N9U6pR0RVUurVhjhrkijp7E2axz8nrRy3G4F5bmwdq', 0, NULL, NULL, 'IxLQqLnSZAlfw1aFaoluYxf3hdHEIL9Wt6hRTCMCHl3pOXegfuVjSf66fuQC', '2021-07-13 02:51:10', '2021-07-13 03:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `admin_groups`
--

CREATE TABLE `admin_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_admin` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `create_admin` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `edit_admin` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `delete_admin` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `show_admingroup` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `create_admingroup` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `edit_admingroup` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `delete_admingroup` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `show_category` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `create_category` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `edit_category` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `delete_category` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `show_about` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `create_about` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `edit_about` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `delete_about` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `show_comment` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `create_comment` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `edit_comment` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `delete_comment` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `show_commentreply` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `create_commentreply` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `edit_commentreply` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `delete_commentreply` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `show_message` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `create_message` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `edit_message` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `delete_message` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `show_post` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `create_post` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `edit_post` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `delete_post` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `show_slider` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `create_slider` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `edit_slider` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `delete_slider` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `show_tag` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `create_tag` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `edit_tag` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `delete_tag` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `show_user` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `create_user` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `edit_user` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `delete_user` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `show_setting` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `edit_setting` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_groups`
--

INSERT INTO `admin_groups` (`id`, `name`, `show_admin`, `create_admin`, `edit_admin`, `delete_admin`, `show_admingroup`, `create_admingroup`, `edit_admingroup`, `delete_admingroup`, `show_category`, `create_category`, `edit_category`, `delete_category`, `show_about`, `create_about`, `edit_about`, `delete_about`, `show_comment`, `create_comment`, `edit_comment`, `delete_comment`, `show_commentreply`, `create_commentreply`, `edit_commentreply`, `delete_commentreply`, `show_message`, `create_message`, `edit_message`, `delete_message`, `show_post`, `create_post`, `edit_post`, `delete_post`, `show_slider`, `create_slider`, `edit_slider`, `delete_slider`, `show_tag`, `create_tag`, `edit_tag`, `delete_tag`, `show_user`, `create_user`, `edit_user`, `delete_user`, `show_setting`, `edit_setting`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', '2021-07-13 02:30:12', '2021-07-13 03:21:27'),
(3, 'Editor', 'enable', 'disable', 'disable', 'disable', 'disable', 'disable', 'disable', 'disable', 'enable', 'enable', 'disable', 'disable', 'disable', 'disable', 'disable', 'disable', 'enable', 'disable', 'disable', 'disable', 'disable', 'disable', 'disable', 'disable', 'enable', 'disable', 'disable', 'disable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'enable', 'disable', 'disable', 'enable', 'disable', 'disable', 'disable', 'disable', 'disable', '2021-07-13 02:50:29', '2021-07-13 03:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Backend Development', 'backend-development', '1', NULL, NULL, '2021-07-11 05:45:43', '2021-07-11 05:45:43'),
(2, 'Frontend Development', 'frontend-development', '1', NULL, NULL, '2021-07-11 05:45:43', '2021-07-11 05:45:43'),
(3, 'Android Development', 'android-development', '1', NULL, NULL, '2021-07-11 05:45:43', '2021-07-11 05:45:43'),
(4, 'iOS Development', 'iOs-development', '1', NULL, NULL, '2021-07-11 05:45:43', '2021-07-11 05:45:43'),
(5, 'Desktop Development', 'desktop-development', '1', NULL, NULL, '2021-07-11 05:45:43', '2021-07-11 05:45:43'),
(6, 'Artificial Intelligence', 'artificial-intelligence', '1', NULL, NULL, '2021-07-11 05:45:43', '2021-07-11 05:45:43');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `status`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(2, 'Nice Post it\'s benefit ...', 1, 3, 1, '2021-07-11 07:48:06', '2021-07-11 07:48:23'),
(12, 'i am User Two', 1, 2, 1, '2021-07-12 07:28:47', '2021-07-12 07:28:47'),
(14, 'i Am User One', 1, 1, 1, '2021-07-12 07:31:21', '2021-07-12 07:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `comment_replies`
--

CREATE TABLE `comment_replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `comment_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_replies`
--

INSERT INTO `comment_replies` (`id`, `comment_reply`, `status`, `comment_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'First Reply On Comment', 1, 2, 1, '2021-07-12 06:29:11', '2021-07-12 06:29:11'),
(8, 'Welcome Back .', 1, 2, 2, '2021-07-12 07:14:56', '2021-07-12 07:14:56'),
(9, 'Hello', 1, 12, 3, '2021-07-12 07:29:21', '2021-07-12 07:29:21'),
(10, 'hello 2', 1, 12, 1, '2021-07-12 07:31:29', '2021-07-12 07:31:29'),
(11, 'Hello', 1, 14, 5, '2021-07-12 12:52:57', '2021-07-12 12:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `dislikes`
--

CREATE TABLE `dislikes` (
  `id` int(10) UNSIGNED NOT NULL,
  `dislike` int(11) NOT NULL DEFAULT 0,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dislikes`
--

INSERT INTO `dislikes` (`id`, `dislike`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, '2021-07-12 07:08:24', '2021-07-12 07:08:24'),
(2, 1, 5, 1, '2021-07-12 12:53:54', '2021-07-12 12:53:54');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `like` int(11) NOT NULL DEFAULT 0,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `like`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 1, '2021-07-11 07:48:28', '2021-07-11 07:48:28'),
(3, 1, 1, 5, '2021-07-12 05:40:41', '2021-07-12 05:40:41'),
(4, 1, 1, 13, '2021-07-12 05:40:57', '2021-07-12 05:40:57'),
(5, 1, 1, 4, '2021-07-12 06:43:58', '2021-07-12 06:43:58'),
(6, 1, 2, 1, '2021-07-12 07:08:01', '2021-07-12 07:08:01'),
(7, 1, 5, 1, '2021-07-12 12:53:52', '2021-07-12 12:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_01_25_084848_create_admins_table', 1),
(4, '2021_06_24_203651_create_categories_table', 1),
(5, '2021_06_24_220951_create_tags_table', 1),
(6, '2021_06_25_161852_create_posts_table', 1),
(7, '2021_06_25_162014_create_likes_table', 1),
(8, '2021_06_25_162113_create_comments_table', 1),
(9, '2021_06_25_162151_create_comment_replies_table', 1),
(10, '2021_06_25_162335_create_messages_table', 1),
(11, '2021_06_25_162501_create_settings_table', 1),
(12, '2021_06_25_165019_create_abouts_table', 1),
(13, '2021_06_25_165451_create_sliders_table', 1),
(14, '2021_06_25_165842_create_post_tag_table', 1),
(15, '2021_07_02_022956_create_dislikes_table', 1),
(19, '2021_07_12_163115_create_admin_groups_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('userone@gmail.com', '$2y$10$1KtdUFtM4gB56S8O2vpq.uMGCrGH2ZUc9l858rAgay3ZO3TZpMX0W', '2021-07-12 12:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uploads/posts/default.png',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `slug`, `content`, `category_id`, `admin_id`, `view_count`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Learn PHP/Laravel for backend', 'uploads/posts/bE55JLR7yvo5xNteylo9JfBmqtm8zXBLfb8vfVxF.png', 'learn-phplaravel-for-backend', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 1, 221, 1, 'laraveldeveloper@gmail.com', NULL, '2021-07-11 05:51:46', '2021-07-13 03:16:03'),
(2, 'Learn ASP.NET for backend', 'uploads/posts/AmGwLh8JLObEodadiRQXAh6iPEjRzubEGZ16U7Be.png', 'learn-aspnet-for-backend', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 1, 11, 1, 'laraveldeveloper@gmail.com', NULL, '2021-07-11 05:53:26', '2021-07-12 10:29:15'),
(3, 'How to be frontend developer in 6 month', 'uploads/posts/UP8Co85bgFPeeGz9XhJiNMNZRUBwXi0Pr4ENxXhm.png', 'how-to-be-frontend-developer-in-6-month', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2, 1, 9, 1, 'laraveldeveloper@gmail.com', NULL, '2021-07-11 05:57:12', '2021-07-12 12:32:56'),
(4, 'Learn Javascript from scratch ...', 'uploads/posts/b3JToR6JYN9o5B3A68HYUwSsu5spm75ObQqHHQ65.jpg', 'learn-javascript-from-scratch', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2, 1, 10, 1, 'laraveldeveloper@gmail.com', NULL, '2021-07-11 05:59:04', '2021-07-12 12:44:35'),
(5, 'Learn Android Basics from scratch ...', 'uploads/posts/jmFHhpK8gHDRqxSB6gdMoSVERK9gff6uM5XKvhNc.jpg', 'learn-android-basics-from-scratch', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3, 1, 2, 1, 'laraveldeveloper@gmail.com', NULL, '2021-07-11 06:02:12', '2021-07-12 05:39:45'),
(6, 'How to build android application faster ?', 'uploads/posts/IStw0W0ord3iw4n927W7l6aiUsoiROyDDgKjUg5C.jpg', 'how-to-build-android-application-faster', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3, 1, 52, 1, 'laraveldeveloper@gmail.com', NULL, '2021-07-11 06:07:51', '2021-07-13 03:15:29'),
(8, 'How to start in IOs development ..', 'uploads/posts/CjhMxfcB78mWL1gwTz5eF3TTXLG9HPtkRhkTIxwV.jpg', 'how-to-start-in-ios-development', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4, 1, 1, 1, 'laraveldeveloper@gmail.com', NULL, '2021-07-11 06:12:44', '2021-07-11 06:12:44'),
(9, 'Start Build an iOs app and upload it on store ..', 'uploads/posts/UCTLmtMZ7NiPj2zndJyi1izabgKtgL4uvXbLBLxg.jpg', 'start-build-an-ios-app-and-upload-it-on-store', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4, 1, 12, 1, 'laraveldeveloper@gmail.com', NULL, '2021-07-11 06:14:35', '2021-07-12 09:29:39'),
(10, 'Start Build Desktop app with C#', 'uploads/posts/TTWSrWmOwGZJadElYp99AzQETQL0NZny2exrQHLK.jpg', 'start-build-desktop-app-with-c', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 5, 1, 3, 1, 'laraveldeveloper@gmail.com', NULL, '2021-07-11 06:16:21', '2021-07-11 07:22:50'),
(11, 'Start Build Desktop app with Java', 'uploads/posts/ZOwoQmJOwPwd1LvUZ356cDejXnktzeX4y8I444cm.jpg', 'start-build-desktop-app-with-java', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 5, 1, 3, 1, 'laraveldeveloper@gmail.com', NULL, '2021-07-11 06:19:00', '2021-07-12 12:39:02'),
(12, 'Learn Artificial Intelligence from scratch ...', 'uploads/posts/3IkFJIRT1DxZAIVG1hLHdaemhMZ8CSeGF0byY7Cd.jpg', 'learn-artificial-intelligence-from-scratch', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 6, 1, 8, 1, 'laraveldeveloper@gmail.com', NULL, '2021-07-11 06:20:45', '2021-07-12 12:56:30'),
(13, 'Python Language is better for artificial intelligence', 'uploads/posts/R4Q5pEg94m6mVx4F28omxtZOfB0vK9Yt1CulWc2V.png', 'python-language-is-better-for-artificial-intelligence', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 6, 3, 8, 1, 'someone@gmail.com', NULL, '2021-07-11 06:22:55', '2021-07-13 03:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(9, 2, 1, NULL, NULL),
(10, 2, 2, NULL, NULL),
(11, 2, 3, NULL, NULL),
(12, 2, 4, NULL, NULL),
(13, 2, 8, NULL, NULL),
(14, 2, 10, NULL, NULL),
(15, 2, 11, NULL, NULL),
(16, 2, 14, NULL, NULL),
(17, 3, 1, NULL, NULL),
(18, 3, 3, NULL, NULL),
(19, 3, 4, NULL, NULL),
(20, 3, 11, NULL, NULL),
(21, 3, 13, NULL, NULL),
(22, 4, 1, NULL, NULL),
(23, 4, 3, NULL, NULL),
(24, 4, 4, NULL, NULL),
(25, 4, 11, NULL, NULL),
(26, 4, 13, NULL, NULL),
(27, 5, 1, NULL, NULL),
(28, 5, 2, NULL, NULL),
(29, 5, 9, NULL, NULL),
(30, 5, 10, NULL, NULL),
(31, 5, 11, NULL, NULL),
(32, 6, 1, NULL, NULL),
(33, 6, 2, NULL, NULL),
(34, 6, 9, NULL, NULL),
(35, 6, 10, NULL, NULL),
(36, 6, 11, NULL, NULL),
(42, 8, 1, NULL, NULL),
(43, 8, 9, NULL, NULL),
(44, 8, 10, NULL, NULL),
(45, 8, 11, NULL, NULL),
(46, 8, 15, NULL, NULL),
(47, 8, 16, NULL, NULL),
(48, 8, 18, NULL, NULL),
(49, 9, 1, NULL, NULL),
(50, 9, 2, NULL, NULL),
(51, 9, 9, NULL, NULL),
(52, 9, 10, NULL, NULL),
(53, 9, 11, NULL, NULL),
(54, 9, 15, NULL, NULL),
(55, 9, 16, NULL, NULL),
(56, 9, 18, NULL, NULL),
(57, 10, 1, NULL, NULL),
(58, 10, 2, NULL, NULL),
(59, 10, 8, NULL, NULL),
(60, 10, 10, NULL, NULL),
(61, 10, 11, NULL, NULL),
(62, 10, 16, NULL, NULL),
(63, 10, 19, NULL, NULL),
(64, 11, 1, NULL, NULL),
(65, 11, 2, NULL, NULL),
(66, 11, 10, NULL, NULL),
(67, 11, 11, NULL, NULL),
(68, 11, 16, NULL, NULL),
(69, 11, 19, NULL, NULL),
(70, 11, 20, NULL, NULL),
(71, 12, 1, NULL, NULL),
(72, 12, 2, NULL, NULL),
(73, 12, 10, NULL, NULL),
(74, 12, 12, NULL, NULL),
(75, 12, 16, NULL, NULL),
(76, 12, 21, NULL, NULL),
(77, 13, 1, NULL, NULL),
(78, 13, 2, NULL, NULL),
(79, 13, 10, NULL, NULL),
(80, 13, 11, NULL, NULL),
(81, 13, 16, NULL, NULL),
(82, 13, 21, NULL, NULL),
(83, 5, 18, NULL, NULL),
(84, 6, 18, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uploads/logos/default.png',
  `website_status` int(11) NOT NULL DEFAULT 1,
  `comments_status` int(11) NOT NULL DEFAULT 1,
  `register_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_desc`, `site_email`, `site_address`, `site_phone`, `facebook`, `youtube`, `twitter`, `site_logo`, `website_status`, `comments_status`, `register_status`, `created_at`, `updated_at`) VALUES
(1, 'MiniBlog', NULL, 'miniblog@gmail.com', 'Alexandria , Egypt', '01245874587', 'https://www.facebook.com', 'https://www.youtube.com', 'https://www.twitter.com', 'uploads/logos/default.png', 1, 1, 1, '2021-07-11 05:45:42', '2021-07-13 03:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uploads/sliders/default.png',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Programming', 'programming', '1', NULL, NULL, '2021-07-11 05:45:43', '2021-07-11 05:45:43'),
(2, 'Information Technology', 'information-technology', '1', NULL, 'laraveldeveloper@gmail.com', '2021-07-11 05:45:43', '2021-07-12 05:12:52'),
(3, 'Html', 'html', '1', NULL, NULL, '2021-07-11 05:45:43', '2021-07-11 05:45:43'),
(4, 'Css', 'css', '1', NULL, NULL, '2021-07-11 05:45:43', '2021-07-11 05:45:43'),
(5, 'PHP', 'php', '1', NULL, NULL, '2021-07-11 05:45:43', '2021-07-11 05:45:43'),
(6, 'Laravel', 'laravel', '1', NULL, NULL, '2021-07-11 05:45:43', '2021-07-11 05:45:43'),
(7, 'Wordpress', 'wordpress', '1', NULL, NULL, '2021-07-11 05:45:43', '2021-07-11 05:45:43'),
(8, 'C#', 'c#', '1', NULL, NULL, '2021-07-11 05:45:44', '2021-07-11 05:45:44'),
(9, 'Full Stack', 'full-stack', '1', NULL, NULL, '2021-07-11 05:45:44', '2021-07-11 05:45:44'),
(10, 'Computer Science', 'computer-science', '1', NULL, NULL, '2021-07-11 05:45:44', '2021-07-11 05:45:44'),
(11, 'Software', 'software', '1', NULL, NULL, '2021-07-11 05:45:44', '2021-07-11 05:45:44'),
(12, 'C++', 'c++', '1', NULL, NULL, '2021-07-11 05:45:44', '2021-07-11 05:45:44'),
(13, 'Java script', 'java-script', '1', NULL, NULL, '2021-07-11 05:45:44', '2021-07-11 05:45:44'),
(14, 'ASP.NET', 'asp.net', '1', NULL, NULL, '2021-07-11 05:45:44', '2021-07-11 05:45:44'),
(15, 'Swift', 'swift', '1', 'laraveldeveloper@gmail.com', NULL, '2021-07-11 06:11:13', '2021-07-11 06:11:13'),
(16, 'Software engineering', 'software-engineering', '1', 'laraveldeveloper@gmail.com', NULL, '2021-07-11 06:11:32', '2021-07-11 06:11:32'),
(17, 'Web', 'web', '1', 'laraveldeveloper@gmail.com', NULL, '2021-07-11 06:11:38', '2021-07-11 06:11:38'),
(18, 'Mobile', 'mobile', '1', 'laraveldeveloper@gmail.com', NULL, '2021-07-11 06:11:42', '2021-07-11 06:11:42'),
(19, 'Desktop', 'desktop', '1', 'laraveldeveloper@gmail.com', NULL, '2021-07-11 06:11:47', '2021-07-11 06:11:47'),
(20, 'Java', 'java', '1', 'laraveldeveloper@gmail.com', NULL, '2021-07-11 06:17:19', '2021-07-11 06:17:19'),
(21, 'Python', 'python', '1', 'laraveldeveloper@gmail.com', 'laraveldeveloper@gmail.com', '2021-07-11 06:19:42', '2021-07-12 12:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uploads/users/default.png',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_count` int(11) NOT NULL DEFAULT 0,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `avatar`, `status`, `email_verified_at`, `password`, `login_count`, `created_by`, `updated_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User One', 'userone@gmail.com', '01012547854', 'Cairo , Egypt', 'uploads/users/uVO5s0bOoyGgk7L9jwfGdjIJR8PjOMO4GS6A15Pq.png', 0, NULL, '$2y$10$Ave4hn4Qb0bnZL.GR8D50.dqvvRYs4h6BPwrqvfiGfgMIslG7/Qqq', 4, NULL, 'laraveldeveloper@gmail.com', 'lr2mjVX3WwDtfXpcRGO4IjrENDCPK2yMKpoD77PElmPXot4wWQKfK8G6lSin', '2021-07-11 05:45:42', '2021-07-12 12:39:26'),
(2, 'User Two', 'usertwo@gmail.com', '01012547854', 'Cairo , Egypt', 'uploads/users/default.png', 0, NULL, '$2y$10$3x.U2cGltM/vPV3BOyu4Ue3XVRMFrtJ4U.z5HFVoCweRRaUExz2XK', 2, NULL, NULL, 'qKviWWa8OotiQcdOOQNPrV5cj5pRP3wT2rpkOJ2U7xmF58NThalvgDFNRitf', '2021-07-11 05:45:43', '2021-07-12 07:26:23'),
(3, 'User Three', 'userthree@gmail.com', '01012547854', 'Cairo , Egypt', 'uploads/users/default.png', 0, NULL, '$2y$10$c1xIlHjNpPrbtYxgYjTQV.OSGu05lk88z5.J3dZoRI2lECHJ51/bm', 2, NULL, NULL, '7dxsQ1IoKrMk6GFCLknyz6xnueKhi752A90g9lmOAKrnsptbYMdLME61DiOY', '2021-07-11 05:45:43', '2021-07-12 07:29:09'),
(5, 'Ahmed Developer', 'ahmeddeveloper199712@gmail.com', NULL, NULL, 'uploads/users/e4Qa6DpaEsPa5lbGmJWGcFCHFRNacerWWvsKqHLl.jpg', 0, NULL, '$2y$10$HcNT2BKYpCl/T1SRTkkOGeA5d4OuQcwLQFIqbzwdeXMlK33zBjmE6', 2, NULL, NULL, '0YPDxZ3WVjC9GHAHTUve84TzVh1phWtLWsjcOtFQuuQ5PPZ5QQeQdXpgYoz3', '2021-07-12 12:46:42', '2021-07-12 12:53:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admin_groups` (`group_id`);

--
-- Indexes for table `admin_groups`
--
ALTER TABLE `admin_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_replies_comment_id_foreign` (`comment_id`),
  ADD KEY `comment_replies_user_id_foreign` (`user_id`);

--
-- Indexes for table `dislikes`
--
ALTER TABLE `dislikes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dislikes_user_id_foreign` (`user_id`),
  ADD KEY `dislikes_post_id_foreign` (`post_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_user_id_foreign` (`user_id`),
  ADD KEY `likes_post_id_foreign` (`post_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `posts_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_groups`
--
ALTER TABLE `admin_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comment_replies`
--
ALTER TABLE `comment_replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dislikes`
--
ALTER TABLE `dislikes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD CONSTRAINT `comment_replies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_replies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `dislikes`
--
ALTER TABLE `dislikes`
  ADD CONSTRAINT `dislikes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dislikes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
