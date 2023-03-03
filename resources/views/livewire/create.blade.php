@extends('layouts.app')
@section('title', 'create ticket')

@section('content')

    <div class="os-login upl os-item">
        <!-- top login -->
        <h2 class="os-bold">آپلود فایل</h2>
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
                    <label for="title" class="os-light">موضوع</label>
                    <input type="text" id="title" class="os-bg" name="title" placeholder="موضوع تیکت" autofocus>
                </div>
                <!-- input os -->

                <!-- input os -->
                <div class="os-input">
                    <label for="departeman"> دپارتمان </label>
                    <select name="departeman" class="os-bg" id="departeman">
                        <option value="انتخاب کنید">انتخاب کنید</option>
                        <option value="فوری">فوری</option>
                    </select>
                </div>
                <!-- input os -->
            </div>
            <!-- group -->

            <!-- input os -->
            <div class="os-input">
                <label for="description" class="os-light">متن دلخواه</label>
                <textarea  class="os-bg" name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <!-- input os -->

            <!-- input os -->
            <div class="os-input">
                <label for="file" class="os-light">آپلود فایل</label>
                <input type="file" id="file" name="file" class="os-bg">
            </div>
            <!-- input os -->

            <!-- button -->
            <button class="btn_log os-bold">ارسال اطلاعات</button>
            <!-- button -->
        </form>
        <!-- form -->
    </div>

@endsection
