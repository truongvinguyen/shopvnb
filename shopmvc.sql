-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2021 lúc 07:35 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopmvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name_product` varchar(50) NOT NULL,
  `price_product` float NOT NULL,
  `image_product` varchar(50) NOT NULL,
  `detail_product` text NOT NULL,
  `id_category` int(11) NOT NULL,
  `trangthai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name_product`, `price_product`, `image_product`, `detail_product`, `id_category`, `trangthai`) VALUES
(1, 'Vợt cầu lông Yonex Nanoray 70 Light chính hãng', 1770000, 'hinh1', 'Vợt cầu lông Yonex Nanoray 70 Lite chính hãng được tung ra thị trường vào tháng 7/2020 với thông số 5U, G5 khá phù hợp dành cho các bạn nữ, những bạn mới bắt đầu tập chơi, làm quen với cầu lông.', 0, '1'),
(2, 'Vợt cầu lông Lining Windstorm 74 Purple chính hãng', 1500000, 'hinh2', 'Vợt cầu lông Lining Windstorm 74 Purple chính hãng cực nổi bật với tông màu sắc siêu bắt mắt phù hợp dành riêng cho Phái Nữ với trọng lượng siêu nhẹ vỏn vẹn chỉ 74g cực phù hợp với vai trò chụp cầu, đánh lưới đấy nhé !', 1, ''),
(4, 'Vợt cầu lông Lining Tectonic 7I chính hãng', 2700000, 'hinh4', '7I & 7C là cặp bài trùng của nhà Lining vừa được cho ra mắt vào tháng 8/2020. Với Vợt cầu lông Lining Tectonic 7I chính hãng thiên về đánh đôi với thân vợt cứng cùng độ nặng đầu siêu khủng 312mm hoàn hảo cho vị trí cầu lưới với những quả chụp ăn điểm dứt khoát.', 0, '1'),
(6, 'Vợt cầu lông Lining Tectonic 7I chính hãng', 2700000, 'hinh4', '7I & 7C là cặp bài trùng của nhà Lining vừa được cho ra mắt vào tháng 8/2020. Với Vợt cầu lông Lining Tectonic 7I chính hãng thiên về đánh đôi với thân vợt cứng cùng độ nặng đầu siêu khủng 312mm hoàn hảo cho vị trí cầu lưới với những quả chụp ăn điểm dứt khoát.', 0, ''),
(7, 'Vợt cầu lông Lining Lightning 3000 green chính hãn', 1000000, 'hinh5', '- Vợt cầu lông Lining Lightning 3000 green chính hãng thuộc dòng vợt cân bằng, 3U giúp người chơi có được những cú đánh điều cầu cũng như tấn công có tốc độ nhanh, độ nặng và sự chuẩn xác.\r\n\r\n- Vợt thuộc bộ sưu tập Classic Series được cấu tạo từ những sợi carbon fiber cao cấp siêu bền có sức chịu lực tốt hơn tạo ra những cú đập uy lực hơn.\r\n\r\n- Về thiết kế nó có màu sắc rất nổi bật và tinh tế gồm 3 tông màu xanh dương, cam, xanh chuối tha hồ cho các tín đồ cầu lông lựa chọn.\r\n\r\n- Đối với những người chơi ở mức trung bình - yếu, sử dụng vợt  giúp trợ lực trong những pha đánh cầu, nguyên nhân do đầu vợt nhẹ hơn, mỏng hơn, nên dễ dàng xoay sở trong thi đấu.\r\n\r\n- Đối với những người chơi trung bình - khá trở lên, vợt giúp người chơi phân phối đều lực và tốc độ  trong từng pha đánh cầu. Tuy nhiên, điều này cũng phụ thuộc và góc độ tiếp xúc với trái cầu.', 0, '1'),
(8, 'Vợt cầu lông Lining Aeronaut 8000D chính hãng', 4700000, 'hinh6', ' Trong hai năm gần đây thương hiệu cầu lông Lining ngày càng một phát triển mạnh và chiếm được nhiều nhận xét tích cực đến từ các lông thủ nổi trội về màu sắc đẹp, bắt mắt, công nghệ hiện đại, độc quyền, cùng độ bền cực kì cao. Đặc biệt nằm trong phân khúc cao cấp không thể nào bỏ qua cây vợt cầu lông Lining Aeronaut 8000D chính hãng - Siêu phẩm tấn công mạnh mẽ.\r\n\r\n- Vợt cầu lông Lining Aeronaut 8000D chính hãng từng được tay vợt đôi nam top 3 thế giới hiện nay Liu Yuchen sử dụng khi a còn đánh đôi nam nữ. Đây là một cây vợt cao cấp với trọng lượng 3U nặng đầu phù hợp với lối đánh thiên về tấn công với những pha đập cầu đầy uy lực dồn ép đổi thủ sân bạn.', 0, '1'),
(9, 'Vợt cầu lông Lining Lightning 3000 green chính hãn', 1000000, 'hinh5', '- Vợt cầu lông Lining Lightning 3000 green chính hãng thuộc dòng vợt cân bằng, 3U giúp người chơi có được những cú đánh điều cầu cũng như tấn công có tốc độ nhanh, độ nặng và sự chuẩn xác.\r\n\r\n- Vợt thuộc bộ sưu tập Classic Series được cấu tạo từ những sợi carbon fiber cao cấp siêu bền có sức chịu lực tốt hơn tạo ra những cú đập uy lực hơn.\r\n\r\n- Về thiết kế nó có màu sắc rất nổi bật và tinh tế gồm 3 tông màu xanh dương, cam, xanh chuối tha hồ cho các tín đồ cầu lông lựa chọn.\r\n\r\n- Đối với những người chơi ở mức trung bình - yếu, sử dụng vợt  giúp trợ lực trong những pha đánh cầu, nguyên nhân do đầu vợt nhẹ hơn, mỏng hơn, nên dễ dàng xoay sở trong thi đấu.\r\n\r\n- Đối với những người chơi trung bình - khá trở lên, vợt giúp người chơi phân phối đều lực và tốc độ  trong từng pha đánh cầu. Tuy nhiên, điều này cũng phụ thuộc và góc độ tiếp xúc với trái cầu.', 0, '1'),
(10, 'Vợt cầu lông Lining Aeronaut 8000D chính hãng', 4700000, 'hinh6', ' Trong hai năm gần đây thương hiệu cầu lông Lining ngày càng một phát triển mạnh và chiếm được nhiều nhận xét tích cực đến từ các lông thủ nổi trội về màu sắc đẹp, bắt mắt, công nghệ hiện đại, độc quyền, cùng độ bền cực kì cao. Đặc biệt nằm trong phân khúc cao cấp không thể nào bỏ qua cây vợt cầu lông Lining Aeronaut 8000D chính hãng - Siêu phẩm tấn công mạnh mẽ.\r\n\r\n- Vợt cầu lông Lining Aeronaut 8000D chính hãng từng được tay vợt đôi nam top 3 thế giới hiện nay Liu Yuchen sử dụng khi a còn đánh đôi nam nữ. Đây là một cây vợt cao cấp với trọng lượng 3U nặng đầu phù hợp với lối đánh thiên về tấn công với những pha đập cầu đầy uy lực dồn ép đổi thủ sân bạn.', 0, '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--


--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
