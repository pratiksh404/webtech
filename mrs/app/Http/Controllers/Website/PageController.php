<?php

namespace App\Http\Controllers\Website;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function home()
    {
        $featured_movies = Movie::where('featured', 1)->take(10)->get();
        $latest_movies = Movie::take(10)->get();
        $most_watched_movies = Movie::orderByViews()->take(10)->get();
        return view('website.index', compact('featured_movies', 'latest_movies', 'most_watched_movies'));
    }

    public function movies()
    {
        return view('website.pages.movie.index');
    }

    public function latestMovies()
    {
        $movies = Movie::paginate(10);
        $title = "Latest Movies";
        return view('website.pages.movie.index', compact('movies', 'title'));
    }

    public function mostWatchedMovies()
    {
        $movies = Movie::orderByViews()->paginate(10);
        $title = "Latest Movies";
        return view('website.pages.movie.index', compact('movies', 'title'));
    }

    public function movie(Movie $movie)
    {
        $title = "All Movies";
        views($movie)->record();
        return view('website.pages.movie.show', compact('movie', 'title'));
    }

    public function category(Category $category)
    {
        $movies = $category->movies()->paginate(10);
        $title = $category->name . ' Movies';
        return view('website.pages.movie.index', compact('movies', 'title'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $movies = Movie::where('name', 'like', '%' . $search . '%')->paginate(10);
        $title = 'Search Results for ' . $search;
        return view('website.pages.movie.index', compact('movies', 'title'));
    }
}
