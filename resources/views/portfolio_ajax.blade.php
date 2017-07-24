{{--@foreach ($portfolios as $portfolio)--}}
    {{--<div class="portfolio-item	@foreach ($portfolio->portfoliocategory as $portfoliocategory)--}}
            {{--cat{{$portfoliocategory->id}} @endforeach" >--}}
        {{--<div class="thumb">--}}
            {{--<img src="/{{$portfolio->logo}}" class="lazy" data-original="/{{$portfolio->photo}}" title="Портфолио | LeoStudio" alt="{{$portfolio->title}} | LeoStudio" style="width:290px;height:180px;">--}}
            {{--<div class="portfolio-hover">--}}
                {{--<a href="/{{$locale}}/portfolio/{{$portfolio->slug}}" id="various_sigle" data-fancybox-type="iframe" class="various_sigle" style="position: absolute;width:224px;height:140px;">--}}
                    {{--<div class="portfolio-description">--}}
                        {{--<h4><b>{{$portfolio->title}}</b></h4>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endforeach--}}