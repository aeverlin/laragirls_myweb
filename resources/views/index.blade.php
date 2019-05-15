<!-- 繼承layout.master 母模板 -->
@extends('layouts.master')

<!-- 傳送資料到母模板, 並指定變數為content -->
@section('content')
        <div class="flex-center position-ref full-height">
            <!-- 
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            -->
            <div class="content">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    @foreach($Homelogos as $Homelogo)
                        @if ( ($loop->iteration % 3) == 1 ) 
                            <div class="carousel-item active">
                            <img class="center-block" src="{{$Homelogo->image}}" >
                            </div>
                        @else
                            <div class="carousel-item">
                            <img class="center-block" src="{{$Homelogo->image}}" >
                            </div>
                        @endif
                    @endforeach
<!--
                        <div class="carousel-item active">
                        <img class="center-block" src="http://127.0.0.1:8080/img/travel-logo-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="center-block" src="http://127.0.0.1:8080/img/travel-logo-2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="center-block" src="http://127.0.0.1:8080/img/travel-logo-3.jpg" alt="Third slide">
                        </div>
-->
                    </div>
                </div>
                <div><br></div>

                <div>
                    <h5 class="title text-dark" > Travel Life </h5>
                    <p><h5 class="text text-dark">旅行是為了感受美好的人生，讓奔波的心靈得到休息與重生。</p>
                </div>
                <div><br></div>

                <div class="links">
                    <a href="about">About</a>
                    <a href="/article">Blog</a>
                    <a href="#">Album</a>
                    <a href="#">Contact</a>
                </div>
            </div>
        </div>
@endsection 
