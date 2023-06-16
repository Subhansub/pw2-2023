<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genres::all();
        return view('movies.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
            'negara' => 'required',
            'tahun' => 'required|integer',
            'rating' => 'required|numeric',
        ]);

        if($request->hasFile('poster')) {
            //set image name
            $extension = $request->file('poster')->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;

            //store to storange
            $request->file('poster')->storeAs('assets/img', $imageName, 'public');
            $validatedData['poster'] = $imageName;

        }

        Movie::create($validatedData);

        return redirect('/movies')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        $genres = Genres::all();
        
        return view('movies.edit', compact('movie', 'genres'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
            'negara' => 'required',
            'tahun' => 'required|integer',
            'rating' => 'required|numeric',
        ]);

        if($request->hasFile('poster')) {
            //Delete image name
            Storage::disk('public')->delete('asset/img' . $movie->poster);
            
            //set image name
            $extension = $request->file('poster')->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;

            //store to storange
            $request->file('poster')->storeAs('assets/img', $imageName, 'public');
            $validatedData['poster'] = $imageName;

        }
    
        $movie->update($validatedData);
    
        return redirect('/movies')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect('/movies')->with('success', 'Data berhasil dihapus');
    }
}
