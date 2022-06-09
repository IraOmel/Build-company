<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->
     @yield('style')
    <link rel="stylesheet" href={{asset('css/media.css')}} />
</head>
<body>
<header class="wrapper header">
    <div class="header-logo">
        <img src={{asset('images/logo.png')}} , alt="logo"/>
    </div>
    <div class="container block">
        <div class="header-row">
            <div class="header-tel">+380-96-674-25-10 build company</div>
            <nav class="header-nav">
                <a href="/" class="nav_link">Головна</a>
                <a href="/#about_us" class="nav_link">Про нас</a>
                <a href="/projects" class="nav_link">Проекти</a>
                <a href="/cooperation" class="nav_link">Співпраця</a>
            </nav>
        </div>
    </div>
    <input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
    <label for="menu-icon"></label>
    <nav class="nav">
        <ul class="pt-5">
            <li><a href="/">Головна</a></li>
            <li><a href="/#about_us">Про нас</a></li>
            <li><a href="/projects">Проекти</a></li>
            <li><a href="/cooperation">Співпраця</a></li>
        </ul>
    </nav>
</header>

@yield('content')

<footer class="wrapper footer">
    <div class="container">
        <div class="footer-block">
            <div class="footer-content">
                <div class="footer-info">
                    <div class="adress">
                        <img src={{asset('/images/adress.svg')}} , alt="adress-icon">
                        <p>5 Academician Yangel str.,
                            Kyiv, Ukraine
                        </p>
                    </div>
                    <div class="mail">
                        <img src={{asset('/images/mail.svg')}} , alt="mail-icon" >
                        <p>info@mgk.in.ua</p>
                    </div>
                    <div class="tel">
                        <img src={{asset('/images/mobile.svg')}} , alt="tel-icon">
                        <p>+380-96-674-25-10</p>
                    </div>
                </div>
                <div class="footer-icon">
                    <i><a href="#"><img src={{asset('/images/instagram.svg')}} , alt="instagram"></a></i>
                    <i><a href="#"><img src={{asset('/images/meta.svg')}} , alt="meta"></a></i>
                    <i><a href="#"><img src={{asset('/images/twitter.svg')}} , alt="twitter"></a></i>
                </div>
            </div>
            <div class="footer-logo"><img src={{asset('/images/contacts.png')}} , alt="logo"></div>
        </div>
    </div>
</footer>
</body>
</html>
