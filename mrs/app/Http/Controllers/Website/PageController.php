<?php

namespace App\Http\Controllers\Website;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function home()
    {
        $featured_movies = Movie::where('featured', 1)->take(10)->get();
        $latest_movies = Movie::take(10)->get();
        return view('website.index', compact('featured_movies', 'latest_movies'));
    }
}
