-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 16, 2018 lúc 12:50 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `stellar_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images_process`
--

CREATE TABLE `images_process` (
  `id` int(11) NOT NULL,
  `process_id` int(11) NOT NULL,
  `process_en_id` int(11) NOT NULL,
  `content` text,
  `is_delete` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `images_process`
--

INSERT INTO `images_process` (`id`, `process_id`, `process_en_id`, `content`, `is_delete`) VALUES
(11, 3, 23, '597e04b07d5bd/t7-17_2.jpg', 1),
(12, 3, 23, '597e04efb7356/t7-17.jpg', 1),
(13, 12, 12, '597e984937d8a/p002.jpg', 0),
(14, 12, 25, '597e9862783db/p004.jpg', 0),
(15, 3, 23, '59b0f2e2434f0/IMG_8853.JPG', 1),
(16, 3, 23, '59b0f30bc81c3/IMG_8854.JPG', 1),
(17, 3, 23, '59b0f3204bf55/IMG_8855.JPG', 0),
(18, 3, 23, '59b0f32e1a099/IMG_8856.JPG', 1),
(19, 3, 23, '59b0f54895ab6/1.jpg', 0),
(20, 3, 23, '59b0f8b5f3c0a/1.jpg', 0),
(21, 3, 23, '59f6e16f1d839/', 0),
(22, 3, 23, '5af4143344339/', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `languagues`
--

CREATE TABLE `languagues` (
  `abbreviation` char(2) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(2, '::1', 'quyen@gmail.com', 1526467306),
(3, '::1', 'quyenvkbn', 1526467526),
(4, '::1', 'quyenvkbn', 1526467537);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `members_translation`
--

CREATE TABLE `members_translation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `information` text NOT NULL,
  `language` varchar(25) NOT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `is_delete`) VALUES
(1, 'Giới thiệu', 'Stellar Garden là tổng hòa của mọi yếu tố từ cao cấp, sang trọng và tinh tế. Đây là dự án trọng điểm tại Q.Thanh Xuân của CĐT nhằm tạo một thương hiệu lớn cũng như khẳng định vị thế của mình trên thị trường Bất Động Sản.', 0),
(2, 'TỔNG QUAN DỰ ÁN', 'Stellar Garden là tổng hòa của mọi yếu tố từ hiện đại, sang trọng đến tinh tế. Đây là dự án trọng điểm tại Q.Thanh Xuân của chủ đầu tư Quang Minh JSC., nhằm tạo dựng thương hiệu cũng như khẳng định vị thế của mình trên thị trường Bất động Sản.\r\nĐược thiết kế theo phong cách Singapore, mỗi căn hộ tại Stellar Garden đều có sự sắp đặt linh hoạt, tối ưu hóa diện tích sử dụng, đảm bảo sự lưu thông không khí và ánh sáng tự nhiên trong căn nhà. Mật độ xây dựng chỉ 45%, dành phần lớn diện tích dự án cho cảnh quan cây xanh, thác tràn, sân chơi cho trẻ em..., Stellar Garden mang đến một không gian sống và giải trí hoàn hảo cho chủ nhân căn hộ.', 0),
(3, 'KHÁM PHÁ VỊ TRÍ ĐẮC ĐỊA', 'Chung cư Stellar Garden tọa lạc tại số 35 Lê Văn Thiêm (hay số 102 Ngụy Như Kon Tum), Thanh Xuân, Hà Nội; nằm ngay ngã tư Lê Văn Thiêm Ngụy Như Kon Tum, nằm ngay gần khu đô thị Hapulico, giáp ngay bên cạnh là dự án tổ hợp khu nhà ở 82 Nguyễn Tuân.\r\nChung cư Quang Minh Tower Lê Văn Thiêm thừa hưởng toàn bộ các tiện ích khu vực từ hệ thống giao thông thuận tiện di chuyển ra các trung tâm thương mại lớn như Grand Plaza, siêu thị Big C, siêu thị VinMart, các trường học như PTTH Nhân Chính, trường PTTH Amsterdam, tiện ích Ngân hàng Agribank, Bidv, Vietcombank, công viên trung hòa Nhân Chính, đường sắt trên cao.... Chung cư Quang Minh Tower Lê Văn Thiêm còn gần nhiều tuyến đường lớn như: Lê Văn Lương, Nguyễn Tuân, Vành đai 3, Khuất Duy Tiến, Tố Hữu, Trần Duy Hưng, Hoàng Đạo Thúy, Vành đai 2, Nguyễn Trãi, ...\r\nVị trí đắc địa, giao thông thuận lợi - Stellar Garden là sự lựa chọn hoàn hảo cho cuộc sống tiện nghi tương lai.', 0),
(4, 'Tháp chung cư', 'Được đầu tư tỉ mỉ trong khâu thiết kế, mỗi căn hộ tại Stellar Garden đều có sự sắp xếp linh hoạt nhằm tối ưu hóa diện tích sử dụng và đảm bảo sự lưu thông không khí và ánh sáng tự nhiên cho căn nhà. Tất cả các phòng trong một căn hộ đều có thể đón sáng tự nhiên và sở hữu tầm nhìn thoáng đãng. Các không gian cũng được sắp xếp hợp lý tạo sự thuận tiện cho các sinh hoạt hàng ngày, vừa mang nét hiện đại phù hợp với lối sống trẻ, vừa tôn trọng sự kín đáo theo truyền thống gia đình Việt\r\nTrục giao thông đứng gồm 3 thang máy ở mỗi tháp, đáp ứng việc di chuyển của cư dân với số lượng 8 căn hộ/ sàn. Cùng với 2 thang bộ được trang bị hệ thống cửa chống cháy và quạt tăng áp buồng thang đảm bảo an toàn khi có sự cố.', 0),
(5, 'Trung tâm thương mại', 'Đặt trên 5 tầng đế với tổng diện tích lên tới 38.144m2, trung tâm thương mại tại Stellar Garden là không gian mua sắm rộng mở, hội tụ nhiều dòng sản phẩm và thương hiệu nổi tiếng trong nước và quốc tế. Không chỉ được thỏa mãn đam mê mua sắm, khách hàng đến đây còn có thể tận hưởng những phút giây nghỉ ngơi thư giãn với chuỗi không gian ẩm thực, café và giải trí sang trọng, tiện nghi. Đây là mô hình phát triển cơ sở hạ tầng đã được áp dụng và triển khai thành công ở nhiều nước trên thế giới sẽ góp phần đưa nơi đây trở thành điểm đến lý tưởng cho người dân thủ đô.', 0),
(6, 'KHÁM PHÁ KHÔNG GIAN XANH ĐẲNG CẤP VÀ TIỆN ÍCH VƯỢT TRỘI', 'Hiện đại, sang trọng nhưng thân thiện với môi trường là tôn chỉ phát triển của Chung cư Stellar Garden 35 Lê Văn Thiêm của Công ty CP Kinh doanh và Xây dựng Quang Minh.\r\nToàn bộ các hệ thông trong tòa nhà đều được chủ đầu tư đặc biệt chú trọng trong khâu thiết kế nhằm bảo vệ môi trường tự nhiên và cả môi trường sống cho cư dân của dự án.\r\nCác tầng dưới 1 - 5 và tầng M là trung tâm thương mại và dịch vụ, mặt bằng rộng lớn được bố trí rõ ràng các khu vực sảnh chờ, khu vực cho thuê\r\nTừ tầng 6 trở lên đến tầng 28 là các căn hộ với diện tích hợp lý từ 2 đến 3 phòng ngủ được thiết kế hài hòa giữa các phòng, đảm bảo yếu tố không gian thoáng căn hộ các lô gia; cửa sổ đón gió và ánh sáng tự nhiên. Tối ưu hóa việc thể hiện công năng sử dụng phòng khách phòng ăn, phòng ngủ, bếp, wc.\r\nThiết kế cảnh quan thông minh, tinh tế luôn đảm bảo nguồn gió và ánh sáng tự nhiên đến từng căn hộ. Bể bơi 4 mùa rộng hơn 400m2 được thiết kế hài hòa mang lại tiện ích đẳng cấp cho cư dân.\r\nBên cạnh các yếu tố về không gian, các cư dân còn được tận hưởng hệ thống tiện ích hoàn hảo. Với 5 tầng đế làm trung tâm thương mại 1 tầng dịch vụ bể bơi và 2 tầng hầm để xe, dự án đảm bảo cung cấp đáp ứng nhu cầu của các gia đình tương lai. Bên cạnh đó, các tiện ích đạt chuẩn chất lượng cao như bể bơi, phòng tập thể thao đa năng, spa, trường mẫu giáo … cũng góp phần xây dựng Chung cư Stellar Garden 35 Lê Văn Thiêm thành một quần thể khép kín với đầy đủ tiện nghi cho một cuộc sống văn minh và chất lượng.', 0),
(7, 'CHỦ ĐẦU TƯ', 'Công ty Cổ phần Kinh doanh và Xây dựng Quang Minh có tiền thân là Công ty Thanh Xuân, vốn là Xí nghiệp Thương binh An Dương Hà Nội.Xí nghiệp Thương binh An Dương Hà Nội là một doanh nghiệp Nhà nước thuộc sở Lao động và Thương binh Xã hội Hà Nội theo Quyết định số 8353/QĐ-UB của UBND thành phố Hà Nội ngày 23/12/2005 Sau khi được đổi tên, Công ty Thanh Xuân có nhiệm vụ chính là: Sản xuất khăn tay giấy, giấy vệ sinh, nhựa ép trên gỗ, đồ mộc, cao su, chì thô, oxýt kẽm, kaliclorat; Xuất khẩu các mặt hàng do Công ty sản xuất và nhập khẩu vật tư, thiết bị phục vụ nhu cầu của Công ty và thị trường; Liên doanh liên kết với các đơn vị, cá nhân trong và ngoài nước: mở cửa hàng mua bán các sản phẩm do Công ty sản xuất, các sản phẩm do liên doanh liên kết và làm đại lý tiêu thụ sản phẩm cho các đơn vị có nhu cầu. Công ty Thanh Xuân được chuyển đổi từ mô hình doanh nghiệp nhà nước sang công ty cổ phần với tên gọi là Công ty Cổ phần In và Dịch vụ Thương mại theo Quyết định số 8353/QĐ-UB ngày 23/12/2005 của UBND Thành phố Hà Nội và hiện nay đổi tên là Công ty cổ phần Đầu tư và Xây dựng Thanh Xuân.', 0),
(8, 'ĐỐI TÁC', '<table>\r\n<tbody>\r\n<tr>\r\n<th><img src=\"http://localhost/stellar/assets/public/img/bidv.jpg\" alt=\"\" /></th>\r\n<th>&nbsp;</th>\r\n<th><span class=\"yellow\">Ng&acirc;n h&agrave;ng TMCP Đầu tư v&agrave; Ph&aacute;t triển Việt Nam (BIDV)</span> <br /> <span class=\"white\">Đơn vị t&agrave;i trợ vốn x&acirc;y dựng dự &aacute;n</span></th>\r\n</tr>\r\n</tbody>\r\n</table>', 0),
(9, 'Tải về ấn phẩm đầy đủ', 'Xem online', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_en`
--

CREATE TABLE `post_en` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_en`
--

INSERT INTO `post_en` (`id`, `title`, `post_id`, `content`, `is_delete`) VALUES
(1, 'Introduce', 1, 'Stellar Garden is the sum of all elements from luxury, luxury and sophistication. This is a key project in Thanh Xuan District of the investor to create a big brand as well as assert its position in the real estate market.', 0),
(2, 'OVERVIEW OF PROJECT', 2, 'Stellar Garden is the sum of all elements from modern, luxurious to delicate. This is a key project in Thanh Xuan District of Quang Minh JSC., In order to build the brand as well as affirm its position in the real estate market.\r\nDesigned in Singaporean style, each apartment in Stellar Garden has a flexible layout, optimizing the space used, ensuring air circulation and natural light in the home. The building density is only 45%, devotes most of the project area to green landscapes, waterfalls, playgrounds for children ... Stellar Garden offers a perfect living and entertainment space for home owners. they.\r\n', 0),
(3, 'DISCOVER LOCATION LOCATION', 3, 'Stellar Garden apartment is located at 35 Le Van Thiem (or 102 Nguy Nhu Kon Tum), Thanh Xuan, Hanoi; Located right at the intersection of Le Van Thi Nhu Nhu Kon Tum, near the Hapulico urban area, adjacent to the 82 Nguyen Tuan residential complex.\r\nQuang Minh Apartment Le Van Thiem Tower inherits all the utilities of the area from the convenient transportation system to the large commercial centers such as Grand Plaza, Big C supermarket, VinMart supermarket, schools such as Agribank, Bidv, Vietcombank, Trung Chinh park, Cao Bang railway .... Quang Minh Apartment Building Le Van Thiem Apartment Building is close to many major roads such as Le Van Luong, Nguyen Tuan, Ring 3, Khuat Duy Tien, To Huu, Tran Duy Hung, Hoang Dao Thuy, Ring 2, Nguyen Trai ...\r\nConvenient location, convenient transportation - Stellar Garden is the perfect choice for comfortable living in the future.', 0),
(4, 'Tower', 4, 'Stellar Garden apartments have a flexible arrangement to optimize the area used and to ensure the air circulation and natural light of the home are meticulously designed. All rooms in an apartment can enjoy natural light and airy views. The space is also streamlined to facilitate the daily activities, while bringing modern features suitable for young lifestyle, while respecting the confidential tradition of Vietnamese family.\r\nThe vertical axis of traffic consists of 3 lifts in each tower, meeting the movement of residents with the number of 8 apartments / floor. Along with the 2 stairs are equipped with fire doors and booster supercharger elevator to ensure safety when trouble.', 0),
(5, 'TRADE CENTER', 5, 'Set on 5 floors with a total area of ​​38,144m2, the commercial center at Stellar Garden is an open space for shopping, converging a wide range of products and famous brands in the country and internationally. Not only satisfy the passion of shopping, customers can also enjoy relaxing moments with a chain of food, coffee and entertainment luxury. This is a model of infrastructure development has been applied and implemented successfully in many countries around the world will contribute to make this place an ideal destination for the capital.', 0),
(6, 'DISCOVER THE GREEN SPACE AND LEISURE EXCEPTIONS', 6, 'Modern, luxurious but environmentally friendly is the principle of development of Stellar Garden Apartment 35 Le Van Thiem of Quang Minh Construction and Trading JSC.\r\nAll the buildings in the building are invested by the owner with special emphasis on design to protect the natural environment and habitat for residents of the project.v\r\nThe lower floors 1-5 and the M-floor are commercial and service centers, large premises are clearly arranged lounges and areas for rent.\r\nFrom floors 6 up to the 28 floor are the apartments with reasonable area from 2 to 3 bedrooms designed harmony between the rooms, ensuring the spacious space apartment block; Window wind and natural light. Optimize the performance of the use of living room dining room, bedroom, kitchen, wc.\r\nIntelligent, elegant design always ensures the wind and natural light to each apartment. The 400m2 four-season swimming pool is designed in harmony to provide the utmost convenience to the residents.\r\nApart from the spatial factors, the residents also enjoy the perfect utility system. With 5 ground floor commercial centers, one swimming pool service and 2 basement parking spaces, the project ensures the supply meets the needs of future families. Besides, the high standard facilities such as swimming pool, multi-purpose gym, spa, kindergarten ... also contribute to the construction of Stellar Garden 35 Le Van Thiem to a closed population filled with full. Comfortable enough for a civilized and quality life.', 0),
(7, 'INVESTOR', 7, 'Quang Minh Trading and Construction Joint Stock Company has its predecessor, Thanh Xuan Company, which is An Duong Ha Noi An Duong Enterprise. An Duong Ha Noi An Duong Enterprise is a state-owned enterprise under the Department of Labor and Employment. Ha Noi Invalids and Social Affairs in accordance with Decision No. 8353 / QD-UB dated 23/12/2005 by the People\\\'s Committee of Hanoi. After being renamed, Thanh Xuan Company has the following main tasks: Rubber, plastics, wood, furniture, rubber, crude lead, zinc oxide, kaliclorat; Exporting items manufactured and imported by the Company for materials and equipment serving the needs of the Company and the market; Joint ventures linking with domestic and foreign units and individuals: opening shops for products manufactured by the Company, products made by joint ventures and acting as agents for consumption of products for units. demand. Thanh Xuan Company was transformed from a state-owned enterprise into a joint stock company called Printing and Trading Service Joint Stock Company under the Decision No. 8353 / QD-UB dated 23/12/2005 of the People\\\'s Committee. Hanoi City and is now renamed Thanh Xuan Investment and Construction Joint Stock Company.', 0),
(8, 'PARTNER', 8, '<table>\r\n<tbody>\r\n<tr>\r\n<th><img src=\"http://localhost/stellar/assets/public/img/bidv.jpg\" alt=\"\" /></th>\r\n<th>&nbsp;</th>\r\n<th><span class=\"yellow\">Vietnam Joint Stock Commercial Bank for Investment and Development (BIDV)</span> <br /> <span class=\"white\">Unit financing the project</span></th>\r\n</tr>\r\n</tbody>\r\n</table>', 0),
(9, 'Download publications', 9, 'View online', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `process`
--

CREATE TABLE `process` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `is_delete` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `process`
--

INSERT INTO `process` (`id`, `title`, `content`, `is_delete`) VALUES
(3, 'update stellar', 'update stellar', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `process_en`
--

CREATE TABLE `process_en` (
  `id` int(11) NOT NULL,
  `process_id` int(11) DEFAULT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `is_delete` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `process_en`
--

INSERT INTO `process_en` (`id`, `process_id`, `title`, `content`, `is_delete`) VALUES
(8, 9, '333', '333', 1),
(13, 4, 'Updated in 11/2016', 'Stellar Palace is on the 10th floor.', 1),
(15, 2, 'Updated 01/2016', 'Stellar Palace is on the 10th floor.', 1),
(16, 1, 'Updated 02/2017', '	Stellar Palace is on the 10th floor.', 1),
(17, 4, 'Updated in 11/2016', 'Stellar Palace is on the 10th floor.', 1),
(18, 10, 'vvx', 'av', 1),
(19, 11, 'title', 'test', 1),
(20, 11, 'Update July, 2017', ' ', 1),
(21, 11, 'Update July, 2017', ' ', 1),
(22, 4, 'Updated in july, 2016', 'Stellar Garden is on the 10th floor.', 1),
(23, 3, 'Updated in 9/2017', 'Stellar Palace is on the 20th floor.', 0),
(25, 12, 'Update June, 2017', 'Stellar Palace is on the 12th floor.', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qa`
--

CREATE TABLE `qa` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `is_delete` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qa`
--

INSERT INTO `qa` (`id`, `title`, `content`, `is_delete`) VALUES
(5, 'ĐIỀU HÒA CỤC BỘ HAY TRUNG TÂM? VỊ TRÍ CỤC NÓNG?', 'Toàn bộ tòa nhà Stellar Garden được sử dụng điều hòa trung tầm với cục nóng nằm ngoài lô gia căn hộ.', 0),
(6, 'BẾP NẤU LÀ BẾP ĐIỆN HAY GAS? GAS BÌNH HAY GAS TRUNG TÂM VÀ BIỆN PHÁP AN NINH?', 'Toàn bộ tòa nhà Stellar Palace được sử dụng điều hòa trung tầm với cục nóng nằm ngoài khuôn viên tòa nhà.', 1),
(7, '', '', 1),
(12, '113', '113', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qa_en`
--

CREATE TABLE `qa_en` (
  `id` int(11) NOT NULL,
  `qa_id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `is_delete` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qa_en`
--

INSERT INTO `qa_en` (`id`, `qa_id`, `title`, `content`, `is_delete`) VALUES
(9, 7, '', '', 1),
(10, 6, 'KITCHEN COOKER IS ELECTRIC KIT or GAS? GAS BACKGROUND OR GAS CENTER AND SECURITY MEASURES?', 'The entire Stellar Palace building is centrally air-conditioned with a hot tub outside the premises.', 1),
(11, 5, 'ARTICLE OF THE MINISTRY OR CENTER? LOCATION HOT DEVICE?', 'The entire Stellar Garden building is centrally air-conditioned with a hot tub outside the apartments.', 0),
(12, 12, '331', '331', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `references`
--

CREATE TABLE `references` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` text,
  `url` text,
  `filter` varchar(255) NOT NULL,
  `sorting` int(11) DEFAULT NULL,
  `is_delete` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `references`
--

INSERT INTO `references` (`id`, `title`, `image`, `url`, `filter`, `sorting`, `is_delete`, `created`, `created_by`, `modified`, `modified_by`) VALUES
(24, 'Bastardo', '4.jpg', 'https://www.youtube.com/embed/MjIjXuIZ16E', '1', 0, 1, '2017-01-25 01:10:30', 'administrator', '2017-01-25 01:10:30', 'administrator'),
(23, 'Cưới Ngay Kẻo Lỡ', '3.jpg', 'https://www.youtube.com/embed/0GeW_08twb0', '1', 19, 0, '2017-01-25 01:06:43', 'administrator', '2017-02-27 00:55:09', 'administrator'),
(22, 'Truy Sát', '2.jpg', 'https://www.youtube.com/embed/fu4a6iRU7rk', '1', 2, 0, '2017-01-25 01:04:19', 'administrator', '2017-02-27 00:43:12', 'administrator'),
(21, 'Coco Before Chanel', '1.jpg', 'https://www.youtube.com/embed/bvDFPjx-uBU', '1', 0, 1, '2017-01-25 00:59:11', 'administrator', '2017-01-25 00:59:11', 'administrator'),
(25, 'Solo Quiero Caminar', '5.jpg', 'https://www.youtube.com/embed/z3g-Gqsw6GE', '1', 0, 1, '2017-01-25 01:17:39', 'administrator', '2017-01-25 01:17:39', 'administrator'),
(26, 'Chrysalis', '6.jpg', 'https://www.youtube.com/embed/ApiiW_hMscg', '1', 0, 0, '2017-01-25 01:21:23', 'administrator', '2017-01-25 01:21:23', 'administrator'),
(27, 'Tête De Turc', '7.jpg', 'https://www.youtube.com/embed/xdB-WoD0ExA', '1', 0, 1, '2017-01-25 01:24:55', 'administrator', '2017-01-25 01:24:55', 'administrator'),
(28, 'Rien à déclarer', '8.jpg', 'https://www.youtube.com/embed/piQPaxlZWu4', '1', 0, 1, '2017-01-25 01:50:08', 'administrator', '2017-01-25 01:50:08', 'administrator'),
(29, 'Asterix', '9.jpg', 'https://www.youtube.com/embed/k-NEg6iPhRM', '4', 28, 0, '2017-01-25 01:54:31', 'administrator', '2017-02-23 23:10:54', 'administrator'),
(30, 'Bab\'Aziz', '10.jpg', 'https://www.youtube.com/embed/IPYjenA3VFg', '1', 0, 1, '2017-01-25 01:58:19', 'administrator', '2017-01-25 01:58:19', 'administrator'),
(31, 'Bi, Don\'t Be Afraid !', '12.jpg', 'https://www.youtube.com/embed/m0h_H7mG_C4', '1', 21, 0, '2017-01-25 02:00:24', 'administrator', '2017-01-25 02:00:24', 'administrator'),
(32, 'Bus Palladium', '13.jpg', 'https://www.youtube.com/embed/ToTyKwET-1s', '1', 0, 1, '2017-01-25 02:02:56', 'administrator', '2017-01-25 02:02:56', 'administrator'),
(33, 'Chàng Trai Năm Ấy', '14.jpg', 'https://www.youtube.com/embed/tvfKHZFOY-A', '1', 7, 0, '2017-01-25 02:04:43', 'administrator', '2017-02-27 00:48:32', 'administrator'),
(34, 'Chatrak', '15.jpg', 'https://www.youtube.com/embed/rRa4are9P50', '1', 17, 0, '2017-01-25 02:07:08', 'administrator', '2017-02-27 00:54:31', 'administrator'),
(43, 'Gái Già Lắm Chiêu', '26.jpg', 'https://www.youtube.com/embed/ZFp8pnvLUWs', '1', 15, 0, '2017-02-03 22:45:55', 'administrator', '2017-02-27 00:53:57', 'administrator'),
(36, 'Ch\'tis', '18.jpg', 'https://www.youtube.com/embed/SLRTtHByPn4', '1', 0, 1, '2017-01-25 02:11:28', 'administrator', '2017-01-25 02:11:28', 'administrator'),
(37, 'Contre Enquete', '20.jpg', 'https://www.youtube.com/embed/EPmO_-6Pemk', '1', 0, 1, '2017-01-25 02:14:23', 'administrator', '2017-01-25 02:14:23', 'administrator'),
(38, 'Đường Đua', '21.jpg', 'https://www.youtube.com/embed/FKzcmhZj1b0', '1', 0, 0, '2017-01-25 02:17:08', 'administrator', '2017-01-25 02:17:08', 'administrator'),
(39, 'Em Là Bà Nội Của Anh', '22.jpg', 'https://www.youtube.com/embed/L_iOZs6JZe0', '1', 42, 0, '2017-01-25 02:22:01', 'administrator', '2017-02-28 01:23:41', 'administrator'),
(40, 'La Faute À  Fidel', '23.jpg', 'https://www.youtube.com/embed/mrdolzPS3zo', '1', 0, 1, '2017-01-25 02:24:24', 'administrator', '2017-01-25 02:24:24', 'administrator'),
(41, 'Lạc Giới', '24.jpg', 'https://www.youtube.com/embed/bhB1RQH9I_A', '1', 13, 0, '2017-01-25 02:25:50', 'administrator', '2017-02-27 00:53:05', 'administrator'),
(42, 'Between Two Worlds', '25.jpg', 'https://www.youtube.com/embed/u81k2gPJuGw', '1', 0, 0, '2017-01-25 02:33:49', 'administrator', '2017-01-25 02:33:49', 'administrator'),
(44, 'Già Gân, Mỹ Nhân Và Găng Tơ', '27.jpg', 'https://www.youtube.com/embed/cL4fetz7j40', '1', 24, 0, '2017-02-03 22:48:19', 'administrator', '2017-02-19 23:57:51', 'administrator'),
(45, 'Hương Ga', '28.jpg', 'https://www.youtube.com/embed/wHV_49NpR2g', '1', 6, 0, '2017-02-03 22:57:04', 'administrator', '2017-02-27 00:48:09', 'administrator'),
(46, 'Rise Of The Legend', '29.jpg', 'https://www.youtube.com/embed/Yr5b5GgPGDM', '1', 0, 0, '2017-02-03 23:01:43', 'administrator', '2017-02-19 23:57:25', 'administrator'),
(48, 'Le Héros De La Famille', '311.jpg', 'https://www.youtube.com/embed/6VSfP6vYfb0', '1', 0, 1, '2017-02-03 23:14:31', 'administrator', '2017-02-03 23:14:31', 'administrator'),
(49, 'Lộc Phát', '32.jpg', 'https://www.youtube.com/embed/oMlI_8u1Z4A', '1', 22, 0, '2017-02-03 23:16:52', 'administrator', '2017-02-03 23:16:52', 'administrator'),
(50, 'Mekong Stories', '33.jpg', 'https://www.youtube.com/embed/MR-Ou3KnIi4', '1', 5, 0, '2017-02-03 23:20:44', 'administrator', '2017-02-27 00:46:12', 'administrator'),
(51, 'Nouvelle Chance', '34.jpg', '', '1', 0, 1, '2017-02-03 23:34:46', 'administrator', '2017-02-03 23:34:46', 'administrator'),
(52, 'Nước 2030', '35.jpg', 'https://www.youtube.com/embed/XQOk6XlTKvU', '1', 20, 0, '2017-02-03 23:36:53', 'administrator', '2017-02-03 23:36:53', 'administrator'),
(53, 'Lời Nguyền Huyết Ngải', '36.jpg', 'https://www.youtube.com/embed/84tiSEgOC00', '1', 8, 0, '2017-02-03 23:38:52', 'administrator', '2017-02-27 00:48:50', 'administrator'),
(54, 'Le Premier Cri', '37.jpg', 'https://www.youtube.com/embed/8foPgvAkzP0', '1', 0, 1, '2017-02-03 23:45:08', 'administrator', '2017-02-03 23:45:08', 'administrator'),
(55, 'La Terre Abandonnée', '39.jpg', 'https://www.youtube.com/embed/R-5UbfFL6cE', '1', 0, 1, '2017-02-03 23:52:26', 'administrator', '2017-02-03 23:52:26', 'administrator'),
(56, 'Thần Tượng', '40.jpg', 'https://www.youtube.com/embed/zNSzhGN0edw', '1', 16, 0, '2017-02-03 23:54:01', 'administrator', '2017-02-27 00:54:14', 'administrator'),
(57, 'Chơi Vơi', '41.jpg', 'https://www.youtube.com/embed/GvGkBRB_kLk', '1', 0, 0, '2017-02-03 23:57:18', 'administrator', '2017-02-03 23:57:18', 'administrator'),
(58, 'Ma Dai', '42.jpg', 'https://www.youtube.com/embed/KVPUJq8_CXM', '1', 23, 0, '2017-02-03 23:59:05', 'administrator', '2017-02-03 23:59:05', 'administrator'),
(59, 'Mune', 'Phim_6.jpg', 'https://www.youtube.com/embed/G5d-fb5qddo', '4', 29, 0, '2017-02-04 00:10:18', 'administrator', '2017-02-23 23:11:08', 'administrator'),
(60, 'Tía Tui Là Cao Thủ', 'Phim_16.jpg', 'https://www.youtube.com/embed/uW6KWmVR-rM', '1', 25, 0, '2017-02-04 00:13:18', 'administrator', '2017-02-04 00:13:18', 'administrator'),
(61, 'Bảo Mẫu Siêu Quậy', 'Phim_11.jpg', 'https://www.youtube.com/embed/mqWMPqVGahY', '1', 26, 0, '2017-02-04 00:16:56', 'administrator', '2017-02-04 00:16:56', 'administrator'),
(74, 'Ba Vợ Cưới Vợ Ba', '53.jpg', 'https://www.youtube.com/embed/XgxcMyUZFe8', '1', 0, 0, '2017-02-10 01:59:39', 'administrator', '2017-02-27 01:02:57', 'administrator'),
(63, 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh', '43.jpg', 'https://www.youtube.com/embed/wmjiCP6R-7I', '2', 3, 0, '2017-02-10 01:19:10', 'administrator', '2017-02-27 00:43:52', 'administrator'),
(75, 'Rừng Xanh Kỳ Lạ Truyện', '54.jpg', 'https://www.youtube.com/embed/bE4835fXxb8', '2', 0, 0, '2017-02-10 02:03:54', 'administrator', '2017-02-19 23:56:54', 'administrator'),
(65, 'Dịu Dàng - Gentle', '441.jpg', 'https://www.youtube.com/embed/Qu_VIVz4gpg', '1', 18, 0, '2017-02-10 01:41:59', 'administrator', '2017-02-27 00:54:56', 'administrator'),
(66, 'Âm Mưu Giày Gót Nhọn', '45.jpg', 'https://www.youtube.com/embed/DCO6O3KGdpU', '1', 12, 0, '2017-02-10 01:43:12', 'administrator', '2017-02-27 00:52:44', 'administrator'),
(67, 'Xui Mà Hên', '46.jpg', 'https://www.youtube.com/embed/XxiPnsqUADY', '1', 11, 0, '2017-02-10 01:44:28', 'administrator', '2017-02-27 00:51:01', 'administrator'),
(68, 'Dành Cho Tháng Sáu', '47.jpg', 'https://www.youtube.com/embed/TyKxwgngzEI', '1', 14, 0, '2017-02-10 01:45:48', 'administrator', '2017-02-27 00:53:24', 'administrator'),
(69, 'Yêu Là Phải Xài Chiêu', '48.jpg', 'https://www.youtube.com/embed/oZ8TNI18r8M', '1', 27, 0, '2017-02-10 01:48:00', 'administrator', '2017-02-10 01:48:00', 'administrator'),
(70, 'Ma Nữ Báo Thù', '49.jpg', 'https://www.youtube.com/embed/tuMSReJ9vwM', '1', 9, 0, '2017-02-10 01:49:47', 'administrator', '2017-02-27 00:49:20', 'administrator'),
(71, 'Bảo Mẫu Siêu Quậy 2', '50.jpg', 'https://www.youtube.com/embed/JoTLOrnU8Zs', '1', 10, 0, '2017-02-10 01:50:50', 'administrator', '2017-02-27 00:49:51', 'administrator'),
(72, 'Lục Vân Tiên', '51.jpg', 'https://www.youtube.com/embed/rjWY9y7Q9_A', '2', 0, 0, '2017-02-10 01:52:42', 'administrator', '2017-02-19 23:57:09', 'administrator'),
(73, 'Chạy Đi Rồi Tính', '52.jpg', 'https://www.youtube.com/embed/Oc21YjuwjFg', '2', 0, 0, '2017-02-10 01:54:08', 'administrator', '2017-02-19 23:53:04', 'administrator'),
(76, 'Cô Hầu Gái - The Housemaid', '55.jpg', 'https://www.youtube.com/embed/RCD0fqkFrW8', '2', 4, 0, '2017-02-10 02:06:36', 'administrator', '2017-02-27 00:44:14', 'administrator'),
(77, 'Sút', '56.jpg', 'https://www.youtube.com/embed/tYxjbLGNWqg', '1', 0, 0, '2017-02-10 02:07:43', 'administrator', '2017-02-10 02:07:43', 'administrator'),
(78, 'Vệ sĩ, Tiểu Thư Và Thằng Khờ', '57.jpg', 'https://www.youtube.com/embed/PKeuQwKil3A', '1', 0, 0, '2017-02-10 02:09:23', 'administrator', '2017-02-10 02:09:23', 'administrator'),
(81, 'Cocacola Break', 'TVC_1.jpg', 'https://www.youtube.com/embed/nsjqc9eXD7Q', '3', 44, 0, '2017-02-23 23:16:21', 'administrator', '2017-02-27 20:14:11', 'administrator'),
(84, 'Vua Banh Bàn - Foosball', 'Phim_4.jpg', 'https://www.youtube.com/embed/hL-E-xaFprc', '4', 1, 1, '2017-02-27 19:59:25', 'administrator', '2017-02-27 19:59:25', 'administrator'),
(85, 'Vua Banh Bàn - Foosball', 'Phim_41.jpg', 'https://www.youtube.com/embed/hL-E-xaFprc', '4', 30, 0, '2017-02-27 20:06:54', 'administrator', '2017-03-01 00:17:19', 'administrator'),
(86, 'Doraemon: Nobita Thám Hiểm Vùng Đất Mới', '11.jpg', 'https://www.youtube.com/embed/crCzScFWlcg', '4', 43, 0, '2017-02-27 20:09:01', 'administrator', '2017-02-27 20:09:01', 'administrator'),
(87, 'Doraemon Stand By Me - Đôi Bạn Thân', '210.jpg', 'https://www.youtube.com/embed/c53o6Jmjevo', '4', 31, 0, '2017-02-27 20:10:32', 'administrator', '2017-02-27 20:10:32', 'administrator'),
(88, 'HKN Lunar New Year', 'TVC_2.jpg', 'https://www.youtube.com/embed/NGxHfPcZ_Yg', '3', 45, 0, '2017-02-27 20:19:27', 'administrator', '2017-02-27 20:19:27', 'administrator'),
(89, 'Omachi Spaghetti', 'TVC_3.jpg', 'https://www.youtube.com/embed/AlSEBWQb0bQ', '3', 46, 0, '2017-02-27 20:21:00', 'administrator', '2017-02-27 20:21:00', 'administrator'),
(90, 'Sữa Bắp Non LIF', 'TVC_4.jpg', 'https://www.youtube.com/embed/n-9wI6NLueY', '3', 47, 0, '2017-02-27 20:22:26', 'administrator', '2017-02-27 20:22:26', 'administrator'),
(91, 'Cocacola Break 2', 'TVC_5.jpg', 'https://www.youtube.com/embed/nsjqc9eXD7Q', '3', 48, 0, '2017-02-27 20:24:35', 'administrator', '2017-02-27 20:24:35', 'administrator');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `register_home`
--

CREATE TABLE `register_home` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `workplace` text CHARACTER SET utf32 COLLATE utf32_unicode_ci,
  `grade` text COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci,
  `tel` text COLLATE utf8_unicode_ci,
  `mail` text COLLATE utf8_unicode_ci,
  `fax` text COLLATE utf8_unicode_ci,
  `acreage` text COLLATE utf8_unicode_ci,
  `ads` text COLLATE utf8_unicode_ci,
  `add_question` text COLLATE utf8_unicode_ci,
  `bank_check` int(11) DEFAULT NULL,
  `is_delete` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `register_home`
--

INSERT INTO `register_home` (`id`, `name`, `workplace`, `grade`, `address`, `tel`, `mail`, `fax`, `acreage`, `ads`, `add_question`, `bank_check`, `is_delete`) VALUES
(1, '1', '2', '3', '4', '5', '6', '7', ' 112,4m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', '', 0, NULL),
(2, '1', '1', '11', '1', '1', '1', '1', NULL, NULL, '?????????', NULL, NULL),
(3, '', '', '', '', '', '', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên mạng', '', NULL, NULL),
(4, 'Đào Văn Vinh', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(5, 'Hoàng ', '', 'Hà đông', '', '01239136789', '', NULL, '92,2m2 2 phòng ngủ)', 'Quảng cáo trên mạng', '', 0, NULL),
(6, '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(7, '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(8, '', '', '', '', '', '', NULL, ' 151,5m2 (3 phòng ngủ)', NULL, '', NULL, NULL),
(9, 'Minh', '', '', '', '0988400255', 'daovanvinh85@gmail.com', NULL, NULL, NULL, '', NULL, NULL),
(10, 'Luong Huu Thang', 'Thuong Dinh,Thanh Xuan, Hanoi', '', 'Thuong Dinh,Thanh Xuan, Hanoi', '0909559099', 'luonghuuthang@hotmail.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên mạng', 'cho minh biet gia can ho.. toa nha bao nhieu tang??', 0, NULL),
(11, 'Trần Thị Thu Trang', 'Kinh Đô', 'NV', '', '0983926396', 'trangtran.pr@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', '', 0, NULL),
(12, 'nguyễn tuấn hùng', 'học viện ngân hàng', 'giảng viên', 'p0406-b2 tháp đôi HUD2 Tây Nam Linh Đàm', '0913031636', 'nguyentuanhunghvnh@gmail.com', NULL, '92,2m2 2 phòng ngủ)', 'Quảng cáo trên mạng', 'vay ngân hàng tối đa bao nhiêu %? thanh toán bao nhiêu đợt, số tièn từng đợt?', 0, NULL),
(13, 'hưng', 'Mato', 'Thiết kế', 'Nguyễn Bỉnh Khiêm', '0916595514', 'luongquochung.249@gmail.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên mạng', 'test mail', NULL, NULL),
(14, 'Do Thu Huyen', 'Bà/Cô', '', 'Thanh Xuan', '0964091992', 'dothuhuyen110992@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', 'Thong tin ve du an', NULL, NULL),
(15, 'an nguyen', 'asd', 'aSD', 'asdasd', '12345667788', 'an@an.com', NULL, ' 151,5m2 (3 phòng ngủ)', 'Quảng cáo trên mạng', 'asd', 0, NULL),
(16, 'an nguyen', 'asd', 'aSD', 'asdasd', '12345667788', 'an@an.com', NULL, ' 151,5m2 (3 phòng ngủ)', 'Quảng cáo trên mạng', 'asd', 0, NULL),
(17, '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(18, '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(19, '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(20, 'an nguyen', 'asd', 'aSD', 'asdasd', '3423523524324', 'an@an.com', NULL, ' 151,5m2 (3 phòng ngủ)', 'Quảng cáo trên Tivi', 'sd', NULL, NULL),
(21, 'an nguyen', 'asd', 'eqwe', 'we', '12314123124', 'an@an.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên Tivi', '', NULL, NULL),
(22, 'an nguyen', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(23, 'an nguyen', 'asd', 'aSD', 'asdasd', '1214214214', 'an@an.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên Tivi', '13213', 0, NULL),
(24, 'an nguyen', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(25, 'an nguyen', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(26, 'an nguyen', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(27, 'an nguyen', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(28, 'an nguyen', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(29, 'an nguyen', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(30, 'an nguyen', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(31, 'an nguyen', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(32, 'an nguyen', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(33, 'an nguyen', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(34, 'qweqwe', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(35, 'qwe', 'qwe', 'qwe', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(36, 'qweqwe', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(37, 'asdasdas', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(38, 'qweqwe', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(39, 'asdasd', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(40, 'asdas', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(41, 'asdasd', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(42, 'asdasd', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(43, 'asdasd', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(44, 'qweqweqwe', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(45, 'qwewqe', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(46, 'qweweqwe', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(47, 'hung', 'hkj', 'ljnjn', 'lnln', '9898897', 'njnj@gmlklk.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên mạng', 'ljnjnl', NULL, NULL),
(48, 'Hưng', 'QuocHung Paper', '', '18 Hoàng Sâm - Cầu Giấy', '', 'leka.249@gmail.com', NULL, NULL, NULL, '', NULL, NULL),
(49, 'Hưng', 'QuocHung Paper', '', '18 Hoàng Sâm - Cầu Giấy', '', 'leka.249@gmail.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên Tivi', 'cacsc', NULL, NULL),
(50, 'Hưng', 'QuocHung Paper', '', '18 Hoàng Sâm - Cầu Giấy', '09847477333', 'leka.249@gmail.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên Tivi', '', NULL, NULL),
(51, 'Hưng', 'QuocHung Paper', 'sếp', '18 Hoàng Sâm - Cầu Giấy', '012346788', 'leka.249@gmail.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên Tivi', '', NULL, NULL),
(52, 'Hưng', 'QuocHung Paper', 'sếp', '18 Hoàng Sâm - Cầu Giấy', '0916541414', 'leka.249@gmail.com', NULL, ' 151,5m2 (3 phòng ngủ)', 'Quảng cáo trên mạng', 'test', 0, NULL),
(53, 'asdsad', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(54, '213123', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(55, 'asdasd', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(56, 'Hưng ăn cứt gà', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(57, 'test email from stellar', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(58, 'An Nguyen', 'ha noi', 'quen', 'nhan hoa', '0943662946', 'vinhan16sep@gmail.com', NULL, ' 151,5m2 (3 phòng ngủ)', 'Quảng cáo trên mạng', 'k co', 0, NULL),
(59, 'an nguyen', 'ha noi', 'aSD', 'nhan hoa', '0943662946', 'vinhan16sep@gmail.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên Tivi', '123', 0, NULL),
(60, 'an nguyen', 'asd', 'aSD', 'asdasd', '0943662946', 'vinhan16sep@gmail.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên Tivi', 'das', 0, NULL),
(61, 'an nguyen', 'ha noi', 'aSD', 'asdasd', '0943662946', 'vinhan16sep@gmail.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên Tivi', 'qwewqe', 0, NULL),
(62, 'an nguyen', 'asd', 'aSD', 'asdasd', '0943662946', 'vinhan16sep@gmail.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên Tivi', 'dasdasd', 0, NULL),
(63, 'an nguyen', 'asd', 'aSD', 'asdasd', '0943662946', 'vinhan16sep@gmail.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'adsad', NULL, NULL),
(64, 'an nguyen', 'asd', 'aSD', 'asdasd', '0943662946', 'vinhan16sep@gmail.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'ádasdasd', 0, NULL),
(65, 'an nguyen', 'asd', 'aSD', 'asdasd', '0943662946', 'vinhan16sep@gmail.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên Tivi', 'ádasd', 0, NULL),
(66, 'aád', 'aád', 'ád', 'ád', '012312412687', 'vinhan16sep@gmail.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'ádas', NULL, NULL),
(67, 'ádas', 'ád', 'ádas', 'ád', '2142712846312', 'vinhan16sep@gmail.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên Tivi', 'ádasd', NULL, NULL),
(68, 'áádasd', 'ááddas', 'aadad', 'ádasd', '0943662946', 'vinhan16sep@gmail.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'ádasd', NULL, NULL),
(69, 'aáádasd', 'ád', 'áád', 'áád', '214124123213', 'vinhan16sep@gmail.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên Tivi', 'sadsad', NULL, NULL),
(70, 'ád', 'ád', 'áád', 'áád', '', 'aád', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'ádasdasd', NULL, NULL),
(71, 'áád', 'aáád', 'ád', 'ád', '1231231233213', 'an@an.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'ádasd', NULL, NULL),
(72, 'ưqewqe', 'qưe', 'qưe', 'qưe', '123123123', 'vinhan16sep@gmail.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'qưewqe', 0, NULL),
(73, '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(74, '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(75, 'Trần Thị Thu Trang', 'Hà Nội', 'Nhân viên', '93 Lò Đúc', '0969288383', 'bachlinh110@yahoo.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', 'giá bao nhiêu trên m2 thông thủy?', 0, NULL),
(76, 'hà ', 'hà giang', '', '', '0956556559', 'haquavh@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', 'Quảng cáo trên mạng', '', NULL, NULL),
(77, 'XUÂN', '', '', '', '097813456', '', NULL, '92,2m2 2 phòng ngủ)', ' Quảng cáo trên báo chí', 'bao giờ mở bán? có chương trình gì ko?', 0, NULL),
(78, 'Phượng', 'Hà Nội', 'Chuyên Viên', 'BIDV Thanh Xuân', '0913678985', '', NULL, ' 94,1m2 (2 phòng ngủ)', ' Quảng cáo trên báo chí', '', 0, NULL),
(79, 'Trương Hùng', 'hải dương', 'phó phòng', 'chi cục thi hành án tp Hải Dương', '0904634789', 'hungtruongthahd@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', 'Chương trình bốc thăm áp dụng đến ngày nào?', 0, NULL),
(80, 'Đỗ Anh Tuấn', 'công ty tư nhân', 'nhân viên', 'số 1 tôn thất tùng', '0947040131', 'datuan.hmu@gmail.com', NULL, ' 151,5m2 (3 phòng ngủ)', 'Quảng cáo trên mạng', '', 0, NULL),
(81, 'Trần Thị Thu Trang', 'Hà Nội', 'Nhân viên', '93 Lò Đúc', '0985936977', 'vi@gmail.com', NULL, '92,2m2 2 phòng ngủ)', ' Quảng cáo trên báo chí', '', NULL, NULL),
(82, '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(83, 'quang', 'BIDV hải phòng', 'nhân viên', '', '0967888984', '', NULL, ' 113,6m2 (3 phòng ngủ) ', 'Quảng cáo trên mạng', 'bao giờ bàn giao', 0, NULL),
(84, 'trang', 'Lò Đúc', 'NV', '93 Lò Đúc', '0969288383', 'bachlinh110@yahoo.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'ddgagaweg', 0, NULL),
(85, 'JimmiNu', 'IDIykBIhHPbotsQDt', 'IDohbpfxjJUhZsK', 'ImEnXprJVauSRoVpYk', '', 'ec12342vtv@hotmail.com', NULL, ' 94,1m2 (2 phÃ²ng ngá»§)', 'Biá»n quáº£ng cÃ¡o ngoÃ i trá»i', 'Y0MqNh http://www.FyLitCl7Pf7ojQdDUOLQOuaxTXbj5iNG.com', NULL, NULL),
(86, 'JimmiNu', 'cbWvuVyDdGLY', 'YwXDxxErOGN', 'WMUJWMIwpCZNxqbPeL', '', 'ec12342vtv@hotmail.com', NULL, ' 94,1m2 (2 phÃ²ng ngá»§)', 'Biá»n quáº£ng cÃ¡o ngoÃ i trá»i', 'dRaM4r http://www.FyLitCl7Pf7ojQdDUOLQOuaxTXbj5iNG.com', NULL, NULL),
(87, 'JimmiNu', 'jLsJsAZScHYHhxYBX', 'zJeuFjMXvdKbTsk', 'hlMgNHOvriddAVwnR', '', 'ec12342vtv@hotmail.com', NULL, ' 94,1m2 (2 phÃ²ng ngá»§)', 'Quáº£ng cÃ¡o trÃªn Tivi', 'TnY2pt http://www.FyLitCl7Pf7ojQdDUOLQOuaxTXbj5iNG.com', NULL, NULL),
(88, 'JimmiNu', 'DMedprWYwD', 'jBRWXbysf', 'QqXDwIMRbpGf', '', 'ec12342vtv@hotmail.com', NULL, '92,2m2 2 phÃ²ng ngá»§)', 'Biá»n quáº£ng cÃ¡o ngoÃ i trá»i', 'XYbB1Z http://www.FyLitCl7Pf7ojQdDUOLQOuaxTXbj5iNG.com', NULL, NULL),
(89, 'JimmiNu', 'utkmvnDAFDOKI', 'moIZmnCQjUpskRrskP', 'xZldwXNvrWYbubiZein', '', 'ec12342vtv@hotmail.com', NULL, '92,2m2 2 phÃ²ng ngá»§)', 'Biá»n quáº£ng cÃ¡o ngoÃ i trá»i', 'UmIpwY http://www.FyLitCl7Pf7ojQdDUOLQOuaxTXbj5iNG.com', NULL, NULL),
(90, 'Thu Trang', 'HN', 'NV', '', '0985320067', 'trang@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', 'rrhhhgfgg', 0, NULL),
(91, 'JimmiNi', 'oSNtENQAQyrP', 'qFnNUKHKc', 'lkEYUerBMMkPCzALELE', '', 'jimosa4ccf2@hotmail.com', NULL, '92,2m2 2 phÃ²ng ngá»§)', 'Quáº£ng cÃ¡o trÃªn Tivi', 'jkYkvg http://www.FyLitCl7Pf7ojQdDUOLQOuaxTXbj5iNG.com', NULL, NULL),
(92, 'JimmiNi', 'uNetntydgxg', 'tasqWjGk', 'xcQmhFztSHL', '', 'jimosa4ccf2@hotmail.com', NULL, ' 94,1m2 (2 phÃ²ng ngá»§)', 'Biá»n quáº£ng cÃ¡o ngoÃ i trá»i', 'QijULq http://www.FyLitCl7Pf7ojQdDUOLQOuaxTXbj5iNG.com', NULL, NULL),
(93, 'JimmiNi', 'drnNxnJkzxiYyKYUxXn', 'bFtTQFjIhdxjo', 'QbJjbFMyvfXIqvq', '', 'jimosa4ccf2@hotmail.com', NULL, ' 94,1m2 (2 phÃ²ng ngá»§)', 'Biá»n quáº£ng cÃ¡o ngoÃ i trá»i', 'Wvvnwq http://www.FyLitCl7Pf7ojQdDUOLQOuaxTXbj5iNG.com', NULL, NULL),
(94, 'GoldenTabs', 'GiCWygTBGPcaoEbqY', 'wWimPbWzWJRJaO', 'SumfhHGUshWHzapTF', '', 'support@goldentabs.com', NULL, ' 94,1m2 (2 phÃ²ng ngá»§)', 'Quáº£ng cÃ¡o trÃªn Tivi', 'mQkDmx https://goldentabs.com/', NULL, NULL),
(95, 'GoldenTabs', 'qyoffCbzNmpi', 'VQmaTfNDTPXSXsPCv', 'rFEGZHKasRsvallFtx', '', 'support@goldentabs.com', NULL, ' 94,1m2 (2 phÃ²ng ngá»§)', 'Quáº£ng cÃ¡o trÃªn Tivi', 'YVHHpp https://goldentabs.com/', NULL, NULL),
(96, 'GoldenTabs', 'vUdZANGfvZExOb', 'iFLmNDyfThBi', 'hIygWFmGMsNVTYOeoo', '', 'support@goldentabs.com', NULL, '92,2m2 2 phÃ²ng ngá»§)', 'Biá»n quáº£ng cÃ¡o ngoÃ i trá»i', 'O3TdKR https://goldentabs.com/', NULL, NULL),
(97, 'GoldenTabs', 'dJUtOZmWCRb', 'XNwFJWyxT', 'RUXSgREYsXsSyeE', '', 'support@goldentabs.com', NULL, '92,2m2 2 phÃ²ng ngá»§)', 'Quáº£ng cÃ¡o trÃªn Tivi', 'PocJoM https://goldentabs.com/', NULL, NULL),
(98, 'Barneyxcq', 'ngYQMynpxMjjfrXPf', 'dEArvNMstpk', 'GWaoQPyQkuUyUxPcqfl', '', 'jimosa4xf2@hotmail.com', NULL, '92,2m2 2 phÃ²ng ngá»§)', 'Quáº£ng cÃ¡o trÃªn Tivi', 'VsrjRk http://www.LnAJ7K8QSpfMO2wQ8gO.com', NULL, NULL),
(99, 'Barneyxcq', 'SxVBduhDrUczii', 'oKiBxqDtcVpWlcMuJlW', 'FzlhJjfvEIheUaU', '', 'jimosa4xf2@hotmail.com', NULL, '92,2m2 2 phÃ²ng ngá»§)', 'Biá»n quáº£ng cÃ¡o ngoÃ i trá»i', 'kPkujj http://www.LnAJ7K8QSpfMO2wQ8gO.com', NULL, NULL),
(100, 'Hưng Lương', 'Mato', 'Nhân viên', 'Cầu giấy', '0988765682', 'Hung@hung.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', '', 0, NULL),
(101, 'Minh', 'Mato', 'Nhân viên', 'Hà nội', '0998865245', 'Minh@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', '', 0, NULL),
(102, 'Minh Trường', 'Mato', 'Nhân viên', 'Hà nội', '423424234234234', 'Minh@gmail.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', '', NULL, NULL),
(103, 'Minh Trường', 'Mato', 'Nhân viên', 'Hà nội', '4342424242', 'Minh@gmail.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', '', NULL, NULL),
(104, 'Minh Trường', 'Mato', 'Nhân viên', 'Hà nội', '42342342342', 'minhtruong93gtvt@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', 'Biển quảng cáo ngoài trời', '', NULL, NULL),
(105, 'minh', 'mato', 'Nhân viên', 'Hà nội', '3423423423443', 'minhtruong93gtvt@gmail.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Biển quảng cáo ngoài trời', '', NULL, NULL),
(106, 'Minh Trường', 'Mato', 'Nhân viên', 'Hà nội', '342342341423', 'minhtruong93gtvt@gmail.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', '', NULL, NULL),
(107, 'Minh Trường', 'Mato', 'Nhân viên', 'Hà nội', '1324234234', 'minhtruong93gtvt@gmail.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', '', NULL, NULL),
(108, 'Minh Trường', 'Mato', 'Nhân viên', 'Hà nội', '342342424', 'minhtruong93gtvt@gmail.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', '', NULL, NULL),
(109, 'Minh Trường', 'Mato', 'Nhân viên', 'Hà nội', '2342', 'minhtruong93gtvt@gmail.com', NULL, ' 151,5m2 (3 phòng ngủ)', ' Quảng cáo trên báo chí', '', NULL, NULL),
(110, 'Minh Trường', 'Mato', 'Nhân viên', 'Hà nội', '23423423', 'minhtruong93gtvt@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', '', NULL, NULL),
(111, 'Minh Trường', 'Mato', 'Nhân viên', 'Hà nội', '123', 'minhtruong93gtvt@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', '', NULL, NULL),
(112, 'Minh Trường', 'Mato', 'Nhân viên', 'Hà nội', '2', 'minhtruong93gtvt@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', '', NULL, NULL),
(113, 'Minh Trường', 'Mato', 'Nhân viên', 'Hà nội', '23', 'minhtruong93gtvt@gmail.com', NULL, '92,2m2 2 phòng ngủ)', ' Quảng cáo trên báo chí', '', NULL, NULL),
(114, 'Minh Trường', 'Mato', 'Nhân viên', 'Hà nội', '123', 'minhtruong93gtvt@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', '', NULL, NULL),
(115, 'Minh Trường', 'Mato', 'Nhân viên', 'Hà nội', '424234234234', 'minhtruong93gtvt@gmail.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', '', NULL, NULL),
(116, 'Nguyễn Đăng Trung', 'Công ty TNHH An Quý Hưng', 'Nhân viên kinh doanh', 'Tầng 1B, Phố Nguyễn Thị Thâp', '0936865548', 'nguyendangtrung7477@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', 'Biển quảng cáo ngoài trời', '', 0, NULL),
(117, 'Nguyễn Đăng Trung', 'Công ty TNHH An Quý Hưng', 'Nhân viên kinh doanh', 'Tầng 1B, Phố Nguyễn Thị Thâp', '0936865548', 'nguyendangtrung7477@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', 'Biển quảng cáo ngoài trời', '', 0, NULL),
(118, 'Nguyễn Đăng Trung', 'Công ty TNHH An Quý Hưng', 'Nhân viên kinh doanh', 'Tầng 1B, Phố Nguyễn Thị Thâp', '0936865548', 'nguyendangtrung7477@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', 'Biển quảng cáo ngoài trời', 'Cần biết thêm về tổng quan dự án\r\n', 0, NULL),
(119, 'Vũ Văn Đẩu', 'Bamboos Việt Nam', 'Chủ tịch', '440 - Vĩnh Hưng - Hà Nội', '0942626457', 'dau.vv@bamboos.vn', NULL, ' 151,5m2 (3 phòng ngủ)', 'Quảng cáo trên mạng', 'Làm việc qua email', 0, NULL),
(120, 'Vũ Văn Đẩu', 'Bamboos Vietnam', 'Chairman', '440 - Vinh Hun - Hanoi', '0886612555', 'dau.vv@bamboos.vn', NULL, ' 151,5m2 (3 phòng ngủ)', 'Quảng cáo trên mạng', 'Working by email', 0, NULL),
(121, 'Trần Thị Thu', NULL, NULL, '', '123357897', '', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', '', 0, NULL),
(122, 'ARultutrof', 'ARultutrof', 'ARultutrof', 'https://www.cialissansordonnancefr24.com/est-il-possible-d\'acheter-du-cialis-en-pharmacie-sans-ordonnance/\r\n', '86423364947', 'raihooveiy@bestmailonline.com', '85868214592', NULL, NULL, ' This condition is quite limited by the reproductive system and could have several causes for example a results of injury or abnormal the flow of blood inside the testicles.  He is content, along with the the complete opposite of what we think senior years has in store for us. \r\nhttps://www.cialissansordonnancefr24.com/generique-du-cialis-en-france/ ', NULL, NULL),
(123, 'abc', NULL, NULL, 'abc', '0987777', '', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', '', 0, NULL),
(124, 'Lương Quốc Hưng', NULL, NULL, '19 Nguyễn Bỉnh Khiêm', '0909090909', 'luongquochung.249@gmail.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', '', 0, NULL),
(125, 'Lương Quốc Hưng', NULL, NULL, '19 Nguyễn Bỉnh Khiêm', '0916595514', 'luongquochung.249@gmail.com', NULL, '92,2m2 2 phòng ngủ)', 'Quảng cáo trên mạng', '', 0, NULL),
(126, 'an nguyen', NULL, NULL, 'asdasd', '012312313', 'vinhan16sep@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', 'asd', 0, NULL),
(127, 'an nguyen', NULL, NULL, 'ád', '0123', 'vinhan16sep@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', 'sad', 0, NULL),
(128, 'asd', NULL, NULL, 'asdasd', '123', 'vinhan16sep@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', 'asd', 0, NULL),
(129, 'asd', NULL, NULL, 'asdasd', '123', 'vinhan16sep@gmail.com', NULL, '92,2m2 2 phòng ngủ)', ' Quảng cáo trên báo chí', 'asd', 0, NULL),
(130, 'an nguyen', NULL, NULL, 'asdasd', '123', 'vinhan16sep@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', 'asd', 0, NULL),
(131, 'an nguyen', NULL, NULL, 'asdasd', '123', 'vinhan16sep@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', 'asd', 0, NULL),
(132, 'An Nguyen', NULL, NULL, 'nhan hoa', '123', 'vinhan16sep@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', ' asd', 0, NULL),
(133, 'An Nguyen', NULL, NULL, 'nhan hoa', '123', 'vinhan16sep@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', 'asd', 0, NULL),
(134, 'Thu Trang', NULL, NULL, 'Hà Nội', '0983925896', 'Trang.ttt@kinhdotcigroup.com', NULL, ' 113,6m2 (3 phòng ngủ) ', 'Biển quảng cáo ngoài trời', '', 0, NULL),
(135, 'Minh Trường', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, ' 113,6m2 (3 phòng ngủ) ', 'Biển quảng cáo ngoài trời', 'asd', 0, NULL),
(136, 'Minh Trường', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, ' 113,6m2 (3 phòng ngủ) ', 'Biển quảng cáo ngoài trời', 'asdasd', 0, NULL),
(137, 'Minh Trường', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, ' 113,6m2 (3 phòng ngủ) ', 'Biển quảng cáo ngoài trời', 'asda', 0, NULL),
(138, 'Minh Trường', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, ' 113,6m2 (3 phòng ngủ) ', 'Biển quảng cáo ngoài trời', 'asdad', 0, NULL),
(139, 'Minh Trường', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'asdasd', 0, NULL),
(140, 'Minh Trường', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, ' 113,6m2 (3 phòng ngủ) ', 'Biển quảng cáo ngoài trời', 'asdaasd', 0, NULL),
(141, 'Minh Trường', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'asdas', 0, NULL),
(142, 'Minh Trường', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'ádasd', 0, NULL),
(143, 'Minh Trường', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'ád', 0, NULL),
(144, 'Minh Trường', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'áda', 0, NULL),
(145, 'Minh Trường', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'ádas', 0, NULL),
(146, 'Minh Trường', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', '', 0, NULL),
(147, 'Minh Trường', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'ádasd', 0, NULL),
(148, 'Minh Trường', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, ' 113,6m2 (3 phòng ngủ) ', 'Biển quảng cáo ngoài trời', 'ádas', 0, NULL),
(149, 'Minh Trường', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'áda', 0, NULL),
(150, 'Thu Trang', 'HN', '', '', '0985555226', '', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', '', 0, NULL),
(151, 'Trang', NULL, NULL, 'HN', '0986772283', '', NULL, NULL, ' Quảng cáo trên báo chí', '', 0, NULL),
(152, 'Minh Trường', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, ' 113,6m2 (3 phòng ngủ) ', 'Biển quảng cáo ngoài trời', 'asdasd', 0, NULL),
(153, 'test', 'Mato', 'Nhân viên', 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, '92,2m2 2 phòng ngủ)', 'Biển quảng cáo ngoài trời', 'asd', 0, NULL),
(154, 'Thu Trang', 'Hà Nội', 'Nhân viên', 'Lò Đúc, Hà Nội', '0983925896', 'trang.ttt@kinhdotcigroup.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên Tivi', '', 0, NULL),
(155, 'Thu Trang', 'Hà Nội', '', 'HN', '0937256986', 'trang.pr@gmail.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên Tivi', '', 0, NULL),
(156, 'Thu Trang', 'HN', '', 'HN', '0123879200', 'trang.ttt@gmail.com', NULL, NULL, NULL, '', NULL, NULL),
(157, 'Thu Trang', 'HN', '', 'HN', '0123879200', 'trangtran.pr@gmail.com', NULL, NULL, NULL, '', NULL, NULL),
(158, 'Thu Trang', 'HN', '', 'HN', '0983925896', 'trangtran.pr@gmail.com', NULL, NULL, NULL, '', NULL, NULL),
(159, '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL),
(160, 'An Nguyen', 'ha noi', 'quen', 'nhan hoa', '123', 'vinhan16sep@gmail.com', NULL, NULL, NULL, '', NULL, NULL),
(161, 'hung', NULL, NULL, 'hoang sam', '0123456789', 'hung@hung.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Biển quảng cáo ngoài trời', '', 0, NULL),
(162, 'hung', NULL, NULL, 'hoang sam', '0123456789', 'hung@hung.com', NULL, '92,2m2 2 phòng ngủ)', 'Quảng cáo trên Tivi', '', 0, NULL),
(163, 'Minh Trường', NULL, NULL, 'Tô Hiệu', '0985767862', 'hanguyen@user.com', NULL, ' 113,6m2 (3 phòng ngủ) ', 'Biển quảng cáo ngoài trời', 'asdad', 0, NULL),
(164, 'Hưng', 'que', 'sep', '18 Hoàng Sâm - Cầu Giấy', '0916595514', 'leka.249@gmail.com', NULL, '92,2m2 2 phòng ngủ)', 'Quảng cáo trên mạng', '', 0, NULL),
(165, 'Hưng', NULL, NULL, '18 Hoàng Sâm - Cầu Giấy', '0916595514', 'leka.249@gmail.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Quảng cáo trên mạng', '', NULL, NULL),
(166, 'An Nguyen', 'ha noi', 'quen', 'nhan hoa', '123', 'vinhan16sep@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', 'asd', 0, NULL),
(167, 'An Nguyen', 'ha noi', 'quen', 'nhan hoa', '123', 'vinhan16sep@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', 'asd', 0, NULL),
(168, 'An Nguyen', 'ha noi', 'quen', 'nhan hoa', '123', 'vinhan16sep@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', 'asd', 0, NULL),
(169, 'An Nguyen', 'ha noi', 'quen', 'nhan hoa', '123', 'vinhan16sep@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', '', 0, NULL),
(170, 'An Nguyen', 'ha noi', 'quen', 'nhan hoa', '123', 'vinhan16sep@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', '', 0, NULL),
(171, 'An Nguyen', 'ha noi', 'quen', 'nhan hoa', '123', 'vinhan16sep@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', '', 0, NULL),
(172, 'Thu Trang', NULL, NULL, 'Hà nội', '0983925896', 'Trangtran.pr@gmail.com', NULL, '92,2m2 2 phòng ngủ)', ' Quảng cáo trên báo chí', '', 0, NULL),
(173, 'Hoàng Đình Kiên', '', '', '', '0934626396', 'dkienhoang@gmail.com', NULL, ' 94,1m2 (2 phòng ngủ)', 'Biển quảng cáo ngoài trời', '', 0, NULL),
(174, 'Thu Trang', NULL, NULL, 'Test', '0983925896', 'Trangtran.pr@gmail.com', NULL, ' 113,6m2 (3 phòng ngủ) ', ' Quảng cáo trên báo chí', 'Abc', 0, NULL),
(175, '', '', '', '', '', '7b7217648fad3a4d93122eed1c56681e@inboxer.net', NULL, ' 151,5m2 (3 phòng ngủ)', 'Quảng cáo trên mạng', '', 0, NULL),
(176, 'Judi', 'utmBsnbiVTls', 'qWvVprEtGhDiLdm', 'wouGjnYjLusjnBhYbww', '', 'support@genericpharmacydrug.com', NULL, ' 113,6m2 (3 phÃ²ng ngá»§) ', ' Quáº£ng cÃ¡o trÃªn bÃ¡o chÃ­', 'c84whL https://www.genericpharmacydrug.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `site_sessions`
--

CREATE TABLE `site_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `site_sessions`
--

INSERT INTO `site_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('05ajdl2pcnhtgjac8sct9b8ufdbo4cgd', '::1', 1526459767, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363435393736373b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('1mh2app9m713rs6n40lrg9n83bn55u5j', '::1', 1526466122, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436363132323b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236343636303735223b6c6173745f636865636b7c693a313532363436363132323b),
('257dpfvv4t89p2va2ptdroh3sk5jgsnm', '::1', 1526459096, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363435393039363b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('290g4vp0lp48mpp9a9cgdmbe1hdm95ed', '::1', 1526461126, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436313132363b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('29fmh82mlgp17qiiqcpovd2a0tm8tbk3', '::1', 1526466075, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436363037353b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236343431323538223b6c6173745f636865636b7c693a313532363436363037353b),
('2pgk3qi88rjq67sohot75ufi9qmghnii', '::1', 1526459439, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363435393433393b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('32fgn0nea19v2bqhpepcrpf58en6avc0', '::1', 1526467173, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436373137333b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236343636353039223b6c6173745f636865636b7c693a313532363436363534373b),
('3j92coo2h0r60b819i20rsc39i3hhd2l', '::1', 1526460490, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436303439303b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('4t0kqa6i7ttm4h7kfhplut8f80fdes8g', '::1', 1526465031, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436353033313b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('5s6emgob6d6cjgqoumhj5fh3qpp69evt', '::1', 1526466177, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436363137373b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236343636313232223b6c6173745f636865636b7c693a313532363436363137373b),
('61b4frvjlnhmrhnigkij0tjb8b52mt1k', '::1', 1526464114, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436343131343b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('8ip50oks5mjhst37b2458qr9e1lbeqit', '::1', 1526466547, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436363534373b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236343636353039223b6c6173745f636865636b7c693a313532363436363534373b),
('8l3i70umo1hf34aqalth7173m7qnp20m', '::1', 1526463195, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436333139353b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('a5ojd0hl2bmn5d537rb1bnclinv9625j', '::1', 1526467336, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436373333363b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31393a223132717579656e313240676d61696c2e636f6d223b656d61696c7c733a31393a223132717579656e313240676d61696c2e636f6d223b757365725f69647c733a313a2232223b6f6c645f6c6173745f6c6f67696e7c4e3b6c6173745f636865636b7c693a313532363436373333363b),
('aan7cj0l5qfs6gahp1hvmloonhgn47o7', '::1', 1526462169, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436323136393b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('bodats91qfsrsar6ell63b19476litkl', '::1', 1526458429, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363435383432393b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('cn3u4c7keh0g9ju86mtbc1v4g3p554k0', '::1', 1526465720, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436353732303b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('dph3k2uaeg94k3m0p50v3mt4lr91uufc', '::1', 1526462471, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436323437303b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('ds4rcqcn90nvjekovbcnukmm85tr1mng', '::1', 1526465401, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436353430313b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('hsbe319e4qkgkhvhr2h88mhkqdrdiagp', '::1', 1526462805, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436323830353b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('iv5utfd66r70e16rmh88v78as9u58h7e', '::1', 1526460792, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436303739323b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('kfpgjlklf3kjei2emfa598vgp55j1atv', '::1', 1526464425, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436343432353b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('l9be7f3d3sk5o3bflarhn9q2k33rt65f', '::1', 1526466494, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436363439343b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236343636323336223b6c6173745f636865636b7c693a313532363436363439343b),
('l9p9ho6buhr20psg2v70ogogd8am3amk', '::1', 1526467706, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436373730363b6c616e67416262726576696174696f6e7c733a323a22656e223b),
('la4s1815unepicnbcu1g8r7ogqb4t2hu', '::1', 1526460186, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436303138363b6c616e67416262726576696174696f6e7c733a323a227669223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('lav4qe6gol1ce8loq10lefosj7gits97', '::1', 1526463805, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436333830353b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('ln1fakdh9a1fmmlrot1lrrolc79j48g3', '::1', 1526467548, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436373534383b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31393a223132717579656e313240676d61696c2e636f6d223b656d61696c7c733a31393a223132717579656e313240676d61696c2e636f6d223b757365725f69647c733a313a2232223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236343637333336223b6c6173745f636865636b7c693a313532363436373534383b),
('nfmhebf2klgv96dcensksncmrf2ss787', '::1', 1526461717, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436313731373b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('p4urk6t15lp7vsdisdrjhgj0m3d5qtnf', '::1', 1526466509, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436363530393b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236343636343934223b6c6173745f636865636b7c693a313532363436363530393b),
('r79doeegabibhd6s7bm6ju1j9fq2emvj', '::1', 1526464727, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436343732373b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b),
('u5l6nmqt1ck3tf2mkskgvfbh98ee4v06', '::1', 1526466236, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436363233363b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236343636313737223b6c6173745f636865636b7c693a313532363436363233363b),
('v8807685v0qdcpv5c6emt75v3hcidpvm', '::1', 1526463497, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532363436333439373b6c616e67416262726576696174696f6e7c733a323a22656e223b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353236333935313731223b6c6173745f636865636b7c693a313532363434313235383b);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'admin', '$2y$08$SCrMKrLCFD4QCEAg0wLl.urjlnfW1FXb8u6hBPJn6FwI0iOxIa7LC', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1526466547, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'quyenvkbn', '$2y$08$ri/PZR2J4T8C4rsiPnLxIOhtlCi7RjLS7BYcPPoJgJ71.F/NSdvaW', NULL, '12quyen12@gmail.com', NULL, NULL, NULL, NULL, 1526467289, 1526467548, 1, 'Nguyễn', 'Quyền', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 2, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images_process`
--
ALTER TABLE `images_process`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `languagues`
--
ALTER TABLE `languagues`
  ADD PRIMARY KEY (`abbreviation`);

--
-- Chỉ mục cho bảng `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `members_translation`
--
ALTER TABLE `members_translation`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post_en`
--
ALTER TABLE `post_en`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `process_en`
--
ALTER TABLE `process_en`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qa`
--
ALTER TABLE `qa`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `qa_en`
--
ALTER TABLE `qa_en`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `register_home`
--
ALTER TABLE `register_home`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `site_sessions`
--
ALTER TABLE `site_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bds_sessions_timestamp` (`timestamp`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `images_process`
--
ALTER TABLE `images_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `members_translation`
--
ALTER TABLE `members_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `post_en`
--
ALTER TABLE `post_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `process`
--
ALTER TABLE `process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `process_en`
--
ALTER TABLE `process_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `qa`
--
ALTER TABLE `qa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `qa_en`
--
ALTER TABLE `qa_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `references`
--
ALTER TABLE `references`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT cho bảng `register_home`
--
ALTER TABLE `register_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
