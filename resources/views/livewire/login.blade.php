@section('title', 'login')
<div class="os-login os-item">
    <h2 class="os-bold"> ورود به حساب </h2>

    <div class="os-border"></div>

    <form wire:submit.prevent="login">
        <div class="os-input">
            <label for="email" class="os-light">ایمیل</label>
            <input wire:model="email" type="email" id="email" name="email" class="os-bg @error('email') error @enderror"
                   placeholder="ایمیل خود را وارد کنید" autofocus>

            @if (session()->has('error'))
                <p class="error_text os-light"> {{ session('error') }} </p>
            @endif

            @error('email')
            <p class="error_text os-light"> {{$message}} </p>
            @enderror

        </div>

        <div class="os-input">
            <label for="password" class="os-light">رمز عبور</label>
            <input wire:model="password" type="password" id="password" name="password"
                   class="os-bg @error('password') error @enderror" placeholder="رمز عبور خود را وارد کنید">
            @error('password')
            <p class="error_text os-light"> {{$message}} </p>
            @enderror
        </div>

        <button class="btn_log os-bold"> ورود به حساب</button>
    </form>
</div>
