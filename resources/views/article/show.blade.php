<!-- 繼承layout.master 母模板 -->
@extends('layouts.master')

<!-- 傳送資料到母模板, 並指定變數為content -->
@section('content')
<br>
<div class="">  
    <div class="row">
        <div class="card mb-3">
        <img src="{{$article->image}}" width="50%" alt="Card image cap">
        <div class="card-body">
            <h3 class="card-title"><b>{{htmlspecialchars($article->title)}}</b></h3>
            <p class="card-text">{{htmlspecialchars($article->content)}}</p>
            <br>
            <a href="/article" class="btn btn-secondary btn-sm">回文章列表</a>
        </div>
        </div>
    </div>
<div>
@endsection 