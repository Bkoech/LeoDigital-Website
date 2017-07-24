<style rel="stylesheet" type="text/css"> 
	#fb_widget .field,#fb_widget .label{position:relative;float:left}#fb_widget .label{color:#005f46;min-width:20%}#fb_widget .element{border:0 dotted red;margin:12px;padding:5px;min-height:25px;clear:both}#fb_widget .field input{margin:0;padding:0}#fb_link.disabled{opacity:0;visibility:hidden}#fb_link.disabled .tooltiptext{font-size:0}#fb_link.disabled .tooltiptext:after{content:"OFFLINE";font-size:12px}#fb_link.email_us .tooltiptext{font-size:0}#img_email{display:none}#fb_link.email_us .tooltiptext:after{content:"EMAIL US";font-size:12px}.fbmessenger{position:fixed;bottom:15px;right:15px;z-index:999999999}.fbmessenger span{z-index:999999999;position:absolute}.fbmessenger.wpostop_left{left:2px;right:initial;top:0;bottom:initial}.tooltiptext.wpostop_left{left:60px;right:initial;top:8px;bottom:initial}.fbmessenger.wpostop_right{left:initial;right:15px;top:0;bottom:initial}.tooltiptext.wpostop_right{left:initial;right:60px;top:8px;bottom:initial}.fbmessenger.wposbottom_left{left:2px;right:initial;top:initial;bottom:0}.tooltiptext.wposbottom_left{left:60px;right:initial;top:initial;bottom:10px}.fbmessenger.wposbottom_right{left:initial;right:15px;top:initial;bottom:80px;-webkit-transition:all .5s;-moz-transition:all .5s;-o-transition:all .5s;transition:all .5s;-webkit-filter:grayscale(100%);-moz-filter:grayscale(100%);filter:grayscale(100%)}.fbmessenger.wposbottom_right:hover{-webkit-transition:all .5s;-moz-transition:all .5s;-o-transition:all .5s;transition:all .5s;-webkit-filter:grayscale(1%);-moz-filter:grayscale(1%);filter:grayscale(1%)}.tooltiptext.wposbottom_right{left:initial;right:60px;top:initial;bottom:10px}.fbmessenger img{width:50px;filter:drop-shadow(2px 6px 4px rgba(0, 0, 0, .3));-webkit-filter:drop-shadow(2px 6px 4px rgba(0,0,0,.3))}.tooltiptext{width:120px;background-color:#fff;color:#2c2c2c;text-align:center;padding:5px 0;border:1px solid #eee;border-radius:6px;position:fixed;bottom:30px;right:75px;font-family:inherit;font-size:inherit;text-transform:uppercase;filter:drop-shadow(2px 6px 4px rgba(0, 0, 0, .3));-webkit-filter:drop-shadow(2px 6px 4px rgba(0,0,0,.3))}
</style>
<div class='code'>
@if(Identify::os()->getName() == 'Windows' || Identify::os()->getName() == 'OS X' || Identify::os()->getName() == 'Linux')
	<a id="fb_link" href="https://www.messenger.com/t/leodigital.com.ua" target="_blank" class="" style="display: inline;">
@else
	<a id="fb_link" href="https://m.me/leodigital.com.ua" class="" style="display: inline;">
@endif
		<div class="fbmessenger wposbottom_right">
			<img id="img_msg" src="/images/messenger.svg">
			<img id="img_email" src="/images/messenger.svg" style="display: none;">
		</div>
	</a>
</div>
<section class="page-section" id="clients_">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h2>@lang('messages.footer.clients_title')</h2>
				<p>@lang('messages.footer.clients_description')</p>
			</div>
		</div>
	</div>
</section>
<section class="page-section logos">
	<div id="portfolio-photostack" class="photostack">
		<div class="col-xs-12 site-section align-center" id="section_clients">
			<div class="container">
			@if(Identify::os()->getName() == 'Windows' || Identify::os()->getName() == 'OS X' || Identify::os()->getName() == 'Linux')
				<ul class="clients-list">
					<div class="row">
					@foreach($clients as $client)
						@if($loop->index == 0 || $loop->index == 5 || $loop->index == 10 || $loop->index == 15)
						<div class="col-sm-2 col-sm-offset-1" style="padding-right:0!important;padding-left:0!important"><li><img src="{{ $client->image }}" alt="{{ $client->title }} | LeoDigital" class="client-logo"></li></div>
						@else
						<div class="col-sm-2" style="padding-right:0!important;padding-left:0!important"><li><img src="{{ $client->image }}" alt="{{ $client->title }} | LeoDigital" class="client-logo"></li></div>
						@endif
					@endforeach
					</div>
				</ul>
			@else
				<style type="text/css">
					.slick-arrow,.slick-next,.slick-prev{display:none!important}.logocarusel{margin-top:-70px!important}#various{margin-top:40px!important}
				</style>
				<div class="logocarusel">
					@foreach($clients as $client)
					<div style="padding-right:0!important;padding-left:0!important"><img src="{{ $client->image }}" alt="{{ $client->title }} | LeoDigital" class="client-logo" width="150" height="105" style="width:150px;height:105px"></div>
					@endforeach
				</div>
			@endif
			</div>
		</div>
		<a href="/contact" id="various" class="various col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 text-center" data-fancybox-type="iframe">
			<span class="swap-text">
				<span class="ghost-button">@lang('messages.footer.button-origin')</span>
			</span>
		</a>
	</div>
