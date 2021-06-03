<!doctype html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>لوحة التحكم </title>




    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/bootstrap5/css/bootstrap.rtl.min.css') }}" rel="stylesheet">




    <!-- Custom styles for this template -->
    <link href="{{ url('assets/bootstrap5/css/signin.css') }}" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <img class="mb-4" src="{{ url('assets/images/logo.png') }}" alt="" height="200px">
            <h1 class="h5 mb-3 fw-normal">الرجاء تسجيل الدخول</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">البريد الالكتروني</label>
            </div>
            @include('layouts.messages.form_error',['name'=>'email'])

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">كلمة المرور</label>
            </div>
            @include('layouts.messages.form_error',['name'=>'password'])

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> تذكرني
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">تسجيل الدخول</button>

            <div class="checkbox mb-3 mt-3">
                <label>
                    <a href="{{ route('register') }}">انشاء حساب</a>
                </label>
            </div>

            <p class="mt-5 mb-3 text-muted">&copy; 2021–{{ time() }}</p>
        </form>
    </main>



</body>

</html>
