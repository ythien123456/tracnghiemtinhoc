-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 07:55 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracnghiemtinhoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `AccountID` int(11) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `WorkPlace` varchar(100) DEFAULT NULL,
  `PhoneNumber` varchar(13) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Gender` int(11) DEFAULT '3' COMMENT '1-Nam, 2-Nữ, 3-Không xác định',
  `Role` int(11) NOT NULL DEFAULT '1',
  `JoinDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`AccountID`, `Email`, `Password`, `FirstName`, `LastName`, `WorkPlace`, `PhoneNumber`, `Address`, `Gender`, `Role`, `JoinDate`) VALUES
(1, 'thiennguyen0897@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Thien', 'Nguyen', 'IUH', '0935029097', 'HCM', 1, 3, '2019-01-22 12:16:16'),
(2, 'sinhvien1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vien', 'Sinh', 'IUH', NULL, NULL, 1, 1, '2019-01-27 15:09:01'),
(3, 'giangvien1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vien', 'Giang', 'IUH', NULL, NULL, 2, 2, '2019-01-27 15:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `AnswerID` int(11) NOT NULL,
  `QuestionID` int(11) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `CorrectAnswers` varchar(5) NOT NULL,
  `AnswerExplain` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`AnswerID`, `QuestionID`, `A`, `B`, `C`, `D`, `CorrectAnswers`, `AnswerExplain`) VALUES
(1, 1, 'Ram', 'Rom', 'Router', 'CPU', 'C', 'Không có'),
(2, 2, 'Bộ nhớ trong, bộ nhớ ngoài', 'Cache, Bộ nhớ ngoài', 'Bộ nhớ ngoài, ROM', 'Đĩa quang, bộ nhớ trong', 'A', 'Không có'),
(3, 3, 'Chia sẻ tài nguyên', 'Nhãn hiệu của một thiết bị kết nối mạng', 'Thực hiện lệnh in trong mạng cục bộ', 'Một phần mềm hỗ trợ sử dụng mạng cục bộ', 'A', 'Không có'),
(4, 4, 'Primary memory', 'Receive memory', 'Secondary memory', 'Random access memory', 'A', 'Không có'),
(5, 5, 'Bàn phím (Keyboard), Chuột (Mouse), Máy in (Printer)', 'Máy quét ảnh (Scanner)', 'Bàn phím (Keyboard), Chuột (Mouse) và Máy quét ảnh (Scanner)', 'Máy quét ảnh (Scaner), Chuột (Mouse)', 'C', 'Không có'),
(6, 6, 'Cung cấp và xử lý các phần cứng và phần mềm', 'Nghiên cứu phương pháp, kỹ thuật xử lý thông tin bằng máy tính điện tử', 'Nghiên cứu về công nghệ phần cứng và phần mềm', 'Là một phần mềm chạy trên máy tính, dùng để điều hành, quản lý các thiết bị phần cứng và các tài ngu', 'D', 'Không có'),
(7, 7, 'Chọn thư mục hay tâp tin cần xóa -> Delete', 'Chọn thư mục hay tâp tin cần xóa -> Ctrl + Delete', 'Chọn thư mục hay tâp tin cần xóa -> Alt + Delete', 'Chọn thư mục hay tâp tin cần xóa -> Shift + Delete', 'D', 'Không có'),
(8, 8, 'Menu pad', 'Menu options', 'Menu bar', 'Tất cả đều sai', 'C', 'Không có'),
(9, 9, 'In màn hình hiện hành ra máy in', 'Không có công dụng gì khi sử dụng 1 mình nó.', 'In văn bản hiện hành ra máy in', 'Chụp màn hình hiện hành', 'D', 'Không có'),
(10, 10, 'Maximum', 'Minimum', 'Restore down', 'Close', 'C', 'Không có'),
(11, 11, 'Tạo một văn bản mới', 'Chức năng thay thế nội dung trong soạn thảo', 'Định dạng chữ hoa', 'Lưu nội dung tập tin văn bản vào ổ đĩa', 'D', 'Không có'),
(12, 12, 'View – Symbol', 'Format – Symbol', 'Tools – Symbol', 'Insert – Symbol', 'D', 'Không có'),
(13, 13, 'Bấm tổ hợp phím Ctrl – Enter', 'Bấm phím Enter', 'Bấm tổ hợp phím Shift – Enter', 'Word tự động, không cần bấm phím', 'B', 'Không có'),
(14, 14, 'Shift + End', 'Alt + End', 'Ctrl + End', 'Ctrl + Alt + End', 'C', 'Không có'),
(15, 15, 'Alt + A', 'Ctrl + A', 'Ctrl + Shift + A', 'Câu 1 và 2.', 'B', 'Không có'),
(16, 16, 'Click 1 lần trên đoạn', 'Click 2 lần trên đoạn', 'Click 3 lần trên đoạn', 'Click 4 lần trên đoạn.', 'C', 'Không có'),
(17, 17, 'Nháy đúp chuột vào từ cần chọn', 'Bấm tổ hợp phím Ctrl – C', 'Nháy chuột vào từ cần chọn', 'Bấm phím Enter', 'A', 'Không có'),
(18, 18, 'Table – Merge Cells', 'Table – Split Cells', 'Tools – Split Cells', 'Table – Cells', 'B', 'Không có'),
(19, 19, 'Tại thẻ Home, nhóm Clipboard, chọn Paste', 'Bấm tổ hợp phím Ctrl + V.', 'Chọn vào mục trong Office Clipboar', 'Tất cả đều đúng', 'A,B', 'Không có'),
(20, 20, 'Notepad', 'Microsoft Word', 'WordPad', 'Tất cả đều đúng', 'D', 'Không có'),
(21, 21, '15', '16', '17', '18', 'C', 'Không có'),
(22, 22, '10', '9', '11', 'Lỗi', 'C', 'Không có'),
(23, 23, '6', '11', '5', '0', 'B', 'Không có'),
(24, 24, 'Giỏi', 'Xuất sắc', 'Trung Bình', 'Khá', 'C', 'Không có'),
(25, 25, 'Vlookup', 'IF', 'Left', 'Sum', 'A', 'Không có'),
(26, 26, 'File / Save As', 'File / Save', 'File / New', 'Edit / Replace', 'A', 'Không có'),
(27, 27, 'Số ngày trong tháng', 'Số tháng trong năm', 'Ngày hiện hành của hệ thống', 'Số giờ trong ngày', 'C', 'Không có'),
(28, 28, 'B$1$$10$D', 'B$1', '$B1:$D10', '$B$1:$D$10', 'D', 'Không có'),
(29, 29, '=IF(C2>=3, 200000, 0)', '=IF(C2<=3, 200000, “”)', '=IF(C2<=3, 0, 200000)', '=IF(C2<3, 200000, “”)', 'B', 'Không có'),
(30, 30, '0', '5', '#VALUE!', '#NAME!', 'B', 'Không có'),
(31, 31, 'Home -> Slides -> New Slide', 'Insert -> New Slide', 'Design -> New Slide', 'View -> New Slide', 'A', 'Không có'),
(32, 32, 'Insert\\ Bullets and Numbering', 'Insert \\ Text \\ Slide Number', 'Format \\ Bullets and Number.', 'Các câu trên đều sai', 'B', 'Không có'),
(33, 33, 'Chèn thêm một slide mới vào ngay trước slide hiện hành', 'Chèn thêm một slide mới vào ngay sau slide hiện hành', 'Chèn thêm một slide mới vào ngay trước slide đầu tiên', 'Chèn thêm một slide mới vào ngay sau slide cuối cùng', 'B', 'Không có'),
(34, 34, 'Nhấn tổ hợp phím Shift+F5', 'Nhấn tổ hợp phím Ctrl+Shift+F5', 'Slide Show -> Start Slide Show -> From Current Slide', 'Nhấn phím F5', 'A,C', 'Không có'),
(35, 35, 'Animations -> Add Animation', 'Animations -> Animation', 'Transitions -> Effect Options', 'Transitions -> Transition to this Slide', 'A', 'Không có'),
(36, 36, 'Design ->Themes …', 'Design ->Background…', 'Insert -> Slide Design …', 'Slide Show -> Themes…', 'A', 'Không có'),
(37, 37, 'Normal', 'Slide Sorter', 'Slide show', 'Reading view', 'D', 'Không có'),
(38, 38, 'Thiết lập thời gian chờ trước khi slide được trình chiếu', 'Thiết lập thời gian chờ trước khi hiệu ứng bắt đầu', 'Thiết lập thời gian hoạt động cho tất cả các hiệu ứng', 'Tất cả đều đúng', 'B', 'Không có'),
(39, 39, 'File/ Chart', 'Insert/ Chart', 'View/ Chart', 'Design/ Chart', 'B', 'Không có'),
(40, 40, 'Ctrl + X', 'Ctrl + Z', 'Ctrl + C', 'Ctrl + V', 'B', 'Không có'),
(41, 41, 'Thư rác, thư quảng cáo', 'Thư mới', 'Thư của nhà cung cấp dịch vụ E-mail mà ta đang sử dụng', 'Thư trả lời cho thư mà ta đã gởi trước đó', 'D', 'Không có'),
(42, 42, 'Nhận thư', 'Gởi thư', 'Tạo hộp thư', '3 lựa chọn trên đúng', 'D', 'Không có'),
(43, 43, 'Lưu trang web về máy tính', 'Đánh dấu trang web trên trình duyệt', 'Đặt làm trang chủ', 'Tất cả đều đúng', 'B', 'Không có'),
(44, 44, 'Gửi email', 'Viết thư', 'Xem 1 trang web', 'In trên may in sử dụng chung cài đặt ở máy khác', 'D', 'Không có'),
(45, 45, 'Tìm kiếm trên các Websites tìm kiếm chuyên dụng', 'Tùy vào nội dung tìm kiếm mà kết nối đến các Websites cụ thể.', 'Tìm kiếm ở bất kỳ một Websites nào', 'Tìm trong các sách danh bạ internet', 'A', 'Không có'),
(46, 46, 'Read Access Memory.', 'Random Access Memory.', 'Rewrite Access Memory.', 'Cả 3 câu đều đúng.', 'B', 'Không có'),
(47, 47, 'Tốc độ CPU, dung lượng bộ nhớ RAM, dung lượng và tốc độ ổ cứng.', 'Yếu tố đa nhiệm', 'Hiện tượng phân mảnh ổ đĩa.', 'Cả 3 phần trên đều đúng.', 'D', 'Không có'),
(48, 48, 'Là công cụ chỉ dùng để tính toán các phép tính thông thường.', 'Là công cụ cho phép xử lý thông tin một cách tự động.', 'Là công cụ cho phép xử lý thông tin một cách thủ công.', 'Là công cụ không dùng để tính toán.', 'B', 'Không có'),
(49, 49, 'Màn hình -> CPU -> Đĩa cứng', 'Đĩa cứng -> Màn hình -. CPU', 'Nhập thông tin -> Xử lý thông tin -> Xuất thông tin', 'Màn hình -> Máy in -> CPU', 'C', 'Không có'),
(50, 50, 'Bàn phím, màn hình, chuột', 'Màn hình, máy in.', 'Chuột, màn hình, CPU', 'Bàn phím, màn hình, loa', 'B', 'Không có'),
(51, 51, 'Shift', 'Alt', 'Tab', 'Ctrl', 'D', 'Không có'),
(52, 52, 'Ctrl + X', 'Ctrl + C', 'Ctrl + V', 'Ctrl + Z5', 'B', 'Không có'),
(53, 53, 'Dialog box', 'Control box', 'List box', 'Text box', 'B', 'Không có'),
(54, 54, 'Đặt thuộc tính hidden.', 'Copy nhiều nơi trên ổ đĩa máy tính', 'Đặt thuộc tính Read only', 'Sao lưu dự phòng', 'D', 'Không có'),
(55, 55, 'Chống phân mảnh ổ cứng', 'Làm giảm dung lượng ổ cứng', 'Sao lưu dữ liệu ổ cứng', 'Lau chùi tập tin rác ổ cứng', 'A', 'Không có'),
(56, 56, 'Tạo một văn bản mới', 'Đóng văn bản đang làm việc', 'Mở 1 văn bản đã có trên máy tính', 'Lưu văn bản đang làm việc', 'C', 'Không có'),
(57, 57, 'Nhấn tổ hợp phím Ctrl + =', 'Nhấn tổ hợp phím Ctrl + Shift + +', 'Click chọn biểu tượng Superscipt trong nhóm Font', 'Click chọn biểu tượng Subscript trong nhóm Font', 'D', 'Không có'),
(58, 58, 'Sao chép nội dung văn bản', 'Canh lề văn bản', 'Sao chép định dạng', 'Mở văn bản đã có', 'C', 'Không có'),
(59, 59, 'File -> info -> Protect Document -> Restrict Editing', 'Review ->Restrict Editing -> Editing restrictions -> No changes (Read only)', 'File -> info -> Protect Document -> Mark as Final', 'File -> info -> Protect Document -> Encrypt as Password', 'B', 'Không có'),
(60, 60, '.doc', '.docx', '.dot', '.txt', 'B,C', 'Không có'),
(61, 61, 'Dữ liệu kiểu số sẽ mặc nhiên canh thẳng lề trái', 'Dữ liệu kiểu ký tự sẽ mặc nhiên canh thẳng lề trái', 'Dữ liệu kiểu thời gian sẽ mặc nhiên canh thẳng lề phải', 'Dữ liệu kiểu ngày tháng sẽ mặc nhiên canh thẳng lề phải.', 'A', 'Không có'),
(62, 62, 'True', 'False', '#Name?', '#Value!', 'B', 'Không có'),
(63, 63, 'Tương đối', 'Tuyệt đối', 'Hỗn hợp', 'Biểu diễn sai', 'C', 'Không có'),
(64, 64, 'Home -> Print', 'Insert -> Print', 'Design -> Print', 'File -> Print', 'D', 'Không có'),
(65, 65, 'View -> Master Slide', 'Insert -> Slide Master', 'View -> Slide Master', 'Insert -> Master Slide', 'B', 'Không có'),
(66, 66, 'Slide trong cùng 1 presentation', 'Slide không cùng 1 presentation', 'Địa chỉ email, trang web, tập tin.', 'Các lựa chọn trên đều đúng.', 'D', 'Không có'),
(67, 67, 'Insert -> Audio', 'Insert -> Component', 'Insert -> Diagram', 'Insert -> Comment', 'A', 'Không có'),
(68, 68, ' ALT + I + D', 'ALT + E + F', 'ALT + E + D', 'ALT + W + P', 'C', 'Không có'),
(69, 69, 'Dữ liệu truyền từ máy đang chat lên máy chủ phòng nét và quay về máy chat bên kia.', 'Dữ liệu đi trực tiếp giữa hai máy đang trong phòng chat.', 'Dữ liệu truyền về máy chủ Yahoo và quay về máy bên kia.', 'Dữ liệu truyền về máy chủ internet Việt Nam và quay về máy đang chat.', 'C', 'Không có'),
(70, 70, 'Lĩnh vực chính phủ', 'Lĩnh vực giáo dục', 'Lĩnh vực cung cấp thông tin', 'Thuộc về các tổ chức khác', 'B', 'Không có'),
(71, 71, 'Là một ngôn ngữ siêu văn bản.', 'Là hình thức trao đổi thông tin dưới dạng thư thông qua hệ thống mạng máy tính.', 'Là các file được tạo ra bởi Word, Excel, PowerPoint … rồi chuyển sang html.', 'Tất cả đều sai.', 'A', 'Không có'),
(72, 72, 'Microsoft Internet Explorer', 'Mozilla Firefox', 'Netcape', 'Unikey', 'D', 'Không có'),
(73, 73, 'Google Driver', 'Mediafire', 'OneDrive', 'Cả 3 câu hỏi trên đều đúng.', 'C', 'Không có');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommentID` int(11) NOT NULL,
  `ExamID` int(11) NOT NULL,
  `AccountID` int(11) NOT NULL,
  `Content` varchar(300) NOT NULL,
  `PostDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CommentID`, `ExamID`, `AccountID`, `Content`, `PostDate`) VALUES
(1, 1, 1, 'Thật là hay quá đi', '2019-01-27 17:15:20'),
(2, 2, 1, 'Quá chuẩn luôn ạ!!', '2019-01-27 17:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `ExamID` int(11) NOT NULL,
  `ExamTitle` varchar(255) NOT NULL,
  `ExamDescription` varchar(500) NOT NULL,
  `ExamType` int(11) NOT NULL,
  `TotalQuestions` int(11) NOT NULL,
  `TimeLimit` int(11) UNSIGNED NOT NULL,
  `ExamSlug` varchar(255) NOT NULL,
  `DateCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`ExamID`, `ExamTitle`, `ExamDescription`, `ExamType`, `TotalQuestions`, `TimeLimit`, `ExamSlug`, `DateCreated`, `Status`) VALUES
