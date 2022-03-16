@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Create Category
    </div>
    <div class="card-body">
        @include('admin.layouts.error')
        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="slug">Category Slug</label>
                <input type="text" class="form-control" name="slug" id="slug">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection