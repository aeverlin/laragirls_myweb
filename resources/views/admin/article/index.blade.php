@extends('layouts.app')
<!-- 繼承父頁面(layouts/app.php) -->

@section('content')
    <h1>文章列表</h1>
    <div class="col-sm-12 py-4">
        <a class="btn btn-primary" href="/admin/article/create" role="button">新增文章</a>
    </div>
    <table class="table table-hover">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">文章標題</th>
            <th scope="col">更新日期</th>
            <th scope="col">操作</th>
            <th scope="col">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->updated_at}}</td>
            <td>
            <!-- route('admin.article.delete'  對應 route/web.php 的name  -->
                <form action="{{route('admin.article.delete', [$article->id])}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}

                    <button class="btn btn-outline-danger">刪除</button>
                </form>
            </td>
            <td>
            <!-- route('admin.article.delete'  對應 route/web.php 的name  -->
                <form action="{{route('admin.article.update', [$article->id])}}" method="GET">
                    @csrf
                    {{ method_field('UPDATE') }}

                    <button class="btn btn-outline-danger">修改</button>
                </form>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection