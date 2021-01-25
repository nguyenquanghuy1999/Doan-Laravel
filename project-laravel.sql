-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 21, 2020 lúc 05:33 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project-laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `phonenumber`, `address`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Keyon Borer', '304-544-7739 x49218', '50121 Mayer Ramp\nSouth Preciousshire, VT 29281', 'kaden.bechtelar@example.org', NULL, NULL),
(2, 'Mr. Cesar Schaefer Jr.', '789.847.9178', '8294 Bergnaum Wells\nSwiftview, CO 34971', 'terry.abbie@example.net', NULL, NULL),
(3, 'Kade Jacobi', '1-329-203-7422 x8161', '925 Lockman Junction\nLake Albinshire, FL 23338-7864', 'ismael.sauer@example.com', NULL, NULL),
(4, 'Yvette Monahan', '1-849-361-3694', '447 Ramon Wall\nSouth Rickie, OH 44990-0736', 'ibalistreri@example.com', NULL, NULL),
(5, 'Beulah Kozey', '(962) 575-8251 x74931', '720 Wehner Turnpike Apt. 051\nGarfieldside, DE 80248-1725', 'kunze.nicola@example.org', NULL, NULL),
(6, 'Giovanna Ernser', '1-884-631-4726', '4283 Waelchi Shoal\nWest Raquel, CT 49294-5050', 'jbarrows@example.com', NULL, NULL),
(7, 'Carmela Kreiger', '(809) 607-9106 x1284', '31696 Eliseo Green\nMetzside, NV 62020-7373', 'hilario.thiel@example.net', NULL, NULL),
(8, 'Dr. Horacio Feest', '391.864.8754 x787', '7007 Delores Forges\nJaylenberg, MT 87381', 'hodkiewicz.madyson@example.net', NULL, NULL),
(9, 'Delfina Kris', '1-540-578-5844', '4739 Walsh Island\nAliafurt, RI 24955', 'terry.hudson@example.org', NULL, NULL),
(10, 'Dr. Alivia Labadie', '610-403-5826 x09572', '8829 Clair Springs\nNettieside, IA 71268', 'dharris@example.net', NULL, NULL),
(11, 'Dr. Darien Sipes', '1-553-859-3863', '80965 Mariano Ferry\nEast Linnie, AZ 01258-9313', 'rice.madelynn@example.com', NULL, NULL),
(12, 'Shannon Heaney Sr.', '389-230-9350 x822', '37450 Stella Turnpike Apt. 717\nFraneckiview, FL 08381', 'mkihn@example.com', NULL, NULL),
(13, 'Jamel O\'Connell', '1-892-817-1688 x61800', '1599 Leslie Islands\nNorth Meagan, WA 73643-4815', 'harber.kasey@example.com', NULL, NULL),
(14, 'Jeffrey Conn', '(351) 799-5775', '44778 Breana Route\nSporerbury, RI 43265-2495', 'toy.edgar@example.com', NULL, NULL),
(49, 'Văn Quân', '0935167896', '70 nguyễn Bính', 'huyquang1013@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_05_30_095326_create_users_table', 1),
(2, '2020_05_30_095729_create_products_table', 1),
(3, '2020_05_30_095925_create_orders_table', 1),
(4, '2020_05_30_100103_create_order_details_table', 1),
(5, '2020_06_06_093714_create_customers_table', 1),
(6, '2020_06_06_103722_create_types_table', 1),
(7, '2020_07_14_094018_add_foreign_key_to_products', 1),
(8, '2020_07_14_094147_add_foreign_key_to_orders', 1),
(9, '2020_07_14_094239_add_foreign_key_to_order_details', 1),
(10, '2020_07_14_094636_add_role_to_users', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `order_date` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double NOT NULL DEFAULT 0,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `address`, `total`, `note`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-06-29', '5778 Reinger Spurs', 1000000, 'day la note', 6, NULL, NULL),
(2, 13, '2020-07-04', '5972 Senger Shoal Suite 914', 1000000, 'day la note', 6, NULL, NULL),
(3, 14, '1991-08-08', '861 Marvin Bypass', 1000000, 'day la note', 12, NULL, NULL),
(4, 2, '1990-11-28', '82053 Leannon Stream Suite 110', 1000000, 'day la note', 5, NULL, NULL),
(5, 11, '1988-04-18', '3022 Wintheiser Extensions Apt. 386', 1000000, 'day la note', 9, NULL, NULL),
(6, 14, '2004-12-13', '84714 Lisette Union', 1000000, 'day la note', 3, NULL, NULL),
(7, 13, '1974-01-19', '690 Berniece Radial', 1000000, 'day la note', 5, NULL, NULL),
(8, 6, '1989-09-05', '44239 Orville Streets Suite 365', 1000000, 'day la note', 13, NULL, NULL),
(9, 2, '1983-10-16', '42036 Johns Lake Suite 012', 1000000, 'day la note', 14, NULL, NULL),
(11, 5, '1982-03-08', '5412 Ernser Island Suite 060', 1000000, 'day la note', 8, NULL, NULL),
(12, 10, '2013-05-15', '11632 Kulas Hills Apt. 019', 1000000, 'day la note', 5, NULL, NULL),
(13, 13, '1978-12-12', '1835 Candice Turnpike Suite 101', 1000000, 'day la note', 2, NULL, NULL),
(14, 4, '1980-08-16', '42023 Kuhlman Dale Apt. 184', 1000000, 'day la note', 6, NULL, NULL),
(29, 49, '2020-07-21', '70 nguyễn Bính', 150000000, 'Hàng hóa', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `total` double NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `name`, `price`, `quantity`, `total`, `order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Mae Ferry', 100, 1, 1000000, 1, 12, NULL, NULL),
(2, 'Sandrine Price', 100, 1, 1000000, 2, 3, NULL, NULL),
(3, 'Elenor Runolfsdottir', 100, 1, 1000000, 12, 15, NULL, NULL),
(4, 'Jason Smitham', 100, 1, 1000000, 4, 7, NULL, NULL),
(5, 'Stuart Lang', 100, 1, 1000000, 8, 13, NULL, NULL),
(6, 'Mr. Chester Stiedemann', 100, 1, 1000000, 1, 4, NULL, NULL),
(7, 'Prof. Eliseo Murray PhD', 100, 1, 1000000, 8, 5, NULL, NULL),
(8, 'Ms. Annetta Koepp DDS', 100, 1, 1000000, 13, 7, NULL, NULL),
(9, 'Adrian Hammes', 100, 1, 1000000, 4, 12, NULL, NULL),
(10, 'Rogers Herman DVM', 100, 1, 1000000, 6, 14, NULL, NULL),
(11, 'Kamron Stracke', 100, 1, 1000000, 9, 5, NULL, NULL),
(12, 'Jeramy Wehner', 100, 1, 1000000, 9, 15, NULL, NULL),
(13, 'Micaela Pollich', 100, 1, 1000000, 5, 9, NULL, NULL),
(14, 'Jacynthe Hintz', 100, 1, 1000000, 9, 15, NULL, NULL),
(15, 'Brown O\'Reilly', 100, 1, 1000000, 12, 14, NULL, NULL),
(19, NULL, NULL, 1, 1500000, 29, 32, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `desc`, `soluong`, `price`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'Macbook Air 2018', '1594353261_9982904_e144dcb960658ae7f39b10d08076c15a.jpg', 'Chiếc máy tính xách tay mạnh mẽ nhất, phá vỡ mọi giới hạn đã xuất hiện. MacBook Pro 16 Touch Bar với cấu hình siêu mạnh, bàn phím Magic mới và một màn hình lớn sẽ mang đến cho bạn sản phẩm “Pro” chưa từng thấy.Retina display with True Tone technology : lần đầu tiên được đưa lên MacBook , giúp người dùng có thể thoải mái làm việc trong điều kiện ánh sáng khác nhau. Giúp mắt chúng ta cảm thấy dễ chịu và hiển thị cũng chính xác hơn. ( cả màn hình Touchbar cũng hỗ trợ True Tone )\r\nHigh-fidelity audio : Âm thanh của MacBook 2018 mới sẽ trung thực hơn, dải âm thanh rộng hơn với nhiều dải trầm chắc chắn sẽ cho âm bass lên tối đa.\r\n25% more colors than sRGB : thật sự dải màu cũ đã quá đẹp rồi. rất mong sớm được trên tay và trải nghiệm thực tế .Macbook điểm nổi với màn hình của máy tính Apple được đánh giá với chất lượng hiển thị xuất sắc nhất chính vì vậy mà những ai là dân thiết kế đồ họa đều sở hữu cho mình một chiếc Macbook Pro hoặc iMac. Và thời gian gần đây, khi Macbook tung ra các sản phẩm với màn hình Retina thì sự tuyệt vời trong chất lượng hình ảnh hiển thị.\r\n\r\n', '77', 18000000, 1, NULL, NULL),
(2, 'Macbook Pro 2020', 'mb1.jpg', 'Chiếc máy tính xách tay mạnh mẽ nhất, phá vỡ mọi giới hạn đã xuất hiện. MacBook Pro 16 Touch Bar với cấu hình siêu mạnh, bàn phím Magic mới và một màn hình lớn sẽ mang đến cho bạn sản phẩm “Pro” chưa từng thấy.Retina display with True Tone technology : lần đầu tiên được đưa lên MacBook , giúp người dùng có thể thoải mái làm việc trong điều kiện ánh sáng khác nhau. Giúp mắt chúng ta cảm thấy dễ chịu và hiển thị cũng chính xác hơn. ( cả màn hình Touchbar cũng hỗ trợ True Tone )\r\nHigh-fidelity audio : Âm thanh của MacBook 2018 mới sẽ trung thực hơn, dải âm thanh rộng hơn với nhiều dải trầm chắc chắn sẽ cho âm bass lên tối đa.\r\n25% more colors than sRGB : thật sự dải màu cũ đã quá đẹp rồi. rất mong sớm được trên tay và trải nghiệm thực tế .Macbook điểm nổi với màn hình của máy tính Apple được đánh giá với chất lượng hiển thị xuất sắc nhất chính vì vậy mà những ai là dân thiết kế đồ họa đều sở hữu cho mình một chiếc Macbook Pro hoặc iMac. Và thời gian gần đây, khi Macbook tung ra các sản phẩm với màn hình Retina thì sự tuyệt vời trong chất lượng hình ảnh hiển thị.', '77', 28341858, 1, NULL, NULL),
(3, 'Macbook Air 2017', 'mb2.jpg', 'Chiếc máy tính xách tay mạnh mẽ nhất, phá vỡ mọi giới hạn đã xuất hiện. MacBook Pro 16 Touch Bar với cấu hình siêu mạnh, bàn phím Magic mới và một màn hình lớn sẽ mang đến cho bạn sản phẩm “Pro” chưa từng thấy.Retina display with True Tone technology : lần đầu tiên được đưa lên MacBook , giúp người dùng có thể thoải mái làm việc trong điều kiện ánh sáng khác nhau. Giúp mắt chúng ta cảm thấy dễ chịu và hiển thị cũng chính xác hơn. ( cả màn hình Touchbar cũng hỗ trợ True Tone )\r\nHigh-fidelity audio : Âm thanh của MacBook 2018 mới sẽ trung thực hơn, dải âm thanh rộng hơn với nhiều dải trầm chắc chắn sẽ cho âm bass lên tối đa.\r\n25% more colors than sRGB : thật sự dải màu cũ đã quá đẹp rồi. rất mong sớm được trên tay và trải nghiệm thực tế .Macbook điểm nổi với màn hình của máy tính Apple được đánh giá với chất lượng hiển thị xuất sắc nhất chính vì vậy mà những ai là dân thiết kế đồ họa đều sở hữu cho mình một chiếc Macbook Pro hoặc iMac. Và thời gian gần đây, khi Macbook tung ra các sản phẩm với màn hình Retina thì sự tuyệt vời trong chất lượng hình ảnh hiển thị.', '15', 13361305, 1, NULL, NULL),
(4, 'Iphone Xs Max (Godl)', 'ip5.jpg', 'Điện thoại iPhone Xs Max sở hữu lối thiết kế vô cùng đẹp mắt với những đường cong mềm mại được thừa hưởng từ chiếc iPhone đời trước đó. iPhone Xs Max cấu hình được trang bị con chip A12 Bionic. Với CPU 6 nhân, bao gồm 2 nhân hiệu năng cao và 4 nhân tiết kiệm điện và 2 nhân hiệu năng cao của A12 Bionic nhanh hơn 15% so với A11 Bionic (của bộ ba điện thoại Apple iPhone 8, 8+ và X) trong khi tiêu tốn ít hơn 40% năng lương tiêu thụ, trong khi đó 4 nhân tiết kiệm điện tiết kiệm hơn 50%.', '52', 40859280, 2, NULL, NULL),
(5, 'Iphone 11 Pro Max (Black)', 'ip.png', 'Điện thoại iPhone Xs Max sở hữu lối thiết kế vô cùng đẹp mắt với những đường cong mềm mại được thừa hưởng từ chiếc iPhone đời trước đó. iPhone Xs Max cấu hình được trang bị con chip A12 Bionic. Với CPU 6 nhân, bao gồm 2 nhân hiệu năng cao và 4 nhân tiết kiệm điện và 2 nhân hiệu năng cao của A12 Bionic nhanh hơn 15% so với A11 Bionic (của bộ ba điện thoại Apple iPhone 8, 8+ và X) trong khi tiêu tốn ít hơn 40% năng lương tiêu thụ, trong khi đó 4 nhân tiết kiệm điện tiết kiệm hơn 50%.', '55', 63544000, 2, NULL, NULL),
(6, 'Iphone Xs (White)', 'ip4.png', 'Điện thoại iPhone Xs Max sở hữu lối thiết kế vô cùng đẹp mắt với những đường cong mềm mại được thừa hưởng từ chiếc iPhone đời trước đó. iPhone Xs Max cấu hình được trang bị con chip A12 Bionic. Với CPU 6 nhân, bao gồm 2 nhân hiệu năng cao và 4 nhân tiết kiệm điện và 2 nhân hiệu năng cao của A12 Bionic nhanh hơn 15% so với A11 Bionic (của bộ ba điện thoại Apple iPhone 8, 8+ và X) trong khi tiêu tốn ít hơn 40% năng lương tiêu thụ, trong khi đó 4 nhân tiết kiệm điện tiết kiệm hơn 50%.', '83', 8803883, 2, NULL, NULL),
(7, 'IPad Gen 7', 'ipad3.png', 'Màn hình lớn tuyệt đẹp, sức mạnh vượt trội, kết nối mạng 4G LTE siêu tốc và có thể làm việc chuyên nghiệp nhờ những phụ kiện như bàn phím rời hay bút cảm ứng, iPad Pro 12.9 2020 Wi-Fi 4G 512GB xứng đáng với vị trí trợ thủ đắc lực của bạn.', '21', 23691512, 3, NULL, NULL),
(8, 'IPad Pro 2020', 'ipad4.jpg', 'Màn hình lớn tuyệt đẹp, sức mạnh vượt trội, kết nối mạng 4G LTE siêu tốc và có thể làm việc chuyên nghiệp nhờ những phụ kiện như bàn phím rời hay bút cảm ứng, iPad Pro 12.9 2020 Wi-Fi 4G 512GB xứng đáng với vị trí trợ thủ đắc lực của bạn.', '12', 84039507, 3, NULL, NULL),
(9, 'IPad Gen 9 ', 'ipad9.jpg', 'Màn hình lớn tuyệt đẹp, sức mạnh vượt trội, kết nối mạng 4G LTE siêu tốc và có thể làm việc chuyên nghiệp nhờ những phụ kiện như bàn phím rời hay bút cảm ứng, iPad Pro 12.9 2020 Wi-Fi 4G 512GB xứng đáng với vị trí trợ thủ đắc lực của bạn.', '99', 69984134, 3, NULL, NULL),
(10, 'Apple Watch S5 GPS', 'watch1.jpg', 'Chiếc đồng hồ cao cấp, lịch lãm Apple Watch Series 5 Cellular 40mm viền thép dây Milanese xứng đáng là biểu tượng của sự kết hợp hoàn hảo giữa công nghệ và thời trang, mang đến cho bạn trải nghiệm thông minh trên một sản phẩm đẳng cấp.', '18', 37719995, 4, NULL, NULL),
(11, 'Apple Watch S5 44mm', 'watch2.jpg', 'Chiếc đồng hồ cao cấp, lịch lãm Apple Watch Series 5 Cellular 40mm viền thép dây Milanese xứng đáng là biểu tượng của sự kết hợp hoàn hảo giữa công nghệ và thời trang, mang đến cho bạn trải nghiệm thông minh trên một sản phẩm đẳng cấp.', '10', 1800000, 4, NULL, NULL),
(12, 'Macbook Pro 2019', 'mb5.jpg', 'Chiếc máy tính xách tay mạnh mẽ nhất, phá vỡ mọi giới hạn đã xuất hiện. MacBook Pro 16 Touch Bar với cấu hình siêu mạnh, bàn phím Magic mới và một màn hình lớn sẽ mang đến cho bạn sản phẩm “Pro” chưa từng thấy.Retina display with True Tone technology : lần đầu tiên được đưa lên MacBook , giúp người dùng có thể thoải mái làm việc trong điều kiện ánh sáng khác nhau. Giúp mắt chúng ta cảm thấy dễ chịu và hiển thị cũng chính xác hơn. ( cả màn hình Touchbar cũng hỗ trợ True Tone )\r\nHigh-fidelity audio : Âm thanh của MacBook 2018 mới sẽ trung thực hơn, dải âm thanh rộng hơn với nhiều dải trầm chắc chắn sẽ cho âm bass lên tối đa.\r\n25% more colors than sRGB : thật sự dải màu cũ đã quá đẹp rồi. rất mong sớm được trên tay và trải nghiệm thực tế .Macbook điểm nổi với màn hình của máy tính Apple được đánh giá với chất lượng hiển thị xuất sắc nhất chính vì vậy mà những ai là dân thiết kế đồ họa đều sở hữu cho mình một chiếc Macbook Pro hoặc iMac. Và thời gian gần đây, khi Macbook tung ra các sản phẩm với màn hình Retina thì sự tuyệt vời trong chất lượng hình ảnh hiển thị.', '8', 1800000, 1, NULL, NULL),
(13, 'Macbook Pro 2018 ', 'mb7.jpg', 'Chiếc máy tính xách tay mạnh mẽ nhất, phá vỡ mọi giới hạn đã xuất hiện. MacBook Pro 16 Touch Bar với cấu hình siêu mạnh, bàn phím Magic mới và một màn hình lớn sẽ mang đến cho bạn sản phẩm “Pro” chưa từng thấy.Retina display with True Tone technology : lần đầu tiên được đưa lên MacBook , giúp người dùng có thể thoải mái làm việc trong điều kiện ánh sáng khác nhau. Giúp mắt chúng ta cảm thấy dễ chịu và hiển thị cũng chính xác hơn. ( cả màn hình Touchbar cũng hỗ trợ True Tone )\r\nHigh-fidelity audio : Âm thanh của MacBook 2018 mới sẽ trung thực hơn, dải âm thanh rộng hơn với nhiều dải trầm chắc chắn sẽ cho âm bass lên tối đa.\r\n25% more colors than sRGB : thật sự dải màu cũ đã quá đẹp rồi. rất mong sớm được trên tay và trải nghiệm thực tế .Macbook điểm nổi với màn hình của máy tính Apple được đánh giá với chất lượng hiển thị xuất sắc nhất chính vì vậy mà những ai là dân thiết kế đồ họa đều sở hữu cho mình một chiếc Macbook Pro hoặc iMac. Và thời gian gần đây, khi Macbook tung ra các sản phẩm với màn hình Retina thì sự tuyệt vời trong chất lượng hình ảnh hiển thị.', '9', 1700000, 1, NULL, NULL),
(14, 'Macbook Air 2015', 'mb1.jpg', 'Chiếc máy tính xách tay mạnh mẽ nhất, phá vỡ mọi giới hạn đã xuất hiện. MacBook Pro 16 Touch Bar với cấu hình siêu mạnh, bàn phím Magic mới và một màn hình lớn sẽ mang đến cho bạn sản phẩm “Pro” chưa từng thấy.Retina display with True Tone technology : lần đầu tiên được đưa lên MacBook , giúp người dùng có thể thoải mái làm việc trong điều kiện ánh sáng khác nhau. Giúp mắt chúng ta cảm thấy dễ chịu và hiển thị cũng chính xác hơn. ( cả màn hình Touchbar cũng hỗ trợ True Tone )\r\nHigh-fidelity audio : Âm thanh của MacBook 2018 mới sẽ trung thực hơn, dải âm thanh rộng hơn với nhiều dải trầm chắc chắn sẽ cho âm bass lên tối đa.\r\n25% more colors than sRGB : thật sự dải màu cũ đã quá đẹp rồi. rất mong sớm được trên tay và trải nghiệm thực tế .Macbook điểm nổi với màn hình của máy tính Apple được đánh giá với chất lượng hiển thị xuất sắc nhất chính vì vậy mà những ai là dân thiết kế đồ họa đều sở hữu cho mình một chiếc Macbook Pro hoặc iMac. Và thời gian gần đây, khi Macbook tung ra các sản phẩm với màn hình Retina thì sự tuyệt vời trong chất lượng hình ảnh hiển thị.\r\n\r\n', '7', 1500000, 1, NULL, NULL),
(15, 'Macbook Pro 2015', 'mb12.png', 'Chiếc máy tính xách tay mạnh mẽ nhất, phá vỡ mọi giới hạn đã xuất hiện. MacBook Pro 16 Touch Bar với cấu hình siêu mạnh, bàn phím Magic mới và một màn hình lớn sẽ mang đến cho bạn sản phẩm “Pro” chưa từng thấy.Retina display with True Tone technology : lần đầu tiên được đưa lên MacBook , giúp người dùng có thể thoải mái làm việc trong điều kiện ánh sáng khác nhau. Giúp mắt chúng ta cảm thấy dễ chịu và hiển thị cũng chính xác hơn. ( cả màn hình Touchbar cũng hỗ trợ True Tone )\r\nHigh-fidelity audio : Âm thanh của MacBook 2018 mới sẽ trung thực hơn, dải âm thanh rộng hơn với nhiều dải trầm chắc chắn sẽ cho âm bass lên tối đa.\r\n25% more colors than sRGB : thật sự dải màu cũ đã quá đẹp rồi. rất mong sớm được trên tay và trải nghiệm thực tế .Macbook điểm nổi với màn hình của máy tính Apple được đánh giá với chất lượng hiển thị xuất sắc nhất chính vì vậy mà những ai là dân thiết kế đồ họa đều sở hữu cho mình một chiếc Macbook Pro hoặc iMac. Và thời gian gần đây, khi Macbook tung ra các sản phẩm với màn hình Retina thì sự tuyệt vời trong chất lượng hình ảnh hiển thị.', '9', 1800000, 1, NULL, NULL),
(16, 'Macbook Air 2018', 'mb.jpg', 'Chiếc máy tính xách tay mạnh mẽ nhất, phá vỡ mọi giới hạn đã xuất hiện. MacBook Pro 16 Touch Bar với cấu hình siêu mạnh, bàn phím Magic mới và một màn hình lớn sẽ mang đến cho bạn sản phẩm “Pro” chưa từng thấy.Retina display with True Tone technology : lần đầu tiên được đưa lên MacBook , giúp người dùng có thể thoải mái làm việc trong điều kiện ánh sáng khác nhau. Giúp mắt chúng ta cảm thấy dễ chịu và hiển thị cũng chính xác hơn. ( cả màn hình Touchbar cũng hỗ trợ True Tone )\r\nHigh-fidelity audio : Âm thanh của MacBook 2018 mới sẽ trung thực hơn, dải âm thanh rộng hơn với nhiều dải trầm chắc chắn sẽ cho âm bass lên tối đa.\r\n25% more colors than sRGB : thật sự dải màu cũ đã quá đẹp rồi. rất mong sớm được trên tay và trải nghiệm thực tế .Macbook điểm nổi với màn hình của máy tính Apple được đánh giá với chất lượng hiển thị xuất sắc nhất chính vì vậy mà những ai là dân thiết kế đồ họa đều sở hữu cho mình một chiếc Macbook Pro hoặc iMac. Và thời gian gần đây, khi Macbook tung ra các sản phẩm với màn hình Retina thì sự tuyệt vời trong chất lượng hình ảnh hiển thị.', '7', 1600000, 1, NULL, NULL),
(17, 'Iphone 11 ', 'ip6.jpg', 'Điện thoại iPhone Xs Max sở hữu lối thiết kế vô cùng đẹp mắt với những đường cong mềm mại được thừa hưởng từ chiếc iPhone đời trước đó. iPhone Xs Max cấu hình được trang bị con chip A12 Bionic. Với CPU 6 nhân, bao gồm 2 nhân hiệu năng cao và 4 nhân tiết kiệm điện và 2 nhân hiệu năng cao của A12 Bionic nhanh hơn 15% so với A11 Bionic (của bộ ba điện thoại Apple iPhone 8, 8+ và X) trong khi tiêu tốn ít hơn 40% năng lương tiêu thụ, trong khi đó 4 nhân tiết kiệm điện tiết kiệm hơn 50%.', '4', 1000000, 2, NULL, NULL),
(18, 'Iphone Xs max', 'ip7.png', 'Điện thoại iPhone Xs Max sở hữu lối thiết kế vô cùng đẹp mắt với những đường cong mềm mại được thừa hưởng từ chiếc iPhone đời trước đó. iPhone Xs Max cấu hình được trang bị con chip A12 Bionic. Với CPU 6 nhân, bao gồm 2 nhân hiệu năng cao và 4 nhân tiết kiệm điện và 2 nhân hiệu năng cao của A12 Bionic nhanh hơn 15% so với A11 Bionic (của bộ ba điện thoại Apple iPhone 8, 8+ và X) trong khi tiêu tốn ít hơn 40% năng lương tiêu thụ, trong khi đó 4 nhân tiết kiệm điện tiết kiệm hơn 50%.', '2', 1000000, 2, NULL, NULL),
(19, 'Iphone 8 Plus', 'ip8.jpg', 'Điện thoại iPhone Xs Max sở hữu lối thiết kế vô cùng đẹp mắt với những đường cong mềm mại được thừa hưởng từ chiếc iPhone đời trước đó. iPhone Xs Max cấu hình được trang bị con chip A12 Bionic. Với CPU 6 nhân, bao gồm 2 nhân hiệu năng cao và 4 nhân tiết kiệm điện và 2 nhân hiệu năng cao của A12 Bionic nhanh hơn 15% so với A11 Bionic (của bộ ba điện thoại Apple iPhone 8, 8+ và X) trong khi tiêu tốn ít hơn 40% năng lương tiêu thụ, trong khi đó 4 nhân tiết kiệm điện tiết kiệm hơn 50%.', '2', 7000000, 2, NULL, NULL),
(20, 'Iphone 7 Plus', 'ip9.jpg', 'Điện thoại iPhone Xs Max sở hữu lối thiết kế vô cùng đẹp mắt với những đường cong mềm mại được thừa hưởng từ chiếc iPhone đời trước đó. iPhone Xs Max cấu hình được trang bị con chip A12 Bionic. Với CPU 6 nhân, bao gồm 2 nhân hiệu năng cao và 4 nhân tiết kiệm điện và 2 nhân hiệu năng cao của A12 Bionic nhanh hơn 15% so với A11 Bionic (của bộ ba điện thoại Apple iPhone 8, 8+ và X) trong khi tiêu tốn ít hơn 40% năng lương tiêu thụ, trong khi đó 4 nhân tiết kiệm điện tiết kiệm hơn 50%.', '6', 6000000, 2, NULL, NULL),
(21, 'Iphone 8', 'ip12.jpg', 'Điện thoại iPhone Xs Max sở hữu lối thiết kế vô cùng đẹp mắt với những đường cong mềm mại được thừa hưởng từ chiếc iPhone đời trước đó. iPhone Xs Max cấu hình được trang bị con chip A12 Bionic. Với CPU 6 nhân, bao gồm 2 nhân hiệu năng cao và 4 nhân tiết kiệm điện và 2 nhân hiệu năng cao của A12 Bionic nhanh hơn 15% so với A11 Bionic (của bộ ba điện thoại Apple iPhone 8, 8+ và X) trong khi tiêu tốn ít hơn 40% năng lương tiêu thụ, trong khi đó 4 nhân tiết kiệm điện tiết kiệm hơn 50%.', '8', 5000000, 2, NULL, NULL),
(22, 'Iphone 6 Plus', 'ip13.jpg', 'Điện thoại iPhone Xs Max sở hữu lối thiết kế vô cùng đẹp mắt với những đường cong mềm mại được thừa hưởng từ chiếc iPhone đời trước đó. iPhone Xs Max cấu hình được trang bị con chip A12 Bionic. Với CPU 6 nhân, bao gồm 2 nhân hiệu năng cao và 4 nhân tiết kiệm điện và 2 nhân hiệu năng cao của A12 Bionic nhanh hơn 15% so với A11 Bionic (của bộ ba điện thoại Apple iPhone 8, 8+ và X) trong khi tiêu tốn ít hơn 40% năng lương tiêu thụ, trong khi đó 4 nhân tiết kiệm điện tiết kiệm hơn 50%.', '9', 7000000, 2, NULL, NULL),
(23, 'IPad Pro 2020', 'ipad2.jpg', 'Màn hình lớn tuyệt đẹp, sức mạnh vượt trội, kết nối mạng 4G LTE siêu tốc và có thể làm việc chuyên nghiệp nhờ những phụ kiện như bàn phím rời hay bút cảm ứng, iPad Pro 12.9 2020 Wi-Fi 4G 512GB xứng đáng với vị trí trợ thủ đắc lực của bạn.', '10', 1200000, 3, NULL, NULL),
(24, 'IPad Gen 7', 'ipad1.png', 'Màn hình lớn tuyệt đẹp, sức mạnh vượt trội, kết nối mạng 4G LTE siêu tốc và có thể làm việc chuyên nghiệp nhờ những phụ kiện như bàn phím rời hay bút cảm ứng, iPad Pro 12.9 2020 Wi-Fi 4G 512GB xứng đáng với vị trí trợ thủ đắc lực của bạn.', '2', 1000000, 3, NULL, NULL),
(25, 'IPad Gen 10', 'ipad.png', 'Màn hình lớn tuyệt đẹp, sức mạnh vượt trội, kết nối mạng 4G LTE siêu tốc và có thể làm việc chuyên nghiệp nhờ những phụ kiện như bàn phím rời hay bút cảm ứng, iPad Pro 12.9 2020 Wi-Fi 4G 512GB xứng đáng với vị trí trợ thủ đắc lực của bạn.', '2', 1200000, 3, NULL, NULL),
(26, 'IPad Pro 2019', 'ipad10.jpg', 'Màn hình lớn tuyệt đẹp, sức mạnh vượt trội, kết nối mạng 4G LTE siêu tốc và có thể làm việc chuyên nghiệp nhờ những phụ kiện như bàn phím rời hay bút cảm ứng, iPad Pro 12.9 2020 Wi-Fi 4G 512GB xứng đáng với vị trí trợ thủ đắc lực của bạn.', '2', 1500000, 3, NULL, NULL),
(27, 'Apple Watch S5 40mm', 'watch4.png', 'Chiếc đồng hồ cao cấp, lịch lãm Apple Watch Series 5 Cellular 40mm viền thép dây Milanese xứng đáng là biểu tượng của sự kết hợp hoàn hảo giữa công nghệ và thời trang, mang đến cho bạn trải nghiệm thông minh trên một sản phẩm đẳng cấp.', '2', 1500000, 4, NULL, NULL),
(28, 'Apple Watch S4 55mm', 'watch5.jpg', 'Chiếc đồng hồ cao cấp, lịch lãm Apple Watch Series 5 Cellular 40mm viền thép dây Milanese xứng đáng là biểu tượng của sự kết hợp hoàn hảo giữa công nghệ và thời trang, mang đến cho bạn trải nghiệm thông minh trên một sản phẩm đẳng cấp.', '2', 1600000, 4, NULL, NULL),
(29, 'Apple Watch Series 5', 'watch7.png', 'Chiếc đồng hồ cao cấp, lịch lãm Apple Watch Series 5 Cellular 40mm viền thép dây Milanese xứng đáng là biểu tượng của sự kết hợp hoàn hảo giữa công nghệ và thời trang, mang đến cho bạn trải nghiệm thông minh trên một sản phẩm đẳng cấp.', '2', 1400000, 4, NULL, NULL),
(30, 'Apple Watch Series 4 GPS', 'watch8.png', 'Chiếc đồng hồ cao cấp, lịch lãm Apple Watch Series 5 Cellular 40mm viền thép dây Milanese xứng đáng là biểu tượng của sự kết hợp hoàn hảo giữa công nghệ và thời trang, mang đến cho bạn trải nghiệm thông minh trên một sản phẩm đẳng cấp.', '2', 1500000, 4, NULL, NULL),
(31, 'Apple Watch S5 44mm', 'watch9.jpg', 'Chiếc đồng hồ cao cấp, lịch lãm Apple Watch Series 5 Cellular 40mm viền thép dây Milanese xứng đáng là biểu tượng của sự kết hợp hoàn hảo giữa công nghệ và thời trang, mang đến cho bạn trải nghiệm thông minh trên một sản phẩm đẳng cấp.', '2', 1400000, 4, NULL, NULL),
(32, 'Apple Watch S5 55mm', 'watch15.jpg', 'Chiếc đồng hồ cao cấp, lịch lãm Apple Watch Series 5 Cellular 40mm viền thép dây Milanese xứng đáng là biểu tượng của sự kết hợp hoàn hảo giữa công nghệ và thời trang, mang đến cho bạn trải nghiệm thông minh trên một sản phẩm đẳng cấp.', '2', 1500000, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Macbook', NULL, NULL),
(2, 'Iphone', NULL, NULL),
(3, 'Ipad', NULL, NULL),
(4, 'Watch', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'guest'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Paula Hoppe', 'austyn.leannon@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'guest'),
(2, 'Candido Bartell', 'wyatt.gibson@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'guest'),
(3, 'Prof. Freeman Considine', 'nitzsche.abbie@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'guest'),
(4, 'Sid Schimmel', 'catalina49@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'guest'),
(5, 'Mr. Isaias Bernier', 'orrin87@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'guest'),
(6, 'Ms. Joy Harris Sr.', 'lehner.jamey@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'guest'),
(7, 'Leonardo Ullrich I', 'joan61@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'guest'),
(8, 'Rebeka Gerlach', 'mills.eulah@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'guest'),
(9, 'Frederik Senger', 'labadie.minnie@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'guest'),
(10, 'Izabella Rau', 'ruthie.boyle@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'guest'),
(11, 'Garry Nader IV', 'layne.baumbach@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'guest'),
(12, 'Ruthie Kunze', 'daniella.stokes@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'guest'),
(13, 'Mrs. Marjory Shanahan', 'mmayert@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'guest'),
(14, 'Zoie Okuneva', 'olehner@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'guest'),
(16, 'Quang Huy', 'huyquang1013@gmail.com', NULL, '$2y$10$Y5p5VSZoBwpgNsIoyr7F2.60S5rHoPNO2RDMkN5hd9dpdBF/vI9zm', NULL, '2020-07-20 07:35:00', '2020-07-20 07:35:00', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_type_id_foreign` (`type_id`);

--
-- Chỉ mục cho bảng `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
