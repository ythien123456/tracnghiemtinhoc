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
                'QuestionContent' => 'Thiết bị nào sau đây dùng để kết nối mạng?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:13:29',
            ),
            1 => 
            array (
                'QuestionID' => 2,
                'QuestionContent' => 'Hệ thống nhớ của máy tính bao gồm:',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:14:37',
            ),
            2 => 
            array (
                'QuestionID' => 3,
                'QuestionContent' => 'Trong mạng máy tính, thuật ngữ Share có ý nghĩa gì?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:14:59',
            ),
            3 => 
            array (
                'QuestionID' => 4,
                'QuestionContent' => 'Bộ nhớ RAM và ROM là bộ nhớ gì?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:15:40',
            ),
            4 => 
            array (
                'QuestionID' => 5,
                'QuestionContent' => 'Các thiết bị nào thông dụng nhất hiện nay dùng để cung cấp dữ liệu cho máy xử lý?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:15:40',
            ),
            5 => 
            array (
                'QuestionID' => 6,
                'QuestionContent' => 'Khái niệm hệ điều hành là gì ?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:16:14',
            ),
            6 => 
            array (
                'QuestionID' => 7,
                'QuestionContent' => 'Cho biết cách xóa một tập tin hay thư mục mà không di chuyển vào Recycle Bin:?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:16:14',
            ),
            7 => 
            array (
                'QuestionID' => 8,
                'QuestionContent' => 'Danh sách các mục chọn trong thực đơn gọi là :',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:16:36',
            ),
            8 => 
            array (
                'QuestionID' => 9,
                'QuestionContent' => 'Công dụng của phím Print Screen là gì?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:16:36',
            ),
            9 => 
            array (
                'QuestionID' => 10,
            'QuestionContent' => 'Nếu bạn muốn làm cho cửa sổ nhỏ hơn (không kín màn hình), bạn nên sử dụng nút nào?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:17:02',
            ),
            10 => 
            array (
                'QuestionID' => 11,
                'QuestionContent' => 'Trong soạn thảo Word, công dụng của tổ hợp phím Ctrl – S là:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:17:25',
            ),
            11 => 
            array (
                'QuestionID' => 12,
                'QuestionContent' => 'Trong soạn thảo Word, để chèn các kí tự đặc biệt vào văn bản, ta thực hiện:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:17:25',
            ),
            12 => 
            array (
                'QuestionID' => 13,
            'QuestionContent' => 'Trong soạn thảo Word, để kết thúc 1 đoạn (Paragraph) và muốn sang 1 đoạn mới :',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:17:45',
            ),
            13 => 
            array (
                'QuestionID' => 14,
                'QuestionContent' => 'Trong soạn thảo Word, tổ hợp phím nào cho phép đưa con trỏ về cuối văn bản :',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:17:45',
            ),
            14 => 
            array (
                'QuestionID' => 15,
                'QuestionContent' => 'Trong soạn thảo Word, sử dụng phím nóng nào để chọn tất cả văn bản:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:18:07',
            ),
            15 => 
            array (
                'QuestionID' => 16,
                'QuestionContent' => 'Trong soạn thảo Word, để chọn một đoạn văn bản ta thực hiện:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:18:07',
            ),
            16 => 
            array (
                'QuestionID' => 17,
                'QuestionContent' => 'Trong soạn thảo Word, muốn đánh dấu lựa chọn một từ, ta thực hiện :',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:18:30',
            ),
            17 => 
            array (
                'QuestionID' => 18,
                'QuestionContent' => 'Trong soạn thảo Word, muốn tách một ô trong Table thành nhiều ô, ta thực hiện:',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:18:30',
            ),
            18 => 
            array (
                'QuestionID' => 19,
            'QuestionContent' => 'Trong soạn thảo Word, thao tác nào sau đây sẽ kích hoạt lệnh Paste (Chọn nhiều đáp án)',
                'ModuleID' => 4,
                'QuestionType' => 2,
                'DateCreated' => '2019-01-27 15:20:38',
            ),
            19 => 
            array (
                'QuestionID' => 20,
                'QuestionContent' => 'Phần mềm nào có thể soạn thảo văn bản với nội dung và định dạng như sau:<br>
<p>
” Công cha như núi Thái Sơn<br>
Nghĩa mẹ như nước trong nguồn chảy ra.<br>
Một lòng thờ mẹ kính cha,<br>
Cho tròn chữ hiếu mới là đạo con.”</p>',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:20:38',
            ),
            20 => 
            array (
                'QuestionID' => 21,
            'QuestionContent' => 'Trong bảng tính Excel, giá trị trả về của công thức =LEN(“TRUNG TAM TIN HOC”) là:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:21:01',
            ),
            21 => 
            array (
                'QuestionID' => 22,
            'QuestionContent' => 'Trong bảng tính Excel, cho các giá trị như sau: ô A4 = 4, ô A2 = 5, ô A3 = 6, ô A7 = 7 tại vị trí ô B2 lập công thức B2 = Sum(A4,A2,Count(A3,A4)) cho biết kết quả ô B2 sau khi Enter:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:21:01',
            ),
            22 => 
            array (
                'QuestionID' => 23,
            'QuestionContent' => 'Trong bảng tính Excel, ô A1 chứa nội dung “TTTH ĐHKHTN”. Khi thực hiện công thức = LEN(A1)
thì giá trị trả về kết quả:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:21:21',
            ),
            23 => 
            array (
                'QuestionID' => 24,
                'QuestionContent' => 'Trong bảng tính Excel, ô A1 chứa giá trị 7.5. Ta lập công thức tại ô B1 có nội dung như sau
=IF(A1>=5, “Trung Bình”, IF(A1>=7, “Khá”, IF(A1>=8, “Giỏi”, “Xuất sắc”))) khi đó kết quả nhận được là:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:21:21',
            ),
            24 => 
            array (
                'QuestionID' => 25,
                'QuestionContent' => 'Trong bảng tính Excel, hàm nào dùng để tìm kiếm:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:21:41',
            ),
            25 => 
            array (
                'QuestionID' => 26,
                'QuestionContent' => 'Trong bảng tính Excel, để lưu tập tin đang mở dưới một tên khác, ta chọn:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:21:41',
            ),
            26 => 
            array (
                'QuestionID' => 27,
            'QuestionContent' => 'Trong bảng tính Excel, hàm Today() trả về:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:22:08',
            ),
            27 => 
            array (
                'QuestionID' => 28,
                'QuestionContent' => 'Trong bảng tính Excel, các dạng địa chỉ sau đây, địa chỉ nào là địa chỉ tuyệt đối:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:22:08',
            ),
            28 => 
            array (
                'QuestionID' => 29,
                'QuestionContent' => 'Trong bảng tính Excel, Ô C2 chứa hạng của học sinh. Công thức nào tính học bổng theo điều kiện: Nếu xếp hạng từ hạng một đến hạng ba thì được học bổng là 200000, còn lại thì để trống',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:22:28',
            ),
            29 => 
            array (
                'QuestionID' => 30,
            'QuestionContent' => 'Trong bảng tính Excel, tại ô A2 có giá trị số 25; Tại ô B2 gõ vào công thức =SQRT(A2) thì nhận được kết quả:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:22:28',
            ),
            30 => 
            array (
                'QuestionID' => 31,
                'QuestionContent' => 'Trong Powerpoint để tạo mới 1 Slide ta sử dụng?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:22:48',
            ),
            31 => 
            array (
                'QuestionID' => 32,
                'QuestionContent' => 'Trong Powerpoint muốn đánh số trang cho từng Slide ta dùng lệnh nào sau đây:',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:22:48',
            ),
            32 => 
            array (
                'QuestionID' => 33,
                'QuestionContent' => 'Khi thiết kế các Slide, sử dụng Home -> Slides -> New Slide có ý nghĩa gì ?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:23:12',
            ),
            33 => 
            array (
                'QuestionID' => 34,
            'QuestionContent' => 'Để trình chiếu một Slide hiện hành, bạn sử dụng lựa chọn nào? (Chọn nhiều lựa chọn)',
                'ModuleID' => 6,
                'QuestionType' => 2,
                'DateCreated' => '2019-01-27 15:23:12',
            ),
            34 => 
            array (
                'QuestionID' => 35,
                'QuestionContent' => 'Để tạo hiệu ứng cho 1 Slide, bạn sử dụng lựa chọn nào?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:23:29',
            ),
            35 => 
            array (
                'QuestionID' => 36,
                'QuestionContent' => 'Khi thiết kế Slide với PowerPoint, muốn thay đổi mẫu nền thiết kế của Slide, ta thực hiện:',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:23:29',
            ),
            36 => 
            array (
                'QuestionID' => 37,
            'QuestionContent' => 'Chức năng công cụ nào sau đây trong nhóm dùng để xem trình chiếu slide đang hiển thị thiết kế (thanh công cụ zoom góc dưới bên phải của giao diện thiết kế):',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:23:43',
            ),
            37 => 
            array (
                'QuestionID' => 38,
                'QuestionContent' => 'Chức năng Animations/ Timing/ Delay dùng để:',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:23:43',
            ),
            38 => 
            array (
                'QuestionID' => 39,
                'QuestionContent' => 'Để vẽ đồ thị trong Slide ta chọn:',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:24:01',
            ),
            39 => 
            array (
                'QuestionID' => 40,
                'QuestionContent' => 'Để hủy bỏ thao tác vừa thực hiện ta nhấn tổ hợp phím:',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:24:01',
            ),
            40 => 
            array (
                'QuestionID' => 41,
                'QuestionContent' => 'Khi một dòng chủ đề trong thư ta nhận được bắt đầu bằng chữ RE:; thì thông thường thư là:',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:25:01',
            ),
            41 => 
            array (
                'QuestionID' => 42,
                'QuestionContent' => 'Website Yahoo.com hoặc gmail.com cho phép người sử dụng thực hiện',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:25:01',
            ),
            42 => 
            array (
                'QuestionID' => 43,
                'QuestionContent' => 'Chức năng Bookmark của trình duyệt web dùng để:',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:25:23',
            ),
            43 => 
            array (
                'QuestionID' => 44,
                'QuestionContent' => 'Nếu không kết nối được mạng, bạn vẫn có thể thực hiện được hoạt động nào sau đây:',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:25:23',
            ),
            44 => 
            array (
                'QuestionID' => 45,
                'QuestionContent' => 'Khi muốn tìm kiếm thông tin trên mạng Internet, chúng ta cần',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:25:57',
            ),
            45 => 
            array (
                'QuestionID' => 46,
                'QuestionContent' => 'Bộ nhớ truy nhập trực tiếp RAM được viết tắt từ, bạn sử dụng lựa chọn nào?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:25:57',
            ),
            46 => 
            array (
                'QuestionID' => 47,
                'QuestionContent' => 'Khả năng xử lý của máy tính phụ thuộc vào … ban sử dụng lựa chọn nào?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:26:12',
            ),
            47 => 
            array (
                'QuestionID' => 48,
                'QuestionContent' => 'Máy tính là gi?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:26:12',
            ),
            48 => 
            array (
                'QuestionID' => 49,
                'QuestionContent' => 'Trình tự xử lý thông tin của máy tính điện tử',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:26:27',
            ),
            49 => 
            array (
                'QuestionID' => 50,
                'QuestionContent' => 'Thiết bị xuất của máy tính gồm?',
                'ModuleID' => 1,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:26:27',
            ),
            50 => 
            array (
                'QuestionID' => 51,
                'QuestionContent' => 'Trong ứng dụng windows Explorer, để chọn nhiều tập tin hay thư mục không liên tục ta thực hiện thao tác kết hợp phím … với click chuột.',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:26:45',
            ),
            51 => 
            array (
                'QuestionID' => 52,
                'QuestionContent' => 'Phím tắt để sao chép một đối tượng vào ClipBoard là:',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:26:45',
            ),
            52 => 
            array (
                'QuestionID' => 53,
                'QuestionContent' => 'Hộp điều khiển việc phóng to, thu nhỏ, đóng cửa sổ gọi là:',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:27:03',
            ),
            53 => 
            array (
                'QuestionID' => 54,
                'QuestionContent' => 'Để đảm bảo an toàn dữ liệu ta chọn cách nào?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:27:03',
            ),
            54 => 
            array (
                'QuestionID' => 55,
                'QuestionContent' => 'Trong hệ điều hành windows chức năng Disk Defragment gọi là?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:27:31',
            ),
            55 => 
            array (
                'QuestionID' => 56,
                'QuestionContent' => 'Trong soạn thảo word, công dụng của tổ hợp phím Ctrl + O dùng để',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:27:31',
            ),
            56 => 
            array (
                'QuestionID' => 57,
            'QuestionContent' => 'Khi làm việc với văn bản word, để bật chế độ nhập ký tự Subscript khi tạo ký tự hóa học H2O. Ta sử dụng chức năng nào: (Có thể chọn nhiều câu đúng).',
                'ModuleID' => 4,
                'QuestionType' => 2,
                'DateCreated' => '2019-01-27 15:28:01',
            ),
            57 => 
            array (
                'QuestionID' => 58,
                'QuestionContent' => 'Trong word, biểu tượng cây chổi có chức năng gì?',
                'ModuleID' => 4,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:28:01',
            ),
            58 => 
            array (
                'QuestionID' => 59,
                'QuestionContent' => 'Người đọc biết tập tin đang mở là phiên bản cuối cùng và chỉ cho phép đọc, bạn chọn?',
                'ModuleID' => 2,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:28:39',
            ),
            59 => 
            array (
                'QuestionID' => 60,
            'QuestionContent' => 'Thuộc tính phần mềm microsoft word 2010 có phần mở rộng là gì? ( Cho phép chọn nhiều)',
                'ModuleID' => 4,
                'QuestionType' => 2,
                'DateCreated' => '2019-01-27 15:28:39',
            ),
            60 => 
            array (
                'QuestionID' => 61,
                'QuestionContent' => 'Câu nào sau đây sai khi nhập dữ liệu vào bảng tính Excel thì:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:29:00',
            ),
            61 => 
            array (
                'QuestionID' => 62,
            'QuestionContent' => 'Biểu thức sau = AND(5>4,6<9,2<1,10>7,OR(2<1,3>2))',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:29:00',
            ),
            62 => 
            array (
                'QuestionID' => 63,
                'QuestionContent' => 'Địa chỉ B$3 là địa chỉ:',
                'ModuleID' => 5,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:29:19',
            ),
            63 => 
            array (
                'QuestionID' => 64,
                'QuestionContent' => 'Trong powerpoint in ấn ta sử dụng chức năng',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:29:19',
            ),
            64 => 
            array (
                'QuestionID' => 65,
                'QuestionContent' => 'Để tạo một slide chủ chứa các định dạng chung của toàn bộ các slide trong bài trình diễn. Để thực hiện điều này người dùng phải chọn:',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:29:39',
            ),
            65 => 
            array (
                'QuestionID' => 66,
                'QuestionContent' => 'Trong ứng dụng PowerPoint chức năng hyperlink dùng để tạo liên kết',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:29:39',
            ),
            66 => 
            array (
                'QuestionID' => 67,
                'QuestionContent' => 'Trong PowerPoint 2010 muốn chèn một đoạn nhạc vào Slide, ta dùng lệnh nào sau đây?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:30:00',
            ),
            67 => 
            array (
                'QuestionID' => 68,
                'QuestionContent' => 'Tại một slide trong powerpoint ta dùng tổ hợp nào sau đây để xóa slide đó?',
                'ModuleID' => 6,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:30:00',
            ),
            68 => 
            array (
                'QuestionID' => 69,
                'QuestionContent' => 'Hai người chat với nhau qua mạng Yahoo Messenger trong cùng một phòng nét?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:30:29',
            ),
            69 => 
            array (
                'QuestionID' => 70,
                'QuestionContent' => 'Tên miền trong địa chỉ website có .edu cho biết Website đó thuộc về?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:30:29',
            ),
            70 => 
            array (
                'QuestionID' => 71,
                'QuestionContent' => 'Website là gì?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:30:55',
            ),
            71 => 
            array (
                'QuestionID' => 72,
                'QuestionContent' => 'Phần mềm nào sau đây không phải trình duyệt WEB?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:30:55',
            ),
            72 => 
            array (
                'QuestionID' => 73,
                'QuestionContent' => 'Dịch vụ lưu trữ đám mây của Microsoft là gì?',
                'ModuleID' => 3,
                'QuestionType' => 1,
                'DateCreated' => '2019-01-27 15:31:06',
            ),
        ));
        
        
    }
}