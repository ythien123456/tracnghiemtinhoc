@extends('layouts.main')

@section('content')
    <section id="examPromo">
        <h2 class="text-center">Đề thi theo từng module</h2>
        <div class="container mt-3">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{!! asset('public/images/carousel/carou1.jpg') !!}"
                             alt="Internet" width="1100" height="500">
                        <a href="internet">
                            <div class="carousel-caption d-none d-block d-md-block">
                                <h3>Internet</h3>
                                <p>Hiểu biết cơ bản về Internet<br>40 câu - 40 phút</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <img src="{!! asset('public/images/carousel/carou2.png') !!}"
                             alt="CNTT" width="1100" height="500">
                        <a href="cong-nghe-thong-tin">
                            <div class="carousel-caption d-none d-block d-md-block">
                                <h3>Công Nghệ Thông Tin</h3>
                                <p>Hiểu biết cơ bản về Công Nghệ Thông Tin<br>40 câu - 40 phút</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <img src="{!! asset('public/images/carousel/carou3.jpg') !!}"
                             alt="Hệ Điều Hành" width="1100" height="500">
                        <a href="he-dieu-hanh">
                            <div class="carousel-caption d-none d-block d-md-block">
                                <h3>Hệ Điều Hành</h3>
                                <p>Hiểu biết cơ bản về Internet<br>40 câu - 40 phút</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <img src="{!! asset('public/images/carousel/carou4.png') !!}" alt="Los Angeles"
                             width="1100" height="500">
                        <a href="word">
                            <div class="carousel-caption d-none d-block d-md-block">
                                <h3>Word</h3>
                                <p>Hiểu biết cơ bản về Internet<br>40 câu - 40 phút</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <img src="{!! asset('public/images/carousel/carou5.jpg') !!}" alt="Chicago" width="1100" height="500">
                        <a href="excel">
                            <div class="carousel-caption d-none d-block d-md-block">
                                <h3>Excel</h3>
                                <p>Hiểu biết cơ bản về Internet<br>40 câu - 40 phút</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <img src="{!! asset('public/images/carousel/carou6.jpg') !!}"
                             alt="New York" width="1100" height="500">
                        <a href="powerpoint">
                            <div class="carousel-caption d-none d-block d-md-block">
                                <h3>Powerpoint</h3>
                                <p>Hiểu biết cơ bản về Internet<br>40 câu - 40 phút</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>

    <section id="whyChooseUs">
        <h1>Vì sao bạn nên ôn tập kiến thức tại đây?</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-3 whyOptions" style="background-image: url('{!! asset('public/images/whyChooseUs/why1.jpg') !!}')">
                    <div class="optionText">
                        <h5>Đa Dạng Đề Thi</h5>
                        <p>Với các đề thi được chia theo nhiều định dạng khác nhau giúp bạn có thể tùy chỉnh hình thức ôn
                            tập của mình theo ý muốn.</p>
                    </div>
                </div>
                <div class="col-md-3 whyOptions" style="background-image: url('{!! asset('public/images/whyChooseUs/why2.jpg') !!}')">
                    <div class="optionText">
                        <h5>Bám Sát Thực Tế</h5>
                        <p>Các đề thi được soạn dựa trên các đề thi thực tế ở các trung tâm cấp chứng chỉ uy tín.<Br>Được
                            cập nhật liên tục để phù hợp với đề thi hiện tại bên ngoài.</p>
                    </div>
                </div>
                <div class="col-md-3 whyOptions" style="background-image: url('{!! asset('public/images/whyChooseUs/why3.jpg') !!}')">
                    <div class="optionText">
                        <h5>Bài Viết Kiến Thức</h5>
                        <p>Các kiến thức về các mẹo làm bài, kiến thức chung để đạt điểm cao sẽ liên tục được cập nhật trên
                            trang web.<br>Hãy theo dõi chúng tôi thường xuyên hơn.</p>
                    </div>
                </div>
                <div class="col-md-3 whyOptions" style="background-image: url('{!! asset('public/images/whyChooseUs/why4.jpg') !!}')">
                    <div class="optionText">
                        <h5>Biết Điểm Ngay</h5>
                        <p>Bạn có thể biết điểm của mình ngay sau khi bấm kết thúc làm bài!<br>Điểm của bạn sẽ được lưu vào
                            hệ thống để bạn tự đánh giá sự tiến bộ của mình trong tương lai.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
