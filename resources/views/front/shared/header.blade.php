<nav id="sidebar">
    <div class="sidebar-header text-right">
        <h5 class="mb-0">پرسمان</h5>
    </div>

    <ul class="list-unstyled components text-right">
        <li class="nav-item">
            <a class="nav-link px-3" href="/porseman">صفحه اصلی</a>
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
                    <a class="nav-link px-3" href="/#service">امکانات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="/#pricing">قیمت گذاری</a>
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
