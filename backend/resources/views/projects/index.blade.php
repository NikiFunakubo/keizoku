<!-- app.blade.php をベースとして使用することを宣言 -->
@extends('layouts.app')

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
            @if( Auth::id()===$project->user_id )
            <div class="ui simple dropdown small item right floated">
                <i class="dropdown icon"></i>
                <div class="menu">
                    <a href="{{ route('projects.edit',['project'=>$project]) }}" class="item">編集</a>
                    <a data-toggle="modal" data-target="#modal-delete-{{ $project->id }}" class="item">削除</a>
                </div>
            </div>
            <!-- modal -->
            <div id="modal-delete-{{ $project->id }}" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="{{ route('projects.destroy', ['project' => $project]) }}">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                {{ $project->title }}を削除します。よろしいですか？
                            </div>
                            <div class="modal-footer justify-content-between">
                                <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                                <button type="submit" class="btn btn-danger">削除する</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- modal -->
            @endif
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
                <img class="ui avatar image" src="/images/avatar/small/matt.jpg">
                {{ $project->user->name}}
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
