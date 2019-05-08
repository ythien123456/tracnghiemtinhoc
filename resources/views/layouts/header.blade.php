<!--START SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
</a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header  -->
<header id="mu-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mu-header-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="mu-header-top-left">
                                <div class="mu-top-email">
                                    <i class="fa fa-envelope"></i>
                                    <span>thiennguyen0897@gmail.com</span>
                                </div>
                                <div class="mu-top-phone">
                                    <i class="fa fa-phone"></i>
                                    <span>(0935) 029 097</span>
                                </div>
                            </div>
                        </div>
                        @if(session('Role')>=2)
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="mu-header-top-right">
                                    <nav>
                                        <ul class="mu-top-social-nav">
                                            {!! session('Role')==3 ?
                                            '<li><a href="'.route('adminDashboard').'">Admin Panel</a></li>' :
                                            '<li><a href="'.route('editorDashboard').'">Editor Panel</a></li>' !!}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header  -->