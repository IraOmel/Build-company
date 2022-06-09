@extends('layouts.layout')

@section('title')
    Build company-Project
@endsection

@section('style')
    <link href={{asset('css/info_page.css')}} rel="stylesheet">
@endsection

@section('content')
<main>
    <div class="wrapper">
        <section class="home">
            <div class="container">
                <div class="home-content">
                    <div class="home-text">
                        <p>{{$obj['name_header']}}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="info-content">
            <div class="container">
                <div class="main-info">
                    <div class="info-block">
                        <div class="info-heading">
                            <i class="building"><img src={{asset('images/building-icon.svg')}} , alt="building-icon"/></i>
                            <div class="heading-text">{{$obj['name_project']}}</div>
                        </div>
                        <div class="info">
                            <i class="line"><img src={{asset('images/line_info.png')}} , alt="line"/></i>
                            <div class="info-text">{{$obj['info_about']}}
                            </div>
                        </div>
                        <a href="/cooperation">
                            <button class="btn">Замовити проект</button>
                        </a>
                        <div class="order">
                            <i class="order-icon"><img src={{asset('/images/order.svg')}} , alt="order"/></i>
                            <div class="order-text">Замовник: {{$obj['order']}}</div>
                        </div>
                    </div>
                    <div class="info-img">
                        <img class= 'build-img' src={{$obj["img_project"]}} , alt="manheten-build"/>
                        <div class="img-describe">
                            <i class="adress"><img src={{asset('/images/nav.svg')}} , alt="adress"/></i>
                            <div class="img-text">{{$obj['adress']}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-before-header">
                    <div class="rectangle"></div>
                    <div class="project-before-title">Попередні роботи</div>
                </div>
            </div>
        </section>
        <section class="project-before">
            <div class="container">
                <div class="project-before-content">
                    <div class="img-block">
                        <img src={{asset('/images/before-1.png')}} , alt="before-build"/>
                        <img src={{asset('/images/before-2.png')}} , alt="before-building"/>
                        <img src={{asset('/images/before-3.png')}} , alt="before-building"/>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection

