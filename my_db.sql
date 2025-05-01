SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

USE my_db;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(5, 'admin', 'admin@example.com', '$2y$10$D70SoY/KX7O0w2w/CJi97.JbqCJ1dwTP6F.w24sMBVFlrxSF8gSCC', 0, '2025-04-28 21:30:33'),
(6, 'user', 'user@example.com', '$2y$10$G2GzEDQtlA.32.FFiNyV1.uMgAxdD7jmm40jdNKFVrSSodTqLp2q2', 1, '2025-04-28 21:30:49');


CREATE TABLE IF NOT EXISTS `contact` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `full_name` VARCHAR(50) NOT NULL,
  `email` VARCHAR(40) NOT NULL,
  `message` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;


CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

INSERT INTO `services` (`id`, `name`, `description`) VALUES
(1, 'Useful Tricks', 'EduWell is the professional HTML5 template for your school or university websites.'),
(2, 'Creative Ideas', 'You can download and use this EduWell Template for your teaching and learning stuffs.'),
(3, 'Ready Target', 'Please tell your friends about the best CSS template website that is TemplateMo.'),
(4, 'Technology', 'Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.'),
(5, 'Useful Tricks', 'In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.'),
(6, 'Creative Ideas', 'Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.'),
(7, 'Ready Target', 'In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.'),
(8, 'Technology', 'Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.'),
(9, 'Useful Tricks', 'In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.'),
(10, 'Creative Ideas', 'Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.'),
(11, 'Ready Target', 'In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.'),
(12, 'Technology', 'Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.');


CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(2000) NOT NULL, 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

INSERT INTO `courses` (`id`, `name`, `description`) VALUES
(1, 'Web Development', 'Did you know that you can visit TooCSS website for latest listing of HTML templates and a variety of useful templates. You just need to go and visit that website right now. IF you have any suggestion or comment about this template, you can feel free to go to contact page for our email address.'),
(2, 'Creative Graphic Design', 'You are not allowed to redistribute this template ZIP file on any other website without a permission from us. There are some unethical people on this world copied and reposted our templates without any permission from us. Their Karma will hit them really hard. Yeah!'),
(3, 'Web Design', 'Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape tofu subway tile cronut. Deep v ennui subway tile organic seitan. Kogi VHS freegan bicycle rights try-hard green juice probably havent heard of them cliche la croix af chillwave.'),
(4, 'WordPress Introduction', 'Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape tofu subway tile cronut. Deep v ennui subway tile organic seitan. Kogi VHS freegan bicycle rights try-hard green juice probably havent heard of them cliche la croix af chillwave.');

COMMIT;
