<div class="card">

    {{$search}}

    <div class="card-header">
        <input wire:model.live="search" class="form-control" placeholder="Enter the name of the post">
    </div>

    @if($posts->count())

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th colspan="2"></th>
                </tr>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id}}</td>
                        <td>{{ $post->name}}</td>
                        <td with="10px">
                            <a  class ="btn btn-primary btn-sm" href="{{ route('admin.posts.edit', $post)}}">Edit</a>
                        </td>
                        <td with="10px">
                            <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </thead>
        </table>
    </div>

    <div class="card-footer">
        {{$posts->links()}}
    </div>

@else
<div class="card-body">
    <strong>There is no registration</strong>
</div>
    
    @endif
</div>