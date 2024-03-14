@extends('adminlte::page')

@section('title', 'BTMiranda')

@section('content_header')
<h1>Create new post</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => true]) !!}

        {!! Form::hidden('user_id', auth()->user()->id) !!}


        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Enter the name of the post']) !!}

            @error('name')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder'=>'Enter the slug of the post', 'readonly']) !!}

            @error('slug')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Category') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

            @error('category_id')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>

        <div class="form-group">
            <p class="font-wight-bold">Tag</p>


            @foreach ($tags as $tag)
            <label class="mr-2">
                {!! Form::checkbox('tags[]', $tag->id, null) !!}
                {{$tag->name}}
            </label>
            @endforeach



            @error('tags')
            <br>
            <small class="text-danger">{{$message}}</small>
            @enderror


        </div>


        <div class="form-group">
            <p class="font-wight-bold">Status</p>

            <label>
                {!! Form::radio('status', 1, true) !!}
                Draft
            </label>
            <label>
                {!! Form::radio('status', 2) !!}
                Published
            </label>

            @error('status')
            <br>
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="row mb-3">
            <div class="col">
                <div class="image-wrapper">
                    <image id="picture" src="https://cdn.pixabay.com/photo/2024/03/02/09/14/bridge-8608105_1280.jpg">
                </div>

            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('file', 'Image') !!}
                    {!! Form::file('file', ['class' => 'form-control-file']) !!}

                    @error('file')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
            </div>
        </div>


        <div class="form-group">
            {!! Form::label('extract', 'Extract') !!}
            {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}


            @error('extract')
            <small class="text-danger">{{$message}}</small>
            @enderror


        </div>
        <div class="form-group">
            {!! Form::label('body', 'Post body') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}


            @error('body')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        {!! form::submit('Create post', ['class' => 'btn btn-primary']) !!}


        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
<style>
    .image-wrapper {
        position: relative;
        padding-bottom: 56.25%;
    }

    .image-wrapper img {
        position: absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>
@stop

@section('js')

<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

<script>
    $(document).ready(function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });

    ClassicEditor
        .create(document.querySelector('#extract'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#body'))
        .catch(error => {
            console.error(error);
        });


       //muestra la imagen seleccionada 
    document.getElementById("file").addEventListener('change', cambiarImagen);

    function cambiarImagen(event) {
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };
        reader.readAsDataURL(file);
    }
</script>

@endsection