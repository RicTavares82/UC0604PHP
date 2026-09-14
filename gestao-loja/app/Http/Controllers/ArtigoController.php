<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    // Função 1: Mostra todos os artigos
    public function index()
    {
        $artigos = Artigo::all();
        return view('artigos.index', compact('artigos'));
    }

    // Função 2: Mostra a página do formulário para adicionar
    public function create()
    {
        return view('artigos.create');
    }

    // Função 3: Recebe os dados do formulário e guarda na base de dados
    public function store(Request $request)
    {
        Artigo::create($request->all());
        return redirect('/artigos');
    }

    // Função 5: Vai buscar o artigo à base de dados e mostra o formulário de edição
    public function edit(Artigo $artigo)
    {
        // O Laravel encontra automaticamente o artigo pelo ID e envia a informação para a vista
        return view('artigos.edit', compact('artigo'));
    }

    // Função 6: Recebe os dados atualizados do formulário e guarda as alterações
    public function update(Request $request, Artigo $artigo)
    {
        // Pega nos novos dados recebidos (nome, quantidade, preço) e atualiza o registo
        $artigo->update($request->all());

        // Após guardar, redireciona o utilizador de volta para a listagem geral
        return redirect('/artigos');
    }

    // Função 4: Apaga um artigo específico da base de dados
    public function destroy(Artigo $artigo)
    {
        $artigo->delete();
        return redirect('/artigos');
    }
}
