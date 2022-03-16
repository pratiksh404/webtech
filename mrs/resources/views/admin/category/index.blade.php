@extends('admin.layouts.app')

@section('content')
@include('admin.layouts.flash')
<table class="table table-border table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Category Slug</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @isset($categories)
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->slug}}</td>
            <td>
                <a href="{{route('category.show',['category' => $category->id])}}" class="btn btn-info">Show</a>
                <a href="{{route('category.edit',['category' => $category->id])}}" class="btn btn-warning">Edit</a>
                <form action="{{route('category.destroy',['category' => $category->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
        @endisset
    </tbody>
</table>
@endsection