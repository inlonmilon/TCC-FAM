-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2024 at 02:31 AM
-- Server version: 10.5.27-MariaDB-cll-lve
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostdeprojetos_feitoamaoh`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `usuario_pedido` varchar(100) NOT NULL,
  `usuario_contato` varchar(100) NOT NULL,
  `produto` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `valor_total` decimal(10,2) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `quantidade` int(11) NOT NULL DEFAULT 1,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carrinho`
--

INSERT INTO `carrinho` (`id`, `usuario_pedido`, `usuario_contato`, `produto`, `descricao`, `valor_total`, `data_criacao`, `quantidade`, `id_prod`) VALUES
(150, 'pedro', 'pedro@gmail.com 111111111111111', 'Bubble simples', 'Cestinho recheado de gostosuras com bubble personalizada Simples.', 225.00, '2024-12-03 03:56:00', 3, 2909),
(151, 'pedro', 'pedro@gmail.com 111111111111111', 'Bubble de coração', 'Cestinho recheado de gostosuras com bubble personalizada em formato de coração.', 80.00, '2024-12-03 03:56:00', 1, 2910);

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `usuario_pedido` varchar(255) NOT NULL,
  `usuario_contato` varchar(255) NOT NULL,
  `produtos` text NOT NULL,
  `preco_total` decimal(10,2) NOT NULL,
  `status` enum('pendente','processando','pago','produção','finalizado','cancelado','reembolsado','processando reembolso') NOT NULL DEFAULT 'pendente',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_prod` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `usuario_pedido`, `usuario_contato`, `produtos`, `preco_total`, `status`, `created_at`, `updated_at`, `id_prod`) VALUES
(462, 'pedro', 'pedro@gmail.com 111111111111111', 'Produto: Bubble simples (Descrição: Cestinho recheado de gostosuras com bubble personalizada Simples., Quantidade: 3) // Produto: Bubble de coração (Descrição: Cestinho recheado de gostosuras com bubble personalizada em formato de coração., Quantidade: 1)', 305.00, 'pendente', '2024-12-03 03:55:59', '2024-12-03 03:55:59', '2909 // 2910');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id_prod` int(11) NOT NULL,
  `nome_prod` varchar(100) NOT NULL,
  `desc_prod` text DEFAULT NULL,
  `img_prod` varchar(255) DEFAULT NULL,
  `tipo_prod` varchar(50) DEFAULT NULL,
  `preco_prod` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id_prod`, `nome_prod`, `desc_prod`, `img_prod`, `tipo_prod`, `preco_prod`) VALUES
(2908, 'Caneca Simples Personalizada', 'Caneca personalizada com imagem, acompanhado de chocolates.', '../src/uploads/caneca 1.jpg', 'caneca', 35.00),
(2909, 'Bubble simples', 'Cestinho recheado de gostosuras com bubble personalizada Simples.', '../src/uploads/balao dia das maes 2.jpg', 'dia_das_maes', 75.00),
(2910, 'Bubble de coração', 'Cestinho recheado de gostosuras com bubble personalizada em formato de coração.', '../src/uploads/balao dia das maes.jpg', 'dia_das_maes', 80.00),
(2911, 'Balão personalizado', 'bubble simples com nome personalizado.', '../src/uploads/balao aniversario.jpg', 'aniversario', 60.00),
(2915, 'Caneca Térmica Personalizada', 'Caneca térmica personalizada, recheada com chocolates.', '../src/uploads/caneca termica.jpg', 'caneca', 60.00),
(2916, 'Bubble com Rosa', 'Cestinho recheado de gostosuras, incluindo um garrafa de vinho, um queijo e um cacho de uvas.\r\nBubble personalizado, com uma rosa vermelha dentro.', '../src/uploads/bubble aniversaio c rosa.jpg', 'aniversario', 120.00),
(2917, 'Bubble com glitter', 'Cestinho recheado de gostosuras com bubble simples com glitter.', '../src/uploads/bubble aniversaio kitkat.jpg', 'aniversario', 75.00),
(2918, 'Bubble Aniversário | Com Glitter', 'Cestinho recheado de gostosuras com bubble personalizada simples com glitter.', '../src/uploads/bubble aniversaio.jpg', 'aniversario', 70.00),
(2919, 'Box de Luxo | Ursinho de Pelúcia', 'Box recheada com ferreiro roche, uma garrafa de vinho e um ursinho de pelúcia', '../src/uploads/box ursinho.jpg', 'box_luxo', 150.00),
(2920, 'Box Simples ', 'Box simples personalizada, com chocolates.', '../src/uploads/caixa bombom te amo.jpg', 'box_luxo', 80.00),
(2922, 'Bubble de Coração', 'caixa de chocolates com Bubble personalizada em formato de coração', '../src/uploads/balao aniversario vovo.jpg', 'aniversario', 65.00),
(2924, 'Caneca personalizada', 'Caneca personalizada com imagem, acompanhado de chocolates.', '../src/uploads/IMG_0921.PNG', 'caneca', 40.00),
(2925, 'Bubble Simples Personalizada', 'Bubble Simples feita com beixigas.', '../src/uploads/Cópia de IMG_0915.PNG', 'bubble_bubble', 60.00),
(2926, 'Box de Café da Manhã', 'Box recheada com itens de café da manhã.', '../src/uploads/IMG_0950.JPG', 'box_luxo', 100.00),
(2927, 'Bubble Box com Rosa | Sonho de Valsa', 'Cestinho recheado com chocolates e bubble personalizada, com uma rosa vermelha dentro.', '../src/uploads/bubble box1.jpg', 'bubble_box', 90.00),
(2928, 'Box de Luxo', 'Box recheada com ferreiro roche, uma garrafa de vinho e um cacho de uvas.', '../src/uploads/box de luxo.jpg', 'box_luxo', 120.00),
(2929, 'Bubble Acrílica com Rosa', 'Bubble Simples feito em acrílico, com uma rosa dentro.', '../src/uploads/IMG_0917.PNG', 'bubble_acrilico', 75.00),
(2930, 'Box Coração de Natal', 'Box de natal em formato de coração, recheado de chocolates , envolvidos em laço de cetim e bolinha de Natal.', '../src/uploads/natal caixinha coração.jpg', 'natal', 50.00),
(2931, 'Bubble Box com Rosa | Ouro Branco', 'Cestinho recheado com chocolates e bubble personalizada, com uma rosa vermelha dentro.', '../src/uploads/bubble box.jpg', 'bubble_box', 90.00),
(2932, 'Box de Nutella', 'Box recheada com nutella, uma garrafa de vinho e chocolates.', '../src/uploads/boz nutella.jpg', 'box_luxo', 95.00),
(2933, 'Bubble Ursinho de Pelúcia', 'Bubble simples personalizada com uma pelúcia dentro.', '../src/uploads/bubble ursinho.jpg', 'bubble_bubble', 110.00),
(2934, 'Bubble de natal', 'Bubble Box Simples personalizada de natal, recheada com chocolates ouro branco.', '../src/uploads/bubble natal.jpg', 'natal', 85.00);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) NOT NULL,
  `tipo_usuario` enum('comum','administrador') DEFAULT 'comum',
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `tipo_usuario`, `nome`, `telefone`, `email`, `senha`, `token`) VALUES
(2147483649, 'administrador', 'pedro', '111111111111111', 'pedro@gmail.com', '$2y$10$JFuD3B05IhNzxi0W5AAeB.QgrfBElkwECDVEZs.Qg0hT2f/hmTpxC', NULL),
(2147483651, 'comum', 'emy', '111111111111111', 'emily@gmail.com', '$2y$10$oTrZ9MuZRY2A7iGj659VKuf/F746.nWHsnt35kzREYmtwAYWbspvy', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_prod`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=463;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2935;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483652;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