(1, 'Đề Tổng Hợp 1', 'Đề thi thử trắc nghiệm chứng chỉ tin học', 2, 40, 60, 'de-tong-hop-1', '2019-01-27 16:51:20', 1),
(2, 'Đề Chuẩn 1', 'Đề thi thử trắc nghiệm tin học', 1, 40, 60, 'de-chuan-1', '2019-01-27 16:53:32', 1),
(3, 'Đề Tổng Hợp 2', 'Đề tin học tổng hợp số 2', 2, 40, 30, 'de-tong-hop2', '2019-03-31 20:05:54', 0),
(4, 'Đề Tổng Hợp 3', 'Tổng hợp', 2, 40, 30, 'de-tong-hop-3', '2019-04-03 01:13:01', 0),
(5, 'Đề Chuẩn 2', 'Để chuẩn', 1, 40, 30, 'de-chuan-2', '2019-04-03 01:13:52', 0),
(6, 'Đề Chuẩn 3', 'Chuẩn', 1, 40, 30, 'de-chuan-3', '2019-04-03 01:13:52', 0),
(7, 'Đề Tổng Hợp 4', 'Đề thi tổng hợp câu hỏi ngẫu nhiên trải đều 6 modules.', 2, 40, 30, 'de-tong-hop-4', '2019-04-04 15:46:56', 0),
(8, 'Đề Tổng Hợp 5', 'Đề thi tổng hợp câu hỏi ngẫu nhiên trải đều 6 modules.', 2, 40, 30, 'de-tong-hop-5', '2019-04-04 15:46:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `examtypes`
--

CREATE TABLE `examtypes` (
  `TypeID` int(11) NOT NULL,
  `TypeTitle` varchar(100) NOT NULL,
  `TypeDescription` varchar(255) DEFAULT NULL,
  `TypeSlug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `examtypes`
--

INSERT INTO `examtypes` (`TypeID`, `TypeTitle`, `TypeDescription`, `TypeSlug`) VALUES
(1, 'Đề chuẩn', 'Đề thi chuẩn theo quy tắc của chứng chỉ tin học.', 'de-chuan'),
(2, 'Đề tổng hợp', 'Đề thi tổng hợp các câu hỏi ngẫu nhiên', 'de-tong-hop'),
(3, 'Đề module - INTERNET', 'Đề thi chỉ bao gồm những câu hỏi thuộc về Internet', 'de-module-internet'),
(4, 'Đề module - HỆ ĐIỀU HÀNH', 'Đề thi chỉ bao gồm những câu hỏi thuộc về hệ điều hành', 'de-module-hdh'),
(5, 'Đề module - CNTT', 'Đề thi chỉ bao gồm những câu hỏi thuộc về Công nghệ thông tin', 'de-module-cntt'),
(6, 'Đề module - WORD', 'Đề thi chỉ bao gồm những câu hỏi thuộc về Word', 'de-module-word'),
(7, 'Đề module - EXCEL', 'Đề thi chỉ bao gồm những câu hỏi thuộc về Excel', 'de-module-excel'),
(8, 'Đề module - POWERPOINT', 'Đề thi chỉ bao gồm những câu hỏi thuộc về Powerpoint', 'de-module-powerpoint');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `FeedbackID` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Content` varchar(1000) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`FeedbackID`, `Email`, `Phone`, `Content`, `Date`) VALUES
(1, 'thiennguyen0897@gmail.com', '0935029097', 'Đây là một trang web có sự đầu tư về mặt nội dung nên tôi rất thích nhưng vẫn còn một số mặt hạn chế mà tôi nghĩ đáng để bàn tới, chẳng hạn như:\n...\n...\n\n...', '2019-01-27 17:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `ModuleID` int(11) NOT NULL,
  `ModuleName` varchar(100) NOT NULL,
  `ModuleDescription` varchar(255) DEFAULT NULL,
  `ModuleType` int(11) NOT NULL DEFAULT '1' COMMENT '1 - Module đề thi, 2 - Module Bài viết'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`ModuleID`, `ModuleName`, `ModuleDescription`, `ModuleType`) VALUES
(1, 'Công nghệ thông tin', 'Hiểu biết về CNTT cơ bản', 1),
(2, 'Hệ điều hành', 'Sử dụng máy tính căn bản', 1),
(3, 'Internet', 'Sử dụng Internet cơ bản', 1),
(4, 'Word', 'Xử lý văn bản cơ bản', 1),
(5, 'Excel', 'Sử dụng bảng tính cơ bản', 1),
(6, 'Powerpoint', 'Sử dụng trình chiếu cơ bản', 1),
(7, 'Hướng dẫn', 'Hướng dẫn sử dụng các chức năng của trang web', 2),
(8, 'Tin tức', 'Các thông báo mới của Bộ giáo dục về Chứng chỉ tin học CNTT cơ bản', 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `PostID` int(11) NOT NULL,
  `AccountID` int(11) NOT NULL,
  `ModuleID` int(11) NOT NULL,
  `PostTitle` varchar(255) NOT NULL,
  `PostContent` text NOT NULL,
  `PostSlug` varchar(255) NOT NULL,
  `Views` int(11) NOT NULL DEFAULT '0',
  `PostDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`PostID`, `AccountID`, `ModuleID`, `PostTitle`, `PostContent`, `PostSlug`, `Views`, `PostDate`) VALUES
(1, 3, 4, '﻿Những thủ thuật Word hữu ích bạn không nên bỏ qua\r\n', '<p>Microsoft Word là công cụ soạn thảo nội dung văn bản quen thuộc hiện này. Để có thể thao tác nhanh hơn khi gõ nội dung hay xử lý văn bản, một số thủ thuật khá hữu ích với người dùng như <a title=\"Tổng hợp phím tắt thông dụng trong Microsoft Word\" href=\"https://quantrimang.com/thao-tac-nhanh-trong-van-ban-voi-cac-phim-tat-thong-dung-18824\">Phím tắt thông dụng trong Word</a>, <a title=\"Một số thủ thuật khi in văn bản trong MS Word\" href=\"https://quantrimang.com/mot-so-thu-thuat-khi-in-van-ban-trong-ms-word-33270\">thủ thuật khi in văn bản Word</a>,...mà Quản trị mạng đã từng giới thiệu tới bạn đọc</p> <p>Trong bài viết này, chúng tôi sẽ giới thiệu đến bạn thêm những thủ thuật Word, giúp công việc soạn thảo của chúng ta trở nên đơn giản hơn rất nhiều, đạt hiệu quả cao trong công việc.</p> <p><strong>Lưu ý</strong>, các thao tác trong bài dưới đây thực hiện với Microsoft Word 2007. Tùy theo phiên bản Word hiện tại bạn đang dùng mà có thể thực hiện hay không các thủ thuật dưới này.</p> <h2>1. Chuyển đổi nhanh đoạn chữ thường sang chữ viết hoa:</h2> <p>Nhiều người không chuyên sau khi gõ nội dung văn bản theo chữ viết thường, nhưng vì yêu cầu phải chuyển sang chữ viết hoa, sẽ xóa toàn bộ lại đoạn văn đó và bật phím Capslock để gõ lại. Một số thì lại bôi đen và chuyển sang font chữ Vn.TimeH, nhưng lại gặp phải tình trạng lỗi font chữ.</p> <p>Có cách nhanh hơn, đơn giản hơn rất nhiều để có thể chuyển từ chữ thường sang chữ hoa trên Word mà không phải thực hiện tác thao tác rườm ra bên trên. Bạn<strong> bôi đen đoạn văn bản cần chuyển sang chữ hoa và nhấn tổ hợp phím Shift + F3</strong>.</p> <p>Khi văn bản đang ở chữ thường bạn nhấn tổ hợp phím Shift + F3, văn bản sẽ chuyển sang chỉ viết hoa chữ cái đầu tiên.</p> <p style=\"text-align: center;\"><img style=\"border: 1px solid black;\" title=\"Chuyển đổi từ chữ thường sang chữ hoa \" src=\"https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-viet-hoa.jpg\" alt=\"Những thủ thuật Word \" width=\"650\" height=\"340\"></p> <p>Chúng ta tiếp tục nhấn tổ hợp phím Shift + F3 sẽ chuyển viết hoa toàn bộ đoạn văn.</p> <p style=\"text-align: center;\"><img style=\"border: 1px solid black;\" title=\"Viết hoa toàn bộ nội dung văn bản \" src=\"https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-cach-viet-hoa.jpg\" alt=\"Những thủ thuật Word \" width=\"650\" height=\"340\"></p> <h2>2. Dịch văn bản bằng Bing Translator:</h2> <p>Hiện nay, <strong>Word đã tích hợp sẵn bộ dịch tự động của Bing</strong> khi người dùng có nhu cầu muốn dịch một đoạn văn nào đó. Mặc dù công cụ này không có khả năng linh hoạt như trên Google Translate, hay nhiều công cụ khác. Tuy nhiên nếu nội dung văn bản ngắn và chúng ta muốn dịch nhanh thì có thể sử dụng tính năng này.</p> <h3>Bước 1:</h3> <p>Tại nội dung văn bản cần dịch, chúng ta nhấn thẻ <strong>Review</strong> trên thanh Riboon.</p> <p style=\"text-align: center;\"><img style=\"border: 1px solid black;\" title=\"Dịch nội dung văn bản \" src=\"https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-dich-Review.jpg\" alt=\"Những thủ thuật Word \" width=\"650\" height=\"340\"></p> <h3>Bước 2:</h3> <p>Sau đó bạn chọn mục <strong>Translate</strong>.</p> <p style=\"text-align: center;\"><img style=\"border: 1px solid black;\" title=\"Translate \" src=\"https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-dich-Translate.jpg\" alt=\"Những thủ thuật Word \" width=\"650\" height=\"340\"></p> <p>Nếu dùng Word 2013, nhấn <strong>Translate</strong> rồi chọn tiếp <strong>Translate Document</strong>.</p> <h3>Bước 3:</h3> <p>Ngay tại giao diện bên phải xuất hiện <strong>cột dịch văn bản</strong>. Tại đây, chúng ta có thể <strong>lựa chọn ngôn ngữ dịch cho văn bản</strong> tại mục From và To. Chẳng hạn tôi chọn dịch từ tiếng Việt sang tiếng Anh.</p> <p style=\"text-align: center;\"><img style=\"border: 1px solid black;\" title=\"Chọn ngôn ngữ dịch \" src=\"https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-dich-ngon-ngu.jpg\" alt=\"Những thủ thuật Word \" width=\"650\" height=\"340\"></p> <h3>Bước 4:</h3> <p>Sau khi chọn xong ngôn ngữ, nhấn <strong>mũi tên màu xanh</strong> để tiến hành dịch. Ngay sau đó, Word sẽ có thông báo hỏi bạn có muốn tiếp tục công đoạn dịch khi dịch trên trang web không. Nhấn <strong>Yes</strong>.</p> <p style=\"text-align: center;\"><img style=\"border: 1px solid black;\" title=\"Dịch nội dung văn bản \" src=\"https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-dich-dich.jpg\" alt=\"Những thủ thuật Word \" width=\"650\" height=\"340\"></p> <h3>Bước 5:</h3> <p>Chúng ta sẽ được đưa đến trang web dịch, kèm theo đó là <strong>nội dung văn bản sau khi được dịch sang ngôn ngữ tiếng Anh</strong>.</p> <p style=\"text-align: center;\"><img style=\"border: 1px solid black;\" title=\"Bản dịch trên Word \" src=\"https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-dich-ban-dich.jpg\" alt=\"Những thủ thuật Word \" width=\"650\" height=\"340\"></p> <h2>3. Thêm nhanh ngày hoặc giờ hiện tại trong Word</h2> <p>Thao tác thêm ngày hoặc giờ hiện tại cũng có thể thực hiện trên Word nhanh chóng, ngoài việc bạn có thể<a title=\"Hướng dẫn cách chèn ngày hiện tại trong Excel\" href=\"https://quantrimang.com/huong-dan-cach-chen-ngay-hien-tai-trong-excel-124195\"> chèn ngày hiện tại trên Excel</a> mà chúng tôi đã giới thiệu trước đây.</p> <p>Để <strong>chèn ngày hiện tại vào văn bản</strong> của bạn, nhấn tổ hợp phím <strong>Shift + Alt + D</strong>.</p> <p style=\"text-align: center;\"><img style=\"border: 1px solid black;\" title=\"Chèn ngày hiện tại \" src=\"https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-chen-ngay.jpg\" alt=\"Những thủ thuật Word \" width=\"650\" height=\"340\"></p> <p>Nếu muốn <strong>chèn giờ hiện tại</strong> thì thực hiện tổ hợp phím <strong>Shift + Alt + T</strong>.</p> <p style=\"text-align: center;\"><img style=\"border: 1px solid black;\" title=\"Chèn giờ hiện tại vào Word \" src=\"https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-chen-gio.jpg\" alt=\"Những thủ thuật Word \" width=\"650\" height=\"340\"></p> <h2>4. Tính năng Screenshoot trên Word 2013:</h2> <p>Bình thường để chèn hình ảnh nào đó, hoặc chèn ảnh chụp màn hình, chúng ta vẫn thực hiện theo cách thủ công đó là Insert sau đó Picture để lấy ảnh có sẵn trong máy và chèn vào nội dung. Nếu ảnh chụp màn hình thì bạn phải thông qua thao tác save hình với công cụ chỉnh sửa ảnh có trên máy.</p> <p>Tuy nhiên, Word 2013 đã rút gọn thao tác này vói tính năng Screenshot. Nghĩa là là người dùng có thể lựa chọn các cửa sổ đang chạy trên Windows, rồi chèn vào nội dung văn bản.</p> <div class=\'adbox in-article\'><ins class=\"adsbygoogle\" style=\"display:block; text-align:center;\" data-ad-format=\"fluid\" data-ad-layout=\"in-article\" data-ad-client=\"ca-pub-9275417305531302\" data-ad-slot=\"2737970258\"></ins><script> (adsbygoogle = window.adsbygoogle || []).push({});</script></div><h3>Bước 1:</h3> <p>Bạn nhấn chọn tab <strong>Insert</strong> rồi chọn <strong>Screenshoot</strong>.</p> <p style=\"text-align: center;\"><img title=\"Tính năng Screenshoot Word 2013\" src=\"https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-screenshoot.jpg\" alt=\"Những thủ thuật Word \" width=\"650\" height=\"303\"></p> <h3>Bước 2:</h3> <p>Ngay sau đó sẽ xuất hiện hình ảnh màn hình của các chương trình trên Windows. Nếu muốn chọn chèn ảnh chụp màn hình nào đó, chỉ cần click chọn. Ngay lập tức ảnh sẽ được chèn tại nội dung văn bản.</p> <p style=\"text-align: center;\"><img title=\"Chèn ảnh chụp màn hình tại nội dung văn bản \" src=\"https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-chen-anh.jpg\" alt=\"Những thủ thuật Word \" width=\"650\" height=\"303\"></p> <h2>5. Ẩn nội dung trong văn bản Word bí mật:</h2> <p>Nếu với Word bản cũ khi bạn muốn ẩn đoạn văn nào đó, thường sẽ biến thành font chữ màu trắng. Nhưng cách làm này sẽ dễ bị phát hiện, văn bản cũng xuất hiện khoảng trắng của đoạn văn được ẩn đi đó.</p> <p>Vậy thì để ẩn nội dung văn bản dễ dàng mà không bị phát hiện, bạn hãy thực hiện theo bước sau:</p> <h3>Bước 1:</h3> <p><strong>Bôi đen đoạn văn bản muốn ẩn</strong> và nhấn tổ hợp phím <strong>Ctrl + D</strong>. Sau đó xuất hiện giao diện <strong>cửa sổ Font</strong>. Bạn <strong>tích chọn mục Hidden</strong> và ấn <strong>OK</strong> để ẩn đoạn văn đó đi.</p> <p style=\"text-align: center;\"><img style=\"border: 1px solid black;\" title=\"Ẩn nội dung văn bản \" src=\"https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-an-van-ban.jpg\" alt=\"Những thủ thuật Word \" width=\"550\" height=\"475\"></p> <h3>Bước 2:</h3> <p>Bạn thấy đấy nội dung văn bản đã được ẩn đi và không có bất cứ khoảng trắng dư thừa nào trong nội dung.</p> <p>Để <strong>hiển thị lại nội dung</strong> văn bản đó, nhấn tổ hợp phím <strong>Ctrl + Shift + 8</strong>. Văn bản bị ẩn vẫn xuất hiện tại vị trí cũ của nó.</p> <p style=\"text-align: center;\"><img style=\"border: 1px solid black;\" title=\"Hiện nội dung văn bản \" src=\"https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-hien-chu.jpg\" alt=\"Những thủ thuật Word \" width=\"650\" height=\"340\"></p> <h2>6. Chỉnh sửa file PDF:</h2> <p>Trong Word 2013, chúng ta có thể mở file PDF bằng Word và sau đó chỉnh sửa như một văn bản Word bình thường. Việc này sẽ giúp bạn có thể chỉnh sửa nội dung, điều mà không thể thực hiện được ở phần mềm <a title=\"Cách cài đặt mật khẩu file PDF bằng Adobe Acrobat\" href=\"https://quantrimang.com/huong-dan-cach-de-cai-mat-khau-cho-file-pdf-107157\">xem file PDF bằng Adobe Acrobat Reader</a>.</p> <h2>7. Gõ văn bản ở vị trí bất kỳ trong trang:</h2> <p>Khá nhiều người muốn rời con trỏ đến vị trí nào trong văn bản thường phải nhấn liên tục phím cách. Nhưng cách đó đã quá xưa rồi. Chúng ta hoàn toàn có thể <strong>di chuyển con trỏ chuột đến bất cứ vị trí nào</strong> trong trang rồi gõ nội dung, chỉ bằng <strong>nhấp đúng chuột</strong> vào vị trí đó là xong. Word sẽ tự động thêm khoảng trắng cho chúng ta. </p> <p style=\"text-align: center;\"><img style=\"border: 1px solid black;\" title=\"Gõ văn bản tại vị trí bất kỳ \" src=\"https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-vi-tri-go.jpg\" alt=\"Những thủ thuật Word \" width=\"650\" height=\"340\"></p> <h2>8. Kiểm tra tương thích ngược với các văn bản cũ:</h2> <p>Nếu người dùng muốn kiểm tra xem nội dung văn bản có bị lỗi font chữ hay không, hay có thể xem được với các phiên bản Word cũ hay không thì có thể làm theo đường dẫn: <strong>File &gt; Info &gt; Inspect Document &gt; Check Compatibility</strong>. Tính năng này chỉ có từ Word 2010 trở lên mà thôi.</p> <p style=\"text-align: center;\"><img style=\"border: 1px solid black;\" title=\"So sánh nội dung bản Word với phiên bản trước \" src=\"https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-so-sanh.jpg\" alt=\"Những thủ thuật Word \" width=\"550\" height=\"464\"></p> <p>Trên đây là 8 thủ thuật nhỏ giúp bạn có thể thao tác nhanh và hiệu quả hơn đối với nội dung văn bản Word. Một số tính năng có thể thực hiện với bản Word 2007, một số khác chỉ thực hiện với phiên bản từ Word 2010 trở đi.</p>', 'nhung-thu-thuat-word-huu-ich-ban-khong-nen-bo-qua', 13, '2019-01-27 17:19:18');
INSERT INTO `posts` (`PostID`, `AccountID`, `ModuleID`, `PostTitle`, `PostContent`, `PostSlug`, `Views`, `PostDate`) VALUES
(2, 3, 5, '100 thủ thuật Excel cực kỳ hữu ích, bắt buộc phải nhớ\r\n', 'Kỹ năng sử dụng Excel một cách thành thạo và nắm được các thủ thuật Excel sẽ giúp ích rất nhiều cho sự thăng tiến hay sự học của các bạn. Nắm bắt được vấn đề đó, Viện đào tạo kế toán, tin học Đức Minh xin đưa ra một series 100 thủ thuật Excel cực kỳ hữu ích, giúp các bạn ngày càng trở nên chuyên nghiệp hơn trong mắt bạn bè và đồng nghiệp.\n\n100 thủ thuật Excel cực kỳ hữu ích, bắt buộc phải nhớ \n \n\nClick chuột trái vào từng mục \"đi tới\" để : \n\nĐi tới phần 2: Các thủ thuật excel hữu dụng\n\nĐi tới phần 3: Các phím tắt thần kỳ trong excel\n\nĐi tới phần 4: Một số thủ thuật excel đơn giản mà hay\n\nĐi tới phần 5: Một số videos về thủ thuật tin học rất hữu dụng\n\n \n\n1. Thủ thuật Excel - Tìm kiếm thông minh trong Excel\nChắc các bạn đã biết chức năng tìm kiếm trong excel bằng cách nhấn tổ hợp phím Ctrl + F hoặc Home – Find, nhưng trong trường hợp các bạn chưa rõ về kết quả tìm kiếm thì sao?\n\nViện đào tạo kế toán, tin học Đức Minh ví dụ các bạn muốn tìm kiếm cụm từ “Công ty Cổ phần hóa chất Thông Minh” trong sổ nhật ký chung trên excel nhưng các bạn không nhớ được chữ “Minh” mà chỉ nhớ là Công ty …Thông… gì gì đó, còn cụ thể  là Thông cái gì thì không nhớ.\n\nTrong trường hợp này chả lẽ bó tay, nhưng may mắn thay, nhờ sự thông minh của excel và sự khôn khéo của các bạn mà các bạn có thể ứng dụng thủ thuật excel sau:\n\n- Bước 1: Bật chức năng tìm kiếm trong excel bằng cách click vào commands Find trên thanh Ribbon hoặc dùng tổ hợp phím Ctrl + F\n\n- Bước 2: Nhập cụm từ:    Công ty*Thông* \n\n---> Tận hưởng thành quả!\n\n \n\nTìm kiếm thông minh trong excel\n\nTìm kiếm thông minh trong Excel\n\n \n2. Thủ thuật Excel - Tạo một phím truy cập nhanh ở phần Quick Access\nTrong excel có một thanh công cụ gọi là “Quick access toolbar” – đúng như tên gọi của nó, những công cụ này giúp chúng ta truy cập các chức năng của excel một cách nhanh chóng ví dụ như undo, redo, mở file mới, lưu file, in nhanh, …. Những công cụ này thường xuất hiện phía trên cùng bên trái của giao diện excel như hình dưới đây:\n\n \n\ntùy biến quick access toolbar 1\n\nTạo một phím truy cập nhanh ở phần Quick Access 1\n\n \n\nNhư hình trên ta các bạn có thể thấy hiện tại trên bảng tính excel trên, thanh quick access toolbar chỉ có shorcut lưu, undo và redo, đê thêm các chức năng khác các bạn nhấn vào cái mũi tên xổ xuống và đánh dấu tick để chọn các chức năng các bạn muốn vị dụ như “New” để mở file mới, “Open” để mở một file đã có sẵn, “Quick Print” để in nhanh, “Print Preview” để hiển thị trước khi in, hoặc “more commands” để tạo thêm bất kỳ chức năng nào các bạn muốn có trong excel.\n\n \n\nTạo một phím truy cập nhanh ở phần Quick Access 2\n\nTạo một phím truy cập nhanh ở phần Quick Access 2\n\n \n\nNhư hình trên, các bạn có thể thấy tất cả các commands (lệnh) trong excel và chúng ta có thể thêm bớt bất kỳ lệnh nào bằng cách chọn lệnh đó và nhấn vào add or remove sau đó nhấn OK nhé.\n\n \n\n3. Thủ thuật Excel - Thêm một đường chéo trong một cell (ô)\nCó rất nhiều trường hợp có thể cần dùng tới thủ thuật excel này, thường là các bạn dùng nó để tạo một đường chéo mục đích là chia các thuộc tính khác nhau cho một ô hay một hàng, cột bất kỳ. Tin học Đức Minh xin đưa ví dụ các bạn muốn tạo một đường chéo chia tách hai phần tài khoản nợ và có trong sổ nhật ký chung trên excel cho nó đẹp chẳng hạn như hình dưới:\n\n \n\nTạo một đường chéo trong một ô excel 1\n\nTạo một đường chéo trong một ô excel 1​\n\n \n\nCác bạn làm như sau: Tại ô muốn kẻ đường chéo, như trong hình là ô E4 --> các bạn nhấn chuột phải vào ô E4 sau đó chọn Format Cell > nhấn vào tab Border, sau đó nhấn vào nút có hình đường chéo như hình dưới đây.\n\n \n\nTạo một đường chéo trong một ô excel 2\n\nTạo một đường chéo trong một ô excel 2\n\n \n\n4. Thủ thuật Excel - Chọn và thêm bớt dòng cột hoàn toàn bằng bàn phím\nViệc sử dụng hoàn toàn bàn phím, không phải động tới chuột sẽ giúp tăng tốc độ làm việc của bạn trong excel lên khá nhiều. Bởi vậy, thay vì dùng excel theo kiểu vừa nhập liệu vừa kéo kéo thả thả con chuột để thêm bớt dòng cột các bạn có thể dùng những tổ hợp phím tắt cực kỳ hữu ích sau:\n\nBước 1: Để thêm bớt dòng hay cột bất kỳ các bạn phải chọn dòng hay cột đó đã.\n\n - Chọn dòng: khi con trỏ của bạn đang ở một ví trí bất kỳ trên dòng đó, các bạn nhấn tổ hợp phím Shift và phím cách\n\n- Chọn cột: khi con trỏ của bạn đang ở một ví trí bất kỳ trên dòng đó, các bạn nhấn tổ hợp phím Ctrl và phím cách\n\nBước 2: Để thêm hay bớt dòng:\n\n- Thêm dòng / cột: ấn tổ hợp phím Ctrl + Shift + +\n\n- Bớt dòng / cột: ấn tổ hợp phím Ctrl + -\n\nDù bạn biết cách sử dụng tổ hợp phím tắt này nhưng nếu các bạn chỉ chọn một dòng sau đó nhấn ctrl shift + liên tục thì thực sự rất là mệt. Tốt nhất để thêm một lượng x dòng hoặc x cột, các bạn hãy chọn đúng bằng số x đó sau đó hãy thêm. Các bạn có thể chọn x dòng các bạn muốn bằng cách nhấn thêm phím mũi tên di chuyển theo các hướng lên xuống trái phải và để ý xem đã chọn được bao nhiêu cột. Ví dụ các bạn chọn 10 dòng thì sau khi nhấn ctrl shift + sẽ chèn thêm 10 dòng, chọn 100 cột sẽ được thêm 100 cột, cứ nhân đôi như thế….\n\n \n\nThêm bớt dòng cột trong excel cực nhanh\n\nThêm bớt dòng cột trong excel cực nhanh​\n\n \n\n5. Thủ thuật Excel - Sao chép hoặc di chuyển vùng dữ liệu cực nhanh\nĐể di chuyển hoặc sao chép dữ liệu từ một cột trong một bảng tính excel thì cách nhanh nhất là:\n\nBước 1: Trước hết chọn cột dữ liệu đó. Sau đó di chuyển con chuột cho tới vùng rìa cho đến khi biểu tượng chuột biến thành dấu 4 mũi tên chỉ 4 hướng.\n\nBước 2:\n\n- Để di chuyển vùng dữ liệu các bạn chỉ cần giữ chuột và kéo.\n\n- Để sao chép vùng dữ liệu các bạn nhấn thêm phím Ctrl trước khi kéo\n\nSao chép hoặc di chuyển vùng dữ liệu cực nhanh\n\nSao chép hoặc di chuyển vùng dữ liệu cực nhanh trong excel\n\n \n\n6. Thủ thuật Excel - Xóa những ô trống trong một vùng dữ liệu\nKhi nhập liệu trong excel sẽ có nhiều trường hợp có những khoảng trống trong một vùng dữ liệu. Ví dụ như hình dưới đây:\n\n \n\nXóa những ô trống trong một vùng dữ liệu trong excel\n\nXóa những ô trống trong một vùng dữ liệu trong excel 1\n\n \n\nNhư các bạn thấy có 2 dòng E11 và E14 trống bảng kê phiếu nhập kho, trường hợp các bạn muốn xóa 2 dòng đó đi các bạn có thể chọn 2 dòng đó và nhấn delete. Nhưng trong trường hợp có rất nhiều dòng trống hoặc ô trống thì các bạn không thể làm cách đó rất mất thời gian. Các bạn có thể áp dụng thủ thuật excel sau:\n\nBước 1: Đầu tiên quét tất cả vùng dữ liệu bao chứa những khoảng trống muốn xóa đi đó, sau đó các bạn  bật chức năng lọc Filter trong excel, ấn vào mũi tên xổ xuống ở một cột bất kỳ. Khi đó, một trình đơn sẽ xuất hiện, các bạn bạn bỏ chọn Select All và chọn phần Blank ở dưới cùng. Khi đó tất cả các ô trống/dòng trống sẽ ngay lập tức được hiển thị ra.\n\n \n\nXóa những ô trống trong một vùng dữ liệu trong excel 2\n\nXóa những ô trống trong một vùng dữ liệu trong excel 2\n\n \nBước 2: Các bạn bôi đen tất cả những dòng trống xuất hiện sau đó nhấn chuột phải chọn Delete Rows – Sau đó bỏ lọc là xong. Và đây là kết quả:\n\n \n\nXóa những ô trống trong một vùng dữ liệu trong excel 3\n\nXóa những ô trống trong một vùng dữ liệu trong excel 3\n\n \n\n7. Thủ thuật Excel - Ứng dụng chúc năng lọc Excel vào sổ kế toán\nChức năng lọc trong excel là một chức năng mà các kế toán viên hay bất kỳ ai sử dụng excel cũng không thể không biết. Càng làm việc với excel lâu dài các bạn sẽ càng thấy giá trị của việc lọc bằng Filter để quản lý.\n\nViện đào tạo kế toán, tin học Đức Minh ví dụ cuối tháng các bạn cần lọc tài khoản 112 trong sổ Nhật ký chung để nhằm mục đích theo dõi hoặc chỉnh sửa gì gì đó chẳng hạn. Các bạn quét tất cả dữ liệu trong trong vùng cột tài khoản. Sau đó nhấn tổ hợp phím Ctrl + Shift + L, sau đó chỉ việc nhấn vào mũi tên xổ xuống và chọn tài khoản các bạn cần lọc là xong\n\n \n\nLọc Excel trong kế toán\n\nLọc Excel trong kế toán\n\n \n\n8. Thủ thuật Excel - Giới hạn giá trị nhập bằng Data Validation trong Excel\nĐể các bạn hiểu về phần này Viện đào tạo kế toán, tin học Đức Minh ví dụ trong một bảng tính excel các bạn có một cột danh mục hàng hóa kèm cột giá tiền ở bên cạnh chẳng hạn. Các bạn muốn giới hạn vùng giá tiền này trong khoảng dưới 20.000 chẳng hạn, vì nhiều khả năng giả sử các bạn nhập dữ liệu trong lúc say bia rượu chẳng hạn có thể nhập nhầm từ 20.000 thành 200.000 hay 2.000.000 RẤT NGUY HIỂM. Vậy lúc này áp dụng thủ thuật giới hạn giá trị nhập liệu bằng chức năng Data Validation trong excel là hay nhất. Các bạn làm theo các bước sau:\n\n- Bước 1: Bôi đen vùng dữ liệu cần giới hạn, click chuột vào Tab “Data” trên thanh menu – sau đó vào Data Validation.\n\n \n\nGiới hạn dữ liệu nhập bằng data validation trong excel 1\n\nGiới hạn dữ liệu nhập bằng data validation trong excel 1\n\n \n\n- Bước 2: Trong phần Allow chọn “Whole Number”, phần Data để “Between”, phần Minimum và Maximum để lần lượt là 1 và 20000 đó nhấn ok là xong.\n\n--> Như các bạn thấy ở hình dưới, ở ô dưới cùng trong cột giá, Đức Minh để giá trị là 30000 nên Excel đang báo lỗi không thể nhập được, như vậy các bạn đã thành công.\n\n \n\nGiới hạn dữ liệu nhập bằng data validation trong excel 2\n\nGiới hạn dữ liệu nhập bằng data validation trong excel 2​\n\n \n\n9. Thủ thuật Excel - Nắm vững các thao tác cơ bản trong Excel\nCác bạn dù có biết bao nhiều thủ thuật excel đi chăng nữa mà không nắm vững được cơ bản thì cũng không thể trở thành một chuyên gia excel thực thụ trong mắt bạn bè được. Có chăng chỉ thỉnh thoảng lôi mấy cái thủ thuật ra lòe thiên hạ còn bản chất thì chả hiểu gì. Nhất là đối với những bạn muốn học sâu hơn về excel thì hãy cố gắng nắm vững những kỹ năng cơ bản này đã nhé:\n\n+ Tạo bảng tính, Định dạng dữ liệu trong excel: Định dạng số, bảng, trộn (merge), xóa (split)…\n\n+ Định dạng tự động: Định dạng theo yêu cầu \n\n+ Sử dụng hàm thông dụng: Vlookup, If, Hlookup, ….\n\n+ Vẽ Biểu đồ, đồ thị: Chart\n\n+ Tạo siêu liên kết: Hyperlink\n\n+ Thiết Lập in: Page setup\n\n+ Đặt Password cho file Excel các phiên bản.\n\n... Ngoài ra còn rất nhiều kiến thức tin học văn phòng cơ bản khác tại:\n\nhttp://ketoanducminh.edu.vn/tin-tuc/102/2168/Cac-Ky-Nang-Tin-Hoc-Van-Phong-Co-Ban-Ban-Can-Nam-Vung.html\n\n \n\n10. Thủ thuật Excel - Quản lý hàng hóa bằng Data Validation trong Excel \nĐầu tiên Đức Minh xin đưa ra ví dụ các bạn có một kho hàng cần quản lý trong excel theo kiểu:\n\n \n\nQuản lý hàng hóa bằng data validation excel\n\nQuản lý hàng hóa bằng data validation excel\n\n \n\nVí dụ các bạn có một bảng kho hàng hóa gồm 3 cột: \"Loại sản phẩm\", \"Đời sản phẩm\", \"Tình trạng sản phẩm\". và các bạn muốn quản lý trong excel theo kiểu:\n- Cột \"Loại sản phẩm\" chọn trong một menu xổ xuống, click chuột dựa theo một danh sách có sẵn, tránh nhập dữ liệu bằng tay. Ví dụ list các sản phẩm iphone 6, iphone 7, sony z3 z5 , ...\n- Cột \"Đời sản phẩm\" ta cần menu xổ xuống tương ứng nhưng phải đáp ứng một điều kiện phù hợp cột\"Loại sản phẩm\". Ví dụ cột loại sản phẩm iphone thì cột đời sản phẩm menu xổ xuống xuất hiện những sản phẩm tương ứng ví dụ iphone 100, iphone 1000,...\n\n- Cột \"Tình trạng sản phẩm\" có 2 loại \"có hàng\" và \"hết hàng\" thôi.\n\nĐể làm được điều đó, đầu tiên cần hiểu được chức năng Data Validation trong excel, thủ thuật này khá phức tạp, cụ thể các bạn xem tại:\n\nhttp://ketoanducminh.edu.vn/tin-tuc/102/2727/Cach-quan-ly-hang-hoa-bang-Data-Validation-trong-Excel-cuc-hay.html\n\nNếu các bạn có thắc mắc ở phần nào trong bài viết 100 thủ thuật excel này thì comment ở dưới nhé, Viện đào tạo Kế toán, Tin học Đức Minh sẽ hỗ trợ cho các bạn!\n\n(Còn tiếp) ....\n\n \n\nPhần 2\n\n11. Thủ thuật excel – Tăng tốc nhập liệu gấp trăm lần\nChắc các bạn không thể ngờ được có một thủ thuật excel giúp tăng tốc độ nhập liệu của các bạn lên hàng chục, hàng trăm, thậm chí hàng nghìn lần nếu các bạn phải thường xuyên nhập liệu trên excel với những nội dung dài lê thê và lặp đi lặp lại. Đó chính là thủ thuật lợi dụng chức năng auto correct trong excel\n\nMột ví dụ rất đơn giản là các bạn hay phải nhập cụm từ “Cộng hòa xã hội chủ nghĩa Việt Nam” hay “Viện đào tạo kế toán và tin học Đức Minh” chẳng hạn. Thay vì cứ phải nhập liên tục như thế, các bạn chỉ cần sử dụng chức năng gõ tắt trong excel bằng một tổ hợp phím cực hay đó là Alt + T +A. Sau đó nhập phần chữ muốn gõ tắt vào phần “With” và chữ muốn thay thế vào phần Replace. Ví dụ: Ở phần replace các bạn nhập là cvn, phần with các bạn nhập là “Cộng hòa xã hội chủ nghĩa Việt Nam” chẳng hạn.\n\n \n\ngõ tắt trong excel\n\ngõ tắt trong excel\n\nTừ đó về sau các bạn chỉ việc gõ cvn thay vì gõ một cụm từ dài là Cộng hòa xã hội chủ nghĩa Việt Nam\n\n \n\n12. Thủ thuật excel - Xem thống kê nhanh về tổng, mix, max,…\nChắc có lẽ rất nhiều người dùng excel đều biết về những hàm excel thông dụng về tính toán thống kê như sum để tính tổng, min max để tính giá trị nhỏ nhất lớn  nhất trong một vùng dữ liệu nào đó,….Bây giờ thay vì phải dùng hàm, các bạn có thể xem thống kê nhanh về số liệu của một vùng dữ liệu nào đó bằng cách quét vùng dữ liệu và xem ở dưới thanh trạng thái “Status bar”, ví dụ như hình:\n\n \n\n \n\nThống kê nhanh trong excel\n\nThống kê nhanh trong excel\n\n \n\n13. Thủ thuật excel – Ghép nối dữ liệu với phím &\nĐể các bạn hiểu về thủ thuật excel rất cơ bản mà rất hữu dụng này, Viện đào tạo kế toán, tin học Đức Minh đưa ra ví dụ các bạn có 2 ô  riêng lẻ tách ra 2 phần đó là họ riêng, tên riêng, ví dụ ô A1 thì là Đào Đăng, ô B1 thì là Khoa, bây giờ ở ô C1 các bạn muốn trả kết quả về họ và tên đầy đủ là Đào Đăng Khoa mà không muốn phải tự nhập tay thì các bạn có thể ứng dụng thủ thuật excel này bằng cách viết ở ô C1 là : A1&B1, hoặc có thể thêm khoảng trắng ở giữa cho đẹp: A1&“ ”&B1, kết quả trả về sẽ là: Đào Đăng Khoa.\n\n \n\n14. Thủ thuật excel - Đổi tên sheet bằng cách nháy đúp\nCó một thủ thuật cực kỳ đơn giản trong excel mà rất nhiều người không biết, đó là đổi tên một bảng tính (Sheet) trong excel chỉ với một cú nhấp chuột đúp, thay vì chuột phải chọn rename hay làm các thao tác bất kỳ nào khác.\n\nĐổi tên Sheet nhanh\n\nĐổi tên Sheet nhanh\n\n15. Thủ thuật excel – Lặp lại thao tác Format Painter\nĐối với những người hay phải dùng tới cái “chổi quét sơn” (Fomart Painter) trong excel thì đây là một tính năng tuyệt hay trong excel, mọi việc bạn cần làm đó chỉ đơn giản là thay vì chỉ click chuột một lần vào cái chổi đó thì các bạn click đúp chuột trái, sau đó quét định dạng lên những ô hay những vùng dữ liệu các bạn muốn sao chép định dạng. Các bạn thử ngay và luôn nhé!\n\n16. Thủ thuật excel - Chuyển dòng sang cột và ngược lại\nĐể các bạn hiểu rõ thủ thuật này Viện đào tạo kế toán, tin học Đức Minh có một ví dụ cụ thể các bạn muốn chuyển một bảng dữ liệu như dưới đây từ cột thành dòng chẳng hạn, các bạn chỉ việc copy và chuột phải chọn paste special sau đó chọn transpose là xong.\n\nChuyển dòng thành cột trong excel và ngược lại\n\nChuyển dòng thành cột trong excel và ngược lại\n\n \n\n17. Thủ thuật excel - Ẩn tất cả các kiểu dữ liệu\nTrong đa số công việc mà phải quản lý dữ liệu bằng excel thì gần như vấn đề bảo mật được đưa lên hàng đầu, đứng trên tất cả các vấn đề khác. Về phần bảo mật và ẩn tất cả các kiểu dữ liệu trong excel như ô, dòng , cột, bảng tính, …. thì các bạn có thể tham khảo tại sê ri cực hay này của Tin học Đức Minh: Tất cả các kiểu ẩn dữ liệu trong Excel tại đây:\n\n>>>>>> http://ketoanducminh.edu.vn/tin-tuc/102/2694/Huong-dan-toan-bo-cac-kieu-an-du-lieu-trong-Excel-cuc-ky-huu-ich.html\n\n \n\n18. Thủ thuật excel – Nhập dữ liệu bắt đầu với số 0\nvấn đè này thường các bạn làm kế toán hay kinh tế chung chung sẽ hay gặp phải vấn đề nhập các số hóa đơn kiểu 00000004 hay 00000…. gì gì đó. Nếu bạn nhập bình thường thì excel sẽ chỉ hiện thị số bình thường như 4 5 hay 345345, chứ không thể hiện một dãy số 0 đằng trước được. Để khắc phục vấn đề này, các bạn chỉ cần thêm một dấu ’ ở đằng trước, hoặc chuột phải vào ô hay vùng dữ liệu đó chọn format cells – custom – viết 8 số 0 vào chẳng hạn : Nhập dữ liệu bắt đầu bằng số 0 trong excel\n\nNhập dữ liệu bắt đầu bằng số 0 trong excel\n\n \n\n19. Chuyển đổi chữ hoa và chữ thường\nBạn có thể chuyển đổi từ chữ thường thành chữ hoa bằng hàm =Upper( ) như trong ví dụ dưới đây:\n\nChuyển chữ thường thành chữ hoa trong excel\n\n \n\n \n\n \n\n \n\n \n\n \n\nChuyển chữ thường thành chữ hoa trong excel\n\n \n20. Thủ thuật excel - Cách tạo Drop-down list trong excel\nTrong quá trình làm việc, kế toán phải nhập rất nhiều dữ liệu, nhất là những bạn làm kho, khi nhập bảng kê chi tiết bán hàng thường thì các bạn sẽ phải gõ từng mã hàng, như vậy rất mất thời gian, có khi lại sai sót nhiều. Chính vì vậy trong khuôn khổ bài viết hôm nay  Đức Minh sẽ hướng dẫn các bạn cách tạo drop down list - danh sách xổ xuống để chọn dữ liệu trong excel. Sẽ rất tiện, nhanh và chính xác hơn. Vì thủ thuật này khá phức tạp nên Viện đào tạo kế toán, tin học Đức Minh đã viết thành một bài riêng tại đây:\n\nhttp://ketoanducminh.edu.vn/tin-tuc/102/2715/Cach-tao-danh-sach-xo-xuong-Drop-down-list-de-chon-trong-excel-cung-Duc-Minh.html\n\n \n\n \n\n \n\n \n\nPhần 3: Các phím tắt thần kỳ trong excel\n \n\nNhững phím, tổ hợp phím tắt trong excel sẽ là công cụ hữu hiệu để giúp cho bạn thoát khỏi tình trạng vừa dùng bàn phím vừa quơ tay vớ con chuột chỉ trỏ loạn xạ, sẽ giúp tốc độ nhập liệu và làm việc của các bạn cùng excel tăng lên rất nhiều, và sau đây là những phím tắt hữu ích nhất:\n\n \n\n21. Thủ thuật excel 3 – Tự động tính tổng không cần dùng hàm với “ALT + =”\nĐa số người dùng Excel đều biết đến hàm tính tổng “SUM” dùng để tính tổng một vùng giá trị nào đó, hàm này thực sự rất đơn giản. Nhưng không phải ai cũng biết cách để dùng hàm này một cách nhanh nhất. Chúng ta thực sự không cần phải lúc nào cũng viết ra một cú pháp đầy đủ: Sum(number1, number 2,....) mà chỉ cần áp dụng một trong hai cách sau đây\n\n- Dùng tổ hợp phím ALT và phím = sau đó nhấn Enter -> chưa đến 1s là xong\n\n- Nhấn vào nút lệnh (command) biểu tượng tổng trong toán học trên thanh ribbon – thẻ Home\n\n* Chú ý vùng dữ liệu tính tổng phải liền kề nhau, không được tách rời\n\n \n\n tự động tính tổng excel\n\n \n\n22. Thủ thuật excel P3 – Bật tính năng lọc Data Filter cực nhanh cùng “Ctrl + Shift + L”\nNhư hiện tại công việc của tác giả bài viết này rất thường xuyên dùng tới chức năng lọc của Excel, nếu cứ phải vừa nhập dữ liệu vừa quơ quơ con chuột thì rất là mệt. Nhưng thật may thay chúng ta có thể bật tính năng lọc dữ liệu CỰC NHANH, chỉ cần KHOẢNG MỘT GIÂY với cùng lúc 2 tổ hợp phím “Ctrl + A “ (Bôi đen toàn bộ bảng), và “Ctrl + Shift + L” (Bật chức năng lọc) . Chú ý là bảng dữ liệu bạn muốn lọc phải bao gồm những ô dữ liệu liền kề hoặc có sự liên kết chặt chẽ, không rời rạc, như vậy thì bạn chỉ cần nhần vào MỘT Ô BẤT KỲ TRONG BẢNG, sau đó nhấn 2 tổ hợp phím kia là xong.\n\n*Các bạn có thể tắt chức năng lọc ở bất kỳ vị trí nào cũng với cùng tổ hợp phím trên.\n\n23. Thủ thuật excel P3 – Hiển thị công thức cực nhanh với “Ctrl + ~”\nNhững bạn nào thường xuyên phải “đánh vật” với những công thức excel thì không thể không biết tổ hợp phím này. Thay vì phải vào tab Formulas – Show Formulas thì các bạn chỉ cần nhấn tổ hợp phím “Ctrl + ~” là xong. Và đây là kết quả:\n\nhiển thị công thức excel\n\nNếu các bạn muốn ẩn công thức đi thì lại lặp lại tổ hợp phím CTR + ~ thôi (ctrl + ` )\n\n24. Thủ thuật excel P3 – Di chuyển con trỏ nhanh với “Ctrl + mũi tên”\nThủ thuật này sẽ rất hữu ích khi các bạn phải thao tác với một khối lượng dữ liệu rất lớn và lằng nhằng. Thay vì cầm con chuột và kéo chuột mỏi cả tay, hoa cả mắt thì các bạn chỉ cần dùng phím ctrl kết hợp với các phím mũi tên điều hướng lên xuống trái phải, ví dụ nhấn “ctrl + phím mũi tên xuống” thì con trỏ sẽ xuống tận cũng của vùng dữ liệu gần nhất, tương tự như thế với các vùng dữ liệu còn lại.\n\nVậy con trỏ của bạn sẽ di chuyển nhanh đến mức nào khi bạn sử dụng các phím tắt trên? Hãy thử làm một phép toán nho nhỏ nhé:\n\nExcel có hơn 1 triệu dòng (1.048.576 dòng).  Nếu bạn đặt con trỏ vào A1 và nhấn Control + phím mũi tên xuống, bạn sẽ vượt qua HƠN 1 TRIỆU DÒNG trong vòng chưa đầy một giây. Nếu chúng ta có 6 dòng là một inch, vậy:\n\n1.048.576 dòng / 6 = 174.763 inch / 12 = 14.564 feet / 5280 = 2,76 dặm\n\n2.76 dặm trong 1 giây * 60 = 165,6 dặm một phút * 60 = 9.936 dặm một giờ.\n\nKể từ khi con trỏ của bạn thực sự mất ÍT HƠN MỘT GIÂY để “ĐI DU LỊCH” hơn 1 TRIỆU DÒNG, chúng ta hãy gọi nó là 10.000 DẶM/GIỜ (HƠN 16000 KM/H). Nếu so sánh với phương tiện chở con người thì chúng ta có X-15, hiện giữ kỉ lục thế giới về tốc độ bay nhanh nhất thế giới dành cho máy bay có người lái, với tốc độ Mach 6,72, khoảng 7.274 km/h, chưa bằng một nữa tốc độ di chuyển con trỏ. Vậy bạn sẽ không bao giờ để đánh bại “con trỏ của bạn” trong cuộc đua về tốc độ kể cả lái máy bay nhanh nhất thế giới đi nữa . Không bao giờ!\n\n\n\n- Theo số liệu của Excel Jet -\n\n25. Thủ thuật excel P3 – Bôi đen một vùng dữ liệu liền kề với “CTR + Shift + mũi tên”\nNhư thủ thuật trên: điều hướng nhanh bằng tổ hợp phím Ctrl + các phím mũi tên lên xuống trái phải. Vậy nâng cao hơn ta có thể ứng dụng tổ hợp phím trên để bôi đen một vùng dữ liệu liền kề nhau BÊN TRÊN, DƯỚI, TRÁI, PHẢI  của ô mà các bạn đang chọn. Các bạn thử chọn một ô bất kỳ ở giữa bảng dữ liệu của các bạn sau đó nhấn “Ctrl + Shift + các phím mũi tên điều hướng” xem điều gì xảy ra nhé!\n\n26. Thủ thuật excel P3 – Di chuyển giữa các Sheet bằng “Crtl + Pg Up, Pg Dn”\nCác bạn có thể di chuyển nhanh giữ các sheet hiện có bằng tổ hợp phím “Ctrl +Pg Up” (đi tới sheet bên trái sheet hiện tại), “Ctrl + Pg Dn” (đi tới sheet bên phải sheet hiện tại). Nếu file excel của bạn chỉ có vài Sheets thì những tổ hợp phím này thực sự quá là tuyệt vời.\n\n27. Thủ thuật excel P3 – Di chuyển giữa các Workbook bằng “Crtl + Shift + Tab”\nNếu các bạn có thể “Di chuyển giữa các WorkSheet” bằng “Crtl + Pg Up, Pg Dn”. Vậy các bạn cũng có thể làm điều tương tự với Workbook, thủ thuật này sẽ khá là hữu ích với những người hay phải làm việc đa tác vụ, một lúc vừa bận trình duyệt, vừa bật word, vừa bật 2, 3 file,workbook excel, vừa bật linh tinh gì gì đó khác....Các bạn thử mở một lúc nhiều thứ lên xong vào một trong các workbook excel, nhấn “Ctrl + Shift + Tab” xem hiệu quả tuyệt với của nó nhé\n\n28. Thủ thuật excel P3 – Ẩn hiện thanh ribbon với “Ctrl + F1”\nSẽ không có vấn đề gì nếu các bạn đang ngồi trước những cái màn hình máy tính to đùng cỡ mấy chục inch. Nhưng với những chiếc màn hình máy tính nhỏ nhỏ xinh xinh thì không gian làm việc Excel sẽ cần phải càng thoáng đãng càng tốt. Và đó chính là thời điểm tổ hợp phím “Ctrl + F1” thể hiện!\n\n29. Thủ thuật excel P3 – hiển thị Paste Special với “Ctrl + Alt + V”\nDân kế toán chuyên dùng excel sẽ chẳng lạ gì tính năng Paste Special. Với tổ hợp phím “Ctrl + Alt + V” thì từ nay chúng ta không phải click chuột phải sau đó chọn Paste Special nữa. Thế là bớt đi một, hai giây rồi!\n\n30. Thủ thuật excel P3 – Di chuyển tới ô A1 bằng tổ hợp phím “Ctrl + Home”\nSẽ là một cơn ác mộng đối với những ai phải làm việc với MỘT BIỂN DỮ LIỆU trong excel trong khi không biết những tổ hợp phím điều hướng nhanh, trong đó có tổ hợp phím “Ctrl + Home” này. Các bạn đang ở ô A1000000 chẳng hạn. Các bạn nghĩ sao nếu phải di chuyển tới ô A1 bằng cách dùng chuột để kéo kéo. Chắc lôi kéo đến hết ngày quá. Lúc đó hãy thử nhấn “Ctrl + Home” và tận hưởng thiên đường của tốc độ nhé!\n\n31. Thủ thuật excel P3 –  Di chuyển đến ô cuối cùng trong sheet với Ctrl + End\n\nĐây cũng là một phím tắt khá hay, nhưng không như “ô trên cùng”, có một điều đặc biệt là trước khi sử dụng tổ hợp phím này các bạn phải hiểu “ô cuối cùng” là cái gì đã,  còn không thì đây là một tổ hợp phím thực sự ... vô dụng. Giả sử bây giờ các bạn tò mò mở một file excel mới hoàn toàn trống dữ liệu lên và nhấn thử tổ hợp phím này thì các bạn sẽ thấy nó thật sự ... vô dụng tập 2. Vậy ô cuối cùng là gì? Đó chính là ô giao điểm của hàng và cột cuối cùng của excel có chứa dữ liệu nào đó, có thể hiểu mang máng là cạnh dưới bên phải của “hình chữ nhật dữ liệu” của worksheet excel mà các bạn thao tác. Có lẽ đọc đến đây các bạn đã hiểu. Hãy thử và trải nghiệm nhé!\n\n* Chú ý đây cũng là cách để kiểm tra xem có ô dữ liệu nào thừa mà các bạn không biết không.\n\n32. Thủ thuật excel P3 –  Hiển thị kết quả tiếp theo của việc tìm kiếm với Shift F4\nĐây là một tổ hợp phím khá hay theo tác giả. Ví dụ các bạn đang tìm một cụm từ “thủ thuật excel” ở trong bảng tính chẳng hạn. Các bạn nhấn Ctrl + F sau đó muốn tìm kiếm tiếp lại cứ phải giữ nguyên cái bảng hiển thị chức năng tìm kiềm và ấn find next, thật sự rất khó chịu. Và tổ hợp phím tắt này chính là giải pháp cho các bạn!\n\n33. Thủ thuật excel P3 – Go to special với Ctrl + G và Alt + S\nGo to special là một chức năng khá đặc biệt trong excel, đúng như tên gọi “Special” của nó. Không chỉ đơn giản là đi đến (go to) ô A1 B1 hay A1000 nào đó mà các bạn còn có thể đi tới những ô trống, những công thức hiện có và còn vô số cái hay khác đang chờ các bạn khám phá với  bộ 2 tổ hợp phím này\n\n34. Thủ thuật excel P3 –  Tạo một dòng mới trong excel với Alt + Enter\nXuống một dòng mới như trong word thì khá đơn giản chỉ cần nhấn Enter là xong. Nhưng với excel thì các bạn cần nhiều hơn thế. Và đó là lúc tổ hợp phím Alt + Enter thể hiện mình\n\n35. Thủ thuật excel P3 –  Chèn ngày hiện tại với Ctrl + ;\nThay vì phải nhòm xuống cái đồng hồ bên dưới góc trái màn hình và gõ gõ nhập nhập ngày tháng vào một ô nào đó trong excel thì các bạn chỉ mất 1 giây với tổ hợp phím Ctrl + ; này, nhanh – gọn – lẹ.\n\n36. Thủ thuật excel P3 – Chèn giờ hiện tại với Ctrl + Shift + :\nTương tự như tổ hợp phím trên, các bạn cũng chỉ cần mất chưa tới một giây để chèn giờ phút hiện tại với tổ hợp phím Ctrl + Shift + : . Tổ hợp phím này sẽ rất hữu ích đối với một số người hay phải nhập liệu về thời gian.\n\n37. Thủ thuật excel P3 –  Quét công thức, sao chép dữ liệu xuống bằng Ctrl + D\nĐây cũng là một tổ hợp phím cực kỳ hữu dụng nhất là đối với dân kế toán, chắc các bạn sẽ chẳng lạ gì. Thay vì phải cầm chuột kéo công thức hay sao chép dữ liệu từ ô trên xuống những ô bên dưới thì chỉ các bạn chỉ cần kết hợp Ctrl + D (Có thể hiểu là Control – Down), với shift + mũi tên đi xuống hoặc Ctrl + Shift + mũi tên đi xuống là xong.\n\n38. Thủ thuật excel P3 –  Định dạng mọi thứ trong excel với Ctrl + 1\n- Nếu không biết đến chức năng Format cells thì sẽ là một thiếu sót rất lớn ngay cả đối với những người mới biết dùng excel. Có lẽ chúng ta đã quá quen với tính năng định dạng tổng thể gần như mọi thứ này. Nhưng không hẳn ai cũng biết đến tổ hợp phím tắt của nó chính là “Ctrl + 1”, thay vì phải click chuột phải vào ô/vùng cần định dạng --> chọn formart cells.\n\n39. Thủ thuật excel P3 –  Các kiểu định dạng Formart Cells với Ctrl + Shift + ....\nNhững tổ hợp phím tắt dưới đây sẽ rất hữu dụng cho các bạn hay làm việc với nhiều kiểu dữ liệu khác nhau, cứ phải định dạng lại liên tục:\n\nGeneral (chung chung, tổng quát) = Control + Shift + ~\nCurrency (tiền tệ) = Control + Shift + $\nPercentage (phần trăm) = Control + Shift + %\nDate (ngày tháng) = Control + Shift + #\nTime (thời gian) = Control + Shift + @\nNumber (số) = Control + Shift +!\n\n40. Thủ thuật excel P3 – Lặp lại thao tác cùng phím F4\nF4 là một phím tắt khá là hay giúp bạn lặp lại 1 thao tác định dạng các bạn vừa mới thực hiện. Ví dụ trộn ô, tô màu vàng cho chữ, ... , các bạn sẽ không cần phải click vào lệnh hay dùng tổ hợp phím nào nữa mà chỉ cần nhấn 1 phím F4 là xong\n\n41. Thủ thuật excel P3 –  Ẩn cột (column) với Ctrl + )\nĐể ẩn một hoặc một tập hợp các cột các bạn chỉ cần chọn những ô chứa trong những cột đó bằng phím Shift hoặc dùng chuột, sau đó nhấn “Ctrl + )” là xong.\n\n- Phím tắt hiển thị lại dòng là Ctrl + Shift + ). Nhưng  tiếc là phím tắt này không phải bất kỳ phiên bản office nào cũng xài được. Trong trường hợp này các bạn có thể xài chuột phải – unhide hoặc nút mở menu chuột phải trên bàn phím + phím U\n\n42. Thủ thuật excel P3 – Ẩn và hiển thị dòng (row) với Ctrl + (\nĐể ẩn một hoặc một tập hợp các dòng các bạn chỉ cần chọn những ô chứa trong những dòng đó bằng phím Shift hoặc dùng chuột, sau đó nhấn “Ctrl + (” là xong.\n\n- Phím tắt hiển thị lại dòng là “ Ctrl + Shift + ( ” . Các bạn phải chọn những dòng bao gồm những dòng bị ẩn bên trong sau đó mới nhấn tổ hợp phím này\n\n43. Thủ thuật excel P3 –  Tạo một biểu đồ ở Sheet (bảng tính) mới với F11\nTổ hợp phím này sẽ rất cần thiết đối với những ai hay phải làm việc với biểu đồ. Chỉ đơn giản với một phím F11 sau khi đã chọn vùng dữ liệu, các bạn đã có một biểu đồ ở một bảng tính mới đẹp như mơ.\n\n44. Thủ thuật excel P3 –  Hiển thị trước khi in với Ctrl + F2\nTổ hợp phím này sẽ rất hữu dụng với những người làm văn phòng hay những người phải in tài liệu hàng ngày, tổ hợp phím này cũng là để mở chức năng “xem trước khi in và in nhanh trong các phiên bản office từ 2010 trở đi.\n\n45. Thủ thuật excel P3 –  Lưu với tên khác cùng F12\nCó lẽ ai dùng excel cũng sẽ biết tổ hợp phím lưu dữ liệu là Ctrl  + S. Nhưng không phải ai cũng biết phím tắt F12 này. Nhanh và gọn – hãy thử và cảm nhận!\n\n46. Thủ thuật excel P3 – Bật tính năng giúp đỡ của excel với F1\nCó lẽ nhiều người sẽ thấy phím F1 này ... vô dụng. Nhưng gượm đã, với những bạn khá, giỏi Tiếng Anh nhưng kiến thức về Excel lại hạn chế thì đây là PHÍM TẮT VÀNG  cho các bạn để tìm hiểu mọi thứ về excel “chuẩn như Lê Duẩn”, vì đây là những thứ do chính Microsoft viết ra chứ không phải kiến thức, thủ thuật lượm lặt trên internet\n\n47. Thủ thuật excel P3 –  Mở danh sách xổ xuống bằng Alt + mũi tên xuống\nPhím tắt này nghe có vẻ kỳ quặc nhưng sẽ không xa lạ với những bạn hay dùng chức năng lọc hoàn toàn bằng bàn phím (Ctrl + Shift + L). Sau khi bật lọc bằng bàn phím thì không lẽ lại dùng chuột tiếp, không cần, các bạn chỉ cần dùng phím Alt + phím mũi tên đi xuống thôi.\n\n48. Thủ thuật excel P3 – Di chuyển màn hình với Alt + Pg Dn, Alt + Pg Up\nTương tự như lên xuống một màn hình với 2 phím đơn giản là Pg Dn và Pg Up thì hai tổ hợp phím này lần lượt là sang phải một màn hình và sang trái một màn hình. Kết hợp cả 4 tổ hợp phím này sẽ giúp ích rất nhiều cho quá trình theo dõi dữ liệu excel của các bạn nếu các bạn hay phải làm việc với những bảng dữ liệu lớn\n\n49. Thủ thuật excel P3 – Di chuyển tới ô đầu tiên của 1 dòng bằng phím home\nTrái ngược với phím End, các bạn sẽ ít dùng tới phím này là phím Home, phím home giúp đưa con trỏ của các bạn nhanh chóng về ô đầu tiên của dòng chứa ô các bạn đang chọn dù các bạn đang ở bất kỳ đâu.\n\n50. Thủ thuật excel P3 – Kích hoạt chế độ chọn dữ liệu với Shift + F8\nCác bạn có thể hiểu tác dụng của phím tắt này là giúp các bạn đỡ phải nhấn và giữ phím Ctrl khi chọn các ô/vùng dữ liệu không liền kề nhau. Hãy tự trải nghiệm sự khác biệt và nhận ra tiện ích của nó nhé\n\n51. Thủ thuật excel P3 – Bôi đen, quét chọn với Shift + mũi tên 4 hướng\n\nChắc ai cũng biết là để chọn, bôi đen ô, dữ liệu trong ô bằng chuột rồi nhưng không phải ai cũng sẽ biết là nếu chỉ đơn giản chọn dữ liệu trong ô, hoặc chọn những ô liền kề nhau theo các hàng dọc, hàng ngang thì ta chỉ cần nhấn giữ phím shift + bốn mũi tên chỉ bốn hướng.\n\n52. Thủ thuật excel P3 – Chọn đến cuối vùng dữ liệu liền kề với Ctrl + Shift + mũi tên\nTương tự như thủ thuật trên là chọn những ô liền kề nhau, thì ở đây ta kết hợp với phím CTR. Kết quả của sự kết hợp này đó là ta sẽ có thể bôi đen một vùng dữ liệu LIỀN KỀ NHAU từ vị trí bạn đặt con trỏ cho đến ô chứa dữ liệu cuối cùng của vùng đó theo các hướng trái, phải, trên dưới của cacsc phím mũi tên. Nghe có vẻ khó hiểu nên các bạn cần phải THỰC HÀNH NGAY  để hiểu nhé.\n\n53. Thủ thuật excel P3 – Chọn dữ liệu lên, xuống một màn hình với Shift + Pg Up\n\nTheo ô các bạn đang chọn các bạn có thể chọn lên phía trên hoặc phía dưới ô đó một bàn mình với tổ hợp phím Shif + Pg Up và Shift Pg Dn. Kết hợp cùng các tổ hợp phím thì gần như các bạn sẽ không cần dùng chuột để chọn ô nữa mà vẫn nhanh như thường\n\n53. Thủ thuật excel P3 – Chọn dữ liệu sang trái, phải một màn hình với Alt + Shift + Pg Up, Pg Dn\nTương tự như tổ hợp phím trên, thêm vào phím Alt ở đằng trước là các bạn có thể chọn dữ liệu từ ô hiện tại cho đến hết màn hình của ô đó theo bên trái hay bên phải với  Alt + Shift + Pg Up, Pg Dn, Alt + Shift + Pg Dn.\n\n54. Thủ thuật excel P3 – Mở rộng vùng chọn đến ô đầu tiên của hàng với Shift + Home\nTính từ ô mà các bạn đang chọn, các bạn có thể chọn đến Ô ĐẦU TIÊN CỦA HÀNG chỉ với  tổ hợp phím đơn giản đó là Shift + Home. Tổ hợp phím này trong một số trường hợp sẽ giúp tốc độ chọn dữ liệu bằng bàn phím của bạn nhanh hơn so với dùng chuột RẤT NHIỀU LẦN.\n\n55. Thủ thuật excel P3 - Mở rộng vùng chọn đến ô đầu tiên của Sheet với Ctrl + Shift + Home\nTính từ ô mà các bạn đang chọn, các bạn có thể chọn đến Ô ĐẦU TIÊN CỦA Sheet chỉ với  tổ hợp phím đơn giản đó là Ctrl + Shift + Home. Trong một số trường hợp các bạn sẽ không ngờ tổ hợp phím này lại có ích đến thế.\n\n56. Thủ thuật excel P3 – Mở rộng vùng chọn đến ô cuối cùng có dữ liệu với Ctrl + Shift + End\nRiêng tổ hợp phím này thật sự tác giả bài viết cũng ... vừa mới biết. Nên ngay lập tức phải vớ lấy cái bàn phím và chia sẻ ngay cho các bạn. Vì đó vẫn là tổ hợp phím mà tác giả trước đây vẫn nghĩ là không tồn tại, và cũng lười không thèm tìm hiểu. Tác dụng của tổ hợp phím này sẽ là mở rộng vùng chọn của các bạn từ ô các bạn đang chọn cho đến ô cuối cùng tính theo “góc dưới cùng bên phải của hình chữ nhật dữ liệu bất kể có liền kề nhau hay không”.  Tác dụng của nó bao quát hơn mấy tổ hợp phím Ctr + Shift + lên xuống rất nhiều. Các bạn cứ thử ứng dụng tổ hợp phím này cùng với các tổ hợp phím trên khi chọn các vùng dữ liệu trong excel xem có khác biệt so với khi dùng chuột kéo kéo lôi lôi không nhé.\n\n57. Thủ thuật excel P3 – Chọn ô có chứa comment với Ctrl + Shift + O\nTác dụng của tổ hợp phím này là chọn tất cả những ô có chứa comment trong sheet hiện tại. Có thể các bạn sẽ thấy tổ hợp phím này khá là ... thừa, nhưng thật ra, nếu trong tình huống các bạn có một cột dữ liệu chứa rất nhiều ô có comment là những ô cần chú ý mà các bạn không làm cách nào để lọc những ô đó ra bằng tính năng lọc bình thường đc. Vậy lúc đó các bạn có thể dùng tổ hợp phím này để chọn một lúc tất cả những ô có chứa comment, sau đó tô màu nào đó. Sau đó bật chức năng lọc lên, lọc theo màu các bạn vừa chọn, thế là xong.\n\n58. Thủ thuật excel P3 – Chỉ chọn những ô không ẩn cùng Alt + ;\nĐối với những bạn hay ẩn cột, dòng thì tổ hợp phím này sẽ phát huy tác dụng của nó. Tổ hợp phím này sẽ khiến chúng ta chỉ chọn được những ô trong cột, dòng, mà không bị ẩn bởi các thao tác giúp ẩn còn lại những cột dòng bị ẩn rồi sẽ “ẨN” thật sự\n\n59. Thủ thuật excel P3 – Chèn, sửa comment với Shift + F2\nĐây sẽ là một tổ hợp phím CỰC KỲ HAY với những người hay phải thêm và sửa comment trong excel.\n\n60. Thủ thuật excel P3 – Sang trái, phải trong một ký tự hoặc một từ trong một ô excel\n- Sang trái phải một ký tự: phím mũi tên sang trái hoặc phải\n\n- Sang trái, phải MỘT TỪ: Ctrl + mũi tên sang trái hoặc phải\n\n>>> Đây là những  tổ hợp phím tác giả rất hay dùng trong quá trình nhập liệu excel\n\n61. Thủ thuật excel P3 – Chọn dữ liệu trong một ô excel\nCũng với cùng một tổ hợp phím với CHỌN DỮ LIỆU TRONG EXCEL, còn đây là  CHỌN DỮ LIỆU TRONG MỘT Ô  excel. Các bạn chú ý phân biệt\n\n- Chọn sang trái, phải 1 ký tự: Shift + phím mũi tên sang trái phải\n\n- Chọn sang trái, phải 1 từ: Ctrl + Shift + phím mũi tên sang trái phải\n\n- Chọn đến vị trí bắt đầu dữ liệu của ô: Shift + Home\n\n- Chọn đến vị trí kết thúc dữ liệu của ô: Shift + End\n\n62. Thủ thuật excel P3 – Xóa dữ liệu trong một ô excel\n- Xóa dữ liệu bên trái con trỏ: Backspace\n\n- Xóa dữ liệu đằng sau con trỏ: Delete\n\n- Xóa từ vị trí con trỏ cho tới tận cùng của ô : Ctrl + Delete (tổ hợp phím  này khá hữu dụng)\n\n63. Thủ thuật excel P3 – “Enter” dữ liệu\nAi cũng biết nhập dữ liệu vào một ô ở excel xong là phải nhấn “Enter” thì dữ liệu đó mới xuất hiện. Vậy câu hỏi đặt ra là sau khi Enter xong thì con trỏ chuột của bạn chạy đi đâu. Và đây là câu trả lời:\n\n- Xuống dưới: Enter\n\n- Lên trên: Shift + Enter\n\n- Sang trái: Shift + tab\n\n- Sang phải: Tab\n\n- Đứng yên tại chỗ: Ctrl + Enter\n\n---> Rất hay phải không nào?\n\n64. Thủ thuật excel P3 – Nhập dữ liệu cho một vùng dữ liệu\nĐể nhập một dữ liệu cho cùng một vùng dữ liệu, các bạn chỉ cần quét chọn vùng dữ liệu, viết ra dữ liệu bạn muốn, sau đó nhấn “Ctrl + enter”, và điều thần kỳ sẽ xảy ra J)\n\n65. Thủ thuật excel P3 – Sao chép công thức từ ô trên dưới\nSao chép công thức từ ô trên : Ctrl + ‘\n\nSao chép công thức từ ô dưới : Ctrl + Shift + “\n\n66. Thủ thuật excel P3 – Chèn siêu liên kết hyperlink\nDân SEO không thể không biết phím tắt để chèn link trong excel: Ctrl + K\n\n67. Thủ thuật excel P3 – Mở hộp thoại cài đặt font chữ\nCác bạn có thể mở hộp thoại cài đặt font chữ trong excel để cài đặt font chữ, cỡ chữ, kiểu chữ, ... với Ctrl + Shift + F\n\n68. Thủ thuật excel P3 – Gạch ngang giữa chữ\nGạch ngang giữa chữ cũng là một tính năng hay, có thể dùng để chỉ ra những dữ liệu này là sai hoặc cần sửa gì đó chẳng hạn. Các bạn dùng tổ hợp phím Ctrl + 5 để thực hiện tính năng này\n\n69. Thủ thuật excel P3 - Căn trái phải, giữa ô với tổ hợp phím Alt +\nCác bạn căn chữ theo các hướng của ô bằng cách giữ phím Alt và:\n\nCăn trái: Alt + H A L\n\nCăn phải: Alt + H A R\n\nCăn giữa: Alt + H A C\n\n70. Thủ thuật excel P3 – Tăng giảm cỡ chữ:\nĐể tăng giảm cỡ chữ của ô các bạn giữ phím Alt và:\n\nTăng cỡ chữ: Alt + H F G\n\nGiảm cỡ chữ: Alt + H F K\n\n71. Thủ thuật excel P3 – Tạo và bỏ đường viền bao quanh ô\n- Tạo đường viền bao quanh ô: Ctrl + Shift + & (viền ngoài)\n\n- Xóa đường viền bao quanh ô: Ctrl + Shift + -\n\nĐể tạo tất cả viền trong ngoài cho một vùng dữ liệu gồm nhiều ô các bạn có thể sử dụng tổ hợp phím Alt + H B A, bỏ đi thì là Alt + H B N (giữ lì Alt)\n\n72. Thủ thuật excel P3 – mở hộp thoại điền công thức excel\nNếu các bạn không nhớ hàm cụ thể nào đó có thể dùng Shift + F3 để mở tất cả các công thức trong excel lên và chiến!\n\n73. Thủ thuật excel P3 – Mở rộng thanh công thức\nThanh công thức cũng là một vị trí hay được quan sát trong excel, để mở rộng nó ra các bạn nhấn Ctrl + Shift + U nhé\n\n74. Thủ thuật excel P3 – Đặt tên cho một vùng dữ liệu\nCác bạn hay xài tới công thức có chứa một hoặc nhiều vùng dữ liệu lặp đi lặp lại sẽ nên dùng tới tính năng “Define name” – đặt tên cho vùng dữ liệu và phím tắt của nó là Ctrl + F3. Chọn vùng trước – Ctrl F3 – Enter – Viết tên – enter\n\nĐể dán tên vùng dữ liệu vào công thức các bạn nhấn F3 trong khi viết công thức.\n\n75.  Thủ thuật excel P3 – Tạo Sheet mới\nChắc nhiều người sẽ biết cách tạo một sheet đơn giản là chuột phải vào sheet hiện tại sau đó chọn insert new work sheet. Nhưng ko cần phải mất công thế trong khi đã có 1 tổ hợp phím đó là Shift + F11 rồi.\n\n76. Thủ thuật excel P3 – Nhân đôi đối tượng với Ctrl + D\nCác bạn có thể nhân đôi một hoặc một số đối tượng bất kỳ trong excel như biểu đồ, hình dạng, smart art, text box. Chỉ cần chọn sau đó nhấn Ctrl D là xong\n\n77. Thủ thuật excel P3 - Ẩn tất cả các đối tượng với Ctrl + 6\nCác bạn có thể ẩn tất cả các đối tượng trong excel như biểu đồ, hình dạng, ảnh, smart art,... với tổ hợp phím này\n\n78. Thủ thuật excel P3 – Hiển thị menu chuột phải trong excel\nCó 3 cách để hiển thị menu chuột phải, một là nhấn chuột phải, hai là dùng phím chức năng mở chuột phải có sẵn trên bàn phím, còn nếu bàn phím của bạn không có chức năng đó hoặc phím liệt thì đã có một tổ hợp phím nữa đó chính là Shift + F10.\n\n79. Thủ thuật excel P3 - Mở trình biên tập VBA với Alt + F11\nCác bạn hay sử dụng VBA trong excel chắc chả lạ gì tổ hợp phím này, nhưng ai chưa biết thì phải ghi nhớ nhé\n\n80. Thủ thuật excel P3 – Bật chức năng gõ tắt trong excel\nCó một tổ hợp phím tắt khá hay trong excel mà tác giả mò mãi mới ra được từ lâu rồi muốn chia sẻ cho mọi người, đó chính là tổ hợp phím “Bật chức năng gõ tắt trong excel” – Alt + T + A. Gõ tắt là một tính năng rất thú vị trong word hay excel, các bạn nên tận dụng triệt để nếu quý trọng thời gian nhé!\n\n \n\nPhần 4: Một số thủ thuật đơn giản mà hay\n \n\n81. Thủ thuật excel P4 – Nhấn một phát để chọn tất cả\nHầu như chúng ta ai cũng biết Ctrl là phím tắt để chọn tất cả dữ liệu trong một sheet excel. Nhưng các bạn cũng nên biết là chỉ với một nhát click chuột trái vào biểu tượng góc bên trái trên cùng của bảng tính là chúng ta có thể chọn cả bảng tính rồi:\n\nthu thuat excel\n\n \n\n82. Thủ thuật excel P4 – Mở cùng lúc nhiều files excel\nĐối với những ai thường xuyên phải làm việc với cùng lúc vài chục thậm chí vài trăm file excel thi việc click chuột mở từng file lên sẽ là một cơn ác mộng. Nhưng chúng ta đã có một giải pháp đó là quét chọn một lúc tất cả những file excel bạn muốn mở (Giả sử tất cả những file excel bạn muốn mở đều ở trong cùng một thư mục thì chỉ cần nhấn Ctrl + A) sau đó nhất một phím Enter là xong!\n\n83. Thủ thuật excel P4 - Ẩn dữ liệu của ô bằng custom format\nCác bạn có thể khiến dữ liệu trong ô ( biến mất) bằng cách chọn ô/vùng dữ liệu cần ẩn -> vào Home – Font - Open Format Cells sau đó vào thẻ Number -> Custom->Nhập 3 dấu chấm phẩy ;;; -> Click OK\n\nHoặc nhanh chóng hơn các bạn có thể nhấn Ctrl + 1 sau đó vào thẻ Custom ->Nhập 3 dấu chấm phẩy ;;; -> Click OK\n\nẩn\n\nTham khảo:\n\nTất cả các kiểu ẩn dữ liệu trong excel \n\nhttp://ketoanducminh.edu.vn/front/search/%E1%BA%A9n+d%E1%BB%AF+li%E1%BB%87u+excel/0​\n\n84. Thủ thuật excel P4 – VIẾT HOA, viết thường với các hàm excel\n- Viết hoa tất cả các chữ cái: Upper(Text)\n\nVí dụ: đức minh ở ô A1 => ô A2 gõ công thức : Upper(A1) => kết quả trả về là ĐỨC MINH\n\n- Viết Hoa Chữ Cái Đầu Mỗi Từ: Proper(Text)\n\nVí dụ: đức minh ở ô A1 => ô A2 gõ công thức : Proper(A1) => kết quả trả về là Đức Minh\n\n- Chuyển chữ hoa thành chữ thường: Lower(Text)\n\nVí dụ: ĐỨC MINH ở ô A1 => ô A2 gõ công thức : Proper(A1) => kết quả trả về là đức minh.\n\n85. Thủ thuật excel P4 – Chọn một số ngẫu nhiên trong khoảng bất kỳ\nĐôi khi chúng ta lười nhập liệu nên có thể chúng ta sẽ muốn excel tự trả về một số nào đó. Lúc đó các bạn sẽ phải dùng tới hàm Randbetween\n\nCú pháp: =Randbetween(Bottom,Top):\n\nÝ nghĩa của hàm này là sẽ chọn ra một số ngẫu nhiên giữa hai giá trị mà bạn đưa ra, ví dụ chọn ngẫu nhiên một số từ 1 đến 100000000. Sau đó các bạn kéo công thức xuống. Chú ý là kết quả trả về có thể sẽ bị trùng lặp, vì bản chất nó là ngẫu nhiên. Nếu các bạn không muốn trùng có thể dùng thêm tính năng Remove Duplicates\n\n86. Thủ thuật excel P4 – Nháy đúp để tự động fill một sê-ri\n\nChắc ai cũng biết chức năng tự động fill sê-ri trong excel. Ví dụ sê ri số thứ tự từ 1 đến 10 thì các bạn chỉ cần gõ 1, 2 sau đó bôi đen 1,2, sau đố nhấn giữ chuột trái và kéo chuột xuống. Nếu các bạn phải fill đến hàng chục nghìn số thứ tự thì cách đó sẽ là một ... thảm họa. Có một cách nhanh hơn nhiều đó là các bạn đừng đánh số thứ tự trước, mà hãy hoàn thành các cột dữ liệu khác trước, ít nhất là cột ngay bên phải cột số thứ tự, chú ý là dữ liệu phải liền mạch không có dòng trống ở giữa. Sau đó cuối cùng các bạn chỉ việc bôi đen hai số đầu tiên sau đó chỉ cần nhấp đúp chuột trái vào cái biểu tượng hình cái hộp đen đen ở góc bên phải dưới cùng của ô.\n\n87. Thủ thuật excel P4 – chuyển dữ liệu kiểu 19051991 thành ngày tháng năm\n\nĐể chuyển những dữ liệu kiểu như 19051991 thành ngày tháng năm kiểu 19/05/1991 thì các bạn có thể dùng chức năng “Text to columns” khá là hay trong excel.\n\nChọn ô cần chuyển ->  Nhấn tổ hợp phím sau: (Giữ lì Alt) :\n\nAlt A E N N D => sau đó chọn DMY (Day trước rồi đến month sau đến year) như hình dưới đây:\n\nchuyển đổi ngày tháng excel\n\nSau đó nhấn finish\n\n==> kết quả:\n\nchuyen doi ngay thang excel\n\n88. Thủ thuật excel P4 – Lọc dữ liệu trong excel\n\nNếu các bạn thường xuyên sử dụng chức năng lọc trong excel thì có những kiểu lọc này mà các bạn không thể không biết:\n\n- Lọc số:\n\nEqual: chính xác băng\n\nLess than: nhỏ hơn một số nào đó\n\nGreater than: lớn hơn một số nào đó\n\nBetween: giữa một khoảng\n\nAverage: trung bình\n\n- Lọc chữ:\n\nBegins with: bắt đầu với ký tự, chuỗi nào đó\n\nEnds with: kết thúc bởi ký tự, chuỗi nào đó\n\nContain: bao gồm\n\n- Lọc nhiều điều kiện: Custom filter: các bạn có thể nhập một lúc hai điều kiện ví dụ: greater than 10, less than 20 hoặc begins with “hà”, ends with “i”\n\n89. Thủ thuật excel P4 – Xóa dữ liệu trùng lặp\n\nĐôi khi các bạn sẽ có một cột giá trị kiểu như này:\n\n1\n\n2\n\n3\n\n3\n\n4\n\nA\n\nA\n\nB\n\nC\n\nCác bạn muốn cột này chỉ còn lại những giá trị không lặp lại (Unique) thì các bạn có thể bôi đen cột đó, sau đó nhấn tổ hợp phím Alt + A + M (mở tính năng Remove Duplicates trong excel) sau đó click vào OK là xong. Kết quả sẽ như thế này đây:\n\n1\n\n2\n\n3\n\n4\n\nA\n\nB\n\nC\n\n90. Thủ thuật excel P4 – Conditional Formating - “ảo thuật” cùng excel\nSẽ là một thiếu sót lớn nếu không nhắc tới chức năng conditional formating trong bài viết này. Chức năng định dạng có điều kiện trong excel là một trong những chức năng mà tác giả hay dùng nhất trong quá trình sử dụng excel từ trước đến nay. Đây là một tính năng thực sự rất hữu dụng, đặc biết là để thống kê, lọc dữ liệu. Sau dây là một số tính năng:\n\n- Tô màu ô, màu chữ, tạo chú ý theo đủ các thể loại điều kiện\n\n- Tạo những thanh dữ liệu, đường dữ liệu rất đẹp mắt\n\n- Biến dữ liệu thành các icon\n\n....\n\nVà còn rất nhiều tính năng khác. Do rất dài nên Viện đào tạo Kế toán và Tin học Đức Minh sẽ giới thiệu tới các bạn ở một bài viết khác. Đón chờ tại box kiến thức thủ thuật tin học văn phòng trên trang ketoanducminh.edu.vn nhé\n\n91. Thủ thuật excel P4 – Nối họ tên, tạo khoảng trống ở giữa\n\nNếu đặt câu hỏi có 2 ô dữ liệu: A1 là họ, A2 là tên, A3 là họ và tên. Thì ở ô A3 các bạn đặt công thức thế nào chắc không phải ai cũng có thể trả lời chính xác. Vd:\n\nA1: Đức, A2: Minh ===> ở ô A3 nếu các bạn nối dữ liệu như bình thường bằng cách đặt công thức =A1&A2 thì kết quả sẽ là “ĐứcMinh”, các chữ dính vào nhau. Vậy để cho đẹp thì các bạn phải thêm một dấu cách vào giữa bằng cách viết như sau: =A1&“ ”&A2 ==> Kết quả A3 sẽ là “Đức Minh”\n\nÝ nghĩa ở đây là trong excel dữ liệu chuỗi sẽ luôn nằm trong nháy kép, vậy ta đặt một chuỗi ở giữa công thức, nhưng trong chuỗi đó là một dấu cách. Excel vẫn hiểu đó là một ký tự, 1 chuỗi. Vậy là ta có kết quả nhưng mong muốn\n\n92. Thủ thuật excel P4 – Đặt mẩu khẩu bảo vệ file excel:\n\nNếu các bạn làm việc ở môi trường không an toàn và có những file excel tuyệt mật thì tốt nhất chí ít là đặt cho nó một cái mật khẩu bằng cách nhấn F12, sau đó vào Tools -> General options sẽ có hai mật khẩu:\n\nPassword to open: mật khẩu để mở file\n\n Password to Modify: mật khẩu để sửa dữ liệu\n\nCác bạn có thể nhập một hoặc hai loại mật khẩu trên, sau đó nhấn ok và nhập lại lần nữa để xác nhận là xong.\n\n93. Thủ thuật excel P4 – Thêm một lúc nhiều dòng\n\nSẽ rất là vô vị nếu các bạn muốn thêm 10 dòng thì phải nhất 10 lần chuột phải vào dòng, sau đó nhất insert. Để tiết kiệm thời gian các bạn chỉ cần quét số dòng các bạn muốn chèn. Ví dụ muốn chèn 10 dòng thì chỉ cần quét 10 dòng sau đó nhấn duy nhất một lần chuột phải -> insert rows thôi\n\n94. Thủ thuật excel P4 – Chèn Sparkline trong biểu đồ\n\nĐôi khi các bạn làm biểu đồ sẽ cần tới những đường sparkline kiểu như hình dưới đây:\n\n\n\nĐể thực hiện các bạn quét chọn vùng dữ liệu sau đó vào Insert – Line\n\nChú ý thủ thuật này chỉ áp dụng cho bản 2010 trở lên\n\n95. Thủ thuật excel P4 – chuyển dữ liệu hàng nghìn, triệu thành k, m\nChắc các bạn đã quá quen thuộc với số tiền 100k, 200k , 1k, 2k, 1m, 10 m chứ. Trong excel để làm được như thế tôi xin có ví dụ:\n\nCột a1 có số 9000 để chuyển 9000 thành 9k các bạn chọn ô A1, nhấn Ctrl + 1 => trong custom nhập ###,“k” sau đó ok. Kết quả sẽ trả về 9k, các bạn làm tương tự như thế với m\n\n96. Thủ thuật excel P4 – Table formart trong excel\n\nTable format cũng là một tính năng khá hay trong excel. Nó sẽ cho phép chúng ta thao tác tốt hơn với vùng chúng ta định dạng là “Table format”. Ví dụ như màu sắc thay đổi, công thức sẽ tự động fill xuống, tự động bật auto filter. Để thực hiện các bạn chọn vùng dữ liệu sau đó nhấn Alt + H + T – chọn mẫu bất kỳ -  ok (lì Alt)\n\n97. Thủ thuật excel P4 – Đóng băng dòng, cột đầu tiên của sheet\n\nVới những bảng dữ liệu rất dài thì khi kéo xuống ta sẽ mất tiêu đề của bảng. Để khắc phục tình trạng đó thì excel đã cung cấp một function đó chính là Freeze Panes:\n\n- Đóng băng cột đầu tiên: Alt + W + F + C (lì ALT)\n\n- Đóng băng dòng đầu tiên: Alt + W + F + R (lì ALT)\n\n98. Thủ thuật excel P4 – Đổi font chữ mặc định sau excel\n\nCác bạn có thể đổi font chữ mặc định sau excel bằng cách nhấn Alt + F + T sau đó trong thẻ general các bạn có thể chọn lại font chữ, cỡ chữ và thậm chí là cả số sheet mặc định xuất hiện khi mở mới file excel\n\n99. Thủ thuật excel P4 – English and Excel  - E and E = ExcEllent\n\nTiếng Anh và tin học là hai thứ không thể tách rời nhau, và excel cũng vậy. Để học tốt được excel thì tiếng Anh tốt sẽ là một công cụ đắc lực cho các bạn. Đặc biệt là với những bạn thích mày mò, tự học. Các bạn có thể tham khảo sê ri về tiếng Anh tin học tại link dưới đây nhé:\n\n http://ketoanducminh.edu.vn/front/search/ti%E1%BA%BFng+anh+tin+h%E1%BB%8Dc/0\n\n100. Thủ thuật excel P4 – dùng excel như một thứ không thể thiếu hàng ngày\nThủ thuật cuối cùng trong sê ri 100 thủ thuật excel mà Viện đào tạo Kế toán và Tin học Đức Minh muốn chia sẻ cùng các bạn đó chính là dùng excel hàng ngày, liên tục, không ngắt quãng, ngày dùng ngày không. Các bạn có thể dùng excel để làm sổ quỹ ghi chép thu chi, tình hình tài chính của bạn và gia đình. Hoặc có thể dùng excel để lập những kế hoạch kinh doanh, ... ăn chơi theo “style” của riêng bạn. Hãy làm việc và sáng tạo cùng excel hàng ngày để ngày một “pro” hơn các bạn nhé!', '100-thu-thuat-excel-cuc-ky-huu-ich-bat-buoc-phai-nho', 1, '2019-01-27 17:19:18');
INSERT INTO `posts` (`PostID`, `AccountID`, `ModuleID`, `PostTitle`, `PostContent`, `PostSlug`, `Views`, `PostDate`) VALUES
(4, 3, 5, 'Những mẹo Excel hữu ích giúp bạn hoàn thành công việc nhanh hơn và hiệu quả hơn', '<h3>1. Loại bỏ các ô trống</h3>\r\n<p>Nếu bạn đang làm việc với một tài liệu Excel với hàng tấn dữ liệu Excel, thì đây là mẹo rất đáng để thử. Chọn một cột hoặc dòng với ô trống và nhấn <b>Ctrl + G</b>. </p>\r\n<div align=\"center\"><img src=\"https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_1.jpg\" alt=\"Những mẹo Excel hữu ích giúp bạn hoàn thành công việc nhanh hơn và hiệu quả hơn\"></div>\r\n<p style=\"text-align:center;\"><i>Trong cửa sổ vừa xuất hiên, bạn click vào nút<b> Special</b> và chọn <b>Blanks</b>. Sau đó, nhấn phím tắt <b>Ctrl + -</b> và <b>Shift cells up &gt; Ok.</b> </i></p>\r\n<div align=\"center\"><img src=\"https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_2.jpg\" alt=\"\"></div>\r\n<h3>2. Sửa đổi kích thước của hàng và cột</h3>\r\n<p>Kích thước của hàng và cột trong Excel có lẽ không luôn luôn theo đúng chuẩn bạn cần. Nếu muốn điều chỉnh kích thước thì bạn chọn hàng hoặc cột và chọn tab <b>Home</b>. </p>\r\n<div align=\"center\"><img src=\"https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_3.jpg\" alt=\"\"></div>\r\n<p>Sau đó, nhấp chuột vào tùy chọn<b> Format &gt; Adjust Cell Size…</b> và click vào <b>Row height</b> để làm cho ô cao hơn. Để làm ô to hơn, bạn click vào <b>Column width</b> và nhập số mà bạn cần.</p>\r\n<h3>3. Thêm hoặc xóa cột, dòng hoặc ô </h3>\r\n<div align=\"center\"><img src=\"https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_4.jpg\" alt=\"\"></div>\r\n<p style=\"text-align:center;\"><i>Với lệnh<b> Insert</b> và <b>Remove</b> trên thanh ribbon, bạn có thể thêm hoặc xóa số lượng cột, dòng và ô theo ý muốn.</i></p>\r\n<h3>4. Sử dụng định dạng có điều kiện </h3>\r\n<div align=\"center\"><img src=\"https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_5.jpg\" alt=\"\"></div>\r\n<p>Bằng cách sử dụng định dạng có điều kiện (conditional formatting), bạn có thể làm nổi bật hoặc thay đổi màu sắc của ô phụ thuộc vào giá trị của chúng. Bạn chọn cột mà bạn chuẩn bị định dạng và click vào tùy chọn <b>Conditional Formatting &gt; Highlight Cell Rules</b> từ menu thả xuống và chọn <b>Deplicate Values</b>.</p>\r\n<h3>5. Tạo đường chéo trong ô </h3>\r\n<div align=\"center\"><img src=\"https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_6.jpg\" alt=\"\"></div>\r\n<p>Bạn có thể cần tạo một đường chéo ở một ô nào đó và thao tác này được thực hiện rất dễ dàng. Bạn chỉ cần click vào <b>Home &gt; Font &gt; More Borders</b>. Bạn sẽ nhìn thấy nhiều lựa chọn ở đây, nhưng cái mà sẽ cho bạn một đường chéo theo ý muốn nằm ở góc bên trái phía dưới cửa sổ. Click vào đó để lưu lại lựa chọn của bạn và trong bảng Excel đã xuất hiện một đường chéo.</p>\r\n<h3>6. Ẩn công thức </h3>\r\n<div align=\"center\"><img src=\"https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_7.jpg\" alt=\"\"></div>\r\n<p>Nếu bạn click vào phần phía trên của khu vực xem trước bên cạnh nút <b>Function</b>, bạn sẽ nhìn thấy công thức tính. Đây là một tính năng tiện ích nhưng khá rắc rối nếu bạn đang xử lý một phép tính phức tạp. Để dọn dẹp một chút, bạn có thể ẩn công thức tính bằng cách click vào ô mà có phép tính đó.</p>\r\n<p>Sau đó, bạn click chuột phải và chọn <b>Format</b>. Đi tới <b>Protection</b> và nhấp chuột vào tùy chọn <b>Hidden box</b>. Bạn click vào <b>OK</b> để lưu lại lựa chọn của bạn. Lưu ý rằng điều này không đủ để bảo vệ tài liệu của bạn khỏi những người khác.</p>\r\n<p>Để thêm mật khẩu bảo vệ tài liệu Excel của mình, bạn đi đến tab <b>Review</b> và chọn <b>Protect Sheet</b>. Tạo mật khẩu và xem công thức tính của mình biến mất như thế nào.</p>\r\n<h3>7. Chuyển đổi dòng thành cột và ngược lại</h3>\r\n<p>Đây là một mẹo Excel hữu ích nếu các dòng của bạn quá dài và bạn muốn tài liệu của mình có tổ chức hơn. Bạn chọn và sao chép các ô mà bạn muốn tổ chức. Sau đó, click vào ô mà bạn muốn thêm dữ liệu và nhấp chuột phải chọn <b>Paste Special</b>. </p>\r\n<div align=\"center\"><img src=\"https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_8.jpg\" alt=\"\"></div>\r\n<p style=\"text-align:center;\"><i>Khi một cửa sổ mới xuất hiện, bạn chọn <b>Transpose &gt; OK.</b> </i></p>\r\n<div align=\"center\" style=\"text-align:center;\"><i><img src=\"https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_9.jpg\" alt=\"\"></i></div>\r\n<p style=\"text-align:center;\"><i>OK\' width=\'388\' height=\'402\'&gt;</i></p>\r\n<h3>8. Lưu biểu đồ thành mẫu </h3>\r\n<div align=\"center\"><img src=\"https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_10.jpg\" alt=\"\"></div>\r\n<p>Nếu bạn tự hào về biểu đồ mình vừa tạo thì hãy lưu nó lại dưới dạng một mẫu có sẵn. Bạn có thể làm điều đó bằng cách nhấn chuột phải vào biểu đồ và chọn <b>Save as Template</b>. Tùy chọn này sẽ giúp bạn tiết kiệm được nhiều thời gian cho tài liệu tiếp theo.</p>\r\n<h3>9. Các phím tắt Excel hữu ích</h3>\r\n<ul><li><b>Ctrl + -</b>: Làm cho các tùy chọn đã xóa xuất hiện.</li>\r\n<li><b>Ctrl + A</b>: Chọn tất cả dữ liệu.</li>\r\n<li><b>Ctrl + V</b>: Dán những gì bạn vừa sao chép.</li>\r\n<li><b>Ctrl + Spacebar</b>: Chọn cột của ô bạn đang sử dụng.</li>\r\n<li><b>Ctrl + End</b>: Đi đến ô cuối cùng của dữ liệu.</li>\r\n<li><b>Ctrl + Home</b>: Chọn ô đầu tiên với dữ liệu của bạn.</li>\r\n<li><b>Ctrl + Down Arrow</b>: Đi đến ô cuối cùng của cột bạn đang sử dụng.</li>\r\n<li><b>Ctrl + Up Arrow</b>: Đi đến ô đầu tiên của cột bạn đang sử dụng.</li>\r\n</ul><h3>10. Sao chép nhanh chóng một công thức</h3>\r\n<p>Để sao chép một công thức nhanh chóng, bạn đặt con trỏ chuột vào góc dưới bên phải vị trí có ô bạn muốn copy. Con trỏ chuột sẽ chuyển thành biểu tượng<b> dấu cộng</b>, sau đó bạn chỉ cần click đúp vào đó để sao chép.</p>\r\n<h3>11. Loại bỏ khoảng trắng thừa thãi trong ô</h3>\r\n<p>Để xóa các khoảng trắng, bạn chọn ô nơi mà công thức của bạn sẽ xuất hiện. Gõ <b>=trim(tên của ô)</b> và nhấn <b>Enter</b>, chẳng hạn như<b> =trim(F6)</b>. Lệnh này sẽ không loại bỏ khoảng trắng giữa các ký tự.</p>\r\n<h3>12. Mẹo Text to Column </h3>\r\n<div align=\"center\"><img src=\"https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_11.jpg\" alt=\"\"></div>\r\n<p>Mẹo này sẽ giúp bạn dễ dàng tách dữ liệu của một ô vào các ô khác nhau. Để sử dụng thủ thuật này, bạn hãy chuyển đến tab <b>Data</b> và chọn cột mà bạn muốn tách. Nhấp vào<b> Text to Column</b> và sau đó nhấp vào <b>Next</b>. Chọn các ký tự bạn muốn chia vào các cột bằng cách điền vào ô bên cạnh <b>Other.</b></p>', 'nhung-meo-excel-huu-ich-giup-ban-hoan-thanh-cong-viec-nhanh-hon-va-hieu-qua-hon', 4, '2019-04-11 15:37:10'),
(5, 3, 5, 'Excel Test Post 1', 'One of blog_entry\'s fields is of type \'longtext\' and is such a long piece of text that when the result is displayed in my terminal the display of rows takes more than one line. This causes an ugly mess of a display, where columns aren\'t easily visible. What technique can I use in my SELECT query that would limit the number of characters displayed for each field so that the printed row results don\'t overflow to new lines?\r\n<br>\r\n<img src=\"https://trumpexcel.com/wp-content/uploads/2018/06/Combine-Data-from-Multiple-sheets-Data-in-Excel-Tables.jpg\">\r\n<br>\r\nOne of blog_entry\'s fields is of type \'longtext\' and is such a long piece of text that when the result is displayed in my terminal the display of rows takes more than one line. This causes an ugly mess of a display, where columns aren\'t easily visible. What technique can I use in my SELECT query that would limit the number of characters displayed for each field so that the printed row results don\'t overflow to new lines?\r\n\r\n', 'excel-test-post-1', 0, '2019-04-12 14:40:58'),
(6, 3, 5, 'Excel Test Post 2', 'One of blog_entry\'s fields is of type \'longtext\' and is such a long piece of text that when the result is displayed in my terminal the display of rows takes more than one line. This causes an ugly mess of a display, where columns aren\'t easily visible. What technique can I use in my SELECT query that would limit the number of characters displayed for each field so that the printed row results don\'t overflow to new lines?\r\n<br>\r\nOne of blog_entry\'s fields is of type \'longtext\' and is such a long piece of text that when the result is displayed in my terminal the display of rows takes more than one line. This causes an ugly mess of a display, where columns aren\'t easily visible. What technique can I use in my SELECT query that would limit the number of characters displayed for each field so that the printed row results don\'t overflow to new lines?', 'excel-test-post-2', 1, '2019-04-12 14:41:23'),
(7, 3, 4, 'Tạo dòng dấu chấm (……) nhanh trong Microsoft Word', '<p align=\"justify\">Khi phải làm việc với các mẫu giấy mời họp, các văn bản biểu mẫu... thì cần phải đặt những dấu chấm nhỏ trong văn bản. Nhưng việc ngồi và gõ thủ công từng dấu chấm rất mất thời gian, hơn nữa lại không đều và đẹp. Trong bài viết dưới đây, Quản Trị Mạng sẽ hướng dẫn các bạn cách tạo dấu 3 chấm trong <strong>Microsoft Word</strong> 2016, Word 2013, Word 2010 và Word cũ hơn như Word 2007, 2003 nhanh chóng bằng <a title=\"Tổng hợp phím tắt Microsoft Word thông dụng\" href=\"https://quantrimang.com/thao-tac-nhanh-trong-van-ban-voi-cac-phim-tat-thong-dung-18824\">cách dùng phím tắt</a>.</p> <ul> <li><a class=\"title\" title=\"Hướng dẫn cách tạo khung trong Word 2007, 2010, 2013, 2016\" href=\"https://quantrimang.com/huong-dan-cach-tao-khung-trong-word-2007-2010-2013-120113\">Hướng dẫn cách tạo khung trong Word 2007, 2010, 2013, 2016</a></li> <li><a class=\"title\" title=\"Cách tạo bookmark trong Word 2016\" href=\"https://quantrimang.com/cach-tao-bookmark-trong-word-2016-142875\">Cách tạo bookmark trong Word 2016</a></li> <li><a class=\"title\" title=\"Tạo mục lục tự động trong Word 2003\" href=\"https://quantrimang.com/tao-muc-luc-tu-dong-31698\">Tạo mục lục tự động trong Word 2003</a></li> </ul> <h2 align=\"justify\">1. Tạo dấu chấm (....) nhanh chóng bằng phím tắt</h2> <p align=\"justify\">Mở <strong>Microsoft Word</strong> lên, đối với các phiên bản Word cũ (trước 2010) thì bảng điều khiển phím Tabs sẽ xuất hiện khi các bạn vào phần <strong>Format &gt; Tabs</strong>. Còn đối với Word 2010 trở lên thì chúng ta chỉ cần bấm chuột phải vào văn bản Word và chọn <strong>Paragraph &gt; Tabs</strong>:</p> <p align=\"justify\"><strong>Tạo dòng chấm trong Word 2007, 2003 phiên bản cũ:</strong></p> <p><img style=\"line-height: 1.5em; display: block; margin-left: auto; margin-right: auto; vertical-align: middle;\" title=\"Tabs trong Word phiên bản cũ\" src=\"https://st.quantrimang.com/photos/Image/082006/24/tabs1.gif\" alt=\"Format\\Tabs… \" width=\"168\" height=\"265\"></p> <p><strong>Tạo dòng chấm trong Word 2010, Word 2013, Word 2016:</strong></p> <p>Có 2 cách để truy cập vào Tabs trên Word 2010, 2013, 2016:</p> <ul> <li>Vào tab Home &gt; tìm ô Paragraph, nhấp vào mũi tên ở góc dưới bên phải.</li> <li>Chuột phải lên trang Word &gt; Paragraph...</li> </ul> <p style=\"text-align: center;\"><img style=\"vertical-align: middle;\" title=\"Tabs trong Word 2010\" src=\"https://st.quantrimang.com/photos/image/2015/10/05/tabs-trong-word-click.png\" alt=\"Tabs trong Word 2010\" width=\"650\" height=\"500\"></p> <ul> <li>Nhấp vào Tabs ở góc dưới bên trái để mở bảng điều khiển Tabs:</li> </ul> <p style=\"text-align: center;\"><img style=\"vertical-align: middle;\" title=\"Mở Tabs\" src=\"https://st.quantrimang.com/photos/image/2015/10/05/tabs-trong-word-here.png\" alt=\"Mở Tabs\" width=\"393\" height=\"538\"></p> <p style=\"text-align: left;\">Trong bảng điều khiển Tabs, chúng ta sẽ thấy các tùy chọn như sau:</p> <ul> <li><strong>Tab stop position</strong>: độ dài trong văn bản sẽ xuất hiện dấu chấm khi ta bấm Tab (tính từ lề trái văn bản, như ví dụ hình dưới là 1 cm)</li> <li><strong>Default tab stops</strong>: khoảng cách từ điểm đầu đến cuối khi ta bấm phím Tab (như ví dụ dưới là 6 cm).</li> </ul> <p style=\"text-align: center;\"><img style=\"vertical-align: middle;\" title=\"Tùy chọn trong Tabs\" src=\"https://st.quantrimang.com/photos/image/2015/10/05/tabs-trong-word-how.png\" alt=\"Tùy chọn trong Tabs\" width=\"295\" height=\"343\"></p> <ul> <li><strong>Alignment</strong>: kiểu căn lề, có thể chọn Left - trái, Center - giữa, Right - phải...</li> <li><strong>Leader</strong>: kiểu định dạng khi bấm Tab, 1, None - không gì cả, 2 là dấu chấm, 3 là dấu gạch ngang, 4 là dấu gạch dưới liền.</li> </ul> <p>Chọn các giá trị theo ý muốn rồi bấm nút Set để thay đổi. Như ví dụ trên, tôi sẽ cụ thể bằng hình ảnh bên dưới cho các bạn dễ hình dung:</p> <p style=\"text-align: center;\"><img style=\"vertical-align: middle;\" title=\"Bấm Tab trong văn bản\" src=\"https://st.quantrimang.com/photos/image/2015/10/05/tabs-trong-word-cu-the.png\" alt=\"Sử dụng Tabs\" width=\"650\" height=\"500\"></p> <div class=\'adbox in-article\'><ins class=\"adsbygoogle\" style=\"display:block; text-align:center;\" data-ad-format=\"fluid\" data-ad-layout=\"in-article\" data-ad-client=\"ca-pub-9275417305531302\" data-ad-slot=\"2737970258\"></ins><script> (adsbygoogle = window.adsbygoogle || []).push({});</script></div><h2 align=\"justify\">2. Bỏ thiết lập khi bấm phím Tab:</h2> <p align=\"justify\">Nếu không muốn dùng các thiết lập khi bấm tab, thì mở bảng điều khiển của Tabs và bấm nút <strong>Clear</strong> hoặc <strong>Clear All</strong>. Sau đó nhấn OK.</p> <p style=\"text-align: center;\" align=\"justify\"><img style=\"vertical-align: middle;\" src=\"https://st.quantrimang.com/photos/image/2015/10/05/tabs-trong-word-clear.png\" alt=\"\" width=\"295\" height=\"343\"></p> <p style=\"text-align: left;\" align=\"justify\">Như vậy là Quản Trị Mạng đã giới thiệu và hướng dẫn các bạn cách tạo, thiết lập và sử dụng phím Tab để chèn dấu chấm trong văn bản, Microsoft Word 2010. Chúc các bạn thành công!</p>', 'tao-dong-dau-cham-nhanh-trong-microsoft-word', 9, '2019-04-12 15:29:08'),
(8, 3, 7, 'Hướng dẫn sử dụng chức năng làm bài thi trên TNTH', 'Đây là hướng dẫn làm bài trên trang', 'huong-dan-su-dung-chuc-nang-lam-bai-thi-tren-tnth', 41, '2019-04-13 00:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `questiondetails`
--

CREATE TABLE `questiondetails` (
  `QuestionID` int(11) NOT NULL,
  `ExamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questiondetails`
--

INSERT INTO `questiondetails` (`QuestionID`, `ExamID`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(36, 1),
(36, 2),
(37, 1),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(41, 2),
(42, 2),
(43, 2),
(45, 2),
(47, 2),
(48, 2),
(49, 2),
(50, 2),
(51, 2),
(52, 2),
(53, 2),
(54, 2),
(55, 2),
(56, 2),
(57, 2),
(58, 2),
(59, 2),
(62, 2),
(63, 2),
(64, 2),
(65, 2),
(67, 2),
(68, 2),
(69, 2),
(70, 2);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `QuestionID` int(11) NOT NULL,
  `QuestionContent` varchar(500) NOT NULL,
  `ModuleID` int(11) NOT NULL,
  `QuestionType` int(11) NOT NULL COMMENT '1-Câu hỏi có một câu trả lời, 2-Câu hỏi có nhiều câu trả lời',
  `DateCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`QuestionID`, `QuestionContent`, `ModuleID`, `QuestionType`, `DateCreated`) VALUES
(1, 'Thiết bị nào sau đây dùng để kết nối mạng?', 3, 1, '2019-01-27 15:13:29'),
(2, 'Hệ thống nhớ của máy tính bao gồm:', 1, 1, '2019-01-27 15:14:37'),
(3, 'Trong mạng máy tính, thuật ngữ Share có ý nghĩa gì?', 2, 1, '2019-01-27 15:14:59'),
(4, 'Bộ nhớ RAM và ROM là bộ nhớ gì?', 2, 1, '2019-01-27 15:15:40'),
(5, 'Các thiết bị nào thông dụng nhất hiện nay dùng để cung cấp dữ liệu cho máy xử lý?', 2, 1, '2019-01-27 15:15:40'),
(6, 'Khái niệm hệ điều hành là gì ?', 2, 1, '2019-01-27 15:16:14'),
(7, 'Cho biết cách xóa một tập tin hay thư mục mà không di chuyển vào Recycle Bin:?', 2, 1, '2019-01-27 15:16:14'),
(8, 'Danh sách các mục chọn trong thực đơn gọi là :', 2, 1, '2019-01-27 15:16:36'),
(9, 'Công dụng của phím Print Screen là gì?', 2, 1, '2019-01-27 15:16:36'),
(10, 'Nếu bạn muốn làm cho cửa sổ nhỏ hơn (không kín màn hình), bạn nên sử dụng nút nào?', 2, 1, '2019-01-27 15:17:02'),
(11, 'Trong soạn thảo Word, công dụng của tổ hợp phím Ctrl – S là:', 4, 1, '2019-01-27 15:17:25'),
(12, 'Trong soạn thảo Word, để chèn các kí tự đặc biệt vào văn bản, ta thực hiện:', 4, 1, '2019-01-27 15:17:25'),
(13, 'Trong soạn thảo Word, để kết thúc 1 đoạn (Paragraph) và muốn sang 1 đoạn mới :', 4, 1, '2019-01-27 15:17:45'),
(14, 'Trong soạn thảo Word, tổ hợp phím nào cho phép đưa con trỏ về cuối văn bản :', 4, 1, '2019-01-27 15:17:45'),
(15, 'Trong soạn thảo Word, sử dụng phím nóng nào để chọn tất cả văn bản:', 4, 1, '2019-01-27 15:18:07'),
(16, 'Trong soạn thảo Word, để chọn một đoạn văn bản ta thực hiện:', 4, 1, '2019-01-27 15:18:07'),
(17, 'Trong soạn thảo Word, muốn đánh dấu lựa chọn một từ, ta thực hiện :', 4, 1, '2019-01-27 15:18:30'),
(18, 'Trong soạn thảo Word, muốn tách một ô trong Table thành nhiều ô, ta thực hiện:', 4, 1, '2019-01-27 15:18:30'),
(19, 'Trong soạn thảo Word, thao tác nào sau đây sẽ kích hoạt lệnh Paste (Chọn nhiều đáp án)', 4, 2, '2019-01-27 15:20:38'),
(20, 'Phần mềm nào có thể soạn thảo văn bản với nội dung và định dạng như sau:<br>\r\n<p>\r\n” Công cha như núi Thái Sơn<br>\r\nNghĩa mẹ như nước trong nguồn chảy ra.<br>\r\nMột lòng thờ mẹ kính cha,<br>\r\nCho tròn chữ hiếu mới là đạo con.”</p>', 4, 1, '2019-01-27 15:20:38'),
(21, 'Trong bảng tính Excel, giá trị trả về của công thức =LEN(“TRUNG TAM TIN HOC”) là:', 5, 1, '2019-01-27 15:21:01'),
(22, 'Trong bảng tính Excel, cho các giá trị như sau: ô A4 = 4, ô A2 = 5, ô A3 = 6, ô A7 = 7 tại vị trí ô B2 lập công thức B2 = Sum(A4,A2,Count(A3,A4)) cho biết kết quả ô B2 sau khi Enter:', 5, 1, '2019-01-27 15:21:01'),
(23, 'Trong bảng tính Excel, ô A1 chứa nội dung “TTTH ĐHKHTN”. Khi thực hiện công thức = LEN(A1)\r\nthì giá trị trả về kết quả:', 5, 1, '2019-01-27 15:21:21'),
(24, 'Trong bảng tính Excel, ô A1 chứa giá trị 7.5. Ta lập công thức tại ô B1 có nội dung như sau\r\n=IF(A1>=5, “Trung Bình”, IF(A1>=7, “Khá”, IF(A1>=8, “Giỏi”, “Xuất sắc”))) khi đó kết quả nhận được là:', 5, 1, '2019-01-27 15:21:21'),
(25, 'Trong bảng tính Excel, hàm nào dùng để tìm kiếm:', 5, 1, '2019-01-27 15:21:41'),
(26, 'Trong bảng tính Excel, để lưu tập tin đang mở dưới một tên khác, ta chọn:', 5, 1, '2019-01-27 15:21:41'),
(27, 'Trong bảng tính Excel, hàm Today() trả về:', 5, 1, '2019-01-27 15:22:08'),
(28, 'Trong bảng tính Excel, các dạng địa chỉ sau đây, địa chỉ nào là địa chỉ tuyệt đối:', 5, 1, '2019-01-27 15:22:08'),
(29, 'Trong bảng tính Excel, Ô C2 chứa hạng của học sinh. Công thức nào tính học bổng theo điều kiện: Nếu xếp hạng từ hạng một đến hạng ba thì được học bổng là 200000, còn lại thì để trống', 5, 1, '2019-01-27 15:22:28'),
(30, 'Trong bảng tính Excel, tại ô A2 có giá trị số 25; Tại ô B2 gõ vào công thức =SQRT(A2) thì nhận được kết quả:', 5, 1, '2019-01-27 15:22:28'),
(31, 'Trong Powerpoint để tạo mới 1 Slide ta sử dụng?', 6, 1, '2019-01-27 15:22:48'),
(32, 'Trong Powerpoint muốn đánh số trang cho từng Slide ta dùng lệnh nào sau đây:', 6, 1, '2019-01-27 15:22:48'),
(33, 'Khi thiết kế các Slide, sử dụng Home -> Slides -> New Slide có ý nghĩa gì ?', 6, 1, '2019-01-27 15:23:12'),
(34, 'Để trình chiếu một Slide hiện hành, bạn sử dụng lựa chọn nào? (Chọn nhiều lựa chọn)', 6, 2, '2019-01-27 15:23:12'),
(35, 'Để tạo hiệu ứng cho 1 Slide, bạn sử dụng lựa chọn nào?', 6, 1, '2019-01-27 15:23:29'),
(36, 'Khi thiết kế Slide với PowerPoint, muốn thay đổi mẫu nền thiết kế của Slide, ta thực hiện:', 6, 1, '2019-01-27 15:23:29'),
(37, 'Chức năng công cụ nào sau đây trong nhóm dùng để xem trình chiếu slide đang hiển thị thiết kế (thanh công cụ zoom góc dưới bên phải của giao diện thiết kế):', 6, 1, '2019-01-27 15:23:43'),
(38, 'Chức năng Animations/ Timing/ Delay dùng để:', 6, 1, '2019-01-27 15:23:43'),
(39, 'Để vẽ đồ thị trong Slide ta chọn:', 6, 1, '2019-01-27 15:24:01'),
(40, 'Để hủy bỏ thao tác vừa thực hiện ta nhấn tổ hợp phím:', 6, 1, '2019-01-27 15:24:01'),
(41, 'Khi một dòng chủ đề trong thư ta nhận được bắt đầu bằng chữ RE:; thì thông thường thư là:', 3, 1, '2019-01-27 15:25:01'),
(42, 'Website Yahoo.com hoặc gmail.com cho phép người sử dụng thực hiện', 3, 1, '2019-01-27 15:25:01'),
(43, 'Chức năng Bookmark của trình duyệt web dùng để:', 3, 1, '2019-01-27 15:25:23'),
(44, 'Nếu không kết nối được mạng, bạn vẫn có thể thực hiện được hoạt động nào sau đây:', 3, 1, '2019-01-27 15:25:23'),
(45, 'Khi muốn tìm kiếm thông tin trên mạng Internet, chúng ta cần', 3, 1, '2019-01-27 15:25:57'),
(46, 'Bộ nhớ truy nhập trực tiếp RAM được viết tắt từ, bạn sử dụng lựa chọn nào?', 1, 1, '2019-01-27 15:25:57'),
(47, 'Khả năng xử lý của máy tính phụ thuộc vào … ban sử dụng lựa chọn nào?', 1, 1, '2019-01-27 15:26:12'),
(48, 'Máy tính là gi?', 1, 1, '2019-01-27 15:26:12'),
(49, 'Trình tự xử lý thông tin của máy tính điện tử', 1, 1, '2019-01-27 15:26:27'),
(50, 'Thiết bị xuất của máy tính gồm?', 1, 1, '2019-01-27 15:26:27'),
(51, 'Trong ứng dụng windows Explorer, để chọn nhiều tập tin hay thư mục không liên tục ta thực hiện thao tác kết hợp phím … với click chuột.', 2, 1, '2019-01-27 15:26:45'),
(52, 'Phím tắt để sao chép một đối tượng vào ClipBoard là:', 2, 1, '2019-01-27 15:26:45'),
(53, 'Hộp điều khiển việc phóng to, thu nhỏ, đóng cửa sổ gọi là:', 2, 1, '2019-01-27 15:27:03'),
(54, 'Để đảm bảo an toàn dữ liệu ta chọn cách nào?', 2, 1, '2019-01-27 15:27:03'),
(55, 'Trong hệ điều hành windows chức năng Disk Defragment gọi là?', 2, 1, '2019-01-27 15:27:31'),
(56, 'Trong soạn thảo word, công dụng của tổ hợp phím Ctrl + O dùng để', 4, 1, '2019-01-27 15:27:31'),
(57, 'Khi làm việc với văn bản word, để bật chế độ nhập ký tự Subscript khi tạo ký tự hóa học H2O. Ta sử dụng chức năng nào: (Có thể chọn nhiều câu đúng).', 4, 2, '2019-01-27 15:28:01'),
(58, 'Trong word, biểu tượng cây chổi có chức năng gì?', 4, 1, '2019-01-27 15:28:01'),
(59, 'Người đọc biết tập tin đang mở là phiên bản cuối cùng và chỉ cho phép đọc, bạn chọn?', 2, 1, '2019-01-27 15:28:39'),
(60, 'Thuộc tính phần mềm microsoft word 2010 có phần mở rộng là gì? ( Cho phép chọn nhiều)', 4, 2, '2019-01-27 15:28:39'),
(61, 'Câu nào sau đây sai khi nhập dữ liệu vào bảng tính Excel thì:', 5, 1, '2019-01-27 15:29:00'),
(62, 'Biểu thức sau = AND(5>4,6<9,2<1,10>7,OR(2<1,3>2))', 5, 1, '2019-01-27 15:29:00'),
(63, 'Địa chỉ B$3 là địa chỉ:', 5, 1, '2019-01-27 15:29:19'),
(64, 'Trong powerpoint in ấn ta sử dụng chức năng', 6, 1, '2019-01-27 15:29:19'),
(65, 'Để tạo một slide chủ chứa các định dạng chung của toàn bộ các slide trong bài trình diễn. Để thực hiện điều này người dùng phải chọn:', 6, 1, '2019-01-27 15:29:39'),
(66, 'Trong ứng dụng PowerPoint chức năng hyperlink dùng để tạo liên kết', 6, 1, '2019-01-27 15:29:39'),
(67, 'Trong PowerPoint 2010 muốn chèn một đoạn nhạc vào Slide, ta dùng lệnh nào sau đây?', 6, 1, '2019-01-27 15:30:00'),
(68, 'Tại một slide trong powerpoint ta dùng tổ hợp nào sau đây để xóa slide đó?', 6, 1, '2019-01-27 15:30:00'),
(69, 'Hai người chat với nhau qua mạng Yahoo Messenger trong cùng một phòng nét?', 3, 1, '2019-01-27 15:30:29'),
(70, 'Tên miền trong địa chỉ website có .edu cho biết Website đó thuộc về?', 3, 1, '2019-01-27 15:30:29'),
(71, 'Website là gì?', 3, 1, '2019-01-27 15:30:55'),
(72, 'Phần mềm nào sau đây không phải trình duyệt WEB?', 3, 1, '2019-01-27 15:30:55'),
(73, 'Dịch vụ lưu trữ đám mây của Microsoft là gì?', 3, 1, '2019-01-27 15:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `RoleID` int(11) NOT NULL,
  `RoleTitle` varchar(40) NOT NULL,
  `RoleDescription` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`RoleID`, `RoleTitle`, `RoleDescription`) VALUES
(1, 'Thành viên', 'Người dùng cơ bản'),
(2, 'Giáo viên', 'Quản trị nội dung đề, ngân hàng câu hỏi'),
(3, 'Admin', 'Quản trị hệ thống');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `ScoreID` int(11) NOT NULL,
  `AccountID` int(11) NOT NULL,
  `ExamID` int(11) NOT NULL,
  `Score` float NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`ScoreID`, `AccountID`, `ExamID`, `Score`, `Date`) VALUES
(1, 2, 1, 35, '2019-01-27 17:27:20'),
(2, 2, 2, 25, '2019-01-27 17:27:20'),
(3, 2, 1, 35, '2019-01-27 17:29:41'),
(4, 2, 1, 37, '2019-01-27 17:29:41'),
(5, 1, 2, 14, '2019-04-08 06:51:19'),
(6, 1, 1, 11, '2019-04-09 11:24:59'),
(7, 1, 2, 11, '2019-04-12 22:20:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`AccountID`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`),
  ADD UNIQUE KEY `PhoneNumber` (`PhoneNumber`),
  ADD KEY `Gender` (`Gender`),
  ADD KEY `Role` (`Role`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`AnswerID`),
  ADD KEY `QuestionID` (`QuestionID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `ExamID` (`ExamID`),
  ADD KEY `AccountID` (`AccountID`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`ExamID`),
  ADD UNIQUE KEY `ExamTitle` (`ExamTitle`),
  ADD UNIQUE KEY `TitleSlug` (`ExamSlug`),
  ADD KEY `ExamType` (`ExamType`);

--
-- Indexes for table `examtypes`
--
ALTER TABLE `examtypes`
  ADD PRIMARY KEY (`TypeID`),
  ADD UNIQUE KEY `TypeTitle_UNIQUE` (`TypeTitle`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`FeedbackID`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`ModuleID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`PostID`),
  ADD UNIQUE KEY `PostTitle_UNIQUE` (`PostTitle`),
  ADD KEY `AccountID` (`AccountID`),
  ADD KEY `ModuleID` (`ModuleID`);

--
-- Indexes for table `questiondetails`
--
ALTER TABLE `questiondetails`
  ADD PRIMARY KEY (`QuestionID`,`ExamID`),
  ADD KEY `ExamID` (`ExamID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`QuestionID`),
  ADD KEY `ModuleID` (`ModuleID`),
  ADD KEY `QuestionType` (`QuestionType`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`RoleID`),
  ADD UNIQUE KEY `LevelTitle_UNIQUE` (`RoleTitle`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`ScoreID`),
  ADD KEY `AccountID` (`AccountID`),
  ADD KEY `ExamID` (`ExamID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `AccountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `AnswerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `ExamID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `examtypes`
--
ALTER TABLE `examtypes`
  MODIFY `TypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `FeedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `ModuleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `QuestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `ScoreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`Role`) REFERENCES `roles` (`RoleID`);

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`QuestionID`) REFERENCES `questions` (`QuestionID`);

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_ibfk_1` FOREIGN KEY (`ExamType`) REFERENCES `examtypes` (`TypeID`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`AccountID`) REFERENCES `accounts` (`AccountID`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`ModuleID`) REFERENCES `modules` (`ModuleID`);

--
-- Constraints for table `questiondetails`
--
ALTER TABLE `questiondetails`
  ADD CONSTRAINT `questiondetails_ibfk_1` FOREIGN KEY (`QuestionID`) REFERENCES `questions` (`QuestionID`),
  ADD CONSTRAINT `questiondetails_ibfk_2` FOREIGN KEY (`ExamID`) REFERENCES `exams` (`ExamID`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`ModuleID`) REFERENCES `modules` (`ModuleID`);

--
-- Constraints for table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `scores_ibfk_1` FOREIGN KEY (`AccountID`) REFERENCES `accounts` (`AccountID`),
  ADD CONSTRAINT `scores_ibfk_2` FOREIGN KEY (`ExamID`) REFERENCES `exams` (`ExamID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
