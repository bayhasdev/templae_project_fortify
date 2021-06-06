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

<body class="text-center" dir="rtl">

    <main class="form-signin">
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <img class="mb-4" src="{{ url('assets/images/logo.png') }}" alt="" height="200px">
            <h1 class="h5 mb-3 fw-normal">استعادة كلمة المرور</h1>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="form-floating">
                <input type="email" class="form-control   @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">البريد الالكتروني</label>
            </div>
            @include('layouts.messages.form_error',['name'=>'email'])

             
            <button class="w-100 btn btn-lg btn-primary" type="submit">ارسال</button>

             

            <p class="mt-5 mb-3 text-muted">&copy; {{ Date('Y', time()) }}</p>
        </form>
    </main>



</body>

</html>
