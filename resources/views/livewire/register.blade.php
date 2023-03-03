@extends('layouts.app')
@section('title', 'register')

@section('content')

    <div class="os-login upl os-item">
        <!-- top login -->
        <h2 class="os-bold">ثبت نام</h2>
        <!-- top login -->

        <!-- border -->
        <div class="os-border"></div>
        <!-- border -->

        <!-- form -->
        <form action="" method="post">
            <!-- group -->
            <div class="group">
                <!-- input os -->
                <div class="os-input">
                    <label for="name" class="os-light">نام کاربری</label>
                    <input type="text" id="name" class="os-bg" placeholder="نام کاربری خود را وارد کنید" autofocus>
                </div>
                <!-- input os -->

                <!-- input os -->
                <div class="os-input">
                    <label for="email" class="os-light">ایمیل</label>
                    <input type="email" id="email" class="os-bg error" placeholder="ایمیل خود را وارد کنید">
                    <p class="error_text os-light"> ایمیل نامعتبر </p>
                </div>
                <!-- input os -->
            </div>
            <!-- group -->

            <!-- input os -->
            <div class="os-input">
                <label for="phone" class="os-light">شماره تلفن</label>
                <input type="text" id="phone" class="os-bg" placeholder="شماره تلفن را وارد کنید">
            </div>
            <!-- input os -->

            <!-- group -->
            <div class="group">
                <!-- input os -->
                <div class="os-input">
                    <label for="password" class="os-light">رمز عبور</label>
                    <input type="password" id="password" class="os-bg" placeholder="رمز عبور خود را وارد کنید">
                </div>
                <!-- input os -->

                <!-- input os -->
                <div class="os-input">
                    <label for="password2" class="os-light">تکرار رمز عبور</label>
                    <input type="password" id="password2" class="os-bg" placeholder="رمز عبور را مجدد وارد کنید">
                </div>
                <!-- input os -->
            </div>
            <!-- group -->

            <!-- button -->
            <button class="btn_log os-bold">ثبت نام</button>
            <!-- button -->
        </form>
        <!-- form -->
    </div>

@endsection
