<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function reviews()
    {
        $reviews = Review::all();

       return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reviews = Review::all();
        return view('reviews.create', compact('reviews'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'movie' => 'required',
            'user' => 'required',
            'rating' => 'required|numeric',
            'comment' => 'required',
            'tanggal' => 'required',
        ]);

        Review::create($validatedData);

        return redirect('/reviews')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $validatedData = $request->validate([
            'movie' => 'required',
            'user' => 'required',
            'rating' => 'required|numeric',
            'comment' => 'required',
            'tanggal' => 'required',
        ]);
    
        $review->update($validatedData);
    
        return redirect('/reviews')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();

        return redirect('/reviews')->with('success', 'Data berhasil dihapus');
    }
}
