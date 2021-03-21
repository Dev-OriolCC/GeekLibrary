-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2021 at 03:09 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_geek`
--
CREATE DATABASE IF NOT EXISTS `db_geek` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_geek`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pages` int(11) NOT NULL,
  `edition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `descriptionLong` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `description`, `image`, `isbn`, `publisher`, `pages`, `edition`, `country`, `year`, `deleted_at`, `created_at`, `updated_at`, `descriptionLong`, `category_id`) VALUES
(3, 'Aprende C# en un fin de semana', 'Alfredo Moreno Muñoz', 'Aprende C# en un fin de semana te ofrece un método de aprendizaje que te permitirá aprender C# en un corto periodo de tiempo, ¡concretamente en un fin de semana!', 'books/BOkaPZtuh6Sd2OM1ZUPjM7vJNWsoJ0QdhY6eZ34Z.jpg', 'B082HLNKLN', 'Kindle', 197, 'Kindle', 'Mexico', '2019-07-24', NULL, '2021-03-09 08:29:42', '2021-03-15 13:00:29', 'Nuestra experiencia nos ha demostrado que la mejor forma de aprender es hacerlo a la vez que te entretienes y con una metodología que te vaya enseñando progresivamente todos los conceptos que necesitas saber.\r\nEn la primera parte del libro encontrarás una explicación del lenguaje de programación junto con una introducción al entorno de programación.\r\nEn la segunda parte del libro encontrarás la parte práctica, con 70 ejercicios de dificultad progresiva en los que, además de guiarte paso a paso, te explicamos todos los conceptos teóricos de programación que necesitas conocer para poder llevarlos a cabo.', 4),
(4, '39 Técnicas y Estrategias de Programación Neurolinguistica.', 'Steve Allen', 'A través de este libro le entregaré las 39 mejores técnicas de PNL que he utilizado con éxito a lo largo de mi vida. Estos patrones y técnicas de PNL le servirán para ampliar su repertorio y para construir confianza.', 'books/20pSJX37OQUE74qLFRvHo7rNvuwTJkTfpaYlYqal.jpg', '1518681727', 'Kindle', 153, 'Lindle', 'EE.UU', '2018-05-22', NULL, '2021-03-09 08:33:12', '2021-03-15 13:00:20', 'Este es un libro conciso y paso a paso enfocado en enseñarle la lógica de cada patrón. Cuando elija un patrón para trabajar, simplemente siga los pasos cuidadosamente y asegúrese de comprender el proceso para aplicarlo cada vez que lo necesite.Piense en el poder que tendrá cuando finalmente tenga las herramientas para reprogramar su cerebro y así lograr todos sus objetivos personales y profesionales.\r\nLa programación Neurolinguistica contiene las técnicas claves para lograr la superación personal.', 4),
(5, 'El libro negro del programador.', 'Rafael Gomez Blanes', 'El Libro Negro del Programador muestra qué distingue a un programador neófito de quien actúa y trabaja profesionalmente.\r\nEn la era del emprendimiento y de la nueva economía, el desarrollo profesional de software es su pilar fundamental.', 'books/0pPCzezOZndr8WsMxBibEvgwbSuhA9SfVyWSCrVN.jpg', 'B00J5RHHNW', 'SAAS', 262, 'Kindle Segunda', 'España', '2017-05-24', NULL, '2021-03-09 08:35:34', '2021-03-15 13:00:13', 'El siglo XXI es el de la sociedad de la información y las nuevas tecnologías: todo ello no sería posible sin la enorme industria del software que le sirve de base.\r\nNo obstante, los desarrolladores de software no aprovechan todas las oportunidades para desempeñar una carrera profesional de éxito, cometiendo siempre los mismos errores una y otra vez. Un buen proyecto software tiene que ver con habilidades creativas y artísticas más que aquellas necesariamente técnicas.', 3),
(6, 'Steve Jobs', 'Walter Isaacson', 'La biografía definitiva de Steve Jobs, el fundador de Apple, escrita con su colaboración. Esta es la biografía definitiva de uno de los iconos indiscutibles de nuestro tiempo, del genio cuya creatividad, energía y perfeccionismo revolucionaron seis industrias.', 'books/rUOrn4u6OZDTD0D7qmn0xfVrqFBgsAtykG3e4C0Y.jpg', 'B00L5L0YO0', 'S.A.U', 645, 'Unabridged', 'EE.UU', '2011-07-11', NULL, '2021-03-09 08:38:58', '2021-03-15 13:00:04', 'La muerte de Steve Jobs ha conmocionado al mundo. Tras entrevistarlo en más de cuarenta ocasiones en los últimos dos años, además de a un centenar de personas de su entorno, familiares, amigos, adversarios y colegas, Walter Isaacson nos presenta la única biografía escrita con la colaboración de Jobs, el retrato definitivo de uno de los iconos indiscutibles de nuestro tiempo, la crónica de la agitada vida y abrasiva personalidad del genio cuya creatividad, energía y afán de perfeccionismo revolucionaron seis industrias: la informática, el cine de animación, la música, la telefonía, las tabletas y la edición digital.', 4),
(7, 'La evolucion tecnologia del lean.', 'Sebastian J. Brau', 'Nuevo Libro del experto en Lean Manufacturing, Sebastián J. Brau, en el que presenta técnicas, software, procedimientos y trucos para sacar más rendimiento de tu proyecto Lean.', 'books/JcPFMGH8rn2dx4hZ7nq11vOci6L8u6xWeuZtOC6s.jpg', 'B01LFX8VM4', 'Gestion Global de Recursos S.L', 147, 'Kindle', 'EE.UU', '2016-09-01', NULL, '2021-03-09 08:41:42', '2021-03-15 12:59:55', 'Con su contenido aprenderás como:\r\n 1.-Implementar la metodología de \"Inventario Activo\" para impedir que rompas stocks nunca más.\r\n 2.-Utilizar \"señaladores lean\" para detectar más fácilmente desviaciones de productividad en la operación. \r\n 3.-Fusionar Kaizen y Pareto para completar tus ciclos de \"mejora continua\" más rápido y con menor coste.\r\n 4.-Convertir los controles de tu departamento de calidad en sensores de planta para construir un \"sistema nervioso digital\" para ella.\r\n 5.-Utilizar los registros de planta para alimentar automáticamente tu ERP.\r\n 6.-Plantear un control de Trazabilidad de materiales que no lastre la productividad de tu operación con costes innecesarios.', 4),
(8, 'Inteligencia Artifical', 'Thein-Nam Dinh', 'Inteligencia artificial: Comprensión de la ciencia, el impacto y el futuro de la IA, el aprendizaje automático, las redes neuronales y la singularidad.', 'books/uDYCH7qRD50QskBtaveRq5wg3WA6eZMZno6vW30p.jpg', 'B084JHX9CJ', 'Kindle', 124, 'Kindle', 'India', '2020-02-05', NULL, '2021-03-09 08:45:55', '2021-03-15 12:58:54', 'En Inteligencia artificial: Comprensión de la ciencia, el impacto y el futuro de la IA, el aprendizaje automático, las redes neuronales y la singularidad, el autor, Thien-Nam Dinh, se basa en sus años de experiencia para abordar las grandes interrogantes sobre la IA y presentarlas en una manera que incluso un humano pueda entender.\r\nEste es el libro de inteligencia artificial indispensable para comprender la IA, el aprendizaje automático, las redes neuronales, la singularidad, así como el impacto de todo esto en el futuro.', 4),
(9, 'Inventemos Bitcoin', 'Yan Pritzker', 'Bitcoin podría ser el invento más importante de nuestro tiempo y sin embargo la mayor parte de la gente no tiene ni idea de lo que es o de cómo funciona.', 'books/pAy573SUR9zPNniWIKRm3nmF7Z6dlOD33GVjlZGk.jpg', '1089419600', 'Independiente', 112, 'Kindle', 'EE.UU', '2019-08-25', NULL, '2021-03-09 08:54:25', '2021-03-15 12:58:45', 'Esta corta y obligada lectura de dos horas, esencial antes de que inviertas, te guiará paso a paso por su invención.\r\n¡No se requieren conocimientos técnicos! Léelo y a continuación compártelo con tus seres queridos.\r\n\r\n\"Habiéndome leído prácticamente todas las explicaciones sobre Bitcoin, creo que esta es la mejor introducción desde cero, sin requerir conocimientos previos de ningún tipo. De ahora en adelante será mi recomendación a todas las personas que quieran empezar a entenderlo.\" - Nic Carter, Castle Island Ventures.', 5),
(10, 'Las Criptomonedas, el nuevo Oro digital.', 'Yousell Reyes', 'Las criptomonedas, especialmente el Bitcoin, sirven principalmente para mover dinero de un lugar a otro, hacer intercambio de monedas, pagar productos y servicios.', 'books/F0Jl3PfX5Rc36ggr7aRt3IH3VGjmeSiEvqxPYGQP.jpg', 'B08XMG9JV5', 'Kindle', 71, 'Kindle', 'España', '2021-02-25', NULL, '2021-03-09 08:56:28', '2021-03-15 12:58:37', 'Bajo el río de este tema ha corrido mucha agua. Alrededor del año 2009 comenzó a circular la primera criptomoneda, y desde entonces la gente no ha dejado de mirarla con escepticismo. Los pocos que se han arriesgado y se han adentrado en este mundo poco conocido desde su infancia, de dos o tres semillas que plantaron han recibido grandes cosechas.\r\nPor eso, son muchos los que ahora lamentan no haber arriesgado algo de capital para entrar en esta nueva industria (yo también), dado el valor y potencial que ahora posee.', 5),
(11, 'Hacking Etico 101', 'Karina Astudillo', 'El libro plantea cómo hacer hacking ético en un tiempo relámpago. Este libro tiene la respuesta para Usted! Con tan sólo 2 horas de dedicación diaria usted puede convertirse en hacker ético profesional!', 'books/PeMXjipojgWuVNcw0jsey5CChEVlOOlYofLBFX0f.jpg', '1535174064', 'Independiente', 300, 'Segunda', 'Colombia', '2016-07-07', NULL, '2021-03-09 08:58:09', '2021-03-15 12:58:13', 'Hacking Etico 101 es su guía práctica para convertirse en un pentester profesional. Si le gustan los libros técnicos amenos, que incluyan laboratorios detallados con pasos simples que pueda replicar fácilmente, entonces le encantará este bestseller de Karina Astudillo! En él encontrará información paso a paso acerca de cómo actúan los hackers, cuáles son las fases que siguen, qué herramientas usan y cómo hacen para explotar vulnerabilidades en los sistemas informáticos. Aprenderá además cómo escribir un informe profesional y mucho más!', 3),
(12, 'Introduccion a Laravel 7', 'Marcelo Ciceri', 'Cuando trabajamos solos es más simple mantener un orden, pero es difícil construir aplicaciones web a gran escala de esta forma. Para integrarnos a un equipo de desarrollo sin generar caos es fundamental contar con un marco de trabajo o framework.', 'books/9OF1X4KOMZON9rHDmlVuHHpNvpv8XjuTEpfWStbz.jpg', 'B07VH5S1YQ', 'Creative Andina', 223, 'Primera', 'EE.UU', '2019-07-19', NULL, '2021-03-09 09:00:36', '2021-03-15 12:58:01', 'Cuando trabajamos solos es más simple mantener un orden, pero es difícil construir aplicaciones web a gran escala de esta forma. Para integrarnos a un equipo de desarrollo sin generar caos es fundamental contar con un marco de trabajo o framework. Este libro ofrece al lector introducirse en estos conceptos usando la herramienta PHP más utilizada del mercado: Laravel.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Ciencia', '2021-03-15 12:08:19', '2021-03-15 12:22:56'),
(3, 'Hacking Etico', '2021-03-15 12:46:24', '2021-03-15 12:46:24'),
(4, 'Computacion', '2021-03-15 12:46:32', '2021-03-15 12:46:32'),
(5, 'Tecnologia Blockchain', '2021-03-15 12:58:26', '2021-03-15 12:58:26');

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
(4, '2021_03_08_233500_create_books_table', 1),
(5, '2021_03_12_020848_add_category_id_to_books_table', 2),
(6, '2021_03_12_234300_create_categories_table', 3);

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
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Oriol', 'admin@gmail.com', NULL, '$2y$10$GZKCf.qJmpel7e5paoGZaO6VZtfpSDb75cBhf1ZlTBi6y1LBurnAq', NULL, '2021-03-09 06:16:05', '2021-03-09 06:16:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
