<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <title>Hello, world!</title>


    <style>
        body {
            font-family: "Heiti TC", "Microsoft JhengHei", "LiHei Pro", Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .top_line {
            height: 5px;
            background-color: #99CC00;
        }

        #main_nav.navbar-dark .navbar-nav .nav-link {
            color: white;
        }

        #logo_section {
            padding: 10px 0;
        }

        #logo_section h1 {
            font-size: 1.8em;
        }

        #logo_section h2 {
            font-size: 1.065em;
        }

        #sub_nav {
            position: absolute;
            top: 10px;
            right: 20px;
        }

        #sub_nav a {
            color: #373a3c;
        }


        @media (max-width:992px) {
            #logo {
                height: 35px;
            }
            #logo_section {
                padding: 10px 0;
            }
            #logo_section h1 {
                font-size: 0.9em;
            }
            #logo_section h2 {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="top_line"></div>

    <div class="container position-relative">
        <div id="logo_section">
            <div class="float-left">
                <img id="logo" src="img/logo.jpg" height="80px" alt="中山醫學大學 健康餐飲暨產業管理學系暨碩士班">
            </div>
            <div class="float-left py-2 py-lg-3 px-2">
                <h1>健康餐飲暨產業管理學系暨碩士班</h1>
                <h2>Department of Health Diet and Industry Management</h2>
            </div>
            <i class="fas fa-bars"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"></i>
            <div class="clearfix"></div>
        </div>
        <div id="sub_nav" class="d-none d-lg-block">
            <a href="">首頁</a>
            <span>|</span>
            <a href="">中山醫首頁</a>
            <span>|</span>
            <a href="">網站地圖</a>
        </div>

    </div>
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-dark" style="background-color:#99CC00;">
        <div class="container">


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-between w-100">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarAboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            系所介紹
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarAboutDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarCourseDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            課程資訊
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarCourseDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarTeacherDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            師資陣容
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarTeacherDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">考照資訊</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">活動專區</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarEnglishDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            English
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarEnglishDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>