@extends('layouts.app')

@section('title','記事詳細')

@section('content')
   {{-- @include('nav') --}}
   <div class="ui main container">
       @include('projects.card')
   </div>

@endsection
