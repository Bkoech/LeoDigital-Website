@extends('layouts.app')

<!-- /*===== set title =====*/ -->
@section('title')
Комплексное digital-продвижение
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
Комплексный подход к продвижению Вашего бизнеса
@endsection

<!-- /*===== set Open Graph =====*/ -->
@section('open_graph')
<meta property="fb:admins" content="leodigital.com.ua" />
<meta property="og:site_name" content="LeoDigital" />
<meta property=”og:type” content="website" />
<meta property="og:title" content="Digital New-Media Agency" />
<meta property="og:description " content="Комплексный подход к продвижению Вашего бизнеса" />
<meta property="og:locale" content="ru_RU" />
<meta property="og:url" content="https://leodigital.com.ua" />
<meta property="og:image" content="https://leodigital.com.ua/public/images/bg-home.png" />
@endsection

<!-- /*===== set keywords =====*/ -->
@section('keywords')
@endsection

<!-- /*===== set custom css =====*/ -->
@section('style_css')
<link rel="stylesheet" type="text/css" href="/css/default-styles.css">
<style type="text/css">
	.fbmessenger {display:none;}
</style>
@endsection

<!-- /*===== set custom javascript =====*/ -->
@section('style_javascript')
<script type="text/javascript">
$(document).ready(function(){$("a[href=#top]").click(function(){return $("html, body").animate({scrollTop:0},"slow"),!1})}),$(document).ready(function(){$(window).scroll(function(){var e=$("body").scrollTop(),o=document.getElementById("video-home-section").style.height+105;e>o?$(".fbmessenger").css("display","block"):$(".fbmessenger").css("display","none")})});
</script>
@endsection

<!-- /*===== set content =====*/ -->
@section('content')
<section id="top" class="hero hero--home" data-home-hero>
	<div class="hero__gallery is-visible" style="background-image: url(https://leodigital.com.ua/public/images/bg-home.png);" data-gallery="https://leodigital.com.ua/public/images/bg-home.png">
		<img data-src="https://leodigital.com.ua/public/images/bg-home.png" class="hidden" data-gallery-src="0" alt="Home | LeoDigital" src="https://leodigital.com.ua/public/images/bg-home.png">
		<img data-src="https://leodigital.com.ua/public/images/bg-home.png" class="hidden" data-gallery-src="1" alt="Home | LeoDigital" src="https://leodigital.com.ua/public/images/bg-home.png">
	</div>
	<div class="hero__video-container">
		<video id="video-home-section" width="100%" height="auto" preload="auto" autoplay="autoplay" loop="loop">
			<source id="video-home-section-src" src="/video/Tokio.mp4" type="video/mp4">
		</video>
		<div class="hero__video-container__overlay" data-home-hero-overlay></div>
	</div>
	<div class="hero__content" data-home-hero-text>
		<div alt="ui">
			<div class="glitch" data-text="LeoDigital">LeoDigital</div>
			<div alt='ui-2'>
				<p class="personal-leo">
					<span id="personal-typed"></span>
				</p>
			</div>
		</div>
	</div>
	<div class="menu-top-menu-container butt">
		<a href="#uls" class="hero__scroll-button" data-home-hero-scroll-button style="opacity: 1;">
			<i class="fa fa-angle-down hero__scroll-button__icon"></i>
		</a>
	</div>
</section>
<main class="site-wrapper" data-footer-before>
	<section  class="page-section" id="uls">
		<div class="col-md-8 col-md-offset-2 text-center uls" style="padding: 0 0 15px 0;">
			<h2>@lang('messages.home.service_title')</h2>
			<h1 style="font-size:18px;text-transform:lowercase;color:#000;line-height:1.7;font-weight:300;">@lang('messages.home.service_description')</h1>
		</div>
		<div class="clearfix"></div>
		<div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 bmargin">
			<div class="item-holder">
				<ul class="tabs4 text-center">
					@foreach($services as $indexKey => $service)
					<li class="service-list active menu-item-42">
						<a href="#example-4-tab-{{$indexKey+1}}" target="_self"><span class="{{$service->icon}}"></span>
							<h5 class="dosis nopadding uppercase">{{$service->title}}</h5>
						</a>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="tabs-content4" id="tabs444">
			@foreach($services as $indexKey => $service)
			@if ($indexKey == 0)
			<div id="example-4-tab-{{$indexKey+1}}" class="tabs-panel6">
				<div class="col-md-6 col-sm-6 nopadding bmargin" style="padding-left:0;padding-right:0"> <img src="{{$service->image}}" title="Комплексное digital-продвижение | LeoDigital" alt="{{ $service->title }} | LeoDigital" class="img-responsive"> </div>
				<div class="col-md-6 col-sm-6" style="padding-right: 0 !important">
					<div class="tab-text-holder bmargin" style="padding-left:15px;padding-right:15px">
						<h3 class="uppercase dosis">{{$service->description}}</h3>
						<div class="text-box-right" style="font-size:14px;text-align:justify;">
							{!!$service->content!!}
						</div>
					</div>
				</div>
			</div>
			@else
			<div id="example-4-tab-{{$indexKey+1}}" class="tabs-panel6" style="display: none;">
				<div class="col-md-6 col-sm-6 nopadding bmargin" style="padding-left:0;padding-right:0"> <img src="{{$service->image}}" title="Комплексное digital-продвижение | LeoDigital" alt="{{ $service->title }} | LeoDigital" class="img-responsive"> </div>
				<div class="col-md-6 col-sm-6" style="padding-right: 0 !important">
					<div class="tab-text-holder bmargin" style="padding-left:15px;padding-right:15px">
						<h3 class="uppercase dosis">{{$service->description}}</h3>
						<div class="text-box-right" style="font-size:14px;text-align:justify;">
							{!!$service->content!!}
						</div>
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
	</section>
	<section id="projects_" class="page-section page-section--sm">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2>@lang('messages.home.portfolio_title')</h2>
					<p>@lang('messages.home.portfolio_description')</p>
				</div>
			</div>
		</div>
	</section>
	<section class="page-section page-section--alt page-section--offset">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div class="portfolio-grid" data-portfolio-grid>
						@foreach($projects as $project)
						<a href="/{{ $locale }}/project/{{ $project->slug }}">
							<div class="portfolio-grid__item" data-portfolio-grid-item="{{ $project->id }}">
								<div class="portfolio-grid__item__background">
									<img src="{{ $project->image }}" title="Комплексное digital-продвижение | LeoDigital" alt="{{ $project->title }} | LeoDigital" width="570" height="381.21" style="height:381.21px;width:570px">
								</div>
								<div class="portfolio-grid__item__content">
									<div class="portfolio-grid__item__text">
										<h2 class="margin-reset-bottom">{{ $project->title }}</h2>
										<p class="text-uppercase margin-reset-top">{{ $project->description }}</p>
									</div>
								</div>
							</div>
						</a>
						@endforeach
					</div>
					<a href="/{{$locale}}/portfolio" class="button-bar">
						@lang('messages.home.projects_title') <i class="button-bar__icon fa fa-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>
	</section>
@endsection
