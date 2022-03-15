@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Show Category
    </div>
    <div class="card-body">
        This is detail of {{$category->name}} category
    </div>
</div>
@endsection