<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>HomePage</h2>
    <ul>
        <li>
            <a class="dropdown-item" href="#" onclick="  document.getElementById('logout-form').submit();">
                تسجيل خروج
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        </li>
        <li>
            <label>
                <a href="{{ route('register') }}">انشاء حساب</a>
            </label>
        </li>
        <li>dd</li>
        <label>
            <a href="{{ route('login') }}">تسجيل دخول</a>
        </label>
         
    </ul>
</body>

</html>
