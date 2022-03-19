<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">


</head>

<body>
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-lg-2">
                <ul class="list-group">
                    @auth
                    <li class="list-group-item">
                        <a href="{{ route('home') }}" class="btn btn-primary">Website</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('logout') }}" class="btn btn-primary">Log Out</a>
                    </li>
                    @else
                    <li class="list-group-item">
                        <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
                    </li>
                    @endauth
                    <div class="list-group-item">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-expanded="false">
                                Category
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('category.index') }}">All Category</a>
                                <a class="dropdown-item" href="{{ route('category.create') }}">Create Category</a>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="col-lg-10">
                {{-- Flash Message --}}
                @include('admin.layouts.flash')
                {{-- Error Alerts --}}
                @include('admin.layouts.error')
                {{-- Content --}}
                @yield('content')
            </div>
        </div>
    </div>

    {{-- Bootstrap --}}
    <script src="{{asset('assets/jquery/jquery.slim.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>