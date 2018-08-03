@extends('layouts.default')
@section('css')
@endsection
@section('content')
    <div class="slide">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="example_box"></div>
                </div>
                <div class="carousel-item">
                    <div class="example_box"></div>
                    <!-- <img class="d-block h-100" src="img/111.jpeg" alt="Second slide"> -->
                </div>
                <div class="carousel-item">
                    <div class="example_box"></div>
                    <!-- <img class="d-block h-100" src="img/111.jpeg" alt="Third slide"> -->
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="slide_line"></div>
@endsection
@section('js')
@endsection