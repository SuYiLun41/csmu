<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() //首頁
    {
        return view('front.index');
    }

    public function teacher_info() //教師資訊
    {
        return view('front.teacher_info');
    }
}
