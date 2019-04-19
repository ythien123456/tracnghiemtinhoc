<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('answers')->delete();
        
        \DB::table('answers')->insert(array (
            0 => 
            array (
                'AnswerID' => 1,
                'QuestionID' => 1,
                'A' => 'Ram',
                'B' => 'Rom',
                'C' => 'Router',
                'D' => 'CPU',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
            1 => 
            array (
                'AnswerID' => 2,
                'QuestionID' => 2,
                'A' => 'Bộ nhớ trong, bộ nhớ ngoài',
                'B' => 'Cache, Bộ nhớ ngoài',
                'C' => 'Bộ nhớ ngoài, ROM',
                'D' => 'Đĩa quang, bộ nhớ trong',
                'CorrectAnswers' => 'A',
                'AnswerExplain' => 'Không có',
            ),
            2 => 
            array (
                'AnswerID' => 3,
                'QuestionID' => 3,
                'A' => 'Chia sẻ tài nguyên',
                'B' => 'Nhãn hiệu của một thiết bị kết nối mạng',
                'C' => 'Thực hiện lệnh in trong mạng cục bộ',
                'D' => 'Một phần mềm hỗ trợ sử dụng mạng cục bộ',
                'CorrectAnswers' => 'A',
                'AnswerExplain' => 'Không có',
            ),
            3 => 
            array (
                'AnswerID' => 4,
                'QuestionID' => 4,
                'A' => 'Primary memory',
                'B' => 'Receive memory',
                'C' => 'Secondary memory',
                'D' => 'Random access memory',
                'CorrectAnswers' => 'A',
                'AnswerExplain' => 'Không có',
            ),
            4 => 
            array (
                'AnswerID' => 5,
                'QuestionID' => 5,
            'A' => 'Bàn phím (Keyboard), Chuột (Mouse), Máy in (Printer)',
            'B' => 'Máy quét ảnh (Scanner)',
            'C' => 'Bàn phím (Keyboard), Chuột (Mouse) và Máy quét ảnh (Scanner)',
            'D' => 'Máy quét ảnh (Scaner), Chuột (Mouse)',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
            5 => 
            array (
                'AnswerID' => 6,
                'QuestionID' => 6,
                'A' => 'Cung cấp và xử lý các phần cứng và phần mềm',
                'B' => 'Nghiên cứu phương pháp, kỹ thuật xử lý thông tin bằng máy tính điện tử',
                'C' => 'Nghiên cứu về công nghệ phần cứng và phần mềm',
                'D' => 'Là một phần mềm chạy trên máy tính, dùng để điều hành, quản lý các thiết bị phần cứng và các tài ngu',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            6 => 
            array (
                'AnswerID' => 7,
                'QuestionID' => 7,
                'A' => 'Chọn thư mục hay tâp tin cần xóa -> Delete',
                'B' => 'Chọn thư mục hay tâp tin cần xóa -> Ctrl + Delete',
                'C' => 'Chọn thư mục hay tâp tin cần xóa -> Alt + Delete',
                'D' => 'Chọn thư mục hay tâp tin cần xóa -> Shift + Delete',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            7 => 
            array (
                'AnswerID' => 8,
                'QuestionID' => 8,
                'A' => 'Menu pad',
                'B' => 'Menu options',
                'C' => 'Menu bar',
                'D' => 'Tất cả đều sai',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
            8 => 
            array (
                'AnswerID' => 9,
                'QuestionID' => 9,
                'A' => 'In màn hình hiện hành ra máy in',
                'B' => 'Không có công dụng gì khi sử dụng 1 mình nó.',
                'C' => 'In văn bản hiện hành ra máy in',
                'D' => 'Chụp màn hình hiện hành',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            9 => 
            array (
                'AnswerID' => 10,
                'QuestionID' => 10,
                'A' => 'Maximum',
                'B' => 'Minimum',
                'C' => 'Restore down',
                'D' => 'Close',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
            10 => 
            array (
                'AnswerID' => 11,
                'QuestionID' => 11,
                'A' => 'Tạo một văn bản mới',
                'B' => 'Chức năng thay thế nội dung trong soạn thảo',
                'C' => 'Định dạng chữ hoa',
                'D' => 'Lưu nội dung tập tin văn bản vào ổ đĩa',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            11 => 
            array (
                'AnswerID' => 12,
                'QuestionID' => 12,
                'A' => 'View – Symbol',
                'B' => 'Format – Symbol',
                'C' => 'Tools – Symbol',
                'D' => 'Insert – Symbol',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            12 => 
            array (
                'AnswerID' => 13,
                'QuestionID' => 13,
                'A' => 'Bấm tổ hợp phím Ctrl – Enter',
                'B' => 'Bấm phím Enter',
                'C' => 'Bấm tổ hợp phím Shift – Enter',
                'D' => 'Word tự động, không cần bấm phím',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            13 => 
            array (
                'AnswerID' => 14,
                'QuestionID' => 14,
                'A' => 'Shift + End',
                'B' => 'Alt + End',
                'C' => 'Ctrl + End',
                'D' => 'Ctrl + Alt + End',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
            14 => 
            array (
                'AnswerID' => 15,
                'QuestionID' => 15,
                'A' => 'Alt + A',
                'B' => 'Ctrl + A',
                'C' => 'Ctrl + Shift + A',
                'D' => 'Câu 1 và 2.',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            15 => 
            array (
                'AnswerID' => 16,
                'QuestionID' => 16,
                'A' => 'Click 1 lần trên đoạn',
                'B' => 'Click 2 lần trên đoạn',
                'C' => 'Click 3 lần trên đoạn',
                'D' => 'Click 4 lần trên đoạn.',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
            16 => 
            array (
                'AnswerID' => 17,
                'QuestionID' => 17,
                'A' => 'Nháy đúp chuột vào từ cần chọn',
                'B' => 'Bấm tổ hợp phím Ctrl – C',
                'C' => 'Nháy chuột vào từ cần chọn',
                'D' => 'Bấm phím Enter',
                'CorrectAnswers' => 'A',
                'AnswerExplain' => 'Không có',
            ),
            17 => 
            array (
                'AnswerID' => 18,
                'QuestionID' => 18,
                'A' => 'Table – Merge Cells',
                'B' => 'Table – Split Cells',
                'C' => 'Tools – Split Cells',
                'D' => 'Table – Cells',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            18 => 
            array (
                'AnswerID' => 19,
                'QuestionID' => 19,
                'A' => 'Tại thẻ Home, nhóm Clipboard, chọn Paste',
                'B' => 'Bấm tổ hợp phím Ctrl + V.',
                'C' => 'Chọn vào mục trong Office Clipboar',
                'D' => 'Tất cả đều đúng',
                'CorrectAnswers' => 'A,B',
                'AnswerExplain' => 'Không có',
            ),
            19 => 
            array (
                'AnswerID' => 20,
                'QuestionID' => 20,
                'A' => 'Notepad',
                'B' => 'Microsoft Word',
                'C' => 'WordPad',
                'D' => 'Tất cả đều đúng',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            20 => 
            array (
                'AnswerID' => 21,
                'QuestionID' => 21,
                'A' => '15',
                'B' => '16',
                'C' => '17',
                'D' => '18',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
            21 => 
            array (
                'AnswerID' => 22,
                'QuestionID' => 22,
                'A' => '10',
                'B' => '9',
                'C' => '11',
                'D' => 'Lỗi',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
            22 => 
            array (
                'AnswerID' => 23,
                'QuestionID' => 23,
                'A' => '6',
                'B' => '11',
                'C' => '5',
                'D' => '0',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            23 => 
            array (
                'AnswerID' => 24,
                'QuestionID' => 24,
                'A' => 'Giỏi',
                'B' => 'Xuất sắc',
                'C' => 'Trung Bình',
                'D' => 'Khá',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
            24 => 
            array (
                'AnswerID' => 25,
                'QuestionID' => 25,
                'A' => 'Vlookup',
                'B' => 'IF',
                'C' => 'Left',
                'D' => 'Sum',
                'CorrectAnswers' => 'A',
                'AnswerExplain' => 'Không có',
            ),
            25 => 
            array (
                'AnswerID' => 26,
                'QuestionID' => 26,
                'A' => 'File / Save As',
                'B' => 'File / Save',
                'C' => 'File / New',
                'D' => 'Edit / Replace',
                'CorrectAnswers' => 'A',
                'AnswerExplain' => 'Không có',
            ),
            26 => 
            array (
                'AnswerID' => 27,
                'QuestionID' => 27,
                'A' => 'Số ngày trong tháng',
                'B' => 'Số tháng trong năm',
                'C' => 'Ngày hiện hành của hệ thống',
                'D' => 'Số giờ trong ngày',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
            27 => 
            array (
                'AnswerID' => 28,
                'QuestionID' => 28,
                'A' => 'B$1$$10$D',
                'B' => 'B$1',
                'C' => '$B1:$D10',
                'D' => '$B$1:$D$10',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            28 => 
            array (
                'AnswerID' => 29,
                'QuestionID' => 29,
            'A' => '=IF(C2>=3, 200000, 0)',
            'B' => '=IF(C2<=3, 200000, “”)',
            'C' => '=IF(C2<=3, 0, 200000)',
            'D' => '=IF(C2<3, 200000, “”)',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            29 => 
            array (
                'AnswerID' => 30,
                'QuestionID' => 30,
                'A' => '0',
                'B' => '5',
                'C' => '#VALUE!',
                'D' => '#NAME!',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            30 => 
            array (
                'AnswerID' => 31,
                'QuestionID' => 31,
                'A' => 'Home -> Slides -> New Slide',
                'B' => 'Insert -> New Slide',
                'C' => 'Design -> New Slide',
                'D' => 'View -> New Slide',
                'CorrectAnswers' => 'A',
                'AnswerExplain' => 'Không có',
            ),
            31 => 
            array (
                'AnswerID' => 32,
                'QuestionID' => 32,
                'A' => 'Insert\\ Bullets and Numbering',
                'B' => 'Insert \\ Text \\ Slide Number',
                'C' => 'Format \\ Bullets and Number.',
                'D' => 'Các câu trên đều sai',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            32 => 
            array (
                'AnswerID' => 33,
                'QuestionID' => 33,
                'A' => 'Chèn thêm một slide mới vào ngay trước slide hiện hành',
                'B' => 'Chèn thêm một slide mới vào ngay sau slide hiện hành',
                'C' => 'Chèn thêm một slide mới vào ngay trước slide đầu tiên',
                'D' => 'Chèn thêm một slide mới vào ngay sau slide cuối cùng',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            33 => 
            array (
                'AnswerID' => 34,
                'QuestionID' => 34,
                'A' => 'Nhấn tổ hợp phím Shift+F5',
                'B' => 'Nhấn tổ hợp phím Ctrl+Shift+F5',
                'C' => 'Slide Show -> Start Slide Show -> From Current Slide',
                'D' => 'Nhấn phím F5',
                'CorrectAnswers' => 'A,C',
                'AnswerExplain' => 'Không có',
            ),
            34 => 
            array (
                'AnswerID' => 35,
                'QuestionID' => 35,
                'A' => 'Animations -> Add Animation',
                'B' => 'Animations -> Animation',
                'C' => 'Transitions -> Effect Options',
                'D' => 'Transitions -> Transition to this Slide',
                'CorrectAnswers' => 'A',
                'AnswerExplain' => 'Không có',
            ),
            35 => 
            array (
                'AnswerID' => 36,
                'QuestionID' => 36,
                'A' => 'Design ->Themes …',
                'B' => 'Design ->Background…',
                'C' => 'Insert -> Slide Design …',
                'D' => 'Slide Show -> Themes…',
                'CorrectAnswers' => 'A',
                'AnswerExplain' => 'Không có',
            ),
            36 => 
            array (
                'AnswerID' => 37,
                'QuestionID' => 37,
                'A' => 'Normal',
                'B' => 'Slide Sorter',
                'C' => 'Slide show',
                'D' => 'Reading view',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            37 => 
            array (
                'AnswerID' => 38,
                'QuestionID' => 38,
                'A' => 'Thiết lập thời gian chờ trước khi slide được trình chiếu',
                'B' => 'Thiết lập thời gian chờ trước khi hiệu ứng bắt đầu',
                'C' => 'Thiết lập thời gian hoạt động cho tất cả các hiệu ứng',
                'D' => 'Tất cả đều đúng',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            38 => 
            array (
                'AnswerID' => 39,
                'QuestionID' => 39,
                'A' => 'File/ Chart',
                'B' => 'Insert/ Chart',
                'C' => 'View/ Chart',
                'D' => 'Design/ Chart',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            39 => 
            array (
                'AnswerID' => 40,
                'QuestionID' => 40,
                'A' => 'Ctrl + X',
                'B' => 'Ctrl + Z',
                'C' => 'Ctrl + C',
                'D' => 'Ctrl + V',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            40 => 
            array (
                'AnswerID' => 41,
                'QuestionID' => 41,
                'A' => 'Thư rác, thư quảng cáo',
                'B' => 'Thư mới',
                'C' => 'Thư của nhà cung cấp dịch vụ E-mail mà ta đang sử dụng',
                'D' => 'Thư trả lời cho thư mà ta đã gởi trước đó',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            41 => 
            array (
                'AnswerID' => 42,
                'QuestionID' => 42,
                'A' => 'Nhận thư',
                'B' => 'Gởi thư',
                'C' => 'Tạo hộp thư',
                'D' => '3 lựa chọn trên đúng',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            42 => 
            array (
                'AnswerID' => 43,
                'QuestionID' => 43,
                'A' => 'Lưu trang web về máy tính',
                'B' => 'Đánh dấu trang web trên trình duyệt',
                'C' => 'Đặt làm trang chủ',
                'D' => 'Tất cả đều đúng',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            43 => 
            array (
                'AnswerID' => 44,
                'QuestionID' => 44,
                'A' => 'Gửi email',
                'B' => 'Viết thư',
                'C' => 'Xem 1 trang web',
                'D' => 'In trên may in sử dụng chung cài đặt ở máy khác',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            44 => 
            array (
                'AnswerID' => 45,
                'QuestionID' => 45,
                'A' => 'Tìm kiếm trên các Websites tìm kiếm chuyên dụng',
                'B' => 'Tùy vào nội dung tìm kiếm mà kết nối đến các Websites cụ thể.',
                'C' => 'Tìm kiếm ở bất kỳ một Websites nào',
                'D' => 'Tìm trong các sách danh bạ internet',
                'CorrectAnswers' => 'A',
                'AnswerExplain' => 'Không có',
            ),
            45 => 
            array (
                'AnswerID' => 46,
                'QuestionID' => 46,
                'A' => 'Read Access Memory.',
                'B' => 'Random Access Memory.',
                'C' => 'Rewrite Access Memory.',
                'D' => 'Cả 3 câu đều đúng.',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            46 => 
            array (
                'AnswerID' => 47,
                'QuestionID' => 47,
                'A' => 'Tốc độ CPU, dung lượng bộ nhớ RAM, dung lượng và tốc độ ổ cứng.',
                'B' => 'Yếu tố đa nhiệm',
                'C' => 'Hiện tượng phân mảnh ổ đĩa.',
                'D' => 'Cả 3 phần trên đều đúng.',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            47 => 
            array (
                'AnswerID' => 48,
                'QuestionID' => 48,
                'A' => 'Là công cụ chỉ dùng để tính toán các phép tính thông thường.',
                'B' => 'Là công cụ cho phép xử lý thông tin một cách tự động.',
                'C' => 'Là công cụ cho phép xử lý thông tin một cách thủ công.',
                'D' => 'Là công cụ không dùng để tính toán.',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            48 => 
            array (
                'AnswerID' => 49,
                'QuestionID' => 49,
                'A' => 'Màn hình -> CPU -> Đĩa cứng',
                'B' => 'Đĩa cứng -> Màn hình -. CPU',
                'C' => 'Nhập thông tin -> Xử lý thông tin -> Xuất thông tin',
                'D' => 'Màn hình -> Máy in -> CPU',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
            49 => 
            array (
                'AnswerID' => 50,
                'QuestionID' => 50,
                'A' => 'Bàn phím, màn hình, chuột',
                'B' => 'Màn hình, máy in.',
                'C' => 'Chuột, màn hình, CPU',
                'D' => 'Bàn phím, màn hình, loa',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            50 => 
            array (
                'AnswerID' => 51,
                'QuestionID' => 51,
                'A' => 'Shift',
                'B' => 'Alt',
                'C' => 'Tab',
                'D' => 'Ctrl',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            51 => 
            array (
                'AnswerID' => 52,
                'QuestionID' => 52,
                'A' => 'Ctrl + X',
                'B' => 'Ctrl + C',
                'C' => 'Ctrl + V',
                'D' => 'Ctrl + Z5',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            52 => 
            array (
                'AnswerID' => 53,
                'QuestionID' => 53,
                'A' => 'Dialog box',
                'B' => 'Control box',
                'C' => 'List box',
                'D' => 'Text box',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            53 => 
            array (
                'AnswerID' => 54,
                'QuestionID' => 54,
                'A' => 'Đặt thuộc tính hidden.',
                'B' => 'Copy nhiều nơi trên ổ đĩa máy tính',
                'C' => 'Đặt thuộc tính Read only',
                'D' => 'Sao lưu dự phòng',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            54 => 
            array (
                'AnswerID' => 55,
                'QuestionID' => 55,
                'A' => 'Chống phân mảnh ổ cứng',
                'B' => 'Làm giảm dung lượng ổ cứng',
                'C' => 'Sao lưu dữ liệu ổ cứng',
                'D' => 'Lau chùi tập tin rác ổ cứng',
                'CorrectAnswers' => 'A',
                'AnswerExplain' => 'Không có',
            ),
            55 => 
            array (
                'AnswerID' => 56,
                'QuestionID' => 56,
                'A' => 'Tạo một văn bản mới',
                'B' => 'Đóng văn bản đang làm việc',
                'C' => 'Mở 1 văn bản đã có trên máy tính',
                'D' => 'Lưu văn bản đang làm việc',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
            56 => 
            array (
                'AnswerID' => 57,
                'QuestionID' => 57,
                'A' => 'Nhấn tổ hợp phím Ctrl + =',
                'B' => 'Nhấn tổ hợp phím Ctrl + Shift + +',
                'C' => 'Click chọn biểu tượng Superscipt trong nhóm Font',
                'D' => 'Click chọn biểu tượng Subscript trong nhóm Font',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            57 => 
            array (
                'AnswerID' => 58,
                'QuestionID' => 58,
                'A' => 'Sao chép nội dung văn bản',
                'B' => 'Canh lề văn bản',
                'C' => 'Sao chép định dạng',
                'D' => 'Mở văn bản đã có',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
            58 => 
            array (
                'AnswerID' => 59,
                'QuestionID' => 59,
                'A' => 'File -> info -> Protect Document -> Restrict Editing',
            'B' => 'Review ->Restrict Editing -> Editing restrictions -> No changes (Read only)',
                'C' => 'File -> info -> Protect Document -> Mark as Final',
                'D' => 'File -> info -> Protect Document -> Encrypt as Password',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            59 => 
            array (
                'AnswerID' => 60,
                'QuestionID' => 60,
                'A' => '.doc',
                'B' => '.docx',
                'C' => '.dot',
                'D' => '.txt',
                'CorrectAnswers' => 'B,C',
                'AnswerExplain' => 'Không có',
            ),
            60 => 
            array (
                'AnswerID' => 61,
                'QuestionID' => 61,
                'A' => 'Dữ liệu kiểu số sẽ mặc nhiên canh thẳng lề trái',
                'B' => 'Dữ liệu kiểu ký tự sẽ mặc nhiên canh thẳng lề trái',
                'C' => 'Dữ liệu kiểu thời gian sẽ mặc nhiên canh thẳng lề phải',
                'D' => 'Dữ liệu kiểu ngày tháng sẽ mặc nhiên canh thẳng lề phải.',
                'CorrectAnswers' => 'A',
                'AnswerExplain' => 'Không có',
            ),
            61 => 
            array (
                'AnswerID' => 62,
                'QuestionID' => 62,
                'A' => 'True',
                'B' => 'False',
                'C' => '#Name?',
                'D' => '#Value!',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            62 => 
            array (
                'AnswerID' => 63,
                'QuestionID' => 63,
                'A' => 'Tương đối',
                'B' => 'Tuyệt đối',
                'C' => 'Hỗn hợp',
                'D' => 'Biểu diễn sai',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
            63 => 
            array (
                'AnswerID' => 64,
                'QuestionID' => 64,
                'A' => 'Home -> Print',
                'B' => 'Insert -> Print',
                'C' => 'Design -> Print',
                'D' => 'File -> Print',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            64 => 
            array (
                'AnswerID' => 65,
                'QuestionID' => 65,
                'A' => 'View -> Master Slide',
                'B' => 'Insert -> Slide Master',
                'C' => 'View -> Slide Master',
                'D' => 'Insert -> Master Slide',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            65 => 
            array (
                'AnswerID' => 66,
                'QuestionID' => 66,
                'A' => 'Slide trong cùng 1 presentation',
                'B' => 'Slide không cùng 1 presentation',
                'C' => 'Địa chỉ email, trang web, tập tin.',
                'D' => 'Các lựa chọn trên đều đúng.',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            66 => 
            array (
                'AnswerID' => 67,
                'QuestionID' => 67,
                'A' => 'Insert -> Audio',
                'B' => 'Insert -> Component',
                'C' => 'Insert -> Diagram',
                'D' => 'Insert -> Comment',
                'CorrectAnswers' => 'A',
                'AnswerExplain' => 'Không có',
            ),
            67 => 
            array (
                'AnswerID' => 68,
                'QuestionID' => 68,
                'A' => ' ALT + I + D',
                'B' => 'ALT + E + F',
                'C' => 'ALT + E + D',
                'D' => 'ALT + W + P',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
            68 => 
            array (
                'AnswerID' => 69,
                'QuestionID' => 69,
                'A' => 'Dữ liệu truyền từ máy đang chat lên máy chủ phòng nét và quay về máy chat bên kia.',
                'B' => 'Dữ liệu đi trực tiếp giữa hai máy đang trong phòng chat.',
                'C' => 'Dữ liệu truyền về máy chủ Yahoo và quay về máy bên kia.',
                'D' => 'Dữ liệu truyền về máy chủ internet Việt Nam và quay về máy đang chat.',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
            69 => 
            array (
                'AnswerID' => 70,
                'QuestionID' => 70,
                'A' => 'Lĩnh vực chính phủ',
                'B' => 'Lĩnh vực giáo dục',
                'C' => 'Lĩnh vực cung cấp thông tin',
                'D' => 'Thuộc về các tổ chức khác',
                'CorrectAnswers' => 'B',
                'AnswerExplain' => 'Không có',
            ),
            70 => 
            array (
                'AnswerID' => 71,
                'QuestionID' => 71,
                'A' => 'Là một ngôn ngữ siêu văn bản.',
                'B' => 'Là hình thức trao đổi thông tin dưới dạng thư thông qua hệ thống mạng máy tính.',
                'C' => 'Là các file được tạo ra bởi Word, Excel, PowerPoint … rồi chuyển sang html.',
                'D' => 'Tất cả đều sai.',
                'CorrectAnswers' => 'A',
                'AnswerExplain' => 'Không có',
            ),
            71 => 
            array (
                'AnswerID' => 72,
                'QuestionID' => 72,
                'A' => 'Microsoft Internet Explorer',
                'B' => 'Mozilla Firefox',
                'C' => 'Netcape',
                'D' => 'Unikey',
                'CorrectAnswers' => 'D',
                'AnswerExplain' => 'Không có',
            ),
            72 => 
            array (
                'AnswerID' => 73,
                'QuestionID' => 73,
                'A' => 'Google Driver',
                'B' => 'Mediafire',
                'C' => 'OneDrive',
                'D' => 'Cả 3 câu hỏi trên đều đúng.',
                'CorrectAnswers' => 'C',
                'AnswerExplain' => 'Không có',
            ),
        ));
        
        
    }
}