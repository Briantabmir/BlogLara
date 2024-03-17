@extends('adminlte::page')

@section('title', 'BTMiranda')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.posts.create')}}">New post</a>

    <h1>Post list</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    @livewire('admin.posts-index')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop