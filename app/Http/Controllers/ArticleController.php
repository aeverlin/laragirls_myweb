<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    /* 撈出所有資料顯示 */ 
    public function list() {
        $articles = Article::all();
        // view('畫面上的變數名稱', [要丟什麼資料給畫面]);
        // articles : 畫面上的變數名稱
        // $articles : 要丟到畫面上的資料內容
        return view('article.list', ['articles' => $articles]);
    }


    /* 單一顯示 */
    public function show($id){
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }
}
