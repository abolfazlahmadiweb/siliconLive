@section('title', 'edit ticket')
<div class="os-login upl os-item">
    <!-- top login -->
    <h2 class="os-bold">آپلود فایل</h2>
    <!-- top login -->

    <!-- border -->
    <div class="os-border"></div>
    <!-- border -->

    @include('layouts.partials')

    <!-- form -->
    <form wire:submit.prevent="create">
        <!-- group -->
        <div class="group">
            <!-- input os -->
            <div class="os-input">
                <label for="title" class="os-light">موضوع</label>
                <input wire:model="title" type="text" id="title" class="os-bg @error('title') error @enderror" name="title"
                       placeholder="موضوع تیکت" autofocus>
                @error('title')
                <p class="error_text os-light"> {{$message}} </p>
                @enderror
            </div>
            <!-- input os -->

            <!-- input os -->
            <div class="os-input">
                <label for="planId"> دپارتمان </label>
                <select wire:model="planId" name="planId" class="os-bg @error('planId') error @enderror" id="planId">
                    <option value="0" selected>انتخاب کنید</option>
                    @foreach($plans as $plan)
                        <option value="{{$plan->id}}">{{$plan->persian_name . ' ' . $plan->name}}</option>
                    @endforeach
                </select>
                @error('planId')
                <p class="error_text os-light"> {{$message}} </p>
                @enderror
            </div>
            <!-- input os -->
        </div>
        <!-- group -->

        <!-- input os -->
        <div class="os-input">
            <label for="description" class="os-light">متن دلخواه</label>
            <textarea wire:model="body" class="os-bg @error('body') error @enderror" name="body" id="description" cols="30"
                      rows="10"></textarea>
            @error('body')
            <p class="error_text os-light"> {{$message}} </p>
            @enderror
        </div>
        <!-- input os -->

        <!-- input os -->
        <div class="os-input">
            <label for="file" class="os-light">آپلود فایل</label>
            <input wire:model="files" type="file" class="os-bg @error('files') error @enderror" multiple>
            @error('files.*')
            <p class="error_text os-light"> {{$message}} </p>
            @enderror
        </div>
        <!-- input os -->

        <!-- button -->
        <button class="btn_log os-bold">ارسال اطلاعات</button>
        <!-- button -->

        <div>
            @forelse($files as $file)
                <img src="{{asset('storage/'.$file->file)}}" alt="{{$file->ticket->id}}" width="100%" height="200px" class="mb-3">
            @empty

            @endforelse
        </div>
    </form>
    <!-- form -->
</div>
