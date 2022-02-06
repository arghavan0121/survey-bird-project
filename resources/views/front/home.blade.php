<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('landing/img/delta-fav.png') }}" type="image/gif" sizes="16x16">
    <title>Survey Bird</title>
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/boxicons/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
</head>

<body>
    <nav id="sidebar">
        <div class="sidebar-header text-right">
            <h5 class="mb-0">پرسمان</h5>
        </div>

        <ul class="list-unstyled components text-right">
            <li class="nav-item">
                <a class="nav-link px-3" href="#">صفحه اصلی</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3" href="#service">امکانات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3" href="#pricing">قیمت گذاری</a>
            </li>
        </ul>
        <div class="px-3 pb-3 w-250 text-right">
            <p><a class="nav-link px-3" href="#">شرایط و ضوابط</a></p>
            <p><a class="nav-link px-3" href="#">سیاست حفظ حریم خصوصی</a></p>
            <p><a class="nav-link px-3" href="#">سوالات متداول</a></p>
        </div>
        <div class="d-flex px-3 w-250">

            @auth
                <a href="{{ route('login') }}" class="btn btn-primary btn-sm ml-3">ورود به پنل کاربری</a>
            @endauth
            @guest
                <a href="{{ route('login') }}" class="btn btn-primary btn-sm ml-3">ورود</a>
                <a href="{{ route('register') }}" class="btn btn-outline-primary btn-sm">ثبت نام</a>
            @endguest

        </div>
    </nav>
    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
        <div class="container cont">
            <a class="navbar-brand nav-brand" href="#">
                <img src="{{ asset('logos/landing-page-logo.png') }}" class="img-fluid">
            </a>
            <button type="button" id="sidebarCollapse" class="btn d-lg-none p-0 bg-transparent">
                <i class="bx bx-menu-alt-left bx-md"></i>
            </button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item ">
                        <a class="nav-link px-3" href="/">صفحه اصلی <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#service">امکانات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#pricing">قیمت گذاری</a>
                    </li>
                </ul>
                <div>

                    @auth
                        <a href="{{ route('login') }}" class="btn btn-primary">ورود به پنل کاربری</a>
                    @endauth
                    @guest
                        <a href="{{ route('login') }}" class="btn btn-primary">ورود</a>
                        <a href="{{ route('register') }}" class="btn btn-outline-primary ml-2">ثبت نام</a>
                    @endguest

                </div>
            </div>
        </div>
    </nav>

    <div class="banner-bg pb-3 pt-md-5">
        <div class="container pb-2 pt-md-5">
            <div class="row py-5 justify-content-between align-items-center">
                <div class="col-lg-6 col-md-7 py-5 text-right">
                    <h2 class="font-weight-bold display-5 mb-4">ساختن نظرسنجی آنلاین هیچوقت از این آسان تر نبوده.</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-size">همین حالا شروع کنید</a></div>
                </div>
            </div>
        </div>
    </div>

    <section class="section bg-grey feature-sec-1" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center text-right order-2 order-md-1">
                    <h2 class="section-title mb-4">ایجاد یک تجربه کاملا برند</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center order-1 order-md-2">
                    <img src="{{ asset('landing/img/blue-1.png') }}" class="img-fluid d-block mx-auto">
                </div>
            </div>
        </div>
    </section>

    <section class="section feature-sec-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center">
                    <img src="{{ asset('landing/img/blue-2.png') }}" class="img-fluid d-block mx-auto">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-right align-self-center">
                    <h2 class="section-title mb-4">10 نوع سوال</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-grey feature-sec-1" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 text-right align-self-center order-2 order-md-1">
                    <h2 class="section-title mb-4">اشتراک گذاری نظرسنجی های خود</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center order-1 order-md-2">
                    <img src="{{ asset('landing/img/blue-1.png') }}" class="img-fluid d-block mx-auto">
                </div>
            </div>
        </div>
    </section>

    <section class="section feature-sec-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center">
                    <img src="{{ asset('landing/img/blue-2.png') }}" class="img-fluid d-block mx-auto">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 text-right col-sm-12 align-self-center">
                    <h2 class="section-title mb-4">تجزیه و تحلیل پاسخ ها</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
            </div>
        </div>
    </section>

    <!--Price section-->
    <section class="section bg-grey" id="pricing">
        <div class="text-center">
            <h2 class="mb-4">طرح های قیمت گذاری</h2>
            <p class="px-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
        </div>
        <div class="container">
            <div class="row">
                @foreach($plans as $plan)
                    <div class="col-lg-4 col-md-12 col-12 mt-5">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h3 class="pricing-title">{{ $plan->title }}</h3>
                            </div>
                            <div class="pricing-body">
                                <div class="number">
                                    <span>{{ $loop->index + 1}}</span>
                                </div>
                                <div class="price-wrapper">
{{--                                    <span class="currency">$</span>--}}
                                    <span class="price">{{ $plan->price }}</span>
                                    @if($plan->interval == 'monthly')
                                        @php $interval = 'ماهانه' @endphp
                                    @elseif($plan->interval == 'yearly')
                                        @php $interval = 'سالانه' @endphp
                                    @endif
                                    <span class="period">/{{ $interval }}</span>
                                </div>
                                <ul class="list">
                                    @foreach (explode("\n", str_replace("\r", "", $plan->description)) as $feature)
                                        <li class="active">{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="pricing-footer">
                                <a href="{{ route('register') }}" class="btn btn-primary">انتخاب طرح</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--bottom banner-->
    <section class="section parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="info">
                        <h4>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم <br>از صنعت چاپ و با استفاده از طراحان گرافیک است.</h4>
                        <a class="btn btn-secondary mt-3" href="{{ route('register') }}">ایجاد حساب کاربری</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <footer class="footer">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 text-right">
                        <div class="widget widget-about">
                            <h3>پرسمان</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>

                            <div class="social-icons">
                                <a href="#" class="social-icon" target="_blank" title="Facebook"><i
                                        class="bx bxl-facebook"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Twitter"><i
                                        class="bx bxl-twitter"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Instagram"><i
                                        class="bx bxl-instagram"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Youtube"><i
                                        class="bx bxl-youtube"></i></a>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3 text-right">
                        <div class="widget">
                            <h6 class="widget-title">آشنایی با ما</h6>
                            <ul class="widget-list">
                                <li><a href="#">درباره ما</a></li>
                                <li><a href="#">وبلاگ ما</a></li>
                                <li><a href="#">خدمات</a></li>
                                <li><a href="#">نقشه سایت</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3 text-right">
                        <div class="widget">
                            <h6 class="widget-title">راهنمایی</h6>
                            <ul class="widget-list">
                                <li><a href="#">قیمت گذاری</a></li>
                                <li><a href="#">سوالات متداول</a></li>
                                <li><a href="#">تماس با ما</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3 text-right">
                        <div class="widget">
                            <h6 class="widget-title">خط مشی</h6>
                            <ul class="widget-list">
                                <li><a href="#">شرایط و ضوابط</a></li>
                                <li><a href="#">سیاست و حفظ حریف خصوصی</a></li>
                                <li><a href="#">حفاظت از داده و محرمانگی</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container text-center">
                <p class="footer-copyright">تمامی مطالب متعلق به سایت پرنده نظرسنجی می باشد. © </p>
            </div>
        </div>
    </footer>

    <!---start GOFTINO code--->
    <script type="text/javascript">
        !function(){var i="q74qPt",a=window,d=document;function g(){var g=d.createElement("script"),s="https://www.goftino.com/widget/"+i,l=localStorage.getItem("goftino_"+i);g.async=!0,g.src=l?s+"?o="+l:s;d.getElementsByTagName("head")[0].appendChild(g);}"complete"===d.readyState?g():a.attachEvent?a.attachEvent("onload",g):a.addEventListener("load",g,!1);}();
    </script>
    <!---end GOFTINO code--->
    <script src="{{ asset('landing/js/jquery-3.6.0.slim.min.js') }}"></script>
    <script src="{{ asset('landing/js/popper.min.js') }}"></script>
    <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('landing/js/custom.js') }}"></script>
</body>
</html>
