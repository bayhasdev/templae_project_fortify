<!doctype html>
<html lang="ar">

<head>
    <title> @yield('title') - {{ config('app.name', 'App Coder') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="{{ url('assets/images/logo.png') }}" style="width: 25px;height: 25px;">

    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/bootstrap5/css/bootstrap.rtl.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('assets/bootstrap5/css/signin.css') }}" rel="stylesheet">
</head>

<body class="text-center" dir="rtl">
    <main>
        <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    {{-- Login Form --}}
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                        @yield('content')

                    </div>

                    <div class="col-md-9 col-lg-6 col-xl-5">
                        {{-- <img src="{{ url('assets/images/logo.png') }}" class="img-fluid" alt="{{ env('APP_NAME', 'App Coder') }}"> --}}
                        <img src="{{ url('assets/images/auth_image.webp') }}" class="img-fluid"
                            alt="{{ env('APP_NAME', 'App Coder') }}">
                    </div>

                </div>
            </div>
            <div
                class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
                <!-- Copyright -->
                <div class="text-white mb-3 mb-md-0">
                    جميع الحقوق محفوظة © {{ date('Y') }} .
                </div>
                <!-- Copyright -->

                <!-- Right -->
                <div>
                    <a href="#!" class="text-white me-4">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#!" class="text-white me-4">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#!" class="text-white me-4">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#!" class="text-white">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <!-- Right -->
            </div>
        </section>
    </main>
</body>

</html>
