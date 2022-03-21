@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between">
    <b>All Movies</b>
    <span class="text-muted">Total Result : {{isset($movies) ? $movies->count() : 0}}</span>
    <a href="{{route('movie.create')}}" class="btn btn-primary">Create Movie</a>
</div>
<hr>
<table class="table table-border table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Movie Name</th>
            <th>Movie Slug</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @isset($movies)
        @foreach ($movies as $movie)
        <tr>
            <td>{{$movie->id}}</td>
            <td>{{$movie->name}}</td>
            <td>{{$movie->slug}}</td>
            <td>
                <a href="{{route('movie.show',['movie' => $movie->id])}}" class="btn btn-info">Show</a>
                <a href="{{route('movie.edit',['movie' => $movie->id])}}" class="btn btn-warning">Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Modal{{$movie->id}}">
                    Delete
                </button>
                <!-- Modal -->
                <div class="modal fade" id="Modal{{$movie->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="Modal{{$movie->id}}Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="Modal{{$movie->id}}Label">Delete Alert !</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('movie.destroy',['movie' => $movie->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    Are you sure you want to delete <b>{{$movie->name}}</b> movie ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete it !</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
        @endisset
    </tbody>
</table>
@if (isset($movies))
{{$movies->links()}}
@endif
@endsection