</section>
</main>
<div class="footer-spacer" data-footer-spacer></div>
<footer class="footer" id="bottom" data-footer>
	<span data-footer-flag></span>
	<div class="container" itemscope itemtype="http://schema.org/Organization">
		<img itemprop="logo" style="display:none" src="https://leodigital.com.ua/public/favicon.ico" />
		<a itemprop="url" style="display:none" href="https://leodigital.com.ua/ru"></a>
		<div class="row footer__divider-container">
			<span class="footer__divider"></span>
			<span class="footer__divider"></span>
			<div class="col-md-4 col-sm-6 text-sm">
				<div class="toggle-box" data-toggle-box>
					<h3 class="toggle-box__toggle state-active" data-toggle-box-target="ukraine">@lang('messages.footer.ukraine.title')</h3>
					<h3 class="toggle-box__toggle" data-toggle-box-target="slovak">@lang('messages.footer.slovakia.title')</h3>
					<div class="toggle-box__item-container" data-toggle-box-container itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						<div class="toggle-box__item state-active" data-toggle-box-id="ukraine">
							<p class="text-lg margin-reset-top" itemprop="telephone">
								<a href="tel:+380443600580">+38 (044) 360 05 80</a>
							</p>
							<p itemprop="addressLocality">@lang('messages.footer.ukraine.city')</p>
							<p itemprop="streetAddress">@lang('messages.footer.ukraine.street')</p>
							<p itemprop="email">Email : <a href="mailto:office@leodigital.com.ua">office@leodigital.com.ua</a></p>
						</div>
						<div class="toggle-box__item" data-toggle-box-id="slovak">
							<p class="text-lg margin-reset-top" itemprop="telephone">
								<a href="tel:+421904869212">+421 (904) 869 212</a>
							</p>
							<p itemprop="addressLocality">@lang('messages.footer.slovakia.city')</p>
							<p itemprop="streetAddress">Einsteinova 18 st.</p>
							<p itemprop="email">Email : <a href="mailto:office@leodigital.com.ua">office@leodigital.com.ua</a></p>
						</div>
						<br>
						<br>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-6">
				<div class="row">
					<div class="col-md-7 text-sm">
						<h3>@lang('messages.footer.connect')</h3>
					@if(Identify::os()->getName() == 'Windows' || Identify::os()->getName() == 'OS X' || Identify::os()->getName() == 'Linux')
						<a href="https://www.messenger.com/t/leodigital.com.ua" target="_blank" class="catch-icon-messenger">	<img src="/images/fb-messenger.svg" alt="" class="catch-messenger">
						</a>
					@else
						<a href="https://m.me/leodigital.com.ua" target="_blank" class="catch-icon-messenger">
							<img src="/images/fb-messenger.svg" alt="" class="catch-messenger">
						</a>
					@endif
						<a href="https://www.facebook.com/leodigital.com.ua" target="_blank" class="catch-icon catch-icon--facebook"><i class="fa fa-facebook"></i>
						</a>
						<a href="https://www.instagram.com/leo.digital.agency" target="_blank" class="catch-icon catch-icon--instagram"><i class="fa fa-instagram"></i>
						</a>
						<a href="//soundcloud.com/leodigital" target="_blank" class="catch-icon catch-icon--soundcloud"><i class="fa fa-soundcloud"></i>
						</a>
						<a href="https://pinterest.com/leodigital_agency" target="_blank" class="catch-icon catch-icon--pinterest"><i class="fa fa-pinterest" style="font-size: 44px;"></i>
						</a>
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fleodigital.com.ua%2F&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
						<br>
						<br>
					</div>
					<div class="col-md-5 text-sm">
						<div class="row">
							<div class="col-md-5 col-sm-4">
								@if (URL::current() == "https://leodigital.com.ua/ru" || URL::current() == "https://leodigital.com.ua/en" || URL::current() == "https://leodigital.com.ua")
								<a href="#top"><img style="padding-top:30px" src="/images/logo2.png" alt="Logo | LeoDigital" width="100"></a>
								@else
								<a href="/{{$locale}}"><img src="/images/logo2.png" alt="Logo | LeoDigital" width="100"></a>
								@endif
							</div>
							<div class="col-md-7 col-sm-8">
								<p itemprop="name">LeoDigital <br /> Digital New-Media Agency</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-7 text-sm">
				<small>@lang('messages.footer.register')</small>
			</div>
			<div class="col-sm-5 text-sm text-right-sm">
				<small>&copy; {{ date('Y') }} LeoDigital. @lang('messages.footer.copyright').</small>
			</div>
		</div>
	</div>
	<!-- <div class="local-scroll">
		<a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
	</div> -->
</footer>
