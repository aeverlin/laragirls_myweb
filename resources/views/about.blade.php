<!-- 繼承layout.master 母模板 -->
@extends('layouts.master')

<!-- 傳送資料到母模板, 並指定變數為content -->
@section('content')
        <div class="flex-center position-ref full-height">  
            <div class="row">
                <div class="col-sm-6">
                <div>
                    <div class="card-body m-photo">
                        <img src="http://127.0.0.1:8080/img/aboutme.JPG" width="50%">
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                <div>
                    <div class="card-body">
                        <h1 class="card-title"><b>愛流浪的Claire</b></h1>
                        <p class="card-text">
                            我是一個愛到處流浪的女性工程師，<br>
                            最喜歡去的國家是「日本」，最喜歡「爬日本的城」。<br>
                            目前最想去的國家是「埃及」，想去看「金字塔」跟「木乃伊」。<br>
                            我相信。。。<br>
                            「旅行是為了感受美好的人生，讓奔波的心靈得到休息與重生。」
                        </p>
                    </div>
                </div>
                <!--
                <div><br></div>
                <a href="/" class="btn btn-secondary btn-sm">回首頁</a>
                -->
                </div>
            </div>
        </div>
@endsection 
