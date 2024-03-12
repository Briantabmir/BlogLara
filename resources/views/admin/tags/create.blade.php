@extends('adminlte::page')

@section('title', 'BTMiranda')

@section('content_header')
<h1>Create tag </h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">

        {!! Form::open(['route' => 'admin.tags.store']) !!}
        
        @include('admin.tags.partials.form')
        
        {!! Form::submit('Create tag', ['class' => 'btn btn-secondary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')

<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });
</script>

@endsection