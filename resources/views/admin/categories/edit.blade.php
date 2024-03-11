@extends('adminlte::page')

@section('title', 'BTMiranda')

@section('content_header')
<h1>Edit Categorie</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the name of the category']) !!}

            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter the slug of the category', 'readonly']) !!}

            @error('slug')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        {!! Form::submit('Update category', ['class' => 'btn btn-secondary']) !!}


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