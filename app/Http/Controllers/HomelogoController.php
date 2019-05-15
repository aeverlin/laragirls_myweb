<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homelogo;

class HomeLogoController extends Controller
{
    //
    public function index(){
        // 要引用 use App\Article, 才能直接使用 model名稱(即Article)
        $Homelogos = Homelogo::all()
            ->where('is_allow', '1');
        // ['在Blade頁面上的變數名稱' => 上行載入DB資料]
        return view('index', ['Homelogos' => $Homelogos]);
    }
}
