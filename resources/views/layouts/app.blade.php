<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    @auth
                        <li><a href="/admin/seo">SEO設定</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                文章管理 <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('admin.article_type_index')}}">文章類別</a></li>
                                <li><a href="{{route('admin.article_index')}}">文章列表</a></li>
                            </ul>
                        </li>

                        <li><a href="#">課程資訊</a></li>
                        <li><a href="#">師資陣容</a></li>
                        <li><a href="#">考照資訊</a></li>
                        <li><a href="#">活動專區</a></li>
                        <li class="dropdown">
                            <?php $abouts =  \App\AboutPage::all(); ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                系所介紹 <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($abouts as $about)
                                    <li><a href="{{route('admin.about',$about->id)}}">{{$about->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown">
                            <?php $englishs =  \App\EnglishPage::all(); ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                英文版頁面 <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($englishs as $english)
                                    <li><a href="{{route('admin.english',$english->id)}}">{{$english->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endauth
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="/admin/reset_password">更改密碼</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

    <!-- Scripts -->
    <script src="{{asset('js/admin/jquery-3.3.1.min.js')}}" ></script>
    <script src="{{ asset('js/admin/bootstrap.min.js') }}" defer></script>

    @if(session('message') != null)
        <script>
            $(document).ready(function () {
               alert('{{session('message')}}');
            });
        </script>
    @endif

    @yield('js')
</body>
</html>
