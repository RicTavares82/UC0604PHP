<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();
        //dd($genres);
        return view('generos.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('generos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar - Regras de Negocio
        //dd($request->all())
        $validated=$request->validate([
            'name'=>'required|min:3|max:100'
        ]);
        $genero=Genre::create($validated);
        return redirect()->route('genres.index')
            ->with('success',"O género {$genero->name} foi criado com sucesso, com o ID {$genero->id}!");

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        return view('generos.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        //dd($request->all());
        $validated=$request->validate([
            'name'=>'required|min:3|max:100'
        ]);
        $genre->update($validated);
        $genre->save();
        return redirect()->route('genres.index')
            ->with('success',"O género {$genre->name} foi atualizado com sucesso");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {

        $genre->delete();
        return redirect()->route('genres.index')
            ->with('success','Género Apagado com sucesso!')
            ->with('warning','Azar já não pode ser recuperado!');
    }
}
