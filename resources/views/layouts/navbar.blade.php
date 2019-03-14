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
                        <a class="nav-link" href="{{url('de-chuan')}}">📰 đề chuẩn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('de-tong-hop')}}">📰 đề tổng hợp</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLG" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            📰 đề theo module
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownLG">
                            <a class="dropdown-item" href="{{url('de-theo-module/internet')}}">Internet</a>
                            <a class="dropdown-item" href="{{url('de-theo-module/he-dieu-hanh')}}">Hệ điều hành</a>
                            <a class="dropdown-item" href="{{url('de-theo-module/cong-nghe-thong-tin')}}">CNTT</a>
                            <a class="dropdown-item" href="{{url('de-theo-module/word')}}">WORD</a>
                            <a class="dropdown-item" href="{{url('de-theo-module/excel')}}">EXCEL</a>
                            <a class="dropdown-item" href="{{url('de-theo-module/powerpoint')}}">Powerpoint</a>
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