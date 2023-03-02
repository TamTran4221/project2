-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 24, 2023 lúc 12:37 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `monasofa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kệ tivi', 1, '2023-02-23 07:38:12', '2023-02-23 07:38:12'),
(2, 'Ghế sofa', 1, '2023-02-23 07:38:25', '2023-02-23 07:38:25'),
(3, 'bàn ghế', 1, '2023-02-23 07:38:35', '2023-02-23 07:38:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_18_140920_create_categories_table', 1),
(6, '2023_02_19_050130_create_products_table', 1),
(7, '2023_02_19_051456_create_orders_table', 1),
(8, '2023_02_19_061624_create_order_details_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `tax` decimal(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sub_total` decimal(8,2) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'ghế sofa f183', 134530.00, 'Thiết kế từ dòng sản phẩm SF02 mang nét trẻ trung, đẳng cấp thể hiện phong cách, quyền lực của chủ nhân.\r\nChất liệu làm nên bộ ghế từ da cao cấp, ốp gỗ bên ngoài tinh tế\r\nBộ ghế gồm có 01 băng dài bề thế, 02 ghế đơn tiện nghi dùng đón tiếp khách hàng, đối tác.\r\nCác đường may trang trí nổi của thân và đệm ghế tạo sự trang nhã, quý phái', 'sofa1.jpg', 2, '2023-02-23 07:46:18', '2023-02-23 07:46:18'),
(2, 'ghế sofa sh109', 47640.00, 'Bộ ghế sofa SF32 mang kiểu dáng hiện đại, trẻ trung, tạo điểm nhấn nổi bật cho toàn bộ kiến trúc văn phòng làm việc thêm phong cách, lịch lãm.\r\nBộ ghế được bọc PVC cao cấp, gồm có 01 băng dài bề thế,', 'sofa2.jpg', 2, '2023-02-23 07:47:06', '2023-02-23 07:47:06'),
(3, 'ghế sofa sh111', 45670.00, 'Cổ điển pha lẫn hiện đại đã đưa dòng sản phẩm SF23 lên một tầm cao về thiết kế sang trọng cùng gam màu quyền quý, chất liệu cao cấp, tôn vinh không gian làm việc hiện đại, sang trọng của người lãnh đạo', 'sofa3.jpg', 2, '2023-02-23 07:47:43', '2023-02-23 07:47:43'),
(4, 'ghế sofa sh106', 87690.00, 'Bộ ghế sofa SF31 chuyên dùng cho văn phòng lãnh đạo, thể hiện phong thái quyền lực, sang trọng của người lãnh đạo bằng thiết kế truyền thống, màu sắc nhã nhặn, độ bền thách thức thời gian, môi trường', 'sofa4.jpg', 2, '2023-02-23 07:48:14', '2023-02-23 07:48:14'),
(5, 'ghế sofa f176', 112430.00, 'Mãn nhãn với thiết kế sang trọng, tinh tế trên từng đường nét, SF11 chuyên dùng cho văn phòng lãnh đạo cao cấp, nơi đón tiếp nồng hậu các khách hàng, đối tác quan trọng hay chỉ là những giây phút thư \r\ngiãn', 'sofa5.jpg', 2, '2023-02-23 07:49:00', '2023-02-23 07:49:00'),
(6, 'ghế sofa f143', 54670.00, 'Cổ điển pha lẫn hiện đại đã đưa dòng sản phẩm SF23 lên một tầm cao về thiết kế sang trọng cùng gam màu quyền quý, chất liệu cao cấp, tôn vinh không gian làm việc hiện đại, sang trọng của người lãnh đạo.\r\nBộ ghế được bọc PVC cao cấp, gồm có 01 băng dài bề thế, 02 ghế đơn.\r\nTựa ghế nổi bật với các đường may tạo múi trang trí nhẹ nhàng', 'sofa6.jpg', 2, '2023-02-23 07:49:41', '2023-02-23 07:49:41'),
(7, 'ghế sofa SH456', 74650.00, 'Mãn nhãn với thiết kế sang trọng, tinh tế trên từng đường nét, SF11 chuyên dùng cho văn phòng lãnh đạo cao cấp, nơi đón tiếp nồng hậu các khách hàng, đối tác quan trọng hay chỉ là những giây phút thư\r\ngiãn', 'sofa7.jpg', 2, '2023-02-23 07:50:29', '2023-02-23 07:50:29'),
(8, 'ghế sofa SH44', 35670.00, 'Bộ ghế sofa SF01 với kiểu dáng sang trọng, hiện đại cho không gian văn phòng, bộ ghế khoác lên mình gam màu đen ấn tượng, mạnh mẽ, sản phẩm bán chạy nhất của nội thất Hòa Phát đến thời điểm hiện nay.\r\nBộ ghế Sofa văn phòng bọc da cao cấp, gồm có 01 băng dài rộng rãi, 02 ghế đơn tiện nghi đón tiếp khách hàng, đối tác thật sang trọng', 'sofa8.jpg', 2, '2023-02-23 07:57:38', '2023-02-23 07:57:38'),
(9, 'ghế sofa f245', 118640.00, 'Mãn nhãn với thiết kế sang trọng, tinh tế trên từng đường nét, SF11 chuyên dùng cho văn phòng lãnh đạo cao cấp, nơi đón tiếp nồng hậu các khách hàng, đối tác quan trọng hay chỉ là những giây phút thư giãn sau những giờ làm việc căng thẳng.', 'sofa9.jpg', 2, '2023-02-23 07:58:12', '2023-02-23 07:58:12'),
(10, 'kệ tivi phòng khách K1312', 45640.00, 'Kệ tivi phòng khách gỗ tự nhiên\r\n– Kệ khung gỗ tự nhiên sơn PU chia thành 3 khoang mỗi khoang có 1 ngăn kéo dưới, 1 khoang trống trên.\r\n– Mặt trên đá nhân tạo cao cấp bề mặt được tạo vân theo công nghệ', 'tivi.jpg', 1, '2023-02-23 07:59:32', '2023-02-23 07:59:32'),
(11, 'kệ tivi phòng khách K7645', 54670.00, 'Gỗ xoan đào tự nhiên thuộc nhóm gỗ số VI, gỗ xoan đào có màu cánh gián đặc trưng, thuộc loại gỗ nhẹ nhưng sau quá trình tẩm sấy kỹ càng gỗ có độ cứng rất tốt, khả năng chịu nhiệt, chống nước, chống ẩm', 'tivi1.jpg', 1, '2023-02-23 08:00:10', '2023-02-23 08:00:10'),
(12, 'kệ gỗ tự nhiên KTV91', 50500.00, '– Kệ tivi gỗ tự nhiên\r\n– Kệ có 2 ngăn kéo đựng đồ ở giữa, hai bên có 2 khoang chống.\r\n– Mặt trên đá nhân tạo cao cấp.\r\n– Sản phẩm kệ tivi KTV91 thiết kế khung gỗ tự nhiên sơn PU kết hợp với đá nhân tạo cao cấp cho sản phẩm sang trọng, khỏe khoắn hiện đại thích hợp cho không gian phòng khách gia đình, văn phòng…', 'tivi2.jpg', 1, '2023-02-23 08:00:51', '2023-02-23 08:00:51'),
(13, 'kệ tivi cao cấp', 45500.00, 'Kệ tivi phòng khách\r\n– Thiết kế khung gỗ tự nhiên kết hợp gỗ công nghiệp.\r\n– Mặt kệ sử dụng chất liệu veneer óc chó phủ sơn PU cao cấp\r\n– Kệ có 2 ngăn kéo ở giữa để đồ tiện dụng\r\n– Sản phẩm kệ tivi KTV19-20 thiết kế hiện đại phù hợp với mọi không gian phòng khách gia đình, văn phòng…', 'tivi3.jpg', 1, '2023-02-23 08:01:29', '2023-02-23 08:01:29'),
(14, 'kệ tivi gỗ đinh hương', 43560.00, 'Gỗ đinh hương là loại gỗ chủ yếu được trồng và ưa chuộng ở miền Bắc. Đinh hương là cái tên thuộc trong hàng gỗ quý hiếm ở Việt Nam. Màu sắc tươi sáng nhưng nhạt hơn so với gỗ giáng hương do đặc điểm thời tiết, đinh hương có màu vàng đỏ, hương thơm dịu nhẹ thoang thoảng, vân gỗ nhỏ màu nâu nhạt không uốn lượn, bay bổng nhưng hài hòa dịu nhẹ', 'tivi5.jpg', 1, '2023-02-23 08:02:00', '2023-02-23 08:02:00'),
(15, 'kệ tivi gỗ cẩm', 74650.00, 'Nội thất gỗ tự nhiên là lựa chọn hàng đầu trong các sản phẩm nội thất. Được giới đại gia săn đón rất nhiều từ các sản phẩm nội thất thông thường nhưsalon gỗ, giường ngủ gỗ… thậm chí có người chịu chi ra cả vài chục tỷ để đón được các sản phẩm nghệ thuật từ thiên nhiên hay đã qua tác chế của các nghệ nhân', 'tivi6.jpg', 1, '2023-02-23 08:02:28', '2023-02-23 08:02:28'),
(16, 'bàn ăn b454', 76540.00, 'Bộ bàn ăn BAX608 mang đến cho không gian phòng ăn của gia đình bạn vẻ đẹp hiện đại pha lẫn nét cổ điển, trẻ trung, đầy sức sống, nhưng không kém đi phần sang trọng. Mẫu bàn ăn với chất lượng vượt trội', 'table1.jpg', 3, '2023-02-23 08:03:38', '2023-02-23 08:03:38'),
(17, 'Bộ bàn ghế ăn gỗ Sồi 6 ghế mẫu 2 tầng 1m6 – BAS215', 75680.00, 'Bộ bàn ghế ăn được làm từ 100% gỗ Sồi tự nhiên đã qua sử lý chống cong vênh, chống mối mọt kết hợp với bộ 06 ghế có kích thước tiêu chuẩn tạo tư thế chắc chắn, thoải mái cho người dùng.', 'table2.jpg', 3, '2023-02-23 08:04:25', '2023-02-23 08:04:25'),
(18, 'Bộ bàn ghế ăn tròn xoay gỗ Xoan Đào 6 ghế chân cao 1m2 – BAX208', 65430.00, 'Bàn ăn tròn xoay BAX208 là một sản phẩm xuất sắc cả về kiểu dáng và chất lượng mà bạn không thể bỏ qua. Phong cách thiết kế thanh lịch, hiện đại của mẫu bàn ăn giúp làm nổi bật vẻ tươi sáng của chất liệu gỗ sồi tự nhiên.', 'table4.jpg', 3, '2023-02-23 08:04:55', '2023-02-23 08:04:55'),
(19, 'Bộ bàn ghế ăn gỗ Xoan Đào 6 ghế', 80500.00, 'Bộ bàn ăn với màu sắc cánh gián, được thiết kế mang âm hưởng tân cổ điển giúp tạo cảm giác ấm cúng, không đơn điệu. Kết hợp với ghế tựa lưng cao cách điệu được làm từ gỗ tự nhiên quả là 1 sự lựa chọn không tồi cho phòng ăn gia đình bạn', 'table3.jpg', 1, '2023-02-23 08:05:31', '2023-02-23 08:05:31'),
(20, 'Bộ bàn ghế ăn gỗ Sồi Nga', 45640.00, 'Sở hữu thiết kế hiện đại, kiểu dáng Oval (bầu dục) nhỏ gọn và đẹp mắt, nhưng vẫn đáp ứng tốt nhu cầu sử dụng của khách hàng; chất lượng sản phẩm vượt trội, đã trải qua quy trình kiểm tra chất lượng nghiêm ngặt, đảm bảo chất lượng khi sử dụng; giá thành phải chăng, hợp lý; chính những điều đó đã khiến cho bàn ăn BAS207 rất được ưa chuộng', 'table5.jpg', 3, '2023-02-23 08:07:00', '2023-02-23 08:07:00'),
(21, 'Bộ bàn ghế ăn gỗ Sồi 6 ghế vát góc bọc', 45000.00, 'Với việc sử dụng màu sơn Óc Chó đã mang đến cho sản phẩm nét đẹp cổ điển thường thấy trong các mẫu bàn ăn của những năm 80, kết hợp vào đó là thiết kế chân vát dạng cách điệu, đã mang đến cho sản phẩm nét vẻ đẹp cổ điển mang hơi hướng hiện đại. Với kiểu thiết kế trên, mẫu bàn BAS203 sẽ nổi bật và trở thành điểm nhấn trong không gian phòng ăn của bạn', 'table6.jpg', 3, '2023-02-23 08:07:59', '2023-02-23 08:07:59'),
(22, 'Bộ bàn ghế ăn gỗ Sồi', 105550.00, 'Bộ bàn ghế ăn đẹp hiện đại BAS217 được làm từ gỗ Sồi nhập khẩu 100%, với kiểu dáng thiết kế đơn giản nhưng thanh nhã. Bề mặt phủ sơn PU cho nước sơn bền màu, tươi sáng. Sản phẩm được sử lý chuyên nghiệp, giúp chống mối mọt và cong vênh', 'table8.jpg', 3, '2023-02-23 08:08:36', '2023-02-23 08:08:36'),
(23, 'Bộ bàn ghế ăn gỗ Cao Su', 54670.00, 'Bàn ăn gia đình BACS221 mang đến cho bạn một không gian phòng ăn hiện đại, đẳng cấp và tinh tế. Đây là một trong những thiết kế bàn ăn giành cho các căn hộ chung cư được đánh giá cao trên thị trường.', 'table9.jpg', 3, '2023-02-23 08:09:08', '2023-02-23 08:09:08'),
(24, 'Bộ bàn ghế ăn gỗ Sồi 6 ghế phun màu mẫu Oval 1m6 – BAS531', 76540.00, 'Với việc sử dụng màu sơn Óc Chó đã mang đến cho sản phẩm nét đẹp cổ điển thường thấy trong các mẫu bàn ăn của những năm 80, kết hợp vào đó là thiết kế chân vát dạng cách điệu, đã mang đến cho sản phẩm nét vẻ đẹp cổ điển mang hơi hướng hiện đại. Với kiểu thiết kế trên, mẫu bàn BAS203 sẽ nổi bật và trở thành điểm nhấn trong không gian phòng ăn của bạn', 'table7.jpg', 3, '2023-02-23 08:09:51', '2023-02-23 08:09:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date_placed` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Cấu trúc bảng cho bảng `cart_detail`
--

CREATE TABLE `cart_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `user_role_id_foreign` (`role_id`);

ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `cart_detail`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_detail_product_id_foreign` (`product_id`),
  ADD KEY `cart_detail_cart_id_foreign` (`cart_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cart_detail`
--
ALTER TABLE `cart_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_id`, `created_at`, `updated_at`) VALUES
('1', 'admin', 'admin@gmail.com', '2023-02-23 14:36:41', '$2y$10$rZ62H3YPeCDTAwaVuxlWOeC6I/zHF3juWRFkbns5cnZhBEXsNcUc2', NULL, '1', '2023-02-23 14:36:41', '2023-02-23 14:36:41');

--
-- Đang đổ dữ liệu cho bảng `roles`
--

insert into `roles` (`name`, `updated_at`, `created_at`) values ('Người quản trị', '2023-03-02 12:32:01', '2023-03-02 12:32:01');
--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `cart_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `cart_detail`
--
ALTER TABLE `cart_details`
   ADD CONSTRAINT `cart_detail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products`(`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_detail_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `cart`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
