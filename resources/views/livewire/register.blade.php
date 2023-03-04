@section('title', 'register')
    <div class="os-login upl os-item">
        <!-- top login -->
        <h2 class="os-bold">ثبت نام</h2>
        <!-- top login -->

        <!-- border -->
        <div class="os-border"></div>
        <!-- border -->

        <!-- form -->
        <form wire:submit.prevent="register">
            <!-- group -->
            <div class="group">
                <!-- input os -->
                <div class="os-input">
                    <label for="name" class="os-light">نام کاربری</label>
                    <input wire:model="name" type="text" id="name" name="name" class="os-bg @error('name') error @enderror" placeholder="نام خود را وارد کنید" autofocus>
                    @error('name')
                        <p class="error_text os-light"> {{$message}} </p>
                    @enderror
                </div>
                <!-- input os -->

                <!-- input os -->
                <div class="os-input">
                    <label for="email" class="os-light">ایمیل</label>
                    <input wire:model="email" type="email" id="email" name="email" class="os-bg @error('email') error @enderror" placeholder="ایمیل خود را وارد کنید">
                    @error('email')
                    <p class="error_text os-light"> {{$message}} </p>
                    @enderror
                </div>
                <!-- input os -->
            </div>
            <!-- group -->

            <!-- input os -->
            <div class="os-input">
                <label for="phone" class="os-light">شماره تلفن</label>
                <input wire:model="phone" type="text" id="phone" name="phone" class="os-bg @error('phone') error @enderror" placeholder="شماره تلفن را وارد کنید">
                @error('phone')
                <p class="error_text os-light"> {{$message}} </p>
                @enderror
            </div>
            <!-- input os -->

            <!-- group -->
            <div class="group">
                <!-- input os -->
                <div class="os-input">
                    <label for="password" class="os-light">رمز عبور</label>
                    <input wire:model="password" type="password" id="password" name="password" class="os-bg @error('password') error @enderror" placeholder="رمز عبور خود را وارد کنید">
                    @error('password')
                    <p class="error_text os-light"> {{$message}} </p>
                    @enderror
                </div>
                <!-- input os -->

                <!-- input os -->
                <div class="os-input">
                    <label for="password2" class="os-light">تکرار رمز عبور</label>
                    <input wire:model="password_confirmation" type="password" id="password2" name="password_confirmation" class="os-bg" placeholder="رمز عبور را مجدد وارد کنید">
                </div>
                <!-- input os -->
            </div>
            <!-- group -->

            <!-- button -->
            <div>
                <button type="submit" class="btn_log os-bold">ثبت نام</button>
            </div>
            <!-- button -->
        </form>
        <!-- form -->
    </div>
