-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Nov-2017 às 12:40
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dicas`
--

CREATE TABLE `dicas` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `dicas`
--

INSERT INTO `dicas` (`id`, `titulo`, `descricao`, `imagem`, `created_at`, `updated_at`) VALUES
(1, 'Saiba quais reformas precisam de autorização da prefeitura', 'teste', '20170616200641.jpg', '2017-06-16 23:54:41', '2017-06-16 23:54:41'),
(2, 'REFORMA CASA : 10 DICAS PARA O SUCESSO DA OBRA.', 'teste', '20170616200628.jpg', '2017-06-16 23:55:28', '2017-06-16 23:55:28'),
(3, 'É possível construir sem projeto ?', 'teste', '20170616200658.jpg', '2017-06-16 23:55:58', '2017-06-16 23:55:58'),
(4, 'Como obter sucesso em uma reforma residencial.', 'teste', '20170616200630.jpg', '2017-06-16 23:56:30', '2017-06-16 23:56:30'),
(5, 'Preço do m² na construção civil em 2016.', 'teste', '20170616200656.jpg', '2017-06-16 23:56:56', '2017-06-16 23:56:56'),
(6, 'Como isolar ruídos no seu imóvel.', 'teste', '20170616200626.jpg', '2017-06-16 23:57:26', '2017-06-16 23:57:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home_contatos`
--

CREATE TABLE `home_contatos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imagem_parallax` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `home_contatos`
--

