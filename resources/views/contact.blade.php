<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="index,follow">
	<!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
	<title>Контакты - свяжитесь с нами | Leostudio</title>
	<meta name="description" content="Свяжитесь с нами - Leostudio | Контактный номер (044) 360 05 80">
	<meta name="keywords" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}"/>
	<link rel="stylesheet" type="text/css" href="/css/contact-form/style.css">
	<link rel="stylesheet" type="text/css" href="/css/contact-form/bootstrap.min.css">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KMX9BPP');</script>
	<!-- End Google Tag Manager -->
</head>
<body class="home" oncontextmenu="return false">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMX9BPP"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title wow fadeInDown" data-wow-duration="1.5s">
						<h1 id="h1" class="contact-heading">Связаться с нами</h1>
					</div>
					<br>
					<div class="col-md-12 wow pulse" data-wow-duration="1.5s">
						<div class="row">
							<form name="contactform" role="form" id="contactform" action="javascript:nestocontact()">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Ваше имя *" name="name" id="name" required autofocus>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control email" placeholder="Ваш email *" name="email" id="email" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="tel" class="form-control" placeholder="Ваш телефон *" name="phone" id="phone" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="url" class="form-control" placeholder="Начинается с http:// или https://" pattern="https?://.+" name="url" id="url">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea rows="4" type="text" placeholder="Сообщение *" name="content" id="content" required></textarea>
									</div>
								</div>
								<div class="col-md-12 send-message">
									<button type="submit" id="nesto-submit" class="btn-lg btn btn-nesto">
										Отправить <span></span>
									</button>
								</div>
								<div class="col-md-12">
									<div class="form-message"></div>
								</div>
							</form>
							<div class="col-md-12">
								<div class="nesto-message">
									<h2 class="nesto-response" id="h2"></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type='text/javascript' src='/js/jquery-1.11.0.min.js'></script>
	<script type="text/javascript" src="/js/jquery.maskinput.js"></script>
	<script type="text/javascript" src="/validator/validator.min.js"></script>
	<script type='text/javascript'>
		jQuery(function(e) {
		    e("#phone").mask("+99 (999) 999 99 99")
		}), 
		jQuery(document).ready(function() {
			"use strict";
			jQuery('#contactform').submit(function nestocontact(event) {
		        event.preventDefault();
		        var name = $('#name').val();
		        var email = $('#email').val();
		        var phone = $('#phone').val();
		        var uri = $('#url').val();
		        var content = $('#content').val();
		        if (name === "" || name === " " || name === "  " || name === "   " || name === "    " || name === "     " || name === "      ") {
		            $('#name').addClass('form-error');
		            return /\s/g.test(name);
		        }
		        if (email === " ") {
		            $('#email').addClass('form-error');
		            return;
		        }
		        if (content === "" || content === " " || content === "  " || content === "   " || content === "    " || content === "     " || content === "      ") {
		            $('#content').addClass('form-error');
		            return /\s/g.test(content);
		        }
		        $.ajax({
		            type: "POST",
		            url: '/contact',
		            data: {name: name, email: email, phone: phone, url: uri, content: content},
		                headers: {
		                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		                         },
		            success:function(data){
		                $("#contactform").slideUp(), jQuery(".nesto-response").html("Спасибо, ваша заявка успешно оставлена.")
		            },
		            error: function(data){
		                $("#contactform").slideUp(), jQuery(".nesto-response").html("Введите коректные данные")
		                setTimeout(nestocontact, 2000);
		            }
		        });
		        $('#name').removeClass('form-error');
		        $('#email').removeClass('form-error');
		        $('#phone').removeClass('form-error');
		        $('#content').removeClass('form-error');
		    });
		});
		$(function() {
			$('#nesto-submit').click(function() {
				var but = $(this);
				var time = 10;
				var timeInterval = setInterval(function() {
					if (time <= 0) {
						clearInterval(timeInterval);
					}
					if (time == 0) {
						$(but).children('span').html("");
						$(but).prop("disabled", false);
					} else {
						$(but).children('span').html(time);
						$(but).prop("disabled", true);
					}
					time = time - 1;
				}, 1000);
			});
		});							
	</script>
</body>
</html>