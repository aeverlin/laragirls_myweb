@extends('layouts.app')


@section('content')
    <h1>修改文章</h1>

    {{-- 用引用的方式 --}}
    {{--@include('errors')--}}

    {{-- 直接寫 --}}
    @if (count($errors) > 0)
        <!-- 表單錯誤清單 -->
        <div class="alert alert-danger">
            <strong>哎呀！出了些問題！</strong>
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        <!-- 新文章的表單 -->
        <form action="/admin/article/update/{{$article->id}}" method="POST" class="form-horizontal">
            @csrf

            <div class="form-group">
                <label for="title">標題</label>
                <input type="text" name="title" id="title" class="form-control" value="{{htmlspecialchars($article->title)}}">
            </div>

            <div class="form-group">
                <label for="image">圖片網址</label>
                <input type="text" name="image" id="image" class="form-control" value="{{$article->image}}">
            </div>

            <div class="form-group">
                <label for="content">內容</label>
                <textarea name="content" class="form-control" id="content" rows="3">{{htmlspecialchars($article->content)}}</textarea>
            </div>

            <!-- 增加文章按鈕-->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">存檔</button>
                <a href="/admin/article" class="btn btn-primary">回文章列表</a>
            </div>
        </form>
    </div>
@endsection