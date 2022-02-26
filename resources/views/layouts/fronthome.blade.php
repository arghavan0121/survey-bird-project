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

<body class="hold-transition sidebar-mini"dir="rtl">

    @include('front.shared.header')
    @yield('content')
    @include('front.shared.footer')

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
