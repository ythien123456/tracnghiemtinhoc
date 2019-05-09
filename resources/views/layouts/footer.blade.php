<!-- Start footer -->
<footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
        <div class="container">
            <div class="mu-footer-top-area">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Thông Tin</h4>
                            <ul>
                                <li><a href="{{route('about')}}">Giới thiệu</a></li>
                                <li><a href="{{url('/p')}}">Bài Viết</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Hướng dẫn</h4>
                            <ul>
                                <li>
                                    <a href="{{route('postsviewSinglePost',['PostSlug' => 'huong-dan-lam-bai-tren-he-thong-tnth'])}}">
                                        Hướng dẫn làm bài thi
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('postsviewSinglePost',['PostSlug' => 'cac-phan-mem-van-phong-can-thiet'])}}">
                                        Các phần mềm cần thiết
                                    </a></li>
                                <li>
                                    <a href="{{route('postsviewSinglePost',['PostSlug' => 'tong-hop-cac-loi-phan-mem-thuong-gap'])}}">
                                        Tổng hợp các vấn đề thường gặp
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Mục tiêu</h4>
                            <p>Chúng tôi mong muốn cung cấp được cho người dùng những trải nghiệm hữu ích nhất trong việc thi chứng chỉ CNTT cơ bản, nâng cao.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>LIÊN HỆ</h4>
                            <address>
                                <p>Trường Đại học Công nghiệp TP.HCM</p>
                                <p>Số điện thoại: 0935029097 </p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
        <div class="container">
            <div class="mu-footer-bottom-area">
                <p>All Right Reserved. Powered by TNTH &copy; 2019</p>
            </div>
        </div>
    </div>
    <!-- end footer bottom -->
</footer>
<!-- End footer -->