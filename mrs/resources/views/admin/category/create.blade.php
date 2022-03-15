@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Create Category
    </div>
    <div class="card-body">
        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Category Name</label>
                <input type="text" class="form-control" name="name" id="">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection