-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 01:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edufun`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` text DEFAULT NULL,
  `writers_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `image`, `writers_id`, `category_id`, `view_count`, `created_at`, `updated_at`) VALUES
(1, 'Unveiling the Power of Deep Learning: A Comprehensive Guide to Sentiment Analysis', 'deep-learing-sentiment-analysis', 'Error assumenda numquam quia optio. Eveniet ut enim ut quidem pariatur dolore. Ullam voluptatibus odio sit quibusdam. Quisquam recusandae molestiae facere libero fugiat.\n\nRecusandae cumque doloribus est officia minima quo sed. Commodi id totam sed error mollitia repellat sunt.\n\nEnim corrupti architecto deserunt ut quia aut. Fugit cumque eveniet sunt eos. Sed veniam atque ullam.', 'img/data_science1.jpg', 2, 1, 36, '2024-11-05 22:42:55', '2024-11-05 22:42:55'),
(2, 'Forecasting the Future: Leveraging Time Series Analysis for Accurate Customer', 'time-series-analysis', 'Tenetur quis rerum temporibus. Vel mollitia animi hic dolorem. Perspiciatis consequatur officiis asperiores sequi eveniet.\n\nReprehenderit dolores ut blanditiis cum accusantium distinctio provident. Est veritatis ut sint in voluptates aut. Voluptatem rerum ut fugiat officia reprehenderit ipsum. Aut dignissimos in eveniet eum possimus.\n\nMagnam unde repellendus molestiae natus inventore. Ad temporibus molestiae mollitia tempora qui maiores. Harum autem porro illo quia sunt.', 'img/data_science2.jpg', 3, 1, 45, '2024-11-05 22:42:55', '2024-11-05 22:42:55'),
(3, 'Safeguarding Your Business: Detecting Anomalies with Machine Learning to Prevent Fraud ', 'detecting-machine-learning-fraud', 'Sit ipsa animi aut ut. Dolor assumenda aut cumque a et. Quia adipisci labore ut ex qui dolorem consequatur animi. Et delectus illum unde repudiandae.\n\nMolestiae explicabo nostrum qui quos amet. Eaque accusamus cum fugit consequatur aliquid quia. Itaque est sequi qui nisi non.\n\nIpsam voluptas ut repellendus non. Et laborum suscipit accusantium laboriosam et non natus. Voluptatibus quis voluptates nihil culpa eaque et. Asperiores libero nobis dolor rerum impedit.', 'img/data_science3.jpg', 1, 2, 48, '2024-11-05 22:42:55', '2024-11-05 22:42:55'),
(4, 'The War on Ransomware: Cutting-Edge Strategies to Protect Your Data', 'ransomware-cutting-edge-protect-data', 'Quasi quia quis debitis repellat est. Voluptatem aut iusto aut veniam repellat. Aliquid alias nulla est omnis tempora. Asperiores pariatur et minus sed consequuntur nihil vel. Quae voluptate quo et corporis nemo qui vitae.\n\nAnimi nulla ipsum eligendi neque non blanditiis. Fugiat voluptas libero et repudiandae. Id est et cumque distinctio provident. Perspiciatis dolore delectus voluptatibus nisi quia. Ea sunt aut ab dolor quidem et autem.\n\nSunt rerum ea eius et voluptatem commodi amet. Voluptatem sapiente blanditiis amet et rerum voluptatem. Ullam velit neque laborum minus nostrum aut aliquam.', 'img/network_security1.png', 2, 2, 42, '2024-11-05 22:42:55', '2024-11-05 22:42:55'),
(5, 'Building a Fortress: Implementing Zero Trust Architecture for Enhanced Network', 'zero-trust-architecture-enhanced-network', 'Blanditiis tenetur sed ratione saepe. Aut sit sed libero et in eum temporibus. Modi odit id minima eligendi impedit. Sint voluptatem est nulla beatae ipsum eos.\n\nEt at eum quisquam et odit. Sequi sed voluptas aperiam eius sed earum dolore libero. Voluptate enim qui ullam eum magni est quasi consequatur. Autem velit eius incidunt soluta.\n\nRepellendus illum dolorem magni atque veniam. Qui magnam ipsa quaerat laborum. Quas molestiae cum quidem aspernatur consequatur harum. Est fugit voluptatem similique voluptatem laudantium pariatur nisi. Ut est ipsam quam.', 'img/network_security2.png', 1, 2, 90, '2024-11-05 22:42:55', '2024-11-05 22:42:55'),
(6, 'AI vs Cyber Threats: How Artificial Intelligence is Revolutionizing Cybersecurity', 'ai-cyber-artificial-intelligence-security', 'Voluptatum tempore explicabo unde aut at dignissimos quam reprehenderit. Qui qui at tempora non debitis sint placeat explicabo. Ipsum deleniti recusandae laudantium esse atque officia.\n\nConsectetur autem tenetur harum ut. Eaque excepturi provident totam et architecto dolor. Quaerat ipsam quasi ut fuga fugiat.\n\nUt architecto magni itaque dicta. Sunt enim et illo est quis. Et unde distinctio cumque.', 'img/network_security3.png', 2, 1, 4, '2024-11-05 22:42:55', '2024-11-05 22:42:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_writers_id_foreign` (`writers_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_writers_id_foreign` FOREIGN KEY (`writers_id`) REFERENCES `writers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
