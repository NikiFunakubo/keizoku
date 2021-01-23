@extends('layouts.app')

@section('title',$user->name)

@section('content')
{{-- @include('nav') --}}

<div class="container">
    @include('users.user')
    @include('users.tabs',['hasArticles'=>true,'hasLikes'=> false])
      @foreach($projects as $project)
        @include('projects.card')
      @endforeach
</div>
@endsection
