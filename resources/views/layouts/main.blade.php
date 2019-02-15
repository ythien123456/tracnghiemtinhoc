<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.min.css')}}">
    <title>Trắc Nghiệm Tin Học Online</title>
</head>
<body>
{{--Begin Header--}}
<header id="header">
    <div class="container">
        <div class="row headerContent">
            <div class="col-md-4 headerLeft">
                <img src="https://wiki.duraspace.org/download/attachments/31655033/duracloud_logo_12in.png"
                     width="100%">
            </div>
            <div class="col-md-4 headerMid">
                <img src="https://rajshahirsomoy.com/wp-content/uploads/2017/12/YourAdHere2.png" width="100%">
                <p>Tham gia vào chiến dịch Tôi đi tìm tôi ngay!!! </p>
            </div>
            <div class="col-md-4 headerRight text-center"><br>
                <a href="login"><button class="btn btn-primary">⛄ Đăng nhập</button></a>
                <a href="logout"><button class="btn btn-danger">✍ Đăng ký</button></a>
            </div>
        </div>
    </div>
</header>
{{--End Header--}}

{{--Begin Body--}}
<div id="navbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/tracnghiemtinhoc">🏠 HOME</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentLG"
                    aria-controls="navbarSupportedContentLG" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContentLG">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="de-chuan">📰 đề chuẩn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="de-tong-hop">📰 đề tổng hợp</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLG" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            📰 đề theo module
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownLG">
                            <a class="dropdown-item" href="internet">Internet</a>
                            <a class="dropdown-item" href="he-dieu-hanh">Hệ điều hành</a>
                            <a class="dropdown-item" href="cong-nghe-thong-tin">CNTT</a>
                            <a class="dropdown-item" href="word">WORD</a>
                            <a class="dropdown-item" href="excel">EXCEL</a>
                            <a class="dropdown-item" href="powerpoint">Powerpoint</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bai-hoc">📖 Bài học</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="GET">
                    <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm.." aria-label="Search">
                    <button class="btn btn-outline-dark btn-info my-2 my-sm-0" type="submit">🔍</button>
                </form>
            </div>
        </nav>
    </div>
</div>

<section id="examPromo">
    <h2 class="text-center">Thi theo từng module</h2>
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
                    <img src="https://www.mckinsey.com/~/media/McKinsey/Business%20Functions/McKinsey%20Digital/Our%20Insights/Making%20sense%20of%20Internet%20of%20Things%20platforms/Making-sense-of-Internet-of-Things-platforms-1536x1536-100_Standard.ashx?mw=1536&car=72:35&cq=50&tco=100"
                         alt="Internet" width="1100" height="500">
                    <a href="internet">
                        <div class="carousel-caption d-none d-block d-md-block">
                            <h3>Internet</h3>
                            <p>Hiểu biết cơ bản về Internet<br>40 câu - 40 phút</p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <img src="https://www.pesystems.com/wp-content/uploads/2013/11/InfoTech-940x380-1-940x380.png"
                         alt="CNTT" width="1100" height="500">
                    <a href="cong-nghe-thong-tin">
                        <div class="carousel-caption d-none d-block d-md-block">
                            <h3>Công Nghệ Thông Tin</h3>
                            <p>Hiểu biết cơ bản về Công Nghệ Thông Tin<br>40 câu - 40 phút</p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <img src="https://i.pinimg.com/originals/f5/e1/8f/f5e18f8664709145f7d4982906419bc2.jpg"
                         alt="Hệ Điều Hành" width="1100" height="500">
                    <a href="he-dieu-hanh">
                        <div class="carousel-caption d-none d-block d-md-block">
                            <h3>Hệ Điều Hành</h3>
                            <p>Hiểu biết cơ bản về Internet<br>40 câu - 40 phút</p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <img src="http://bimbon.vn/wp-content/uploads/2016/08/meo_dung_word_office.png" alt="Los Angeles"
                         width="1100" height="500">
                    <a href="word">
                        <div class="carousel-caption d-none d-block d-md-block">
                            <h3>Word</h3>
                            <p>Hiểu biết cơ bản về Internet<br>40 câu - 40 phút</p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <img src="http://maribelajar.org/media/1082/excel.jpg" alt="Chicago" width="1100" height="500">
                    <a href="excel">
                        <div class="carousel-caption d-none d-block d-md-block">
                            <h3>Excel</h3>
                            <p>Hiểu biết cơ bản về Internet<br>40 câu - 40 phút</p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <img src="https://www.ronapresentasi.com/wp-content/uploads/2017/10/cara-memperkecil-ukuran-file-powerpoint.jpg"
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
            <div class="col-md-3 whyOptions op1">
                <div class="optionText">
                    <h5>Đa Dạng Đề Thi</h5>
                    <p>Với các đề thi được chia theo nhiều định dạng khác nhau giúp bạn có thể tùy chỉnh hình thức ôn
                        tập của mình theo ý muốn.</p>
                </div>
            </div>
            <div class="col-md-3 whyOptions op2">
                <div class="optionText">
                    <h5>Bám Sát Thực Tế</h5>
                    <p>Các đề thi được soạn dựa trên các đề thi thực tế ở các trung tâm cấp chứng chỉ uy tín.<Br>Được
                        cập nhật liên tục để phù hợp với đề thi hiện tại bên ngoài.</p>
                </div>
            </div>
            <div class="col-md-3 whyOptions op3">
                <div class="optionText">
                    <h5>Bài Viết Kiến Thức</h5>
                    <p>Các kiến thức về các mẹo làm bài, kiến thức chung để đạt điểm cao sẽ liên tục được cập nhật trên
                        trang web.<br>Hãy theo dõi chúng tôi thường xuyên hơn.</p>
                </div>
            </div>
            <div class="col-md-3 whyOptions op4">
                <div class="optionText">
                    <h5>Biết Điểm Ngay</h5>
                    <p>Bạn có thể biết điểm của mình ngay sau khi bấm kết thúc làm bài!<br>Điểm của bạn sẽ được lưu vào
                        hệ thống để bạn tự đánh giá sự tiến bộ của mình trong tương lai.</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{--End Body--}}

{{--Begin Footer--}}
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3 class="text-center">About</h3>
                Chúng tôi là một đội ngũ nhiệt huyết, với mong muốn cống hiến cho cộng đồng những giá trị có tính thực
                tế cao.<br>
                Chúng tôi đang thực hiện mục đích của mình với sự ra đời của trang web này.
            </div>
            <div class="col-md-3">
                <h3 class="text-center">Privacy</h3>
                <ul>
                    <li>Chính sách bảo mật</li>
                    <li>Chính sách quyền tác giả</li>
                    <li>Chính sách blah blah</li>
                    <li>Chính sách blah blah</li>
                    <li>Chính sách blah blah</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3 class="text-center">Partners</h3>
                <ul>
                    <li>Blah</li>
                    <li>Blah</li>
                    <li>Blah</li>
                    <li>Blah</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3 class="text-center">Contact</h3>
                Đại học công nghiệp TP.HCM (IUH)<br>
                Github: ythien123456<br>
                Email: ad@gmail.com
            </div>
        </div>
    </div>
</footer>
{{--End Footer--}}
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('public/js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>

</html>