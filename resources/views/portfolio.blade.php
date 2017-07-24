@extends('layouts.app')

<!-- /*===== set title =====*/ -->
@section('title')
Портфолио
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
Наши клиенты
@endsection

<!-- /*===== set custom css =====*/ -->
@section('style_css')
<link rel="stylesheet" type="text/css" href="/css/default-styles.css">
<link rel="stylesheet" type='text/css' href="/portfolio/css/linea-icon.css">
<link rel="stylesheet" type='text/css' href="/portfolio/css/magnific-popup.css">
<link rel="stylesheet" type='text/css' href="/portfolio/css/owl.carousel.css">
<link rel="stylesheet" type='text/css' href="/portfolio/css/owl.theme.css">
<link rel="stylesheet" type='text/css' href="/portfolio/css/style.css">
<style rel="stylesheet" type="text/css">
@media(max-width:400px){.col-md-12{padding-left:6%!important}}
#preloader{display: none}
footer p {line-height:1.7;letter-spacing:.025em;margin-top:1rem;margin-bottom:1rem}
</style>
@endsection

<!-- /*===== set custom javascript =====*/ -->
@section('style_javascript')
<script type='text/javascript' src="/portfolio/js/jquery.flexslider-min.js"></script>
<script type='text/javascript' src="/portfolio/js/jquery.magnific-popup.min.js"></script>
<script type='text/javascript' src="/portfolio/js/jquery.isotope.js"></script>
<script type='text/javascript' src="/portfolio/js/jquery.sticky.min.js"></script>
<script type='text/javascript' src="/portfolio/js/imagesloaded.js"></script>
<script type='text/javascript' src="/portfolio/js/menuzord.js"></script>
<script type='text/javascript' src="/portfolio/js/scripts.js"></script>
<script type="text/javascript" src="/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
document.getElementById("prj-tr").classList.remove("header--transparent"),$(document).ready(function(){$("#various_sigle").fancybox({maxWidth:1200,minHeight:534,maxHeight:900,fitToView:!0,width:"90%",height:"80%",autoSize:!0,closeClick:!1,openEffect:"none",closeEffect:"none",padding:1})}),$(document).ready(function(){$(".swap-text-web").on({mouseenter:function(){$("span",this).html("@lang('messages.footer.button-not-origin-web')")},mouseleave:function(){$("span",this).html("@lang('messages.footer.button-origin-web')")}}),$(".swap-text-digital").on({mouseenter:function(){$("span",this).html("@lang('messages.footer.button-not-origin-digital')")},mouseleave:function(){$("span",this).html("@lang('messages.footer.button-origin-digital')")}})});
	$(function() {
	    $("img.lazy").lazyload(
	    	{
	    		threshold : 200,
	    		effect : "fadeIn"
	    	}
	    );
	});
</script>
@endsection

@section('content')
<main class="site-wrapper" data-footer-before>
	<section class="body-content page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-center">
						<ul class="portfolio-filter">
							<li class="active"><a href="#" data-filter="*">All</a>
							</li>
							@foreach ($portfoliocategorys as $portfoliocategory)
							<li>
								<a href="#" data-filter=".cat{{$portfoliocategory->id}}">{{$portfoliocategory->name}}</a>
							</li>
							@endforeach
						</ul>
					</div>
					<div class="portfolio col-4 gutter">
					@foreach ($portfolios as $portfolio)
						<div class="portfolio-item	@foreach ($portfolio->portfoliocategory as $portfoliocategory)
							cat{{$portfoliocategory->id}} @endforeach" >
							<div class="thumb">
								@php 
									$min = explode(".", $portfolio->image);
								@endphp
								<img src="{{$min[0]}}_min.png" class="lazy" data-original="{{$portfolio->image}}" title="Портфолио | LeoStudio" alt="{{$portfolio->title}} | LeoStudio" style="width:290px;height:180px;">
								<div class="portfolio-hover">
									<a href="/{{$locale}}/portfolio/{{$portfolio->slug}}" id="various_sigle" data-fancybox-type="iframe" class="various_sigle" style="position: absolute;width:224px;height:140px;">
										<div class="portfolio-description">
											<h4><b>{{$portfolio->title}}</b></h4>
										</div>
									</a>
								</div>
							</div>
						</div>
					@endforeach
					</div>
					<div class="col-xs-12 col-md-12">
						<div class="row">
						@if(Identify::os()->getName() == 'Windows' || Identify::os()->getName() == 'OS X' || Identify::os()->getName() == 'Linux')
							<div class="col-xs-12 col-md-6" >
								<a href="https://goo.gl/forms/LMBNJCXcglAFQSWO2" target="_blank" id="various" class="various col-md-1 col-md-offset-5 col-sm-1 text-center">
									<span class="swap-text-web">
										<span class="ghost-button">@lang('messages.footer.button-origin-web')</span>
									</span>
								</a>
							</div>
							<div class="col-xs-12 col-md-6" style="padding-left:5px">
								<a href="https://goo.gl/forms/RRsdXMR1hF78prql1" target="_blank" id="various" class="various col-md-1 col-md-offset-1 col-sm-1 text-center">
									<span class="swap-text-digital">
										<span class="ghost-button">@lang('messages.footer.button-origin-digital')</span>
									</span>
								</a>
							</div>
						@else
							<div class="col-xs-12 col-md-6" style="padding-left:1px">
								<a href="https://goo.gl/forms/LMBNJCXcglAFQSWO2" target="_blank" id="various" class="various col-md-1 col-md-offset-5 col-sm-1 text-center">
									<span class="swap-text-web">
										<span class="ghost-button">@lang('messages.footer.button-origin-web')</span>
									</span>
								</a>
							</div>
							<div class="col-xs-12 col-md-6" style="padding-left:1px">
								<a href="https://goo.gl/forms/RRsdXMR1hF78prql1" target="_blank" id="various" class="various col-md-1 col-md-offset-1 col-sm-1 text-center">
									<span class="swap-text-digital">
										<span class="ghost-button">@lang('messages.footer.button-origin-digital')</span>
									</span>
								</a>
							</div>
						@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
