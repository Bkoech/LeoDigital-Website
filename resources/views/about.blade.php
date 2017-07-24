@extends('layouts.app')

<!-- /*===== set title =====*/ -->
@section('title')
О компании
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
Digital-агенство
@endsection

<!-- /*===== set keywords =====*/ -->
@section('keywords')
@endsection

<!-- /*===== set custom css =====*/ -->
@section('style_css')
<link rel="stylesheet" type="text/css" href="/css/default-styles.css">
<style type="text/css">
.hero__video-container video{width:100%!important;height:auto;}
</style>
@endsection

<!-- /*===== set custom javascript =====*/ -->
@section('style_javascript')
@endsection

<!-- /*===== set content =====*/ -->
@section('content')
<section id="top" class="hero hero--home" data-home-hero >
    @if (Identify::device()->getName() == 'iPad' || Identify::device()->getName() == 'Android' || Identify::device()->getName() == 'iPhone' || Identify::device()->getName() == 'Windows Phone')
    <div class="card card--divided" style="margin-top:19%;" alt="ui">
        <div class="card__content">
            <h1 class="title hidden">About Us</h1>
            <div class="reset-text">
                @foreach($abouts as $about)
                <p class="text-xl">{{ $about->title }}</p>
                {!! $about->content !!}
                @endforeach
            </div>
        </div>
        <div class="card__meta text-sm text-center">
            <p><img src="/images/logo2.png" alt="Catch_logo_white" width="180" /></p>
            <p><b>@lang('messages.about.logo')</b></p>
            <p>&nbsp;</p>
            <p>@lang('messages.about.slogo')</p>
            <p><a href="mailto:office@leodigital.com.ua">office@leodigital.com.ua</a><br><a href="tel:+380443600580">+38 (044) 360 05 80</a></p>
        </div>
    </div>
    @else
    <div class="hero__video-container">
        <video id="video-home-section" style="overflow:hidden;z-index:-999;position:absolute;" width="100%" height="auto" preload="auto" autoplay="autoplay" loop="loop">
            <source id="video-home-section-src" src="/video/Tokio.webm" type="video/webm">
            </video>
            <div class="hero__video-container__overlay" data-home-hero-overlay></div>
        </div>
        <div class="hero__content" data-home-hero-text>
            <div alt="ui">
                <div class="container card-container text-left">
                    <div class="card card--divided" style="margin-top:-20%;" alt="ui">
                        <div class="card__content">
                            <h1 class="title hidden">About Us</h1>
                            <div class="reset-text">
                                @foreach($abouts as $about)
                                <p class="text-xl">{{ $about->title }}</p>
                                {!! $about->content !!}
                                @endforeach
                            </div>
                        </div>
                        <div class="card__meta text-sm text-center">
                            <p><img src="/images/logo2.png" alt="Catch_logo_white" width="180" /></p>
                            <p><b>@lang('messages.about.logo')</b></p>
                            <p>&nbsp;</p>
                            <p>@lang('messages.about.slogo')</p>
                            <p><a href="mailto:office@leodigital.com.ua">office@leodigital.com.ua</a><br><a href="tel:+380443600580">+38 (044) 360 05 80</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    </section>
@endsection