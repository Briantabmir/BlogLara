@extends('adminlte::page')

@section('title', 'BTMiranda')

@section('content_header')
    <h1>Tags list</h1>  
    <a href="{{ route('admin.tags.create') }}" class="btn btn-secondary">Add new tag</a>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td width="10px">
                        <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td width="10px">
                        <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop