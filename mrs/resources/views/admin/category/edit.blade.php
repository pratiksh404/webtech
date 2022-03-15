@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Edit Category
    </div>
    <div class="card-body">
        <form action="{{route('category.update',['category' => $category->id])}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="">Category Name</label>
                <input type="text" class="form-control" name="name" id="" value="{{$category->name}}">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Edit</button>
            </div>
        </form>
    </div>
</div>
@endsection