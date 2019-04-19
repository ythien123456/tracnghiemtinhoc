<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'PostID' => 1,
                'AccountID' => 3,
                'ModuleID' => 4,
                'PostTitle' => '﻿Những thủ thuật Word hữu ích bạn không nên bỏ qua
',
            'PostContent' => '<p>Microsoft Word là công cụ soạn thảo nội dung văn bản quen thuộc hiện này. Để có thể thao tác nhanh hơn khi gõ nội dung hay xử lý văn bản, một số thủ thuật khá hữu ích với người dùng như <a title="Tổng hợp phím tắt thông dụng trong Microsoft Word" href="https://quantrimang.com/thao-tac-nhanh-trong-van-ban-voi-cac-phim-tat-thong-dung-18824">Phím tắt thông dụng trong Word</a>, <a title="Một số thủ thuật khi in văn bản trong MS Word" href="https://quantrimang.com/mot-so-thu-thuat-khi-in-van-ban-trong-ms-word-33270">thủ thuật khi in văn bản Word</a>,...mà Quản trị mạng đã từng giới thiệu tới bạn đọc</p> <p>Trong bài viết này, chúng tôi sẽ giới thiệu đến bạn thêm những thủ thuật Word, giúp công việc soạn thảo của chúng ta trở nên đơn giản hơn rất nhiều, đạt hiệu quả cao trong công việc.</p> <p><strong>Lưu ý</strong>, các thao tác trong bài dưới đây thực hiện với Microsoft Word 2007. Tùy theo phiên bản Word hiện tại bạn đang dùng mà có thể thực hiện hay không các thủ thuật dưới này.</p> <h2>1. Chuyển đổi nhanh đoạn chữ thường sang chữ viết hoa:</h2> <p>Nhiều người không chuyên sau khi gõ nội dung văn bản theo chữ viết thường, nhưng vì yêu cầu phải chuyển sang chữ viết hoa, sẽ xóa toàn bộ lại đoạn văn đó và bật phím Capslock để gõ lại. Một số thì lại bôi đen và chuyển sang font chữ Vn.TimeH, nhưng lại gặp phải tình trạng lỗi font chữ.</p> <p>Có cách nhanh hơn, đơn giản hơn rất nhiều để có thể chuyển từ chữ thường sang chữ hoa trên Word mà không phải thực hiện tác thao tác rườm ra bên trên. Bạn<strong> bôi đen đoạn văn bản cần chuyển sang chữ hoa và nhấn tổ hợp phím Shift + F3</strong>.</p> <p>Khi văn bản đang ở chữ thường bạn nhấn tổ hợp phím Shift + F3, văn bản sẽ chuyển sang chỉ viết hoa chữ cái đầu tiên.</p> <p style="text-align: center;"><img style="border: 1px solid black;" title="Chuyển đổi từ chữ thường sang chữ hoa " src="https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-viet-hoa.jpg" alt="Những thủ thuật Word " width="650" height="340"></p> <p>Chúng ta tiếp tục nhấn tổ hợp phím Shift + F3 sẽ chuyển viết hoa toàn bộ đoạn văn.</p> <p style="text-align: center;"><img style="border: 1px solid black;" title="Viết hoa toàn bộ nội dung văn bản " src="https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-cach-viet-hoa.jpg" alt="Những thủ thuật Word " width="650" height="340"></p> <h2>2. Dịch văn bản bằng Bing Translator:</h2> <p>Hiện nay, <strong>Word đã tích hợp sẵn bộ dịch tự động của Bing</strong> khi người dùng có nhu cầu muốn dịch một đoạn văn nào đó. Mặc dù công cụ này không có khả năng linh hoạt như trên Google Translate, hay nhiều công cụ khác. Tuy nhiên nếu nội dung văn bản ngắn và chúng ta muốn dịch nhanh thì có thể sử dụng tính năng này.</p> <h3>Bước 1:</h3> <p>Tại nội dung văn bản cần dịch, chúng ta nhấn thẻ <strong>Review</strong> trên thanh Riboon.</p> <p style="text-align: center;"><img style="border: 1px solid black;" title="Dịch nội dung văn bản " src="https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-dich-Review.jpg" alt="Những thủ thuật Word " width="650" height="340"></p> <h3>Bước 2:</h3> <p>Sau đó bạn chọn mục <strong>Translate</strong>.</p> <p style="text-align: center;"><img style="border: 1px solid black;" title="Translate " src="https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-dich-Translate.jpg" alt="Những thủ thuật Word " width="650" height="340"></p> <p>Nếu dùng Word 2013, nhấn <strong>Translate</strong> rồi chọn tiếp <strong>Translate Document</strong>.</p> <h3>Bước 3:</h3> <p>Ngay tại giao diện bên phải xuất hiện <strong>cột dịch văn bản</strong>. Tại đây, chúng ta có thể <strong>lựa chọn ngôn ngữ dịch cho văn bản</strong> tại mục From và To. Chẳng hạn tôi chọn dịch từ tiếng Việt sang tiếng Anh.</p> <p style="text-align: center;"><img style="border: 1px solid black;" title="Chọn ngôn ngữ dịch " src="https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-dich-ngon-ngu.jpg" alt="Những thủ thuật Word " width="650" height="340"></p> <h3>Bước 4:</h3> <p>Sau khi chọn xong ngôn ngữ, nhấn <strong>mũi tên màu xanh</strong> để tiến hành dịch. Ngay sau đó, Word sẽ có thông báo hỏi bạn có muốn tiếp tục công đoạn dịch khi dịch trên trang web không. Nhấn <strong>Yes</strong>.</p> <p style="text-align: center;"><img style="border: 1px solid black;" title="Dịch nội dung văn bản " src="https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-dich-dich.jpg" alt="Những thủ thuật Word " width="650" height="340"></p> <h3>Bước 5:</h3> <p>Chúng ta sẽ được đưa đến trang web dịch, kèm theo đó là <strong>nội dung văn bản sau khi được dịch sang ngôn ngữ tiếng Anh</strong>.</p> <p style="text-align: center;"><img style="border: 1px solid black;" title="Bản dịch trên Word " src="https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-dich-ban-dich.jpg" alt="Những thủ thuật Word " width="650" height="340"></p> <h2>3. Thêm nhanh ngày hoặc giờ hiện tại trong Word</h2> <p>Thao tác thêm ngày hoặc giờ hiện tại cũng có thể thực hiện trên Word nhanh chóng, ngoài việc bạn có thể<a title="Hướng dẫn cách chèn ngày hiện tại trong Excel" href="https://quantrimang.com/huong-dan-cach-chen-ngay-hien-tai-trong-excel-124195"> chèn ngày hiện tại trên Excel</a> mà chúng tôi đã giới thiệu trước đây.</p> <p>Để <strong>chèn ngày hiện tại vào văn bản</strong> của bạn, nhấn tổ hợp phím <strong>Shift + Alt + D</strong>.</p> <p style="text-align: center;"><img style="border: 1px solid black;" title="Chèn ngày hiện tại " src="https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-chen-ngay.jpg" alt="Những thủ thuật Word " width="650" height="340"></p> <p>Nếu muốn <strong>chèn giờ hiện tại</strong> thì thực hiện tổ hợp phím <strong>Shift + Alt + T</strong>.</p> <p style="text-align: center;"><img style="border: 1px solid black;" title="Chèn giờ hiện tại vào Word " src="https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-chen-gio.jpg" alt="Những thủ thuật Word " width="650" height="340"></p> <h2>4. Tính năng Screenshoot trên Word 2013:</h2> <p>Bình thường để chèn hình ảnh nào đó, hoặc chèn ảnh chụp màn hình, chúng ta vẫn thực hiện theo cách thủ công đó là Insert sau đó Picture để lấy ảnh có sẵn trong máy và chèn vào nội dung. Nếu ảnh chụp màn hình thì bạn phải thông qua thao tác save hình với công cụ chỉnh sửa ảnh có trên máy.</p> <p>Tuy nhiên, Word 2013 đã rút gọn thao tác này vói tính năng Screenshot. Nghĩa là là người dùng có thể lựa chọn các cửa sổ đang chạy trên Windows, rồi chèn vào nội dung văn bản.</p> <div class=\'adbox in-article\'><ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-format="fluid" data-ad-layout="in-article" data-ad-client="ca-pub-9275417305531302" data-ad-slot="2737970258"></ins><script> (adsbygoogle = window.adsbygoogle || []).push({});</script></div><h3>Bước 1:</h3> <p>Bạn nhấn chọn tab <strong>Insert</strong> rồi chọn <strong>Screenshoot</strong>.</p> <p style="text-align: center;"><img title="Tính năng Screenshoot Word 2013" src="https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-screenshoot.jpg" alt="Những thủ thuật Word " width="650" height="303"></p> <h3>Bước 2:</h3> <p>Ngay sau đó sẽ xuất hiện hình ảnh màn hình của các chương trình trên Windows. Nếu muốn chọn chèn ảnh chụp màn hình nào đó, chỉ cần click chọn. Ngay lập tức ảnh sẽ được chèn tại nội dung văn bản.</p> <p style="text-align: center;"><img title="Chèn ảnh chụp màn hình tại nội dung văn bản " src="https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-chen-anh.jpg" alt="Những thủ thuật Word " width="650" height="303"></p> <h2>5. Ẩn nội dung trong văn bản Word bí mật:</h2> <p>Nếu với Word bản cũ khi bạn muốn ẩn đoạn văn nào đó, thường sẽ biến thành font chữ màu trắng. Nhưng cách làm này sẽ dễ bị phát hiện, văn bản cũng xuất hiện khoảng trắng của đoạn văn được ẩn đi đó.</p> <p>Vậy thì để ẩn nội dung văn bản dễ dàng mà không bị phát hiện, bạn hãy thực hiện theo bước sau:</p> <h3>Bước 1:</h3> <p><strong>Bôi đen đoạn văn bản muốn ẩn</strong> và nhấn tổ hợp phím <strong>Ctrl + D</strong>. Sau đó xuất hiện giao diện <strong>cửa sổ Font</strong>. Bạn <strong>tích chọn mục Hidden</strong> và ấn <strong>OK</strong> để ẩn đoạn văn đó đi.</p> <p style="text-align: center;"><img style="border: 1px solid black;" title="Ẩn nội dung văn bản " src="https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-an-van-ban.jpg" alt="Những thủ thuật Word " width="550" height="475"></p> <h3>Bước 2:</h3> <p>Bạn thấy đấy nội dung văn bản đã được ẩn đi và không có bất cứ khoảng trắng dư thừa nào trong nội dung.</p> <p>Để <strong>hiển thị lại nội dung</strong> văn bản đó, nhấn tổ hợp phím <strong>Ctrl + Shift + 8</strong>. Văn bản bị ẩn vẫn xuất hiện tại vị trí cũ của nó.</p> <p style="text-align: center;"><img style="border: 1px solid black;" title="Hiện nội dung văn bản " src="https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-hien-chu.jpg" alt="Những thủ thuật Word " width="650" height="340"></p> <h2>6. Chỉnh sửa file PDF:</h2> <p>Trong Word 2013, chúng ta có thể mở file PDF bằng Word và sau đó chỉnh sửa như một văn bản Word bình thường. Việc này sẽ giúp bạn có thể chỉnh sửa nội dung, điều mà không thể thực hiện được ở phần mềm <a title="Cách cài đặt mật khẩu file PDF bằng Adobe Acrobat" href="https://quantrimang.com/huong-dan-cach-de-cai-mat-khau-cho-file-pdf-107157">xem file PDF bằng Adobe Acrobat Reader</a>.</p> <h2>7. Gõ văn bản ở vị trí bất kỳ trong trang:</h2> <p>Khá nhiều người muốn rời con trỏ đến vị trí nào trong văn bản thường phải nhấn liên tục phím cách. Nhưng cách đó đã quá xưa rồi. Chúng ta hoàn toàn có thể <strong>di chuyển con trỏ chuột đến bất cứ vị trí nào</strong> trong trang rồi gõ nội dung, chỉ bằng <strong>nhấp đúng chuột</strong> vào vị trí đó là xong. Word sẽ tự động thêm khoảng trắng cho chúng ta. </p> <p style="text-align: center;"><img style="border: 1px solid black;" title="Gõ văn bản tại vị trí bất kỳ " src="https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-vi-tri-go.jpg" alt="Những thủ thuật Word " width="650" height="340"></p> <h2>8. Kiểm tra tương thích ngược với các văn bản cũ:</h2> <p>Nếu người dùng muốn kiểm tra xem nội dung văn bản có bị lỗi font chữ hay không, hay có thể xem được với các phiên bản Word cũ hay không thì có thể làm theo đường dẫn: <strong>File &gt; Info &gt; Inspect Document &gt; Check Compatibility</strong>. Tính năng này chỉ có từ Word 2010 trở lên mà thôi.</p> <p style="text-align: center;"><img style="border: 1px solid black;" title="So sánh nội dung bản Word với phiên bản trước " src="https://st.quantrimang.com/photos/image/2016/07/14/thu-thuat-Word-so-sanh.jpg" alt="Những thủ thuật Word " width="550" height="464"></p> <p>Trên đây là 8 thủ thuật nhỏ giúp bạn có thể thao tác nhanh và hiệu quả hơn đối với nội dung văn bản Word. Một số tính năng có thể thực hiện với bản Word 2007, một số khác chỉ thực hiện với phiên bản từ Word 2010 trở đi.</p>',
                'PostSlug' => 'nhung-thu-thuat-word-huu-ich-ban-khong-nen-bo-qua',
                'Views' => 13,
                'Status' => 1,
                'PostDate' => '2019-01-27 17:19:18',
            ),
            1 => 
            array (
                'PostID' => 2,
                'AccountID' => 3,
                'ModuleID' => 5,
                'PostTitle' => '100 thủ thuật Excel cực kỳ hữu ích, bắt buộc phải nhớ
',
            'PostContent' => '<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 205);"><span style="font-size: 22px;">11. Thủ thuật excel &ndash; Tăng tốc nhập liệu gấp trăm lần</span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Chắc c&aacute;c bạn kh&ocirc;ng thể ngờ được c&oacute; một thủ thuật excel gi&uacute;p tăng tốc độ nhập liệu của c&aacute;c bạn l&ecirc;n h&agrave;ng chục, h&agrave;ng trăm,&nbsp;thậm ch&iacute; h&agrave;ng ngh&igrave;n lần nếu c&aacute;c bạn phải thường xuy&ecirc;n nhập liệu tr&ecirc;n excel với những nội dung d&agrave;i l&ecirc; th&ecirc; v&agrave; lặp đi lặp lại. Đ&oacute; ch&iacute;nh l&agrave; thủ thuật lợi dụng chức năng auto correct trong excel</span></span></span></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Một v&iacute; dụ rất đơn giản l&agrave; c&aacute;c bạn hay phải nhập cụm từ &ldquo;Cộng h&ograve;a x&atilde; hội chủ nghĩa Việt Nam&rdquo; hay &ldquo;Viện đ&agrave;o tạo kế to&aacute;n v&agrave; tin học Đức Minh&rdquo; chẳng hạn. Thay v&igrave; cứ phải nhập li&ecirc;n tục như thế, c&aacute;c bạn chỉ cần sử dụng chức năng g&otilde; tắt trong excel bằng một tổ hợp ph&iacute;m cực hay đ&oacute; l&agrave; Alt + T +A. Sau đ&oacute; nhập phần chữ muốn g&otilde; tắt v&agrave;o phần &ldquo;With&rdquo; v&agrave; chữ muốn thay thế v&agrave;o phần Replace. V&iacute; dụ: Ở phần replace c&aacute;c bạn nhập l&agrave; cvn, phần with c&aacute;c bạn nhập l&agrave; &ldquo;Cộng h&ograve;a x&atilde; hội chủ nghĩa Việt Nam&rdquo; chẳng hạn.</span></span></span></p>

<p style="line-height: 20.8px;">&nbsp;</p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-family:times new roman,times,serif;"><img alt="gõ tắt trong excel" src="http://ketoanducminh.edu.vn/images/news/files/100-thu-thuat-excel-go-tat-auto-correct-options.png" style="width: 444px; height: 502px;" /></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-family:times new roman,times,serif;"><em>g&otilde; tắt trong excel</em></span></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Từ đ&oacute; về sau c&aacute;c bạn chỉ việc g&otilde;<strong>&nbsp;cvn&nbsp;</strong>thay v&igrave; g&otilde; một cụm từ d&agrave;i l&agrave;&nbsp;<strong>Cộng h&ograve;a x&atilde; hội chủ nghĩa Việt Nam</strong></span></span></span></p>

<p style="line-height: 20.8px;">&nbsp;</p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 205);"><span style="font-size: 22px;"><span new="" times="">12. Thủ thuật excel - Xem thống k&ecirc; nhanh về tổng, mix, max,&hellip;</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Chắc c&oacute; lẽ rất nhiều người d&ugrave;ng excel đều biết về những&nbsp;<a href="http://ketoanducminh.edu.vn/tin-tuc/77/2129/12--Ham-Excel-Thong-Dung-Trong-Ke-Toan.html">h&agrave;m excel&nbsp;th&ocirc;ng dụng</a>&nbsp;về t&iacute;nh to&aacute;n thống k&ecirc; như sum để t&iacute;nh tổng, min max để t&iacute;nh gi&aacute; trị nhỏ nhất lớn&nbsp; nhất trong một v&ugrave;ng dữ liệu n&agrave;o đ&oacute;,&hellip;.B&acirc;y giờ thay v&igrave; phải d&ugrave;ng h&agrave;m, c&aacute;c bạn c&oacute; thể xem thống k&ecirc; nhanh về số liệu của một v&ugrave;ng dữ liệu n&agrave;o đ&oacute; bằng c&aacute;ch qu&eacute;t v&ugrave;ng dữ liệu v&agrave; xem ở dưới thanh trạng th&aacute;i &ldquo;Status bar&rdquo;, v&iacute; dụ như h&igrave;nh:</span></span></span></p>

