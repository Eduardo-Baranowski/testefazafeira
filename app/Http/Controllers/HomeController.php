<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $produtos = \App\Classes\Produto::paginate(10);
        $produtos_usuarios = \App\Classes\ProdutoUsuario::all();
        return view('home', compact('produtos', 'produtos_usuarios'));
    }
}
