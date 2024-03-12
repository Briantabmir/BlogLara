<div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the tag name']) !!}

            @error('name')
            <small class="text-danger">{{$message}}</small>
            @enderror
        
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter the slug name', 'readonly']) !!}
        
            @error('slug')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>
        
        <div class="form-group">
            <!-- <label for="">Color:</label>
            <select name="color" id="" class="form-control">
                <option value="red">Color rojo</option>
                <option value="green" selected>Color verde</option>
                <option value="blue">Color azul</option>
            </select> -->

            {!! form::label('color', 'Color:') !!}
            {!! form::select('color', $colors, null, ['class' => 'form-control']) !!}
        
            @error('color')
            <small class="text-danger">{{$message}}</small>
            @enderror
        
            <div>