<p style="line-height: 20.8px;">&nbsp;</p>

<p style="line-height: 20.8px;">&nbsp;</p>

<p align="center" style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><img alt="Thống kê nhanh trong excel" src="http://ketoanducminh.edu.vn/images/news/files/100-thu-thuat-excel-xem-thong-ke-nhanh.png" style="width: 456px; height: 365px;" /></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-family:times new roman,times,serif;"><em>Thống k&ecirc; nhanh trong excel</em></span></p>

<p style="line-height: 20.8px;">&nbsp;</p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 205);"><span style="font-size: 22px;"><span new="" times="">13. Thủ thuật excel &ndash; Gh&eacute;p nối dữ liệu với ph&iacute;m &amp;</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Để c&aacute;c bạn hiểu về thủ thuật excel rất cơ bản m&agrave; rất hữu dụng n&agrave;y, Viện đ&agrave;o tạo kế to&aacute;n, tin học Đức Minh đưa ra v&iacute; dụ c&aacute;c bạn c&oacute; 2 &ocirc;&nbsp; ri&ecirc;ng lẻ t&aacute;ch ra 2 phần đ&oacute; l&agrave; họ ri&ecirc;ng, t&ecirc;n ri&ecirc;ng, v&iacute; dụ &ocirc; A1 th&igrave; l&agrave; Đ&agrave;o Đăng, &ocirc; B1 th&igrave; l&agrave; Khoa, b&acirc;y giờ ở &ocirc; C1 c&aacute;c bạn muốn trả kết quả về họ v&agrave; t&ecirc;n đầy đủ l&agrave; Đ&agrave;o Đăng Khoa m&agrave; kh&ocirc;ng muốn phải tự nhập tay th&igrave; c&aacute;c bạn c&oacute; thể ứng dụng thủ thuật excel n&agrave;y bằng c&aacute;ch viết ở &ocirc; C1 l&agrave; : A1&amp;B1, hoặc c&oacute; thể th&ecirc;m khoảng trắng ở giữa cho đẹp: A1&amp;&ldquo; &rdquo;&amp;B1, kết quả trả về sẽ l&agrave;: Đ&agrave;o Đăng Khoa.</span></span></span></p>

<p style="line-height: 20.8px;">&nbsp;</p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 205);"><span style="font-size: 22px;"><span new="" times="">14. Thủ thuật excel - Đổi t&ecirc;n sheet bằng c&aacute;ch nh&aacute;y đ&uacute;p</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">C&oacute; một thủ thuật cực kỳ đơn giản trong excel m&agrave; rất nhiều người kh&ocirc;ng biết, đ&oacute; l&agrave; đổi t&ecirc;n một bảng t&iacute;nh (Sheet) trong excel chỉ với một c&uacute; nhấp chuột đ&uacute;p, thay v&igrave; chuột phải chọn rename hay l&agrave;m c&aacute;c thao t&aacute;c bất kỳ n&agrave;o kh&aacute;c.</span></span></span></p>

<p style="line-height: 20.8px; margin-left: 160px;"><span style="font-family:times new roman,times,serif;"><img alt="Đổi tên Sheet nhanh" src="http://ketoanducminh.edu.vn/images/news/files/100-thu-thuat-excel-doi-ten-sheet-nhanh.png" style="width: 411px; height: 24px;" /></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-family:times new roman,times,serif;"><em>Đổi t&ecirc;n Sheet nhanh</em></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 255);"><span style="font-size: 22px;"><span new="" times="">15. Thủ thuật excel &ndash; Lặp lại thao t&aacute;c Format Painter</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Đối với những người hay phải d&ugrave;ng tới c&aacute;i &ldquo;chổi qu&eacute;t sơn&rdquo; (Fomart Painter) trong excel th&igrave; đ&acirc;y l&agrave; một t&iacute;nh năng tuyệt hay trong excel, mọi việc bạn cần l&agrave;m đ&oacute; chỉ đơn giản l&agrave; thay v&igrave; chỉ click chuột một lần v&agrave;o c&aacute;i chổi đ&oacute; th&igrave; c&aacute;c bạn click đ&uacute;p chuột tr&aacute;i, sau đ&oacute; qu&eacute;t định dạng l&ecirc;n những &ocirc; hay những v&ugrave;ng dữ liệu c&aacute;c bạn muốn sao ch&eacute;p định dạng. C&aacute;c bạn thử ngay v&agrave; lu&ocirc;n nh&eacute;!</span></span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="font-size: 22px;"><span style="color: rgb(0, 0, 205);"><span new="" times="">16. Thủ thuật excel - Chuyển d&ograve;ng sang cột v&agrave; ngược lại</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Để c&aacute;c bạn hiểu r&otilde; thủ thuật n&agrave;y Viện đ&agrave;o tạo kế to&aacute;n, tin học&nbsp;Đức Minh c&oacute; một v&iacute; dụ cụ thể c&aacute;c bạn muốn chuyển một bảng dữ liệu như dưới đ&acirc;y từ cột th&agrave;nh d&ograve;ng chẳng hạn, c&aacute;c bạn chỉ việc copy v&agrave; chuột phải chọn paste special sau đ&oacute; chọn transpose l&agrave; xong.</span></span></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times=""><img alt="Chuyển dòng thành cột trong excel và ngược lại" src="http://ketoanducminh.edu.vn/images/news/files/100-thu-thuat-excel-chuyen-hang-thanh-cot-va-nguoi-lai.png" style="width: 666px; height: 209px;" /></span></span></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-family:times new roman,times,serif;"><em>Chuyển d&ograve;ng th&agrave;nh cột trong excel v&agrave; ngược lại</em></span></p>

<p style="line-height: 20.8px;">&nbsp;</p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 205);"><span style="font-size: 22px;"><span new="" times="">17. Thủ thuật excel - Ẩn tất cả c&aacute;c kiểu dữ liệu</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Trong đa số c&ocirc;ng việc m&agrave; phải quản l&yacute; dữ liệu bằng excel th&igrave; gần như vấn đề bảo mật được đưa l&ecirc;n h&agrave;ng đầu, đứng tr&ecirc;n tất cả c&aacute;c vấn đề kh&aacute;c. Về phần bảo mật v&agrave; ẩn tất cả c&aacute;c kiểu dữ liệu trong excel như &ocirc;, d&ograve;ng , cột, bảng t&iacute;nh, &hellip;. th&igrave; c&aacute;c bạn c&oacute; thể tham khảo tại s&ecirc; ri cực hay n&agrave;y của Tin học Đức Minh: Tất cả c&aacute;c kiểu&nbsp;<a href="http://%3E%3E%3E%3E%3E%3E%20http//ketoanducminh.edu.vn/tin-tuc/102/2694/Huong-dan-toan-bo-cac-kieu-an-du-lieu-trong-Excel-cuc-ky-huu-ich.html">ẩn dữ liệu trong Excel</a>&nbsp;tại đ&acirc;y:</span></span></span></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">&gt;&gt;&gt;&gt;&gt;&gt;&nbsp;</span></span><a href="http://%3E%3E%3E%3E%3E%3E%20http//ketoanducminh.edu.vn/tin-tuc/102/2694/Huong-dan-toan-bo-cac-kieu-an-du-lieu-trong-Excel-cuc-ky-huu-ich.html"><span style="font-size: 16px;"><span new="" times="">http://ketoanducminh.edu.vn/tin-tuc/102/2694/Huong-dan-toan-bo-cac-kieu-an-du-lieu-trong-Excel-cuc-ky-huu-ich.html</span></span></a></span></p>

<p style="line-height: 20.8px;">&nbsp;</p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 205);"><span style="font-size: 22px;"><span new="" times="">18. Thủ thuật excel &ndash; Nhập dữ liệu bắt đầu với số 0</span></span></span></span></strong></h2>

<p style="line-height: 20.8px; text-align: center;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times=""><strong>vấn đ&egrave; n&agrave;y thường c&aacute;c bạn l&agrave;m kế to&aacute;n hay kinh tế chung chung sẽ hay gặp phải vấn đề nhập c&aacute;c số h&oacute;a đơn kiểu 00000004 hay 00000&hellip;. g&igrave; g&igrave; đ&oacute;. Nếu bạn nhập b&igrave;nh thường th&igrave; excel sẽ chỉ hiện thị số b&igrave;nh thường như 4 5 hay 345345, chứ kh&ocirc;ng thể hiện một d&atilde;y số 0 đằng trước được. Để khắc phục vấn đề n&agrave;y, c&aacute;c bạn chỉ cần th&ecirc;m một dấu &rsquo; ở đằng trước, hoặc chuột phải v&agrave;o &ocirc; hay v&ugrave;ng dữ liệu đ&oacute; chọn format cells &ndash; custom &ndash; viết 8 số 0 v&agrave;o chẳng hạn :&nbsp;</strong></span></span><img alt="Nhập dữ liệu bắt đầu bằng số 0 trong excel" src="http://ketoanducminh.edu.vn/images/news/files/100-thu-thuat-excel-them-so-0-dang-truoc.png" style="width: 456px; height: 289px;" /></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-family:times new roman,times,serif;"><em>Nhập dữ liệu bắt đầu bằng số 0 trong excel</em></span></p>

