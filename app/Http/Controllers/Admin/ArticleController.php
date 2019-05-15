<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller
{
    //
    public function index() {
        // 要引用 use App\Article, 才能直接使用 model名稱(即Article)
        $articles = Article::all();
        // ['在Blade頁面上的變數名稱' => 上行載入DB資料]
        return view('admin.article.index', ['articles' => $articles]);
    }

    // 新增文章的畫面表單
    public function create() {
        return view('admin.article.create');
    }

    /**
     * 儲存一篇部落格新文章。
     *
     * @param  Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        // 表單驗證
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required',
            'content' => 'required',
        ]);

        // 從表單接到user輸入的資料內容
        $article = new Article();
        $article->title = $request->title;
        $article->image = $request->image;
        $article->content = $request->content;
        $article->save();

        return redirect('admin/article');
    }

    // 刪除文章
    public function delete($id){
        $article = Article::find($id);
        $article->delete();

        return redirect('admin/article');
    }

    // 更新文章
    public function update($id){
        $article = Article::find($id);

        return view('admin.article.update', ['article' => $article]);
    }

    public function updatestore($id, Request $request)
    {
        $article = Article::find($id);

        // 表單驗證
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required',
            'content' => 'required',
        ]);

        // 從表單接到user輸入的資料內容
        $article->title = $request->title;
        $article->image = $request->image;
        $article->content = $request->content;
        $article->save();

        return redirect('admin/article');
    }

}
