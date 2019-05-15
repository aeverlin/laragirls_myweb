<!-- 繼承layout.master 母模板 -->
@extends('layouts.master')

<!-- 傳送資料到母模板, 並指定變數為content -->
@section('content')
    <br>
    <div class="">
    @foreach($articles as $article)
        @if ( ($loop->iteration % 3) == 1 ) 
        <div class="card-deck">
            <div class="card">
                <img src="{{$article->image}}" width="100%" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title"><b>{{htmlspecialchars($article->title)}}</b></h5>
                <p class="card-text">{{htmlspecialchars($article->content)}}</p>
                <a href="/article/{{$article->id}}" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">more</a>
                </div>
            </div>
            @elseif ( ($loop->iteration % 3) == 0 ) 
            <div class="card">
                <img src="{{$article->image}}" width="100%" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title"><b>{{htmlspecialchars($article->title)}}</b></h5>
                <p class="card-text">{{htmlspecialchars($article->content)}}</p>
                <a href="/article/{{$article->id}}" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">more</a>
                </div>
            </div>
        </div>
        <div><br/></div>
        @else
            <div class="card">
                <img src="{{$article->image}}" width="100%" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title"><b>{{htmlspecialchars($article->title)}}</b></h5>
                <p class="card-text">{{htmlspecialchars($article->content)}}</p>
                <a href="/article/{{$article->id}}" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">more</a>
                </div>
            </div>
        @endif
    @endforeach

    @if ( ($articles->count() % 3) == 1 ) 
        <div class="card">
            <div class="card-body"></div>
        </div>
        <div class="card">
            <div class="card-body"></div>
        </div>
    </div>
    <div><br><br></div>
    @elseif ( ($articles->count() % 3) == 2 ) 
        <div class="card">
            <div class="card-body"></div>
        </div>
    </div>
    <div><br><br></div>
    @endif
    </div>
@endsection 
