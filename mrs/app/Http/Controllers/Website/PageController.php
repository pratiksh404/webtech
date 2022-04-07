<?php

namespace App\Http\Controllers\Website;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home()
    {
        $featured_movies = Movie::where('featured', 1)->get();
        return view('website.index', compact('featured_movies'));
    }
}
