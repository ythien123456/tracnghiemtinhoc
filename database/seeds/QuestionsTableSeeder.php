<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions')->delete();
        
        \DB::table('questions')->insert(array (
            0 => 
            array (
                'QuestionID' => 1,
                'QuestionContent' => 'Phần cứng máy tính là gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            1 => 
            array (
                'QuestionID' => 2,
                'QuestionContent' => 'Lựa chọn nào cho thấy máy tính xách tay có lợi thế hơn so với máy tính để bàn?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            2 => 
            array (
                'QuestionID' => 3,
                'QuestionContent' => 'Trong máy tính, PC là chữ viết tắt của từ nào?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            3 => 
            array (
                'QuestionID' => 4,
                'QuestionContent' => 'Một loại máy tính có màn hình cảm ứng, khi sử dụng người dùng có thể dùng bút hoặc công cụ chọn để chạm vào, lựa chọn một đối tượng nào đó hoặc có thể nhập thông tin qua bàn phím ảo tích hợp trong máy là?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            4 => 
            array (
                'QuestionID' => 5,
            'QuestionContent' => 'Điện thoại thông minh (smartphone) là gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            5 => 
            array (
                'QuestionID' => 6,
                'QuestionContent' => 'Thiết bị ngoại vi của máy tính là thiết bị nào?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            6 => 
            array (
                'QuestionID' => 7,
                'QuestionContent' => 'Các thiết bị dùng để nhập dữ liệu vào máy tính là?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            7 => 
            array (
                'QuestionID' => 8,
                'QuestionContent' => 'Những thiết bị nào sau đây được xếp vào nhóm thiết bị ngoại vi?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            8 => 
            array (
                'QuestionID' => 9,
                'QuestionContent' => 'Các thành phần: RAM, CPU, thiết bị nhập xuất là?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            9 => 
            array (
                'QuestionID' => 10,
                'QuestionContent' => 'Thuật ngữ “RAM” là từ viết tắt của cụm từ?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            10 => 
            array (
                'QuestionID' => 11,
                'QuestionContent' => 'ROM là bộ nhớ gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            11 => 
            array (
                'QuestionID' => 12,
                'QuestionContent' => 'CPU là gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            12 => 
            array (
                'QuestionID' => 13,
            'QuestionContent' => 'MB (Megabyte) là đơn vị đo gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            13 => 
            array (
                'QuestionID' => 14,
                'QuestionContent' => 'ROM là viết tắt của từ gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            14 => 
            array (
                'QuestionID' => 15,
                'QuestionContent' => 'Phát biểu nào là đúng khi nói đến CPU?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            15 => 
            array (
                'QuestionID' => 16,
                'QuestionContent' => 'Đơn vị tính nhỏ nhất của máy tính là gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            16 => 
            array (
                'QuestionID' => 17,
                'QuestionContent' => 'Bit là gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            17 => 
            array (
                'QuestionID' => 18,
                'QuestionContent' => '1 byte bằng?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            18 => 
            array (
                'QuestionID' => 19,
                'QuestionContent' => '1 KB bằng?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            19 => 
            array (
                'QuestionID' => 20,
                'QuestionContent' => 'CPU làm những công việc chủ yếu nào?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            20 => 
            array (
                'QuestionID' => 21,
                'QuestionContent' => 'Kể tên các loại bộ nhớ trong?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            21 => 
            array (
                'QuestionID' => 22,
                'QuestionContent' => 'Các thiết bị nào có thể thiếu trong một bộ máy tính?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            22 => 
            array (
                'QuestionID' => 23,
                'QuestionContent' => 'Cấu trúc chung của máy tính gồm có những khối chức năng nào?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            23 => 
            array (
                'QuestionID' => 24,
                'QuestionContent' => 'Các thành phần cơ bản của 1 máy tính?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            24 => 
            array (
                'QuestionID' => 25,
                'QuestionContent' => 'Phát biểu nào là đúng khi nói đến bộ nhớ RAM và ROM??',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            25 => 
            array (
                'QuestionID' => 26,
                'QuestionContent' => 'Khi đọc các thông số cấu hình của một máy tính thông thường: 2GHZ-320GB-4.00GB, con số 4.00GB chỉ điều gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            26 => 
            array (
                'QuestionID' => 27,
                'QuestionContent' => 'Đâu là thiết bị lưu trữ dữ liệu?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            27 => 
            array (
                'QuestionID' => 28,
                'QuestionContent' => 'Thành phần nào của máy tính có thể ngăn máy tính khởi động, nếu nó bị hư hỏng hoặc kết nối không đúng cách?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            28 => 
            array (
                'QuestionID' => 29,
                'QuestionContent' => 'Nhóm nào sau đây bao gồm các thiết bị được xếp vào cùng loại?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            29 => 
            array (
                'QuestionID' => 30,
                'QuestionContent' => 'Máy Scanner được kết nối với máy tính thông qua cổng nào sau đây?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            30 => 
            array (
                'QuestionID' => 31,
                'QuestionContent' => 'Bàn phím máy tính là thiết bị nào trong các thiết bị sau?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            31 => 
            array (
                'QuestionID' => 32,
                'QuestionContent' => 'Hãy chỉ ra đâu là thiết bị nhập?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            32 => 
            array (
                'QuestionID' => 33,
                'QuestionContent' => 'Thiết bị nào thực hiện thao tác nhập dữ liệu trong số các thiết bị sau: Màn hình, máy in, máy vẽ, bàn phím, ổ đĩa cứng, ổ đĩa mềm, chuột, loa, máy quét?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            33 => 
            array (
                'QuestionID' => 34,
                'QuestionContent' => 'Máy điện tử dùng để thu và lưu giữ hình ảnh một cách tự động thay vì phải dùng phim ảnh là máy gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            34 => 
            array (
                'QuestionID' => 35,
                'QuestionContent' => 'Máy in và máy quét, thiết bị nào là thiết bị nhập thông tin vào máy tính?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            35 => 
            array (
                'QuestionID' => 36,
                'QuestionContent' => 'Thiết bị nào không thể thiếu trong một máy tính?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            36 => 
            array (
                'QuestionID' => 37,
                'QuestionContent' => 'Các thiết bị: chuột, bàn phím, máy quét, thuộc khối chức năng nào?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            37 => 
            array (
                'QuestionID' => 38,
                'QuestionContent' => 'Hãy chọn nhóm có thiết bị không cùng nhóm với những thiết bị còn lại?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            38 => 
            array (
                'QuestionID' => 39,
                'QuestionContent' => 'Thiết bị nào thực hiện thao tác xuất ra dữ liệu trong số các thiết bị sau: Màn hình, máy in, bàn phím, máy chiếu, ổ đĩa mềm, chuột, loa, máy quét?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            39 => 
            array (
                'QuestionID' => 40,
                'QuestionContent' => 'Thiết bị xuất để đưa ra kết quả đã xử lý cho người sử dụng. Các thiết bị xuất thông dụng hiện nay là?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            40 => 
            array (
                'QuestionID' => 41,
                'QuestionContent' => 'Các thiết bị: màn hình, loa, máy in, thuộc khối chức năng nào?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            41 => 
            array (
                'QuestionID' => 42,
                'QuestionContent' => 'Hãy chọn nhóm có thiết bị không cùng nhóm với những thiết bị còn lại?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            42 => 
            array (
                'QuestionID' => 43,
                'QuestionContent' => 'Phần mềm công cộng là gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            43 => 
            array (
                'QuestionID' => 44,
                'QuestionContent' => 'Đâu là một ví dụ về phần mềm hệ thống?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            44 => 
            array (
                'QuestionID' => 45,
                'QuestionContent' => 'Phát biểu nào sau đây là đúng?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            45 => 
            array (
                'QuestionID' => 46,
                'QuestionContent' => 'Chương trình điều kiển thiết bị trong các đĩa CD kèm theo khi gắn thêm thiết bị ngoại vi cho máy tính thường gọi là gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            46 => 
            array (
                'QuestionID' => 47,
            'QuestionContent' => 'Chức năng chính của hệ điều hành (Operating System) là gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            47 => 
            array (
                'QuestionID' => 48,
                'QuestionContent' => 'Hãy chỉ ra tên của một số hệ điều hành?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            48 => 
            array (
                'QuestionID' => 49,
                'QuestionContent' => 'Hệ thống nào là tập hợp các chương trình phần mềm chạy trên máy tính, dùng để điều hành, quản lý các thiết bị phần cứng và tài nguyên phần mềm trên máy tính?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            49 => 
            array (
                'QuestionID' => 50,
                'QuestionContent' => 'Phần mềm nào dưới đây được cài đặt đầu tiên trong máy tính?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            50 => 
            array (
                'QuestionID' => 51,
                'QuestionContent' => 'Hãy kể tên một số hệ điều hành?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            51 => 
            array (
                'QuestionID' => 52,
                'QuestionContent' => 'Phát biểu nào sau đây là đúng?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            52 => 
            array (
                'QuestionID' => 53,
                'QuestionContent' => 'Hệ điều hành là?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            53 => 
            array (
                'QuestionID' => 54,
                'QuestionContent' => 'Hệ điều hành nào sau đây không sử dụng cho máy tính?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            54 => 
            array (
                'QuestionID' => 55,
                'QuestionContent' => 'Phần mềm Windows, Linux có đặc điểm gì chung?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            55 => 
            array (
                'QuestionID' => 56,
                'QuestionContent' => 'Trong các phần mềm sau, phần mềm nào là phần mềm ứng dụng?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            56 => 
            array (
                'QuestionID' => 57,
                'QuestionContent' => 'Hãy chọn phương án đúng để điền vào dấu 3 chấm: "... là một cấu trúc bao gồm tập hợp các thao tác và các kết quả tương quan sử dụng trong việc phát triển để sản xuất ra một sản phẩm phần mềm"',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            57 => 
            array (
                'QuestionID' => 58,
                'QuestionContent' => 'Phát biểu nào chưa đúng?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            58 => 
            array (
                'QuestionID' => 59,
                'QuestionContent' => 'Phát biểu nào sau đây là sai?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            59 => 
            array (
                'QuestionID' => 60,
                'QuestionContent' => 'Phần mềm nào sau đây không phải là phần mềm mã nguồn mở?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:54',
            ),
            60 => 
            array (
                'QuestionID' => 61,
                'QuestionContent' => 'Phát biểu nào sau đây là đúng?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            61 => 
            array (
                'QuestionID' => 62,
                'QuestionContent' => 'Thiết bị nào quyết định khả năng làm việc của máy tính?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            62 => 
            array (
                'QuestionID' => 63,
                'QuestionContent' => 'Tốc độ của máy tính phụ thuộc vào các yếu tố nào sau đây?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            63 => 
            array (
                'QuestionID' => 64,
                'QuestionContent' => 'Tuỳ chọn nào cho phép cải thiện hiệu năng của máy tính?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            64 => 
            array (
                'QuestionID' => 65,
                'QuestionContent' => 'Hành động nào nên thực hiện để tăng hiệu năng của máy tính?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            65 => 
            array (
                'QuestionID' => 66,
                'QuestionContent' => 'Phương án nào sau đây là đúng?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            66 => 
            array (
                'QuestionID' => 67,
                'QuestionContent' => 'Dưới góc độ địa lý, mạng máy tính được phân thành?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            67 => 
            array (
                'QuestionID' => 68,
                'QuestionContent' => 'Mạng LAN là viết tắt của?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            68 => 
            array (
                'QuestionID' => 69,
                'QuestionContent' => 'Mạng WAN là viết tắt của?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            69 => 
            array (
                'QuestionID' => 70,
                'QuestionContent' => 'Khi sử dụng mạng LAN ta được các lợi ích gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            70 => 
            array (
                'QuestionID' => 71,
                'QuestionContent' => 'Mạng LAN là mạng kết nối các máy tính?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            71 => 
            array (
                'QuestionID' => 72,
                'QuestionContent' => 'Mạng WAN là mạng kết nối các máy tính?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            72 => 
            array (
                'QuestionID' => 73,
            'QuestionContent' => 'Những yếu tố nào sau đây được sử dụng cho mạng cục bộ (LAN)?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            73 => 
            array (
                'QuestionID' => 74,
                'QuestionContent' => 'Căn cứ vào quy mô sử dụng người ta chia thành các loại mạng nào?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            74 => 
            array (
                'QuestionID' => 75,
                'QuestionContent' => 'Kỹ thuật dùng để kết nối mạng cho nhiều máy tính với nhau trong phạm vi một văn phòng gọi là?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            75 => 
            array (
                'QuestionID' => 76,
                'QuestionContent' => 'Đơn vị cơ bản dùng để đo tốc độ truyền dữ liệu là?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            76 => 
            array (
                'QuestionID' => 77,
                'QuestionContent' => 'MBps là đơn vị đo gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            77 => 
            array (
                'QuestionID' => 78,
                'QuestionContent' => 'Hãy chỉ ra phương tiện truyền dẫn thông tin?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            78 => 
            array (
                'QuestionID' => 79,
                'QuestionContent' => 'Mạng Intranet là gì',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            79 => 
            array (
                'QuestionID' => 80,
                'QuestionContent' => 'Internet có nghĩa là?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            80 => 
            array (
                'QuestionID' => 81,
                'QuestionContent' => '"Download" có nghĩa là gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            81 => 
            array (
                'QuestionID' => 82,
                'QuestionContent' => 'Hãy kể tên các dịch vụ kết nối Internet?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            82 => 
            array (
                'QuestionID' => 83,
                'QuestionContent' => 'Các dịch vụ Internet dành cho người dùng?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            83 => 
            array (
                'QuestionID' => 84,
                'QuestionContent' => 'Đâu là phương thức làm việc trực tuyến?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            84 => 
            array (
                'QuestionID' => 85,
            'QuestionContent' => 'Phát biểu nào sau đây về thư điện tử (email) là đúng?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            85 => 
            array (
                'QuestionID' => 86,
                'QuestionContent' => 'Cấu trúc 1 địa chỉ email là',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            86 => 
            array (
                'QuestionID' => 87,
                'QuestionContent' => 'Thông tin nào sau đây nói về thư điện tử?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            87 => 
            array (
                'QuestionID' => 88,
                'QuestionContent' => 'Lợi ích của email so với thư thông thường?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            88 => 
            array (
                'QuestionID' => 89,
            'QuestionContent' => 'Phát biểu nào là đúng với tin nhắn tức thời (Instant Messages)',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            89 => 
            array (
                'QuestionID' => 90,
            'QuestionContent' => 'Đặc điểm chính của hệ thống truyền giọng nói trên giao thức IP (Voice over Internet Protocal-VoIP)',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            90 => 
            array (
                'QuestionID' => 91,
            'QuestionContent' => 'Điều nào sau đây là đúng liên quan đến hệ thống truyền giọng nói trên giao thức IP (VoIP)?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            91 => 
            array (
                'QuestionID' => 92,
            'QuestionContent' => 'Diễn đàn (forum) là gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            92 => 
            array (
                'QuestionID' => 93,
                'QuestionContent' => 'Hãy chọn phương án đúng để điền vào dấu 3 chấm: "... là điểm truy cập tập trung và duy nhất, tích hợp các kênh thông tin dịch vụ, ứng dụng, là một sản phẩm hệ thống phần mềm được phát triển dựa trên một sản phẩm phần mềm cổng lõi"',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            93 => 
            array (
                'QuestionID' => 94,
                'QuestionContent' => 'Nơi để cho người dùng Internet trao đổi thảo luận và tán gẫu nhau là gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            94 => 
            array (
                'QuestionID' => 95,
                'QuestionContent' => 'Hãy chọn phương án đúng để điền vào dấu 3 chấm: "... là hình thức thảo luận trực tiếp trên Internet, bạn có thể thảo luận, trao đổi và nhận được câu trả lời hầu như ngay lập tức, cũng tương tự như khi bạn nói chuyện qua điện thoại"',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            95 => 
            array (
                'QuestionID' => 96,
                'QuestionContent' => 'Lựa chọn nào là đúng liên quan đến việc sửa tư thế khi sử dụng một máy tính?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            96 => 
            array (
                'QuestionID' => 97,
                'QuestionContent' => 'Tác hại khi ngồi lâu trước máy tính?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            97 => 
            array (
                'QuestionID' => 98,
                'QuestionContent' => 'Đặt màn hình máy tính như thế nào là tốt cho mắt bạn?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            98 => 
            array (
                'QuestionID' => 99,
                'QuestionContent' => 'Công dụng của việc tái chế các bộ phận của máy tính?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            99 => 
            array (
                'QuestionID' => 100,
                'QuestionContent' => 'Các mật khẩu nào sau đây là khó phá nhất đối với hacker?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            100 => 
            array (
                'QuestionID' => 101,
                'QuestionContent' => 'Đâu là ví dụ của mật khẩu tốt?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            101 => 
            array (
                'QuestionID' => 102,
                'QuestionContent' => 'Cách nào để đề phòng khi giao dịch trực tuyến?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            102 => 
            array (
                'QuestionID' => 103,
                'QuestionContent' => 'Thiết bị nào hoạt động trong một môi trường máy tính nối mạng dùng để ngăn chặn một số liên lạc bị cấm bởi chính sách an ninh của cá nhân hay tổ chức?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            103 => 
            array (
                'QuestionID' => 104,
                'QuestionContent' => 'Virus máy tính là gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            104 => 
            array (
                'QuestionID' => 105,
                'QuestionContent' => 'Virus máy tính có khả năng gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            105 => 
            array (
                'QuestionID' => 106,
                'QuestionContent' => 'Loại mã nguồn độc hại nào không có chức năng tự sao chép nhưng lại có chức năng hủy hoại tương tự virus?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            106 => 
            array (
                'QuestionID' => 107,
                'QuestionContent' => 'Phần mềm nào có thể gây hại cho máy tính của người dùng?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            107 => 
            array (
                'QuestionID' => 108,
                'QuestionContent' => 'Bạn nhận được một bức thư điện tử chứa tệp tin đính kèm mà bạn không nhận biết ra, bạn sẽ xử lý thế nào trong tình huống này để đảm bảo an toàn?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            108 => 
            array (
                'QuestionID' => 109,
                'QuestionContent' => 'Để phòng chống Virus, cách tốt nhất là?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            109 => 
            array (
                'QuestionID' => 110,
                'QuestionContent' => 'Luật công nghệ thông tin ra đời và chính thức có hiệu lực từ ngày, tháng, năm nào?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            110 => 
            array (
                'QuestionID' => 111,
                'QuestionContent' => 'Một thoả thuận ràng buộc mang tính pháp lý quy định cụ thể các điều khoản về sử dụng một ứng dụng và xác định các quyền của nhà sản xuất và của người dùng cuối là gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            111 => 
            array (
                'QuestionID' => 112,
                'QuestionContent' => 'Phát biểu nào sau đây là sai?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            112 => 
            array (
                'QuestionID' => 113,
                'QuestionContent' => 'Hãy chọn phương án đúng để điền vào dấu 3 chấm: "... là độc quyền của một tác giả cho tác phẩm của người này"',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            113 => 
            array (
                'QuestionID' => 114,
                'QuestionContent' => 'Giấy phép sử dụng phần mềm có thể thiết lập tuỳ chọn nào?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            114 => 
            array (
                'QuestionID' => 115,
                'QuestionContent' => 'Phần mềm văn phòng nào sau đây sử dụng giấy phép mã nguồn mở?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            115 => 
            array (
                'QuestionID' => 116,
                'QuestionContent' => 'Khi một cơ quan mua một chương trình máy tính, trong những trường hợp nào chương trình này có thể được cài đặt miễn phí trong cơ quan đó?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            116 => 
            array (
                'QuestionID' => 117,
                'QuestionContent' => 'Tuỳ chọn nào là mô tả tốt nhất về phần mềm mã nguồn mở?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            117 => 
            array (
                'QuestionID' => 118,
                'QuestionContent' => 'Cách nào sau đây là tốt nhất để chống lại điểm yếu bảo mật trong phần mềm hệ điều hành',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            118 => 
            array (
                'QuestionID' => 119,
                'QuestionContent' => 'Để bảo vệ dữ liệu ta phải làm gì?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:23:55',
            ),
            119 => 
            array (
                'QuestionID' => 120,
                'QuestionContent' => 'Lệnh Start/Shut down dùng để làm gì?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:56',
            ),
            120 => 
            array (
                'QuestionID' => 121,
                'QuestionContent' => 'Có bao nhiêu cách thoát khỏi một chương trình ứng dụng trong hệ điều hành Windows 7?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:56',
            ),
            121 => 
            array (
                'QuestionID' => 122,
                'QuestionContent' => 'Khi khởi động máy tính, phần mềm nào sau đây sẽ được thực hiện trước?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:56',
            ),
            122 => 
            array (
                'QuestionID' => 123,
                'QuestionContent' => 'Để tắt máy tính đúng cách ta chọn?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:56',
            ),
            123 => 
            array (
                'QuestionID' => 124,
                'QuestionContent' => 'Quy trình tắt máy tính nào sau đây đảm bảo an toàn cho chương trình và dữ liệu?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:56',
            ),
            124 => 
            array (
                'QuestionID' => 125,
                'QuestionContent' => 'Trong Windows 7, để ngắt ổ đĩa USB một cách an toàn, có thể dùng cách nào sau đây?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            125 => 
            array (
                'QuestionID' => 126,
            'QuestionContent' => 'Để thiết lập chế độ nghỉ màn hình (Screen Saver) trong Windows 7, ta sử dụng công cụ nào sau đây trong Control Panel?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            126 => 
            array (
                'QuestionID' => 127,
                'QuestionContent' => 'Để khởi động lại máy tính, phát biểu nào dưới đây là sai',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            127 => 
            array (
                'QuestionID' => 128,
            'QuestionContent' => 'Trong Control Panel của Windows 7, để thay đổi cách thức đăng nhập (login) và đăng xuất (logout), ta có thể dùng cách nào sau đây?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            128 => 
            array (
                'QuestionID' => 129,
                'QuestionContent' => 'Trong hệ điều hành Windows 7, khi người dùng muốn rời khỏi máy tính, có thể dùng cách nào sau đây để khóa máy tính tạm thời?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            129 => 
            array (
                'QuestionID' => 130,
                'QuestionContent' => 'Lựa chọn nào sau đây trong Windows 7 cho phép tắt máy tính và lưu trữ thông tin, trạng thái các chương trình đang hoạt động trong bộ nhớ vào ổ đĩa cứng và có thể cho phép người dùng tiếp tục sử dụng chỉ cần nhấn phím bất kỳ?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            130 => 
            array (
                'QuestionID' => 131,
                'QuestionContent' => 'Phím, tổ hợp phím dùng để chụp cửa sổ hiện hành?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            131 => 
            array (
                'QuestionID' => 132,
                'QuestionContent' => 'Phím tắt nào dùng để đóng cửa sổ hiện hành?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            132 => 
            array (
                'QuestionID' => 133,
                'QuestionContent' => 'Phím tắt nào sao chép một đối tượng vào ClipBoard?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            133 => 
            array (
                'QuestionID' => 134,
                'QuestionContent' => 'Phím tắt để cắt một đối tượng vào ClipBoard là gì?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            134 => 
            array (
                'QuestionID' => 135,
                'QuestionContent' => 'Phím tắt được sử dụng để hiển thị thực đơn Start?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            135 => 
            array (
                'QuestionID' => 136,
                'QuestionContent' => 'Phím tắt nào để chuyển đổi giữa các cửa sổ trong Windows 7?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            136 => 
            array (
                'QuestionID' => 137,
            'QuestionContent' => 'Để di chuyển con trỏ chuột trong khi soạn thảo, tổ hợp phím Ctrl + <- (mũi tên sang trái), có chức năng gì?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            137 => 
            array (
                'QuestionID' => 138,
            'QuestionContent' => 'Để di chuyển con trỏ chuột trong khi soạn thảo, phím -> (mũi tên sang phải), có chức năng?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            138 => 
            array (
                'QuestionID' => 139,
                'QuestionContent' => 'Muốn xóa ký tự đằng sau con trỏ thì nhấn phím gì?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            139 => 
            array (
                'QuestionID' => 140,
                'QuestionContent' => 'Tổ hợp phím Ctrl + C có chức năng gì?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            140 => 
            array (
                'QuestionID' => 141,
                'QuestionContent' => 'Tổ hợp phím Ctrl + X có chức năng gì?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            141 => 
            array (
                'QuestionID' => 142,
                'QuestionContent' => 'Giả sử bạn đang soạn thảo văn bản trên máy tính và bỗng nhiên bàn phím của bạn gặp sự cố, không gõ được kí tự. Bạn xử lý như thế nào?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            142 => 
            array (
                'QuestionID' => 143,
                'QuestionContent' => 'Khi kích đúp chuột vào thanh tiêu đề của một cửa sổ đang ở kích thước cực đại trong hệ điều hành Windows 7 sẽ',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            143 => 
            array (
                'QuestionID' => 144,
                'QuestionContent' => 'Trong các biểu tượng ứng dụng sau đây, biểu tượng nào không hiển thị trên màn hình nền Desktop?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            144 => 
            array (
                'QuestionID' => 145,
                'QuestionContent' => 'Phần mềm nào dưới đây nếu không được cài đặt máy tính sẽ không hoạt động?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:57',
            ),
            145 => 
            array (
                'QuestionID' => 146,
                'QuestionContent' => 'Để thay đổi kiểu hiển thị ngày tháng năm trong Windows 7 được thiết lập ở đâu?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:58',
            ),
            146 => 
            array (
                'QuestionID' => 147,
                'QuestionContent' => 'Trong hệ điều hành Windows 7, muốn thay đổi hình nền cho màn hình Desktop, ta nhấp phải chuột tại vùng trống trên Desktop và chọn chức năng nào?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 20:50:58',
            ),
            147 => 
            array (
                'QuestionID' => 148,
                'QuestionContent' => 'Internet có nghĩa là?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            148 => 
            array (
                'QuestionID' => 149,
                'QuestionContent' => 'Phát biểu nào sau đây là sai?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            149 => 
            array (
                'QuestionID' => 150,
                'QuestionContent' => 'Thứ tự kết nối Internet theo đường quay số theo bạn là?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            150 => 
            array (
                'QuestionID' => 151,
                'QuestionContent' => 'ISP là viết tắt của',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            151 => 
            array (
                'QuestionID' => 152,
                'QuestionContent' => 'WWW là viết tắt của?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            152 => 
            array (
                'QuestionID' => 153,
                'QuestionContent' => 'Mỗi thiết bị khi tham gia vào một mạng máy tính nào đó cũng đều có',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            153 => 
            array (
                'QuestionID' => 154,
                'QuestionContent' => 'HTTP là gì?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            154 => 
            array (
                'QuestionID' => 155,
                'QuestionContent' => 'Địa chỉ nào không phải là địa chỉ trang web?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            155 => 
            array (
                'QuestionID' => 156,
                'QuestionContent' => 'Đâu là định nghĩa đúng nhất về trang Web?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            156 => 
            array (
                'QuestionID' => 157,
                'QuestionContent' => '"Link" trên trang web có nghĩa là?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            157 => 
            array (
                'QuestionID' => 158,
                'QuestionContent' => 'Đây là cụm từ viết tắt của địa chỉ tài nguyên trên Internet?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            158 => 
            array (
                'QuestionID' => 159,
                'QuestionContent' => 'Đâu là định nghĩa siêu liên kết?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            159 => 
            array (
                'QuestionID' => 160,
                'QuestionContent' => 'Thuật ngữ nào dùng để chỉ các trang tin tức trên mạng?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            160 => 
            array (
                'QuestionID' => 161,
                'QuestionContent' => 'Internet Explorer là gì?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            161 => 
            array (
                'QuestionID' => 162,
                'QuestionContent' => 'Mozilla Firefox là gì?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            162 => 
            array (
                'QuestionID' => 163,
                'QuestionContent' => 'Google Chrome là gì?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            163 => 
            array (
                'QuestionID' => 164,
                'QuestionContent' => 'Opera là gì?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            164 => 
            array (
                'QuestionID' => 165,
                'QuestionContent' => 'Chương trình được sử dụng để xem các trang Web được gọi là gì?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            165 => 
            array (
                'QuestionID' => 166,
                'QuestionContent' => 'Để xem một trang Web, ta cần gõ địa chỉ của trang đó vào đâu?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            166 => 
            array (
                'QuestionID' => 167,
                'QuestionContent' => 'Muốn xem được trang web, máy tính của bạn cần phải cài đặt',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            167 => 
            array (
                'QuestionID' => 168,
                'QuestionContent' => 'Phần mềm nào sau đây không phải là trình duyệt Web',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:33',
            ),
            168 => 
            array (
                'QuestionID' => 169,
                'QuestionContent' => 'Phát biểu nào sau là đúng về Mozilla Firefox và Chromium',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:34',
            ),
            169 => 
            array (
                'QuestionID' => 170,
                'QuestionContent' => 'Nút nào trên thanh công cụ của trình duyệt web cho phép bạn tìm kiếm thông tin trên WWW?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:34',
            ),
            170 => 
            array (
                'QuestionID' => 171,
                'QuestionContent' => 'Tường lửa là gì?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:34',
            ),
            171 => 
            array (
                'QuestionID' => 172,
                'QuestionContent' => 'Dấu hiệu nhận biết một website an toàn?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:34',
            ),
            172 => 
            array (
                'QuestionID' => 173,
                'QuestionContent' => 'Trình duyệt web không thể hiển thị trang web yêu cầu, có thể do:',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:34',
            ),
            173 => 
            array (
                'QuestionID' => 174,
                'QuestionContent' => 'Phát biểu nào dưới đây là sai?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:34',
            ),
            174 => 
            array (
                'QuestionID' => 175,
                'QuestionContent' => 'Các thành phần của tên miền được phân cách bằng ký tự gì?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:34',
            ),
            175 => 
            array (
                'QuestionID' => 176,
                'QuestionContent' => 'Để truy cập vào một trang Web chúng ta cần phải biết:',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:30:34',
            ),
            176 => 
            array (
                'QuestionID' => 177,
                'QuestionContent' => 'Hãy nêu cách khởi động Microsoft Office Word?',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            177 => 
            array (
                'QuestionID' => 178,
                'QuestionContent' => 'Hãy cho biết chức năng của tổ hợp phím Ctrl + E?',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            178 => 
            array (
                'QuestionID' => 179,
                'QuestionContent' => 'Tập tin MS Word 2010 được lưu lại có phần mở rộng định dạng mặc định là:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            179 => 
            array (
                'QuestionID' => 180,
                'QuestionContent' => 'Tổ hợp phím Ctrl+K có tác dụng gì?',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            180 => 
            array (
                'QuestionID' => 181,
                'QuestionContent' => 'Trong các phần mềm sau đâu là phần mềm có thể dùng để soạn thảo văn bản?',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            181 => 
            array (
                'QuestionID' => 182,
                'QuestionContent' => 'Chương trình soạn thảo văn bản có chức năng chính là gì?',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            182 => 
            array (
                'QuestionID' => 183,
                'QuestionContent' => 'Để đóng văn bản đang làm việc chúng ta thực hiện:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            183 => 
            array (
                'QuestionID' => 184,
                'QuestionContent' => 'Lệnh nào cho phép lưu tài liệu vào trong máy tính:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            184 => 
            array (
                'QuestionID' => 185,
                'QuestionContent' => 'Tổ hợp phím Ctrl + N có chức năng gì?',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            185 => 
            array (
                'QuestionID' => 186,
                'QuestionContent' => 'Tên văn bản đang làm việc được hiển thị trên thanh:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            186 => 
            array (
                'QuestionID' => 187,
                'QuestionContent' => 'Thanh truy cập nhanh chứa các chức năng mặc định nào?',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            187 => 
            array (
                'QuestionID' => 188,
                'QuestionContent' => 'Chế độ hiển thị Print Layout là chế độ:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            188 => 
            array (
                'QuestionID' => 189,
                'QuestionContent' => 'Chế độ hiển thị nào chỉ cho phép hiển thị văn bản để đọc, không được sửa?',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            189 => 
            array (
                'QuestionID' => 190,
                'QuestionContent' => 'Lệnh Help của Microsoft Word có chức năng:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            190 => 
            array (
                'QuestionID' => 191,
                'QuestionContent' => 'Muốn mở chức năng Help của Microsoft Word, ấn phím:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            191 => 
            array (
                'QuestionID' => 192,
                'QuestionContent' => 'Muốn tìm kiếm với chức năng Help của Microsoft Word cần có:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            192 => 
            array (
                'QuestionID' => 193,
                'QuestionContent' => 'Chế độ hiển thị nào chỉ cho phép hiển thị văn bản theo kiểu Website?',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:49',
            ),
            193 => 
            array (
                'QuestionID' => 194,
                'QuestionContent' => 'Thanh Zoom hiển thị 100% có nghĩa là:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:50',
            ),
            194 => 
            array (
                'QuestionID' => 195,
                'QuestionContent' => 'Để sắp xếp các cửa sổ văn bản trên màn hình Word theo thứ tự ta sử dụng Tab nào?',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:50',
            ),
            195 => 
            array (
                'QuestionID' => 196,
                'QuestionContent' => 'Chế độ nào cho phép hiển thị màn hình với kích thước hiển thị lớn nhất?',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:50',
            ),
            196 => 
            array (
                'QuestionID' => 197,
                'QuestionContent' => 'Để chuyển đổi giữa các file văn bản đang mở trong Word ta thực hiện:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:50',
            ),
            197 => 
            array (
                'QuestionID' => 198,
                'QuestionContent' => 'Để phóng to màn hình soạn thảo văn bản ta thực hiện như thế nào?',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:50',
            ),
            198 => 
            array (
                'QuestionID' => 199,
                'QuestionContent' => 'Mục Save AutoRecover information every để xác lập:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:50',
            ),
            199 => 
            array (
                'QuestionID' => 200,
                'QuestionContent' => 'Để thay đổi thư mục lưu văn bản mặc định ta thực hiện:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:50',
            ),
            200 => 
            array (
                'QuestionID' => 201,
                'QuestionContent' => 'Muốn hiển thị đường biên văn bản ta thực hiện',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:50',
            ),
            201 => 
            array (
                'QuestionID' => 202,
                'QuestionContent' => 'Trong soạn thảo Microsoft Office Word, công dụng của tổ hợp phím Ctrl + O là',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:50',
            ),
            202 => 
            array (
                'QuestionID' => 203,
                'QuestionContent' => 'Để chèn một đoạn dữ liệu trong Excel sang file Word ta thực hiện như sau:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:50',
            ),
            203 => 
            array (
                'QuestionID' => 204,
                'QuestionContent' => '© được gọi là:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 21:51:50',
            ),
            204 => 
            array (
                'QuestionID' => 205,
                'QuestionContent' => 'Microsoft Excel là công cụ dùng để:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:08',
            ),
            205 => 
            array (
                'QuestionID' => 206,
                'QuestionContent' => 'Phần mở rộng mặc định của tệp được tạo bằng Microsoft Excel 2010 là gì?',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:08',
            ),
            206 => 
            array (
                'QuestionID' => 207,
                'QuestionContent' => 'Trong MS Excel, muốn nhờ chương trình giúp đỡ về một vấn đề gì đó, ta nhấn phím:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:08',
            ),
            207 => 
            array (
                'QuestionID' => 208,
                'QuestionContent' => 'Với cùng một nội dung, kích thước của tệp có phần mở rộng xls so với tệp có phần mở rộng xlsx như thế nào?',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:08',
            ),
            208 => 
            array (
                'QuestionID' => 209,
                'QuestionContent' => 'Một trong những thuật ngữ sau không phải dùng để chỉ một thành phần của Excel?',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:08',
            ),
            209 => 
            array (
                'QuestionID' => 210,
                'QuestionContent' => 'Trong một Worksheet có số cột - số hàng như sau :',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:08',
            ),
            210 => 
            array (
                'QuestionID' => 211,
                'QuestionContent' => 'Trong Microsoft Excel, cách nào để mở một tệp Excel đã có trên máy tính?',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:08',
            ),
            211 => 
            array (
                'QuestionID' => 212,
                'QuestionContent' => 'Trong Microsoft Excel, cách nào để đóng một tệp?',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:08',
            ),
            212 => 
            array (
                'QuestionID' => 213,
                'QuestionContent' => 'Trong Microsoft Excel, cách nào để tạo mới một tệp?',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:08',
            ),
            213 => 
            array (
                'QuestionID' => 214,
                'QuestionContent' => 'Trong Microsoft Excel, cách nào để lưu tệp hiện thời với tên mới?',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:08',
            ),
            214 => 
            array (
                'QuestionID' => 215,
                'QuestionContent' => 'Trong Microsoft Excel, phương án nào dưới đây không phải là địa chỉ ô?',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:08',
            ),
            215 => 
            array (
                'QuestionID' => 216,
                'QuestionContent' => 'Trong Microsoft Excel, phương án nào dưới đây là địa chỉ tuyệt đối?',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:08',
            ),
            216 => 
            array (
                'QuestionID' => 217,
                'QuestionContent' => 'Trong Microsoft Excel, phương án nào dưới đây là địa chỉ hỗn hợp?',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:08',
            ),
            217 => 
            array (
                'QuestionID' => 218,
                'QuestionContent' => 'Trong công thức của Microsoft Excel, sử dụng phím nào để chuyển đổi địa chỉ tuyệt đối sang địa chỉ tương đối hoặc ngược lại cho ô hoặc vùng đã chọn?',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:08',
            ),
            218 => 
            array (
                'QuestionID' => 219,
                'QuestionContent' => 'Trong bảng tính Excel, vùng là tập hợp nhiều ô kế cận tạo thành hình chữ nhật, địa chỉ vùng được thể hiện như câu nào sau đây là đúng?',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:08',
            ),
            219 => 
            array (
                'QuestionID' => 220,
                'QuestionContent' => 'Trong MS Excel 2010, giả sử tại ô B5 có công thức = A1+$B$2+C$3. Sau khi sao chép công thức đó từ ô B5 đến ô D8 sẽ có công thức:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:09',
            ),
            220 => 
            array (
                'QuestionID' => 221,
                'QuestionContent' => 'Theo mặc định ký tự dạng ngày tháng sẽ được:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:09',
            ),
            221 => 
            array (
                'QuestionID' => 222,
                'QuestionContent' => 'Đáp án nào sau đây đúng? Khi nhập dữ liệu vào bảng tính Excel thì:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:09',
            ),
            222 => 
            array (
                'QuestionID' => 223,
                'QuestionContent' => 'Các kiểu dữ liệu thông dụng của Excel là :',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:09',
            ),
            223 => 
            array (
                'QuestionID' => 224,
                'QuestionContent' => 'Để chọn toàn bộ các ô trên bảng tính bằng tổ hợp phím ta nhấn:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:09',
            ),
            224 => 
            array (
                'QuestionID' => 225,
                'QuestionContent' => ': Để chọn nhiều vùng trong MS Excel 2010, khi chọn ta nhấn phím:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:09',
            ),
            225 => 
            array (
                'QuestionID' => 226,
                'QuestionContent' => 'Tổ hợp phím Shift + một trong bốn phím mũi tên thực hiện chức năng gì?',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:09',
            ),
            226 => 
            array (
                'QuestionID' => 227,
                'QuestionContent' => 'Để hủy kết quả vừa làm ta chọn:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:09',
            ),
            227 => 
            array (
                'QuestionID' => 228,
                'QuestionContent' => 'Trong bảng tính Excel, để sửa dữ liệu trong một ô tính mà không cần nhập lại, ta thực hiện:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:09',
            ),
            228 => 
            array (
                'QuestionID' => 229,
                'QuestionContent' => 'Để nhanh chóng xem các thí sinh xếp loại "xuất sắc", ta bôi đen toàn bộ vùng có chứa dữ liệu cần xem rồi sử dụng công cụ gì trong số các công cụ sau',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:09',
            ),
            229 => 
            array (
                'QuestionID' => 230,
                'QuestionContent' => 'Trong Excel muốn sắp xếp dữ liệu sau khi quét khối phần dữ liệu muốn sắp xếp ta chọn?',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:09',
            ),
            230 => 
            array (
                'QuestionID' => 231,
                'QuestionContent' => 'Tại D2 có công thức "=B1+C1", khi sao chép sang ô E2 thì E2 có công thức là:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:09',
            ),
            231 => 
            array (
                'QuestionID' => 232,
                'QuestionContent' => 'Trong bảng tính Excel, tại ô A2 có sẵn dãy kí tự "1Angiang2". Nếu sử dụng sao chép công thức để điền dữ liệu đến các cột B2, C2, D2, E2; thì kết quả nhận được tại ô E2 là:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:21:09',
            ),
            232 => 
            array (
                'QuestionID' => 233,
                'QuestionContent' => 'Để một bài thuyết trình đạt hiệu quả cao, chúng ta cần quan tâm tới vấn đề nào đầu tiên ?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:17',
            ),
            233 => 
            array (
                'QuestionID' => 234,
                'QuestionContent' => 'Cấu trúc chung của một bài thuyết trình gồm có bao nhiêu phần ?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:17',
            ),
            234 => 
            array (
                'QuestionID' => 235,
                'QuestionContent' => 'Trong Powerpoint 2010, phần mở rộng của tên file là nhóm ký tự nào?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:17',
            ),
            235 => 
            array (
                'QuestionID' => 236,
                'QuestionContent' => 'Trong Powerpoint 2010, thoát khỏi chương trình bằng cách?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:17',
            ),
            236 => 
            array (
                'QuestionID' => 237,
                'QuestionContent' => 'Để mở chương trình Powerpoint 2010, ta làm thế nào?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:17',
            ),
            237 => 
            array (
                'QuestionID' => 238,
                'QuestionContent' => 'Trong Powerpoint 2010, thanh công cụ truy cập nhanh có tên là?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:17',
            ),
            238 => 
            array (
                'QuestionID' => 239,
                'QuestionContent' => 'Trong PowerPoint 2010, thao tác nào sau đây để tùy chọn phần ẩn/hiện của các thanh công cụ ?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:17',
            ),
            239 => 
            array (
                'QuestionID' => 240,
                'QuestionContent' => 'Để truy nhập hệ thống trợ giúp trên PowerPoint sử dụng phím hay tổ hợp phím nào ?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:17',
            ),
            240 => 
            array (
                'QuestionID' => 241,
            'QuestionContent' => 'Trong Powerpoint 2010, cách nào để mở 1 bản trình bày (Presentation) có sẵn trong máy tính?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:17',
            ),
            241 => 
            array (
                'QuestionID' => 242,
                'QuestionContent' => 'Trong Powerpoint 2010, thao tác File/Open dùng để làm gì?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:17',
            ),
            242 => 
            array (
                'QuestionID' => 243,
                'QuestionContent' => 'Trong Powerpoint 2010, để thoát file hiện hành, ta làm thế nào?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:17',
            ),
            243 => 
            array (
                'QuestionID' => 244,
                'QuestionContent' => 'Trong Powerpoint 2010, thao tác File/Close dùng để làm gì?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:17',
            ),
            244 => 
            array (
                'QuestionID' => 245,
                'QuestionContent' => 'Trong Powerpoint 2010, có 3 file đang mở, thao tác chọn File/Close dùng để làm gì?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:17',
            ),
            245 => 
            array (
                'QuestionID' => 246,
            'QuestionContent' => 'Trong Powerpoint 2010, cách nào để tạo một bản trình bày (Presentation) mới?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:17',
            ),
            246 => 
            array (
                'QuestionID' => 247,
            'QuestionContent' => 'Trong Powerpoint 2010, thao tác nào sau đây để tạo mới 1 tập tin trình diễn theo mẫu giao diện (Themes) của chương trình?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:17',
            ),
            247 => 
            array (
                'QuestionID' => 248,
            'QuestionContent' => 'Trong Powerpoint 2010, thao tác nào sau đây để tạo mới 1 tập tin trình diễn theo mẫu (Sample templates) của chương trình?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:18',
            ),
            248 => 
            array (
                'QuestionID' => 249,
                'QuestionContent' => 'Trong Powerpoint 2010, chế độ hiển thị nào cho phép thực hiện sắp xếp lại các Slide?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:18',
            ),
            249 => 
            array (
                'QuestionID' => 250,
                'QuestionContent' => 'Trong Powerpoint 2010, để chuyển sang chế độ hiển thị đọc ta thực hiện?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:18',
            ),
            250 => 
            array (
                'QuestionID' => 251,
                'QuestionContent' => 'Trong Powerpoint, tổ hợp phím Shift + F9 được sử dụng để?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:18',
            ),
            251 => 
            array (
                'QuestionID' => 252,
                'QuestionContent' => 'Trong Powerpoint, tổ hợp phím Shift + Alt + F9 được sử dụng để?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:18',
            ),
            252 => 
            array (
                'QuestionID' => 253,
                'QuestionContent' => 'Trong PowerPoint 2010, thao tác nào sau đây dùng để bật, tắt khung lưới Gridlines?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:18',
            ),
            253 => 
            array (
                'QuestionID' => 254,
                'QuestionContent' => 'Trong Powerpoint 2010, để lưu file, ta làm thế nào?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:18',
            ),
            254 => 
            array (
                'QuestionID' => 255,
                'QuestionContent' => 'Trong Powerpoint 2010, thao tác File/Save dùng để làm gì?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:18',
            ),
            255 => 
            array (
                'QuestionID' => 256,
                'QuestionContent' => 'Trong Powerpoint 2010, thao tác Ctrl + S dùng để làm gì?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:18',
            ),
            256 => 
            array (
                'QuestionID' => 257,
                'QuestionContent' => 'Trong Powerpoint 2010, để chuyển tập tin trình diễn sang dạng video?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:18',
            ),
            257 => 
            array (
                'QuestionID' => 258,
                'QuestionContent' => 'Trong Powerpoint 2010, để đặt mật khẩu cho file hiện tại?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:18',
            ),
            258 => 
            array (
                'QuestionID' => 259,
                'QuestionContent' => 'Trong Powerpoint 2010, chọn phát biểu đúng?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:18',
            ),
            259 => 
            array (
                'QuestionID' => 260,
                'QuestionContent' => 'Trong PowerPoint 2010, thao tác nào sau đây để thiết lập thư mục lưu trữ mặc định?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-05-09 22:38:18',
            ),
        ));
        
        
    }
}