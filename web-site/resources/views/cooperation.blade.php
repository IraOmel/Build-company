@extends('layouts.get_form')
    @section('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset('css/cooperation.css')}} />
    <link rel="stylesheet" href={{asset('css/media.css')}} />
    <title>Build company-Cooperation</title>
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
                <a href="/cooperation" class="nav_link_active">Співпраця</a>
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

<main>
    <section class="contacts">
        <div class="contacts-content">
            <div class="container">
                <div class="main-block">
                    <div class="home-content">
                        <h1 class="home-heading">Співпраця</h1>
                        <div class="home-text">
                            <p>Feel free to contact us any time. We will get back as soon as we can!</p>
                        </div>
                    @endsection
                        @section('footer')
                    </div>
                    <div class="contacts-info">
                        <div class="contacts-heading">Info</div>
                        <div class="contacts-block">
                            <div class="adress">
                                <img src="/images/adress.svg" alt="adress-icon">
                                <p>5 Academician Yangel str.,
                                    Kyiv, Ukraine
                                </p>
                            </div>
                            <div class="mail">
                                <img src="/images/mail.svg" alt="mail-icon">
                                <p>info@mgk.in.ua</p>
                            </div>
                            <div class="tel">
                                <img src="/images/mobile.svg" alt="tel-icon">
                                <p>+380-96-674-25-10</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-icon">
                <div class="footer-icon">
                    <i><a href="#"><img src="/images/instagram.svg" alt="instagram"></a></i>
                    <i><a href="#"><img src="/images/meta.svg" alt="meta"></a></i>
                    <i><a href="#"><img src="/images/twitter.svg" alt="twitter"></a> </i>
                </div>
                <div class="footer-text">© 2022 Build Inc.</div>
            </div>
        </div>
    </section>
</main>
</body>
</html>
@endsection
