@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Show Movie
    </div>
    <div class="card-body">
        This is detail of {{$movie->name}} category
    </div>
</div>
@endsection