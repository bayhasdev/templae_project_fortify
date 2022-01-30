@extends('auth.layout')

@section('title', 'استعادة كلمة المرور')

@section('content')
    <div class="divider d-flex align-items-center my-4">
        <p class="text-center h2 fw-bold mx-3 mb-3">استعادة كلمة المرور</p>
    </div>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('password.email') }}" method="POST">
        @csrf

        <!-- Email input -->
        <div class="form-floating  mb-3">
            <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email"
                placeholder="البريد الإلكتروني" required>
            <label for="email">البريد الإلكتروني</label>
        </div>
        @include('layouts.messages.form_error',['name'=>'email'])


        <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">إرسال</button>
        </div>

    </form>

@stop
