@extends('layouts.layout')

@section('title')
    Build company-Projects
@endsection

@section('style')
    <link rel="stylesheet" href={{asset('css/projects.css')}} />
@endsection

@section('content')
    <main>
        <div class="wrapper">
            <section class="home">
                <div class="container">
                    <div class="home-content">
                        <h1 class="home-heading">Проекти</h1>
                        <div class="home-text">
                            <p>Перелік найбільших виконаних замовлень</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="our-project">
                <div class="container-fluid">
                    <div class="our-projects">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="content">
                                    <a href="#">
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="/images/pimg1.png"/>
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
                                        <img class="content-image" src="/images/pimg2.png"/>
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
                                        <img class="content-image" src="/images/pimg3.png"/>
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
                                        <img class="content-image" src="/images/pimg4.png"/>
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">“Мелодія”</h3>
                                            <p class="content-text">
                                                <i class="add-info"></i> Житловий, офісно-торгівельний комплекс
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="content">
                                    <a href="/project/Metropolis">
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="/images/img5.png"/>
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">"Метрополіс" </h3>
                                            <p class="content-text">
                                                <i class="add-info"></i>Житловий комплекс
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="content">
                                    <a href="#">
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="/images/img6.png"/>
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">Житлово-офісний комплекс</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="content">
                                    <a href="/project/Unit">
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="/images/img7.png"/>
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">“UNIT Factory”</h3>
                                            <p class="content-text">
                                                <i class="add-info"></i> Приватний навчальний комплекс
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="content">
                                    <a href="/project/Cardinal">
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="/images/img8.png"/>
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">“КАРДИНАЛ”</h3>
                                            <p class="content-text">
                                                <i class="add-info"></i> Житловий, офісно-торгівельний комплекс
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button class="button-6" role="button">Більше</button>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
