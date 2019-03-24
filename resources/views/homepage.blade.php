@extends('layouts.main')

@section('title')
    TRANG CHỦ
@endsection
@section('content')
    <!-- Start Slider -->
    <section id="mu-slider">
        <!-- Start single slider item -->
        <div class="mu-slider-single">
            <div class="mu-slider-img">
                <figure>
                    <img src="{{asset('public/img/slider/1.jpg')}}" alt="img">
                </figure>
            </div>
            <div class="mu-slider-content">
                <h4>Chào mừng đến với TracNghiemTinHoc</h4>
                <span></span>
                <h2>Giúp bạn có kiến thức hữu ích</h2>
                <p>Chúng tôi mong muốn rằng sẽ mang lại giá trị kiến thức thật nhiều trong phạm vi cộng đồng người việt đối với lĩnh vực tin học nói chung và các phần mềm văn phòng nói riêng.</p>
                <a href="#" class="mu-read-more-btn">Xem thêm</a>
            </div>
        </div>
        <!-- Start single slider item -->
        <!-- Start single slider item -->
        <div class="mu-slider-single">
            <div class="mu-slider-img">
                <figure>
                    <img src="{{asset('public/img/slider/2.jpg')}}" alt="img">
                </figure>
            </div>
            <div class="mu-slider-content">
                <h4>Đơn giản và nhanh chóng</h4>
                <span></span>
                <h2>Đa dạng loại đề cho bạn lựa chọn</h2>
                <p>Tùy vào nhu cầu ôn tập và kiểm tra kiến thức của bạn, có rất nhiều loại đề thi khác nhau do chính bạn lựa chọn để thực hiện. Còn chần chờ gì nữa nào?</p>
                <a href="#" class="mu-read-more-btn">Trải nghiệm ngay!</a>
            </div>
        </div>
        <!-- Start single slider item -->
        <!-- Start single slider item -->
        <div class="mu-slider-single">
            <div class="mu-slider-img">
                <figure>
                    <img src="{{asset('public/img/slider/3.jpg')}}" alt="img">
                </figure>
            </div>
            <div class="mu-slider-content">
                <h4>Chứng chỉ Công Nghệ Thông Tin có quan trọng?</h4>
                <span></span>
                <h2>Tại sao cần phải có kiến thức CNTT?</h2>
                <p>Năm 2019 hiện tại chính là thời đại phát triển vượt bậc của công nghệ khi thế giới đã bước qua giai đoạn 4.0, khi bạn đi bất cứ đâu cũng sẽ bắt gặp được thiết bị điện tử kể cả ở vùng quê.</p>
                <a href="#" class="mu-read-more-btn">xem thêm</a>
            </div>
        </div>
        <!-- Start single slider item -->
    </section>
    <!-- End Slider -->
    <!-- Start service  -->
    <section id="mu-service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-service-area">
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-book"></span>
                            <h3>Thi trực tuyến</h3>
                            <p>Có điểm và sửa lỗi sai ngay sau khi hoàn thành! Hệ thống giúp bạn theo dõi sự tiến bộ theo thời gian qua việc xem lịch sử điểm thi.</p>
                        </div>
                        <!-- Start single service -->
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-users"></span>
                            <h3>Biên tập</h3>
                            <p>Luôn biết cách soạn ra những mẫu đề thi chất lượng nhất cho người dùng! Bám sát với các đề thi trong thực tế</p>
                        </div>
                        <!-- Start single service -->
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-table"></span>
                            <h3>Bài viết</h3>
                            <p>Luôn cập nhật các bài viết hướng dẫn thực hành song song với các tin tức mới nhất về chứng chỉ tin học!</p>
                        </div>
                        <!-- Start single service -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service  -->

    <!-- Start about us counter -->
    <section id="mu-abtus-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-abtus-counter-area">
                        <div class="row">
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-book"></span>
                                    <h4 class="counter">19999</h4>
                                    <p>Đề Thi</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-users"></span>
                                    <h4 class="counter">3500</h4>
                                    <p>Thành viên</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-align-justify"></span>
                                    <h4 class="counter">65</h4>
                                    <p>Bài viết</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single no-border">
                                    <span class="fa fa-user-secret"></span>
                                    <h4 class="counter">250</h4>
                                    <p>Biên tập viên</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about us counter -->


    <!-- Start latest course section -->
    <section id="mu-latest-courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-latest-courses-area">
                        <!-- Start Title -->
                        <div class="mu-title">
                            <h2>Bài viết mới</h2>
                            <p>Những bài viết mới được xuất bản trên website.</p>
                        </div>
                        <!-- End Title -->
                        <!-- Start latest course content -->
                        <div id="mu-latest-course-slide" class="mu-latest-courses-content">
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="mu-latest-course-single">
                                    <figure class="mu-latest-course-img">
                                        <a href="#"><img src="{{asset('public/img/courses/1.jpg')}}" alt="img"></a>
                                        <figcaption class="mu-latest-course-imgcaption">
                                            <a href="#">Drawing</a>
                                            <span><i class="fa fa-clock-o"></i>90Days</span>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-latest-course-single-content">
                                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                        <div class="mu-latest-course-single-contbottom">
                                            <a class="mu-course-details" href="#">Details</a>
                                            <span class="mu-course-price" href="#">$165.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="mu-latest-course-single">
                                    <figure class="mu-latest-course-img">
                                        <a href="#"><img src="{{asset('public/img/courses/2.jpg')}}" alt="img"></a>
                                        <figcaption class="mu-latest-course-imgcaption">
                                            <a href="#">Engineering </a>
                                            <span><i class="fa fa-clock-o"></i>75Days</span>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-latest-course-single-content">
                                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                        <div class="mu-latest-course-single-contbottom">
                                            <a class="mu-course-details" href="#">Details</a>
                                            <span class="mu-course-price" href="#">$165.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="mu-latest-course-single">
                                    <figure class="mu-latest-course-img">
                                        <a href="#"><img src="{{asset('public/img/courses/3.jpg')}}" alt="img"></a>
                                        <figcaption class="mu-latest-course-imgcaption">
                                            <a href="#">Academic</a>
                                            <span><i class="fa fa-clock-o"></i>45Days</span>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-latest-course-single-content">
                                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                        <div class="mu-latest-course-single-contbottom">
                                            <a class="mu-course-details" href="#">Details</a>
                                            <span class="mu-course-price" href="#">$165.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="mu-latest-course-single">
                                    <figure class="mu-latest-course-img">
                                        <a href="#"><img src="{{asset('public/img/courses/1.jpg')}}" alt="img"></a>
                                        <figcaption class="mu-latest-course-imgcaption">
                                            <a href="#">Drawing</a>
                                            <span><i class="fa fa-clock-o"></i>90Days</span>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-latest-course-single-content">
                                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                        <div class="mu-latest-course-single-contbottom">
                                            <a class="mu-course-details" href="#">Details</a>
                                            <span class="mu-course-price" href="#">$165.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="mu-latest-course-single">
                                    <figure class="mu-latest-course-img">
                                        <a href="#"><img src="{{asset('public/img/courses/2.jpg')}}" alt="img"></a>
                                        <figcaption class="mu-latest-course-imgcaption">
                                            <a href="#">Engineering </a>
                                            <span><i class="fa fa-clock-o"></i>75Days</span>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-latest-course-single-content">
                                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                        <div class="mu-latest-course-single-contbottom">
                                            <a class="mu-course-details" href="#">Details</a>
                                            <span class="mu-course-price" href="#">$165.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="mu-latest-course-single">
                                    <figure class="mu-latest-course-img">
                                        <a href="#"><img src="{{asset('public/img/courses/3.jpg')}}" alt="img"></a>
                                        <figcaption class="mu-latest-course-imgcaption">
                                            <a href="#">Academic</a>
                                            <span><i class="fa fa-clock-o"></i>45Days</span>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-latest-course-single-content">
                                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                        <div class="mu-latest-course-single-contbottom">
                                            <a class="mu-course-details" href="#">Details</a>
                                            <span class="mu-course-price" href="#">$165.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End latest course content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End latest course section -->


    <!-- Start testimonial -->
    <section id="mu-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-testimonial-area">
                        <div id="mu-testimonial-slide" class="mu-testimonial-content">
                            <!-- start testimonial single item -->
                            <div class="mu-testimonial-item">
                                <div class="mu-testimonial-quote">
                                    <blockquote>
                                        <p>Đây là một hệ thống hữu ích, giúp tôi vừa học vừa có thể thi thử để tổng hợp kiến thức.</p>
                                    </blockquote>
                                </div>
                                <div class="mu-testimonial-img">
                                    <img src="{{asset('public/img/testimonial-1.png')}}" alt="img">
                                </div>
                                <div class="mu-testimonial-info">
                                    <h4>Phạm Luân</h4>
                                    <span>Thành viên</span>
                                </div>
                            </div>
                            <!-- end testimonial single item -->
                            <!-- start testimonial single item -->
                            <div class="mu-testimonial-item">
                                <div class="mu-testimonial-quote">
                                    <blockquote>
                                        <p>Có chứng chỉ tin học sẽ khiến tôi tự tin hơn khi dấn thân vào bất cứ văn phòng phỏng vấn công sở nào. Đây là website giúp tôi thực hiện điều đó.</p>
                                    </blockquote>
                                </div>
                                <div class="mu-testimonial-img">
                                    <img src="{{asset('public/img/testimonial-3.png')}}" alt="img">
                                </div>
                                <div class="mu-testimonial-info">
                                    <h4>Hà Thu</h4>
                                    <span>Thành viên</span>
                                </div>
                            </div>
                            <!-- end testimonial single item -->
                            <!-- start testimonial single item -->
                            <div class="mu-testimonial-item">
                                <div class="mu-testimonial-quote">
                                    <blockquote>
                                        <p>Tuyệt vời!</p>
                                    </blockquote>
                                </div>
                                <div class="mu-testimonial-img">
                                    <img src="{{asset('public/img/testimonial-2.png')}}" alt="img">
                                </div>
                                <div class="mu-testimonial-info">
                                    <h4>Tuấn Đặng</h4>
                                    <span>Thành viên</span>
                                </div>
                            </div>
                            <!-- end testimonial single item -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial -->
@endsection
