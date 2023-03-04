@extends('layouts.app')
@section('title', 'ticket lists')

@section('content')

    <div class="os-container content">
        @include('layouts.partials')
        <!-- top table -->
        <div class="top_tbl">
            <h1 class="os-bold"> لیست تیکت </h1>
            <div class="left-tick">
                @livewire('logout')
                <a href="{{route('ticket.create')}}" class="os-item">
                    ثبت تیکت
                    <svg width="15" aria-hidden="true" focusable="false" data-prefix="fa-regular"
                         data-icon="octagon-plus" class="svg-inline--fa fa-octagon-plus fa-w-16" role="img"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M482.8 157.1l-127.1-127.9C346.4 20.8 334.1 16 323 16H188.9c-11.84 0-23.32 4.805-31.76 13.24L29.24 157.2C20.8 165.6 16 177 16 188.1v134.2c0 11.84 4.805 23.32 13.24 31.76l127.1 127.9C165.6 491.2 177 496 188.1 496h134.2c11.84 0 23.32-4.805 31.76-13.24l127.9-127.1C491.2 346.4 496 334.1 496 323V188.9C496 177 491.2 165.5 482.8 157.1zM448 321.7L321.8 448H190.3L64 321.8V190.3L190.2 64h131.4L448 190.2V321.7zM279.1 160c0-13.26-10.74-24-23.1-24S231.1 146.7 231.1 160v72H159.1C146.7 232 135.1 242.7 135.1 256c0 13.25 10.75 24 24 24h71.1V352c0 13.25 10.75 24 24 24s23.1-10.75 23.1-24V280h72c13.25 0 23.1-10.75 23.1-24c0-13.26-10.74-24-23.1-24h-72V160z"
                            fill="currentColor"/>
                    </svg>
                </a>
            </div>
        </div>
        <!-- top table -->

        <dib class="os-border"></dib>

        <!-- table -->
        <table class="os-item">
            <thead>
            <tr>
                <th>#</th>
                <th>تاریخ ثبت</th>
                <th>درخواست کننده</th>
                <th>موضوع درخواست</th>
                <th>فوریت</th>
                <th>سرپرست</th>
                <th>مدیر عامل</th>
                @if(!auth()->user()->is_user())
                    <th>عملیات</th>
                @endif
            </tr>
            </thead>

            <!-- t body -->
            <tbody>
            @forelse($tickets as $row => $ticket)
                <tr>
                    <td>{{$row + 1}}</td>
                    <td>{{$ticket->created_at->diffForHumans()}}</td>
                    <td>{{$ticket->user->name}}</td>
                    <td>{{\Illuminate\Support\Str::limit($ticket->title, 17)}}</td>
                    <td>{{$ticket->pelan->persian_name}}</td>
                    @if($ticket->supervisor() == null)
                        <td class="os-false">
                            <svg width="20" aria-hidden="true" focusable="false" data-prefix="fa-regular"
                                 data-icon="circle-xmark" class="svg-inline--fa fa-circle-xmark fa-w-16" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M336.1 175c-9.375-9.375-24.56-9.375-33.94 0L256 222.1L208.1 175c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94l47.03 47.03L175 303c-9.375 9.375-9.375 24.56 0 33.94c9.373 9.373 24.56 9.381 33.94 0L256 289.9l47.03 47.03c9.373 9.373 24.56 9.381 33.94 0c9.375-9.375 9.375-24.56 0-33.94l-47.03-47.03l47.03-47.03C346.3 199.6 346.3 184.4 336.1 175zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256S512 397.4 512 256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464z"
                                    fill="currentColor"/>
                            </svg>
                        </td>
                    @else
                        <td class="os-true">
                            <svg width="20" aria-hidden="true" focusable="false" data-prefix="fa-regular"
                                 data-icon="circle-check" class="svg-inline--fa fa-circle-check fa-w-16" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M335 175L224 286.1L176.1 239c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94l64 64C211.7 341.7 217.8 344 224 344s12.28-2.344 16.97-7.031l128-128c9.375-9.375 9.375-24.56 0-33.94S344.4 165.7 335 175zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464z"
                                    fill="currentColor"/>
                            </svg>
                        </td>
                    @endif
                    @if($ticket->ceo() == null)
                        <td class="os-false">
                            <svg width="20" aria-hidden="true" focusable="false" data-prefix="fa-regular"
                                 data-icon="circle-xmark" class="svg-inline--fa fa-circle-xmark fa-w-16" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M336.1 175c-9.375-9.375-24.56-9.375-33.94 0L256 222.1L208.1 175c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94l47.03 47.03L175 303c-9.375 9.375-9.375 24.56 0 33.94c9.373 9.373 24.56 9.381 33.94 0L256 289.9l47.03 47.03c9.373 9.373 24.56 9.381 33.94 0c9.375-9.375 9.375-24.56 0-33.94l-47.03-47.03l47.03-47.03C346.3 199.6 346.3 184.4 336.1 175zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256S512 397.4 512 256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464z"
                                    fill="currentColor"/>
                            </svg>
                        </td>
                    @else
                        <td class="os-true">
                            <svg width="20" aria-hidden="true" focusable="false" data-prefix="fa-regular"
                                 data-icon="circle-check" class="svg-inline--fa fa-circle-check fa-w-16" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M335 175L224 286.1L176.1 239c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94l64 64C211.7 341.7 217.8 344 224 344s12.28-2.344 16.97-7.031l128-128c9.375-9.375 9.375-24.56 0-33.94S344.4 165.7 335 175zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464z"
                                    fill="currentColor"/>
                            </svg>
                        </td>
                    @endif
                    @if(!auth()->user()->is_user())
                    <td>
                        <a href="{{route('ticket-show', $ticket->id)}}" class="btn_tbl os-item show">
                            مشاهده
                        </a>
                    </td>
                    @endif
                </tr>
            @empty
                data does not exists
            @endforelse
            </tbody>
            <!-- t body -->
        </table>
        <!-- table -->
    </div>

@endsection

