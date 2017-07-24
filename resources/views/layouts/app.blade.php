<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="{{ $locale }}" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="{{ $locale }}" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="{{ $locale }}" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 9 ]><html class="shim" lang="{{ $locale }}" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="{{ $locale }}" prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#" > <!--<![endif]-->
<head>
	<meta name=“google-site-verification” content=“QbOQ8oTSzmbRDcVYuTo9yZSqFnRNMRGBHjomheyhKgU” />
	<meta name=“p:domain_verify” content=“681d807f64994ba6beb81890b7a5c865"/>
	<meta charset="UTF-8">
	<meta name="robots" content="index,follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
	<meta name="author" content="Kyrylo" />
	<meta name="copyright" content="Handcrafted by Kyrylo Kovalenko" />
	<!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="@yield('keywords')">
	<!-- /*===== custom Open Graph =====*/ -->
	@yield('open_graph')
	<meta name="csrf-token" content="{{ csrf_token() }}"/>
	<link rel='stylesheet' type='text/css' href='/css/styles.css'/>
	<link rel='stylesheet' type='text/css' href='/css/layouts.css'/>
	<link rel='stylesheet' type='text/css' href='/css/responsive-leyouts.css'/>
	<link rel="stylesheet" type="text/css" href="/css/responsive-tabs.css">
	<link rel="stylesheet" type="text/css" href="/css/et-line-font.css">
	<!-- <link rel="stylesheet" type="text/css" href="{{ elixir('css/main.css') }}"> -->
	<link rel="stylesheet" type="text/css" href="/css/perspectiveRules.css"/>
	<link rel="stylesheet" type="text/css" href="/fancybox/jquery.fancybox.css"/>
	<link rel='stylesheet' type='text/css' href='/fonts/worksans-family.css'/>
	<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css?ver=4.5.2'/>
	<link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
	<!-- /*===== custom css =====*/ -->
	@yield('style_css')

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KMX9BPP');</script>
	<!-- End Google Tag Manager -->

</head>

<!-- <body class="home page page-id-3617 page-template page-template-template-front-page page-template-template-front-page-php" oncontextmenu="return false" style="-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;"> -->
<body class="home page page-id-3617 page-template page-template-template-front-page page-template-template-front-page-php">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMX9BPP"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<!-- /*===== include header =====*/ -->
	@include('includes.header')
	<!-- /*===== include content =====*/ -->
	@yield('content')
	<!-- /*===== include footer =====*/ -->
	@include('includes.footer')

	<script type='text/javascript' src='/js/jquery-1.11.3.js'></script>
	<script type='text/javascript' src='/js/jquery-migrate.min.js'></script><!-- 
	<script type="text/javascript" src="/js/jquery.logosDistort.min.js"></script>
	<script type="text/javascript" src="/js/jquery.particleground.min.js"></script>
	<script type='text/javascript' src="/js/jquery.parallax.js"></script>
	<script type='text/javascript' src='/js/isotope.pkgd.min.js'></script>
	<script type='text/javascript' src='/js/scripts.js'></script>
	<script type="text/javascript" src="/js/responsive-tabs.min.js"></script> -->
	<script type="text/javascript" src="{{ elixir('js/main.js') }}"></script>
	<script type="text/javascript" src='/js/typed.js'></script>
	<script type="text/javascript" src='/js/customs.scripts.js'></script>
	<script type="text/javascript" src="/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="/slick/slick.min.js"></script>
	<script type='text/javascript' src="/js/jquery.lazyload.js"></script>
	<!-- /*===== custom javascript =====*/ -->
	@yield('style_javascript')
	<script type="text/javascript">
		$(document).ready(function(){$(".logocarusel").slick({infinite:!1,slidesToShow:2,slidesToScroll:1,autoplay:!0,autoplaySpeed:500})}),$(document).ready(function(){$(".swap-text").on({mouseenter:function(){$("span",this).html("@lang('messages.footer.button-not-origin')")},mouseleave:function(){$("span",this).html("@lang('messages.footer.button-origin')")}})}),$(document).ready(function(){$("#various").fancybox({maxWidth:700,minHeight:530,maxHeight:540,fitToView:!0,width:"90%",height:"90%",autoSize:!0,closeClick:!1,openEffect:"none",closeEffect:"none",padding:20})});
	</script>
</body>
</html>