<p style="line-height: 20.8px;">&nbsp;</p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 205);"><span style="font-size: 22px;"><span new="" times="">19. Chuyển đổi chữ hoa v&agrave; chữ thường</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Bạn c&oacute; thể chuyển đổi từ chữ thường th&agrave;nh chữ hoa bằng h&agrave;m =Upper( ) như trong v&iacute; dụ dưới đ&acirc;y:</span></span></span></p>

<p style="line-height: 20.8px; margin-left: 280px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times=""><img alt="Chuyển chữ thường thành chữ hoa trong excel" src="http://ketoanducminh.edu.vn/images/news/files/100-thu-thuat-excel-viet-hoa-trong-excel.png" style="width: 253px; height: 249px; float: left;" /></span></span></span></p>

<p style="line-height: 20.8px; text-align: center;">&nbsp;</p>

<p style="line-height: 20.8px; text-align: center;">&nbsp;</p>

<p style="line-height: 20.8px;">&nbsp;</p>

<p style="line-height: 20.8px;">&nbsp;</p>

<p style="line-height: 20.8px;">&nbsp;</p>

<p style="line-height: 20.8px;">&nbsp;</p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-family:times new roman,times,serif;"><em>Chuyển chữ thường th&agrave;nh chữ hoa trong excel</em></span></p>

<div style="line-height: 20.8px;">&nbsp;</div>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 205);"><span style="font-size: 22px;"><span new="" times="">20. Thủ thuật excel - C&aacute;ch tạo Drop-down list trong excel</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Trong qu&aacute; tr&igrave;nh l&agrave;m việc, kế to&aacute;n phải nhập rất nhiều dữ liệu, nhất l&agrave; những bạn l&agrave;m kho, khi nhập bảng k&ecirc; chi tiết b&aacute;n h&agrave;ng thường th&igrave; c&aacute;c bạn sẽ phải g&otilde; từng m&atilde; h&agrave;ng, như vậy rất mất thời gian, c&oacute; khi lại sai s&oacute;t nhiều. Ch&iacute;nh v&igrave; vậy trong khu&ocirc;n khổ b&agrave;i viết h&ocirc;m nay&nbsp; Đức Minh sẽ hướng dẫn c&aacute;c bạn&nbsp;<a href="http://ketoanducminh.edu.vn/tin-tuc/102/2715/Cach-tao-danh-sach-xo-xuong-Drop-down-list-de-chon-trong-excel-cung-Duc-Minh.html">c&aacute;ch tạo drop down list</a>&nbsp;- danh s&aacute;ch xổ xuống để chọn dữ liệu trong excel. Sẽ rất tiện, nhanh v&agrave; ch&iacute;nh x&aacute;c hơn. V&igrave; thủ thuật n&agrave;y kh&aacute; phức tạp n&ecirc;n Viện đ&agrave;o tạo kế to&aacute;n, tin học Đức Minh đ&atilde; viết th&agrave;nh một b&agrave;i ri&ecirc;ng tại đ&acirc;y:</span></span></span></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><a href="http://ketoanducminh.edu.vn/tin-tuc/102/2715/Cach-tao-danh-sach-xo-xuong-Drop-down-list-de-chon-trong-excel-cung-Duc-Minh.html"><span style="font-size: 16px;"><span new="" times=""><strong>http://ketoanducminh.edu.vn/tin-tuc/102/2715/Cach-tao-danh-sach-xo-xuong-Drop-down-list-de-chon-trong-excel-cung-Duc-Minh.html</strong></span></span></a></span></p>

<p style="line-height: 20.8px;">&nbsp;</p>

<p style="line-height: 20.8px;">&nbsp;</p>

<hr style="line-height: 20.8px;" />
<p style="line-height: 20.8px;">&nbsp;</p>

<p style="line-height: 20.8px;">&nbsp;</p>

<h2><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 255);"><span style="font-size: 28px;"><span new="" times=""><strong><a id="phan3" name="phan3"></a>Phần 3: C&aacute;c ph&iacute;m tắt thần kỳ trong excel</strong></span></span></span></span></h2>

<p>&nbsp;</p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times=""><strong>Những ph&iacute;m, tổ hợp ph&iacute;m tắt trong excel sẽ l&agrave; c&ocirc;ng cụ hữu hiệu để gi&uacute;p cho bạn tho&aacute;t khỏi t&igrave;nh trạng vừa d&ugrave;ng b&agrave;n ph&iacute;m vừa quơ tay vớ con chuột chỉ trỏ loạn xạ, sẽ gi&uacute;p tốc độ nhập liệu v&agrave; l&agrave;m việc của c&aacute;c bạn c&ugrave;ng excel tăng l&ecirc;n rất nhiều, v&agrave; sau đ&acirc;y l&agrave; những ph&iacute;m tắt hữu &iacute;ch nhất:</strong></span></span></span></p>

<p style="line-height: 20.8px;">&nbsp;</p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 255);"><span style="font-size: 22px;"><span new="" times="">21. Thủ thuật excel 3 &ndash; Tự động t&iacute;nh tổng kh&ocirc;ng cần d&ugrave;ng h&agrave;m với &ldquo;ALT + =&rdquo;</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Đa số người d&ugrave;ng Excel đều biết đến h&agrave;m t&iacute;nh tổng &ldquo;SUM&rdquo; d&ugrave;ng để t&iacute;nh tổng một v&ugrave;ng gi&aacute; trị n&agrave;o đ&oacute;, h&agrave;m n&agrave;y thực sự rất đơn giản. Nhưng kh&ocirc;ng phải ai cũng biết c&aacute;ch để d&ugrave;ng h&agrave;m n&agrave;y một c&aacute;ch nhanh nhất. Ch&uacute;ng ta thực sự kh&ocirc;ng cần phải l&uacute;c n&agrave;o cũng viết ra một c&uacute; ph&aacute;p đầy đủ: Sum(number1, number 2,....) m&agrave; chỉ cần &aacute;p dụng một trong hai c&aacute;ch sau đ&acirc;y</span></span></span></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">- D&ugrave;ng tổ hợp ph&iacute;m ALT v&agrave; ph&iacute;m = sau đ&oacute; nhấn Enter -&gt; chưa đến 1s l&agrave; xong</span></span></span></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">- Nhấn v&agrave;o n&uacute;t lệnh (command) biểu tượng tổng trong to&aacute;n học tr&ecirc;n thanh ribbon &ndash; thẻ Home</span></span></span></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">* Ch&uacute; &yacute; v&ugrave;ng dữ liệu t&iacute;nh tổng phải liền kề nhau, kh&ocirc;ng được t&aacute;ch rời</span></span></span></p>

<p style="line-height: 20.8px;">&nbsp;</p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">&nbsp;<img alt="tự động tính tổng excel" src="http://ketoanducminh.edu.vn/images/news/files/thu-thuat-excel-tu-dong-tinh-tong-autosum.png" style="width: 567px; height: 198px;" /></span></span></span></p>

