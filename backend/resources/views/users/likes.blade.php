@extends('layouts.app')

@section('title', $user->name . 'のいいねした記事')

@section('content')
  {{-- @include('nav') --}}
  <div class="container">
    @include('users.user')
    @include('users.tabs',['hasArticles'=>false,'hasLikes'=>true])
@foreach($projects as $project)
  @include('projects.card')
    @endforeach
  </div>
@endsection
