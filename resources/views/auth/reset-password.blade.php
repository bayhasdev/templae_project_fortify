@extends('auth.layout')

@section('title', 'استعادة كلمة المرور')

@section('content')
    <div class="divider align-items-center my-4">
        <p class="text-center h2 fw-bold mx-3 mb-2">استعادة كلمة المرور</p>
        <p class="text-center mx-3 mb-3">ادخال كلمة مرور جديدة </p>
    </div>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <!-- Email input -->
        <div class="form-floating  mb-3">
            <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email"
                value="{{ old('email') ?? request()->email }}" placeholder="البريد الإلكتروني" required>
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
            <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">إرسال</button>
        </div>

    </form>
@stop
