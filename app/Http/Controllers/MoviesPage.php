<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MoviesPage extends Controller
{
    public function home() {
        $movies = Movie::all();
        return view('views.home', compact('movies'));
    }

    
    public function movie($id) {
        $movie = Movie::findOrFail($id);
        return view('views.movie', compact('movie'));
        
    }

    public function create() {
        return view('views.create');
    }

    public function store(Request $request) {

        $data = $request -> validate([
            'title' => 'required|string|max:50',
            'subTitle' => 'required|string|max:50',
            'release_date' => 'required|date'
        ]);

        $movie = Movie::create($data);

        // return redirect() -> route('home');
        return redirect() -> route('movie', $movie -> id);
    }

    public function edit($id) {
        $movie = Movie::findOrFail($id);
        return view('views.edit', compact('movie'));
    }

    public function update(Request $request,$id) {
        $data = $request -> validate([
            'title' => 'required|string|max:50',
            'subTitle' => 'required|string|max:50',
            'release_date' => 'required|date'
        ]);
        $movie = Movie::findOrFail($id);
        $movie->update($data);
        return redirect() -> route('home');
    }

    public function delete($id) {

        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect() -> route('home');
    }
}
