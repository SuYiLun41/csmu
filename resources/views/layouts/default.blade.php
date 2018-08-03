<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>
        body {
            margin: 0;
            font-family: Microsoft JhengHei;
            letter-spacing: 1px;
        }

        a,
        a:hover,
        a.click,
        a.focus {
            color: inherit;
            text-decoration: none;
        }

        ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .top_line {
            height: 5px;
            background-color: #99CC00;
            margin-bottom: 10px;
        }

        .head {
            margin-bottom: 10px;
        }

        .items {
            font-size: 16px;
            line-height: 16px;
            margin-bottom: 20px;
            text-align: right;
        }

        .items>p>span {
            font-size: 10px;
            margin: 0 3px;
        }

        .nav_block {
            background-color: #99CC00;
            border-bottom: 3px solid #6E9E00;
        }

        nav>ul>li {
            display: inline-block;
            color: #fff;
            font-size: 18px;
            padding: 10px 3px;
            margin: 0 10px;
            cursor: pointer;
            position: relative;
        }

        .slide {
            height: 500px;
        }

        .example_box {
            background-color: #cccccc;
            height: 500px;
        }

        .slide_line {
            height: 10px;
            background-color: #6E9E00;
            margin-bottom: 50px;
        }
    </style>

    @yield('css')
</head>

<body>
<div class="app">
    <div class="top_line"></div>
    <div class="head">
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-5">
                    <img class="img-fluid" src="img/logo.png" alt="">
                </div>
                <div class="col-lg-4">
                    <div class="items">
                        <a href="">首頁</a>
                        <span>|</span>
                        <a href="">中山醫首頁</a>
                        <span>|</span>
                        <a href="">網站地圖</a>
                    </div>
                    <div class="items">
                        <p>食品安全
                            <span>○</span>食品科學
                            <span>○</span>餐旅服務
                            <span>○</span>經營管理</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav_block">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                    <nav class="nav">
                        <ul>
                            <li>系所介紹▼</li>
                            <li>
                                課程資訊▼</li>
                            <li>
                                師資陣容▼
                            </li>
                            <li>
                                考照資訊▼
                            </li>
                            <li>
                                活動專區▼
                            </li>
                            <li>
                                English▼
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
</div>

<script href="{{asset('js/app.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
@yield('js')
</body>
</html>