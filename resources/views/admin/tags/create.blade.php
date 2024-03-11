@extends('adminlte::page')

@section('title', 'BTMiranda')

@section('content_header')
<h1>Create tag </h1>
@stop

@section('content')
<div class="card">


    {!! Form::open(['route' => 'admin.tags.store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the tag name']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('slug', 'Slug') !!}
        {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter the slug name', 'readonly']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::submit('Create tag', ['class' => 'btn btn-secondary']) !!}


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