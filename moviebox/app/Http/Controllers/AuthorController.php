<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Movie;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $atores = Author::all();
        return view('atores.index',compact('atores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('atores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        $movie=Movie::find(1);
        //dd($movie->actors);
        //$movie->actors()->attach($author);

        //dd($author);
       // Movie::all();
        //dd($author->movies);

        return view('atores.show', compact('author','movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('atores.index', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }
}
