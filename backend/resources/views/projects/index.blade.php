<!-- app.blade.php をベースとして使用することを宣言 -->
@extends('app')

<!-- app.blade.php の中で定義した "title" を利用する(app側では @yield('title')) -->
@section('title','TOPページ')

<!-- app.blade.php の中で定義した "content" を利用する(app側では @yield('content')) -->
@section('content')
@include('nav')
<div class="ui main container">
    @foreach ($projects as $project)
    <div class="ui link Centered card">
        <div class="content">
            <i class="right floated like icon"></i>
            <i class="right floated comment outline icon"></i>
            <div class="header">
                {{ $project->project_name }}
            </div>
            <div class="meta">
                <span class="category">
                    {{ $project->project_description }}
                </span>
            </div>
            <div class="ui yellow　active progress" data-percent="70">
                <div class="bar">
                    <div class="progress"></div>
                </div>
            </div>
        </div>
        <div class="extra content">
            <a class="ui basic label">Basic</a>
            <a class="ui basic label">Basic</a>
            <a class="ui basic label">Basic</a>
            <div class="right floated author">
                <img class="ui avatar image" src="/images/avatar/small/matt.jpg"> {{ $project->user->name }}
            </div>
            <p class="small right floated">登録日 : {{ $project->created_at->format('Y/m/d H:i') }}</p>
        </div>
    </div>
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