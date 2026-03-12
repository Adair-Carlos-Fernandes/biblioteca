<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class livroController extends Controller
{
    public function index()
    {
        //dd('Seja bem vindo');
        $livros = livro::all();
        dd($livros);
        return view('livros.index',['livros'=>$livros]);
    }
}
