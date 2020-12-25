<!-- app.blade.php をベースとして使用することを宣言 -->
@extends('layouts.app')

<!-- app.blade.php の中で定義した "title" を利用する(app側では @yield('title')) -->
@section('title','TOPページ')

<!-- app.blade.php の中で定義した "content" を利用する(app側では @yield('content')) -->
@section('content')
@include('nav')
<div class="ui main container">
    @foreach ($projects as $project)
    @include('projects.card')
    @endforeach
</div>



<div class="ui two column centered grid">
    <div class="ui borderless menu">
        <a class="item">1</a>
        <a class="item">2</a>
        <a class="item">3</a>
        <a class="item">4</a>
        <a class="item">5</a>
        <a class="item">6</a>
    </div>
</div>

@endsection
