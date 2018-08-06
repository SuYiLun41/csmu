@extends('layouts.default')
@section('css')
    <style>
        .example_box {
            background-color: #cccccc;
            height: 500px;
        }

        .slide_line {
            height: 10px;
            background-color: #6E9E00;
            margin-bottom: 50px;
        }
        .nav-tabs .nav-item{
            width: 50%;
            text-align: center;
            font-size: 24px;
        }
        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
            border-color: transparent;
            color: #fff;
        }
        .nav-tabs .nav-link{
            color: #fff;
        }
        .tab-content{
            font-size: 20px;
            line-height: 31px;
            letter-spacing: .5px;
        }
        .tab-content ul{
            color: #FFD046;
        }
        .tab-content ul li{
            margin-bottom: 3px;
        }
        .tab-content ul span{
            color: #4c4c4c;
        }
        .tab-pane{
            max-height: 300px;
            position: relative;
        }
        .more{
            position: absolute;
            bottom: -35px;
            right: 2px;

            color: #fff;
            font-size: 16px;
        }

        #student_honor,
        #news{
            border-top: 10px solid #b1d772;
            border-bottom: 40px solid #b1d772;
            border-left: 10px solid #b1d772;
            border-right: 10px solid #b1d772;
            border-radius: 0 0 5px 5px;
        }
        #teacher_honor,
        #contest{
            border-top: 10px solid #acb971;
            border-bottom: 40px solid #acb971;
            border-left: 10px solid #acb971;
            border-right: 10px solid #acb971;
            border-radius: 0 0 5px 5px;
        }
    </style>
@endsection
@section('content')
    <div class="container">
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
        <div class="row">
            <div class="col-6">
                <ul class="nav nav-tabs" id="honor" role="tablist" style="background-color: #b1d772;border-radius: 5px 5px 0 0;">
                    <li class="nav-item">
                        <a class="nav-link active" id="student_honor-tab" data-toggle="tab" href="#student_honor" role="tab" aria-controls="student_honor" aria-selected="true" style="background-color: #b1d772">學生榮譽</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="teacher_honor-tab" data-toggle="tab" href="#teacher_honor" role="tab" aria-controls="teacher_honor" aria-selected="false" style="background-color: #acb971;">教師榮譽</a>
                    </li>
                </ul>
                <div class="tab-content" id="honorContent">
                    <div class="tab-pane fade show active" id="student_honor" role="tabpanel" aria-labelledby="student_honor-tab">
                        <ul>
                            <li> <span>賀!107學年研究所榜單</span></li>
                            <li> <span>賀!104學年研究所榜單</span></li>
                            <li> <span>賀!107學年研究所榜單</span></li>
                            <li> <span>賀!107學年研究所榜單</span></li>
                            <li> <span>賀!107學年研究所榜單</span></li>
                        </ul>
                        <div class="more"><a href="">More...</a></div>
                    </div>
                    <div class="tab-pane fade" id="teacher_honor" role="tabpanel" aria-labelledby="teacher_honor-tab">
                        <ul>
                            <li> <span>賀!107學年研究所榜單</span></li>
                            <li> <span>賀!104學年研究所榜單</span></li>
                            <li> <span>賀!107學年研究所榜單</span></li>
                            <li> <span>賀!107學年研究所榜單</span></li>
                        </ul>
                        <div class="more"><a href="">More...</a></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <ul class="nav nav-tabs" id="honor" role="tablist" style="background-color: #b1d772;border-radius: 5px 5px 0 0;">
                    <li class="nav-item">
                        <a class="nav-link active" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true" style="background-color: #b1d772">最新消息</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contest-tab" data-toggle="tab" href="#contest" role="tab" aria-controls="contest" aria-selected="false" style="background-color: #acb971;">活動競賽訊息</a>
                    </li>
                </ul>
                <div class="tab-content" id="news_contestContent">
                    <div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="news-tab">
                        <ul>
                            <li> <span>賀!107學年研究所榜單</span></li>
                            <li> <span>賀!104學年研究所榜單</span></li>
                            <li> <span>賀!107學年研究所榜單</span></li>
                            <li> <span>賀!107學年研究所榜單</span></li>
                            <li> <span>賀!107學年研究所榜單</span></li>
                        </ul>
                        <div class="more"><a href="">More...</a></div>
                    </div>
                    <div class="tab-pane fade" id="contest" role="tabpanel" aria-labelledby="contest-tab">
                        <ul>
                            <li> <span>賀!107學年研究所榜單</span></li>
                            <li> <span>賀!104學年研究所榜單</span></li>
                            <li> <span>賀!107學年研究所榜單</span></li>
                            <li> <span>賀!107學年研究所榜單</span></li>
                        </ul>
                        <div class="more"><a href="">More...</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection

