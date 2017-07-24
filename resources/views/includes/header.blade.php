<div id="preloader">
    <div class="sk-cube-grid" id="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
    </div>
</div>
<header class="header header--transparent" data-header id="prj-tr">
    @if (Route::getCurrentRoute()->getActionName() == "App\Http\Controllers\HomeController@index")
    <div class="container header__container">
        <a class="header__logo" href="#top" data-header-logo></a>
        <nav class="header__nav" id='nav_menu'>
            <a class="header__nav__logo"></a>
            <div class="menu-top-menu-container">
                <ul id="menu-top-menu" class="menu">
                    <li id="menu-item-4261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4261">
                        <a></a>
                    </li>
                    <li id="menu-item-4257" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4257">
                        <a href="#uls">@lang('messages.menu.service')</a>
                    </li>
                    <li id="menu-item-4257" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4257">
                        <a href="#projects_">@lang('messages.menu.portfolio')</a>
                    </li>
                    <li id="menu-item-4257" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4257">
                        <!-- <a href="#clients_">Клиенты</a> -->
                    </li>
                    <li id="menu-item-4251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4251">
                        <a href="/{{$locale}}/blog">@lang('messages.menu.blog')</a>
                    </li>
                    <li id="menu-item-4261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4261">
                        <a href="/{{$locale}}/about">@lang('messages.menu.about')</a>
                    </li>
                    <li id="menu-item-4261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4261 right">
                        @if ($locale == 'en')
                        <a href="/ru">ru</a>
                        @else
                        <a href="/en">en</a>
                        @endif
                    </li>
                </ul>
                <style type="text/css">
                    .right{float:right;}
                </style>
            </div>
            <p class="header__nav__contact">
                <a href="mailto:office@leodigital.com.ua">office@leodigital.com.ua</a>
                <br>
                <a href="tel:+380443600580">+38 (044) 360 05 80</a>
            </p>
        </nav>
        <div class="header__toggle">
            <button class="menu-button menu-button--inverse" id="menu_close" data-header-toggle>
                <span class="menu-button__bar">Menu</span>
            </button>
        </div>
    </div>
    @else
    <div class="container header__container">
        <a href="/{{$locale}}" class="header__logo" data-header-logo></a>
        <nav class="header__nav">
            <a href="/{{$locale}}" class="header__nav__logo"></a>
            <div class="menu-top-menu-container">
                <ul id="menu-top-menu" class="menu">
                    <li id="menu-item-4261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4251">
                        <a href="/{{$locale}}/#uls">@lang('messages.menu.service')</a>
                    </li>
                    <li id="menu-item-4261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4251">
                        <a href="/{{$locale}}/#projects_">@lang('messages.menu.portfolio')</a>
                    </li>
                    <li id="menu-item-4261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4251">
                        <a href="/{{$locale}}/blog">@lang('messages.menu.blog')</a>
                    </li>
                    <li id="menu-item-4261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4251">
                        <a href="/{{$locale}}/about">@lang('messages.menu.about')</a>
                    </li>
                    <!-- <li id="menu-item-4261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4261 right">
                        @if ($locale == 'en')
                        <a href="/language/ru">ru</a>
                        @else
                        <a href="/language/en">en</a>
                        @endif
                    </li> -->
                </ul>
                <style type="text/css">
                    .right{float:right;}
                </style>
            </div>
            <p class="header__nav__contact">
                <a href="mailto:office@leodigital.com.ua">office@leodigital.com.ua</a>
                <br>
                <a href="tel:+380443600580">+38 (044) 360 05 80</a>
            </p>
        </nav>
        <div class="header__toggle">
            <button class="menu-button menu-button--inverse" data-header-toggle>
                <span class="menu-button__bar">Menu</span>
            </button>
        </div>
    </div>
    @endif
</header>