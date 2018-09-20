-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 21, 2018 lúc 08:34 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `date_add` varchar(50) NOT NULL,
  `date_update` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `email`, `phone`, `address`, `hinhanh`, `date_add`, `date_update`) VALUES
(18, 'Lại Thanh Tùng', 'ltta10', 'huytungtrang', 'tung10111995@gmail.com', '0972952691', 'Hồng phong- Vũ thư- Thái bình', 'abc.jpg', '23/05/2018 - 13:03:46', '25/05/2018 - 19:48:02'),
(19, 'Lại Thanh Tùng1', 'ltta11', 'huytungtrang', 'tung10111996@gmail.com', '0972952691', 'Hồng phong- Vũ thư- Thái bình', '16265440_1797870660538820_6718169477807409497_n.jpg', '23/05/2018 - 13:05:17', '02/06/2018 - 18:59:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anhgioithieu`
--

CREATE TABLE `anhgioithieu` (
  `id_anh` int(10) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `chitiet` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `anhgioithieu`
--

INSERT INTO `anhgioithieu` (`id_anh`, `hinhanh`, `chitiet`, `date`) VALUES
(1, 'gioithieu1.jpg', 'Cửa hàng chúng tôi!', '2018-05-16'),
(2, 'gioithieu2.jpg', 'Cửa hàng chúng tôi!', '2018-05-25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsp`
--

CREATE TABLE `chitietsp` (
  `masp` int(50) UNSIGNED NOT NULL,
  `ten_sp` varchar(50) NOT NULL,
  `gia` int(20) NOT NULL,
  `sale` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `loaisanpham` varchar(50) NOT NULL,
  `motasp` varchar(10000) NOT NULL,
  `soluong` varchar(50) NOT NULL,
  `banroi` int(11) NOT NULL,
  `date_add` varchar(50) NOT NULL,
  `date_xuly` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitietsp`
--

INSERT INTO `chitietsp` (`masp`, `ten_sp`, `gia`, `sale`, `hinhanh`, `loaisanpham`, `motasp`, `soluong`, `banroi`, `date_add`, `date_xuly`) VALUES
(1, 'Phúc An Khang', 1300000, 0, 'phucankhang.jpg', 'Hoa Ngày Tết', 'Chậu lan hồ điệp tím gồm 5 cành lan hồ điệp sang trọng, với kiểu dáng đẹp được trồng trong chậu sứ cao cấp như lời chúc gửi đến người nhận. Mong cho luôn được hạnh phúc an khang. Cuộc sống vui vẻ và bình yên. Thích hợp tặng cho dịp sinh nhật, khai trương, đối tác gặp mặt.                ', '33', 17, '25/05/2018 - 11:42:10', '2018-06-12'),
(2, 'Sung Túc', 2000000, 1800000, 'sungtuc.jpg', 'Hoa Ngày Tết', 'Sung túc vào nhà, phú quý vinh hoa. Chậu lan với 5 cành lan tím như lời cầu chúc cho cuộc sống sung túc và đầy đủ. Đây chắc chắn sẽ là món quà tuyệt vời dành tặng cho đối tác, cho người thân yêu                                                ', '33', 17, '25/05/2018 - 11:44:13', '2018-06-12'),
(3, 'Phúc Lộc Thọ', 750000, 0, 'phucloctho.jpg', 'Hoa Ngày Tết', 'Chậu lan \"Phúc - Lộc - Thọ\" gồm 3 cành lan vàng. Tượng trưng cho 3 điều may mắn trong cuộc sống. Không chỉ là lời chúc mừng dành tặng người thân yêu mà còn là món quà tuyệt vời dành tặng đối tác dịp mùa xuân đang đến.                                                ', '27', 16, '25/05/2018 - 11:45:44', '2018-06-12'),
(4, 'Phước Vĩnh Cửu', 2000000, 0, 'phucvinhcuu.jpg', 'Hoa Ngày Tết', '\"Phước vĩnh cửu\" gồm 11 cây hoa lan hồ điệp được trang trí trong chậu sứ trắng cao cấp với phong cách Tết là lời chúc nồng ấm đầu năm cho bạn bè, mang đến tài lộc, thịnh vượng và phong thủy cho gia chủ. Những bông hồ điệp trang nhã sẽ thích hợp cho các phòng khách có không gian, một chậu lan hồ điệp được trang trí đặc biệt càng tăng thêm sự ấm cúng và sang trọng của không gian ngôi nhà.                                ', '34', 16, '25/05/2018 - 11:47:11', '2018-06-12'),
(5, 'Cung Chúc Tân Niên', 2500000, 2300000, 'cungchuctannien.jpg', 'Hoa Ngày Tết', '\"Cung chúc tân niên\" gồm 10 cây hoa lan hồ điệp được trang trí trong chậu sứ trắng cao cấp với phong cách Tết là lời chúc nồng ấm đầu năm cho bạn bè, mang đến tài lộc, thịnh vượng và phong thủy cho gia chủ. Những bông hồ điệp trang nhã sẽ thích hợp cho các phòng khách có không gian, một chậu lan hồ điệp được trang trí đặc biệt càng tăng thêm sự ấm cúng và sang trọng của không gian ngôi nhà.                                                                ', '34', 16, '25/05/2018 - 11:48:10', '2018-06-12'),
(6, 'Xuân Đong Đầy', 4000000, 0, 'xuandongday.jpg', 'Hoa Ngày Tết', '\"Xuân đong đầy\" gồm 15 cây hoa lan hồ điệp được trang trí trong chậu sứ trắng cao cấp với phong cách Tết là lời chúc nồng ấm đầu năm cho bạn bè, mang đến tài lộc, thịnh vượng và phong thủy cho gia chủ. Những bông hồ điệp trang nhã sẽ thích hợp cho các phòng khách có không gian, một chậu lan hồ điệp được trang trí đặc biệt càng tăng thêm sự ấm cúng và sang trọng của không gian ngôi nhà.                                                ', '35', 15, '25/05/2018 - 11:49:04', '2018-06-12'),
(7, 'Phước Vĩnh Cửu 2', 2500000, 0, 'phuocvinhcuu2.jpg', 'Hoa Ngày Tết', 'Từ lâu nay, số 9 là con số của hạnh phúc an lành và thuận lợi. Đó là con số tượng trưng cho sự vĩnh cửu đẹp đẽ. Rất nhiều người thích số 9 vì nó gần như là hình ảnh cho sự viên mãn tròn đầy. Mẫu hoa \"Phước vĩnh cửu 2\" được thiết kế từ 9 cành lan hồ điệp sẽ là món quà tuyệt vời dành tặng những người thân yêu của bạn.                                ', '41', 9, '25/05/2018 - 11:50:07', '2018-06-12'),
(8, 'Phú Quý', 800000, 0, 'phuquy.jpg', 'Hoa Ngày Tết', '\"Phú quý \" gồm 1 cành lan hồ điệp trắng được thiết kế đơn giản, sang trọng mang theo lời chúc may mắn và an lành đến người nhận. Đây sẽ là món quà tuyệt vời cho những người thân yêu của bạn.                                ', '35', 15, '25/05/2018 - 11:51:13', '2018-06-12'),
(9, 'Vạn Sự Thành', 900000, 800000, 'vansuthanh.jpg', 'Hoa Ngày Tết', 'Với thiết kế từ 2 cành lan hồ điệp màu vàng tươi sáng, vừa mang ý nghĩa của sự hưng thịnh, lại vừa mang ý nghĩa của sự chắc chắn, của niềm tin vào ngày mai thành đạt. “Vạn sự thành ” chính là một lời chúc đầy tốt đẹp và đáng được mong đợi.                                                ', '29', 15, '25/05/2018 - 11:52:46', '2018-06-12'),
(10, 'Chan Hòa', 500000, 0, 'chanhoa.jpg', 'Hoa Ngày Tết', 'Chan hòa gồm 2 cành lan hồ điệp: trắng và tím - một tinh khôi, sang trọng; một lãng mạn, quý phái. Mẫu hoa chính là thông điệp may mắn, thịnh vượng, tài lộc cho người nhận. Đây sẽ là món quà tuyệt vời cho những người thân yêu của bạn.                                                ', '30', 15, '25/05/2018 - 11:54:27', '2018-06-12'),
(11, 'Vinh Hoa', 500000, 0, 'vinhhoa.jpg', 'Hoa Ngày Tết', '\"Vinh hoa\" gồm 2 cành hồ điệp tím được trang trí đơn giản, cách điệu nhưng vẫn thể hiện được vẻ đẹp sang trọng, độc đáo của lan hồ điệp. Mẫu hoa thích hợp làm quà tặng, quà tặng cho những người thân yêu của bạn.                                 ', '12', 13, '25/05/2018 - 11:55:20', '2018-06-12'),
(12, 'Phúc Duyên Tràn Đầy', 1250000, 1000000, 'phucduyentranday.jpg', 'Hoa Ngày Tết', '\"Phúc duyên tràn đầy\" gồm 5 cây hoa lan hồ điệp trắng được trang trí trong chậu sứ trắng cao cấp với phong cách Tết là lời chúc nồng ấm đầu năm cho bạn bè, mang đến tài lộc, thịnh vượng và phong thủy cho gia chủ. Những bông hồ điệp trắng trang nhã sẽ thích hợp cho các phòng khách có không gian nhỏ, một chậu lan hồ điệp được trang trí đặc biệt càng tăng thêm sự ấm cúng và sang trọng của không gian ngôi nhà. (Hiện tại LovelyFlowers chỉ cung cấp Lan Hồ Điệp tại thị trường Hà Nội.)                                                                ', '28', 13, '25/05/2018 - 11:56:57', '2018-06-12'),
(13, 'Lộc Vừng', 1500000, 0, 'locvung.jpg', 'Hoa Ngày Tết', 'Lộc Vừng gồm có 5 cây hoa lan hồ điệp màu tím cao cấp là lời chúc nồng ấm đầu năm cho bạn bè, mang đến tài lộc, thịnh vượng và phong thủy cho gia chủ. Thích hợp cho các phòng khách có không gian nhỏ càng tăng thêm sự ấm cúng và sang trọng của không gian ngôi nhà. (Hiện tại LovelyFlowers chỉ cung cấp Lan Hồ Điệp tại thị trường Hà Nội)                                                                ', '24', 13, '25/05/2018 - 11:58:07', '2018-06-12'),
(14, 'Nghinh Xuân', 1500000, 0, 'nghinhxuan.jpg', 'Hoa Ngày Tết', 'Nghinh Xuân gồm 5 cành lan hồ điệp màu vàng chanh rực rỡ, rất thích hợp cho những ngày tết đến xuân về. (Hiện tại LovelyFlowers chỉ cung cấp Lan Hồ Điệp tại thị trường Hà Nội.)                ', '31', 14, '25/05/2018 - 11:59:31', '2018-06-12'),
(15, 'Giây Phút Em Đềm', 800000, 700000, 'giay-phut-em-dem.jpg', 'Hoa Cầm Tay Cô Dâu', 'Bó hoa đơn giản với hoa hồng trắng phối hợp cùng hoa baby tạo nên sức cuốn hút đặc biệt. Màu trắng của sự tinh khôi như màu váy cô dâu trong ngày vui trọng đại của đời mình. Bó hoa khoác lên mình một vẻ đẹp sang trọng đến lạ lùng                                                          ', '34', 16, '25/05/2018 - 12:02:46', '2018-06-15'),
(16, 'Nụ Hôn Cho Em', 100000, 0, 'nu-hon-cho-em.jpg', 'Hoa Cầm Tay Cô Dâu', 'Với chủ đạo hoa hồng da và tone màu nhẹ nhàng tựa như những nụ hôn ngọt ngào chàng trai dành cho người phụ nữ của đời mình trong ngày hạnh phúc nhất cuộc đời mình. Bó hoa cưới thích hợp cho những cô dâu thích sự giản dị và mộc mạc                ', '38', 12, '25/05/2018 - 12:04:08', '2018-06-15'),
(17, 'Bên Nhâu Mãi Mãi', 1000000, 900000, 'ben-nhau-mai-mai.jpg', 'Hoa Cầm Tay Cô Dâu', '   Bó hoa cưới với tone màu pastel nhẹ nhàng với chủ đạo là hoa hồng như lời cầu chúc cho hạnh phúc của cô dâu và chú rể cũng như sự vui mừng của hai họ. Họ yêu nhau và cũng nhau sống bên nhau mãi mãi bền lâu không chia rời               \r\n                                               ', '28', 22, '25/05/2018 - 12:04:47', '2018-06-15'),
(18, 'Hoa Rum Tinh Khôi', 1000000, 0, 'hoa-rum-tinh-khoi.jpg', 'Hoa Cầm Tay Cô Dâu', 'Bó hoa cưới chủ đạo là hoa rum trắng thật mỏng manh nhưng vẫn khoác lên mình vẻ đẹp sang trọng và tinh khôi đến lạ. Phối hợp cùng baby trắng đây chắc chắn sẽ là bó hoa cưới đặc biệt dành tặng cho cô dâu trong ngày trọng đại nhất đời mình                  ', '27', 23, '25/05/2018 - 12:05:31', '2018-06-15'),
(19, 'Ta Mãi Bên Nhau', 1200000, 1050000, 'ta-mai-ben-nhau.jpg', 'Hoa Cầm Tay Cô Dâu', 'Bó hoa với tone màu dịu dàng, ngọt ngào thêm gia vị cho cuộc sống hôn nhân luôn đẹp đẽ và bình yên. Phù hợp với cô dâu yêu thích sự nhẹ nhàng, dịu êm như viên kẹo ngọt                                                 ', '40', 10, '25/05/2018 - 12:06:20', '2018-06-15'),
(20, 'Bên Nhau Trọn Đời', 800000, 0, 'ben-nhau-tron-doi.jpg', 'Hoa Cầm Tay Cô Dâu', 'Như tên gọi của mình bó hoa với nhiều tone màu nhẹ nhàng trong trẻo như cuộc sống hôn nhân luôn bình yên và hạnh phúc bên nhau đi hết cuộc đời này                      ', '18', 32, '25/05/2018 - 12:07:07', '2018-06-15'),
(21, 'Ngọn Lửa Tình Yêu', 800000, 700000, 'ngon-lua-tinh-yeu.jpg', 'Hoa Cầm Tay Cô Dâu', 'Bó hoa thiết kế với tone màu đỏ rực sắc với điểm nhấn trắng tinh khôi dành cho cô dâu thích hồng đỏ cũng như tone màu đỏ - màu của sự mãnh liệt như ngọn lửa yêu thương bùng chày mãi mãi                                 ', '19', 31, '25/05/2018 - 12:07:41', '2018-06-15'),
(22, 'Will You Marry Me !!!', 1000000, 0, 'will-you-marry-me-.jpg', 'Hoa Cầm Tay Cô Dâu', 'Bó hồng đỏ được bó tròn với hoa được tuyển chọn như lời cầu hôn của chàng trai dành cho người con gái với mong muốn được sống bên nhau mãi mãi. Tình yêu trọn vẹn như hình dáng của bó hoa với tone màu đỏ thắm - cực kì đơn giản                                ', '22', 28, '25/05/2018 - 12:08:58', '2018-06-15'),
(23, 'Cung Đàn Tình Yêu', 700000, 0, 'cung-dan-tinh-yeu.jpg', 'Hoa Cầm Tay Cô Dâu', 'Cung đàn tình yêu là bó hoa thiết kế với đa sắc màu lung linh, rực rỡ như cung bậc cảm xúc trong tình yêu cùng đích đến cuối cùng là cuộc sống hôn nhân - bến đỗ của hạnh phúc                ', '22', 26, '25/05/2018 - 12:09:37', '2018-06-15'),
(24, 'Happy Ending', 1200000, 1050000, 'happy-ending.jpg', 'Hoa Cầm Tay Cô Dâu', 'Bó hoa thiết kế phong cách sang trọng với nhiều loại hoa cao cấp giúp cô dâu thêm phần sang trọng và quý phái khi sánh vai cùng chú rể cùng nhau xây đắp hạnh phúc                                                 ', '23', 24, '25/05/2018 - 12:10:41', '2018-06-15'),
(25, 'Ta Thuộc Về Nhau', 800000, 0, 'ta-thuoc-ve-nhau.jpg', 'Hoa Cầm Tay Cô Dâu', 'Ngày vui nhất là bó hoa thiêt kế chủ đạo với hồng đỏ phù hợp cho cô dâu thích sự nồng cháy, rạng ngời và rực rỡ trong ngày hạnh phúc nhất đời mình                ', '31', 18, '25/05/2018 - 12:11:17', '2018-06-14'),
(26, 'Vì Sao Trong Tôi', 1000000, 900000, 'vi-sao-trong-toi.jpg', 'Hoa Cầm Tay Cô Dâu', 'Bó hoa Vì sao trong tôi thiết kế hiện đại nhưng đơn giản tạo cảm giác thanh thoát và gần gũi dành cho những cô dâu thích sự thân quen, thời thượng nhưng vẫn có hoài cổ như sự thăng trầm trong tình yêu                                ', '12', 12, '25/05/2018 - 12:11:57', '2018-06-14'),
(27, 'TÌnh Đắm Say', 850000, 0, 'tinh-dam-say.jpg', 'Hoa Cầm Tay Cô Dâu', 'Hoa hồng đỏ và điểm tô với xanh lá như sự mãnh liệt và nhẹ nhàng trong tình yêu. Phù hợp cho những cô dâu thích sự mạnh mẽ và đơn giản                                ', '29', 21, '25/05/2018 - 12:12:44', '2018-06-14'),
(28, 'Miền Cát Trắng', 600000, 0, 'mien-cat-trang.jpg', 'Hoa Cầm Tay Cô Dâu', 'Xuyên suốt bó hoa là tone màu trắng làm chủ đạo tạo sự êm đềm và sâu lắng như bãi cát trắng mềm mại và êm ái tiếp thêm niềm vui cho cô dâu, chú rể trong những bước đi đầu tiên trong đời sống hôn nhân                                                        ', '22', 16, '25/05/2018 - 12:13:30', '2018-06-14'),
(29, 'Đồi Thông Hạnh Phúc', 800000, 700000, 'doi-thong-hanh-phuc.jpg', 'Hoa Cầm Tay Cô Dâu', 'Bó hoa thiết kế với ý tưởng từ những ngọn đồi thông ở Đà Lạt - nơi chụp hình cưới của nhiều đôi lứa yêu nhau. Bó hoa phù hợp với cô dâu thích sự tươi trẻ, năng động vương vấn chút hoài niệm                                ', '33', 17, '26/05/2018 - 14:07:01', '2018-06-14'),
(30, 'Khi Ta Bên Nhau', 1000000, 900000, 'khi-ta-ben-nhau.jpg', 'Hoa Cầm Tay Cô Dâu', 'Bó hoa thiết kế với sự nhiều tone màu rực rỡ đầy sức sống. Trong nhịp sống vội vã chúng ta luôn cần những giây phút bên nhau luôn nồng ấm và sôi nổi của tuổi trẻ                                ', '33', 17, '27/05/2018 - 00:18:41', '2018-06-14'),
(31, 'Đôi Cánh Tình Yêu', 3000000, 2800000, 'doi-canh-tinh-yeu.jpg', 'Hoa Cầm Tay Cô Dâu', 'Bó hoa được thiết kế hiện đại với hoa hồng trắng và hoa lan hồ điệp trắng - loài hoa của may mắn chắp cánh cho cuộc sống hôn nhân luôn bay cao và bay xa trong bầu trời tình yêu. Phù hợp cho cô dâu thích sự sang trọng, cao quý, và tone mau trắng                                           ', '29', 31, '27/05/2018 - 00:19:33', '2018-06-14'),
(32, 'Rainbow Love', 800000, 0, 'rainbow-love.jpg', 'Hoa Cầm Tay Cô Dâu', 'Bó hoa thiết kế với màu sắc rực rỡ như tình yêu mãnh liệt và sự nồng cháy khi yêu. Sau \"cơn mưa\" là cầu vồng, là bến bờ hạnh phúc                                                ', '22', 28, '27/05/2018 - 00:20:27', '2018-06-14'),
(33, 'Tính Khúc Vàng', 1500000, 1350000, 'tinh-khuc-vang.jpg', 'Hoa Cầm Tay Cô Dâu', 'Tình khúc vàng là bó hoa thiết kế chủ đạo tone màu vàng và màu hồng như khúc hát vang lên trầm bổng và nhẹ nhàng chúc phúc cho tình yêu khi cặp đôi yêu nhau cùng nắm tay nhau đi trên con đường hạnh phúc.                ', '14', 27, '27/05/2018 - 00:21:06', '2018-06-14'),
(34, 'Pha Lê Tím', 700000, 0, 'pha-le-tim.jpg', 'Hoa Cầm Tay Cô Dâu', 'Pha Lê Tím như cái tên của mình bó hoa tựa như viên pha lê lấp lánh, quý giá như cuộc sống hôn nhân phải luôn yêu thương và tôn trọng nhau với tình yêu vĩnh cửu - tình yêu pha lê                ', '25', 24, '27/05/2018 - 00:22:17', '2018-06-14'),
(35, 'Mãi Mãi Yêu Em', 700000, 0, 'mai-mai-yeu-em.jpg', 'Hoa Cầm Tay Cô Dâu', 'Bó hoa được thiết kế với hoa hồng trắng và cẩm chướng tạo nên sự cao sang và quyến rũ giúp cô dâu đã xinh đẹp nay còn quyến rũ hơn trong mắt mọi người                ', '25', 15, '27/05/2018 - 00:22:55', '2018-06-14'),
(36, 'Chân Tình', 700000, 0, 'chan-tinh.jpg', 'Hoa Cầm Tay Cô Dâu', 'Chân tình được thiết kế với nhiều loại hoa kết hợp với nhau với tone màu ngọt ngào phù hợp với cô dâu thích sự tươi mới, ngọt ngào và tình cảm                                ', '9', 11, '27/05/2018 - 00:23:30', '2018-06-14'),
(37, 'Miền Đông Thảo', 650000, 0, 'mien-dong-thao.jpg', 'Hoa Cầm Tay Cô Dâu', 'Tone màu trắng làm chủ đạo tạo sự êm đềm và sâu lắng như cánh đồng hoa khoe sắc nâng bước cho cô dâu, chú rể những bước đi đầu tiên trong đời sống hôn nhân                ', '17', 13, '27/05/2018 - 00:24:14', '2018-06-14'),
(38, 'Vườn Hồng', 600000, 0, 'vuon-hong.jpg', 'Hoa Cầm Tay Cô Dâu', 'Bó hoa bao gồm 20 bông hoa hồng với nhiều tone màu được florist phối hợp tinh tế để tạo ra dành cho những cô dâu có sự yêu thích đặc biệt với hoa hồng - loài hoa của tình yêu.                ', '18', 12, '27/05/2018 - 00:24:52', '2018-06-14'),
(39, 'Con Đường Màu Xanh', 1000000, 900000, 'con-duong-mau-xanh.jpg', 'Hoa Cầm Tay Cô Dâu', 'Bó hoa \"Con đường màu xanh\" tone màu xanh lá cây chủ đạo thích hợp với cô dâu thích tone màu của thiên nhiên, sự thoải mái và tươi mới trên bước đường mới                                ', '9', 11, '27/05/2018 - 00:25:32', '2018-06-14'),
(40, 'Kính Trọng', 600000, 0, 'kinhtrong.jpg', 'Hoa Tặng Mẹ', 'Những đóa sen tươi thắm đang đua nhau khoe sắc màu cao quý và sang trọng kính tặng ông bà, cha mẹ, thầy cô, những người lớn tuổi,... để thể hiện lòng hiếu thảo, sự biết ơn vô bờ bến của con cháu, của học trò và kính chúc ông bà, cha mẹ, thầy cô sức khỏe thật dồi dào và vui vẻ. Thích hợp để tặng chúc mừng, kỉ niệm,...                ', '13', 7, '27/05/2018 - 00:30:23', '2018-06-16'),
(41, 'Tình Yêu Diệu Kỳ', 500000, 0, 'tinhyeudieuki.jpg', 'Hoa Tặng Mẹ', 'Tình yêu là thứ cảm xúc đẹp đẽ và mạnh mẽ nhất. Tình yêu cho chúng ta sống giữa mộng mơ và thực tại, cho chúng ta nếm trải đầy đủ cung bậc cảm xúc: Hỉ - nộ - ái - ố. Phức tạp là vậy nhưng nào có ai trách vì mình được yêu quá nhiều bao giờ, người ta chỉ buồn vì chưa tìm ra tình yêu của đời mình mà thôi. Giỏ hoa là lời chúc, là sự tôn vinh cho sự diệu kỳ của tình yêu.                                ', '0', 18, '27/05/2018 - 00:31:27', '2018-06-16'),
(42, 'Ngày Đông', 600000, 0, 'ngaydong.jpg', 'Hoa Tặng Mẹ', 'Điều gì khiến tôi yêu em đến trọn vẹn\". Phải chăng là ánh mắt ngời ngời trong sáng của em mỗi khi nhìn tôi khiến tim tôi xao xuyến đến lạ kì. Nếu lựa chọn tôi sẽ chọn bó hoa hồng trắng để gửi tặng người con gái tôi yêu. Bởi bó hoa thay lời tôi muốn nói, rằng tình yêu tôi dành cho em trong sáng,không lẫn vật chất và vô cùng thiêng liêng. Và bó hoa này sẽ là món quà đặc biệt tôi dành tặng cho em, cô gái nhỏ của tôi.                                                ', '22', 18, '27/05/2018 - 00:32:37', '2018-06-16'),
(43, 'Romence', 450000, 0, 'romence.jpg', 'Hoa Tặng Mẹ', '\"Romance\" là bó hoa được thiết kế với màu hồng sắc rực như là hi vọng một hạnh phúc tròn đầy với những điều lãng mạn nhưng đôi lúc cũng chậm lại với đủ đầy những cung bậc của bình yên và nốt lặng của đời. Hãy ngắm nhìn, cảm nhận, và dành tặng bó hoa này cho người bạn yêu thương, nhé!                                ', '14', 16, '27/05/2018 - 00:33:27', '2018-06-16'),
(44, 'Tình Bạn Hữu', 700000, 0, 'tinhbanhuu.jpg', 'Hoa Tặng Mẹ', 'Cuộc đời của mỗi người ai cũng có những mối quan hệ, qua những mối quan hệ đó ta lại có thêm tình bạn đẹp. Tình bạn, định nghĩa đơn giản mà mỗi chúng ta đều biết, chính là sự sẻ chia, gắn bó, đồng cảm, giúp đỡ và tâm sự cùng nhau. Họ đến với nhau bởi cùng quan điểm, lý tưởng và khát vọng sống.                                ', '10', 10, '27/05/2018 - 00:34:49', '2018-06-16'),
(45, 'Ngày Nắng Lên', 1000000, 900000, 'ngaynanglen.jpg', 'Hoa Tặng Mẹ', 'Sau cơn mưa, những tia nắng ấm áp chiếu rọi lên mọi vật, sưởi ấm tình cảm giữa những con người. Những tháng năm ngày nào ta có nhau, nồng nàn lời nói trao nhau, dịu dàng bàn tay nắm bàn tay, khẽ đến bên bên nhau cùng nhau đắm mình trong những tia nắng ấm áp cũng như là \"trong cuộc đời này, muốn thấy cầu vồng, phải chờ hết cơn mưa, chờ ngày nắng lên\".                                                ', '14', 16, '27/05/2018 - 00:35:46', '2018-06-16'),
(46, 'Khát Vọng Mới', 1500000, 0, 'khatvongmoi.jpg', 'Hoa Tặng Mẹ', 'Cuộc sống ngày càng phát triển nhanh chóng khiến cho ta phải quay cuồng với những bộn bề lo toan vậy liệu rằng khát vọng có là điều xa vời? và hẵn sẽ càng nhiều khó khăn hơn nữa để ta có thể đi đến tận cùng của khát vọng. Do đó, vào những lúc khó khăn như thế thì những món quà tinh thần từ người thân và bạn bè sẽ là liều thuốc hữu hiệu nhất để tạo cảm hứng và nuôi dưỡng khát vọng của bạn và ngược lại, những người bạn yêu thương sẽ có thê động lực để chạn đến ước mơ của họ.                                ', '10', 10, '27/05/2018 - 00:36:42', '2018-06-16'),
(47, 'Tuổi Xanh', 450000, 0, 'tuoixanh.jpg', 'Hoa Tặng Mẹ', 'Mẫu hoa được thiết kế đặc biệt với sự pha trộn giữa tông màu xanh lá tươi mát của thiên nhiên và tông màu xanh dương mạnh mẽ, giỏ hoa mang thông điệp của sự phát triển mạnh mẽ, hoa thuận và tươi mát thích hợp dành tặng các bạn nam vào những dịp đặc biệt như sinh nhật, chúc mừng kỉ niệm và thăng chức.                ', '13', 7, '27/05/2018 - 00:37:31', '2018-06-16'),
(48, 'Ngại Ngùng', 700000, 600000, 'ngaingung.jpg', 'Hoa Sinh Nhật', 'Khi yêu ai đó đừng nên im lặng hãy dũng cảm bày tỏ nỗi lòng của mình ra nhé. 1 chút bối rối, 1 chút ngại ngùng khi bạn tỏ tình thì hãy để bó hoa này nói thay cho bạn gửi đến người ấy. Thích hợp dành tặng người yêu, bạn bè, dịp sinh nhật.                                                  ', '19', 1, '27/05/2018 - 00:38:40', '2018-06-19'),
(49, 'My Sunshine', 500000, 0, 'mysunshine.jpg', 'Hoa Sinh Nhật', '\"Hãy luôn là tia nắng ấm. Là em đến bên anh. Ϲho vơi đi ưu phiền ngàу hôm qua\". Em như tia nắng sưởi ấm lan tỏa ấm áp đến anh. Luôn tỏa sáng rực rỡ dù trong hoàn cảnh nào đi nữa. Thích hợp tặng sinh nhật, tốt nghiệp, thành công....', '19', 1, '27/05/2018 - 00:40:41', '2018-06-19'),
(50, 'Sức Sống Mới', 500000, 0, 'sucsongmoi.jpg', 'Hoa Tặng Mẹ', 'Hoa sen là một biểu tưởng của sự thuần khiết và sự thanh tao. Bên cạnh đó, hoa sen còn giúp con người điều hòa khí vượng và tăng cường năng lượng tốt . về mặt phong thủy, hoa sen có thể ngăn chặn những điều xấu, giúp cho gia chủ tránh ưu phiền để tĩnh tâm an hưởng hạnh phúc. Bình hoa sen sẽ là món quà ý nghĩa dành cho những người thân yêu của bạn như ông bà và cha mẹ vào những dịp đặc biệt và những người thích sự nhẹ nhàng, tao nhã.                ', '5', 15, '27/05/2018 - 00:42:17', '2018-06-16'),
(51, 'Nhịp Đập Yêu Thương', 1500000, 1350000, 'nhipdapyeuthuong.jpg', 'Hoa Tặng Mẹ', 'Cuộc sống hiện đại khiến nhiều người bị cuốn vào vòng xoáy công việc mà đôi khi quên đi việc phải nuôi dưỡng mối quan hệ xung quay và cũng có đôi lúc quên mất phải hăm nóng tình yêu với người bạn đời của mình. Và đó là lý do mà những bông hoa tươi tắn được sinh ra để giúp chúng ta truyền tải những thông điệp yêu thương trong cuộc sống. Một bình hoa tươi đặt trên bàn làm việc, trong tổ ấm thân yêu hay một bình hoa trao đến ngày đặc biệt của người thân và bạn bè sẽ giúp chúng ta giữ được các mối quan hệ và ngày càng trân quý nhau hơn.                                                                ', '24', 14, '27/05/2018 - 00:43:11', '2018-06-16'),
(52, 'For Mom', 1000000, 0, 'formom.jpg', 'Hoa Tặng Mẹ', 'Giỏ hoa này thiết kế đặc biệt để dành tặng cho những người thân thương của bạn với hy vọng tình cảm luôn phát triển tốt đẹp và bền vững. Với màu pastel nhẹ nhàng, trong trẻo luôn thu hút ánh nhìn yêu thích của nhiều người. Thích hợp tặng trong các dịp sinh nhật, kỉ niệm, họp mặt, tri ân....                                                ', '19', 11, '27/05/2018 - 00:44:18', '2018-06-16'),
(53, 'Hồng Tươi', 450000, 0, 'hongtuoi.jpg', 'Hoa Tình Yêu', 'Vẫn với tone màu hồng quyến rũ quen thuộc. Bó hoa gồm hồng cánh sen và hoa thủy tiên được đan xen vào nhau tạo nên bó hoa thật xinh xắn và hấp dẫn. Thích hợp tặng cho nữ trong dịp sinh nhật, chúc mừng, kỉ niệm ...', '14', 6, '27/05/2018 - 00:45:40', '2018-06-17'),
(54, 'Kỉ Niệm Xưa', 800000, 0, 'kiniemxua.jpg', 'Hoa Tình Yêu', 'Thời gian trôi qua mau chỉ còn lại những kỷ niệm. Hộp hoa với tone màu vàng - màu của thời gian - chủ đạo như giúp ta nhớ đến những kỉ niệm vui vẻ và hạnh phúc trải qua trong cuộc đời. Thích hợp tặng vào dịp sinh nhật, kỷ niệm....để lưu lại kỉ niệm cùng nhau bạn nhé.', '11', 9, '27/05/2018 - 00:47:17', '2018-06-17'),
(55, 'Lời Yêu Đầu', 800000, 0, 'loiyeudau.jpg', 'Hoa Tình Yêu', 'Khi bạn yêu mến một ai đó thì luôn mong muốn được nói những lời yêu thương với người đó từ trong cõi lòng mình. Nếu bạn vẫn chưa đủ tự tin để nói ra nỗi lòng yêu thương của mình thì hãy để hộp hoa này giúp bạn bày tỏ nhé. Hãy nói ra để cùng nhau được yêu thương trong cuộc đời                ', '12', 8, '27/05/2018 - 01:01:09', '2018-06-17'),
(56, 'Green Dream', 500000, 0, 'greendream.jpg', 'Hoa Tặng Mẹ', 'Hộp hoa với 2 tone xanh và vàng được florist cắm đan xen vào nhau như tình yêu luôn mặn nồng từ lúc tuổi còn xanh đến khi vàng úa màu thời gian. Luôn giữ mãi trong tim cuộc tình mãi xanh mặc cho thời gian trôi - tình bạn bè, tình cảm gia đình, tình đồng nghiệp....                                ', '25', 14, '27/05/2018 - 01:04:54', '2018-06-16'),
(57, 'Tình Ấm Áp', 400000, 0, 'tinhamap.jpg', 'Hoa Tình Yêu', 'Hoa hồng đỏ là loại hoa được yêu thích nhất trong các loại hoa hồng ở Việt Nam, đã được các nghệ nhân của Hoayeuthuong thiết kế đơn giản kết hợp thêm một ít hoa baby trắng đan xen lẫn nhau giúp bó hoa càng thêm nổi bật. Mẫu hoa thích hợp tặng trong mọi dịp dành cho người mà bạn yêu mến.                                ', '19', 11, '27/05/2018 - 01:06:57', '2018-06-18'),
(58, 'LOVE PARADISE', 1000000, 0, 'loveparadise.jpg', 'Hoa Tặng Mẹ', 'Hộp hoa được thiết kế với màu hồng và màu kem tạo cảm giác thật nhẹ nhàng và tràn đầy nữ tính. Thích hợp tặng cho những người phụ nữ mà bạn yêu mến trong cuộc đời bạn trong các dịp sinh nhật, kỉ niệm, chúc mừng....hoặc đơn giản chỉ là sự bất ngờ bạn muốn mang đến.                                ', '10', 9, '27/05/2018 - 01:39:36', '2018-06-16'),
(59, 'LOVE TO BE LOVED', 2000000, 1800000, 'lovetobeloved.jpg', 'Hoa Tình Yêu', 'Bình hoa gồm có hoa hồng đỏ, hoa hồng tím kết hợp hoa cẩm chướng, hoa lan tượng trưng cho một tình yêu thanh khiết, trong trắng nhưng cũng rất mãnh liệt.\r\n                                ', '13', 7, '27/05/2018 - 01:41:13', '2018-06-17'),
(60, 'Giọt Nắng Bên Thềm', 1000000, 900000, 'giotnangbentham.jpg', 'Hoa Tặng Mẹ', 'Được thiết kế với tông màu vàng chủ đạo, bình hoa \"Giọt nắng bên thềm\" mang đến vẻ đẹp lung linh và tràn đầy sức sống. Kết hợp từ hoa hướng dương, cẩm chướng và lan vũ nữ, mẫu hoa sẽ là món quà tuyệt vời dành tặng những người thân yêu của bạn.                                                ', '12', 7, '27/05/2018 - 01:42:16', '2018-06-16'),
(61, 'PRETTY GIRL', 450000, 0, 'prettygirl.jpg', 'Hoa Tình Yêu', 'Em là cô gái anh thương nhất. Nét dễ thương của em đã làm anh thao thức từng ngày trôi. Bó hoa với hoa hồng tím phối hợp cùng cẩm chướng trắng như cô gái dễ thương và ngại ngùng khi lần đầu biết yêu.', '13', 7, '27/05/2018 - 13:49:25', '2018-06-17'),
(62, 'KEEP LOVING', 1000000, 900000, 'keeploving.jpg', 'Hoa Tình Yêu', 'Bó hoa được phối hợp màu tím và màu đỏ như lời khẳng định dù có chuyện gì sau này thì tình yêu ta dành cho nhau mãi mãi bền lâu. Tím chung thủy, đỏ mạnh mẽ son sắc sẽ là món quà dành tặng cho người yêu của mình để tạo sự bất ngờ bạn nhé                                ', '11', 9, '27/05/2018 - 13:50:18', '2018-06-17'),
(63, 'Lời Tỏ Tình', 600000, 0, 'loitotinh.jpg', 'Hoa Tình Yêu', 'Sắc hồng ngọt ngào của hoa hồng da và sắc trắng tinh khôi của cẩm chướng trắng được kết hợp lại dễ dàng làm xao xuyến và thu hút ánh nhìn với bất kì ai. Bó hoa chính là lời nhắn \" \"Em đến dịu dàng như cơn mưa mùa hạ làm mát lạnh tâm hồn anh bằng một tình yêu bình dị và thủy chung. Cám ơn em - thiên thần của anh\".                ', '14', 6, '27/05/2018 - 13:51:00', '2018-06-17'),
(64, 'Phút Yêu Đầu', 350000, 0, 'phutyeudau.jpg', 'Hoa Tình Yêu', 'Với tone màu hồng nhẹ nhàng, nữ tính. Bó hoa là món quà tuyệt vời dành tặng cho những bạn nữ yêu thích sự lãng mạn và tràn đầy yêu thương. Thích hợp tặng dịp sinh nhật, làm quen, kỷ niệm ...', '9', 11, '27/05/2018 - 13:51:47', '2018-06-17'),
(65, 'Chiều Tím Nhớ Em', 900000, 800000, 'chieutimnhoem.jpg', 'Hoa Tình Yêu', 'Với tone màu tím - màu của nỗi nhớ. Bó hoa gợi những sợi nhớ, sợi thương cứ như nối dài theo năm tháng. Có đôi lúc vui tươi nhộn nhịp như màu hồng của cẩm chướng, có lúc thăng trầm da diết như màu tím của hoa hồng. Tất cả được kết hợp lại với nhau để tạo nên bó hoa này như nói lên nỗi nhung nhớ da diết đến người yêu.                                ', '10', 10, '27/05/2018 - 13:52:39', '2018-06-17'),
(66, 'Until Love', 700000, 0, 'untillove.jpg', 'Hoa Tình Yêu', 'Khi bạn có lòng thương nhớ với một ai đó sẽ luôn là những cảm xúc khó tả xen lẫn hồi hộp khi được đi bên cạnh người đó. Luôn là nỗi mong nhớ, mong được bên nhau mỗi ngày. Với tone màu tím hộp hoa sẽ thay bạn bày tỏ lòng nhung nhớ gửi đến người thương. Thích hợp tặng sinh nhật, kỉ niệm...                ', '15', 15, '25/05/2018 - 11:44:13', '2018-06-19'),
(67, 'Màu Nỗi Nhớ', 1000000, 0, 'maunoinho.jpg', 'Hoa Tình Yêu', 'Màu tím là màu của sự nhớ nhung, của những cảm xúc khi chợt nghĩ về nhau. Bình hoa với chủ đạo là màu tím như nỗi nhớ của anh về em từng ngày trôi qua không bao giờ phai. Chỉ muốn đến bên cạnh em và nói rằng: \"Anh rất nhớ em, cô gái ơi\".\r\n                ', '5', 15, '27/05/2018 - 13:54:22', '2018-06-19'),
(68, 'Sắc Hồng Xinh', 500000, 0, 'sachongxinh.jpg', 'Hoa Tình Yêu', 'Hộp hoa với tone màu hồng pastel chủ đạo đã làm say đắm bao cô nàng đáng yêu. Hộp hoa này chắc chắn sẽ là món quà tuyệt vời dành tặng cho các fangirl có sự yêu thích đặc biệt dành cho màu hồng.', '8', 12, '27/05/2018 - 13:55:08', '2018-06-19'),
(69, 'Màu Yêu Thương', 600000, 0, 'mauyeuthuong.jpg', 'Hoa Tình Yêu', 'Bó hoa với tone màu nhẹ nhàng, tươi sáng tựa như cô gái với vẻ đẹp thanh tao và duyên dáng làm anh vấn vương, thương thầm bao ngày. Nếu còn ngại ngùng bày tỏ thì hãy tặng bó hoa này cho cô ấy để bày tỏ nỗi lòng thầm kín đến người ấy để thành mùa của yêu thương bạn nhé.                                ', '21', 19, '27/05/2018 - 13:55:44', '2018-06-19'),
(70, 'Một Tinh Yêu', 200000, 0, 'mottinhyeu.jpg', 'Hoa Tình Yêu', 'Bó hoa được thiết kế đơn giản với một hoa hồng đỏ rednaomi cùng các loại hoa, lá phụ mang ý nghĩa \"Em là tình yêu duy nhất của anh\". Không cần cầu kỳ với nhiều hoa hay lá phụ, \"Môt tình yêu\" vẫn đủ sức làm lay động bất cứ ai với thiết kế và vẻ đẹp giản đơn của mình                ', '19', 11, '27/05/2018 - 13:56:31', '2018-06-19'),
(71, 'Baby Love', 650000, 0, 'babylove.jpg', 'Hoa Tình Yêu', 'Có những ngày thật buồn vì bộn bề công việc không thể ngưng dành tặng cho bản thân một khoảng thời gian nhỏ nhỏ chăm sóc.Có những ngày lại trôi qua nhẹ nhàng tưa cánh hồng nhẹ làm ta chợt nhận ra \"cuộc sống dù vội vã, xin một phút ngắn ngủi ngưng đọng để biết yêu bản thân\". Bó hoa với hoa hồng babylove loại hồng giống mới nở to và đẹp cùng với tone màu hồng pastel sẽ là món quà làm say đắm nhiều cô gái.                ', '21', 19, '27/05/2018 - 13:57:32', '2018-06-19'),
(72, 'Hạnh Phúc Bền Lâu', 1800000, 1600000, 'hanhphucbenlau.jpg', 'Hoa Tình Yêu', 'Hạnh phúc đôi khi đơn giản là sau giờ làm việc căng thẳng,ngồi bên người ấy và không nói gì nhưng cảm nhận được sự bình yên và sự dịu ngọt tan nhẹ trong tim mỗi người. Bình hoa là sự kết hợp giữa sự nữ tính của loài phong lan trắng và sự duyên dáng đáng yêu của hoa hồng da, tạo ý nghĩa tình yêu và sự bền chặt bên nhau đến tận chân trời . Thích hợp tặng sinh nhật, kỷ niệm quen nhau, hay một dịp đặc biệt nào đó.                                                ', '21', 13, '27/05/2018 - 13:58:32', '2018-06-19'),
(73, 'Ấm Áp Yêu Thương', 2500000, 0, 'amapyeuthuong.jpg', 'Hoa Tình Yêu', 'Với tông màu đỏ chủ đạo bình hoa là sự kết hợp hoàn hảo của hoa hồng đỏ và cẩm chướng như muốn người tặng truyền tải hết tâm tư tình cảm , thay lời muốn nói tới người nhận. Bình hoa là sự kết nối nhẹ nhàng và ấm áp giữa các mối quan hệ xung quanh ta thật ấm áp và tràn ngập yêu thương.', '0', 16, '27/05/2018 - 13:59:38', '2018-06-19'),
(74, 'Tình Yêu Mãi Xanh', 1200000, 1150000, 'tinhyeumaixanh.jpg', 'Hoa Tình Yêu', 'Hộp hoa là sự kết hợp chủ đạo hoa hồng trắng và cẩm chướng xanh cùng tông màu trắng xanh nhẹ tôn lên nét đẹp trong tình yêu,đẹp mà thanh thoát, dịu mát mà lại ngọt lịm. Màu xanh của hy vọng của tình yêu mãi mãi xanh tươi như hộp hoa này                                                ', '24', 13, '27/05/2018 - 14:00:33', '2018-06-19'),
(75, 'Duyên Thầm', 700000, 0, 'duyentham.jpg', 'Hoa Tình Yêu', 'Có những người con gái chỉ cần lướt nhẹ nhàng qua ta cũng có thể khiến ta say đắm, ngẩn ngơ cả ngày. Họ vừa xinh đẹp vừa có duyên. Nét duyên cứ âm thầm lặng lẽ nhưng cũng đủ khiến trái tim của ta thao thức, phải nhớ nhung và chờ đợi.', '11', 8, '27/05/2018 - 14:01:15', '2018-06-19'),
(76, 'Yêu Thương Nồng Cháy', 480000, 0, 'yeuthuongnongchay.jpg', 'Hoa Tình Yêu', 'Hoa hồng đỏ thể hiện ý nghĩa tình yêu chân thành, mãnh liệt bất chấp mọi chông gai. Đối với những mối quan hệ mới vừa bắt đầu hoặc là gắn bó dài lâu thì một bó hoa hồng đỏ như cách khẳng định tình cảm chân thành, đồng thời là lời hứa cho sự phát triển lâu dài về sau, cùng nhau đi đến đoạn cuối con đường. Bó hoa thích hợp tặng dịp đặc biệt Valentine, ngày kỉ niệm, cầu hôn....                                ', '22', 5, '27/05/2018 - 14:03:59', '2018-06-19'),
(77, 'Nụ Cười', 600000, 0, 'nucuoi.jpg', 'Hoa Tình Yêu', 'Giỏ hoa với hoa hồng da và hồng trứng gà cùng với cúc calimero trắng giỏ hoa như một cô nàng tươi trẻ, vui vẻ chào đón cuộc sống với niêm vui và nụ cười. Thích hợp tặng dịp sinh nhật, làm quen, tỏ tình, hay là điều bất ngờ cho người yêu. Giỏ hoa cắm 1 mặt                                ', '0', 16, '27/05/2018 - 14:05:20', '2018-06-19'),
(78, 'Điều Giản Dị', 400000, 0, 'dieugiandi.jpg', 'Hoa Sinh Nhật', 'Giỏ hoa được cắm tròn 2 mặt với thiết kế chủ đạo là hoa hồng sen màu hồng phấn nhẹ nhàng và tao nhã, cùng cẩm chướng hồng phối hợp xen kẽ nhau tạo nên một sản phẩm hoa thu hút ngay từ ánh nhìn đầu tiên. Tuy giản dị, mộc mạc nhưng chắc chắn sẽ là món quà ý nghĩa tuyệt vời dành tặng cho những người thân yêu của mình.', '7', 13, '27/05/2018 - 14:06:51', '2018-06-19'),
(79, 'Phi Yến Tinh Khôi', 320000, 0, 'phiyentinhkhoi.jpg', 'Hoa Sinh Nhật', 'Sắc trắng của loài hoa phi yến thật tinh khôi và thuần khiết. Với kiểu bó đơn giản và mộc mạc vẫn tôn lên vẻ đẹp của loài hoa của tháng 12 - tháng của yêu thương.                                ', '23', 17, '27/05/2018 - 14:07:55', '2018-06-19'),
(80, 'Phi Yến Mộng Mơ', 320000, 0, 'phiyenmongmo.jpg', 'Hoa Sinh Nhật', 'Loài hoa phi yến đặc biệt cuốn hút, say đắm lòng người. Với sắc tím lãng mạn và đầy mộng mơ chắc chắn là món quà đầy bất ngờ và thú vị cho người được tặng.                ', '26', 14, '27/05/2018 - 14:08:43', '2018-06-19'),
(81, 'Dịu Dàng', 600000, 500000, 'diudang.jpg', 'Hoa Sinh Nhật', 'Với tone màu hồng pastel nhẹ nhàng và tràn đầy nữ tính như sự dịu dàng, đằm thắm của những cô thiếu nữ xinh xắn tuổi trăng tròn. Hoa hồng da kết hợp cùng cát tường hồng và baby trắng chắc chắn sẽ là điều bất ngờ và sang trọng dành tặng cho những cô gái đáng yêu                                ', '17', 13, '27/05/2018 - 14:09:43', '2018-06-19'),
(82, 'Yêu Thương Đong Đầy', 700000, 0, 'yeuthuongdongday.jpg', 'Hoa Sinh Nhật', 'Cũng vẫn là những cành hồng ngọt ngào cũng ly hồng vương vấn. Nhưng sự kết hợp độc đáo như những con đường cùng nhau chung bước và những yêu thương vươn mầm, khiến cho ai đó có thêm niềm tin yêu vào chuyện tình đôi lứa. Chỉ mong tay nắm chặt tay cùng nhau đi đến cuối đoạn đường với hạnh phúc đong đầy trong tim.                ', '18', 12, '27/05/2018 - 14:10:28', '2018-06-19'),
(83, 'Hạnh Phúc Muôn Màu', 700000, 600000, 'hanhphucmuonmau.jpg', 'Hoa Sinh Nhật', 'Hạnh phúc là cảm giác mà ai cũng mong muốn có được. Đôi khi thật nhẹ nhàng cũng có khi là sự nồng nhiệt đến cháy bỏng trong từng hành động quan tâm giữa những người thân yêu với nhau. Như màu sắc của bó hoa được kết hợp nhiều loại hoa tạo nên sắc màu của sự hạnh phúc                                ', '14', 16, '27/05/2018 - 14:11:14', '2018-06-19'),
(84, 'Smile Box', 100000, 0, 'smilebox.jpg', 'Hoa Sinh Nhật', 'Hộp hoa với sự kết hợp của hoa hồng trứng gà và hoa hồng trắng như cuộc sống luôn có những lúc thăng trầm. Lúc buồn, lúc vui, lúc giận hờn, khi hạnh phúc hộp hoa này sẽ giúp bạn gửi đến người thân yêu của mình với hy vọng luôn vui vẻ dù rằng gặp nhiều sóng gió cuộc đời vì luôn có bạn bên cạnh họ                ', '15', 15, '27/05/2018 - 14:12:03', '2018-06-19'),
(85, 'Sắc Màu', 650000, 0, 'sacmau.jpg', 'Hoa Sinh Nhật', 'Giỏ hoa với sự kết hợp của nhiều loại hoa hồng cùng với nhiều màu sắc tươi sáng, nhẹ nhàng được phối hợp theo phong cách hiện đại và năng động. Sắc màu tươi vui sẽ là món quà đầy ý nghĩa dành tặng cho dịp quan trọng cho người thân yêu của bạn. *Giỏ hoa cắm 1 mặt*                ', '16', 14, '27/05/2018 - 14:12:44', '2018-06-19'),
(86, 'Điều Ngọt Ngào', 650000, 0, 'dieungotngao.jpg', 'Hoa Sinh Nhật', 'Hạnh phúc 1 ngày sẽ đến, anh vững tin vào điều ấy. Vì bên anh, rất ấm áp đôi vòng tay này. Và nếu như đời giông bão, chỉ cần anh được bên em. Vì tình yêu cho anh thêm vững bước đi. Điều anh cần là được có em bên cùng nắm tay trải qua những điều ngọt ngào nhất trong cuộc đời. Tone màu hông pastel hiện đại sẽ là hộp hoa nổi bật và thích thú cho người nhận. Thích hợp tặng sinh nhật, kỷ niệm...                ', '17', 13, '27/05/2018 - 14:13:40', '2018-06-19'),
(87, 'Tuổi Mộng Mơ', 650000, 0, 'tuoimongmo.jpg', 'Hoa Sinh Nhật', 'Bó hoa với nhiều loại hoa cùng với nhiều màu sắc rực rỡ khác nhau được các florist phối hợp với nhau một cách sáng tạo. Tựa như giấc mơ mà bạn đang theo đuổi luôn đầy sắc màu và tràn đầy hy vọng vào một tương lai sáng lạng. Thích hợp tặng dịp sinh nhật, chúc mừng...                ', '18', 12, '27/05/2018 - 14:14:37', '2018-06-19'),
(88, 'Bình Yên', 1000000, 900000, 'binhyen.jpg', 'Hoa Sinh Nhật', 'Bình yên để gió đưa em về. Bình yên ta chờ nghe. Chờ nghe tình vỗ lên tim mình. Chờ nghe tình lung linh. Bình yên để nắng soi môi thơm. Bình yên ta mừng. Cuộc đời ai cũng mong muốn được sống bình yên và hạnh phúc với người thân yêu của mình. Thích hợp tặng bất kỳ dịp nào mà bạn muốn làm bất ngờ cho người nhận                ', '9', 11, '27/05/2018 - 14:15:29', '2018-06-19'),
(89, 'Hạnh Phúc', 550000, 0, 'hanhphuc.jpg', 'Hoa Sinh Nhật', 'Hạnh phúc là cái gì? Đó là cảm giác đến từ trái tim, chứ không phải nhận định của người khác. Hạnh phúc và bi ai thực sự, chỉ có bản thân mới hiểu, định nghĩa của hạnh phúc của mỗi người đâu có giống nhau. Hạnh phúc là hai người yên lặng bảo vệ, gom góp tất cả tình yêu gửi sâu vào đáy lòng, ngày qua ngày mang ra thưởng thức. Giỏ hoa này sẽ lan tỏa và nhân rộng hạnh phúc đến từng người, từng nhà, trong từng mối quan hệ tình cảm giữa con người với nhau.', '10', 10, '27/05/2018 - 14:16:22', '2018-06-19'),
(90, 'Dấu Yêu', 900000, 0, 'dauyeu.jpg', 'Hoa Sinh Nhật', 'Có một số người mãi mãi khắc ghi trong ký ức, cho dù đã quên mất giọng nói, nụ cười, khuôn mặt ấy, nhưng mỗi khi nhớ về người đó, cảm xúc không bao giờ thay đổi, vẫn nguyên cảm giác ấy - cảm giác dấu yêu - khi được đi bên cạnh nhau. Khoảnh khắc dấu yêu luôn là khoảnh khắc khó phai trong cuộc đời mỗi người. Thích hợp tặng dịp sinh nhật, xin lỗi, kỉ niệm làm quen..', '11', 9, '27/05/2018 - 14:17:11', '2018-06-19'),
(91, 'BESIDE YOU', 1000000, 0, 'besideyou.jpg', 'Hoa Sinh Nhật', 'Anh đã luôn mơ những giấc mơ thật đẹp, những giấc mơ trong đó có em…Em đến bên anh thật nồng nàn, say đắm như sự sắp đặt của số phận. Trong mơ, anh là người hạnh phúc, và anh cứ muốn kéo dài giấc mơ hạnh phúc ấy, kéo dài mãi mãi tựa như những bông hồng môi son dịu dàng và đằm thắm. Thích hợp tặng sinh nhật, kỷ niệm quen nhau, hay một dịp đặc biệt nào đó...                ', '12', 8, '27/05/2018 - 14:18:09', '2018-06-19'),
(92, 'Tình Ngọt Ngào', 1200000, 0, 'tinhngotngao.jpg', 'Hoa Sinh Nhật', 'Với chủ đạo là hoa hồng son môi - loại hồng cực kỳ đẹp và được phối hợp cùng hoa hồng da. Hộp hoa tạo nên sức cuốn hút kì lạ tựa như đôi môi của người phụ nữ luôn đẹp một cách lạ lùng và bí ẩn. Anh nhìn em cười tươi trong đáy mắt em diệu dàng. Em nhìn anh một trời hoa bướm lung linh tỏa sáng. Muốn nói thế nhưng cần chi phải nói. Hảy nghe lòng ta khẽ khẽ hát câu yêu chỉ một người.', '13', 7, '27/05/2018 - 14:18:54', '2018-06-19'),
(93, 'Kiếp Vô Thương', 2500000, 2300000, 'kiepvothuong.jpg', 'Hoa Chia Buồn', 'Cuộc sống sinh lão bệnh tử là điều không ai có thể tránh khỏi. Tất cả rồi sẽ trở về với cát bụi mọi thứ đều vô thường. Kệ hoa như sự chia sẽ với nỗi buồn mất mát khi người thân ra đi. Mong người ra đi được thanh thản không còn vương vấn bụi trần.                                ', '16', 4, '27/05/2018 - 14:21:52', '2018-06-19'),
(94, 'Chân Trời Xa', 1500000, 0, 'chantroixa.jpg', 'Hoa Chia Buồn', 'Sinh ly tử biệt đâu ai tránh được điều đó. Người ra đi cũng đã ra đi họ đi về nơi chân trời xa. Hãy gửi những lời chia buồn sâu sắc nhất đến người thân của họ. Chân trời đó dù xa xôi đi mãi không về nhưng họ vẫn ở mãi trong kí ức và trái tim của ta.', '15', 5, '27/05/2018 - 14:22:29', '2018-06-19'),
(95, 'Niệm Khúc Cuối', 1000000, 900000, 'niemkhuccuoi.jpg', 'Hoa Chia Buồn', 'Niệm khúc cuối cất lên tiễn người ra đi mãi mãi. Dù người đi xa nhưng vẫn hiện hữu trong từng nỗi nhớ, từng kỉ niệm được nhắc lại khi nói chuyện với nhau. Hy vọng họ ra đi thanh thản và nhẹ nhàng.                ', '16', 4, '27/05/2018 - 14:23:22', '2018-06-19'),
(96, 'Vệt Nắng Tan', 3200000, 0, 'vetnangtan.jpg', 'Hoa Chia Buồn', 'Chia ly là điều không ai muốn. Nhưng ai có thể chống lại quy luật \"sinh, lão, bệnh, tử\" của tạo hóa. Ai rồi cũng phải ra đi vì thế hãy cứ an lòng và mong cho người ra đi được thanh thản. Kệ hoa chia buồn với tone màu vàng sẽ giúp bạn gửi lời chia buồn sâu sắc đến người nhận.                ', '10', 10, '27/05/2018 - 14:24:07', '2018-06-19'),
(97, 'Phút Cuối', 1500000, 1350000, 'phutcuoi.jpg', 'Hoa Chia Buồn', 'Sự ra đi của người thân luôn để lại nỗi buồn khôn nguôi dành cho người ở lại. Giây phút cuối trước khi họ ra đi mãi mãi không thể gặp lại nữa. Đó là những khoảnh khắc buồn nhất hãy gửi vòng hoa này như lời chia buồn và cảm thông sâu sắc nhất đến gia chủ                ', '11', 9, '27/05/2018 - 14:24:51', '2018-06-19'),
(98, 'Cõi Lành', 1900000, 0, 'coilanh.jpg', 'Hoa Chia Buồn', 'Cuộc đời sinh lão bệnh tử không ai biết trước, do vậy nếu chẳng may người quen, họ hàng, bạn bè qua đời thì hãy dành những lời chia buồn để làm vơi bớt nỗi đau với những người thân trong gia quyến đồng thời tỏ lòng tiếc thương, tiếc nuối và thành kính phân ưu với người đã khuất.', '10', 10, '27/05/2018 - 14:25:31', '2018-06-19'),
(99, 'Hồi Ức Xưa', 1500000, 1350000, 'hoiucxua.jpg', 'Hoa Chia Buồn', 'Người ra đi để lại trong ta bao nhiêu sự đau buồn, mất mát. Họ ra đi nhưng hồi ức về họ vẫn còn mãi trong tâm trí ta. Kệ chia buồn này sẽ thay bạn gửi lời chia buồn sâu sắc và lời nguyện cầu cho người ra đi thanh thản                                ', '11', 9, '27/05/2018 - 14:27:37', '2018-06-19'),
(100, 'Dòng Thời Gian', 1700000, 1500000, 'dongthoigian.jpg', 'Hoa Chia Buồn', 'Thời gian trôi qua. Ai rồi cũng phải rời xa cuộc đời này dù muốn hay không. Dòng thời gian cuốn trôi mọi thứ vì thế hãy đừng quá đau buồn khi người thân ra đi. Kệ hoa tone trắng sẽ là lời chia buồn sâu sắc gửi đến gia chủ. Mọi thứ rồi sẽ qua xin hãy vượt qua phút giây này                ', '10', 10, '27/05/2018 - 14:28:17', '2018-06-19'),
(101, 'Giọt Lệ', 800000, 650000, 'giotle.jpg', 'Hoa Chia Buồn', 'Giọt nước mắt rơi khi người thân của ta ra đi mãi mãi. Để lại cho người ở lại nỗi đau khôn nguôi. Họ khóc khi gặp phải sự mất mát to lớn nên hơn hết vào những lúc này họ cần sự động viên an ủ bằng kệ hoa chia buồn này nhé.                ', '11', 9, '27/05/2018 - 14:28:50', '2018-06-19'),
(102, 'Dĩ Vãng', 2000000, 0, 'divang.jpg', 'Hoa Chia Buồn', 'Cuộc sống vô thường,khi một người thân ra đi thì nỗi trống vắng của người ở lại dường như không có gì bù đắp được. Thế nhưng, sự ra đi là một sự khởi đầu mới trong thế giới của người đã khuất. Với vòng hoa Dĩ Vãng được thiết kế với tông chủ đạo là màu trắng kêt từ hoa lan và các phụ kiện khác sẽ thay mặt bạn tiễn biệt họ về thế giới mới và chia sẽ cùng gia đình họ.                ', '10', 10, '27/05/2018 - 14:29:29', '2018-06-19'),
(103, 'Tiếc Thương', 1000000, 900000, 'tiecthuong.jpg', 'Hoa Chia Buồn', 'Cuộc sống là một vòng xoay của Sinh - Lão - Bệnh- Tử, khi chúng ta mất vĩnh viễn một người thân hay một người bạn chúng ta không bao giờ tìm lại được.Với vòng hoa chia buồn Lời Chia Xa được thiết kế theo tông chủ đạo là màu xanh trắng kết từ cúc trắng, cúc xanh, green wicky và các phụ liệu khác sẽ thay mặt bạn đưa tiễn họ và chia sẻ cùng gia đình họ.                ', '11', 9, '27/05/2018 - 14:30:09', '2018-06-19'),
(104, 'Khúc Từ Biệt', 1000000, 0, 'khuctubiet.jpg', 'Hoa Chia Buồn', 'Sinh lão bệnh tử, phàm là người ai cũng phải trải qua. Mong cho hgười ra đi được siêu thoát và về với cõi lãnh. Kệ hoa là lời chia buồn sâu sắc và sự san sẻ nỗi mất mát của bạn đến gia chủ. Mong người ở lại hãy cố gắng vượt qua nỗi đau này.                ', '10', 10, '27/05/2018 - 14:30:55', '2018-06-19'),
(105, 'Ngày Chia Xa', 1500000, 1350000, 'ngaychiaxa.jpg', 'Hoa Chia Buồn', 'Có sinh ắt có tử đó là quy luật tự nhiên của tạo hóa không ai có thể chống lại được. Vì thế ngày người thân ra đi cũng sẽ đến hãy dành những sự thành kính nhất để họ ra đi được thanh thản không vướng bận. Kệ hoa với tone màu trắng là lời san sẻ và động viên gửi đến gia chủ để vượt qua nỗi đau này.                ', '11', 9, '27/05/2018 - 14:31:36', '2018-06-19'),
(106, 'Vô Thường', 1000000, 0, 'vothuong.jpg', 'Hoa Chia Buồn', 'Cuộc sống và vạn vật quanh chúng ta, từng giờ từng phút luôn luôn biến đổi theo không gian và thời gian, không có gì tồn tại vĩnh viễn. Đó chính là “Vô thường”, nghĩa là không có gì thường xuyên trường tồn mãi mãi. Vì thế cũng đến giây phút người thân quanh ta cũng phải ra đi dù ta không muốn. Hãy cùng hoayeuthuong.com chia sẻ nỗi buồn mất mát to lớn trong giây phút đó bằng kệ hoa chia buồn bạn nhé.                                ', '19', 11, '27/05/2018 - 14:32:24', '2018-06-13'),
(107, 'Chuyện Nhân Gian', 1000000, 900000, 'chuyennhangian.jpg', 'Hoa Chia Buồn', 'Chuyện nhân gian vui buồn điều có. Kiếp nhân sinh như gió thoáng qua. Sinh ra trong một kiếp con người. Sớm ở tối về là lẻ thường thôi...Thật ngon giấc nhé. Người thân ra đi luôn để lại nỗi buồn sâu sắc nhưng người ở lại luôn mong muốn người ra đi thật thanh thản và yên giấc ngàn thu. Kệ chia buồn này sẽ là lời chia buồn thành kính nhất gửi đến gia chủ người đã mất                ', '10', 10, '27/05/2018 - 14:32:59', '2018-06-13'),
(108, 'Thiên Đàng', 1200000, 0, 'thiendang.jpg', 'Hoa Chia Buồn', '\"Đâu ai đang yên trông mong xa nhân gian nay mai. Nhưng khi đã qua hết những ngày để sống. Tiếc nuối cũng thế gửi người về với đất, Thôi xin cúi đầu tạm biệt người vừa đi\" lời bài hát cũng chính là cảm hứng cho các florist tạo ra kệ hoa chia buồn này. Với mong muốn người ra đi được thanh thản khi rời bỏ thế giới này                ', '11', 9, '27/05/2018 - 14:33:35', '2018-06-13'),
(109, 'Ký Ức', 1500000, 1350000, 'kyuc.jpg', 'Hoa Chia Buồn', 'Ai sống trên đời cũng đều trải qua giây phút chia ly khi người thân, họ hàng, bạn bè của bạn mãi mãi ra đi để lại bao thương nhớ khôn nguôi. Họ ra đi nhưng luôn để lại trong mỗi người thân những ký ức ngọt ngào khó phai. Hãy nhớ về họ về những ký ức để lại của người đã khuất.                                ', '19', 11, '27/05/2018 - 14:39:28', '2018-06-13'),
(110, 'Phút Chia Ly', 1000000, 0, 'phutchialy.jpg', 'Hoa Chia Buồn', 'Giây phút một người thân mãi mãi đi khuất xa để lại trong mỗi chúng ta nỗi đau tột cùng và phút chia ly là khoảnh khắc thời gian như ngừng trôi lắng đọng tua lại dòng ký ức ngày xưa với nhiều kỷ niệm buồn vui đến phút giây sinh ly tử biệt cùng với mong muôn sự ra đi thanh thản dành cho người đã khuất.                ', '10', 10, '27/05/2018 - 14:40:13', '2018-06-13'),
(111, 'Yên Nghỉ', 2000000, 1800000, 'yennghi.jpg', 'Hoa Chia Buồn', 'Người thân ra đi bỏ lại ta với nhiều nỗi đau buồn khôn nguôi. Nhưng trong tim ta luôn mong muốn và hy vọng người đã khuất luôn được yên nghỉ, thanh thản ra đi. Với tone màu trắng chủ đạo kệ hoa chia buồn sẽ thay bạn gửi lời chia buồn sâu sắc đến gia chủ                                                ', '11', 9, '27/05/2018 - 14:42:32', '2018-06-13'),
(112, 'Về Với Đất', 2000000, 0, 'vevoidat.jpg', 'Hoa Chia Buồn', 'Hình ảnh hoa chia buồn, nó lại gợi lên trong suy nghĩ, trong tâm chúng ta 1 nỗi buồn man mát, 1 sự chua xót và đau lòng khi phải chứng kiến 1 người thân quen của mình phải ra đi mãi mãi. Họ ra đi trở về với đất mẹ thật nhẹ nhàng, thanh thản trong vòng tay của đất mẹ.\r\n                                ', '9', 11, '27/05/2018 - 14:43:22', '2018-06-13'),
(113, 'Thương Tiếc', 1200000, 1150000, 'thuongtiec.jpg', 'Hoa Chia Buồn', 'Với phong cách thiết kế pha trộn giữa kiểu cổ điển và hiện đại kệ hoa toát lên vẻ trang trọng nhưng vẫn thể hiện sự chia buồn sâu sắc, thành kính nhất từ tận sâu trong đáy lòng gửi đến gia chủ để chia sẻ sự mất mát to lớn khi người thân ra đi. Sau mỗi đám tang là những sự chia ly mất mát của gia chủ, bởi vậy họ vô cùng đau buồn rất cần đến những lời động viên, an ủi chân thành từ bạn bè, người thân. LovelyFlowers sẽ thay bạn làm điều nay với kệ chia buồn thiết kế độc đáo này                                                ', '10', 10, '27/05/2018 - 14:44:25', '2018-06-13'),
(114, 'Thành Kính', 1000000, 0, 'thanhkinh.jpg', 'Hoa Chia Buồn', 'Hoa tang lễ chính là cách để người ta gửi đến người quá cố lòng tiếc thương vô hạn và thành kính phân ưu, đồng thời chia buồn cùng với người thân của họ. Màu tím từ lâu đã được biết đến như là một màu “hoàng gia”, liên quan đến các nghi lễ kín đáo với vẻ trang nghiêm, niềm tự hào và thành công. Màu tím cũng là biểu tượng của thành tựu, sự tôn trọng và kính cẩn khi một cuộc sống vừa kết thúc.', '11', 9, '27/05/2018 - 14:45:07', '2018-06-13'),
(115, 'Lời Chia Buồn', 1000000, 900000, 'loichiabuon.jpg', 'Hoa Chia Buồn', 'Sau mỗi đám tang là những sự chia ly mất mát của gia chủ, bởi vậy họ vô cùng đau buồn rất cần đến những lời động viên, an ủi chân thành từ bạn bè, người thân. Ai qua được vòng đời sinh tử. Mà biết tin vẫn rớt u sầu. Định mệnh thế ai biết trước được đâu. Xin cầu cho hồn an nơi ấy. Kệ \" Lời Chia Buồn\" sẽ thay bạn gửi đến gia chủ lời chia buồn sâu sắc nhất.                                ', '18', 12, '27/05/2018 - 14:45:58', '2018-06-13'),
(116, 'Khoảnh Khắc', 1500000, 0, 'khoanhkhac.jpg', 'Hoa Chia Buồn', 'Thời khắc trước khi một người thân của bạn ra đi mãi mãi luôn tạo ra những cảm xúc đau buồn, khó quên đối với những người ở lại. Hãy để kệ hoa này thay bạn gửi lời chia buồn sâu sắc đến gia quyến của người đã mất giúp san sẽ nỗi đau mất mát to lớn cùng nhau vượt qua nỗi đau thương                ', '7', 13, '27/05/2018 - 14:46:47', '2018-06-13'),
(117, 'Biệt Ly', 1700000, 1500000, 'bietly.jpg', 'Hoa Chia Buồn', 'Sinh ly tử biệt là quy luật của tự nhiên. Vì thế giây phút biệt ly từ giã ra đi của người thân luôn để lại niềm đau khôn nguôi cho người ở lại. Kệ hoa Biệt Ly được florist thiết kế với tone màu tím-trắng thật sang trọng để thay bạn gửi lời chia buồn sâu sắc đến nỗi đau của gia quyến người đã mất                ', '11', 9, '27/05/2018 - 14:47:26', '2018-06-13'),
(118, 'Cát Bụi', 1000000, 0, 'catbui.jpg', 'Hoa Chia Buồn', 'Con người khi mất đi đều trở về với cát bụi, trở về với đất. Họ nằm đó thật nhẹ nhàng, thanh thản khi được về với đất mẹ. Dù vậy, nỗi đau mất đi bạn bè, người thân cũng khiến nhiều người không tránh khỏi đau buồn không chịu nổi. Hãy gửi kệ hoa này để san sẻ nỗi đau người thân của người đã khuất', '5', 15, '27/05/2018 - 14:48:04', '2018-06-13');
INSERT INTO `chitietsp` (`masp`, `ten_sp`, `gia`, `sale`, `hinhanh`, `loaisanpham`, `motasp`, `soluong`, `banroi`, `date_add`, `date_xuly`) VALUES
(119, 'Về Nơi Xa', 1200000, 1150000, 'venoixa.jpg', 'Hoa Chia Buồn', 'Bước chân ra đi bỏ lại sau lưng những giọt nước mắt tiễn biệt mãi mãi. Người đi về nơi xa bỏ lại nơi đây là nỗi đau mất người thân luôn là nỗi đau khó quên đối với mỗi người chúng ta. Thấu hiểu niềm đau đó kệ hoa này sẽ là lời chia buôn sâu sắc đến gia quyến người đã khuất.                ', '10', 10, '27/05/2018 - 14:49:23', '2018-06-13'),
(120, 'Vĩnh Hằng', 1800000, 1650000, 'vinhhang.jpg', 'Hoa Chia Buồn', 'Mặc dù biết rằng cuộc đời con người chúng ta đều có 4 giai đoạn : Sinh, Lão, Bệnh, Tử nhưng nỗi đau mất đi bạn bè, người thân cũng khiến nhiều người không tránh khỏi nỗi đau buồn quá lớn. Kệ hoa \" Vĩnh Hằng \" như một món quà tinh thần giúp bạn gửi lời chia buồn của mình và san sẻ nổi đau người thân của người đã khuất.                                                ', '18', 12, '27/05/2018 - 14:50:10', '2018-06-13'),
(121, 'Lời Cảm Ơn', 450000, 0, 'loicamon.jpg', 'Hoa Ngày Lễ', 'Khi không còn trẻ nữa, chúng ta sẽ biết trân quý những mối quan hệ quanh mình hơn và đặc biệt là gia đình. Do đó, với mẫu hoa được thiết kế đặc biệt này, bạn có thể dành riêng cho các thành viên trong gia đình và những người bạn thân thiết vào những dịp đặc biệt với thông điệp \" Cảm ơn vì đã ở bên cạnh và ủng hộ tinh thần vào những lúc tôi khó khăn nhất\".\r\n                                ', '34', 16, '27/05/2018 - 14:55:23', '2018-06-12'),
(122, 'Bâng Khuâng', 2500000, 2300000, 'bangkhuang.jpg', 'Hoa Ngày Lễ', 'Những bông hoa hồng và hoa phụ được sắp xếp tự nhiên, bồng bềnh như mang đến một cảm giác bâng khuâng, dịu dàng của những ngày hẹn hò đầu tiên, những cảm xúc bồi hồi khó tả. Mẫu hoa thích hợp tặng sinh nhật, chúc mừng, kỉ niệm, v.v…                                                ', '35', 15, '27/05/2018 - 14:57:11', '2018-06-12'),
(123, 'Hương Sắc', 1500000, 1350000, 'huongsac.jpg', 'Hoa Ngày Lễ', 'Hương sắc gồm hoa hồng kết hợp cùng hoa thủy tiên và hoa lá phụ. Màu sắc tươi tắn, trẻ trung và ngọt ngào như khoe hương sắc và mang theo lời chúc may mắn, an lành đến người nhận. Mẫu hoa thích hợp tặng chúc mừng, khai trương v.v..                                                ', '36', 14, '27/05/2018 - 14:58:00', '2018-06-12'),
(124, 'An Yên', 650000, 0, 'anyen.jpg', 'Hoa Ngày Lễ', 'Sắc trắng kết hợp cùng màu xanh mát rượi luôn mang lại một cảm giác bình yên, trong trẻo đến lạ. Phá cách cùng lavender khô, \"An yên\" sẽ mang đến cho người nhận lời chúc an lành, bình yên trong tâm hồn và nhiều niềm vui trong cuộc sống.                                ', '37', 13, '27/05/2018 - 14:58:45', '2018-06-12'),
(125, 'Gánh Hàng Hoa', 1000000, 900000, 'ganhhanghoa.jpg', 'Hoa Ngày Lễ', 'Một sớm tinh mơ, chiếc quang gánh chất đầy những cành hoa mềm mại, nhẹ nhàng tô điểm cho phố phường – lãng mạn, dịu dàng mà bình dị. Lấy cảm hứng từ hình ảnh đẹp đẽ thân thương đó, “Gánh hàng hoa” đã ra đời. Hãy dành tặng mẫu hoa xinh đẹp này cho những người thân yêu của bạn nhé.                                                                ', '18', 3, '27/05/2018 - 14:59:33', '2018-06-19'),
(126, 'Bình Dị', 350000, 0, 'binhdi.jpg', 'Hoa Ngày Lễ', 'Không cầu kì, không có quá nhiều màu sắc, chỉ từ 15 đoá hồng vàng dịu dàng bung nở trên nền lá xanh nhẹ nhàng tựa như những điều tốt đẹp, bình dị trong cuộc sống này, vẫn âm thầm, lặng lẽ diễn ra xung quanh ta.', '13', 4, '27/05/2018 - 15:00:16', '2018-06-19'),
(127, 'Sắc Đỏ Yêu Thương', 500000, 0, 'sacdoyeuthuong.jpg', 'Hoa Ngày Lễ', 'Mẫu hoa được tạo ra từ 15 bông hoa hồng đỏ - loài hoa làm đắm say biết bao con tim yêu hoa. Điểm xuyến đó là những loài hoa cùng sắc đỏ cùng nhau tạo cho bó hoa đầy sức cuốn hút và mãnh liệt. Thích hợp cho những người thích sự nồng cháy, mạnh mẽ                                ', '19', 10, '27/05/2018 - 15:01:13', '2018-06-19'),
(128, 'Tươi Sáng', 500000, 0, 'tuoisang.jpg', 'Hoa Ngày Lễ', 'Từ 8 bông hồng tím và 15 bông hồng phấn giỏ hoa tạo ra sự kết hợp của tông tím-hồng, giỏ hoa Tươi sáng là món quà ý nghĩa cho một ngày bình yên, vui vẻ. Thích hợp tặng dịp sinh nhật, kỉ niệm, tri ân....                                                                                ', '14', 6, '27/05/2018 - 15:02:13', '2018-06-20'),
(129, 'Duyên Dáng', 870000, 800000, 'duyendang.jpg', 'Hoa Ngày Lễ', '9 bông hoa hồng phấn mang ý nghĩa của sự thanh nhã và sang trọng cũng như sự ngọt ngào, lãng mạn trữ tình và sự vĩnh cử của tình yêu, được phối cùng 15 bông hoa hồng da và 5 bông hoa hồng tím, thể hiện sự nhẹ nhàng và sự cảm phục. Nó được sử dụng như một cách bày tỏ. Thích hợp tặng người yêu, chúc mừng...                                                                ', '14', 10, '27/05/2018 - 15:03:09', '2018-06-19'),
(130, 'Ngọc Ngà', 350000, 0, 'ngocnga.jpg', 'Hoa Ngày Lễ', 'Mẫu hoa được thiết kế từ 10 bông hoa hồng và 10 bông hoa cúc calimero trắng, trên nền tú cầu xanh. Được thiết kế với tông trắng xanh, \"Ngọc ngà\" đem lại cảm giác tươi mát và trong trẻo vô cùng. Đây sẽ là món quà tuyệt vời dành tặng những người thân yêu của bạn.                                                                                                                                                                                                ', '19', 4, '27/05/2018 - 15:04:44', '2018-06-19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tieude` varchar(50) NOT NULL,
  `noidung` varchar(500) NOT NULL,
  `date_send` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `name`, `phone`, `address`, `email`, `tieude`, `noidung`, `date_send`) VALUES
(2, 'Lại Thanh Tùng', '0972952691', '0972952691', 'tung10111995@gmail.com', 'Ý kiến đóng góp', 'Hoa đẹp nhé', '09/06/2018 - 19:10:36'),
(3, 'Lại Thanh Tùng', '0972952691', 'Hồng phong- Vũ thư- Thái bình', 'tung10111995@gmail.com', 'Ý kiến đóng góp', 'Cửa hàng cần vận chuyển nhanh hơn nữa', '09/06/2018 - 19:13:30'),
(4, 'Lại Thanh Tùng', '0972952691', 'Hồng phong- Vũ thư- Thái bình', 'tung10111995@gmail.com', 'Ý kiến đóng góp', 'Cửa hàng cần vận chuyển nhanh hơn nữa', '09/06/2018 - 19:14:15'),
(5, 'Lại Thanh Tùng', '0972952691', 'Hồng phong- Vũ thư- Thái bình', 'tung10111995@gmail.com', 'Ý kiến đóng góp', 'Cửa hàng cần vận chuyển nhanh hơn nữa', '09/06/2018 - 19:14:40'),
(6, 'Lại Thanh Tùng', '0972952691', 'Hồng phong- Vũ thư- Thái bình', 'tung10111995@gmail.com', 'Ý kiến đóng góp', 'Cửa hàng cần vận chuyển nhanh hơn nữa', '09/06/2018 - 19:14:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id_loaisp` int(10) NOT NULL,
  `tenloaisp` varchar(50) NOT NULL,
  `thutu` int(10) NOT NULL,
  `trangthai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id_loaisp`, `tenloaisp`, `thutu`, `trangthai`) VALUES
(1, 'Hoa Ngày Tết', 1, 'Không hiển thị'),
(2, 'Hoa Cầm Tay Cô Dâu', 2, 'Hiển thị'),
(4, 'Hoa Ngày Lễ', 4, 'Hiển thị'),
(5, 'Hoa Tặng Mẹ', 5, 'Hiển thị'),
(6, 'Hoa Tình Yêu', 6, 'Hiển thị'),
(8, 'Hoa Sinh Nhật', 8, 'Không hiển thị'),
(11, 'Hoa Chia Buồn', 11, 'Hiển thị');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `magiamgia`
--

CREATE TABLE `magiamgia` (
  `id_giamgia` int(10) NOT NULL,
  `ma_giamgia` varchar(50) NOT NULL,
  `trangthai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `magiamgia`
--

INSERT INTO `magiamgia` (`id_giamgia`, `ma_giamgia`, `trangthai`) VALUES
(2, 'HFQKY', 1),
(3, 'TSWIJ', 1),
(4, 'TZMDT', 1),
(5, 'HLNQQ', 1),
(6, 'UKXSH', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `created` varchar(50) NOT NULL,
  `created_update` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `password`, `phone`, `address`, `created`, `created_update`) VALUES
(91, 'Lại Thanh Tùng', 'tung10111995@gmail.com', 'huytungtrang', '0972952691', 'Hồng phong- Vũ thư- Thái bình', '26/05/2018 - 14:38:19', ''),
(146, 'Cao Thị Thu', 'caot4p@gmail.com', 'tungthu95', '0963256761', 'Đà Nẵng', '11/06/2018 - 21:53:20', ''),
(202, 'Lại Thanh Tùng', 'tung10111996@gmail.com', 'abc', '0972952691', 'Hồng phong- Vũ thư- Thái bình', '12/06/2018 - 16:45:10', ''),
(203, 'Cô Bắc', 'bacthm@gmail.com', '12345', '08983140080', 'Hà Nội', '14/06/2018 - 09:14:42', ''),
(204, 'đoàn thị vân anh ', 'doanvananh095@gmail.com', '123456', '01648276502', 'cổ nhuế ', '18/06/2018 - 16:02:19', ''),
(205, 'Lại Thanh Tùng', 'tung101109323123122@gmail.com', 'huytungtrang', '0972952691', 'Hà Nội', '18/06/2018 - 18:17:57', ''),
(206, 'Lại Thanh Tùng', 'tung@gmail.com', '123456', '0972952691', 'Hà Nội', '18/06/2018 - 18:18:44', ''),
(207, 'Lại Thanh Tùng', 'tung1232312312312321312321312313122@gmail.com', '123456', '0972952691', 'Hà Nội', '18/06/2018 - 18:19:34', ''),
(208, 'Lại Thanh Tùng', 'tung10111998@gmail.com', '12345', '0972952691', 'Hà Nội', '20/06/2018 - 14:45:15', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ncc`
--

CREATE TABLE `ncc` (
  `ma_NCC` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date_add` varchar(50) NOT NULL,
  `date_update` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ncc`
--

INSERT INTO `ncc` (`ma_NCC`, `name`, `email`, `phone`, `address`, `date_add`, `date_update`) VALUES
(2, 'Hoa Minh Tươi', 'hoaminhtuoi@gmail.com', '01698698382', 'Chợ Quảng Bá-Tây Hồ - Hà Nội', '25/05/2018 - 20:27:35', ''),
(3, 'Cung cấp nguyên phụ liệu', 'phulieu@gmai.com', '0912534721', 'Hà Nội', '26/05/2018 - 15:20:49', ''),
(5, 'Cửa hàng hoa Thu Cao', 'caot4p@gmail.com', '0963256761', 'Hà Nội', '08/06/2018 - 18:00:23', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `khuyenmai` varchar(255) NOT NULL,
  `thutu` int(10) NOT NULL,
  `trangthai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `khuyenmai`, `thutu`, `trangthai`) VALUES
(1, 'shophoa.jpg', 1, 'Hiển thị'),
(3, '20-10.jpg', 3, 'Hiển thị'),
(4, 'lanhodiep.jpg', 2, 'Hiển thị');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenlieu`
--

CREATE TABLE `nguyenlieu` (
  `ma_NL` int(10) NOT NULL,
  `ncc` varchar(50) NOT NULL,
  `ten_NL` varchar(50) NOT NULL,
  `dongia` int(20) NOT NULL,
  `soluong` int(10) NOT NULL,
  `tongtien` int(50) NOT NULL,
  `date_add` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguyenlieu`
--

INSERT INTO `nguyenlieu` (`ma_NL`, `ncc`, `ten_NL`, `dongia`, `soluong`, `tongtien`, `date_add`) VALUES
(4, 'Cửa hàng hoa Thu Cao', 'Hoa hồng trắng', 40000, 100, 4000000, '09/06/2018 - 10:00:19'),
(5, 'Cung cấp nguyên phụ liệu', 'Giấy bóng bọc hoa', 20000, 100, 2000000, '08/06/2018 - 18:09:29'),
(6, 'Hoa Minh Tươi', 'Hoa lan hồ điệp', 30000, 50, 1500000, '09/06/2018 - 09:58:35'),
(7, 'Hoa Minh Tươi', 'Hoa Sen', 30000, 20, 600000, '09/06/2018 - 10:00:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder`
--

CREATE TABLE `oder` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `makh` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `total` varchar(250) NOT NULL,
  `date_order` varchar(50) NOT NULL,
  `datesau` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `oder`
--

INSERT INTO `oder` (`order_id`, `makh`, `fullname`, `address`, `phone`, `email`, `noidung`, `total`, `date_order`, `datesau`, `status`) VALUES
(544, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111995@gmail.com', 'ok', '3500000', '12/06/2018 - 19:45:31', '2018-06-30', 'Đã xử lý'),
(545, 'VL', 'Lại Thanh Tùng', 'Thái Bình', '0972952691', 'tung10111995@gmail.com', 'ok', '35800000', '12/06/2018 - 19:49:16', '2018-06-12', 'Đã xử lý'),
(546, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111995@gmail.com', 'ok', '56450000', '12/06/2018 - 19:50:24', '2018-06-12', 'Đã xử lý'),
(547, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111995@gmail.com', 'ok', '193000000', '12/06/2018 - 19:52:24', '2018-06-12', 'Đã xử lý'),
(548, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111995@gmail.com', 'ok', '94600000', '13/06/2018 - 20:15:13', '2018-06-14', 'Đã xử lý'),
(549, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111995@gmail.com', 'ok', '127150000', '14/06/2018 - 20:17:52', '2018-06-14', 'Đã xử lý'),
(550, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111995@gmail.com', 'ok', '78400000', '15/06/2018 - 20:20:08', '2018-06-16', 'Đã xử lý'),
(551, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111995@gmail.com', 'ok', '65750000', '16/06/2018 - 20:22:41', '2018-06-18', 'Đã xử lý'),
(552, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111995@gmail.com', 'ok', '1800000', '17/06/2018 - 20:25:40', '2018-06-20', 'Đã xử lý'),
(553, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111995@gmail.com', 'ok', '2050000', '17/06/2018 - 20:26:45', '2018-06-19', 'Đã xử lý'),
(554, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111995@gmail.com', 'ok', '10100000', '17/06/2018 - 20:28:23', '2018-06-18', 'Đã xử lý'),
(555, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111995@gmail.com', 'ok', '2000000', '17/06/2018 - 20:29:21', '2018-06-20', 'Đã xử lý'),
(556, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111995@gmail.com', 'ok', '90700000', '19/06/2018 - 20:32:19', '2018-06-20', 'Đã xử lý'),
(557, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111995@gmail.com', 'ok', '11850000', '19/06/2018 - 20:33:40', '2018-06-20', 'Đã xử lý'),
(558, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111995@gmail.com', 'ok', '10540000', '19/06/2018 - 20:35:39', '2018-06-19', 'Đã xử lý'),
(559, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111995@gmail.com', 'ok', '71100000', '19/06/2018 - 20:38:29', '2018-06-19', 'Đã xử lý'),
(560, 'VL', 'Lại Thanh Tùng', 'Hồng phong- Vũ thư- Thái bình', '0972952691', 'tung10111995@gmail.com', 'ok', '1485000', '20/06/2018 - 10:48:06', '2018-06-22', 'Đang xử lý'),
(561, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111995@gmail.com', 'ok', '480000', '20/06/2018 - 10:59:42', '2018-06-21', 'Đang xử lý'),
(562, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111998@gmail.com', 'GUI HANG NHE', '1050000', '20/06/2018 - 14:48:15', '2018-06-21', 'Đang xử lý'),
(563, 'VL', 'Lại Thanh Tùng', 'Hà Nội', '0972952691', 'tung10111998@gmail.com', 'ok', '450000', '20/06/2018 - 14:48:55', '2018-06-20', 'Đã xử lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detal`
--

CREATE TABLE `order_detal` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(200) NOT NULL,
  `price` varchar(50) NOT NULL,
  `sl` int(11) NOT NULL,
  `date_order` varchar(50) NOT NULL,
  `date_xuly` datetime NOT NULL,
  `daban` int(11) NOT NULL,
  `sl_sau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_detal`
--

INSERT INTO `order_detal` (`id`, `order_id`, `product_id`, `price`, `sl`, `date_order`, `date_xuly`, `daban`, `sl_sau`) VALUES
(672, 544, 'Pha Lê Tím', '700000', 1, '12/06/2018 - 19:45:31', '2018-06-12 00:00:00', 24, 1),
(673, 544, 'Đôi Cánh Tình Yêu', '2800000', 1, '12/06/2018 - 19:45:31', '2018-06-12 00:00:00', 31, 25),
(674, 545, 'An Yên', '650000', 6, '12/06/2018 - 19:49:16', '2018-06-12 00:00:00', 13, 6),
(675, 545, 'Hương Sắc', '1350000', 7, '12/06/2018 - 19:49:16', '2018-06-12 00:00:00', 14, 7),
(676, 545, 'Bâng Khuâng', '2300000', 8, '12/06/2018 - 19:49:16', '2018-06-12 00:00:00', 15, 8),
(677, 545, 'Lời Cảm Ơn', '450000', 9, '12/06/2018 - 19:49:16', '2018-06-12 00:00:00', 16, 9),
(678, 546, 'Rainbow Love', '800000', 10, '12/06/2018 - 19:50:24', '2018-06-12 00:00:00', 28, 16),
(679, 546, 'Tính Khúc Vàng', '1350000', 11, '12/06/2018 - 19:50:24', '2018-06-12 00:00:00', 27, 16),
(680, 546, 'Đôi Cánh Tình Yêu', '2800000', 12, '12/06/2018 - 19:50:24', '2018-06-12 00:00:00', 31, 25),
(681, 547, 'Phúc Duyên Tràn Đầy', '1000000', 7, '12/06/2018 - 19:52:24', '2018-06-12 00:00:00', 13, 0),
(682, 547, 'Nghinh Xuân', '1500000', 7, '12/06/2018 - 19:52:24', '2018-06-12 00:00:00', 14, 0),
(683, 547, 'Lộc Vừng', '1500000', 7, '12/06/2018 - 19:52:24', '2018-06-12 00:00:00', 13, 0),
(684, 547, 'Vinh Hoa', '500000', 7, '12/06/2018 - 19:52:24', '2018-06-12 00:00:00', 13, 0),
(685, 547, 'Chan Hòa', '500000', 8, '12/06/2018 - 19:52:24', '2018-06-12 00:00:00', 15, 0),
(686, 547, 'Vạn Sự Thành', '800000', 9, '12/06/2018 - 19:52:24', '2018-06-12 00:00:00', 15, 0),
(687, 547, 'Phú Quý', '800000', 9, '12/06/2018 - 19:52:24', '2018-06-12 00:00:00', 15, 0),
(688, 547, 'Phước Vĩnh Cửu 2', '2500000', 9, '12/06/2018 - 19:52:24', '2018-06-12 00:00:00', 9, 0),
(689, 547, 'Xuân Đong Đầy', '4000000', 9, '12/06/2018 - 19:52:24', '2018-06-12 00:00:00', 15, 0),
(690, 547, 'Cung Chúc Tân Niên', '2300000', 10, '12/06/2018 - 19:52:24', '2018-06-12 00:00:00', 16, 0),
(691, 547, 'Phước Vĩnh Cửu', '2000000', 10, '12/06/2018 - 19:52:24', '2018-06-12 00:00:00', 16, 0),
(692, 547, 'Phúc Lộc Thọ', '750000', 10, '12/06/2018 - 19:52:24', '2018-06-12 00:00:00', 16, 0),
(693, 547, 'Sung Túc', '1800000', 11, '12/06/2018 - 19:52:24', '2018-06-12 00:00:00', 17, 0),
(694, 547, 'Phúc An Khang', '1300000', 11, '12/06/2018 - 19:52:24', '2018-06-12 00:00:00', 17, 0),
(695, 548, 'Vĩnh Hằng', '1650000', 4, '13/06/2018 - 20:15:13', '2018-06-13 00:00:00', 12, 0),
(696, 548, 'Về Nơi Xa', '1150000', 5, '13/06/2018 - 20:15:13', '2018-06-13 00:00:00', 10, 0),
(697, 548, 'Cát Bụi', '1000000', 6, '13/06/2018 - 20:15:13', '2018-06-13 00:00:00', 15, 0),
(698, 548, 'Biệt Ly', '1500000', 4, '13/06/2018 - 20:15:13', '2018-06-13 00:00:00', 9, 0),
(699, 548, 'Khoảnh Khắc', '1500000', 5, '13/06/2018 - 20:15:13', '2018-06-13 00:00:00', 13, 0),
(700, 548, 'Lời Chia Buồn', '900000', 6, '13/06/2018 - 20:15:13', '2018-06-13 00:00:00', 12, 0),
(701, 548, 'Thành Kính', '1000000', 4, '13/06/2018 - 20:15:13', '2018-06-13 00:00:00', 9, 0),
(702, 548, 'Thương Tiếc', '1150000', 5, '13/06/2018 - 20:15:13', '2018-06-13 00:00:00', 10, 0),
(703, 548, 'Về Với Đất', '2000000', 6, '13/06/2018 - 20:15:13', '2018-06-13 00:00:00', 11, 0),
(704, 548, 'Yên Nghỉ', '1800000', 4, '13/06/2018 - 20:15:13', '2018-06-13 00:00:00', 9, 0),
(705, 548, 'Phút Chia Ly', '1000000', 5, '13/06/2018 - 20:15:13', '2018-06-13 00:00:00', 10, 0),
(706, 548, 'Ký Ức', '1350000', 6, '13/06/2018 - 20:15:13', '2018-06-13 00:00:00', 11, 0),
(707, 548, 'Thiên Đàng', '1200000', 4, '13/06/2018 - 20:15:13', '2018-06-13 00:00:00', 9, 0),
(708, 548, 'Chuyện Nhân Gian', '900000', 5, '13/06/2018 - 20:15:13', '2018-06-13 00:00:00', 10, 0),
(709, 548, 'Vô Thường', '1000000', 6, '13/06/2018 - 20:15:13', '2018-06-13 00:00:00', 11, 0),
(710, 549, 'Con Đường Màu Xanh', '900000', 5, '14/06/2018 - 20:17:52', '2018-06-14 00:00:00', 11, 5),
(711, 549, 'Vườn Hồng', '600000', 6, '14/06/2018 - 20:17:52', '2018-06-14 00:00:00', 12, 6),
(712, 549, 'Miền Đông Thảo', '650000', 7, '14/06/2018 - 20:17:52', '2018-06-14 00:00:00', 13, 7),
(713, 549, 'Chân Tình', '700000', 5, '14/06/2018 - 20:17:52', '2018-06-14 00:00:00', 11, 5),
(714, 549, 'Mãi Mãi Yêu Em', '700000', 6, '14/06/2018 - 20:17:52', '2018-06-14 00:00:00', 15, 6),
(715, 549, 'Pha Lê Tím', '700000', 7, '14/06/2018 - 20:17:52', '2018-06-14 00:00:00', 24, 7),
(716, 549, 'Tính Khúc Vàng', '1350000', 5, '14/06/2018 - 20:17:52', '2018-06-14 00:00:00', 27, 5),
(717, 549, 'Rainbow Love', '800000', 6, '14/06/2018 - 20:17:52', '2018-06-14 00:00:00', 28, 6),
(718, 549, 'Đôi Cánh Tình Yêu', '2800000', 12, '14/06/2018 - 20:17:52', '2018-06-14 00:00:00', 31, 12),
(719, 549, 'Khi Ta Bên Nhau', '900000', 11, '14/06/2018 - 20:17:52', '2018-06-14 00:00:00', 17, 11),
(720, 549, 'Đồi Thông Hạnh Phúc', '700000', 11, '14/06/2018 - 20:17:52', '2018-06-14 00:00:00', 17, 11),
(721, 549, 'Miền Cát Trắng', '600000', 10, '14/06/2018 - 20:17:52', '2018-06-14 00:00:00', 16, 10),
(722, 549, 'TÌnh Đắm Say', '850000', 15, '14/06/2018 - 20:17:52', '2018-06-14 00:00:00', 21, 15),
(723, 549, 'Vì Sao Trong Tôi', '900000', 12, '14/06/2018 - 20:17:52', '2018-06-14 00:00:00', 12, 12),
(724, 549, 'Ta Thuộc Về Nhau', '800000', 12, '14/06/2018 - 20:17:52', '2018-06-14 00:00:00', 18, 12),
(725, 550, 'Happy Ending', '1050000', 13, '15/06/2018 - 20:20:08', '2018-06-15 00:00:00', 24, 13),
(726, 550, 'Cung Đàn Tình Yêu', '700000', 14, '15/06/2018 - 20:20:08', '2018-06-15 00:00:00', 26, 14),
(727, 550, 'Will You Marry Me !!!', '1000000', 15, '15/06/2018 - 20:20:08', '2018-06-15 00:00:00', 28, 15),
(728, 550, 'Ngọn Lửa Tình Yêu', '700000', 11, '15/06/2018 - 20:20:08', '2018-06-15 00:00:00', 31, 11),
(729, 550, 'Bên Nhau Trọn Đời', '800000', 10, '15/06/2018 - 20:20:08', '2018-06-15 00:00:00', 32, 10),
(730, 550, 'Ta Mãi Bên Nhau', '1050000', 5, '15/06/2018 - 20:20:08', '2018-06-15 00:00:00', 10, 5),
(731, 550, 'Hoa Rum Tinh Khôi', '1000000', 6, '15/06/2018 - 20:20:08', '2018-06-15 00:00:00', 23, 6),
(732, 550, 'Bên Nhâu Mãi Mãi', '900000', 8, '15/06/2018 - 20:20:08', '2018-06-15 00:00:00', 22, 8),
(733, 550, 'Nụ Hôn Cho Em', '100000', 9, '15/06/2018 - 20:20:08', '2018-06-15 00:00:00', 12, 9),
(734, 550, 'Giây Phút Em Đềm', '700000', 7, '15/06/2018 - 20:20:08', '2018-06-15 00:00:00', 16, 7),
(735, 551, 'Giọt Nắng Bên Thềm', '900000', 5, '16/06/2018 - 20:22:41', '2018-06-16 00:00:00', 7, 0),
(736, 551, 'LOVE PARADISE', '1000000', 6, '16/06/2018 - 20:22:41', '2018-06-16 00:00:00', 9, 0),
(737, 551, 'Green Dream', '500000', 7, '16/06/2018 - 20:22:41', '2018-06-16 00:00:00', 14, 0),
(738, 551, 'For Mom', '1000000', 5, '16/06/2018 - 20:22:41', '2018-06-16 00:00:00', 11, 0),
(739, 551, 'Nhịp Đập Yêu Thương', '1350000', 6, '16/06/2018 - 20:22:41', '2018-06-16 00:00:00', 14, 0),
(740, 551, 'Sức Sống Mới', '500000', 7, '16/06/2018 - 20:22:41', '2018-06-16 00:00:00', 15, 0),
(741, 551, 'Tuổi Xanh', '450000', 5, '16/06/2018 - 20:22:41', '2018-06-16 00:00:00', 7, 0),
(742, 551, 'Khát Vọng Mới', '1500000', 6, '16/06/2018 - 20:22:41', '2018-06-16 00:00:00', 10, 0),
(743, 551, 'Ngày Nắng Lên', '900000', 7, '16/06/2018 - 20:22:41', '2018-06-16 00:00:00', 16, 0),
(744, 551, 'Tình Bạn Hữu', '700000', 5, '16/06/2018 - 20:22:41', '2018-06-16 00:00:00', 10, 0),
(745, 551, 'Romence', '450000', 6, '16/06/2018 - 20:22:41', '2018-06-16 00:00:00', 16, 0),
(746, 551, 'Ngày Đông', '600000', 7, '16/06/2018 - 20:22:41', '2018-06-16 00:00:00', 18, 0),
(747, 551, 'Tình Yêu Diệu Kỳ', '500000', 6, '16/06/2018 - 20:22:41', '2018-06-16 00:00:00', 18, 0),
(748, 551, 'Kính Trọng', '600000', 7, '16/06/2018 - 20:22:41', '2018-06-16 00:00:00', 7, 0),
(749, 552, 'LOVE TO BE LOVED', '1800000', 1, '17/06/2018 - 20:25:40', '2018-06-17 00:00:00', 7, 0),
(750, 553, 'Kỉ Niệm Xưa', '800000', 1, '17/06/2018 - 20:26:45', '2018-06-17 00:00:00', 9, 0),
(751, 553, 'Lời Yêu Đầu', '800000', 1, '17/06/2018 - 20:26:45', '2018-06-17 00:00:00', 8, 0),
(752, 553, 'Hồng Tươi', '450000', 1, '17/06/2018 - 20:26:45', '2018-06-17 00:00:00', 6, 0),
(753, 554, 'KEEP LOVING', '900000', 2, '17/06/2018 - 20:28:23', '2018-06-17 00:00:00', 9, 0),
(754, 554, 'PRETTY GIRL', '450000', 4, '17/06/2018 - 20:28:23', '2018-06-17 00:00:00', 7, 0),
(755, 554, 'Lời Tỏ Tình', '600000', 3, '17/06/2018 - 20:28:23', '2018-06-17 00:00:00', 6, 0),
(756, 554, 'Phút Yêu Đầu', '350000', 2, '17/06/2018 - 20:28:23', '2018-06-17 00:00:00', 11, 0),
(757, 554, 'Chiều Tím Nhớ Em', '800000', 5, '17/06/2018 - 20:28:23', '2018-06-17 00:00:00', 10, 0),
(758, 555, 'Tình Ấm Áp', '400000', 5, '17/06/2018 - 20:29:21', '2018-06-18 00:00:00', 11, 0),
(759, 556, 'Ngày Chia Xa', '1350000', 4, '19/06/2018 - 20:32:19', '2018-06-19 00:00:00', 9, 0),
(760, 556, 'Khúc Từ Biệt', '1000000', 5, '19/06/2018 - 20:32:19', '2018-06-19 00:00:00', 10, 0),
(761, 556, 'Tiếc Thương', '900000', 4, '19/06/2018 - 20:32:19', '2018-06-19 00:00:00', 9, 0),
(762, 556, 'Dĩ Vãng', '2000000', 5, '19/06/2018 - 20:32:19', '2018-06-19 00:00:00', 10, 0),
(763, 556, 'Giọt Lệ', '650000', 4, '19/06/2018 - 20:32:19', '2018-06-19 00:00:00', 9, 0),
(764, 556, 'Dòng Thời Gian', '1500000', 5, '19/06/2018 - 20:32:19', '2018-06-19 00:00:00', 10, 0),
(765, 556, 'Hồi Ức Xưa', '1350000', 4, '19/06/2018 - 20:32:19', '2018-06-19 00:00:00', 9, 0),
(766, 556, 'Cõi Lành', '1900000', 5, '19/06/2018 - 20:32:19', '2018-06-19 00:00:00', 10, 0),
(767, 556, 'Phút Cuối', '1350000', 4, '19/06/2018 - 20:32:19', '2018-06-19 00:00:00', 9, 0),
(768, 556, 'Vệt Nắng Tan', '3200000', 5, '19/06/2018 - 20:32:19', '2018-06-19 00:00:00', 10, 0),
(769, 556, 'Niệm Khúc Cuối', '900000', 4, '19/06/2018 - 20:32:19', '2018-06-19 00:00:00', 4, 0),
(770, 556, 'Chân Trời Xa', '1500000', 5, '19/06/2018 - 20:32:19', '2018-06-19 00:00:00', 5, 0),
(771, 556, 'Kiếp Vô Thương', '2300000', 4, '19/06/2018 - 20:32:19', '2018-06-19 00:00:00', 4, 0),
(772, 557, 'Ngọc Ngà', '350000', 3, '19/06/2018 - 20:33:40', '2018-06-19 00:00:00', 4, 0),
(773, 557, 'Duyên Dáng', '800000', 4, '19/06/2018 - 20:33:40', '2018-06-19 00:00:00', 10, 0),
(774, 557, 'Tươi Sáng', '500000', 4, '19/06/2018 - 20:33:40', '2018-06-19 00:00:00', 6, 0),
(775, 557, 'Sắc Đỏ Yêu Thương', '500000', 3, '19/06/2018 - 20:33:40', '2018-06-19 00:00:00', 10, 0),
(776, 557, 'Bình Dị', '350000', 4, '19/06/2018 - 20:33:40', '2018-06-19 00:00:00', 4, 0),
(777, 557, 'Gánh Hàng Hoa', '900000', 3, '19/06/2018 - 20:33:40', '2018-06-19 00:00:00', 3, 0),
(778, 558, 'Tình Ngọt Ngào', '1200000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 7, 0),
(779, 558, 'BESIDE YOU', '1000000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 8, 0),
(780, 558, 'Dấu Yêu', '900000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 9, 0),
(781, 558, 'Hạnh Phúc', '550000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 10, 0),
(782, 558, 'Bình Yên', '900000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 11, 0),
(783, 558, 'Tuổi Mộng Mơ', '650000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 12, 0),
(784, 558, 'Điều Ngọt Ngào', '650000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 13, 0),
(785, 558, 'Sắc Màu', '650000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 14, 0),
(786, 558, 'Smile Box', '100000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 15, 0),
(787, 558, 'Hạnh Phúc Muôn Màu', '600000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 16, 0),
(788, 558, 'Yêu Thương Đong Đầy', '700000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 12, 0),
(789, 558, 'Dịu Dàng', '500000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 13, 0),
(790, 558, 'Phi Yến Mộng Mơ', '320000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 14, 0),
(791, 558, 'Phi Yến Tinh Khôi', '320000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 17, 0),
(792, 558, 'Điều Giản Dị', '400000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 13, 0),
(793, 558, 'My Sunshine', '500000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 1, 0),
(794, 558, 'Ngại Ngùng', '600000', 1, '19/06/2018 - 20:35:39', '2018-06-19 00:00:00', 1, 0),
(795, 559, 'Until Love', '700000', 7, '19/06/2018 - 20:38:29', '2018-06-19 00:00:00', 15, 0),
(796, 559, 'Màu Nỗi Nhớ', '1000000', 8, '19/06/2018 - 20:38:29', '2018-06-19 00:00:00', 15, 0),
(797, 559, 'Sắc Hồng Xinh', '500000', 6, '19/06/2018 - 20:38:29', '2018-06-19 00:00:00', 12, 0),
(798, 559, 'Màu Yêu Thương', '600000', 9, '19/06/2018 - 20:38:29', '2018-06-19 00:00:00', 19, 0),
(799, 559, 'Một Tinh Yêu', '200000', 10, '19/06/2018 - 20:38:29', '2018-06-19 00:00:00', 11, 0),
(800, 559, 'Baby Love', '650000', 11, '19/06/2018 - 20:38:29', '2018-06-19 00:00:00', 19, 0),
(801, 559, 'Hạnh Phúc Bền Lâu', '1600000', 7, '19/06/2018 - 20:38:29', '2018-06-19 00:00:00', 13, 0),
(802, 559, 'Ấm Áp Yêu Thương', '2500000', 4, '19/06/2018 - 20:38:29', '2018-06-19 00:00:00', 16, 0),
(803, 559, 'Tình Yêu Mãi Xanh', '1150000', 7, '19/06/2018 - 20:38:29', '2018-06-19 00:00:00', 13, 0),
(804, 559, 'Duyên Thầm', '700000', 6, '19/06/2018 - 20:38:29', '2018-06-19 00:00:00', 8, 0),
(805, 559, 'Yêu Thương Nồng Cháy', '480000', 5, '19/06/2018 - 20:38:29', '2018-06-19 00:00:00', 5, 0),
(806, 559, 'Nụ Cười', '600000', 8, '19/06/2018 - 20:38:29', '2018-06-19 00:00:00', 16, 0),
(807, 560, 'Vĩnh Hằng', '1650000', 1, '20/06/2018 - 10:48:06', '0000-00-00 00:00:00', 0, 0),
(808, 561, 'Yêu Thương Nồng Cháy', '480000', 1, '20/06/2018 - 10:59:42', '0000-00-00 00:00:00', 0, 0),
(809, 562, 'Ngọc Ngà', '350000', 3, '20/06/2018 - 14:48:15', '0000-00-00 00:00:00', 0, 0),
(810, 563, 'Tươi Sáng', '500000', 1, '20/06/2018 - 14:48:55', '2018-06-20 00:00:00', 6, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `anhgioithieu`
--
ALTER TABLE `anhgioithieu`
  ADD PRIMARY KEY (`id_anh`);

--
-- Chỉ mục cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`masp`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- Chỉ mục cho bảng `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD PRIMARY KEY (`id_giamgia`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ncc`
--
ALTER TABLE `ncc`
  ADD PRIMARY KEY (`ma_NCC`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  ADD PRIMARY KEY (`ma_NL`);

--
-- Chỉ mục cho bảng `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `order_detal`
--
ALTER TABLE `order_detal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `anhgioithieu`
--
ALTER TABLE `anhgioithieu`
  MODIFY `id_anh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `masp` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_loaisp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `magiamgia`
--
ALTER TABLE `magiamgia`
  MODIFY `id_giamgia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT cho bảng `ncc`
--
ALTER TABLE `ncc`
  MODIFY `ma_NCC` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  MODIFY `ma_NL` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `oder`
--
ALTER TABLE `oder`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=564;

--
-- AUTO_INCREMENT cho bảng `order_detal`
--
ALTER TABLE `order_detal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=811;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
