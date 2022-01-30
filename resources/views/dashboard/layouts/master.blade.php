<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <title>{{ config('app.name', 'App Coder') }} لوحة التحكم @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="App Coder">
    <meta name="author" content="App Coder">
    <meta name="generator" content="Hugo 0.83.1">
    <link rel="icon" href="{{ url('assets/images/logo.png') }}" style="width: 25;height: 25;">

    <!-- filepond  stylesheet-->
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" />

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;500;700&display=swap" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/bootstrap5/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ url('assets/bootstrap5/css/dashboard.rtl.css') }}" rel="stylesheet">

</head>

<body dir="rtl">


    <header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{ route('dashboard.home') }}">
            {{ config('app.name', 'لوحة التحكم') }}
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="عرض/إخفاء لوحة التحكم">
            <span class="navbar-toggler-icon"></span>
        </button>


        @yield('custom_top_navbar')

        <div class="dropdown px-3">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <strong>{{ auth()->user()->name }}</strong>
                <img src="{{ url('assets/images/admin_avatar.jpg') }}" alt="" width="32" height="32"
                    class="rounded-circle me-2">
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="#">الحساب</a></li>
                <li><a class="dropdown-item" href="#">تغيير كلمة المرور</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item" href="#" onclick="  document.getElementById('logout-form').submit();">
                        تسجيل خروج
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf
                    </form>
                </li>
            </ul>
        </div>
        {{-- <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="{{ route('logout') }}" style="color: rgb(7, 7, 7)"
                    onclick="Event.preventDefault(); document.getElementById('logout-form').submit();">
                    تسجيل خروج
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </li>
        </ul> --}}
    </header>

    <div class="container-fluid">
        <div class="row">

            @include('dashboard.layouts.sidebar_menu')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                @yield('content')

            </main>
        </div>
    </div>


    <!-- filepond  script-->
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="{{ url('assets/bootstrap5/js/bootstrap.bundle.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
        integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous">
    </script>

    <script src="{{ url('assets/bootstrap5/js/dashboard.js') }}"></script>
    <script src="{{ url('assets/bootstrap5/js/dialogs.js') }}"></script>

    @yield('script')


</body>

</html>
