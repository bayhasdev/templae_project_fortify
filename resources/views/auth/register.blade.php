@extends('auth.layout')

@section('title', 'تسجيل الدخول')

@section('content')
    <div class="divider d-flex align-items-center my-4">
        <p class="text-center h2 fw-bold mx-3 mb-3">إنشاء حساب</p>
    </div>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <!-- name input -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" id="name" placeholder="الاسم" value="{{ old('name') }}"
                required>
            <label for="name">الاسم</label>
        </div>
        @include('layouts.messages.form_error',['name'=>'name'])

        <!-- Email input -->
        <div class="form-floating  mb-3">
            <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email"
                value="{{ old('email') }}" placeholder="البريد الإلكتروني" required>
            <label for="email">البريد الإلكتروني</label>
        </div>
        @include('layouts.messages.form_error',['name'=>'email'])

        <!-- Password input -->
        <div class="form-floating mb-3">
            <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password"
                name="password" placeholder="كلمة المرور" required>
            <label for="password">كلمة المرور</label>
        </div>
        @include('layouts.messages.form_error',['name'=>'password'])

        <!-- Password confirmation input -->
        <div class="form-floating mb-3">
            <input type="password" class="form-control  @error('password_confirmation') is-invalid @enderror"
                id="password_confirmation" name="password_confirmation" placeholder="تأكيد كلمة المرور" required>
            <label for="password_confirmation">تأكيد كلمة المرور</label>
        </div>
        @include('layouts.messages.form_error',['name'=>'password'])


        <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">إنشاء
                حساب</button>

            <p class="small fw-bold mt-2 pt-1 mb-0">لديك حساب مسبقاً ؟<a href="{{ route('login') }}"
                    class="link-danger">تسجيل دخول</a></p>
        </div>
    </form>


@stop