INSERT INTO `home_contatos` (`id`, `titulo`, `descricao`, `imagem`, `imagem_parallax`, `created_at`, `updated_at`) VALUES
(3, 'Precisando de ajuda com sua reforma residencial ou comercial?', 'Conte com a PWM Pinturas e Reformas para um serviço de qualidade.', '20170616130614.png', 'parallax_20170616130614.jpg', '2017-06-16 16:34:14', '2017-06-16 16:41:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home_portifolios`
--

CREATE TABLE `home_portifolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_homeportfilters` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `home_portifolios`
--

INSERT INTO `home_portifolios` (`id`, `id_homeportfilters`, `titulo`, `imagem`, `created_at`, `updated_at`) VALUES
(7, 4, 'Construção', '20170619160620.jpg', '2017-06-19 19:55:20', '2017-06-19 19:55:58'),
(8, 4, 'Construção', '20170619160647.jpg', '2017-06-19 19:55:47', '2017-06-19 19:55:47'),
(10, 2, 'Reformas', '20170619170611.jpg', '2017-06-19 20:20:11', '2017-06-19 20:20:11'),
(11, 2, 'Reformas', '20170619170632.jpg', '2017-06-19 20:20:32', '2017-06-19 20:20:32'),
(12, 2, 'Reformas', '20170619170609.jpg', '2017-06-19 20:22:09', '2017-06-19 20:22:09'),
(13, 3, 'Sinteco', '20170620140649.jpg', '2017-06-20 17:56:49', '2017-06-20 17:56:49'),
(14, 3, 'Sinteco', '20170620140614.jpg', '2017-06-20 17:57:14', '2017-06-20 17:57:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home_portifolio_filters`
--

CREATE TABLE `home_portifolio_filters` (
  `id` int(10) UNSIGNED NOT NULL,
  `filtro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `home_portifolio_filters`
--

INSERT INTO `home_portifolio_filters` (`id`, `filtro`, `created_at`, `updated_at`) VALUES
(2, 'Reformas', '2017-06-16 19:20:29', '2017-06-16 19:20:29'),
(3, 'Sinteco', '2017-06-16 19:38:48', '2017-06-16 19:38:48'),
(4, 'Construção', '2017-06-19 19:54:29', '2017-06-19 19:54:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home_servicos`
--

CREATE TABLE `home_servicos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `home_servicos`
--

INSERT INTO `home_servicos` (`id`, `titulo`, `descricao`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Ampliação e Reformas', 'Nossa equipe executa melhoramento nas construções, transformando e colocando o objeto em plenas condições de uso e funcionamento.', 'fa fa-home', '2017-06-16 14:47:40', '2017-06-17 02:02:11'),
(2, 'Projetos Customizados', 'Elaboramos projetos customizados para reformas residenciais gerais ou para pequenos ambientes. ', 'fa fa-cogs', '2017-06-16 14:47:57', '2017-06-17 02:02:24'),
(3, 'Pintura, Elétrica e Hidráulica', 'Pintura profissional, sem dor de cabeça e de acordo com as suas necessidades; Instalação elétrica; Troca de encanamentos, projetos e reparos.', 'fa fa-paint-brush', '2017-06-16 14:48:16', '2017-06-16 14:48:16'),
(4, 'Sinteco', 'Fazemos aplicação de: Sinteco nacional ou Importado, descoloração e clareamento de pisos de madeira.', 'fa fa-tint', '2017-06-16 14:48:34', '2017-06-17 01:50:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_12_08_151345_create_dicas_table', 1),
('2017_06_14_095135_create_slider_homes_table', 1),
('2017_06_14_111410_create_home_servicos_table', 1),
('2017_06_14_151901_create_home_contatos_table', 1),
('2017_06_16_142134_create_home_portifolio_filters_table', 2),
('2017_06_16_152126_create_home_portifolios_table', 3),
('2017_06_20_160841_create_sobre_empresas_table', 4),
('2017_06_20_172014_create_sobre_vant_desvs_table', 5),
('2017_06_27_120330_create_servicos_filters_table', 6),
('2017_06_27_121120_create_servicos_table', 6),
('2017_06_30_144728_create_portfolio_filters_table', 7),
('2017_06_30_150811_create_portfolios_table', 7),
('2017_06_30_155727_add_imagem_portfolios_table', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_portfoliofilters` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `portfolios`
--

INSERT INTO `portfolios` (`id`, `id_portfoliofilters`, `titulo`, `descricao`, `imagem`, `created_at`, `updated_at`) VALUES
(3, 1, 'Reformas', 'Teste de Reforma;', '20170630160616.jpg', '2017-06-30 19:50:16', '2017-06-30 19:55:24'),
(4, 2, 'Sinteco', 'Sinteco', '20170703170758.jpg', '2017-07-03 20:29:58', '2017-07-03 20:29:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `portfolio_filters`
--

CREATE TABLE `portfolio_filters` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `portfolio_filters`
--

INSERT INTO `portfolio_filters` (`id`, `titulo`, `created_at`, `updated_at`) VALUES
(1, 'Reformas', '2017-06-30 18:21:43', '2017-06-30 18:21:43'),
(2, 'Sinteco', '2017-07-03 20:29:13', '2017-07-03 20:29:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_servicosfilters` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `id_servicosfilters`, `titulo`, `created_at`, `updated_at`) VALUES
(1, 2, 'Revitalização de ambientes e fachadas;', '2017-06-27 17:08:06', '2017-06-27 17:09:49'),
(2, 2, 'Ampliação de imóveis;', '2017-06-27 17:12:07', '2017-06-27 17:12:07'),
(3, 2, 'Reparos e instalações;', '2017-06-27 17:12:25', '2017-06-27 17:12:25'),
(4, 2, 'Construções completas;', '2017-06-27 17:12:38', '2017-06-27 17:12:38'),
(5, 3, 'Arquitetônicos;', '2017-06-27 17:14:03', '2017-06-27 17:14:34'),
(6, 3, 'Design de interiores;', '2017-06-27 17:14:24', '2017-06-27 17:14:24'),
(7, 3, 'Paisagismo;', '2017-06-27 17:14:43', '2017-06-27 17:14:53'),
(8, 3, 'Elétricos e Hidráulicos;', '2017-06-27 17:15:18', '2017-06-27 17:15:18'),
(9, 4, 'Alvenaria;', '2017-06-27 17:15:33', '2017-06-27 17:15:33'),
(10, 4, 'Revestimentos;', '2017-06-27 17:15:50', '2017-06-27 17:15:50'),
(11, 4, 'Pintura;', '2017-06-27 17:16:02', '2017-06-27 17:16:02'),
(12, 4, 'Hidráulica;', '2017-06-27 17:16:13', '2017-06-27 17:16:13'),
(13, 4, 'Elétrica;', '2017-06-27 17:16:26', '2017-06-27 17:16:26'),
(14, 4, 'Gesso;', '2017-06-27 17:16:38', '2017-06-27 17:16:38'),
(15, 4, 'Telhados;', '2017-06-27 17:16:50', '2017-06-27 17:16:50'),
(16, 5, 'Nacionais;', '2017-06-27 17:17:16', '2017-06-27 17:17:16'),
(17, 5, 'Importados;', '2017-06-27 17:17:30', '2017-06-27 17:17:30'),
(18, 6, 'Marcenaria;', '2017-06-27 17:17:49', '2017-06-27 17:18:30'),
(19, 6, 'Serralheria;', '2017-06-27 17:18:00', '2017-06-27 17:18:43'),
(20, 6, 'Impermeabilização;', '2017-06-27 17:18:14', '2017-06-27 17:18:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos_filters`
--

CREATE TABLE `servicos_filters` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `servicos_filters`
--

INSERT INTO `servicos_filters` (`id`, `titulo`, `created_at`, `updated_at`) VALUES
(2, 'Reformas e Construções', '2017-06-27 16:42:13', '2017-06-27 16:42:13'),
(3, 'Projetos', '2017-06-27 17:12:57', '2017-06-27 17:12:57'),
(4, 'Mão de Obra', '2017-06-27 17:13:15', '2017-06-27 17:13:15'),
(5, 'Sinteco', '2017-06-27 17:13:23', '2017-06-27 17:13:23'),
(6, 'Outros Serviços', '2017-06-27 17:13:30', '2017-06-27 17:13:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `slider_homes`
--

CREATE TABLE `slider_homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `slider_homes`
--

INSERT INTO `slider_homes` (`id`, `titulo`, `descricao`, `imagem`, `created_at`, `updated_at`) VALUES
(1, 'Reforma Geral', 'Ampliação de sala com iluminação cênica ', '20170616110636.jpg', '2017-06-16 14:25:36', '2017-06-19 18:20:13'),
(3, 'Espaço Gourmet', 'Reforma e decoração', '20170616220626.jpg', '2017-06-17 01:43:26', '2017-06-17 01:44:12'),
(4, 'Área Externa', 'Piso, Pintura e Decoração', '20170616220632.jpg', '2017-06-17 01:46:32', '2017-06-17 01:46:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre_empresas`
--

CREATE TABLE `sobre_empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sobre_empresas`
--

INSERT INTO `sobre_empresas` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, '<p> A <strong>PWM Pinturas e Reformas</strong> atua na cidade do Rio de Janeiro há mais de vinte e cinco anos, é especializada em serviços de reformas, construções de casas, Sinteco e reparos: pedreiro, pintor, eletricista, encanador, gesseiro e mais.</p>\r\n<p> Buscamos entender a necessidade do cliente, no momento do orçamento. Assim podemos oferecer o serviço realmente necessário, com um orçamento objetivo e de fácil compreensão.</p>\r\n<p> Para atingir esse objetivo, contratamos profissionais experientes e comprometidos com qualidade, segurança e rapidez.</p>', '2017-06-20 19:25:01', '2017-06-20 19:45:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre_vant_desvs`
--

CREATE TABLE `sobre_vant_desvs` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `vantdesv` tinyint(1) NOT NULL,
  `icone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sobre_vant_desvs`
--

INSERT INTO `sobre_vant_desvs` (`id`, `descricao`, `vantdesv`, `icone`, `created_at`, `updated_at`) VALUES
(1, 'Orçamento gratuito de acordo com o projeto.', 0, 'fa fa-check fa-4x', '2017-06-26 19:53:24', '2017-06-26 19:53:24'),
(2, 'Planejamento, administração e coordenação de toda a obra.', 0, 'fa fa-check fa-4x', '2017-06-26 19:54:12', '2017-06-26 19:54:12'),
(3, 'Você sem dor de cabeça ou preocupação em fiscalizar a obra ou correr atrás disso ou daquilo.', 0, 'fa fa-check fa-4x', '2017-06-26 19:54:37', '2017-06-26 19:54:37'),
(4, 'Garantimos a conclusão da obra com o máximo cuidado ao seu patrimônio.', 0, 'fa fa-check fa-4x', '2017-06-26 19:54:52', '2017-06-26 19:54:52'),
(5, 'Entregamos os serviços no prazo combinado.', 0, 'fa fa-check fa-4x', '2017-06-26 19:55:15', '2017-06-26 19:55:15'),
(6, 'Você trata com um único profissional.', 0, 'fa fa-check fa-4x', '2017-06-26 19:55:33', '2017-06-26 19:55:33'),
(7, 'Você economiza tempo e dinheiro com a compra de materiais, contratação de funcionários e acompanhamento dos serviços.', 0, 'fa fa-check fa-4x', '2017-06-26 19:55:48', '2017-06-26 19:55:48'),
(8, 'Você não corre o risco de contratar um empreiteiro desqualificado.', 0, 'fa fa-check fa-4x', '2017-06-26 19:56:06', '2017-06-26 19:56:06'),
(9, 'Damos a garantia em sua construção ou reforma.', 0, 'fa fa-check fa-4x', '2017-06-26 19:56:21', '2017-06-26 19:56:21'),
(12, 'Tempo desperdiçado na administração, contratação, mão de obra e compra de materiais.', 1, 'fa fa-times fa-4x', '2017-06-26 20:08:08', '2017-06-26 20:08:08'),
(13, 'Falta de comprometimento com os prazos de entrega.', 1, 'fa fa-times fa-4x', '2017-06-26 20:08:28', '2017-06-26 20:08:28'),
(14, 'Risco do prestador de serviço desaparecer em meio à obra', 1, 'fa fa-times fa-4x', '2017-06-26 20:08:40', '2017-06-26 20:08:40'),
(15, 'Descaso com a limpeza e seus pertences pelos prestadores de serviços.', 1, 'fa fa-times fa-4x', '2017-06-26 20:08:53', '2017-06-26 20:08:53'),
(16, 'Risco da obra custar mais que o orçamento inicial..', 1, 'fa fa-times fa-4x', '2017-06-26 20:09:07', '2017-06-26 20:18:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Wesley R. de Oliveira', 'wesley.ti@gmail.com', '$2y$10$Y.mmdNGHUGt5XcSd70XScOjB8O9uvNeg.OMoE0Bu0A0XHIDOCi1Ti', 'Yya70iaUpHrUzKWXg83UuV6uHrBTrN82rae7LSt31fbR45VwtjmGoAMhdj80', '2017-07-04 01:12:10', '2017-07-18 18:50:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dicas`
--
ALTER TABLE `dicas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_contatos`
--
ALTER TABLE `home_contatos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_portifolios`
--
ALTER TABLE `home_portifolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_portifolios_id_homeportfilters_foreign` (`id_homeportfilters`);

--
-- Indexes for table `home_portifolio_filters`
--
ALTER TABLE `home_portifolio_filters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_servicos`
--
ALTER TABLE `home_servicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolios_id_portfoliofilters_foreign` (`id_portfoliofilters`);

--
-- Indexes for table `portfolio_filters`
--
ALTER TABLE `portfolio_filters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicos_id_servicosfilters_foreign` (`id_servicosfilters`);

--
-- Indexes for table `servicos_filters`
--
ALTER TABLE `servicos_filters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_homes`
--
ALTER TABLE `slider_homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sobre_empresas`
--
ALTER TABLE `sobre_empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sobre_vant_desvs`
--
ALTER TABLE `sobre_vant_desvs`
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
-- AUTO_INCREMENT for table `dicas`
--
ALTER TABLE `dicas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `home_contatos`
--
ALTER TABLE `home_contatos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `home_portifolios`
--
ALTER TABLE `home_portifolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `home_portifolio_filters`
--
ALTER TABLE `home_portifolio_filters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `home_servicos`
--
ALTER TABLE `home_servicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `portfolio_filters`
--
ALTER TABLE `portfolio_filters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `servicos_filters`
--
ALTER TABLE `servicos_filters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `slider_homes`
--
ALTER TABLE `slider_homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sobre_empresas`
--
ALTER TABLE `sobre_empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sobre_vant_desvs`
--
ALTER TABLE `sobre_vant_desvs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `home_portifolios`
--
ALTER TABLE `home_portifolios`
  ADD CONSTRAINT `home_portifolios_id_homeportfilters_foreign` FOREIGN KEY (`id_homeportfilters`) REFERENCES `home_portifolio_filters` (`id`);

--
-- Limitadores para a tabela `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_id_portfoliofilters_foreign` FOREIGN KEY (`id_portfoliofilters`) REFERENCES `portfolio_filters` (`id`);

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `servicos_id_servicosfilters_foreign` FOREIGN KEY (`id_servicosfilters`) REFERENCES `servicos_filters` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