<p style="line-height: 20.8px;">&nbsp;</p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 255);"><span style="font-size: 22px;"><span new="" times="">22. Thủ thuật excel P3 &ndash; Bật t&iacute;nh năng lọc Data Filter cực nhanh c&ugrave;ng &ldquo;Ctrl + Shift + L&rdquo;</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Như hiện tại c&ocirc;ng việc của t&aacute;c giả b&agrave;i viết n&agrave;y rất thường xuy&ecirc;n d&ugrave;ng tới chức năng lọc của Excel, nếu cứ phải vừa nhập dữ liệu vừa quơ quơ con chuột th&igrave; rất l&agrave; mệt. Nhưng thật may thay ch&uacute;ng ta c&oacute; thể bật t&iacute;nh năng lọc dữ liệu CỰC NHANH, chỉ cần KHOẢNG MỘT GI&Acirc;Y với c&ugrave;ng l&uacute;c 2 tổ hợp ph&iacute;m &ldquo;Ctrl + A &ldquo; (B&ocirc;i đen to&agrave;n bộ bảng), v&agrave; &ldquo;Ctrl + Shift + L&rdquo; (Bật chức năng lọc) . Ch&uacute; &yacute; l&agrave; bảng dữ liệu bạn muốn lọc phải bao gồm những &ocirc; dữ liệu liền kề hoặc c&oacute; sự li&ecirc;n kết chặt chẽ, kh&ocirc;ng rời rạc, như vậy th&igrave; bạn chỉ cần nhần v&agrave;o MỘT &Ocirc; BẤT KỲ TRONG BẢNG, sau đ&oacute; nhấn 2 tổ hợp ph&iacute;m kia l&agrave; xong.</span></span></span></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">*C&aacute;c bạn c&oacute; thể tắt chức năng lọc ở bất kỳ vị tr&iacute; n&agrave;o cũng với c&ugrave;ng tổ hợp ph&iacute;m tr&ecirc;n.</span></span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 255);"><span style="font-size: 22px;"><span new="" times="">23. Thủ thuật excel P3 &ndash; Hiển thị c&ocirc;ng thức cực nhanh với &ldquo;Ctrl + ~&rdquo;</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Những bạn n&agrave;o thường xuy&ecirc;n phải &ldquo;đ&aacute;nh vật&rdquo; với những c&ocirc;ng thức excel th&igrave; kh&ocirc;ng thể kh&ocirc;ng biết tổ hợp ph&iacute;m n&agrave;y. Thay v&igrave; phải v&agrave;o tab Formulas &ndash; Show Formulas th&igrave; c&aacute;c bạn chỉ cần nhấn tổ hợp ph&iacute;m &ldquo;Ctrl + ~&rdquo; l&agrave; xong. V&agrave; đ&acirc;y l&agrave; kết quả:</span></span></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-family:times new roman,times,serif;"><img alt="hiển thị công thức excel" src="http://ketoanducminh.edu.vn/images/news/files/thu-thuat-excel-an-hien-cong-thuc-excel.png" style="width: 567px; height: 377px;" /></span></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Nếu c&aacute;c bạn muốn ẩn c&ocirc;ng thức đi th&igrave; lại lặp lại tổ hợp ph&iacute;m CTR + ~ th&ocirc;i (ctrl + ` )</span></span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 255);"><span style="font-size: 22px;"><span new="" times="">24. Thủ thuật excel P3 &ndash; Di chuyển con trỏ nhanh với &ldquo;Ctrl + mũi t&ecirc;n&rdquo;</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Thủ thuật n&agrave;y sẽ rất hữu &iacute;ch khi c&aacute;c bạn phải thao t&aacute;c với một khối lượng dữ liệu rất lớn v&agrave; lằng nhằng. Thay v&igrave; cầm con chuột v&agrave; k&eacute;o chuột mỏi cả tay, hoa cả mắt th&igrave; c&aacute;c bạn chỉ cần d&ugrave;ng ph&iacute;m ctrl kết hợp với c&aacute;c ph&iacute;m mũi t&ecirc;n điều hướng l&ecirc;n xuống tr&aacute;i phải, v&iacute; dụ nhấn &ldquo;ctrl + ph&iacute;m mũi t&ecirc;n xuống&rdquo; th&igrave; con trỏ sẽ xuống tận cũng của v&ugrave;ng dữ liệu gần nhất, tương tự như thế với c&aacute;c v&ugrave;ng dữ liệu c&ograve;n lại.</span></span></span></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="color:#008000;"><span style="font-size:20px;"><span new="" times=""><strong>Vậy con trỏ của bạn sẽ di chuyển nhanh đến mức n&agrave;o khi bạn sử dụng c&aacute;c ph&iacute;m tắt tr&ecirc;n? H&atilde;y thử l&agrave;m một ph&eacute;p to&aacute;n nho nhỏ nh&eacute;:</strong></span></span></span></span></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 128, 0);"><span style="font-size: 16px;"><span new="" times="">Excel c&oacute; hơn 1 triệu d&ograve;ng (1.048.576 d&ograve;ng). &nbsp;Nếu bạn đặt con trỏ v&agrave;o A1 v&agrave; nhấn Control + ph&iacute;m mũi t&ecirc;n xuống, bạn sẽ vượt qua HƠN 1 TRIỆU D&Ograve;NG trong v&ograve;ng chưa đầy một gi&acirc;y. Nếu ch&uacute;ng ta c&oacute; 6 d&ograve;ng l&agrave; một inch, vậy:</span></span></span></span></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 128, 0);"><span style="font-size: 16px;"><span new="" times="">1.048.576 d&ograve;ng / 6 = 174.763 inch / 12 = 14.564 feet / 5280 = 2,76 dặm</span></span></span></span></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 128, 0);"><span style="font-size: 16px;"><span new="" times="">2.76 dặm trong 1 gi&acirc;y * 60 = 165,6 dặm một ph&uacute;t * 60 = 9.936 dặm một giờ.</span></span></span></span></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 128, 0);"><span style="font-size: 16px;"><span new="" times="">Kể từ khi con trỏ của bạn thực sự mất &Iacute;T HƠN MỘT GI&Acirc;Y để &ldquo;ĐI DU LỊCH&rdquo; hơn 1 TRIỆU D&Ograve;NG, ch&uacute;ng ta h&atilde;y gọi n&oacute; l&agrave; 10.000 DẶM/GIỜ (HƠN 16000 KM/H). Nếu so s&aacute;nh với phương tiện chở con người th&igrave; ch&uacute;ng ta c&oacute; X-15, hiện giữ kỉ lục thế giới về tốc độ bay nhanh nhất thế giới d&agrave;nh cho m&aacute;y bay c&oacute; người l&aacute;i, với tốc độ Mach 6,72, khoảng 7.274 km/h, chưa bằng một nữa tốc độ di chuyển con trỏ. Vậy bạn sẽ kh&ocirc;ng bao giờ để đ&aacute;nh bại &ldquo;con trỏ của bạn&rdquo; trong cuộc đua về tốc độ kể cả l&aacute;i m&aacute;y bay nhanh nhất thế giới đi nữa . Kh&ocirc;ng bao giờ!</span></span></span></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-family:times new roman,times,serif;"><img alt="" src="http://ketoanducminh.edu.vn/images/news/files/troll-face.png" style="width: 234px; height: 218px;" /></span></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">- Theo số liệu của Excel Jet -</span></span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 255);"><span style="font-size: 22px;"><span new="" times="">25. Thủ thuật excel P3 &ndash; B&ocirc;i đen một v&ugrave;ng dữ liệu liền kề với &ldquo;CTR + Shift + mũi t&ecirc;n&rdquo;</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Như thủ thuật tr&ecirc;n: điều hướng nhanh bằng tổ hợp ph&iacute;m Ctrl + c&aacute;c ph&iacute;m mũi t&ecirc;n l&ecirc;n xuống tr&aacute;i phải. Vậy n&acirc;ng cao hơn ta c&oacute; thể ứng dụng tổ hợp ph&iacute;m tr&ecirc;n để b&ocirc;i đen một v&ugrave;ng dữ liệu liền kề nhau B&Ecirc;N TR&Ecirc;N, DƯỚI, TR&Aacute;I, PHẢI&nbsp; của &ocirc; m&agrave; c&aacute;c bạn đang chọn. C&aacute;c bạn thử chọn một &ocirc; bất kỳ ở giữa bảng dữ liệu của c&aacute;c bạn sau đ&oacute; nhấn &ldquo;Ctrl + Shift + c&aacute;c ph&iacute;m mũi t&ecirc;n điều hướng&rdquo; xem điều g&igrave; xảy ra nh&eacute;!</span></span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 255);"><span style="font-size: 22px;"><span new="" times="">26. Thủ thuật excel P3 &ndash; Di chuyển giữa c&aacute;c Sheet bằng &ldquo;Crtl + Pg Up, Pg Dn&rdquo;</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">C&aacute;c bạn c&oacute; thể di chuyển nhanh giữ c&aacute;c sheet hiện c&oacute; bằng tổ hợp ph&iacute;m &ldquo;Ctrl +Pg Up&rdquo; (đi tới sheet b&ecirc;n tr&aacute;i sheet hiện tại), &ldquo;Ctrl + Pg Dn&rdquo; (đi tới sheet b&ecirc;n phải sheet hiện tại). Nếu file excel của bạn chỉ c&oacute; v&agrave;i Sheets th&igrave; những tổ hợp ph&iacute;m n&agrave;y thực sự qu&aacute; l&agrave; tuyệt vời.</span></span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 255);"><span style="font-size: 22px;"><span new="" times="">27. Thủ thuật excel P3 &ndash; Di chuyển giữa c&aacute;c Workbook bằng &ldquo;Crtl + Shift + Tab&rdquo;</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Nếu c&aacute;c bạn c&oacute; thể &ldquo;Di chuyển giữa c&aacute;c WorkSheet&rdquo; bằng &ldquo;Crtl + Pg Up, Pg Dn&rdquo;. Vậy c&aacute;c bạn cũng c&oacute; thể l&agrave;m điều tương tự với Workbook, thủ thuật n&agrave;y sẽ kh&aacute; l&agrave; hữu &iacute;ch với những người hay phải l&agrave;m việc đa t&aacute;c vụ, một l&uacute;c vừa bận tr&igrave;nh duyệt, vừa bật word, vừa bật 2, 3 file,workbook excel, vừa bật linh tinh g&igrave; g&igrave; đ&oacute; kh&aacute;c....C&aacute;c bạn thử mở một l&uacute;c nhiều thứ l&ecirc;n xong v&agrave;o một trong c&aacute;c workbook excel, nhấn &ldquo;Ctrl + Shift + Tab&rdquo; xem hiệu quả tuyệt với của n&oacute; nh&eacute;</span></span></span></p>

<h2 style="line-height: 20.8px;"><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 255);"><span style="font-size: 22px;"><span new="" times="">28. Thủ thuật excel P3 &ndash; Ẩn hiện thanh ribbon với &ldquo;Ctrl + F1&rdquo;</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Sẽ kh&ocirc;ng c&oacute; vấn đề g&igrave; nếu c&aacute;c bạn đang ngồi trước những c&aacute;i m&agrave;n h&igrave;nh m&aacute;y t&iacute;nh to đ&ugrave;ng cỡ mấy chục inch. Nhưng với những chiếc m&agrave;n h&igrave;nh m&aacute;y t&iacute;nh nhỏ nhỏ xinh xinh th&igrave; kh&ocirc;ng gian l&agrave;m việc Excel sẽ cần phải c&agrave;ng tho&aacute;ng đ&atilde;ng c&agrave;ng tốt. V&agrave; đ&oacute; ch&iacute;nh l&agrave; thời điểm tổ hợp ph&iacute;m &ldquo;Ctrl + F1&rdquo; thể hiện!</span></span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="font-size: 22px;"><span style="color: rgb(0, 0, 255);"><span new="" times="">29. Thủ thuật excel P3 &ndash; hiển thị Paste Special với &ldquo;Ctrl + Alt + V&rdquo;</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">D&acirc;n kế to&aacute;n chuy&ecirc;n d&ugrave;ng excel sẽ chẳng lạ g&igrave; t&iacute;nh năng Paste Special. Với tổ hợp ph&iacute;m &ldquo;Ctrl + Alt + V&rdquo; th&igrave; từ nay ch&uacute;ng ta kh&ocirc;ng phải click chuột phải sau đ&oacute; chọn Paste Special nữa. Thế l&agrave; bớt đi một, hai gi&acirc;y rồi!</span></span></span></p>

<h2 style="line-height: 20.8px;"><strong><span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 255);"><span style="font-size: 22px;"><span new="" times="">30. Thủ thuật excel P3 &ndash; Di chuyển tới &ocirc; A1 bằng tổ hợp ph&iacute;m &ldquo;Ctrl + Home&rdquo;</span></span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size: 16px;"><span new="" times="">Sẽ l&agrave; một cơn &aacute;c mộng đối với những ai phải l&agrave;m việc với MỘT BIỂN DỮ LIỆU trong excel trong khi kh&ocirc;ng biết những tổ hợp ph&iacute;m điều hướng nhanh, trong đ&oacute; c&oacute; tổ hợp ph&iacute;m &ldquo;Ctrl + Home&rdquo; n&agrave;y. C&aacute;c bạn đang ở &ocirc; A1000000 chẳng hạn. C&aacute;c bạn nghĩ sao nếu phải di chuyển tới &ocirc; A1 bằng c&aacute;ch d&ugrave;ng chuột để k&eacute;o k&eacute;o. Chắc l&ocirc;i k&eacute;o đến hết ng&agrave;y qu&aacute;. L&uacute;c đ&oacute; h&atilde;y thử nhấn &ldquo;Ctrl + Home&rdquo; v&agrave; tận hưởng thi&ecirc;n đường của tốc độ nh&eacute;!</span></span></span></p>

<p style="line-height: 20.8px;"><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">31. Thủ thuật excel P3 &ndash;&nbsp;</span> Di chuyển&nbsp;đến &ocirc; cuối c&ugrave;ng trong sheet với Ctrl + End</span></span></span></strong></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Đ&acirc;y cũng l&agrave; một ph&iacute;m tắt kh&aacute; hay, nhưng kh&ocirc;ng như &ldquo;&ocirc; tr&ecirc;n c&ugrave;ng&rdquo;, c&oacute; một điều đặc biệt l&agrave; trước khi sử dụng tổ hợp ph&iacute;m n&agrave;y c&aacute;c bạn phải hiểu &ldquo;&ocirc; cuối c&ugrave;ng&rdquo; l&agrave; c&aacute;i g&igrave; đ&atilde;,&nbsp; c&ograve;n kh&ocirc;ng th&igrave; đ&acirc;y l&agrave; một tổ hợp ph&iacute;m thực sự ... v&ocirc; dụng. Giả sử b&acirc;y giờ c&aacute;c bạn t&ograve; m&ograve; mở một file excel mới ho&agrave;n to&agrave;n trống dữ liệu l&ecirc;n v&agrave; nhấn thử tổ hợp ph&iacute;m n&agrave;y th&igrave; c&aacute;c bạn sẽ thấy n&oacute; thật sự ... v&ocirc; dụng tập 2. Vậy &ocirc; cuối c&ugrave;ng l&agrave; g&igrave;? Đ&oacute; ch&iacute;nh l&agrave; &ocirc; giao điểm của h&agrave;ng v&agrave; cột cuối c&ugrave;ng của excel c&oacute; chứa dữ liệu n&agrave;o đ&oacute;, c&oacute; thể hiểu mang m&aacute;ng l&agrave; cạnh dưới b&ecirc;n phải của &ldquo;h&igrave;nh chữ nhật dữ liệu&rdquo; của worksheet excel m&agrave; c&aacute;c bạn thao t&aacute;c. C&oacute; lẽ đọc đến đ&acirc;y c&aacute;c bạn đ&atilde; hiểu. H&atilde;y thử v&agrave; trải nghiệm nh&eacute;!</span></span></p>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">* Ch&uacute; &yacute; đ&acirc;y cũng l&agrave; c&aacute;ch để kiểm tra xem c&oacute; &ocirc; dữ liệu n&agrave;o thừa m&agrave; c&aacute;c bạn kh&ocirc;ng biết kh&ocirc;ng.</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">32. Thủ thuật excel P3 &ndash;&nbsp;</span> Hiển thị kết quả tiếp theo của việc t&igrave;m kiếm với Shift F4</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Đ&acirc;y l&agrave; một tổ hợp ph&iacute;m kh&aacute; hay theo t&aacute;c giả. V&iacute; dụ c&aacute;c bạn đang t&igrave;m một cụm từ &ldquo;thủ thuật excel&rdquo; ở trong bảng t&iacute;nh chẳng hạn. C&aacute;c bạn nhấn Ctrl + F sau đ&oacute; muốn t&igrave;m kiếm tiếp lại cứ phải giữ nguy&ecirc;n c&aacute;i bảng hiển thị chức năng t&igrave;m kiềm v&agrave; ấn find next, thật sự rất kh&oacute; chịu. V&agrave; tổ hợp ph&iacute;m tắt n&agrave;y ch&iacute;nh l&agrave; giải ph&aacute;p cho c&aacute;c bạn!</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">33. Thủ thuật excel P3 &ndash;&nbsp;</span>Go to special với Ctrl + G v&agrave; Alt + S</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Go to special l&agrave; một chức năng kh&aacute; đặc biệt trong excel, đ&uacute;ng như t&ecirc;n gọi &ldquo;Special&rdquo; của n&oacute;. Kh&ocirc;ng chỉ đơn giản l&agrave; đi đến (go to) &ocirc; A1 B1 hay A1000 n&agrave;o đ&oacute; m&agrave; c&aacute;c bạn c&ograve;n c&oacute; thể đi tới những &ocirc; trống, những c&ocirc;ng thức hiện c&oacute; v&agrave; c&ograve;n v&ocirc; số c&aacute;i hay kh&aacute;c đang chờ c&aacute;c bạn kh&aacute;m ph&aacute; với&nbsp; bộ 2 tổ hợp ph&iacute;m n&agrave;y</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">34. Thủ thuật excel P3 &ndash;&nbsp;</span> Tạo một d&ograve;ng mới trong excel với Alt + Enter</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Xuống một d&ograve;ng mới như trong word th&igrave; kh&aacute; đơn giản chỉ cần nhấn Enter l&agrave; xong. Nhưng với excel th&igrave; c&aacute;c bạn cần nhiều hơn thế. V&agrave; đ&oacute; l&agrave; l&uacute;c tổ hợp ph&iacute;m Alt + Enter thể hiện m&igrave;nh</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">35. Thủ thuật excel P3 &ndash;&nbsp;</span> Ch&egrave;n ng&agrave;y hiện tại với Ctrl + ;</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Thay v&igrave; phải nh&ograve;m xuống c&aacute;i đồng hồ b&ecirc;n dưới g&oacute;c tr&aacute;i m&agrave;n h&igrave;nh v&agrave; g&otilde; g&otilde; nhập nhập ng&agrave;y th&aacute;ng v&agrave;o một &ocirc; n&agrave;o đ&oacute; trong excel th&igrave; c&aacute;c bạn chỉ mất 1 gi&acirc;y với tổ hợp ph&iacute;m Ctrl + ; n&agrave;y, nhanh &ndash; gọn &ndash; lẹ.</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">36. Thủ thuật excel P3 &ndash;&nbsp;</span>Ch&egrave;n giờ hiện tại với Ctrl + Shift + :</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Tương tự như tổ hợp ph&iacute;m tr&ecirc;n, c&aacute;c bạn cũng chỉ cần mất chưa tới một gi&acirc;y để ch&egrave;n giờ ph&uacute;t hiện tại với tổ hợp ph&iacute;m Ctrl + Shift + : . Tổ hợp ph&iacute;m n&agrave;y sẽ rất hữu &iacute;ch đối với một số người hay phải nhập liệu về thời gian.</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">37. Thủ thuật excel P3 &ndash;&nbsp;</span> Qu&eacute;t c&ocirc;ng thức, sao ch&eacute;p dữ liệu xuống bằng Ctrl + D</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Đ&acirc;y cũng l&agrave; một tổ hợp ph&iacute;m cực kỳ hữu dụng nhất l&agrave; đối với d&acirc;n kế to&aacute;n, chắc c&aacute;c bạn sẽ chẳng lạ g&igrave;. Thay v&igrave; phải cầm chuột k&eacute;o c&ocirc;ng thức hay sao ch&eacute;p dữ liệu từ &ocirc; tr&ecirc;n xuống những &ocirc; b&ecirc;n dưới th&igrave; chỉ c&aacute;c bạn chỉ cần kết hợp Ctrl + D (C&oacute; thể hiểu l&agrave; Control &ndash; Down), với shift + mũi t&ecirc;n đi xuống hoặc Ctrl + Shift + mũi t&ecirc;n đi xuống l&agrave; xong.</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">38. Thủ thuật excel P3 &ndash;&nbsp;</span> Định dạng mọi thứ trong excel với Ctrl + 1</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">- Nếu kh&ocirc;ng biết đến chức năng Format cells th&igrave; sẽ l&agrave; một thiếu s&oacute;t rất lớn ngay cả đối với những người mới biết d&ugrave;ng excel. C&oacute; lẽ ch&uacute;ng ta đ&atilde; qu&aacute; quen với t&iacute;nh năng định dạng tổng thể gần như mọi thứ n&agrave;y. Nhưng kh&ocirc;ng hẳn ai cũng biết đến tổ hợp ph&iacute;m tắt của n&oacute; ch&iacute;nh l&agrave; &ldquo;Ctrl + 1&rdquo;, thay v&igrave; phải click chuột phải v&agrave;o &ocirc;/v&ugrave;ng cần định dạng --&gt; chọn formart cells.</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">39. Thủ thuật excel P3 &ndash;&nbsp;</span> C&aacute;c kiểu định dạng Formart Cells với Ctrl + Shift + ....</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Những tổ hợp ph&iacute;m tắt dưới đ&acirc;y sẽ rất hữu dụng cho c&aacute;c bạn hay l&agrave;m việc với nhiều kiểu dữ liệu kh&aacute;c nhau, cứ phải định dạng lại li&ecirc;n tục:</span></span></p>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">General (chung chung, tổng qu&aacute;t) = Control + Shift + ~<br />
Currency (tiền tệ) = Control + Shift + $<br />
Percentage (phần trăm) = Control + Shift + %<br />
Date (ng&agrave;y th&aacute;ng) = Control + Shift + #<br />
Time (thời gian) = Control + Shift + @<br />
Number (số) = Control + Shift +!</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">40. Thủ thuật excel P3 &ndash;&nbsp;</span>Lặp lại thao t&aacute;c c&ugrave;ng ph&iacute;m F4</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">F4 l&agrave; một ph&iacute;m tắt kh&aacute; l&agrave; hay gi&uacute;p bạn lặp lại 1 thao t&aacute;c định dạng c&aacute;c bạn vừa mới thực hiện. V&iacute; dụ trộn &ocirc;, t&ocirc; m&agrave;u v&agrave;ng cho chữ, ... , c&aacute;c bạn sẽ kh&ocirc;ng cần phải click v&agrave;o lệnh hay d&ugrave;ng tổ hợp ph&iacute;m n&agrave;o nữa m&agrave; chỉ cần nhấn 1 ph&iacute;m F4 l&agrave; xong</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">41. Thủ thuật excel P3 &ndash;&nbsp;</span> Ẩn cột (column) với Ctrl + )</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Để ẩn một hoặc một tập hợp c&aacute;c cột c&aacute;c bạn chỉ cần chọn những &ocirc; chứa trong những cột đ&oacute; bằng ph&iacute;m Shift hoặc d&ugrave;ng chuột, sau đ&oacute; nhấn &ldquo;Ctrl + )&rdquo; l&agrave; xong.</span></span></p>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">- Ph&iacute;m tắt hiển thị lại d&ograve;ng l&agrave; Ctrl + Shift + ). Nhưng&nbsp; tiếc l&agrave; ph&iacute;m tắt n&agrave;y kh&ocirc;ng phải bất kỳ phi&ecirc;n bản office n&agrave;o cũng x&agrave;i được. Trong trường hợp n&agrave;y c&aacute;c bạn c&oacute; thể x&agrave;i chuột phải &ndash; unhide hoặc n&uacute;t mở menu chuột phải tr&ecirc;n b&agrave;n ph&iacute;m + ph&iacute;m U</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">42. Thủ thuật excel P3 &ndash;&nbsp;</span>Ẩn v&agrave; hiển thị d&ograve;ng (row) với Ctrl + (</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Để ẩn một hoặc một tập hợp c&aacute;c d&ograve;ng c&aacute;c bạn chỉ cần chọn những &ocirc; chứa trong những d&ograve;ng đ&oacute; bằng ph&iacute;m Shift hoặc d&ugrave;ng chuột, sau đ&oacute; nhấn &ldquo;Ctrl + (&rdquo; l&agrave; xong.</span></span></p>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">- Ph&iacute;m tắt hiển thị lại d&ograve;ng l&agrave; &ldquo; Ctrl + Shift + ( &rdquo; . C&aacute;c bạn phải chọn những d&ograve;ng bao gồm những d&ograve;ng bị ẩn b&ecirc;n trong sau đ&oacute; mới nhấn tổ hợp ph&iacute;m n&agrave;y</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">43. Thủ thuật excel P3 &ndash;&nbsp;</span> Tạo một biểu đồ ở Sheet (bảng t&iacute;nh) mới với F11</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Tổ hợp ph&iacute;m n&agrave;y sẽ rất cần thiết đối với những ai hay phải l&agrave;m việc với biểu đồ. Chỉ đơn giản với một ph&iacute;m F11 sau khi đ&atilde; chọn v&ugrave;ng dữ liệu, c&aacute;c bạn đ&atilde; c&oacute; một biểu đồ ở một bảng t&iacute;nh mới đẹp như mơ.</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">44. Thủ thuật excel P3 &ndash;&nbsp;</span> Hiển thị trước khi in với Ctrl + F2</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Tổ hợp ph&iacute;m n&agrave;y sẽ rất hữu dụng với những người l&agrave;m văn ph&ograve;ng hay những người phải in t&agrave;i liệu h&agrave;ng ng&agrave;y, tổ hợp ph&iacute;m n&agrave;y cũng l&agrave; để mở chức năng &ldquo;xem trước khi in v&agrave; in nhanh trong c&aacute;c phi&ecirc;n bản office từ 2010 trở đi.</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">45. Thủ thuật excel P3 &ndash;&nbsp;</span> Lưu với t&ecirc;n kh&aacute;c c&ugrave;ng F12</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">C&oacute; lẽ ai d&ugrave;ng excel cũng sẽ biết tổ hợp ph&iacute;m lưu dữ liệu l&agrave; Ctrl&nbsp; + S. Nhưng kh&ocirc;ng phải ai cũng biết ph&iacute;m tắt F12 n&agrave;y. Nhanh v&agrave; gọn &ndash; h&atilde;y thử v&agrave; cảm nhận!</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">46. Thủ thuật excel P3 &ndash;&nbsp;</span>Bật t&iacute;nh năng gi&uacute;p đỡ của excel với F1</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">C&oacute; lẽ nhiều người sẽ thấy ph&iacute;m F1 n&agrave;y ... v&ocirc; dụng. Nhưng gượm đ&atilde;, với những bạn kh&aacute;, giỏi Tiếng Anh nhưng kiến thức về Excel lại hạn chế th&igrave; đ&acirc;y l&agrave; PH&Iacute;M TẮT V&Agrave;NG&nbsp; cho c&aacute;c bạn để t&igrave;m hiểu mọi thứ về excel &ldquo;chuẩn như L&ecirc; Duẩn&rdquo;, v&igrave; đ&acirc;y l&agrave; những thứ do ch&iacute;nh Microsoft viết ra chứ kh&ocirc;ng phải kiến thức, thủ thuật lượm lặt tr&ecirc;n internet</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="font-size:22px;"><span style="color:#0000FF;"><span new="" times="">47. Thủ thuật excel P3 &ndash;&nbsp;</span> Mở danh s&aacute;ch xổ xuống bằng Alt + mũi t&ecirc;n xuống</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Ph&iacute;iacute;m tắt n&agrave;y nghe c&oacute; vẻ kỳ quặc nhưng sẽ kh&ocirc;ng xa lạ với những bạn hay d&ugrave;ng chức năng lọc ho&agrave;n to&agrave;n bằng b&agrave;n ph&iacute;m (Ctrl + Shift + L). Sau khi bật lọc bằng b&agrave;n ph&iacute;m th&igrave; kh&ocirc;ng lẽ lại d&ugrave;ng chuột tiếp, kh&ocirc;ng cần, c&aacute;c bạn chỉ cần d&ugrave;ng ph&iacute;m Alt + ph&iacute;m mũi t&ecirc;n đi xuống th&ocirc;i.</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">48. Thủ thuật excel P3 &ndash;&nbsp;</span>Di chuyển m&agrave;n h&igrave;nh với Alt + Pg Dn, Alt + Pg Up</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Tương tự như l&ecirc;n xuống một m&agrave;n h&igrave;nh với 2 ph&iacute;m đơn giản l&agrave; Pg Dn v&agrave; Pg Up th&igrave; hai tổ hợp ph&iacute;m n&agrave;y lần lượt l&agrave; sang phải một m&agrave;n h&igrave;nh v&agrave; sang tr&aacute;i một m&agrave;n h&igrave;nh. Kết hợp cả 4 tổ hợp ph&iacute;m n&agrave;y sẽ gi&uacute;p &iacute;ch rất nhiều cho qu&aacute; tr&igrave;nh theo d&otilde;i dữ liệu excel của c&aacute;c bạn nếu c&aacute;c bạn hay phải l&agrave;m việc với những bảng dữ liệu lớn</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">49. Thủ thuật excel P3 &ndash;&nbsp;</span>Di chuyển tới &ocirc; đầu ti&ecirc;n của 1 d&ograve;ng bằng ph&iacute;m home</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Tr&aacute;i ngược với ph&iacute;m End, c&aacute;c bạn sẽ &iacute;t d&ugrave;ng tới ph&iacute;m n&agrave;y l&agrave; ph&iacute;m Home, ph&iacute;m home gi&uacute;p đưa con trỏ của c&aacute;c bạn nhanh ch&oacute;ng về &ocirc; đầu ti&ecirc;n của d&ograve;ng chứa &ocirc; c&aacute;c bạn đang chọn d&ugrave; c&aacute;c bạn đang ở bất kỳ đ&acirc;u.</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;"><span new="" times="">50. Thủ thuật excel P3 &ndash;&nbsp;</span>K&iacute;ch hoạt chế độ chọn dữ liệu với Shift + F8</span></span></span></strong></h2>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">C&aacute;c bạn c&oacute; thể hiểu t&aacute;c dụng của ph&iacute;m tắt n&agrave;y l&agrave; gi&uacute;p c&aacute;c bạn đỡ phải nhấn v&agrave; giữ ph&iacute;m Ctrl khi chọn c&aacute;c &ocirc;/v&ugrave;ng dữ liệu kh&ocirc;ng liền kề nhau. H&atilde;y tự trải nghiệm sự kh&aacute;c biệt v&agrave; nhận ra tiện &iacute;ch của n&oacute; nh&eacute;</span></span></p>

<p style="line-height: 20.8px;"><span style="font-family:times new roman,times,serif;"><span color:="" font-size:="" line-height:="" new="" times="">51. Thủ thuật excel P3 &ndash; B&ocirc;i đen, qu&eacute;t chọn với Shift + mũi t&ecirc;n 4 hướng</span></span></p>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Chắc ai cũng biết l&agrave; để chọn, b&ocirc;i đen &ocirc;, dữ liệu trong &ocirc; bằng chuột rồi nhưng kh&ocirc;ng phải ai cũng sẽ biết l&agrave; nếu chỉ đơn giản chọn dữ liệu trong &ocirc;, hoặc chọn những &ocirc; liền kề nhau theo c&aacute;c h&agrave;ng dọc, h&agrave;ng ngang th&igrave; ta chỉ cần nhấn giữ ph&iacute;m shift + bốn mũi t&ecirc;n chỉ bốn hướng.</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;">52. Thủ thuật excel P3 &ndash; Chọn đến cuối v&ugrave;ng dữ liệu liền kề với Ctrl + Shift + mũi t&ecirc;n</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Tương tự như thủ thuật tr&ecirc;n l&agrave; chọn những &ocirc; liền kề nhau, th&igrave; ở đ&acirc;y ta kết hợp với ph&iacute;m CTR. Kết quả của sự kết hợp n&agrave;y đ&oacute; l&agrave; ta sẽ c&oacute; thể b&ocirc;i đen một v&ugrave;ng dữ liệu LIỀN KỀ NHAU từ vị tr&iacute; bạn đặt con trỏ cho đến &ocirc; chứa dữ liệu cuối c&ugrave;ng của v&ugrave;ng đ&oacute; theo c&aacute;c hướng tr&aacute;i, phải, tr&ecirc;n dưới của cacsc ph&iacute;m mũi t&ecirc;n. Nghe c&oacute; vẻ kh&oacute; hiểu n&ecirc;n c&aacute;c bạn cần phải THỰC H&Agrave;NH NGAY&nbsp; để hiểu nh&eacute;.</span></span></p>

<p><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;">53. Thủ thuật excel P3 &ndash; Chọn dữ liệu l&ecirc;n, xuống một m&agrave;n h&igrave;nh với Shift + Pg Up</span></span></span></strong></p>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Theo &ocirc; c&aacute;c bạn đang chọn c&aacute;c bạn c&oacute; thể chọn l&ecirc;n ph&iacute;a tr&ecirc;n hoặc ph&iacute;a dưới &ocirc; đ&oacute; một b&agrave;n m&igrave;nh với tổ hợp ph&iacute;m Shif + Pg Up v&agrave; Shift Pg Dn. Kết hợp c&ugrave;ng c&aacute;c tổ hợp ph&iacute;m th&igrave; gần như c&aacute;c bạn sẽ kh&ocirc;ng cần d&ugrave;ng chuột để chọn &ocirc; nữa m&agrave; vẫn nhanh như thường</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;">53. Thủ thuật excel P3 &ndash; Chọn dữ liệu sang tr&aacute;i, phải một m&agrave;n h&igrave;nh với Alt + Shift + Pg Up, Pg Dn</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Tương tự như tổ hợp ph&iacute;m tr&ecirc;n, th&ecirc;m v&agrave;o ph&iacute;m Alt ở đằng trước l&agrave; c&aacute;c bạn c&oacute; thể chọn dữ liệu từ &ocirc; hiện tại cho đến hết m&agrave;n h&igrave;nh của &ocirc; đ&oacute; theo b&ecirc;n tr&aacute;i hay b&ecirc;n phải với&nbsp; Alt + Shift + Pg Up, Pg Dn, Alt + Shift + Pg Dn.</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;">54. Thủ thuật excel P3 &ndash; Mở rộng v&ugrave;ng chọn đến &ocirc; đầu ti&ecirc;n của h&agrave;ng với Shift + Home</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">T&iacute;nh từ &ocirc; m&agrave; c&aacute;c bạn đang chọn, c&aacute;c bạn c&oacute; thể chọn đến &Ocirc; ĐẦU TI&Ecirc;N CỦA H&Agrave;NG chỉ với&nbsp; tổ hợp ph&iacute;m đơn giản đ&oacute; l&agrave; Shift + Home. Tổ hợp ph&iacute;m n&agrave;y trong một số trường hợp sẽ gi&uacute;p tốc độ chọn dữ liệu bằng b&agrave;n ph&iacute;m của bạn nhanh hơn so với d&ugrave;ng chuột RẤT NHIỀU LẦN.</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;">55. Thủ thuật excel P3 - Mở rộng v&ugrave;ng chọn đến &ocirc; đầu ti&ecirc;n của Sheet với Ctrl + Shift + Home</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">T&iacute;nh từ &ocirc; m&agrave; c&aacute;c bạn đang chọn, c&aacute;c bạn c&oacute; thể chọn đến &Ocirc; ĐẦU TI&Ecirc;N CỦA Sheet chỉ với&nbsp; tổ hợp ph&iacute;m đơn giản đ&oacute; l&agrave; Ctrl + Shift + Home. Trong một số trường hợp c&aacute;c bạn sẽ kh&ocirc;ng ngờ tổ hợp ph&iacute;m n&agrave;y lại c&oacute; &iacute;ch đến thế.</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;">56. Thủ thuật excel P3 &ndash; Mở rộng v&ugrave;ng chọn đến &ocirc; cuối c&ugrave;ng c&oacute; dữ liệu với Ctrl + Shift + End</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Ri&ecirc;ng tổ hợp ph&iacute;m n&agrave;y thật sự t&aacute;c giả b&agrave;i viết cũng ... vừa mới biết. N&ecirc;n ngay lập tức phải vớ lấy c&aacute;i b&agrave;n ph&iacute;m v&agrave; chia sẻ ngay cho c&aacute;c bạn. V&igrave; đ&oacute; vẫn l&agrave; tổ hợp ph&iacute;m m&agrave; t&aacute;c giả trước đ&acirc;y vẫn nghĩ l&agrave; kh&ocirc;ng tồn tại, v&agrave; cũng lười kh&ocirc;ng th&egrave;m t&igrave;m hiểu. T&aacute;c dụng của tổ hợp ph&iacute;m n&agrave;y sẽ l&agrave; mở rộng v&ugrave;ng chọn của c&aacute;c bạn từ &ocirc; c&aacute;c bạn đang chọn cho đến &ocirc; cuối c&ugrave;ng t&iacute;nh theo &ldquo;g&oacute;c dưới c&ugrave;ng b&ecirc;n phải của h&igrave;nh chữ nhật dữ liệu bất kể c&oacute; liền kề nhau hay kh&ocirc;ng&rdquo;.&nbsp; T&aacute;c dụng của n&oacute; bao qu&aacute;t hơn mấy tổ hợp ph&iacute;m Ctr + Shift + l&ecirc;n xuống rất nhiều. C&aacute;c bạn cứ thử ứng dụng tổ hợp ph&iacute;m n&agrave;y c&ugrave;ng với c&aacute;c tổ hợp ph&iacute;m tr&ecirc;n khi chọn c&aacute;c v&ugrave;ng dữ liệu trong excel xem c&oacute; kh&aacute;c biệt so với khi d&ugrave;ng chuột k&eacute;o k&eacute;o l&ocirc;i l&ocirc;i kh&ocirc;ng nh&eacute;.</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;">57. Thủ thuật excel P3 &ndash; Chọn &ocirc; c&oacute; chứa comment với Ctrl + Shift + O</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">T&aacute;c dụng của tổ hợp ph&iacute;m n&agrave;y l&agrave; chọn tất cả những &ocirc; c&oacute; chứa comment trong sheet hiện tại. C&oacute; thể c&aacute;c bạn sẽ thấy tổ hợp ph&iacute;m n&agrave;y kh&aacute; l&agrave; ... thừa, nhưng thật ra, nếu trong t&igrave;nh huống c&aacute;c bạn c&oacute; một cột dữ liệu chứa rất nhiều &ocirc; c&oacute; comment l&agrave; những &ocirc; cần ch&uacute; &yacute; m&agrave; c&aacute;c bạn kh&ocirc;ng l&agrave;m c&aacute;ch n&agrave;o để lọc những &ocirc; đ&oacute; ra bằng t&iacute;nh năng lọc b&igrave;nh thường đc. Vậy l&uacute;c đ&oacute; c&aacute;c bạn c&oacute; thể d&ugrave;ng tổ hợp ph&iacute;m n&agrave;y để chọn một l&uacute;c tất cả những &ocirc; c&oacute; chứa comment, sau đ&oacute; t&ocirc; m&agrave;u n&agrave;o đ&oacute;. Sau đ&oacute; bật chức năng lọc l&ecirc;n, lọc theo m&agrave;u c&aacute;c bạn vừa chọn, thế l&agrave; xong.</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;">58. Thủ thuật excel P3 &ndash; Chỉ chọn những &ocirc; kh&ocirc;ng ẩn c&ugrave;ng Alt + ;</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Đối với những bạn hay ẩn cột, d&ograve;ng th&igrave; tổ hợp ph&iacute;m n&agrave;y sẽ ph&aacute;t huy t&aacute;c dụng của n&oacute;. Tổ hợp ph&iacute;m n&agrave;y sẽ khiến ch&uacute;ng ta chỉ chọn được những &ocirc; trong cột, d&ograve;ng, m&agrave; kh&ocirc;ng bị ẩn bởi c&aacute;c thao t&aacute;c gi&uacute;p ẩn c&ograve;n lại những cột d&ograve;ng bị ẩn rồi sẽ &ldquo;ẨN&rdquo; thật sự</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;">59. Thủ thuật excel P3 &ndash; Ch&egrave;n, sửa comment với Shift + F2</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Đ&acirc;y sẽ l&agrave; một tổ hợp ph&iacute;m CỰC KỲ HAY với những người hay phải th&ecirc;m v&agrave; sửa comment trong excel.</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="color:#0000FF;"><span style="font-size:22px;">60. Thủ thuật excel P3 &ndash; Sang tr&aacute;i, phải trong một k&yacute; tự hoặc một từ trong một &ocirc; excel</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">- Sang tr&aacute;i phải một k&yacute; tự: ph&iacute;m mũi t&ecirc;n sang tr&aacute;i hoặc phải</span></span></p>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">- Sang tr&aacute;i, phải MỘT TỪ: Ctrl + mũi t&ecirc;n sang tr&aacute;i hoặc phải</span></span></p>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">&gt;&gt;&gt; Đ&acirc;y l&agrave; những&nbsp; tổ hợp ph&iacute;m t&aacute;c giả rất hay d&ugrave;ng trong qu&aacute; tr&igrave;nh nhập liệu excel</span></span></p>

<h2><strong><span style="font-family:times new roman,times,serif;"><span style="font-size:22px;"><span style="color:#0000FF;">61. Thủ thuật excel P3 &ndash; Chọn dữ liệu trong một &ocirc; excel</span></span></span></strong></h2>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">Cũng với c&ugrave;ng một tổ hợp ph&iacute;m với CHỌN DỮ LIỆU TRONG EXCEL, c&ograve;n đ&acirc;y l&agrave;&nbsp; CHỌN DỮ LIỆU TRONG MỘT &Ocirc;&nbsp; excel. C&aacute;c bạn ch&uacute; &yacute; ph&acirc;n biệt</span></span></p>

<p><span style="font-family:times new roman,times,serif;"><span style="font-size:16px;">- Chọn sang tr&aacute;i, ',
                'PostSlug' => '100-thu-thuat-excel-cuc-ky-huu-ich-bat-buoc-phai-nho',
                'Views' => 3,
                'Status' => 1,
                'PostDate' => '2019-01-27 17:19:18',
            ),
            2 => 
            array (
                'PostID' => 4,
                'AccountID' => 3,
                'ModuleID' => 5,
                'PostTitle' => 'Những mẹo Excel hữu ích giúp bạn hoàn thành công việc nhanh hơn và hiệu quả hơn',
                'PostContent' => '<h3>1. Loại bỏ các ô trống</h3>
<p>Nếu bạn đang làm việc với một tài liệu Excel với hàng tấn dữ liệu Excel, thì đây là mẹo rất đáng để thử. Chọn một cột hoặc dòng với ô trống và nhấn <b>Ctrl + G</b>. </p>
<div align="center"><img src="https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_1.jpg" alt="Những mẹo Excel hữu ích giúp bạn hoàn thành công việc nhanh hơn và hiệu quả hơn"></div>
<p style="text-align:center;"><i>Trong cửa sổ vừa xuất hiên, bạn click vào nút<b> Special</b> và chọn <b>Blanks</b>. Sau đó, nhấn phím tắt <b>Ctrl + -</b> và <b>Shift cells up &gt; Ok.</b> </i></p>
<div align="center"><img src="https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_2.jpg" alt=""></div>
<h3>2. Sửa đổi kích thước của hàng và cột</h3>
<p>Kích thước của hàng và cột trong Excel có lẽ không luôn luôn theo đúng chuẩn bạn cần. Nếu muốn điều chỉnh kích thước thì bạn chọn hàng hoặc cột và chọn tab <b>Home</b>. </p>
<div align="center"><img src="https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_3.jpg" alt=""></div>
<p>Sau đó, nhấp chuột vào tùy chọn<b> Format &gt; Adjust Cell Size…</b> và click vào <b>Row height</b> để làm cho ô cao hơn. Để làm ô to hơn, bạn click vào <b>Column width</b> và nhập số mà bạn cần.</p>
<h3>3. Thêm hoặc xóa cột, dòng hoặc ô </h3>
<div align="center"><img src="https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_4.jpg" alt=""></div>
<p style="text-align:center;"><i>Với lệnh<b> Insert</b> và <b>Remove</b> trên thanh ribbon, bạn có thể thêm hoặc xóa số lượng cột, dòng và ô theo ý muốn.</i></p>
<h3>4. Sử dụng định dạng có điều kiện </h3>
<div align="center"><img src="https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_5.jpg" alt=""></div>
<p>Bằng cách sử dụng định dạng có điều kiện (conditional formatting), bạn có thể làm nổi bật hoặc thay đổi màu sắc của ô phụ thuộc vào giá trị của chúng. Bạn chọn cột mà bạn chuẩn bị định dạng và click vào tùy chọn <b>Conditional Formatting &gt; Highlight Cell Rules</b> từ menu thả xuống và chọn <b>Deplicate Values</b>.</p>
<h3>5. Tạo đường chéo trong ô </h3>
<div align="center"><img src="https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_6.jpg" alt=""></div>
<p>Bạn có thể cần tạo một đường chéo ở một ô nào đó và thao tác này được thực hiện rất dễ dàng. Bạn chỉ cần click vào <b>Home &gt; Font &gt; More Borders</b>. Bạn sẽ nhìn thấy nhiều lựa chọn ở đây, nhưng cái mà sẽ cho bạn một đường chéo theo ý muốn nằm ở góc bên trái phía dưới cửa sổ. Click vào đó để lưu lại lựa chọn của bạn và trong bảng Excel đã xuất hiện một đường chéo.</p>
<h3>6. Ẩn công thức </h3>
<div align="center"><img src="https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_7.jpg" alt=""></div>
<p>Nếu bạn click vào phần phía trên của khu vực xem trước bên cạnh nút <b>Function</b>, bạn sẽ nhìn thấy công thức tính. Đây là một tính năng tiện ích nhưng khá rắc rối nếu bạn đang xử lý một phép tính phức tạp. Để dọn dẹp một chút, bạn có thể ẩn công thức tính bằng cách click vào ô mà có phép tính đó.</p>
<p>Sau đó, bạn click chuột phải và chọn <b>Format</b>. Đi tới <b>Protection</b> và nhấp chuột vào tùy chọn <b>Hidden box</b>. Bạn click vào <b>OK</b> để lưu lại lựa chọn của bạn. Lưu ý rằng điều này không đủ để bảo vệ tài liệu của bạn khỏi những người khác.</p>
<p>Để thêm mật khẩu bảo vệ tài liệu Excel của mình, bạn đi đến tab <b>Review</b> và chọn <b>Protect Sheet</b>. Tạo mật khẩu và xem công thức tính của mình biến mất như thế nào.</p>
<h3>7. Chuyển đổi dòng thành cột và ngược lại</h3>
<p>Đây là một mẹo Excel hữu ích nếu các dòng của bạn quá dài và bạn muốn tài liệu của mình có tổ chức hơn. Bạn chọn và sao chép các ô mà bạn muốn tổ chức. Sau đó, click vào ô mà bạn muốn thêm dữ liệu và nhấp chuột phải chọn <b>Paste Special</b>. </p>
<div align="center"><img src="https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_8.jpg" alt=""></div>
<p style="text-align:center;"><i>Khi một cửa sổ mới xuất hiện, bạn chọn <b>Transpose &gt; OK.</b> </i></p>
<div align="center" style="text-align:center;"><i><img src="https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_9.jpg" alt=""></i></div>
<p style="text-align:center;"><i>OK\' width=\'388\' height=\'402\'&gt;</i></p>
<h3>8. Lưu biểu đồ thành mẫu </h3>
<div align="center"><img src="https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_10.jpg" alt=""></div>
<p>Nếu bạn tự hào về biểu đồ mình vừa tạo thì hãy lưu nó lại dưới dạng một mẫu có sẵn. Bạn có thể làm điều đó bằng cách nhấn chuột phải vào biểu đồ và chọn <b>Save as Template</b>. Tùy chọn này sẽ giúp bạn tiết kiệm được nhiều thời gian cho tài liệu tiếp theo.</p>
<h3>9. Các phím tắt Excel hữu ích</h3>
<ul><li><b>Ctrl + -</b>: Làm cho các tùy chọn đã xóa xuất hiện.</li>
<li><b>Ctrl + A</b>: Chọn tất cả dữ liệu.</li>
<li><b>Ctrl + V</b>: Dán những gì bạn vừa sao chép.</li>
<li><b>Ctrl + Spacebar</b>: Chọn cột của ô bạn đang sử dụng.</li>
<li><b>Ctrl + End</b>: Đi đến ô cuối cùng của dữ liệu.</li>
<li><b>Ctrl + Home</b>: Chọn ô đầu tiên với dữ liệu của bạn.</li>
<li><b>Ctrl + Down Arrow</b>: Đi đến ô cuối cùng của cột bạn đang sử dụng.</li>
<li><b>Ctrl + Up Arrow</b>: Đi đến ô đầu tiên của cột bạn đang sử dụng.</li>
</ul><h3>10. Sao chép nhanh chóng một công thức</h3>
<p>Để sao chép một công thức nhanh chóng, bạn đặt con trỏ chuột vào góc dưới bên phải vị trí có ô bạn muốn copy. Con trỏ chuột sẽ chuyển thành biểu tượng<b> dấu cộng</b>, sau đó bạn chỉ cần click đúp vào đó để sao chép.</p>
<h3>11. Loại bỏ khoảng trắng thừa thãi trong ô</h3>
<p>Để xóa các khoảng trắng, bạn chọn ô nơi mà công thức của bạn sẽ xuất hiện. Gõ <b>=trim(tên của ô)</b> và nhấn <b>Enter</b>, chẳng hạn như<b> =trim(F6)</b>. Lệnh này sẽ không loại bỏ khoảng trắng giữa các ký tự.</p>
<h3>12. Mẹo Text to Column </h3>
<div align="center"><img src="https://cdn.trangcongnghe.com/uploads/posts/2018-07/12-meo-huu-237ch-gi250p-n226ng-cao-ky-nang-excel_11.jpg" alt=""></div>
<p>Mẹo này sẽ giúp bạn dễ dàng tách dữ liệu của một ô vào các ô khác nhau. Để sử dụng thủ thuật này, bạn hãy chuyển đến tab <b>Data</b> và chọn cột mà bạn muốn tách. Nhấp vào<b> Text to Column</b> và sau đó nhấp vào <b>Next</b>. Chọn các ký tự bạn muốn chia vào các cột bằng cách điền vào ô bên cạnh <b>Other.</b></p>',
                'PostSlug' => 'nhung-meo-excel-huu-ich-giup-ban-hoan-thanh-cong-viec-nhanh-hon-va-hieu-qua-hon',
                'Views' => 7,
                'Status' => 1,
                'PostDate' => '2019-04-11 15:37:10',
            ),
            3 => 
            array (
                'PostID' => 5,
                'AccountID' => 3,
                'ModuleID' => 5,
                'PostTitle' => 'Excel Test Post 1',
                'PostContent' => 'One of blog_entry\'s fields is of type \'longtext\' and is such a long piece of text that when the result is displayed in my terminal the display of rows takes more than one line. This causes an ugly mess of a display, where columns aren\'t easily visible. What technique can I use in my SELECT query that would limit the number of characters displayed for each field so that the printed row results don\'t overflow to new lines?
<br>
<img src="https://trumpexcel.com/wp-content/uploads/2018/06/Combine-Data-from-Multiple-sheets-Data-in-Excel-Tables.jpg">
<br>
One of blog_entry\'s fields is of type \'longtext\' and is such a long piece of text that when the result is displayed in my terminal the display of rows takes more than one line. This causes an ugly mess of a display, where columns aren\'t easily visible. What technique can I use in my SELECT query that would limit the number of characters displayed for each field so that the printed row results don\'t overflow to new lines?

',
                'PostSlug' => 'excel-test-post-1',
                'Views' => 0,
                'Status' => 1,
                'PostDate' => '2019-04-12 14:40:58',
            ),
            4 => 
            array (
                'PostID' => 6,
                'AccountID' => 3,
                'ModuleID' => 5,
                'PostTitle' => 'Excel Test Post 2',
                'PostContent' => 'One of blog_entry\'s fields is of type \'longtext\' and is such a long piece of text that when the result is displayed in my terminal the display of rows takes more than one line. This causes an ugly mess of a display, where columns aren\'t easily visible. What technique can I use in my SELECT query that would limit the number of characters displayed for each field so that the printed row results don\'t overflow to new lines?
<br>
One of blog_entry\'s fields is of type \'longtext\' and is such a long piece of text that when the result is displayed in my terminal the display of rows takes more than one line. This causes an ugly mess of a display, where columns aren\'t easily visible. What technique can I use in my SELECT query that would limit the number of characters displayed for each field so that the printed row results don\'t overflow to new lines?',
                'PostSlug' => 'excel-test-post-2',
                'Views' => 1,
                'Status' => 1,
                'PostDate' => '2019-04-12 14:41:23',
            ),
            5 => 
            array (
                'PostID' => 7,
                'AccountID' => 3,
                'ModuleID' => 4,
            'PostTitle' => 'Tạo dòng dấu chấm (……) nhanh trong Microsoft Word',
            'PostContent' => '<p align="justify">Khi phải làm việc với các mẫu giấy mời họp, các văn bản biểu mẫu... thì cần phải đặt những dấu chấm nhỏ trong văn bản. Nhưng việc ngồi và gõ thủ công từng dấu chấm rất mất thời gian, hơn nữa lại không đều và đẹp. Trong bài viết dưới đây, Quản Trị Mạng sẽ hướng dẫn các bạn cách tạo dấu 3 chấm trong <strong>Microsoft Word</strong> 2016, Word 2013, Word 2010 và Word cũ hơn như Word 2007, 2003 nhanh chóng bằng <a title="Tổng hợp phím tắt Microsoft Word thông dụng" href="https://quantrimang.com/thao-tac-nhanh-trong-van-ban-voi-cac-phim-tat-thong-dung-18824">cách dùng phím tắt</a>.</p> <ul> <li><a class="title" title="Hướng dẫn cách tạo khung trong Word 2007, 2010, 2013, 2016" href="https://quantrimang.com/huong-dan-cach-tao-khung-trong-word-2007-2010-2013-120113">Hướng dẫn cách tạo khung trong Word 2007, 2010, 2013, 2016</a></li> <li><a class="title" title="Cách tạo bookmark trong Word 2016" href="https://quantrimang.com/cach-tao-bookmark-trong-word-2016-142875">Cách tạo bookmark trong Word 2016</a></li> <li><a class="title" title="Tạo mục lục tự động trong Word 2003" href="https://quantrimang.com/tao-muc-luc-tu-dong-31698">Tạo mục lục tự động trong Word 2003</a></li> </ul> <h2 align="justify">1. Tạo dấu chấm (....) nhanh chóng bằng phím tắt</h2> <p align="justify">Mở <strong>Microsoft Word</strong> lên, đối với các phiên bản Word cũ (trước 2010) thì bảng điều khiển phím Tabs sẽ xuất hiện khi các bạn vào phần <strong>Format &gt; Tabs</strong>. Còn đối với Word 2010 trở lên thì chúng ta chỉ cần bấm chuột phải vào văn bản Word và chọn <strong>Paragraph &gt; Tabs</strong>:</p> <p align="justify"><strong>Tạo dòng chấm trong Word 2007, 2003 phiên bản cũ:</strong></p> <p><img style="line-height: 1.5em; display: block; margin-left: auto; margin-right: auto; vertical-align: middle;" title="Tabs trong Word phiên bản cũ" src="https://st.quantrimang.com/photos/Image/082006/24/tabs1.gif" alt="Format\\Tabs… " width="168" height="265"></p> <p><strong>Tạo dòng chấm trong Word 2010, Word 2013, Word 2016:</strong></p> <p>Có 2 cách để truy cập vào Tabs trên Word 2010, 2013, 2016:</p> <ul> <li>Vào tab Home &gt; tìm ô Paragraph, nhấp vào mũi tên ở góc dưới bên phải.</li> <li>Chuột phải lên trang Word &gt; Paragraph...</li> </ul> <p style="text-align: center;"><img style="vertical-align: middle;" title="Tabs trong Word 2010" src="https://st.quantrimang.com/photos/image/2015/10/05/tabs-trong-word-click.png" alt="Tabs trong Word 2010" width="650" height="500"></p> <ul> <li>Nhấp vào Tabs ở góc dưới bên trái để mở bảng điều khiển Tabs:</li> </ul> <p style="text-align: center;"><img style="vertical-align: middle;" title="Mở Tabs" src="https://st.quantrimang.com/photos/image/2015/10/05/tabs-trong-word-here.png" alt="Mở Tabs" width="393" height="538"></p> <p style="text-align: left;">Trong bảng điều khiển Tabs, chúng ta sẽ thấy các tùy chọn như sau:</p> <ul> <li><strong>Tab stop position</strong>: độ dài trong văn bản sẽ xuất hiện dấu chấm khi ta bấm Tab (tính từ lề trái văn bản, như ví dụ hình dưới là 1 cm)</li> <li><strong>Default tab stops</strong>: khoảng cách từ điểm đầu đến cuối khi ta bấm phím Tab (như ví dụ dưới là 6 cm).</li> </ul> <p style="text-align: center;"><img style="vertical-align: middle;" title="Tùy chọn trong Tabs" src="https://st.quantrimang.com/photos/image/2015/10/05/tabs-trong-word-how.png" alt="Tùy chọn trong Tabs" width="295" height="343"></p> <ul> <li><strong>Alignment</strong>: kiểu căn lề, có thể chọn Left - trái, Center - giữa, Right - phải...</li> <li><strong>Leader</strong>: kiểu định dạng khi bấm Tab, 1, None - không gì cả, 2 là dấu chấm, 3 là dấu gạch ngang, 4 là dấu gạch dưới liền.</li> </ul> <p>Chọn các giá trị theo ý muốn rồi bấm nút Set để thay đổi. Như ví dụ trên, tôi sẽ cụ thể bằng hình ảnh bên dưới cho các bạn dễ hình dung:</p> <p style="text-align: center;"><img style="vertical-align: middle;" title="Bấm Tab trong văn bản" src="https://st.quantrimang.com/photos/image/2015/10/05/tabs-trong-word-cu-the.png" alt="Sử dụng Tabs" width="650" height="500"></p> <div class=\'adbox in-article\'><ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-format="fluid" data-ad-layout="in-article" data-ad-client="ca-pub-9275417305531302" data-ad-slot="2737970258"></ins><script> (adsbygoogle = window.adsbygoogle || []).push({});</script></div><h2 align="justify">2. Bỏ thiết lập khi bấm phím Tab:</h2> <p align="justify">Nếu không muốn dùng các thiết lập khi bấm tab, thì mở bảng điều khiển của Tabs và bấm nút <strong>Clear</strong> hoặc <strong>Clear All</strong>. Sau đó nhấn OK.</p> <p style="text-align: center;" align="justify"><img style="vertical-align: middle;" src="https://st.quantrimang.com/photos/image/2015/10/05/tabs-trong-word-clear.png" alt="" width="295" height="343"></p> <p style="text-align: left;" align="justify">Như vậy là Quản Trị Mạng đã giới thiệu và hướng dẫn các bạn cách tạo, thiết lập và sử dụng phím Tab để chèn dấu chấm trong văn bản, Microsoft Word 2010. Chúc các bạn thành công!</p>',
                'PostSlug' => 'tao-dong-dau-cham-nhanh-trong-microsoft-word',
                'Views' => 18,
                'Status' => 1,
                'PostDate' => '2019-04-12 15:29:08',
            ),
            6 => 
            array (
                'PostID' => 8,
                'AccountID' => 3,
                'ModuleID' => 7,
                'PostTitle' => 'Hướng dẫn sử dụng chức năng làm bài thi trên TNTH',
                'PostContent' => 'Đây là hướng dẫn làm bài trên trang',
                'PostSlug' => 'huong-dan-su-dung-chuc-nang-lam-bai-thi-tren-tnth',
                'Views' => 44,
                'Status' => 1,
                'PostDate' => '2019-04-13 00:05:03',
            ),
            7 => 
            array (
                'PostID' => 9,
                'AccountID' => 3,
                'ModuleID' => 8,
                'PostTitle' => 'Chứng chỉ Tin học - Biết để không trở thành nạn nhân',
                'PostContent' => '
Hiện nay có rất nhiều các bạn </span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: black; background: white;">đang hoang mang vì trên thị trường có rất nhiều nơi </span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: black; background: white;">ch</span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: black; background: white;">ào bán chứng chỉ tiếng anh, tin học&nbsp; đặc biệt là làm chứng chỉ tiếng anh tin học </span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: black; background: white;">không phải do các cơ </span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: black; background: white;">sở</span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: black; background: white;"> được B</span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: black; background: white;">ộ </span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: black; background: white;">G</span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: black; background: white;">iáo dục </span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: black; background: white;">và Đào tạo thẩm định cấp phép</span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: black; background: white;">[1].</span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: black; background: white;"> Vậy giúp các bạn có thêm kiến thức để không bị lợi dụng, lừa đảo. Bài này sẽ giúp các bạn biết được hiện nay có <em>những loại chứng chỉ tin học nào được chấp nhận sử dụng thi công chức, viên chức</em>; <em>Những chứng chỉ nào không còn giá trị sử dụng</em>.</span></p>

<p style="margin: 6pt 0cm; text-align: justify; text-indent: 36pt; line-height: normal;"><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: black; background: white;"></span></p>
<p style="margin: 6pt 0cm; line-height: normal;"><strong><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: red;">* Có những loại chứng chỉ tin học nào có giá trị sử dụng?</span></strong></p>
<p style="margin: 6pt 0cm; line-height: normal;"><span style="font-size: 14pt; font-family: \'Times New Roman\', serif;">Có 2 loại chứng chỉ tin học đó là [2]:</span></p>
<p style="margin: 6pt 0cm; line-height: normal;"><span style="font-size: 14pt; font-family: \'Times New Roman\', serif;">- Chứng chỉ Tin học quốc tế IC3 và MOS</span></p>
<p style="margin: 6pt 0cm; line-height: normal; text-align: center;"><span style="font-size: 14pt; font-family: \'Times New Roman\', serif;"><img src="/images/trung_tâm_Ngoại_ngữ_-_Tin_học_tháng_1/ảnh_bài_báo_tháng_02_c_phương_01.png" alt="ảnh bài báo tháng 02 c phương 01" /></span></p>
<p style="margin: 6pt 0cm; line-height: normal;"><strong><span style="font-size: 14pt; font-family: \'Times New Roman\', serif;">Chứng chỉ tin học quốc tế IC3 (trái)- Chứng chỉ tin học quốc tế MOS (phải)</span></strong></p>
<h1 style="margin: 6pt 0cm; text-indent: 36pt; background: white;"><span style="font-size: 14pt; font-weight: normal;">- Chứng chỉ Tin học theo </span><span style="font-size: 14pt; font-weight: normal;">Thông tư số 03/2014/TT-BTTTT</span><span style="font-size: 14pt; font-weight: normal;"> [3]</span><span style="font-size: 14pt; font-weight: normal;"> của Bộ Thông tin và Truyền thông. Với chứng chỉ theo thông tư 03 có dạng mẫu:</span></h1>
<p style="text-align: center;"><span style="font-size: 14pt; font-weight: normal;"><img src="/images/trung_tâm_Ngoại_ngữ_-_Tin_học_tháng_1/ảnh_bài_báo_tháng_02_c_phương_02.png" alt="ảnh bài báo tháng 02 c phương 02" /></span></p>
<h1 style="margin: 6pt 0cm; background: white; text-align: center;">&nbsp;Chứng chỉ Tin học theo <span style="font-size: 14pt;">Thông tư số 03/2014/TT-BTTTT</span><span style="font-size: 14pt;"> gồm 2 mẫu</span></h1>
<h1 style="margin: 6pt 0cm; background: white;"><span style="font-size: 14pt; color: red;">* Những chứng chỉ Tin học nào đã hết giá trị tại Việt Nam?</span></h1>
<h1 style="margin: 6pt 0cm; text-align: justify; text-indent: 36pt; background: white;"><span style="font-size: 14pt; font-weight: normal;">Bắt đầu từ ngày 10/8/2016, Thông tư liên tịch số 17/2016/TTLT-BGDĐT-BTTTT giữa Bộ Giáo dục &amp; Đào tạo với Bộ Thông Tin Truyền Thông quy định về việc thi, cấp chứng chỉ công nghệ thông tin chính thức có hiệu lực. Nội dung thông tư quy định dừng việc đào tạo, thi và cấp chứng chỉ Tin học A, B, C. Theo đó, những chứng chỉ Tin học A, B, C được cấp sau ngày 10/8/2016 sẽ không còn giá trị.</span></h1>
<p style="text-align: center;"><span style="font-size: 14pt; font-weight: normal;"><img src="/images/trung_tâm_Ngoại_ngữ_-_Tin_học_tháng_1/ảnh_bài_báo_tháng_02_c_phương_03.png.jpg" alt="ảnh bài báo tháng 02 c phương 03.png" /></span></p>
<h1 style="margin: 6pt 0cm; text-align: center; background: white;" align="center">&nbsp;</h1>
<h1 style="margin: 6pt 0cm; text-indent: 36pt; background: white;"><span style="font-size: 14pt; font-weight: normal;">Vì vậy để tránh </span><span style="font-size: 14pt; background: white;">mất thời gian</span><span style="font-size: 14pt; background: white; font-weight: normal;"> rồi </span><span style="font-size: 14pt; background: white;">ảnh hưởng cả một sự nghiệp</span><span style="font-size: 14pt; background: white; font-weight: normal;"> bạn nhé vì </span><span style="font-size: 14pt; background: white;">chứng chỉ </span><span style="font-size: 14pt; background: white;">tin học </span><span style="font-size: 14pt; background: white;">giả</span><span style="font-size: 14pt; background: white;">.</span></h1>
<p style="margin: 6pt 0cm; text-align: justify; text-indent: 36pt; line-height: normal;"><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; background: white;">Trung tâm Công nghệ thông tin (tên tiếng Anh là Information Technology Center – Thai Nguyen University gọi tắt là ITC-TNU) là một đơn vị trực thuộc Đại học Thái Nguyên thành lập từ năm 2012. </span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; background: white;">Trung tâm có vai trò nhiệm vụ quan trọng trong c</span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; background: white;">huyển giao công nghệ, tư vấn, đào tạo - bồi dưỡng kỹ năng, nghề nghiệp và phát triển các ứng dụng CNTT cho các tổ chức, cá nhân trong và ngoài Đại học Thái Nguyên nhằm đáp ứng nhu cầu thực tiễn về ứng dụng CNTT</span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; background: white;">. Trung tâm thực hiên tổ chức học, thi các chứng chỉ CNTT quốc tế: IC3. MOS, ICDL và hàng tuần trung tâm tổ chức thi cấp chứng chỉ tin học theo thông tư 03/2014/BTTTT vào thứ 7, chủ nhật.</span></p>
<h1 style="margin: 6pt 0cm; text-align: justify; text-indent: 36pt; background: white;"><span style="font-size: 14pt; color: red; background: white; font-weight: normal;">Hiện nay Trung tâm Tin học – ngoại ngữ, Phân hiệu Đại học Thái Nguyên tại tỉnh Lào Cai liên kết với </span><span style="font-size: 14pt; color: red; background: white; font-weight: normal;">Trung tâm Công nghệ thông tin</span><span style="font-size: 14pt; color: red; background: white; font-weight: normal;"> – Đại học Thái Nguyên tổ chức ôn thi, cấp chứng chỉ tin học theo quy định dành cho thi công chức và viên chức hàng tuần.</span></h1>
<h1 style="margin: 6pt 0cm; text-align: right; background: white;" align="right"><em><span style="font-size: 14pt; color: #333333; border: 1pt none windowtext; padding: 0cm; background: white;">NCS. Nguyễn Thị Lan Phương – Phó giám đốc Trung tâm TH-NN</span></em></h1>
<p style="margin: 6pt 0cm; line-height: normal;"><strong><span style="font-size: 14pt; font-family: \'Times New Roman\', serif;">Nguồn tài liệu:</span></strong></p>
<p style="margin: 6pt 0cm; line-height: normal;"><span style="font-size: 14pt; font-family: \'Times New Roman\', serif;">[1]: </span><span style="color: #0000ff;"><a href="http://tuyensinh247.org/chung-chi-tin-hoc/?gclid=EAIaIQobChMI5I2uuJ_A1wIVHQYqCh3U8w8UEAAYASAAEgJ4vfD_BwE"><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: #0000ff;">http://tuyensinh247.org/chung-chi-tin-hoc/?gclid=EAIaIQobChMI5I2uuJ_A1wIVHQYqCh3U8w8UEAAYASAAEgJ4vfD_BwE</span></a></span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif;">, ngày 16 tháng 11 năm 2017.</span></p>
<p style="margin: 6pt 0cm; line-height: normal;"><span style="font-size: 14pt; font-family: \'Times New Roman\', serif;">[2]: </span><span style="color: #0000ff;"><a href="https://www.google.com.vn/search=IC3"><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: #0000ff;">https://www.google.com.vn/search=IC3</span></a></span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif;">, ngày 16 tháng 11 năm 2017.</span></p>
<h1 style="margin: 6pt 0cm; text-align: justify;"><span style="font-size: 14pt; font-weight: normal;">[3]: </span><span style="font-size: 14pt; color: black; font-weight: normal;">Thông tư số 03/2014/TT-BTTTT của Bộ Thông tin và Truyền thông : Quy định Chuẩn kỹ năng sử dụng công nghệ thông tin</span></h1>
<h1 style="margin: 6pt 0cm; text-align: justify;"><span style="font-size: 14pt; font-weight: normal;">[4]:</span><span style="color: #0000ff;"><a href="http://vanban.chinhphu.vn/portal/page/portal/chinhphu/hethongvanban?mode=detail&amp;document_id=172851"><span style="font-size: 14pt; font-weight: normal; color: #0000ff;">http://vanban.chinhphu.vn/portal/page/portal/chinhphu/hethongvanban?mode=detail&amp;document_id=172851</span></a></span><span style="font-size: 14pt; font-weight: normal;">, ngày 16 tháng 11 năm 2017.</span></h1>
<p style="margin: 6pt 0cm; line-height: normal;"><span style="font-size: 14pt; font-family: \'Times New Roman\', serif;">[5]:</span><span style="color: #0000ff;"><a href="/index.php/vi/"><span style="font-size: 14pt; font-family: \'Times New Roman\', serif; color: #0000ff;">http://laocai.tnu.edu.vn/index.php/vi/</span></a></span><span style="font-size: 14pt; font-family: \'Times New Roman\', serif;">, ngày 16 tháng 11 năm 2017</span></p>',
                'PostSlug' => 'chung-chi-tin-hoc-biet-de-khong-tro-thanh-nan-nhan',
                'Views' => 5,
                'Status' => 1,
                'PostDate' => '2019-04-18 17:05:43',
            ),
        ));
        
        
    }
}