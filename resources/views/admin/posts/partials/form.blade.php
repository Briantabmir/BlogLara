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
                    @isset ($post->image)
                        <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
                    @else
                        <img id="picture" src="https://cdn.pixabay.com/photo/2020/05/13/21/24/landscape-5169205_960_720.jpg" alt="">
                    @endisset
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