@extends('layouts.layout')

@section('title')
    Bulid company-МЖК Інжиніринг
@endsection

@section('style')
    <link rel="stylesheet" href={{asset('css/main_page.css')}} />
@endsection

@section('content')
<main>
    <div class="wrapper">
        <section class="home">
            <div class="container">
                <div class="home-content">
                    <h1 class="home-heading">Build Company</h1>
                    <div class = "mobile-text">
                        <p>
                            Це команда професіоналів, яка забезпечує стійкий розвиток
                            підприємства за рахунок накопиченого досвіду</p>
                    </div>
                    <div class="home-text">
                        <p>
                            Це команда професіоналів, яка забезпечує стійкий розвиток<br />
                            підприємства за рахунок накопиченого досвіду, реалізації<br />
                            нових технологій для задоволення потреб суспільства в сфері<br />
                            будівництва з гарантованою якістю, розумною ціною та<br />
                            збереженням екологічного балансу природного середовища.
                        </p>
                    </div>
                    <div class="home-btn">
                        <a href="/cooperation"><button class="btn">Замовити проект</button></a>
                        <a href="/#about_us"><button class="btn look">Детальніше</button></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-company">
            <div class="container">
                <div class="about-company-header">
                    <div class="rectangle"></div>
                    <a id="about_us"><div class="about-company-title">Про компанію</div></a>
                </div>
                <div class="about-company-content">
                    <div class="info-block">
                        <div class="info-header">
                            ми маємо досвід для виконання робіт<br />
                            будь-якої складності.
                        </div>
                        <div class="info-content">
                            Компанія створена 2016 р., але всі працівники мають досвід
                            багаторічної спільної діяльності. Формування команди і
                            розпочалась ще у 1996 році на будівництві молодіжного житлового
                            комплексу в м.Києві. З того часу колектив працівників збудував у
                            якості генерального підрядника, головного підрядника,
                            субпідрядника понад 60 об’єктів.
                        </div>
                    </div>
                    <div class="specialization">
                        <div class="specialization-header">наша спеціалізація:</div>
                        <div class="specialization-content">
                            <i class="builder"
                            ><img src="/images/Group.svg" alt="builder-icon"/></i>
                            <p class="text">будівництво</p>
                            <i class="project"
                            ><img src="/images/projects.svg" alt="project-icon"
                                /></i>
                            <p class="text">управління проектами</p>
                            <i class="constract"
                            ><img src="/images/construct.svg" alt="constract-icon"
                                /></i>
                            <p class="text">реконструкція будівель</p>
                        </div>
                    </div>
                    <div class="image-block">
                        <img src="/images/img-about.png" alt="image-about" />
                    </div>
                </div>
            </div>
        </section>
        <section class="our-project">
            <div class="container-fluid">
                <div class="our-project-header">
                    <div class="rectangle second"></div>
                    <div class="our-project-title">Проекти</div>
                </div>
                <div class="our-projects">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <a href="/projects">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="/images/img1.png" />
                                    <div class="content-details fadeIn-bottom">
                                        <h3 class="content-title">Будівництво багатоквартирних житлових будинків
                                        </h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <a href="/project/Vezha">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="/images/img2.png" />
                                    <div class="content-details fadeIn-bottom">
                                        <h3 class="content-title">"Печерська вежа"</h3>
                                        <p class="content-text">
                                            <i class="add-info"></i>Житлово-офісний комплекс
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <a href="/project/Manheten">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="/images/img3.png" />
                                    <div class="content-details fadeIn-bottom">
                                        <h3 class="content-title">“МАНХЕТЕН”</h3>
                                        <p class="content-text">
                                            <i class="add-info"></i> Tоргівельно-офісний, житловий комплекс
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <a href="/project/Melody">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="/images/img4.png" />
                                    <div class="content-details fadeIn-bottom">
                                        <h3 class="content-title">“МЕЛОДІЯ”</h3>
                                        <p class="content-text">
                                            <i class="add-info"></i> Житловий, офісно-торгівельний комплекс
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="/projects"><button class="button-6" role="button">Більше</button></a>
                </div>
            </div>
        </section>

        <section class="our-advantages">
            <div class="container">
                <div class="our-advantages-header">
                    <div class="rectangle third"></div>
                    <div class="our-advantages-title">Переваги</div>
                </div>
                <div class="adv">
                    we are <span>professional:</span>
                </div>
                <div class="our-advantages-content">
                    <div class="features">
                        <p>МОБІЛЬНІСТЬ <b>#1</b></p>
                        <p>ЯКІСТЬ <b>#2</b></p>
                        <p>ПОТУЖНІСТЬ <b>#3</b></p>
                        <p>ГНУЧКІСТЬ <b>#4</b></p>
                    </div>
                    <div class="rating">
                        <p><img src="/images/stars-5.svg" alt="5 stars-icon"></p>
                        <p><img src="/images/stars-5.svg" alt="5 stars-icon"></p>
                        <p><img src="/images/4-stars.svg" alt="4 stars-icon"></p>
                        <p><img src="/images/3-stars.svg" alt="3 stars-icon"></p>
                    </div>
                    <div class="image-adv">
                        <img src="/images/img-abv.png" alt="image-advantages">
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection

