@extends('layouts.app')
@section('title', 'login')

@section('content')

    <div class="os-login os-item">
        <h2 class="os-bold"> ورود به حساب </h2>

        <div class="os-border"></div>

        <form>
            <div class="os-input">
                <label for="email" class="os-light">ایمیل</label>
                <input type="email" id="email" class="os-bg error" placeholder="ایمیل خود را وارد کنید" autofocus>
                <p class="error_text os-light"> ایمیل نامعتبر </p>
            </div>

            <div class="os-input">
                <label for="password" class="os-light">رمز عبور</label>
                <input type="password" id="password" class="os-bg" placeholder="رمز عبور خود را وارد کنید">
            </div>

            <button class="btn_log os-bold"> ورود به حساب </button>
        </form>
    </div>

@endsection
