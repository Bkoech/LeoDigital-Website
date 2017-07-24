@extends('layouts.app')

<!-- /*===== set title =====*/ -->
@section('title')
{{ $project->title }} | LeoDigital | {{ $project->description }}
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
Кейс по услуге {{ $project->title }} | LeoDigital - мы делаем то, чего другие боятся
@endsection

<!-- /*===== set Open Graph =====*/ -->
@section('open_graph')
<meta property="fb:admins" content="leodigital.com.ua" />
<meta property="og:site_name" content="LeoDigital" />
<meta property=”og:type” content="article" />
<meta property="og:title" content="{{ $project->title }} | LeoDigital | {{ $project->description }}" />
<meta property="og:description " content="Кейс по услуге {{ $project->title }} | LeoDigital - мы делаем то, чего другие боятся" />
<meta property="og:locale" content="ru_RU" />
<meta property="og:url" content="https://leodigital.com.ua/{{$locale}}/project/{{$project->slug}}" />
<meta property="og:image" content="https://leodigital.com.ua/{{$project->image}}" />
@endsection

<!-- /*===== set keywords =====*/ -->
@section('keywords')
@endsection

<!-- /*===== set custom css =====*/ -->
@section('style_css')
<style type="text/css">
.marker{background-color:#ff0}p img{width:100%!important;height:auto!important}.ghost-button-keys{transition:background-color .4s ease-out;background-color:rgba(1,158,227,0);border:.125rem solid #000;border-radius:3.125rem;color:#000;cursor:pointer;display:inline-block;font-size:1rem;letter-spacing:.16875rem;max-height:3.4rem;overflow:hidden;text-decoration:none;width:172px}.ghost-button-keys:hover{border:.125rem solid #ea8825;color:#ea8825}
</style>
@endsection

<!-- /*===== set custom javascript =====*/ -->
@section('style_javascript')
<script type='text/javascript' src='/vendor/backpack/ckeditor/plugins/chart/lib/chart.min.js'></script>
@endsection

<!-- /*===== set content =====*/ -->
@section('content')

<section class="hero hero--project hero--layered" id="top" data-hero>
	<div class="hero__layer" data-hero-layer>
		<img src="{{ $project->banner }}" alt="{{ $project->title }} | LeoDigital">
	</div>
</section>
<main class="site-wrapper" data-footer-before>
	<section class="page-section page-section--alt page-section--full padding-reset-top padding-reset-bottom">
		<div class="container card-container card-container--offset">
			<div class="card">
				<div class="card__content card__content--sm" data-share-widget-container>
					<div class="row">
						<div class="col-md-3 col-md-push-9">
                            <!-- <div class="pagination">
                                <span class="pagination__left" title="Previous project">
                                    <a href="http://studios.catchdigital.com/projects/thomas-cook-cats-on-a-plane/" rel="next"></a>
                                </span>
                                <span class="pagination__right" title="Next project">
                                    <a href="http://studios.catchdigital.com/projects/charlotte-tilbury-social-strategy/" rel="prev"></a>
                                </span>
                            </div> -->
                        </div>
                        <div class="col-md-9 col-md-pull-3">
                        	<div class="title-group">
                        		<span class="title-group__label">{{ $project->description }}</span>
                        		<h1 class="title-group__title">{{ $project->title }}</h1>
                        	</div>
                        	<div class="share-widget" data-share-widget>
                        		<h6 class="share-widget__title">Share</h6>
                        		<ul class="list-unstyled">
                        			<li>
                        				<a href="https://www.facebook.com/sharer.php?u=https://leodigital.com.ua/{{$locale}}/project/{{$project->slug}}" target="_blank" class="share-widget__button catch-icon catch-icon--facebook" title="{{$project->title}} | LeoDigital">
                        					<i class="fa fa-facebook"></i>
                        				</a>
                        			</li>
                        		</ul>
                        	</div>
                        </div>
                    </div>
					@if(Identify::device()->getName() == 'Windows' || Identify::device()->getName() == 'MacOS')
						<style type="text/css">
							.pdf{
								min-height: 2000px;
							}
						</style>
					@elseif (Identify::device()->getName() == 'iPad' || Identify::device()->getName() == 'Android' || Identify::device()->getName() == 'iPhone' || Identify::device()->getName() == 'Windows Phone')
						<style type="text/css">
							.pdf{
								min-height: 630px;
							}
						</style>
					@endif
                    @if($project->content)
                    <div class="content-block">
                    	<p align="justify" style="text-align:justify;">{!! $project->content !!}</p>
                    </div>
                    @elseif($project->keys_photo)
                    <div class="content-block">
                        <img src="{{$project->keys_photo}}">
                    </div>
                    @endif
                    <div class="col-xs-12 col-md-12">
                    	<div class="row">
                            @if($project->pdf)
                    		<div class="col-xs-12 col-md-6">
                    		<?php $img = preg_replace("/.*\"https:\/\/leodigital.com.ua\/(.*[png|jpg|jpeg|pdf])\".*/", "/$1", $project->content);?>
                    			<a href="{{$img}}" class="various col-md-1 col-md-offset-5 col-sm-1 text-center" download="{{$project->title}} - Кейс LeoDigital">
                    				<span class="swap-text-web">
                    					<span class="ghost-button-keys">скачать кейс</span>
                    				</span>
                    			</a>
                    		</div>
                            @endif
							@if($project->pdf)
                    		<div class="col-xs-12 col-md-6">
                    			<a href="{{url('/')}}/{{$project->pdf}}" class="various col-md-1 col-sm-1 text-center"  target="_blank"  onclick="window.print()">
                    				<span class="swap-text-digital">
                    					<span class="ghost-button-keys">распечатать</span>
                    				</span>
                    			</a>
                    		</div>
							@endif
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        	document.getElementById('prj-tr').classList.remove('header--transparent');
        	function print() {
			    window.print();
			}
        </script>
    </section>
@endsection
