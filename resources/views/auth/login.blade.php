@extends('auth.layout')

@section('title', 'تسجيل الدخول')

@section('content')
    <div class="divider d-flex align-items-center my-4">
        <p class="text-center h2 fw-bold mx-3 mb-3">تسجيل الدخول</p>
    </div>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf

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


        <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" checked value="remember-me" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                    تذكرني
                </label>
            </div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-body"> نسيت كلمة المرور
                    ؟</a>
            @endif
        </div>

        <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">تسجيل
                الدخول</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">ليس لديك حساب ؟<a href="{{ route('register') }}"
                    class="link-danger">انشاء حساب</a></p>
        </div>

    </form>

@stop
