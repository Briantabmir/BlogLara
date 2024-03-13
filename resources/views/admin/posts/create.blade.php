@extends('adminlte::page')

@section('title', 'BTMiranda')

@section('content_header')
    <h1>Create new post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off']) !!}

                B


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
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
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
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection