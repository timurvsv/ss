@extends('layout')
@section('content')

    <!--////////////////////////////////////Container-->
    <section id="container">
        <div class="wrap-container">
            <!-----------------Content-Box-------------------->
            <div id="main-content" class="zerogrid">
                <div class="wrap-content">
                    <div class="row">
                        @foreach($tovars as $tovar)
                        <div class="col-1-3">
                            <div class="wrap-col">
                                <article>
                                    <div class="post-thumbnail-wrap">
                                        <a href="single.html" class="portfolio-box">
                                            <img src="{{$tovar->image}}" alt="">
                                        </a>
                                    </div>
                                    <div class="entry-header ">
                                        <h3 class="entry-title">{{$tovar->name}}</h3>
                                        <div class="l-tags"><a href="#">{{$tovar->description}}</a> / <a href="#">Illustrations</a></div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        @endforeach
@csrf
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
    <!--////////////////////////////////////Footer-->

