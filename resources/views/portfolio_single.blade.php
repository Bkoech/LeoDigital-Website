<!DOCTYPE html>
<html lang="{{$locale}}">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="index,follow">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{$portfolios->title}} | LeoDigital</title>
	<meta name="description" content="{{$portfolios->title}} | Портфолио | LeoDigital">
	<link rel='stylesheet' type='text/css' href="/portfolio/single/css/bootstrap.min.css">
	<style type="text/css">
		body,html{font-family:"Avenir Next",sans-serif!important}body{padding-top:5px;font-size:16px}.ghost-button,.ghost-button-mob{transition:background-color .4s ease-out;background-color:rgba(1,158,227,0);cursor:pointer;display:inline-block;font-size:18px;letter-spacing:.16875rem;overflow:hidden;text-decoration:none}.portfolio-item{margin-bottom:25px}footer{margin:20px 0}.ghost-button{border:.125rem solid #000;border-radius:3.125rem;color:#000;max-height:60px;padding:15px 10px;width:265px}.ghost-button:hover{border:.125rem solid #ea8825;color:#ea8825}.ghost-button-mob{border:.125rem solid #000;border-radius:3.125rem;color:#000;max-height:40px;padding:8px 10px;width:170px}.various-mob{margin-left:44px}
	</style>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KMX9BPP');</script>
	<!-- End Google Tag Manager -->

</head>
<body style="padding-top:1px;">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMX9BPP"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">{{$portfolios->title}}
				@foreach ($portfolios->portfoliocategory as $portfoliocategory)
					<small>{{$portfoliocategory->name}}</small>
				@endforeach
				@if(Identify::os()->getName() == 'Windows' || Identify::os()->getName() == 'OS X' || Identify::os()->getName() == 'Linux')
					<iframe style="float:right;margin-top:-25px;" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fleodigital.com.ua%2F&tabs&width=340&height=70&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="300" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				@endif
				</h1>
			</div>
		</div>
		<div class="row">
		@if($portfolios->photos)
			<!-- СЛАЙДЕР -->
		@elseif($portfolios->image)
			<div class="col-md-8">
				<img class="img-responsive" src="{{$portfolios->image}}" alt="{{$portfolios->title}} | LeoDigital">
			</div>
		@endif
			<div class="col-md-4">
			@if ($portfolios->content != null)
				<h3>Описание проекта</h3>
				<p>{!!$portfolios->content!!}</p>
			@endif
			@if ($portfolios->options != null)
				<h3>Детали проекта</h3>
				<ul>
					@foreach(json_decode($portfolios->options, true) as $value)
					<li>{!! $value['name'] !!}&nbsp;&nbsp;&mdash;&nbsp;&nbsp;{!! $value['desc'] !!}</li>
					@endforeach
				</ul>
			@endif
			@if(Identify::os()->getName() == 'Windows' || Identify::os()->getName() == 'OS X' || Identify::os()->getName() == 'Linux')
				<br>
				<a href="/contact" id="various" class="various text-center">
					<span class="swap-text">
						<span class="ghost-button">Заказать</span>
					</span>
				</a>
			@else
				<a href="/contact" id="various" class="various-mob text-center">
					<span class="swap-text">
						<span class="ghost-button-mob">Заказать</span>
					</span>
				</a>
				<br>
				<br>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fleodigital.com.ua%2F&tabs&width=340&height=70&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="260" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			@endif
			</div>
		</div>
	</div>
	<script type="text/javascript" src="/portfolio/single/js/jquery.js"></script>
	<script type="text/javascript" src="/portfolio/single/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){$(".swap-text").on({mouseenter:function(){$("span",this).html("Поехали!")},mouseleave:function(){$("span",this).html("Заказать")}})});
	</script>
</body>
</html>
