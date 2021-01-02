{{--@extends('layouts.app')--}}

    @extends('front.index')
@section('content')
    <section id="intro2" class="clearfix"></section>
    <main class="container main2">

                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb bgcolor">
                        <li class="breadcrumb-item"><a href="/">خانه</a></li>
                        <li class="breadcrumb-item"><a href="#">منوی کاربری</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ثبت نام</li>
                    </ol>
                </nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('فعالسازی حساب کاربری') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('یک ایمیل به حساب کاربری شما ارسال شد لطفا جهت فعال شدن روی ان کلیک کنید.') }}
                        </div>
                    @endif

                    {{ __(' برای فعال سازی حساب کاربری خود دکمه زیر را کلیک نمایید.') }}
                    {{ __('تا ایمیل فعالسازی برای شما ارسال گردد.') }}

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf

                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">ارسال ایمیل فعالسازی</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </main>
@endsection


