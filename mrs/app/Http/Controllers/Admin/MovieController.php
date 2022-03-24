<?php

namespace App\Http\Controllers\Admin;

use App\Models\Movie;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::latest()->paginate(10);
        return view('admin.movie.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(['id', 'name']);
        return view('admin.movie.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        $movie = Movie::create($request->validated());
        $this->uploadImage($request, $movie);
        return redirect()->route('movie.index')->with('success', 'Movie has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('admin.movie.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $categories = Category::all(['id', 'name']);
        return view('admin.movie.edit', compact('movie', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(MovieRequest $request, Movie $movie)
    {
        $movie->update($request->validated());
        $this->uploadImage($request, $movie);
        return redirect()->route('movie.index')->with('info', 'Movie has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }

    // Image Upload
    private function uploadImage(MovieRequest $request, Movie $movie)
    {
        if ($request->has('image')) {
            $name = $this->validImageName(request()->image->getClientOriginalName());
            $path = $request->file('image')->storeAs('images/category', $name, 'public');
            $movie->update(['image' => $path]);
        }
    }

    // Valid Image Name
    private function validImageName($name)
    {
        return strtolower(str_replace([' ', '-', '$', '<', '>', '&', '{', '}', '*', '\\', '/', ':' . ';', ',', "'", '"', "?"], '', trim($name)));
    }
}
