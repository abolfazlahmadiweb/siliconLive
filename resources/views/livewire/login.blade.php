@extends('layouts.app')
@section('title', 'login')

@section('content')

    <div class="os-login os-item">
        <h2 class="os-bold"> ورود به حساب </h2>

        <div class="os-border"></div>

        <form>
            <div class="os-input">
                <label for="email" class="os-light">ایمیل</label>
                <input type="email" id="email" name="email" class="os-bg @error('email') error @enderror" placeholder="ایمیل خود را وارد کنید" autofocus>
                @error('email')
                    <p class="error_text os-light"> {{$message}} </p>
                @enderror
            </div>

            <div class="os-input">
                <label for="password" class="os-light">رمز عبور</label>
                <input type="password" id="password" name="password" class="os-bg @error('password') error @enderror" placeholder="رمز عبور خود را وارد کنید">
                @error('password')
                    <p class="error_text os-light"> {{$message}} </p>
                @enderror
            </div>

            <button class="btn_log os-bold"> ورود به حساب </button>
        </form>
    </div>

@endsection
